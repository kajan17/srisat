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
      <div id="content">
        <div class="container">
      <div class="card-deck mb-3 text-center">
              <?php
              if(isset($_SESSION['login'])){
                include_once('database/db_conection.php');
                    $username=$_SESSION['login'];
             $customerid= $_SESSION['customerID'];
              $sql = "SELECT * FROM carduser WHERE customerID='$customerid' GROUP BY vender";
              $query = mysqli_query($dbcon, $sql);
             // $row=mysqli_fetch_array($query);

         
             
              while($row = mysqli_fetch_assoc($query)){
                            $vender=$row['vender'];
                            
                            
                          ?>
                    <div class="card mb-4 shadow-sm">
                      <div class="card-header">

                        <h4 class="my-0 font-weight-normal"><?php echo $vender;?></h4>
                      </div>
                      <div class="card-body">
                     
                      <a href="recharge1.php?id=<?php echo $vender; ?>"><img src="img/sundirectdish.png"></a>
                       
                           

                      </div>
                    </div>
        <?php }
         }
          else{
        ?>
            <?php
             include_once('database/db_conection.php');
              $sql = "SELECT * FROM satellitetv";
              $query = mysqli_query($dbcon, $sql);
             
              while($row = mysqli_fetch_assoc($query)){
                            $tvID=$row['tvID'];
                            $tvname=$row['tvname'];
                            
                          ?>
                    <div class="card mb-4 shadow-sm">
                      <div class="card-header">

                        <h4 class="my-0 font-weight-normal"><?php echo $tvname;?></h4>
                      </div>
                      <div class="card-body">
                        
                               <a href="sundirectrecharge.php?id=<?php echo $tvID; ?>"><img src="img/sundirectdish.png"></a>  
                               
                           

                      </div>
                    </div>
        <?php }
         }
?>

      </div>
       
        
        
     <?php require("footer.php"); ?> 
    
  </body>
</html>