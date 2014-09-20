<div class="row-fluid">
    <div class="span12">
        <h3 class="heading">LISTADO DE USUARIOS</h3> 
        <table class="table table-striped table-bordered dTableR" id="dt_a">
            <thead>
                <tr>                                          
                    <th>Nro</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Usuario</th>
                    <th>Tipo Usuario</th>
                    <th>Acciones</th>
                        
                </tr>
            </thead>
             <?php $i=1;?>
            <tbody>
                <?php $i=1; foreach ($users as $u): ?>
                    <tr>
                        <td><?php echo $i; $i++; ?></td>                                                  
                        <td><?php echo $u['Persona']['nombre']; ?></td>
                        <td><?php echo $u['Persona']['ap_paterno']; ?></td>
                        <td><?php echo $u['User']['username']; ?></td>
                        <td><?php echo $u['Group']['name']; ?></td>
                        <td>
                        <?php echo $this->Html->link($this->Html->image("iconos/edit.png", array("alt" =>'Editar', 'title' => 'editar')), array('action' => 'edit', $u['User']['id']),array('escape' => false)); ?>
                        <?php echo $this->Html->link($this->Html->image("iconos/pass.png", array("alt" =>'Editar', 'title' => 'Cambio Password')), array('action' => 'cambiopass', $u['User']['id']),array('escape' => false)); ?>
                        <?php echo $this->Html->link($this->Html->image("iconos/elim.png", array("alt" =>'eliminar', 'title' => 'eliminar')), array('action' => 'delete', $u['User']['id']),array('escape' => false), 
                        ("Desea eliminar realmente??")); ?>
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
<?php echo $this->element('sidebar/alumnos'); ?>
<!-- fin sidebar -->
<?php echo $this->element('jstablas'); ?>