-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jul 2022 pada 15.37
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkmcikel_pkm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tendis`
--

CREATE TABLE `tbl_tendis` (
  `id` int(11) NOT NULL,
  `tendis_foto` varchar(200) NOT NULL,
  `tendis_nama` varchar(100) NOT NULL,
  `tendis_jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_tendis`
--

INSERT INTO `tbl_tendis` (`id`, `tendis_foto`, `tendis_nama`, `tendis_jabatan`) VALUES
(1, 'asepdani.jpg', 'Dr. Asep Dani', 'Dokter'),
(2, 'hendi.jpg', 'Dr. Hendi Rachman Bachtiar', 'Dokter');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_tendis`
--
ALTER TABLE `tbl_tendis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_tendis`
--
ALTER TABLE `tbl_tendis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
