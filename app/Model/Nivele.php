<?php
App::uses('AppModel', 'Model');
/**
 * Nivele Model
 *
 * @property Gestione $Gestione
 * @property AlumnosParalelo $AlumnosParalelo
 * @property Paralelo $Paralelo
 */
class Nivele extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Gestione' => array(
			'className' => 'Gestione',
			'foreignKey' => 'gestione_id',
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
		'AlumnosParalelo' => array(
			'className' => 'AlumnosParalelo',
			'foreignKey' => 'nivele_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Paralelo' => array(
			'className' => 'Paralelo',
			'foreignKey' => 'nivele_id',
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
