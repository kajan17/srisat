<?php

include("database/db_conection.php");

if(isset($_POST['login']))
{
    

    $user_email = mysqli_real_escape_string($dbcon, $_POST['email']);
    $user_pass1 = mysqli_real_escape_string($dbcon, $_POST['pass']);
  $user_pass=md5($user_pass1);
    $check_user="select * from user,customer,carduser WHERE user.username='$user_email'AND user.password='$user_pass' AND user.usertype='Customer' AND carduser.customerID=customer.customerID AND carduser.activestatus='1' AND customer.mobileconfirmation='2'";
     $check_user1="select * from user,customer WHERE user.username='$user_email'AND user.password='$user_pass' AND user.usertype='Customer' AND user.adminapproval='0' AND customer.mobileconfirmation='2' AND customer.username =user.username";
    $check_user2="select * from user WHERE username='$user_email'AND password='$user_pass' AND adminapproval='1' AND usertype='Technician'";
    $check_user21="select * from user WHERE username='$user_email'AND password='$user_pass' AND adminapproval='2' AND usertype='Technician'";
    $check_user3="select * from user WHERE username='$user_email'AND password='$user_pass' AND adminapproval='1' AND usertype='adminmanagement'";
    $check_user4="select * from user WHERE username='$user_email'AND password='$user_pass' AND adminapproval='1' AND usertype='adminfunction'";
    $check_user5="select * from user,customer WHERE user.username=customer.username AND user.password='$user_pass' AND user.adminapproval='0' AND customer.mobileconfirmation='1'";
    $check_user6="select * from user,customer WHERE user.username='$user_email' AND user.password='$user_pass' AND user.usertype='Customer' AND user.adminapproval='0' AND customer.username <> '$user_email'";

    $run=mysqli_query($dbcon,$check_user);
    $run1=mysqli_query($dbcon,$check_user1);
    $run2=mysqli_query($dbcon,$check_user2);
    $run21=mysqli_query($dbcon,$check_user21);
    $run3=mysqli_query($dbcon,$check_user3);
    $run4=mysqli_query($dbcon,$check_user4);
    $run5=mysqli_query($dbcon,$check_user5);
    $run6=mysqli_query($dbcon,$check_user6);

    if(mysqli_num_rows($run))
    {
      session_start();
         $_SESSION['login']=$user_email;
          $view_users_query="select * from customer WHERE username='$user_email'";//select query for viewing users.
                      $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.
                 $row=mysqli_fetch_array($run);
                  $_SESSION['customerID']=$row['customerID'];
                  $_SESSION['user']=$row['fullname'];
                  $_SESSION['user_phone']=$row['contactno'];
         echo "<script>window.open('index.php','_self')</script>";
                                                                                 
       }
    else if(mysqli_num_rows($run1))
    {
       session_start();
        $_SESSION['approval']="WAIT FOR ADMIN'S APPROVAL";
            echo "<script>window.open('index.php','_self')</script>";
    }
    else if(mysqli_num_rows($run2))
    {
       session_start();
         $_SESSION['login']=$user_email;
        echo "<script>window.open('technician/index.php','_self')</script>";
    }
    else if(mysqli_num_rows($run21))
    {
       session_start();
         $_SESSION['login']=$user_email;
        echo "<script>window.open('technician/reset-password.php','_self')</script>";
    }
     else if(mysqli_num_rows($run3)){

            session_start();
         $_SESSION['adminm']=$user_email;
        echo "<script>window.open('adminff/index.php','_self')</script>";
         }
         else if(mysqli_num_rows($run4)){

            session_start();
         $_SESSION['adminf']=$user_email;
        echo "<script>window.open('admin/index.php','_self')</script>";
         }

    else if(mysqli_num_rows($run5)){
             $view_users_query="select * from customer WHERE username='$user_email'";
             $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.
             $row=mysqli_fetch_array($run);
             $customer_ID=$row['customerID'];
         
       echo "<script>window.open('newusermobilnumbercheck.php?id=".$customer_ID."','_self')</script>";
         } else if(mysqli_num_rows($run6)){
           session_start();
         $_SESSION['username']= $user_email;
        
       echo"<script>window.open('register1.php','_self')</script>";

         }
        else{
             echo "<script>alert('Wong Username OR Password')</script>";
            echo "<script>window.open('index.php','_self')</script>";

        }
      }?>