<?php
include "../conn.php";
$username = $_GET['username'];

$query = mysql_query("DELETE FROM tb_admin WHERE username='$username'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'admin.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'admin.php'</script>";	
}
?>