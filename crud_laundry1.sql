-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2022 at 10:20 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_laundry1`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `masuk` date NOT NULL,
  `keluar` date NOT NULL,
  `nama_konsumen` varchar(25) NOT NULL,
  `berat` int(11) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `diambil` date DEFAULT NULL,
  `harga_satuan` int(11) NOT NULL,
  `harga_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `masuk`, `keluar`, `nama_konsumen`, `berat`, `kategori`, `status`, `diambil`, `harga_satuan`, `harga_total`) VALUES
(10, '2022-02-06', '2022-02-09', 'ihya', 4, 'Normal', 'Sudah Diambil', '2022-02-06', 4000, 16000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `email`) VALUES
(1, 'admin', '$2y$10$8h6GulZRemi6fMLhRsppUOaGcDEiXEyHeZccMQMC4ZYMSPIrimUs.', 'Ihya', 'Ahmadihya@gmail.com'),
(3, 'ihya', 'ihya', 'Ahmad Sri Ihya', 'ihyaserang@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
