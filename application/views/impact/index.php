<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Impact Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('impact/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Imp Id</th>
						<th>Factor Id</th>
						<th>Trac Id</th>
						<th>Totallmp</th>
						<th>Date</th>
						<th>Text</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($impact as $i){ ?>
                    <tr>
						<td><?php echo $i['Imp_id']; ?></td>
						<td><?php echo $i['Factor_Id']; ?></td>
						<td><?php echo $i['trac_id']; ?></td>
						<td><?php echo $i['totallmp']; ?></td>
						<td><?php echo $i['date']; ?></td>
						<td><?php echo $i['text']; ?></td>
						<td>
                            <a href="<?php echo site_url('impact/edit/'.$i['Imp_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('impact/remove/'.$i['Imp_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
