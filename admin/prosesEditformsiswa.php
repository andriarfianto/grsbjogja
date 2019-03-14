<?php
include "../conn.php";
        $kd_siswa= $_POST['kd_siswa'];
	$nama_siswa=$_POST['nama_siswa'];
        $jk_siswa=$_POST['jk_siswa'];
        $ttl_siswa=$_POST['ttl_siswa'];
        $hari = $_POST['hari'];
        $jam = $_POST['jam'];

$query = mysql_query("UPDATE tb_siswa SET nama_siswa='$nama_siswa', jk_siswa='$jk_siswa', hari='$hari', jam='$jam' WHERE kd_siswa='$kd_siswa'")or die(mysql_error());
if ($query){
header('location:formsiswa.php');	
} else {
	echo "gagal";
    }
?>