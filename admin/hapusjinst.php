<?php
include "../conn.php";
$no = $_GET['no'];

$query = mysql_query("DELETE FROM tb_jadwal_inst WHERE no='$no'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'jadwalinst.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'jadwakinst.php'</script>";	
}
?>