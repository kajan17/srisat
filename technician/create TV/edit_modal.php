<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['tvID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit A Satellite TV</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="create TV/edit.php">
				<input type="hidden" class="form-control" name="tvid" value="<?php echo $row['tvID']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Satellite TV Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="tvname" value="<?php echo $row['tvname']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Amount:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="amount" value="<?php echo $row['price']; ?>">
					</div>
				</div>
				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['tvID'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Member</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['tvname']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="create TV/delete.php?id=<?php echo $row['tvID']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>

<!-- Addpackage -->
<div class="modal fade" id="Addpackage_<?php echo $row['tvID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add a Package</h4></center>
            </div>
            <div class="modal-body">
            <div class="container-fluid">
            <form method="POST" action="create TV/addpack.php">
                <input type="text" class="form-control" name="tvid" value="<?php echo $row['tvID']; ?>">
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Satellite TV Name:</label>
                    </div>
                    <div class="col-sm-10">
                        <label class="control-label modal-label"><?php echo $row['tvname']; ?></label>
                        
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Package Name:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="pkname">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">Amount:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="amount">
                    </div>
                </div>
                
            </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add1" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
            </form>
            </div>

        </div>
    </div>
</div>