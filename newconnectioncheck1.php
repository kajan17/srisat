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
            
              
            <div class="card-body">
                <?php
                $nic=$_GET['nic'];

                ?>
        
             <form method="POST" action="oldcustomernewconnection.php?nic=<?php echo $nic; ?>">  
                <div class="col-xs-12">
                   <h5>Already You Have Connection Are You Want A New Connection!</h5>
                   </br> 
              
               
              <button type="reset" class="btn btn-success" value="Reset">Reset</button>
              
              <button type="submit" name="ok" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> OK</button></a>
            </form>
              </div>
             </div>
           </div>
           </div></div>
             
        
         
              


             

          </div>
        </div>
        

      
      

      

      
        

       

  <?php require("footer.php"); ?> 
   
  </body>
</html>