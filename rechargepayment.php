<?php
	session_start();
	include_once('database/db_conection.php');

	if(isset($_POST['recharge']))
	{
		$name = $_POST['name'];
		$contactno = $_POST['contactno'];
		$vcnumber = $_POST['vcno'];
		$amount = $_POST['amount']; 
		$packageid = $_POST['packageID'];
		$vendor = $_POST['vendor'];

		$sql = "INSERT INTO recharge (name,contactno,vendorname,vcno,packageID,amount) VALUES ('$name','$contactno','$vendor','$vcnumber', '$packageid','$amount')";
}
		if($dbcon->query($sql))
		{
			  $view_users_query="select * from recharge WHERE vcno='$vcnumber'";//select query for viewing users.
        			$run=mysqli_query($dbcon,$view_users_query);//here run the sql query.
   					$row=mysqli_fetch_array($run);
          			$_SESSION['user1']=$row['name'];
          			$_SESSION['reference']=$row['rechargeID'];
			echo $vendor;
							$_SESSION ['recharge'] = ' Your Package Willbe activated within hours. Thank you. Your Referenced Number-';
							
							$_SESSION['reference']=$row['rechargeID'];
							include("sendmessagerecharge.php");
							header('location:index.php');
			
		 }else{
		 
		 	echo "not iserted";
		 }
	
	

?>
