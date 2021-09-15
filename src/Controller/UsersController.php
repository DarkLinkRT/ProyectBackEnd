<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */

    public function initialize() :void {
        parent::initialize();
    }

    public function index()
    {
        $this->paginate = [
            'conditions' => ['Users.active' => 1,'Users.deleted' => 0 ],
            'contain' => ['Roles'],
            'order' => ['Users.name' => 'DESC']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    public function inactives()
    {
        $this->paginate = [
            'conditions' => ['Users.active'=>0,'Users.deleted' =>0 ],
            'contain' => ['Roles'],
            'order' => ['Users.name' => 'ASC']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {

        $this->paginate = [
            'conditions' => ['Users.active' => 1,'Users.deleted' => 0 ],
            'contain' => ['Roles'],
            'order' => ['Users.name' => 'DESC']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('El Usuario ha sido guardado con éxito.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El Usuario no pudo ser guardado. Por favor, intente de nuevo.'));
        }
        $Roles = $this->Users->Roles->find('all',['conditions'=>['active'=>1,'deleted'=>0],'order'=>['name' => 'ASC']]);
        $this->set(compact('user', 'Roles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [] 
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('El Usuario ha sido guardado con éxito.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El Usuario no pudo ser guardado. Por favor, intente de nuevo.'));
        }
        $Roles = $this->Users->Roles->find('all',['conditions'=>['active'=>1,'deleted'=>0],'order'=>['name' => 'ASC']]);
        $this->set(compact('user', 'Roles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $user = $this->Users->get($id);
        $user->deleted = 1;
        if ($this->Users->save($user)) {
            $this->Flash->success(__('El Usuario ha sido eliminado con éxito.'));
        } else {
            $this->Flash->error(__('El Usuario no pudo ser eliminado. Por favor, intente de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login()
    {
        $this->viewBuilder()->setLayout('login');
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $user['role'] = $this->Users->Roles->get($user['role_id']);
                $this->Auth->setUser($user);    
                //Redireccioar a la pagina de logueo
                // return $this->redirect(
                //     ['controller' => $user['co_grupo']['pagina_inicial'] , 'action' => 'index']
                // );
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Nombre de usuario o contraseña incorrectas.');
        }
    }
    
    public function logout()
    {
        $this->request->getSession()->destroy();
        return $this->redirect($this->Auth->logout());
    }

    public function settheme()
    {
        $id = $this->request->getSession()->read('Auth.User.id');
        $user = $this->Users->get($id);
        $user->theme = $this->request->getQuery("theme");
        $this->request->getSession()->write('Auth.User.theme',$this->request->getQuery("theme"));
        if($this->Users->save($user)){
            return $this->response->withType("application/json")->withStringBody(json_encode(1));
        } else{
            return $this->response->withType("application/json")->withStringBody(json_encode(0));
        }
    }

}
