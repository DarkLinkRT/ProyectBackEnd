<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Posts Controller
 *
 * @property \App\Model\Table\PostsTable $Posts
 * @method \App\Model\Entity\Post[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PostsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $posts = $this->paginate($this->Posts);

        $this->set(compact('posts'));
    }

    public function getNews(){
        $this->request->allowMethod(['get']);
        $this->viewBuilder()->setLayout("ajax");
        $posts = $this->Posts->find('all',
            [
                'contain' => ['Users' => ['conditions' => ['Posts.active' => 1 , 'Posts.deleted' => 0]]],
                'order' => ['Posts.created' => 'DESC']
            ]
        );
        return $this->response->withType("application/json")->withStringBody(json_encode($posts));

    }

    public function getNewsByUser(){
        $this->request->allowMethod(['get']);
        $this->viewBuilder()->setLayout("ajax");
        $posts = $this->Posts->find('all',
            [
                'contain' => ['Users' => ['conditions' => ['Users.id' =>  $this->request->getSession()->read('Auth.User.id') , 'Posts.active' => 1 , 'Posts.deleted' => 0]]],
                'order' => ['Posts.created' => 'DESC']
            ]
        );
        return $this->response->withType("application/json")->withStringBody(json_encode($posts));

    }

    /**
     * View method
     *
     * @param string|null $id Post id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    // public function view($id = null)
    // {
    //     $post = $this->Posts->get($id, [
    //         'contain' => ['Users'],
    //     ]);

    //     $this->set(compact('post'));
    // }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $post = $this->Posts->newEmptyEntity();
        if ($this->request->is('post')) {
            $post = $this->Posts->patchEntity($post, $this->request->getData());
            $post->user_id = $this->request->getSession()->read('Auth.User.id');
            if ($this->Posts->save($post)) {
                $this->Flash->success(__('La publicaci??n se public??.'));

                return $this->redirect([ 'controller' => 'Dashboard' , 'action' => 'index']);
            }
            $this->Flash->error(__('No se pudo agregar la publicaci??n, intente de nuevo.'));
        }
        $users = $this->Posts->Users->find('list', ['limit' => 200]);
        $this->set(compact('post', 'users'));
    }

    public function new(){
        $this->request->allowMethod(['post']);
        $this->viewBuilder()->setLayout("ajax");
        $post = $this->Posts->newEmptyEntity();
        $post->user_id = $this->request->getSession()->read('Auth.User.id');
        if ($this->request->is('post')) {
            $post = $this->Posts->patchEntity($post, $this->request->getData());
            if ($this->Posts->save($post)) {
                return $this->response->withType("application/json")->withStringBody(json_encode(1));
            }
        }
        return $this->response->withType("application/json")->withStringBody(json_encode(0));
    }

    /**
     * Edit method
     *
     * @param string|null $id Post id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->request->allowMethod(['put']);
        $this->viewBuilder()->setLayout("ajax");
        $post = $this->Posts->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is('put')) {
            $post = $this->Posts->patchEntity($post, $this->request->getData());
            if ($this->Posts->save($post)) {
                return $this->response->withType("application/json")->withStringBody(json_encode(1));
            }
        }
        return $this->response->withType("application/json")->withStringBody(json_encode(0));
    }

    /**
     * Delete method
     *
     * @param string|null $id Post id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['delete']);
        $post = $this->Posts->get($id);
        $post->deleted = 1;
        $post->active = 0;
        if ($this->Posts->save($post)) {
            return $this->response->withType("application/json")->withStringBody(json_encode(1));
        } else {
            return $this->response->withType("application/json")->withStringBody(json_encode(0));
        }

        return $this->response->withType("application/json")->withStringBody(json_encode(0));
    }
}
