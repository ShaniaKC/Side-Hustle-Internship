-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2021 at 04:47 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo_list`
--
CREATE DATABASE IF NOT EXISTS `todo_list` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `todo_list`;

-- --------------------------------------------------------

--
-- Table structure for table `todo_list_items`
--

CREATE TABLE `todo_list_items` (
  `id` int(11) NOT NULL,
  `item` text DEFAULT NULL,
  `time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todo_list_items`
--

INSERT INTO `todo_list_items` (`id`, `item`, `time`) VALUES
(12, 'Add the folder to sidehustle folder', '2021-07-10'),
(13, 'Commit to github', '2021-07-10'),
(14, 'Submit assignment link', '2021-07-10'),
(17, 'Export Database to the online server', '2021-07-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todo_list_items`
--
ALTER TABLE `todo_list_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todo_list_items`
--
ALTER TABLE `todo_list_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
