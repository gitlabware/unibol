<div class="span12">
	<h3 class="heading">
		INSERTAR NUEVO NIVEL
	</h3>
	<?php echo $this->
		Form->create('Nivele'); ?>
		<div class="formSep">
			<div class="row-fluid">
				<div class="span4">
					<label>
						Inserte el Nombre del Nivel
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->
						Form->text('nombre', array('placeholder'=>'Inserte un nombre','class' => 'span12', 'required'));?>
				</div>
                <div class="span4">
					<label>
						Inserte una Descripcion
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->
						Form->text('descripcion', array('placeholder'=>'Inserte la descripcion','class' => 'span12', 'required'));?>
				</div>
                </div>
                <div class="row-fluid">
                <div class="span4">
					<label>
						Inserte la Gestion
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->
						Form->select('gestione_id',$dgestion);?>
				</div>
				
			</div>
			
		</div>
			<button class="btn btn-success" type="submit">
				Guardar Nuevo Nivel
			</button>
		</form>
</div>
<!-- sidebar -->
<?php echo $this->
	element('sidebar/niveles'); ?>
	<!-- fin sidebar -->
	<?php //llamamos scripts tablas ?>
		<?php echo $this->
			element('jsformularios'); ?>