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
        
        <link rel="shortcut icon" type="image/ico" href="../img/favicon.ico">
        
        <!-- Bootstrap core CSS -->

        <link href="asset/css/bootstrap.min.css" rel="stylesheet">

        <link href="asset/fonts/css/font-awesome.min.css" rel="stylesheet">
        <link href="asset/css/animate.min.css" rel="stylesheet">

        <!-- Custom styling plus plugins -->
        <link href="asset/css/custom.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="asset/css/maps/jquery-jvectormap-2.0.1.css" />
        <link href="asset/css/icheck/flat/green.css" rel="stylesheet" />
        <link href="asset/css/floatexamples.css" rel="stylesheet" type="text/css" />

        <script src="asset/js/jquery.min.js"></script>
        <script src="asset/js/nprogress.js"></script>
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
                            <a href="index.php" class="site_title"><i class="fa fa-gear"></i> <span>ADMIN GRSB</span></a>
                        </div>
                        <div class="clearfix"></div>

                        <!-- menu prile quick info -->
                        <div class="profile">
                            <div class="profile_pic">
                                <img src="asset/<?php echo $_SESSION['photo_admin'] ?>" alt="..." class="img-circle profile_img"> 

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

                <section class="wrapper">
                        <h3>Data Permintaan Perubahan Jadwal</h3>
                        
                       
                        <!-- BASIC FORM ELELEMNTS -->
                        <div class="row mt">
                            <div class="col-lg-12">
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-users"></i> Data Administrator </h3> 
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <?php
                                            $query1 = "select tb_berubah_jadwal.*, tb_siswa.nama_siswa, tb_siswa.kd_siswa from tb_siswa, tb_berubah_jadwal where tb_siswa.kd_siswa=tb_berubah_jadwal.kd_siswa";
                                           
                                            $tampil = mysql_query($query1) or die(mysql_error());
                                            ?>

                                            <table class="table table-responsive table-bordered table-hover table-striped tablesorter">
                                                
                                                <tr>
                                                    <th>Kode Siswa <i class="fa fa-sort"></i></th>
                                                    <th>Nama Siswa <i class="fa fa-sort"></i></th>
                                                    <th>hari<i class="fa fa-sort"></i></th>
                                                    <th>jam<i class="fa fa-sort"></i></th>
                                                    <th>Status<i class="fa fa-sort"></i></th>>
                                                    <th>Opsi</th>
                                                </tr>
                                                <?php while ($data = mysql_fetch_array($tampil)) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $data['kd_siswa']; ?></td>
                                                        <td><?php echo $data['nama_siswa']; ?></td> 
                                                        <td><?php echo $data['hari']; ?></td> 
                                                        <td><?php echo $data['jam']; ?></td> 
                                                        <td><?php echo $data['status']; ?></td>
                                                        <td><center><a class="btn btn-sm btn-success tooltips" data-placement="bottom" data-original-title="Edit Admin" href="terimajadwal.php?kd=<?php echo $data['kd']; ?>&kd_siswa=<?php echo $data['kd_siswa']; ?>&hari=<?php echo $data['hari']; ?>&jam=<?php echo $data['jam']; ?>"><span class="glyphicon glyphicon-thumbs-up"></span></a>
                                                        <a class="btn btn-sm btn-warning tooltips" data-placement="bottom" data-original-title="Edit Admin" href="tolakjadwal.php?kd=<?php echo $data['kd']; ?>"><span class="glyphicon glyphicon-thumbs-down"></span></a>
                                                        <a class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-original-title="Hapus Siswa" href="hapusubahjadwal.php?kd=<?php echo $data['kd']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')"><span class="glyphicon glyphicon-trash"></a>
                                                        </td>
                                                    <?php
                                                }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> 
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

<!-- gauge js -->
<script type="text/javascript" src="asset/js/gauge/gauge.min.js"></script>
<script type="text/javascript" src="asset/js/gauge/gauge_demo.js"></script>
<!-- chart js -->
<script src="asset/js/chartjs/chart.min.js"></script>
<!-- bootstrap progress js -->
<script src="asset/js/progressbar/bootstrap-progressbar.min.js"></script>
<script src="asset/js/nicescroll/jquery.nicescroll.min.js"></script>
<!-- icheck -->
<script src="asset/js/icheck/icheck.min.js"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="asset/js/moment.min.js"></script>
<script type="text/javascript" src="asset/js/datepicker/daterangepicker.js"></script>

<script src="asset/js/custom.js"></script>

<!-- /datepicker -->
<!-- /footer content -->
</body>

</html>

