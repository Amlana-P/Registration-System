-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2020 at 07:51 PM
-- Server version: 8.0.20
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendancedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `dateAbsent` json NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `name`, `dateAbsent`) VALUES
(1, 'Amlana', '{\"22\": \"Absent\", \"23\": \"Present\"}'),
(2, 'Annie', '{\"22\": \"Absent\", \"23\": \"Absent\"}');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `image`, `status`, `password`, `timestamp`) VALUES
(1, 'Amlana', 'amlana.pattnayak@gmail.com', 'Amlana.jpg', 1, '7f82654bcce5473246915fd0f0ad3a10', '2020-07-11 16:29:02'),
(2, 'Annie', 'annie@gmail.com', 'annie.png', 0, 'a21810a01d3fe0df4291d7d3e7abbd1c', '2020-07-11 16:29:27'),
(3, 'Ajita', 'ajita@gmail.com', 'thanos2.png', 0, '05305fafd513c43278a70d3dcbb2bcb7', '2020-07-11 16:30:57'),
(4, 'Sriniketh', 'sriniketh@gmail.com', 'thiru.png', 0, '54e5368dc31a929b55c112c2ebaca8e0', '2020-07-11 16:31:30'),
(5, 'Gaurav', 'gaurav@gmail.com', 'gaurav.png', 0, '29be54a52396750258d886abc5417fda', '2020-07-11 16:31:51'),
(6, 'Komal', 'komal@mail.com', 'ktb.png', 0, '690b4bac6ca9fb81814128a294470f92', '2020-07-11 17:03:25'),
(7, 'magna', 'magna@gmail.com', 'magna.png', 0, '461580541e92155766bee9d9e8f672ea', '2020-07-11 17:04:44'),
(8, 'Sudeshna', 'sudeshna@gmail.com', 'ena.png', 0, '76e9847dd9598b7e3704c239f7383065', '2020-07-11 17:09:33'),
(9, 'SS', 'SS@gmail.com', 'SS.png', 0, '3691308f2a4c2f6983f2880d32e29c84', '2020-07-12 09:29:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `records`
--
ALTER TABLE `records`
  ADD CONSTRAINT `records_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
