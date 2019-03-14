<?php
include "../conn.php";

$kd_kelas = $_POST['kd_kelas'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];

        $sql = "INSERT INTO tb_jadwal_inst (kd_kelas, hari, jam) VALUES
            ('$kd_kelas', '$hari', '$jam')";
        $res = mysql_query($sql) or die(mysql_error());
        echo "<script>alert('Data sukses ditambahkan'); window.location = 'tambahjinst.php'</script>";
        
       
?>