<?php
App::uses('User', 'Model');

/**
 * User Test Case
 *
 */
class UserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user',
		'app.carrera',
		'app.materia',
		'app.semestre',
		'app.materias_semestre',
		'app.paralelo',
		'app.nivele',
		'app.gestione',
		'app.alumnos_paralelo',
		'app.alumno',
		'app.estado',
		'app.paralelos_semestre',
		'app.carreras_materia',
		'app.paise',
		'app.departamento',
		'app.organizacione',
		'app.group',
		'app.alumnosmateria',
		'app.docentes_materias',
		'app.malla',
		'app.periodo',
		'app.alumnosnota',
		'app.excel',
		'app.docente',
		'app.docentes_materia'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->User = ClassRegistry::init('User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);

		parent::tearDown();
	}

}
