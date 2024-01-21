-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2023 at 02:22 AM
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
-- Table structure for table `duration`
--

CREATE TABLE `duration` (
  `id` int(11) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `duration`
--

INSERT INTO `duration` (`id`, `duration`, `created_at`) VALUES
(3, 'TEST11 asd', '0000-00-00'),
(4, 'For something', '2023-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `inspector_user`
--

CREATE TABLE `inspector_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inspector_user`
--

INSERT INTO `inspector_user` (`id`, `name`, `created_at`, `position`) VALUES
(5, 'RRRR', '0000-00-00', 'F01'),
(6, 'Test', '2023-12-01', 'rr'),
(7, 'tesr2', '2023-12-01', 'qwe'),
(8, 'Dexter Tan', '2023-12-04', 'F02');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `message` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `message`, `status`, `created_at`) VALUES
(1, 'Test123', 'Sucess', '2023-11-19'),
(2, 'Hello Mr/Mrs. Dorothy Delgado, this is Bureau of Fire Protection, we want to Inform you that we\'re in processing in creating an Inspection Order for your Request and it would take 2-3 days to fully finished it. Thank you for your patience.\r\n', 'Accepted', '2023-11-19');

-- --------------------------------------------------------

--
-- Table structure for table `purpose`
--

CREATE TABLE `purpose` (
  `id` int(11) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purpose`
--

INSERT INTO `purpose` (`id`, `purpose`, `created_at`) VALUES
(2, 'This is test qweqe', '0000-00-00'),
(3, 'wefwffwf', '2023-12-01'),
(4, 'For something', '2023-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `remarks`
--

CREATE TABLE `remarks` (
  `id` int(11) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `remarks`
--

INSERT INTO `remarks` (`id`, `remarks`, `created_at`) VALUES
(5, 'ewwwe', '2023-11-13 22:05:23'),
(6, 'For soemthing', '2023-12-03 21:51:41');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `business_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone_num` varchar(50) NOT NULL,
  `upload_permit` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `landmark` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = employee check\r\n1 = Admin check\r\n2 = Confirmed by admin',
  `remarks` varchar(100) NOT NULL,
  `msg_send` varchar(3) NOT NULL DEFAULT '0' COMMENT '0 == no message sent, 1 == message sent',
  `inspection_name` varchar(100) DEFAULT NULL,
  `purpose_info` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `proceed_info` varchar(100) DEFAULT NULL,
  `duration` varchar(100) DEFAULT NULL,
  `remarks_IO` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(2, 'Bureau of Fire Protection', 'bureau of fire protection', 'Bureau of Fire Protection', 'Bureau of Fire Protection', '../assets/uploads/services/1700513001.PNG', 'Bureau of Fire Protection', 'Bureau of Fire Protection', 'Bureau of Fire Protection', 0);

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
(1, 'BFP || Bureau of Fire Protection', 'BFP || Bureau of Fire Protection', 'www.bfp_website.com', 'BFP || Bureau of Fire Protection', 'BFP || Bureau of Fire Protection', 'BFP || Bureau of Fire Protection', 'bfp_web@gmail.com', 'bfpweb@email.com', '09656597812', '980923849012', 'BFP || Bureau of Fire Protection'),
(2, 'BFP || Bureau of Fire Protection', 'BFP || Bureau of Fire Protection', 'www.bfp.com', 'BFP || Bureau of Fire Protection', 'BFP || Bureau of Fire Protection', 'BFP || Bureau of Fire Protection', 'bfp@gmail.com', 'bfp@email.com', '09941000112', '09922341212', 'BFP || Bureau of Fire Protection');

-- --------------------------------------------------------

--
-- Table structure for table `sms_notif`
--

CREATE TABLE `sms_notif` (
  `id` int(11) NOT NULL,
  `sms_message` varchar(200) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sms_notif`
--

INSERT INTO `sms_notif` (`id`, `sms_message`, `created_at`) VALUES
(2, 'This is tesrt 2', '2023-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone_num` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_ban` varchar(10) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `role` varchar(10) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `phone_num`, `email`, `password`, `is_ban`, `created_at`, `role`, `address`) VALUES
(25, 'Admin', ' qweqwe', 'adminOG@gmail.com', '$2y$10$R3kpsjfA5SD1F2hHiJT0seh99oIgEAb0icjQca02ylVZHXWV1TIVW', '0', '2023-12-14', 'Admin', 'qweqweqwe'),
(26, 'Dexter Tan', '09656507412', 'dexter@gmail.com', '$2y$10$dQEHqdww9wz.g54njxPi/.u4lnmTXjC39dvLTopkL805ja4CwCpMC', '0', '2023-12-14', 'Client', 'Zone 8 Chuchu'),
(27, 'Prince', '+639656507412', 'princenagac12@gmail.com', '$2y$10$Op0z6ySRR1F3bika7R6dgOA7kl7K1k2M4xK78tnY.dcKZ9e39RR8m', '0', '2023-12-14', 'Employee', 'Zone');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `duration`
--
ALTER TABLE `duration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inspector_user`
--
ALTER TABLE `inspector_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purpose`
--
ALTER TABLE `purpose`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `remarks`
--
ALTER TABLE `remarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `req` (`user_id`);

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
-- Indexes for table `sms_notif`
--
ALTER TABLE `sms_notif`
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
-- AUTO_INCREMENT for table `duration`
--
ALTER TABLE `duration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inspector_user`
--
ALTER TABLE `inspector_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purpose`
--
ALTER TABLE `purpose`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `remarks`
--
ALTER TABLE `remarks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sms_notif`
--
ALTER TABLE `sms_notif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `req` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
