 <?php

include("database/db_conection.php");//make connection here
if(isset($_POST['register']))
{
    $email=$_POST['username'];
    $user_pass1=$_POST['password'];
    $user_pass=md5($user_pass1);


//insert the user into the database.
 $update_tech="UPDATE user SET password='$user_pass', adminapproval='1' WHERE username='$email'";



    if(mysqli_query($dbcon,$update_tech))
        {
        session_start();
         $_SESSION['adminm']=$email;
         
         echo"<script>window.open('index.php','_self')</script>";}
       
    

}

?>

