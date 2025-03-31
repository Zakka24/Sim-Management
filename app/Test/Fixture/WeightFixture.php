<?php
/**
 * WeightFixture
 *
 */
class WeightFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'waybill' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'DDT_n' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'DDT_mat' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'month' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'week' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'year' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'supplier_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'tractor_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'trailer_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'town_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'place_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'lot_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'sheet_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'land_parcel_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'forest_stack1_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'forest_stack2_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'biomass_type_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'chipper_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'crate1_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'crate2_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'destination_stack_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'gross' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'time_in' => array('type' => 'time', 'null' => false, 'default' => null),
		'time_out' => array('type' => 'time', 'null' => false, 'default' => null),
		'wc' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,2', 'unsigned' => false),
		'note' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'source_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'area_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
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
			'waybill' => 1,
			'DDT_n' => 1,
			'DDT_mat' => 1,
			'date' => '2015-02-10 17:43:54',
			'month' => 1,
			'week' => 1,
			'year' => 1,
			'supplier_id' => 1,
			'tractor_id' => 1,
			'trailer_id' => 1,
			'town_id' => 1,
			'place_id' => 1,
			'lot_id' => 1,
			'sheet_id' => 1,
			'land_parcel_id' => 1,
			'forest_stack1_id' => 1,
			'forest_stack2_id' => 1,
			'biomass_type_id' => 1,
			'chipper_id' => 1,
			'crate1_id' => 1,
			'crate2_id' => 1,
			'destination_stack_id' => 1,
			'gross' => '',
			'time_in' => '17:43:54',
			'time_out' => '17:43:54',
			'wc' => '',
			'note' => 'Lorem ipsum dolor sit amet',
			'source_id' => 1,
			'area_id' => 1,
			'user_id' => 1,
			'created' => '2015-02-10 17:43:54',
			'modified' => '2015-02-10 17:43:54'
		),
	);

}
