<?php
App::uses('CarrerasMateria', 'Model');

/**
 * CarrerasMateria Test Case
 *
 */
class CarrerasMateriaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.carreras_materia',
		'app.carrera',
		'app.materia',
		'app.semestre',
		'app.materias_semestre',
		'app.paralelo',
		'app.nivele',
		'app.gestione',
		'app.alumnos_paralelo',
		'app.alumno',
		'app.paise',
		'app.departamento',
		'app.organizacione',
		'app.usuario',
		'app.alumnosemestre',
		'app.estado',
		'app.nota',
		'app.profesores',
		'app.user',
		'app.persona',
		'app.group',
		'app.materiale',
		'app.alumnos_materiale',
		'app.docentes_materia',
		'app.docente',
		'app.paralelos_semestre',
		'app.prerequisito',
		'app.materias_gestione',
		'app.paralelos_materia'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CarrerasMateria = ClassRegistry::init('CarrerasMateria');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CarrerasMateria);

		parent::tearDown();
	}

}
