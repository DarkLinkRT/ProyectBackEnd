<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CoPermissions Controller
 *
 * @property \App\Model\Table\CoPermissionsTable $CoPermissions
 * @method \App\Model\Entity\CoPermission[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CoPermissionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $coPermissions = $this->paginate($this->CoPermissions);

        $this->set(compact('coPermissions'));
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
        $coPermission = $this->CoPermissions->get($id, [
            'contain' => ['CoGroups'],
        ]);

        $this->set(compact('coPermission'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coPermission = $this->CoPermissions->newEmptyEntity();
        if ($this->request->is('post')) {
            $coPermission = $this->CoPermissions->patchEntity($coPermission, $this->request->getData());
            if ($this->CoPermissions->save($coPermission)) {
                $this->Flash->success(__('The co permission has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The co permission could not be saved. Please, try again.'));
        }
        $coGroups = $this->CoPermissions->CoGroups->find('list', ['limit' => 200]);
        $this->set(compact('coPermission', 'coGroups'));
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
        $coPermission = $this->CoPermissions->get($id, [
            'contain' => ['CoGroups'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coPermission = $this->CoPermissions->patchEntity($coPermission, $this->request->getData());
            if ($this->CoPermissions->save($coPermission)) {
                $this->Flash->success(__('The co permission has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The co permission could not be saved. Please, try again.'));
        }
        $coGroups = $this->CoPermissions->CoGroups->find('list', ['limit' => 200]);
        $this->set(compact('coPermission', 'coGroups'));
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
        $this->request->allowMethod(['post', 'delete']);
        $coPermission = $this->CoPermissions->get($id);
        if ($this->CoPermissions->delete($coPermission)) {
            $this->Flash->success(__('The co permission has been deleted.'));
        } else {
            $this->Flash->error(__('The co permission could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
