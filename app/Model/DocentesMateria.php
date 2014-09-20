<?php
App::uses('AppModel', 'Model');
/**
 * DocentesMateria Model
 *
 * @property Malla $Malla
 * @property Materia $Materia
 * @property User $User
 * @property Carrera $Carrera
 * @property Excel $Excel
 * @property Docente $Docente
 * @property Alumnosmateria $Alumnosmateria
 */
class DocentesMateria extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Malla' => array(
			'className' => 'Malla',
			'foreignKey' => 'malla_id',
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
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
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
		),
		'Excel' => array(
			'className' => 'Excel',
			'foreignKey' => 'excel_id',
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
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Alumnosmateria' => array(
			'className' => 'Alumnosmateria',
			'foreignKey' => 'docentes_materia_id',
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
