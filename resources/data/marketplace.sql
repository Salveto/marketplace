-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2019 at 12:48 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `imgid` int(11) NOT NULL,
  `imgname` varchar(255) NOT NULL,
  `imgcat` varchar(255) NOT NULL,
  `imgaddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`imgid`, `imgname`, `imgcat`, `imgaddress`) VALUES
(27, 'audi', 'cars', 'resources/images/audi.jpeg'),
(28, 'benz', 'cars', 'resources/images/benz.jpeg'),
(29, 'bmw', 'cars', 'resources/images/bmw.jpeg'),
(30, 'ferrari-monza', 'cars', 'resources/images/ferrari-monza.jpeg'),
(31, 'hondacivic', 'cars', 'resources/images/hondacivic.jpeg'),
(32, 'alto', 'cars', 'resources/images/alto.jpg'),
(33, 'coupe', 'cars', 'resources/images/coupe.jpg'),
(34, 'ferrari', 'cars', 'resources/images/ferrari.jpg'),
(35, 'jaguar', 'cars', 'resources/images/jaguar.jpg'),
(36, 'lamborgini', 'cars', 'resources/images/lamborgini.jpg'),
(37, 'police', 'cars', 'resources/images/police.jpg'),
(38, 'suzuki', 'cars', 'resources/images/suzuki.jpg'),
(39, 'apache', 'bikes', 'resources/images/Apache.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `city` varchar(32) NOT NULL,
  `address` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(3, 'vinay', 'vinaycta98@gmail.com', '14e1b600b1fd579f47433b88e8d85291', 0, '', ''),
(4, 'vinay', 'vinayvashishta111@gmail.com', '14e1b600b1fd579f47433b88e8d85291', 0, '', ''),
(5, 'viny', 'vinay@gmail.com', '14e1b600b1fd579f47433b88e8d85291', 0, '', ''),
(6, 'test3', 'test3@gmail.com', '7a1fb87abdf35ecc611ac4666343a327', 0, '', ''),
(7, 'fdse', 'vasdf@gmail.com', '224cf2b695a5e8ecaecfb9015161fa4b', 0, '', ''),
(8, 'viny', 'vinayvashishta135@gmail.com', '550e1bafe077ff0b0b67f4e32f29d751', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_items`
--

CREATE TABLE `user_items` (
  `id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`imgid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_items`
--
ALTER TABLE `user_items`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `imgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_items`
--
ALTER TABLE `user_items`
  ADD CONSTRAINT `user_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
