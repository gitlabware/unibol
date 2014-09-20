<div class="span12">
    <h3 class="heading">EDITAR LA CARRERAS MATERIAS</h3>    
    <?php echo $this->Form->create('CarrerasMateria'); ?> 
    <div class="formSep">
        <div class="row-fluid">
            <div class="span4">
                <label>Carrera <span class="f_req">*</span></label>
                <?php echo $this->Form->select('carrera_id',$dcarrera);?>
            </div>
            <div class="span4">
                <label>Materia <span class="f_req">*</span></label>
                <?php echo $this->Form->select('materia_id',$dmateria);?>
            </div>
            
        </div>
        
    </div>

 <div class="sepH_c">
    <p><button class="btn btn-inverse">
          Editar la CarreraMateria
            <?php echo $this->Form->end($options);?>   
    </button></p> 
    </div>
       
</form>
</div>
<!-- sidebar -->
<?php echo $this->element('sidebar/carrerasmaterias'); ?>
<!-- fin sidebar -->
<?php //llamamos scripts tablas ?>
<?php echo $this->element('jsformularios'); ?>