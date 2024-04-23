-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 19 Feb 2018 pada 13.22
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_pln`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `IdPelanggan` int(10) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(35) NOT NULL,
  `Password` varchar(35) NOT NULL,
  `TypeUser` varchar(15) NOT NULL,
  `Fullname` varchar(25) NOT NULL,
  PRIMARY KEY (`IdPelanggan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30004 ;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`IdPelanggan`, `UserName`, `Password`, `TypeUser`, `Fullname`) VALUES
(30001, 'kurnia', 'kurnia', 'admin', 'admin'),
(30002, 'user', 'user', 'user', 'user'),
(30003, 'gonel', 'gonel', 'user', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelanggan`
--

CREATE TABLE IF NOT EXISTS `tbl_pelanggan` (
  `id_pelanggan` int(10) NOT NULL AUTO_INCREMENT,
  `id_tarif` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pelanggan`),
  KEY `id_tarif` (`id_tarif`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10005 ;

--
-- Dumping data untuk tabel `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id_pelanggan`, `id_tarif`, `nama`, `alamat`) VALUES
(10001, 40001, 'Anda', 'Jalan'),
(10002, 40001, 'aku', 'kamu'),
(10003, 40007, 'kamu', 'aku'),
(10004, 40007, 'kurnia', 'lanjung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pembayaran`
--

CREATE TABLE IF NOT EXISTS `tbl_pembayaran` (
  `id_pembayaran` int(10) NOT NULL AUTO_INCREMENT,
  `id_tagihan` int(10) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `pemakaian` int(3) NOT NULL,
  `biaya_denda` int(10) NOT NULL,
  `biaya_admin` int(10) NOT NULL,
  `total_bayar` int(50) NOT NULL,
  `status_pembayaran` enum('Lunas','Nunggak') NOT NULL,
  PRIMARY KEY (`id_pembayaran`),
  KEY `id_tagihan` (`id_tagihan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20002 ;

--
-- Dumping data untuk tabel `tbl_pembayaran`
--

INSERT INTO `tbl_pembayaran` (`id_pembayaran`, `id_tagihan`, `tanggal_bayar`, `pemakaian`, `biaya_denda`, `biaya_admin`, `total_bayar`, `status_pembayaran`) VALUES
(20001, 30001, '2012-10-10', 1000000, 100, 100, 1000200, 'Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tagihan`
--

CREATE TABLE IF NOT EXISTS `tbl_tagihan` (
  `id_tagihan` int(10) NOT NULL AUTO_INCREMENT,
  `id_pelanggan` int(10) NOT NULL,
  `pemakaian` int(10) NOT NULL,
  `tagihan_bulanan` varchar(10) NOT NULL,
  `tagihan_tahunan` int(10) NOT NULL,
  `status_tagihan` enum('Aktif','Tidak Aktif') NOT NULL,
  PRIMARY KEY (`id_tagihan`),
  KEY `id_pelanggan` (`id_pelanggan`),
  KEY `id_pelanggan_2` (`id_pelanggan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30007 ;

--
-- Dumping data untuk tabel `tbl_tagihan`
--

INSERT INTO `tbl_tagihan` (`id_tagihan`, `id_pelanggan`, `pemakaian`, `tagihan_bulanan`, `tagihan_tahunan`, `status_tagihan`) VALUES
(30001, 10002, 1000000, 'Maret', 2018, 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tarif`
--

CREATE TABLE IF NOT EXISTS `tbl_tarif` (
  `id_tarif` int(10) NOT NULL AUTO_INCREMENT,
  `kode` varchar(5) NOT NULL,
  `daya` int(5) NOT NULL,
  `tarif_perKWH` int(15) NOT NULL,
  `beban` int(15) NOT NULL,
  PRIMARY KEY (`id_tarif`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40009 ;

--
-- Dumping data untuk tabel `tbl_tarif`
--

INSERT INTO `tbl_tarif` (`id_tarif`, `kode`, `daya`, `tarif_perKWH`, `beban`) VALUES
(40001, 'KD001', 500, 5000, 2500000),
(40003, 'KD003', 200, 5000, 1000000),
(40004, 'KD004', 100, 3500, 350000),
(40005, 'KD005', 1000, 3500, 3500000),
(40006, 'KD006', 1000, 6500, 6500000),
(40007, 'KD007', 5000, 5000, 25000000),
(40008, 'KD008', 100, 3500, 350000);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD CONSTRAINT `tbl_pelanggan_ibfk_1` FOREIGN KEY (`id_tarif`) REFERENCES `tbl_tarif` (`id_tarif`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD CONSTRAINT `tbl_pembayaran_ibfk_1` FOREIGN KEY (`id_tagihan`) REFERENCES `tbl_tagihan` (`id_tagihan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_tagihan`
--
ALTER TABLE `tbl_tagihan`
  ADD CONSTRAINT `tbl_tagihan_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `tbl_pelanggan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
