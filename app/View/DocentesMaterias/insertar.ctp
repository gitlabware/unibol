<div class="span10">
	<h3 class="heading">
		INSERTAR NUEVO DOCENTE MATERIA
	</h3>
	<?php echo $this->
		Form->create('DocentesMateria'); ?>
		<div class="formSep">
			<div class="row-fluid">
				<div class="span4">
					<label>
						Elija el Docente: 
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->Form->select('docente_id',$ddocente);?>
				</div>
                <div class="span4">
					<label>
						Elija la Materia:
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->Form->select('materia_id',$dmateria);?>
				</div>
                <div class="span4">
					<label>
						Ingrese el paralelo:
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->Form->text('paralelo');?>
				</div>
                
				
			</div>
            
            
			
		</div>
		<div class="form-actions">
			<button class="btn btn-success" type="submit">
				Guardar Nuevo DocenteMateria
			</button>
		</div>
		</form>
</div>