<?php
App::uses('Alumnosnota', 'Model');

/**
 * Alumnosnota Test Case
 *
 */
class AlumnosnotaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		'app.malla',
		'app.periodo',
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
		$this->Alumnosnota = ClassRegistry::init('Alumnosnota');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Alumnosnota);

		parent::tearDown();
	}

}
