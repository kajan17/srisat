<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Forgot Password</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Reset Password</div>
        <div class="card-body">
          <div class="text-center mb-4">
            <h4>Dear Technician</h4>
            <p>Update Your Password Here</p>
          </div>
         <form class="form-signin" role="form" method="post" action="resetpass.php">
                
                     <div class="form-group">
                   
                    <input id="name" name="email" value="<?php session_start(); 
                   echo $_SESSION['login']; ?>" 
                    type="hidden" class="form-control" required data-bv-notempty-message="The viewing card no is required and cannot be empty">
                  </div>
                 
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="password">Confirm-Password</label>
                    <input id="password" name="cpassword" type="password" class="form-control">
                  </div>
                  <div class="text-center">
                    <button type="submit" name="register" class="btn btn-primary"><i class="fa fa-user-md"></i> Reset Password</button>
                  </div>
                </form>
          <div class="text-center">
            
            
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
