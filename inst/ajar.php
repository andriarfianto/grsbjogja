<?php
session_start();
if (empty($_SESSION['kd_instruktur'])) {
    header('location:../index.php');
} else {
    include "../conn.php";
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>INSTRUKTUR GRSB</title>

        <!-- Bootstrap core CSS -->

        <link href="../admin/asset/css/bootstrap.min.css" rel="stylesheet">

        <link href="../admin/asset/fonts/css/font-awesome.min.css" rel="stylesheet">
        <link href="../admin/asset/css/animate.min.css" rel="stylesheet">

        <!-- Custom styling plus plugins -->
        <link href="../admin/asset/css/custom.css" rel="stylesheet">
        <link rel="../admin/stylesheet" type="text/css" href="asset/css/maps/jquery-jvectormap-2.0.1.css" />
        <link href="../admin/asset/css/icheck/flat/green.css" rel="stylesheet" />
        <link href="../admin/asset/css/floatexamples.css" rel="stylesheet" type="text/css" />

        <script src="../admin/asset/js/jquery.min.js"></script>
        <script src="../admin/asset/js/nprogress.js"></script>
        <script>
            NProgress.start();
        </script>

        <!--[if lt IE 9]>
            <script src="../assets/js/ie8-responsive-file-warning.js"></script>
            <![endif]-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->

    </head>


    <body class="nav-md">

        <div class="container body">


            <div class="main_container">

                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">

                        <div class="navbar nav_title" style="border: 0;">
                            <a href="index.html" class="site_title"><i class="fa fa-gear"></i> <span>Instruktur GRSB</span></a>
                        </div>
                        <div class="clearfix"></div>

                        <!-- menu prile quick info -->
                        <div class="profile">
                            <div class="profile_pic">
                                <img src="../admin/asset/<?php echo $_SESSION['photo_instruktur'] ?>" alt="..." class="img-circle profile_img"> 

                            </div>
                            <div class="profile_info">
                                <span>Welcome,</span>
                                <h2><?php echo $_SESSION['nama_instruktur']; ?></h2>
                            </div>
                        </div>
                        <!-- /menu prile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                            <div class="menu_section">
                                <h3>Admin</h3>
                                <?php include 'sideMenu.php'; ?>
                            </div>						                    
                        </div>
                        <!-- /sidebar menu -->                  
                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">

                    <div class="nav_menu">
                        <nav class="" role="navigation">
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <?php echo $_SESSION['nama_instruktur']; ?>
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">                                        
                                        <li>
                                            <a href="../logoutAdmin.php" onclick="return confirm('Apakah anda akan keluar?');">
                                                <i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                        </li>
                                    </ul>
                                </li>                           

                            </ul>
                        </nav>
                    </div>

                </div>
                <!-- /top navigation -->


                <!-- page content -->
                <div class="right_col" role="main">               

                    <br />

                    <div class="row">                  
                        <section class="wrapper">
                        <h3><i class="fa fa-angle-right"></i> Mapel &raquo; Tambah Mapel</h3><br /><br />

                        <br />

                        <div class="row mt">
                            <div class="col-lg-12">
                                <div class="form-panel">
                                    <h4 class="mb"><i class="fa fa-angle-right"></i> Input Jadwal Mengajar</h4>
                                    <form class="form-horizontal style-form" action="prosesTambahMapel.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Hari</label>
                                            <div class="col-sm-10">
                                                <input name="kd_mapel" type="text" id="kd_mapel" class="form-control" placeholder="Kode Mata Pelajaran" autofocus="on" required="required" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Jam</label>
                                            <div class="col-sm-10">
                                                <input name="nama_mapel" type="text" id="nama_mapel" class="form-control" placeholder="Nama Mapel" autofocus="on" required="required" />
                                            </div>
                                        </div>                                        
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label"></label>
                                            <div class="col-sm-10">
                                                <input type="submit" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
                                                <a href="mapel.php" class="btn btn-sm btn-danger">Batal </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- col-lg-12-->      	
                        </div><!-- /row -->

                    </section>
                    </div>


                    <!-- footer content -->

                    <footer>
                        <div class="">
                            <p class="pull-right">Dasboard Admin |
                                <span class="lead">GRSB Yogyakarta</span>
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </footer>
                    <!-- /footer content -->
                </div>
                <!-- /page content -->

            </div>

        </div>

        <div id="custom_notifications" class="custom-notifications dsp_none">
            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
            </ul>
            <div class="clearfix"></div>
            <div id="notif-group" class="tabbed_notifications"></div>
        </div>

        <script src="../admin/asset/js/bootstrap.min.js"></script>

        <!-- gauge js -->
        <script type="text/javascript" src="../admin/asset/js/gauge/gauge.min.js"></script>
        <script type="text/javascript" src="../admin/asset/js/gauge/gauge_demo.js"></script>
        <!-- chart js -->
        <script src="../admin/asset/js/chartjs/chart.min.js"></script>
        <!-- bootstrap progress js -->
        <script src="../admin/asset/js/progressbar/bootstrap-progressbar.min.js"></script>
        <script src="../admin/asset/js/nicescroll/jquery.nicescroll.min.js"></script>
        <!-- icheck -->
        <script src="../admin/asset/js/icheck/icheck.min.js"></script>
        <!-- daterangepicker -->
        <script type="text/javascript" src="../admin/asset/js/moment.min.js"></script>
        <script type="text/javascript" src="../admin/asset/js/datepicker/daterangepicker.js"></script>

        <script src="../admin/asset/js/custom.js"></script>
        
        <!-- /datepicker -->
        <!-- /footer content -->
    </body>

</html>

