<?php
App::uses('AppModel', 'Model');
/**
 * Alumnosnota Model
 *
 * @property Excel $Excel
 * @property Alumno $Alumno
 * @property Docente $Docente
 * @property Materia $Materia
 * @property Semestre $Semestre
 * @property Malla $Malla
 * @property Carrera $Carrera
 */
class Alumnosnota extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Excel' => array(
			'className' => 'Excel',
			'foreignKey' => 'excel_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Docente' => array(
			'className' => 'Docente',
			'foreignKey' => 'docente_id',
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
		),
		'Semestre' => array(
			'className' => 'Semestre',
			'foreignKey' => 'semestre_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Malla' => array(
			'className' => 'Malla',
			'foreignKey' => 'malla_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Carrera' => array(
			'className' => 'Carrera',
			'foreignKey' => 'carrera_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
