<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TbValoresExamenes Controller
 *
 * @property \App\Model\Table\TbValoresExamenesTable $TbValoresExamenes
 */
class TbValoresExamenesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['TbExamenes']
        ];
        $tbValoresExamenes = $this->paginate($this->TbValoresExamenes);

        $this->set(compact('tbValoresExamenes'));
        $this->set('_serialize', ['tbValoresExamenes']);
    }

    /**
     * View method
     *
     * @param string|null $id Tb Valores Examene id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tbValoresExamene = $this->TbValoresExamenes->get($id, [
            'contain' => ['TbExamenes']
        ]);

        $this->set('tbValoresExamene', $tbValoresExamene);
        $this->set('_serialize', ['tbValoresExamene']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tbValoresExamene = $this->TbValoresExamenes->newEntity();
        if ($this->request->is('post')) {
            $tbValoresExamene = $this->TbValoresExamenes->patchEntity($tbValoresExamene, $this->request->getData());
            if ($this->TbValoresExamenes->save($tbValoresExamene)) {
                $this->Flash->success(__('The tb valores examene has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tb valores examene could not be saved. Please, try again.'));
        }
        $tbExamenes = $this->TbValoresExamenes->TbExamenes->find('list', ['limit' => 200]);
        $this->set(compact('tbValoresExamene', 'tbExamenes'));
        $this->set('_serialize', ['tbValoresExamene']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tb Valores Examene id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tbValoresExamene = $this->TbValoresExamenes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tbValoresExamene = $this->TbValoresExamenes->patchEntity($tbValoresExamene, $this->request->getData());
            if ($this->TbValoresExamenes->save($tbValoresExamene)) {
                $this->Flash->success(__('The tb valores examene has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tb valores examene could not be saved. Please, try again.'));
        }
        $tbExamenes = $this->TbValoresExamenes->TbExamenes->find('list', ['limit' => 200]);
        $this->set(compact('tbValoresExamene', 'tbExamenes'));
        $this->set('_serialize', ['tbValoresExamene']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tb Valores Examene id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tbValoresExamene = $this->TbValoresExamenes->get($id);
        if ($this->TbValoresExamenes->delete($tbValoresExamene)) {
            $this->Flash->success(__('The tb valores examene has been deleted.'));
        } else {
            $this->Flash->error(__('The tb valores examene could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
