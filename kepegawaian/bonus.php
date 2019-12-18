<?php 
 require '../db/mdl_pokok.php';
 $conn = new mdlpokok();
                           
include 'header.php';
$page= 'kepegawaian';
include 'sidebar.php';
?>

 
  <!-- =================CONTENT============================== -->
  <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bag. Kepegawaian
        <small>Bonus Pegawai</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Bag. Kepegawaian</a></li>
        <li class="active">Bonus Pegawai</li>
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
              <a class="btn btn-success pull-right"  href="addbonus.php"><i class="fa fa-plus"></i> Tambah Bonus Pegawai</a>

              <h3 class="box-title"><!-- <i class="fa fa-mortar-board"></i> -->Tabel Data Bonus Pegawai</h3>
            </div>
        <div class="box-body" >

           <table  id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                      <th>No</th>
                      <th>Kode Bonus</th>
                      <th>Nama</th>
                      <th>Bonus</th>
                      <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                
                <?php
                  $no = 1;
                  $readbonus = $conn->readbonus();
                  while($fetch = $readbonus->fetch_array()){ 
                    
                     // $gaji = $fetch['gaji'];
                     // $bonus = $fetch['total'];
                     // $upah= $fetch['upah'];
                     // $potongan = $fetch['potongan'];
                     // $gol = $fetch['gaji'];
                     // $totalgaji = $gaji+$bonus+$upah+$gol-$potongan;
                ?>
                
                <tr>

                  <td><?php echo $no++."."; ?></td>
                  
                  <td><?php echo $fetch['kd_detail_bonus']; ?></td>
                  
                  <td><?php echo $fetch['nama_bonus']; ?></td>
                  
                  <td><?php echo $fetch['bonus']; ?></td>
                  
                  
                  <td>
                   
                    <a class="btn btn-info" href="editbonus.php?postid=<?php echo $fetch['id']; ?>"><i style="width:12px;" class="fa fa-edit"></i></a>
                    <a class="btn btn-danger" href="../controller/pokokcontroller.php?postid=<?php echo $fetch['id']; ?>&action=delbonus"><i class="fa fa-trash"></i></a> 
                   
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
       <!--  <div class="box-footer">
        <input type="button" value="Download Data" onclick="location.href='../laporan/lapgajip.php'">
        </div> -->
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


 <!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
 
 
 <script type="text/javascript">
  $(document).ready(function(){
    $("#table1").DataTable();
  });
</script> -->
