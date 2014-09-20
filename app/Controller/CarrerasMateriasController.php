<?php

App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
App::import('Vendor', 'PHPExcel_Reader_Excel2007', array('file' => 'PHPExcel/Excel2007.php'));
App::import('Vendor', 'PHPExcel_IOFactory', array('file' => 'PHPExcel/PHPExcel/IOFactory.php'));

class CarrerasMateriasController extends AppController
{
    public $uses = array('CarrerasMateria','Carrera','Materia','Excel');
    public $layout = 'unibol';

    var $components = array('Acl', 'Auth');
    
    public function subirexcel()
    {
        $excels = $this->Excel->find('all', array(
            'order' => array('Excel.id DESC'),
            'limit' => 30));
        $this->set(compact('excels'));
        //debug($chips);exit;
    }

    

    public function verexcels()
    {
        $excels = $this->Excel->find('all', array('order' => array('Excel.id DESC')));
        $this->set(compact('excels'));
    }
    
     public function index()
    {
        $carmaterias = $this->CarrerasMateria->find('all');
        //debug($dato);exit;
        $this->set(compact('carmaterias'));
        
        if (!empty($this->data)) { 
            $this->CarrerasMateria->create(); 
            if ($this->CarrerasMateria->save($this->data)) { 
                $this->Session->setFlash('Carreras Materias registrado con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 
            } else { 
                $this->Session->setFlash('No se pudo registrar al Carreras Materias'); 
            }
        }
        $dcarrera = $this->Carrera->find('list',array('fields'=>'Carrera.nombre'));
        $this->set(compact('dcarrera'));
        $dmateria = $this->Materia->find('list',array('fields'=>'Materia.nombre'));
        $this->set(compact('dmateria'));
        
    }
    public function guardaexcel()
    {
        //debug($this->request->data);die;
        $archivoExcel = $this->request->data['Excel']['excel'];
        $nombreOriginal = $this->request->data['Excel']['excel']['name'];

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
                    'D' => '',
                    'E' => '',
                    'F' => '',
                    'H' => '');

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
                    } elseif ('D' == $cell->getColumn())
                    {
                        $array_data[$rowIndex][$cell->getColumn()] = $cell->getCalculatedValue();
                    } elseif ('E' == $cell->getColumn())
                    {
                        $array_data[$rowIndex][$cell->getColumn()] = $cell->getCalculatedValue();
                    } elseif ('F' == $cell->getColumn())
                    {
                        $array_data[$rowIndex][$cell->getColumn()] = $cell->getCalculatedValue();
                    } elseif ('G' == $cell->getColumn())
                    {
                        $array_data[$rowIndex][$cell->getColumn()] = $cell->getCalculatedValue();
                    } elseif ('H' == $cell->getColumn())
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

                $this->request->data[$i]['Alumnosnota']['alumno'] = $d['A'];
                $this->request->data[$i]['Alumnosnota']['docente'] = $d['B'];
                $this->request->data[$i]['Alumnosnota']['materia'] = $d['C'];
                $this->request->data[$i]['Alumnosnota']['semestre'] = $d['D'];
                $this->request->data[$i]['Alumnosnota']['parcialuno'] = $d['E'];
                $this->request->data[$i]['Alumnosnota']['parcialdos'] = $d['F'];
                $this->request->data[$i]['Alumnosnota']['parcialtres'] = $d['G'];
                $this->request->data[$i]['Alumnosnota']['notafinal'] = $d['H'];
                $i++;
            }
            //debug($this->data);
            //exit;
            if ($this->Alumnosnota->saveMany($this->data))
            {
                //echo 'registro corectamente';
                $this->Alumnosnota->deleteAll(array('Alumnosnota.alumno' => '')); //limpiamos el excel con basuras
                $this->Session->setFlash('se Guardo correctamente el EXCEL');
                $this->redirect(array('action' => 'subirexcel'));
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
    public function insertar()
    {
        if (!empty($this->data)) { 
            $this->CarrerasMateria->create(); 
            if ($this->CarrerasMateria->save($this->data)) { 
                $this->Session->setFlash('Carreras Materias registrado con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 
            } else { 
                $this->Session->setFlash('No se pudo registrar al Carreras Materias'); 
            }
        }
        $dcarrera = $this->Carrera->find('list',array('fields'=>'Carrera.nombre'));
        $this->set(compact('dcarrera'));
        $dmateria = $this->Materia->find('list',array('fields'=>'Materia.nombre'));
        $this->set(compact('dmateria'));
    }
    function editar($id = null)
    {
        $this->CarrerasMateria->id = $id;
        if (!$id) {
            $this->Session->setFlash('No Existe el tipo el Carreras Materias');
            $this->redirect(array('action' => 'index'));
        }
        if (empty($this->data)) {
            $this->data = $this->CarrerasMateria->read();
            }
        else{
            if ($this->CarrerasMateria->save($this->data)) {
                $this->Session->setFlash('Se Guardo Correctamente el Carreras Materias');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Error al Guardar al Carreras Materias');
            }
        }
        $dcarrera = $this->Carrera->find('list',array('fields'=>'Carrera.nombre'));
        $this->set(compact('dcarrera'));
        $dmateria = $this->Materia->find('list',array('fields'=>'Materia.nombre'));
        $this->set(compact('dmateria'));

    }
    function eliminar($id=null){
        $this->CarrerasMateria->id=$id;
        $this->data=$this->CarrerasMateria->read();
        if(!$id){
            $this->Session->setFlash('No existe las CarrerasMaterias a eliminar');
            $this->redirect(array('action' =>'index'));
        }
        else
        {
            if($this->CarrerasMateria->delete($id)){
                $this->Session->setFlash('Se elimino las CarrerasMaterias '.$this->data['CarrerasMateria']['nombre']);
                $this->redirect(array('action' =>'index'));
            }
            else{
                $this->Session->setFlash('Error al eliminar');
            }
        }
    }
}

?>
