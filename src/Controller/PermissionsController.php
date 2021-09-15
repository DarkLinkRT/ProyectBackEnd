<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Permissions Controller
 *
 * @property \App\Model\Table\PermissionsTable $Permissions
 * @method \App\Model\Entity\Permission[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PermissionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $permissions = $this->paginate($this->Permissions->find('all',['conditions'=>['active'=>1,'deleted'=>0]]));

        $this->set(compact('permissions'));
    }

    public function inactives()
    {
        $permissions = $this->paginate($this->Permissions->find('all',['conditions'=>['active'=>0,'deleted'=>0]]));

        $this->set(compact('permissions'));
    }

    /**
     * View method
     *
     * @param string|null $id Co Permission id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $permission = $this->Permissions->get($id, [
            'contain' => ['Roles']
        ]);

        $this->set(compact('permission'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $permission = $this->Permissions->newEmptyEntity();
        if ($this->request->is('post')) {
            $permission = $this->Permissions->patchEntity($permission, $this->request->getData());
            if ($this->Permissions->save($permission)) {
                $this->Flash->success(__('El Permiso ha sido guardado con éxito.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El Permiso no pudo ser guardado. Por favor, intente de nuevo.'));
        }
        $roles = $this->Permissions->Roles->find('all', ['conditions' => ['active' => 1 , 'deleted' => 0]]);
        $this->set(compact('permission', 'roles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Co Permission id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $permission = $this->Permissions->get($id, [
            'contain' => ['Roles'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $permission = $this->Permissions->patchEntity($permission, $this->request->getData());
            if ($this->Permissions->save($permission)) {
                $this->Flash->success(__('El Permiso ha sido guardado con éxito.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El Permiso no pudo ser guardado. Por favor, intente de nuevo.'));
        }
        $roles = $this->Permissions->Roles->find('all', ['conditions' => ['active' => 1 , 'deleted' => 0]]);
        $this->set(compact('permission', 'roles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Co Permission id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
    
        $Permission = $this->Permissions->get($id);
        $Permission->deleted = 1;
        if ($this->Permissions->save($Permission)) {
            $this->Flash->success(__('El Permiso ha sido eliminado con éxito'));
        } else {
            $this->Flash->error(__('El Permiso no pudo ser eliminado. Por favor, intente de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
