<?php
App::uses('Malla', 'Model');

/**
 * Malla Test Case
 *
 */
class MallaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.malla',
		'app.periodo',
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
		$this->Malla = ClassRegistry::init('Malla');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Malla);

		parent::tearDown();
	}

}
