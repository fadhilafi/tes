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
        <small>Data Kepegawaian</small>
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
                 <h2 class="box-title"><b>Add Data Kepegawaian</b>
                </h2>
                </div>
             <!-- form start -->
                    <form role="form" action="../controller/absensicontroller.php?action=tambahabsensi" Method="POST">
                <div class="box-body">
                   <table  id="example1" class="table table-bordered table-hover" border="1">
                <thead>
                
                   
                 
                    
                  
                      <label for="nama">Nama Pegawai</label>
                     <div class="form-group input-group">
                        
                        <input name="nama" type="text" class="form-control" id="nama" placeholder="Enter Nama Pegawai" >
                    </div>
                    <label for="com">Company</label>
                     <div class="form-group input-group">
                        
                        <input name="com" type="text" class="form-control" id="com" placeholder="Enter Company" >
                    </div>
                   <!--  <label for="em">Employe</label>
                     <div class="form-group input-group">
                        
                        <input name="em" type="text" class="form-control" id="em" placeholder="Enter employe" >
                    </div>
                     -->
                    
                    

                  
                     <label for="em">Employe</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar-check-o"></i></span>
                        <select name="em" class="form-control">
                          <option>-- Pilih Employe --</option>
                     <?php
                    
                       $readperb = $conn->readperb();
                      while($fetch = $readperb->fetch_array()){?>
                        <option value=<?php echo $fetch['em'];?>>
                          <?php echo $fetch['salary'];?></option>
                      
                      <?php
                      }
                    ?>
                    </select>
                    </div>
                       <label for="kd_departemen">Departemen</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar-check-o"></i></span>
                        <select name="kd_departemen" class="form-control">
                          <option>-- Pilih Departemen --</option>
                     <?php
                    
                       $readperc = $conn->readperc();
                      while($fetch = $readperc->fetch_array()){?>
                        <option value=<?php echo $fetch['kd_departemen'];?>>
                          <?php echo $fetch['nama_departemen'];?></option>
                      
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