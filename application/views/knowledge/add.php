<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">เพิ่มข้อมูลเกร็ดความรู้การดูแลสุขภาพตา</h3>
            </div>
            <?php echo form_open('knowledge/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="type" class="control-label">ประเภทของเกร็ดความรู้</label>
						<div class="form-group">
							<select name="type" id="type" value="<?php echo $this->input->post('type'); ?>" class="form-control" />
							<option>- เลือก -</option> 
							<option value="ข้อมูลสุขภาพโรคตา" <?if($_POST["ddlSelect"]=="ข้อมูลสุขภาพโรคตา"){echo"selected";}?>> ข้อมูลสุขภาพโรคตา</option>
							<option value="ข้อมูลอาหาร" <?if($_POST["ddlSelect"]=="ข้อมูลอาหาร"){echo"selected";}?>> ข้อมูลอาหาร</option>
							<option value="ข้อมูลแพทย์" <?if($_POST["ddlSelect"]=="ข้อมูลแพทย์"){echo"selected";}?>> ข้อมูลแพทย์</option>
							<option value="ข้อมูลด้านอื่นๆ" <?if($_POST["ddlSelect"]=="ข้อมูลด้านอื่นๆ"){echo"selected";}?>> ข้อมูลด้านอื่นๆ</option>
						</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="name" class="control-label">ชื่อเกร็ดความรู้</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="text" class="control-label">ข้อมูลเกร็ดความรู้</label>
						<div class="form-group">
							<textarea name="text" class="form-control" id="text"><?php echo $this->input->post('text'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fileupload" class="control-label">ไฟล์รูปภาพ</label>
						<div class="form-group">
							<input type="file" name="fileupload" value="<?php echo $this->input->post('fileupload'); ?>" class="form-control" id="fileupload" />
							
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