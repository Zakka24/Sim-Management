<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Operator
 *
 * @author zkraua
 */
class Operator extends AppModel{
    public $validate = array(
        'name' => array(
            'rule' => 'notEmpty'
        )
    );
}
