<?php

App::uses('LDAPAuthenticate', 'YALP.Controller/Component');

class LDAPFreshguruAuthenticate extends LDAPAuthenticate {

/**
 * Constructor
 *
 * @param ComponentCollection $collection The Component collection used on this request.
 * @param array $settings Array of settings to use.
 */
	function __construct(ComponentCollection $collection, $settings = array()) { 
                Configure::load('ldap_freshguru');
                parent::__construct($collection, $settings);
	}
}

