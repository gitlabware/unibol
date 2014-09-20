<div class="row-fluid">

    <div class="span8">
        <h4><?php echo $alumno['User']['ap_paterno'].' '.$alumno['User']['ap_materno'].' '.$alumno['User']['nombres'];?></h4>
        <h3 class="heading">Alumnos Materias </h3> 
        
        <table class="table table-striped table-bordered dTableR" id="dt_a">
            <thead>
                <tr>                                          
                    <th>Nro</th>
                    <th>Paralelos Inscritos</th>
                    <th>Acciones</th>                    
                </tr>
            </thead>
             <?php $i=1;?>
            <tbody>
                <?php foreach ($paralelos as $pa): ?>
                    
                    <tr>
                        <td><?php echo $i; $i++;?></td>                                                  
                        <td><?php echo $pa['DocentesMateria']['nombre']; ?></td>
                        <td>
                            <?php 
                                echo $this->Html->image("iconos/elim.png", array(
                                    "title" => "Quitar",
                                    'url' => array('action' => 'eliminaparalelo', $pa['Alumnosmateria']['id'],$idalumno,$idcarrera,$idmalla)
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
		INSERTAR NUEVO PARALELO
	</h3>
	<?php echo $this->
		Form->create('Alumnosmateria'); ?>
		<div class="formSep">
			<div class="row-fluid">
				<div class="span4">
					<label>
						Elija el Paralelo: 
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->Form->select('docentes_materia_id',$pselect,array('required'));?>
				</div>
                
                
                
				
			</div>
            
            
			
		</div>
		<div class="form-actions">
			<button class="btn btn-success" type="submit">
				Insertar Nuevo Paralelo
			</button>
		</div>
		</form>
        
</div>



    
</div>    
    
    
    

<!-- sidebar -->
<?php echo $this->element('sidebar/adminp'); ?>
<!-- fin sidebar -->
<?php echo $this->element('jstablas'); ?>