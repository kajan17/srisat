<!DOCTYPE html>
<html lang="en">
<?php 
include("database/db_conection.php");
 ?>
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>sriSAT Technician - Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
<?php
session_start();
if($_SESSION['login']<>""){

  $username=$_SESSION['login'];
include("database/db_conection.php");
        $view_users_query="select * from technician WHERE username='$username'";//select query for viewing users.
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.
   $row=mysqli_fetch_array($run);
   $technicianid=$row['technicianID'];
 
 
}
?>
      <a class="navbar-brand mr-1" href="index.html">WELCOME <?php echo $row['fullname']; ?></a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="logout.php">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Dashboard</a>
            </li>
           
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="row">
      <?php
        if(isset($_SESSION['error'])){
          echo
          "
          <div class='alert alert-danger text-center'>
            <button class='close'>&times;</button>
            ".$_SESSION['error']."
          </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo
          "
          <div class='alert alert-success text-center'>
            <button class='close'>&times;</button>
            ".$_SESSION['success']."
          </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      </div>
            <div class="card-header">
              <i class="fas fa-table"></i>
              CUSTOMER COMPLAIENTS</div>
            <div class="card-body">
             <table id="myTable" class="table table-bordered table-striped">
          <thead>
                    <tr>
                      <td><strong>CUSTOMER NAME</strong></td>
                      <td><strong>DS DIVISION</strong></td>
                      <td><strong>GS DIVISION</strong></td>
                      <td><strong>COMPLAIENT ADDRESS</strong></td>
                      
                      <td><strong>MOBILE NUMBER</strong></td>
                      <td><strong>COPLAIENT DATE</strong></td>
                     <td><strong>JOB SATUS</strong></td>
                     <td><strong>COST ESTIMATION</strong></td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
        include("database/db_conection.php");
        $view_complaientusers_query="select * from repaicomplaient,customer where customer.customerID=repaicomplaient.customerID";
       
        $run=mysqli_query($dbcon,$view_complaientusers_query);//here run the sql query.

        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
            $customerid=$row['customerID'];
            $fullname=$row['fullname'];
            $mobileno=$row['contactno'];
            $dsdivision=$row['area'];
            $complaientdate=$row['date'];
            $gsdivision=$row['gsdivision'];
            $address=$row['address'];
            
            //$user_type=$row[3];
            $complaientid=$row['complaientID'];
            $finishstatus=$row['finishstatus'];
            $partialstatus=$row['partialstatus'];
             
           
        
           


        ?>

                    <tr>
                      <td><?php echo $fullname;  ?></td>
                      <td><?php echo $dsdivision;  ?></td>
                      <td><?php echo $gsdivision;  ?></td> 
                      <td><?php echo $address;  ?></td>
                      
                      <td><?php echo $mobileno;  ?></td>
                      <td><?php echo $complaientdate;  ?></td>
                     
                      <?php if($finishstatus=='1') {  ?>
                      <td><font color="#0EC036">WORK DONE</font></td>
                    
                   <?php }elseif($partialstatus=='1'){?>
                    
 <?php echo "<td><a href='#edit_".$complaientid."' class='btn btn-warning btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> PARTIALLY DONE</a></td>"; 
 include('edit_modal1.php');
                       ?>

                  <?php }elseif($finishstatus=='0' && $partialstatus=='0'){?>

                     <?php
                    $view_complaientusers_query1="select * from repaircostestimation WHERE repaircomplaientid='$complaientid'";
       
        $run1=mysqli_query($dbcon,$view_complaientusers_query1);
        $row=mysqli_fetch_array($run1);
        $status1=$row['customerapproval'];
        ?>
                    
                      <?php if($status1=='1' && $partialstatus=='0' && $finishstatus=='0'){
echo "<td><a href='#edit_".$complaientid."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> DO JOB</a></td>";
}else{
        echo "<td><a href='' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> WAIT</a></td>";


}
                      ?>
                      <?php
                include('edit_modal1.php'); ?>
                  <?php }?>

                   <?php
                    $view_complaientusers_query1="select * from repaircostestimation WHERE repaircomplaientid='$complaientid'";
       
        $run1=mysqli_query($dbcon,$view_complaientusers_query1);?>
        <?php
        if(mysqli_num_rows($run1)){
                   ?>
                    <td><strong>COST ESTIMATED</strong></strong></td>
                     
                    
                   
             
                <?php }else{?>
                  <td><a href="repaircostestimate.php?id=<?php echo $complaientid; ?>" class="btn-primary">COST ESTIMATION</a></td>
                  <?php }?>
                  </tr></tbody><?php  } ?>
                </table>
                
              </div>
            </div>
            <div class="card-footer small text-muted"></div>
          </div>

          <p class="small text-center text-muted my-5">
            <em>ss</em>
          </p>

        </div>

          

        
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="technician/vendor/chart.js/Chart.min.js"></script>
    <script src="technician/vendor/datatables/jquery.dataTables.js"></script>
    <script src="technician/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="technician/js/demo/datatables-demo.js"></script>
    <script src="technician/js/demo/chart-area-demo.js"></script>
<script src="technician/datatable/jquery.dataTables.min.js"></script> 
<script src="technician/datatable/dataTable.bootstrap.min.js"></script> 
<script>
$(document).ready(function(){
  //inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
      $('.alert').hide();
    })
});
</script>
  </body>

</html>
