<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TbResultado Controller
 *
 * @property \App\Model\Table\TbResultadoTable $TbResultado
 */
class TbResultadoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tbResultado = $this->paginate($this->TbResultado);

        $this->set(compact('tbResultado'));
        $this->set('_serialize', ['tbResultado']);
    }

    /**
     * View method
     *
     * @param string|null $id Tb Resultado id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tbResultado = $this->TbResultado->get($id, [
            'contain' => []
        ]);

        $this->set('tbResultado', $tbResultado);
        $this->set('_serialize', ['tbResultado']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tbResultado = $this->TbResultado->newEntity();
        if ($this->request->is('post')) {
            $tbResultado = $this->TbResultado->patchEntity($tbResultado, $this->request->getData());
            if ($this->TbResultado->save($tbResultado)) {
                $this->Flash->success(__('The tb resultado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tb resultado could not be saved. Please, try again.'));
        }
        $this->set(compact('tbResultado'));
        $this->set('_serialize', ['tbResultado']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tb Resultado id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tbResultado = $this->TbResultado->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tbResultado = $this->TbResultado->patchEntity($tbResultado, $this->request->getData());
            if ($this->TbResultado->save($tbResultado)) {
                $this->Flash->success(__('The tb resultado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tb resultado could not be saved. Please, try again.'));
        }
        $this->set(compact('tbResultado'));
        $this->set('_serialize', ['tbResultado']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tb Resultado id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tbResultado = $this->TbResultado->get($id);
        if ($this->TbResultado->delete($tbResultado)) {
            $this->Flash->success(__('The tb resultado has been deleted.'));
        } else {
            $this->Flash->error(__('The tb resultado could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
