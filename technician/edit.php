<?php
	session_start();
	include_once('database/db_conection.php');

	if($_GET['connection']){
		$connectionID = $_GET['connection'];
		$status = '1';
	
		
		$sql = "UPDATE tvconnection SET status = '$status' WHERE connectionID = '$connectionID'";

		//use for MySQLi OOP
		if($dbcon->query($sql)){
			$_SESSION['success'] = 'Work Finished Sussefully';

	header('location:newconnections.php');
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating Work Status';

	header('location:newconnections.php');
		}
	}
	
if($_GET['connection1']){
		$connectionID = $_GET['connection1'];
		$status = '2';
	
		$sql = "UPDATE tvconnection SET status = '$status' WHERE connectionID = '$connectionID'";

		//use for MySQLi OOP
		if($dbcon->query($sql)){
			$_SESSION['success1'] = 'Work partially finished';

	header('location:newconnections.php');
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating Work Status';

	header('location:newconnections.php');
		}
	}
?>