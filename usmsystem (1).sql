-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2019 at 04:44 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usmsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `userreg`
--

CREATE TABLE `userreg` (
  `user_id` int(50) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userreg`
--

INSERT INTO `userreg` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES
(4, 'mico alfred', 'micoalfred4@gmail.com', 'mamajtm'),
(5, 'Baraka christian', 'baraka@gmail.com', 'yuyu'),
(6, 'gahizi edward', 'gahizi4@gmail.com', 'mama'),
(7, 'mico alfred', 'micoalfred4@gmail.com', 'mamajtm'),
(8, 'mico alfred', 'micoalfred4@gmail.com', 'mamajtm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userreg`
--
ALTER TABLE `userreg`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userreg`
--
ALTER TABLE `userreg`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
