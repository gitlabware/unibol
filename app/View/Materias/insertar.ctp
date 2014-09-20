
<div class="span7">
	<h3 class="heading">
		INSERTAR NUEVA MATERIA
	</h3>
	<?php echo $this->
		Form->create('Materia'); ?>
		<div class="formSep">
			<div class="row-fluid">
				<div class="span5">
					<label>
						Inserte el Nombre de la Materia
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->
						Form->text('nombre', array('placeholder'=>'Inserte un nombre'));?>
				</div>
				<div class="span5">
					<label>
						Inserte la Sigla
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->
						Form->text('sigla', array('placeholder'=>'Inserte el orden de la materia'));?>
				</div>
                
			</div>
            <div class="row-fluid">
                <div class="span5">
					<label>
						Inserte la Carrera
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->
						Form->select('carrera_id',$dcarrera);?>
				</div>
                <div class="span5">
					<label>
						Inserte el Semestre
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->
						Form->select('semestre_id',$dsemestre);?>
				</div>
            </div>
            
	<h3 class="heading">
		PRE - REQUISITOS
        
	</h3>
 <div class="row-fluid">
     <div class="span5">
        <label>
        Materia: 
        </label>
					<?php echo $this->
						Form->select('requisito1',$dmateria);?>        
    </div>
    <div class="span5">
        <label>
        Materia: 
        </label>
					<?php echo $this->
						Form->select('requisito2',$dmateria);?>        
    </div>
 </div>
  <div class="row-fluid">
     <div class="span5">
        <label>
        Materia: 
        </label>
					<?php echo $this->
						Form->select('requisito3',$dmateria);?>        
    </div>
    <div class="span5">
        <label>
        Materia: 
        </label>
					<?php echo $this->
						Form->select('requisito4',$dmateria);?>        
    </div>
 </div>

        
            
            
		</div>
		<div class="form-actions">
			<button class="btn btn-success" type="submit">
				Guardar Nueva Materia
			</button>
		</div>
		</form>
        

</div>

<!-- sidebar -->
<?php echo $this->
	element('sidebar/materias'); ?>
	<!-- fin sidebar -->
	<?php //llamamos scripts tablas ?>
		<?php echo $this->
			element('jsformularios'); ?>