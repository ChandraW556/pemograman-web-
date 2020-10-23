-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 09:54 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weblanjut`
--

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id` int(12) NOT NULL,
  `kodemk` varchar(10) NOT NULL,
  `namamk` varchar(40) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `sks` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`id`, `kodemk`, `namamk`, `kategori`, `sks`) VALUES
(1, 'INF 403', 'Manajemen Proyek Teknologi Informasi', 'MKMA', 3),
(2, 'INF525', 'Pengolahan Citra', 'MKPIL', 3),
(3, 'INF303', 'Pemrograman Visual', 'MKMA', 3),
(4, 'INF301', 'Sustainable Development TI', 'MKMI', 2),
(5, 'INF305', 'Teori Bahasa dan Otomata', 'MKMA', 3),
(6, 'INF307', 'Pemrograman Web dan Project', 'MKMA', 6),
(7, 'PSG107', 'Psikologi dalam Kehidupan Sehari-hari', 'MKMI', 2),
(10, 'INF 107', 'Statistika Dan Probabilitas', 'MKMA', 3),
(11, 'INF206', 'Kalkulus', 'MKMA', 3);

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `id` int(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(500) NOT NULL,
  `email` varchar(20) NOT NULL,
  `namadepan` varchar(25) NOT NULL,
  `namabelakang` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`id`, `username`, `password`, `email`, `namadepan`, `namabelakang`) VALUES
(1, 'Chandra', '123', 'cw62753@gmail.com', 'Chandra', 'Wijaya');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi2`
--

CREATE TABLE `registrasi2` (
  `namadepan` varchar(20) NOT NULL,
  `namabelakang` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrasi2`
--

INSERT INTO `registrasi2` (`namadepan`, `namabelakang`, `email`) VALUES
('', '', ''),
('', '', 'casdas@gmail.com'),
('', '', 'casdas@gmail.com'),
('', '', 'casdas@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
