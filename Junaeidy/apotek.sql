-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2023 at 06:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(64) NOT NULL,
  `no_telepon` varchar(13) NOT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `no_telepon`, `alamat`) VALUES
(1, 'junaeidy', '022115546621', 'medan'),
(2, 'pazrin', '081375499989', 'medan'),
(3, 'Jihan', '054645876987', 'Johor'),
(4, 'Ella', '081929328765', 'Karya Wisata'),
(5, 'Muhammad', '0987778299391', 'Pinang Baris'),
(6, 'Rizky', '082777123485', 'Teladan'),
(7, 'Setiawan', '092883812345', 'Sunggal'),
(8, 'Khairunissa', '0299877419248', 'Polsek'),
(9, 'Rara', '082999213382', 'Pancing'),
(10, 'Irma', '098882773124', 'Unimed'),
(11, 'Siti', '0812344123865', 'Helvetia'),
(12, 'Erna', '082312494217', 'Seroja');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_pelanggan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `jumlah_produk` varchar(64) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_pelanggan`, `id_produk`, `id_transaksi`, `jumlah_produk`, `total_harga`) VALUES
(1, 1, 1, '3', 54000),
(2, 2, 2, '3', 45000),
(3, 4, 3, '2', 48000),
(5, 6, 7, '3', 42000),
(7, 8, 4, '5', 345000),
(9, 10, 9, '3', 12000),
(11, 12, 8, '4', 466000),
(4, 3, 10, '7', 308000),
(6, 5, 11, '1', 14000),
(8, 7, 6, '1', 11800),
(10, 9, 12, '10', 80000),
(12, 11, 5, '2', 462000);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` char(64) NOT NULL,
  `stok` varchar(256) NOT NULL,
  `harga_produk` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `stok`, `harga_produk`) VALUES
(1, 'Happitos', '13', 18000),
(2, 'ANBATA', '49', 15000),
(3, 'ACT (Artesunate tablet 50 mg + Amodiaquine anhydrida tablet 200', '231', 44000),
(4, 'Furosemid tablet 40 mg', '423', 24000),
(5, 'Kalium klorda 0,30 g', '201', 14000),
(6, 'Glukosa Anhidrat 2,7 g', '412', 14000),
(7, 'Glibenklamida tablet 5 mg', '77', 11800),
(8, 'Gemfibrozil tablet 600 mg', '32', 69000),
(9, 'Glukosa larutan infus 10 % steril', '228', 8000),
(10, 'Hidrokortison krim 2,5 %', '987', 4000),
(11, 'Hioscine N Butilbromide tablet 10 mg', '26', 231000),
(12, 'Isoniazid tablet 300 mg', '65', 116500);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pelanggan`, `tgl_transaksi`) VALUES
(1, 1, '2023-08-02'),
(2, 2, '2023-08-02'),
(3, 3, '2023-08-04'),
(4, 7, '2023-08-01'),
(5, 12, '2023-08-04'),
(6, 8, '2023-08-01'),
(7, 5, '2023-08-03'),
(8, 11, '2023-08-04'),
(9, 9, '2023-08-03'),
(10, 4, '2023-08-05'),
(11, 6, '2023-08-05'),
(12, 10, '2023-08-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD KEY `fk_pelanggan` (`id_pelanggan`),
  ADD KEY `fk_produk` (`id_produk`),
  ADD KEY `fk_transaksi` (`id_transaksi`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `fk_pelanggann` (`id_pelanggan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `fk_pelanggan` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`),
  ADD CONSTRAINT `fk_produk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `fk_transaksi` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_pelanggann` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
