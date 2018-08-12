-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 09 Jul 2018 pada 09.48
-- Versi Server: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uaspweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `item`
--

CREATE TABLE `item` (
  `id_item` varchar(100) NOT NULL,
  `id_transaksi` varchar(100) NOT NULL,
  `kodeobat` varchar(100) NOT NULL,
  `tipeobat` varchar(100) NOT NULL,
  `namaobat` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `jumlahbarang` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `item`
--

INSERT INTO `item` (`id_item`, `id_transaksi`, `kodeobat`, `tipeobat`, `namaobat`, `harga`, `jumlahbarang`, `total`) VALUES
('81050', '591717', 'wdawd', 'dwadaw', 'dawdawaw', 'dawdawdaw', 'dwwdawdaw', 'dwadwd'),
('21091', '591717', 'wdawd', 'dwadaw', 'dawdawaw', 'dawdawdaw', 'dwwdawdaw', 'dwadwd'),
('87200', '719915', '21123', 'dawdwd', 'dawdaw', '12000', '4', '48000'),
('31400', '805408', '21123', 'dawdwd', 'dawdaw', '12000', '4', '48000'),
('78530', '886592', '21123', 'dawdwd', 'dawdaw', '12000', '4', '48000'),
('32151', '886592', '11111', 'Pulveres', 'matamu', '1200000', '2', '2400000'),
('20090', '373008', '11111', 'Pulveres', 'matamu', '1200000', '2', '2400000'),
('82491', '373008', '21123', 'dawdwd', 'dawdaw', '12000', '2', '24000'),
('62660', '877823', '11111', 'Pulveres', 'matamu', '1200000', '2', '2400000'),
('81301', '877823', '21123', 'dawdwd', 'dawdaw', '12000', '2', '24000'),
('14480', '747468', '11111', 'Pulveres', 'matamu', '1200000', '2', '2400000'),
('24031', '747468', '21123', 'dawdwd', 'dawdaw', '12000', '2', '24000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporanpembelian`
--

CREATE TABLE `laporanpembelian` (
  `kodeobat` varchar(5) NOT NULL,
  `nofaktur` int(11) NOT NULL,
  `namasuplier` varchar(200) NOT NULL,
  `namaobat` varchar(100) NOT NULL,
  `tipeobat` varchar(100) NOT NULL,
  `jumlahbarang` int(11) NOT NULL,
  `dosis` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `tanggalpembelian` date NOT NULL,
  `tanggalex` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporanpembelian`
--

INSERT INTO `laporanpembelian` (`kodeobat`, `nofaktur`, `namasuplier`, `namaobat`, `tipeobat`, `jumlahbarang`, `dosis`, `harga`, `tanggalpembelian`, `tanggalex`) VALUES
('12345', 12345, 'PT.majujaya', 'Bodrexin', 'Tablet', 12, '1.Dosis Lazim', 12000, '2018-07-05', '2018-07-11'),
('12345', 111111, 'PT.majujaya', 'Bodrexin', 'Tablet', 100, '1.Dosis Lazim', 12000, '2018-07-05', '2018-07-25'),
('12345', 12345, 'Matio', 'matamu', 'Pulveres', 20, '1.Dosis Lazim', 50000, '2018-07-11', '2018-07-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masterbarang`
--

CREATE TABLE `masterbarang` (
  `kodeobat` varchar(5) NOT NULL,
  `nofaktur` int(11) NOT NULL,
  `namasuplier` varchar(100) NOT NULL,
  `namaobat` varchar(100) NOT NULL,
  `tipeobat` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL,
  `dosis` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `hargajual` int(11) DEFAULT NULL,
  `tanggalpembelian` date NOT NULL,
  `tanggalex` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `masterbarang`
--

INSERT INTO `masterbarang` (`kodeobat`, `nofaktur`, `namasuplier`, `namaobat`, `tipeobat`, `stok`, `dosis`, `harga`, `hargajual`, `tanggalpembelian`, `tanggalex`) VALUES
('M5500', 213131, 'DAWDAWD', 'DADDW', 'Tablet', 43, '3.Dosis Minimum', 2321, NULL, '2018-07-05', '2018-07-24'),
('23131', 32131312, 'dawdaw', 'dwadaw', 'Tablet', 21, '1.Dosis Lazim', 21, NULL, '2018-07-19', '2018-07-11'),
('22222', 111111, 'dawdadaw', 'Panadol', 'Pulveres', 24, '1.Dosis Lazim', 12, NULL, '2018-07-11', '2018-07-12'),
('31231', 11111, 'dda', 'dawdawd', 'Pulveres', 21, '3.Dosis Minimum', 22, NULL, '2018-07-19', '2018-07-05'),
('dadad', 2111, 'daawda', 'dadawd', 'dawdaw', 21, 'dawdaw', 12, NULL, '2018-07-03', '2018-07-23'),
('22134', 212312, 'dawdaw', 'dwadawd', 'dawdaw', 12, 'dadaw', 12, NULL, '2018-07-09', '2018-07-18'),
('23145', 123123, 'dwadwad', 'dwadaw', 'dawdaw', 12, 'dwada', 12, NULL, '2018-07-10', '2018-07-03'),
('11111', 111111, 'dawda', 'matamu', 'Pulveres', 32, '3.Dosis Minimum', 12000, 1200000, '2018-07-12', '2018-07-16'),
('12345', 11111, 'daaw', 'daaw', 'Pulveres', 21, '3.Dosis Minimum', 12000, NULL, '2018-07-20', '2018-07-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masteruser`
--

CREATE TABLE `masteruser` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `namalengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telepon` int(12) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `masteruser`
--

INSERT INTO `masteruser` (`username`, `password`, `namalengkap`, `email`, `telepon`, `tanggal`) VALUES
('dwada', 'dwdaawdaw', 'dwdadwa', 'dawdaddawdw', 11111111, '2018-07-12'),
('raficool', 'sepatusandal', 'dawdw', 'dwadaw', 123123, '2018-07-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tpenjualan`
--

CREATE TABLE `tpenjualan` (
  `kodeobat` varchar(100) NOT NULL,
  `namaobat` varchar(100) NOT NULL,
  `tipeobat` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL,
  `hargajual` int(11) NOT NULL,
  `jumlahbarang` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
