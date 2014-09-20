<?php
/**
 * AlumnosParcialeFixture
 *
 */
class AlumnosParcialeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'alumno_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'tiposparciale_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'profesore_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'ciclo_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'materia_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'nota' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3),
		'gestion' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
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
			'tiposparciale_id' => 1,
			'profesore_id' => 1,
			'ciclo_id' => 1,
			'materia_id' => 1,
			'nota' => 1,
			'gestion' => 'Lorem ipsum d'
		),
	);

}
