<?php
App::uses('DocenteMateria', 'Model');

/**
 * DocenteMateria Test Case
 *
 */
class DocenteMateriaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.docente_materia'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DocenteMateria = ClassRegistry::init('DocenteMateria');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DocenteMateria);

		parent::tearDown();
	}

}
