<?php

App::uses('AppController', 'Controller');

class PrincipalController extends AppController
{
    public $uses = array(
        'Docente',
        'ParalelosProfesore',
        'Paralelo', 
        'AlumnosPadre',
        'Malla'
        );
    public $helper = array('Javascript', 'Ajax');
    public $components = array('Codigocontrol','Acl', 'Auth');
    public $layout = 'unibol';
    public function index()
    {
        $idUsuario = $this->Auth->user('id');
        $idGrupo = $this->Auth->user('group_id');
        //echo $idGrupo;
        switch ($idGrupo)
        {
            case 1:
               $this->redirect(array('action' => 'admin'));
                break;
            case 2:
                $this->redirect(array('action' => 'inicioprofesores'));
                break;
            case 3:
                $this->redirect(array('action' => 'profesores'));
                break;
            case 4:
                $this->redirect(array('action' => 'padres'));
                break;
        }
    }

    public function admin()
    {
        $malla = $this->Malla->find('first',array('order'=>'Malla.id DESC'));
        $idm = $malla['Malla']['id'];
        $this->set(compact('idm'));
    }

    public function profesores()
    {
        $gestion = date("Y");
        
        $idProfesor = $this->Auth->user('profesore_id');
        
        $materiasProfesor = $this->ParalelosProfesore->find('all', array(
            'recursive' => -1, 
            'conditions' => array(
                'ParalelosProfesore.profesore_id' => $idProfesor,
                'gestion'=>$gestion
            )));
        $c = 0;
        //debug($materiasProfesor);
        
        $paralelosProfesor = array();
        foreach ($materiasProfesor as $mp)
        {
            $paralelosProfesor[$c] = $mp['ParalelosProfesore']['paralelo_id'];
            $c++;
        }

        //debug($paralelosProfesor);
        $paralelosProfe = $this->Paralelo->find('all', array('recursive' => 0,
                'conditions' => array('Paralelo.id' => $paralelosProfesor)));

        //debug($paralelosProfe);
        $this->set(compact('paralelosProfe'));
        //echo $idProfesor;
    }

    public function ajaxmatprofesor($idParalelo = null)
    {
        $this->layout = 'ajax';
        $idProfesor = $this->Auth->user('profesore_id');
        $materias = $this->ParalelosProfesore->find('all', array('recursive' => 2,
                'conditions' => array('ParalelosProfesore.paralelo_id' => $idParalelo,
                    'ParalelosProfesore.profesore_id' => $idProfesor)));
       // debug($materias);exit;
        
        $this->set(compact('materias'));
    }
    
    public function inicioprofesores($id=null)
    {
        $idProfesor = $this->Auth->user('profesore_id');
        $datosProfesor= $this->Profesore->find('first', array(
        'conditions'=>array('Profesore.id'=>$idProfesor),
        'recursive'=>-1));
        //debug($datosProfesor);exit;
        $this->set(compact('datosProfesor'));
    }
    
     public function padres(){
        $gestion = date("Y");
        
        $idPadre = $this->Auth->user('padre_id');
       
        $listatutela = $this->AlumnosPadre->find('all', array(
            'recursive' => 0, 
            'conditions' => array(
                'AlumnosPadre.padre_id' => $idPadre
            )));
        
        $this->set(compact('listatutela', 'gestion'));
        //echo $idProfesor;
    }
    
    public function verfactura()
    {
        //datos de prueba para la factura
        $autoriza = '29040011007';
        $idfactura = '1503';
        $nitcliente = '4189179011';
        $nueva_fecha = '20070702';
        $rtotal = '2500';
        $llave = '9rCB7Sv4X29d)5k7N%3ab89p-3(5[A';

        //$this->Codigocontrol->CodigoControl('29040011007', '1503', '4189179011', '20070702', '2500', '9rCB7Sv4X29d)5k7N%3ab89p-3(5[A');
        $this->Codigocontrol->CodigoControl($autoriza, $idfactura, $nitcliente, $nueva_fecha, $rtotal, $llave);
        $codigo = $this->Codigocontrol->generar();
        debug($codigo);
    }
}
