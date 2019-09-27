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
    <div id="all">
      <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
    

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">
Sun Direct Recharge</h1>
      
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        
        
          <div class="card-header">
            <img src="img/sundirect1.png" width="200" height="120">
          </div>
          
        <?php
              include_once('database/db_conection.php');
              if(isset($_POST['recharge']))
              {
    $vcnumber = $_POST['vcno'];
    $name = $_POST['name'];
    $contactno = $_POST['contactno'];
    $packageID = $_POST['packageID'];
    $vendor=$_POST['vendor'];

    }

    $sql = "SELECT * FROM package where packageid ='$packageID'";
              $query = mysqli_query($dbcon, $sql);
              $row = mysqli_fetch_assoc($query)
             
                                  

              ?>
        
<div class="card mb-8 shadow-sm">
           <form method="POST" action="rechargepayment.php">
          <div class="card-body"><h6 align="left">Your Viewing Card  No :<input name="vcno" class="form-control" value='<?php echo $vcnumber;?>'readonly>  </h6>
            <input type="hidden" name="name" class="form-control" value='<?php echo $name;?>' readonly>
            <input type="hidden" name="contactno" class="form-control" value='<?php echo $contactno;?>'>
            </br>
            <h6 align="left">Your Selected Package Name :<input name="packagename" size="25" class="form-control" value="<?php echo $row['packagename'];?>" readonly>
            <input type="hidden" name="packageID" value='<?php echo $packageID;?>'>

            <input type="hidden" name="vendor" value='<?php echo $vendor;?>'>
       </br>
       <h6 align="left">Your Recharge Amount : Rs <input name="amount" class="form-control" size="01" value='<?php echo $row['amount'].".00";?>' readonly> </h6>


</br></br>
      <button type="submit" name="recharge" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Recharge</button>
    </form>
          </div>
        </div>
        
        </div>
      </div>

        
        
     <?php require("footer.php"); ?> 
    </div>
  </body>
</html>