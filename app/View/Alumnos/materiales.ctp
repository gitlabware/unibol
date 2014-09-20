<?php echo $this->Form->create('Alumno',array('controller'=>'Alumnos','action'=>'guardamateriales')); ?>
<label class="heading">ENTREGA DE MATERIALES</label>
<table class="table table-striped table-bordered table-condensed">

<thead>
<tr>
	<th>Item</th>
	<th>Detalle</th>
    <th>Entregado</th>
	<th>Unidad</th>
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
<tr>
	<td><?php echo $i++; ?></td>
	<td><?php echo $material['Materiale']['nombre']; ?></td>
	<td><?php echo $this->Form->checkbox("mat_$i", array('value' => $id)); ?></td>
	<td><?php echo $material['Materiale']['unidad'];?></td>
    
	<td>
    
    <?php echo $this->Form->date("fecha_entrega_$i"); ?>
    </td>
    <td><?php echo $this->Form->date("fecha_recepcion_$i"); ?></td>
    
</tr>





<?php endforeach; ?>
</table>

<?php echo $this->Form->end('Guardar'); ?>

<!-- sidebar -->
<?php echo $this->element('sidebar/alumnos'); ?>
<!-- fin sidebar -->
<?php //llamamos scripts tablas ?>
<?php echo $this->element('jsformularios'); ?>
