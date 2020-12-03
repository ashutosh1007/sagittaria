-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2020 at 07:39 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sagittaria`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_image`, `created_at`, `deleted_at`, `updated_at`) VALUES
(1, 'Cosmetic Pouch', 'Cosmetic pouch cover pic.jpg', '2020-12-01 09:50:26', '0000-00-00 00:00:00', '2020-12-01 09:50:26'),
(2, 'ISO Bag', 'ISO bag  cover pic.jpg', '2020-12-01 10:05:01', '0000-00-00 00:00:00', '2020-12-01 10:05:01'),
(3, 'Shopping Bag', 'image001.jpg', '2020-12-01 10:25:28', '0000-00-00 00:00:00', '2020-12-01 10:25:28'),
(4, 'Tote Bag', 'tote bag  (1).jpg', '2020-12-01 08:26:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Vegetable and Fruit Bag', 'veg and fruit cover pic.jpg', '2020-12-01 08:27:18', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `certifications`
--

CREATE TABLE `certifications` (
  `id` int(11) NOT NULL,
  `certificate_name` varchar(255) NOT NULL,
  `certificate_image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certifications`
--

INSERT INTO `certifications` (`id`, `certificate_name`, `certificate_image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Fair Trade, ', 'FairTrade-275x300.jpg', '2020-12-01 09:44:56', '2020-12-01 09:44:56', '0000-00-00 00:00:00'),
(2, 'ICS, ', 'ics logo.png', '2020-11-26 12:01:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'SA, ', 'SA 8000.png', '2020-11-26 12:01:24', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'GOTS, ', 'gots logo.png', '2020-11-26 12:01:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pin_code` int(11) NOT NULL,
  `contact_number` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `enquiry` text NOT NULL,
  `created_at` int(11) NOT NULL,
  `deleted_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` text NOT NULL,
  `product_description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `product_name`, `product_image`, `product_description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Cosmetic Pouch', 'Cosmetic pouch (2).jpg', 'Cosmetic Pouch', '2020-12-01 09:52:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 'Cosmetic Pouch 2', 'Cosmetic pouch (3).jpg', 'Cosmetic Pouch 2', '2020-12-01 09:53:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 'Cosmetic Pouch 3', 'Cosmetic pouch (4).jpg', 'Cosmetic Pouch 3', '2020-12-01 09:54:17', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 'Cosmetic Pouch 4', 'Cosmetic pouch (5).jpg', 'Cosmetic Pouch 4', '2020-12-01 09:55:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 2, 'ISO Bag', 'ISO bag  (1).jpg', 'ISO Bag', '2020-12-01 09:56:30', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 2, 'ISO Bag 2', 'ISO bag  (3).jpg', 'ISO Bag 2', '2020-12-01 09:56:52', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 3, 'Shopping Bag', 'Shopping bag (1).jpg', 'Shopping Bag', '2020-12-01 09:57:45', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 3, 'Shopping Bag 2', 'Shopping bag (2).jpg', 'Shopping Bag 2', '2020-12-01 09:58:04', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 3, 'Shopping Bag 3', 'Shopping bag (3).jpg', 'Shopping Bag 3', '2020-12-01 09:58:23', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 3, 'Shopping Bag 4', 'Shopping bag (4).jpg', 'Shopping Bag 4', '2020-12-01 09:58:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 4, 'Tote Bag', 'tote bag  (1).jpg', 'Tote Bag', '2020-12-01 10:00:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 4, 'Tote Bag 2', 'tote bag  (2).jpg', 'Tote Bag 2', '2020-12-01 10:01:03', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 4, 'Tote Bag 3', 'tote bag  (3).jpg', 'Tote Bag 3', '2020-12-01 10:01:22', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 5, 'Vegetable and Fruit Bag', 'Veg and fruit bag  (1).jpg', 'Vegetable and Fruit Bag', '2020-12-01 10:01:55', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 5, 'Vegetable and Fruit Bag 2', 'Veg and fruit bag  (2).jpg', 'Vegetable and Fruit Bag 2', '2020-12-01 10:02:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 5, 'Vegetable and Fruit Bag 3', 'Veg and fruit bag  (3).jpg', 'Vegetable and Fruit Bag 3', '2020-12-01 10:02:31', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL DEFAULT 'subscriber',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `user_role`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', 'admin', 'admin', '$2y$12$TbTnWHikMacW8UlpnpivLO.McH9byaCdMYffa9fWq3d75.FK5fLNi', 'admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certifications`
--
ALTER TABLE `certifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `certifications`
--
ALTER TABLE `certifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
