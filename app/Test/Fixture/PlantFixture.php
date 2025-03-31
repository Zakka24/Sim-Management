<?php
/**
 * PlantFixture
 *
 */
class PlantFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'SCC' => array('type' => 'date', 'null' => false, 'default' => null),
		'Start_UP' => array('type' => 'date', 'null' => false, 'default' => null),
		'AWA' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'AWA_YoC' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'TMW' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'TMW_next' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'height' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'province_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'company_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'partner_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'wtg_contract_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'sub_contract_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'db_name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'price_loc' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 11, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'trader' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fee' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 11, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'corrective_param' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'type' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'SCC' => '2015-02-10',
			'Start_UP' => '2015-02-10',
			'AWA' => 1,
			'AWA_YoC' => 1,
			'TMW' => 1,
			'TMW_next' => 1,
			'height' => 'Lorem ipsum dolor sit amet',
			'province_id' => 1,
			'company_id' => 1,
			'partner_id' => 1,
			'wtg_contract_id' => 1,
			'sub_contract_id' => 1,
			'db_name' => 'Lorem ipsum dolor sit amet',
			'price_loc' => 'Lorem ips',
			'trader' => 'Lorem ipsum dolor sit amet',
			'fee' => 'Lorem ips',
			'corrective_param' => 1,
			'type' => 'Lorem ipsum dolor sit ame'
		),
	);

}
