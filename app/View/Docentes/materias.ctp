<div class="span10">
    <h3 class="heading">MATERIAS - <?php echo $malla['Malla']['nombre']?></h3>
    <table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
                <th>Sigla</th>
                <th>Materia</th>
                <th>Notas</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($materias as $m):?>
            <tr>
                <td><?php echo $m['Materia']['sigla'];?></td>
                <td><?php echo $m['Materia']['nombre'];?></td>
                <td>
                        <?php
                            echo $this->Html->image("iconos/calificaciones.png", array(
                                "title" => "NOTAS ",
                                'url' => array('controller' => 'Docentes', 'action' => 'notas', $m['DocentesMateria']['id'], $idcarrera, $idmalla)
                            ));
                            ?> 
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
<!-- sidebar -->
<?php echo $this->element('sidebar/docentes2'); ?>
<!-- fin sidebar -->
<?php //llamamos scripts tablas ?>
<?php echo $this->element('jsformularios'); ?>