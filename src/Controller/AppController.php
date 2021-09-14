<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Mailer\Email;
use Ldap\Auth\LdapAuthenticate;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Core\Configure;
use Cake\Utility\Text;
use DateTime;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler',['enableBeforeRedirect'=>false]);
        $this->loadComponent('Flash');

        parent::initialize();
        ini_set('max_execution_time', "600"); //300 seconds = 5 minutes
        ini_set('memory_limit', '2048M');
    
        date_default_timezone_set('America/Bogota');
        $this->loadComponent('Auth', [
            'authError'    => 'Primero debes iniciar sesión.',
            'authenticate' => [
                'Form' => [
                    'userModel'=>'Users',
                    'fields' => [
                        'username' => 'user',
                        'password' => 'password'
                    ]
                ]
            ], 
            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
           
             //use isAuthorized in Controllers
            'authorize' => ['Controller'],
             // If unauthorized, return them to page they were just on
            'unauthorizedRedirect' => $this->referer(),

            'storage' => 'Session'
        ]);
        if($this->Auth->user()){
            $this->_getMenuBD(); 
            $this->getUserData();
            $this->_setTheme();
        }
        $IndexPage = "/Dashboard/index/";
        $this->set(compact('IndexPage'));
    }

    public function getUserData(){
        $userData = [];
        $userData["fullname"] = $this->request->getSession()->read('Auth.User.name') . " " . $this->request->getSession()->read('Auth.User.last_name') . " " . $this->request->getSession()->read('Auth.User.mother_last_name');
        $userData["name_and_lastname"] =  $this->request->getSession()->read('Auth.User.name') . " " . $this->request->getSession()->read('Auth.User.last_name');
        $userData["name"] =  $this->request->getSession()->read('Auth.User.name');
        $userData["lastname"] =  $this->request->getSession()->read('Auth.User.last_name');
        $userData["user"] =  $this->request->getSession()->read('Auth.User.user');
        $userData["roleUser"] =  $this->request->getSession()->read('Auth.User.role_id.name');
        $userData["id"] =  $this->request->getSession()->read('Auth.User.id');
        $userData["hasPic"] = false;
        // Verify if the user has an pic profile
        if( is_file( WWW_ROOT . 'files' . DS . 'userfiles' . DS .  $userData["id"] . DS . 'picture' . DS . 'pic.jpg') ){
            $userData["hasPic"] = true;
        }
        //End verify
        $this->set(compact('userData'));
    }

    public function _setTheme(){
        $theme = $this->request->getSession()->read('Auth.User.theme');
        $this->set(compact('theme'));
    }

    public function _getMenuBD()
    {
        $menusDB = [];
        $this->loadModel('Menus');
        $coGroupID = $this->request->getSession()->read('Auth.User.role_id');
        $menusDB = $this->Menus->find
                            (
                                'all',
                                [
                                    'conditions'=>
                                        [
                                            'Menus.active'=>1,
                                            'Menus.deleted' => 0,
                                            'Menus.menu_id is null',
                                            'Menus.id IN (SELECT menu_id FROM roles_menus WHERE roles_menus.role_id = "'.$this->request->getSession()->read('Auth.User.role_id').'")'
                                        ],
                                    'order'=>'Menus.position ASC'
                                ]
                            )
                            ->contain(
                                'ChildrenMenus',
                                function($q) use ($coGroupID)
                                {
                                    return $q->order(['ChildrenMenus.position ASC'])->where(['ChildrenMenus.active'=>1,'ChildrenMenus.deleted'=>0,'ChildrenMenus.id IN (SELECT menu_id FROM roles_menus WHERE roles_menus.role_id = "'.$coGroupID.'")']);
                                }
                            )->toArray();
        $this->request->getSession()->write('menusDB',$menusDB);
        $this->set(compact('menusDB'));
    }

    public function isAuthorized($user)
    {
        if(!$this->request->getSession()->check('permissions'))
        {
            $this->_getPermisosBD();
        }
        $permissions = $this->request->getSession()->read('permissions');
        $extras =
                    [
                        ['Permissions'=>['controller'=>'Users','action'=>'logout']],
                        ['Permissions'=>['controller'=>'Users','action'=>'login']],
                    ];
        $permissions = array_merge($extras,$permissions);
        foreach($permissions as $permission)
        {
            if($permission['Permissions']['controller'] == '*' && $permission['Permissions']['action'] == '*')
            {
                return true;
            }
            if($permission['Permissions']['controller'] == $this->request->getParam('controller') && $permission['Permissions']['action'] == '*')
            {
                return true;
            }
            if($permission['Permissions']['controller'] == $this->request->getParam('controller') && $permission['Permissions']['action'] == $this->request->getParam('action'))
            {
                return true;
            }
        }
        return true;
    }

    public function _getPermisosBD()
    {
        $tmp = array();
        $i = 0;
        if($this->request->getSession()->check('Auth.User.role_id'))
        {
            $Permissions = TableRegistry::get('Permissions');
            $permissions = $Permissions->find('all',['conditions'=>['Permissions.id IN (SELECT permission_id FROM roles_permissions WHERE roles_permissions.role_id = "'.$this->Auth->user('role_id').'")'],'fields'=>['Permissions.id','Permissions.controller','Permissions.action']]);

            foreach($permissions as $permission)
            {
                $tmp[$i]['Permissions']['id'] = $permission->id;
                $tmp[$i]['Permissions']['controller'] = $permission->controller;
                $tmp[$i]['Permissions']['action'] = $permission->action;
                $i++;
            }
        }
        $this->request->getSession()->write('permissions',$tmp);
    }
}
