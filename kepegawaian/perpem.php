<?php 
 

                  require '../db/mdl_perpem.php';
                  $conn = new mdlperpem();
                
include 'header.php';
$page= 'purchasing';
include 'sidebar.php';
?>

 
  <!-- =================CONTENT============================== -->
  <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Purchasing
        <small>Permintaan Pembelian</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Purchasing</a></li>
        <li class="active">Permintaan Pembelian</li>
      </ol>
    </section>

    <!-- Main content -->
     <section class="content">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Transaksi Penawaran Pembelian</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-header with-border">
             <a class="btn btn-app" data-toggle="modal" data-target="#modal-save">
                <i class="fa fa-save"></i> Save
              </a>
              

              <a class="btn btn-app" data-toggle="modal" data-target="#modal-buka-transaksi">
                <i class="fa fa-inbox"></i> Transaksi
              </a>

              <a class="btn btn-app">
                <i class="fa fa-repeat"></i> Reset
              </a>

              <a href="perpenawaranl.php" class="btn btn-app">
                <i class="fa fa-download"></i> Export/Print
              </a>
            </div>

<!--  <div id="modal-tambah"> -->
            <form class="form-horizontal"  role="form" action="../controller/perpemcontroller.php?action=tambahperpemA" Method="POST" >
              <div class="box-body">
                <div class="form-group col-sm-6">


                  <label for="diminta" class="col-sm-3 control-label">Diminta Oleh</label>
                  <div class="col-sm-8">
                    <div class="input-group">
                      <input type="text" class="form-control">
                          <span class="input-group-btn">
                            <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-diminta-oleh"><i class="fa fa-search"></i></button>
                          </span>
                    </div>
                  </div>

                  <br><br>

                  <label for="supplier" class="col-sm-3 control-label">Minta Ke</label>
                  <div class="col-sm-8">
                    <div class="input-group">
                      <input type="text" class="form-control">
                          <span class="input-group-btn">
                            <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-supplier"><i class="fa fa-search"></i></button>
                          </span>
                    </div>
                  </div>
                  <br><br>
                  <label for="nogrup" class="col-sm-3 control-label">No.Grup</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control" id="inputEmail3">
                  </div>
                  <br><br>
                  <label for="uraian" class="col-sm-3 control-label">Uraian</label>
                  <div class="col-sm-8">
                    <input type="email" class="form-control" id="inputEmail3">
                  </div>
                  <br><br>
                </div>

                <div class="form-group col-sm-6 pull-right">
                  <label for="no_transA" class="col-sm-3 control-label">No. Transaksi</label>
                  <div class="col-sm-8">
                    <input type="email" class="form-control" id="inputEmail3">
                  </div>
                  <br><br>
                  <label for="tgl" class="col-sm-3 control-label">Tanggal</label>
                  <div class="col-sm-8">
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="datepicker">
                    </div>
                  </div>
                  <br><br>
                  <label for="tgl_dibth" class="col-sm-3 control-label">Dibutuhkan</label>
                  <div class="col-sm-8">
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="datepickerdb">
                    </div>
                  </div>
                  <br><br>
                  <label for="progres" class="col-sm-3 control-label">Status</label>
                  <div class="col-sm-8">
                    <select class="form-control">
                      <option>Approved</option>
                      <option>Draft</option>
                    </select>
                  </div>
                  
                  <!-- <button type="submit" name="tambah" class="btn btn-bg-maroon.btn-flat">Save</button> -->

                </div>
              </div>
            </form>
          </div>

 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a class="btn btn-success pull-right"  href="addperpem.php"><i class="fa fa-plus"></i> Tambah Pegawai</a>

              <h3 class="box-title"><!-- <i class="fa fa-mortar-board"></i> --> Details</h3>
            </div>
        <div class="box-body" >

           <table  id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Jumlah</th>
                  <th>Satuan</th>
                  <th>Catatan</th>
                  <th>Action</th>
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
                  <td><?php echo $fetch['kd_brg']; ?></td>
                  <td><?php echo $fetch['nm_brg']; ?></td>
                  <td><?php echo $fetch['jml']; ?></td>
                  <td><?php echo $fetch['satuan']; ?></td>
                  <td><?php echo $fetch['catatan']; ?></td>
                  <td>
                    <a class="btn btn-danger" href="../controller/perpemcontroller.php?postid=<?php echo $fetch['id']; ?>&action=delperpem"><i class="fa fa-trash"></i></a> 
                    <a class="btn btn-info" href="editperpem.php?postid=<?php echo $fetch['id']; ?>"><i style="width:12px;" class="fa fa-edit"></i></a>
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
        <input type="button" value="download disini bang" onclick="location.href='../laporan/laporandatapelamar.php'">
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


 <!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
 
 
 <script type="text/javascript">
  $(document).ready(function(){
    $("#table1").DataTable();
  });
</script> -->
