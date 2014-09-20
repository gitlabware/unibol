<div class="row-fluid">
<div class="span10">
<?php echo $this->Form->create('User'); ?>

	<fieldset>
		<legend><?php echo __('Cambio password Usuario'); ?></legend>
         <div class="formSep">
        <div class="row-fluid">
            <div class="span4">
                <label>Inserte el nuevo password<span class="f_req">*</span></label>
                <?php echo $this->Form->password('password', array('placeholder'=>'Inserte una contraseña', 'value'=>''));?>
            </div>
            
        </div>
    </div>
    <div class="form-actions">
        <button class="btn btn-success" type="submit">Guardar</button>        
    </div>
	
	</fieldset>
</div>

</div>
<!-- sidebar -->
<?php echo $this->element('sidebar/docentes2'); ?>
<!-- fin sidebar -->
<?php //llamamos scripts tablas ?>
<?php echo $this->element('jsformularios'); ?>