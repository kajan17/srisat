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
  <body>
    <!-- navbar-->
  <?php 
  require('header.php');  ?>
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
    

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Satellite TV NEW - Connections </h1></br></br></br>
      

    <div class="container">
      <div class="card-deck mb-3 text-center">
        
        <div >
          
          <p align="center"><img src="img/sundirect.png" width="60%" height="60%" align="center"></p>
          
        </div>
        <div class="card mb-4 shadow-sm">
          
          <div class="card-body">
            <h6>One Month Package Free</h6>
          <form method="POST" action="newconnection3.php">  
            <div class="card-body">
          
            </br>
             <?php
                $nic=$_GET['nic'];

                ?>
              <input type="id" id="inputid" class="form-control" name="nic" required="" value="<?php echo $nic; ?>" autofocus="" readonly></br> 
            <div class="col-xs-3">
              <input type="text"  class="form-control" name="fname" placeholder="Enter Your Fullname" required="" autofocus=""></br>
               
              
             <select class="form-control" name="vender" data-bv-notempty data-bv-notempty-message="" autofocus="" required="">
                            <option value="">Select Your SatelliteTV Vendor</option>
                            <option value="DishTV">DishTV</option>
                            <option value="sundirect">sundirect</option>
             </select> </br> 
             
         <div class="form-group">
                    <select class="form-control" name="dsdivision" id="dsdivision" data-bv-notempty data-bv-notempty-message="" autofocus="" required="">
                            <option value="">Select Your DS Division</option>
                            <option value="nallur">nallur</option>
                            <option value="jaffna">jaffna</option>
                            
             </select>

                    </br>
<select class="form-control" name="gsdivision" id="gsdivision">
</select>

                  </div>

                  </br> 
          <select class="form-control" name="Installation" data-bv-notempty data-bv-notempty-message="" autofocus="" required="">
                            <option value="">Select Your TV Installation Methode</option>
                            <option value="self">Self Installation</option>
                            <option value="srisat">Installation By SriSat</option>
             </select> </br> 
             
                <input type="Number"  class="form-control" name="landno" placeholder="Enter Your Contact Number - Landline number" maxlength="10" size="10" autofocus=""></br> 
                 <input type="Number"  class="form-control" name="mobileno" placeholder="Enter Your Contact Number - Mobile number" required=""  maxlength="10" size="10" autofocus=""></br>
                 <textarea class="form-control animated" placeholder="Type Your SatelliteTV Installation Address Here..." type ="text" name ="address" id ="address" required data-bv-notempty-message="The Address is required and cannot be empty" ></textarea>  </br>     
             <button type="submit" name="order" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Buy a TV</button>
          </form>
          </div>
        </div>
      </div>

      
    </div>

      </div><!-- /
        
     <?php require("footer.php"); ?> 
   
  </body>
</html>