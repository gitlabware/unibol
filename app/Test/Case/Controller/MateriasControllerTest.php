<?php
App::uses('MateriasController', 'Controller');

/**
 * MateriasController Test Case
 *
 */
class MateriasControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.materia',
		'app.horario',
		'app.nota',
		'app.grado',
		'app.grados_materia',
		'app.profesore',
		'app.materias_profesore'
	);

}
