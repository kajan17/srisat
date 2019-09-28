<?php

include("database/db_conection.php");//make connection here
if(isset($_POST['register']))
{
    $username=$_POST['nic'];
    $full_name=$_POST['fname']; //strlen($name);
    $mnumber=$_POST['mnumber'];
    $area=$_POST['dsdivision'];
    $pass1=$_POST['password'];
    $usertype="Technician";
    $status='2';
    $pass=md5($pass1);
$check_tech_query="select * from user WHERE username='$username'";
    $run_query=mysqli_query($dbcon,$check_tech_query);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Username is already exist in our database, Please try another one!')</script>";

echo "<script>window.open('addtechnician.php','_self')</script>";
    }

    else{



 $insert_user1="INSERT INTO user(username,password,usertype,adminapproval) VALUES('$username','$pass','$usertype','$status')";
 mysqli_query($dbcon,$insert_user1);

$insert_user="INSERT INTO technician(username,fullname,mobilenumber,workingarea) VALUES('$username','$full_name','$mnumber','$area')";

 
if(mysqli_query($dbcon,$insert_user))
        {
            echo "<script>alert('New Technician Added At Your System.')</script>";
            echo "<script>window.open('addtechnician.php','_self')</script>";
            include("sendmessaget.php");

                        }


else{
    echo "<script>alert('Somethink Error Please Check it')</script>";
    echo "<script>window.open('addtechnician.php','_self')</script>"; 
}
}
}
 ?>
