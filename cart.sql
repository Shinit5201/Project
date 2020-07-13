-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2020 at 11:54 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `food_details`
--

CREATE TABLE `food_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `item_price_full` int(11) DEFAULT NULL,
  `item_price_half` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_details`
--

INSERT INTO `food_details` (`id`, `user_id`, `item_name`, `item_price_full`, `item_price_half`) VALUES
(4, 1, 'ALU MUTTER', 80, 'NOT AVAILABLE');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `Id` int(11) DEFAULT NULL,
  `Item` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`Id`, `Item`) VALUES
(1, '1'),
(1, '2'),
(1, '3'),
(1, '4'),
(1, '5'),
(1, '6'),
(1, '7'),
(3, ''),
(3, 'Kingfisher StrongPremium Beer'),
(3, 'Kingfisher StrongPremium Beer'),
(3, 'Kingfisher PremiumLager Beer'),
(1, 'OLD MONK RUM'),
(1, 'BAGPIPER DeluxeWHISKY'),
(1, 'Antiquity BlueWhisky'),
(1, 'BAGPIPER DeluxeWHISKY'),
(1, 'Antiquity BlueWhisky'),
(3, 'BAGPIPER DeluxeWHISKY'),
(1, 'Antiquity BlueWhisky'),
(1, 'Antiquity BlueWhisky'),
(1, 'Antiquity BlueWhisky'),
(1, 'Antiquity BlueWhisky'),
(1, 'Antiquity BlueWhisky'),
(1, 'Antiquity BlueWhisky'),
(1, 'Antiquity BlueWhisky'),
(1, 'Antiquity BlueWhisky'),
(NULL, 'ALU MUTTER');

-- --------------------------------------------------------

--
-- Table structure for table `item_details`
--

CREATE TABLE `item_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `item_size` varchar(50) DEFAULT NULL,
  `item_price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_details`
--

INSERT INTO `item_details` (`id`, `user_id`, `item_name`, `item_size`, `item_price`) VALUES
(35, 1, 'Antiquity BlueWhisky', '180 ML', 350);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food_details`
--
ALTER TABLE `food_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_details`
--
ALTER TABLE `item_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food_details`
--
ALTER TABLE `food_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `item_details`
--
ALTER TABLE `item_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
