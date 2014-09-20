<?php
/**
 * CarrerasMateriaFixture
 *
 */
class CarrerasMateriaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'carrera_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'materia_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'gestione_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'semestre_id' => array('type' => 'integer', 'null' => true, 'default' => null),
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
			'carrera_id' => 1,
			'materia_id' => 1,
			'gestione_id' => 1,
			'semestre_id' => 1
		),
	);

}
