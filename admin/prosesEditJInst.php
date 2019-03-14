<?php
include "../conn.php";
       $no =$_POST['no'];
       $hari =$_POST['hari'];
       $jam =$_POST['jam'];

$query = mysql_query("UPDATE tb_jadwal_inst SET hari='$hari', jam='$jam' WHERE no='$no'")or die(mysql_error());
if ($query){
header('location:jadwalinst.php');	
} else {
	echo "gagal";
    }
?>