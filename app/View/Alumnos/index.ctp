<div class="row-fluid">
    <div class="span12">
        <h3 class="heading">Listado de Alumnos <input type="button" value="Busqueda" onclick='$("#formulario").toggle(400);' ></h3>
        <div id="formulario" style="display: none;">
        <h4>BUSCAR ALUMNO</h4>    
        <?php echo $this->Form->create('User'); ?> 
        <div class="formSep">
            <div class="row-fluid">
                <div class="span4">
                    <label>Nombre </label>
                    <?php echo $this->Form->text('User.nombres');?>
                </div>
                <div class="span4">
                    <label>Apellido Paterno </label>
                    <?php echo $this->Form->text('User.ap_paterno');?>
                </div>
                <div class="span4">
                    <label>Apellido Materno </label>
                    <?php echo $this->Form->text('User.ap_materno');?>
                </div>
            </div>
            
        </div>
    
        <div class="form-actions">
            <?php
            echo $this->Js->submit('Buscar', array('url' => '/Alumnos/ajaxlistado', 'update' => '#listado'));
            echo $this->Form->end();
            ?>      
        </div> 
        <?php echo $this->Form->create('User'); ?> 
        <div class="formSep">
            <div class="row-fluid">
                <div class="span4">
                    <label>Numero de Registro </label>
                    <?php echo $this->Form->text('User.registro');?>
                </div>
                <div class="span4">
                <label>_______</label>
                    <?php
            echo $this->Js->submit('Buscar', array('url' => '/Alumnos/ajaxlistado2', 'update' => '#listado'));
            echo $this->Form->end();
            ?>  
                </div>
                
            </div>
            
        </div>
        </div>
        <div id="listado">
        <table class="table table-striped table-bordered dTableR" id="dt_a">
            <thead>
                <tr>                                          
                    <th>Nro Registro</th>
                    <th>Nombre</th>

                    <th>Carrera</th>
                    

                    

                    <th>Acciones</th>
                        
                </tr>
            </thead>
             <?php $i=1;?>
            <tbody>
                <?php foreach($alumnos as $alumno):?>
                    
                    <tr>

                        <td><?php echo $alumno['User']['num_registro'];?></td>                                                  
                        <td><?php echo $alumno['User']['ap_paterno'];?> 
                            <?php echo $alumno['User']['ap_materno'];?> 
                            <?php echo $alumno['User']['nombres'];?></td>
                        <td><?php echo $alumno['Carrera']['nombre'];?></td>
                        
                        

                        <td>
                            <?php 
                                echo $this->Html->image("iconos/alumparalelo.png", array(
                                    "title" => "Inscripcion",
                                    'url' => array('action' => 'inscripcion3', $alumno['User']['id'])
                                ));
                            ?>
                           <?php 
                                echo $this->Html->image("iconos/edit.png", array(
                                    "title" => "Editar",
                                    'url' => array('action' => 'editar', $alumno['User']['id'])
                                ));
                            ?>
                            <?php 
                                echo $this->Html->image("iconos/elim.png", array(
                                    "title" => "Eliminar",
                                    'url' => array('action' => 'eliminar', $alumno['User']['id']),
                                ),array('escape'=>false,'comfirm'=>'Estas Seguro???'));
                            ?>
                            <?php 
                                echo $this->Html->image("iconos/calificaciones.png", array(
                                    "title" => "Notas",
                                    'url' => array('action' => 'notas2', $alumno['User']['id'])
                                ));
                            ?>
                            <?php echo $this->Html->image("iconos/pass.png", array( "title" => "Cambiar password", 'url' => array('controller'=>'Users','action' => 'cambiopass', $alumno['User']['id'],3) )); ?>
                            <?php 
                                echo $this->Html->image("iconos/veralumno.png", array(
                                    "title" => "Activos",
                                    'url' => array('action' => 'listamateriales', $alumno['User']['id'])
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
         
        <?php //echo $this->Html->link('INSERTAR',array('action'=>'insertar'));?>               
    </div> 
    <?php echo $this->Html->link('Actualizar Alumnos',array('action'=>'actualiza2'),array('class'=>'btn'));?>  
</div>
<!-- sidebar -->
<?php echo $this->element('sidebar/alumnos'); ?>
<!-- fin sidebar -->
<?php echo $this->element('jstablas'); ?>
<script>
    $(document).ready(function() {

        $("#abrir").change(function() {
            
            $('#validation').load('<?php echo $this->Html->url(array('action' => 'ajaxproductos')) ?>/' + this.value + '/<?php echo $cent;?>');
        });
    });
</script>
<?php echo $this->Js->writeBuffer(); ?>