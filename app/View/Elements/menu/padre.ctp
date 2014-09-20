<nav>
    <div class="nav-collapse">
        <ul class="nav">
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-list-alt icon-white"></i>Acciones <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <?php echo $this->
                            Html->link('Alumnos', arraY('controller'=>'principal', 'action'=>'padres')); ?>
                    </li>
                    <li>
                        <?php echo $this->
                            Html->link('Horarios', arraY('controller'=>'padres', 'action'=>'verhorarios')); ?>
                    </li>
                </ul>
            </li>           
                       
            <li>
            </li>
            <li>
                <?php 
                    echo $this->Html->link('<i class="icon-book icon-white"></i> Panel de Control', 
                        array('controller'=>'padres', 'action'=>'panel'),
                        array('escape'=>false)
                    ); 
                ?>                
            </li>
        </ul>
    </div>
</nav>