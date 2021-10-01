-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2021 at 12:25 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aicsku`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', 'Admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `catogory`
--

CREATE TABLE `catogory` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(500) NOT NULL,
  `moduleId` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catogory`
--

INSERT INTO `catogory` (`id`, `name`, `moduleId`) VALUES
(1, 'Introduction to Enterneurship', '9'),
(2, 'Innovation through design thinking', '10'),
(3, 'installation of django', '9'),
(4, 'Demo 1', '9');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name`) VALUES
(9, 'Module 1'),
(10, 'Module 2'),
(11, 'Module 3'),
(12, 'Module 4'),
(13, 'Module 5');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `amount`, `payment_status`, `payment_id`, `added_on`) VALUES
(1, 'abc', 0, 'completed', '', '2021-08-26 05:22:02'),
(2, 'Test1', 0, 'complete', 'pay_HrfgGtzMacQkYZ', '2021-08-31 06:20:43'),
(3, 'Test2', 0, 'pending', '', '2021-08-31 06:26:24'),
(4, 'aravind', 0, 'complete', 'pay_HrgoEwiTq5TUZR', '2021-08-31 07:26:42'),
(5, 'aravind', 0, 'pending', '', '2021-08-31 07:29:26');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Id` int(10) UNSIGNED NOT NULL,
  `productImage` varchar(500) NOT NULL,
  `productName` varchar(500) NOT NULL,
  `productPrice` varchar(500) NOT NULL,
  `productDescription` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Id`, `productImage`, `productName`, `productPrice`, `productDescription`) VALUES
(8, '1.png', 'Introduction to Enterpreneurship', '1000', 'you will know how to install and establish the things'),
(9, '2.png', 'Introduction to Python', '1500', 'Basics of python');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `StudentId` int(11) NOT NULL,
  `Image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`StudentId`, `Image`) VALUES
(7, 'car.jpg'),
(6, 'car.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` varchar(300) NOT NULL,
  `option1` varchar(200) NOT NULL,
  `option2` varchar(200) NOT NULL,
  `option3` varchar(200) NOT NULL,
  `option4` varchar(200) NOT NULL,
  `canswer` varchar(1) NOT NULL,
  `catogoryid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `canswer`, `catogoryid`) VALUES
(4, 'what is django', '', 'b', 'c', 'd', 'c', '2'),
(5, 'what is django', 'sdf', 'b', 'c', 'd', 'c', '2'),
(7, 'what is django', 'sdf', 'safdds', 'sda', 'asd', 'a', '1'),
(8, 'what is django', 'sdf', 'safdds', 'sda', 'asd', 'c', '4');

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `id` int(10) UNSIGNED NOT NULL,
  `studentId` varchar(100) NOT NULL,
  `quizId` varchar(100) NOT NULL,
  `score` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`id`, `studentId`, `quizId`, `score`) VALUES
(4, '4', '7', '1'),
(5, '4', '8', '0'),
(10, '5', '', '1'),
(11, '4', '7', '0'),
(12, '4', '7', '0'),
(13, '4', '7', '0'),
(14, '4', '7', '0'),
(15, '4', '7', '0'),
(16, '4', '7', '1'),
(17, '4', '7', '0');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstName` varchar(300) NOT NULL,
  `lastName` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `username`, `email`, `password`, `firstName`, `lastName`) VALUES
(1, 'Surendra', 'surendra@conzur', 'Suri@123', 'Surendra', 'Chakali'),
(2, 'Surendra', 'surendra@conzurasolutions.com', 'Suri@123', 'surendra', 'chakali'),
(3, 'techexe', 'techexe@aic-sku.com', 'Aicskuap@2021', 'Technical', 'Executive'),
(4, 'Conzura', 'support@conzurasolutions.com', 'Conzura@123', 'Conzura', 'Solutions'),
(5, 'drmouli', 'techexe@gmail.com', 'Aicskuap@2020', 'Chandra Mouli', 'C'),
(6, 'Surendra', 'suri@gmail.com', 'Suri@123', 'Surendra', 'Chakali'),
(7, 'Surendra', 'suri1002@gmail.com', 'Suri@123', 'Surendra ', 'Chakali');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(500) NOT NULL,
  `video` varchar(500) NOT NULL,
  `catogoryId` int(100) NOT NULL,
  `description1` varchar(500) DEFAULT NULL,
  `description2` varchar(500) DEFAULT NULL,
  `summary` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `video`, `catogoryId`, `description1`, `description2`, `summary`) VALUES
(14, 'Installation', 'videoplayback.mp4', 1, NULL, NULL, NULL),
(15, 'Usage', 'python 1.mp4', 1, NULL, NULL, NULL),
(16, 'intro', 'python 1.mp4', 2, NULL, NULL, NULL),
(17, 'how to design a page', 'videoplayback.mp4', 2, NULL, NULL, NULL),
(18, '', '', 0, NULL, NULL, NULL),
(19, 'download of python', 'python 1.mp4', 3, NULL, NULL, NULL),
(20, 'Test1', 'python 1.mp4', 4, NULL, NULL, NULL),
(21, 'introduction to tupples', 'python 1.mp4', 1, 'Introduction 1', 'Introduction 1', 'great course');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catogory`
--
ALTER TABLE `catogory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `catogory`
--
ALTER TABLE `catogory`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
