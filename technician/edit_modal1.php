<div class="modal fade" id="edit_<?php echo $complaientid; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                
                <center><h4 class="modal-title" id="myModalLabel">NEW CONNECTION JOBSTATUS</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
          
            <div class="modal-footer">
                
                <a href="edit1.php?connection=<?php echo $complaientid;?>">
                 <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span>FINISHED</button></a>
               
             
                <a href="repaircomplaientspartialfinish.php?connection1=<?php echo $complaientid;?>">
                 <button type="submit" name="edit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span>PARTIALY FINISHED</button></a>
            </div>

        </div>
    </div>
</div>
<?php
               