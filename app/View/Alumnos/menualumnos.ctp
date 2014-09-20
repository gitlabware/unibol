<div class="span10">
 <h3 class="heading">DATOS DEL ALUMNO</h3>
 <?php echo $this->Html->link('Actualizar',array('action'=>'actualizar'),array('class'=>'btn btn-primary'));?> 
<table class="table table-striped table-bordered table-condensed">
  <tr>
    <td><b>Nombre</b></td>
    <td><?php echo $alumno['User']['nombre_completo']?></td>
    <td><b>Carrera</b></td>
    <td><?php echo $alumno['Carrera']['nombre']?></td>
  </tr>
  <tr>
    <td><b>Semestre</b></td>
    <td><b> <?php echo $alumno['Semestre']['nombre']?></b></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td><b>C.I.:</b></td>
    <td><?php echo $alumno['User']['ci'].' '.$alumno['User']['ci_expedido']?></td>
    <td><b>Lenguas</b></td>
    <td><?php echo $alumno['User']['primera_lengua'].'/'.$alumno['User']['segunda_lengua']?></td>
  </tr>
  <tr>
    <td><b>Fecha de Nacimiento</b></td>
    <td><?php echo $alumno['User']['fecha_nac']?></td>
    <td><b>Lugar de Nacimiento</b></td>
    <td><?php echo $alumno['User']['lugar_nac']?></td>
  </tr>
  <tr>
    <td><b>Pais</b></td>
    <td><?php echo $alumno['Paise']['nombre']?></td>
    <td><b>Departamento</b></td>
    <td><?php echo $alumno['Departamento']['nombre']?></td>
  </tr>
  <tr>
    <td><b>Territorio Indigena de Origen</b></td>
    <td><?php echo $alumno['User']['territorio_origen']?></td>
    <td><b>Organizacion Indigena a la que pertenece</b> </td>
    <td><?php echo $alumno['Organizacione']['nombre']?></td>
  </tr>
  <tr>
    <td><b>Telefono Fijo</b></td>
    <td><?php echo $alumno['User']['telefono_fijo']?></td>
    <td><b>Celular</b></td>
    <td><?php echo $alumno['User']['telefono_celular']?></td>
  </tr>
  <tr>
    <td><b>Email</b></td>
    <td><?php echo $alumno['User']['email']?></td>
    <td><b>Colegio</b></td>
    <td><?php echo $alumno['User']['colegio']?></td>
  </tr>
 
</table>

 <?php echo $this->Html->link('Cambiar Password',array('action'=>'cambiapass'),array('class'=>'btn btn-primary'));?>
</div>
<!-- sidebar -->
<?php echo $this->element('sidebar/alumnos2'); ?>
<!-- fin sidebar -->
<?php //llamamos scripts tablas ?>
<?php echo $this->element('jsformularios'); ?>