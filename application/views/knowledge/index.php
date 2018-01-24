<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">เกร็ดความรู้การดูแลสุขภาพตา</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('knowledge/add'); ?>" class="btn btn-success btn-sm">Add</a> 
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
                            <a href="<?php echo site_url('knowledge/edit/'.$k['Know_Id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('knowledge/remove/'.$k['Know_Id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
