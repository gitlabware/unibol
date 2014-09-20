<?php
class OrganizacionesController extends AppController
{
    public $uses = array('Organizacione');
    public $layout = 'unibol';
    var $components = array('Acl', 'Auth');
    public function index()
    {
        $organizaciones = $this->Organizacione->find('all');
        $this->set(compact('organizaciones'));
    }
    public function insertar()
    {
        if (!empty($this->data)) { 
            $this->Organizacione->create(); 
            if ($this->Organizacione->save($this->data)) { 
                $this->Session->setFlash('Organizacion registrada con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 
            } else { 
                $this->Session->setFlash('No se pudo registrar la Organizacion'); 
            }
        }
    }
    function editar($id = null)
    {
        $this->Organizacione->id = $id;
        if (!$id) {
            $this->Session->setFlash('No Existe la Organizacion');
            $this->redirect(array('action' => 'index'));
        }
        if (empty($this->data)) {
            $this->data = $this->Organizacione->read();
            }
        else{
            if ($this->Organizacione->save($this->data)) {
                $this->Session->setFlash('Se Guardo Correctamente la Organizacion');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Error al Guardar la Organizacione');
            }
        }

    }
    function eliminar($id=null){
        $this->Organizacione->id=$id;
        $this->data=$this->Organizacione->read();
        if(!$id){
            $this->Session->setFlash('No existe la Organizacion a elimminar');
            $this->redirect(array('action' =>'index'));
        }
        else
        {
            if($this->Organizacione->delete($id)){
                $this->Session->setFlash('Se elimino la Organizacion '.$this->data['Organizacione']['nombre']);
                $this->redirect(array('action' =>'index'));
            }
            else{
                $this->Session->setFlash('Error al eliminar');
            }
        }
    }
} 
?>
