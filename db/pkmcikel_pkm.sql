-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jul 2022 pada 04.23
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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `berita_id` int(11) NOT NULL,
  `berita_judul` varchar(150) DEFAULT NULL,
  `berita_isi` text DEFAULT NULL,
  `berita_image` varchar(40) DEFAULT NULL,
  `berita_tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `poster` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_berita`
--

INSERT INTO `tbl_berita` (`berita_id`, `berita_judul`, `berita_isi`, `berita_image`, `berita_tanggal`, `poster`) VALUES
(1, 'Pengumuman Hasil Seleksi Enumerator SGSI 2020', '<p>Telah ditetapkan sebanyak 16&nbsp;Calon Enumerator SGSI 2020 yang akan dilanjutkan pemberkasan ke Litbang Kesehatan Kementerian Kesehatan RI.</p>\r\n\r\n<p>Nama-nama yang telah lulus seleksi di tingkat Kabupaten sebagaimana terlampir. Untuk tahapan selanjutnya masih menunggu tahapan seleksi dan penetapan dari Litbang Kesehatan Kementerian Kesehatan RI.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>--admin--</p>\r\n', '4579c6be35d7948263278b8f7310a6df.jpg', '2022-07-05 03:50:31', 'admin');

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
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indeks untuk tabel `tbl_tendis`
--
ALTER TABLE `tbl_tendis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_tendis`
--
ALTER TABLE `tbl_tendis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
