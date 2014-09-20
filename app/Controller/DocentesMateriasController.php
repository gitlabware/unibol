<?php

App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
App::import('Vendor', 'PHPExcel_Reader_Excel2007', array('file' => 'PHPExcel/Excel2007.php'));
App::import('Vendor', 'PHPExcel_IOFactory', array('file' => 'PHPExcel/PHPExcel/IOFactory.php'));
class DocentesMateriasController extends AppController
{
    public $uses = array('DocentesMateria','Materia','User','Malla','Carrera','Excel');
    public $layout = 'unibol';

    var $components = array('Acl', 'Auth');

     public function index()
    {
        $docmaterias = $this->DocentesMateria->find('all');
        
        $this->set(compact('docmaterias'));
        
        
        if (!empty($this->data)) { 
            $this->DocentesMateria->create(); 
            if ($this->DocentesMateria->save($this->data)) { 
                $this->Session->setFlash('Docentes Materias registrado con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 
            } else { 
                $this->Session->setFlash('No se pudo registrar al Docentes Materias'); 
            }
        }
        $dmalla = $this->Malla->find('list',array('fields'=>'Malla.nombre'));
        $this->set(compact('dgestion'));
        $dmateria = $this->Materia->find('list',array('fields'=>'Materia.nombre'));
        $this->set(compact('dmateria'));
        $ddocente = $this->Docente->find('list',array('fields'=>'Docente.nombre'));
        $this->set(compact('ddocente'));
        
    }
    public function eligecarreras($id = null)
    {
        $idm = $id;
        $malla = $this->Malla->find('first',array('conditions'=>array('Malla.id'=>$idm)));
        $nmalla = $malla['Malla']['nombre'];
        $carreras = $this->Carrera->find('all');
        $this->set(compact('carreras','idm','nmalla'));
        
    }
    public function listadematerias($idcarrera = null,$idmalla = null)
    {
        $materias = $this->DocentesMateria->find('all',array('conditions'=>array('DocentesMateria.malla_id'=>$idmalla,'DocentesMateria.carrera_id'=>$idcarrera)));
        $this->set(compact('materias','idcarrera','idmalla'));
    }
    public function subirexcel($idcarrera = null,$idmalla =null)
    {
        $excels = $this->Excel->find('all', array(
            'order' => array('Excel.id DESC'),
            'limit' => 30));
        $this->set(compact('excels','idcarrera','idmalla'));
        //debug($chips);exit;
    }
    
        public function guardaexcel()
    {
        //debug($this->request->data);die;
        $archivoExcel = $this->request->data['Excel']['excel'];
        $nombreOriginal = $this->request->data['Excel']['excel']['name'];
        
        $idcarrera = $this->request->data['DocentesMateria']['carrera_id'];
        $idmalla = $this->request->data['DocentesMateria']['malla_id'];
        if ($archivoExcel['error'] === UPLOAD_ERR_OK)
        {
            $nombre = string::uuid();
            if (move_uploaded_file($archivoExcel['tmp_name'], WWW_ROOT . 'files' . DS . $nombre . '.xlsx'))
            {
                $nombreExcel = $nombre . '.xlsx';
                $direccionExcel = WWW_ROOT . 'files';
                $this->request->data['Excelg']['nombre'] = $nombreExcel;
                $this->request->data['Excelg']['nombre_original'] = $nombreOriginal;
                $this->request->data['Excelg']['direccion'] = "";
                $this->request->data['Excelg']['tipo'] = "asignacion";
            }
        }

        if ($this->Excel->save($this->data['Excelg']))
        {
            $ultimoExcel = $this->Excel->getLastInsertID();
            //debug($ultimoExcel);die;
            $excelSubido = $nombreExcel;
            $objLector = new PHPExcel_Reader_Excel2007();
            //debug($objLector);die;
            $objPHPExcel = $objLector->load("../webroot/files/$excelSubido");
            //debug($objPHPExcel);die;

            $rowIterator = $objPHPExcel->getActiveSheet()->getRowIterator();

            $array_data = array();

            foreach ($rowIterator as $row)
            {
                $cellIterator = $row->getCellIterator();

                $cellIterator->setIterateOnlyExistingCells(false); // Loop all cells, even if it is not set

                if (1 == $row->getRowIndex()) //a partir de la 1
                    continue; //skip first row

                $rowIndex = $row->getRowIndex();

                $array_data[$rowIndex] = array(
                    'A' => '',
                    'B' => '',
                    'C' => '',
                    'D' => '');

                foreach ($cellIterator as $cell)
                {
                    if ('A' == $cell->getColumn())
                    {
                        $array_data[$rowIndex][$cell->getColumn()] = $cell->getCalculatedValue();
                    } elseif ('B' == $cell->getColumn())
                    {
                        $array_data[$rowIndex][$cell->getColumn()] = $cell->getCalculatedValue();
                    } elseif ('C' == $cell->getColumn())
                    {
                        $array_data[$rowIndex][$cell->getColumn()] = $cell->getCalculatedValue();
                    }elseif ('D' == $cell->getColumn())
                    {
                        $array_data[$rowIndex][$cell->getColumn()] = $cell->getCalculatedValue();
                    }  
                     
                }
            }

            $datos = array();
            $i = 0;
            $this->request->data = "";
            
            
            
            foreach ($array_data as $d)
            {
                
                $docentes = $this->User->find('first',array('recursive'=>-1,'conditions'=>array('User.ci'=>$d['A'])));
                //debug($docentes);
                $materias = $this->Materia->find('first',array('conditions'=>array('Materia.sigla'=>$d['B'])));
                
               
                $this->request->data[$i]['DocentesMateria']['malla_id'] = $idmalla;
                $this->request->data[$i]['DocentesMateria']['materia_id'] = $materias['Materia']['id'];
                $this->request->data[$i]['DocentesMateria']['user_id'] = $docentes['User']['id'];
                $this->request->data[$i]['DocentesMateria']['paralelo'] = $d['C'];
                $this->request->data[$i]['DocentesMateria']['carrera_id'] = $idcarrera;
                $this->request->data[$i]['DocentesMateria']['excel_id'] = $ultimoExcel;
                $this->request->data[$i]['DocentesMateria']['cupo'] = $d['D'];
                $this->request->data[$i]['DocentesMateria']['nombre'] =$d['B'].' /'.$d['C'];
                $this->request->data[$i]['DocentesMateria']['semestre_id'] = $materias['Materia']['semestre_id'];
                $i++;
            }
            //debug($this->data);exit;
            if ($this->DocentesMateria->saveMany($this->data))
            {
                //echo 'registro corectamente';
                $this->DocentesMateria->deleteAll(array('DocentesMateria.paralelo' => '')); //limpiamos el excel con basuras
                $this->Session->setFlash('se Guardo correctamente el EXCEL');
                $this->redirect(array('action' => 'lista',$idcarrera,$idmalla));
            } else
            {
                echo 'no se pudo guardar';
            }
            //fin funciones del excel
        } else
        {

            //echo 'no';
        }
    }
    
    public function insertar($idcarrera = null,$idmalla =null)
    {
        if (!empty($this->data)) { 
            $this->DocentesMateria->create(); 
            $this->request->data['DocentesMateria']['carrera_id'] = $idcarrera;
            $this->request->data['DocentesMateria']['malla_id'] = $idmalla;
            if ($this->DocentesMateria->save($this->data)) { 
                $this->Session->setFlash('Docentes Materias registrado con exito'); 
                $this->redirect(array('action' => 'lista',$idcarrera,$idmalla), null, true); 
            } else { 
                $this->Session->setFlash('No se pudo registrar al Docentes Materias'); 
                
            }
        }
        $dmalla = $this->Malla->find('list',array('fields'=>'Malla.nombre'));
        $this->set(compact('dmalla'));
        $dmateria = $this->Materia->find('list',array('fields'=>'Materia.nombre','conditions'=>array('Materia.carrera_id'=>$idcarrera)));
        $this->set(compact('dmateria'));
        $ddocente = $this->User->find('list',array('fields'=>'User.ci','conditions'=>array('User.group_id'=>2)));
        $this->set(compact('ddocente'));
        
    }
    public function lista($idcarrera = null,$idmalla =null)
    {
        $docmaterias = $this->DocentesMateria->find('all',array('conditions'=>array('DocentesMateria.carrera_id'=>$idcarrera,'DocentesMateria.malla_id'=>$idmalla)));
        $carrera = $this->Carrera->find('first',array('conditions'=>array('Carrera.id'=>$idcarrera)));
        $this->set(compact('docmaterias','idcarrera','idmalla','carrera'));
        
        
        if (!empty($this->data)) { 
            $this->DocentesMateria->create(); 
            $this->request->data['DocentesMateria']['carrera_id'] = $idcarrera;
            $this->request->data['DocentesMateria']['malla_id'] = $idmalla;
            
            $materia = $this->Materia->find('first',array('conditions'=>array('Materia.id'=>$this->request->data['DocentesMateria']['materia_id'])));
           
            $this->request->data['DocentesMateria']['nombre'] = $materia['Materia']['sigla'].' /'.$this->request->data['DocentesMateria']['paralelo'];
            $this->request->data['DocentesMateria']['semestre_id'] = $materia['Materia']['semestre_id'];
            if ($this->DocentesMateria->save($this->data)) { 
                $this->Session->setFlash('Docentes Materias registrado con exito'); 
                $this->redirect(array('action' => 'lista',$idcarrera,$idmalla), null, true); 
            } else { 
                $this->Session->setFlash('No se pudo registrar al Docentes Materias'); 
                
            }
        }
        $dmalla = $this->Malla->find('list',array('fields'=>'Malla.nombre'));
        $this->set(compact('dmalla'));
        $dmateria = $this->Materia->find('list',array('fields'=>'Materia.nombre','conditions'=>array('Materia.carrera_id'=>$idcarrera)));
        $this->set(compact('dmateria'));
        $ddocente = $this->User->find('list',array('fields'=>'User.nombre_completo','conditions'=>array('User.group_id'=>2),'order'=>'User.ap_paterno ASC'));
        $this->set(compact('ddocente'));
    }
    function editar($id = null,$idcarrera = null,$idmalla =null)
    {
        $this->DocentesMateria->id = $id;
        if (!$id) {
            $this->Session->setFlash('No Existe el tipo de Docentes Materias');
            $this->redirect(array('action' => 'lista',$idcarrera,$idmalla), null, true);
        }
        if (empty($this->data)) {
            $this->data = $this->DocentesMateria->read();
            }
        else{
            if ($this->DocentesMateria->save($this->data)) {
                $this->Session->setFlash('Se Guardo Correctamente Docentes Materias');
                $this->redirect(array('action' => 'lista',$idcarrera,$idmalla), null, true);
            } else {
                $this->Session->setFlash('Error al Guardar Docentes Materias');
                $this->redirect(array('action' => 'lista',$idcarrera,$idmalla), null, true);
            }
        }
       
        $dmateria = $this->Materia->find('list',array('fields'=>'Materia.nombre','conditions'=>array('Materia.carrera_id'=>$idcarrera)));
        $this->set(compact('dmateria'));
        $ddocente = $this->User->find('list',array('fields'=>'User.ci','conditions'=>array('User.group_id'=>2)));
        $this->set(compact('ddocente'));

    }
    function eliminar($id=null,$idcarrera = null,$idmalla =null){
        $this->DocentesMateria->id=$id;
        $this->data=$this->DocentesMateria->read();
        if(!$id){
            $this->Session->setFlash('No existe las Docentes Materias a eliminar');
            $this->redirect(array('action' => 'lista',$idcarrera,$idmalla), null, true); 
        }
        else
        {
            if($this->DocentesMateria->delete($id)){
                $this->Session->setFlash('Se elimino el Docente Materia '.$this->data['DocentesMateria']['nombre']);
                $this->redirect(array('action' => 'lista',$idcarrera,$idmalla), null, true); 
            }
            else{
                $this->Session->setFlash('Error al eliminar');
            }
        }
    }
}

?>
