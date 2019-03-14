<?php
include './conn.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Gilang Ramdhan Studio Band Yogyakarta</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        <!-- Bootstrap and Font Awesome css-->
        <!-- we use cdn but you can also include local files located in css directory-->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/themify-icons.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <!-- Google fonts - Roboto Condensed for headings, Open Sans for copy-->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,700%7COpen+Sans:300,400,700">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="css/custom.css">
        <!-- Favicon-->
        <link rel="shortcut icon" type="image/ico" href="img/favicon.ico">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body data-spy="scroll" data-target="#navigation" data-offset="120">
        <!-- intro-->
        <section id="intro" class="intro image-background">
            <div class="overlay"></div>
            <div class="content">
                <div class="container clearfix">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-sm-12">
                            <p class="roboto">Welcome to GRSB Yogyakarta</p>
                            <h1>We are<br /><span class="bold">Grsb Yogyakarta</span></h1>
                            <p class="roboto">Olah Rasa, Olag Raga, Olah Jiwa</p>
                        </div>
                    </div>
                </div>
            </div><a href="#about" class="icon faa-float animated scroll-to"><i class="fa fa-angle-double-down"></i></a>
        </section>
        <!-- navbar-->
        <header class="header">
            <div class="sticky-wrapper">
                <div role="navigation" class="navbar navbar-default">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <!-- logo -->
                            </button><a href="#intro" class="navbar-brand scroll-to"><img src="img/logo.png" alt=""></a>
                        </div>
                        <div id="navigation" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="#intro">Home</a></li>
                                <li><a href="#about">About </a></li>
                                <li><a href="#services">Form</a></li>
                                <li class="dropdown"><a href="#tutorials" class>Tutorial</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="">Link Video Drum</a></li>                                        
                                    </ul>
                                </li>
                                <li><a href="#portfolio">Activity</a></li>
                                <li><a href="#text">Visi & Misi</a></li>
                                <li><a href="#team">Schedule</a></li>
                                <li><a href="#contact">Contact</a></li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Login</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="loginsiswa.php">Siswa</a></li>
                                        <li><a href="logininst.php" >Instruktur</a></li>
                                    </ul>
                                </li>	
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Siswa-->

            <!-- End Modal -->

        </header>
        <!-- /.navbar-->
        <!-- about us-->
        <section id="about">
            <div class="container clearfix">
                <div class="row margin-bottom">
                    <div class="col-md-12 margin-bottom"> 
                        <h2 class="heading">About us</h2>
                        <p class="lead" style="text-align:center;">Gilang Ramadhan Studio Band Yogyakarta (GRSB Yogyakarta)</p>			
                        <p>Gilang Ramadhan Studio Band Yogyakarta (GRSB Yogyakarta) merupakan sebuah lembaga pendidikan musik dengan sistem kurikulum yang telah disesuaikan dengan sekolah musik berstandar internasional
                            yang mempunyai metode pengajaran yang fun dan inovatif. 
                            Didirikan tahun 2008 dengan nama Gilang Ramadhan Studio Drummer, selang setahun kemudian pihak Gilang Ramadhan mengubah nama dari Gilang Ramadhan Studio Drummer menjadi Gilang Ramadhan Studio Band.
                            Berlokasi di Jl. Nogorojo No.9A Gowok (selatan Ambarukmo Plaza), Yogyakarta.
                            Dengan suasana belajar yang menarik dan menyenangkan, membuat setiap murid merasa nyaman dengan pelajaran yang di berikan.
                            Kami menerima calon siswa dari usia 2 tahun hingga seterus nya, untuk membangun pengetahuan akan music sejak dini kepada anak-anak anda.

                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <span><p>Menyediakan Kelas Musik, sebagai berikut :</p><span>
                                        <div class="col-sm-6">
                                            <ul>
                                                <li>Gitar Akustik & Elektrik</li>
                                                <br>
                                                <li>Piano & Keyboard</li>
                                                <br>
                                                <li>Bass Gitar</li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <ul>
                                                <li>Saxophone</li>
                                                <br>
                                                <li>Olah Vocal</li>
                                                <br>
                                                <li>Biola</li>
                                            </ul>
                                        </div>
                                        </div>
                                        </div>
                                        </div>          
                                        </div>        
                                        </div>
                                        </section>
                                        <!-- services-->
                                        <section id="services" class="section-gray">
                                            <div class="container clearfix">
                                                <div class="row services">
                                                    <div class="col-md-12">
                                                        <h2 class="heading">Form Pendaftaran Siswa</h2>
                                                        <div class="row">
                                                            <div class="col-md-12">			  
                                                                <div class="box box-services">
                                                                    <div class="icon"><i class="ti-desktop"></i></div>
                                                                    <h4 class="heading">Silahkan Isi Data Siswa</h4>				  
                                                                    <form class="form-horizontal" action="admin/calonSiswa.php" method="post">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-sm-3" for="lblNama">Nama :</label>
                                                                            <div class="col-md-5">
                                                                                <input type="text" name="aksi" value="simpan" hidden="hidden">
                                                                                <input type="text" name="nama_siswa" class="form-control" id="nama" placeholder="Nama">
                                                                            </div>
                                                                        </div>                                                                        
                                                                        <div class="form-group">
                                                                            <label class="control-label col-sm-3" for="lblJkKelamin">Jenis Kelamin :</label>
                                                                            <div class="col-md-5">
                                                                                <select name="jk_siswa" id="jk_kelamin" class="form-control">
                                                                                    <option>--- Pilih Salah Satu ----</option>
                                                                                    <option>Laki-Laki</option>
                                                                                    <option>Perempuan</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="control-label col-sm-3" for="lblAlamat">Alamat :</label>
                                                                            <div class="col-md-5">
                                                                                <textarea style="resize:none;" rows="6" name="alamat_siswa" class="form-control" id="alamat" placeholder="Masukkan Alamat Lengkap"></textarea>						
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="control-label col-sm-3" for="lblttl">Tempat, Tanggal Lahir :</label>
                                                                            <div class="col-md-2">
                                                                                <input type="text" name="tmpt_lahir_siswa" class="form-control" id=" " placeholder="Tempat Lahir">														
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <input type="date" name="ttl_siswa" class="form-control" id=" " placeholder="Tanggal Lahir">
                                                                            </div>
                                                                        </div>                                                                        
                                                                        <div class="form-group">
                                                                            <label class="control-label col-sm-3" for="lblAgama">Agama :</label>
                                                                            <div class="col-md-5">
                                                                                <select name="agama" id="jk_kelamin" class="form-control">
                                                                                    <option>--- Pilih Salah Satu ----</option>
                                                                                    <option>Islam</option>
                                                                                    <option>Kristen</option>
                                                                                    <option>Katholik</option>
                                                                                    <option>Hindu</option>
                                                                                    <option>Budha</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>                                                                                                                                                                                                                                                                                             
                                                                        <div class="form-group">
                                                                            <label class="control-label col-sm-3" for="lblAgama">Hari :</label>
                                                                            <div class="col-md-5">
                                                                                <select name="hari" id="jk_kelamin" class="form-control">
                                                                                    <option>--- Pilih Salah Satu ----</option>
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
                                                                            <label class="control-label col-sm-3" for="lblAgama">Jam :</label>
                                                                            <div class="col-md-5">
                                                                                <select name="jam" id="jk_kelamin" class="form-control">
                                                                                    <option>--- Pilih Salah Satu ----</option>
                                                                                    <option>15.00-16.00</option>
                                                                                    <option>16.00-17.00</option>
                                                                                    <option>17.00-18.00</option>                                                                                    
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <div class="col-md-12">
                                                                                <center>
                                                                                    <button type="submit" class="btn btn-primary btn-md">Submit</button>
                                                                                    <button type="submit" class="btn btn-danger btn-md">Cancel</button>
                                                                                </center>
                                                                            </div>
                                                                        </div>
                                                                    </form>				  					
                                                                </div>				
                                                            </div>                          
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="box box-services">
                                                                    <div class="icon"><i class="ti-comments"></i></div>
                                                                    <h4 class="heading">Tata Tertib Siswa</h4>
                                                                    <p style="margin-bottom: 10px;">Silahkan Baca Tata Tertib Siswa GRSB Yogyakarta</p>
                                                                    <p>Dengan menekan tombol Baca dibawah ini</p>
                                                                    <center>
                                                                        <button type="button" class="btn btn-info btn-md" style="margin-bottom: 10px;" data-toggle="modal" data-target="#tatibSiswa">Baca Tata Tertib</button>
                                                                        <button type="button" class="btn btn-info btn-md" style="margin-bottom: 10px;" data-toggle="modal" data-target="#kurikulum">Kurikulum</button>
                                                                    </center>
                                                                </div>

                                                                <!-- Modal Siswa-->
                                                                <div class="modal fade" id="tatibSiswa" role="dialog">
                                                                    <div class="modal-dialog modal-lg">

                                                                        <!-- Modal content-->
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                <h4 class="modal-title">Tata Tertib Siswa</h4>
                                                                            </div>

                                                                            <div class="modal-body">
                                                                                <ol>
                                                                                    <li>Kursus di buka setiap hari pukul 09.00-21.00</li>
                                                                                    <li>Hari libur umum / nasional libur</li>
                                                                                    <li>Uang Pendaftaran dan Uang Kursus tidak dapat diminta kembali</li>
                                                                                    <li>Uang kursus dibayarkan paling lambat tanggal 10 tiap bulannya, keterlembatan :
                                                                                        <ul>
                                                                                            <li>Pembayaran tanggal 11 - 20 dikenakan biaya administrasi sebesar Rp. 25.000</li>
                                                                                            <li>Pembayaran tanggal 21 - 30 dikenakan biaya administrasi sebesar Rp. 50.000</li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>Bila tanggal 10 merupakan hari libur nasional, maka pembayaran kursus paling lambat jatuh pada tanggal berikutnya</li>
                                                                                    <li>Dalam 1 bulan kursus, ada 4 kali pertemuan. Bila dalam 1 bulan terdapat 5 kali kursus maka pada minggu ke 5 tidak diadakan pelajaran / libur</li>
                                                                                    <li>Jika terdapat minggu ke 5, dapat digunakan untuk pengganti kelas yang hari kursusnya terdapat libur umum/nasional dalam 1 bulan</li>
                                                                                    <li>Bila 1 bulan siswa hanya hadir 1 kali, maka siswa tersebut harus membayar 1 bulan penuh</li>
                                                                                    <li>Pindah kelas / ganti jadwal kursus, harus dengan instruktur yang sama, kecuali dalam periode bulan berikutnya dan harus ada perjanjian terlebih dahulu dengan bagian administrasi dan instruktur</li>
                                                                                    <li>Bagi siswa yang tidak hadir / absent dan tidak konfirmasi ke bag.administrasi GRSB, dianggap hanggus</li>

                                                                                    <!-- 11-->
                                                                                    <li>Jika siswa tidak hadir 2 kali berturut dan tidak ada pemberitahuan ke bag.administrasi, maka jadwal kursus akan dihapus dan siswa tersebut bila akan masuk kelas kembali harus konfirmasi dahulu untuk mendapatkan kelas</li>
                                                                                    <li>Untuk cuti, disarankan menghabiskan pelajaran dalam bulan tersebut / 4 kali pertemuan karena akan terkait dengan point 7 diatas</li>
                                                                                    <li>Pengambilan cuti minimal 1 bulan dan harus konfirmasi dahulu dengan bag.administrasi</li>
                                                                                    <li>Untuk siswa cuti, hanya diperbolehkan sebagai berikut : </li>
                                                                                    <ul>
                                                                                        <li>Siswa cuti 1 bulan dikenakan biaya administrasi sebesar Rp. 50.000</li>
                                                                                        <li>Siswa cuti 2 bulan dikenakan biaya administrasi sebesar Rp. 100.000</li>
                                                                                        <li>Siswa cuti 3 harus membayar uang pendaftaran kembali (registrasi ulang)</li>
                                                                                    </ul>
                                                                                    <li>Siswa wajib mengikuti kegiatan Pentas Evaluasi, sebagai syarat kenaikan tingkat / level</li>
                                                                                    <li>Siswa diwajibkan membawa perlengkapan sendiri-sendiri (stick drum & alat tulis)</li>
                                                                                    <li>Siswa diwajibkan untuk memakai sepatu</li>
                                                                                    <li>Dilarang membawa makanan dan minuman ke dalam kelas / studio</li>
                                                                                    <li>Untuk kelas Junior/Kids Groove Class, sistem pengarannya adalah sebagai berikut : 
                                                                                        <ul>
                                                                                            <li>Groove Class I</li>
                                                                                            Terdapat 3 tahap : Groove Class I A - Groove Class I B - Groove Class I C																	
                                                                                            <li>Groove Class II</li>
                                                                                            Terdapat 3 tahap : Groove Class II A - Groove Class II B - Groove Class II C
                                                                                            <li>Groove Class III</li>
                                                                                            Terdapat 3 tahap : Groove Class III A - Groove Class III B - Groove Class III C
                                                                                            <li>Level selanjutnya mengikuti sistem pengajaran GRSB uang umum, pengelompokan dan penempatan siswa kids dibawah 6 tahun tergantung dengan kondisi dan perkembangan anak</li>
                                                                                        </ul>
                                                                                    </li>
                                                                                    <li>Siswa wajib mematuhi semua peraturan yang dikeluarkan oleh GRSB baik secara tertulis maupun lisan</li>
                                                                                </ol>												
                                                                            </div>

                                                                            <div class="modal-footer">								
                                                                                <button type="button" class="btn btn-md btn-danger" data-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Modal Siswa-->
                                                                <div class="modal fade" id="kurikulum" role="dialog">
                                                                    <div class="modal-dialog modal-md">

                                                                        <!-- Modal content-->
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                <h4 class="modal-title">Kurikulum Siswa</h4>
                                                                            </div>

                                                                            <div class="modal-body">
                                                                                <ol>
                                                                                    <li>Grove 1: Mempelajari mengenai cara memukul, tempo, feel lagu</li>
                                                                                    <li>Grove 2: Mempelajari tingkatan materi dari Grove 1 tentang variasi lagu</li>
                                                                                    <li>Grove 3: Mempelajari tingkatan materi dari Grove 1 tentang variasi lagu</li>
                                                                                </ol>
                                                                            </div>

                                                                            <div class="modal-footer">								
                                                                                <button type="button" class="btn btn-md btn-danger" data-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                                <!-- End Modal -->
                                                            </div>	
                                                            <!-- End col-md-12 -->		                   
                                                        </div>

                                                        <!-- Halaman Tutorial-->
                                                        <section id="tutorials">                                                            
                                                            <h2 class="heading">Tutorial</h2>                                                            
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="box box-services">
                                                                        <div class="icon"><i class="ti-harddrive"></i></div>
                                                                        <h4 class="heading">How To Learn & Play</h4>
                                                                        <p style="margin-bottom: 10px;">Silahkan Baca dan Pahami Cara Bermain Musik</p>                                                                        
                                                                        <p>Dengan menekan tombol dibawah ini</p>                                                                      
                                                                        <center>
                                                                            <button type="button" class="btn btn-danger btn-md" style="margin-bottom: 10px;" data-toggle="modal" data-target="#drum">Drum</button>
                                                                            <button type="button" class="btn btn-danger btn-md" style="margin-bottom: 10px;" data-toggle="modal" data-target="#guitar">Guitar</button>
                                                                            <button type="button" class="btn btn-danger btn-md" style="margin-bottom: 10px;" data-toggle="modal" data-target="#bass">Bass</button>
                                                                            <button type="button" class="btn btn-danger btn-md" style="margin-bottom: 10px;" data-toggle="modal" data-target="#piano">Keyboard</button>
                                                                        </center>
                                                                    </div>

                                                                    <!-- Modal Drum-->
                                                                    <div class="modal fade" id="drum" role="dialog">
                                                                        <div class="modal-dialog modal-md">

                                                                            <!-- Modal content-->
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                    <h4 class="modal-title">Drum Tutorial</h4>
                                                                                </div>

                                                                                <div class="modal-body">
                                                                                    <ul>
                                                                                        <li>Langkah Pertama<br/>
                                                                                            Pelajari Ritme, dengan latihan sebagai berikut : 
                                                                                        </li>
                                                                                    </ul>
                                                                                    <blockquote>
                                                                                        <ol>                                                                                            
                                                                                            <li>Mulailah mempelajari drum dengan menggunakan tangan</li>
                                                                                            <li>Pelajari cara menghitung seperempat ketuk tidak dapat diminta kembali</li>
                                                                                            <li>Pelajarilah cara menghitung ketukan seperdelapan</li>
                                                                                            <li>Latih tangan Anda yang lain</li>
                                                                                            <li>Latihlah downbeat Anda</li>                                                                                                                                                                               
                                                                                        </ol> 
                                                                                    </blockquote>
                                                                                    <br/>

                                                                                    <ul>
                                                                                        <li>Langkah Kedua<br/>
                                                                                            Latihlah dengan cara mempraktikan dengan Drum : 
                                                                                        </li>
                                                                                    </ul>
                                                                                    <blockquote>
                                                                                        <ol>                                                                                            
                                                                                            <li>Kenali peralatan drum dasar</li>
                                                                                            <li>Pelajari berbagai jenis cymbal</li>
                                                                                            <li>Kuasai cara memegang tongkat drum</li>
                                                                                            <li>Lakukan riset mengenai peralatan awal drum</li>
                                                                                            <li>Cobalah berbagai variasi tongkat drum</li>  
                                                                                            <li>Pelajari cara duduk di belakang peralatan drum dengan postur tubuh yang benar</li>  
                                                                                        </ol> 
                                                                                    </blockquote>
                                                                                </div>

                                                                                <div class="modal-footer"> 
                                                                                    <button type="button" class="btn btn-md btn-link">
                                                                                        <a href="https://www.youtube.com/results?search_query=how+to+learn+basic+drums" target="_blank">Link Video</a>
                                                                                    </button>   
                                                                                    <button type="button" class="btn btn-md btn-danger" data-dismiss="modal">Close</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Modal Guitar-->
                                                                    <div class="modal fade" id="guitar" role="dialog">
                                                                        <div class="modal-dialog modal-md">

                                                                            <!-- Modal content-->
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                    <h4 class="modal-title">Guitar Tutorial</h4>
                                                                                </div>

                                                                                <div class="modal-body">
                                                                                    <ul>
                                                                                        <li>Latihan awal bermain gitar : </li>
                                                                                    </ul>
                                                                                    
                                                                                    <blockquote>
                                                                                        <ol>                                                                                            
                                                                                            <li>Posisikan gitar dengan benar saat dimainkan</li>
                                                                                            <li>Latihlah jari-jari tanganmu dengan chord gitar</li>
                                                                                            <li>Pelajarilah not pada senar gitar dan cara memetiknya</li>
                                                                                            <li>Pelajari car membaca notasi gitar</li>
                                                                                            <li>Latihlah dengan mendengar berbagai musik</li>                                                                                                                                                                               
                                                                                        </ol> 
                                                                                    </blockquote>
                                                                                    
                                                                                    <ul>
                                                                                        <li>Latihan selanjutnya : </li>
                                                                                    </ul>
                                                                                    
                                                                                    <blockquote>
                                                                                        <ol>                                                                                            
                                                                                            <li>Cobalah tuning gitar</li>
                                                                                            <li>Memainkan kunci gitar dengan cara memetiknya dan mengenjreng nya</li>
                                                                                            <li>Pelajarilah kunci gitar baris (kunci gantung)</li>
                                                                                            <li>Cobalah dengan memainkan beberapa lagu dengan chord dasar</li>
                                                                                            <li>Belajarlah dari orang lain</li>                                                                                                                                                                               
                                                                                        </ol> 
                                                                                    </blockquote>
                                                                                </div>

                                                                                <div class="modal-footer">	
                                                                                    <button type="button" class="btn btn-md btn-link">
                                                                                        <a href="https://www.youtube.com/results?search_query=how+to+learn+basic+guitar+" target="_blank">Link Video</a>
                                                                                    </button>   
                                                                                    <button type="button" class="btn btn-md btn-danger" data-dismiss="modal">Close</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End Modal -->

                                                                    <!-- Modal Bass-->
                                                                    <div class="modal fade" id="bass" role="dialog">
                                                                        <div class="modal-dialog modal-md">

                                                                            <!-- Modal content-->
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                    <h4 class="modal-title">Bass Tutorial</h4>
                                                                                </div>

                                                                                <div class="modal-body">
                                                                                    <ul>
                                                                                        <li>Latihan awal bermain bass : </li>
                                                                                    </ul>
                                                                                    
                                                                                    <blockquote>
                                                                                        <ol>                                                                                            
                                                                                            <li>Posisikan bass dengan benar dan cobalah berlatih memainkannya</li>
                                                                                            <li>Aturlah tangga nada pada bass</li>
                                                                                            <li>Berlatih memetik</li>
                                                                                            <li>Matikan suara senar yang tidak anda mainkan dan coba dengarkan</li>
                                                                                            <li>Pelajari cara bermain root</li>      
                                                                                            <li>Pelajari cara bermain oktaf</li> 
                                                                                            <li>Belajar memainkan root dan nada kord ke lima</li>                                                                                            
                                                                                        </ol> 
                                                                                    </blockquote>
                                                                                    
                                                                                    <ul>
                                                                                        <li>Latihan selanjutnya : </li>
                                                                                    </ul>
                                                                                    
                                                                                    <blockquote>
                                                                                        <ol>    
                                                                                            <li>Jaga irama ketika berlatih</li>
                                                                                            <li>Berlatih dengan rutin</li>
                                                                                            <li>Memulai mempelajari tablatur</li>
                                                                                            <li>Belajar mempelajari tangga nada</li>
                                                                                            <li>Mencoba bermain solo</li>
                                                                                            <li>Memulai menciptakan lagu sendiri</li>                                                                                                                                                                                                                                                                        
                                                                                        </ol> 
                                                                                    </blockquote>
                                                                                </div>

                                                                                <div class="modal-footer">	
                                                                                    <button type="button" class="btn btn-md btn-link">
                                                                                        <a href="https://www.youtube.com/results?search_query=how+to+learn+basic+bass" target="_blank">Link Video</a>
                                                                                    </button>   
                                                                                    <button type="button" class="btn btn-md btn-danger" data-dismiss="modal">Close</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End Modal -->

                                                                    <!-- Modal Piano-->
                                                                    <div class="modal fade" id="piano" role="dialog">
                                                                        <div class="modal-dialog modal-md">

                                                                            <!-- Modal content-->
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                    <h4 class="modal-title">Keyboard Tutorial</h4>
                                                                                </div>

                                                                                <div class="modal-body">
                                                                                    <ul>
                                                                                        <li>Latihan awal bermain keyboard : </li>
                                                                                    </ul>
                                                                                    
                                                                                    <blockquote>
                                                                                        <ol>                                                                                            
                                                                                            <li>Lihat ke sebuah keyboard</li>
                                                                                            <li>Perhatikan bahwa ada 2 jenis tuts</li>
                                                                                            <li>Lihat ke keyboard lagi</li>
                                                                                            <li>Temukan C berikutnya di keyboard</li>
                                                                                            <li>Temukan C yang paling dekat bagian tengah keyboard</li>      
                                                                                            <li>Mainkan sebuah lagu</li>                                                                                                                                                                                       
                                                                                        </ol> 
                                                                                    </blockquote>
                                                                                    
                                                                                    <ul>
                                                                                        <li>Latihan selanjutnya : </li>
                                                                                    </ul>
                                                                                    
                                                                                    <blockquote>
                                                                                        <ol>    
                                                                                            <li>Belajarlah bermain keyboard dengan cara Anda sendiri</li>
                                                                                            <li>Belajar Membaca Partitur</li>
                                                                                            <li>Ambil beberapa partitur musik</li>
                                                                                            <li>Belajar Bermain dengan Mendengarkan</li>
                                                                                            <li>Latih pendengaran Anda</li>
                                                                                            <li>Pelajari teknik solmisasi</li> 
                                                                                            <li>Berlatih inverval</li>
                                                                                        </ol> 
                                                                                    </blockquote>
                                                                                </div>

                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-md btn-link">
                                                                                        <a href=" https://www.youtube.com/results?search_query=how+to+learn+basic+piano" target="_blank">Link Video</a>
                                                                                    </button>                                                                                   
                                                                                    <button type="button" class="btn btn-md btn-danger" data-dismiss="modal">Close</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End Modal -->
                                                                </div>	
                                                                <!-- End col-md-12 -->
                                                        </section>
                                                    </div>        
                                                </div>
                                            </div>
                                            </div>
                                        </section>
                                        <!-- portfolio-->
                                        <section id="portfolio" class="no-padding-bottom">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h2 class="heading">Activity</h2>
                                                        <p class="text-center">Aktivitas dan kegiatan yang dilakukan di GRSB Yogyakarta.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container-fluid">
                                                <div class="row no-space">
                                                    <div class="col-sm-4 col-md-3">
                                                        <div class="box"><a href="#" title=""><img src="img/portofolio-1.jpg" alt="" class="img-responsive"></a></div>
                                                    </div>
                                                    <div class="col-sm-4 col-md-3">
                                                        <div class="box"><a href="#" title=""><img src="img/portofolio-2.jpg" alt="" class="img-responsive"></a></div>
                                                    </div>
                                                    <div class="col-sm-4 col-md-3">
                                                        <div class="box"><a href="#" title=""><img src="img/portofolio-3.jpg" alt="" class="img-responsive"></a></div>
                                                    </div>
                                                    <div class="col-sm-4 col-md-3">
                                                        <div class="box"><a href="#" title=""><img src="img/portofolio-4.jpg" alt="" class="img-responsive"></a></div>
                                                    </div>
                                                    <div class="col-sm-4 col-md-3">
                                                        <div class="box"><a href="#" title=""><img src="img/portofolio-5.jpg" alt="" class="img-responsive"></a></div>
                                                    </div>
                                                    <div class="col-sm-4 col-md-3">
                                                        <div class="box"><a href="#" title=""><img src="img/portofolio-6.jpg" alt="" class="img-responsive"></a></div>
                                                    </div>
                                                    <div class="col-sm-4 col-md-3">
                                                        <div class="box"><a href="#" title=""><img src="img/portofolio-7.jpg" alt="" class="img-responsive"></a></div>
                                                    </div>
                                                    <div class="col-sm-4 col-md-3">
                                                        <div class="box"><a href="#" title=""><img src="img/portofolio-8.jpg" alt="" class="img-responsive"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- text-->
                                        <section id="text" class="section-gray">
                                            <div class="container clearfix">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h2 class="heading">Visi & Misi</h2>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <bold><p style="font-size: 20px; letter-spacing: 0.08em;">Visi :</p></bold>
                                                                <ul>
                                                                    <li>Sebagai wadah dan pengembangan musik di Indonesia</li>
                                                                    <br>
                                                                    <li>Meningkatkan kualitas generasi pemusik Indonesia menjadi profesional</li>
                                                                    <br>
                                                                    <li>Sebagai sarana mencerdaskan generasi muda pada umumnya</li>
                                                                    <br>
                                                                    <li>Bermanfaat bagi kesehatan mental dan fisik</li>
                                                                </ul>                              
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <bold><p style="font-size: 20px; letter-spacing: 0.08em;">Misi :</p></bold>
                                                                <ul>
                                                                    <li>Mengantarkan siswa agar dapat mempraktikan ilmu dengan baik dan benar</li>
                                                                    <br>
                                                                    <li>Menambah warna varitas musik Indonesia</li>
                                                                    <br>
                                                                    <li>Memberikan peluang bagi para musisi yang ingin berprofesi sebagai instruktur profesional dengan memberikan standar pelatihan, lisensi dan metode pengajaran</li>
                                                                    <br>
                                                                    <li>Pelaung bisnis pendidikan yang menguntungkan</li>
                                                                </ul>    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- team-->
                                        <section id="team">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h2 class="heading">Schedule</h2>
                                                        <div class="row"></div>
                                                        <div class="table-responsive">
                                                            <table class="table table-striped">
                                                                <thead>
                                                                    <tr>                                                                                    
                                                                        <th>Kelas</th>
                                                                        <th>Hari</th>
                                                                        <th>Jam</th>
                                                                        <th>Nama Instruktur</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    $query = mysql_query("select tb_kelas.kelas, tb_jadwal_inst.hari, tb_jadwal_inst.jam, tb_instruktur.nama_instruktur from tb_jadwal_inst, tb_instruktur, tb_kelas where tb_jadwal_inst.kd_kelas=tb_kelas.kd_kelas and tb_kelas.kd_instruktur=tb_instruktur.kd_instruktur");
                                                                    while ($row = mysql_fetch_array($query)) {
                                                                        ?>
                                                                        <tr>                                                                                
                                                                            <td><?php echo $row["kelas"]; ?></td>
                                                                            <td><?php echo $row["hari"]; ?></td>
                                                                            <td><?php echo $row["jam"]; ?></td>
                                                                            <td><?php echo $row["nama_instruktur"]; ?></td>
                                                                        </tr>
                                                                    <?php } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                            </div>
                                        </section>
                                        <!-- map-->
                                        <section>	
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7906.065792286088!2d110.39957199999999!3d-7.786337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3c1fe04ff67532ee!2sGilang+Ramadhan+Studio+Band!5e0!3m2!1sid!2sid!4v1453434484766" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                </div>
                                            </div>	
                                        </section>
                                        <section id="contact">
                                            <div class="container clearfix">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h2 class="heading">Contact</h2>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <form id="contact-form" method="post" action="contact.php" class="contact-form form">
                                                                    <div class="controls">
                                                                        <div class="row">
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label for="name">Your firstname *</label>
                                                                                    <input type="text" name="name" id="name" placeholder="Enter your firstname" required="required" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label for="surname">Your lastname *</label>
                                                                                    <input type="text" name="surname" id="surname" placeholder="Enter your  lastname" required="required" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="email">Your email *</label>
                                                                            <input type="email" name="email" id="email" placeholder="Enter your  email" required="required" class="form-control">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="message">Your message for us *</label>
                                                                            <textarea rows="4" name="message" id="message" placeholder="Enter your message" required="required" class="form-control"></textarea>
                                                                        </div>
                                                                        <div class="text-center">
                                                                            <input type="submit" value="Send message" class="btn btn-primary btn-block">
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="col-md-6">	
                                                                <br/>
                                                                <p><strong>Information : </strong><span class="head-line" style="height: 50px; width: 4px;"></span>Jika ada informasi yang ingin ditanyakan seputar Gilang Ramadhan Studio Band YOGYAKARTA (GRSB YOGYAKARTA) 
                                                                    silangkan hubungi informasi yang tertera di bawah ini</p>
                                                                <!-- start information contact -->
                                                                <p><li class="fa fa-globe"></li>
                                                                <strong>Address : </strong>
                                                                Jl. Nogorojo No.9A Gowok (selatan Ambarukmo Plaza), Yogyakarta
                                                                </p>
                                                                <p><li class="fa fa-envelope-o"></li>
                                                                <strong>Email : </strong>
                                                                grsd_jogja@yahoo.com
                                                                </p>
                                                                </p>
                                                                <p><li class="fa fa-mobile"></li>
                                                                <strong>Phone : </strong>
                                                                0274-487869
                                                                </p>
                                                                <p><li class="fa fa-clock-o"></li>
                                                                <strong>Open : </strong>
                                                                10.00 - 22.00
                                                                </p>
                                                                <!-- end information contact -->            
                                                            </div>
                                                        </div>
                                                        <p class="social">
                                                            <a href="https://id-id.facebook.com/GRSBJogja" title="" class="facebook">
                                                                <i class="fa fa-facebook"></i>
                                                            </a>
                                                            <a href="https://twitter.com/grsbjogja" title="" class="twitter">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                            <a href="https://plus.google.com/118378346404052671320/about" title="" class="gplus">
                                                                <i class="fa fa-google-plus"></i>
                                                            </a>				
                                                            <a href="grsd_jogja@yahoo.com" title="" class="email">
                                                                <i class="fa fa-envelope">
                                                                </i>
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>	
                                        <footer>
                                            <div class="container">
                                                <div class="row copyright">
                                                    <div class="col-md-12">
                                                        <center>
                                                            <p class="roboto">&copy;2015 Gilang Ramadhan Studio Band YOGYAKARTA</p>
                                                        </center>
                                                    </div>          
                                                </div>
                                            </div>
                                        </footer>
                                        <!-- Javascript files-->
                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
                                        <script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
                                        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
                                        <script src="js/jquery.sticky.js"></script>
                                        <script src="js/jquery.scrollTo.min.js"></script>
                                        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;amp;sensor=false"></script>
                                        <script src="js/gmaps.js"></script>
                                        <script src="js/jquery.cookie.js"></script>
                                        <script src="js/front.js"></script>
                                        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
                                        <script>
                                            (function (b, o, i, l, e, r) {
                                                b.GoogleAnalyticsObject = l;
                                                b[l] || (b[l] =
                                                        function () {
                                                            (b[l].q = b[l].q || []).push(arguments)
                                                        });
                                                b[l].l = +new Date;
                                                e = o.createElement(i);
                                                r = o.getElementsByTagName(i)[0];
                                                e.src = '//www.google-analytics.com/analytics.js';
                                                r.parentNode.insertBefore(e, r)
                                            }(window, document, 'script', 'ga'));
                                            ga('create', 'UA-XXXXX-X');
                                            ga('send', 'pageview');
                                        </script>
                                        </body>
                                        </html>