<?php
App::uses('AppModel', 'Model');
/**
 * Nota Model
 *
 * @property Alumno $Alumno
 * @property Profesores $Profesores
 * @property Materia $Materia
 */
class Nota extends AppModel {


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
		'Profesores' => array(
			'className' => 'Profesores',
			'foreignKey' => 'profesores_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Materia' => array(
			'className' => 'Materia',
			'foreignKey' => 'materia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
