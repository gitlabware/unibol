<div class="row-fluid">
	<div class="span12">
		<h3 class="heading">
			Usuarios
		</h3>
		<table class="table table-striped table-bordered dTableR" id="dt_a">
			<thead>
				<th>
					Item
				</th>
				<th>
                    Nombre
                </th>
				<th>
					Usuario
				</th>
				<th>
					Perfil
				</th>
				
				<th>
					Acciones
				</th>
			</thead>
			<tbody>
				<?php foreach ($users as $user): ?>
					<tr>
						<td>
							<?php echo h($user[ 'User'][ 'id']); ?>
								&nbsp;
						</td>
						<td>
                            <?php echo $user['User']['nombres'].' '.$user['User']['ap_paterno'];?>
                        </td>
						<td>
							<?php echo h($user[ 'User'][ 'username']); ?>
								&nbsp;
						</td>
						<td>
							<?php echo $user['Group']['name']?>
						</td>
						
						<td class="actions">
						   <?php echo $this->Html->image("iconos/edit.png", array( "title" => "Editar", 'url' => array('action' => 'edit', $user['User']['id']) )); ?>
						  <?php echo $this->Html->image("iconos/pass.png", array( "title" => "Cambiar password", 'url' => array('action' => 'cambiopass', $user['User']['id'],1) )); ?>
						  <?php echo $this->Html->image("iconos/elim.png", array( "title" => "Eliminar", 'url' => array('action' => 'delete', $user['User']['id']) ));?>
						</td>
					</tr>
					<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
<?php echo $this->
	element('sidebar/admin'); ?>
	<?php echo $this->
		element('jstablas'); ?>