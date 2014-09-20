<?php
class NivelesController extends AppController
{
    public $uses = array('Nivele','Gestione');
    public $layout = 'unibol';

    var $components = array('Acl', 'Auth');
    public function index()
    {
        $niveles = $this->Nivele->find('all');
        $this->set(compact('niveles'));
    }
    
    public function insertar()
    {
        if (!empty($this->data)) { 
            $this->Nivele->create(); 
            if ($this->Nivele->save($this->data)) { 
                $this->Session->setFlash('Nivel registrado con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 
            } else { 
                $this->Session->setFlash('No se pudo registrar el Nivel'); 
            }
        }
        $dgestion = $this->Gestione->find('list',array('fields'=>'Gestione.nombre'));
        $this->set(compact('dgestion'));
        
    }
    function editar($id = null)
    {
        $this->Nivele->id = $id;
        if (!$id) {
            $this->Session->setFlash('No Existe el tipo el Nivel');
            $this->redirect(array('action' => 'index'));
        }
        if (empty($this->data)) {
            $this->data = $this->Nivele->read();
            }
        else{
            if ($this->Nivele->save($this->data)) {
                $this->Session->setFlash('Se Guardo Correctamente el Nivel');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Error al Guardar al Nivel');
            }
        }
        $dgestion = $this->Gestione->find('list',array('fields'=>'Gestione.nombre'));
        $this->set(compact('dgestion'));

    }
    function eliminar($id=null){
        $this->Nivele->id=$id;
        $this->data=$this->Nivele->read();
        if(!$id){
            $this->Session->setFlash('No existe el Nivel a eliminar');
            $this->redirect(array('action' =>'index'));
        }
        else
        {
            if($this->Nivele->delete($id)){
                $this->Session->setFlash('Se elimino el Nivel '.$this->data['Nivele']['nombre']);
                $this->redirect(array('action' =>'index'));
            }
            else{
                $this->Session->setFlash('Error al eliminar');
            }
        }
    }
}

?>