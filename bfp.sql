-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2023 at 12:15 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bfp`
--

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) UNSIGNED NOT NULL,
  `serv_name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `small_desc` varchar(100) DEFAULT NULL,
  `long_desc` mediumtext DEFAULT NULL,
  `service_img` varchar(100) DEFAULT NULL,
  `meta_title` varchar(100) DEFAULT NULL,
  `meta_description` varchar(100) DEFAULT NULL,
  `meta_keyboard` varchar(100) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=visible, 1=hidden'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `serv_name`, `slug`, `small_desc`, `long_desc`, `service_img`, `meta_title`, `meta_description`, `meta_keyboard`, `status`) VALUES
(1, 'BFP || Bureau of Fire Protection', 'bfp || bureau of fire protection', 'BFP || Bureau of Fire Protection', 'BFP || Bureau of Fire Protection', '../assets/uploads/services/1698680793.png', 'BFP || Bureau of Fire Protection', 'BFP || Bureau of Fire Protection', 'BFP || Bureau of Fire Protection', 0);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `web_name` varchar(100) DEFAULT NULL,
  `domain` varchar(100) DEFAULT NULL,
  `sdescription` text DEFAULT NULL,
  `mdescription` varchar(100) DEFAULT NULL,
  `mkeyword` varchar(100) DEFAULT NULL,
  `email1` varchar(100) DEFAULT NULL,
  `email2` varchar(100) DEFAULT NULL,
  `phone1` varchar(100) DEFAULT NULL,
  `phone2` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `web_name`, `domain`, `sdescription`, `mdescription`, `mkeyword`, `email1`, `email2`, `phone1`, `phone2`, `address`) VALUES
(1, 'BFP || Bureau of Fire Protection', 'BFP || Bureau of Fire Protection', 'www.bfp.com', 'BFP || Bureau of Fire Protection', 'BFP || Bureau of Fire Protection', 'BFP || Bureau of Fire Protection', 'bfp@gmail.com', 'bfp@email.com', '09941000112', '09922341212', 'BFP || Bureau of Fire Protection'),
(2, 'BFP || Bureau of Fire Protection', 'BFP || Bureau of Fire Protection', 'www.bfp.com', 'BFP || Bureau of Fire Protection', 'BFP || Bureau of Fire Protection', 'BFP || Bureau of Fire Protection', 'bfp@gmail.com', 'bfp@email.com', '09941000112', '09922341212', 'BFP || Bureau of Fire Protection');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone_num` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `is_ban` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` varchar(10) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `phone_num`, `email`, `password`, `is_ban`, `created_at`, `role`, `address`) VALUES
(1, 'admin', '09766535323', 'admin@gmail.com', 'admin', '0', '2023-10-30 10:22:41', 'Admin', 'admin'),
(2, 'Prince', ' 09656507412', 'princenagac12@gmail.com', 'howdreyou221', '0', '2023-10-30 10:33:17', 'Admin', 'Zone 2, Kauswagan'),
(3, 'test', '09942353221', 'test@gmail.com', 'test', '0', '2023-10-30 22:02:04', 'Client', 'test'),
(4, 'testemployee', ' 09987778799', 'testemployee@gmail.com', 'testemployee', '0', '2023-10-30 22:36:34', 'Employee', 'testemployee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
