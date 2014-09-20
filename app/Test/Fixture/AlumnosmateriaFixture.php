<?php
/**
 * AlumnosmateriaFixture
 *
 */
class AlumnosmateriaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'docentes_materia_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'carrera_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'malla_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'docentes_materia_id' => 1,
			'carrera_id' => 1,
			'malla_id' => 1
		),
	);

}
