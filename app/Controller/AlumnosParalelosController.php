<?php
class AlumnosParalelosController extends AppController
{
    public $uses = array('AlumnosParalelo','Alumno','Paralelo','Estado','Gestione','Nivele');
    public $layout = 'unibol';
    var $components = array('Acl', 'Auth');
    
     public function index()
    {
        $alumnosparalelos = $this->AlumnosParalelo->find('all');
        //debug($dato);exit;
        $this->set(compact('alumnosparalelos'));
        
    }
    
    public function insertar()
    {
        if (!empty($this->data)) { 
            $this->AlumnosParalelo->create(); 
            if ($this->AlumnosParalelo->save($this->data)) { 
                $this->Session->setFlash('Carreras Materias registrado con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 
            } else { 
                $this->Session->setFlash('No se pudo registrar al Carreras Materias'); 
            }
        }
        $dalumno = $this->Alumno->find('list',array('fields'=>'Alumno.nombre'));
        $this->set(compact('dalumno'));
        $dgestion = $this->Gestione->find('list',array('fields'=>'Gestione.nombre'));
        $this->set(compact('dgestion'));
        $dparalelo = $this->Paralelo->find('list',array('fields'=>'Paralelo.nombre'));
        $this->set(compact('dparalelo'));
        $destado = $this->Estado->find('list',array('fields'=>'Estado.nombre'));
        $this->set(compact('destado'));
        $dnivel = $this->Nivele->find('list',array('fields'=>'Nivele.nombre'));
        $this->set(compact('dnivel'));
    }
    function editar($id = null)
    {
        $this->AlumnosParalelo->id = $id;
        if (!$id) {
            $this->Session->setFlash('No Existe el tipo el Carreras Materias');
            $this->redirect(array('action' => 'index'));
        }
        if (empty($this->data)) {
            $this->data = $this->AlumnosParalelo->read();
            }
        else{
            if ($this->AlumnosParalelo->save($this->data)) {
                $this->Session->setFlash('Se Guardo Correctamente el Carreras Materias');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Error al Guardar al Carreras Materias');
            }
        }
        $dalumno = $this->Alumno->find('list',array('fields'=>'Alumno.nombre'));
        $this->set(compact('dalumno'));
        $dgestion = $this->Gestione->find('list',array('fields'=>'Gestione.nombre'));
        $this->set(compact('dgestion'));
        $dparalelo = $this->Paralelo->find('list',array('fields'=>'Paralelo.nombre'));
        $this->set(compact('dparalelo'));
        $destado = $this->Estado->find('list',array('fields'=>'Estado.nombre'));
        $this->set(compact('destado'));
        $dnivel = $this->Nivele->find('list',array('fields'=>'Nivele.nombre'));
        $this->set(compact('dnivel'));

    }
    function eliminar($id=null){
        $this->AlumnosParalelo->id=$id;
        $this->data=$this->AlumnosParalelo->read();
        if(!$id){
            $this->Session->setFlash('No existe las CarrerasMaterias a eliminar');
            $this->redirect(array('action' =>'index'));
        }
        else
        {
            if($this->AlumnosParalelo->delete($id)){
                $this->Session->setFlash('Se elimino las CarrerasMaterias '.$this->data['CarrerasMateria']['nombre']);
                $this->redirect(array('action' =>'index'));
            }
            else{
                $this->Session->setFlash('Error al eliminar');
            }
        }
    }
}

?>
