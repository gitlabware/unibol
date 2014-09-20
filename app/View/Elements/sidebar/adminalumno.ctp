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
                                <a href="#collapseFour" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
                                    <i class="icon-cog"></i> Acciones
                                </a>
                            </div>
                            <div class="accordion-body collapse in" id="collapseFour">
                                <div class="accordion-inner">
                                    <ul class="nav nav-list">                                        
                                        <li>
                                            <?php echo $this->Html->link('<i class="splashy-add"></i> Insertar Nuevo Alumno', 
                                                    array('controller'=>'Alumnos', 'action'=>'insertar'), 
                                                    array('escape'=>false)); 
                                             ?>                                            
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link('<i class="splashy-add"></i> Insertar Nuevo Usuario', 
                                                    array('controller'=>'Users', 'action'=>'add'), 
                                                    array('escape'=>false)); 
                                             ?>                                            
                                        </li>
                                        
                                        
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a href="#collapseFive" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
                                    <i class="icon-cog"></i> Usuarios
                                </a>
                            </div>
                            <div class="accordion-body collapse in" id="collapseFive">
                                <div class="accordion-inner">
                                    <ul class="nav nav-list">                                        
                                        
                                        <li>
                                            <?php echo $this->Html->link('<i class="splashy-add"></i> Lista usuarios', 
                                                    array('controller'=>'users', 'action'=>'index'), 
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