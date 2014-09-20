<?php
class CiclosController extends AppController
{
    public $same ='Ciclos';
    public $uses =array('Ciclo','Gestione');
    public $layout = 'colegio';
    public function index ()
    {
    $ciclos=$this->Ciclo->find('all');
    $this->set(compact('ciclos'));
    }    
    public function insertar()
    {
        if(!empty($this->request->data))
            {
                $this->Ciclo->create();
                    if($this->Ciclo->save($this->data))
                        {
                            $this->Session->setFlash('Ciclo Registrado con Exito', 'msgbueno');
                            $this->redirect(array('action'=>'index'));
                        }
                    else
                    {
                        $this->Session->setFlash('No se pudo registrar el Ciclo');
                    }
            }
        $dgestion = $this->Gestione->find('list', array('fields'=>'Gestione.nombre'));
        $this->set(compact('dgestion'));
        //debug($dgestion);exit;
    }
    public function editar($id=null)
    {
        $this->Ciclo->id=$id;
            if(!$id)
            {
                $this->Session->setFlash('No existe el Ciclo');
                $this->redirect(array('action'=>'index'));
            }
            if(empty($this->request->data))
            {
                $this->data=$this->Ciclo->read();
            }
                else
                {
                    if($this->Ciclo->save($this->data))
                    {
                        $this->Session->setFlash('Los datos fueron modificados', 'msgbueno');
                        $this->redirect(array('action'=>'index'));
                    }
                    else
                    {
                        $this->Session->setFlash('no se puedo modificar');    
                    }
                }
        $dgestion = $this->Gestione->find('list', array('fields'=>'Gestione.nombre'));
        $this->set(compact('dgestion'));
        //debug($dgestion);exit;
    }
    public function eliminar($id=null)
    {
        $this->Ciclo->id=$id;
        $this->data=$this->Ciclo->read();
        if(!$id){
            $this->Session->setFlash('No existe el Ciclo a Eliminar');
            $this->redirect(array('action' =>'index'));
        }
        else{
            if($this->Ciclo->delete($id))
            {
                $this->Session->setFlash('Se elimino el Ciclo '.$this->data['Ciclo']['nombre']);
                $this->redirect(array('action' =>'index'));
            }
            else{
                $this->Session->setFlash('Error al eliminar');
            }
        }
    }
}
?>