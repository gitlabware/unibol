<div class="span12">
    <h3 class="heading">EDITAR EL NIVEL</h3>    
    <?php echo $this->Form->create('Nivele'); ?> 
    <div class="formSep">
        <div class="row-fluid">
            <div class="span4">
                <label>Nombre <span class="f_req">*</span></label>
                <?php echo $this->Form->text('nombre', array('placeholder'=>'Inserte el Nombre del Nivel'));?>
            </div>
            <div class="span4">
                <label>Descripcion <span class="f_req">*</span></label>
                <?php echo $this->Form->text('descripcion', array('placeholder'=>'Inserte la descripcion'));?>
            </div>
            <div class="span4">
                <label>gestion <span class="f_req">*</span></label>
                <?php echo $this->Form->select('gestione_id',$dgestion);?>
            </div>
            
        </div>
        
    </div>

 <div class="sepH_c">
    <p><button class="btn btn-inverse">
          Editar el Nivel
            <?php echo $this->Form->end($options);?>   
    </button></p> 
    </div>
       
</form>
</div>
<!-- sidebar -->
<?php echo $this->element('sidebar/niveles'); ?>
<!-- fin sidebar -->
<?php //llamamos scripts tablas ?>
<?php echo $this->element('jsformularios'); ?>