<?php

/**
 * Description of Model
 *
 * @author zkraua
 */
class Sim extends AppModel {
    
    private $states = array('Available', 'Assigned', 'Portability', 'Deactivated');
    private $profiles = array('1', '2', '3', '4');
    
    public $validate = array(
        'profile_id' => array(
            'required' => true,
            'rule' => 'numeric'
        ),
        'iccid' => array(
            'required' => true,
            'rule' => 'numeric'
        ),
        'operator_id' => array(
            'rule' => 'notEmpty'
        ),
        'phone_number' => array(
            'rule' => 'notEmpty'
        ),
        'state' => array(
            'rule' => 'notEmpty'
        ),
    );
    
    public $belongsTo = array(
        'Company' => array(
            'className' => 'Company',
            'foreignKey' => 'company_id'
        ),
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id'
        ),
        'Operator' => array(
            'className' => 'Operator',
            'foreignKey' => 'operator_id'
        ),
        'Location' => array(
            'className' => 'AppPlant',
            'foreignKey' => 'plant_id'
        ),
        
    );
    
    
    public function get_states() {
        return $this->states;
    }
    
    public function get_profiles() {
        return $this->profiles;
    }
}