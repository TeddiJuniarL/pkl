-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Sep 2019 pada 04.06
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_gol`
--

CREATE TABLE `tm_gol` (
  `id` int(4) NOT NULL,
  `gol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tm_gol`
--

INSERT INTO `tm_gol` (`id`, `gol`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D'),
(5, 'E');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_mahasiswa`
--

CREATE TABLE `tm_mahasiswa` (
  `nim` varchar(9) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tm_prodi_id` int(4) DEFAULT NULL,
  `tm_gol_id` int(4) DEFAULT NULL,
  `tm_telp` int(13) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tm_mahasiswa`
--

INSERT INTO `tm_mahasiswa` (`nim`, `nama`, `tm_prodi_id`, `tm_gol_id`, `tm_telp`, `alamat`, `foto`) VALUES
('E31171396', 'Alda Ghealuly', 1, 2, 0, '', ''),
('E31171494', 'Teddi Juniarlaksono', 1, 3, 0, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_prodi`
--

CREATE TABLE `tm_prodi` (
  `id` int(4) NOT NULL,
  `prodi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tm_prodi`
--

INSERT INTO `tm_prodi` (`id`, `prodi`) VALUES
(1, 'MIF'),
(2, 'TKK'),
(3, 'TIF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tm_gol`
--
ALTER TABLE `tm_gol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tm_mahasiswa`
--
ALTER TABLE `tm_mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `tm_prodi_id` (`tm_prodi_id`),
  ADD KEY `tm_gol_id` (`tm_gol_id`);

--
-- Indexes for table `tm_prodi`
--
ALTER TABLE `tm_prodi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tm_gol`
--
ALTER TABLE `tm_gol`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tm_prodi`
--
ALTER TABLE `tm_prodi`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tm_mahasiswa`
--
ALTER TABLE `tm_mahasiswa`
  ADD CONSTRAINT `tm_mahasiswa_ibfk_1` FOREIGN KEY (`tm_gol_id`) REFERENCES `tm_gol` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tm_mahasiswa_ibfk_2` FOREIGN KEY (`tm_prodi_id`) REFERENCES `tm_prodi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
