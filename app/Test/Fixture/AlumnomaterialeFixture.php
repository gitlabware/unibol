<?php
/**
 * AlumnomaterialeFixture
 *
 */
class AlumnomaterialeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 7, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 7),
		'materiale_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 7),
		'cantidad' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 5, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fecha_entrega' => array('type' => 'date', 'null' => true, 'default' => null),
		'fecha_recepcion' => array('type' => 'date', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'materiale_id' => 1,
			'cantidad' => 'Lor',
			'fecha_entrega' => '2013-06-25',
			'fecha_recepcion' => '2013-06-25'
		),
	);

}
