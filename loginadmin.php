<?php
/*pdo
session_start();

//include database connection
include './config/conn.php';

//check if button click then send data
if (isset($_POST['submit'])){


    //query prepare
    $query = $conn->prepare("SELECT username, password_admin FROM tb_admin WHERE username = :username AND password_admin = :password");
    $query->bindParam(':username', $_POST['username']);
    $query->bindParam(':password', $_POST['password']);
    $query->execute();

    if ($row = $query->fetch()) {
        $_SESSION['username'] = $row['username'];
        header('Location: admin/index.php');
    }
    */
    
    /*
    if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            //query prepare
            $query = $conn->prepare("SELECT COUNT (id) FROM admin WHERE username = $username AND password = $password");
            $query->execute();
            $count = $query->fetchColoum();

            if ($count == 1) {
                $_SESSION['username'] = $username;
                header('Location: welcome.php');
            }
        }
    */
    
    /*
    $query = dbConnect()->prepare("SELECT username, password FROM users WHERE username=:username AND password=:password");
        $query->bindParam(':username', $_POST['username']);
        $query->bindParam(':password', $_POST['password']);
        $query->execute();

        if($row = $query->fetch()){
            $_SESSION['username'] = $row['username'];
            header('Location: /admin/index.php');
        }
    }*/
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Login Administrator GRSB Jogja">
        <meta name="author" content="">
        <meta name="keyword" content="">
        <title>ADMIN LOGIN</title>
        
        <!-- Favicon-->
        <link rel="shortcut icon" type="image/ico" href="img/favicon.ico">
        <!-- pemanggilan direktory file bootstrap.css -->
        <link href="asset/css/bootstrap.css" rel="stylesheet">
        <!-- pemanggilan direktory file css font-->
        <link href="asset/font-awesome/css/font-awesome.css" rel="stylesheet" />

        <!-- pemanggilan direktori file css custom template -->
        <link href="asset/css/style.css" rel="stylesheet">
        <link href="asset/css/style-responsive.css" rel="stylesheet">

    </head>
    <body style="background-color: #c3c3c3;">        
        <div class="container">	  	            
            <form style="background-color:rgba(255,255,255,0.78)" class="form-login" method="post" action="ProsesLoginAdmin.php">
                <center><h3 class="fa fa-lock"> <span"></span> LOGIN ADMIN<span"></span></h3></center>
                <div class="login-wrap">
                    <div class="form-group">
                        <div  class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input id="username" type="text" class="form-control" name="username" value="" placeholder="username">                                        
                        </div>
                    </div>
                    <div class="form-group">
                        <div  class="input-group">
                            <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
                            <input id="password" type="password" class="form-control" name="password" placeholder="password">
                        </div>
                    </div>
                    <button name="submit" class="btn btn-lg btn-success btn-block" type="submit"> Masuk</button>

                    <hr>                    
                    <div class="registration">
                        Gilang Ramadhan Studio Band Jogja
                        <br>
                        <a href="index.php">Kembali ke Halaman Utama</a>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>


