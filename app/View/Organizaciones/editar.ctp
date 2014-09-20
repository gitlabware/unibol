<div class="span10">
    <h3 class="heading">EDITAR LA ORGANIZACION</h3>    
    <?php echo $this->Form->create('Organizacione'); ?> 
    <div class="formSep">
        <div class="row-fluid">
            <div class="span4">
                <label>Nombre <span class="f_req">*</span></label>
                <?php echo $this->Form->text('nombre', array('placeholder'=>'Inserte el Nombre de la Organizacion'));?>
            </div>
            
        </div>
        
    </div>

 <div class="sepH_c">
    <p><button class="btn btn-inverse">
          Editar la Organizacion
            <?php echo $this->Form->end($options);?>   
    </button></p> 
    </div>
       
</form>
</div>
<!-- sidebar -->
<?php echo $this->element('sidebar/organizaciones'); ?>
<!-- fin sidebar -->
<?php //llamamos scripts tablas ?>
<?php echo $this->element('jsformularios'); ?>