<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TbUsuarios Controller
 *
 * @property \App\Model\Table\TbUsuariosTable $TbUsuarios
 */
class TbUsuariosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['TbTiposUsuarios']
        ];
        $tbUsuarios = $this->paginate($this->TbUsuarios);

        $this->set(compact('tbUsuarios'));
        $this->set('_serialize', ['tbUsuarios']);
    }

    /**
     * View method
     *
     * @param string|null $id Tb Usuario id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tbUsuario = $this->TbUsuarios->get($id, [
            'contain' => ['TbTiposUsuarios']
        ]);

        $this->set('tbUsuario', $tbUsuario);
        $this->set('_serialize', ['tbUsuario']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tbUsuario = $this->TbUsuarios->newEntity();
        if ($this->request->is('post')) {
            $tbUsuario = $this->TbUsuarios->patchEntity($tbUsuario, $this->request->getData());
            if ($this->TbUsuarios->save($tbUsuario)) {
                $this->Flash->success(__('The tb usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tb usuario could not be saved. Please, try again.'));
        }
        $tbTiposUsuarios = $this->TbUsuarios->TbTiposUsuarios->find('list', ['limit' => 200]);
        $this->set(compact('tbUsuario', 'tbTiposUsuarios'));
        $this->set('_serialize', ['tbUsuario']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tb Usuario id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tbUsuario = $this->TbUsuarios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tbUsuario = $this->TbUsuarios->patchEntity($tbUsuario, $this->request->getData());
            if ($this->TbUsuarios->save($tbUsuario)) {
                $this->Flash->success(__('The tb usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tb usuario could not be saved. Please, try again.'));
        }
        $tbTiposUsuarios = $this->TbUsuarios->TbTiposUsuarios->find('list', ['limit' => 200]);
        $this->set(compact('tbUsuario', 'tbTiposUsuarios'));
        $this->set('_serialize', ['tbUsuario']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tb Usuario id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tbUsuario = $this->TbUsuarios->get($id);
        if ($this->TbUsuarios->delete($tbUsuario)) {
            $this->Flash->success(__('The tb usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The tb usuario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
