<?php
	session_start();
	include_once('database/db_conection.php');

	if(isset($_POST['pay']))
	{
		$nic=$_POST['nic'];
		
		  $view_users_query="select * from customer WHERE username='$nic'";//select query for viewing users.
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.
   		$row=mysqli_fetch_array($run);
        $customerid=$row['customerID'];
		$installmethode=$_POST['installmethode'];
		$totalamount = $_POST['totalprice']; 
		$vendor=$_POST['vendor'];
	  	$sql1="INSERT INTO carduser(customerID,vender,installationmethode,amount) VALUES ('$customerid','$vendor','$installmethode','$totalamount')";		
    	//$sql="INSERT INTO newconnectioncard(nicno,vendor,installationmethode,amount ) VALUES ('$nic','$vendor','$installmethode','$totalamount')";

				    	if(mysqli_query($dbcon,$sql1))
						{

							$_SESSION ['connectionrequest']="Our Technician Will be contact within hours. Thank you!";
							
								
										header('location:index.php');
										
						
									
							
						 }
							

    }
    
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