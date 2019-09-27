<?php
	session_start();
	include_once('database/db_conection.php');

	
    if(isset($_POST['pay2']))
	{
	
		
		
		$nic=$_POST['nic'];
		$fname=$_POST['fname'];
		$dsdivision=$_POST['dsdivision'];
		$gsdivision=$_POST['gsdivision'];
		$installmethode=$_POST['installmethode'];
		$totalamount = $_POST['totalprice']; 
		$vendor=$_POST['vendor'];
		$address=$_POST['address'];
		$landno=$_POST['landno'];
		$mobileno=$_POST['mobileno'];
	  			
    	$sql="INSERT INTO newconnectioncard(nicno,vendor,installationmethode,amount ) VALUES ('$nic','$vendor','$installmethode','$totalamount')";
    	$sql1="INSERT INTO tvconnection(nicnumber,fullname,dsdivision,gsdivision,installationaddress,landlinenumber,contactno) VALUES ('$nic','$fname','$dsdivision','$gsdivision','$address','$landno','$mobileno')";
				    	if(mysqli_query($dbcon,$sql)&&mysqli_query($dbcon,$sql1))
						{

							$_SESSION ['connectionrequest1']="Our Technician Will be contact within hours. THANKYOU!";
							
								
										header('location:index.php');
										
						
									
							
						 }
							

    }
?>