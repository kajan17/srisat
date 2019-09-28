<?php
include("database/db_conection.php");
$recharge_id=$_GET['update'];
$packageid=$_GET['pck'];

$view_users_query="SELECT * FROM recharge WHERE rechargeID ='$recharge_id'";//select query for viewing users.
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.
        $row=mysqli_fetch_array($run);
        $user_status=$row['status'];
        $user_reference=$row['rechargeID'];
 $month_query="SELECT * FROM package WHERE packageid ='$packageid'";//select query for viewing users.     
 		$run1=mysqli_query($dbcon,$month_query);//here run the sql query.
        $row=mysqli_fetch_array($run1);
        $month=$row['month'];
 

       $date = date("Y/m/d"); //existing date
        $d=date('Y-m-d', strtotime($date .'+'.$month.' month'));
            $recharged_date=date("Y-m-d");
if($user_status=='0'){

$update_query="UPDATE recharge SET recharged_date='$recharged_date', expireddate='$d',status='1' WHERE rechargeID='$recharge_id'";//update approval que
$run=mysqli_query($dbcon,$update_query);
if($run){
session_start();
$_SESSION['date']=$d;
$_SESSION['reference']=$user_reference;
include("sendmessage.php");
echo "<script>window.open('sundirect_rechargeinfo.php?recharge=user account has been recharged','_self')</script>";

	
}
else{

	echo "failure</br>";
	
}
}
?>