<?php
include("database/db_conection.php");
$update_id=$_GET['update'];
session_start();
$view_users_query="SELECT * FROM user WHERE user_ID='$update_id'";//select query for viewing users.
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.
        $row=mysqli_fetch_array($run);
        $user_status=$row['status'];
        $user_username=$row['username'];

        
        
        
if($user_status=='1'){

$update_query="UPDATE user SET status='2' WHERE user_ID='$update_id'";//update approval que
$run=mysqli_query($dbcon,$update_query);
if($run){
echo "<script>window.open('userapproval.php')</script>";
}
}
elseif($user_status=='2'){
$update_query="UPDATE user SET status='1' WHERE user_ID='$update_id'";//update approval que
$run=mysqli_query($dbcon,$update_query);
if($run){

echo "<script>window.open('userapproval.php')</script>";}
}
else{
$update_query="UPDATE user SET status='1' WHERE user_ID='$update_id'";//update approval que
$run=mysqli_query($dbcon,$update_query);
if($run){
	$_SESSION['ACTIVATED']=$user_username;
echo "<script>window.open('userapproval.php','_self')</script>";
}

}
?>