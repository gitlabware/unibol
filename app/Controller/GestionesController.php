<?php
class GestionesController extends AppController
{
    public $uses = array('Gestione');
    public $layout = 'unibol';

    var $components = array('Acl', 'Auth');
    public function index()
    {
        $gestiones = $this->Gestione->find('all');
        $this->set(compact('gestiones'));
    }
    
    public function insertar()
    {
        if (!empty($this->data)) { 
            $this->Gestione->create(); 
            if ($this->Gestione->save($this->data)) { 
                $this->Session->setFlash('Gestion registrada con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 
            } else { 
                $this->Session->setFlash('No se pudo registrar al Gestion'); 
            }
        }
    }
    function editar($id = null)
    {
        $this->Gestione->id = $id;
        if (!$id) {
            $this->Session->setFlash('No Existe el tipo de Gestion');
            $this->redirect(array('action' => 'index'));
        }
        if (empty($this->data)) {
            $this->data = $this->Gestione->read();
            }
        else{
            if ($this->Gestione->save($this->data)) {
                $this->Session->setFlash('Se Guardo Correctamente la Gestion');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Error al Guardar la Gestion');
            }
        }

    }
    function eliminar($id=null){
        $this->Gestione->id=$id;
        $this->data=$this->Gestione->read();
        if(!$id){
            $this->Session->setFlash('No existe la Gestion a eliminar');
            $this->redirect(array('action' =>'index'));
        }
        else
        {
            if($this->Gestione->delete($id)){
                $this->Session->setFlash('Se elimino la Gestion '.$this->data['Gestione']['nombre']);
                $this->redirect(array('action' =>'index'));
            }
            else{
                $this->Session->setFlash('Error al eliminar');
            }
        }
    }
}

?>
