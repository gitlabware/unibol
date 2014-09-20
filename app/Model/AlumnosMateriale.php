<?php
App::uses('AppModel', 'Model');
/**
 * AlumnosMateriale Model
 *
 * @property Materiale $Materiale
 */
class AlumnosMateriale extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Materiale' => array(
			'className' => 'Materiale',
			'foreignKey' => 'materiale_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
