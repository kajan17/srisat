<?php 
include_once('database/db_conection.php');
// code user nic availablity
if(!empty($_POST["admin_nic"])) {
	$nic= $_POST["admin_nic"];
	
	
$sql ="SELECT * FROM tvconnection, user WHERE tvconnection.nicnumber='$nic' || user.username='$nic'";
 $run_query=mysqli_query($dbcon,$sql);
$cnt=1;
if(mysqli_num_rows($run_query)>0)
{

echo "<span style='color:black'> Already You Have Connections. Are You Want To Get A New Connection? . </span>";

 echo "<script>$('#submit').prop('disabled',false);</script>";
 //echo "<script>window.open('oldcustomernewconnection.php',)</script>";
 
} else{
	
	
 
 echo "<script>window.open('newconnection.php')</script>";

}

}


?>
