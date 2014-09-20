<a href="javascript:void(0)" class="sidebar_switch on_switch ttip_r" title="Hide Sidebar">Sidebar switch</a>
<div class="sidebar">
    <div class="antiScroll">
        <div class="antiscroll-inner">
            <div class="antiscroll-content">
                <div class="sidebar_inner">
                    &nbsp;
                    <div id="side_accordion" class="accordion">

                         
                        <div class="accordion-group">
										<div class="accordion-heading">
											<a href="#m1" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
												<i class="icon-user"></i> Usuarios
											</a>
										</div>
										<div class="accordion-body collapse" id="m1">
											<div class="accordion-inner">
												<ul class="nav nav-list">
													<li>
                                                            <?php echo $this->Html->link('<i class="splashy-add"></i> Insertar nuevo Usuario', 
                                                            array('controller'=>'Users', 'action'=>'add'), 
                                                            array('escape'=>false)); 
                                                            ?>
                                                    </li>
													<li>
                                                            <?php echo $this->Html->link('<i class="splashy-add"></i> Listado de  Usuario', 
                                                            array('controller'=>'Users', 'action'=>'index'), 
                                                            array('escape'=>false)); 
                                                             ?> 
                                                    </li>
												</ul>
												
											</div>
										</div>
                        </div>
                        <div class="accordion-group">
										<div class="accordion-heading">
											<a href="#m2" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
												<i class="icon-user"></i> Alumnos
											</a>
										</div>
										<div class="accordion-body collapse" id="m2">
											<div class="accordion-inner">
												<ul class="nav nav-list">
													<li>
                                                            <?php echo $this->Html->link('<i class="splashy-add"></i> Insertar Nuevo Alumno', 
                                                            array('controller'=>'Alumnos', 'action'=>'insertar'), 
                                                            array('escape'=>false)); 
                                                            ?>
                                                    </li>
													<li>
                                                            <?php echo $this->Html->link('<i class="splashy-add"></i> Listado de  Alumnos', 
                                                            array('controller'=>'Alumnos', 'action'=>'index'), 
                                                            array('escape'=>false)); 
                                                             ?> 
                                                    </li>
													
												</ul>
												
											</div>
										</div>
                        </div>  
                        <div class="accordion-group">
										<div class="accordion-heading">
											<a href="#m3" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
												<i class="icon-user"></i> Docentes
											</a>
										</div>
										<div class="accordion-body collapse" id="m3">
											<div class="accordion-inner">
												<ul class="nav nav-list">
													<li>
                                                            <?php echo $this->Html->link('<i class="splashy-add"></i> Insertar nuevo Docente', 
                                                            array('controller'=>'Docentes', 'action'=>'insertar'), 
                                                            array('escape'=>false)); 
                                                            ?>
                                                    </li>
													<li>
                                                            <?php echo $this->Html->link('<i class="splashy-add"></i> Listado de  Docentes', 
                                                            array('controller'=>'Docentes', 'action'=>'index'), 
                                                            array('escape'=>false)); 
                                                             ?> 
                                                    </li>
												</ul>
												
											</div>
										</div>
                        </div>  
                        <div class="accordion-group">
										<div class="accordion-heading">
											<a href="#m4" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
												<i class="icon-th"></i> Carreras
											</a>
										</div>
										<div class="accordion-body collapse in" id="m4">
											<div class="accordion-inner">
												<ul class="nav nav-list">
													<li>
                                                            <?php echo $this->Html->link('<i class="splashy-add"></i> Insertar nueva Carrera', 
                                                            array('controller'=>'Carreras', 'action'=>'insertar'), 
                                                            array('escape'=>false)); 
                                                            ?>
                                                    </li>
													<li>
                                                            <?php echo $this->Html->link('<i class="splashy-add"></i> Listado de  Carreras', 
                                                            array('controller'=>'Carreras', 'action'=>'index'), 
                                                            array('escape'=>false)); 
                                                             ?> 
                                                    </li>
												</ul>
												
											</div>
										</div>
                        </div> 
                        <div class="accordion-group">
										<div class="accordion-heading">
											<a href="#m5" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
												<i class="icon-th"></i> Materias
											</a>
										</div>
										<div class="accordion-body collapse" id="m5">
											<div class="accordion-inner">
												<ul class="nav nav-list">
													<li>
                                                            <?php echo $this->Html->link('<i class="splashy-add"></i> Insertar nueva Materia', 
                                                            array('controller'=>'Materias', 'action'=>'insertar'), 
                                                            array('escape'=>false)); 
                                                            ?>
                                                    </li>
													<li>
                                                            <?php echo $this->Html->link('<i class="splashy-add"></i> Listado de  Materias', 
                                                            array('controller'=>'Materias', 'action'=>'index'), 
                                                            array('escape'=>false)); 
                                                             ?> 
                                                    </li>
												</ul>
												
											</div>
										</div>
                        </div>
                        <div class="accordion-group">
										<div class="accordion-heading">
											<a href="#m6" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
												<i class="icon-th"></i> Mallas
											</a>
										</div>
										<div class="accordion-body collapse" id="m6">
											<div class="accordion-inner">
												<ul class="nav nav-list">
													<li>
                                                            <?php echo $this->Html->link('<i class="splashy-add"></i> Generar nueva Malla', 
                                                            array('controller'=>'Mallas', 'action'=>'insertar'), 
                                                            array('escape'=>false)); 
                                                            ?>
                                                    </li>
													<li>
                                                            <?php echo $this->Html->link('<i class="splashy-add"></i> Listado de  Mallas', 
                                                            array('controller'=>'Mallas', 'action'=>'index'), 
                                                            array('escape'=>false)); 
                                                             ?> 
                                                    </li>
												</ul>
												
											</div>
										</div>
                        </div>  
                        <div class="accordion-group">
										<div class="accordion-heading">
											<a href="#m7" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
												<i class="icon-th"></i> Organizaciones
											</a>
										</div>
										<div class="accordion-body collapse" id="m7">
											<div class="accordion-inner">
												<ul class="nav nav-list">
													<li>
                                                            <?php echo $this->Html->link('<i class="splashy-add"></i> Insertar nueva Organizacion', 
                                                            array('controller'=>'Organizaciones', 'action'=>'insertar'), 
                                                            array('escape'=>false)); 
                                                            ?>
                                                    </li>
													<li>
                                                            <?php echo $this->Html->link('<i class="splashy-add"></i> Listado de  Organizaciones', 
                                                            array('controller'=>'Organizaciones', 'action'=>'index'), 
                                                            array('escape'=>false)); 
                                                             ?> 
                                                    </li>
												</ul>
												
											</div>
										</div>
                        </div>                       
                        <div class="accordion-group">
						      <div class="accordion-heading">
									<a href="#collapseOne" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
									<i class="icon-folder-close"></i> Accion 
									</a>
							 </div>
							     <div class="accordion-body collapse in" id="collapseOne">
									<div class="accordion-inner">
									<ul class="nav nav-list">
                                        <li><?php echo $this->Html->image('iconos/edit.png')?>&nbsp;&nbsp;&nbsp;Edita</li>
                                        <li><?php echo $this->Html->image('iconos/elim.png')?>&nbsp;&nbsp;&nbsp;Elimina</li>
                                        
								    </ul>
								    </div>
							     </div>
						</div>

                    </div>

                    <div class="push"></div>
                </div>
        
            </div>
        </div>
    </div>
</div>