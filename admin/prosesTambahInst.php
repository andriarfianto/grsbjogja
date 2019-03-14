<?php
$namafolder = "img_admin/"; //tempat menyimpan file
/*
  $con=mysql_connect("localhost","root","") or die("Gagal");
  mysql_select_db("ecommerce")  or die("Gagal"); */
include "../conn.php";

$kd_instruktur = $_POST['kd_instruktur'];
$nama_instruktur = $_POST['nama_instruktur'];
$jk_instruktur = $_POST['jk_instruktur'];
$ttl_instruktur = $_POST['ttl_instruktur'];
$password_instruktur = $_POST['password_instruktur'];


        $sql = "INSERT INTO tb_instruktur (kd_instruktur,nama_instruktur,jk_instruktur,ttl_instruktur,password_instruktur) VALUES
            ('$kd_instruktur','$nama_instruktur','$jk_instruktur','$ttl_instruktur','$password_instruktur')";
        $res = mysql_query($sql) or die(mysql_error());
        echo "<script>alert('Data sukses ditambahkan'); window.location = 'tambahinst.php'</script>";
        
        /* include "../conn.php";
          $user_id  = $_POST['user_id'];
          $username = $_POST['username'];
          $password = $_POST['password'];
          $fullname = $_POST['fullname'];

          $query = mysql_query("INSERT INTO admin (user_id, username, password, fullname) VALUES ('$user_id', '$username', '$password', '$fullname')");
          if ($query){
          echo "<script>alert('Data Admin Berhasil dimasukan!'); window.location = 'admin.php'</script>";
          } else {
          echo "<script>alert('Data Admin Gagal dimasukan!'); window.location = 'admin.php'</script>";
          } */
?>