<div class="span10">
 <h3 class="heading">DATOS DEL DOCENTE</h3>
<table class="table table-striped table-bordered table-condensed">
  <tr>
    <td><b>Nombre</b></td>
    <td><?php echo $docente['User']['nombre_completo']?></td>
    <td><b>C.I.</b></td>
    <td><?php echo $docente['User']['ci']?></td>
  </tr>
  <tr>
    <td><b>Fecha de Nacimineto</b></td>
    <td><?php echo $docente['User']['fecha_nac']?></td>
    <td><b>Especialidad</b></td>
    <td><?php echo $docente['User']['especialidad']?></td>
  </tr>
  <tr>
    <td><b>Fecha de Incorporacion</b></td>
    <td><?php echo $docente['User']['fecha_incorporacion']?></td>
    <td><b>Horas Asignadas</b></td>
    <td><?php echo $docente['User']['horas_asignadas']?></td>
  </tr>
  
 
</table>

 <?php echo $this->Html->link('Cambiar Password',array('action'=>'cambiapass'),array('class'=>'btn btn-primary'));?>
</div>
<!-- sidebar -->
<?php echo $this->element('sidebar/docentes2'); ?>
<!-- fin sidebar -->
<?php //llamamos scripts tablas ?>
<?php echo $this->element('jsformularios'); ?>