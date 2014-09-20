
<div class="row-fluid">
    <div class="span10">
    <h3 class="heading">Notas UltimoPeriodo</h3>
    <h4>SEMESTRE <?php echo $semestre2.' - '.$malla['Malla']['nombre']?></h4>
    <?php foreach ($materias as $m):?>
        <table class="table table-striped table-bordered table-condensed">
            <thead>
                <tr>
                    <th>Sigla</th>
                    <th>Nombre de la Materia</th>
                    <?php foreach($notas as $no):?>
                    <?php if ($no['Alumnosnota']['docentes_materia_id'] == $m['DocentesMateria']['id']):?>
                    <th>P <?php echo $no['Alumnosnota']['parcial']?></th>
                    <?php endif;?>
                    <?php endforeach;?>
                    <th>Nota Final</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $m['Materia']['sigla']?></td>
                    <td><?php echo $m['Materia']['nombre']?></td>
                    <?php $count = count($notas);?>
                    <?php for ($i = 0; $i < $count; $i++):?>
                    <?php if ($notas[$i]['Alumnosnota']['docentes_materia_id'] == $m['DocentesMateria']['id']):?>
                    <td><?php echo $notas[$i]['Alumnosnota']['nota'];?></td>
                    <?php if ($i == ($count-1)):?>
                    <td><?php echo $notas[$i]['Alumnosnota']['notafinal'];?></td>
                    <?php endif;?>
                    <?php endif;?>
                    <?php endfor;?>
                </tr>
            </tbody>
        </table>
    <?php endforeach;?>
         
    </div>
</div>
<!-- sidebar -->
<?php echo $this->element('sidebar/alumnos2'); ?>
<!-- fin sidebar -->
<?php //llamamos scripts tablas ?>
<?php echo $this->element('jsformularios'); ?>