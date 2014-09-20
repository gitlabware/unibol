<div class="row-fluid">
    <div class="span12">
        <h3 class="heading">Paralelos <?php echo $paralelos; ?></h3> 
        <table class="table table-striped table-bordered dTableR" id="dt_a">
            <thead>
                <tr>                                          
                    <th>Nro</th>
                    <th>Nivel</th>
                    <th>Curso</th>
                    <th>Gestion</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Accion</th> 
                     
                </tr>
            </thead>
             <?php $i=1;?>
            <tbody>
                <?php foreach ($paralelos as $para): ?>
                    <?php $idCar = $para['Paralelo']['id']; ?>
                    <tr>
                        <td><?php echo $i; $i++;?></td>                                                  
                        <td><?php echo $para['Nivele']['nombre']; ?></td>
                        <td><?php echo $para['Paralelo']['curso']; ?></td>
                        <td><?php echo $para['Gestione']['nombre']; ?></td>
                        <td><?php echo $para['Paralelo']['nombre']; ?></td>
                        <td><?php echo $para['Paralelo']['descripcion']; ?></td>
                        <td>
                           <?php 
                                echo $this->Html->image("iconos/edit.png", array(
                                    "title" => "Editar",
                                    'url' => array('action' => 'editar', $para['Paralelo']['id'])
                                ));
                            ?>                             
                             <?php 
                                echo $this->Html->image("iconos/elim.png", array(
                                    "title" => "Eliminar",
                                    'url' => array('action' => 'eliminar', $para['Paralelo']['id'])
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
<?php echo $this->element('sidebar/paralelos'); ?>
<!-- fin sidebar -->
<?php echo $this->element('jstablas'); ?>