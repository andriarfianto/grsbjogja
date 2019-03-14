<?php
include "../conn.php";
        $kd_instruktur= $_POST['kd_instruktur'];
	$nama_instruktur=$_POST['nama_instruktur'];
        $jk_instruktur=$_POST['jk_instruktur'];
        $ttl_instruktur=$_POST['ttl_instruktur'];
        $password_instruktur=$_POST['password_instruktur'];

$query = mysql_query("UPDATE tb_instruktur SET nama_instruktur='$nama_instruktur', jk_instruktur='$jk_instruktur', ttl_instruktur='$ttl_instruktur', password_instruktur='$password_instruktur' WHERE kd_instruktur='$kd_instruktur'")or die(mysql_error());
if ($query){
header('location:inst.php');	
} else {
	echo "gagal";
    }
?>