<?php
session_start();
	include_once('connection.php');

	if(isset($_POST['add1'])){
		$tvid = $_POST['tvid'];
		$pkname = $_POST['pkname'];
		$amount = $_POST['amount'];
		
		
		$sql = "INSERT INTO package(packagename,amount,tvid) VALUES('$pkname','$amount','$tvid')";
		
		if($conn->query($sql)){
		$_SESSION['success'] = 'Satellite TV Package Added successfully';

	header('location:../managetv.php');

}}
?>