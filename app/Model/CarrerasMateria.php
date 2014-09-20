<?php
App::uses('AppModel', 'Model');
/**
 * CarrerasMateria Model
 *
 * @property Carrera $Carrera
 * @property Materia $Materia
 * @property Gestione $Gestione
 * @property Semestre $Semestre
 */
class CarrerasMateria extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Carrera' => array(
			'className' => 'Carrera',
			'foreignKey' => 'carrera_id',
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
		'Gestione' => array(
			'className' => 'Gestione',
			'foreignKey' => 'gestione_id',
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
		)
	);
}
