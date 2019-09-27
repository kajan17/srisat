<?php
session_start();
include_once('database/db_conection.php');
$customerid=$_GET['id'];
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
      <h3>Satellite TV Mobile Number Verification </h3></br></br></br>
      

      <div class="container">
        
        <?php
         if(isset($_SESSION['codeerror'])){
          echo
          "
          <div class='alert alert-danger text-center'>
           
            ".$_SESSION['codeerror']."
          </div>
          ";
          unset($_SESSION['codeerror']);
        }
        ?>
          
          <div class="card-body">
            <h4>Enter The Code Number Send By The Srisat System</h4>
              <form method="POST" action="newusermobilnumbercheckmodel.php">  
            <div class="card-body">
        
            <input type="hidden" class="form-control" name="id" value="<?php echo $customerid; ?>">
                <div class="col-xs-12">
                   <input type="id" class="form-control" name="codeno" required="" placeholder="Enter Code No." autofocus=""></br> 
                
              <button type="reset" class="btn btn-success" value="Reset">Reset</button>
              <button type="submit" name="check" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> OK</button>
              </div>
             </div>
           </div>
           </div></div>
             
        
         
              </form>


              <?php
if(isset($_POST['check'])){
include_once('database/db_conection.php');
// code user nic availablity
$customerid=$_POST['id'];
if(!empty($_POST["codeno"])) {
  $codeno= $_POST["id"];
  $customerid= $_POST["codeno"];
  
$sql ="SELECT * FROM customer WHERE customerID='$customerid'";
 $run_query=mysqli_query($dbcon,$sql);
 $row=mysqli_fetch_array($run_query);
    $mobilenocode=$row['mobilenocode'];
if($codeno==$mobilenocode)
{
  $sql1 = "UPDATE customer SET mobileconfirmation = '2' WHERE customerID ='$customerid'";
              if(mysqli_query($dbcon, $sql1)){
                session_start();
                $_SESSION['waitname']=$row['fullname'];
                $_SESSION['waitaproval']="Wait For Admin Approval";
               echo "<script>window.open('index.php',)</script>";
         
              }else{
                session_start();
                  $_SESSION['codeerror']="Your code number is missmatching please enter correct";
              //echo "<script>window.open('newusermobilnumbercheck.php?id=".$customerid."','_self')</script>";
                  echo "<script>window.open('index.php',)</script>";
              } 

}}
}
?>

          </div>
        </div>
        

      
      

      

      
        

       

  <?php require("footer.php"); ?> 
   
  </body>
</html>