<?php
App::uses('Ciclo', 'Model');

/**
 * Ciclo Test Case
 *
 */
class CicloTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ciclo',
		'app.alumnos_parciale',
		'app.alumno',
		'app.nota',
		'app.profesore',
		'app.horario',
		'app.user',
		'app.group',
		'app.materia',
		'app.materias_profesore',
		'app.paralelo',
		'app.nivele',
		'app.materias_nivele',
		'app.gestione',
		'app.alumnos_paralelo',
		'app.materias_paralelo',
		'app.paralelos_profesore',
		'app.parciale',
		'app.tiposparciale'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ciclo = ClassRegistry::init('Ciclo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ciclo);

		parent::tearDown();
	}

}
