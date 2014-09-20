<?php
class MateriasSemestresController extends AppController
{
    public $uses = array('MateriasSemestre','Materia','Semestre','Gestione');
    public $layout = 'unibol';

    var $components = array('Acl', 'Auth');
     public function index()
    {
        $matsemestres = $this->MateriasSemestre->find('all');
        //debug($dato);exit;
        $this->set(compact('matsemestres'));
        
    }
    
    public function insertar()
    {
        if (!empty($this->data)) { 
            $this->MateriasSemestre->create(); 
            if ($this->MateriasSemestre->save($this->data)) { 
                $this->Session->setFlash('Materia Semestre registrado con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 
            } else { 
                $this->Session->setFlash('No se pudo registrar la Materia Semestre'); 
            }
        }
        $dmateria = $this->Materia->find('list',array('fields'=>'Materia.nombre'));
        $this->set(compact('dmateria'));
        $dsemestre = $this->Semestre->find('list',array('fields'=>'Semestre.nombre'));
        $this->set(compact('dsemestre'));
        $dgestion = $this->Gestione->find('list',array('fields'=>'Gestione.nombre'));
        $this->set(compact('dgestion'));
        
    }
    function editar($id = null)
    {
        $this->MateriasSemestre->id = $id;
        if (!$id) {
            $this->Session->setFlash('No Existe el tipo de Materia Semestre');
            $this->redirect(array('action' => 'index'));
        }
        if (empty($this->data)) {
            $this->data = $this->MateriasSemestre->read();
            }
        else{
            if ($this->MateriasSemestre->save($this->data)) {
                $this->Session->setFlash('Se Guardo Correctamente la Materia Semestre');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Error al Guardar la  Materia Semestre');
            }
        }
        $dmateria = $this->Materia->find('list',array('fields'=>'Materia.nombre'));
        $this->set(compact('dmateria'));
        $dsemestre = $this->Semestre->find('list',array('fields'=>'Semestre.nombre'));
        $this->set(compact('dsemestre'));
        $dgestion = $this->Gestione->find('list',array('fields'=>'Gestione.nombre'));
        $this->set(compact('dgestion'));
     

    }
    function eliminar($id=null){
        $this->MateriasSemestre->id=$id;
        $this->data=$this->MateriasSemestre->read();
        if(!$id){
            $this->Session->setFlash('No existe la Materia Semestre a eliminar');
            $this->redirect(array('action' =>'index'));
        }
        else
        {
            if($this->MateriasSemestre->delete($id)){
                $this->Session->setFlash('Se elimino la Materia Semestre '.$this->data['MateriasSemestre']['nombre']);
                $this->redirect(array('action' =>'index'));
            }
            else{
                $this->Session->setFlash('Error al eliminar');
            }
        }
    }
}

?>
