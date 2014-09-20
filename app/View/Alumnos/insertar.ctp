<div class="span12">
       
    <?php echo $this->Form->create('User'); ?> 
    <div class="formSep">
        <legend> REGISTRO DE ALUMNOS </legend>
			<div class="row-fluid">
            
				<div class="span4">
					<label>
						Carrera: 
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->Form->select('carrera_id',$carreras, array('required'))?>
				</div>
				<div class="span4">
					<label>
						Malla Curricular: 
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->Form->select('malla_curricular',$mallas, array('required'))?>
				</div>
                
            </div>
            <div class="row-fluid">
                <div class="span4">
					<label>
						Seleccionar semestre: 
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->Form->select('semestre_id',$semestres,array('required')); ?>
				</div>
                
            </div>
            <legend> DATOS PERSONALES </legend>
            <div class="row-fluid">
                <div class="span3">
					<label>
						Apellido Paterno: 
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->Form->text('ap_paterno'); ?>
				</div>
                <div class="span3">
					<label>
						Apellido Materno: 
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->Form->text('ap_materno', array('required')); ?>
				</div>
                <div class="span3">
					<label>
						Nombres: 
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->Form->text('nombres', array('required')); ?>
				</div>
            </div>
            <div class="row-fluid">
                <div class="span4">
					<label>
						Genero: 
						
					</label>
					<?php $options=array('0'=>'Masculino', '1'=> 'Femenino'); 
            $atributos=array('legend'=>false,'class'=>'validate[required] radio');    ?>
            
                Femenino: &nbsp;&nbsp;<input type="radio" name="data[User][genero]" value="0" <?php  if($this->data['User']['genero']=='0'):?> checked="true" <?php endif;?>/> &nbsp;&nbsp;&nbsp;&nbsp;
                Masculino: &nbsp;&nbsp;<input type="radio" name="data[User][genero]" value="1" <?php  if($this->data['User']['genero']=='1'):?> checked="true" <?php endif;?>/>
                <script type="text/javascript">
                    jQuery("input[name='data[User][genero]']").change(function(){
                    if (jQuery("input[name='data[User][genero]']:checked").val() == '0') {
                        //alert(1);
                        jQuery('#gen_mas').css("display", "none");
                        jQuery('#gen_fem').css("display", "block");
                     }
                     else{
                        //alert(0);
                        jQuery('#gen_fem').css("display", "none");
                        jQuery('#gen_mas').css("display", "block");
                     }
                     });
                </script>
            
                
                
				</div>
                
            </div>
            <div class="row-fluid">
                <div class="span4">
					<label>
						Nro de C.I:
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->Form->text('ci', array('required')); ?>
				</div>
                <div class="span4">
					<label>
						Expedido:
						<span class="f_req">
                        *
						</span>
					</label>
					<select  name="data[User][ci_expedido]" >
    	  														<option  value="Lp">La Paz</option>
    	  														<option  value="Cb">Cochabamba</option>
    	  														<option  value="Sc">Santa Cruz</option>
    	  														<option  value="Bn">Beni</option>
       	  														<option  value="Tj">Tarija</option>
	   	  														<option  value="Pt">Potosi</option>
    	  														<option  value="Or">Oruro</option>
    	  														<option  value="Pd">Pando</option>
    	  														<option  value="Ch">Chuquisaca</option>
					</select> 
				</div>
                <div class="span4">
					<label>
						Estado Civil:
						<span class="f_req">
                        *
						</span>
					</label>
					<div id="gen_mas">
            <select  name="data[User][estado_civil]">
    	  		<option  value="Soltero">Soltero</option>
    	  		<option  value="Casado">Casado</option>
	   	  	    <option  value="Divorciado">Divorciado</option>
    	  		<option  value="Viudo">Viudo</option>
   	  		</select>
            </div>
            <div id="gen_fem" style="display: none;">
            <select  name="data[User][estado_civil]">
    	  		<option  value="Soltera">Soltera</option>
    	  		<option  value="Casada">Casada</option>
	   	  	    <option  value="Divorciada">Divorciada</option>
    	  		<option  value="Viuda">Viuda</option>
   	  		</select>
            </div>
				</div>
            </div>
            
                <div class="row-fluid">
                <div class="span4">
					<label>
						Primera Lengua:
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->Form->text('primera_lengua', array('class'=>'validate[required] text-input')); ?>
				</div>
				<div class="span4">
					<label>
						Segunda Lengua: 
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->Form->text('segunda_lengua', array('class'=>'validate[required] text-input')); ?>
				</div>
                </div>
                
                
                <div class="row-fluid">
                <div class="span4">
					<label>
						Fecha Nacimiento:
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->Form->text('fecha_nac',array('required','id'=>'dp2','data-date-format'=>'yyyy/mm/dd')); ?>
				</div>
				<div class="span4">
					<label>
						Lugar Nacimiento:
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->Form->text('lugar_nac', array('class'=>'validate[required] text-input')); ?>
				</div>
                </div>
                
                <legend>DATOS DEL RESIDENTE</legend>
                <div class="row-fluid">
                <div class="span4">
					<label>
						Pais:
						<span class="f_req">
                        *
						</span>
					</label>
					<input  type="text" id="AlumnoPais" name="" value="Bolivia" readonly="readonly"> 
                    <input  type="hidden" id="AlumnoPais" name="data[Alumno][pais_id]" value="1" readonly="readonly">
                         <?php //echo $this->Form->select('pais_id', $paises,array('class'=>'validate[required] text-input')) ?>
				</div>
                		
                <div class="span4">
					<label>
						Departamento:
						<span class="f_req">
                        *
						</span>
					</label>
                    
					<?php echo $this->Form->select('departamento_id', $departamentos, array('id'=>'dep_id')) ;?>
				</div>
                
                <div class="span4">
					<label>
						Provincia:
						<span class="f_req">
                        *
						</span>
					</label>
                    
					<?php echo $this->Form->text('provincia', array('class'=>'validate[required] text-input')); ?>
				</div>

			</div>
            
            
            <div class="row-fluid">
            <div class="span4">
					<label>
						Nacionalidad:
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->Form->text('nacionalidad', array('class'=>'validate[required] text-input')); ?>
				</div>
                <div class="span4">
					<label>
						Territorio Indigena de Origen  :
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->Form->text('territorio_origen',array('class'=>'validate[required] text-input')); ?>
				</div>
            </div>
            
            
            <div class="row-fluid">
                <div class="span4">
					<label>
						Organizacion Indigena a la que pertenece:
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->Form->select('organizacione_id', $organizaciones) ?>
				</div>
                
            </div>
            
            <div class="row-fluid">
                <div class="span3">
					<label>
						Telefono Fijo:
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->Form->text('telefono_fijo'); ?>
				</div>
                <div class="span3">
					<label>
						Celular:
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->Form->text('telefono_celular'); ?>
				</div>
                <div class="span3">
					<label>
						Email:
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->Form->text('email'); ?>
				</div>
            </div>
        <legend>FORMACION NIVEL SECUNDARIO</legend>
            <div class="row-fluid">
                <div class="span4">
					<label>
						Colegio de Egreso :
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->Form->text('colegio',array('class'=>'validate[required] text-input')); ?>
				</div>
                <div class="span4">
					<label>
						Direccion :
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->Form->text('direccion_colegio',array('class'=>'validate[required] text-input')); ?>
				</div>
            </div>
            
            <legend>DOCUMENTOS RECEPCIONADOS</legend>
            <div class="row-fluid">
                <div class="span4">
					<label>
						Fotocopias Cedula de Identidad:
						
					</label>
					<?php echo $this->Form->checkbox('doc_ci')?>
				</div>
                <div class="span4">
					<label>
						Certificado de Nacimiento Original:
						
					</label>
					<?php echo $this->Form->checkbox('doc_nac')?>
				</div>
            </div>
            
            <div class="row-fluid">
                <div class="span4">
					<label>
						Fotocopias Titulo Bachiller:
						
					</label>
					<?php echo $this->Form->checkbox('doc_titulo')?>
				</div>
                <div class="span4">
					<label>
						Fotocopia 4x4 (Fondo Azul):
						
					</label>
					<?php echo $this->Form->checkbox('doc_foto')?>
				</div>
            </div>
            
            <div class="row-fluid">
                <div class="span3">
					<label>
						Carta Aval:
						
					</label>
					<?php echo $this->Form->checkbox('doc_aval',array('class'=>'validate[required] checkbox'))?>
				</div>
                <div class="span3">
					<label>
						Certificado Medico:
						
					</label>
					<?php echo $this->Form->checkbox('doc_medico')?>
				</div>
                <div class="span3">
					<label>
						Certificado Buena Conducta:
						
					</label>
					<?php echo $this->Form->checkbox('doc_conducta')?>
				</div>
            </div>
            <legend>NUMEROS DE EMERGENCIA</legend>
            <div class="row-fluid">
                <div class="span3">
					<label>
						En caso de emergencia comunicarse con :
						
					</label>
					<?php echo $this->Form->text('emer_nombre',array('class'=>'validate[required] text-input')); ?>
				</div>
                <div class="span3">
					<label>
						Al numero de celular :
						
					</label>
					<?php echo $this->Form->text('emer_celular'); ?>
				</div>
                <div class="span3">
					<label>
						Direccion :
						
					</label>
					<?php echo $this->Form->text('emer_direccion',array('class'=>'validate[required] text-input')); ?>
				</div>
            </div>
		<div class="form-actions">
			<button class="btn btn-success" type="submit">
				Guardar Nuevo Alumno
			</button>
		</div>
		</form>
    </div>


       
</form>
</div>
<!-- sidebar -->
<?php echo $this->element('sidebar/alumnos'); ?>
<!-- fin sidebar -->
<?php //llamamos scripts tablas ?>
<?php echo $this->element('jsformularios'); ?>