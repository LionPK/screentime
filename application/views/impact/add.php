<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Impact Add</h3>
            </div>
            <?php echo form_open('impact/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="Factor_Id" class="control-label">Factor Id</label>
						<div class="form-group">
							<input type="text" name="Factor_Id" value="<?php echo $this->input->post('Factor_Id'); ?>" class="form-control" id="Factor_Id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="trac_id" class="control-label">Trac Id</label>
						<div class="form-group">
							<input type="text" name="trac_id" value="<?php echo $this->input->post('trac_id'); ?>" class="form-control" id="trac_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="totallmp" class="control-label">Totallmp</label>
						<div class="form-group">
							<input type="text" name="totallmp" value="<?php echo $this->input->post('totallmp'); ?>" class="form-control" id="totallmp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date" class="control-label">Date</label>
						<div class="form-group">
							<input type="text" name="date" value="<?php echo $this->input->post('date'); ?>" class="has-datepicker form-control" id="date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="text" class="control-label">Text</label>
						<div class="form-group">
							<textarea name="text" class="form-control" id="text"><?php echo $this->input->post('text'); ?></textarea>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>