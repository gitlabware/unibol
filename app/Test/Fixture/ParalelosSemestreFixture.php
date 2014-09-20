<?php
/**
 * ParalelosSemestreFixture
 *
 */
class ParalelosSemestreFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'semestre_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'paralelo_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'gestione_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'semestre_id' => 1,
			'paralelo_id' => 1,
			'gestione_id' => 'Lorem ipsum dolor sit amet'
		),
	);

}
