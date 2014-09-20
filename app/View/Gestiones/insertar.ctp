<div class="span12">
	<h3 class="heading">
		INSERTAR NUEVA GESTION
	</h3>
	<?php echo $this->
		Form->create('Gestione'); ?>
		<div class="formSep">
			<div class="row-fluid">
				<div class="span4">
					<label>
						Inserte el Nombre
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->
						Form->text('nombre', array('placeholder'=>'Inserte un nombre'));?>
				</div>
				<div class="span4">
					<label>
						Inserte el Promedio de Aprobacion
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->
						Form->text('promedio_aprobacion', array('placeholder'=>'Inserte el promedio de aprobacion'));?>
				</div>
                </div>
                <div class="row-fluid">
                <div class="span4">
					<label>
						Inserte el Promedio
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->
						Form->text('promedio', array('placeholder'=>'Inserte el promedio'));?>
				</div>
				<div class="span4">
					<label>
						Inserte el Estado
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->
						Form->text('estado', array('placeholder'=>'Inserte el estado'));?>
				</div>
                </div>
            
		</div>
			<button class="btn btn-success" type="submit">
				Guardar Nuevo Alumno
			</button>
		</form>
</div>
<!-- sidebar -->
<?php echo $this->
	element('sidebar/gestiones'); ?>
	<!-- fin sidebar -->
	<?php //llamamos scripts tablas ?>
		<?php echo $this->
			element('jsformularios'); ?>