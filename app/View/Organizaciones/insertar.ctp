<div class="span10">
	<h3 class="heading">
		INSERTAR NUEVA ORGANIZACION
	</h3>
	<?php echo $this->
		Form->create('Organizacione'); ?>
		<div class="formSep">
			<div class="row-fluid">
				<div class="span4">
					<label>
						Inserte el Nombre de la Organizacion
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->
						Form->text('nombre', array('placeholder'=>'Inserte una organizacion','class' => 'span12', 'required'));?>
				</div>
				
			</div>
			
		</div>
		<div class="form-actions">
			<button class="btn btn-success" type="submit">
				Guardar Nueva Organizacion
			</button>
		</div>
		</form>
</div>
<!-- sidebar -->
<?php echo $this->
	element('sidebar/organizaciones'); ?>
	<!-- fin sidebar -->
	<?php //llamamos scripts tablas ?>
		<?php echo $this->
			element('jsformularios'); ?>