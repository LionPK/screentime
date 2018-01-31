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
							<option value="ข้อมูลสุขภาพโรคตา" <?if($_POST["ddlSelect"]=="ข้อมูลสุขภาพโรคตา"){echo"selected";}?>ข้อมูลสุขภาพโรคตา</option>
							<option value="ข้อมูลอาหาร" <?if($_POST["ddlSelect"]=="ข้อมูลอาหาร"){echo"selected";}?>ข้อมูลอาหาร</option>
							<option value="ข้อมูลแพทย์" <?if($_POST["ddlSelect"]=="ข้อมูลแพทย์"){echo"selected";}?>ข้อมูลแพทย์</option>
							<option value="ข้อมูลด้านอื่นๆ" <?if($_POST["ddlSelect"]=="ข้อมูลด้านอื่นๆ"){echo"selected";}?>ข้อมูลด้านอื่นๆ</option>
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
						<label for="user_image" class="control-label">ไฟล์รูปภาพ</label>
						<div class="form-group">
							<input type="file" name="user_image" value="<?php echo $this->input->post('user_image'); ?>" class="form-control" id="user_image" />
							<span class="user_uploaded_image"></span>
							
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
          		<input type="hidden" name="user_id" id="user_id" />
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>

		
<?php echo form_close(); ?>

      </div>  
 </div>  
 
 
<script type="text/javascript" language="javascript" >  
 $(document).ready(function(){  
      var dataTable = $('#user_data').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'crud/fetch_user'; ?>",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                },  
           ],  
      });  
      $(document).on('submit', '#user_form', function(event){  
           event.preventDefault();  
           var typee = $('#type').val();
           var namee = $('#name').val();  
           var textt = $('#text').val();  
           var extension = $('#user_image').val().split('.').pop().toLowerCase();  
           if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
           {  
                alert("Invalid Image File");  
                $('#user_image').val('');  
                return false;  
           }  
           if(typee != '' && namee != '' && textt != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url() . 'crud/user_action'?>",  
                     method:'POST',  
                     data:new FormData(this),  
                     contentType:false,  
                     processData:false,  
                     success:function(data)  
                     {  
                          alert(data);  
                          $('#user_form')[0].reset();  
                          $('#userModal').modal('hide');  
                          dataTable.ajax.reload();  
                     }  
                });  
           }  
           else  
           {  
                alert("Bother Fields are Required");  
           }  
      });  
 });  
 </script>  

