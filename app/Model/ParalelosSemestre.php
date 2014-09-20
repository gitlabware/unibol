<?php
App::uses('AppModel', 'Model');
/**
 * ParalelosSemestre Model
 *
 * @property Semestre $Semestre
 * @property Paralelo $Paralelo
 * @property Gestione $Gestione
 */
class ParalelosSemestre extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Semestre' => array(
			'className' => 'Semestre',
			'foreignKey' => 'semestre_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Paralelo' => array(
			'className' => 'Paralelo',
			'foreignKey' => 'paralelo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Gestione' => array(
			'className' => 'Gestione',
			'foreignKey' => 'gestione_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
