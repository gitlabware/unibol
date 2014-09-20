<div class="row-fluid">
    <div class="span6">
        <h3 class="heading">Paralelos - Semestre <?php echo $paralelossemestres; ?></h3> 
        <table class="table table-striped table-bordered dTableR" id="dt_a">
            <thead>
                <tr>                                          
                    <th>Nro</th>
                    <th>Semestre</th>
                    <th>Paralelo</th> 
                    <th>Acciones</th>
                        
                </tr>
            </thead>
             <?php $i=1;?>
            <tbody>
                <?php foreach ($paralelos as $psem): ?>
                    <?php $idPer = $psem['ParalelosSemestre']['id']; ?>
                    <tr>
                        <td><?php echo $i; $i++;?></td>                                                  
                        <td><?php echo $psem['Semestre']['nombre']; ?></td>
                        <td><?php echo $psem['Paralelo']['curso']; ?></td>
                        
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
		INSERTAR PARALELO - SEMESTRE
	</h3>
	<?php echo $this->Form->create('ParalelosSemestre'); ?>
		<div class="formSep">
			<div class="row-fluid">
				<div class="span4">
					<label>
						Inserte el Semestre
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->
						Form->select('semestre_id',$dsemestre, array('placeholder'=>'Inserte un nombre'));?>
				</div>
                </div>
                <div class="row-fluid">
				<div class="span4">
					<label>
						Inserte el Paralelo
						<span class="f_req">
                        *
						</span>
					</label>
					<?php echo $this->
						Form->select('paralelo_id',$dparalelo, array('placeholder'=>'Inserte el apellido paterno'));?>
				</div>
        </div>
		</div>
		<div class="form-actions">
			<button class="btn btn-success" type="submit">
				Guardar Nuevo Paralelo Semestre
			</button>
		</div>
		</form>   
</div>

</div>
<?php echo $this->element('sidebar/paralelos'); ?>
<?php echo $this->element('jstablas'); ?>
