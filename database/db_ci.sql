-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 18 Sep 2019 pada 05.30
-- Versi Server: 5.6.11
-- Versi PHP: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_ci`
--
CREATE DATABASE IF NOT EXISTS `db_ci` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_ci`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE IF NOT EXISTS `gambar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul_gambar` text NOT NULL,
  `nama_gambar` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_gol`
--

CREATE TABLE IF NOT EXISTS `tm_gol` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `gol` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

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

CREATE TABLE IF NOT EXISTS `tm_mahasiswa` (
  `nim` varchar(9) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tm_prodi_id` int(4) DEFAULT NULL,
  `tm_gol_id` int(4) DEFAULT NULL,
  `telp` int(13) DEFAULT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(225) NOT NULL,
  PRIMARY KEY (`nim`),
  KEY `tm_prodi_id` (`tm_prodi_id`),
  KEY `tm_gol_id` (`tm_gol_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tm_mahasiswa`
--

INSERT INTO `tm_mahasiswa` (`nim`, `nama`, `tm_prodi_id`, `tm_gol_id`, `telp`, `alamat`, `foto`) VALUES
('111', '', 1, 1, 0, '', ''),
('219832190', 'Teddy Juniarlaksono', 1, 4, 906643, 'bondowoso', '261612975010212.png'),
('656', '', 1, 1, 0, '', ''),
('E31170150', 'putri kinanti', 1, 3, 876543217, 'jember', 'Lighthouse.jpg'),
('E31170155', 'Maulidiyawati', 1, 1, 9977856, 'probolinggo', 'Tulips.jpg'),
('E31170157', 'Kahfi yudha', 1, 1, 876543123, 'Malang', 'Hydrangeas.jpg'),
('E31170176', 'alda', 1, 4, 98765, 'leces', 'Koala.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_prodi`
--

CREATE TABLE IF NOT EXISTS `tm_prodi` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `prodi` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tm_prodi`
--

INSERT INTO `tm_prodi` (`id`, `prodi`) VALUES
(1, 'MIF'),
(2, 'TKK'),
(3, 'TIF');

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
