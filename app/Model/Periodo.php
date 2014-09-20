<?php
App::uses('AppModel', 'Model');
/**
 * Periodo Model
 *
 * @property Malla $Malla
 */
class Periodo extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Malla' => array(
			'className' => 'Malla',
			'foreignKey' => 'periodo_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
