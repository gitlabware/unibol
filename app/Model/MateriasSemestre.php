<?php
App::uses('AppModel', 'Model');
/**
 * MateriasSemestre Model
 *
 * @property Materia $Materia
 * @property Semestre $Semestre
 * @property Gestione $Gestione
 */
class MateriasSemestre extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
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
		'Gestione' => array(
			'className' => 'Gestione',
			'foreignKey' => 'gestione_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
