
<div class="row-fluid">
    <div class="span10">
    <h3 class="heading">Inscripsion</h3>
    <h4>SEMESTRE <?php echo $semestre2?></h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Sigla</th>
                    <th>Materia</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach($materias as $m):?>
                <tr>
                    <td><?php echo $m['Materia']['sigla'];?></td>
                    <td><?php echo $m['Materia']['nombre'];?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
         <?php 
         if ($sw)
         {
            echo $this->Html->link('Confirmar Inscripcion',
             array('action'=>'inscripcion2',$id,1),
             array('class'=>'btn btn-primary'));
         }
         
         
         ?>
    </div>
</div>
<!-- sidebar -->
<?php echo $this->element('sidebar/alumnos'); ?>
<!-- fin sidebar -->
<?php //llamamos scripts tablas ?>
<?php echo $this->element('jsformularios'); ?>