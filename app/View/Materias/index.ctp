<div class="row-fluid">
    <div class="span9">
        <h3 class="heading">Materias</h3> 
        <table class="table table-striped table-bordered dTableR" id="dt_a">
            <thead>
                <tr>                                          
                    <th>Nro</th>
                    <th>Nombre</th>
                    <td>Sigla</td>
                    <td>Carrrera</td>
                    <td>Semestre</td>
                    <th>Acciones</th>
                        
                </tr>
            </thead>
             <?php $i=1;?>
            <tbody>
                <?php foreach ($materias as $mat): ?>
                    <?php $idPer = $mat['Materia']['id']; ?>
                    <tr>
                        <td><?php echo $i; $i++;?></td>                                                  
                        <td><?php echo $mat['Materia']['nombre']; ?></td>
                        <td><?php echo $mat['Materia']['sigla']; ?></td>
                        <td><?php echo $mat['Carrera']['nombre']; ?></td>
                        <td><?php echo $mat['Semestre']['nombre'];?></td>
                        <td>
                           <?php 
                                echo $this->Html->image("iconos/edit.png", array(
                                    "title" => "Editar",
                                    'url' => array('action' => 'editar', $mat['Materia']['id'])
                                ));
                            ?>                             
                            
                        
                        <?php 
                                echo $this->Html->image("iconos/elim.png", array(
                                    "title" => "Eliminar",
                                    'url' => array('action' => 'eliminar', $mat['Materia']['id'])
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
    
    
        <div class="span3">
    Registra Excel: 
    <a data-toggle="modal" data-backdrop="static" href="#myModal2">
    <?php 
    echo $this->Html->image("iconos/images.png", array(
    "title" => "Registrar Notas",
    
    ));
    ?>    
    </a>
    <a data-toggle="modal" data-backdrop="static" href="#myModa" class="btn btn-info">
            VER FORMATO          
            </a>
    </div>
    
    <div class="modal hide fade" id="myModal2">
<div class="modal-header">
    <button class="close" data-dismiss="modal">x</button>
    <h3>REGISTRO DE MATERIAS</h3>
</div>
	<?php echo $this->Form->create('Materias', array('action' => 'guardaexcel', 'enctype' => 'multipart/form-data')); ?>
		<div class="formSep">
			<div class="modal-body">
				<div class="span4">
					
						Selexionar Excel:   
						
					
					<span class="input file">
                            <span class="file-text"></span>
                            
                            <input type="file" name="data[Excel][excel]" id="special-input-1" value="" class="file withClearFunctions" multiple="" />
                            
                    </span>
				</div>
				
			</div>
			
		</div>
		<div class="form-actions">
			<button class="btn btn-success" type="submit">
				Guardar Excel
			</button>
		</div>
        </form>
		
</div>
<div class="modal hide fade" id="myModa">
<div class="modal-header">
    <button class="close" data-dismiss="modal">x</button>
    <h3>FORMATO REGISTRO DE MATERIAS</h3>
</div>
<?php 
            echo $this->Html->image("unibol/Materias.png", array(
                                    "title" => "Registra Excel Docente Materia"
                                    )
                                );
                            ?>	
</div>  
</div>
<!-- sidebar -->
<?php echo $this->element('sidebar/materias'); ?>
<!-- fin sidebar -->
<?php echo $this->element('jstablas'); ?>