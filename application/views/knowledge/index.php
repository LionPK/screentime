
<html>  
 <head>  
   <title><?php echo $title; ?></title>  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
      <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
      <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
   <style>  
           body  
           {  
                margin:0;  
                padding:0;  
                background-color:#f1f1f1;  
           }  
           .box  
           {  
                width:900px;  
                padding:20px;  
                background-color:#fff;  
                border:1px solid #ccc;  
                border-radius:5px;  
                margin-top:10px;  
           }  
      </style>  
 </head>  
  <body>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">เกร็ดความรู้การดูแลสุขภาพตา</h3>
            	<div class="subhead">
                    <br> 
                    <button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-success btn-sm">Add</button>
                     <a role="<?php echo site_url('knowledge/add'); ?>" class="btn btn-success btn-sm" 
                     <i class="glyphicon glyphicon-refresh"></i>
                    โหลดหน้าจอใหม่
</a>
                  
                </div>
            </div>

            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ลำดับ</th>
						<th>ประเภทของเกร็ดความรู้</th>
						<th>ชื่อเกร็ดความรู้</th>
						<th>ข้อมูลเกร็ดความรู้</th>
                        <th>ไฟล์รูปภาพ</th>
						<th>ฟังก์ชั่น</th>
                    </tr>

                    <?php foreach($knowledge as $k){ ?>

                   
                    <tr>
                        

						<td><?php echo $k['Know_Id']; ?></td>
						<td><?php echo $k['type']; ?></td>
						<td><?php echo $k['name']; ?></td>
						<td><?php echo $k['text']; ?></td>
                        <td><?php echo $k['fileupload']; ?></td>
               

                


						<td>

                            <a href="<?php echo site_url('knowledge/edit/'.$k['Know_Id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> แก้ไข</a> 
                            <a href="<?php echo site_url('knowledge/remove/'.$k['Know_Id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> ลบ</a>
                        </td>
                    </tr>
                        
                    <?php } ?>
                </table>
                            
            </div>
        </div>
    </div>
</div>
</body>  
 </html> 
<?php echo form_open('knowledge/add'); ?>
<div id="userModal" class="modal fade">
<div class="box-body">  
      <div class="modal-dialog">  
           <form method="post" id="user_form">
                <div class="modal-content">  
                     <div class="modal-header">  
                          <button type="button" class="close" data-dismiss="modal">&times;</button>  
                          <h4 class="modal-title">เพิ่มข้อมูลเกร็ดความรู้การดูแลสุขภาพตา</h4>  
                     </div>  
                     <div class="modal-body">  
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
                            
                          <label for="name" class="control-label">ชื่อเกร็ดความรู้</label>  
                          <div class="form-group">
                          <input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" /> 
                          </div> 
                          <br />
                          <label for="text" class="control-label">ข้อมูลเกร็ดความรู้</label>
                        <div class="form-group">
                            <textarea name="text" class="form-control" id="text"><?php echo $this->input->post('text'); ?></textarea>
                        </div> 
                    
 
                        <form action="upload_file"  enctype="multipart/form-data" method="post" accept-charset="utf-8">
                          <label for="user_image" class="control-label">ไฟล์รูปภาพ</label>
                          <input type="file" name="user_image" value="<?php echo $this->input->post('user_image'); ?>" id="user_image" />  
                           
                     </div>  
                     <div class="modal-footer">  
                          <input type="hidden" name="action" class="btn btn-success" value="Add" /> 
                          <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />  
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                     </div>  
                     </form>
                </div>  
                 </form>
        