<?php
	session_start();
	include_once('database/db_conection.php');

	
    if(isset($_POST['pay2']))
	{
	
		$servicecharge=$_POST['servicecharge'];
		$lmpcharge=$_POST['lmpcharge'];
		$receivercharge=$_POST['receivercharge'];
		$cablecharge=$_POST['cablecharge'];
		$complaientid=$_POST['complaientid'];
		$technicianid = $_POST['technicianid'];
		
		$check_username_query="select * from repaircostestimation WHERE repaircomplaientid='$complaientid'";
    $run_query=mysqli_query($dbcon,$check_username_query);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Already Make Cost Estimation!')</script>";
 echo"<script>window.open('complaients.php','_self')</script>";

    } else{
		$view_customerid="select * from repaicomplaient WHERE complaientID='$complaientid'";//select query for viewing users.
        $run=mysqli_query($dbcon,$view_customerid);//here run the sql query.
   		$row=mysqli_fetch_array($run);
          $customerid=$row['customerID'];
	  			
    	
    	$sql="INSERT INTO repaircostestimation(repaircomplaientid,customerid,technicianid,servicecharge,lmpchange,receivercharge, 	cablecharge,technicianestimation) VALUES ('$complaientid','$customerid','$technicianid','$servicecharge','$lmpcharge','$receivercharge','$cablecharge','1')";
				    	if(mysqli_query($dbcon,$sql))
						{

							//$_SESSION ['connectionrequest1']="Our Technician Will be contact within hours. THANKYOU!";
							
								
										header('location:complaients.php');
										
						
									
							
						 }
						 else{

						 	echo $servicecharge;
						 }
			}				

    }

    