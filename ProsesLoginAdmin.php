<?php
include ("conn.php");

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$q = mysql_query("select * from tb_admin where username='$username' and password_admin='$password'");
$row = mysql_fetch_array ($q);

if (mysql_num_rows($q) == 1) {
	$_SESSION['username'] = $username;
        $_SESSION['nama_admin'] = $row['nama_admin'];
        $_SESSION['photo_admin'] = $row['photo_admin'];
	header('location:admin/index.php');
} else {
	header('location:loginadmin.php?error=4');
}
?>