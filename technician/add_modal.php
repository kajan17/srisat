<div class="modal fade" id="add_<?php echo $row['connectionID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
   
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                
                <center><h4 class="modal-title" id="myModalLabel">NEW CONNECTION JOBSTATUS</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
          
            <div class="modal-footer">
                
                    <a href="edit.php?connection=<?php echo $row['connectionID'];?>">
                     <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span>FINISHED</button>
                    </a>
                   
            </div>

        </div>
    </div>
</div>