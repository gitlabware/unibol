<?php

class AlumnosMaterialesController extends AppController
{

    public $helpres = array('Html', 'Form');
    public $uses = array('AlumnosMateriale','Materiale','Alumno','Gestion');
    public $layout = 'unibol';

    public function index()
    {
        $materiales = $this->AlumnosMateriale->find('all', array('recursive' => 0));
        //debug($paralelos);
        $this->set(compact('materiales'));
        
        $dalumno = $this->Alumno->find('list', array('fields'=>'Alumno.nombre'));
        $this->set(compact('dalumno'));
        $dmaterial = $this->Materiale->find('list',array('fields'=>'Materiale.nombre'));
        $this->set(compact('dmaterial'));
        //debug($dsemestre);exit;
        
        if (!empty($this->request->data)) {
            //debug($this->request->data);exit;
            $this->AlumnosMateriale->create(); 
            if ($this->AlumnosMateriale->save($this->data)) { 
                $this->Session->setFlash('Material Registrado con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 
            } else { 
                $this->Session->setFlash('No se pudo registrar el Material'); 
            }
        }
        
        
        //debug($this->request->data);exit;
    }
    

}

?>
