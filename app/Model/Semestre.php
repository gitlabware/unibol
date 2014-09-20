<?php
App::uses('AppModel', 'Model');
/**
 * Semestre Model
 *
 * @property Materia $Materia
 * @property Paralelo $Paralelo
 */
class Semestre extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Materia' => array(
			'className' => 'Materia',
			'joinTable' => 'materias_semestres',
			'foreignKey' => 'semestre_id',
			'associationForeignKey' => 'materia_id',
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
		'Paralelo' => array(
			'className' => 'Paralelo',
			'joinTable' => 'paralelos_semestres',
			'foreignKey' => 'semestre_id',
			'associationForeignKey' => 'paralelo_id',
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
