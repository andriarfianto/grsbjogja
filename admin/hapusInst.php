<?php
include "../conn.php";
$kd_instruktur = $_GET['kd_instruktur'];

$query = mysql_query("DELETE FROM tb_instruktur WHERE kd_instruktur='$kd_instruktur'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'inst.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'inst.php'</script>";	
}
?>