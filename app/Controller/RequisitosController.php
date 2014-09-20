<?php
class Requisito extends AppController
{
    public $uses = array('Requisito','Materia');
    public $layout = 'unibol';

    var $components = array('Acl', 'Auth');
    
    public function index()
    {
        $materias = $this->Materia->find('all');
        $this->set(compact('materias'));
    }
    
    public function insertar()
    {
        if (!empty($this->data)) { 
            $this->Materia->create(); 
            if ($this->Materia->save($this->data)) { 
                $this->Session->setFlash('Materia registrada con exito');
                $this->redirect(array('action' => 'index'), null, true); 
            } else { 
                $this->Session->setFlash('No se pudo registrar la Materia'); 
            }
        }
        
        $dcarrera = $this->Carrera->find('list',array('fields'=>'Carrera.nombre'));
        $this->set(compact('dcarrera'));
        
        $dsemestre = $this->Semestre->find('list',array('fields'=>'Semestre.nombre'));
        $this->set(compact('dsemestre'));
    }
    public function prueba()
    {
        
    }
    function editar($id = null)
    {
        $this->Materia->id = $id;
        if (!$id) {
            $this->Session->setFlash('No Existe el tipo de Materia');
            $this->redirect(array('action' => 'index'));
        }
        if (empty($this->data)) {
            $this->data = $this->Materia->read();
            }
        else{
            if ($this->Materia->save($this->data)) {
                $this->Session->setFlash('Se Guardo Correctamente la Materia');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Error al Guardar la Materia');
            }
        }
        
        $dcarrera = $this->Carrera->find('list',array('fields'=>'Carrera.nombre'));
        $this->set(compact('dcarrera'));
        
        $dsemestre = $this->Semestre->find('list',array('fields'=>'Semestre.nombre'));
        $this->set(compact('dsemestre'));

    }
    function eliminar($id=null){
        $this->Materia->id=$id;
        $this->data=$this->Materia->read();
        if(!$id){
            $this->Session->setFlash('No existe la Materia a eliminar');
            $this->redirect(array('action' =>'index'));
        }
        else
        {
            if($this->Materia->delete($id)){
                $this->Session->setFlash('Se elimino la Materia '.$this->data['Materia']['nombre']);
                $this->redirect(array('action' =>'index'));
            }
            else{
                $this->Session->setFlash('Error al eliminar');
            }
        }
    }
}

?>
