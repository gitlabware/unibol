<?php
App::uses('AppModel', 'Model');
/**
 * Alumnosmateria Model
 *
 * @property User $User
 * @property DocentesMateria $DocentesMateria
 * @property Carrera $Carrera
 * @property Malla $Malla
 */
class Alumnosmateria extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'DocentesMateria' => array(
			'className' => 'DocentesMateria',
			'foreignKey' => 'docentes_materia_id',
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
		'Malla' => array(
			'className' => 'Malla',
			'foreignKey' => 'malla_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
