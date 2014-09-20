<div class="span12">
	<h3 class="heading">
		INSERTAR NUEVA CARRERAS MATERIAS
	</h3>
	<?php echo $this->
		Form->create('CarrerasMateria'); ?>
		<div class="formSep">
			<div class="row-fluid">
				<div class="span4">
					<label>
						Inserte la Carrera
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->
						Form->select('carrera_id',$dcarrera);?>
				</div>
                <div class="span4">
					<label>
						Inserte la Materia
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->
						Form->select('materia_id',$dmateria);?>
				</div>
				
			</div>
			
		</div>
		<div class="form-actions">
			<button class="btn btn-success" type="submit">
				Guardar Nueva CarreraMateria
			</button>
		</div>
		</form>
</div>
<!-- sidebar -->
<?php echo $this->
	element('sidebar/carrerasmaterias'); ?>
	<!-- fin sidebar -->
	<?php //llamamos scripts tablas ?>
		<?php echo $this->
			element('jsformularios'); ?>