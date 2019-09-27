<?php
session_start();

?>
<?php

include_once('database/db_conection.php');      



if(isset($_POST['check_user']))
{
    $admin_nic=$_POST['admin_nic'];
    
	

    $check_admin="select * from tvconnection WHERE nicno='$admin_nic'";

 
    $run=mysqli_query($dbcon,$check_admin);

    if(mysqli_num_rows($run)>0)
    {
	 
     ?>
     <div class="modal fade" id="an" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-sm">
           <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 style="color:white" class="modal-title" id="myModalLabel">GET NEW CONNECTION</h4>
              </div>
              <div class="modal-body">
            
        
         <form role="form" method="post" action="">
                   <fieldset>
          
            
                            <div class="form-group">
                                <input class="form-control" placeholder="Enter Your NIC number" name="admin_nic" type="text" required>

              </div>
              
              
           
           </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-md btn-warning btn-block" name="check_user">Submit</button>
        
         <button type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal">Cancel</button>
           </form>
              </div>
            </div>
          </div>
        </div>


<?php     }
    else
    {
        echo $admin_nic;
        echo "<script>alert('Username or password is incorrect!')</script>";
		  echo "<script>window.open('index.php','_self')</script>";
		
		 exit();
		
    }
}
?>

