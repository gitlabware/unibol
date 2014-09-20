<?php
App::uses('ParalelosSemestre', 'Model');

/**
 * ParalelosSemestre Test Case
 *
 */
class ParalelosSemestreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.paralelos_semestre',
		'app.semestre',
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
		'app.profesores'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ParalelosSemestre = ClassRegistry::init('ParalelosSemestre');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ParalelosSemestre);

		parent::tearDown();
	}

}
