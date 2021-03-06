<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Import Factor Add</h3>
            </div>
            <?php echo form_open('import factor/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="sex" class="control-label">Sex</label>
						<div class="form-group">
							<input type="text" name="sex" value="<?php echo $this->input->post('sex'); ?>" class="form-control" id="sex" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="age" class="control-label">Age</label>
						<div class="form-group">
							<input type="text" name="age" value="<?php echo $this->input->post('age'); ?>" class="form-control" id="age" />
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