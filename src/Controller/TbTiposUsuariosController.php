<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TbTiposUsuarios Controller
 *
 * @property \App\Model\Table\TbTiposUsuariosTable $TbTiposUsuarios
 */
class TbTiposUsuariosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tbTiposUsuarios = $this->paginate($this->TbTiposUsuarios);

        $this->set(compact('tbTiposUsuarios'));
        $this->set('_serialize', ['tbTiposUsuarios']);
    }

    /**
     * View method
     *
     * @param string|null $id Tb Tipos Usuario id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tbTiposUsuario = $this->TbTiposUsuarios->get($id, [
            'contain' => []
        ]);

        $this->set('tbTiposUsuario', $tbTiposUsuario);
        $this->set('_serialize', ['tbTiposUsuario']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tbTiposUsuario = $this->TbTiposUsuarios->newEntity();
        if ($this->request->is('post')) {
            $tbTiposUsuario = $this->TbTiposUsuarios->patchEntity($tbTiposUsuario, $this->request->getData());
            if ($this->TbTiposUsuarios->save($tbTiposUsuario)) {
                $this->Flash->success(__('The tb tipos usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tb tipos usuario could not be saved. Please, try again.'));
        }
        $this->set(compact('tbTiposUsuario'));
        $this->set('_serialize', ['tbTiposUsuario']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tb Tipos Usuario id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tbTiposUsuario = $this->TbTiposUsuarios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tbTiposUsuario = $this->TbTiposUsuarios->patchEntity($tbTiposUsuario, $this->request->getData());
            if ($this->TbTiposUsuarios->save($tbTiposUsuario)) {
                $this->Flash->success(__('The tb tipos usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tb tipos usuario could not be saved. Please, try again.'));
        }
        $this->set(compact('tbTiposUsuario'));
        $this->set('_serialize', ['tbTiposUsuario']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tb Tipos Usuario id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tbTiposUsuario = $this->TbTiposUsuarios->get($id);
        if ($this->TbTiposUsuarios->delete($tbTiposUsuario)) {
            $this->Flash->success(__('The tb tipos usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The tb tipos usuario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
