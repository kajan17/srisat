<?php
	session_start();
	include_once('database/db_conection.php');

	if($_GET['connection']){
		$complaientid = $_GET['connection'];
		$status = '1';
	
		
		$sql = "UPDATE repaicomplaient SET finishstatus = '1' WHERE complaientID = '$complaientid'";

		//use for MySQLi OOP
		if($dbcon->query($sql)){
			$_SESSION['success'] = 'Work Finished Sussefully';

	header('location:complaients.php');
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating Work Status';

	header('location:complaients.php');
		}
	}
	

?>