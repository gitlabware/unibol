<?php
App::uses('Gestione', 'Model');

/**
 * Gestione Test Case
 *
 */
class GestioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.gestione',
		'app.paralelo',
		'app.nivele',
		'app.alumno',
		'app.nota',
		'app.profesores',
		'app.materia',
		'app.paralelos_semestre',
		'app.carrera',
		'app.carreras_materia',
		'app.docente',
		'app.docente_materia',
		'app.semestre',
		'app.materias_semestre',
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
		$this->Gestione = ClassRegistry::init('Gestione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Gestione);

		parent::tearDown();
	}

}
