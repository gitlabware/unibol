<?php echo $this->Html->script('jquery', FALSE); ?>
<div class="row-fluid">
    <div class="span12">
        <h3 class="heading">Carreras </h3> 
        <table class="table table-striped table-bordered dTableR" id="dt_a">
            <thead>
                <tr>                                          
                    <th>Nro</th>
                    <th>Carrera</th>
                    
                    <th>Accion</th> 
                     
                </tr>
            </thead>
             <?php $i=1;?>
            <tbody>
                <?php foreach ($carreras as $carre): ?>
                    <?php $idCar = $carre['Carrera']['id']; ?>
                    <tr>
                        <td><?php echo $i; $i++;?></td>                                                  
                        <td><?php echo $carre['Carrera']['nombre']; ?></td>
                        
                        <td>
                           <?php 
                                echo $this->Html->image("iconos/edit.png", array(
                                    "title" => "Editar",
                                    'url' => array('action' => 'editar', $carre['Carrera']['id'])
                                ));
                            ?> 
                            <?php 
                                echo $this->Html->image("iconos/plan.png", array(
                                    "title" => "Materias",
                                    'url' => array('action' => 'materias', $carre['Carrera']['id'])
                                ));
                            ?>                            
                             <?php 
                                echo $this->Html->image("iconos/elim.png", array(
                                    "title" => "Eliminar",
                                    'url' => array('action' => 'eliminar', $carre['Carrera']['id'])
                                ));
                            ?>
                        </td>
                    </tr>
                    <?php
                endforeach;
                ?>
            </tbody>
               
        </table> 
          <?php
            //echo $this->Js->link('aaa',array('controller'=>'Carreras', 'action'=>'ajaxprueba'), array('update'=>'#success','class'=>'btn btn-large'));
            ?>
          <div id="success"></div>
          <?php echo $this->Js->writeBuffer();?>         
    </div>   
</div>
<!-- sidebar -->
<?php echo $this->element('sidebar/carreras'); ?>
<!-- fin sidebar -->
<?php echo $this->element('jstablas'); ?>
