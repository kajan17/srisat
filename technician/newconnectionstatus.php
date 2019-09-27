<?php
include("database/db_conection.php");
$connection_id=$_GET['status'];

 $comments=$_GET['comment'];


$update_query="UPDATE tvconnection SET status='1' WHERE connectionID='$connection_id'";//update approval que
$run1=mysqli_query($dbcon,$update_query);
if($run1){
echo "<script>window.open('newconnections.php','_self')</script>";
}


?>