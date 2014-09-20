<?php
App::uses('DocentesMateria', 'Model');

/**
 * DocentesMateria Test Case
 *
 */
class DocentesMateriaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.docentes_materia',
		'app.malla',
		'app.periodo',
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
		'app.docente',
		'app.asignatura',
		'app.user',
		'app.organizacione',
		'app.group',
		'app.alumnosmateria',
		'app.docentes_materias'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DocentesMateria = ClassRegistry::init('DocentesMateria');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DocentesMateria);

		parent::tearDown();
	}

}
