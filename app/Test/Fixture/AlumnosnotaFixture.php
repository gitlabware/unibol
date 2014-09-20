<?php
/**
 * AlumnosnotaFixture
 *
 */
class AlumnosnotaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'excel_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'alumno' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'docente' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'materia' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'semestre' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'parcialuno' => array('type' => 'float', 'null' => true, 'default' => '0.00', 'length' => '15,2'),
		'parcialdos' => array('type' => 'float', 'null' => true, 'default' => '0.00', 'length' => '15,2'),
		'parcialtres' => array('type' => 'float', 'null' => true, 'default' => '0.00', 'length' => '15,2'),
		'notafinal' => array('type' => 'float', 'null' => true, 'default' => '0.00', 'length' => '15,2'),
		'alumno_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'docente_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'materia_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'semestre_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'malla_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'carrera_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'excel_id' => 1,
			'alumno' => 'Lorem ipsum d',
			'docente' => 'Lorem ipsum d',
			'materia' => 'Lorem ipsum d',
			'semestre' => 'Lorem ipsum d',
			'parcialuno' => 1,
			'parcialdos' => 1,
			'parcialtres' => 1,
			'notafinal' => 1,
			'alumno_id' => 1,
			'docente_id' => 1,
			'materia_id' => 1,
			'semestre_id' => 1,
			'malla_id' => 1,
			'carrera_id' => 1
		),
	);

}
