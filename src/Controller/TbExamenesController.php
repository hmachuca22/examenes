<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TbExamenes Controller
 *
 * @property \App\Model\Table\TbExamenesTable $TbExamenes
 */
class TbExamenesController extends AppController
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
        $tbExamenes = $this->paginate($this->TbExamenes);

        $this->set(compact('tbExamenes'));
        $this->set('_serialize', ['tbExamenes']);
    }

    /**
     * View method
     *
     * @param string|null $id Tb Examene id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tbExamene = $this->TbExamenes->get($id, [
            'contain' => ['TbTiposExamenes']
        ]);

        $this->set('tbExamene', $tbExamene);
        $this->set('_serialize', ['tbExamene']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tbExamene = $this->TbExamenes->newEntity();
        if ($this->request->is('post')) {
            $tbExamene = $this->TbExamenes->patchEntity($tbExamene, $this->request->getData());
            if ($this->TbExamenes->save($tbExamene)) {
                $this->Flash->success(__('The tb examene has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tb examene could not be saved. Please, try again.'));
        }
        $tbTiposExamenes = $this->TbExamenes->TbTiposExamenes->find('list', ['limit' => 200]);
        $this->set(compact('tbExamene', 'tbTiposExamenes'));
        $this->set('_serialize', ['tbExamene']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tb Examene id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tbExamene = $this->TbExamenes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tbExamene = $this->TbExamenes->patchEntity($tbExamene, $this->request->getData());
            if ($this->TbExamenes->save($tbExamene)) {
                $this->Flash->success(__('The tb examene has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tb examene could not be saved. Please, try again.'));
        }
        $tbTiposExamenes = $this->TbExamenes->TbTiposExamenes->find('list', ['limit' => 200]);
        $this->set(compact('tbExamene', 'tbTiposExamenes'));
        $this->set('_serialize', ['tbExamene']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tb Examene id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tbExamene = $this->TbExamenes->get($id);
        if ($this->TbExamenes->delete($tbExamene)) {
            $this->Flash->success(__('The tb examene has been deleted.'));
        } else {
            $this->Flash->error(__('The tb examene could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
