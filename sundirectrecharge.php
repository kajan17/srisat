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
      <script type="text/javascript">
function validateForm()
{
var numericExpression = /^[0-9]+$/;
var a=document.forms["rechargeform"]["vcno"].value;

if (a==null || a=="")
  {
  alert("Form number must be filled out");
  return false;
  }
if(a.match(numericExpression))
  {
  return true;
  }
  else
  {
  alert("Form number must be filled with numbers only");
  return false;
  }
if(a.length > 10) //i got a problem with this one i think
  {
  alert("Form number must not be greater than 10 character length");
  return false;
  }

}
</script>
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
        <?php
          include_once('database/db_conection.php');
          $tvid=$_GET['id'];
          $sql = "SELECT * FROM satellitetv where tvID='$tvid'";
              $query = mysqli_query($dbcon, $sql);
              $row = mysqli_fetch_assoc($query);


        ?>


<?php echo $row['tvname']; ?> Recharge</h1>
      
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        
        
          <div class="card-header">
            <img src="img/sundirect1.png" width="200" height="120">
          </div>
          
        
        
<div class="card mb-8 shadow-sm">
        <form name="rechargeform" method="POST" onsubmit="return validateForm()" action="sundirectrechargefinal.php">  
          <div class="card-body">
      <div class="col-xs-3"><h6 align="left">Enter Your Full Name:</h6>
             <?php

         if(isset($_SESSION['user'])){
         ?>
  

  <?php }else{  ?>
  <input type="text" name="name" required data-bv-notempty-message="The name is required and cannot be empty" class="form-control"> 
<?php }?>
</br>
  </div>
     
      <div class="col-xs-3"><h6 align="left">Enter Your Contact Number:</h6>
  <input type="text" name="contactno" required data-bv-notempty-message="The contact number is required and cannot be empty" class="form-control"  maxlength="10" size="10"> </br>
  <input type="hidden" name="vendor" value="<?php echo $row['tvname'];?>">
  </div>
            <div class="col-xs-3"><h6 align="left">Enter Your Sun Direct Smart Card 11 Digit No:</h6>
  <input type="text" name="vcno" required data-bv-notempty-message="The VC Number is required and cannot be empty" class="form-control" maxlength="11" size="11"> </br>
  </div>



       <select class="form-control" name="packageID" data-bv-notempty data-bv-notempty-message="The User Type is required">
                            <option value="">-- *Select Your Package --</option>
                            <?php
              include_once('database/db_conection.php');
                  $tvID=$_GET['id'];
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