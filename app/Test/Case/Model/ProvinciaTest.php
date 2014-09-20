<?php
App::uses('Provincia', 'Model');

/**
 * Provincia Test Case
 *
 */
class ProvinciaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.provincia',
		'app.departamento',
		'app.alumno',
		'app.carrera',
		'app.materia',
		'app.nota',
		'app.profesores',
		'app.paralelos_semestre',
		'app.semestre',
		'app.materias_semestre',
		'app.paralelo',
		'app.nivele',
		'app.gestione',
		'app.alumnos_paralelo',
		'app.estado',
		'app.docentes_materia',
		'app.docente',
		'app.carreras_materia',
		'app.pais',
		'app.organizacion',
		'app.usuario',
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
		$this->Provincia = ClassRegistry::init('Provincia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Provincia);

		parent::tearDown();
	}

}
