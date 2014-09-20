<div class="span12">
    <h3 class="heading">EDITAR EL PARALELO</h3>    
    <?php echo $this->Form->create('Paralelo'); ?> 
    <div class="formSep">
        <div class="row-fluid">
            <div class="span4">
                <label>Nivel <span class="f_req">*</span></label>
                <?php echo $this->Form->select('nivel_id', $dniveles);?>
            </div>
            <div class="span4">
                <label>Curso <span class="f_req">*</span></label>
                <?php echo $this->Form->text('curso', array('placeholder'=>'Inserte el curso'));?>
            </div>
            <div class="span4">
                <label>Gestion <span class="f_req">*</span></label>
                <?php echo $this->Form->select('gestione_id', $dgestiones);?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span4">
                <label>Nombre <span class="f_req">*</span></label>
                <?php echo $this->Form->text('nombre', array('placeholder'=>'Inserte el nombre'));?>
            </div>
            <div class="span4">
                <label>Descripcion <span class="f_req">*</span></label>
                <?php echo $this->Form->text('descripcion', array('placeholder'=>'Inserte la descripcion'));?>
            </div>
            
        </div>
        
    </div>

 <div class="sepH_c">
    <p><button class="btn btn-inverse">
          Editar el Paralelo
            <?php echo $this->Form->end($options);?>   
    </button></p> 
    </div>
       
</form>
</div>
<!-- sidebar -->
<?php echo $this->element('sidebar/paralelos'); ?>
<!-- fin sidebar -->
<?php //llamamos scripts tablas ?>
<?php echo $this->element('jsformularios'); ?>