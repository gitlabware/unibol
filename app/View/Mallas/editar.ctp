<div class="span12">
	<h3 class="heading">
		IGENERAR NUEVA MALLA
	</h3>
	<?php echo $this->
		Form->create('Malla'); ?>
		<div class="formSep">
			<div class="row-fluid">
				<div class="span4">
					<label>
						Inserte el Ano: 
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->
						Form->text('ano', array('placeholder'=>'Inserte el año','class' => 'span12', 'required'));?>
				</div>
				
			</div>
            <div class="row-fluid">
				<div class="span4">
					<label>
						Inserte el Periodo:
						<span class="f_req">
							*
						</span>
					</label>
					<?php echo $this->
						Form->select('periodo_id',$periodos, array('class' => 'span12', 'required'));?>
				</div>
				
			</div>
            
			
		</div>
		<div class="form-actions">
			<button class="btn btn-success" type="submit">
				Editar Malla
			</button>
		</div>
		</form>
</div>
<!-- sidebar -->
<?php echo $this->
	element('sidebar/mallas'); ?>
	<!-- fin sidebar -->
	<?php //llamamos scripts tablas ?>
		<?php echo $this->
			element('jsformularios'); ?>