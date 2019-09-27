<?php
session_start();
include_once('database/db_conection.php');

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SRI SAT TECH</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->
  <?php 
      require('header.php');  ?>
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
    

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h3>Satellite TV NEW - Connections </h3></br></br></br>
      

      <div class="container">
        
        
        
        
          
          <div class="card-body">
            <h4>Enter Your NIC Number Here</h4>
              <form method="POST" action="newconnectioncheck.php">  
            <div class="card-body">
        
            
                <div class="col-xs-12">
                  <div class="form-group">
                  
                    <select class="form-control" name="dsdivision" data-bv-notempty data-bv-notempty-message="" autofocus="" required="">
                            <option value="">Please Select The Topic You Wanted To Gave Feedback</option>
                            <option value="nallur">New Connection</option>
                            <option value="jaffna">Recharge</option>
                            <option value="kopay">Repair</option>
                            <option value="uduvil">Technician</option>
                           </select> 
                  </div>
                   <div class="form-group">
                        
                          <textarea class="form-control animated" placeholder="Type Your Feedback Here..." type ="text" name ="feedback" id ="address" required data-bv-notempty-message="The Address is required and cannot be empty" ></textarea>
                        
                    </div>
               <?php if(isset($_SESSION['newconnectnic'])){
          echo
          "
          <div class='alert alert-danger text-center'>
            <button class='close'>&times;</button>
            ".$_SESSION['newconnectnic']."
          </div>
          ";
          unset($_SESSION['newconnectnic']);
        }?>
              <button type="reset" class="btn btn-success" value="Reset">Reset</button>
              <button type="submit" name="order" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> OK</button>
              </div>
             </div>
           </div>
           </div></div>
             
        
         
              </form>


              <?php

include_once('database/db_conection.php');
// code user nic availablity
if(!empty($_POST["nic"])) {
  $nic= $_POST["nic"];

if(strlen($nic) <> 10){

            session_start();
         $_SESSION['newconnectnic']="Please Enter 10 Digit NIC Number";
             echo "<script>window.open('newconnectioncheck.php','_self')</script>";
}else{


$sql ="SELECT * FROM user WHERE username='$nic' && usertype='Customer'";
 $run_query=mysqli_query($dbcon,$sql);
 $sql1 ="SELECT * FROM tvconnection WHERE nicnumber='$nic'";
 $run_query1=mysqli_query($dbcon,$sql1);
$cnt=1;
if(mysqli_num_rows($run_query)>0 || mysqli_num_rows($run_query1)>0 )
{

echo "<script>window.open('newconnectioncheck1.php?nic=".$nic."',)</script>";
 
} else{
  
  
 //include('newconnectioncheck1.php');
echo "<script>window.open('newconnection.php?nic=".$nic."')</script>";

}}

}


?>

          </div>
        </div>
        

      
      

      

      
        

       

  <?php require("footer.php"); ?> 
   
  </body>
</html>