<?php
App::uses('Organizacione', 'Model');

/**
 * Organizacione Test Case
 *
 */
class OrganizacioneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.organizacione',
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
		'app.departamento',
		'app.provincia',
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
		$this->Organizacione = ClassRegistry::init('Organizacione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Organizacione);

		parent::tearDown();
	}

}
