<div class="span12">
    <h3 class="heading">EDITAR LA MATERIA SEMESTRE</h3>    
    <?php echo $this->Form->create('MateriasSemestre'); ?> 
    <div class="formSep">
        <div class="row-fluid">
            <div class="span4">
                <label>Materia <span class="f_req">*</span></label>
                <?php echo $this->Form->select('materia_id',$dmateria);?>
            </div>
            <div class="span4">
                <label>Semestre <span class="f_req">*</span></label>
                <?php echo $this->Form->select('semestre_id',$dsemestre);?>
            </div>
            <div class="span4">
                <label>Gestion <span class="f_req">*</span></label>
                <?php echo $this->Form->select('gestione_id',$dgestion);?>
            </div>
            
        </div>
        
    </div>

 <div class="sepH_c">
    <p><button class="btn btn-inverse">
          Editar la MateriaSemestre
            <?php echo $this->Form->end($options);?>   
    </button></p> 
    </div>
       
</form>
</div>
<!-- sidebar -->
<?php echo $this->element('sidebar/materiassemestre'); ?>
<!-- fin sidebar -->
<?php //llamamos scripts tablas ?>
<?php echo $this->element('jsformularios'); ?>