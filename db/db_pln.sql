-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Nov 2019 pada 00.30
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pln`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `IdPelanggan` int(10) NOT NULL,
  `UserName` varchar(35) NOT NULL,
  `Password` varchar(35) NOT NULL,
  `TypeUser` varchar(15) NOT NULL,
  `Fullname` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`IdPelanggan`, `UserName`, `Password`, `TypeUser`, `Fullname`) VALUES
(30001, 'admin', 'admin', 'admin', 'admin'),
(30002, 'user', 'user', 'user', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id_pelanggan` int(10) NOT NULL,
  `kode_tarif` int(10) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_meter` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id_pelanggan`, `kode_tarif`, `nama`, `alamat`, `no_meter`) VALUES
(10001, 40001, 'euis', 'jangari', 100),
(10002, 40001, 'kamu', 'jangari', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pembayaran`
--

CREATE TABLE `tbl_pembayaran` (
  `id_pelanggan` int(10) NOT NULL,
  `id_bayar` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `biaya_admin` varchar(10) NOT NULL,
  `biaya_denda` int(20) NOT NULL,
  `jumlah_tagihan` int(20) NOT NULL,
  `total` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pembayaran`
--

INSERT INTO `tbl_pembayaran` (`id_pelanggan`, `id_bayar`, `tanggal`, `bulan`, `biaya_admin`, `biaya_denda`, `jumlah_tagihan`, `total`) VALUES
(10001, 10001, '2019-02-04', 'Agustus', '5000', 5000, 500000, 510000),
(10002, 10002, '2019-02-12', 'Maret', '2700', 15000, 700000, 717700);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penggunaan`
--

CREATE TABLE `tbl_penggunaan` (
  `id_pelanggan` int(10) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `meter_awal` varchar(15) NOT NULL,
  `meter_akhir` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_penggunaan`
--

INSERT INTO `tbl_penggunaan` (`id_pelanggan`, `bulan`, `tahun`, `meter_awal`, `meter_akhir`) VALUES
(10001, 'Desember', '2018', '20M', '20M'),
(10002, 'Maret', '2019', '20M', '30M');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tagihan`
--

CREATE TABLE `tbl_tagihan` (
  `id_pelanggan` int(10) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `jumlah_meter` varchar(10) NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_tagihan`
--

INSERT INTO `tbl_tagihan` (`id_pelanggan`, `bulan`, `tahun`, `jumlah_meter`, `status`) VALUES
(10001, 'Maret', '2005', '3000 M', 'Aktif'),
(10002, 'Agustus', '2018', '3000 M', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tarif`
--

CREATE TABLE `tbl_tarif` (
  `kode_tarif` int(15) NOT NULL,
  `daya` int(5) NOT NULL,
  `tarif_perKWH` int(15) NOT NULL,
  `beban` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_tarif`
--

INSERT INTO `tbl_tarif` (`kode_tarif`, `daya`, `tarif_perKWH`, `beban`) VALUES
(40001, 150, 6500, 500000),
(40002, 200, 3500, 700000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`IdPelanggan`);

--
-- Indeks untuk tabel `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD KEY `id_tarif` (`kode_tarif`);

--
-- Indeks untuk tabel `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD KEY `id_tagihan` (`id_bayar`);

--
-- Indeks untuk tabel `tbl_penggunaan`
--
ALTER TABLE `tbl_penggunaan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD KEY `bulan` (`bulan`);

--
-- Indeks untuk tabel `tbl_tagihan`
--
ALTER TABLE `tbl_tagihan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD KEY `id_pelanggan` (`bulan`),
  ADD KEY `id_pelanggan_2` (`bulan`);

--
-- Indeks untuk tabel `tbl_tarif`
--
ALTER TABLE `tbl_tarif`
  ADD PRIMARY KEY (`kode_tarif`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `IdPelanggan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30003;

--
-- AUTO_INCREMENT untuk tabel `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `id_pelanggan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10003;

--
-- AUTO_INCREMENT untuk tabel `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  MODIFY `id_pelanggan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10003;

--
-- AUTO_INCREMENT untuk tabel `tbl_penggunaan`
--
ALTER TABLE `tbl_penggunaan`
  MODIFY `id_pelanggan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10003;

--
-- AUTO_INCREMENT untuk tabel `tbl_tagihan`
--
ALTER TABLE `tbl_tagihan`
  MODIFY `id_pelanggan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10003;

--
-- AUTO_INCREMENT untuk tabel `tbl_tarif`
--
ALTER TABLE `tbl_tarif`
  MODIFY `kode_tarif` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40003;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD CONSTRAINT `tbl_pelanggan_ibfk_1` FOREIGN KEY (`kode_tarif`) REFERENCES `tbl_tarif` (`kode_tarif`);

--
-- Ketidakleluasaan untuk tabel `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD CONSTRAINT `tbl_pembayaran_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `tbl_tagihan` (`id_pelanggan`);

--
-- Ketidakleluasaan untuk tabel `tbl_penggunaan`
--
ALTER TABLE `tbl_penggunaan`
  ADD CONSTRAINT `tbl_penggunaan_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `tbl_pelanggan` (`id_pelanggan`);

--
-- Ketidakleluasaan untuk tabel `tbl_tagihan`
--
ALTER TABLE `tbl_tagihan`
  ADD CONSTRAINT `tbl_tagihan_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `tbl_penggunaan` (`id_pelanggan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
