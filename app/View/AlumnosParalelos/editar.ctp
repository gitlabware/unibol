<div class="span12">
    <h3 class="heading">EDITAR ALUMNOS PARALELOS</h3>    
    <?php echo $this->Form->create('AlumnosParalelo'); ?> 
    <div class="formSep">
        <div class="row-fluid">
            <div class="span4">
                <label>Alumno <span class="f_req">*</span></label>
                <?php echo $this->Form->select('alumno_id',$dalumno);?>
            </div>
            <div class="span4">
                <label>Paralelo <span class="f_req">*</span></label>
                <?php echo $this->Form->select('paralelo_id',$dparalelo);?>
            </div>
            <div class="span4">
                <label>Estado <span class="f_req">*</span></label>
                <?php echo $this->Form->select('estado_id',$destado);?>
            </div>
            
        </div>
        <div class="row-fluid">
            <div class="span4">
                <label>Gestion <span class="f_req">*</span></label>
                <?php echo $this->Form->select('gestione_id',$dgestion);?>
            </div>
            <div class="span4">
                <label>Nivel <span class="f_req">*</span></label>
                <?php echo $this->Form->select('nivele_id',$dnivel);?>
            </div>
            
            
        </div>
        
    </div>

 <div class="sepH_c">
    <p><button class="btn btn-inverse">
          Editar la Carrera
            <?php echo $this->Form->end($options);?>   
    </button></p> 
    </div>
       
</form>
</div>
<!-- sidebar -->
<?php echo $this->element('sidebar/alumnosparalelos'); ?>
<!-- fin sidebar -->
<?php //llamamos scripts tablas ?>
<?php echo $this->element('jsformularios'); ?>