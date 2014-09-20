<?php
App::Import('Model', 'User');
$usuario = new User();

?>
<ul class="nav user_menu pull-right">
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuario: 
<?php echo $this->Session->read('Auth.User.nombre_completo');?>
 </a>
                                    
</li>
</ul>
<nav>
    <div class="nav-collapse">
        <ul class="nav">
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-list-alt icon-white"></i>Administracion <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <?php echo $this->
                            Html->link('Materias', arraY('controller'=>'Profesores', 'action'=>'materias')); ?>
                    </li>
                    <li>
                        <?php echo $this->
                            Html->link('Registro notas', arraY('controller'=>'Principal', 'action'=>'profesores')); ?>
                    </li>
                   <li>
                        <?php echo $this->
                            Html->link('Horario', arraY('controller'=>'AlumnosParalelos', 'action'=>'horario')); ?>
                    </li>
                    <li>
                        <?php echo $this->
                            Html->link('Consultas', arraY('controller'=>'Profesores', 'action'=>'consultas')); ?>
                    </li>
                </ul>
            </li>           
                       
            <li>
            </li>
            <li>
                <?php 
                    echo $this->Html->link('<i class="icon-book icon-white"></i> Panel de Control', 
                        array('controller'=>'Docentes', 'action'=>'menudocentes'),
                        array('escape'=>false)
                    ); 
                ?>                
            </li>
        </ul>
    </div>
</nav>