-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2019 at 02:21 AM
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
-- Database: `php2`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cate_name` varchar(191) NOT NULL,
  `slug` varchar(191) DEFAULT NULL,
  `desc` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL DEFAULT '-1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cate_name`, `slug`, `desc`, `created_at`, `updated_at`, `created_by`) VALUES
(3, 'Đồ nam', NULL, NULL, '2019-01-22 17:00:00', '2019-02-13 17:00:00', -1),
(4, 'Đồ nữ', NULL, NULL, '2019-01-23 17:00:00', '2019-01-23 17:00:00', -1),
(5, 'Giày dép', NULL, NULL, '2019-01-23 17:00:00', NULL, -1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `cate_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `size` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `short_desc` text,
  `detail` text,
  `star` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `cate_id`, `price`, `size`, `color`, `short_desc`, `detail`, `star`, `created_at`, `updated_at`, `views`, `status`) VALUES
(2, 'Giày vans', 'public/images/products/5c6d62a46e82a-download.png', 5, 250, '39,40,41', 'Đen,Trắng', 'Giày vans rất đẹp\r\nGiày vans rất đẹp\r\nGiày vans rất đẹp\r\nGiày vans rất đẹp', 'Chất liệu: vải canvas\r\n', NULL, '2019-02-19 17:00:00', '2019-02-19 17:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` int(11) NOT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(31, 'admin', 'naiso1hn2@gmail.com', NULL, 1, '$2y$10$x0udnhSe5PNbHuYspi7lnO31frz.jIOgnz2Oi3AEORN8xqrsKyKHi', NULL, '2019-02-12 17:00:00', NULL),
(119, '1234567', 'naiso1hn2@gmail.com', NULL, 0, '$2y$10$q33FNGhDFydIzmzsT5d5WelPsdAEBX2EQjXUDB97UGoMJ3ASirgS6', NULL, '2019-02-16 17:00:00', NULL),
(120, 'naiye123', 'naiso1hn2@gmail.com', NULL, 0, '$2y$10$GYlR.KP3E1NIuD6VFJ/ReuZKtuQQB1M/qXaNZYpxUL4T81qAqTj4q', NULL, '2019-02-16 17:00:00', NULL),
(121, 'naiye123', 'naiso1hn2@gmail.com', NULL, 0, '$2y$10$mw2Oxd6o36VxZ95Y0s3TbemhucLJjTL0rfiUBb3giH2RoRVru21ji', NULL, '2019-02-16 17:00:00', NULL),
(122, 'naiye123', 'naiso1hn2@gmail.com', NULL, 0, '$2y$10$vRhcAzHodBbwP8JzMygA4uBXC3.hrduemSBlxJWDeGRQJ.fwgOO3i', NULL, '2019-02-16 17:00:00', NULL),
(123, 'naiye123', 'naiso1hn22@gmail.com', NULL, 0, '$2y$10$BuuZR7qDBW50bqspzNbuPOiqFyvwoQIGTHXMr0cHQQJZpttor.zhm', NULL, '2019-02-16 17:00:00', NULL),
(124, 'naiye1232', '32naiso1hn2@gmail.com', NULL, 0, '$2y$10$gkEjow63IxQSn.IIeQ5aUumRwjyi16R9wLHNXTiyydSi3NRv5/d1m', NULL, '2019-02-16 17:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cate_id` (`cate_id`);

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
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
