<?php
App::uses('Periodo', 'Model');

/**
 * Periodo Test Case
 *
 */
class PeriodoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.periodo',
		'app.malla',
		'app.alumnosnota',
		'app.excel',
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
		'app.user',
		'app.paise',
		'app.departamento',
		'app.organizacione',
		'app.group'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Periodo = ClassRegistry::init('Periodo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Periodo);

		parent::tearDown();
	}

}
