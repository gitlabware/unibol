<div class="row-fluid">
    <div class="span12">
        <h3 class="heading">Usuarios <?php echo $usuarios; ?></h3> 
        <table class="table table-striped table-bordered dTableR" id="dt_a">
            <thead>
                <tr>                                          
                    <th>Nro</th>
                    <th>Usuario</th>
                    <th>Tipo </th>
                    <th>Email</th>  
                    <th>Acciones</th>     
                </tr>
            </thead>
             <?php $i=1;?>
            <tbody>
                <?php foreach ($usuarios as $usu): ?>
                    <?php $idUsua = $usu['Usuario']['id']; ?>
                    <tr>
                        <td><?php echo $i; $i++;?></td>                                                  
                        <td><?php echo $usu['Usuario']['usuario']; ?></td>
                        <td><?php echo $usu['Usuario']['seguridad_respuesta']; ?></td>
                        <td><?php echo $usu['Usuario']['email']; ?></td>
                        <td>
                           <?php 
                                echo $this->Html->image("iconos/edit.png", array(
                                    "title" => "Editar",
                                    'url' => array('action' => 'editar', $cicl['Ciclo']['id'])
                                ));
                            ?>                             
                             <?php 
                                echo $this->Html->image("iconos/elim.png", array(
                                    "title" => "Eliminar",
                                    'url' => array('action' => 'eliminar', $cicl['Ciclo']['id'])
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
<?php echo $this->element('sidebar/usuarios'); ?>
<!-- fin sidebar -->
<?php echo $this->element('jstablas'); ?>