-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Okt 2021 pada 12.40
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_ppdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(5) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `sekolah` varchar(50) NOT NULL,
  `status_user` enum('diterima','cadangan','tidakditerima','proses','ready') NOT NULL,
  `level_user` enum('admin','siswa') NOT NULL,
  `alamat` text NOT NULL,
  `nama_wali` varchar(50) NOT NULL,
  `alamat_wali` text NOT NULL,
  `kontak_wali` varchar(13) NOT NULL,
  `hubungan_wali` enum('','ayah','ibu','saudara/i','lainnya') NOT NULL,
  `nilai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
