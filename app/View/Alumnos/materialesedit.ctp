<?php echo $this->Form->create('Alumno',array('controller'=>'Alumnos','action'=>'editamateriales')); ?>
<label class="heading">ENTREGA DE MATERIALES</label>
<table class="table table-striped table-bordered table-condensed">

<thead>
<tr>
	<th>Item</th>
	<th>Detalle</th>
    
	
	<th>Fecha Entrega</th>
	<th>Fecha Recepcion</th>
</tr>
</thead>


<?php //debug($materiales); 
    $i=1; 
?>
<?php echo $this->Form->hidden('user_id',array('value'=>$alumno_id)); ?></td>

<?php foreach($materiales as $material): ?>
<?php $id = $material['Materiale']['id']; ?>
<?php $valor = $material['Materiale']["mat_$i"]; ?>
<tr>
	<td><?php echo $i++; ?></td>
	<td><?php echo $material['Materiale']['nombre']; ?></td>
	
	
    
	<td>
    <?php echo $material['Alumnomateriale']['fecha_entrega']; ?>
    <?php //echo $this->Form->date("fecha_entrega_$i"); ?>
    </td>
    <td><?php echo $this->Form->date("fecha_recepcion_$i"); ?></td>
    <?php echo $this->Form->hidden("id_alumnomat_$i", array('value' => $material['Alumnomateriale']['id'])); ?>
    
</tr>





<?php endforeach; ?>
</table>

<?php echo $this->Form->end('Guardar'); ?>

<!-- sidebar -->
<?php echo $this->element('sidebar/alumnos'); ?>
<!-- fin sidebar -->
<?php //llamamos scripts tablas ?>
<?php echo $this->element('jsformularios'); ?>
