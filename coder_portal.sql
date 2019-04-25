-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 25, 2019 at 02:46 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coder_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `staff_id` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profile` text NOT NULL,
  `school` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `password_reset` varchar(255) NOT NULL,
  `role` enum('admin','sub_admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `staff_id`, `fname`, `email`, `profile`, `school`, `password`, `password_reset`, `role`) VALUES
(1, 'admin', 'Test Name', 'admin@gedik.com', 'imagesprofile/5c23538fb3e8b5.24929868.jpg', 'Accra Technical University', '$2y$10$9vMQV4.VUA9at5ikf9ATzegWFkRJHX/LxzgS4o3iDADX9fRMmGrc.', 'francislartey12@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `stuId` varchar(100) NOT NULL,
  `stuName` varchar(255) NOT NULL,
  `stuEmail` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `classId` varchar(255) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL,
  `schoolName` text NOT NULL,
  `password` text NOT NULL,
  `password_reset` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `stuId`, `stuName`, `stuEmail`, `Gender`, `dob`, `classId`, `regDate`, `updationDate`, `schoolName`, `password`, `password_reset`, `status`) VALUES
(2, '001', 'Coder Rick', 'coder@rick.com', 'Male', '2019-04-03', 'Class One', '2019-04-23 20:39:00', 'null', 'Accra Technical University', '$2y$10$TtwZBiq5XDANa1xs9oTbn.Eoz0rU24tToVmxTdOrJPZ0esdJbLjPi', 'coder@rick.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `teacherId` varchar(100) NOT NULL,
  `teacherName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `password_reset` varchar(255) NOT NULL,
  `schoolName` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `teacherId`, `teacherName`, `email`, `gender`, `regDate`, `updationDate`, `password`, `password_reset`, `schoolName`, `status`) VALUES
(1, 't001', 'Mike Mis', 'mis@mike.com', 'Male', '2019-04-23 20:53:05', 'null', '$2y$10$AZExcDZU7Rlkxm3TV9M5/Oq66GmSF8vKDLgx28MSS1XBmfVduKf86', 'mis@mike.com', 'Accra Technical University', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
