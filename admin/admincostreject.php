<?php
include("database/db_conection.php");
$update_id=$_GET['id'];

 $view_users_query="select * from customer,repaircostestimation WHERE customer.customerID=repaircostestimation.customerid && repaircostestimation.estimationID='$update_id'";//select query for viewing users.
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.
   $row=mysqli_fetch_array($run);
 session_start();
          $_SESSION['user']=$row['fullname'];

$sql = "DELETE FROM repaircostestimation WHERE estimationID ='".$update_id."'";
if(mysqli_query($dbcon, $sql)){
include('admincostrejecttotech.php');
echo "<script>window.open('repaircomplaient.php')</script>";

}
?>