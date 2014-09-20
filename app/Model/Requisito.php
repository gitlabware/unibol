<?php
App::uses('AppModel', 'Model');
/**
 * Requisito Model
 *
 * @property Materia $Materia
 * @property aprobada $Aprobada
 */
class Requisito extends AppModel {


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
		'Aprobada' => array(
			'className' => 'Materia',
			'foreignKey' => 'aprobada',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
