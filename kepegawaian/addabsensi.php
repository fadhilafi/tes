<?php 
require '../db/mdl_absensi.php';
 $conn = new mdlabsensi(); 
$page= 'kepegawaian';
// include 'header.php';
// include 'sidebar.php';
?>

  <!-- ====================== CONTENT ============================== -->

  <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" align="center">
      <h1>
         Bag. Kepegawaian
         <br>
        <small>Data Karyawan</small>
      </h1>
     <!--  <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Bag. Kepegawaian</a></li>
        <li class="active">Daftar Hadir</li>
      </ol> -->
    </section>
    
        <section class="content">


    <div class="row">
        <div class="col-lg-7">
            <div class="box box-primary">
                <div class="box-header with-border">
                 <h2 class="box-title"><b>Add Data Karyawan</b>
                </h2>
                </div>
             <!-- form start -->
                    <form role="form" action="../controller/absensicontroller.php?action=tambahabsensi" Method="POST">
                <div class="box-body">
                   <table  id="example1" class="table table-bordered table-hover" border="1">
                <thead>
                
                   
                 
                    <!-- 
                    <label for="nama">Nama Pegawai</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-pencil-square-o"></i></span>
                        <select name="nip" class="form-control">
                          <option>-- pilih nama pegawai --</option>
                     <?php
                    
                       $readpera = $conn->readpera();
                      while($fetch = $readpera->fetch_array()){?>
                        <option value=<?php echo $fetch['nip'];?>>
                          <?php echo $fetch['nama_pegawai'];?></option>
                      
                      <?php
                      }
                    ?>
                    </select>
                    </div> -->
                   <label for="nama">Nama Pegawai</label>
                     <div class="form-group input-group">
                        
                        <input name="nama" type="text" class="form-control" id="nama" placeholder="Enter nama_pegawai">
                    </div>
                    <!--  <label for="dep">Departemen</label>
                     <div class="form-group input-group">
                        
                        <input name="dep" type="text" class="form-control" id="dep" placeholder="Enter Departemen">
                    </div> -->
                     <label for="com">Company</label>
                     <div class="form-group input-group">
                        
                        <input name="com" type="text" class="form-control" id="com" placeholder="Enter Company">
                    </div>

                  

                   

                  
                      <label for="kd_jadwal">Jadwal</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar-check-o"></i></span>
                        <select name="kd_jadwal" class="form-control">
                          <option>-- Pilih Jadwal --</option>
                     <?php
                    
                       $readperb = $conn->readperb();
                      while($fetch = $readperb->fetch_array()){?>
                        <option value=<?php echo $fetch['jadwal'];?>>
                          <?php echo $fetch['jadwal'];?></option>
                      
                      <?php
                      }
                    ?>
                    </select>
                    </div>

                    
                  

                    

                   
                    
                   
                </div>
              <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </thead>
            </table>
                    </form>
        
          </div>
        </div> 
    
    
    

    <!-- /.END ROW DISINI BANGSAT -->
    </div>
    <!-- /.END Section CONTENT -->
    </section>

  </div>
  <!-- /.content-wrapper -->


<?php 
include 'footer.php';
 ?>