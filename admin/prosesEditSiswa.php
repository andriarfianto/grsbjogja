<?php
include "../conn.php";
        $kd_siswa= $_POST['kd_siswa'];
	$nama_siswa=$_POST['nama_siswa'];
        $jk_siswa=$_POST['jk_siswa'];
        $ttl_siswa=$_POST['ttl_siswa'];
        $password_siswa=$_POST['password_siswa'];

$query = mysql_query("UPDATE tb_siswa SET nama_siswa='$nama_siswa', jk_siswa='$jk_siswa', ttl_siswa='$ttl_siswa', password_siswa='$password_siswa' WHERE kd_siswa='$kd_siswa'")or die(mysql_error());
if ($query){
header('location:siswa.php');	
} else {
	echo "gagal";
    }
?>