<div class="row-fluid">
<div class="span10">
<?php echo $this->Form->create('User'); ?>

	<fieldset>
		<legend><?php echo __('Cambio password Usuario'); ?></legend>
         <div class="formSep">
        <div class="row-fluid">
            <div class="span4">
                <label>Inserte el nuevo password<span class="f_req">*</span></label>
                <?php echo $this->Form->password('password', array('placeholder'=>'Inserte una contrasena', 'value'=>''));?>
            </div>
            
        </div>
    </div>
    <div class="form-actions">
        <button class="btn btn-success" type="submit">Guardar</button>        
    </div>
	
	</fieldset>
</div>

</div>
<?php echo $this->element('sidebar/admin') ?>
<?php echo $this->element('jsformularios'); ?>