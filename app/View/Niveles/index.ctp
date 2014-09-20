<div class="row-fluid">
    <div class="span12">
        <h3 class="heading">Niveles <?php echo $niveles; ?></h3> 
        <table class="table table-striped table-bordered dTableR" id="dt_a">
            <thead>
                <tr>                                          
                    <th>Nro</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Gestion</th>
                    <th>Accion</th> 
                     
                </tr>
            </thead>
             <?php $i=1;?>
            <tbody>
                <?php foreach ($niveles as $niv): ?>
                    <?php $idCar = $niv['Nivele']['id']; ?>
                    <tr>
                        <td><?php echo $i; $i++;?></td>                                                  
                        <td><?php echo $niv['Nivele']['nombre']; ?></td>
                        <td><?php echo $niv['Nivele']['descripcion']; ?></td>
                        <td><?php echo $niv['Gestione']['nombre']; ?></td>
                        
                        <td>
                           <?php 
                                echo $this->Html->image("iconos/edit.png", array(
                                    "title" => "Editar",
                                    'url' => array('action' => 'editar', $niv['Nivele']['id'])
                                ));
                            ?>                             
                             <?php 
                                echo $this->Html->image("iconos/elim.png", array(
                                    "title" => "Eliminar",
                                    'url' => array('action' => 'eliminar', $niv['Nivele']['id'])
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
<?php echo $this->element('sidebar/niveles'); ?>
<!-- fin sidebar -->
<?php echo $this->element('jstablas'); ?>