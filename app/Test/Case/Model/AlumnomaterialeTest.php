<?php
App::uses('Alumnomateriale', 'Model');

/**
 * Alumnomateriale Test Case
 *
 */
class AlumnomaterialeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.alumnomateriale',
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
		'app.alumnosmateria',
		'app.materiales'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Alumnomateriale = ClassRegistry::init('Alumnomateriale');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Alumnomateriale);

		parent::tearDown();
	}

}
