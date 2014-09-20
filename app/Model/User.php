<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Carrera $Carrera
 * @property Paise $Paise
 * @property Departamento $Departamento
 * @property Organizacione $Organizacione
 * @property Group $Group
 * @property Semestre $Semestre
 * @property Alumnosmateria $Alumnosmateria
 * @property DocentesMateria $DocentesMateria
 */
class User extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed
    public function beforeSave($options = array())
    {
        if(!empty($this->data['User']['password']))
        {
            $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
        }
        
        return true;
    }
    var $virtualFields = array('nombre_completo' => 'CONCAT(User.ap_paterno," ",User.ap_materno," ",User.nombres)');
/**
 * belongsTo associations
 *
 * @var array
 */
    public $validate = array(
        'username' => array(
            'limitDuplicates' => array(
                'rule' => array('limitDuplicates',1)
                ,'message' => 'EL nombre de usuario ya existe!!!!'
            )
        ),
        'ci' => array(
            'limitDuplicates' => array(
                'rule' => array('limitDuplicates',1)
                ,'message' => 'El C.I. ya existe!!!!'
            )
        )
    );
    
    public function limitDuplicates($check, $limit) {
        
            if(!empty($this->data['User']['id']))
            {
                $id = $this->data['User']['id'];
                $check['User.id !='] = $id;
            }
            $existingPromoCount = $this->find('count', array(
                'conditions' => $check,
                'recursive' => -1
            ));
            return $existingPromoCount < $limit;
        
    }
	public $belongsTo = array(
		'Carrera' => array(
			'className' => 'Carrera',
			'foreignKey' => 'carrera_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Paise' => array(
			'className' => 'Paise',
			'foreignKey' => 'paise_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Departamento' => array(
			'className' => 'Departamento',
			'foreignKey' => 'departamento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Organizacione' => array(
			'className' => 'Organizacione',
			'foreignKey' => 'organizacione_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'group_id',
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

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Alumnosmateria' => array(
			'className' => 'Alumnosmateria',
			'foreignKey' => 'user_id',
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
			'foreignKey' => 'user_id',
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
