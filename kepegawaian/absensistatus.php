<?php 
 require '../db/mdl_absensi.php';
 $conn = new mdlabsensi();
                           
include 'header.php';
$page= 'kepegawaian';
include 'sidebar.php';
   // $kd_absensi = $_GET['kd_absensi'];
   //          $tgl_absen = $_GET['tgl_absen'];
   //          $jam_datang = $_GET['jam_datang'];
   //          $jam_pulang = $_GET['jam_pulang'];
   //          $kd_jadwal = $_GET['kd_jadwal'];
            
   //          $nip = $_POST['nip'];
?>

 
  <!-- =================CONTENT============================== -->
  <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bag. Kepegawaian
        <small>Daftar Hadir</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Bag. Kepegawaian</a></li>
        <li class="active">Daftar Hadir</li>
      </ol>
    </section>

    <!-- Main content -->
     <section class="content">
          <!-- Horizontal Form -->
          <div class="box box-info">
          

 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a class="btn btn-success pull-right"  href="addabsensi.php"><i class="fa fa-plus"></i> Tambah Daftar Hadir</a>

              <h3 class="box-title"><!-- <i class="fa fa-mortar-board"></i> -->Tabel Daftar Hadir</h3>
            </div>
        <div class="box-body" >

           <table  id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                      <th>No</th>
                      <th>Nama Pegawai</th>
                      <th>Tanggal Absen</th>
                      <th>Jam Datang</th>
                      <th>Jangka</th>
                      <th>Status</th>
                      <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                
                <?php
                  $no = 1;
                  $readper = $conn->readper();
                  while($fetch = $readper->fetch_array()){
                  
                  
                ?>
                
                <tr>
                  <td><?php echo $no++."."; ?></td>
                  <td><?php echo $fetch['nip'];?></td> 
                  <td><?php echo $fetch['tgl_absen']; ?></td>
                  <td><?php echo $fetch['jam_datang']; ?></td>
 
                  
                          <?php
                          date_default_timezone_set("Asia/Jakarta");
                          // echo "" . date("h:i:sa");
                          $date1= time("h:i:sa");
                          $date2=$x['jam_datang'];
                          $datetime2 = new time($date2);
                          $datetime1 = new time($date1);
                          $status = $datetime1->diff($datetime2);
                          ?> 
                  <td><?php echo $status; ?></td>
                   <?php
                  $stok = $fetch['jam_datang'];

                  if($stok < 15 ){

                    $status ="<a class='btn btn-danger btn-sm' >Tidak Telat</a>";
                  }elseif ($stok > 15) {
                    $status = "<a class='btn btn-danger btn-sm'>Telat Lebih 15 Menit</a>";
                  }elseif ($stok == 15) {
                    $status ="<a class='btn btn-success btn-sm' >Tidak Telat</a>";
                  }

                  ?> 
                 <!--  <?php

$waktuawal  = date_create('07:00:00'); //waktu di setting

$waktuakhir = date_create(); //2019-02-21 09:35 waktu sekarang

$diff  = date_diff($waktuawal, $waktuakhir);

 

echo 'Selisih waktu: ';


echo $diff->h . ' jam, ';

echo $diff->i . ' menit, ';

echo $diff->s . ' detik, ';

// Output : Selisih waktu: 0 tahun, 11 bulan, 30 hari, 18 jam, 35 menit, 11 detik

 

echo '<br> : ' . $diff;

//Output : Total selisih hari adalah: 364
?> -->
                  
                  <td><?php echo $status ?></td>
                 
                  
                  
                  <td>
                    <a class="btn btn-primary" href="viewabsensi.php?id=<?php echo $fetch['id']; ?>"><i class="fa fa-search"></i></a>
                    <a class="btn btn-info" href="editabsensi.php?postid=<?php echo $fetch['id']; ?>"><i style="width:12px;" class="fa fa-edit"></i></a>
                    <a class="btn btn-danger" href="../controller/absensicontroller.php?postid=<?php echo $fetch['id']; ?>&action=delabsensi"><i class="fa fa-trash"></i></a> 
                   
                </td>
                </tr>
                <?php
                    }
                ?>
                </tbody>
              </table>
        
            </div>
          </div>
        </div>
      </div>
        <!-- /.box-body -->
        <div class="box-footer">
        <input type="button" value="Download Data" onclick="location.href='../laporan/lap_absen.php'">
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php 
include 'footer.php';
 ?>

 <div class="modal fade" id="modal-save">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Sucess</h4>
              </div>
              <div class="modal-body">
                <p>Data Berhasil Disimpan!</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"> <i class="fa fa-print"></i> Print</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>


<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script type="text/javascript">
            var tgl = new Date();

            //tgl = new Date(tgl);
           // console.log('Asia Time:'+tgl.toLocaleString());
            
            // var hari = tgl.getDay()+1;
            var tanggal = (tgl.getDate());
            var bulan = tgl.getMonth()+1;
            var tahun = tgl.getFullYear();
            if (bulan.length < 2) bulan = '0' + bulan;
            if (tanggal.length < 2) tanggal = '0' + tanggal;
            document.getElementById("tgl_absen").value = tahun+'-'+bulan+'-'+tanggal;
            document.getElementById("jam_datang").value = tgl.getHours()+":"+tgl.getMinutes()+":"+tgl.getSeconds();
        }
        /*$(document).ready(function(){
            $("#code_id_value").on('change', function(){
                getData();
            });
        });*/
        </script>
 <!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
 
 
 <script type="text/javascript">
  $(document).ready(function(){
    $("#table1").DataTable();
  });
</script> -->
