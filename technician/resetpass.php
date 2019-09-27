 <?php

include("database/db_conection.php");//make connection here
if(isset($_POST['register']))
{
    $email=$_POST['email'];
    $user_pass1=$_POST['password'];
    $user_cpass=$_POST['cpassword'];
$user_pass=md5($user_pass1);

				if($user_cpass==$user_pass1){
				 $update_tech="UPDATE user SET password='$user_pass', adminapproval='1' WHERE username='$email'";

						mysqli_query($dbcon,$update_tech);

								    
								        session_start();
								         $_SESSION['login']=$email;
								         
								         echo"<script>window.open('index.php','_self')</script>";
				     }
				       
				    


				     else {
				    	session_start();
				    	 $_SESSION['login']=$email;
				    	 echo "<script>alert('Password and cofirm password must be match')</script>";
				            echo "<script>window.open(reset-password.php','_self')</script>";


				    }
	
	}

?>

