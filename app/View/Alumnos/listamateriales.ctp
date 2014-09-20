<?php if(!empty($materiales)):?>
<h3>Lista de Materiales</h3>
<table align="center" class="table table-striped table-bordered table-condensed">
<thead>
<tr>
	<th>Item</th>
	<th>Detalle</th>
    <!--<td>Cantidad</td>-->
	<th>Fecha Entrega</th>
	<th>Fecha Recepcion</th>
</tr>
</thead>
  
  <?php foreach($materiales as $p):?>
   <tr>
      <td><?php echo $p['Alumnomateriale']['id'];?></td>
      <td><?php echo $p['Materiale']['nombre'];?></td>
      <!--<td><?php //echo $p['Alumnomateriale']['cantidad'];?></td>-->
      <td><?php echo $p['Alumnomateriale']['fecha_entrega'];?></td>
      <td><?php echo $p['Alumnomateriale']['fecha_recepcion'];?></td>
 </tr>
   <?php endforeach;?>
   
</table>
<?php else:?>

<?php endif; ?>
<?php if(empty($materiales)):?>
<?php echo $this->Html->link('Registrar',array('action'=>'materiales',$id),array('class'=>'btn btn-success'));?>&nbsp;
<?php echo $this->Html->link('Volver',array('action'=>'index'), array('class'=>'btn btn-success')); ?>
<?php else:?>
<?php echo $this->Html->link('Entrega',array('action'=>'materialesedit',$id),array('class'=>'btn btn-success'));?>&nbsp;
<?php echo $this->Html->link('Volver',array('action'=>'index'), array('class'=>'btn btn-success')); ?>
<?php endif; ?>
<!-- sidebar -->
<?php echo $this->element('sidebar/alumnos'); ?>
<!-- fin sidebar -->
<?php echo $this->element('jstablas'); ?>