-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2024 at 05:32 PM
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
-- Database: `bfp`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangay`
--

CREATE TABLE `barangay` (
  `id` int(11) NOT NULL,
  `barangay_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barangay`
--

INSERT INTO `barangay` (`id`, `barangay_name`) VALUES
(2, '10th'),
(3, '11th'),
(4, '12th'),
(5, '12th extension'),
(6, '13th'),
(7, '14th'),
(8, '15th'),
(9, '15th Street Extension'),
(10, '16th'),
(11, '17th'),
(12, '18th'),
(13, '19th'),
(14, '1st'),
(15, '20th'),
(16, '21st'),
(17, '22nd'),
(18, '23rd'),
(19, '24th St.'),
(20, '26th'),
(21, '27th'),
(22, '28th'),
(23, '29th'),
(24, '2nd'),
(25, '30th'),
(26, '31st'),
(27, '32nd'),
(28, '33rd'),
(29, '3rd St'),
(30, '3rd Street'),
(31, '4th'),
(32, '5th'),
(33, '6th'),
(34, '7th Street'),
(35, '8th'),
(36, '9th'),
(37, 'A. Neri'),
(38, 'A.W.S. Evangelista'),
(39, 'Abbey Road'),
(40, 'Abel'),
(41, 'Abellanosa'),
(42, 'Abraham'),
(43, 'Acacia'),
(44, 'Acacia Street'),
(45, 'Adam'),
(46, 'Agoho'),
(47, 'Agudo'),
(48, 'Aguinaldo Street'),
(49, 'Akut'),
(50, 'Alder'),
(51, 'Alumni St.'),
(52, 'Amber street'),
(53, 'Amogis'),
(54, 'Amos'),
(55, 'Amparo Velez'),
(56, 'Amythest Road'),
(57, 'Anastacio Neri'),
(58, 'Andres Fernandez'),
(59, 'Andrew'),
(60, 'Anislag'),
(61, 'Anthurium Street'),
(62, 'Apitong'),
(63, 'Apitong Street'),
(64, 'Apolinar Ramiro'),
(65, 'Aquarius'),
(66, 'Aries'),
(67, 'Aspen'),
(68, 'Automation St.'),
(69, 'Azucena'),
(70, 'Baconga'),
(71, 'Baconga Road'),
(72, 'Bajas Rd'),
(73, 'Balite'),
(74, 'Balite Drive'),
(75, 'Banaba'),
(76, 'Banaba'),
(77, 'Bangkal'),
(78, 'Bartolome'),
(79, 'Beacon Ave.'),
(80, 'Belen Jongko'),
(81, 'Belladonna St.'),
(82, 'Biasong-Tinib Road'),
(83, 'Birch Street'),
(84, 'Block 1 Sambaan Village'),
(85, 'Blue Heron'),
(86, 'Blue Marlin'),
(87, 'Bluebird'),
(88, 'Bluebird St'),
(89, 'S2');

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
(5, 'Finall Testt', '2024-02-04'),
(6, 'After Completion', '2024-02-13');

-- --------------------------------------------------------

--
-- Table structure for table `inspector_user`
--

CREATE TABLE `inspector_user` (
  `id` int(11) NOT NULL,
  `inspector_name` varchar(100) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `position` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inspector_user`
--

