<?php
App::uses('Materiasaprobada', 'Model');

/**
 * Materiasaprobada Test Case
 *
 */
class MateriasaprobadaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.materiasaprobada',
		'app.materia',
		'app.carrera',
		'app.carreras_materia',
		'app.semestre',
		'app.materias_semestre',
		'app.paralelo',
		'app.nivele',
		'app.gestione',
		'app.alumnos_paralelo',
		'app.alumno',
		'app.estado',
		'app.paralelos_semestre',
		'app.aprobada'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Materiasaprobada = ClassRegistry::init('Materiasaprobada');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Materiasaprobada);

		parent::tearDown();
	}

}
