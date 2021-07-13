-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2020 at 03:02 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polling`
--

-- --------------------------------------------------------

--
-- Table structure for table `poll`
--

CREATE TABLE `poll` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `voteCount` int(11) DEFAULT 0,
  `q_id` int(100) NOT NULL,
  `title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poll`
--

INSERT INTO `poll` (`id`, `name`, `voteCount`, `q_id`, `title`) VALUES
(1, 'Laravale', 4, 1, 'Best PHP Frameworks in 2020?'),
(2, 'Symfony', 1, 1, ''),
(3, 'Phalcon', 1, 1, ''),
(4, 'CodeIgniter', 1, 1, ''),
(5, 'CakePHP', 2, 1, ''),
(6, 'Lumen', 1, 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `poll`
--
ALTER TABLE `poll`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `poll`
--
ALTER TABLE `poll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
