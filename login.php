<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Test| Log in</title>
  <link rel="icon" type="image/png" href="assets/image/favicon.png"/>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/AdminLTE.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page" >
<div class="login-box">
  <div class="login-logo">
    <!-- <a href="#"><img src="assets/image/bentoel.png" width="250"></a> -->
    <a href="#"></a>
      <font face="Helvetica" color="white"><h2><center><b> Sistem Informasi Kepegawaian</b></center></h2></font>
      <!-- <p> <font face="Helvetica" color="white"><center><h4>Sistem Informasi Kepegawaian</center></h4></center></p>  -->
          <p> <font face="Helvetica" color="white"><center><h5>Pabrik Rokok</center></h5></center></p> 
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="db/ceklogin.php" method="POST">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="email" placeholder="Email or Username" required>
		<span class="form-control-feedback"><i class="fa fa-user"></i></span>    <!-- icon di belakang -->     
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password" required>
        <span class=" form-control-feedback"><i class="fa fa-unlock"></i></span>    <!-- icon di belakang -->     
      </div>
      <div class="row">
        
        <div class="col-xs-4">
          <button type="submit" name="log" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="assets/js/jquery.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/js/bootstrap.js"></script>
<!-- iCheck -->
<script src="assets/plugins/iCheck/icheck.min.js"></script>

</body>
</html>
