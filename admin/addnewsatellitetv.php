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

 /
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
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
      <div class="row">
       <a href="newconnection.php"> <img src="img/back.png" width="80" height="50" align="center"></a>
        <strong><h3><p align="center">Add New Satellite TV Connection</p></h3></strong></br>
       <div class="col-lg-12" align="center">
               
          <div class="card-body">
             <form method="POST" action="newconnection2.php">  
            <div class="card-body">
          
            </br>
            <div class="col-xs-5">
              <input type="text"  class="form-control" name="fname" placeholder="Enter Your Fullname" required="" autofocus=""></br> 
              <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Enter Your Email address" required="Please Fill Username" autofocus=""></br>
               <select class="form-control" name="vender" data-bv-notempty data-bv-notempty-message="" autofocus="" required="">
                            <option value="">Select Your SatelliteTV Vendor</option>
                            <option value="DishTV">DishTV</option>
                            <option value="sundirect">sundirect</option>
             </select> </br> 
              <select class="form-control" name="dsdivision" data-bv-notempty data-bv-notempty-message="" autofocus="" required="">
                            <option value="">Select Your DS Division</option>
                            <option value="nallur">nallur</option>
                            <option value="jaffna">jaffna</option>
                            <option value="kopay">kopay</option>
                            <option value="uduvil">uduvil</option>
                            <option value="thellipalai">thellipalai</option>
                            <option value="Thenmaradchi">Thenmaradchi</option>
                            <option value="vadamaradchi">vadamaradchi</option>
             </select> </br> 
             <select class="form-control" name="gsdivision" data-bv-notempty data-bv-notempty-message="" autofocus="" required="">
                            <option value="">Select Your GS Division</option>
                            <option value="J/100">J/100</option>
                            <option value="J/101">J/101</option>
                            <option value="J/102">J/102</option>
                            <option value="J/103">J/103</option>
                            <option value="J/104">J/104</option>
                            <option value="J/105">J/105</option>
                            <option value="J/106">J/106</option>
             </select> </br> 
          <select class="form-control" name="Installation" data-bv-notempty data-bv-notempty-message="" autofocus="" required="">
                            <option value="">Select Your TV Installation Methode</option>
                            <option value="self">Self Installation</option>
                            <option value="srisat">Installation By SriSat</option>
             </select> </br> 
             
                <input type="Number"  class="form-control" name="landno" placeholder="Enter Your Contact Number - Landline number" required=""  maxlength="10" size="10" ></br> 
                 <input type="Number"  class="form-control" name="mobileno" placeholder="Enter Your Contact Number - Mobile number" required=""  maxlength="10" size="10" autofocus=""></br>
                 <textarea class="form-control animated" placeholder="Type Your SatelliteTV Installation Address Here..." type ="text" name ="address" id ="address" required data-bv-notempty-message="The Address is required and cannot be empty" ></textarea>  </br>     
             <button type="submit" name="order" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Order a TV</button>
          </form>
         
        </div>
</div>

  
            </div>
        
         
         
           
      
        </div>
      </div>
    </div>

        
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
<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script>
        CKEDITOR.replace( 'course' );
      </script>
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
