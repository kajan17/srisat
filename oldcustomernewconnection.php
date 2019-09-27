<?php
session_start();
include_once('database/db_conection.php');
if(isset($_POST['check_user']))
  {
  
    
    
    $nic=$_POST['admin_nic'];
    $sql = "SELECT * FROM tvconnection where nicnumber ='$nic'";
                   $query = mysqli_query($dbcon, $sql);
                    $row = mysqli_fetch_assoc($query);
                    $nic=
                    $fname=$row['fullname'];                                 
                    $dsdivision=$row['dsdivision'];
                    $gsdivision=$row['gsdivision'];
                    $landno=$row['landlinenumber'];
                    $mobileno=$row['mobilenumber'];
                    $address=$row['installationaddress'];
                    

  }

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
      <h1 class="display-4">Satellite TV NEW - Connections </h1></br></br></br>
      

    <div class="container">
      <div class="card-deck mb-3 text-center">
        
        <div >
          
          <p align="center"><img src="img/sundirect.png" width="60%" height="60%" align="center"></p>
          
        </div>
        <div class="card mb-4 shadow-sm">
          
          <div class="card-body">
            <h6>One Month Package Free</h6>
          <form method="POST" action="newconnection2.php">  
            <div class="card-body">
        
            </br>
            <div class="col-xs-3">
              <?php
                $nic=$_GET['nic'];

                ?>
              <input class="form-control" value="<?php echo $nic; ?>" name="nic"  type="hidden"> 
                
             <select class="form-control" name="vender" data-bv-notempty data-bv-notempty-message="" autofocus="" required="">
                            <option value="">Select Your SatelliteTV Vendor</option>
                            <option value="DishTV">DishTV</option>
                            <option value="sundirect">sundirect</option>
             </select> </br> 
              
          <select class="form-control" name="Installation" data-bv-notempty data-bv-notempty-message="" autofocus="" required="">
                            <option value="">Select Your TV Installation Methode</option>
                            <option value="self">Self Installation</option>
                            <option value="srisat">Installation By SriSat</option>
             </select> 
              </br>     
             <button type="submit" name="order" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Buy a TV</button>
          </form>
          </div>
        </div>
      </div>

      
    </div>

      </div><!-- /
        
     <?php require("footer.php"); ?> 
   
  </body>
</html>