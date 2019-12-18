<?php
    require_once('../db/config.php');

    class mdlabsensi extends db_connect{ 
 
        public function __construct(){
            $this->connect();
    
        }
 
        public function create($nama, $com,  $em, $dep){
            $stmt = $this->conn->prepare("INSERT INTO `tbpendaftar` (`nama`, `email`, `password`, `no_telp`) 
            VALUES (?, ?, ?, ?)") or die($this->conn->error);
            $stmt->bind_param("ssss", $nama, $email,  $password, $notelp);
            if($stmt->execute()){
                $stmt->close();
                $this->conn->close();
                return true;
            }
        }
        
        public function addabsensi($nama, $com,  $em, $dep){
            $stmt = $this->conn->prepare("INSERT INTO pegawai (nama, com, em, dep) 
            VALUES (?, ?, ?, ?)") or die($this->conn->error);
            $stmt->bind_param("ssss",$nama, $com,  $em, $dep);
            if($stmt->execute()){
                $stmt->close();
                $this->conn->close();
                return true;
               
            }
        }
        
        
       //  public function date(){
       //  $date = date('Y-m-d H:i:s');
       //  $stmt = $this->conn->prepare("INSERT INTO m3_absensi (tgl_absen) VALUES ('$date')");
       // return $date;
   // }
        public function readper(){
            $con = $this->conn;
            $result = mysqli_query($con ,"select * from pegawai");
            return $result;
        }
        public function readperabsen(){
            $con = $this->conn;
            $result = mysqli_query($con ,"SELECT m3_absensi.tgl_absen, m3_absensi.kd_absensi, m3_absensi.jam_datang, m3_absensi.kd_jadwal, m2_pegawai.nip, m2_pegawai.nama_pegawai FROM m3_absensi JOIN m2_pegawai on m3_absensi.nip = m2_pegawai.nip
");
            return $result;
        }
        
        public function readperb(){
            $con = $this->conn;
            $result = mysqli_query($con ,"select * from m1_employe");
            return $result;
        }
        public function readperc(){
            $con = $this->conn;
            $result = mysqli_query($con ,"select * from m1_departemen");
            return $result;
        }
         public function readperview($nip){
            $con = $this->conn;
            $result = mysqli_query($con ,"select * from m3_absensi where id = '$nip'");
            return $result;
        }
         public function readperviewb($nip){
            $con = $this->conn;
            $result = mysqli_query($con ,"SELECT m3_absensi.id, m3_absensi.tgl_absen, m3_absensi.kd_absensi, m3_absensi.jam_datang, m3_absensi.kd_jadwal, m2_pegawai.nip, m2_pegawai.nama_pegawai FROM m3_absensi JOIN m2_pegawai on m3_absensi.nip = m2_pegawai.nip
 where id = '$nip'");
            return $result;
        }
        // public function readperview($nip){
        //     $con = $this->conn;
        //     $result = mysqli_query($con ,"SELECT ab.id, ab.nip, ab.kd_absensi, ab.tgl_absen, ab.jam_datang, ab.jam_pulang, ab.kd_jadwal, ab.created_at, pe.nip, pe.nama_pegawai FROM m3_absensi ab JOIN m2_pegawai pe ON ab.nip = pe.nip where ab.id = '$nip'");
        //     return $result;
        // }

        public function deleteabsensi($postid){
            $con = $this->conn;
            mysqli_query($con ,"delete from pegawai where id = '$postid'");
        }

        public function veditabsensi($postid){
            $con = $this->conn;
            $result = mysqli_query($con ,"select * from pegawai where id = '$postid'");
            return $result;
        }

        public function update($id, $nama, $com,  $em, $dep){
            $con = $this->conn;
            $result = mysqli_query($con,"update pegawai set nama='$nama', com='$com', em='$em', dep='$dep' where id='$id'");
            return $result;
        }
        function get_lastno(){
        $con = $this->conn;
        $sql = "SELECT SUBSTRING(kd_absensi, 5, 10) as lastid FROM m3_absensi ORDER BY kd_absensi DESC LIMIT 1";
        $query = mysqli_query($con,$sql);
        while($data = mysqli_fetch_array($query)){
            $hasil[] = $data;
        }
        return $hasil;
    }

        function get_no() {
        $con = $this->conn;
        $db = new mdlabsensi();
        $last = $db->get_lastno();
        $jumlah = $last[0]['lastid'];
        $id = $jumlah + 1;
        return $id;
    }


    public function openreadabsen($tglawal , $tglakhir ){
            $con = $this->conn;
            $result = mysqli_query($con ,"select * from m3_absensi where (tgl_absen BETWEEN '$tglawal' AND '$tglakhir' )");
            return $result;
        }

    public function openreadabsenA( $nip){
            $con = $this->conn;
            $result = mysqli_query($con ,"select * from m3_absensi where  nip='$nip'");
            return $result;
        }


        /*public function countdatapelamar(){
            $con = $this->conn;
            $coba = mysqli_query($con, "SELECT COUNT(idpendaftar) as 'total' from tbpendaftar");
            $data=mysqli_fetch_assoc($coba);
            echo $data['total'];
        }*/
     
    }   
?>