<?php
App::uses('MateriasSemestre', 'Model');

/**
 * MateriasSemestre Test Case
 *
 */
class MateriasSemestreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.materias_semestre',
		'app.materia',
		'app.nota',
		'app.alumno',
		'app.user',
		'app.group',
		'app.profesore',
		'app.paralelo',
		'app.nivele',
		'app.gestione',
		'app.alumnos_paralelo',
		'app.semestre',
		'app.paralelos_semestre',
		'app.profesores',
		'app.carrera',
		'app.carreras_materia',
		'app.docente',
		'app.docente_materia'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MateriasSemestre = ClassRegistry::init('MateriasSemestre');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MateriasSemestre);

		parent::tearDown();
	}

}
