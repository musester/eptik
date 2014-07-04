-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 15 Jun 2014 pada 19.58
-- Versi Server: 5.6.14
-- Versi PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `dbeptik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblartikel`
--

CREATE TABLE IF NOT EXISTS `tblartikel` (
  `judul` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `kdkategori` varchar(5) NOT NULL,
  PRIMARY KEY (`judul`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblartikel`
--

INSERT INTO `tblartikel` (`judul`, `penulis`, `isi`, `tanggal`, `kdkategori`) VALUES
('M. Syihabudin', '', 'asdasdasd', '2014-06-16 00:04:42', 'KAT1'),
('text bold', 'Syihab', 'aaaaaa', '2014-06-16 00:10:23', 'KAT1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblkategori`
--

CREATE TABLE IF NOT EXISTS `tblkategori` (
  `kdkategori` varchar(10) NOT NULL,
  `isikategori` varchar(50) NOT NULL,
  `id` int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tblkategori`
--

INSERT INTO `tblkategori` (`kdkategori`, `isikategori`, `id`) VALUES
('KAT1', 'HTML & CSS', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `fullname` varchar(50) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `blokir` enum('N','Y') NOT NULL,
  `level` varchar(20) NOT NULL,
  `keyword` varchar(18) NOT NULL DEFAULT 'Copyright_eptik'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`fullname`, `username`, `password`, `blokir`, `level`, `keyword`) VALUES
('Muhamad Syihabudin', 'admin', 'syihab', 'N', 'All Privillege', 'Copyright_eptik'),
('Muhamad Syihabudin', 'user', 'syihab', 'N', 'User', 'Copyright_eptik');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
