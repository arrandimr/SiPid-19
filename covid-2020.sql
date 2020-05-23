-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Bulan Mei 2020 pada 18.06
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid-2020`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id` int(6) UNSIGNED NOT NULL,
  `nama` varchar(30) NOT NULL,
  `sex` char(2) NOT NULL,
  `kwn` char(2) NOT NULL,
  `Status` char(10) NOT NULL,
  `kawin` char(2) NOT NULL,
  `Tempat` char(10) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `kronis` char(10) NOT NULL,
  `Ayah` char(10) NOT NULL,
  `ibu` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id`, `nama`, `sex`, `kwn`, `Status`, `kawin`, `Tempat`, `Alamat`, `kronis`, `Ayah`, `ibu`) VALUES
(1, '', '', '', '', '', '', '', '', '', ''),
(2, '', '', '', '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `survey`
--

CREATE TABLE `survey` (
  `V1` char(1) DEFAULT NULL,
  `V2` char(1) DEFAULT NULL,
  `V3` char(1) DEFAULT NULL,
  `V4` char(1) DEFAULT NULL,
  `V5` char(1) DEFAULT NULL,
  `V6` char(1) DEFAULT NULL,
  `V7` char(1) DEFAULT NULL,
  `Keputusan` varchar(100) DEFAULT NULL,
  `PageLink` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `survey`
--

INSERT INTO `survey` (`V1`, `V2`, `V3`, `V4`, `V5`, `V6`, `V7`, `Keputusan`, `PageLink`) VALUES
('Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Positif 100%', 'http://localhost/fp/positif.php'),
('T', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Positif 95%', 'http://localhost/fp/positif.php'),
('Y', 'T', 'Y', 'Y', 'Y', 'Y', 'Y', 'Positif 95%', 'http://localhost/fp/positif.php'),
('Y', 'Y', 'T', 'Y', 'Y', 'Y', 'Y', 'Positif 95%', 'http://localhost/fp/positif.php'),
('Y', 'Y', 'Y', 'T', 'Y', 'Y', 'Y', 'Positif 95%', 'http://localhost/fp/positif.php'),
('Y', 'Y', 'Y', 'Y', 'T', 'Y', 'Y', 'Positif 95%', 'http://localhost/fp/positif.php'),
('Y', 'Y', 'Y', 'Y', 'Y', 'T', 'Y', 'Positif 95%', 'http://localhost/fp/positif.php'),
('T', 'Y', 'Y', 'Y', 'Y', 'Y', 'T', 'Positif 95%', 'http://localhost/fp/positif.php'),
('T', 'T', 'Y', 'Y', 'Y', 'Y', 'Y', 'Presentase Kemungkinan Positif 90%', 'http://localhost/fp/positif.php'),
('Y', 'T', 'T', 'Y', 'Y', 'Y', 'Y', 'Presentase Kemungkinan Positif 90%', 'http://localhost/fp/positif.php'),
('Y', 'Y', 'T', 'T', 'Y', 'Y', 'Y', 'Presentase Kemungkinan Positif 90%', 'http://localhost/fp/positif.php'),
('Y', 'Y', 'Y', 'T', 'T', 'Y', 'Y', 'Presentase Kemungkinan Positif 90%', 'http://localhost/fp/positif.php'),
('Y', 'Y', 'Y', 'Y', 'T', 'T', 'Y', 'Presentase Kemungkinan Positif 90%', 'http://localhost/fp/positif.php'),
('Y', 'Y', 'Y', 'Y', 'Y', 'T', 'T', 'Presentase Kemungkinan Positif 90%', 'http://localhost/fp/positif.php'),
('T', 'Y', 'Y', 'Y', 'Y', 'Y', 'T', 'Presentase Kemungkinan Positif 90%', 'http://localhost/fp/positif.php'),
('Y', 'T', 'Y', 'Y', 'Y', 'Y', 'T', 'Presentase Kemungkinan Positif 90%', 'http://localhost/fp/positif.php'),
('Y', 'Y', 'T', 'Y', 'Y', 'Y', 'T', 'Presentase Kemungkinan Positif 90%', 'http://localhost/fp/positif.php'),
('Y', 'Y', 'Y', 'T', 'Y', 'Y', 'T', 'Presentase Kemungkinan Positif 90%', 'http://localhost/fp/positif.php'),
('Y', 'Y', 'Y', 'Y', 'T', 'Y', 'T', 'Presentase Kemungkinan Positif 90%', 'http://localhost/fp/positif.php'),
('T', 'T', 'T', 'Y', 'Y', 'Y', 'Y', 'Presentase Kemungkinan Positif 90%', 'http://localhost/fp/positif.php'),
('Y', 'Y', 'Y', 'T', 'T', 'T', 'Y', 'Presentase Kemungkinan Positif 70%', 'http://localhost/fp/positif.php'),
('Y', 'Y', 'Y', 'Y', 'T', 'T', 'T', 'Presentase Kemungkinan Positif 80%', 'http://localhost/fp/positif.php'),
('T', 'Y', 'Y', 'Y', 'Y', 'T', 'T', 'Presentase Kemungkinan Positif 80%', 'http://localhost/fp/positif.php'),
('Y', 'T', 'Y', 'Y', 'Y', 'T', 'T', 'Presentase Kemungkinan Positif 80%', 'http://localhost/fp/positif.php'),
('Y', 'Y', 'T', 'Y', 'Y', 'T', 'T', 'Presentase Kemungkinan Positif 80%', 'http://localhost/fp/positif.php'),
('Y', 'Y', 'Y', 'T', 'Y', 'T', 'T', 'Presentase Kemungkinan Positif 80%', 'http://localhost/fp/positif.php'),
('T', 'T', 'T', 'T', 'Y', 'Y', 'Y', 'Presentase Kemungkinan Positif 70%', 'http://localhost/fp/positif.php'),
('Y', 'T', 'T', 'T', 'T', 'Y', 'Y', 'Presentase Kemungkinan Positif 60%', 'http://localhost/fp/positif.php'),
('Y', 'Y', 'T', 'T', 'T', 'T', 'Y', 'Presentase Kemungkinan Positif 60%', 'http://localhost/fp/positif.php'),
('Y', 'Y', 'Y', 'T', 'T', 'T', 'T', 'Presentase Kemungkinan Positif 60%', 'http://localhost/fp/positif.php'),
('T', 'Y', 'T', 'Y', 'T', 'T', 'T', 'Presentase Kemungkinan Positif 60%', 'http://localhost/fp/positif.php'),
('T', 'T', 'Y', 'Y', 'Y', 'T', 'T', 'Presentase Kemungkinan Positif 60%', 'http://localhost/fp/positif.php'),
('T', 'T', 'T', 'Y', 'Y', 'Y', 'T', 'Presentase Kemungkinan Positif 60%', 'http://localhost/fp/positif.php'),
('T', 'T', 'T', 'T', 'T', 'Y', 'Y', 'Negatif 80%', 'http://localhost/fp/negatif.php'),
('Y', 'T', 'T', 'T', 'T', 'T', 'Y', 'Presentase Kemungkinan Negatif 60%', 'http://localhost/fp/negatif.php'),
('Y', 'Y', 'T', 'T', 'T', 'T', 'T', 'Presentase Kemungkinan Negatif 90%', 'http://localhost/fp/negatif.php'),
('T', 'Y', 'Y', 'T', 'T', 'T', 'T', 'Presentase Kemungkinan Negatif 80%', 'http://localhost/fp/negatif.php'),
('T', 'T', 'Y', 'Y', 'T', 'T', 'T', 'Presentase Kemungkinan Negatif 80%', 'http://localhost/fp/negatif.php'),
('T', 'T', 'T', 'Y', 'Y', 'T', 'T', 'Presentase Kemungkinan Negatif 80%', 'http://localhost/fp/negatif.php'),
('T', 'T', 'T', 'T', 'Y', 'Y', 'T', 'Presentase Kemungkinan Negatif 70%', 'http://localhost/fp/negatif.php'),
('T', 'T', 'T', 'T', 'T', 'T', 'Y', 'Negatif 100%', 'http://localhost/fp/negatif.php'),
('Y', 'T', 'T', 'T', 'T', 'T', 'T', 'Negatif 90%', 'http://localhost/fp/negatif.php'),
('T', 'Y', 'T', 'T', 'T', 'T', 'T', 'Presentase Kemungkinan Negatif 70%', 'http://localhost/fp/negatif.php'),
('T', 'T', 'Y', 'T', 'T', 'T', 'T', 'Negatif 90%', 'http://localhost/fp/negatif.php'),
('T', 'T', 'T', 'Y', 'T', 'T', 'T', 'Negatif 90%', 'http://localhost/fp/negatif.php'),
('T', 'T', 'T', 'T', 'Y', 'T', 'T', 'Negatif 90%', 'http://localhost/fp/negatif.php'),
('T', 'T', 'T', 'T', 'T', 'Y', 'T', 'Negatif 90%', 'http://localhost/fp/negatif.php'),
('T', 'T', 'T', 'T', 'T', 'T', 'T', 'Negatif 100%', 'http://localhost/fp/negatif.php');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
