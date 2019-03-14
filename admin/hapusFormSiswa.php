<?php
include "../conn.php";
$kd_siswa = $_GET['kd_siswa'];

$query = mysql_query("DELETE FROM tb_siswa WHERE kd_siswa='$kd_siswa'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'formSiswa.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'formSiswa.php'</script>";	
}
?>