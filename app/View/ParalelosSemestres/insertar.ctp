<div class="span12">
	<h3 class="heading">
		INSERTAR PARALELO - SEMESTRE
	</h3>
	<?php echo $this->Form->create('ParalelosSemestre'); ?>
		<div class="formSep">
			<div class="row-fluid">
				<div class="span4">
					<label>
						Inserte el Semestre
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->
						Form->select('semestre_id',$dsemestre, array('placeholder'=>'Inserte un nombre'));?>
				</div>
				<div class="span4">
					<label>
						Inserte el Paralelo
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->
						Form->select('paralelo_id',$dparalelo, array('placeholder'=>'Inserte el apellido paterno'));?>
				</div>
        </div>
		</div>
		<div class="form-actions">
			<button class="btn btn-success" type="submit">
				Guardar Nuevo Alumno
			</button>
		</div>
		</form>
</div>
<!-- sidebar -->
<?php echo $this->
	element('sidebar/alumnos'); ?>
	<!-- fin sidebar -->
	<?php //llamamos scripts tablas ?>
		<?php echo $this->
			element('jsformularios'); ?>