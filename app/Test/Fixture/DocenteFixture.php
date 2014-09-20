<?php
/**
 * DocenteFixture
 *
 */
class DocenteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 7, 'key' => 'primary'),
		'ap_paterno' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ap_materno' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fecha_nac' => array('type' => 'date', 'null' => false, 'default' => null),
		'ci' => array('type' => 'integer', 'null' => false, 'default' => null),
		'especialidad' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fecha_incorporacion' => array('type' => 'date', 'null' => false, 'default' => null),
		'total_horas' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4),
		'horas_asignadas' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4),
		'horas_complementarias' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4),
		'observaciones' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 155, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'usuario_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 7),
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
			'ap_paterno' => 'Lorem ipsum dolor sit amet',
			'ap_materno' => 'Lorem ipsum dolor sit amet',
			'nombre' => 'Lorem ipsum dolor sit amet',
			'fecha_nac' => '2013-06-05',
			'ci' => 1,
			'especialidad' => 'Lorem ipsum dolor sit amet',
			'fecha_incorporacion' => '2013-06-05',
			'total_horas' => 1,
			'horas_asignadas' => 1,
			'horas_complementarias' => 1,
			'observaciones' => 'Lorem ipsum dolor sit amet',
			'usuario_id' => 1
		),
	);

}
