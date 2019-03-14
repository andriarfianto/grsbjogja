<?php
include ("conn.php");

session_start();
$kd_instruktur = $_POST['kd_instruktur'];
$password_instruktur = $_POST['password_instruktur'];

$kd_instruktur = mysql_real_escape_string($kd_instruktur);
$password_instruktur = mysql_real_escape_string($password_instruktur);

$q = mysql_query("select * from tb_instruktur where kd_instruktur='$kd_instruktur' and password_instruktur='$password_instruktur'");
$row = mysql_fetch_array ($q);

if (mysql_num_rows($q) == 1) {
	$_SESSION['kd_instruktur'] = $kd_instruktur;
        $_SESSION['nama_instruktur'] = $row['nama_instruktur'];
        $_SESSION['photo_instruktur'] = $row['photo_instruktur'];
	header('location: inst/index.php');
} else {
	header('location:logininst.php?error=4');
}
?>