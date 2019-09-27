      <?php
if(isset($_POST['check'])){
include_once('database/db_conection.php');
// code user nic availablity


  $customerid= $_POST["id"];
  $codeno= $_POST["codeno"];
  
 
 $sql ="SELECT * FROM customer WHERE customerID='$customerid'";
 $run_query=mysqli_query($dbcon,$sql);
 $row=mysqli_fetch_array($run_query);
    $mobilenocode=$row['mobilenocode'];
    $nic=$row['username'];
            if($codeno==$mobilenocode)
            { 
               $sql1 = "UPDATE customer SET mobileconfirmation = '2' WHERE customerID ='$customerid'";
              if(mysqli_query($dbcon, $sql1)){
                session_start();

                $check_username_query2="select * from tvconnection WHERE nicnumber ='$nic'";
                $run_query2=mysqli_query($dbcon,$check_username_query2);

                if(mysqli_num_rows($run_query2)>0){
                    $_SESSION['cusname']=$row['fullname'];
                $_SESSION['sussregistered']="Successfully Registered with our SRI SAT System";
                echo "<script>window.open('index.php','_self')</script>";

                }else{
                       $_SESSION['waitname']=$row['fullname'];
                $_SESSION['waitaproval']="Wait For Admin Approval";
                echo "<script>window.open('index.php','_self')</script>";

                }

           
               } 
              } else{

                session_start();
                  $_SESSION['codeerror']="Your code number is missmatching please enter correct";
            echo "<script>window.open('newusermobilnumbercheck.php?id=".$customerid."','_self')</script>";
               
              }


}




?>