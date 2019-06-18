-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2019 at 04:21 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuliah_pweb_kecamatan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_warga`
--

CREATE TABLE `tbl_warga` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jeniskelamin` varchar(9) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `tanggallahir` varchar(10) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `hubungan` varchar(50) DEFAULT NULL,
  `kewarganegaraan` varchar(3) NOT NULL,
  `paspor` varchar(40) DEFAULT NULL,
  `kitap` varchar(40) DEFAULT NULL,
  `ayah` varchar(16) DEFAULT NULL,
  `ibu` varchar(16) DEFAULT NULL,
  `agama` varchar(10) NOT NULL,
  `log` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_warga`
--

INSERT INTO `tbl_warga` (`nik`, `nama`, `jeniskelamin`, `ttl`, `tanggallahir`, `pendidikan`, `pekerjaan`, `status`, `hubungan`, `kewarganegaraan`, `paspor`, `kitap`, `ayah`, `ibu`, `agama`, `log`) VALUES
('1231212', 'Agus A S', 'Laki-laki', 'kudus', '1999-12-12', 'Tidak/Belum Sekolah', 'Pegawai Negeri Sipil (PNS)', 'Cerai/Mati', NULL, 'WNI', NULL, NULL, NULL, NULL, 'islam', '2019-06-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_warga`
--
ALTER TABLE `tbl_warga`
  ADD PRIMARY KEY (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
