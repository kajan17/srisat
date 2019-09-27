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
      <h3>Cost Estimation Approval - User</h3></br></br></br>
      

      <div class="container">
        
        
        
        
          
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>

        <tr>
            <th>NO.</th>
            <th>Service Charge</th>
            <th>LMP Replacing</th>
            <th>Receiver Replacing.</th>
            <th>Cable Charge.</th>
            <th>Total Amount.</th>
            <th>Approved/Denied Date</th>
            <th>User Approval/Reject</th>
            
        </tr>
        </thead>

        <?php
        include("database/db_conection.php");
         $username=$_SESSION['login'];
         $view_users_query="select * from customer WHERE username='$username'";//select query for viewing users.
        $run1=mysqli_query($dbcon,$view_users_query);//here run the sql query.
   $row=mysqli_fetch_array($run1);
   $customerid=$row['customerID'];
        $view_users_query="select * from repaircostestimation where customerid='$customerid' AND adminapproval='1'";//select query for viewing users.
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.

        $i=0;

        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
          $i=$i+1;

            $customerID=$row['customerid'];
            $servicecharge=$row['servicecharge'];
            $lmp=$row['lmpchange'];
            $receivercharge=$row['receivercharge'];
            $cablecharge=$row['cablecharge'];
            $complaientid=$row['repaircomplaientid'];
            $customerapproval=$row['customerapproval'];
            $total=($servicecharge+$lmp+$receivercharge+$cablecharge);
            $costestimationid=$row['estimationID'];
            $date=$row['customerapproveddate'];
        ?>

        <tr>
            <td><?php echo $i; ?></td>
            <td>Rs <?php echo $servicecharge;  ?></td>
            <td>Rs <?php echo $lmp;  ?></td>
            <td>Rs <?php echo $receivercharge;  ?></td>
            <td>Rs <?php echo $cablecharge;  ?></td>
            <td>Rs <strong><?php echo $total;  ?></strong></td>
            <td><strong><?php echo $date;  ?></strong></td>
              <?php if ($customerapproval=='0') {
            # code...
        ?>
            
              <td><a href="customercostapprovalmodel.php?id=<?php echo $costestimationid; ?>" ><button class="btn btn-warning">APPROVE</button></a></br></br>
                <a href="customercostapprovalmodel1.php?id=<?php echo $costestimationid; ?>" ><button class="btn btn-danger">DENIED</button></a>
              </td>
            </td>
            <?php }else if($customerapproval=='1'){?>
            <td><button class="btn btn-success">APPROVED</button></td> <?php } ?>
              <?php if ($customerapproval=='2') {
            # code...
        ?>
            
              <td><button class="btn btn-danger">Rejected</button></a></td>
            </td>
             <?php } ?>
   
        </tr>
      
        <?php  } ?>

              </table>


          </div>
        </div>
        

      
      

      

      
        

       

  <?php require("footer.php"); ?> 
   
  </body>
</html>