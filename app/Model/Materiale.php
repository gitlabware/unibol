<?php
App::uses('AppModel', 'Model');
/**
 * Materiale Model
 *
 * @property Alumno $Alumno
 */
class Materiale extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Alumno' => array(
			'className' => 'Alumno',
			'joinTable' => 'alumnos_materiales',
			'foreignKey' => 'materiale_id',
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
		)
	);

}
