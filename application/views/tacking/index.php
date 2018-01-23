<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tacking Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tacking/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Tac Id</th>
						<th>App</th>
						<th>Time</th>
						<th>Date</th>
						<th>Status</th>
						<th>Total Time</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tacking as $t){ ?>
                    <tr>
						<td><?php echo $t['tac_id']; ?></td>
						<td><?php echo $t['app']; ?></td>
						<td><?php echo $t['time']; ?></td>
						<td><?php echo $t['date']; ?></td>
						<td><?php echo $t['status']; ?></td>
						<td><?php echo $t['Total time']; ?></td>
						<td>
                            <a href="<?php echo site_url('tacking/edit/'.$t['tac_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tacking/remove/'.$t['tac_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
