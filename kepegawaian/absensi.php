<?php 
 require '../db/mdl_absensi.php';
 $conn = new mdlabsensi();
                           
// include 'header.php';
$page= 'kepegawaian';
session_start();
include '../db/ceklogin.php';
      if(isset($_SESSION['user'])){
         $loginnama = $_SESSION['user'];
}else{
  $loginnama = "";
}   
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
    <section class="content-header" align="center">
      <h1>
        Bag. Kepegawaian
        <br>
        <small>Data Karyawan</small>
      </h1>
    <!--   <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Bag. Kepegawaian</a></li>
        <li class="active">Daftar Hadir</li>
      </ol> -->
    </section>

    <!-- Main content -->
     <section class="content">
          <!-- Horizontal Form -->
          <div class="box box-info">
          

 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <!-- <a class="btn btn-success pull-right"  href="addabsensi.php"><i class="fa fa-plus"></i> Tambah Daftar Hadir</a> -->
              <input type="button" value="Tambah Data Pegawai" onclick="location.href='../kepegawaian/addabsensi.php'">
              <h3 class="box-title"><!-- <i class="fa fa-mortar-board"></i> -->Tabel Data karyawan</h3>
            </div>
        <div class="box-body" >

           <table  id="example1" class="table table-bordered table-hover" border="1">
                <thead>
                <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <!-- <th>Nama Pegawai</th> -->
                     
                      <th>Company</th>
                      <th>Employee</th>
                       <th>Departemen</th>
                     
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
                  <td><?php echo $fetch['nama'];?></td> 
                 
                  <td><?php echo $fetch['com'];?></td>
                  <td><?php echo $fetch['em']; ?></td>
                   <td><?php echo $fetch['kd_departemen'];?></td>
                  
 
                  
                  
                  <td>
                    <!-- <a class="btn btn-primary" href="viewabsensi.php?id=<?php echo $fetch['id']; ?>"><i class="fa fa-search"></i></a> -->
                    <input type="button" value="View" onclick="location.href='../kepegawaian/viewabsensi.php?id=<?php echo $fetch['id']; ?>'">
                    <!-- <a class="btn btn-info" href="editabsensi.php?postid=<?php echo $fetch['id']; ?>"><i style="width:12px;" class="fa fa-edit"></i></a> -->
                    <input type="button" value="edit" onclick="location.href='../kepegawaian/editabsensi.php?postid=<?php echo $fetch['id']; ?>'">
                    <!-- <a class="btn btn-danger" href="../controller/absensicontroller.php?postid=<?php echo $fetch['id']; ?>&action=delabsensi"><i class="fa fa-trash"></i></a>  -->
                    <input type="button" value="delete" onclick="location.href='../controller/absensicontroller.php?postid=<?php echo $fetch['id']; ?>&action=delabsensi'">
                   
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
        <!-- <input type="button" value="Download Data" onclick="location.href='../laporan/lap_absen.php'"> -->
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

<!--  <div class="modal fade" id="modal-save">
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
            /.modal-content 
          </div>
          /.modal-dialog 
        </div>
 -->

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


 <!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
 
 
 <script type="text/javascript">
  $(document).ready(function(){
    $("#table1").DataTable();
  });
</script> -->
