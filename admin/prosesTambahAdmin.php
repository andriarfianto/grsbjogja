<?php
$namafolder = "img_admin/"; //tempat menyimpan file
/*
  $con=mysql_connect("localhost","root","") or die("Gagal");
  mysql_select_db("ecommerce")  or die("Gagal"); */
include "../conn.php";

$username = $_POST['username'];
$nama_admin = $_POST['nama_admin'];
$jk_admin = $_POST['jk_admin'];
$ttl_admin = $_POST['ttl_admin'];
$password_admin = $_POST['password_admin'];


        $sql = "INSERT INTO tb_admin (username,nama_admin,jk_admin,ttl_admin,password_admin) VALUES
            ('$username','$nama_admin','$jk_admin','$ttl_admin','$password_admin')";
        $res = mysql_query($sql) or die(mysql_error());
        echo "<script>alert('Data sukses ditambahkan'); window.location = 'tambahadmin.php'</script>";
        
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