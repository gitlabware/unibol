<div class="row-fluid">
    <div class="span8">
        <h3 class="heading">Carreras Materia <?php echo $carmaterias; ?></h3> 
        <table class="table table-striped table-bordered dTableR" id="dt_a">
            <thead>
                <tr>                                          
                    <th>Nro</th>
                    <th>Carrera</th>
                    <th>Materia</th>                    
                    <th>Acciones</th>
                        
                </tr>
            </thead>
             <?php $i=1;?>
            <tbody>
                <?php foreach ($carmaterias as $carmat): ?>
                    <?php $idPer = $carmat['CarrerasMateria']['id']; ?>
                    <tr>
                        <td><?php echo $i; $i++;?></td>                                                  
                        <td><?php echo $carmat['Carrera']['nombre']; ?></td>
                        <td><?php echo $carmat['Materia']['nombre']; ?></td>
                        
                        <td>
                           <?php 
                                echo $this->Html->image("iconos/edit.png", array(
                                    "title" => "Editar",
                                    'url' => array('action' => 'editar', $carmat['CarrerasMateria']['id'])
                                ));
                            ?>                             
                            
                        
                        <?php 
                                echo $this->Html->image("iconos/elim.png", array(
                                    "title" => "Eliminar",
                                    'url' => array('action' => 'eliminar', $carmat['CarrerasMateria']['id'])
                                ));
                            ?>
                        </td>
                    </tr>
                    <?php
                endforeach;
                ?>
            </tbody>
        </table> 
        <?php //echo $this->Html->link('INSERTAR',array('action'=>'insertar'));?>               
    </div> 
    <div class="span4">
	<h3 class="heading">
		INSERTAR NUEVA CARRERA MATERIA
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
                
				
			</div>
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
            </div>
		</div>
		<div class="form-actions">
			<button class="btn btn-success" type="submit">
				Guardar Nueva CarreraMateria
			</button>
		</div>
		</form>
</div>  
</div>
<!-- sidebar -->
<?php echo $this->element('sidebar/carrerasmaterias'); ?>
<!-- fin sidebar -->
<?php echo $this->element('jstablas'); ?>