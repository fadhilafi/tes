<?php 
require '../db/mdl_absensi.php';
 $conn = new mdlabsensi();
// include 'header.php';
$page= 'kepegawaian';
// include 'sidebar.php';


?>

 
  <!-- =================CONTENT============================== -->
  <!-- Content Wrapper. Contains page content -->



 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"  align="center">
      <h1>
        Bag. Kepegawaian
        <br>
        <small>Data Pegawai</small>
      </h1>
      <ol class="breadcrumb">
       <!--  <li><a href="#"><i class="fa fa-dashboard"></i>Bag. Kepegawaian</a></li>
        <li class="active">Data Pegawai</li> -->
      </ol>
    </section>
    
        <section class="content">
    <div class="row">
        <div class="col-lg-7">
            <div class="box box-primary">
                <div class="box-header with-border">
                
                </div>
             <!-- form start -->
                      <?php
               foreach($conn->readperview($_GET['id']) as $fetch){
               

                      ?>                 

    <div class="panel-body">
        <ul class="list-group list-group-unbordered">
            <!-- <li class="list-group-item">
                //<b>NIP</b> <span class="pull-right"><?php echo $fetch['nip']; ?></span>
            </li> -->
            <li class="list-group-item">
                <b>Nama</b> <span class="pull-right"><?php echo $fetch['nama'];?></span>
            </li>
            <!-- <li class="list-group-item">
                <b>Nama Pegawai</b> <span class="pull-right"><?php echo $fetch['nama_pegawai'];?></span>
            </li> -->
            <li class="list-group-item">
                <b>Company</b> <span class="pull-right"><?php echo $fetch['com']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Departemen</b> <span class="pull-right"><?php echo $fetch['dep']; ?></span>
            </li>
            <li class="list-group-item">
                <b>Employe</b> <span class="pull-right"><?php echo $fetch['em']; ?></span>
            </li>
            <!-- <li class="list-group-item">
                <b>Jam Pulang </b> <span class="pull-right"><?php echo $fetch['jam_pulang']; ?></span>
            </li> -->
           
            <a onclick="window.history.back();return false;" class="btn btn-warning"><i class="fa fa-reply" type="button"></i> Back</a>
            <!-- <a href="export/pembeli_detail.php?id=<?= $_GET['id'] ?>" target="blank" class="btn btn-primary"><i class="fa fa-download"></i> Report</a> -->
        </ul>
      <?php
                    }
                ?>
    </div>
  </div>
</div>
</div>
</section>
</div>
<?php 
include 'footer.php';
 ?>