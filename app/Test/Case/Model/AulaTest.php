<?php
App::uses('Aula', 'Model');

/**
 * Aula Test Case
 *
 */
class AulaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.aula',
		'app.horario'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Aula = ClassRegistry::init('Aula');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Aula);

		parent::tearDown();
	}

}
