<?php
include("database/db_conection.php");
$update_id=$_GET['id'];

$update_query="UPDATE repaircostestimation SET adminapproval='1' WHERE estimationID='$update_id'";//update approval que
$run=mysqli_query($dbcon,$update_query);
if($run){
include('admincostapprovaltouser.php');
echo "<script>window.open('repaircomplaient.php')</script>";
}

?>