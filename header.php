    <header class="header mb-5">
      <!--
      *** TOPBAR ***
      _________________________________________________________
      -->
      <div id="top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offer mb-3 mb-lg-0"></div>
            <div class="col-lg-6 text-center text-lg-right">
              <?php

         if(isset($_SESSION['login'])){
          include("database/db_conection.php");
        $username=$_SESSION['login'];

          $view_users_query="select * from customer WHERE username='$username'";//select query for viewing users.
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.
   $row=mysqli_fetch_array($run);
   $fname=$row['fullname'];
         ?>

             

                 <ul class="menu list-inline mb-0"><li class="list-inline-item"><a href="#" class="btn btn-success btn-sm">Welcome  <strong><?php echo $fname; echo "  "; ?></strong></a></li>
                <li class="list-inline-item"><a href="logout.php" class="btn btn-success btn-sm">Logout</a></li>
                <li class="list-inline-item"><a href="myaccount.php" class="btn btn-success btn-sm" >My account</a></li>
                </ul>
            <?php
      }else{
        ?>     
 <ul class="menu list-inline mb-0">
                <li class="list-inline-item"><a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#login-modal"><strong>Login</strong></a></li>
                <li class="list-inline-item"><a href="register.php" class="btn btn-success btn-sm">Register</a></li>
                
                </ul>
               
                <?php
        }
        ?>
            </div>
          </div>
        </div>
        <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Customer login</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
                <form action="signin.php" method="post">
                  <div class="form-group">
                    <input id="email-modal" name="email" type="text" placeholder="Username (NIC Number)" class="form-control">
                  </div>
                  <div class="form-group">
                    <input id="password-modal" name="pass" type="password" placeholder="password" class="form-control">
                  </div>
                  <p class="text-center">
                    <button class="btn btn-primary" type="submit" name="login"><i class="fa fa-sign-in"></i> Log in</button>
                  </p>
                </form>
                 
                <p class="text-center text-muted">Not registered yet?</p>
                <p class="text-center text-muted"><a href="register.php"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
              </div>
            </div>
          </div>
        </div>
        <!-- *** TOP BAR END ***-->

        
      </div>
      
    </div>
  </div>
</div>
        
        
      </div>
      <nav class="navbar navbar-expand-lg">
        <div class="container"><a href="index.php" class="navbar-brand home"><img src="img/dish.gif" width="120" height="60" alt="Obaju logo" class="d-none d-md-inline-block"></a>
          <div class="navbar-buttons">
            <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <button type="button" data-toggle="collapse" data-target="#search" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></button><a href="basket.html" class="btn btn-outline-secondary navbar-toggler"><i class="fa fa-shopping-cart"></i></a>
          </div>
          <div id="navigation" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item"><a href="index.php" class="nav-link active">Home</a></li>

         
              <li class="nav-item"><a href="recharge.php" class="nav-link">Recharge</a></li>

            
              <li class="nav-item">
                    <?php

         if(isset($_SESSION['login'])){
          $nic=$_SESSION['login'];
         ?>
              
                <a  href="newconnectioncheck1.php?nic=<?php echo $nic; ?>" class="nav-link">
                               New Connection
                            </a>
<?php } else{?>
              <a  href="newconnectioncheck.php" class="nav-link">
                               New Connection
                            </a>
                              <?php } ?>
                          </li>

                <?php

         if(isset($_SESSION['login'])){
         ?>
              <li class="nav-item"><a href="repair.php" class="nav-link">Complaient</a></li>
              <?php }else{ ?>
                  <li class="nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#login-modal">Complaient</a></li>

              <?php  }?>
               <?php

         if(isset($_SESSION['login'])){
         ?>
                <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">MyAccount<b class="caret"></b></a>
                <ul class="dropdown-menu megamenu">
                  <li>
                    <div class="row">
                      
                      <div class="col-md-6 col-lg-3">
                        
                        <ul class="list-unstyled mb-3">
                           <li class="nav-item"><a href="userfeedback.php" class="nav-link">Feedback</a></li>
                          <li class="nav-item"><a href="pastrechargehistory.php" class="nav-link">View Past Recharge</a></li>
                          <li class="nav-item"><a href="customercostapproval.php" class="nav-link">Repair Cost Approval</a></li>
                          <li class="nav-item"><a href="" class="nav-link">Update Profile</a></li>
                          <li class="nav-item"><a href="" class="nav-link">SriPoints</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <?php }else{ ?>
                  <li class="nav-item dropdown menu-large"><a href="#" class="nav-link" data-toggle="modal" data-target="#login-modal" class="dropdown-toggle nav-link">MyAccount<b class="caret"></b></a>

              <?php  }?>


                     <?php

         if(isset($_SESSION['login'])){
         ?>
                <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">My Connections<b class="caret"></b></a>
                <ul class="dropdown-menu megamenu">
                  <li>
                    <div class="row">
                      
                      <div class="col-md-6 col-lg-3">
                         <?php
             include_once('database/db_conection.php');
                $username=$_SESSION['login'];
$sql="select * from customer,carduser WHERE customer.customerID=carduser.customerID AND customer.username='$username'";
              
              $query = mysqli_query($dbcon, $sql);
               while($row = mysqli_fetch_assoc($query)){
              $vcno=$row['cardnumber'];
               $vender=$row['vender'];

?>
<ul class="list-unstyled mb-3">
                           <li class="nav-item"><a href="#" class="nav-link"><?php echo $vcno;?>' > <?php echo $vender;?></a></li>
                          
                        </ul>


               <?php
             }}
                
            ?>
             
            
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
           

          </div>
        </div>


        <script>
function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'admin_nic='+$("#admin_nic").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
        <div class="modal fade" id="an" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-sm">
           <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 style="color:white" class="modal-title" id="myModalLabel">GET NEW CONNECTION</h4>
              </div>
              <div class="modal-body">
            
        
         <form role="form" method="post" action="oldcustomernewconnection.php">
                   <fieldset>
          
            
                            <div class="form-group">
                                <input class="form-control" placeholder="Enter Your NIC number" id="admin_nic" name="admin_nic" onBlur="checkAvailability()" type="text" required> </br>
                                <span id="user-availability-status" style="font-size:12px;"></span> 
              </div>
              
              
           
           </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-md btn-warning btn-block" name="check_user">OK</button>
        
         <button type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal">Cancel</button>
           </form>
              </div>
            </div>
          </div>
        </div>

      </nav>

    </header>