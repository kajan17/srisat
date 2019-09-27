 <?php

include("database/db_conection.php");//make connection here
if(isset($_POST['register']))
{
    $nic=$_POST['nic'];
    $user_pass=$_POST['password'];
    $user_cpass=$_POST['cpassword'];
    $usertype="Customer";
    $nic_v = substr($nic,9,1);
    $uppercase = preg_match('@[A-Z]@', $user_pass);
    $lowercase = preg_match('@[a-z]@', $user_pass);
    $number    = preg_match('@[0-9]@', $user_pass);
    $specialChars = preg_match('@[^\w]@', $user_pass);
   
if((strlen($nic) <> 10) || is_numeric ($nic_v))  { 

  echo"<script>alert('NIC Number must be 10 characters and last must be alphabetic')</script>";
       echo"<script>window.open('register.php','_self')</script>";
exit();

} else if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($user_pass) < 8)
{

 echo"<script>alert('Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.')</script>";
       echo"<script>window.open('register.php','_self')</script>";
exit();

} else if($user_pass!=$user_cpass)
    {
        echo"<script>alert('Password and confirm password does not match')</script>";
        echo"<script>window.open('register.php','_self')</script>";
    exit();
    } else {
    

//here query check weather if user already registered so can't register again.
    $check_username_query="select * from user WHERE username='$nic'";
    $run_query=mysqli_query($dbcon,$check_username_query);

    if(mysqli_num_rows($run_query)>0)
    {
            echo "<script>alert('Username is already exist in our database, Please try another one!')</script>";
            echo"<script>window.open('register.php','_self')</script>";

    }
    else{
//insert the user into the database.
                 $user_cpass11=md5($user_cpass);
                 $check_username_query2="select * from tvconnection WHERE nicnumber ='$nic'";
                $run_query2=mysqli_query($dbcon,$check_username_query2);

                    if(mysqli_num_rows($run_query2)>0){
                        $insert_user="INSERT INTO user(username,password,usertype) VALUES('$nic','$user_cpass11','$usertype')";
                        mysqli_query($dbcon,$insert_user);
                       
                        session_start();
                         $_SESSION['username']=$nic;
        
                        echo"<script>window.open('register1.php','_self')</script>";
                        
                    }else{

                        $insert_user="INSERT INTO user(username,password,usertype) VALUES('$nic','$user_cpass11','$usertype')";
                        mysqli_query($dbcon,$insert_user);
                       
                        session_start();
                         $_SESSION['username']=$nic;
        
                        echo"<script>window.open('register1.php','_self')</script>";
                    }
        }
 

                
       
    
}
}

?>


