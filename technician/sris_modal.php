<!-- Edit -->
<div class="modal fade" id="sris_<?php echo $connectionid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                
                <center><h4 class="modal-title" id="myModalLabel">NEW CONNECTION JOBSTATUS</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
          
            <div class="modal-footer">
                
               
                <a href="regnewconnectionpartialmodel.php?update=<?php echo $connectionid; ?>">
                 <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span>FINISHED</button></a>
                 <a href="regnewconnectionpartialfinish.php?connection1=<?php echo $connectionid;?>">
                <button type="submit" name="edit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Partially Finished</button></a>
              
			
            </div>

        </div>
    </div>
</div>



<div class="modal fade" id="xx_<?php echo $row['connectionID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
   
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