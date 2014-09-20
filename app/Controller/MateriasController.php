<?php

App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
App::import('Vendor', 'PHPExcel_Reader_Excel2007', array('file' => 'PHPExcel/Excel2007.php'));
App::import('Vendor', 'PHPExcel_IOFactory', array('file' => 'PHPExcel/PHPExcel/IOFactory.php'));
class MateriasController extends AppController
{
    public $uses = array('Materia','Carrera','Semestre','Excel');
    public $layout = 'unibol';

    var $components = array('Acl', 'Auth');
    public function index()
    {
        $materias = $this->Materia->find('all');
        $this->set(compact('materias'));
        
        
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
                    'G' => '',
                    'H' => '',);

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
                    }  elseif ('G' == $cell->getColumn())
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
                $carrera = $this->Carrera->find('first',array('conditions'=>array('Carrera.nombre'=>$d['C'])));
               // $docentes = $this->User->find('first',array('conditions'=>array('User.ci'=>$d['B'])));
                $requisito1 = $this->Materia->find('first',array('conditions'=>array('Materia.sigla'=>$d['E'])));
                $requisito2 = $this->Materia->find('first',array('conditions'=>array('Materia.sigla'=>$d['F'])));
                $requisito3 = $this->Materia->find('first',array('conditions'=>array('Materia.sigla'=>$d['G'])));
                $requisito4 = $this->Materia->find('first',array('conditions'=>array('Materia.sigla'=>$d['H'])));
                //$mallas = $this->Malla->find('first',array('conditions'=>array('Malla.nombre'=>$d['I'])));
                $semestre = $this->Semestre->find('first',array('conditions'=>array('Semestre.nombre'=>$d['D'])));

               
                
                
                $this->request->data[$i]['Materia']['nombre'] = $d['A'];
                $this->request->data[$i]['Materia']['sigla'] = $d['B'];
                $this->request->data[$i]['Materia']['carrera_id'] = $carrera['Carrera']['id'];
                $this->request->data[$i]['Materia']['semestre_id'] = $semestre['Semestre']['id'];
                $this->request->data[$i]['Materia']['r1'] = $d['E'];
                $this->request->data[$i]['Materia']['r2'] = $d['F'];
                $this->request->data[$i]['Materia']['r3'] = $d['G'];
                $this->request->data[$i]['Materia']['r4'] = $d['H'];
                
                $i++;
            }
            //debug($this->data);
            //exit;
            if ($this->Materia->saveMany($this->data))
            {
                //echo 'registro corectamente';
                $this->Materia->deleteAll(array('Materia.nombre' => '')); //limpiamos el excel con basuras
                $this->Session->setFlash('se Guardo correctamente el EXCEL');
                $this->pasaidmaterias();
                $this->redirect(array('action' => 'index'));
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
    public function pasaidmaterias()
    {
        $materia = $this->Materia->find('all');
        foreach ($materia as $ma){
            $req1 = $ma['Materia']['r1'];
            $req2 = $ma['Materia']['r2'];
            $req3 = $ma['Materia']['r3'];
            $req4 = $ma['Materia']['r4'];
        $requisito1 = $this->Materia->find('first',array('conditions'=>array('Materia.sigla'=>$req1)));
        $requisito2 = $this->Materia->find('first',array('conditions'=>array('Materia.sigla'=>$req2)));
        $requisito3 = $this->Materia->find('first',array('conditions'=>array('Materia.sigla'=>$req3)));
        $requisito4 = $this->Materia->find('first',array('conditions'=>array('Materia.sigla'=>$req4)));    
        $this->Materia->id = $ma['Materia']['id'];
        $this->request->data['Materia']['requisito1'] = $requisito1['Materia']['id'];
        $this->request->data['Materia']['requisito2'] = $requisito2['Materia']['id'];
        $this->request->data['Materia']['requisito3'] = $requisito3['Materia']['id'];
        $this->request->data['Materia']['requisito4'] = $requisito4['Materia']['id'];
        $this->Materia->save($this->data);        
            
        }
          
    }
    public function insertar()
    {
        if (!empty($this->data)) { 
            $req1 = $this->Materia->find('first',array('conditions'=>array('Materia.id'=>$this->request->data['Materia']['requisito1'])));
            $req2 = $this->Materia->find('first',array('conditions'=>array('Materia.id'=>$this->request->data['Materia']['requisito2'])));
            $req3 = $this->Materia->find('first',array('conditions'=>array('Materia.id'=>$this->request->data['Materia']['requisito3'])));
            $req4 = $this->Materia->find('first',array('conditions'=>array('Materia.id'=>$this->request->data['Materia']['requisito4']))); 
            $this->request->data['Materia']['r1'] = $req1['Materia']['sigla'];
            $this->request->data['Materia']['r2'] = $req2['Materia']['sigla'];
            $this->request->data['Materia']['r3'] = $req3['Materia']['sigla'];
            $this->request->data['Materia']['r4'] = $req4['Materia']['sigla'];
            
            if ($this->Materia->save($this->data)) { 
                $this->Session->setFlash('Materia registrada con exito');
                $this->redirect(array('action' => 'index'), null, true); 
            } else { 
                $this->Session->setFlash('No se pudo registrar la Materia'); 
            }
        }
        
        $dcarrera = $this->Carrera->find('list',array('fields'=>'Carrera.nombre'));
        $this->set(compact('dcarrera'));
        
        $dsemestre = $this->Semestre->find('list',array('fields'=>'Semestre.nombre'));
        $this->set(compact('dsemestre'));
        
        $dmateria = $this->Materia->find('list',array('fields'=>'Materia.sigla'));
        $this->set(compact('dmateria'));
    }
    public function prueba()
    {
        
    }
    function editar($id = null)
    {
        $this->Materia->id = $id;
        if (!$id) {
            $this->Session->setFlash('No Existe el tipo de Materia');
            $this->redirect(array('action' => 'index'));
        }
        if (empty($this->data)) {
            $this->data = $this->Materia->read();
            }
        else{
            $req1 = $this->Materia->find('first',array('conditions'=>array('Materia.id'=>$this->request->data['Materia']['requisito1'])));
            $req2 = $this->Materia->find('first',array('conditions'=>array('Materia.id'=>$this->request->data['Materia']['requisito2'])));
            $req3 = $this->Materia->find('first',array('conditions'=>array('Materia.id'=>$this->request->data['Materia']['requisito3'])));
            $req4 = $this->Materia->find('first',array('conditions'=>array('Materia.id'=>$this->request->data['Materia']['requisito4']))); 
            $this->request->data['Materia']['r1'] = $req1['Materia']['sigla'];
            $this->request->data['Materia']['r2'] = $req2['Materia']['sigla'];
            $this->request->data['Materia']['r3'] = $req3['Materia']['sigla'];
            $this->request->data['Materia']['r4'] = $req4['Materia']['sigla'];
            if ($this->Materia->save($this->data)) {
                $this->Session->setFlash('Se Guardo Correctamente la Materia');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Error al Guardar la Materia');
            }
        }
        
        $dcarrera = $this->Carrera->find('list',array('fields'=>'Carrera.nombre'));
        $this->set(compact('dcarrera'));
        
        $dsemestre = $this->Semestre->find('list',array('fields'=>'Semestre.nombre'));
        $this->set(compact('dsemestre'));
        
        $dmateria = $this->Materia->find('list',array('fields'=>'Materia.sigla'));
        $this->set(compact('dmateria'));

    }
    function eliminar($id=null){
        $this->Materia->id=$id;
        $this->data=$this->Materia->read();
        if(!$id){
            $this->Session->setFlash('No existe la Materia a eliminar');
            $this->redirect(array('action' =>'index'));
        }
        else
        {
            if($this->Materia->delete($id)){
                $this->Session->setFlash('Se elimino la Materia '.$this->data['Materia']['nombre']);
                $this->redirect(array('action' =>'index'));
            }
            else{
                $this->Session->setFlash('Error al eliminar');
            }
        }
    }
}

?>
