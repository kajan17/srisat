

<?php
	session_start();
	include_once('database/db_conection.php');

	if(isset($_POST['complaient']))
	{
	
		$customerid = $_POST['customerid'];
		$address = $_POST['address']; 
		$contactno = $_POST['contactno']; 
		$vcnumber1= $_POST['vcno'];
		$errorcode=$_POST['errorcode']; 

		             			
$sql1 = "INSERT INTO repaicomplaient(customerID,vcnumber,address,contactnumber,errorcode) VALUES('$customerid','$vcnumber1','$address','$contactno','$errorcode')";

		
		if($dbcon->query($sql1))
		{
			include('sendmessagenewconnect.php');
			$view_complaient_query="select * from repaicomplaient WHERE customerID='$customerid'";
        $run=mysqli_query($dbcon,$view_complaient_query);
        $row=mysqli_fetch_array($run);
        	$_SESSION ['reference1']=$row['complaientID'];	
			$_SESSION ['repaircomplaient']="Our Technician Will be contact within hours.Thank you! Your Reference Number-" ;
			header('location:index.php');
		 }
	}
	

?>
