<?php
App::uses('Profesore', 'Model');

/**
 * Profesore Test Case
 *
 */
class ProfesoreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.profesore',
		'app.alumnos_parciale',
		'app.alumno',
		'app.nota',
		'app.materia',
		'app.parciale',
		'app.user',
		'app.group',
		'app.paralelo',
		'app.nivele',
		'app.materias_nivele',
		'app.gestione',
		'app.horario',
		'app.alumnos_paralelo',
		'app.materias_paralelo',
		'app.paralelos_profesore',
		'app.tiposparciale',
		'app.ciclo',
		'app.materias_profesore'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Profesore = ClassRegistry::init('Profesore');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Profesore);

		parent::tearDown();
	}

}
