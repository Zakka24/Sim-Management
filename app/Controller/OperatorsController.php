<?php

class OperatorsController extends AppController{
    
    public $components = array('Paginator');


    public function index() {
        $this->Operator->recursive = 0;
        $this->set('operators', $this->Paginator->paginate());
    }
    
    public function add() {
        if ($this->request->is('post')) {
                $this->Operator->create();
                if ($this->Operator->save($this->request->data)) {
                    $this->Session->setFlash(__('The operator has been saved.'));
                    
                    return $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('The operator could not be saved. Please, try again.'));
                    return $this->redirect(array('action' => 'add'));
                }
        }
    }
    
    
    public function edit($id = null) {
        if (!$this->Operator->exists($id)) {
                throw new NotFoundException(__('Invalid Operator'));
        }
        if ($this->request->is(array('post', 'put'))) {
                if ($this->Operator->save($this->request->data)) {
                        $this->Session->setFlash(__('The operator has been saved.'));
                        return $this->redirect(array('action' => 'index'));
                } else {
                        $this->Session->setFlash(__('The operator could not be saved. Please, try again.'));
                }
        } else {
                $options = array('conditions' => array('Operator.' . $this->Operator->primaryKey => $id));
                $this->request->data = $this->Operator->find('first', $options);
        }
    }
    
    public function delete($id = null) { 
        if (!$this->Operator->exists($id)) {
                throw new NotFoundException(__('Invalid operator'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Operator->delete($id)) {
                $this->Session->setFlash(__('The operator has been deleted.'));
        } else {
                $this->Session->setFlash(__('The operator could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
