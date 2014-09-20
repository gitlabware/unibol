<div class="span12">
    <h3 class="heading">EDITAR LA GESTION</h3>    
    <?php echo $this->Form->create('Gestione'); ?> 
    <div class="formSep">
        <div class="row-fluid">
            <div class="span4">
                <label>Nombre <span class="f_req">*</span></label>
                <?php echo $this->Form->text('nombre', array('placeholder'=>'Inserte el Nombre'));?>
            </div>
            <div class="span4">
                <label>Promedio de Aprobacion <span class="f_req">*</span></label>
                <?php echo $this->Form->text('promedio_aprobacion', array('placeholder'=>'Inserte el promedio de aprobacion'));?>
            </div>
            <div class="span4">
                <label>Promedio<span class="f_req">*</span></label>
                <?php echo $this->Form->text('promedio', array('placeholder'=>'Inserte el promedio'));?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span4">
                <label>Estado <span class="f_req">*</span></label>
                <?php echo $this->Form->text('estado', array('placeholder'=>'Inserte el estado'));?>
            </div>
            
        </div>
        
    </div>

 <div class="sepH_c">
    <p><button class="btn btn-inverse">
          Editar la Gestion
            <?php echo $this->Form->end($options);?>   
    </button></p> 
    </div>
       
</form>
</div>
<!-- sidebar -->
<?php echo $this->element('sidebar/gestiones'); ?>
<!-- fin sidebar -->
<?php //llamamos scripts tablas ?>
<?php echo $this->element('jsformularios'); ?>