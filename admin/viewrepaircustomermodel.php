<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['customerID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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