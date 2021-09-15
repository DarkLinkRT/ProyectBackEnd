<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Menus Controller
 *
 * @property \App\Model\Table\MenusTable $Menus
 * @method \App\Model\Entity\Menu[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MenusController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $menus = $this->paginate($this->Menus->find('all',['conditions'=>['active'=>1,'deleted'=>0]]));

        $this->set(compact('menus'));
    }

    /**
     * Inactive method
    */
    public function inactives(){
        $menus = $this->paginate($this->Menus->find('all',['conditions'=>['active'=>0,'deleted'=>0]]));

        $this->set(compact('menus'));
    }

    /**
     * View method
     *
     * @param string|null $id Co Menu id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $menu = $this->Menus->get($id, [
            'contain' => ['Roles', 'Menus'],
        ]);

        $this->set(compact('menu'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $menu = $this->Menus->newEmptyEntity();
        if ($this->request->is('post')) {
            $menu = $this->Menus->patchEntity($menu, $this->request->getData());
            if ($this->Menus->save($menu)) {
                $this->Flash->success(__('El Menú ha sido guardado con éxito.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El Menú no pudo ser guardado. Porfavor, intente de nuevo.'));
        }
        $roles = $this->Menus->Roles->find('all',['conditions'=>['active'=>1,'deleted'=>0]]);
        $menus = $this->Menus->find('all',['conditions'=>['active'=>1,'menu_id is null','deleted'=>0]]);
        $this->set(compact('menu', 'roles','menus'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Co Menu id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $menu = $this->Menus->get($id, [
            'contain' => ['Roles'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $menu = $this->Menus->patchEntity($menu, $this->request->getData());
            if ($this->Menus->save($menu)) {
                $this->Flash->success(__('El Menú ha sido guardado con éxito.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El Menú no pudo ser guardado. Porfavor, intente de nuevo.'));
        }
        $roles = $this->Menus->Roles->find('all',['conditions'=>['active'=>1,'deleted'=>0]]);
        $menus = $this->Menus->find('all',['conditions'=>['active'=>1,'menu_id is null','deleted'=>0]]);
        $this->set(compact('menu', 'roles','menus'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Co Menu id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $Menu = $this->Menus->get($id);
        $Menu->deleted = 1;
        if ($this->Menus->save($Menu)) {
            $this->Flash->success(__('El Menú ha sido eliminado con éxito.'));
        } else {
            $this->Flash->error(__('El Menú no se pudo eliminar. Porfavor, intente de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
