-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for belajar-ci
CREATE DATABASE IF NOT EXISTS `belajar-ci` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `belajar-ci`;

-- Dumping structure for table belajar-ci.berita
CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `tglposting` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `foto` varchar(50) NOT NULL,
  `isiberita` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COMMENT='database Master Berita \r\n';

-- Dumping data for table belajar-ci.berita: ~3 rows (approximately)
/*!40000 ALTER TABLE `berita` DISABLE KEYS */;
INSERT INTO `berita` (`id`, `judul`, `author`, `tglposting`, `foto`, `isiberita`) VALUES
	(4, 'Stasiun Luar Angkasa China Selesai Dibangun 2022', 'Dylan ', '2020-11-29 13:19:39', 'satelit.jpg', 'China akan memulai pembangunan stasiun luar angkasa pada 2021. Wakil Kepala Proyek Peluncuran Chang Zheng 5, China Aerospace Science and Technology Corporation Qu Yiguang mengatakan ISS atau Stasiun Luar Angkasa Internasional versi China itu dinamakan Tiangong atau Istana Surga.'),
	(5, 'Waktu Terbaik Lihat Puncak Hujan Meteor Orinoid Ha', 'Andi ', '2020-11-29 13:21:00', 'bintang.jpg', 'Hari Sabtu (28/11) menjadi puncak hujan meteor Orionid. Meski terjadi pada pagi pukul 09.00 WIB, masih ada cara untuk menikmatinya di malam hari. Menurut kalender Bosscha, hujan meteor Orionid terjadi dari tanggal 13 November 2020 hingga 6 Desember 2020 dan puncaknya terjadi pada tanggal 28 November 2020.'),
	(6, 'Inggris Memulai Penelitian Tes Darah Pendeteksi 50', 'Elang ', '2020-11-29 14:07:03', 'vaksin.jpeg', ' Layanan Kesehatan Nasional (NHS) Inggris sedang bersiap lakukan metode penelitian menggunakan sampel darah model terbaru yang diperkirakan mampu mendeteksi lebih dari 50 jenis kanker agar pasien bisa mendapatkan perawatan yang tepat sejak awal.');
/*!40000 ALTER TABLE `berita` ENABLE KEYS */;

-- Dumping structure for table belajar-ci.halaman
CREATE TABLE IF NOT EXISTS `halaman` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `isi` varchar(1000) NOT NULL,
  `tglposting` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COMMENT='database Master halaman ';

-- Dumping data for table belajar-ci.halaman: ~4 rows (approximately)
/*!40000 ALTER TABLE `halaman` DISABLE KEYS */;
INSERT INTO `halaman` (`id`, `judul`, `author`, `isi`, `tglposting`) VALUES
	(3, 'Halaman Home', 'Chandra', 'Berisi Mengenai Menu Home yang berupa tampilan suatu website ', '2020-11-29 13:04:20'),
	(4, 'Halaman Login', 'Andi ', 'Isi login mengenai cara users masuk ke halaman dashboard', '2020-11-29 12:02:57'),
	(5, 'Halaman Master User ', 'Dylan ', ' berisi mengenai managemen User (CRUD) ,  ketika terdapat pengguna yang telah login mengklik menu Master User, maka aplikasi akan menampilkan list user.', '2020-11-29 12:10:55');
/*!40000 ALTER TABLE `halaman` ENABLE KEYS */;

-- Dumping structure for table belajar-ci.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `name` varchar(100) NOT NULL COMMENT 'Name',
  `email` varchar(255) NOT NULL COMMENT 'Email Address',
  `contact_no` varchar(50) NOT NULL COMMENT 'Contact No',
  `password` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Created date',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COMMENT='datatable demo table';

-- Dumping data for table belajar-ci.users: ~5 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `contact_no`, `password`, `created_at`) VALUES
	(1, 'Chandra', 'chan123@gmail.com', '98908897891213', '$2y$10$IY4jFEHUugXUP3uhnBwfLON/Tk6nrVbVSgfaOpWqoyOkth4ldZqye', '2020-11-29 11:52:00'),
	(2, 'Andi', 'andi256@gmail.com', '986786897907867', '$2y$10$qFEq06c/2AXkccehj7URDeCHHDQC7rDLkaXgY7X2/xPbhFaUN01Gu', '2020-11-29 11:58:02'),
	(3, 'Dylan', 'dylan234@gmail.com', '776756758789767867', '$2y$10$ocB/DOd/DCE5dkAMWTOlxO.gtGEJeZ9S3.cSiyVSNgCBCKj3QM5X6', '2020-11-29 11:58:57'),
	(4, 'Saiya', 'saiya666@gmail.com', '87867567786', '$2y$10$msnJFz0vp5oF.FNxksSrYO4kTBYN4jwIwyPzwqSkaHKKolPLcDonu', '2020-11-29 12:01:46'),
	(5, 'Elang', 'elangmru234@gmail.com', '9889767867', '$2y$10$MP4XlScgFLN1jPCuadApR.kzu4feSFtUMfkdJfRVfywker7NmB1jO', '2020-11-29 12:02:11');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
