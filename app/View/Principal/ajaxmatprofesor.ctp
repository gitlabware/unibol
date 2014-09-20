<?php //debug($materias); ?>
<?php if(!empty($materias)): ?>
	<h3 class="heading">
		<?php echo $materias['0']['Paralelo']['Nivele']['nombre']; ?>
		(Paralelo "<?php echo $materias['0']['Paralelo']['nombre']; ?>")
	</h3>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>
					Materias
				</th>
				<th>
					Acciones
				</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($materias as $m): ?>            
				<?php $idParalelo=$m['Paralelo']['id']; ?>
                <?php $idMateria = $m['ParalelosProfesore']['materia_id']; ?>
					<tr>
						<td>
							<?php echo $m['Materia']['nombre']; ?>
						</td>
						<td>
                            <?php echo $this->Html->image("iconos/listestudiante.png", array("title" => "Ver Alumnos",'url' => array('controller'=>'Profesores', 'action' =>'veralumnos', $idParalelo, $idMateria))); ?>
							<?php echo $this->Html->link('Registrar notas', array('controller'=>'AlumnosParalelos', 'action' =>'alumnosprofesor', $idParalelo, $idMateria)); ?>
                            <?php echo $this->Html->link('Asistencia', array('controller'=>'AlumnosParalelos', 'action' =>'asistencias', $idParalelo, $idMateria)); ?>
                            <?php echo $this->Html->link('Ver Asistencia', array('controller'=>'Profesores', 'action' =>'verasistencias', $idParalelo, $idMateria)); ?>
						</td>
					</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
<?php else: ?>
    <h3 class="heading">	
	   No tiene Paralelos
	</h3>    
<?php endif; ?>   