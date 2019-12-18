 <?php 

                  require '../db/mdl_absensi.php';
                  $conn = new mdlabsensi();

include 'header.php';
$page= 'kepegawaian';
include 'sidebar.php';


$status[] = "Approved";
$status[] = "Need Approved";



?>

 
  <!-- =================CONTENT============================== -->
  <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bagian Kepegawaian
        <small>Laporan Bulanan Daftar Hadir</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Bagian Kepegawaian</a></li>
        <li class="active">Laporan Bulanan Daftar Hadir</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
          <!-- Horizontal Form -->
          <form class="form-horizontal" method="post" name="form" action="print_lap_absen.php" target="_blank">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Laporan Bulanan Daftar Hadir</h3>
            </div>


            <!-- form start -->
              <div class="box-body">
                <div class="form-group col-sm-6">
                  <label for="inputEmail3" class="col-sm-3 control-label">Dari Tanggal</label>
                  <div class="col-sm-8">
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="date" class="form-control pull-right" id="form_tgl_awal" name="form_tgl_awal" data-date-format="dd/mm/yyyy" autocomplete="off"  required>
                    </div>
                  </div>
                </div>

                  <div class="form-group col-sm-6 pull-right">
                  <label for="inputEmail3" class="col-sm-3 control-label">Sampai Tanggal</label>
                  <div class="col-sm-8">
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="date" class="form-control pull-right" id="form_tgl_akhir" name="form_tgl_akhir" data-date-format="dd/mm/yyyy" autocomplete="off"  required>
                    </div>
                  </div>
                </div>

                  <label for="inputEmail3" class="col-sm-3 control-label"></label>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-block btn-info" target="_blank">
                      SEARCH
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>