INSERT INTO `inspector_user` (`id`, `inspector_name`, `created_at`, `position`) VALUES
(13, 'MrInspector', '2024-01-15', 'SF02'),
(16, 'Willie M. Tan Jr.', '2024-02-13', 'SINSP');

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
(8, 'To Conduct Fire Safety Inspection of saaid Establishment & implement the prevision of RA.9514', '2024-02-13');

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
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = employee check\r\n1 = Admin check\r\n2 = Confirmed by admin\r\n3 = Denied by Admin\r\n4= Client Re-input\r\n\r\n',
  `remarks` varchar(100) NOT NULL,
  `msg_send` varchar(3) NOT NULL DEFAULT '0' COMMENT '0 == no message sent, 1 == message sent\r\n3 = message sent while the request is denied\r\n',
  `inspection_name` varchar(100) DEFAULT NULL,
  `purpose_info` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `proceed_info` varchar(100) DEFAULT NULL,
  `duration` varchar(100) DEFAULT NULL,
  `remarks_IO` varchar(500) DEFAULT NULL,
  `datetime_local` datetime DEFAULT NULL,
  `inspector_sched` varchar(5) NOT NULL DEFAULT '0' COMMENT '0= not scheduled , 1 = scheduled',
  `denied_remarks_IO` varchar(10) NOT NULL COMMENT '0 = not check, 1 = checked',
  `denied_owner_name` varchar(10) NOT NULL COMMENT '0 = not check, 1 = checked',
  `denied_business_name` varchar(10) NOT NULL COMMENT '0 = not check, 1 = checked',
  `denied_address` varchar(10) NOT NULL COMMENT '0 = not check, 1 = checked',
  `denied_phone_num` varchar(10) NOT NULL COMMENT '0 = not check, 1 = checked',
  `denied_upload_permit` varchar(10) NOT NULL COMMENT '0 = not check, 1 = checked',
  `denied_purpose_info` varchar(10) NOT NULL COMMENT '0 = not check, 1 = checked',
  `denied_landmark` varchar(10) NOT NULL COMMENT '0 = not check, 1 = checked',
  `denied_barangay` varchar(10) NOT NULL COMMENT '0 = not check, 1 = checked',
  `denied_remarks` varchar(10) NOT NULL COMMENT '0 = not check, 1 = checked',
  `denied_inspection_name` varchar(10) NOT NULL COMMENT '0 = not check, 1 = checked',
  `denied_proceed_info` varchar(10) NOT NULL COMMENT '0 = not check, 1 = checked',
  `denied_duration` varchar(10) NOT NULL COMMENT '0 = not check, 1 = checked',
  `updated_status` varchar(10) NOT NULL DEFAULT '0' COMMENT '1= The Denied Is Updated by the User',
  `reschedule_update` varchar(10) NOT NULL DEFAULT '0',
  `admin_confirm` varchar(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `user_id`, `owner_name`, `business_name`, `address`, `phone_num`, `upload_permit`, `date`, `landmark`, `barangay`, `status`, `remarks`, `msg_send`, `inspection_name`, `purpose_info`, `created_at`, `proceed_info`, `duration`, `remarks_IO`, `datetime_local`, `inspector_sched`, `denied_remarks_IO`, `denied_owner_name`, `denied_business_name`, `denied_address`, `denied_phone_num`, `denied_upload_permit`, `denied_purpose_info`, `denied_landmark`, `denied_barangay`, `denied_remarks`, `denied_inspection_name`, `denied_proceed_info`, `denied_duration`, `updated_status`, `reschedule_update`, `admin_confirm`) VALUES
