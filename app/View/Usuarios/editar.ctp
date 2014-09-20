<script type="text/javascript">
        jQuery(document).ready(function(){
            // binds form submission and fields to the validation engine
            jQuery("#UsuarioEditarForm").validationEngine();
            }); 
</script>
<h1>Editar Usuario</h1>
<?php echo $this->Form->create('Usuario'); ?>
<p>Alias :<?php echo $this->Form->text('nom_usuario',array('readonly' => 'readonly')); ?> </p>
<p>Correo :<?php echo $this->Form->text('mail',array('id'=>"mail",'class'=>'validate[required,custom[email]] input-text')); ?></p>
<p>Nuevo Password :<?php echo $this->Form->password('passold'); ?>
<?php echo $this->Form->hidden('pass',array('value'=>$this->data['Usuario']['pass'])); ?>
</p>
<p>Tipo Usuario :<?php echo $this->Form->select('tipousuario_id',$tipousuarios,array('id'=>"tipousuario_id",'class'=>'validate[required]')); ?></p>
<?php $options=array('value'=>'Insertar');?>
<?php echo $this->Form->end($options);?>