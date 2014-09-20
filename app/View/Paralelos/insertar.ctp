<div class="span12">
	<h3 class="heading">
		INSERTAR NUEVO PARALELO
	</h3>
	<?php echo $this->
		Form->create('Paralelo'); ?>
		<div class="formSep">
			<div class="row-fluid">
				<div class="span4">
					<label>
						Inserte el nivel
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->
						Form->select('nivele_id',$dniveles, array('placeholder'=>'Inserte el nivel'));?>
				</div>
				<div class="span4">
					<label>
						Inserte su curso
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->
						Form->text('curso', array('placeholder'=>'Inserte el curso'));?>
				</div>
                <div class="span4">
					<label>
						Inserte gestion
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->
						Form->select('gestione_id', $dgestiones);?>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span4">
					<label>
						Inserte el nombre
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->
						Form->text('nombre', array('placeholder'=>'Inserte el nombre'));?>
				</div>
                <div class="span4">
					<label>
						Inserte la descripcion
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->
						Form->text('descripcion', array('placeholder'=>'Inserte la descripcion'));?>
				</div>
			</div>            
		</div>
		<div class="form-actions">
			<button class="btn btn-success" type="submit">
				Guardar Nuevo Paralelo
			</button>
		</div>
		</form>
</div>
<!-- sidebar -->
<?php echo $this->
	element('sidebar/paralelos'); ?>
	<!-- fin sidebar -->
	<?php //llamamos scripts tablas ?>
		<?php echo $this->
			element('jsformularios'); ?>