<?php
class AlumnoTomaMateriasController extends AppController
{
    public $uses = array('AlumnosMateria','Alumno','User','Materia','Paralelo','DocentesMateria', 'Carrera', 'Gestione','Docente');
    public $layout = 'unibol';

    
    
    public function index($id = null)
    {
        $alumnoMateria = $this->AlumnosMateria->find('all');
        $this->set(compact('alumnoMateria'));
        $user_id=$this->Session->read('user_id');
        //debug($user_id);exit; 
        $all= $this->Alumno->find('first',array('conditions'=>array('Alumno.user_id'=>$user_id)));  
   	    $alumnoid = $all['Alumno']['id'];   
        //debug($alumnoid);exit;
        
        $myall = $this->AlumnosSemestre->find('first', array(
        'conditions'=>array('AlumnosSemestre.alumno_id'=>$alumnoid), 
        'order'=>'AlumnosSemestre.id DESC', 
        'recursive'=>-1
            ));
        //debug($myall);exit;
    }

}

?>
