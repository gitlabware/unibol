<?php
App::uses('Generaregistro', 'Model');

/**
 * Generaregistro Test Case
 *
 */
class GeneraregistroTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.generaregistro'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Generaregistro = ClassRegistry::init('Generaregistro');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Generaregistro);

		parent::tearDown();
	}

}
