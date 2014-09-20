<div class="row-fluid">
    <div class="span7">
        <h3 class="heading">Alumnos - Permisos</h3> 
        <table class="table table-striped table-bordered dTableR" id="dt_a">
            <thead>
                <tr>                                          
                    <th>Nro</th>
                    <th>Alumno</th>
                    <th>Tiempo</th> 
                    <th>Acciones</th>
                        
                </tr>
            </thead>
             <?php $i=1;?>
            <tbody>
                <?php foreach ($permisoDelAlmuno as $perm): ?>
                    <?php $idPermiso = $perm['AlumnosPermiso']['id']; ?>
                    <tr>
                        <td><?php echo $i; $i++;?></td>                                                  
                        <td><?php echo $perm['Alumno']['nombre']; ?></td>
                        <td><?php echo $perm['AlumnosPermiso']['tiempo']; ?></td>
                        
                        <td>
                        <?php 
                                echo $this->Html->image("iconos/elim.png", array(
                                    "title" => "Eliminar",
                                    'url' => array('action' => 'eliminarAlumnoMaterial', $mat['AlumnosMateriale']['id'])
                                ));
                            ?>
                        </td>
                    </tr>
                    <?php
                endforeach;
                ?>
            </tbody>
        </table> 
                    
    </div>   

<!-- sidebar -->
<div class="span4">
	<h3 class="heading">
		PERMISO AL ALUMNO
	</h3>
	<?php echo $this->Form->create('AlumnosPermiso'); ?>
		<div class="formSep">
                <div class="row-fluid">
				<div class="span4">
					<label>
						Inserte el Tiempo
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->
						Form->text('tiempo', array('placeholder'=>'Inserte el tiempo de permiso en Hrs.'));?>
				</div>
                </div>
                <div class="row-fluid">
				<div class="span4">
					<label>
						Inserte la Fecha de Salida
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->
						Form->text('fecha_salida',array('class'=>'help-block'));?>
				</div>
                </div>
                <div class="row-fluid">
				<div class="span4">
					<label>
						Inserte la Fecha de Retorno
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->Form->text('fecha_retorno',array('class'=>'help-block'));?>
				</div>
                </div>
                <div class="row-fluid">
				<div class="span4">
					<label>
						Inserte el Motivo
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->
						Form->textarea('motivo');?>
				</div>
                </div>
		</div>
		<div class="form-actions">
			<button class="btn btn-success" type="submit">
				Guardar Permiso del Alumno
			</button>
		</div>
		</form>   
</div>

</div>
<?php echo $this->element('sidebar/alumnos'); ?>
<?php echo $this->element('jstablas'); ?>
