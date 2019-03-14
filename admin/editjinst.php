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

                        <h3>Tambah Data Admin</h3>
                        <?php
                        $query = mysql_query("SELECT * FROM tb_jadwal_inst WHERE no='$_GET[no]'");
                        $data = mysql_fetch_array($query);
                        ?>
                        <div class="row mt">
                            <div class="col-lg-12">
                                <div class="form-panel">
                                    <form class="form-horizontal style-form" action="prosesEditJInst.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Kelas</label>
                                            <div class="col-sm-5">
                                                <input type="hidden" value="<?php echo $data['no'] ?>" name="no" id="no"/>                                          
                                                <select name="kd_kelas" id="kd_kelas"  class="form-control" required />
                                                <option><?php echo $data['kd_kelas'] ?></option>
                                                <?php
                                                $sql = mysql_query("SELECT * FROM tb_kelas ORDER BY kd_kelas ASC");
                                                if (mysql_num_rows($sql) != 0) {
                                                    while ($data = mysql_fetch_assoc($sql)) {
                                                        echo '<option value=' . $data['kd_kelas'] . '>' . $data['kd_kelas'] . '</option>';
                                                    }
                                                    $kode = $data['kd_kelas'];
                                                }
                                                ?>
                                                </select>
                                            </div>
                                        </div>
                                        <?php
                        $query = mysql_query("SELECT * FROM tb_jadwal_inst WHERE no='$_GET[no]'");
                        $data = mysql_fetch_array($query);
                        ?>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="lblAgama">Hari :</label>
                                            <div class="col-md-5">
                                                <select name="hari" id="hari" class="form-control">
                                                    <option><?php echo $data['hari'] ?></option>
                                                    <option>Senin</option>
                                                    <option>Selasa</option>
                                                    <option>Rabu</option>
                                                    <option>Kamis</option>								
                                                    <option>Jumat</option>
                                                    <option>Sabtu</option>
                                                    <option>Minggu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="lblAgama">Jam :</label>
                                            <div class="col-md-5">
                                                <select name="jam" id="jam" class="form-control">
                                                    <option><?php echo $data['jam'] ?></option>
                                                    <option>15.00-16.00</option>
                                                    <option>16.00-17.00</option>
                                                    <option>17.00-18.00</option>                                                                                    
                                                </select>
                                            </div>
                                        </div>                                                                                                                                                               
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label"></label>
                                            <div class="col-sm-10">
                                                <input type="submit" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
                                                <a href="admin.php" class="btn btn-sm btn-danger">Batal </a>
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

        <script src="asset/js/custom.js"></script>

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