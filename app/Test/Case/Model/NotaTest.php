<?php
App::uses('Nota', 'Model');

/**
 * Nota Test Case
 *
 */
class NotaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.nota',
		'app.alumno',
		'app.paralelo',
		'app.nivele',
		'app.materia',
		'app.horario',
		'app.paralelos_profesore',
		'app.profesore',
		'app.materias_paralelo',
		'app.materias_profesore',
		'app.materias_nivele',
		'app.gestione',
		'app.alumnos_paralelo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Nota = ClassRegistry::init('Nota');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Nota);

		parent::tearDown();
	}

}