(67, 53, 'Prince Nagac', 'wefwef', 'wef', '+639656507412', '../assets/uploads/form_request/1706740606.jpg', '2024-02-01', 'wfe', '13th', 2, 'wef', '1', 'MrInspector', 'For something', '2024-02-01 06:36:46', 'bkknjj', 'For something', 'jhjbjv', '2024-02-02 05:50:00', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '1'),
(70, 53, 'Prince Nagac', 'TEST', 'TEST', '+639656507412', '../assets/uploads/form_request/1706967805.jpg', '2024-02-03', 'TEST', '12th extension', 2, ' TEST', '1', NULL, NULL, '2024-02-03 20:45:48', NULL, NULL, NULL, NULL, '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0'),
(71, 59, 'Fiona Vivien', 'fiona laundry shop', 'nazareth 12th street', '+639262527151', '../assets/uploads/form_request/1707823514.png', '2024-02-13', 'blue gate', '12th', 2, 'none', '1', 'TEST12', 'To Conduct Fire Safety Inspection of saaid Establishment & implement the prevision of RA.9514 & othe', '2024-02-13 19:25:14', 'FIONA LAUNDRY SHOP', 'After Completion', 'COOPERATE WITH THE OWNER', '2024-02-15 09:28:00', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '1'),
(74, 61, 'dexter tan', 'Tan\'s eatery', 'Nazareth 14street block 5 lot 17', '639539180067', '../assets/uploads/form_request/1707841013.png', '2024-02-14', 'Red gate near pharmacy', '14th', 2, 'none', '1', 'Willie M. Tan Jr.', 'To Conduct Fire Safety Inspection of saaid Establishment & implement the prevision of RA.9514', '2024-02-14 00:16:53', 'Business Name: Tan\'s eatery|Owner: dexter tan', 'After Completion', 'Cooperate with the owner', '2024-02-15 10:19:00', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '1'),
(75, 61, 'dexter tan', 'asd', 'asd', '639539180067', '../assets/uploads/form_request/1707841467.png', '2024-02-14', 'asd', '13th', 2, 'asd', '1', 'MrInspector', 'To Conduct Fire Safety Inspection of saaid Establishment & implement the prevision of RA.9514', '2024-02-14 00:24:27', 'Business Name: asd|Owner: dexter tan', 'After Completion', 'asd', '2024-02-15 03:27:00', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '1'),
(76, 61, 'dexter tan', 'asd', 'asd', '639539180067', '../assets/uploads/form_request/1707841626.png', '2024-02-14', 'asd', '13th', 2, 'asd', '1', 'MrInspector', 'To Conduct Fire Safety Inspection of saaid Establishment & implement the prevision of RA.9514', '2024-02-14 00:27:06', 'Business Name: asd|Owner: dexter tan', 'Finall Testt', 'asd', '2024-02-15 03:30:00', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '1'),
(77, 61, 'dexter tan', 'asd', 'asd', '639539180067', '../assets/uploads/form_request/1707841807.png', '2024-02-14', 'asd', '12th extension', 2, 'asd', '1', 'Willie M. Tan Jr.', 'To Conduct Fire Safety Inspection of saaid Establishment & implement the prevision of RA.9514', '2024-02-14 00:30:07', 'Business Name: asd|Owner: dexter tan', 'After Completion', 'asd', '2024-02-15 02:33:00', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '1');

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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` varchar(10) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `logged_in` datetime DEFAULT NULL,
  `logged_out` datetime DEFAULT NULL,
  `new_user` varchar(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `phone_num`, `email`, `password`, `is_ban`, `created_at`, `role`, `address`, `logged_in`, `logged_out`, `new_user`) VALUES
(25, 'Admin', 'qweqwe', 'adminOG@gmail.com', '$2y$10$cxZEbZ5VWJFc6DPKsc4qb.LjVuWKkYg6Dy4iaiYi1ld..eXMTiVD.', '0', '2023-12-13 16:00:00', 'Admin', 'qweqweqwe', '2024-02-13 23:08:18', '2024-02-13 23:55:47', '0'),
(27, 'John Doe', '+639656507412', 'JohnDoe@gmail.com', '$2y$10$ycDAmZ5ITvilIDEQn3DsAeZW8lIhjGRES9u2KgRq3Lqnk6yLzGk8G', '0', '2023-12-13 16:00:00', 'Employee', 'Zone', '2024-02-13 23:35:50', NULL, '0'),
(42, 'MrInspector', '+631231231212', 'mrinspector@gmail.com', '$2y$10$FWKOP3GxLhPmqlFf2hi6aO4Boguo9EQIlwXiYROcpnfMB9NcLZQJO', '0', '2024-01-14 21:53:59', 'Inspector', 'inspectorplace', '2024-02-01 21:52:52', NULL, '0'),
(43, 'PP', '+639325112312', 'pp@gmail.com', '$2y$10$Q5IJO/e86WbCC/1T3V9.ceiyrhyq4lgJwaraStfgUJPYnpWxUEjiq', '1', '2024-01-20 04:39:05', 'Client', 'pp', '2024-01-21 04:23:41', NULL, '0'),
(46, 'qweqwe122232', '+63123', 'qwewq123@gmail.com', '$2y$10$uP3WnDbf0kicXLRE7cR83uN0062YvPv/ZJ2h.X46D.hjZhFEP0At2', '0', '2024-01-28 19:54:17', 'Client', 'qweqwewq', '2024-02-01 01:25:55', NULL, '0'),
(53, 'Prince Nagac', '+639656507412', 'princenagac123@gmail.com', '$2y$10$bVyOWYIFXil4gaOTFsKqG.od0ZxlFai5I2pn/6WyYGIyGBIW.PhHK', '0', '2024-01-31 19:28:32', 'Client', 'Zone 2 Kauswagan CDO', '2024-02-04 08:39:43', NULL, '1'),
(55, 'eeqw', '+6312232123', 'qwe1223@gmail.com', '$2y$10$olmN.Eb5qnOksWv3ZjUu1eNylkTGDcBYHp2lfiQImExD4Bop3GMLm', '0', '2024-02-03 13:14:36', 'Client', 'qweqwe', NULL, NULL, '1'),
(58, 'Willie M. Tan Jr.', ' +6395604707106', 'WillieTanbfp@gmail.com', '$2y$10$1gh6aX1II0DENPkIxEtPUOwDaTylNDlBIgmtT6siSK30m7IDEk1Gy', '0', '2024-02-13 11:19:55', 'Inspector', 'qwe123', '2024-02-13 23:55:55', NULL, '0'),
(59, 'Fiona Vivien', '+639262527151', 'fiona@gmail.com', '$2y$10$vlDnL.gQIZdoQM/c62mVC.HrHxdtZUr6BhbmXK2r8dmIP9Y0.0A.S', '0', '2024-02-13 11:24:01', 'Client', 'barra opol', '2024-02-13 23:34:18', NULL, '1'),
(60, 'Pechie lazano', ' +6395604707106', 'Pechiebfp@gmail.com', '$2y$10$.jLEYBCSwMKIwxAlD7/2oOXn7/nJnhM82cLJajxIYK8.zFabW4HmG', '0', '2024-02-13 15:09:14', 'Inspector', 'Barra Opol Misamis Oriental Block 5 Lot 18 jasper ', NULL, NULL, '0'),
(61, 'dexter tan', '639539180067', 'dextertan@gmail.com', '$2y$10$QI1M425tUKbkfpB0NKsGcO.PYzSgxf1N2Yh5eCb.fLURGaOinh0TW', '0', '2024-02-13 16:16:07', 'Client', 'barra opol', '2024-02-14 00:16:13', NULL, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangay`
--
ALTER TABLE `barangay`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `barangay`
--
ALTER TABLE `barangay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `duration`
--
ALTER TABLE `duration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `inspector_user`
--
ALTER TABLE `inspector_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purpose`
--
ALTER TABLE `purpose`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `remarks`
--
ALTER TABLE `remarks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

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
