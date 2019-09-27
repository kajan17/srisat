	if($installmethode="srisat"){
							echo $installmethode;
						include('sendmessagenewconnect.php');



						else{


	$sql1 = "INSERT INTO  tvconnection (nicno,fullname,dsdivision,gsdivision,installationaddress,landlinenumber,	mobilenumber,installationmethode,amount) VALUES('$nic','$fname','$dsdivision','$gsdivision','$address','$landno','$mobileno','$installmethode','$totalamount')";
	$sql2 = "INSERT INTO  newconnectioncard (nicno,vendor) VALUES('$nic','$vendor')";
	if(mysqli_query($dbcon,$sql1)&&mysqli_query($dbcon,$sql2))
		{
			$_SESSION ['connection']="Our Technician Will be contact within hours. Thank you!" ;
			
					if($installmethode="srisat"){

						include('sendmessagenewconnect.php');
						}
		
					header('location:index.php');
			
		 }
		 

}