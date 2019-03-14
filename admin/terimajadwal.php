<?php
include '../conn.php';
    $kd = $_GET['kd'];
    $kd_siswa = $_GET['kd_siswa'];
    $jam =$_GET['jam'];
    $hari = $_GET['hari'];
    
    $resSimpan = mysql_query("update tb_berubah_jadwal set status='diterima' where kd='$kd'");
    if($resSimpan){     
    $resSimpan2 = mysql_query("update tb_siswa set hari='$hari', jam='$jam' where kd_siswa='$kd_siswa'");
    if($resSimpan2){
        echo "<script>alert('Permintaan diterima'); window.location = 'ubahjadwal.php'</script>";
    }else{
        echo "gagal<script>alert('Permintaan ditolak'); window.location = 'ubahjadwal.php'</script>";
    };
    
    }else{
        echo "<script>alert('Permintaan gagal'); window.location = 'ubahjadwal.php'</script>";
    }
    
    ?>