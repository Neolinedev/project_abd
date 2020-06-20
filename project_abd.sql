-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2020 at 02:54 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_abd`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `kode` int(1) NOT NULL,
  `judul` varchar(256) NOT NULL,
  `penulis` varchar(256) NOT NULL,
  `penerbit` varchar(256) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `tahun` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`kode`, `judul`, `penulis`, `penerbit`, `kategori`, `gambar`, `tahun`) VALUES
(7, 'Laskar Pelangi', 'Andrea Hirata', 'PT.Erlangga', 'Novel', 'laskarpelangi.jpg', 2005),
(8, 'Ayat-Ayat Cinta', 'Habiburrahman El Shiraj', 'Al Hikmah', 'Novel', 'aac.jpg', 2008),
(9, 'Cinta Brontosaurus', 'Raditya Dika', 'Gagas Media', 'Novel', 'cintabronto.jpg', 2006),
(10, 'Kambing Jantan', 'Raditya Dika', 'Gagas Media', 'Novel', 'kambing.jpg', 2005),
(11, 'Pemrograman Android dan Database', 'Abdul Kadir', 'Elex Media Komputindo', 'Pelajaran', 'android.jpg', 2018),
(12, 'Logika Pemrograman Python', 'Abdul Kadir', 'Elex Media Komputindo', 'Pelajaran', 'logika.jpg', 2019),
(13, 'Negeri 5 Menara', 'Ahmad Fuadi', 'Gramedia', 'Novel', 'c++.jpg', 2009),
(14, 'Logika Pemrograman C++', 'Abdul Kadir', 'Elex Media Komputindo', 'Pelajaran', 'c++.jpg', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `kode` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
