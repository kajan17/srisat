<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$connectionid = $_POST['connectionid'];
		$vcnumber = $_POST['vcnumber'];
		
		
		$sql = "UPDATE tvconnection SET vcnumber = '$vcnumber' WHERE connectionID = '$connectionid'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	header('location:../managesundirectnewconnections.php');

?>