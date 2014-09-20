<div class="row-fluid">
    <div class="span10">
        <h3 class="heading">NOTAS POR PERIODO</h3>
        <?php foreach($semestres as $s):?>
        <h4 align='center'>SEMESTRE: <?php echo $s['Semestre']['nombre'];?></h4>
                <table class="table table-striped table-bordered table-condensed">
                    <thead>
                        <tr>
                            <th>Periodo</th>
                            <th>Sigla</th>
                            <th>Nombre de la Materia</th>
                            <th>Nota</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <?php foreach($docentesmateria as $d):?>
                            <?php if ($d['DocentesMateria']['semestre_id'] == $s['Semestre']['id']):?>
                                <?php $count = count($notas);;?>
                                <?php for($i = 1;$i < $count;$i++):?>
                                    <?php if ($notas[$i]['Alumnosnota']['docentes_materia_id'] == $d['DocentesMateria']['id']):?>
                                        <?php if ($i == ($count-1)):?>
                                        <td><?php echo $notas[$i]['Malla']['nombre'];?></td>
                                        <td><?php echo $d['Materia']['sigla']?></td>
                                        <td><?php echo $d['Materia']['nombre']?></td>
                                        <td><?php echo $notas[$i]['Alumnosnota']['notafinal'];?></td>
                                        <?php endif;?>
                                    <?php endif;?>
                                <?php endfor;?>
                            <?php endif;?>
                        <?php endforeach;?>
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