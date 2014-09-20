<script type="text/javascript">
    $(document).ready(function() {
        $('#grid').dataTable({
            "bJQueryUI": false,
            "bAutoWidth": false,
            "sPaginationType": "full_numbers",
            "sDom": '<"H"fl>t<"F"ip>',
            "aaSorting": [[0, "desc"]]
        });
    });
</script>
<?php foreach ($carreras as $t): ?>
    <style>
        #element_to_pop_up_<?php echo $t['Carrera']['id']; ?> { 
            background-color:#fff;
            box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.298);
            border-radius:5px;
            color:#000;
            display:none;
            padding:20px;
            min-width:300px;
            min-height: 180px;        
        }
        .b-close{
            cursor:pointer;
            position:absolute;
            right:10px;
            top:5px;            
        }    
    </style>
<?php endforeach; ?>
<div class="row-fluid">
    <div class="span12">
        <h3 class="heading">Carreras - <?php echo $nmalla;?></h3> 
        <table class="table table-striped table-bordered dTableR" id="dt_a">
            <thead>
                <tr>                                          
                    <th>Nro</th>
                    <th>Carrera</th>
                    
                    <th>Accion</th> 
                     
                </tr>
            </thead>
             <?php $i=1;?>
            <tbody>
                <?php foreach ($carreras as $carre): ?>
                    <?php $idCar = $carre['Carrera']['id']; ?>
                    
                    
                    
                    <div id="element_to_pop_up_<?php echo $carre['Carrera']['id'];?>">
                            <div class="span4">
                            	<h3 class="heading">
                            		DOCENTES MATERIAS
                            	</h3>
                            	<?php echo $this->Form->create('DocentesMaterias', array('action' => 'guardaexcel',$carre['Carrera']['id'],$idm, 'enctype' => 'multipart/form-data')); ?>
                            		<div class="formSep">
                            			<div class="row-fluid">
                            				<div class="span4">
                            					
                            						   
                            						
                            					
                            					<span class="input file">
                                                        
                              			                  
                                                        <input type="file" name="data[Excel][excel]" id="special-input-1" value="" class="" multiple="" />
                                                </span>
                            				</div>
                            				
                            			</div>
                            			
                            		</div>
                            		<div class="form-actions">
                            			<button class="btn btn-success" type="submit">
                            				Guardar Excel
                            			</button>
                            		</div>
                            		
                            </div>
                    </div>
                    
                    
                    
                    <tr>
                        <td><?php echo $i; $i++;?></td>                                                  
                        <td><?php echo $carre['Carrera']['nombre']; ?></td>
                        
                        <td>
                           
                            <?php 
                                echo $this->Html->image("iconos/profe.png", array(
                                    "title" => "Docentes Materias",
                                    'url' => array('action' => 'lista', $carre['Carrera']['id'],$idm)
                                ));
                            ?>                              
                            
                            
                            <?php 
                                echo $this->Html->image("iconos/plan.png", array(
                                    "title" => "VER ",
                                    'url' => array('controller'=>'DocentesMaterias','action' => 'listadematerias',$carre['Carrera']['id'],$idm)
                                ));
                            ?>                          
                            <a id="btAjaxGeneraHr_<?php echo $carre['Carrera']['id'];?>" href="element_to_pop_up_<?php echo $carre['Carrera']['id'];?>"></a>
                            
                            <script>
                            $(document).ready(function() {
                                // Binding a click event
                                // From jQuery v.1.7.0 use .on() instead of .bind()
                                $('#btAjaxGeneraHr_<?php echo $carre['Carrera']['id']; ?>').bind('click', function(e) {

                                    // Triggering bPopup when click event is fired
                                    $('#element_to_pop_up_<?php echo $carre['Carrera']['id']; ?>').bPopup({
                                        fadeSpeed: 'slow', //can be a string ('slow'/'fast') or int
                                        followSpeed: 1500, //can be a string ('slow'/'fast') or int 
                                        width: 20,
                                        //$('#element_to_pop_up_<?php //echo $t['Movimientosvalde']['id'];    ?>').bPopup()
                                    });
                                });
                            });
                        </script>
                             
                        </td>
                    </tr>
                    <?php
                endforeach;
                ?>
            </tbody>
               
        </table> 
             <?php // echo $this->Html->link('INSERTAR',array('action'=>'insertar'));?> 
                     
    </div>   
</div>
<!-- sidebar -->
<?php echo $this->element('sidebar/mallas'); ?>
<!-- fin sidebar -->
<?php echo $this->element('jstablas'); ?>