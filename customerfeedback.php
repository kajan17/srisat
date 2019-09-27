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
    <h1>Past Recharge History</h1>
    <hr>
  <div class="row">
      <!-- left column -->
     
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        
        
        
       <section id="about" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="img-thumb wow fadeInLeft" data-wow-delay="0.3s">
              <img class="img-fluid" src="img/recharge.jpeg" alt="">
            </div>
          </div> 
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="profile-wrapper wow fadeInRight" data-wow-delay="0.3s">
              
              <div class="about-profile">
                <ul class="admin-profile">
                  <table id="example1" class="table table-bordered table-striped">
                <thead>

        <tr>
            <th>NO.</th>
            <th>Amount</th>
            <th>Recharged Date</th>
            <th>Expired Date</th>
            
        </tr>
        </thead>

        <?php
        include("database/db_conection.php");
           

         if(isset($_SESSION['user'])){
        $vcno=$_SESSION['cardnumber'];
        $view_users_query="select * from recharge where vcno='$vcno' && status='1'";//select query for viewing users.
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.

        $i=0;

        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
          $i=$i+1;

            
            $amount=$row['amount.'];
            $rechargedate=$row['recharged_date'];
            $expireddate=$row['expireddate'];
           
        ?>

        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $amount;  ?></td>
            <td><?php echo $rechargedate;  ?></td>
            <td><?php echo $expireddate;  ?></td>
            

      
        <?php  } }?>

              </table>
                </ul>
              </div>
              
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