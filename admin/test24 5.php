

<?php
	session_start();
	include_once('database/db_conection.php');

	if(isset($_POST['recharge']))
	{
	
		$vcnumber = $_POST['vcno'];
		$amount = $_POST['amount']; 
		$packageid = $_POST['packageID'];
		$sql = "INSERT INTO recharge (vcno,packageID,amount) VALUES ('$vcnumber', '$packageid','$amount')";
}
		if($dbcon->query($sql))
		{
			$_SESSION ['success'] = 'Your Package Willbe activated within hours. Thank you.';
		

		 }
	
	header('location:index.php');

?>

<?php
	session_start();
	include_once('database/db_conection.php');

	if(isset($_POST['pay']))
	{
	
		$installmethode = $_POST['installmethode'];
		$totalamount = $_POST['totalprice']; 
		$contactno = $_POST['contactno'];
		$sql = "SELECT * FROM satellitetv where tvname ='sundirect'";
                  $query = mysqli_query($dbcon, $sql);
                     $row = mysqli_fetch_assoc($query);
                     	$a=$row['tvID'];
             			
$sql1 = "INSERT INTO  tvconnection(tvID,contactnumber,installationmethode,amount) VALUES('$a','$contactno','$installmethode','$totalamount')";

		
		if($dbcon->query($sql1))
		{
			$_SESSION ['connection']="Our Technician Will be contact within hours. Thank you!" ;
		
			header('location:index3.php');
		 }
	}
	//header('location:index.php');

?>



 <input type="text" class="form-control" name="vcno" autofocus=""  value='<?php echo $row['cardnumber'];?>' readonly>

 <input type="text" class="form-control" name="contactno" autofocus=""  value='<?php echo $row['contactno']; ?>' readonly>