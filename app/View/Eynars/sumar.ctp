<h1>Hola Eynars</h1>
<?php echo $this->Form->create('Eynars'); ?>
<?php echo $this->Form->text('numero_a', array('placeholder'=>'Ingrese un numero')); ?>
<?php echo $this->Form->text('numero_b', array('placeholder'=>'Ingrese un numero')); ?>
<?php echo $this->Form->end('sumar'); ?>


El valor de la suma es <?php echo $sumaTotal; ?>
<?php debug($alumnos); ?>