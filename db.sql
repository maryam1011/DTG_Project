-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 22, 2022 at 05:44 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_ID` int(11) UNSIGNED NOT NULL,
  `student_name` varchar(255) DEFAULT NULL,
  `student_email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_ID`, `student_name`, `student_email`) VALUES
(216015368, 'حسام', 'test1@hotmail.com'),
(216015588, 'زهراء', 'test2@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `type`) VALUES
(1, 'student', '123', 'student'),
(2, 'teacher', '123', 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `violations`
--

CREATE TABLE `violations` (
  `violation_id` int(11) UNSIGNED NOT NULL,
  `student_ID` int(11) UNSIGNED NOT NULL,
  `violation_type_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `violations`
--

INSERT INTO `violations` (`violation_id`, `student_ID`, `violation_type_id`) VALUES
(1, 216015368, 1),
(2, 216015368, 1),
(3, 216015588, 2);

-- --------------------------------------------------------

--
-- Table structure for table `violations_type`
--

CREATE TABLE `violations_type` (
  `violation_type_id` int(11) UNSIGNED NOT NULL,
  `violation_name` varchar(255) DEFAULT NULL,
  `violation_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `violations_type`
--

INSERT INTO `violations_type` (`violation_type_id`, `violation_name`, `violation_description`) VALUES
(1, 'جوال', 'حمل جوال بالفصل'),
(2, 'ازعاج', 'ازعاج بالفصل');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `violations`
--
ALTER TABLE `violations`
  ADD PRIMARY KEY (`violation_id`),
  ADD KEY `violations_ibfk_1` (`student_ID`),
  ADD KEY `violation_typefk` (`violation_type_id`);

--
-- Indexes for table `violations_type`
--
ALTER TABLE `violations_type`
  ADD PRIMARY KEY (`violation_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `violations`
--
ALTER TABLE `violations`
  MODIFY `violation_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `violations_type`
--
ALTER TABLE `violations_type`
  MODIFY `violation_type_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `violations`
--
ALTER TABLE `violations`
  ADD CONSTRAINT `violation_typefk` FOREIGN KEY (`violation_type_id`) REFERENCES `violations_type` (`violation_type_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `violations_ibfk_1` FOREIGN KEY (`student_ID`) REFERENCES `students` (`student_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
