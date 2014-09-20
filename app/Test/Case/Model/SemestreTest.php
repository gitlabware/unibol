<?php
App::uses('Semestre', 'Model');

/**
 * Semestre Test Case
 *
 */
class SemestreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.semestre',
		'app.materia',
		'app.nota',
		'app.alumno',
		'app.user',
		'app.group',
		'app.profesore',
		'app.paralelo',
		'app.nivele',
		'app.gestione',
		'app.alumnos_paralelo',
		'app.estado',
		'app.docentes_materia',
		'app.docente',
		'app.paralelos_semestre',
		'app.profesores',
		'app.carrera',
		'app.carreras_materia',
		'app.materias_semestre'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Semestre = ClassRegistry::init('Semestre');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Semestre);

		parent::tearDown();
	}

}
