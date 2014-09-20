<div class="span4">
<div class="modal-header">
    <button class="close" data-dismiss="modal">x</button>
    <h3>REGISTRO DE NOTAS</h3>
</div>
	<?php echo $this->Form->create('Alumnosnotas', array('action' => 'guardaexcel', 'enctype' => 'multipart/form-data')); ?>
		<div class="formSep">
			<div class="row-fluid">
				<div class="span4">
					
						Selexionar Excel:   
						
					
					<span class="input file">
                            <span class="file-text"></span>
                            
                            <input type="file" name="data[Excel][excel]" id="special-input-1" value="" class="file withClearFunctions" multiple="" />
                            <input type="hidden" name="data[Alumnosnota][carrera_id]" value="<?php echo $idcarrera?>"/>
                            <input type="hidden" name="data[Alumnosnota][malla_id]" value="<?php echo $idmalla?>"/>
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