<div class="span12">
	<h3 class="heading">
		INSERTAR NUEVO DOCENTE
	</h3>
	<?php echo $this->
		Form->create('User'); ?>
		<div class="formSep">
			<div class="row-fluid">
				<div class="span4">
					<label>
						Inserte su apellido paterno
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->
						Form->text('ap_paterno', array('placeholder'=>'Inserte el apellido paterno'));?>
				</div>
                <div class="span4">
					<label>
						Inserte su apellido materno
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->
						Form->text('ap_materno', array('placeholder'=>'Inserte el apellido matero'));?>
				</div>
                <div class="span4">
					<label>
						Inserte el Nombres
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->
						Form->text('nombres', array('placeholder'=>'Inserte los nombres'));?>
				</div>
                </div>
                <div class="row-fluid">
                <div class="span4">
					<label>
						Carnet de Identidad :
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->
						Form->text('ci', array('placeholder'=>'Inserte un ci'));?>
				</div>
                <div class="span4">
					<label>
						Fecha de Nacimiento  :
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->
						Form->text('fecha_nac', array('id'=>'fecha_nac','placeholder'=>'la fecha'));?>
                        <script type="text/javascript">
		                jQuery(function(){
                        var opts={
		                  changeMonth:true,
		                  changeYear:true,
	                   	yearRange:"-70:-1"
		              };	jQuery("#fecha_nac").datepicker(opts);});
		              </script>
				</div>
                </div>
                <div class="row-fluid">
                <div class="span4">
					<label>
						Especialidad :
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->
						Form->text('especialidad', array('placeholder'=>'Inserte la especialidad'));?>
				</div>
                <div class="span4">
					<label>
						Fecha de Incorporacion :
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->
						Form->text('fecha_incorporacion', array('id'=>'fecha_inc', 'placeholder'=>'Inserte la fecha de incorporaion'));?>
                        <script type="text/javascript">
		jQuery(function(){
		var opts={
		changeMonth:true,
		changeYear:true,
		yearRange:"-30:+1"
		};	jQuery("#fecha_inc").datepicker(opts);});
		</script>
				</div>
                <div class="span4">
					<label>
						Horas Asignadas :
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->
						Form->text('horas_asignadas', array('placeholder'=>'Inserte una fecha de naimiento'));?>
			</div>
		      </div>
              
            
            
            
            
			</div>
            <button class="btn btn-success" type="submit">
				Guardar Nuevo Docente
			</button>
		</form>
</div>
<!-- sidebar -->
<?php echo $this->
	element('sidebar/docentes'); ?>
	<!-- fin sidebar -->
	<?php //llamamos scripts tablas ?>
		<?php echo $this->
			element('jsformularios'); ?>