<?php
include("database/db_conection.php");
$update_id=$_GET['id'];
$date=date("Y-m-d");
$update_query="UPDATE repaircostestimation SET customerapproval='1', customerapproveddate='$date' WHERE estimationID='$update_id'";//update approval que
$run=mysqli_query($dbcon,$update_query);
if($run){
//include('admincostapprovaltouser.php');
echo "<script>window.open('customercostapproval.php','_self')</script>";
}

?>