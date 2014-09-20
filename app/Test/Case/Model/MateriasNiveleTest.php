<?php
App::uses('MateriasNivele', 'Model');

/**
 * MateriasNivele Test Case
 *
 */
class MateriasNiveleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.materias_nivele',
		'app.nivele',
		'app.paralelo',
		'app.gestione',
		'app.horario',
		'app.alumno',
		'app.nota',
		'app.alumnos_paralelo',
		'app.materia',
		'app.paralelos_profesore',
		'app.profesore',
		'app.materias_paralelo',
		'app.materias_profesore'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MateriasNivele = ClassRegistry::init('MateriasNivele');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MateriasNivele);

		parent::tearDown();
	}

}
