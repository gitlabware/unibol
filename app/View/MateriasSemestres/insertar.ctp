<div class="span12">
	<h3 class="heading">
		INSERTAR NUEVA MATERIA SEMESTRE
	</h3>
	<?php echo $this->
		Form->create('MateriasSemestre'); ?>
		<div class="formSep">
			<div class="row-fluid">
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
                <div class="span4">
					<label>
						Inserte el Semestre
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->
						Form->select('semestre_id',$dsemestre);?>
				</div>
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
		<div class="form-actions">
			<button class="btn btn-success" type="submit">
				Guardar Nueva MateriaSemestre
			</button>
		</div>
		</form>
</div>
<!-- sidebar -->
<?php echo $this->
	element('sidebar/materiassemestres'); ?>
	<!-- fin sidebar -->
	<?php //llamamos scripts tablas ?>
		<?php echo $this->
			element('jsformularios'); ?>