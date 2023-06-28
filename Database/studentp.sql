-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2023 at 09:00 AM
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
-- Database: `studentp`
--

-- --------------------------------------------------------

--
-- Table structure for table `extable`
--

CREATE TABLE `extable` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `extable`
--

INSERT INTO `extable` (`id`, `p_id`, `category`, `amount`, `time`) VALUES
(1, 5, 'wifi', '500', '2023-06-27 03:52:06'),
(2, 5, 'Aam', '320', '2023-06-27 04:57:30'),
(3, 5, 'Egg', '20', '2023-06-27 05:14:31'),
(4, 5, 'Current bill', '700', '2023-06-27 09:36:56'),
(8, 6, 'Angur', '30', '2023-06-27 19:08:40'),
(9, 6, 'Half pant', '200', '2023-06-27 19:08:56'),
(10, 6, 'Baby cream', '1000', '2023-06-27 19:09:44'),
(11, 6, 'Gamcha', '270', '2023-06-27 19:10:06'),
(12, 6, 'Gori', '1200', '2023-06-27 19:10:20'),
(13, 6, 'Mangsho', '300', '2023-06-27 19:10:43'),
(14, 6, 'Dail', '50', '2023-06-27 19:11:07'),
(15, 7, 'Khros', '200', '2023-06-28 03:05:57'),
(16, 10, 'Mangsho', '400', '2023-06-28 08:13:43'),
(17, 11, 'Akex', '400', '2023-06-28 12:11:49');

-- --------------------------------------------------------

--
-- Table structure for table `mypockets`
--

CREATE TABLE `mypockets` (
  `p_id` int(11) NOT NULL,
  `p_mail` varchar(150) NOT NULL,
  `p_name` varchar(150) NOT NULL,
  `p_category` varchar(150) NOT NULL,
  `p_income` varchar(150) NOT NULL,
  `status` varchar(150) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `endtime` varchar(100) NOT NULL DEFAULT 'Present'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mypockets`
--

INSERT INTO `mypockets` (`p_id`, `p_mail`, `p_name`, `p_category`, `p_income`, `status`, `time`, `endtime`) VALUES
(6, 'blackicodepoint@gmail.com', '6th active', '27.06.2023', '5000', 'closed', '2023-06-27 11:10:13', '28.06.2023'),
(8, 'blackicodepoint@gmail.com', 'Chalo next', '28.06.2023', '55555', 'closed', '2023-06-27 23:49:58', '28.06.2023'),
(9, 'blackicodepoint@gmail.com', 'Uske baad', '28.06.2023', '1000', 'closed', '2023-06-28 00:00:11', '28.06.2023'),
(10, 'blackicodepoint@gmail.com', 'New one hai', '28.06.2023', '60000', 'active', '2023-06-28 00:02:08', 'present'),
(11, 'test@gmail.com', 'Aktar Pocket', '28.06.2023', '12000', 'active', '2023-06-28 06:41:19', 'present');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `eno` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `cpass` varchar(255) NOT NULL,
  `admin` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `eno`, `branch`, `email`, `phone`, `address`, `pass`, `cpass`, `admin`) VALUES
(5, 'Shafin', '014', 'BTECH', 'blackicodepoint@gmail.com', '6001932077', 'Guwahati, Assam', '$2y$10$c.sc3vGiTnHIbXmQSNWNxenoZLTw83lD6tgQs24HB.SgM3fpvCauK', '$2y$10$NVcwDv0RWshexhywXB77LucSXVjXMpV18vCjlPXAgmEXsAohvozHS', 'active'),
(6, 'Aktar', '', '', 'test@gmail.com', '8099103891', '', '$2y$10$BiDJbnBu7ITKS6glP03/ueMdaeMZz7VPkIBnpV3MFOOXi6QG/pUVO', '$2y$10$CTu9N1eVwiVwjzY2jl0v2ut/gdDcK4MAYT5nPCqEP3ay/FtFFFTSi', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `extable`
--
ALTER TABLE `extable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mypockets`
--
ALTER TABLE `mypockets`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `extable`
--
ALTER TABLE `extable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `mypockets`
--
ALTER TABLE `mypockets`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
