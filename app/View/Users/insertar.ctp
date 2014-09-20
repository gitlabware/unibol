<div class="span12">
	<h3 class="heading">
		INSERTAR NUEVO USUARIO
	</h3>
	<?php echo $this->
		Form->create('User'); ?>
		<div class="formSep">
			<div class="row-fluid">
				<div class="span4">
					<label>
						Inserte el Nombre
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->
						Form->text('nombre', array('class' => 'span12', 'required'));?>
				</div>
				<div class="span4">
					<label>
						Inserte su apellido paterno
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->
						Form->text('ap_paterno', array('placeholder'=>'Inserte el apellido paterno'));?>
				</div>
                </div>
                <div class="row-fluid">
                <div class="span4">
					<label>
						Inserte su apellido materno
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->
						Form->text('ap_materno', array('placeholder'=>'Inserte el apellido matero'));?>
				</div>
				<div class="span4">
					<label>
						Inserte su C.I.
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->
						Form->text('ci', array('placeholder'=>'Inserte la fecha de nacimietno'));?>
				</div>
                </div>
                <div class="row-fluid">
                <div class="span4">
					<label>
						Inserte su Direccion
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->
						Form->text('direccion', array('placeholder'=>'Inserte la direccion'));?>
				</div>
                <div class="span4">
					<label>
						Inserte su Telefono
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->
						Form->text('telefono', array('placeholder'=>'Inserte la nacionalidad'));?>
				</div>
			</div>
            <div class="row-fluid">
            <div class="span4">
					<label>
						Inserte su Celular
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->
						Form->text('celular', array('placeholder'=>'Inserte el telefono'));?>
				</div>
                <div class="span4">
					<label>
						Inserte su Fecha de Nacimiento
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->
						Form->text('fechanacimiento', array('placeholder'=>'Inserte el genero'));?>
				</div>
            </div>
            <div class="row-fluid">
            <div class="span4">
					<label>
						Inserte su Usuario
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->
						Form->text('username', array('placeholder'=>'Inserte el telefono'));?>
				</div>
                <div class="span4">
					<label>
						Inserte su Password
						<span class="f_req">
                        *
						</span>
					</label>
                        <?php echo $this->Form->password('password'); ?>
				</div>
            </div>
            <div class="row-fluid">
                <div class="span4">
					<label>
						Seleccione tipo de Usuario
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->
						Form->select('group_id',$groups, array('placeholder'=>'Inserte el genero'));?>
                        
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