<div class="row-fluid">
    <div class="span12">
        <h3 class="heading">Gestiones <?php echo $gestiones; ?></h3> 
        <table class="table table-striped table-bordered dTableR" id="dt_a">
            <thead>
                <tr>                                          
                    <th>Nro</th>
                    <th>Nombre</th>
                    <th>Promedio de Aprobacion</th>
                    <th>Promedio</th> 
                    <th>Estado</th> 
                    
                    <th>Acciones</th>
                        
                </tr>
            </thead>
             <?php $i=1;?>
            <tbody>
                <?php foreach ($gestiones as $gest): ?>
                    <?php $idPer = $gest['Gestione']['id']; ?>
                    <tr>
                        <td><?php echo $i; $i++;?></td>                                                  
                        <td><?php echo $gest['Gestione']['nombre']; ?></td>
                        <td><?php echo $gest['Gestione']['promedio_aprobacion']; ?></td>
                        <td><?php echo $gest['Gestione']['promedio']; ?></td>
                        <td><?php echo $gest['Gestione']['estado']; ?></td>
                        
                        <td>
                           <?php 
                                echo $this->Html->image("iconos/edit.png", array(
                                    "title" => "Editar",
                                    'url' => array('action' => 'editar', $gest['Gestione']['id'])
                                ));
                            ?>                             
                            
                        
                        <?php 
                                echo $this->Html->image("iconos/elim.png", array(
                                    "title" => "Eliminar",
                                    'url' => array('action' => 'eliminar', $gest['Gestione']['id'])
                                ));
                            ?>
                        </td>
                    </tr>
                    <?php
                endforeach;
                ?>
            </tbody>
        </table> 
                       
    </div>   
</div>
<!-- sidebar -->
<?php echo $this->element('sidebar/gestiones'); ?>
<!-- fin sidebar -->
<?php echo $this->element('jstablas'); ?>