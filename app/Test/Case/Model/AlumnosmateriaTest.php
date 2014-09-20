<?php
App::uses('Alumnosmateria', 'Model');

/**
 * Alumnosmateria Test Case
 *
 */
class AlumnosmateriaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.alumnosmateria',
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
		'app.paise',
		'app.departamento',
		'app.alumnomateriale',
		'app.alumnomateria',
		'app.alumnopermiso',
		'app.alumnosemestre',
		'app.estado',
		'app.alumnosnota',
		'app.excel',
		'app.docente',
		'app.asignatura',
		'app.docentes_materia',
		'app.malla',
		'app.periodo',
		'app.amonestacione',
		'app.nota',
		'app.profesores',
		'app.paralelos_semestre',
		'app.carreras_materia',
		'app.organizacione',
		'app.group',
		'app.docentes_materias'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Alumnosmateria = ClassRegistry::init('Alumnosmateria');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Alumnosmateria);

		parent::tearDown();
	}

}
