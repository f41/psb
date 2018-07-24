<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Log in
    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo base_url('assets/');?>plugins/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/');?>dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="<?php echo base_url('login')?>">
          <b>Admin</b>
        </a>
      </div>
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Sign in to start your session
          </p>
          <form action="#" method="post">
            <div class="input-group mb-3">
              <input class="form-control" type="text" placeholder="Username" autofocus required>
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="fa fa-user">
                  </i>
                </span>
              </div>
            </div>
            <div class="input-group mb-3">
              <input class="form-control" type="password" placeholder="Password" required>
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="fa fa-key">
                  </i>
                </span>
              </div>
            </div>
            <div class="row">
              <div class="col-8">
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In
                </button>
              </div>
              <!-- /.col -->
            </div>
          </form>
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/');?>plugins/jquery/jquery.min.js">
    </script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('assets/');?>plugins/bootstrap/js/bootstrap.bundle.min.js">
    </script>
  </body>
</html>
