<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		
		<title>Login</title>
		
		<meta name="viewport" content="width-device-width, initial-scale-1">
		<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/dist/css/AdminLTE.min.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/plugins/iCheck/square/blue.css'); ?>" rel="stylesheet">
		
		
		<!-- ############################### -->
		<body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><b>Admin</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="<?php echo site_url('user/prosesLogin'); ?>" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Email" name="username">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="pass">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
        </div><!-- /.social-auth-links -->

        <a href="#">I forgot my password</a><br>
        <a href="register.html" class="text-center">Register a new membership</a>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url('assets/plugins/jQuery/jQuery-2.1.4.min.js'); ?>"></script> 
    <!-- Bootstrap 3.3.5 -->
	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <!-- iCheck -->
	<script src="<?php echo base_url('assets/plugins/iCheck/icheck.min.js'); ?>"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
	
	</head>
	<body>
		<nav
	</body>