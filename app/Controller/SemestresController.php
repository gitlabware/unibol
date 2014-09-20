<?php
class SemestresController extends AppController
{
    public $uses = array('Semestre');
    public $layout = 'unibol';
    public function index()
    {
        $semestres = $this->Semestre->find('all');
        $this->set(compact('semestres'));
    }
    
    public function insertar()
    {
        if (!empty($this->data)) { 
            $this->Semestre->create(); 
            if ($this->Semestre->save($this->data)) { 
                $this->Session->setFlash('Semestre registrado con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 
            } else { 
                $this->Session->setFlash('No se pudo registrar el Semestre'); 
            }
        }
    }
    function editar($id = null)
    {
        $this->Semestre->id = $id;
        if (!$id) {
            $this->Session->setFlash('No Existe el tipo de Semestre');
            $this->redirect(array('action' => 'index'));
        }
        if (empty($this->data)) {
            $this->data = $this->Semestre->read();
            }
        else{
            if ($this->Semestre->save($this->data)) {
                $this->Session->setFlash('Se Guardo Correctamente el Semestre');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Error al Guardar el Semestre');
            }
        }

    }
    function eliminar($id=null){
        $this->Semestre->id=$id;
        $this->data=$this->Semestre->read();
        if(!$id){
            $this->Session->setFlash('No existe el Semestre a eliminar');
            $this->redirect(array('action' =>'index'));
        }
        else
        {
            if($this->Semestre->delete($id)){
                $this->Session->setFlash('Se elimino el Semestre '.$this->data['Semestre']['nombre']);
                $this->redirect(array('action' =>'index'));
            }
            else{
                $this->Session->setFlash('Error al eliminar');
            }
        }
    }
}

?>
