<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>UNIBOL: <?php echo $title_for_layout; ?></title>
		
        <?php
        echo $this->Html->css(array(
            //Bootstrap framework
            'bootstrap/css/bootstrap.min',
            'bootstrap/css/bootstrap-responsive.min',
            //gebo blue theme
            'blue',
            //breadcrumbs
            'lib/jBreadcrumbs/css/BreadCrumb',
            //tooltips
            'lib/qtip2/jquery.qtip.min',
            //notifications
            'lib/sticky/sticky',
            //splashy icons
            'img/splashy/splashy',
            //colorbox
            'lib/colorbox/colorbox',
            //smoke_js
            'lib/smoke/themes/gebo',
            //forms
            'lib/datepicker/datepicker',
            'lib/uniform/Aristo/uniform.aristo',
            'lib/multiselect/css/multi-select',
            'lib/chosen/chosen',
            //main styles
            'style.css'
        ));
        ?>    
        <?php echo $this->Html->script('jquery-1.8.3.min'); ?>
        <?php
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
        <!-- Favicon -->
		
        <link rel="shortcut icon" href="favicon.ico" />

        <!--[if lte IE 8]>
            <link rel="stylesheet" href="css/ie.css" />
            <script src="js/ie/html5.js"></script>
            <script src="js/ie/respond.min.js"></script>
        <![endif]-->

        <script>
            //* hide all elements & show preloader
            document.documentElement.className += 'js';
        </script>
    </head>
    <body>
        
        <div id="loading_layer" style="display:none">            
            <?php echo $this->Html->image('ajax_loader.gif'); ?>
        </div>        

        <div id="maincontainer" class="clearfix">
            <!-- header -->
            <header>
                <div class="navbar navbar-fixed-top">
                    <div class="navbar-inner">
                        <div class="container-fluid">
                            <a class="brand" href="#"><i class="icon-home icon-white"></i> UNIBOL</a>
                            <ul class="nav user_menu pull-right">
                                <li class="divider-vertical hidden-phone hidden-tablet"></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <?php
                                    echo $this->Session->read('Auth.User.Group.name').': '. 
                                         $this->Session->read('Auth.User.nombre_completo').
                                            ' '.$this->Session->read('Auth.User.Profesore.ap_paterno');
                                            //$idUsuario =  $this->Auth->user('id');    
                                            //debug($this->Auth);                                         
                                    ?> 
                                    <b class="caret"></b></a>
                                    <ul class="dropdown-menu">                                  
                                        <li class="divider"></li>
                                        <li>
                                            <?php echo $this->Html->link('Salir', array('controller'=>'Users', 'action'=>'salir')); ?>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <a data-target=".nav-collapse" data-toggle="collapse" class="btn_menu">
                                <span class="icon-align-justify icon-white"></span>
                            </a>
                            <!-- menu navegacion -->
                            <?php                                
                               $idGrupo = $this->Session->read('Auth.User.group_id');
                               switch ($idGrupo)
                                {
                                    case 1:
                                       echo $this->element('menu/admin');
                                        break;
                                    case 2:
                                        echo $this->element('menu/profesor');
                                        break;
                                    case 3:
                                        echo $this->element('menu/alumno');
                                        break;
                                    case 4:
                                        echo $this->element('menu/padre');
                                        break;
                                }                                                                              
                            ?>                    
                        </div>
                    </div>
                </div>
                <div class="modal hide fade" id="myMail">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">×</button>
                        <h3>New messages</h3>
                    </div>                                       
                </div>
                <div class="modal hide fade" id="myTasks">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">×</button>
                        <h3>New Tasks</h3>
                    </div>                    
                    <div class="modal-footer">
                        <a href="javascript:void(0)" class="btn">Go to task manager</a>
                    </div>
                </div>
            </header>

            <!-- main content -->
            <div id="contentwrapper">
                <div class="main_content">                    
                    <?php echo $this->Session->flash(); ?>                                      
                    <?php echo $this->fetch('content'); ?>
                </div>
            </div>
    <?php //echo $this->element('sql_dump'); ?>
            <!-- fin main content -->          

            <?php
            echo $this->Html->script(array(
                'jquery-1.8.3.min',
                //smart resize event
                'jquery.debouncedresize.min',
                //hidden elements width/height
                'jquery.actual.min',
                //js cookie plugin
                'jquery.cookie.min',
                //main bootstrap js
                'bootstrap/js/bootstrap.min',
                //tooltips
                'lib/qtip2/jquery.qtip.min',
                //jBreadcrumbs
                'lib/jBreadcrumbs/js/jquery.jBreadCrumb.1.1.min',
                //sticky messages
                'lib/sticky/sticky.min',
                //fix for ios orientation change
                'ios-orientationchange-fix',
                //scrollbar
                'lib/antiscroll/antiscroll',
                'lib/antiscroll/jquery-mousewheel',
                //lightbox
                'lib/colorbox/jquery.colorbox.min',
                //common functions
                'gebo_common',
                //smoke_js
                'lib/smoke/smoke',
                //notifications functions
                'gebo_notifications',
                //funcion impresion
                'print'
                //ajax
                
            ));
            ?> 
                                                    
            <script>
                $(document).ready(function() {
                    //* show all elements & remove preloader
                    setTimeout('$("html").removeClass("js")',600);
                });
            </script>
        </div>
        
    </body>
</html>