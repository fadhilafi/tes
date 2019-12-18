<?php
// require_once '../db/mdl_perizinan.php';
//   $mod = new mdlperizinan(); 
session_start();
include '../db/ceklogin.php';
      if(isset($_SESSION['user'])){
         $loginnama = $_SESSION['user'];
}else{
  $loginnama = "";
}   
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ERP | Kepegawaian</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" type="image/png" href="../assets/image/favicon.png"/>
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../assets/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../assets/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../assets/css/_all-skins.css">

  <script src="https://unpkg.com/ionicons@4.4.8/dist/ionicons.js"></script>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="dashboard.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>E</b>R</b>P</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>ERP</b> Plus</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../assets/image/admin.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Bag. Kepegawaian</span>
            </a>

           
           
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../assets/image/admin.png" class="img-circle" alt="User Image">
                  <!--   <p>
                  <?=$_SESSION['user']?>
                  <small><?=$_SESSION['nama']?></small>
                </p> -->
                <!--  -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="../logout.php?q=logout" class="btn btn-default btn-flat">Log Out</a>
                </div>
              </li>
            </ul>
            </li>
            <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning"></span>
            </a>
            <ul class="dropdown-menu">
               <!--  <?php
                  $no = 1;
                  $izin = $mod->readper();
                  while($fetch = $izin->fetch_array()){ 
                   
                ?> -->
               <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                 <!--  <li>
                    <a href="editperizinan.php?postid=<?php echo $fetch['id']; ?>">
                      <?=$_SESSION['user']?> |menerima <?=$fetch['kd_kat_izin'];?>
                      
                    </a>
                  </li> -->
                </ul>
              </li>
            <?php } ?>
              <li class="footer"><a href="perizinan.php">View all</a></li>
            </ul>
          </li>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>