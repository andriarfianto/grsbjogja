<?php
include '../conn.php';
$aksi = $_POST["aksi"];
if($aksi=="simpan"){
    $nama_siswa = $_POST['nama_siswa'];
    $jk_siswa = $_POST['jk_siswa'];
    $alamat_siswa = $_POST['alamat_siswa'];
    $tmpt_lahir_siswa = $_POST['tmpt_lahir_siswa'];
    $ttl_siswa = $_POST['ttl_siswa'];
    $agama_siswa = $_POST['agama'];
    $hari = $_POST['hari'];
    $jam = $_POST['jam'];

    $resSimpan = mysql_query("INSERT INTO tb_siswa VALUES ('','".$nama_siswa."',current_timestamp,'".$jk_siswa."','".$alamat_siswa."','-','".$agama_siswa."','-','-','-','-','no','".$hari."','".$jam."','".$tmpt_lahir_siswa."')");
    if($resSimpan){
        echo "Berhasil";
        header("location:index.php");
    }else{
        echo "Gagal";
        header("location:index.php");
    }

}else if($aksi=="terima"){
    $kd_siswa = $_POST["kd_siswa"];
    $resTerima = mysql_query("update tb_siswa set status='yes' where kd_siswa = '".$kd_siswa."'");
    if($resTerima){
        echo "Berhasil Terima";
        header("location:formSiswa.php");
    }else{
        echo "Gagal Terima";
        header("location:formSiswa.php");
    }
}
?>