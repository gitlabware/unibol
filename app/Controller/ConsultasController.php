<?php
App::uses('AppController', 'Controller');

class ConsultasController extends AppController {

    public $uses = array('Gestione', 'Paralelo');
    public $layout = 'colegio';
    public function index(){
        $gestiones = $this->Gestione->find('all', array(
            'recursive'=>0           
            ));
        $this->set(compact('gestiones'));
    }
        function insertar(){
        if(!empty($this->data)){
            if($this->Gestione->save($this->data)){
                $this->Session->setFlash('Se Guardo Correctamente!!!');
                $this->redirect(array('action'=>'index')); 
                }
            else{
                $this->Session->setFlash('Error al Guardar consulte con el Administrador de Sistema');
            }
        }
        
    }
    
    function editar($id=null){
        $this->Gestione->id=$id;
        if(!$id){
            $this->Session->setFlash('No Existe el tipo de Gestion');
            $this->redirect(array('action' =>'index'));
        }
        if(empty($this->data)){
            $this->data=$this->Gestione->read();
        }
        else{
            if($this->Gestione->save($this->data)){
                $this->Session->setFlash('Se Guardo Correctamente la Gestion');
                $this->redirect(array('action'=>'index'));
                }
                else{
                    $this->Session->setFlash('Error al guardar la Gestion');
                }
        }

    }
    function eliminar($id=null){
        $gestion = $this->Gestione->find('first', array(
        'conditions'=>array('Gestione.id'=>$id)));
        
        $paralelo = $this->Paralelo->find('count', array(
        'conditions'=>array('Paralelo.gestion LIKE'=>$gestion['Gestione']['nombre'])));
        
        if($paralelo != 0){
            $this->Session->setFlash('No se puede eliminar la Gestion '.$gestion['Gestione']['nombre'].' por tener paralelos registrados', 'msginfo');
            $this->redirect(array('action' =>'index'));
        }
        $this->Gestione->id=$id;
        
        $this->request->data=$this->Gestione->read();
        
        if(!$id){
            $this->Session->setFlash('No existe la Gestion a Eliminar');
            $this->redirect(array('action' =>'index'));
        }
        else{
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
