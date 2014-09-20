<?php


class AlumnosmateriasController extends AppController
{
    public $uses = array('Alumnosmateria','DocentesMateria','User','Malla','Carrera');
    public $layout = 'unibol';
    var $components = array('Acl', 'Auth');
    
    
    public function lista($idcarrera = null,$idmalla =null)
    {
        $alumnos = $this->User->find('all',array('conditions'=>array('User.group_id'=>3,'User.carrera_id'=>$idcarrera)));
        $this->set(compact('alumnos','idcarrera','idmalla'));
        
    }
    public function inscribe($idalumno = null,$idcarrera = null,$idmalla =null)
    {
        $paralelos = $this->Alumnosmateria->find('all',array('conditions'=>array('Alumnosmateria.user_id'=>$idalumno,
        'Alumnosmateria.malla_id'=>$idmalla,'Alumnosmateria.carrera_id'=>$idcarrera)));
        //debug($paralelos);exit;
        $alumno = $this->User->find('first',array('conditions'=>array('User.id'=>$idalumno)));
        $pselect = $this->DocentesMateria->find('list',array('conditions'=>array('DocentesMateria.malla_id'=>$idmalla,
        'DocentesMateria.carrera_id'=>$idcarrera),'fields'=>'DocentesMateria.nombre'));
        
        $this->set(compact('paralelos','alumno','pselect','idalumno','idcarrera','idmalla'));
        if (!empty($this->data)) { 
            $this->Alumnosmateria->create(); 
            $this->request->data['Alumnosmateria']['user_id'] = $idalumno;
            $this->request->data['Alumnosmateria']['carrera_id'] = $idcarrera;
            $this->request->data['Alumnosmateria']['malla_id'] = $idmalla;
            $sw = 0;
            foreach ($paralelos as $p)
            {
                if ($p['Alumnosmateria']['docentes_materia_id'] == $this->request->data['Alumnosmateria']['docentes_materia_id'] )
                {
                    $sw = 1;
                }
            }
            if ($sw != 1)
            {
                if ($this->Alumnosmateria->save($this->data)) { 
                $this->Session->setFlash('Paralelo registrado con exito'); 
                $this->redirect(array('action' => 'inscribe',$idalumno,$idcarrera,$idmalla), null, true); 
                } else { 
                    $this->Session->setFlash('No se pudo registrar al Docentes Materias'); 
                    $this->redirect(array('action' => 'inscribe',$idalumno,$idcarrera,$idmalla), null, true);
                }
            }
            else{
                $this->Session->setFlash('No se pudo registrar al Docentes Materias'); 
                $this->redirect(array('action' => 'inscribe',$idalumno,$idcarrera,$idmalla), null, true);
            }
            
        }
    }
    public function inscribe2($codalumno = null)
    {
        $idalumno = $this->User->find('first',array('conditions'=>array('User.')));
        $idcarrera = $this->Carrera->find('');
        
    }
    function eliminaparalelo($id = null,$idalumno = null,$idcarrera = null,$idmalla =null)
    {
        $this->Alumnosmateria->id=$id;
        $this->data=$this->Alumnosmateria->read();
        if(!$id){
            $this->Session->setFlash('No existe las Docentes Materias a eliminar');
            $this->redirect(array('action' => 'inscribe',$idalumno,$idcarrera,$idmalla), null, true);
        }
        else
        {
            if($this->Alumnosmateria->delete($id)){
                $this->Session->setFlash('Se elimino el Docente Materia '.$this->data['Alumnosmateria']['nombre']);
                $this->redirect(array('action' => 'inscribe',$idalumno,$idcarrera,$idmalla), null, true);
            }
            else{
                $this->Session->setFlash('Error al eliminar');
            }
        }
    }
    function editar($id = null,$idcarrera = null,$idmalla =null)
    {
        $this->DocentesMateria->id = $id;
        if (!$id) {
            $this->Session->setFlash('No Existe el tipo de Docentes Materias');
            $this->redirect(array('action' => 'lista',$idcarrera,$idmalla), null, true);
        }
        if (empty($this->data)) {
            $this->data = $this->DocentesMateria->read();
            }
        else{
            if ($this->DocentesMateria->save($this->data)) {
                $this->Session->setFlash('Se Guardo Correctamente Docentes Materias');
                $this->redirect(array('action' => 'lista',$idcarrera,$idmalla), null, true);
            } else {
                $this->Session->setFlash('Error al Guardar Docentes Materias');
                $this->redirect(array('action' => 'lista',$idcarrera,$idmalla), null, true);
            }
        }
       
        $dmateria = $this->Materia->find('list',array('fields'=>'Materia.nombre','conditions'=>array('Materia.carrera_id'=>$idcarrera)));
        $this->set(compact('dmateria'));
        $ddocente = $this->User->find('list',array('fields'=>'User.ci','conditions'=>array('User.group_id'=>2)));
        $this->set(compact('ddocente'));

    }
    function eliminar($id=null,$idcarrera = null,$idmalla =null){
        $this->DocentesMateria->id=$id;
        $this->data=$this->Alumnosmateria->read();
        if(!$id){
            $this->Session->setFlash('No existe las Docentes Materias a eliminar');
            $this->redirect(array('action' => 'lista',$idcarrera,$idmalla), null, true); 
        }
        else
        {
            if($this->Alumnosmateria->delete($id)){
                $this->Session->setFlash('Se elimino el Docente Materia '.$this->data['Alumnosmateria']['nombre']);
                $this->redirect(array('action' => 'lista',$idcarrera,$idmalla), null, true); 
            }
            else{
                $this->Session->setFlash('Error al eliminar');
            }
        }
    }
}

?>
