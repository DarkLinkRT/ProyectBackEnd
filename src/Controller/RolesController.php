<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CoGroups Controller
 *
 * @property \App\Model\Table\CoGroupsTable $CoGroups
 * @method \App\Model\Entity\CoGroup[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CoGroupsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $coGroups = $this->paginate($this->CoGroups);

        $this->set(compact('coGroups'));
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
        $coGroup = $this->CoGroups->get($id, [
            'contain' => ['CoMenus', 'CoPermissions', 'Users'],
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
        $coGroup = $this->CoGroups->newEmptyEntity();
        if ($this->request->is('post')) {
            $coGroup = $this->CoGroups->patchEntity($coGroup, $this->request->getData());
            if ($this->CoGroups->save($coGroup)) {
                $this->Flash->success(__('The co group has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The co group could not be saved. Please, try again.'));
        }
        $coMenus = $this->CoGroups->CoMenus->find('list', ['limit' => 200]);
        $coPermissions = $this->CoGroups->CoPermissions->find('list', ['limit' => 200]);
        $this->set(compact('coGroup', 'coMenus', 'coPermissions'));
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
        $coGroup = $this->CoGroups->get($id, [
            'contain' => ['CoMenus', 'CoPermissions'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coGroup = $this->CoGroups->patchEntity($coGroup, $this->request->getData());
            if ($this->CoGroups->save($coGroup)) {
                $this->Flash->success(__('The co group has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The co group could not be saved. Please, try again.'));
        }
        $coMenus = $this->CoGroups->CoMenus->find('list', ['limit' => 200]);
        $coPermissions = $this->CoGroups->CoPermissions->find('list', ['limit' => 200]);
        $this->set(compact('coGroup', 'coMenus', 'coPermissions'));
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
        $coGroup = $this->CoGroups->get($id);
        if ($this->CoGroups->delete($coGroup)) {
            $this->Flash->success(__('The co group has been deleted.'));
        } else {
            $this->Flash->error(__('The co group could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
