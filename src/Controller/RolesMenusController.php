<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CoGroupsCoMenus Controller
 *
 * @property \App\Model\Table\CoGroupsCoMenusTable $CoGroupsCoMenus
 * @method \App\Model\Entity\CoGroupsCoMenu[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CoGroupsCoMenusController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['CoGroups', 'CoMenus'],
        ];
        $coGroupsCoMenus = $this->paginate($this->CoGroupsCoMenus);

        $this->set(compact('coGroupsCoMenus'));
    }

    /**
     * View method
     *
     * @param string|null $id Co Groups Co Menu id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coGroupsCoMenu = $this->CoGroupsCoMenus->get($id, [
            'contain' => ['CoGroups', 'CoMenus'],
        ]);

        $this->set(compact('coGroupsCoMenu'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coGroupsCoMenu = $this->CoGroupsCoMenus->newEmptyEntity();
        if ($this->request->is('post')) {
            $coGroupsCoMenu = $this->CoGroupsCoMenus->patchEntity($coGroupsCoMenu, $this->request->getData());
            if ($this->CoGroupsCoMenus->save($coGroupsCoMenu)) {
                $this->Flash->success(__('The co groups co menu has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The co groups co menu could not be saved. Please, try again.'));
        }
        $coGroups = $this->CoGroupsCoMenus->CoGroups->find('list', ['limit' => 200]);
        $coMenus = $this->CoGroupsCoMenus->CoMenus->find('list', ['limit' => 200]);
        $this->set(compact('coGroupsCoMenu', 'coGroups', 'coMenus'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Co Groups Co Menu id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coGroupsCoMenu = $this->CoGroupsCoMenus->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coGroupsCoMenu = $this->CoGroupsCoMenus->patchEntity($coGroupsCoMenu, $this->request->getData());
            if ($this->CoGroupsCoMenus->save($coGroupsCoMenu)) {
                $this->Flash->success(__('The co groups co menu has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The co groups co menu could not be saved. Please, try again.'));
        }
        $coGroups = $this->CoGroupsCoMenus->CoGroups->find('list', ['limit' => 200]);
        $coMenus = $this->CoGroupsCoMenus->CoMenus->find('list', ['limit' => 200]);
        $this->set(compact('coGroupsCoMenu', 'coGroups', 'coMenus'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Co Groups Co Menu id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coGroupsCoMenu = $this->CoGroupsCoMenus->get($id);
        if ($this->CoGroupsCoMenus->delete($coGroupsCoMenu)) {
            $this->Flash->success(__('The co groups co menu has been deleted.'));
        } else {
            $this->Flash->error(__('The co groups co menu could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
