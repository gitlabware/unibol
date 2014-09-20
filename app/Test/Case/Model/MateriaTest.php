<?php
App::uses('Materia', 'Model');

/**
 * Materia Test Case
 *
 */
class MateriaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.materia',
		'app.nota',
		'app.alumno',
		'app.carrera',
		'app.carreras_materia',
		'app.paise',
		'app.departamento',
		'app.provincia',
		'app.organizacione',
		'app.usuario',
		'app.user',
		'app.persona',
		'app.group',
		'app.materiale',
		'app.alumnos_materiale',
		'app.paralelo',
		'app.nivele',
		'app.gestione',
		'app.alumnos_paralelo',
		'app.estado',
		'app.docentes_materia',
		'app.docente',
		'app.materias_semestre',
		'app.semestre',
		'app.paralelos_semestre',
		'app.profesores'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Materia = ClassRegistry::init('Materia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Materia);

		parent::tearDown();
	}

}
