<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TbReglas Controller
 *
 * @property \App\Model\Table\TbReglasTable $TbReglas
 */
class TbReglasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['TbTiposExamenes']
        ];
        $tbReglas = $this->paginate($this->TbReglas);

        $this->set(compact('tbReglas'));
        $this->set('_serialize', ['tbReglas']);
    }

    /**
     * View method
     *
     * @param string|null $id Tb Regla id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tbRegla = $this->TbReglas->get($id, [
            'contain' => ['TbTiposExamenes']
        ]);

        $this->set('tbRegla', $tbRegla);
        $this->set('_serialize', ['tbRegla']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tbRegla = $this->TbReglas->newEntity();
        if ($this->request->is('post')) {
            $tbRegla = $this->TbReglas->patchEntity($tbRegla, $this->request->getData());
            if ($this->TbReglas->save($tbRegla)) {
                $this->Flash->success(__('The tb regla has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tb regla could not be saved. Please, try again.'));
        }
        $tbTiposExamenes = $this->TbReglas->TbTiposExamenes->find('list', ['limit' => 200]);
        $this->set(compact('tbRegla', 'tbTiposExamenes'));
        $this->set('_serialize', ['tbRegla']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tb Regla id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tbRegla = $this->TbReglas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tbRegla = $this->TbReglas->patchEntity($tbRegla, $this->request->getData());
            if ($this->TbReglas->save($tbRegla)) {
                $this->Flash->success(__('The tb regla has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tb regla could not be saved. Please, try again.'));
        }
        $tbTiposExamenes = $this->TbReglas->TbTiposExamenes->find('list', ['limit' => 200]);
        $this->set(compact('tbRegla', 'tbTiposExamenes'));
        $this->set('_serialize', ['tbRegla']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tb Regla id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tbRegla = $this->TbReglas->get($id);
        if ($this->TbReglas->delete($tbRegla)) {
            $this->Flash->success(__('The tb regla has been deleted.'));
        } else {
            $this->Flash->error(__('The tb regla could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
