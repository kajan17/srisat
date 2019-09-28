<?php
session_start();
	include_once('connection.php');

	if(isset($_POST['add1'])){
		$tvid = $_POST['tvid'];
		$pkname = $_POST['pkname'];
		$amount = $_POST['amount'];
		
		
		$sql = "INSERT INTO sundurect(tvID,packagename,amount) VALUES('$tvid', '$pkname','$amount')";
		
		if($conn->query($sql)){
		

	header('location:../managetv.php');

}}
?>