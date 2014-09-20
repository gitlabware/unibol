<div class="row-fluid">
    <div class="span12">
        <h3 class="heading">Docentes </h3> 
        <table class="table table-striped table-bordered dTableR" id="dt_a">
            <thead>
                <tr>                                          
                    <th>Nro</th>
                      
                    <th>Nombre</th>
                    <th>Especialidad</th>
                    <th>Fecha de Incorporacion</th>
                    <th>Horas asignadas</th>
                    
                    
                    <th style="width: 200px;">Accion</th>
                       
                </tr>
            </thead>
             <?php $i=1;?>
            <tbody>
                <?php foreach ($docentes as $docen): ?>
                    <?php //$idDoc = $docen['User']['id']; ?>
                    <tr>
                        <td><?php echo $docen['User']['id'];?></td>                                                  
                        
                        <td><?php echo $docen['User']['nombre_completo']; ?></td>
                        <td><?php echo $docen['User']['especialidad']; ?></td>
                        <td><?php echo $docen['User']['fecha_incorporacion']; ?></td>
                        <td><?php echo $docen['User']['horas_asignadas']; ?></td>
                        
                        
                        
                        <td>
                           <?php 
                                echo $this->Html->image("iconos/edit.png", array(
                                    "title" => "Editar",
                                    'url' => array('action' => 'editar', $docen['User']['id'])
                                ));
                            ?>                             
                            
                        
                        <?php 
                                echo $this->Html->image("iconos/elim.png", array(
                                    "title" => "Eliminar",
                                    'url' => array('action' => 'eliminar', $docen['User']['id'])
                                ));
                            ?>
                        <?php echo $this->Html->image("iconos/pass.png", array( "title" => "Cambiar password", 'url' => array('controller'=>'Users','action' => 'cambiopass', $docen['User']['id'],2) )); ?>    
                        <?php 
                        $sw = $this->requestAction(array('controller' => 'Docentes', 'action' => 'confirma',$docen['User']['id']));  
                        
                        $idd = $docen['User']['id'];
                        $suceso = '#success'.$docen['User']['id'];
                        $accion = "ajaxcambia/$idd";
                        echo $this->Js->link('Cambiar',array('controller'=>'Docentes', 'action'=>$accion), array('update'=>$suceso,'class'=>'btn btn-info'));
                        ?>
                        <div id="success<?php echo $docen['User']['id']?>">
                        <?php if ($sw == 0):?>
                            <p style="color:#F00">Deshabilitado</p>
                        <?php endif;?>
                        <?php if ($sw == 1):?>
                            <p style="color:#090">Habilitado</p>
                        <?php endif;?>
                        </div>
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
<?php echo $this->Js->writeBuffer();?>

<!-- sidebar -->
<?php echo $this->element('sidebar/docentes'); ?>
<!-- fin sidebar -->
<?php echo $this->element('jstablas'); ?>