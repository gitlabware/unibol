<?php //debug($paralelosProfe); ?>
<div class="row-fluid">
    <div class="span6">
        <h3 class="heading">PARALELOS EN LOS QUE DICTA CLASES</h3> 
        <table class="table table-striped table-bordered dTableR" id="dt_a">
            <thead>
                <tr>               
                    <th>Nivel</th>
                    <th>Paralelo</th>                    
                    <th>Acciones</th>     
                </tr>
            </thead>
            <tbody>
                <?php foreach($paralelosProfe as $pp): ?>
                    <?php $idParalelo = $pp['Paralelo']['id']; ?>
                    <tr>  
                        <td><?php echo $pp['Nivele']['nombre']; ?></td>
                        <td><?php echo $pp['Paralelo']['nombre']; ?></td>                        
                        <td>   
                            <?php echo $this->Ajax->link(
                                        $this->Html->image("iconos/mate.png"), 
                                        array(
                                        'controller' => 'Principal',
                                        'action' => 'ajaxmatprofesor', $idParalelo
                                        ),
                                        array(
                                        'update' => 'materias',
                                        'escape' => false)
                                );
                            ?>                             
                        </td>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>                
    </div>       
    <div class="span6">
        <div id="materias">
        </div>          
    </div>   
</div>

<!-- sidebar -->
<?php echo $this->element('sidebar/profesorp'); ?>
<!-- fin sidebar -->
<?php echo $this->element('jstablas'); ?>
<?php //echo $this->Html->link('NUEVO NIVEL', array('action' => 'insertar'), array('class' => 'buttonS bGreen ')); ?>