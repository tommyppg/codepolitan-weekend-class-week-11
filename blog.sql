-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2018 at 01:58 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--
CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `blog`;

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(100) NOT NULL,
  `isi_artikel` text NOT NULL,
  `author_artikel` varchar(50) NOT NULL,
  `tanggal_artikel` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `isi_artikel`, `author_artikel`, `tanggal_artikel`, `id_kategori`) VALUES
(1, 'Library JavaScript Menarik Tahun 2018', 'Dengan naik daun Bahasa Pemrograman JavaScript tentu para Developer akan menggali apakah yang membuat JavaScript tersebut menjadi Bahasa Pemrograman terpopuler, yang telah dilansir oleh StackOverflow dalam Surveynya tahun 2018. Tidak terlepas dari itu semua, Framework dan Library JavaScript merupakan alasan yang membuat JavaScript menjadi hebat seperti saat ini. Namun pada artikel kali ini akan membahasa Library JavaScript yang menarik untuk dipelajari di tahun 2018.', 'Codepolitan', '2018-10-28 12:53:31', 2),
(2, '100 Fungsi Paling Populer di PHP', 'PHP memiliki ribuan fungsi bawaan yang tentu tidak semuanya kita gunakan dalam proses pembuatan aplikasi. Diantara ribuan fungsi tersebut, ada 100 fungsi bawaan PHP yang paling sering oleh PHP Developer, berikut ini daftar lengkapnya:', 'Codepolitan', '2018-10-28 12:54:21', 1),
(3, 'Membangun Desktop App dengan 5 Framework Javascript', 'Tidak bisa kita pungkiri bahwa Javascript memang bahasa terbaik saat ini, yang telah dibuktikan dengan keunggulan pada framework dan library-nya. Javascript saat ini bukan hanya fokus pada website tetapi juga dapat diterapkan pada platform mobile dan desktop. Dilansir dari website brainhub.ue yang merupakan website yang bertujuan membangun Produk digital dalam pengembangan perangkat lunak Javascript bahwa terdapat 5 Framework Javascript terbaik untuk Aplikasi Desktop.', 'Codepolitan', '2018-10-28 12:54:44', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'PHP'),
(2, 'Javascript'),
(3, 'HTML'),
(4, 'CSS');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_depan` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `RELASI_KATEGORI` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `RELASI_KATEGORI` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
