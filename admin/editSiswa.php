<?php
session_start();
if (empty($_SESSION['username'])) {
    header('location:../loginadmin.php');
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

        <title>ADMIN GRSB</title>
        <script language="Javascript">
            document.write('<link rel="icon" href="assets/images/favicon.png">')
        </script>

        <!-- Bootstrap core CSS -->

        <link href="asset/css/bootstrap.min.css" rel="stylesheet">

        <link href="asset/fonts/css/font-awesome.min.css" rel="stylesheet">
        <link href="asset/css/animate.min.css" rel="stylesheet">

        <!-- Custom styling plus plugins -->
        <link href="asset/css/custom.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="asset/css/maps/jquery-jvectormap-2.0.1.css" />
        <link href="asset/css/icheck/flat/green.css" rel="stylesheet">
        <link href="asset/css/floatexamples.css" rel="stylesheet" />

        <script src="asset/js/jquery.min.js"></script>

    </head>


    <body class="nav-md">

        <div class="container body">


            <div class="main_container">

                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">

                        <div class="navbar nav_title" style="border: 0;">
                             <a href="index.php" class="site_title"><i class="fa fa-gear"></i> <span>ADMIN GRSB</span></a>
                        </div>
                        <div class="clearfix"></div>


                        <!-- menu prile quick info -->
                        <div class="profile">
                            <div class="profile_pic">
                                <img src="asset/<?php echo $_SESSION['photo_admin']; ?>" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Welcome,</span>
                                <h2><?php echo $_SESSION['nama_admin']; ?></h2>
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
                                        <?php echo $_SESSION['nama_admin']; ?>
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                        <li><a href="adminConfig.php?username=<?php echo $_SESSION['username']; ?>" ><i class="fa fa-gears pull-right"></i> Pengaturan</a>
                                        </li>
                                        <li><a href="../logoutAdmin.php" onclick="return confirm('Apakah anda akan keluar?');"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                        </li>
                                    </ul>
                                </li>


                            </ul>
                        </nav>
                    </div>

                </div>
                <!-- /top navigation -->


                <!-- page content -->

                
                
                <!-- /page content -->
                <div class="right_col" role="main">
                <section class="wrapper">
                        <h3><i class="fa fa-angle-right"></i> Akun Admin &raquo; Edit Admin</h3><br /><br />

                        <?php
                        $query = mysql_query("SELECT * FROM tb_siswa WHERE kd_siswa='$_GET[kd_siswa]'");
                        $data = mysql_fetch_array($query);
                        ?>
                        <div class="row mt">
                            <div class="col-lg-12">
                                <div class="form-panel">
                                    <form class="form-horizontal style-form" action="prosesEditSiswa.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Kode Siswa</label>
                                            <div class="col-sm-10">
                                                <input name="" type="text" id="" disabled="disabled" class="form-control" placeholder="Kode Siswa" value="<?php echo $data['kd_siswa']; ?>" autofocus="on" required="required" />
                                                <input name="kd_siswa" type="text" id="kd_siswa" class="hidden"  value="<?php echo $data['kd_siswa']; ?>"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Nama Lengkap</label>
                                            <div class="col-sm-10">
                                                <input name="nama_siswa" type="text" id="nama_siswa" class="form-control" placeholder="Nama Lengkap" value="<?php echo $data['nama_siswa']; ?>" autofocus="on" required="required" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir</label>
                                            <div class="col-sm-10">
                                                <input name="ttl_siswa" type="date" id="ttl_admin" class="form-control" value="<?php echo $data['ttl_siswa']; ?>" autofocus="on" required="required" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
                                            <div class="col-sm-10">
                                                <select name="jk_siswa" id="jk_admin"  class="form-control" required />
                                                <option> <?php echo $data['jk_siswa']; ?> </option>
                                                <option value="LK">LK</option>
                                                <option value="PR">PR</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Password</label>
                                            <div class="col-sm-10">
                                                <input name="password_siswa" type="text" id="password_siswa" class="form-control" placeholder="Password" value="<?php echo $data['password_siswa']; ?>" autofocus="on" required="required" />
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label"></label>
                                            <div class="col-sm-10">
                                                <input type="submit" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
                                                <a href="siswa.php" class="btn btn-sm btn-danger">Batal </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- col-lg-12-->      	
                        </div><!-- /row -->

                    </section>
                

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

    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/nicescroll/jquery.nicescroll.min.js"></script>

    <!-- chart js -->
    <script src="asset/js/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="asset/js/progressbar/bootstrap-progressbar.min.js"></script>
    <!-- icheck -->
    <script src="asset/js/icheck/icheck.min.js"></script>
    <!-- daterangepicker -->
    <script type="text/javascript" src="asset/js/moment.min2.js"></script>
    <script type="text/javascript" src="asset/js/datepicker/daterangepicker.js"></script>
    <!-- sparkline -->
    <script src="asset/js/sparkline/jquery.sparkline.min.js"></script>

    <script src="assets/js/custom.js"></script>

    <!-- flot js -->
    <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
    <script type="text/javascript" src="asset/js/flot/jquery.flot.js"></script>
    <script type="text/javascript" src="asset/js/flot/jquery.flot.pie.js"></script>
    <script type="text/javascript" src="asset/js/flot/jquery.flot.orderBars.js"></script>
    <script type="text/javascript" src="asset/js/flot/jquery.flot.time.min.js"></script>
    <script type="text/javascript" src="asset/js/flot/date.js"></script>
    <script type="text/javascript" src="asset/js/flot/jquery.flot.spline.js"></script>
    <script type="text/javascript" src="asset/js/flot/jquery.flot.stack.js"></script>
    <script type="text/javascript" src="asset/js/flot/curvedLines.js"></script>
    <script type="text/javascript" src="asset/js/flot/jquery.flot.resize.js"></script>
</body>
</html>