-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Jun 2019 pada 13.57
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemadamkebakaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kejadian`
--

CREATE TABLE `kejadian` (
  `id_kejadian` int(11) NOT NULL,
  `id_masyarakat_pelapor` int(11) NOT NULL,
  `tanggal_waktu_kejadian` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `longitude` double NOT NULL,
  `latitude` double NOT NULL,
  `deskripsi_kejadian` text NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kejadian`
--

INSERT INTO `kejadian` (`id_kejadian`, `id_masyarakat_pelapor`, `tanggal_waktu_kejadian`, `longitude`, `latitude`, `deskripsi_kejadian`, `gambar`) VALUES
(9, 0, '2019-04-29 12:48:26', -12387651, -87245627, 'Kebakaran ', 'Cari Sendiri'),
(10, 0, '2019-04-30 06:20:17', -123123, -123123, 'Kebakaran', 'Cari Sendiri'),
(11, 0, '2019-06-16 17:03:42', -1234124, -123124, 'Kebakaran hebat', 'Cari coba'),
(12, 0, '2019-06-24 18:20:01', 1122, 2233, 'Kejadian', 'gambar01dd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masyarakat_pelapor`
--

CREATE TABLE `masyarakat_pelapor` (
  `id_masyarakat_pelapor` int(11) NOT NULL,
  `no_ktp` varchar(25) NOT NULL,
  `nama_masyarakat_pelapor` varchar(25) NOT NULL,
  `telp` varchar(25) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `masyarakat_pelapor`
--

INSERT INTO `masyarakat_pelapor` (`id_masyarakat_pelapor`, `no_ktp`, `nama_masyarakat_pelapor`, `telp`, `alamat`) VALUES
(48, '3216060502970008', 'Calhanoglu', '087781180065', 'Turky'),
(49, '3216060502970007', 'Buffon', '087781180065', 'Parma'),
(56, '1435463', 'Ilham', '3575743', 'Palangkaraya'),
(63, '3216060502970008', 'Bule', '+62', 'Rusia'),
(68, '9853489152362', 'Arman', '081808024366', 'Cirebon'),
(75, '93030', 'Abika', '+62', 'Bekasi Barat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `no_induk_pegawai` varchar(20) NOT NULL,
  `nama_petugas` varchar(25) NOT NULL,
  `id_pos` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `no_induk_pegawai`, `nama_petugas`, `id_pos`) VALUES
(42, 'Brian Chandra AB', '123140057', '12314124'),
(44, '12312414', 'Ricky Cahyadi', '123456'),
(45, '10022', 'tima22', 'pos122');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pos`
--

CREATE TABLE `pos` (
  `id_pos` int(11) NOT NULL,
  `nama_pos` varchar(25) NOT NULL,
  `alamat_pos` varchar(255) NOT NULL,
  `longitude_pos` double NOT NULL,
  `latitude_pos` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pos`
--

INSERT INTO `pos` (`id_pos`, `nama_pos`, `alamat_pos`, `longitude_pos`, `latitude_pos`) VALUES
(1, 'Pos Posan', 'Yogyakarta', -1233732, -97387624),
(7, 'Pos Hutan Kayu', 'Jakarta Timur', -87349576, -87634676),
(8, 'Pos Ronda', 'Jl. Vikendi', -76534765, -89845766),
(9, 'pos upn1', 'jl. babarsari1', 111, 22);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_profile` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `level_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `id_profile`, `username`, `password`, `level_user`) VALUES
(1, 1, 'bule', 'admin123', 'admin'),
(2, 2, 'darlan', 'darlan', 'admin'),
(3, 1, 'admin', 'admin', 'admin'),
(4, 1, 'user', 'user', 'user'),
(6, 1, 'user', 'user', 'admin'),
(7, 1, 'user11111', 'user2222', 'user'),
(8, 1, 'anas', 'anas', 'admin'),
(9, 1, 'mama', 'mama', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kejadian`
--
ALTER TABLE `kejadian`
  ADD PRIMARY KEY (`id_kejadian`);

--
-- Indexes for table `masyarakat_pelapor`
--
ALTER TABLE `masyarakat_pelapor`
  ADD PRIMARY KEY (`id_masyarakat_pelapor`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `pos`
--
ALTER TABLE `pos`
  ADD PRIMARY KEY (`id_pos`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kejadian`
--
ALTER TABLE `kejadian`
  MODIFY `id_kejadian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `masyarakat_pelapor`
--
ALTER TABLE `masyarakat_pelapor`
  MODIFY `id_masyarakat_pelapor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `pos`
--
ALTER TABLE `pos`
  MODIFY `id_pos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
