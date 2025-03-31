<?php
/**
 * Description of SimsController
 *
 * @author zkraua
 */

App::uses('AppController', 'Controller');
//App::uses('CakeEmail', 'Network/Email');


class SimsController extends AppController{
    
    public $components = array('Paginator');
    
     public function index() {
        $this->Sim->recursive = 1;
        $this->Paginator->settings = array(
            'contain' => array(
                'Operator' => array('fields' => array('name')),
                'User' => array('fields' => array('name')),
            ),
            'conditions' => array('state !=' => 3) // hide disactivated
        );
        
        $operators = $this->Sim->Operator->find('list', array(
            'fields' => array('Operator.id', 'Operator.name'),
            'order' => 'Operator.name'
        ));
        $companies = $this->Sim->Company->find('list', array(
            'fields' => array('Company.id', 'Company.name'),
            'order' => 'Company.name'
        ));
        
        $sims = $this->Paginator->paginate();
        
        $states = $this->Sim->get_states(); 
        $profiles = $this->Sim->get_profiles();
        
        $this->set(compact('sims', 'states', 'profiles',  'operators', 'companies'));
    }

    public function find_filter() {
        $this->Sim->recursive = 1;

        
        $filters = array_filter($this->request->data['Sim'], function($value) {
            return $value !== '' && $value !== null;
        });

        $conditions = array();
        if ($this->request->data['Sim']['phone_number'] != null) {
            $conditions['Sim.phone_number LIKE'] = '%'.$this->request->data['Sim']['phone_number'].'%';
        }
        if ($this->request->data['User']['name'] != null) {
            $userIDs = $this->Sim->User->find('list', array(
                'fields' => array('User.id'),
                'conditions' => array('User.name LIKE' => '%'.$this->request->data['User']['name'].'%')
            ));
            
            $conditions['Sim.user_id'] = $userIDs;
        }
        
        if ($this->request->data['Sim']['operator_id'] != null) { 
            $conditions['Sim.operator_id'] = $filters['operator_id'];
        }

        if ($this->request->data['Sim']['state'] != null) { 
            $conditions['Sim.state'] = $this->request->data['Sim']['state'];
        } else {
            $conditions['Sim.state !='] = 3;  // hide disactivated
        }

        $this->Paginator->settings = array(
            'conditions' => $conditions,
            'limit' => 10,
        );

        $sims = $this->Paginator->paginate('Sim');//pr($sims);exit;
        
        $states = $this->Sim->get_states(); 
        $profiles = $this->Sim->get_profiles();
        
        $this->set(compact('sims', 'states', 'profiles'));

        if ($this->request->is('ajax')) {
            $this->render('/Elements/sims_table', 'ajax');
        }
    }


    
    public function add() {
        if ($this->request->is('post')) {
            $this->Sim->create();
            
//            $userId = $this->request->data['Sim']['user_id'];
//            $user = $this->Sim->User->find('first', array(
//                'conditions' => array('User.id' => $userId),
//                'fields' => array('User.company'),
//                'contain' => false
//            ));
            
//            !empty($user['User']['company']) ? $this->request->data['Sim']['company_id'] = $user['User']['company'] : $this->request->data['Sim']['company_id'] = null;
            
            if ($this->Sim->save($this->request->data)) {
                $this->Session->setFlash(__('The Sim has been saved.'));

                return $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('The Sim could not be saved. Please, try again.'));
                    return $this->redirect(array('action' => 'add'));
                }
        }
        
        $locations = $this->Sim->Location->find('list', array(
            'fields' => array('Location.id', 'Location.name'),
            'order' => 'Location.name'
        ));
        
        $companies = $this->Sim->Company->find('list', array(
             'fields' => array('Company.id', 'Company.name'),
             'order' => 'Company.name'
         ));

        $users = $this->Sim->User->find('list', array(
            'fields' => array('User.id', 'User.name'),
            'order' => 'User.name'
        ));

