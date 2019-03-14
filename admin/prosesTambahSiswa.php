<?php

include '../conn.php';

$kd_siswa = $_POST['kd_siswa'];
$nama_siswa = $_POST['nama_siswa'];
$jk_siswa = $_POST['jk_siswa'];
$ttl_siswa = $_POST['ttl_siswa'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$password_siswa = $_POST['password_siswa'];

$resSimpan = mysql_query("INSERT INTO tb_siswa VALUES ('" . $kd_siswa . "','" . $nama_siswa . "','" . $ttl_siswa . "','" . $jk_siswa . "','-','-','-','-','" . $password_siswa . "','-','-','yes','" . $hari . "','" . $jam . "','-')");
if ($resSimpan) {
    echo "<script>alert('Data sukses ditambahkan'); window.location = 'tambahsiswa.php'</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan'); window.location = 'tambahsiswa.php'</script>";
}
?>