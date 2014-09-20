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
                                            <?php echo $this->Html->link('<i class="splashy-add"></i> Insertar Nuevo Nivel', 
                                                    array('controller'=>'Niveles', 'action'=>'insertar'), 
                                                    array('escape'=>false)); 
                                             ?>                                            
                                        </li>
                                        
                                        <li>
                                            <?php echo $this->Html->link('<i class="splashy-add"></i> Listado de Niveles', 
                                                    array('controller'=>'Niveles', 'action'=>'index'), 
                                                    array('escape'=>false)); 
                                             ?>                                            
                                        </li>
                                        
                                        
                                        <li class="divider"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>                        
                        <div class="accordion-group">
						      <div class="accordion-heading">
									<a href="#collapseOne" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
									<i class="icon-folder-close"></i> Accion "Niveles"
									</a>
							 </div>
							     <div class="accordion-body collapse in" id="collapseOne">
									<div class="accordion-inner">
									<ul class="nav nav-list">
                                        <li><?php echo $this->Html->image('iconos/edit.png')?>&nbsp;&nbsp;&nbsp;Edita el Nivel</li>
                                        <li><?php echo $this->Html->image('iconos/elim.png')?>&nbsp;&nbsp;&nbsp;Elimina el Nivel</li>
                                        
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