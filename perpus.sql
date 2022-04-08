-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2022 at 05:38 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `koleksi`
--

CREATE TABLE `koleksi` (
  `id_koleksi` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `koleksi`
--

INSERT INTO `koleksi` (`id_koleksi`, `nama`, `penerbit`, `penulis`, `kategori`, `cover`, `created_at`, `updated_at`) VALUES
(1, 'Go-Jek', 'Tiga Serangkai', 'Anis Buswedan', 'Buku Motivasi', 'gojek.jpg', '2022-04-01 15:08:05', '2022-04-01 15:18:16'),
(2, 'Pembunuhan di Orient Expres', 'Gramedia Pustaka Utamaa', 'Agatha Christie', 'Novel', 'foto.jpeg', '2022-04-01 15:21:31', '2022-04-04 13:08:21'),
(4, 'Romeo and Juliet (William Shakespeare)', 'Gramedia', 'Romeo and Juliet (William Shakespeare)', '', 'a.jpg', '2022-04-04 10:05:33', '2022-04-04 10:05:33'),
(8, 'Perempuan yang Menangis Kepada Bulan Hitam', 'Tiga Serangkai', 'Dian Purnomo', '', 'c.jpg', '2022-04-04 13:16:07', '2022-04-04 13:16:07'),
(9, 'Skidipapap Sawadikap', 'Boyolali Book', 'Lanjar Dwi Saputro', '', '1649388970-tab.jpg', '2022-04-08 10:36:10', '2022-04-08 10:36:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `cookie` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `alamat`, `telepon`, `avatar`, `cookie`, `created_at`, `updated_at`) VALUES
(1, 'Aubemayang', 'aubemayang@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Solo, Surakarta', '085878888999', 'lan.jpg', 'sZ3go76L4tshPyaXo8FjuKmJawO5u7TpA0rR2186dSBWj0BIfndNtAYMfEYOVl9x', '2022-04-01 13:10:01', '2022-04-06 13:38:52'),
(2, 'Badang', 'badang@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Surakarta', '087676567543', 'mega.jpg', '', '2022-04-01 13:10:01', '2022-04-05 14:37:26'),
(17, 'Lanjar Dwi Saputro', 'lanjar17@gmail.com', 'd43aea9952f5a1ca76b088067745af8d', 'Banjarjo 18/04, Gedangan, Cepogo, Boyolali', '085747768629', 'l.png', 'MLeFQQ4KUzmTn5J9m00WUdhtEWqB8DcrnLoiv2vZoPYj2zfdRfJFArSgMNwK14ec', '2022-04-05 11:02:41', '2022-04-05 14:37:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `koleksi`
--
ALTER TABLE `koleksi`
  ADD PRIMARY KEY (`id_koleksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `koleksi`
--
ALTER TABLE `koleksi`
  MODIFY `id_koleksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
