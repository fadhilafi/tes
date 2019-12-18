<?php  
  include 'header.php';
  $page= 'dashboard'; 
  include 'sidebar.php';
?>

  <!-- ======================CONTENT============================== -->

  <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
      </ol>
    </section>
    <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
          <h1><center><b> Sistem Informasi Kepegawaian</b></center></h1>
          <p><center><h3>Pabrik Rokok</center></h3></p> 
                </div><!-- /.box-header -->
                <div class="box-body">
          <div class="col-md-8">
                    <div class="panel panel-default">
                        <div id="carousel-example" class="carousel slide" data-ride="carousel" style="border: 2px solid #000;">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="../assets/image/1.jpg" />
                                </div>
                                <div class="item">
                                    <img src="../assets/image/2.jpg" />
                                </div>
                                <div class="item">
                                    <img src=../assets/image/3.jpg" />
                                </div>
                                <div class="item">
                                    <img src="../assets/image/4.jpg" />
                                </div>
                                <div class="item">
                                    <img src=../assets/image/5.jpg" />
                                </div>
                            </div>
                            <!--INDICATORS-->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example" data-slide-to="1"></li>
                                <li data-target="#carousel-example" data-slide-to="2"></li>
                                <li data-target="#carousel-example" data-slide-to="3"></li>
                                <li data-target="#carousel-example" data-slide-to="4"></li>
                            </ol>
                            <!--PREVIUS-NEXT BUTTONS-->
                            <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->


      <!-- /.row -->

      <!-- modals Tambah-->

        <!-- /.modal -->

        <!-- modals Edit -->
   
       
        <!-- /.modal -->

        <!-- modals Hapus -->
       
        <!-- /.modal -->
      
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("footer.php");?>
</div>