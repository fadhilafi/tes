<?php
	

  require '../db/mdl_absensi.php';
                  $conn = new mdlabsensi();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Laporan Bulanan Daftar Hadir</title>
</head>
<body>
	<?php

        $tglawal = $_POST['form_tgl_awal'];
        $tglakhir = $_POST['form_tgl_akhir'];
        $openreadabsen = $conn->openreadabsen($tglawal, $tglakhir);
      

                  while($fetch = $openreadabsen->fetch_array()){ 


                    $openreadabsenA = $conn-> openreadabsenA($fetch['nip']);


               
                  
            
        
        
        
    ?> 
    <h3 style="text-align:center">ERP Rokok</h3>
    <h3 style="text-align:center; margin-top:-20px;">Laporan Bulanan Daftar Hadir </h3>
    <h4 style="text-align:center; margin-top:-15px;"><?php echo date('d M Y',strtotime($tglawal));?> s/d <?php echo date('d M Y',strtotime($tglakhir));?></h4> 
    <div style="page-break-after: always;">
    	<table border="0" width="1024px" cellpadding="2" cellspacing="0" style="margin-top: 40px;">
   	<tr>
			<td width="50"></td>
			<td width="150px"><b>Bagian</b></td>
			<td width="20px" align="center"> : </td>
			<td width="200px"> Admin</td> 
			<td width="350px">  </td>
			<td width="130px"><b>No Daftar Hadir</b></td>
			<td width="20px" align="center"> : </td>
			<td width="200px"><?php echo $fetch['kd_absensi']; ?></td> 
		</tr>
		<tr>
			<td width="50"></td>
			<td width="150px"><b> Departemen </b></td>
			<td width="20px" align="center"> : </td>
			<td width="200px"></td> 
			<td width="350px">  </td>
			<td width="130px"><b> Tanggal </b></td>
			<td width="20px" align="center"> : </td>
			<td width="200px"><?php echo $fetch['tgl_absen']; ?></td> 
		</tr>	
		<tr>
			<td width="50"></td>
			<td width="150px"><b>Uraian</b></td>
			<td width="20px" align="center"></td>
			<td width="200px"></td> 
			<td width="350px">  </td>
			<td width="130px"><b> Status </b></td>
			<td width="20px" align="center"> : </td>
			<td width="200px">approved</td> 
	</tr>		
	</table>

    	<hr width="945px" style=" margin-left:45px; border-top: dotted 1px;">
    	<table border="0" width="945px" cellpadding="0" cellspacing="0" style=" margin-left:45px;">
    		<thead>
    			<tr>
                    <th width="30" align="left">No</th>
                    <th width="150" align="left">NIP</th>
                    <th width="150" align="left">Nama Pegawai</th>
                    <th width="100" align="right">Jam Datang</th>
                    <th width="230" align="right">Jam Pulang</th>
                    <th width="230" align="right">Jadwal</th>
                </tr>
    		</thead>
    		<tbody>
    			
    		</tbody>
    	</table>
        <hr style="border-top: dotted 1px; margin-left:45px;"  width="945px">
        
        <table border="0" width="945px" cellpadding="2" cellspacing="0" style="margin-top: -10px; margin-left:45px;">
		<tbody>
			<?php 
			$no = 1;
		
                  while($fetch = $openreadabsenA->fetch_array()){ 
                

                     
                  	?>
			<tr>
                <td width="30" align="left"><?php echo $no++."."; ?></td>
                  <td width="150" align="left"><?php echo $fetch['nip']; ?></td>
                  <td width="150" align="left"><?php echo $fetch['nama_pegawai']; ?></td>
                  <td width="100" align="left"><?php echo $fetch['jam_datang']; ?></td>
                  <td width="100" align="right"><?php echo $fetch['jam_pulang']; ?></td>
                  <td width="200" align="right"><?php echo $fetch['kd_jadwal']; ?></td>
            </tr>	
		</tbody>
		<?php 
	}?>
	</table>
  <br><br><br>
   <table>
     <tr>
      <td width="700">Pabrik Rokok</td>
      <td>Mengetahui</td>
    </tr>
    <tr>
      <td width="700">Bagian Kepegawaian</td>
      <td>HRD</td>
    </tr>
    <tr>
      <td width="700" height="50"></td>
      <td height="50"></td>
    </tr>
    <tr>
      <td width="700">...............................</td>
      <td>...............................</td>
    </tr>
  </table>
    </div>
    <?php 
        
    }
    ?>
</body>
<script type="text/javascript">
//window.onload = function () {

	var tgl_absen = new Date();
	document.title = "Laporan Daftar Hadir_"+tgl_absen.getDate()+"_"+(tgl_absen.getMonth() + 1)+"_"+tgl_absen.getFullYear();
	//alert(title);
	window.print();
//}
</script>
</html>