<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Login Sistem Informasi Nilai">
        <meta name="author" content="">
        <meta name="keyword" content="">

        <title>Instruktur LOGIN</title>
        <script language="Javascript">
            document.write('<link rel="icon" href="./img/favicon.ico">')
        </script>

        <!-- pemanggilan direktory file bootstrap.css -->
        <link href="asset/css/bootstrap.css" rel="stylesheet">
        <!-- pemanggilan direktory file css font-->
        <link href="asset/font-awesome/css/font-awesome.css" rel="stylesheet" />

        <!-- pemanggilan direktori file css custom template -->
        <link href="asset/css/style.css" rel="stylesheet">
        <link href="asset/css/style-responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body style="background-color: #f4f4f4">

        <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->

        <div id="login-page">
            <div class="container">	  	
                <form style="background-color:rgba(255,255,255,0.78)" class="form-login" method="post" action="proseslogininst.php">
                    <center><h3 class="fa fa-lock"> <span"></span> GRSB Login Instruktur<span"></span></h3></center>
                    <div class="login-wrap">
                        <div class="form-group">
                            <div  class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input id="kd_instruktur" type="text" class="form-control" name="kd_instruktur" value="" placeholder="Username">                                        
                            </div>
                        </div>
                        <div class="form-group">
                            <div  class="input-group">
                                <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
                                <input id="password_instruktur" type="password" class="form-control" name="password_instruktur" placeholder="Password">
                            </div>
                        </div>
                        <button class="btn btn-lg btn-success btn-block" type="submit"> Masuk</button>
                    </div>
                    <div class="registration">
                        <center>Gilang Ramadhan Studio Band Jogja</center>                        
                        <center><a href="index.php">Kembali ke Halaman Utama</a></center>
                        <br>
                    </div>
                </form>	  	

            </div>
        </div>
        

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="asset/js/jquery.js"></script>
        <script src="asset/js/bootstrap.min.js"></script>

        <!--BACKSTRETCH-->
        <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
        <script type="text/javascript" src="asset/js/jquery.backstretch.min.js"></script>
        <!-- Pemanggilan Background Login Form-->

    </body>
</html>
