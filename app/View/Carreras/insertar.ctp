<div class="span12">
	<h3 class="heading">
		INSERTAR NUEVO CARRERA
	</h3>
	<?php echo $this->
		Form->create('Carrera'); ?>
		<div class="formSep">
			<div class="row-fluid">
				<div class="span4">
					<label>
						Inserte el Nombre de la Carrera
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->
						Form->text('nombre', array('placeholder'=>'Inserte una carrera','class' => 'span12', 'required'));?>
				</div>
				
			</div>
			
		</div>
		<div class="form-actions">
			<button class="btn btn-success" type="submit">
				Guardar Nueva Carrera
			</button>
		</div>
		</form>
</div>
<!-- sidebar -->
<?php echo $this->
	element('sidebar/carreras'); ?>
	<!-- fin sidebar -->
	<?php //llamamos scripts tablas ?>
		<?php echo $this->
			element('jsformularios'); ?>