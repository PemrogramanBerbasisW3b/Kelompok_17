<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Mahasiswa Controller
 *
 * @property \App\Model\Table\MahasiswaTable $Mahasiswa
 * @method \App\Model\Entity\Mahasiswa[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MahasiswaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $mahasiswa = $this->paginate($this->Mahasiswa);

        $this->set(compact('mahasiswa'));
    }

    /**
     * View method
     *
     * @param string|null $id Mahasiswa id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mahasiswa = $this->Mahasiswa->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('mahasiswa'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mahasiswa = $this->Mahasiswa->newEmptyEntity();
        if ($this->request->is('post')) {
            $mahasiswa = $this->Mahasiswa->patchEntity($mahasiswa, $this->request->getData());
            if ($this->Mahasiswa->save($mahasiswa)) {
                $this->Flash->success(__('The mahasiswa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mahasiswa could not be saved. Please, try again.'));
        }
        $this->set(compact('mahasiswa'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mahasiswa id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mahasiswa = $this->Mahasiswa->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mahasiswa = $this->Mahasiswa->patchEntity($mahasiswa, $this->request->getData());
            if ($this->Mahasiswa->save($mahasiswa)) {
                $this->Flash->success(__('The mahasiswa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mahasiswa could not be saved. Please, try again.'));
        }
        $this->set(compact('mahasiswa'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mahasiswa id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mahasiswa = $this->Mahasiswa->get($id);
        if ($this->Mahasiswa->delete($mahasiswa)) {
            $this->Flash->success(__('The mahasiswa has been deleted.'));
        } else {
            $this->Flash->error(__('The mahasiswa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
