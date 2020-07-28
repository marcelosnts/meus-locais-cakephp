<?php
    namespace App\Controller;

    class LocaisController extends AppController {
        public function initialize() : void {
            parent::initialize();

            $this->loadComponent('Paginator');
            $this->loadComponent('Flash');
        }

        public $paginate = [
            'limit' => 10,
            'order' => [
                'Locais.data' => 'asc'
            ]
        ];

        public function index() {
            $locais = $this->paginate($this->Locais->find());
            $this->set(compact('locais'));
        }

        public function view($id = null) {
            $local = $this->Locais->findById($id)->FirstOrFail();
            $this->set(compact('local'));
        }

        public function add(){
            $local = $this->Locais->newEmptyEntity();

            if($this->request->is('post')) {
                $local = $this->Locais->patchEntity($local, $this->request->getData());

                if($this->Locais->save($local)){
                    $this->Flash->success(__('Novo local cadastrado!'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Algo deu errado!'));
            }
            $this->set('local', $local);
        }

        public function edit($id) {
            $local = $this->Locais->findById($id)->firstOrFail();

            if($this->request->is(['post', 'put'])){
                $this->Locais->patchEntity($local, $this->request->getData());

                if($this->Locais->save($local)) {
                    $this->Flash->success(__('Local editado com sucesso!'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Impossivel atualizar o local, tente novamente.'));
            }
            $this->set('local', $local);
        }

        public function delete($id) {
            $this->request->allowMethod(['post', 'delete']);

            $local = $this->Locais->findById($id)->firstOrFail();

            if($this->Locais->delete($local)){
                $this->Flash->success(__('Local removido com sucesso!'));
                return $this->redirect(['action' => 'index']);
            }
        }
    }
?>
