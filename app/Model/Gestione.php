<?php
App::uses('AppModel', 'Model');
/**
 * Gestione Model
 *
 * @property AlumnosParalelo $AlumnosParalelo
 * @property DocentesMateria $DocentesMateria
 * @property MateriasSemestre $MateriasSemestre
 * @property Nivele $Nivele
 * @property Paralelo $Paralelo
 * @property ParalelosSemestre $ParalelosSemestre
 */
class Gestione extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'AlumnosParalelo' => array(
			'className' => 'AlumnosParalelo',
			'foreignKey' => 'gestione_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'DocentesMateria' => array(
			'className' => 'DocentesMateria',
			'foreignKey' => 'gestione_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'MateriasSemestre' => array(
			'className' => 'MateriasSemestre',
			'foreignKey' => 'gestione_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Nivele' => array(
			'className' => 'Nivele',
			'foreignKey' => 'gestione_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Paralelo' => array(
			'className' => 'Paralelo',
			'foreignKey' => 'gestione_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'ParalelosSemestre' => array(
			'className' => 'ParalelosSemestre',
			'foreignKey' => 'gestione_id',
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
