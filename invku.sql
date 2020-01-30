-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2020 at 07:49 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invku`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_jenis`
--

CREATE TABLE `daftar_jenis` (
  `id_jenis` int(5) NOT NULL,
  `jenis` varchar(150) NOT NULL,
  `ket_jenis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_jenis`
--

INSERT INTO `daftar_jenis` (`id_jenis`, `jenis`, `ket_jenis`) VALUES
(1, 'Mouse', 'alat elektronik yang membantu user dalam melakukan kegiatan sebagi pointer ,dan alat alternatif ketika touch pad laptop rusak'),
(2, 'Monitor', 'Layar Laptop atau Pc yang berfungsi untuk menampilkan segala aktifitas '),
(3, 'Keyboard', 'membantu user untu menginputkan berbagai jenis , baik sebuah perintah , teks , number tau bahkann simbol'),
(4, 'Lemari', 'Jenis barnag yang berfungsi untuk menempatkan baik beupa pakaian, berkas atau bahnkan alat-alat lain'),
(5, 'Printer', 'Mesin Cetak Document atau foto');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_kondisi`
--

CREATE TABLE `daftar_kondisi` (
  `id_kondisi` int(5) NOT NULL,
  `kondisi` varchar(20) NOT NULL,
  `ket_kondisi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_kondisi`
--

INSERT INTO `daftar_kondisi` (`id_kondisi`, `kondisi`, `ket_kondisi`) VALUES
(1, 'Baik', 'Barang Dalam Kondisi Baik'),
(2, 'Rusak RIngan', 'Ada Cacat Fisik pada Barang'),
(3, 'Rusak Berat', 'Barang Harus segera di ganti');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_ruang`
--

CREATE TABLE `daftar_ruang` (
  `id_ruang` int(5) NOT NULL,
  `nama_ruangan` varchar(50) NOT NULL,
  `fungsi_ruangan` varchar(40) NOT NULL,
  `luas` varchar(25) NOT NULL,
  `gbr_ruangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_ruang`
--

INSERT INTO `daftar_ruang` (`id_ruang`, `nama_ruangan`, `fungsi_ruangan`, `luas`, `gbr_ruangan`) VALUES
(1, 'LAB I', 'RUANG PRAKTIK KOMPUTER', '10 x  8 m persegi', 'xx.jpg'),
(2, 'LAB II', 'RUANG PRAKTIK KOMPUTER', '10 x 8 M persegi', ''),
(3, 'KEPALA LAB', 'RUANG KEPALA LABORATORIUM', '8 x 8 m Persegi', ''),
(4, 'GUDANG LAB', 'GUDANG LABORATORIUM', '8 x 7 m persegi', '');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_satuan`
--

CREATE TABLE `daftar_satuan` (
  `id_satuan` int(5) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `ket_satuan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_satuan`
--

INSERT INTO `daftar_satuan` (`id_satuan`, `satuan`, `ket_satuan`) VALUES
(1, 'Unit', ''),
(2, 'Buah', ''),
(3, 'Pasang', ''),
(4, 'Lembar', ''),
(5, 'Batang', ''),
(6, 'Bungkus', ''),
(7, 'Potong', ''),
(8, 'Tablet', ''),
(9, 'Ekor', ''),
(10, 'Rim', ''),
(11, 'Botol', ''),
(12, 'Butir', ''),
(13, 'Roll', ''),
(14, 'Kilogram', ''),
(15, 'Meter', 'Meter Persegi');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_sumber`
--

CREATE TABLE `daftar_sumber` (
  `id_sumber` int(5) NOT NULL,
  `sumber` varchar(100) NOT NULL,
  `ket_sumber` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_sumber`
--

INSERT INTO `daftar_sumber` (`id_sumber`, `sumber`, `ket_sumber`) VALUES
(1, 'Yayasan', 'Untuk Kegiatan Pelatihan Jaringan '),
(2, 'PP-PTS', 'Pembelian Alat Praktik '),
(3, 'Hibah', 'Alat-alat Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_tahun`
--

CREATE TABLE `daftar_tahun` (
  `id_tahun` int(5) NOT NULL,
  `tahun` varchar(6) NOT NULL,
  `ket_tahun` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_tahun`
--

INSERT INTO `daftar_tahun` (`id_tahun`, `tahun`, `ket_tahun`) VALUES
(1, '2015', ''),
(2, '2017', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_inventaris`
--

CREATE TABLE `data_inventaris` (
  `id_inv` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_inv` varchar(15) NOT NULL,
  `id_ruangan` int(5) NOT NULL,
  `id_sumber` int(5) NOT NULL,
  `id_tahun` int(5) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `merek` varchar(100) NOT NULL,
  `seri` varchar(100) NOT NULL,
  `id_jenis` int(5) NOT NULL,
  `nilai_wajar` int(10) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_inventaris`
--

INSERT INTO `data_inventaris` (`id_inv`, `tanggal`, `kode_inv`, `id_ruangan`, `id_sumber`, `id_tahun`, `nama_barang`, `merek`, `seri`, `id_jenis`, `nilai_wajar`, `gambar`) VALUES
(1, '2020-01-01', 'A001', 1, 1, 1, 'Printer', 'Cannon', 'ip2007', 5, 8, ''),
(2, '2020-01-02', 'A001', 2, 2, 2, 'Mouse', 'Acer', 'M055', 1, 7, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_jenis`
--
ALTER TABLE `daftar_jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `daftar_kondisi`
--
ALTER TABLE `daftar_kondisi`
  ADD PRIMARY KEY (`id_kondisi`);

--
-- Indexes for table `daftar_ruang`
--
ALTER TABLE `daftar_ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indexes for table `daftar_satuan`
--
ALTER TABLE `daftar_satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indexes for table `daftar_sumber`
--
ALTER TABLE `daftar_sumber`
  ADD PRIMARY KEY (`id_sumber`);

--
-- Indexes for table `daftar_tahun`
--
ALTER TABLE `daftar_tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indexes for table `data_inventaris`
--
ALTER TABLE `data_inventaris`
  ADD PRIMARY KEY (`id_inv`),
  ADD UNIQUE KEY `id_ruangan` (`id_ruangan`),
  ADD UNIQUE KEY `id_sumber` (`id_sumber`,`id_tahun`,`id_jenis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_jenis`
--
ALTER TABLE `daftar_jenis`
  MODIFY `id_jenis` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `daftar_kondisi`
--
ALTER TABLE `daftar_kondisi`
  MODIFY `id_kondisi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `daftar_ruang`
--
ALTER TABLE `daftar_ruang`
  MODIFY `id_ruang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `daftar_satuan`
--
ALTER TABLE `daftar_satuan`
  MODIFY `id_satuan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `daftar_sumber`
--
ALTER TABLE `daftar_sumber`
  MODIFY `id_sumber` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `daftar_tahun`
--
ALTER TABLE `daftar_tahun`
  MODIFY `id_tahun` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_inventaris`
--
ALTER TABLE `data_inventaris`
  MODIFY `id_inv` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
