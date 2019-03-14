<?php
include '../conn.php';
    $kd_siswa = $_POST['kd_siswa'];
    $hari = $_POST['hari'];
    $jam = $_POST['jam'];

    $resSimpan = mysql_query("insert into tb_berubah_jadwal (kd_siswa, hari, jam, status) values ('$kd_siswa', '$hari', '$jam','menunggu')");
    if($resSimpan){
        echo "<script>alert('Data sukses diinput'); window.location = 'formkursus.php'</script>";
    }else{
        echo "<script>alert('Data GAGAL diinput'); window.location = 'formkursus.php'</script>";
    }


?>