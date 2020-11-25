-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 08:58 PM
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
(1, 'ISO Bag', 'TEREE ADELICE ISO BAG.jpg', '2020-11-19 12:02:15', '0000-00-00 00:00:00', '2020-11-11 11:02:46'),
(2, 'Shopping Bag', 'leclerc bag.jpg', '2020-11-19 12:02:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Toiletry and Cosmetic pouches', 'PULCO ISO BAG (2).jpg', '2020-11-19 12:03:03', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Tote Bag', 'BEAUTE TOTE BAG.jpg', '2020-11-19 09:29:07', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Vegetable and Fruit Bag', 'INQ - 20-18 - POUCH 3.png', '2020-11-19 12:03:16', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
(38, 1, 'Bio Coop ISO Bag', 'bio coop iso bag.jpg', 'Bio Coop ISO Bag', '2020-11-12 06:12:49', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 1, 'INQ - 22-18-ISO Bag', 'INQ - 22-18 - ISO BAG.jpg', 'INQ - 22-18-ISO Bag', '2020-11-12 06:13:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 1, 'PULCO ISO Bag', 'PULCO ISO BAG (1).jpg', 'PULCO ISO Bag', '2020-11-12 06:14:02', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 1, 'PULCO ISO Bag-2', 'PULCO ISO BAG (2).jpg', 'PULCO ISO Bag-2', '2020-11-12 06:14:22', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 1, 'PULCO ISO Bag-3', 'PULCO ISO BAG (3).jpg', 'PULCO ISO Bag-3', '2020-11-12 06:14:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 1, 'SFN LONG ISO Bag 1', 'SFN LONG ISO BAG 1 (2).jpg', 'SFN LONG ISO Bag 1', '2020-11-12 06:15:31', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 1, 'SFN LONG ISO Bag 1-2', 'SFN LONG ISO BAG 1 (3).jpg', 'SFN LONG ISO Bag 1-2', '2020-11-12 06:15:52', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 1, 'TEREE ADELICE ISO Bag', 'TEREE ADELICE ISO BAG.jpg', 'TEREE ADELICE ISO Bag', '2020-11-12 06:16:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 2, 'INQ - 22-18 Shopping Bag', 'INQ - 22-18 - SHOPPING BAG.jpg', 'INQ - 22-18 Shopping Bag', '2020-11-12 06:27:25', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 2, 'Leclerc Shopping Bag', 'leclerc bag.jpg', 'Leclerc Shopping Bag', '2020-11-12 06:28:04', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 2, 'Tediber Shopping Bag', 'Tediber SHOPPING BAG.jpg', 'Tediber Shopping Bag', '2020-11-12 06:28:33', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 3, 'May Tea', 'may tea.jpg', 'May Tea', '2020-11-12 06:29:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 4, 'as', 'as.jpg', 'as', '2020-11-12 06:30:49', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 4, 'Beaute Tote Bag', 'BEAUTE TOTE BAG.jpg', 'Beaute Tote Bag', '2020-11-12 06:31:38', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 4, 'Bird Tote Bag', 'bird TOTE BAG.jpg', 'Bird Tote Bag', '2020-11-12 06:32:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 4, 'INQ - 22-18 Tote Bag', 'INQ - 22-18 - TOTE BAG.jpg', 'INQ - 22-18 Tote Bag', '2020-11-12 06:33:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 4, 'INQ 95-18 Leclerc Bio 201906 - Tote Bag', 'INQ 95-18 LECLERC BIO  201906 - TOTE BAG.jpg', 'INQ 95-18 Leclerc Bio 201906 - Tote Bag', '2020-11-12 06:34:22', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 4, 'Leclerc Espace Culturel Tote Bag', 'LECLERC ESPACE CULTUREL - TOTE BAG.jpg', 'Leclerc Espace Culturel Tote Bag', '2020-11-12 06:35:49', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 4, 'Tissaia Tote Bag', 'TISSAIA - TOTE BAG.jpg', 'Tissaia Tote Bag', '2020-11-12 06:36:25', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 5, 'INQ - 20-18 - Pouch 2', 'INQ - 20-18 - POUCH 2.png', 'INQ - 20-18 - Pouch 2', '2020-11-12 06:42:25', '2020-11-12 06:42:25', '0000-00-00 00:00:00'),
(58, 5, 'INQ - 20-18 - Pouch 3', 'INQ - 20-18 - POUCH 3.png', 'INQ - 20-18 - Pouch 3', '2020-11-12 06:41:20', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 5, 'INQ - 22-18 - Pouch', 'INQ - 22-18 - POUCH.jpg', 'INQ - 22-18 - Pouch', '2020-11-12 06:41:48', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
