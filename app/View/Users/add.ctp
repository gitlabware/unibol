<div class="row-fluid">
<div class="span10">
<?php echo $this->Form->create('User'); ?>

	<fieldset>
		<legend><?php echo __('Nuevo Usuario'); ?></legend>
         <div class="formSep">
         <div class="row-fluid">
            <div class="span4">
                <label>Nombre <span class="f_req">*</span></label>
                <?php echo $this->Form->text('nombres', array('placeholder'=>'Inserte el nombre', 'required'));?>
            </div>
            <div class="span4">
                <label>Apellido Paterno <span class="f_req">*</span></label>
                <?php echo $this->Form->text('ap_paterno', array('placeholder'=>'Inserte el apellido paterno'));?>
            </div>
            <div class="span4">
                <label>Apellido Materno <span class="f_req">*</span></label>
                <?php echo $this->Form->text('ap_materno', array('placeholder'=>'Inserte el apellido materno'));?>
            </div>
         </div>
        <div class="row-fluid">
            
            <div class="span4">
            <?php
	
		//echo $this->Form->input('password');
		//echo $this->Form->input('group_id');
	?>
            <label>Inserte el usuario <span class="f_req">*</span></label>
                <?php echo $this->Form->text('username', array('placeholder'=>'Inserte el usuario','required','value'=>''));?>
            </div>
            <div class="span4">
                <label>Inserte el password <span class="f_req">*</span></label>
                <?php echo $this->Form->password('password', array('placeholder'=>'Inserte una contrasena', 'required', 'value'=>''));?>
            </div>
        </div>
    </div>
    <div class="formSep">
    <div class="row-fluid">
       
    </div>
    </div>

    <div class="form-actions">
        <button class="btn btn-success" type="submit">Guardar Nuevo usuario</button>        
    </div>
	
	</fieldset>
</div>

</div>
<?php echo $this->element('sidebar/admin') ?>
<?php echo $this->element('jsformularios'); ?>