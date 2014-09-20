<div class="row-fluid">
    <div class="span8">
        <h3 class="heading">Docentes Materia <?php echo $docmaterias; ?></h3> 
        <table class="table table-striped table-bordered dTableR" id="dt_a">
            <thead>
                <tr>                                          
                    <th>Nro</th>
                    <th>Gestion</th>
                    <th>Materia</th> 
                    <th>Docente</th>                   
                    <th>Acciones</th>
                        
                </tr>
            </thead>
             <?php $i=1;?>
            <tbody>
                <?php foreach ($docmaterias as $dmat): ?>
                    <?php $idPer = $dmat['DocentesMateria']['id']; ?>
                    <tr>
                        <td><?php echo $i; $i++;?></td>                                                  
                        <td><?php echo $dmat['Gestione']['nombre']; ?></td>
                        <td><?php echo $dmat['Materia']['nombre']; ?></td>
                        <td><?php echo $dmat['Docente']['nombre'].' '.$dmat['Docente']['ap_paterno']; ?></td>
                        
                        <td>
                           <?php 
                                echo $this->Html->image("iconos/edit.png", array(
                                    "title" => "Editar",
                                    'url' => array('action' => 'editar', $dmat['DocentesMateria']['id'])
                                ));
                            ?>                             
                            
                        
                        <?php 
                                echo $this->Html->image("iconos/elim.png", array(
                                    "title" => "Eliminar",
                                    'url' => array('action' => 'eliminar', $dmat['DocentesMateria']['id'])
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
		INSERTAR NUEVO DOCENTES MATERIAS
	</h3>
	<?php echo $this->
		Form->create('DocentesMateria'); ?>
		<div class="formSep">
			<div class="row-fluid">
				<div class="span4">
					<label>
						Inserte la gestion
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->
						Form->select('gestione_id',$dgestion);?>
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
            <div class="row-fluid">
            <div class="span4">
					<label>
						Inserte la Docente
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->
						Form->select('docente_id',$ddocente);?>
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
    
</div>    
    
    
    

<!-- sidebar -->
<?php echo $this->element('sidebar/docentesmaterias'); ?>
<!-- fin sidebar -->
<?php echo $this->element('jstablas'); ?>