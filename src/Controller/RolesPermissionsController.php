<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CoGroupsCoPermissions Controller
 *
 * @property \App\Model\Table\CoGroupsCoPermissionsTable $CoGroupsCoPermissions
 * @method \App\Model\Entity\CoGroupsCoPermission[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CoGroupsCoPermissionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['CoGroups', 'CoPermissions'],
        ];
        $coGroupsCoPermissions = $this->paginate($this->CoGroupsCoPermissions);

        $this->set(compact('coGroupsCoPermissions'));
    }

    /**
     * View method
     *
     * @param string|null $id Co Groups Co Permission id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coGroupsCoPermission = $this->CoGroupsCoPermissions->get($id, [
            'contain' => ['CoGroups', 'CoPermissions'],
        ]);

        $this->set(compact('coGroupsCoPermission'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coGroupsCoPermission = $this->CoGroupsCoPermissions->newEmptyEntity();
        if ($this->request->is('post')) {
            $coGroupsCoPermission = $this->CoGroupsCoPermissions->patchEntity($coGroupsCoPermission, $this->request->getData());
            if ($this->CoGroupsCoPermissions->save($coGroupsCoPermission)) {
                $this->Flash->success(__('The co groups co permission has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The co groups co permission could not be saved. Please, try again.'));
        }
        $coGroups = $this->CoGroupsCoPermissions->CoGroups->find('list', ['limit' => 200]);
        $coPermissions = $this->CoGroupsCoPermissions->CoPermissions->find('list', ['limit' => 200]);
        $this->set(compact('coGroupsCoPermission', 'coGroups', 'coPermissions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Co Groups Co Permission id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coGroupsCoPermission = $this->CoGroupsCoPermissions->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coGroupsCoPermission = $this->CoGroupsCoPermissions->patchEntity($coGroupsCoPermission, $this->request->getData());
            if ($this->CoGroupsCoPermissions->save($coGroupsCoPermission)) {
                $this->Flash->success(__('The co groups co permission has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The co groups co permission could not be saved. Please, try again.'));
        }
        $coGroups = $this->CoGroupsCoPermissions->CoGroups->find('list', ['limit' => 200]);
        $coPermissions = $this->CoGroupsCoPermissions->CoPermissions->find('list', ['limit' => 200]);
        $this->set(compact('coGroupsCoPermission', 'coGroups', 'coPermissions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Co Groups Co Permission id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
    
        $coGroupsCoPermission = $this->CoGroupsCoPermissions->get($id);
        if ($this->CoGroupsCoPermissions->delete($coGroupsCoPermission)) {
            $this->Flash->success(__('The co groups co permission has been deleted.'));
        } else {
            $this->Flash->error(__('The co groups co permission could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
