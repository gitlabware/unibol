<?php
App::uses('Docente', 'Model');

/**
 * Docente Test Case
 *
 */
class DocenteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.docente',
		'app.alumnosnota',
		'app.excel',
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
		'app.paise',
		'app.departamento',
		'app.alumnomateriale',
		'app.alumnomateria',
		'app.alumnopermiso',
		'app.alumnosemestre',
		'app.amonestacione',
		'app.nota',
		'app.profesores',
		'app.malla',
		'app.periodo',
		'app.asignatura',
		'app.docentes_materia'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Docente = ClassRegistry::init('Docente');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Docente);

		parent::tearDown();
	}

}
