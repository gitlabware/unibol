<?php
class AlumnosController extends AppController
{
    
    public $uses = array('User','Alumno','Alumnomateriale','Materiale','Generaregistro','Carrera','Paise','Departamento','Organizacione','Malla','Estado','Provincia','AlumnosPermiso','Semestre','DocentesMateria','Alumnosmateria','Alumnosnota');
    public $layout = 'unibol';
    var $components = array('Acl', 'Auth');
    
    public function beforeFilter() {
        parent::beforeFilter();
        $this->isAuthorized($this->Session->read('Auth.User'));
    }
    
    public function isAuthorized($user) {
        if (!in_array($this->action, array('menualumnos','notasultimo','notas','inscripcion','actualizar','cambiapass','inscripcion2')) && $user['group_id'] == 3) {
            $this->Session->setFlash('Usuario no autorizado!!!!','msginfo');
            $this->redirect(array('action' => 'menualumnos'));
        }
        
    }
    public function index()
    {
     $alumnos=$this->User->find('all',array('order' => 'User.id DESC','limit' => '50','conditions'=>array('User.group_id'=>'3'),'order' =>array('User.num_registro'=>'desc')));
    // debug($this->paginate('User'));exit;
	 $this->set(compact('alumnos'));
    }
    function fechamysql($fecha){
        debug($fecha);exit;
    list($dia,$mes,$ano)=explode("/",$fecha);
    $fecha="$ano-$mes-$dia";
    return $fecha;
    }
    public function importar()
    {
        $alumnos = $this->Alumno->find('all');
        
        foreach($alumnos as $a){
            $this->User->create();
            $this->request->data['User']['num_registro'] = $a['Alumno']['num_registro'];
            $this->request->data['User']['foto_dir'] = $a['Alumno']['foto_dir'];
            $this->request->data['User']['foto_imagen'] = $a['Alumno']['foto_imagen'];
            $this->request->data['User']['carrera_id'] = $a['Alumno']['carrera_id'];
            $this->request->data['User']['ap_paterno'] = $a['Alumno']['ap_paterno'];
            $this->request->data['User']['ap_materno'] = $a['Alumno']['ap_materno'];
            $this->request->data['User']['nombres'] = $a['Alumno']['nombres'];
            $this->request->data['User']['ci'] = $a['Alumno']['ci'];
            $this->request->data['User']['ci_expedido'] = $a['Alumno']['ci_expedido'];
            $this->request->data['User']['estado_civil'] = $a['Alumno']['estado_civil'];
            $this->request->data['User']['primera_lengua'] = $a['Alumno']['primera_lengua'];
            $this->request->data['User']['segunda_lengua'] = $a['Alumno']['segunda_lengua'];
            $this->request->data['User']['fecha_nac'] = $a['Alumno']['fecha_nac'];
            $this->request->data['User']['lugar_nac'] = $a['Alumno']['lugar_nac'];
            $this->request->data['User']['genero'] = $a['Alumno']['genero'];
            $this->request->data['User']['paise_id'] = $a['Alumno']['paise_id'];
            $this->request->data['User']['departamento_id'] = $a['Alumno']['departamento_id'];
            //$this->request->data['User']['provincia_id'] = $a['Alumno']['provincia_id'];
            $this->request->data['User']['nacionalidad'] = $a['Alumno']['nacionalidad'];
            $this->request->data['User']['territorio_origen'] = $a['Alumno']['territorio_origen'];
            $this->request->data['User']['organizacione_id'] = $a['Alumno']['organizacion_id'];
            $this->request->data['User']['telefono_fijo'] = $a['Alumno']['telefono_fijo'];
            $this->request->data['User']['telefono_celular'] = $a['Alumno']['telefono_celular'];
            $this->request->data['User']['email'] = $a['Alumno']['email'];
            $this->request->data['User']['colegio'] = $a['Alumno']['colegio'];
            $this->request->data['User']['direccion_colegio'] = $a['Alumno']['direccion_colegio'];
            $this->request->data['User']['doc_ci'] = $a['Alumno']['doc_ci'];
            $this->request->data['User']['doc_nac'] = $a['Alumno']['doc_nac'];
            $this->request->data['User']['doc_titulo'] = $a['Alumno']['doc_titulo'];
            $this->request->data['User']['doc_aval'] = $a['Alumno']['doc_aval'];
            $this->request->data['User']['doc_foto'] = $a['Alumno']['doc_foto'];
            $this->request->data['User']['doc_medico'] = $a['Alumno']['doc_medico'];
            $this->request->data['User']['doc_conducta'] = $a['Alumno']['doc_conducta'];
            $this->request->data['User']['emer_nombre'] = $a['Alumno']['emer_nombre'];
            $this->request->data['User']['emer_celular'] = $a['Alumno']['emer_celular'];
            $this->request->data['User']['emer_direccion'] = $a['Alumno']['emer_direccion'];
            $this->request->data['User']['malla_curricular'] = $a['Alumno']['malla_curricular'];
            $this->request->data['User']['username'] = $a['Alumno']['num_registro'];
            $this->request->data['User']['password'] = $a['Alumno']['ci'];
            $this->request->data['User']['group_id'] = 3;
            $this->User->save($this->data);
           
            
        }
    }
    public function materiales($id=null){
        
        $alumno_id=$id;
        $materiales = $this->Materiale->find('all');
        //debug($materiales);
        $this->set(compact('materiales','alumno_id'));
        
    }
    public function materialesedit($id=null){
        
        $alumno_id=$id;
        $materiales = $this->Alumnomateriale->find('all',array('conditions' => array('Alumnomateriale.user_id' => $alumno_id)));
        //debug($materiales);
        $this->set(compact('materiales','alumno_id'));
        
    }
    public function ajaxlistado()
    {
        //debug($this->request->data);exit;
        $this->layout = 'ajax';
            if(!empty($this->request->data['User']['nombres']) and empty($this->request->data['User']['ap_paterno']) and empty($this->request->data['User']['ap_materno']))
            {
                $alumnos = $this->User->find('all',array('conditions'=>array('User.nombres LIKE'=> '%'.$this->request->data['User']['nombres'].'%')));
            }
            if(!empty($this->request->data['User']['ap_paterno'])and empty($this->request->data['User']['nombres']) and empty($this->request->data['User']['ap_materno']))
            {
                $alumnos = $this->User->find('all',array('conditions'=>array('User.ap_paterno LIKE'=> '%'.$this->request->data['User']['ap_paterno'].'%')));
            }
            if(!empty($this->request->data['User']['ap_materno'])and empty($this->request->data['User']['nombres']) and empty($this->request->data['User']['ap_paterno']))
            {
                $alumnos = $this->User->find('all',array('conditions'=>array('User.ap_materno LIKE'=> '%'.$this->request->data['User']['ap_materno'].'%')));
            }
            if(!empty($this->request->data['User']['ap_materno'])and !empty($this->request->data['User']['nombres']) and empty($this->request->data['User']['ap_paterno']))
            {
                $alumnos = $this->User->find('all',array('conditions'=>array('User.ap_materno LIKE'=> '%'.$this->request->data['User']['ap_materno'].'%',
                'User.nombres LIKE'=> '%'.$this->request->data['User']['nombres'].'%')));
            }
            if(!empty($this->request->data['User']['ap_materno'])and empty($this->request->data['User']['nombres']) and !empty($this->request->data['User']['ap_paterno']))
            {
                $alumnos = $this->User->find('all',array('conditions'=>array('User.ap_materno LIKE'=> '%'.$this->request->data['User']['ap_materno'].'%',
                'User.ap_paterno LIKE'=> '%'.$this->request->data['User']['ap_paterno'].'%')));
            }
            if(empty($this->request->data['User']['ap_materno'])and !empty($this->request->data['User']['nombres']) and !empty($this->request->data['User']['ap_paterno']))
            {
                $alumnos = $this->User->find('all',array('conditions'=>array('User.ap_paterno LIKE'=> '%'.$this->request->data['User']['ap_paterno'].'%',
                'User.nombres LIKE'=> '%'.$this->request->data['User']['nombres'].'%')));
            }
            if(!empty($this->request->data['User']['ap_materno'])and !empty($this->request->data['User']['nombres']) and !empty($this->request->data['User']['ap_paterno']))
            {
                $alumnos = $this->User->find('all',array('conditions'=>array('User.ap_paterno LIKE'=> '%'.$this->request->data['User']['ap_paterno'].'%',
                'User.nombres LIKE'=> '%'.$this->request->data['User']['nombres'].'%',
                'User.ap_materno LIKE'=> '%'.$this->request->data['User']['ap_materno'].'%')));
            }
        $this->set(compact('alumnos'));
    }
    public function ajaxlistado2()
    {
        $this->layout = 'ajax';
        $numero = $this->request->data['User']['registro'];
        
        $alumnos = $this->User->find('all',array('conditions' => array('User.num_registro' => $numero)));
        $this->set(compact('alumnos'));
    }
    public function guardamateriales(){
    
            $alumno_id=$this->data['Alumno']['user_id'];
        for($i=1; $i<=11; $i++){
            
            if($this->data['Alumno']["mat_$i"]>0){
                $this->Alumnomateriale->create();
                $this->request->data['Alumnomateriale']['user_id']=$alumno_id;
                $this->request->data['Alumnomateriale']['materiale_id']=$this->data['Alumno']["mat_$i"];
                $this->request->data['Alumnomateriale']['fecha_entrega']=$this->data['Alumno']["fecha_entrega_$i"];
                $this->request->data['Alumnomateriale']['fecha_recepcion']=$this->data['Alumno']["fecha_recepcion_$i"];
                if($this->Alumnomateriale->save($this->data))
                {
                }
            }
        }  
        $this->redirect(array('action'=>'index'),null,true);
    }
    public function editamateriales(){
    
    $alumno_id=$this->data['Alumno']['user_id'];
    //debug($this->request->data);exit;
    
        for($i=1; $i<=11; $i++){
            
            
                
                $this->Alumnomateriale->id = $this->data['Alumno']["id_alumnomat_$i"];
                //$this->data = $this->Alumnomateriale->read();
                
                $this->request->data['Alumnomateriale']['fecha_recepcion']=$this->data['Alumno']["fecha_recepcion_$i"];
                if($this->Alumnomateriale->save($this->data))
                {
                }
            
        }  
        $this->redirect(array('action'=>'index'),null,true);
    }
    public function listamateriales($id = null){
        $materiales = $this->Alumnomateriale->find('all', array('conditions'=>array('Alumnomateriale.user_id'=>$id)));
        //debug($materiales);exit;
        $this->set(compact('materiales', 'id'));
    }
    public function cambiapass()
    {
        $id = $this->Session->read('Auth.User.id');
        $this->User->id = $id;
        if (!$id) {
            $this->Session->setFlash('No existe tal registro');
            $this->redirect(array('action' => 'menualumnos'), null, true);
        }
        if (empty($this->data)) {
            $this->data = $this->User->read();
        } else {
            if ($this->User->save($this->data)) {
                $this->Session->setFlash('Su Password fue modificado Exitosamente','msgbueno');
                $this->redirect(array('action' => 'menualumnos'), null, true);
            } else {
                $this->Session->setFlash('no se pudo modificar!!');
            }
        }
    }
    public function notasultimo()
    {
        $semestre = $this->Session->read('Auth.User.semestre_id');
        
        $semestre2 = $this->Session->read('Auth.User.Semestre.nombre');
        $malla = $this->Malla->find('first',array('order'=>'Malla.id DESC'));
        $materias = $this->DocentesMateria->find('all',array(
        'conditions'=>array(
        'DocentesMateria.semestre_id'=>$semestre,
        'DocentesMateria.malla_id'=>$malla['Malla']['id']),
        'recursive' => 0
        ));
        //debug($semestre2);exit;
        $notas = $this->Alumnosnota->find('all',array(
        'conditions'=>array(
        'Alumnosnota.semestre_id'=>$semestre,
        'Alumnosnota.malla_id'=>$malla['Malla']['id'],
        'Alumnosnota.user_id'=>$this->Session->read('Auth.User.id'))));
        
        $this->set(compact('materias','semestre2','malla','notas'));
    }
    public function notas()
    {
        $carrera = $this->Session->read('Auth.User.carrera_id');
        $id = $this->Session->read('Auth.User.id');
        $semestres = $this->Semestre->find('all');
        $notas = $this->Alumnosnota->find('all',array(
        'conditions'=>array(
        'Alumnosnota.user_id'=>$id
        )));
        $docentesmateria = $this->DocentesMateria->find('all',array('conditions'=>array('DocentesMateria.carrera_id'=>$carrera)));
        //debug($docentesmateria);exit;
        $this->set(compact('semestres','notas','docentesmateria'));
    }
    public function notas2($id = null)
    {
        $alumno = $this->User->find('first',array('conditions'=>array('User.id'=>$id)));
        $carrera = $alumno['User']['carrera_id'];
        $semestres = $this->Semestre->find('all');
        $notas = $this->Alumnosnota->find('all',array(
        'conditions'=>array(
        'Alumnosnota.user_id'=>$id
        )));
        $docentesmateria = $this->DocentesMateria->find('all',array('conditions'=>array('DocentesMateria.carrera_id'=>$carrera)));
        //debug($docentesmateria);exit;
        $this->set(compact('semestres','notas','docentesmateria'));
        
    }
    public function inscripcion()
    {
        $id = $this->Session->read('Auth.User.id');
        $malla = $this->Malla->find('first',array('order'=>'Malla.id DESC'));
        //$revisamaterias = $this->Alumnosmateria->find('all',array('conditions'=>array('Alumnosmateria.user_id'=>$id)));
        
        $alumno = $this->User->find('first',array('conditions'=>array('User.id'=>$id)));
        //debug($alumno);exit;
        $semestre = $alumno['User']['semestre_id'];
        $semestre2 = $alumno['Semestre']['nombre'];
        $materias = $this->DocentesMateria->find('all',array('conditions'=>array('DocentesMateria.semestre_id'=>$semestre,'DocentesMateria.malla_id'=>$malla['Malla']['id'])));
        $alumnosmaterias = $this->Alumnosmateria->find('first',array('conditions'=>array('Alumnosmateria.user_id'=>$id,'Alumnosmateria.semestre_id'=>$semestre)));
        if ($alumnosmaterias == null)
        {
            $sw = true;
        }
        else{
            $sw = false;
        }
        $this->set(compact('materias','semestre2','id','sw'));
    }
    public function inscripcion3($id = null)
    {
        $malla = $this->Malla->find('first',array('order'=>'Malla.id DESC'));
        //$revisamaterias = $this->Alumnosmateria->find('all',array('conditions'=>array('Alumnosmateria.user_id'=>$id)));
        $alumno = $this->User->find('first',array('conditions'=>array('User.id'=>$id)));
        //debug($alumno);exit;
        $semestre = $alumno['User']['semestre_id'];
        $semestre2 = $alumno['Semestre']['nombre'];
        $materias = $this->DocentesMateria->find('all',array('conditions'=>array('DocentesMateria.semestre_id'=>$semestre,'DocentesMateria.malla_id'=>$malla['Malla']['id'])));
        $alumnosmaterias = $this->Alumnosmateria->find('first',array('conditions'=>array('Alumnosmateria.user_id'=>$id,'Alumnosmateria.semestre_id'=>$semestre)));
        if ($alumnosmaterias == null)
        {
            $sw = true;
        }
        else{
            $sw = false;
        }
        $this->set(compact('materias','semestre2','id','sw'));
    }
    public function actualizar()
    {
        $id = $this->Session->read('Auth.User.id');
        $semestre = 0;
        $alumno = $this->User->find('first',array('conditions'=>array('User.id'=>$id)));
        $semestre = $alumno['User']['semestre_id'];
        //$ci = $this->Session->read('Auth.User.ci');
        $notas = $this->Alumnosnota->find('all',array('conditions'=>array('Alumnosnota.user_id'=>$id,'Materia.semestre_id' => $semestre)));
        $sw = 1;
        if(!empty($notas))
        {
            foreach($notas as $n)
            {
                if ($n['Alumnosnota']['notafinal'] < 51)
                {
                    $sw = 0;
                }
            }
        }
        else{
            $sw = 0;
        }
        if ($sw == 1)
        {
            $this->User->id = $id;
            $semestre++;
            $this->User->read();
            
            $this->request->data['User']['semestre_id'] = $semestre;
            //$this->request->data['User']['password'] =$ci;
            //debug($semestre);exit;
            if($this->User->save($this->data['User'])){
                
                $this->Session->setFlash('Se actualizo correctamente!!!', 'msgbueno');
                $this->redirect(array('action' => 'menualumnos'), null, true);
            }
            
        }
        else{
            $this->Session->setFlash('Se actualizo correctamente!!!', 'msgbueno');
            $this->redirect(array('action' => 'menualumnos'), null, true);
        }
        $this->redirect(array('action' => 'menualumnos'), null, true);
        
    }
    public function actualiza2()
    {
        $alumnos = $this->User->find('all',array('conditions'=>array('User.group_id'=>3)));
        foreach($alumnos as $as)
        {
            $id = $as['User']['id'];
            $semestre = 0;
            $semestre = $as['User']['semestre_id'];
            $ci = $as['User']['semstre_id'];
            $notas = $this->Alumnosnota->find('all',array('conditions'=>array('Alumnosnota.user_id'=>$id)));
            $sw = 1;
            foreach($notas as $n)
            {
                if ($n['Alumnosnota']['notafinal'] < 51)
                {
                    $sw = 0;
                }
            }
            if ($sw == 1)
            {
                $this->User->id = $id;
                $semestre++;
                $this->User->read();
                $this->request->data['User']['semestre_id'] = $semestre;
                $this->request->data['User']['password'] =$ci;
                //debug($semestre);exit;
                $this->User->save($this->data['User']);    
            }
        }

        
        $this->redirect(array('action' => 'index'), null, true);
        
    }
    public function inscripcion2($id = null,$sw = null)
    {
        $malla = $this->Malla->find('first',array('order'=>'Malla.id DESC'));
        $alumno = $this->User->find('first',array('conditions'=>array('User.id'=>$id)));
        //debug($alumno);exit;
        $semestre = $alumno['User']['semestre_id'];
        $semestre2 = $alumno['Semestre']['nombre'];
        $materias = $this->DocentesMateria->find('all',array('conditions'=>array('DocentesMateria.semestre_id'=>$semestre,'DocentesMateria.malla_id'=>$malla['Malla']['id'])));
        foreach ($materias as $m)
        {
            $this->Alumnosmateria->create();
            $this->request->data['Alumnosmateria']['user_id'] = $alumno['User']['id'];
            $this->request->data['Alumnosmateria']['docentes_materia_id'] = $m['DocentesMateria']['id'];
            $this->request->data['Alumnosmateria']['carrera_id'] = $alumno['User']['carrera_id'];
            $this->request->data['Alumnosmateria']['malla_id'] = $malla['Malla']['id'];
            $this->request->data['Alumnosmateria']['semestre_id'] = $semestre;
            $this->Alumnosmateria->save($this->data);
        }
        if ($sw == 0)
        {
            $this->Session->setFlash('Inscripcion Confirmada!!!!!', 'msgbueno'); 
            $this->redirect(array('action' => 'inscripcion',$id), null, true); 
        }
        else{
            $this->Session->setFlash('Inscripcion Confirmada!!!!!', 'msgbueno'); 
            $this->redirect(array('action' => 'inscripcion3',$id), null, true); 
        }
        
    }
    public function insertar()
    {
        $ano = date('Y');
    $genera_reg = $ano . '00000';
    $registro = intval($genera_reg);
    $ultimo_reg = $this->Generaregistro->find('first', array('fields' => array('MAX(Generaregistro.numero) as max')));
    $nuevo_reg = intval($ultimo_reg['0']['max']);
    $val2 = $nuevo_reg+1;
    $nuevo_reg_alum = $registro + $val2;
//    debug($nuevo_reg_alum);exit;

     if(!empty($this->data)):
       		$this->User->create();
     		//$fecha_nac=split('/',$this->data['User']['fecha_nac']);
     		//$mifecha=$fecha_nac[2].'-'.$fecha_nac[1].'-'.$fecha_nac[0];
			//$this->request->data['User']['provincia_id']= $this->data['provincia_id'];
    	 	//$this->request->data['User']['fecha_nac']=$mifecha;
			if(empty($this->params['form']['imagen_alumno'])):

			else:	
			$this->Filehandler->upload('imagen_alumno','files/images/');
    		$data_image =$this->Filehandler->getLastUploadInfo();
    		$this->request->data['User']['foto_dir']=$data_image['file_name'];
    		$this->request->data['User']['foto_imagen']=$data_image['dir'];	
    		endif;   

    
                $ano = date('Y');
                $genera_reg = $ano . '00000';
                $registro = intval($genera_reg);
                
                $ultimo_reg = $this->Generaregistro->find('first', array('fields' => array('MAX(Generaregistro.numero) as max')));
                $nuevo_reg = intval($ultimo_reg['0']['max']);
                
                $val2 = $nuevo_reg+1;
                
                $nuevo_reg_alum = $registro + $val2;
                
               // debug($nuevo_reg_alum);exit;
                $this->Generaregistro->create();
                $this->request->data['Generaregistro']['numero']=$nuevo_reg+1;
                $this->Generaregistro->save($this->data);
                
                $sql_verif = $this->User->findByNumRegistro($this->data['User']['num_registro']);
                if(empty ($sql_verif)){
                    
                    $this->request->data['User']['num_registro'] = $nuevo_reg_alum;
                    
                }else{
                    
                    $ultimo_reg = $this->Generaregistro->find('first', array('fields' => array('MAX(Generaregistro.numero) as max')));
                    $nuevo_reg = intval($ultimo_reg['0']['max']);
                    $this->Generaregistro->create();
                    $this->request->data['Generaregistro']['numero']=$nuevo_reg++;


                    //$this->Generaregistro->save($this->data);
                    $this->request->data['User']['num_registro'] = $nuevo_reg_alum;
                    $this->request->data['User']['group_id'] = 3;
                    $this->request->data['User']['username'] = $nuevo_reg_alum;
                    $this->request->data['User']['password'] = $this->request->data['User']['ci'];
                }
                $datos = $this->data;
                $valida = $this->validar('User');
                if(empty($valida))
                {
                    if($this->User->save($this->data))
				{
				$mynumero=$this->data['User']['num_registro'];
				$num_reg= $mynumero;
					
					$myalumno= $this->User->find('first', array('fields' => array('MAX(User.id) as max')));
					$this->data='';
                    
					$ultimo_alumno=intval($myalumno['0']['max']);
                    
					$getalumno=$this->User->find('first',array('conditions'=>array('User.id'=>$ultimo_alumno)));
                    /******************************actualiza alumnosemestre************************************/
                            
                            
                    
					
					   $this->redirect(array('action'=>'index'),null,true);
						 //$this->redirect(array('Controller'=>'Alumno','action' => 'alumnofamiliarespadre',$num_reg,true));
					
				}
				else
				{
					//	echo 'error en alumnosemestre'; exit;
				}
                }
                else{
                    $this->Session->setFlash($valida,'msgerror');
                    $this->redirect(array('action'=>'index'),null,true);
                }
		endif;

				
		$carreras = $this->Carrera->find('list',array('fields'=>'Carrera.nombre'));
		$this->set('carreras',$carreras);
		$paises = $this->Paise->find('list',array('fields'=>'nombre'));
		$this->set('paises',$paises);
        //$provincias = $this->Provincia->find('list',array('fields'=>'Provincia.nombre','conditions'=>array('Provincia.departamento_id'=>$depa)));
		//$this->set('provincias',$provincias);
		$departamentos = $this->Departamento->find('list',array('fields'=>'Departamento.nombre'));
		$this->set('departamentos',$departamentos);
		$organizaciones = $this->Organizacione->find('list',array('fields'=>'Organizacione.nombre','order'=>'Organizacione.nombre ASC'));
		$this->set('organizaciones',$organizaciones);
		$mallas = $this->Malla->find('list',array('group' => 'Malla.nombre','fields'=>('Malla.nombre')));
//		debug($mallas);exit;
		$this->set('mallas',$mallas);
		
		$this->set('num_referencia',$nuevo_reg_alum);

		$semestres = $this->Semestre->find('list',array('fields'=>array('Semestre.nombre')));
        $estados = $this->Estado->find('list', array('fields'=>array('Estado.id', 'Estado.nombre')));
        $this->set('semestres', $semestres);
        $this->set('estados', $estados);
        
    }
    
