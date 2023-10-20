-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 20, 2023 at 12:06 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukom-07`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int NOT NULL,
  `id_user` int DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `write` varchar(255) DEFAULT NULL,
  `description` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `id_user`, `title`, `write`, `description`, `created_at`, `updated_at`) VALUES
(28, 8, 'Rawon', 'fikrizulfikarb', 'Rawon adalah makan khas dari Kota Surabaya yang mirip dengan sup daging namun memiliki kuah hitam pekat. Meskipun kuahnya tidak seperti sup pada umumnya, rawon memiliki cita rasa yang khas dan selalu dirindukan oleh penikmat masakan Jawa timuran.\r\n\r\nWarna hitam pada rawon disebabkan oleh pemakaian kluwek pada kuahnya. Buah kluwek adalah buah berwarna hitam yang memberikan warna serta citarasa yang unik pada masakan.\r\n\r\nRawon disajikan bersama potongan daging sapi, rebusan kecambah dan telur asin serta kerupuk udang. Jangan lupa tambahkan perasan jeruk nipis dan sambal untuk menambah kesegaran saat menyantap hidangan yang satu ini. Tertarik membuatnya? Donwload saja di e-book Gramedia Digital agar Grameds terampil memasak masakan nusantara yang nikmat rasanya.', '2022-01-09 09:55:36', '2022-01-09 09:55:36');

-- --------------------------------------------------------

--
-- Table structure for table `coment`
--

CREATE TABLE `coment` (
  `id` int NOT NULL,
  `isi` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `coment`
--

INSERT INTO `coment` (`id`, `isi`, `nama`, `created_at`, `updated_at`) VALUES
(18, 'req makanan khas padang dong', 'mega', '2021-12-12 02:14:30', '2021-12-12 02:14:30'),
(19, 'makanan khas betawi dong', 'elly', '2021-12-12 06:37:03', '2021-12-12 06:37:03'),
(22, 'no komen', 'tiaraaa', '2022-01-09 09:56:05', '2022-01-09 09:56:05');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `nama`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'fikrizulfikarb', 'fikri.zb10@gmail.com', 'fikri', '$2y$10$/mO1ld9hH0o.X7/6iowzLu3PGyI9BoB8Wr.RCCWVYF3iPNIvruAtK', NULL, '2021-12-11 22:09:30', '2021-12-11 22:09:30'),
(10, 'mutiara', 'mutiara@gmail.com', 'mutia', '$2y$10$JmjgqxIp71524gtVhkfNTu7zcc7MK3Rp3ThsTkg9FJghWZS.r7U9u', NULL, '2022-01-09 09:57:22', '2022-01-09 09:57:22');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id` int NOT NULL,
  `id_user` int DEFAULT NULL,
  `no_handphone` varchar(15) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id`, `id_user`, `no_handphone`, `created_at`, `updated_at`) VALUES
(6, 8, '081290034449', '2021-12-11 22:09:30', '2021-12-11 22:09:30'),
(8, 10, '081290034449', '2022-01-09 09:57:22', '2022-01-09 09:57:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coment`
--
ALTER TABLE `coment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `coment`
--
ALTER TABLE `coment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
