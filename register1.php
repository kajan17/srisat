<?php
session_start();
?>
<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>sRi sat Tech</title>
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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script language="javascript" type="text/javascript">  
$(document).ready(function(){

//let's create arrays
var nallur = [
  {display: "J/100", value: "J/100" }, 
  {display: "J/101", value: "J/101" }, 
  {display: "J/102", value: "J/102" },
  {display: "J/103", value: "J/103" }];
  
var jaffna = [
  {display: "J/89", value: "J/89" }, 
  {display: "J/90", value: "J/90" }, 
  {display: "J/91", value: "J/91" },
  {display: "J/92", value: "J/92" }];
  

//If parent option is changed
$("#dsdivision").change(function() {
    var parent = $(this).val(); //get option value from parent 
    
    switch(parent){ //using switch compare selected option and populate child
        case 'nallur':
        list(nallur);
        break;
        case 'jaffna':
        list(jaffna);
        break;        
        
      default: //default child option is blank
        $("#gsdivision").html('');  
        break;
       }
});
               
//function to populate child select box
function list(array_list)
{
  $("#gsdivision").html(""); //reset child options
  $(array_list).each(function (i) { //populate child options 
    $("#gsdivision").append("<option value=\""+array_list[i].value+"\">"+array_list[i].display+"</option>");
  });
}

});
</script>
  </head>
   <?php if($_SESSION['username']){ ?>
  <body>
   <?php 
  require('header.php');  ?>

    <div id="all">
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- breadcrumb-->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li aria-current="page" class="breadcrumb-item active">New account / Sign in</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6">
              <div class="box">
                <h1>Create a new account - Step 2</h1>
                
                <hr>
                <form enctype="multipart/form-data" method="post" action="registermodel1.php">
                  <div class="form-group"> <?php

                   $username=$_SESSION['username']; ?>
                   <input id="name" class="form-control"  name="email" type="hidden" class="form-control" required data-bv-notempty-message="The viewing card no is required and cannot be empty" value="<?php echo $username;  ?>">
                   <?php
                   include("database/db_conection.php");
                       $check_username_query="select * from tvconnection WHERE nicnumber='$username'";
                      $run_query=mysqli_query($dbcon,$check_username_query);
                      $row=mysqli_fetch_array($run_query);
                      $nicnum=$row['nicnumber'];
                      $address=$row['installationaddress'];
                      $contactno=$row['contactno']; 
                      $dsdivision=$row['dsdivision']; 
                      $gsdivision=$row['gsdivision'];   
                      if(mysqli_num_rows($run_query)>0)
                      {
                      
                      $fname=$row['fullname'];
                  ?>
                    <input id="name" class="form-control"  name="fname" placeholder="Type Your Full Name Here" type="text" class="form-control" value="<?php echo $fname; ?>" readonly>
                    <?php } else { ?>
                     <input id="name" class="form-control"  name="fname" placeholder="Type Your Full Name Here" type="text" class="form-control" required data-bv-notempty-message="The viewing card no is required and cannot be empty"><?php }?>
                  </div>
                  <div class="form-group">
                   <?php
                   if(mysqli_num_rows($run_query)>0)
                      {
                      $check_username_query1="select * from newconnectioncard WHERE nicno='$nicnum'";
                      $run_query1=mysqli_query($dbcon,$check_username_query1);
                      $row=mysqli_fetch_array($run_query1);
                     $vcnum=$row['vcnumber'];
                     $vendor=$row['vendor'];
                   ?>
                    <input id="name" class="form-control"  name="vcno" maxlength="11" size="11" placeholder="Type Your Satellite TV Viewing Card Number Here" type="text" class="form-control" value="<?php echo $vcnum;?>" readonly>
                  <?php } else{?>
                    <input id="name" class="form-control"  name="vcno" maxlength="11" size="11" placeholder="Type Your Satellite TV Viewing Card Number Here" type="text" class="form-control" required data-bv-notempty-message="The viewing card no is required and cannot be empty"><?php
                  }?>
                  </div>
                  <div class="form-group">
                     <?php
                   if(mysqli_num_rows($run_query)>0)
                      {?>

                        <input id="name" class="form-control"  name="vendor" maxlength="11" size="11" placeholder="Type Your Satellite TV Viewing Card Number Here" type="text" class="form-control" value="<?php echo $vendor;?>" readonly>
                      <?php } else{?>  
                    <select class="form-control" name="vendor" data-bv-notempty data-bv-notempty-message="The Vendor Field is required" >
                            <option value="">-- Select Your Satellite TV Vendor--</option>
                             <option value="Sundirect">Sundirect</option>
                            <option value="DishTV">DishTV</option>
                            </select>
                            <?php
                  }?>
                  </div>
                
                <?php
                   if(mysqli_num_rows($run_query)>0)
                      {?>
                  
                        <div class="form-group">
                        <input id="name" class="form-control"  name="dsdivision" maxlength="11" size="11" placeholder="Type Your Satellite TV Viewing Card Number Here" type="text" class="form-control" value="<?php echo $dsdivision;?>" readonly></br>

                        <input id="name" class="form-control"  name="gsdivision" maxlength="11" size="11" placeholder="Type Your Satellite TV Viewing Card Number Here" type="text" class="form-control" value="<?php echo $gsdivision;?>" readonly>

                      </div>

                   <?php } else{?> 
                  <div class="form-group">
                    <select class="form-control" name="dsdivision" id="dsdivision" data-bv-notempty data-bv-notempty-message="" autofocus="" required="">
                            <option value="">Select Your DS Division</option>
                            <option value="nallur">nallur</option>
                            <option value="jaffna">jaffna</option>
                            
             </select>

                    </br>
<select class="form-control" name="gsdivision" id="gsdivision">
</select><?php
                  }?>

                  </div>
                  <div class="form-group">
                          <?php
                   if(mysqli_num_rows($run_query)>0)
                      {?>
                          <textarea class="form-control animated" placeholder="Type Your Address Here..." type ="text" name ="address"  id ="address" required data-bv-notempty-message="The Address is required and cannot be empty" readonly><?php echo $address;?></textarea>

                           <?php } else{?>  
                          <textarea class="form-control animated" placeholder="Type Your Address Here..." type ="text" name ="address" id ="address" required data-bv-notempty-message="The Address is required and cannot be empty" ></textarea>
                        <?php
                  }?>
                    </div>
                    <div class="form-group">
                      <?php
                   if(mysqli_num_rows($run_query)>0)
                      {?>
                                <input class="form-control" placeholder="Type Your Contact Number Here" required data-bv-notempty-message="The Address is required and cannot be empty" name="contact" maxlength="10" size="10" value="<?php echo $contactno; ?>" readonly>
                                  <?php } else{?>  
                                 <input class="form-control" placeholder="Type Your Contact Number Here" required data-bv-notempty-message="The Address is required and cannot be empty" name="contact" maxlength="10" size="10" value="">
                                 <?php
                  }?>
                            </div>
                            <?php
                   if(mysqli_num_rows($run_query)==0)
                      {?>
                              <div class="form-group">
                              
                                Upload  Your Viewing Card Image Here
          <input class="form-control" type="file" name="image" class="form-control" required/>
                            </div>
                            <?php
                  }?>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary" name="update"><i class="fa fa-user-md"></i> Register</button>
                  </div>
                </form>
              </div>
            </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php require("footer.php"); ?> 
  </body>
<?php }else{

  header("register.php");
}?>
</html>