    function ajaxprovincia($id=null){
            
            $this->layout = 'ajax';
            //debug($this->params);exit;
   	
		    //$id=$this->query['id_dep'];
            //$id=$this->params->query['id_dep'];
     		$dcp = $this->Provincia->find('list',  array(
                'conditions' => array('Provincia.departamento_id'=>$id),
                'fields' => array('id', 'nombre'),
                ));
            $this->set(compact('dcp'));
    }
    function editar($id = null)
    {
		$this->User->id=$id;
       
			if(!$id)
				{
				$this->Session->setFlash('No existe tal motivo');
				$this->redirect(array('action'=>'index'),null,true);
				}
				if(empty($this->data))
				{
					$this->data = $this->User->read(); //find(array('id' => $id));
                   // $this->data = $this->Usersemestre->read();
				}
					else
					{
				   // debug($this->data);exit;
					//$fechanac=split('/',$this->data['User']['fecha_nac']);   $this->request->data['User']['fecha_nac']=$fechanac[2].'/'.$fechanac[1].'/'.$fechanac[0]; 
					   $datos = $this->data;
                                           $valida = $this->validar('User');
                                           if(empty($valida))
                                           {
                                              if($this->User->save($this->data))
						{
                                                    $this->Session->setFlash('Se guardo correctamente!!','msgbueno');
							$this->redirect(array('action'=>'index'),null,true);
						}
						else
						{
							$this->Session->setFlash('no se pudo modificar!!','msgerror');
						} 
                                           }
                                           else{
                                               $this->Session->setFlash($valida,'msgerror');
                                           }	
				}
				
		$depa=$this->data['Departamento']['id'];
		$carreras = $this->Carrera->find('list',array('fields'=>'Carrera.nombre'));
		$this->set('carreras',$carreras);
		$paises = $this->Paise->find('list',array('fields'=>'Paise.nombre'));
		$this->set('paises',$paises);
		$departamentos = $this->Departamento->find('list',array('fields'=>'Departamento.nombre'));
		$this->set('departamentos',$departamentos);
		//$provincias = $this->Provincia->find('list',array('fields'=>'Provincia.nombre','conditions'=>array('Provincia.departamento_id'=>$depa)));
		//$this->set('provincias',$provincias);
		$organizaciones = $this->Organizacione->find('list',array('fields'=>'Organizacione.nombre','order'=>array('Organizacione.nombre'=>'ASC')));
		$this->set('organizaciones',$organizaciones);
//		debug($this->data['User']['genero']);exit;	
		if($this->data['User']['genero']==1){
            $genero_dc = array('Soltero'=>'Soltero', 'Casado'=>'Casado', 'Divorciado'=>'Divorciado', 'Viudo'=>'Viudo');
        }
        else{
            $genero_dc = array('Soltera'=>'Soltera', 'Casada'=>'Casada', 'Divorciada'=>'Divorciada', 'Viuda'=>'Viuda');
        }
		//debug($genero_dc);exit;
	    $expedido = array('Lp'=>'Lp', 'Cb'=>'Cb', 'Sc'=>'Sc', 'Bn'=>'Bn', 'Tj'=>'Tj','Pt'=>'Pt', 'Or'=>'Or', 'Pd'=>'Pd','Ch'=>'Ch');
	    //debug($this->data);
	       		$this->set(compact('organizaciones', 'genero_dc','expedido'));	

		$alumno_id=$this->data['User']['id'];
		$this->set('alumno_id',$alumno_id);	
		$mallas = $this->Malla->find('list',array('group' => 'Malla.nombre','fields'=>('Malla.nombre')));
        
        $semestres = $this->Semestre->find('list',array('fields'=>array('Semestre.nombre')));
        $estados = $this->Estado->find('list', array('fields'=>array('Estado.id', 'Estado.nombre')));
        $this->set('semestres', $semestres);
        $this->set('estados', $estados);
		$this->set('mallas',$mallas);
        
         
        $this->set('estadoa', $estadoActual);
        $this->set('semact', $semestreactual);

    }
    function eliminar($id=null){
        $this->User->id=$id;
        $this->data=$this->User->read();
        if(!$id){
            $this->Session->setFlash('No existe el Alumno a eliminar');
            $this->redirect(array('action' =>'index'));
        }
        else
        {
            if($this->User->delete($id)){
                $this->Session->setFlash('Se elimino el Alumno '.$this->data['User']['nombre']);
                $this->redirect(array('action' =>'index'));
            }
            else{
                $this->Session->setFlash('Error al eliminar');
            }
        }
    }
    public function menualumnos()
    {
        $idalumno = $this->Session->read('Auth.User.id');
        $alumno = $this->User->find('first',array('conditions'=>array('User.id'=>$idalumno)));
        $this->set(compact('alumno'));
    }
    function alumnosmateriales($idAlumno=null)
    {
        $materialesDelAlumno = $this->AlumnosMateriale->find('all', array(
            'recursive' => 0,
            'conditions'=>array('AlumnosMateriale.alumno_id'=>$idAlumno)
            ));

        //debug($materialesDelAlmuno);
        $this->set(compact('materialesDelAlmuno',$idAlmuno));

        
        $dmaterial = $this->Materiale->find('list',array('fields'=>'Materiale.nombre'));
        $this->set(compact('dmaterial'));
        //debug($dsemestre);exit;
        
        if (!empty($this->request->data)) {
             //debug($this->request->data);exit;
             $this->AlumnosMateriale->create();
             $this->request->data['AlumnosMateriale']['alumno_id']=$idAlmuno; //registra el id del Alumno
            if ($this->AlumnosMateriale->save($this->data)) { 
                $this->Session->setFlash('Material Registrado con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 
            } else { 
                $this->Session->setFlash('No se pudo registrar el Material'); 
            }
        }
        
        
        //debug($this->request->data);exit;
    }
     function eliminarAlumnoMaterial($id=null){
        $this->AlumnosMateriale->id=$id;
        $this->data=$this->AlumnosMateriale->read();
        if(!$id){
            $this->Session->setFlash('No existe el Alumno a eliminar');
            $this->redirect(array('action' =>'index'));
        }
        else
        {
            if($this->AlumnosMateriale->delete($id)){
                $this->Session->setFlash('Se elimino el Alumno Material'.$this->data['AlumnosMateriale']['nombre']);
                $this->redirect(array('action' =>'index'));
            }
            else{
                $this->Session->setFlash('Error al eliminar');
            }
        }
    }
    function alumnospermisos($idPermiso=null)   
    {
        $permisoDelAlmuno = $this->AlumnosPermiso->find('all', array(
            'recursive' => 0,
            'conditions'=>array('AlumnosPermiso.alumno_id'=>$idPermiso)
            ));
        //debug($permisoDelAlmuno);exit;
        $this->set(compact('permisoDelAlmuno',$idPermiso));
        
        if (!empty($this->request->data)) {
             //debug($this->request->data);exit;
             $this->AlumnosPermiso->create();
             $this->request->data['AlumnosPermiso']['alumno_id']=$idPermiso; //registra el id del Alumno
            if ($this->AlumnosPermiso->save($this->data)) { 
                $this->Session->setFlash('Permiso Registrado con exito'); 
                $this->redirect(array('action' => 'index'), null, true); 
            } else { 
                $this->Session->setFlash('No se pudo registrar el Permiso'); 
            }
        }
    }
    
}

?>
