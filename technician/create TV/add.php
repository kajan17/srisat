<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		
		$sql = "INSERT INTO satellitetv (tvname, price) VALUES ('$firstname', '$lastname')";

		//use for MySQLi OOP
		if($conn->query($sql)){
		

			header('location:../managetv.php');

		}		
	}
?>