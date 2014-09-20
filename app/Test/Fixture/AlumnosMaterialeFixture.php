<?php
/**
 * AlumnosMaterialeFixture
 *
 */
class AlumnosMaterialeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'alumno_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'materiale_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'alumno_id' => 1,
			'materiale_id' => 1,
			'cantidad' => 'Lor',
			'fecha_entrega' => '2013-06-25',
			'fecha_recepcion' => '2013-06-25'
		),
	);

}
