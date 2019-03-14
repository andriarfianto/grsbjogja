<?php
include '../conn.php';
    $kd = $_GET['kd'];
    
    $resSimpan = mysql_query("update tb_berubah_jadwal set status='ditolak' where kd='$kd'");
    if($resSimpan){     
    echo "<script>alert('Permintaan ditolak'); window.location = 'ubahjadwal.php'</script>";      
    }
    else{
        echo "<script>alert('Permintaan gagal'); window.location = 'ubahjadwal.php'</script>";
    }
    
    ?>