<?php 
	include 'koneksi.php';
	if (isset($_POST['log'])) {
		$user = mysqli_real_escape_string($link, $_POST['email']);
		$pass = mysqli_real_escape_string($link, $_POST['password']);

		$query = mysqli_query($link, "SELECT * FROM tbl_login WHERE username='$user' and password='$pass'");
		$data = mysqli_fetch_array($query);
		$username = $data['username'];
		$password = $data['password'];
		$level = $data['level'];
		$nama = $data['nama'];
		$id = $data['iduser'];

		$query1 = mysqli_query($link, "SELECT * FROM m2_pegawai WHERE iduser='$id' ");
		$data1 = mysqli_fetch_array($query1);
		$nip = $data1['nip'];
		$dep = $data1['kd_departemen'];

		if ($user==$username && $pass==$password) {
			session_start();
			$_SESSION['user'] = $username;
			$_SESSION['level'] = $level;
			$_SESSION['nama'] = $nama;
			$_SESSION['iduser'] = $id;
			$_SESSION['nip'] = $nip;
			$_SESSION['nama_departemen'] = $dep;
			// $_SESSION['log'];

			if ($level === 'admin') {
				echo "<script> alert('Anda login sebagai $level'); </script>";
				echo "<meta http-equiv='refresh' content='0; url=..admin/absensi.php'>";
			}elseif ($level === 'user') {
				echo "<script> alert('Anda login sebagai $level'); </script>";
				echo "<meta http-equiv='refresh' content='0; url=../user/index.php'>";

			}elseif ($level === 'absen') {
				echo "<script> alert('Anda login sebagai $level'); </script>";
				echo "<meta http-equiv='refresh' content='0; url=../absen/dashboard.php'>";
			}elseif ($level === 'gm') {
				echo "<script> alert('Anda login sebagai $level'); </script>";
				echo "<meta http-equiv='refresh' content='0; url=../gm/dashboard.php'>";
			}elseif ($level === 'kepegawaian') {
				echo "<script> alert('Anda login sebagai $level'); </script>";
				echo "<meta http-equiv='refresh' content='0; url=../kepegawaian/absensi.php'>";
			}elseif ($level === 'pegawai') {
				echo "<script> alert('Anda login sebagai $level'); </script>";
				echo "<meta http-equiv='refresh' content='0; url=../pegawai/dashboard.php'>";
			}else {
				echo "<script> alert('username atau password salah'); </script>";
				echo "<meta http-equiv='refresh' content='0; url=../login.php'>";
			}

		}
		
	}

 ?>