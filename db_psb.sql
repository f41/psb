-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2018 at 11:51 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_psb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbmaster_orang_tua`
--

CREATE TABLE `tbmaster_orang_tua` (
  `ortu_id` int(11) NOT NULL,
  `ortu_dftr_nodaftar` varchar(14) NOT NULL,
  `ortu_nama_ayah` varchar(40) NOT NULL,
  `ortu_pekerjaan_ayah` varchar(35) NOT NULL,
  `ortu_nohp_ayah` int(15) NOT NULL,
  `ortu_nama_ibu` varchar(40) NOT NULL,
  `ortu_pekerjaan_ibu` varchar(35) NOT NULL,
  `ortu_nohp_ibu` int(15) NOT NULL,
  `ortu_alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbmaster_tahun_ajaran`
--

CREATE TABLE `tbmaster_tahun_ajaran` (
  `ta_id` varchar(8) NOT NULL,
  `ta_awal` varchar(4) NOT NULL,
  `ta_akhir` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbmaster_tahun_ajaran`
--

INSERT INTO `tbmaster_tahun_ajaran` (`ta_id`, `ta_awal`, `ta_akhir`) VALUES
('20162017', '2016', '2017'),
('20172018', '2017', '2018'),
('20182019', '2018', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `tbmaster_user`
--

CREATE TABLE `tbmaster_user` (
  `user_id` varchar(3) NOT NULL,
  `user_nama` varchar(40) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_level` char(1) NOT NULL,
  `user_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbmaster_user`
--

INSERT INTO `tbmaster_user` (`user_id`, `user_nama`, `user_password`, `user_level`, `user_foto`) VALUES
('adm', 'Administrator', '21232f297a57a5a743894a0e4a801fc3', '0', 'adm.png'),
('kps', 'Kepala Sekolah', '8561863b55faf85b9ad67c52b3b851ac', '1', 'kps.gif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftar`
--

CREATE TABLE `tb_pendaftar` (
  `dftr_nodaftar` varchar(14) NOT NULL,
  `dftr_ta_id` varchar(8) NOT NULL,
  `dftr_tgl_daftar` date NOT NULL,
  `dftr_nama_calon_siswa` varchar(50) NOT NULL,
  `dftr_tempat_lahir` varchar(30) NOT NULL,
  `dftr_tgl_lahir` date NOT NULL,
  `dftr_jenkel` char(1) NOT NULL,
  `dftr_alamat` text NOT NULL,
  `dftr_status` char(1) DEFAULT NULL COMMENT 'null = on proses; 0 = tidak lulus; 1 = lulus;',
  `dftr_ulang` char(1) DEFAULT NULL COMMENT 'null = blm; 1 = sudah;',
  `dftr_create_by` varchar(3) NOT NULL,
  `dftr_create_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbmaster_orang_tua`
--
ALTER TABLE `tbmaster_orang_tua`
  ADD PRIMARY KEY (`ortu_id`),
  ADD UNIQUE KEY `dftr_nodaftar` (`ortu_dftr_nodaftar`);

--
-- Indexes for table `tbmaster_tahun_ajaran`
--
ALTER TABLE `tbmaster_tahun_ajaran`
  ADD PRIMARY KEY (`ta_id`);

--
-- Indexes for table `tbmaster_user`
--
ALTER TABLE `tbmaster_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tb_pendaftar`
--
ALTER TABLE `tb_pendaftar`
  ADD PRIMARY KEY (`dftr_nodaftar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbmaster_orang_tua`
--
ALTER TABLE `tbmaster_orang_tua`
  MODIFY `ortu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
