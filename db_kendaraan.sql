-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2024 at 03:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kendaraan`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_jual`
--

CREATE TABLE `data_jual` (
  `id` int(9) NOT NULL,
  `jenis` varchar(40) NOT NULL,
  `no_rangka` varchar(55) NOT NULL,
  `no_jual` varchar(44) NOT NULL,
  `tgl_jual` date NOT NULL,
  `pabrikan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_mobil`
--

CREATE TABLE `data_mobil` (
  `id` int(9) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `jenis` varchar(40) NOT NULL,
  `no_rangka` varchar(55) NOT NULL,
  `no_mesin` varchar(44) NOT NULL,
  `tgl_produksi` date NOT NULL,
  `pabrikan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_mobil`
--

INSERT INTO `data_mobil` (`id`, `nama`, `jenis`, `no_rangka`, `no_mesin`, `tgl_produksi`, `pabrikan`) VALUES
(2, 'AE86', 'suv', '77fhR22', 'Nh223FS', '2014-05-10', 'Toyota'),
(9, 'dede', 'SUV', 'cfe', 'edds211', '2024-05-02', 'honda'),
(15, 'Cefiro', 'Sedan', '4423dd', 'SSD33', '2023-12-22', 'honda'),
(90, 'CBR150', 'sport', 'sdcds', 'edds211', '2024-05-27', 'honda'),
(3431, 'civic type r', 'SUV', '2211ed', 'ffe211a', '2024-05-13', 'kawaksi'),
(545445, 'saya', 'eeuhuhu', '2211ed', 'ekjijk', '2024-05-14', 'SUZUKI');

-- --------------------------------------------------------

--
-- Table structure for table `data_motor`
--

CREATE TABLE `data_motor` (
  `id` int(9) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `jenis` varchar(40) NOT NULL,
  `no_rangka` varchar(55) NOT NULL,
  `no_mesin` varchar(44) NOT NULL,
  `tgl_produksi` date NOT NULL,
  `pabrikan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `npm` int(15) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`npm`, `nama`, `password`) VALUES
(11, 'dede', '12de'),
(444, 'saya', 'masa'),
(567, 'civic', 'okegas'),
(2113, 'dsvdsc', '123456'),
(56711, 'civic', 'masa'),
(22670152, 'fadhil', '07042004');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_jual`
--
ALTER TABLE `data_jual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_mobil`
--
ALTER TABLE `data_mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_motor`
--
ALTER TABLE `data_motor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`npm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_jual`
--
ALTER TABLE `data_jual`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_mobil`
--
ALTER TABLE `data_mobil`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=545446;

--
-- AUTO_INCREMENT for table `data_motor`
--
ALTER TABLE `data_motor`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `npm` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22670153;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
