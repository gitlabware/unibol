<nav>
	<div class="nav-collapse">
		<ul class="nav">
			
			
			<li class="dropdown">
				<?php echo $this->
					Html->link('
					<i class="icon-book icon-white">
					</i>
					Panel de Control', array('controller'=>'Principal', 'action'=>'admin'), array('escape'=>false) ); ?>
			</li>
            <li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-list-alt icon-white"></i>Alumnos <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li>
						<?php echo $this->
							Html->link('Lista alumnos', array('controller'=>'alumnos', 'action'=>'index')); ?>
					</li>
					<li>
						<?php echo $this->
							Html->link('Nuevo alumno', array('controller'=>'alumnos', 'action'=>'insertar')); ?>
					</li>
				</ul>
			</li>
                        
		</ul>
	</div>
</nav>