<?php 
   /* App::import('Model', 'Alumnosnota');
    $modeloAlumnosNota = new Alumnosnota();*/
?>
<div class="row-fluid">
    <div class="span8">
        <h3 class="heading">Alumnos notas </h3> 
        <table class="table table-striped table-bordered dTableR" id="dt_a">
            <thead>
                <tr>                                          
                    <th>Nro</th>
                    <th>Alumno</th>
                    <th>Semestre</th> 
                    <th>Materia</th>

                    <th>Nota Final</th>                   
                    <th>Acciones</th>
                        
                </tr>
            </thead>
             <?php $i=1;?>
            <tbody>
                <?php foreach ($notas as $dmat): ?>
                    <?php $idPer = $dmat['Alumnosnota']['id']; ?>
                    <tr>
                        <td><?php echo $i; $i++;?></td>                                                  
                        <td><?php echo $dmat['Alumnosnota']['alumno']; ?></td>
                        <td><?php echo $dmat['Alumnosnota']['semestre']; ?></td>
                        <td><?php echo $dmat['Alumnosnota']['materia']; ?></td>

                        <td>
                            <?php 
                                echo $dmat['Alumnosnota']['notafinal'];
                                /*$notaAlumno = $modeloAlumnosNota->find('first',array(
                                    'recursive'=>-1,
                                    'conditions'=>array('Alumnosnota.alumno_id'=>$idPer),
                                    'order'=>'Alumnosnota.id DESC'
                                )); 
                                debug($idPer);
                                debug($notaAlumno);*/
                            ?>
                        </td>
                        
                        <td>
                           <?php 
                                echo $this->Html->image("iconos/edit.png", array(
                                    "title" => "Editar",
                                    'url' => array('action' => 'editar', $dmat['Alumnosnota']['id'],$idcarrera,$idmalla)
                                ));
                            ?>                             
                            
                        
                        <?php 
                                echo $this->Html->image("iconos/elim.png", array(
                                    "title" => "Eliminar",
                                    'url' => array('action' => 'eliminar', $dmat['Alumnosnota']['id'],$idcarrera,$idmalla)
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
    Registra Excel: 
    <a data-toggle="modal" data-backdrop="static" href="#myModal2">
    <?php 
    echo $this->Html->image("iconos/images.png", array(
    "title" => "Registrar Notas",
    
    ));
    ?>    
    </a>

    </div>
    
    <div class="modal hide fade" id="myModal2">
<div class="modal-header">
    <button class="close" data-dismiss="modal">x</button>
    <h3>REGISTRO DE NOTAS</h3>
</div>
	<?php echo $this->Form->create('Alumnosnotas', array('action' => 'guardaexcel', 'enctype' => 'multipart/form-data')); ?>
		<div class="formSep">
			<div class="modal-body">
				<div class="span4">
					
						Selexionar Excel:   
						
					
					<span class="input file">
                            <span class="file-text"></span>
                            
                            <input type="file" name="data[Excel][excel]" id="special-input-1" value="" class="file withClearFunctions" multiple="" />
                            <input type="hidden" name="data[Alumnosnota][carrera_id]" value="<?php echo $idcarrera?>"/>
                            <input type="hidden" name="data[Alumnosnota][malla_id]" value="<?php echo $idmalla?>"/>
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

    
</div>    
    
    
    

<!-- sidebar -->
<?php echo $this->element('sidebar/docentesmaterias'); ?>
<!-- fin sidebar -->
<?php echo $this->element('jstablas'); ?>