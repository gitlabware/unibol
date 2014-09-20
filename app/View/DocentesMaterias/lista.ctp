<div class="row-fluid">

    <div class="span8">
        <h4><?php echo $carrera['Carrera']['nombre'];?></h3>
        <h3 class="heading">Docentes Materia </h3> 
        
        <table class="table table-striped table-bordered dTableR" id="dt_a">
            <thead>
                <tr>                                          
                    <th>Nro</th>
                    <th>Docente</th>
                    <th>Materia</th> 
                    <th>Paralelo</th>                   
                    <th>Acciones</th>
                        
                </tr>
            </thead>
             <?php $i=1;?>
            <tbody>
                <?php foreach ($docmaterias as $dmat): ?>
                    <?php $idPer = $dmat['DocentesMateria']['id']; ?>
                    <tr>
                        <td><?php echo $i; $i++;?></td>                                                  
                        <td><?php echo $dmat['User']['nombre_completo']; ?></td>
                        <td><?php echo $dmat['Materia']['sigla']; ?></td>
                        <td><?php echo $dmat['DocentesMateria']['paralelo']; ?></td>
                        
                        <td>
                           <?php 
                                echo $this->Html->image("iconos/edit.png", array(
                                    "title" => "Editar",
                                    'url' => array('action' => 'editar', $dmat['DocentesMateria']['id'],$idcarrera,$idmalla)
                                ));
                            ?>                             
                            
                        
                        <?php 
                                echo $this->Html->image("iconos/elim.png", array(
                                    "title" => "Eliminar",
                                    'url' => array('action' => 'eliminar', $dmat['DocentesMateria']['id'],$idcarrera,$idmalla)
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
					<?php echo $this->Form->select('user_id',$ddocente,array('id'=>''));?>
				</div>
                
                
                
				
			</div>
            <div class="row-fluid">
                <div class="span4">
					<label>
						Elija la Materia:
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->Form->select('materia_id',$dmateria);?>
				</div>
            </div>
            <div class="row-fluid">
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
        <div class="row-fluid">
            <div class="span6">
            <label>
            Registrar mediante Excel: 
            <a data-toggle="modal" data-backdrop="static" href="#myModal2">
            <?php 
            echo $this->Html->image("iconos/images.png", array(
                                    "title" => "Registra Excel Docente Materia"
                                    )
                                );
                            ?>            
            </a>
            <a data-toggle="modal" data-backdrop="static" href="#myModa" class="btn btn-info">
            VER FORMATO          
            </a>
            
            
            
            </label>
            
            </div>
        </div>
</div>


<div class="modal hide fade" id="myModal2">
<div class="modal-header">
    <button class="close" data-dismiss="modal">x</button>
    <h3>DOCENTES MATERIAS</h3>
</div>
	<?php echo $this->Form->create('DocentesMaterias', array('action' => 'guardaexcel', 'enctype' => 'multipart/form-data')); ?>
		<div class="formSep">
			<div class="modal-body">
				<div class="span4">
					
						   
						
					
					<span class="input file">
                            
  			                  
                            <input type="file" name="data[Excel][excel]" id="special-input-1" value="" class="" multiple="" />
                            <input type="hidden" name="data[DocentesMateria][carrera_id]" value="<?php echo $idcarrera?>"/>
                            <input type="hidden" name="data[DocentesMateria][malla_id]" value="<?php echo $idmalla?>"/>
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
            echo $this->Html->image("unibol/Docentes Materias.png", array(
                                    "title" => "Registra Excel Docente Materia"
                                    )
                                );
                            ?>	
</div>
</div>    
<script>
    $(document).ready(function() {


        $("#select1").change(function() {
            
            $('#nombrecompleto').load('<?php echo $this->Html->url(array('action' => 'ajaxnombrecompleto')) ?>/' + this.value );
        });
    });
</script>    
    
    

<!-- sidebar -->
<?php echo $this->element('sidebar/adminp'); ?>
<!-- fin sidebar -->
<?php echo $this->element('jstablas'); ?>