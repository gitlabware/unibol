<?php
App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
App::import('Vendor', 'PHPExcel_Reader_Excel2007', array('file' => 'PHPExcel/Excel2007.php'));
App::import('Vendor', 'PHPExcel_IOFactory', array('file' => 'PHPExcel/PHPExcel/IOFactory.php'));
class DocentesController extends AppController
{
    public $uses = array('User', 'Docente','Malla','DocentesMateria','Alumnosnota','Alumnosmateria');
    public $layout = 'unibol';
    var $components = array('Auth','RequestHandler');

    public function index()
    {
        
        if ($this->Session->read('Auth.User.group_id') == 2){
            $this->redirect(array('action' => 'menudocentes'), null, true);
        }
        $docentes = $this->User->find('all',array('conditions'=>array('User.group_id' =>2)));
        
        $this->set(compact('docentes'));
       // debug($docentes);exit;
    }
    
    function fechamysql($fecha){
    list($mes,$dia,$ano)=explode("/",$fecha);
    $fecha="$ano-$mes-$dia";
    return $fecha;
    }
    
    public function insertar()
    {
        if (!empty($this->data)) { 
            $this->User->create();
            $this->request->data['User']['fecha_incorporacion']=$this->fechamysql($this->data['User']['fecha_incorporacion']);		
            $this->request->data['User']['fecha_nac']=$this->fechamysql($this->data['User']['fecha_nac']);
            $this->request->data['User']['group_id'] = 2;
            $this->request->data['User']['password'] = $this->request->data['User']['ci'];
            $valida = $this->validar('User');
            if(empty($valida))
            {
                if ($this->User->save($this->data['User'])) { 
                    $this->genera_usuario($this->User->getLastInsertID());
                    $this->Session->setFlash('Docente registrado con exito','msgbueno'); 
                    $this->redirect(array('action' => 'index'), null, true); 
                } else { 
                    $this->Session->setFlash('No se pudo registrar al Docente','msgerror'); 
                }
            }
            else{
                $this->Session->setFlash($valida,'msgerror');
                $this->redirect(array('action' => 'index'), null, true);
            }
            
        }
    }
    public function genera_usuario($idUsuario)
    {
        if(!empty($idUsuario))
        {
            $this->User->id = $idUsuario;
            $this->request->data['User']['username'] = 'usuario'.$idUsuario;
            $this->User->save($this->request->data['User']);
        }
    }
    public function menudocentes()
    {
        $id = $this->Session->read('Auth.User.id');
        $docente = $this->User->find('first',array('conditions'=>array('User.id'=>$id)));
        $this->set(compact('docente'));
        
    }
    public function ajaxcambia($id = null)
    {
        //debug($sw);exit;
        $sw2 = false;
        $docentesmaterias = $this->DocentesMateria->find('all',array('conditions'=>array('DocentesMateria.user_id'=>$id)));
        foreach ($docentesmaterias as $dm)
        {
            $this->DocentesMateria->id = $dm['DocentesMateria']['id'];
            if ($dm['DocentesMateria']['habilitado'] == 1){
                $this->request->data['DocentesMateria']['habilitado'] = 0;
                $sw = 0;
            }
            else{
                $this->request->data['DocentesMateria']['habilitado'] = 1;
                $sw = 1;
            }
            
            $this->DocentesMateria->save($this->data['DocentesMateria']);
        }
        if ($docentesmaterias == null)
        {
            $sw = 0;
            $sw2 = true;
            //$this->Session->setFlash('No se puede Habilitar.. No se encontro registros de Docentes Materia!!','msgerror');
        }
        
        $this->set(compact('sw','id','sw2'));
    }
    public function generaexcel($iddocentesmateria = null)
    {
        //header('Content-Type: application/vnd.ms-excel');
        //header('Content-Disposition: attachment;filename="ROGDList.xls"');
        //header("Content-type: application/octet-stream"); 
        
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="Lista de Alumnos Notas.xlsx"');
        header('Cache-Control: max-age=0');
        $borders = array(
              'borders' => array(
                'allborders' => array(
                  'style' => PHPExcel_Style_Border::BORDER_THIN,
                  'color' => array('argb' => 'FFFF0000')
                )
              ),
              'font' => array(
                    'size' => 12,
                  'color' => array('argb' => 'FFFF0000')
                
              ),
            );
        //$objPHPExcel->getActiveSheet()->getStyle('A1:B1')->applyFromArray($borders);
        $prueba = new PHPExcel(); 
        //$prueba->addCellStyleXf($objPHPExcel)
        $prueba-> getActiveSheet () -> getColumnDimension ( 'A' ) ->setWidth(15);
        $prueba-> getActiveSheet () -> getColumnDimension ( 'B' ) ->setWidth(25);
        $prueba->getActiveSheet()->getStyle('A1:D1')->applyFromArray($borders);
        $prueba->setActiveSheetIndex(0)->setCellValue("A1","REG. ALUMNO");
        $prueba->setActiveSheetIndex(0)->setCellValue("B1","ALUMNO");
        $prueba->setActiveSheetIndex(0)->setCellValue("C1","PARCIAL");
        $prueba->setActiveSheetIndex(0)->setCellValue("D1","NOTA");
        
        $prueba->getActiveSheet()->setTitle("Lista Alumnos"); 
        $alumnos = $this->Alumnosmateria->find('all',array('conditions'=>array('Alumnosmateria.docentes_materia_id'=>$iddocentesmateria)));
        $cont = 1;
        //debug($alumnos);exit;
        foreach($alumnos as $a)
        {
            $cont++;
            $prueba->setActiveSheetIndex(0)->setCellValue("A".$cont,$a['User']['num_registro']);
            $prueba->setActiveSheetIndex(0)->setCellValue("B".$cont,$a['User']['ap_paterno'].' '.$a['User']['ap_materno'].' '.$a['User']['nombres']);
        }
        $objWriter = PHPExcel_IOFactory::createWriter($prueba, 'Excel5'); 
        $objWriter->save('php://output'); 
        
        //$this->redirect("../webroot/files/listaalumnos.xlsx", null, false);
    }
    public function cambiapass()
    {
        
        $id = $this->Session->read('Auth.User.id');
        $this->User->id = $id;
        
        if (!$id) {
            $this->Session->setFlash('No existe tal registro','msgerror');
            $this->redirect(array('action' => 'menudocentes'), null, true);
        }
        if (empty($this->data)) {
            $this->data = $this->User->read();
        } else {
            
            if ($this->User->save($this->data)) {
                $this->Session->setFlash('Su Password fue modificado Exitosamente','msgbueno');
                $this->redirect(array('action' => 'menudocentes'), null, true);
            } else {
                $this->Session->setFlash('no se pudo modificar!!');
            }
        }
       
    }
    public function materias()
    {
        $id = $this->Session->read('Auth.User.id');
        $malla = $this->Malla->find('first',array('order'=>'Malla.id DESC'));
        $materias = $this->DocentesMateria->find('all',array(
        'conditions'=>array(
        'DocentesMateria.user_id'=>$id,
        'DocentesMateria.malla_id'=>$malla['Malla']['id'])));
        $this->set(compact('materias','id','malla'));
    }
    public function notas($iddocentesmateria = null)
    {
        $materia = $this->DocentesMateria->find('first',array('conditions'=>array('DocentesMateria.id'=>$iddocentesmateria)));
        $notas = $this->Alumnosnota->find('all',array('conditions'=>array('Alumnosnota.docentes_materia_id'=>$iddocentesmateria)));
        $alumnos = $this->Alumnosmateria->find('all',array('conditions'=>array('Alumnosmateria.docentes_materia_id'=>$iddocentesmateria)));
        
        $this->set(compact('materia','notas','alumnos','iddocentesmateria','sw'));
    }
    public function nota($id = null,$iddocentesm = null)
    {
        $alumnonota = $this->Alumnosnota->find('all',array(
        'conditions'=>array(
        'Alumnosnota.user_id'=>$id,
        'Alumnosnota.docentes_materia_id'=>$iddocentesm)));
        return $alumnonota;
    }
    public function historial()
    {
        $id = $this->Session->read('Auth.User.id');
        $materias = $this->DocentesMateria->find('all',array(
        'conditions'=>array(
        'DocentesMateria.user_id'=>$id)));
        $this->set(compact('materias','id'));
    }
    public function habilita($id = null)
    {
        $docentesmaterias = $this->DocentesMateria->find('all',array('conditions'=>array('DocentesMateria.user_id'=>$id)));
        foreach ($docentesmaterias as $dm)
        {
            $this->DocentesMateria->id = $dm['DocentesMateria']['id'];
            $this->request->data['DocentesMateria']['habilitado'] = 1;
            $this->DocentesMateria->save($this->data['DocentesMateria']);
        }
        if ($docentesmaterias == null)
        {
            $this->Session->setFlash('No se puede Habilitar.. No se encontro registros de Docentes Materia!!','msgerror');
        }
        $this->redirect(array('action' => 'index'));
    }
    public function confirma($id = null)
    {
        $docentesmateria = $this->DocentesMateria->find('first',array('conditions'=>array('DocentesMateria.user_id'=>$id)));
        if ($docentesmateria['DocentesMateria']['habilitado'] == 1)
        {
            return 1;
        }
        else{
            return 0;
        }
    }
    public function deshabilita($id = null)
    {
        $docentesmaterias = $this->DocentesMateria->find('all',array('conditions'=>array('DocentesMateria.user_id'=>$id)));
        foreach ($docentesmaterias as $dm)
        {
            $this->DocentesMateria->id = $dm['DocentesMateria']['id'];
            $this->request->data['DocentesMateria']['habilitado'] = 0;
            $this->DocentesMateria->save($this->data['DocentesMateria']);
        }
        $this->redirect(array('action' => 'index'));
        
    }
    public function importar()
    {
        $docentes = $this->Docente->find('all');
        foreach ($docentes as $d)
        {
            $this->User->create();
            $this->request->data['User']['ap_paterno'] = $d['Docente']['ap_paterno'];
            $this->request->data['User']['ap_materno'] = $d['Docente']['ap_materno'];
            $this->request->data['User']['nombres'] = $d['Docente']['nombre'];
            $this->request->data['User']['fecha_nac'] = $d['Docente']['fecha_nac'];
            $this->request->data['User']['ci'] = $d['Docente']['ci'];
            $this->request->data['User']['especialidad'] = $d['Docente']['especialidad'];
            $this->request->data['User']['fecha_incorporacion'] = $d['Docente']['fecha_incorporacion'];
            $this->request->data['User']['horas_asignadas'] = $d['Docente']['total_horas'] ;
            $this->request->data['User']['username'] = $d['Docente']['ap_paterno'];
            $this->request->data['User']['password'] = $d['Docente']['ci'];
            $this->request->data['User']['group_id'] = 2;
            $this->User->save($this->data);
        }
    }
    function editar($id = null)
    {
        $this->User->id = $id;
        if (!$id) {
            $this->Session->setFlash('No Existe el tipo el Docente','msginfo');
            $this->redirect(array('action' => 'index'));
        }
        if (empty($this->data)) {
            $this->data = $this->User->read();
            }
        else{
            $valida = $this->validar('User');
            if(empty($valida))
            {
                if ($this->User->save($this->data)) {
                    $this->Session->setFlash('Se Guardo Correctamente el Docente','msgbueno');
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash('Error al Guardar al Docente','msgerror');
                }
            }
            else{
                $this->Session->setFlash($valida,'msgerror');
                $this->redirect(array('action' => 'index'));
            }
            
        }

    }
    function eliminar($id=null){
        $this->User->id=$id;
        $this->data=$this->User->read();
        if(!$id){
            $this->Session->setFlash('No existe el Docente a eliminar','msgerror');
            $this->redirect(array('action' =>'index'));
        }
        else
        {
            if($this->User->delete($id)){
                $this->Session->setFlash('Se elimino el Docente '.$this->data['User']['nombre'],'msgbueno');
                $this->redirect(array('action' =>'index'));
            }
            else{
                $this->Session->setFlash('Error al eliminar','msgerror');
            }
        }
    }
    public function asigna_usuarios_docentes()
    {
        $docentes = $this->User->find('all',array('recursive' => -1,'conditions' => array('User.group_id' => 2)));
        
        debug($docentes);exit;
        foreach ($docentes as $do)
        {
            $this->User->id = $do['User']['id'];
            $this->request->data['User']['username'] = 'usuario'.$do['User']['id'];
            $this->request->data['User']['password'] = $do['User']['ci'];
            $this->User->save($this->request->data['User']);
        }
        debug('acabo!!!');exit;
    }
}

?>
