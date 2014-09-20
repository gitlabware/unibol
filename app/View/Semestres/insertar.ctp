<div class="span12">
	<h3 class="heading">
		INSERTAR NUEVO SEMESTRE
	</h3>
	<?php echo $this->
		Form->create('Semestre'); ?>
		<div class="formSep">
			<div class="row-fluid">
				<div class="span4">
					<label>
						Inserte el Nombre del Semestre
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->
						Form->text('nombre', array('placeholder'=>'Inserte un Semestre','class' => 'span12', 'required'));?>
				</div>
				
			</div>
			
		</div>
		<div class="form-actions">
			<button class="btn btn-success" type="submit">
				Guardar Nuevo Semestre
			</button>
		</div>
		</form>
</div>
<!-- sidebar -->
<?php echo $this->
	element('sidebar/semestres'); ?>
	<!-- fin sidebar -->
	<?php //llamamos scripts tablas ?>
		<?php echo $this->
			element('jsformularios'); ?>