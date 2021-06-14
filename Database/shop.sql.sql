-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: shareddb-o.hosting.stackcp.net
-- Generation Time: Dec 11, 2019 at 06:09 PM
-- Server version: 10.2.26-MariaDB-log
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usersdetails-31303954a5`
--
CREATE DATABASE IF NOT EXISTS `usersdetails-31303954a5` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `usersdetails-31303954a5`;

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `add1` text NOT NULL,
  `add2` text NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `email`, `add1`, `add2`, `code`) VALUES
(1, 'ritikkumar.rk35@gmail.com', 'Rr plot 541,Ruby hospital area, Eastern kolkata township, kolkata, Ruby hospital area, Ruby hospital area, Ruby hospital area, Ruby hospital area', 'Ruby hospital area', 700107);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(4, 'ritikkumar.rk35@gmail.com', '4f36c82085e297bdfd12f64d8919094a');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `description`) VALUES
(2, 'Mens Shades', '2.jpg', 4550, 'im representing thisproject'),
(3, 'Girls Top', '3.jpg', 299, 'We are one of the foremost organizations, affianced in offering a premium quality collection of Latest Girls Top. '),
(4, 'Mens Tshirt', '4.jpg', 450, 'This style is form-fitting, meaning it will fit tight against your body. If you prefer a looser, more relaxed fit.'),
(5, 'Black Top', '5.jpg', 555, 'Keeping the diverse requirements of the customers in mind, our company provides high quality range of Girls Fancy Top.'),
(6, 'Mens Shirt', '6.jpg', 865, 'Perhaps not everybody knows, or has paid much attention to the fact, that all the parts of a men’s shirt.'),
(7, 'Kurti', '7.jpg', 1700, 'In modern usage, a short kurta is referred to as the kurti,which is the attire of females. However, traditionally.'),
(8, 'Girls Kurti', '8.jpg', 1980, 'The kurti can also be half or full sleeved and hip length with no front or back opening. '),
(9, 'Mens Kurta', '9.jpg', 2100, 'The kurta is traditionally made of cotton or silk; it is worn plain or with embroidered decoration, such as chikan.'),
(10, 'Lehnga', '10.jpg', 2690, 'The Ghagri was a narrow skirt six feet long, the same length as original antariya. This style can still be seen worn by Jain.'),
(12, 'One Piece', '11.jpg', 1500, 'This  product is added by admin and the image file is implicitely uploaded to DB'),
(13, 'jewellry', '11.jpg', 1000, 'This  product is added by admin and the image file is implicitely uploaded to DB');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(11, 'ritikkumar.rk35@gmail.com', '46843080e155129e1163ea3675540fbf'),
(12, 'mohitsingh@gmail.com', 'd4553bd9ded64c18f5686c81fc264b48'),
(13, '454545@kilkjk', '0f444b7482203c96c8f55d6ca8ffe213'),
(14, 'mkmkmkk@gmil', '2903e0109c4a70efd9a98bfc8dd00ee2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
