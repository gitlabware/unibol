<?php
App::uses('AlumnosParciale', 'Model');

/**
 * AlumnosParciale Test Case
 *
 */
class AlumnosParcialeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.alumnos_parciale',
		'app.alumno',
		'app.nota',
		'app.profesore',
		'app.horario',
		'app.user',
		'app.group',
		'app.materia',
		'app.paralelos_profesore',
		'app.paralelo',
		'app.nivele',
		'app.materias_nivele',
		'app.gestione',
		'app.alumnos_paralelo',
		'app.materias_paralelo',
		'app.materias_profesore',
		'app.parciale',
		'app.tiposparciale',
		'app.ciclo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AlumnosParciale = ClassRegistry::init('AlumnosParciale');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AlumnosParciale);

		parent::tearDown();
	}

}
