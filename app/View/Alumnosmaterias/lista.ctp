<div class="row-fluid">
    <div class="span12">
        <h3 class="heading">Alumnos</h3> 
        <table class="table table-striped table-bordered dTableR" id="dt_a">
            <thead>
                <tr>                                          
                    <th>Nro Registro</th>
                    <th>Nombre</th>

                    <th>Carrera</th>
                    <th>Organizaci&oacuten</th>

                    

                    <th>Acciones</th>
                        
                </tr>
            </thead>
             <?php $i=1;?>
            <tbody>
                <?php foreach($alumnos as $alumno):?>
                    
                    <tr>

                        <td><?php echo $alumno['User']['num_registro'];?></td>                                                  
                        <td><?php echo $alumno['User']['ap_paterno'];?> 
                            <?php echo $alumno['User']['ap_materno'];?> 
                            <?php echo $alumno['User']['nombres'];?></td>
                        <td><?php echo $alumno['Carrera']['nombre'];?></td>
                        <td><?php echo $alumno['Organizacione']['nombre'];?></td>
                        

                        <td>
                                     
                            <?php 
                                echo $this->Html->image("iconos/inscribe.png", array(
                                    "title" => "Editar",
                                    'url' => array('action' => 'inscribe', $alumno['User']['id'],$idcarrera,$idmalla)
                                ));
                            ?>
                            
                            
                        </td>
                    </tr>
                    <?php
                endforeach;
                ?>
            </tbody>
        </table> 
        <?php //echo $this->Html->link('INSERTAR',array('action'=>'insertar'));?>               
    </div>   
</div>

<!-- sidebar -->
<?php echo $this->element('sidebar/alumnos'); ?>
<!-- fin sidebar -->
<?php echo $this->element('jstablas'); ?>