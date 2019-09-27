
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SRI SAT tech</title>
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
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li aria-current="page" class="breadcrumb-item active">New account / Sign in</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6">
              <div class="box">
                <h1>Create a new account - Step 1</h1>
                <p class="lead">Not our registered customer yet?</p>
                <p>With registration with Sri SAT Tech, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>
                <p class="text-muted"><strong>If you don't have any satellite TV connection</strong> <a href="newconnectioncheck.php"> <strong><h4>GET the new connection.</h4></strong></a></p>
                <hr>
                <form class="form-signin" role="form" method="post" action="registermodel.php">
                
                  <div class="form-group">
                    <label for="name">UserName </label>
                    <input id="name"  name="nic" type="text" placeholder="Enter Your National Identy Card Number Here" class="form-control" required data-bv-notempty-message="The viewing card no is required and cannot be empty">
                  </div>
                 
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" name="password" placeholder="Enter Your Password Here" type="password" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="password">Confirm-Password</label>
                    <input id="password" name="cpassword" type="password" class="form-control">
                  </div>
                  <div class="text-center">
                    <button type="submit" name="register" class="btn btn-primary"><i class="fa fa-user-md"></i> Register</button>
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
</html>