<div class="span12">
    <h3 class="heading">INSERTAR NUEVO USUARIO</h3>    
    <?php echo $this->Form->create('Usuario'); ?> 
    <div class="formSep">
        <div class="row-fluid">
            <div class="span4">
                <label>Inserte Nombre de Usuario <span class="f_req">*</span></label>
                <?php echo $this->Form->text('usuario', array('placeholder'=>'Inserte el Nombre'));?>
            </div>
            <div class="span4">
                <label>Inserte el Password <span class="f_req">*</span></label>
                <?php echo $this->Form->text('clave', array('placeholder'=>'Inserte su password'));?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span4">
                <label>Inserte el Email<span class="f_req">*</span></label>
                <?php echo $this->Form->text('email', array('placeholder'=>'Inserte su Em@il Ej:email@hotmail.com'));?>
            </div>
        </div>
    </div>

    <div class="form-actions">
        <button class="btn btn-success" type="submit">Guardar Nuevo Ciclo</button>        
    </div>   
</form>
</div>
<!-- sidebar -->
<?php echo $this->element('sidebar/usuarios'); ?>
<!-- fin sidebar -->
<?php //llamamos scripts tablas ?>
<?php echo $this->element('jsformularios'); ?>