<!DOCTYPE html>
<html lang="en" class="login_page">
    <head>
        <meta charset="utf-8">
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
           
            //main styles
            'style.css'
        ));
        ?>                    
    
        <!--[if lte IE 8]>
            <script src="js/ie/html5.js"></script>
			<script src="js/ie/respond.min.js"></script>
        <![endif]-->
		<?php 
            echo $this->Html->script(array(
                'jquery-1.8.3.min',
                'jquery.actual.min',
                'lib/validation/jquery.validate.min',
                'bootstrap/js/bootstrap.min'
            )); 
        ?>
    </head>
    <body>
        <?php echo $this->Session->flash(); ?>                                      
        <?php echo $this->fetch('content'); ?>
		        
        <script>
            $(document).ready(function(){
                
				//* boxes animation
				form_wrapper = $('.login_box');
				function boxHeight() {
					form_wrapper.animate({ marginTop : ( - ( form_wrapper.height() / 2) - 24) },400);	
				};
				form_wrapper.css({ marginTop : ( - ( form_wrapper.height() / 2) - 24) });
                $('.linkform a,.link_reg a').on('click',function(e){
					var target	= $(this).attr('href'),
						target_height = $(target).actual('height');
					$(form_wrapper).css({
						'height'		: form_wrapper.height()
					});	
					$(form_wrapper.find('form:visible')).fadeOut(400,function(){
						form_wrapper.stop().animate({
                            height	 : target_height,
							marginTop: ( - (target_height/2) - 24)
                        },500,function(){
                            $(target).fadeIn(400);
                            $('.links_btm .linkform').toggle();
							$(form_wrapper).css({
								'height'		: ''
							});	
                        });
					});
					e.preventDefault();
				});
				
				//* validation
				$('#login_form').validate({
					onkeyup: false,
					errorClass: 'error',
					validClass: 'valid',
					rules: {
						username: { required: true, minlength: 3 },
						password: { required: true, minlength: 3 }
					},
					highlight: function(element) {
						$(element).closest('div').addClass("f_error");
						setTimeout(function() {
							boxHeight()
						}, 200)
					},
					unhighlight: function(element) {
						$(element).closest('div').removeClass("f_error");
						setTimeout(function() {
							boxHeight()
						}, 200)
					},
					errorPlacement: function(error, element) {
						$(element).closest('div').append(error);
					}
				});
            });
        </script>
    </body>
</html>