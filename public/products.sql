-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2019 at 09:52 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catalog`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `sku` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `type` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` int(4) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `height` float DEFAULT NULL,
  `width` float DEFAULT NULL,
  `length` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku`, `name`, `price`, `type`, `size`, `weight`, `height`, `width`, `length`) VALUES
(43, '#AA789', 'IKEA cofee table LTR', 499.99, 'Furniture', 0, 0, 100, 50.5, 152),
(51, '#99326', 'IKEA Stainless steel desk', 299, 'Furniture', 0, 0, 250, 60, 300),
(52, '#56899', 'Treasure Island, 1st edition', 199.99, 'Book', 0, 1.3, 0, 0, 0),
(53, '#88746', 'The Mysterious Island', 12.99, 'Book', 0, 2, 0, 0, 0),
(54, '#ADV67', 'ACME CDRW+ 750MB', 2.99, 'DVD', 750, 0, 0, 0, 0),
(55, '#AAD99', 'ACME DVD dual layer 8GB', 5.99, 'DVD', 8024, 0, 0, 0, 0),
(56, '#FF569', 'IKEA Classic Sofa', 499.99, 'Furniture', 0, 0, 80, 120, 250),
(57, '#EE698', 'Kitchen table', 45.99, 'Furniture', 0, 0, 60, 60, 100),
(58, '#9968J', 'Set of chairs', 566, 'Furniture', 0, 0, 20, 20, 40),
(59, '#778DG', 'The King\\\'s Speech', 14.99, 'DVD', 4024, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
