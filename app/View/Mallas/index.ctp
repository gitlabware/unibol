<div class="row-fluid">
    <div class="span12">
        <h3 class="heading">Mallas </h3> 
        <table class="table table-striped table-bordered dTableR" id="dt_a">
            <thead>
                <tr>                                          
                    <th>Nro</th>
                    <th>Malla</th>
                    
                    <th>Accion</th> 
                     
                </tr>
            </thead>
             <?php $i=1;?>
            <tbody>
                <?php foreach ($mallas as $carre): ?>
                    <?php $idCar = $carre['Malla']['id']; ?>
                    <tr>
                        <td><?php echo $i; $i++;?></td>                                                  
                        <td><?php echo $carre['Malla']['nombre']; ?></td>
                        
                        <td>
                           <?php 
                                echo $this->Html->image("iconos/edit.png", array(
                                    "title" => "Editar",
                                    'url' => array('action' => 'editar', $carre['Malla']['id'])
                                ));
                            ?>                             
                             
                             <?php 
                                echo $this->Html->image("iconos/periodos.png", array(
                                    "title" => "Carreras",
                                    'url' => array('controller'=>'DocentesMaterias','action' => 'eligecarreras', $carre['Malla']['id'])
                                ));
                            ?>
                            <?php 
                                echo $this->Html->image("iconos/elim.png", array(
                                    "title" => "Eliminar",
                                    'url' => array('action' => 'eliminar', $carre['Malla']['id'])
                                ));
                            ?>
                        </td>
                    </tr>
                    <?php
                endforeach;
                ?>
            </tbody>
               
        </table> 
             <?php // echo $this->Html->link('INSERTAR',array('action'=>'insertar'));?> 
                     
    </div>   
</div>
<!-- sidebar -->
<?php echo $this->element('sidebar/mallas'); ?>
<!-- fin sidebar -->
<?php echo $this->element('jstablas'); ?>