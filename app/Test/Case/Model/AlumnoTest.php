<?php
App::uses('Alumno', 'Model');

/**
 * Alumno Test Case
 *
 */
class AlumnoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.alumno',
		'app.carrera',
		'app.materia',
		'app.semestre',
		'app.materias_semestre',
		'app.paralelo',
		'app.nivele',
		'app.gestione',
		'app.alumnos_paralelo',
		'app.estado',
		'app.paralelos_semestre',
		'app.carreras_materia',
		'app.pais',
		'app.departamento',
		'app.provincia',
		'app.organizacion',
		'app.usuario',
		'app.alumnomateriale',
		'app.alumnomateria',
		'app.alumnopermiso',
		'app.alumnosemestre',
		'app.alumnosnota',
		'app.excel',
		'app.docente',
		'app.malla',
		'app.periodo',
		'app.amonestacione',
		'app.nota',
		'app.profesores',
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
		$this->Alumno = ClassRegistry::init('Alumno');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Alumno);

		parent::tearDown();
	}

}
