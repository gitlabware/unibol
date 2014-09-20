<div class="row-fluid">
    <div class="span9">
        <h3 class="heading">Materias de: <?php echo $materias[0]['Carrera']['nombre']; ?></h3> 
        <table class="table table-striped table-bordered dTableR" id="dt_a">
            <thead>
                <tr>                                          
                    <th>Nro</th>
                    <th>Nombre</th>
                    <td>Sigla</td>
                    <td>Semestre</td>
                    
                        
                </tr>
            </thead>
             <?php $i=1;?>
            <tbody>
                <?php foreach ($materias as $mat): ?>
                    <?php $idPer = $mat['Materia']['id']; ?>
                    <tr>
                        <td><?php echo $i; $i++;?></td>                                                  
                        <td><?php echo $mat['Materia']['nombre']; ?></td>
                        <td><?php echo $mat['Materia']['sigla']; ?></td>
                        <td><?php echo $mat['Semestre']['nombre'];?></td>
                        
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
<?php echo $this->element('sidebar/materias'); ?>
<!-- fin sidebar -->
<?php echo $this->element('jstablas'); ?>