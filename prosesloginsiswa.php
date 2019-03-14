<?php
include ("conn.php");

session_start();
$kd_siswa = $_POST['kd_siswa'];
$password_siswa = $_POST['password_siswa'];

$kd_siswa = mysql_real_escape_string($kd_siswa);
$password_siswa = mysql_real_escape_string($password_siswa);

$q = mysql_query("select * from tb_siswa where kd_siswa='$kd_siswa' and password_siswa='$password_siswa'");
$row = mysql_fetch_array ($q);

if (mysql_num_rows($q) == 1) {
	$_SESSION['kd_siswa'] = $kd_siswa;
        $_SESSION['nama_siswa'] = $row['nama_siswa'];
        $_SESSION['photo_siswa'] = $row['photo_siswa'];
	header('location: siswa/index.php');
} else {
	header('location:loginsiswa.php?error=4');
}
?>