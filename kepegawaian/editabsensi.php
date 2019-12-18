<?php  
require '../db/mdl_absensi.php';
$con = new mdlabsensi();
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
        <small>Daftar Hadir</small>
      </h1>
      <ol class="breadcrumb">
        <!-- <li><a href="#"><i class="fa fa-dashboard"></i>Bag. Kepegawaian</a></li>
        <li class="active">Daftar Hadir</li> -->
      </ol>
    </section>
    
        <section class="content">
    <div class="row">
        <div class="col-lg-7">
            <div class="box box-primary">
                <div class="box-header with-border">
                 <h2 class="box-title"><b>Edit Absensi</b>
                </h2>
                </div>
             <!-- form start -->

                <?php
                    
                    $tampil = $con->veditabsensi($_GET['postid']);
                    while($fetch = $tampil->fetch_array()){ 
                      
                ?>                    
                    
                <form role="form" action="../controller/absensicontroller.php?action=editabsensi" Method="POST">
                <div class="box-body">
                    <input type="hidden" name="eid" value="<?php echo $fetch['id'] ?>">
                    <label for="nama">Nama Pegawai</label>
                     <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input name="nip" type="text" class="form-control" id="nip" value="<?php echo $fetch['nama'] ?>" readonly placeholder="Enter Nama">
                    </div>
                     <label for="com">Company</label>
                     <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input name="com" type="text" class="form-control" id="com" placeholder="Enter Kode Absensi" value="<?php echo $fetch['com'] ?>" readonly >
                    </div>
                   

                 
                         <label for="em">Employe</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar-check-o"></i></span>
                        <select name="em" class="form-control" >
                            <option>-- Pilih Employe --</option>
                     <?php
                    
                       $readperb = $con->readperb();
                      while($fetch2 = $readperb->fetch_array()){?>
                        <option value=<?php echo $fetch2['em'];?>
                        <?php if($fetch2['em']==$fetch['em']){?> selected="selected" <?php }?>>
                          <?php echo $fetch2['em'];?></option>
                      
                      <?php
                      }
                    ?>
                    </select>
                    </div>
                      <label for="dep">Departemen</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar-check-o"></i></span>
                        <select name="edep" class="form-control" >
                            <option>-- Pilih Departemen --</option>
                     <?php
                    
                       $readperc = $con->readperc();
                      while($fetch3 = $readperc->fetch_array()){?>
                        <option value=<?php echo $fetch2['dep'];?>
                        <?php if($fetch3['dep']==$fetch['dep']){?> selected="selected" <?php }?>>
                          <?php echo $fetch3['dep'];?></option>
                      
                      <?php
                      }
                    ?>
                    </select>
                    </div>
                    
                   

                    <?php
                    }
                    ?>
                    
                   
                </div>
              <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
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