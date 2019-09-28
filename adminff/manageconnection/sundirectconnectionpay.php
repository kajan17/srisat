<!DOCTYPE html>
<!-- saved from url=(0052)https://getbootstrap.com/docs/4.1/examples/carousel/ -->
<html lang="en" class="gr__getbootstrap_com"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>sri SAT tech</title>

    <!-- Bootstrap core CSS -->
    <link href="./Carousel Template for Bootstrap_files/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./Carousel Template for Bootstrap_files/carousel.css" rel="stylesheet">

  </head>
  <body data-gr-c-s-loaded="true">

       <?php

include ('header.php');
    ?>

    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
    

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Sundirect - Connections </h1></br></br></br>
      

    <div class="container">
      <div class="card-deck mb-3 text-center">
        
        <div >
          
          <p align="center"><img src="image/sundirect.png" width="60%" height="60%" align="center"></p>
          
        </div>
        <div class="card mb-4 shadow-sm">
          
          <div class="card-body">
            <h6>One Month (Tamil Cinema + Sports) Package Free</h6>
          <form method="POST" action="sundirectrechargefinal.php">  
            <div class="card-body"><h6 align="left">Add Insatallation Methode</h6>
          
            <?php
              include_once('database/db_conection.php');
              if(isset($_POST['order'])){
    $Installation = $_POST['Installation'];
    
    
    $sql = "SELECT * FROM satellitetv where tvname ='sundirect'";
              $query = mysqli_query($dbcon, $sql);
              $row = mysqli_fetch_assoc($query)
             
                                  

              ?>
             
                       
            <button type="button" class="btn btn-lg btn-block btn-primary">Payhere</button>
          </div>
        </div>
      </div>

      
    </div>

      </div><!-- /.container -->


    <?php

include ('footer.php');
    ?>
    