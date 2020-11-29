-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Okt 2020 pada 11.59
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

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
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id` int(3) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `sks` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`id`, `kode`, `nama`, `kategori`, `sks`) VALUES
(21, 'qwert', 'qwerty', 'MKMA', 3),
(27, 'Test', 'Test2', 'MKMA', 3),
(28, 'INF303', 'Basis Data', 'MKMA', 3),
(29, 'INF505', 'Web Lanjut', 'MKMA', 6),
(30, 'INF10', 'Algoritma', 'MKMA', 4),
(33, 'INF202', 'Mobile', 'MKMA', 6),
(34, 'INF301', 'SUSTAINABLE ECO DEVE', 'MKMI', 2),
(36, 'INF525', 'PENGOLAHAN CITRA', 'MKPIL', 3),
(37, 'INF403', 'MANAJEMEN PROYEK TEK', 'MKMI', 3),
(38, 'INF305', 'TEORI BAHASA DAN OTO', 'MKMI', 3),
(39, 'INF204', 'MIKROKONTROLLER DAN ', 'MKMA', 6),
(40, 'INF302', 'TECHNOPRENEURSHIP', 'MKMI', 3),
(41, 'INF208', 'SISTEM OPERASI', 'MKMA', 3),
(42, 'INF206', 'KALKULUS', 'MKMA', 3),
(43, 'INF101', 'ALGORITMA DAN PEMROG', 'MKMA', 4),
(44, 'INF107', 'STATISTIKA DAN PROBA', 'MKMI', 3),
(45, 'INF105', 'ALJABAR LINEAR DAN M', 'MKMI', 3),
(46, 'GNR105', 'DASAR LOGIKA MATEMAT', 'MKMI', 3),
(47, 'GNR104', 'PANCASILA & KEWARGAN', 'MKMI', 3),
(48, 'INF108', 'INTERAKSI MANUSIA KO', 'MKMA', 3),
(49, 'INF210	', 'KOMPUTER DAN MASYARA', 'MKMI', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi`
--

CREATE TABLE `registrasi` (
  `id` int(3) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(500) NOT NULL,
  `email` varchar(20) NOT NULL,
  `namaDepan` varchar(25) NOT NULL,
  `namaBelakang` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indeks untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
