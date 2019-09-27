<?php
include("database/db_conection.php");
$user_cardid=$_GET['update'];
session_start();
$view_users_query="SELECT * FROM carduser WHERE carduser_ID='$user_cardid'";//select query for viewing users.
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.
        $row=mysqli_fetch_array($run);
        $user_active_status=$row['activestatus'];
        //$user_username=$row['username'];

        
        
        
if($user_active_status=='1'){

$update_query="UPDATE carduser SET activestatus='2' WHERE carduser_ID='$user_cardid'";//update approval que
$run=mysqli_query($dbcon,$update_query);
if($run){
echo "<script>window.open('userapproval.php','_self')</script>";
}

}
elseif($user_active_status=='2'){
$update_query="UPDATE carduser SET activestatus='1' WHERE carduser_ID='$user_cardid'";//update approval que
$run=mysqli_query($dbcon,$update_query);
if($run){

echo "<script>window.open('userapproval.php','_self')</script>";}
}
else{
$update_query="UPDATE carduser SET activestatus='1' WHERE carduser_ID='$user_cardid'";//update approval que
$run=mysqli_query($dbcon,$update_query);
if($run){
	//$_SESSION['ACTIVATED']=$user_username;
echo "<script>window.open('userapproval.php','_self')</script>";
}

}
?>