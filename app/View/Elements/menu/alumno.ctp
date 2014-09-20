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
