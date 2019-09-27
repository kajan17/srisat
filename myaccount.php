ssss<?php
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
    <h1>Edit Profile</h1>
    <hr>
  <div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <input type="file" class="form-control">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div>
        <h3>Personal info</h3>
        
       <section id="about" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="img-thumb wow fadeInLeft" data-wow-delay="0.3s">
              <img class="img-fluid" src="assets/img/about/about-1.jpg" alt="">
            </div>
          </div> 
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="profile-wrapper wow fadeInRight" data-wow-delay="0.3s">
              <h3>Hi Guys!</h3>
              <p>Est diam venenatis arcu lacus ad. Duis quis eros. Cursus et rutrum eleifend sollicitudin lacinia justo id turpis. Nec convallis integer. Odio eget duis. Nulla aenean et. Blandit varius sollicitudin. Pellentesque leo primis neque urna magnis. Elit ut sollicitudin. Et est a nam dolores eget itaque sagittis et parturient duis est eleifend sociis rutrum odio viverra integer.</p>
              <div class="about-profile">
                <ul class="admin-profile">
                  <li><span class="pro-title"> Name </span> <span class="pro-detail">Tom Saulnier</span></li>
                  <li><span class="pro-title"> Age </span> <span class="pro-detail">25 Years</span></li>
                  <li><span class="pro-title"> Experience </span> <span class="pro-detail">4 Years</span></li>
                  <li><span class="pro-title"> Country </span> <span class="pro-detail">USA</span></li>
                  <li><span class="pro-title"> Location </span> <span class="pro-detail">San Francisco, CA</span></li>
                  <li><span class="pro-title"> e-mail </span> <span class="pro-detail">email@example.com</span></li>
                  <li><span class="pro-title"> Phone </span> <span class="pro-detail">+ (00) 123 456 789</span></li>
                  <li><span class="pro-title"> Freelance </span> <span class="pro-detail">Available</span></li>
                </ul>
              </div>
              <a href="#" class="btn btn-common"><i class="icon-paper-clip"></i> Download Resume</a>
              <a href="#" class="btn btn-danger"><i class="icon-speech"></i> Contact Me</a>
            </div>
          </div>   
        </div>
      </div>
    </section>
      </div>
  </div>
</div>
<hr>

        
        
        
       
        <div id="hot">
          <div class="box py-4">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="mb-0">SRI SAT TECH</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="product-slider owl-carousel owl-theme" align="CENTER">
              
              
              
              
              
              
              
              
              <!-- /.product-slider-->
            </div>
            <!-- /.container-->
          </div>
          <!-- /#hot-->
          <!-- *** HOT END ***-->
        </div>
        
     <?php require("footer.php"); ?> 
    
  </body>
</html>