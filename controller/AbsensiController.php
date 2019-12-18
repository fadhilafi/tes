<?php
	require_once '../db/mdl_absensi.php';
	$conn = new mdlabsensi();


	$action = $_GET['action'];
	if($action == "tambah"){	
			$nama = $_POST['nama'];
			$com  = $_POST['com'];
			$em = $_POST['em'];
			$dep = $_POST['dep'];
			$conn->create($nama, $com,  $em, $dep);
			header('location: signup.php');

}elseif($action == "tambahabsensi"){ 	
   		 	$nama = $_POST['nama'];
    		$com = $_POST['com'];
    		$em = $_POST['em'];
    		
    		$kd_departemen = $_POST['kd_departemen'];
    		
    		
    		
			$conn->addabsensi($nama, $com, $em, $kd_departemen);
		   	header("location:../kepegawaian/absensi.php");	
		
	
	}elseif($action == "delabsensi"){ 	
		$conn->deleteabsensi($_GET['postid']);
		header("location:../kepegawaian/absensi.php");

	}elseif($action == "editabsensi"){
			$id = $_POST['eid'];
			$nama = $_POST['nama'];
			$com  = $_POST['com'];
			$em = $_POST['em'];
			$kd_departemen = $_POST['kd_departemen'];
			$conn->update($id, $nama, $com,  $em, $kd_departemen);
    		
			header("location:../kepegawaian/absensi.php");

	}elseif($action == "ahahaha"){ 	
			$nama = $_POST['postnama'];
			$nope = $_POST['postphonenumber'];
			
			// header("location:../admin/DataPelamar.php");

	}

	
?>