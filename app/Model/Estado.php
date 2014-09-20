<?php
App::uses('AppModel', 'Model');
/**
 * Estado Model
 *
 * @property AlumnosParalelo $AlumnosParalelo
 */
class Estado extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'AlumnosParalelo' => array(
			'className' => 'AlumnosParalelo',
			'foreignKey' => 'estado_id',
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
