<?php
class ParalelosController extends AppController
{
    public $uses = array('Paralelo','Nivele','Gestione');
    public $layout = 'unibol';
    public function index()
    {
        $paralelos = $this->Paralelo->find('all');
        $this->set(compact('paralelos'));
    }
    
    public function insertar()
    {
        if (!empty($this->data)) { 
            $this->Paralelo->create(); 
            if ($this->Paralelo->save($this->data)) { 
                $this->Session->setFlash('Paralelo registrado con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 
            } else { 
                $this->Session->setFlash('No se pudo registrar el Paralelo'); 
            }
        }
        $dniveles = $this->Nivele->find('list',array('fields'=>'Nivele.nombre'));
        $this->set(compact('dniveles'));
        //debug($dniveles);exit;
        $dgestiones = $this->Gestione->find('list',array('fields'=>'Gestione.nombre'));
        $this->set(compact('dgestiones'));
    }
    function editar($id = null)
    {
        $this->Paralelo->id = $id;
        if (!$id) {
            $this->Session->setFlash('No Existe el tipo de Paralelo');
            $this->redirect(array('action' => 'index'));
        }
        if (empty($this->data)) {
            $this->data = $this->Paralelo->read();
            }
        else{
            if ($this->Paralelo->save($this->data)) {
                $this->Session->setFlash('Se Guardo Correctamente el Paralelo');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Error al Guardar el Paralelo');
            }
        }
        $dniveles = $this->Nivele->find('list',array('fields'=>'Nivele.nombre'));
        $this->set(compact('dniveles'));
        //debug($dniveles);exit;
        $dgestiones = $this->Gestione->find('list',array('fields'=>'Gestione.nombre'));
        $this->set(compact('dgestiones'));

    }
    function eliminar($id=null){
        $this->Paralelo->id=$id;
        $this->data=$this->Paralelo->read();
        if(!$id){
            $this->Session->setFlash('No existe el Paralelo a eliminar');
            $this->redirect(array('action' =>'index'));
        }
        else
        {
            if($this->Paralelo->delete($id)){
                $this->Session->setFlash('Se elimino el Paralelo '.$this->data['Paralelo']['nombre']);
                $this->redirect(array('action' =>'index'));
            }
            else{
                $this->Session->setFlash('Error al eliminar');
            }
        }
    }
}

?>
