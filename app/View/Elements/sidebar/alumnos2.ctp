<?php $idu = $this->Session->read('Auth.User.id');?>
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
												<i class="icon-user"></i> Alumno
											</a>
										</div>
										<div class="accordion-body collapse in" id="m1">
											<div class="accordion-inner">
												<ul class="nav nav-list">
													<li>
                                                            <?php echo $this->Html->link('<i class="splashy-add"></i> Datos del Usuario', 
                                                            array('controller'=>'Alumnos', 'action'=>'menualumnos'), 
                                                            array('escape'=>false)); 
                                                            ?>
                                                    </li>
													<li>
                                                            <?php echo $this->Html->link('<i class="splashy-add"></i> Notas ultimo Periodo', 
                                                            array('controller'=>'Alumnos', 'action'=>'notasultimo'), 
                                                            array('escape'=>false)); 
                                                             ?> 
                                                    </li>
                                                    <li>
                                                            <?php echo $this->Html->link('<i class="splashy-add"></i> Notas por Periodo', 
                                                            array('controller'=>'Alumnos', 'action'=>'notas'), 
                                                            array('escape'=>false)); 
                                                             ?> 
                                                    </li>
                                                    <li>
                                                            <?php echo $this->Html->link('<i class="splashy-add"></i> Inscripcion', 
                                                            array('controller'=>'Alumnos', 'action'=>'inscripcion'), 
                                                            array('escape'=>false)); 
                                                             ?> 
                                                    </li>
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