<?php if(!empty($alumnos)):?>
<table class="table table-striped table-bordered dTableR" id="dt_a">
            <thead>
                <tr>                                          
                    <th>Nro Registro</th>
                    <th>Nombre</th>

                    <th>Carrera</th>
                    

                    

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
                        
                        

                        <td>
                            <?php 
                                echo $this->Html->image("iconos/alumparalelo.png", array(
                                    "title" => "Inscripcion",
                                    'url' => array('action' => 'inscripcion3', $alumno['User']['id'])
                                ));
                            ?>
                           <?php 
                                echo $this->Html->image("iconos/edit.png", array(
                                    "title" => "Editar",
                                    'url' => array('action' => 'editar', $alumno['User']['id'])
                                ));
                            ?>
                            <?php 
                                echo $this->Html->image("iconos/elim.png", array(
                                    "title" => "Eliminar",
                                    'url' => array('action' => 'eliminar', $alumno['User']['id']),
                                ),array('escape'=>false,'comfirm'=>'Estas Seguro???'));
                            ?>
                            <?php 
                                echo $this->Html->image("iconos/calificaciones.png", array(
                                    "title" => "Notas",
                                    'url' => array('action' => 'notas2', $alumno['User']['id'])
                                ));
                            ?>
                            <?php echo $this->Html->image("iconos/pass.png", array( "title" => "Cambiar password", 'url' => array('controller'=>'Users','action' => 'cambiopass', $alumno['User']['id'],3) )); ?>
                            <?php 
                                echo $this->Html->image("iconos/veralumno.png", array(
                                    "title" => "Activos",
                                    'url' => array('action' => 'listamateriales', $alumno['User']['id'])
                                ));
                            ?>
                            
                        </td>
                    </tr>
                    <?php
                endforeach;
                ?>
            </tbody>
        </table>
        <?php else:?>
        <h3>NO SE ENCONTRO RESULTADOS!!!</h3>
        <?php endif;?>