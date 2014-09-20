<?php
App::uses('AlumnosParalelo', 'Model');

/**
 * AlumnosParalelo Test Case
 *
 */
class AlumnosParaleloTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.alumnos_paralelo',
		'app.alumno',
		'app.nota',
		'app.profesores',
		'app.materia',
		'app.paralelos_semestre',
		'app.semestre',
		'app.materias_semestre',
		'app.paralelo',
		'app.nivele',
		'app.gestione',
		'app.carrera',
		'app.carreras_materia',
		'app.docente',
		'app.docentes_materia',
		'app.user',
		'app.group',
		'app.profesore',
		'app.estado'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AlumnosParalelo = ClassRegistry::init('AlumnosParalelo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AlumnosParalelo);

		parent::tearDown();
	}

}
