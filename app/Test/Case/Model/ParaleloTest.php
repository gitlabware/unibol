<?php
App::uses('Paralelo', 'Model');

/**
 * Paralelo Test Case
 *
 */
class ParaleloTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.paralelo',
		'app.nivele',
		'app.gestione',
		'app.alumno',
		'app.nota',
		'app.profesores',
		'app.materia',
		'app.paralelos_semestre',
		'app.semestre',
		'app.materias_semestre',
		'app.carrera',
		'app.carreras_materia',
		'app.docente',
		'app.docentes_materia',
		'app.user',
		'app.group',
		'app.profesore',
		'app.alumnos_paralelo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Paralelo = ClassRegistry::init('Paralelo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Paralelo);

		parent::tearDown();
	}

}
