<div class="span10">
    <h3 class="heading">EDITAR LA NOTA</h3> 
    <p><h4><?php echo $notas['User']['nombre_completo']?></h4></p>   
    <?php echo $this->Form->create('Alumnosnota'); ?> 
    <div class="formSep">
        <div class="row-fluid">
            
            <div class="span4">
                <label>Nota <span class="f_req">*</span></label>
                <?php echo $this->Form->text('nota', array('placeholder'=>'Inserte el Nombre de la Carrera'));?>
                <?php echo $this->Form->hidden('alumno');?>
            </div>
            
        </div>
        
    </div>

 <div class="sepH_c">
    <button class="btn btn-success" type="submit">
				Editar Docente
			</button>
    </div>
       
</form>
</div>
<!-- sidebar -->
<?php echo $this->element('sidebar/carreras'); ?>
<!-- fin sidebar -->
<?php //llamamos scripts tablas ?>
<?php echo $this->element('jsformularios'); ?>