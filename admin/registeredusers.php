<?php
include('header.php');
include('sidebar.php');
include("database/db_conection.php");
?>
   <div class="content-wrapper">
    <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Registered User
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
<div class="row">
        
        <a href="print_pdf.php" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span> PDF</a>
      </div>

    
      
      
        <table id="myTable" class="table table-bordered table-striped">
          <thead>
            <th>NO.</th>
            <th>Fullname</th>
            <th>Ds Division</th>
            <th>Address</th>
            <th>ContactNo</th>
            
          </thead>
          <tbody>
            <?php
              
              $sql = "SELECT * FROM customer,user where customer.username=user.username AND user.status='1'";

              
              $query = mysqli_query($dbcon, $sql);
              $n=1;
              while($row = mysqli_fetch_array($query)){
                echo 
                "<tr>
                  <td>".$n."</td>
                  <td>".$row['2']."</td>
                  <td>".$row['3']."</td>
                  <td>".$row['4']."</td>
                  <td>".$row['5']."</td>
                  
                </tr>";
               $n=$n+1;
              }
  
  ?>
            </tbody>
        </table>
      </div>
    </div>
</div>
  
  <?php include('footer.php')  ?>
<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
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
  