<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TbTiposExamenes Controller
 *
 * @property \App\Model\Table\TbTiposExamenesTable $TbTiposExamenes
 */
class TbTiposExamenesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tbTiposExamenes = $this->paginate($this->TbTiposExamenes);

        $this->set(compact('tbTiposExamenes'));
        $this->set('_serialize', ['tbTiposExamenes']);
    }

    /**
     * View method
     *
     * @param string|null $id Tb Tipos Examene id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tbTiposExamene = $this->TbTiposExamenes->get($id, [
            'contain' => []
        ]);

        $this->set('tbTiposExamene', $tbTiposExamene);
        $this->set('_serialize', ['tbTiposExamene']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tbTiposExamene = $this->TbTiposExamenes->newEntity();
        if ($this->request->is('post')) {
            $tbTiposExamene = $this->TbTiposExamenes->patchEntity($tbTiposExamene, $this->request->getData());
            if ($this->TbTiposExamenes->save($tbTiposExamene)) {
                $this->Flash->success(__('The tb tipos examene has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tb tipos examene could not be saved. Please, try again.'));
        }
        $this->set(compact('tbTiposExamene'));
        $this->set('_serialize', ['tbTiposExamene']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tb Tipos Examene id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tbTiposExamene = $this->TbTiposExamenes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tbTiposExamene = $this->TbTiposExamenes->patchEntity($tbTiposExamene, $this->request->getData());
            if ($this->TbTiposExamenes->save($tbTiposExamene)) {
                $this->Flash->success(__('The tb tipos examene has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tb tipos examene could not be saved. Please, try again.'));
        }
        $this->set(compact('tbTiposExamene'));
        $this->set('_serialize', ['tbTiposExamene']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tb Tipos Examene id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tbTiposExamene = $this->TbTiposExamenes->get($id);
        if ($this->TbTiposExamenes->delete($tbTiposExamene)) {
            $this->Flash->success(__('The tb tipos examene has been deleted.'));
        } else {
            $this->Flash->error(__('The tb tipos examene could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
