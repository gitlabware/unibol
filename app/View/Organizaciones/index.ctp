<div class="row-fluid">
    <div class="span12">
        <h3 class="heading">Organizaciones </h3> 
        <table class="table table-striped table-bordered dTableR" id="dt_a">
            <thead>
                <tr>                                          
                    <th>Nro</th>
                    <th>Organizacion</th>
                    
                    <th>Accion</th> 
                     
                </tr>
            </thead>
             <?php $i=1;?>
            <tbody>
                <?php foreach ($organizaciones as $carre): ?>
                    <?php $idCar = $carre['Organizacione']['id']; ?>
                    <tr>
                        <td><?php echo $i; $i++;?></td>                                                  
                        <td><?php echo $carre['Organizacione']['nombre']; ?></td>
                        
                        <td>
                           <?php 
                                echo $this->Html->image("iconos/edit.png", array(
                                    "title" => "Editar",
                                    'url' => array('action' => 'editar', $carre['Organizacione']['id'])
                                ));
                            ?>                             
                             <?php 
                                echo $this->Html->image("iconos/elim.png", array(
                                    "title" => "Eliminar",
                                    'url' => array('action' => 'eliminar', $carre['Organizacione']['id'])
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
<?php echo $this->element('sidebar/organizaciones'); ?>
<!-- fin sidebar -->
<?php echo $this->element('jstablas'); ?>