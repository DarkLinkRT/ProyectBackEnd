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
        $Roles = $this->paginate($this->Roles->find('all',['conditions'=>['active'=>1,'deleted'=>0],'order' => ['name'=>'ASC']]));

        $this->set(compact('Roles'));
    }

    public function inactives(){
        $Roles = $this->paginate($this->Roles->find('all',['conditions'=>['active'=>0,'deleted'=>0],'order' => ['name'=>'ASC']]));

        $this->set(compact('Roles'));
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
        $coGroup = $this->Roles->get($id, [
            'contain' => ['Menus', 'Permissions', 'Users'],
        ]);

        $this->set(compact('coGroup'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coGroup = $this->Roles->newEmptyEntity();
        if ($this->request->is('post')) {
            $coGroup = $this->Roles->patchEntity($coGroup, $this->request->getData());
            if ($this->Roles->save($coGroup)) {
                $this->Flash->success(__('El Rol ha sido guardado con éxito.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El Rol no pudo ser guardado. Por favor, intente de nuevo'));
        }
        $Menus = $this->Roles->Menus->find('all', ['conditions'=>['active'=>1,'deleted'=>0],'order' => ['name'=>'ASC']]);
        $Permissions = $this->Roles->Permissions->find('all', ['conditions'=>['active'=>1,'deleted'=>0],'order' => ['name'=>'ASC']]);
        $this->set(compact('coGroup', 'Menus', 'Permissions'));
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
        $coGroup = $this->Roles->get($id, [
            'contain' => ['Menus', 'Permissions'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coGroup = $this->Roles->patchEntity($coGroup, $this->request->getData());
            if ($this->Roles->save($coGroup)) {
                $this->Flash->success(__('El Rol ha sido guardado con éxito.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El Rol no pudo ser guardado. Por favor, intente de nuevo'));
        }
        $Menus = $this->Roles->Menus->find('all', ['conditions'=>['active'=>1,'deleted'=>0] ,'order' => ['name'=>'ASC']]);
        $Permissions = $this->Roles->Permissions->find('all', ['conditions'=>['active'=>1,'deleted'=>0],'order' => ['name'=>'ASC']]);
        $this->set(compact('coGroup', 'Menus', 'Permissions'));
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
