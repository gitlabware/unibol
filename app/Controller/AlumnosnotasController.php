<?php

App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
App::import('Vendor', 'PHPExcel_Reader_Excel2007', array('file' => 'PHPExcel/Excel2007.php'));
App::import('Vendor', 'PHPExcel_IOFactory', array('file' => 'PHPExcel/PHPExcel/IOFactory.php'));

class AlumnosnotasController extends AppController
{

    //public $helpers = array('Html', 'Form', 'Session', 'Js');
    public $uses = array('Excel', 'Alumnosnota','User','Docente','Semestre','Materia','Malla','DocentesMateria','Carrera');
    public $layout = 'unibol';
    var $components = array('Acl', 'Auth');
    //public $components = array('Filehandler');
    
    
    
    public function subirexcel($idcarrera = null,$idmalla =null)
    {
        $excels = $this->Excel->find('all', array(
            'order' => array('Excel.id DESC'),
            'limit' => 30));
        $this->set(compact('excels','idcarrera','idmalla'));
        //debug($chips);exit;
    }

    

    public function verexcels()
    {
        $excels = $this->Excel->find('all', array('order' => array('Excel.id DESC')));
        $this->set(compact('excels'));
    }

    /*
    public function guardaentregachips()
    {

        $fecha = date('Y-m-d');
        //debug($this->data);exit;
        $id_excel = $this->request->data['Entrega']['id'];

        $cant = $this->request->data['Entrega']['cantidad'];

        $cod_149 = $this->request->data['Entrega']['codigo'];

        if (!empty($this->data))
        {

            $chips = $this->Chip->find('all', array('conditions' => array('Chip.fechaentrega =' => null, 'Chip.excel_id' => $id_excel), 'limit' => $cant));
        }

        //debug($chips);exit;

        $ids = array();

        $i = 0;

        foreach ($chips as $c)
        {

            $ids[$i] = $c['Chip']['id'];

            $i++;
        }

        $this->request->data['Chip']['fechaentrega'] = $fecha;

        $this->request->data['Chip']['149'] = $cod_149;


        for ($c = 0; $c < count($ids); $c++)
        {

            $id = $ids[$c];

            $this->Chip->id = $id;

            $this->Chip->save($this->data);
        }

        $chipsentre = $this->Chip->find('all', array('conditions' => array('Chip.id' => $ids)));

        $this->set(compact('chipsentre'));
    }

*/
    function eliminar($id=null,$iddocentemateria= null,$idcarrera = null,$idmalla =null){
        $this->Alumnosnota->id=$id;
        $this->data=$this->Alumnosnota->read();
        if(!$id){
            $this->Session->setFlash('No existe la Alumnosnota a elimminar');
            $this->redirect(array('action' => 'notas',$iddocentemateria,$idcarrera,$idmalla), null, true);
        }
        else
        {
            if($this->Alumnosnota->delete($id)){
                $this->Session->setFlash('Se elimino la nota de  '.$this->data['Alumnosnota']['alumno']);
                $this->redirect(array('action' => 'notas',$iddocentemateria,$idcarrera,$idmalla), null, true);
            }
            else{
                $this->Session->setFlash('Error al eliminar');
            }
        }
    }
    function editar($id = null,$iddocentemateria= null,$idcarrera = null,$idmalla =null)
    {
        $this->Alumnosnota->id = $id;
        if (!$id) {
            $this->Session->setFlash('No Existe la nota');
            $this->redirect(array('action' => 'notas',$iddocentemateria,$idcarrera,$idmalla), null, true);
        }
        if (empty($this->data)) {
            $this->data = $this->Alumnosnota->read();
            }
        else{
            $alumno2 = $this->request->data['Alumnosnota']['alumno'];
            if ($this->Alumnosnota->save($this->data)) {
                $this->notafinal($id,$iddocentemateria,$alumno2);
                $this->Session->setFlash('Se Guardo Correctamente la Nota');
                $this->redirect(array('action' => 'notas',$iddocentemateria,$idcarrera,$idmalla), null, true);
            } else {
                $this->Session->setFlash('Error al Guardar la nota');
            }
        }
        $notas = $this->Alumnosnota->find('first',array('conditions'=>array('Alumnosnota.id'=>$id)));
        $this->set(compact('notas'));

    }
    public function notafinal($id = null,$iddocentemateria = null,$alumno = null)
    {
        
        $notafinal = 0;
        $notas = $this->Alumnosnota->find('all',array('conditions'=>array('Alumnosnota.docentes_materia_id'=>$iddocentemateria
        ,'Alumnosnota.alumno'=>$alumno)));
        //debug($notas);exit;
        foreach($notas as $n)
        {
            $notafinal = $notafinal + $n['Alumnosnota']['nota'];
        }
        $this->Alumnosnota->id = $id;
        $this->request->data['Alumnosnota']['notafinal'] = $notafinal;
        if ($this->Alumnosnota->save($this->data))
        {
            
        }
        $alumnosnotas = $this->Alumnosnota->find('all',array('conditions'=>array(
                'Alumnosnota.docentes_materia_id'=>$iddocentemateria,
                'Alumnosnota.alumno'=>$alumno)));
                
               foreach ($alumnosnotas as $an)
                {
                    $this->Alumnosnota->id = $an['Alumnosnota']['id'];
                    $this->request->data['Alumnosnota']['nota'] = $an['Alumnosnota']['nota'];
                    $this->request->data['Alumnosnota']['notafinal'] = $notafinal;
                    $this->Alumnosnota->save($this->data['Alumnosnota']);
                }
    }
    public function lista($idcarrera = null,$idmalla =null)
    {
        $notas = $this->Alumnosnota->find('all',array('conditions'=>array('Alumnosnota.carrera_id'=>$idcarrera),'conditions'=>array('Alumnosnota.malla_id'=>$idmalla)));
        
        $this->set(compact('notas','idcarrera','idmalla'));
        
        
        if (!empty($this->data)) { 
            $this->Alumnosnota->create(); 
            $this->request->data['Alumnosnota']['carrera_id'] = $idcarrera;
            $this->request->data['Alumnosnota']['malla_id'] = $idmalla;
            if ($this->Alumnosnota->save($this->data)) { 
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
    public function notas($iddocentemateria = null,$idcarrera = null,$idmalla =null)
    {
        $notas = $this->Alumnosnota->find('all',array('conditions'=>array('Alumnosnota.carrera_id'=>$idcarrera,'Alumnosnota.malla_id'=>$idmalla,'Alumnosnota.docentes_materia_id'=>$iddocentemateria)));
        $carrera = $this->Carrera->find('first',array('conditions'=>array('Carrera.id'=>$idcarrera)));
        $docentemateria = $this->DocentesMateria->find('first',array('conditions'=>array('DocentesMateria.id'=>$iddocentemateria)));
        
        $this->set(compact('notas','idcarrera','idmalla','iddocentemateria','carrera','docentemateria'));
        
        
        if (!empty($this->data)) { 
            $this->Alumnosnota->create(); 
            $this->request->data['Alumnosnota']['carrera_id'] = $idcarrera;
            $this->request->data['Alumnosnota']['malla_id'] = $idmalla;
            if ($this->Alumnosnota->save($this->data)) { 
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
    public function guardaexcel()
    {
        //debug($this->request->data);die;
        $archivoExcel = $this->request->data['Excel']['excel'];
        $nombreOriginal = $this->request->data['Excel']['excel']['name'];
        $idcarrera = $this->request->data['Alumnosnota']['carrera_id'];
        $idmalla = $this->request->data['Alumnosnota']['malla_id'];
        $iddocentesmaterias = $this->request->data['Alumnosnota']['docentes_materia_id'];
        //debug($iddocentesmaterias);exit;
        $dmateria = $this->DocentesMateria->find('first',array('conditions'=>array('DocentesMateria.id'=>$iddocentesmaterias)));
        $idsemestre = $dmateria['Materia']['semestre_id'];
        $idmateria = $dmateria['DocentesMateria']['materia_id'];
        $iduser = $dmateria['DocentesMateria']['user_id'];

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
                    'D' => ''
                    );

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
            
            //debug();exit;
            
            foreach ($array_data as $d)
            {
                $alumnos = $this->User->find('first',array('conditions'=>array('User.num_registro'=>$d['A'])));

                $notafinal = $this->Alumnosnota->find('first',array(
                'conditions'=>array('Alumnosnota.alumno'=>$d['A'],'Alumnosnota.docentes_materia_id'=>$iddocentesmaterias),
                'order'=>'Alumnosnota.id DESC'));
                //debug($notafinal);exit;
                
                $this->request->data[$i]['Alumnosnota']['alumno'] = $d['A'];
                //$this->request->data[$i]['Alumnosnota']['docente'] = $d['B'];
                //$this->request->data[$i]['Alumnosnota']['materia'] = $d['C'];
                //$this->request->data[$i]['Alumnosnota']['semestre'] =$idsemestre;
                $this->request->data[$i]['Alumnosnota']['parcial'] = $d['C'];
                $this->request->data[$i]['Alumnosnota']['nota'] = $d['D'];
                if($notafinal  != null){
                    $this->request->data[$i]['Alumnosnota']['notafinal'] = $notafinal['Alumnosnota']['notafinal']+$d['D'];
                    $nf = $notafinal['Alumnosnota']['notafinal']+$d['D'];
                }
                else{
                    $this->request->data[$i]['Alumnosnota']['notafinal'] = 0 + $d['D'];
                    $nf = 0 + $d['C'];
                }
                $this->request->data[$i]['Alumnosnota']['malla_id'] = $idmalla;
                $this->request->data[$i]['Alumnosnota']['carrera_id'] = $idcarrera;
                $this->request->data[$i]['Alumnosnota']['user_id'] = $alumnos['User']['id'];
                $this->request->data[$i]['Alumnosnota']['docente_id'] = $iduser;
                $this->request->data[$i]['Alumnosnota']['materia_id'] = $idmateria;
                $this->request->data[$i]['Alumnosnota']['semestre_id'] = $idsemestre;
                $this->request->data[$i]['Alumnosnota']['docentes_materia_id'] = $iddocentesmaterias;
                
                
                $alumnosnotas = $this->Alumnosnota->find('all',array('conditions'=>array(
                'Alumnosnota.docentes_materia_id'=>$iddocentesmaterias,
                'Alumnosnota.user_id'=>$alumnos['User']['id'],
                'Alumnosnota.carrera_id'=>$idcarrera)));
                
                foreach ($alumnosnotas as $an)
                {
                    $this->Alumnosnota->id = $an['Alumnosnota']['id'];
                    $this->request->data['Alumnosnota']['nota'] = $an['Alumnosnota']['nota'];
                    $this->request->data['Alumnosnota']['notafinal'] = $nf;
                    $this->Alumnosnota->save($this->data);
                }
                $i++;
            }
            //debug($this->data);
            //exit;
            if ($this->Alumnosnota->saveMany($this->data))
            {
                //echo 'registro corectamente';
                $this->Alumnosnota->deleteAll(array('Alumnosnota.alumno' => '')); //limpiamos el excel con basuras
                $this->Session->setFlash('se Guardo correctamente el EXCEL','msgbueno');
                $usuario = $this->Session->read('Auth.User.group_id');
                if ($usuario == 1)
                {
                    $this->redirect(array('action' => 'notas',$iddocentesmaterias,$idcarrera,$idmalla));
                }
                else{
                    $this->redirect(array('controller'=>'Docentes','action' => 'notas',$iddocentesmaterias));
                }
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

    

    public function index()
    {

        $archivo = 'http://localhost/inventario/app/webroot/files/Libro6.xlsx';
        $chips = $this->Alumnosnota->find('all');
        //debug($chips);
        //debug($archivo);
        $this->set(compact('chips'));
        $objLector = new PHPExcel_Reader_Excel2007();
        $objPHPExcel = $objLector->load("../Vendor/demo.xlsx");
        //$objLector = PHPExcel_IOFactory::load("../Vendor/Libro6.xlsx");
        //$objExcel->setActiveSheetIndex(0);
        //$val = $objExcel->getActiveSheet()->getCell('22252335')->getValue();
        //$val = $objExcel->getActiveSheet()->getCell();
        //$datos = $objExcel->getActiveSheet(0)->getCell('FV');
        //$datocol = $objExcel->getCell('FV');
        //$cell = $objExcel->getce('E', '1');
        //$val = $cell->getValue();
        $rowIterator = $objPHPExcel->getActiveSheet()->getRowIterator();
        $array_data = array();
        foreach ($rowIterator as $row)
        {
            $cellIterator = $row->getCellIterator();
            $cellIterator->setIterateOnlyExistingCells(false); // Loop all cells, even if it is not set
            if (1 == $row->getRowIndex())
                continue; //skip first row
            $rowIndex = $row->getRowIndex();
            $array_data[$rowIndex] = array(
                'A' => '',
                'B' => '',
                'C' => '',
                'D' => '',
                'E' => '',
                'F' => '',
                'G' => '');
            foreach ($cellIterator as $cell)
            {
                if ('A' == $cell->getColumn())
                {
                    $array_data[$rowIndex][$cell->getColumn()] = $cell->getCalculatedValue();
                } else
                if ('B' == $cell->getColumn())
                {
                    $array_data[$rowIndex][$cell->getColumn()] = $cell->getCalculatedValue();
                } else
                if ('C' == $cell->getColumn())
                {
                    //$array_data[$rowIndex][$cell->getColumn()] = PHPExcel_Style_NumberFormat::
                    //toFormattedString($cell->getCalculatedValue(), 'YYYY-MM-DD');
                    $array_data[$rowIndex][$cell->getColumn()] = $cell->getCalculatedValue();
                } else
                if ('D' == $cell->getColumn())
                {
                    $array_data[$rowIndex][$cell->getColumn()] = $cell->getCalculatedValue();
                } else
                if ('E' == $cell->getColumn())
                {
                    $array_data[$rowIndex][$cell->getColumn()] = $cell->getCalculatedValue();
                } else
                if ('F' == $cell->getColumn())
                {
                    $array_data[$rowIndex][$cell->getColumn()] = $cell->getCalculatedValue();
                } else
                if ('G' == $cell->getColumn())
                {
                    $fecha = $cell->getCalculatedValue();
                    $time = PHPExcel_Shared_Date::ExcelToPHP($fecha);
                    $fecha_php = date('Y-m-d', $time);
                    $array_data[$rowIndex][$cell->getColumn()] = $fecha_php;
                }
            }
        }

        $datos = array();
        $i = 0;
        foreach ($array_data as $d)
        {
            $this->request->data[$i]['Alumnosnota']['numexcel'] = $d['A'];
            $this->request->data[$i]['Alumnosnota']['num'] = $d['B'];
            $this->request->data[$i]['Alumnosnota']['sim'] = $d['C'];
            $this->request->data[$i]['Alumnosnota']['telefono'] = $d['D'];
            $this->request->data[$i]['Alumnosnota']['fv'] = $d['E'];
            $fecha_mod = str_replace("\'", "", $d['F']);
            $this->request->data[$i]['Alumnosnota']['cliente'] = $fecha_mod;
            $this->request->data[$i]['Alumnosnota']['fecha'] = $d['G'];
            $i++;
        }
        //debug($this->request->data);die;

        if ($this->Alumnosnota->saveMany($this->data))
        {

            echo 'registro corectamente';
        } else
        {
            echo 'no se pudo guardar';
        }
        //debug($array_data);
        //debug($this->data);
    }

}

?>