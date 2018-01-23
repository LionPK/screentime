<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Import Factor Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('import factor/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Factor Id</th>
						<th>Sex</th>
						<th>Age</th>
						<th>Text</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($import factor as $i){ ?>
                    <tr>
						<td><?php echo $i['Factor_id']; ?></td>
						<td><?php echo $i['sex']; ?></td>
						<td><?php echo $i['age']; ?></td>
						<td><?php echo $i['text']; ?></td>
						<td>
                            <a href="<?php echo site_url('import factor/edit/'.$i['Factor_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('import factor/remove/'.$i['Factor_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
