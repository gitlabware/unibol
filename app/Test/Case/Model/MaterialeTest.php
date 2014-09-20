<?php
App::uses('Materiale', 'Model');

/**
 * Materiale Test Case
 *
 */
class MaterialeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.materiale',
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
		'app.docentes_materia',
		'app.malla',
		'app.periodo',
		'app.alumnosnota',
		'app.excel',
		'app.user',
		'app.paise',
		'app.departamento',
		'app.organizacione',
		'app.group',
		'app.alumnosmateria',
		'app.docente',
		'app.asignatura',
		'app.paralelos_semestre',
		'app.carreras_materia',
		'app.alumnomateriale',
		'app.materiales',
		'app.alumnomateria',
		'app.alumnopermiso',
		'app.alumnosemestre',
		'app.amonestacione',
		'app.nota',
		'app.profesores',
		'app.alumnos_materiale'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Materiale = ClassRegistry::init('Materiale');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Materiale);

		parent::tearDown();
	}

}
