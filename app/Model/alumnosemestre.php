<?php
class Alumnosemestre extends AppModel{
    public $name = 'Alumnosemestre';
    public $belongsTo = array(
        'Estado' => array(
            'className'    => 'Estado',
            'foreignKey' => 'estado_id'
            
        ),
        'Alumno'=>array(
           'className'    => 'Alumno',
            'foreignKey' => 'alumno_id'
        )
    );
    
    }
?>