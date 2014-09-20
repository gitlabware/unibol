<?php
App::uses('Paise', 'Model');

/**
 * Paise Test Case
 *
 */
class PaiseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.paise',
		'app.alumno',
		'app.carrera',
		'app.materia',
		'app.carreras_materia',
		'app.semestre',
		'app.materias_semestre',
		'app.paralelo',
		'app.nivele',
		'app.gestione',
		'app.alumnos_paralelo',
		'app.estado',
		'app.docentes_materia',
		'app.docente',
		'app.paralelos_semestre',
		'app.nota',
		'app.profesores',
		'app.prerequisito',
		'app.materias_gestione',
		'app.paralelos_materia',
		'app.departamento',
		'app.organizacione',
		'app.usuario',
		'app.alumnosemestre',
		'app.user',
		'app.persona',
		'app.group',
		'app.materiale',
		'app.alumnos_materiale'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Paise = ClassRegistry::init('Paise');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Paise);

		parent::tearDown();
	}

}
