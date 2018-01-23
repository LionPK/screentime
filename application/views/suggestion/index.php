<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Suggestion Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('suggestion/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Sug Id</th>
						<th>Imp Id</th>
						<th>Date</th>
						<th>Text</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($suggestion as $s){ ?>
                    <tr>
						<td><?php echo $s['Sug_Id']; ?></td>
						<td><?php echo $s['Imp_id']; ?></td>
						<td><?php echo $s['date']; ?></td>
						<td><?php echo $s['text']; ?></td>
						<td>
                            <a href="<?php echo site_url('suggestion/edit/'.$s['Sug_Id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('suggestion/remove/'.$s['Sug_Id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
