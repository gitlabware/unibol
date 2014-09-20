<?php
class UsuariosController extends AppController {
	
	public $name='Usuarios';
	public $uses=array('Usuario');
	public $helpers=array('Html','Form');
	public $components=array('Session');
    public $layout='colegio';
    function index(){
	
	$usuarios=$this->Usuario->find('all');
	$this->set(compact('usuarios'));
    }
	
    function insertar(){
	    if(!empty($this->data)):
	    	debug($this->data);exit;
	    	$this->request->data['Usuario']['clave']=sha1($this->data['Usuario']['clave']);
	    	if($this->Usuario->save($this->data)):
	    		$this->Session->setFlash('Registro Con Exito!');
	    		$this->redirect(array('controller'=>'Usuarios','action'=>'index'));	
	    	endif;
	    endif;
	    
    }
    
    function eliminar($id=null){
        $this->Usuario->id=$id;
        $this->data=$this->Usuario->read();
        if(!$id){
            $this->Session->setFlash('No existe el usuario a eliminar');
            $this->redirect(array('action' =>'index'));
        }
        else
        {
            if($this->Usuario->delete($id)){
                $this->Session->setFlash('Se elimino el usuario '.$this->data['Usuario']['nombre']);
                $this->redirect(array('action' =>'index'));
            }
            else{
                $this->Session->setFlash('Error al eliminar');
            }
        }
    }
    
    function editar($id=null){
        
        $this->Usuario->id = $id;
        if (!$id) {
            $this->Session->setFlash('No existe el Usuario');
            $this->redirect(array('action' => 'index'), null, true);
        }
        if (empty($this->data)) {
            $this->data = $this->Usuario->read();

        } else {
            //debug($this->data);exit;
            if(!empty($this->data['Usuario']['password1'])):
                $this->request->data['Usuario']['password']=sha1($this->data['Usuario']['password1']);
            else:
                $this->request->data['Usuario']['password']=$this->data['Usuario']['password'];
            endif;
            if ($this->Usuario->save($this->data)) {
                $this->Session->setFlash('Los datos fueron modificados');
                $this->redirect(array('action' => 'index'), null, true);
            } else {
                $this->Session->setFlash('no se pudo modificar!!');
            }
        }  
     $dus = $this->Perfile->find('list', array('fields'=>'Perfile.nombre'));
     $this->set(compact('dus'));      
    }
}
?>