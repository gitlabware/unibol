<div class="modal hide fade" id="myModa">
<div class="modal-header">
    <button class="close" data-dismiss="modal">x</button>
    <h3>FORMATO REGISTRO DE MATERIAS</h3>
</div>
<?php 
            echo $this->Html->image("unibol/Notas.png", array(
                                    "title" => "Registra Excel Docente Materia"
                                    )
                                );
                            ?>	
</div>
<div class="span10">
    <h3 class="heading">Notas - <?php echo $materia['Materia']['nombre'].' - '.$materia['Malla']['nombre']?></h3>
    <?php if($materia['DocentesMateria']['habilitado'] == 1):?>
    <a data-toggle="modal" data-backdrop="static" href="#myModal2">
    <?php echo $this->form->button('Subir Notas',array('class'=>'btn btn-success'));?>  
    </a>
    <?php 
    echo $this->Html->link('Descargar Plantilla',array('action' => 'generaexcel',$iddocentesmateria),array('class' => 'btn btn-success','id' => 'paso'));
    ?>
    
    <?php else:?>
    <?php 
    
    echo $this->Html->link('Descargar Plantilla',array('action' => 'generaexcel',$iddocentesmateria),array('class' => 'btn btn-success'));
    ?>
    <?php endif;?>
   <a data-toggle="modal" data-backdrop="static" href="#myModa" class="btn btn-info">
            VER FORMATO          
            </a>
    <table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Parciales</th>
                <th>Nota</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($alumnos as $al):?>
            
            
            <tr>
                <td><?php echo $al['User']['num_registro']?></td>
                <td><?php echo $al['User']['nombre_completo']?></td>
                <?php $notasalum = $this->requestAction(array('controller' => 'Docentes', 'action' => 'nota',$al['User']['id'],$materia['DocentesMateria']['id']));  
                $count = count($notasalum);?>
                <td>
                <?php for($i = 0;$i < $count;$i++):?>
                    <?php echo '|'.$notasalum[$i]['Alumnosnota']['nota'].'|';?>
                    <?php if ($i == $count-1){$notafinal = $notasalum[$i]['Alumnosnota']['notafinal'];}?>
                <?php endfor;?>
                </td>
                <?php
            if($notafinal <= 51)
            {
                $backoground = 'color: red;';
            }
            ?>
                <td style="<?php echo $backoground;?>"><?php echo $notafinal?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
<div class="modal hide fade" id="myModal2">
<div class="modal-header">
    <button class="close" data-dismiss="modal">x</button>
    <h3>REGISTRO DE NOTAS</h3>
</div>
	<?php echo $this->Form->create('Alumnosnotas', array('controller'=>'Alumnosnotas','action' => 'guardaexcel', 'enctype' => 'multipart/form-data')); ?>
		<div class="formSep">
			<div class="modal-body">
				<div class="span4">
					
						Selexionar Excel:   
						
					
					<span class="input file">
                            <span class="file-text"></span>
                            
                            <input type="file" name="data[Excel][excel]" id="special-input-1" value="" class="file withClearFunctions" multiple="" required/>
                            <input type="hidden" name="data[Alumnosnota][carrera_id]" value="<?php echo $materia['DocentesMateria']['carrera_id']?>"/>
                            <input type="hidden" name="data[Alumnosnota][malla_id]" value="<?php echo $materia['DocentesMateria']['malla_id']?>"/>
                            <input type="hidden" name="data[Alumnosnota][docentes_materia_id]" value="<?php echo $iddocentesmateria?>"/>
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
<!-- sidebar -->
<?php echo $this->element('sidebar/docentes2'); ?>
<!-- fin sidebar -->
<?php //llamamos scripts tablas ?>
<?php echo $this->element('jsformularios'); ?>