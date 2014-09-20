<div class="row-fluid">
<?php if(!empty($listatutela)): ?>
    <div class="span6">
        <h3 class="heading">Alumnos a la tutela de <?php echo $listatutela[0]['Padre']['ap_paterno'] ?>&nbsp;<?php echo $listatutela[0]['Padre']['ap_materno'] ?>&nbsp;<?php echo $listatutela[0]['Padre']['nombre'] ?></h3> 
        <table class="table table-striped table-bordered dTableR" id="dt_a">
            <thead>
                <tr>   
                   <th>Item</th>                                       
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Nombre</th>
                    <th>Fecha registro</th>    
                    <th>
                    Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; ?>
                <?php foreach ($listatutela as $alumno): ?>
                    <tr>      
                       <td><?php echo $i; $i++; ?></td>                                           
                        <td><?php echo $alumno['Alumno']['ap_paterno']; ?></td>
                        <td><?php echo $alumno['Alumno']['ap_materno']; ?></td>
                        <td><?php echo $alumno['Alumno']['nombre']; ?></td> 
                        <td><?php echo $alumno['AlumnosPadre']['created']; ?></td>
                        <td>
                        
                        <?php 
                        
                                echo $this->Html->image("iconos/listestudiante.png", array(
                                    "title" => "ver estado del alumno",
                                    'url' => array('controller'=>'padres','action'=>'vernotas', $alumno['Alumno']['id'], $gestion)
                                ));
                            ?>
                            <?php echo $this->Ajax->link(
                                        $this->Html->image("iconos/cuentas.png"), 
                                        array(
                                        'controller' => 'padres',
                                        'action' => 'verestadocuentas', $alumno['AlumnosPadre']['alumno_id'], $gestion
                                        ),
                                        array(
                                        'update' => 'cuentas',
                                        'escape' => false)
                                );
                            ?>
                       </td>
                    </tr>
                    <?php
                endforeach;
                ?>
            </tbody>
        </table>                
    </div> 
    <div class="span6" id="cuentas">
    </div>
<?php else: ?>
   
   <h4>No exiten alumnos bajo su  tutela </h4>
   
<?php endif; ?>
</div>
<?php echo $this->element('sidebar/padres'); ?>
<!-- fin sidebar -->
<?php echo $this->element('jstablas'); ?>
