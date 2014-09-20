<div class="row-fluid">
    <div class="span12">
        <h3 class="heading">Materias Semestres <?php echo $matsemestres; ?></h3> 
        <table class="table table-striped table-bordered dTableR" id="dt_a">
            <thead>
                <tr>                                          
                    <th>Nro</th>
                    <th>Materia</th>
                    <th>Semestre</th> 
                    <th>Gestion</th>                   
                    <th>Acciones</th>
                        
                </tr>
            </thead>
             <?php $i=1;?>
            <tbody>
                <?php foreach ($matsemestres as $msem): ?>
                    <?php $idPer = $msem['MateriasSemestre']['id']; ?>
                    <tr>
                        <td><?php echo $i; $i++;?></td>                                                  
                        <td><?php echo $msem['Materia']['nombre']; ?></td>
                        <td><?php echo $msem['Semestre']['nombre']; ?></td>
                        <td><?php echo $msem['Gestione']['nombre']; ?></td>
                        
                        <td>
                           <?php 
                                echo $this->Html->image("iconos/edit.png", array(
                                    "title" => "Editar",
                                    'url' => array('action' => 'editar', $msem['MateriasSemestre']['id'])
                                ));
                            ?>                             
                            
                        
                        <?php 
                                echo $this->Html->image("iconos/elim.png", array(
                                    "title" => "Eliminar",
                                    'url' => array('action' => 'eliminar', $msem['MateriasSemestre']['id'])
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
<?php echo $this->element('sidebar/materiassemestres'); ?>
<!-- fin sidebar -->
<?php echo $this->element('jstablas'); ?>