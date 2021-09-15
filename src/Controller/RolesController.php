<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Roles Controller
 *
 * @property \App\Model\Table\RolesTable $Roles
 * @method \App\Model\Entity\CoGroup[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RolesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $roles = $this->paginate($this->Roles->find('all',['conditions'=>['active'=>1,'deleted'=>0],'order' => ['name'=>'ASC']]));

        $this->set(compact('roles'));
    }

    public function inactives(){
        $roles = $this->paginate($this->Roles->find('all',['conditions'=>['active'=>0,'deleted'=>0],'order' => ['name'=>'ASC']]));

        $this->set(compact('roles'));
    }

    /**
     * View method
     *
     * @param string|null $id Co Group id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $roles = $this->Roles->get($id, [
            'contain' => ['Menus', 'Permissions', 'Users'],
        ]);

        $this->set(compact('roles'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $role = $this->Roles->newEmptyEntity();
        if ($this->request->is('post')) {
            $role = $this->Roles->patchEntity($role, $this->request->getData());
            if ($this->Roles->save($role)) {
                $this->Flash->success(__('El Rol ha sido guardado con éxito.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El Rol no pudo ser guardado. Por favor, intente de nuevo'));
        }
        $menus = $this->Roles->Menus->find('all', ['conditions'=>['active'=>1,'deleted'=>0],'order' => ['name'=>'ASC']]);
        $permissions = $this->Roles->Permissions->find('all', ['conditions'=>['active'=>1,'deleted'=>0],'order' => ['name'=>'ASC']]);
        $this->set(compact('role', 'menus', 'permissions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Co Group id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $role = $this->Roles->get($id, [
            'contain' => ['Menus', 'Permissions'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $role = $this->Roles->patchEntity($role, $this->request->getData());
            if ($this->Roles->save($role)) {
                $this->Flash->success(__('El Rol ha sido guardado con éxito.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El Rol no pudo ser guardado. Por favor, intente de nuevo'));
        }
        $menus = $this->Roles->Menus->find('all', ['conditions'=>['active'=>1,'deleted'=>0] ,'order' => ['name'=>'ASC']]);
        $permissions = $this->Roles->Permissions->find('all', ['conditions'=>['active'=>1,'deleted'=>0],'order' => ['name'=>'ASC']]);
        $this->set(compact('role', 'menus', 'permissions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Co Group id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coGroup = $this->Roles->get($id);
        $coGroup->deleted = 1;
        if ($this->Roles->save($coGroup)) {
            $this->Flash->success(__('El Rol ha sido eliminado con éxito.'));
        } else {
            $this->Flash->error(__('El Rol no se pudo eliminar. Por favor, intente de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
