<?php

App::uses('AppController', 'Controller');

class EynarsController extends AppController
{

    public $layout = 'unibol';
    public $uses = array('Alumno', 'AlumnosParalelo');
    
    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('*');
    }
    
    public function sumar()
    {
        if($this->request->data){
            //debug($this->request->data);
            //$valor_a = $_POST[]
            $valorA = $this->request->data['Eynars']['numero_a'];
            $valorB = $this->request->data['Eynars']['numero_b'];
            $sumaTotal = $valorA+$valorB;
            
            //echo 'La suma total es '.$sumaTotal;
            $this->set(compact('sumaTotal'));
            
        }else{
    
         $alumnos = $this->AlumnosParalelo->find('all', array(
            'recursive'=>-1
         )); 
         
            $this->set(compact('alumnos'));   
            
        }
        
    }
    
    public function resultado()
    {
        
    }
}
