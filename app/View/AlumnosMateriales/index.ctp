<div class="row-fluid">
    <div class="span6">
        <h3 class="heading">Alumnos - Materiales <?php echo $paralelossemestres; ?></h3> 
        <table class="table table-striped table-bordered dTableR" id="dt_a">
            <thead>
                <tr>                                          
                    <th>Nro</th>
                    <th>Alumno</th>
                    <th>Material</th> 
                    <th>Acciones</th>
                        
                </tr>
            </thead>
             <?php $i=1;?>
            <tbody>
                <?php foreach ($materiales as $mat): ?>
                    <?php $idMat = $mat['AlumnosMateriale']['id']; ?>
                    <tr>
                        <td><?php echo $i; $i++;?></td>                                                  
                        <td><?php echo $mat['AlumnosMateriale']['alumnos_id']; ?></td>
                        <td><?php echo $mat['AlumnosMateriale']['materiales_id']; ?></td>
                        
                        <td>
                           <?php 
                                echo $this->Html->image("iconos/edit.png", array(
                                    "title" => "Editar",
                                    'url' => array('action' => 'editar', $psem['ParalelosSemestre']['id'])
                                ));
                            ?>                             
                            
                        
                        <?php 
                                echo $this->Html->image("iconos/elim.png", array(
                                    "title" => "Eliminar",
                                    'url' => array('action' => 'eliminar', $psem['ParalelosSemestre']['id'])
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
		INSERTAR ALUMNO - MATERIALES
	</h3>
	<?php echo $this->Form->create('AlumnosMateriale'); ?>
		<div class="formSep">
                    <div class="row-fluid">
				<div class="span4">
					<label>
						Inserte el Material
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->
						Form->select('materiales_id',$dmaterial, array('placeholder'=>'Inserte el apellido paterno'));?>
				</div>
                    </div>
                <div class="row-fluid">
				<div class="span4">
					<label>
						Inserte la Cantidad
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->
						Form->text('cantidad', array('placeholder'=>'Inserte un nombre'));?>
				</div>
                </div>
                <div class="row-fluid">
				<div class="span4">
					<label>
						Fecha Entrega
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->Form->text('fecha_entrega',array('class'=>'help-block')); ?>
				</div>
                </div>
                <div class="row-fluid">
				<div class="span4">
					<label>
						Fecha Recepcion
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->
						Form->text('fecha_recepcion', array('placeholder'=>'Inserte un nombre'));?>
				</div>
                </div>
		</div>
		<div class="form-actions">
			<button class="btn btn-success" type="submit">
				Guardar Material al Alumno
			</button>
		</div>
		</form>   
</div>

</div>
<?php echo $this->element('sidebar/paralelos'); ?>
<?php echo $this->element('jstablas'); ?>
