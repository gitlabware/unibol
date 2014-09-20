<div class="row-fluid">
    <div class="span12">
        <h3 class="heading">Semestres <?php echo $semestres; ?></h3> 
        <table class="table table-striped table-bordered dTableR" id="dt_a">
            <thead>
                <tr>                                          
                    <th>Nro</th>
                    <th>Nombre</th>
                    
                    <th>Accion</th> 
                     
                </tr>
            </thead>
             <?php $i=1;?>
            <tbody>
                <?php foreach ($semestres as $sem): ?>
                    <?php $idCar = $sem['Semestre']['id']; ?>
                    <tr>
                        <td><?php echo $i; $i++;?></td>                                                  
                        <td><?php echo $sem['Semestre']['nombre']; ?></td>
                        
                        <td>
                           <?php 
                                echo $this->Html->image("iconos/edit.png", array(
                                    "title" => "Editar",
                                    'url' => array('action' => 'editar', $sem['Semestre']['id'])
                                ));
                            ?>                             
                             <?php 
                                echo $this->Html->image("iconos/elim.png", array(
                                    "title" => "Eliminar",
                                    'url' => array('action' => 'eliminar', $sem['Semestre']['id'])
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
<?php echo $this->element('sidebar/semestres'); ?>
<!-- fin sidebar -->
<?php echo $this->element('jstablas'); ?>