<div class="span12">
	<h3 class="heading">
		INSERTAR NUEVO ALUMNOS PARALELOS
	</h3>
	<?php echo $this->
		Form->create('AlumnosParalelo'); ?>
		<div class="formSep">
			<div class="row-fluid">
				<div class="span4">
					<label>
						Inserte el Alumno
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->
						Form->select('alumno_id',$dalumno);?>
				</div>
                <div class="span4">
					<label>
						Inserte el Paralelo
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->
						Form->select('paralelo_id',$dparalelo);?>
				</div>
                <div class="span4">
					<label>
						Inserte el Estado
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->
						Form->select('estado_id',$destado);?>
				</div>
				
			</div>
			
		</div>
        <div class="formSep">
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
                <div class="span4">
					<label>
						Inserte el Nivel
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->
						Form->select('nivele_id',$dnivel);?>
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
	element('sidebar/alumnosparalelos'); ?>
	<!-- fin sidebar -->
	<?php //llamamos scripts tablas ?>
		<?php echo $this->
			element('jsformularios'); ?>