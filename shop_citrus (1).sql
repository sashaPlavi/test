-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 10:42 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_citrus`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `ok` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shop_items`
--

CREATE TABLE `shop_items` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop_items`
--

INSERT INTO `shop_items` (`id`, `img`, `title`, `description`) VALUES
(217, 'http://snaturefruits.com/wp-content/uploads/2016/03/LIMON-snature.jpg', 'lemon', 'super-mysqli-lemon'),
(218, 'http://snaturefruits.com/wp-content/uploads/2016/03/LIMON-snature.jpg', 'lemon', 'super-mysqli-lemon'),
(219, 'http://snaturefruits.com/wp-content/uploads/2016/03/LIMON-snature.jpg', 'lemon', 'super-mysqli-lemon'),
(220, 'http://snaturefruits.com/wp-content/uploads/2016/03/LIMON-snature.jpg', 'lemon', 'super-mysqli-lemon'),
(221, 'http://snaturefruits.com/wp-content/uploads/2016/03/LIMON-snature.jpg', 'lemon', 'super-mysqli-lemon'),
(222, 'http://snaturefruits.com/wp-content/uploads/2016/03/LIMON-snature.jpg', 'lemon', 'super-mysqli-lemon'),
(223, 'http://snaturefruits.com/wp-content/uploads/2016/03/LIMON-snature.jpg', 'lemon', 'super-mysqli-lemon'),
(224, 'http://snaturefruits.com/wp-content/uploads/2016/03/LIMON-snature.jpg', 'lemon', 'super-mysqli-lemon'),
(225, 'http://snaturefruits.com/wp-content/uploads/2016/03/LIMON-snature.jpg', 'lemon', 'super-mysqli-lemon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `shop_items`
--
ALTER TABLE `shop_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `shop_items`
--
ALTER TABLE `shop_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
