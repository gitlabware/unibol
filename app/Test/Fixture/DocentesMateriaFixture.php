<?php
/**
 * DocentesMateriaFixture
 *
 */
class DocentesMateriaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'malla_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'materia_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'paralelo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 5, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'carrera_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'cupo' => array('type' => 'integer', 'null' => true, 'default' => null),
		'nombre' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'excel_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'docente_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'malla_id' => 1,
			'materia_id' => 1,
			'user_id' => 1,
			'paralelo' => 'Lor',
			'carrera_id' => 1,
			'cupo' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet',
			'excel_id' => 1,
			'docente_id' => 1
		),
	);

}
