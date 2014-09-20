<?php
class CarrerasController extends AppController
{
    public $uses = array('Carrera','Materia');
    public $layout = 'unibol';
    public $helpers = array('Js' => array('Jquery'));
    var $components = array('Acl', 'Auth','RequestHandler');
    
    public function index()
    {
        $carreras = $this->Carrera->find('all');
        $this->set(compact('carreras'));
    }
    public function materias($idcarrera = null)
    {
        $materias = $this->Materia->find('all',array('order' => 'Materia.semestre_id','conditions' => array('Materia.carrera_id' => $idcarrera)));
        //debug($materias);exit;
        $this->set(compact('materias'));
    }
    public function insertar()
    {
        if (!empty($this->data)) { 
            $this->Carrera->create(); 
            if ($this->Carrera->save($this->data)) { 
                $this->Session->setFlash('Carrera registrada con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 
            } else { 
                $this->Session->setFlash('No se pudo registrar la Carrera'); 
            }
        }
    }
    function editar($id = null)
    {
        $this->Carrera->id = $id;
        if (!$id) {
            $this->Session->setFlash('No Existe la Carrera');
            $this->redirect(array('action' => 'index'));
        }
        if (empty($this->data)) {
            $this->data = $this->Carrera->read();
            }
        else{
            if ($this->Carrera->save($this->data)) {
                $this->Session->setFlash('Se Guardo Correctamente la Carrera');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Error al Guardar la Carrera');
            }
        }

    }
    function ajaxprueba()
    {
        $this->set('msg','Eynar');
        
    }
    function eliminar($id=null){
        $this->Carrera->id=$id;
        $this->data=$this->Carrera->read();
        if(!$id){
            $this->Session->setFlash('No existe la Carrera a elimminar');
            $this->redirect(array('action' =>'index'));
        }
        else
        {
            if($this->Carrera->delete($id)){
                $this->Session->setFlash('Se elimino la Carrera '.$this->data['Carrera']['nombre']);
                $this->redirect(array('action' =>'index'));
            }
            else{
                $this->Session->setFlash('Error al eliminar');
            }
        }
    }
}

?>
