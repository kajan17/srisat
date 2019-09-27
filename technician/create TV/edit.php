<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$tvid = $_POST['tvid'];
		$tvname = $_POST['tvname'];
		$amount = $_POST['amount'];
		
		$sql = "UPDATE satellitetv SET tvname = '$tvname', price = '$amount' WHERE tvID = '$tvid'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Satellite TV updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating Satellite TV';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	header('location:../managetv.php');

?>