<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 <?php 
  require('header.php');  ?>
  
 <?php 
  require('leftsidebar.php');  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <section class="content-header">
        <a href="repairmanagement.php"><button class="btn btn-primary">BACK</button></a>
      <div class="row">
        <strong><h3><p align="center">Customer Complaient Cost Approval</p></h3></strong></br>
       </div>
       <table id="example1" class="table table-bordered table-striped">
                <thead>

        <tr>
            <th>NO.</th>
            <th>Service Charge</th>
            <th>LMP Replacing</th>
            <th>Receiver Replacing.</th>
            <th>Cable Charge.</th>
            <th>Total Amount.</th>
            <th>Admin Approval/Reject</th>
            
        </tr>
        </thead>

        <?php
        include("database/db_conection.php");
        $view_users_query="select * from repaircostestimation";//select query for viewing users.
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
            $adminapproval=$row['adminapproval'];
            $total=($servicecharge+$lmp+$receivercharge+$cablecharge);
            $costestimationid=$row['estimationID'];
        ?>

        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $servicecharge;  ?></td>
            <td><?php echo $lmp;  ?></td>
            <td><?php echo $receivercharge;  ?></td>
            <td><?php echo $cablecharge;  ?></td>
            <td><?php echo $total;  ?></td>
              <?php if ($adminapproval=='0') {
            # code...
        ?>
            
              <td><a href="admincostapproval.php?id=<?php echo $costestimationid; ?>" ><button class="btn btn-warning">APPROVAL</button></a></br>
                <a href="admincostreject.php?id=<?php echo $costestimationid; ?>" ><button class="btn btn-warning">REJECT</button></a>
              </td>
            </td>
            <?php }else if($adminapproval=='1'){?>
            <td><button class="btn btn-success">APPROVED</button></td> <?php } ?>
              <?php if ($adminapproval=='2') {
            # code...
        ?>
            
              <td>Regected</button></a></td>
            </td>
             <?php } ?>
   
        </tr>
      
        <?php  } ?>

              </table>

    </section>
    
    <!-- /.content -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
   require("footer.php");
  ?>

  
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>