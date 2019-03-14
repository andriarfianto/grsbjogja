<?php
include '../conn.php';
$kd = $_GET['kd'];

$resSimpan = mysql_query("delete from tb_berubah_jadwal where kd='$kd'");
    if($resSimpan){
        echo "<script>alert('Data sukses dihapus'); window.location = 'ubahjadwal.php'</script>";
    }else{
        echo "<script>alert('Data GAGAL dihapust'); window.location = 'ubahjadwal.php'</script>";
    }
?>