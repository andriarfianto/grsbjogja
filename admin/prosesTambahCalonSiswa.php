<?php

include '../conn.php';
$aksi = $_POST["aksi"];
if ($aksi == "simpan") {
    $kd_siswa = $_POST['kd_siswa'];
    $nama_siswa = $_POST['nama_siswa'];
    $jk_siswa = $_POST['jk_siswa'];
    $ttl_siswa = $_POST['ttl_siswa'];
    $hari = $_POST['hari'];
    $jam = $_POST['jam'];
    $password_siswa = $_POST['password_siswa'];

    $resSimpan = mysql_query("INSERT INTO tb_siswa VALUES ('" . $kd_siswa . "','" . $nama_siswa . "','" . $ttl_siswa . "','" . $jk_siswa . "','-','-','-','-','" . $password_siswa . "','-','-','no','" . $hari . "','" . $jam . "','-')");
    if ($resSimpan) {
        echo "<script>alert('Data sukses ditambahkan'); window.location = 'tambahcalonsiswa.php'</script>";
    } else {
        echo "<script>alert('Data gagal ditambahkan'); window.location = 'tambahcalonsiswa.php'</script>";
    }
} else if ($aksi == "terima") {
    $kd_siswa = $_POST["kd_siswa"];
    $resTerima = mysql_query("update tb_siswa set status='yes' where kd_siswa = '" . $kd_siswa . "'");
    if ($resTerima) {
        echo "Berhasil Terima";
        header("location:formSiswa.php");
    } else {
        echo "Gagal Terima";
        header("location:formSiswa.php");
    }
}
?>