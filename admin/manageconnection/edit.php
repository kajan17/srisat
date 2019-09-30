<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['nic'];
		$vcnumber = $_POST['vcnumber'];
		//$status = $_POST['status'];
		
		$sql = "UPDATE carduser SET cardnumber = '$vcnumber' WHERE carduser_ID = '$id'";


		//use for MySQLi OOP
		//if($conn->query($sql)){
			 //echo "<script>alert('Viewing Card Inserted successfully')</script>";
			 //header('location:../managesundirectnewconnections.php');
		
		///////////////

		//use for MySQLi Procedural
		 if(mysqli_query($conn, $sql)){
			echo "<script>alert('Viewing Card Inserted successfully')</script>";
			header('location:../managesundirectnewconnections.php');
		}
		
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	

?>