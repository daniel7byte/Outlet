<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bolsa Controller
 *
 * @property \App\Model\Table\BolsaTable $Bolsa
 */
class BolsaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cupones', 'Usuarios']
        ];
        $bolsa = $this->paginate($this->Bolsa);

        $this->set(compact('bolsa'));
        $this->set('_serialize', ['bolsa']);
    }

    /**
     * View method
     *
     * @param string|null $id Bolsa id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bolsa = $this->Bolsa->get($id, [
            'contain' => ['Cupones', 'Usuarios']
        ]);

        $this->set('bolsa', $bolsa);
        $this->set('_serialize', ['bolsa']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bolsa = $this->Bolsa->newEntity();
        if ($this->request->is('post')) {
            $bolsa = $this->Bolsa->patchEntity($bolsa, $this->request->data);
            if ($this->Bolsa->save($bolsa)) {
                $this->Flash->success(__('The bolsa has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The bolsa could not be saved. Please, try again.'));
            }
        }
        $cupones = $this->Bolsa->Cupones->find('list', ['limit' => 200]);
        $usuarios = $this->Bolsa->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('bolsa', 'cupones', 'usuarios'));
        $this->set('_serialize', ['bolsa']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Bolsa id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bolsa = $this->Bolsa->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bolsa = $this->Bolsa->patchEntity($bolsa, $this->request->data);
            if ($this->Bolsa->save($bolsa)) {
                $this->Flash->success(__('The bolsa has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The bolsa could not be saved. Please, try again.'));
            }
        }
        $cupones = $this->Bolsa->Cupones->find('list', ['limit' => 200]);
        $usuarios = $this->Bolsa->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('bolsa', 'cupones', 'usuarios'));
        $this->set('_serialize', ['bolsa']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Bolsa id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bolsa = $this->Bolsa->get($id);
        if ($this->Bolsa->delete($bolsa)) {
            $this->Flash->success(__('The bolsa has been deleted.'));
        } else {
            $this->Flash->error(__('The bolsa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
