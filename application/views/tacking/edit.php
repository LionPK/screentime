<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tacking Edit</h3>
            </div>
			<?php echo form_open('tacking/edit/'.$tacking['tac_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="app" class="control-label">App</label>
						<div class="form-group">
							<input type="text" name="app" value="<?php echo ($this->input->post('app') ? $this->input->post('app') : $tacking['app']); ?>" class="form-control" id="app" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="time" class="control-label">Time</label>
						<div class="form-group">
							<input type="text" name="time" value="<?php echo ($this->input->post('time') ? $this->input->post('time') : $tacking['time']); ?>" class="form-control" id="time" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date" class="control-label">Date</label>
						<div class="form-group">
							<input type="text" name="date" value="<?php echo ($this->input->post('date') ? $this->input->post('date') : $tacking['date']); ?>" class="has-datepicker form-control" id="date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $tacking['status']); ?>" class="form-control" id="status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Total time" class="control-label">Total Time</label>
						<div class="form-group">
							<input type="text" name="Total time" value="<?php echo ($this->input->post('Total time') ? $this->input->post('Total time') : $tacking['Total time']); ?>" class="form-control" id="Total time" />
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