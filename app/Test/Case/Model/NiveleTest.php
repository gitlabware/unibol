<?php
App::uses('Nivele', 'Model');

/**
 * Nivele Test Case
 *
 */
class NiveleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		$this->Nivele = ClassRegistry::init('Nivele');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Nivele);

		parent::tearDown();
	}

}