        $operators = $this->Sim->Operator->find('list', array(
            'fields' => array('Operator.id', 'Operator.name'),
            'order' => 'Operator.name'
        ));
        
        $states = $this->Sim->get_states();
        $profiles = $this->Sim->get_profiles();
       
        $this->set(compact('states', 'profiles', 'locations' ,'companies', 'users', 'operators'));
    }
    
    
    public function edit($id = null) {
        if (!$this->Sim->exists($id)) {
                throw new NotFoundException(__('Invalid Sim'));
        }
        if ($this->request->is(array('post', 'put'))) {
            
//            $userId = $this->request->data['Sim']['user_id'];
//            $user = $this->Sim->User->find('first', array(
//                'conditions' => array('User.id' => $userId),
//                'fields' => array('User.company'),
//                'contain' => false
//            ));
            
//            !empty($user['User']['company']) ? $this->request->data['Sim']['company_id'] = $user['User']['company'] : $this->request->data['Sim']['company_id'] = null;
            
                if ($this->Sim->save($this->request->data)) {
                        $this->Session->setFlash(__('The Sim has been saved.'));
                        return $this->redirect(array('action' => 'index'));
                } else {
                        $this->Session->setFlash(__('The Sim could not be saved. Please, try again.'));
                }
        } else {
                $options = array('conditions' => array('Sim.' . $this->Sim->primaryKey => $id));
                $this->request->data = $this->Sim->find('first', $options);
        }
       
        $users = $this->Sim->User->find('list', array(
           'fields' => array('User.id', 'User.name'),
           'order' => 'User.name'
        ));
       
        $companies = $this->Sim->Company->find('list', array(
            'fields' => array('Company.id', 'Company.name'),
            'order' => 'Company.name'
        ));
       
        $operators = $this->Sim->Operator->find('list', array(
           'fields' => array('Operator.id', 'Operator.name'),
           'order' => 'Operator.name'
        ));
        
        $locations = $this->Sim->Location->find('list', array(
            'fields' => array('Location.id', 'Location.name'),
            'order' => 'Location.name'
        ));
        
        $states = $this->Sim->get_states();
        $profiles = $this->Sim->get_profiles();
       
        $this->set(compact('states', 'profiles', 'locations', 'companies', 'users', 'operators'));
    }
    
    public function delete($id = null) { 
        if (!$this->Sim->exists($id)) {
                throw new NotFoundException(__('Invalid Sim'));
        }
//        $this->request->allowMethod('post', 'delete');
//        if ($this->Sim->delete($id)) {
        $this->Sim->id = $id;
        if($this->Sim->saveField('state', 3)) {
                $this->Session->setFlash(__('The Sim has been Deactivated.'));
        } else {
                $this->Session->setFlash(__('The Sim could not be Deactivated. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
    
    public function getBillingCompany($userId = null) {
        $this->autoRender = false; 

        if (!$this->request->is('ajax') || !$userId) {
            throw new BadRequestException(__('Invalid request'));
        }

        $user = $this->Sim->User->find('first', array(
            'conditions' => array('User.id' => $userId),
            'fields' => array('User.company'),
            'contain' => false,
        ));  

        if (!empty($user)) {
            echo json_encode(array('company_id' => $user['User']['company']));
            return;
        }

        echo json_encode(array('company_id' => null));
        return;
    }
    
    
    
    
//    private function send_mail($iccid, $phone_number, $operator){
//        $body = 'iccid: '.$iccid.'<br> phone number: '.$phone_number.'<br> operator: '.$operator;
//        
//        $to = $this->Sim->Operator->findByOperator($operator);
//        
//        if($to){
//            $Email = new CakeEmail('smtp');
//            $Email->emailFormat('html')
//                  ->template('default')
//                  ->subject('Richiesta attivazione sim')
//                  ->to($to['Mail']['mail'])
//                  ->bcc(array('zakaria.aoukaili@fri-el.it'));
//
//            $Email->send($body);
//        }
//        else{
//            $this->Session->setFlash(__("Operator not found"));
//        }
//        
//    }
}