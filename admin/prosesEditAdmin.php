<?php
include "../conn.php";
        $username= $_POST['username'];
	$nama_admin=$_POST['nama_admin'];
        $jk_admin=$_POST['jk_admin'];
        $ttl_admin=$_POST['ttl_admin'];
        $password_admin=$_POST['password_admin'];

$query = mysql_query("UPDATE tb_admin SET nama_admin='$nama_admin', jk_admin='$jk_admin', ttl_admin='$ttl_admin', password_admin='$password_admin' WHERE username='$username'")or die(mysql_error());
if ($query){
header('location:admin.php');	
} else {
	echo "gagal";
    }
?>