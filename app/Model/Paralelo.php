<?php
App::uses('AppModel', 'Model');
/**
 * Paralelo Model
 *
 * @property Nivele $Nivele
 * @property Gestione $Gestione
 * @property Alumno $Alumno
 * @property Semestre $Semestre
 */
class Paralelo extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Nivele' => array(
			'className' => 'Nivele',
			'foreignKey' => 'nivele_id',
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

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Alumno' => array(
			'className' => 'Alumno',
			'joinTable' => 'alumnos_paralelos',
			'foreignKey' => 'paralelo_id',
			'associationForeignKey' => 'alumno_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Semestre' => array(
			'className' => 'Semestre',
			'joinTable' => 'paralelos_semestres',
			'foreignKey' => 'paralelo_id',
			'associationForeignKey' => 'semestre_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
