<div class="row-fluid">
    <div class="span12">
        <h3 class="heading">Alumnos Paralelos <?php echo $alumnosparalelos; ?></h3> 
        <table class="table table-striped table-bordered dTableR" id="dt_a">
            <thead>
                <tr>                                          
                    <th>Nro</th>
                    <th>Alumno</th>
                    <th>Paralelo</th>
                    <th>Estado</th>
                    <th>Gestion</th>
                    <th>Nivel</th>
                                      
                    <th>Acciones</th>
                        
                </tr>
            </thead>
             <?php $i=1;?>
            <tbody>
                <?php foreach ($alumnosparalelos as $alpar): ?>
                    <?php $idPer = $alpar['AlumnosParalelo']['id']; ?>
                    <tr>
                    
                        <td><?php echo $i; $i++;?></td>                                                  
                        <td><?php echo $alpar['Alumno']['nombre']; ?></td>
                        <td><?php echo $alpar['Paralelo']['nombre']; ?></td>
                        <td><?php echo $alpar['Estado']['nombre']; ?></td>
                        <td><?php echo $alpar['Gestione']['nombre']; ?></td>
                        <td><?php echo $alpar['Nivele']['nombre']; ?></td>
                        
                        
                        <td>
                           <?php 
                                echo $this->Html->image("iconos/edit.png", array(
                                    "title" => "Editar",
                                    'url' => array('action' => 'editar', $alpar['AlumnosParalelo']['id'])
                                ));
                            ?>                             
                            
                        
                        <?php 
                                echo $this->Html->image("iconos/elim.png", array(
                                    "title" => "Eliminar",
                                    'url' => array('action' => 'eliminar', $alpar['AlumnosParalelo']['id'])
                                ));
                            ?>
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
<!-- sidebar -->
<?php echo $this->element('sidebar/alumnosparalelos'); ?>
<!-- fin sidebar -->
<?php echo $this->element('jstablas'); ?>