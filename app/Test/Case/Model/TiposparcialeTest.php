<?php
App::uses('Tiposparciale', 'Model');

/**
 * Tiposparciale Test Case
 *
 */
class TiposparcialeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tiposparciale',
		'app.alumnos_parciale',
		'app.alumno',
		'app.nota',
		'app.profesore',
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
		'app.ciclo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tiposparciale = ClassRegistry::init('Tiposparciale');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tiposparciale);

		parent::tearDown();
	}

}
