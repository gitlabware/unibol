<?php
App::uses('AppModel', 'Model');
/**
 * Malla Model
 *
 * @property Periodo $Periodo
 * @property Alumnosnota $Alumnosnota
 */
class Malla extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Periodo' => array(
			'className' => 'Periodo',
			'foreignKey' => 'periodo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Alumnosnota' => array(
			'className' => 'Alumnosnota',
			'foreignKey' => 'malla_id',
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
