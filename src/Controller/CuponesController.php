<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cupones Controller
 *
 * @property \App\Model\Table\CuponesTable $Cupones
 */
class CuponesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sucursales']
        ];
        $cupones = $this->paginate($this->Cupones);

        $this->set(compact('cupones'));
        $this->set('_serialize', ['cupones']);
    }

    /**
     * View method
     *
     * @param string|null $id Cupone id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cupone = $this->Cupones->get($id, [
            'contain' => ['Sucursales']
        ]);

        $this->set('cupone', $cupone);
        $this->set('_serialize', ['cupone']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cupone = $this->Cupones->newEntity();
        if ($this->request->is('post')) {
            $cupone = $this->Cupones->patchEntity($cupone, $this->request->data);
            if ($this->Cupones->save($cupone)) {
                $this->Flash->success(__('The cupone has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cupone could not be saved. Please, try again.'));
            }
        }
        $sucursales = $this->Cupones->Sucursales->find('list', ['limit' => 200]);
        $this->set(compact('cupone', 'sucursales'));
        $this->set('_serialize', ['cupone']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cupone id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cupone = $this->Cupones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cupone = $this->Cupones->patchEntity($cupone, $this->request->data);
            if ($this->Cupones->save($cupone)) {
                $this->Flash->success(__('The cupone has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cupone could not be saved. Please, try again.'));
            }
        }
        $sucursales = $this->Cupones->Sucursales->find('list', ['limit' => 200]);
        $this->set(compact('cupone', 'sucursales'));
        $this->set('_serialize', ['cupone']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cupone id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cupone = $this->Cupones->get($id);
        if ($this->Cupones->delete($cupone)) {
            $this->Flash->success(__('The cupone has been deleted.'));
        } else {
            $this->Flash->error(__('The cupone could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
