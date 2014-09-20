<?php

class ParalelosSemestresController extends AppController
{

    public $helpres = array('Html', 'Form');
    public $uses = array('ParalelosSemestre','Semestre','Paralelo','Gestion');
    public $layout = 'unibol';

    var $components = array('Acl', 'Auth');
    public function index()
    {
        $paralelos = $this->ParalelosSemestre->find('all', array('recursive' => 0));
        //debug($paralelos);
        $this->set(compact('paralelos'));
        
        $dsemestre = $this->Semestre->find('list',array('fields'=>'Semestre.nombre'));
        $this->set(compact('dsemestre'));
        //debug($dsemestre);exit;
        $dparalelo = $this->Paralelo->find('list',array('fields'=>'Paralelo.curso'));
        $this->set(compact('dparalelo'));
        
        if (!empty($this->request->data)) { 
            $this->ParalelosSemestre->create(); 
            if ($this->ParalelosSemestre->save($this->data)) { 
                $this->Session->setFlash('Paralelo Semestre registrado con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 
            } else { 
                $this->Session->setFlash('No se pudo registrar al Paralelo Semestre'); 
            }
        }
        
        
        //debug($this->request->data);exit;
    }
    
    public function insertar()
    {
        if (!empty($this->request->data)) { 
            $this->ParalelosSemestre->create(); 
            if ($this->ParalelosSemestre->save($this->data)) { 
                $this->Session->setFlash('Paralelo Semestre registrado con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 
            } else { 
                $this->Session->setFlash('No se pudo registrar al Paralelo Semestre'); 
            }
        }
        $dsemestre = $this->Semestre->find('list',array('fields'=>'Semestre.nombre'));
        $this->set(compact('dsemestre'));
       // debug($dsemestre);exit;
        $dparalelo = $this->Paralelo->find('list',array('fields'=>'Paralelo.nombre'));
        $this->set(compact('dparalelo'));
    }
    

}

?>
