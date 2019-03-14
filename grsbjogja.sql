-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2016 at 04:54 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `grsbjogja`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `username` varchar(50) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `password_admin` varchar(255) NOT NULL,
  `ttl_admin` date NOT NULL,
  `jk_admin` varchar(15) NOT NULL,
  `photo_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`username`, `nama_admin`, `password_admin`, `ttl_admin`, `jk_admin`, `photo_admin`) VALUES
('1', 'Andri Arfianto', '1', '2016-01-06', 'Laki-Laki', 'img_admin/1.jpg'),
('2', 'Sinta', '2', '2012-09-09', 'Perempuan', 'img_admin/1.jpg'),
('7', 'yandi', '7', '2016-01-23', 'LK', 'img_admin/1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berubah_jadwal`
--

CREATE TABLE IF NOT EXISTS `tb_berubah_jadwal` (
`kd` int(10) NOT NULL,
  `kd_siswa` int(50) DEFAULT NULL,
  `hari` varchar(50) DEFAULT NULL,
  `jam` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berubah_jadwal`
--

INSERT INTO `tb_berubah_jadwal` (`kd`, `kd_siswa`, `hari`, `jam`, `status`) VALUES
(5, 7, 'Jumat', '16.00-17.00', 'diterima'),
(7, 7, 'Rabu', '16.00-17.00', 'diterima');

-- --------------------------------------------------------

--
-- Table structure for table `tb_daftar`
--

CREATE TABLE IF NOT EXISTS `tb_daftar` (
`kd_daftar` int(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nama_pang` varchar(50) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `jns_klmn` varchar(15) DEFAULT NULL,
  `alamat_siswa` varchar(200) DEFAULT NULL,
  `tmpt_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_ganti_jadwal`
--

CREATE TABLE IF NOT EXISTS `tb_ganti_jadwal` (
`kd` int(10) NOT NULL,
  `kd_siswa` varchar(50) DEFAULT NULL,
  `hari` varchar(30) DEFAULT NULL,
  `jam` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_instruktur`
--

CREATE TABLE IF NOT EXISTS `tb_instruktur` (
  `kd_instruktur` varchar(10) NOT NULL,
  `nama_instruktur` varchar(50) DEFAULT NULL,
  `password_instruktur` varchar(50) DEFAULT NULL,
  `ttl_instruktur` date DEFAULT NULL,
  `jk_instruktur` varchar(15) DEFAULT NULL,
  `photo_instruktur` varchar(100) DEFAULT NULL,
  `alamat_instruktur` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_instruktur`
--

INSERT INTO `tb_instruktur` (`kd_instruktur`, `nama_instruktur`, `password_instruktur`, `ttl_instruktur`, `jk_instruktur`, `photo_instruktur`, `alamat_instruktur`) VALUES
('1', 'Andri', '1', '1945-08-17', 'laki-laki', '/img_admin/1.jpg', '-'),
('3', 'Salsa', '3', '2016-01-02', 'PR', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_inst`
--

CREATE TABLE IF NOT EXISTS `tb_jadwal_inst` (
`no` int(5) NOT NULL,
  `hari` varchar(20) DEFAULT NULL,
  `jam` varchar(15) DEFAULT NULL,
  `kd_kelas` int(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jadwal_inst`
--

INSERT INTO `tb_jadwal_inst` (`no`, `hari`, `jam`, `kd_kelas`) VALUES
(1, 'Selasa', '15.00-16.00', 1),
(2, 'Rabu', '16.00-17.00', 1),
(3, 'Sabtu', '18.00-17.0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE IF NOT EXISTS `tb_kelas` (
`kd_kelas` int(10) NOT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `kd_instruktur` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`kd_kelas`, `kelas`, `kd_instruktur`) VALUES
(1, 'Grove 1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil`
--

CREATE TABLE IF NOT EXISTS `tb_profil` (
  `kd_profil` varchar(10) NOT NULL,
  `about` varchar(10000) DEFAULT NULL,
  `visi_misi` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE IF NOT EXISTS `tb_siswa` (
`kd_siswa` int(10) NOT NULL,
  `nama_siswa` varchar(50) DEFAULT NULL,
  `ttl_siswa` date DEFAULT NULL,
  `jk_siswa` varchar(15) DEFAULT NULL,
  `alamat_siswa` varchar(200) DEFAULT NULL,
  `ortu_siswa` varchar(50) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `photo_siswa` varchar(100) DEFAULT NULL,
  `password_siswa` varchar(100) DEFAULT NULL,
  `th_masuk` varchar(50) DEFAULT NULL,
  `kd_kelas` int(10) DEFAULT NULL,
  `status` varchar(5) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` varchar(15) NOT NULL,
  `tmpt_lahir_siswa` varchar(35) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`kd_siswa`, `nama_siswa`, `ttl_siswa`, `jk_siswa`, `alamat_siswa`, `ortu_siswa`, `agama`, `photo_siswa`, `password_siswa`, `th_masuk`, `kd_kelas`, `status`, `hari`, `jam`, `tmpt_lahir_siswa`) VALUES
(4, 'andria', '2016-01-26', 'laki-laki ', 'sleman', 'orut', 'isalm', 'img_siswa/120px-Animusmilie.jpg', 'pass', 'thmsk', 1, 'no', 'selasa', '12', 'ygya'),
(5, 'agus', '1999-05-05', 'lk  ', 'sleman', 'orut', 'isalm', 'photo', 'pass', 'thmsk', 1, 'no', 'selasa', '15.00-16.00', 'ygya'),
(6, 'andria', '2016-01-26', 'laki-laki', 'sleman', 'orut', 'isalm', 'photo', 'pass', 'thmsk', 1, 'no', 'senini', '12', 'ygya'),
(7, 'Yusup', '2016-01-26', 'Laki-Laki', 'Kalimantan', '-', 'Islam', '/img_admin/1.jpg', '7', '-', 1, 'yes', 'Rabu', '16.00-17.00', 'Jogja'),
(8, 'jnbjk', '2016-01-26', 'Laki-Laki', 'jbvjkb', '-', 'Islam', '/img_admin/1.jpg', '8', '-', 1, 'yes', 'Senin', '15.00-16.00', 'kjbjh'),
(11, '-', '2016-01-27', '-', '-', '-', '-', '-', '-', '-', 1, '-', 'Selasa', '15.00-16.00', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tb_berubah_jadwal`
--
ALTER TABLE `tb_berubah_jadwal`
 ADD PRIMARY KEY (`kd`);

--
-- Indexes for table `tb_daftar`
--
ALTER TABLE `tb_daftar`
 ADD PRIMARY KEY (`kd_daftar`);

--
-- Indexes for table `tb_ganti_jadwal`
--
ALTER TABLE `tb_ganti_jadwal`
 ADD PRIMARY KEY (`kd`);

--
-- Indexes for table `tb_instruktur`
--
ALTER TABLE `tb_instruktur`
 ADD PRIMARY KEY (`kd_instruktur`);

--
-- Indexes for table `tb_jadwal_inst`
--
ALTER TABLE `tb_jadwal_inst`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
 ADD PRIMARY KEY (`kd_kelas`), ADD KEY `FK_tb_kelas` (`kd_instruktur`);

--
-- Indexes for table `tb_profil`
--
ALTER TABLE `tb_profil`
 ADD PRIMARY KEY (`kd_profil`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
 ADD PRIMARY KEY (`kd_siswa`), ADD KEY `FK_tb_siswa` (`kd_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_berubah_jadwal`
--
ALTER TABLE `tb_berubah_jadwal`
MODIFY `kd` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_daftar`
--
ALTER TABLE `tb_daftar`
MODIFY `kd_daftar` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_ganti_jadwal`
--
ALTER TABLE `tb_ganti_jadwal`
MODIFY `kd` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_jadwal_inst`
--
ALTER TABLE `tb_jadwal_inst`
MODIFY `no` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
MODIFY `kd_kelas` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
MODIFY `kd_siswa` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
