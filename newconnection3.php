<?php
session_start();

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
           
           
           
          
            <?php
              include_once('database/db_conection.php');
              if(isset($_POST['order']))
              {
                    
                    $nic=$_POST['nic'];
                    $fname=$_POST['fname'];
                    $dsdivision=$_POST['dsdivision'];
                    $gsdivision=$_POST['gsdivision'];
                    $Installation = $_POST['Installation'];
                    $landno = $_POST['landno'];
                    $mobileno = $_POST['mobileno'];
                    $address = $_POST['address'];
                     $vender = $_POST['vender'];
                    if($Installation=="self"){
                      $a='0';
                    }
                    else{
                      $a='1000';
                    }

                    if($vender=="DishTV"){
                      $b='5500';

                    }else{
                      $b='4500';
                    }
    
                }         
                 
             
                        

              ?>
                  <form method="POST" action="newconnect1.php"> 
                  
                  
                  <div class="card-body"><h6 align="left">Satellite Tv Price <input class="form-control" type="text" name="tvprice" value='Rs<?php echo $b;?>.00' readonly></h6>  </div>
                  <div class="card-body"><h6 align="left">Tv Installation Fees<input class="form-control" type="text" name="installprice" value='Rs<?php echo $a;?>.00' readonly></h6>  </div>  
                  <div class="card-body"><h6 align="left">Total Amount <input class="form-control" type="text" name="totalprice" value='<?php echo ($a+$b);?>' readonly></h6>  </div>
                  
                  <div class="card-body">
                  
                  <input class="form-control" type="hidden" name="nic" value='<?php echo $nic;?>'></br>
                  <input class="form-control" type="hidden" name="fname" value='<?php echo $fname;?>'></br>
                  <input class="form-control" type="hidden" name="dsdivision" value='<?php echo $dsdivision;?>'></br>
                  <input class="form-control" type="hidden" name="gsdivision" value='<?php echo $gsdivision;?>'></br>
                  <input class="form-control" type="hidden" name="vendor" value='<?php echo $vender;?>'></br>
                  
                  <input class="form-control" type="hidden" name="installmethode" value='<?php echo $Installation;?>'></br>
                  <input class="form-control" type="hidden" name="address" value='<?php echo $address;?>'></br>
                  <input class="form-control" type="hidden" name="landno" value='<?php echo $landno;?>'></br>
                  <input class="form-control" type="hidden" name="mobileno" value='<?php echo $mobileno;?>'></br>
                  </div>
                       <button type="submit" name="pay2" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> payhere</button>
                   </form>
          </div>
        </div>
        </div>
      </div>

      
    </div>

      </div><!-- /
        
     <?php require("footer.php"); ?> 
   
  </body>
</html>