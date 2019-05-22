-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Bulan Mei 2019 pada 06.57
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perumahanq`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumah`
--

CREATE TABLE `rumah` (
  `id` int(8) NOT NULL,
  `no_rumah` varchar(8) NOT NULL,
  `nama_rumah` varchar(50) NOT NULL,
  `harga_rumah` mediumint(10) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `blok` char(1) NOT NULL,
  `tipe` varchar(10) NOT NULL,
  `luas_bangunan` varchar(10) NOT NULL,
  `luas_tanah` varchar(10) NOT NULL,
  `sertifikat` varchar(15) NOT NULL,
  `sarana` text NOT NULL,
  `keterangan` text NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rumah`
--

INSERT INTO `rumah` (`id`, `no_rumah`, `nama_rumah`, `harga_rumah`, `gambar`, `blok`, `tipe`, `luas_bangunan`, `luas_tanah`, `sertifikat`, `sarana`, `keterangan`, `status`) VALUES
(14, 'RMPT01', 'Bojong Konengin', 8388607, '1_(3)3.png', 'A', '21', '67n2', '23m2', 'Milik Sendiri', 'kjASNJA', 'sndkjasn', 'Terjual'),
(16, 'RMPT02', 'Bojong Koneng', 812632, '1_(5)4.png', 'B', '21', '43m2', '32m2', 'Milik Sendiri', 'asdasda', 'sadasd', 'Belum Terjual');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(125) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `rumah`
--
ALTER TABLE `rumah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `rumah`
--
ALTER TABLE `rumah`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
