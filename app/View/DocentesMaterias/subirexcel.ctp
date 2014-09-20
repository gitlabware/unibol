<div class="span4">
	<h3 class="heading">
		DOCENTES MATERIAS
	</h3>
	<?php echo $this->Form->create('DocentesMaterias', array('action' => 'guardaexcel', 'enctype' => 'multipart/form-data')); ?>
		<div class="formSep">
			<div class="row-fluid">
				<div class="span4">
					
						   
						
					
					<span class="input file">
                            
  			                  
                            <input type="file" name="data[Excel][excel]" id="special-input-1" value="" class="" multiple="" />
                            <input type="hidden" name="data[DocentesMateria][carrera_id]" value="<?php echo $idcarrera?>"/>
                            <input type="hidden" name="data[DocentesMateria][malla_id]" value="<?php echo $idmalla?>"/>
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
<!-- sidebar -->
<?php echo $this->
	element('sidebar/carreras'); ?>
	<!-- fin sidebar -->
	<?php //llamamos scripts tablas ?>
		<?php echo $this->
			element('jsformularios'); ?>