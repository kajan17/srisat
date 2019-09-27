<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['Recharge'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		
		$sql = "INSERT INTO recharge(vcno,packageID,amount) VALUES ('$firstname', '$lastname')";

		//use for MySQLi OOP
		if($conn->query($sql)){
		

	header('location:sundirectrechargefinal.php');

}}
?>