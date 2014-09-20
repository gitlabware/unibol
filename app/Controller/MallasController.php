<?php
class MallasController extends AppController
{
    public $uses = array('Malla','Periodo');
    public $layout = 'unibol';

    var $components = array('Acl', 'Auth');
    public function index()
    {
        $mallas = $this->Malla->find('all');
        $this->set(compact('mallas'));
    }
    
    public function insertar()
    {
        
        if (!empty($this->data)) { 
            $this->Malla->create(); 
            $idp = $this->request->data['Malla']['periodo_id'];
            $periodo = $this->Periodo->find('first',array('conditions'=>array('Periodo.id'=>$idp)));
            
            $nombre = $periodo['Periodo']['nombre'].'/'.$this->request->data['Malla']['ano'];
            $this->request->data['Malla']['nombre'] = $nombre;
            if ($this->Malla->save($this->data)) { 
                $this->Session->setFlash('Malla registrada con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 
            } else { 
                $this->Session->setFlash('No se pudo registrar la Malla'); 
            }
        }
        $periodos = $this->Periodo->find('list',array('fields'=>array('Periodo.nombre')));
        $this->set(compact('periodos'));
    }
    function editar($id = null)
    {
        $this->Malla->id = $id;
        if (!$id) {
            $this->Session->setFlash('No Existe la Malla');
            $this->redirect(array('action' => 'index'));
        }
        if (empty($this->data)) {
            $this->data = $this->Malla->read();
            }
        else{
            $idp = $this->request->data['Malla']['periodo_id'];
            $periodo = $this->Periodo->find('first',array('conditions'=>array('Periodo.id'=>$idp)));
            
            $nombre = $periodo['Periodo']['nombre'].'/'.$this->request->data['Malla']['ano'];
            $this->request->data['Malla']['nombre'] = $nombre;
            if ($this->Malla->save($this->data)) {
                $this->Session->setFlash('Se Guardo Correctamente la Malla');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Error al Guardar la Malla');
            }
        }
        $periodos = $this->Periodo->find('list',array('fields'=>array('Periodo.nombre')));
        $this->set(compact('periodos'));
 
    }
    function eliminar($id=null){
        $this->Malla->id=$id;
        $this->data=$this->Malla->read();
        if(!$id){
            $this->Session->setFlash('No existe la Malla a elimminar');
            $this->redirect(array('action' =>'index'));
        }
        else
        {
            if($this->Malla->delete($id)){
                $this->Session->setFlash('Se elimino la Malla '.$this->data['Malla']['nombre']);
                $this->redirect(array('action' =>'index'));
            }
            else{
                $this->Session->setFlash('Error al eliminar');
            }
        }
    }
}

?>
