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
     Sri Sat Recharge</h1>
      
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        
        
          <div class="card-header">
            <img src="img/sundirect1.png" width="200" height="120">
          </div>
          
        <?php  
               include_once('database/db_conection.php');
                  $customerID=$_SESSION['customerID'];
                  $vender=$_GET['id'];

        ?>
        
<div class="card mb-8 shadow-sm">
        <form method="POST" action="sundirectrechargefinal.php">  
          <div class="card-body">
      <div class="col-xs-3"><h6 align="left">Name:</h6>
          
  <input type="text"  name="name" value="<?php echo $_SESSION['user']; ?>" class="form-control" readonly>

  
</br>
  </div>
     
      <div class="col-xs-3"><h6 align="left">Contact Number:</h6>
  <input type="text"  name="contactno" value="<?php echo $_SESSION['user_phone']; ?>" class="form-control" readonly> </br>
  <input type="hidden" name="vendor" value="<?php echo $vender;?>">
  </div>
            <div class="col-xs-3">
<?php
      
      
?>

  <select class="form-control" name="vcno" data-bv-notempty data-bv-notempty-message="The User Type is required">
                            <option value="">-- *Select Your VC Number --</option>
                            <?php
             
                

              $sql = "SELECT * FROM carduser where customerID='$customerID' AND vender='$vender'";
              $query = mysqli_query($dbcon, $sql);
             
              while($row = mysqli_fetch_assoc($query)){
                $vcno=$row['cardnumber'];
                //$vender=$row['vender'];
                
            ?>
                 <option value='<?php echo $vcno;?>' > <?php echo $vcno;?></option></br>
                  
              <?php } ?>
                            
                            
                            </select> </br>
  </div>



       <select class="form-control" name="packageID" data-bv-notempty data-bv-notempty-message="The User Type is required">
                            <option value="">-- *Select Your Package --</option>
                            <?php
              include_once('database/db_conection.php');
               $sql1 = "SELECT * FROM satellitetv WHERE tvname='$vender'";
              $query1 = mysqli_query($dbcon, $sql1);
              $row=mysqli_fetch_array($query1);
               $tvID=$row['tvID'];   
              $sql = "SELECT * FROM package where tvid='$tvID'";
              $query = mysqli_query($dbcon, $sql);
             
              while($row = mysqli_fetch_assoc($query)){
                $pkID=$row['packageid'];
                $pkname=$row['packagename'];
                $amount=$row['amount'];
            ?>
                 <option value='<?php echo $pkID;?>' > <?php echo $pkname;?> => total amount= <?php echo $amount;?></option></br>
                  
              <?php } ?>
                            
                            
                            </select></br>

</br></br>
      <input class="btn btn-lg btn-success btn-block" type="submit" value="Recharge" name="recharge">
          
        </div>
        </form>
        </div>
      </div>

      





    </div>

      </div><!-- /.container -->
       
        
        
     <?php require("footer.php"); ?> 
    </div>
  </body>
</html>