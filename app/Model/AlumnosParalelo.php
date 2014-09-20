<?php
App::uses('AppModel', 'Model');
/**
 * AlumnosParalelo Model
 *
 * @property Alumno $Alumno
 * @property Paralelo $Paralelo
 * @property Estado $Estado
 * @property Gestione $Gestione
 * @property Nivele $Nivele
 */
class AlumnosParalelo extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Alumno' => array(
			'className' => 'Alumno',
			'foreignKey' => 'alumno_id',
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
		'Estado' => array(
			'className' => 'Estado',
			'foreignKey' => 'estado_id',
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
		),
		'Nivele' => array(
			'className' => 'Nivele',
			'foreignKey' => 'nivele_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
