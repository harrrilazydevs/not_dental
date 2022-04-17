-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2022 at 06:57 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projects_burger_machine`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedbacks`
--

CREATE TABLE `tbl_feedbacks` (
  `id` int(11) NOT NULL,
  `feedback` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_feedbacks`
--

INSERT INTO `tbl_feedbacks` (`id`, `feedback`, `user_id`) VALUES
(12, 'test', 11),
(13, 'test', 11),
(14, 'test', 11),
(15, 'test', 11),
(16, 'test', 11),
(17, 'test', 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_locations`
--

CREATE TABLE `tbl_locations` (
  `id` int(11) NOT NULL,
  `location` varchar(100) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_locations`
--

INSERT INTO `tbl_locations` (`id`, `location`, `price`) VALUES
(1, 'Muntinlupa', 50),
(2, 'Outside Muntinlupa', 75);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` text NOT NULL,
  `ref_no` text NOT NULL,
  `order_date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_orders`
--

INSERT INTO `tbl_orders` (`id`, `user_id`, `product_id`, `qty`, `status`, `ref_no`, `order_date`) VALUES
(111, 11, 47, 1, 'Completed', 'O.R.D.2625', '2022-03-21'),
(112, 11, 47, 2, 'Cancelled', 'O.R.D.7903', '2022-03-21'),
(113, 11, 50, 50, 'Out for Delivery', 'O.R.D.3395', '2022-03-21'),
(114, 11, 48, 100, 'Pending', 'O.R.D.7394', '2022-03-21'),
(115, 11, 53, 50, 'Pending', 'O.R.D.7394', '2022-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_otp`
--

CREATE TABLE `tbl_otp` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `otp` int(11) NOT NULL,
  `token` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_otp`
--

INSERT INTO `tbl_otp` (`id`, `user_id`, `otp`, `token`, `date`) VALUES
(32, 11, 559765, 'bFlixWCkoq', '2022-04-08'),
(33, 2, 452397, 'UBJxrFbqvi', '2022-04-08'),
(34, 2, 793231, 'wrvj0qKMj5', '2022-04-08'),
(35, 11, 905577, 'NrnATSTfVk', '2022-04-08'),
(36, 2, 627100, 'hLIziJF0jN', '2022-04-08'),
(37, 1, 856172, 'Y51FNVPtFg', '2022-04-09'),
(38, 11, 521533, '0pKoSeu5kj', '2022-04-09'),
(39, 1, 522673, 'uQHYX2oP1D', '2022-04-09'),
(40, 13, 791475, 'bXbbXn1QKM', '2022-04-09'),
(41, 13, 602885, 'KosbfQabAW', '2022-04-09'),
(42, 1, 968616, 'HK58tZpuZh', '2022-04-09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payments`
--

CREATE TABLE `tbl_payments` (
  `id` int(11) NOT NULL,
  `order_ref_no` varchar(50) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `payment_details` varchar(50) DEFAULT NULL,
  `payment` double NOT NULL,
  `payment_date` date NOT NULL DEFAULT current_timestamp(),
  `note_to_rider` text NOT NULL,
  `delivery_address` varchar(100) NOT NULL,
  `delivery_fee` double NOT NULL,
  `gcash_payment_proof` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_payments`
--

INSERT INTO `tbl_payments` (`id`, `order_ref_no`, `payment_method`, `payment_details`, `payment`, `payment_date`, `note_to_rider`, `delivery_address`, `delivery_fee`, `gcash_payment_proof`) VALUES
(47, 'O.R.D.2625', 'CASH', NULL, 100, '2022-03-21', '1', '#213 Malakasan Balagtas Manipulo ', 50, NULL),
(48, 'O.R.D.7903', 'CASH', NULL, 200, '2022-03-21', '1', '#213 Malakasan Balagtas Manipulo ', 75, NULL),
(49, 'O.R.D.3395', 'CASH', NULL, 5000, '2022-03-21', '', '#213 Malakasan Balagtas Manipulo ', 50, NULL),
(50, 'O.R.D.7394', 'CASH', NULL, 17500, '2022-03-21', 'test', '#213 Malakasan Balagtas Manipulo ', 50, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `category` text NOT NULL,
  `picture` text NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `name`, `category`, `picture`, `price`) VALUES
(46, 'Blackbeard slash Whitebeard Burger', 'burger', 'src/uploaded/Blackbeard slash Whitebeard Burger.jpg', 100),
(47, 'Escanor Burger', 'burger', 'src/uploaded/Escanor Burger.jpg', 100),
(48, 'Ichigo Burger', 'burger', 'src/uploaded/Ichigo Burger.jpg', 100),
(50, 'Naruto Burger', 'burger', 'src/uploaded/Naruto Burger.jpg', 100),
(51, 'Natsu Burger', 'burger', 'src/uploaded/Natsu Burger.jpg', 100),
(52, 'Rengoku', 'sides', 'src/uploaded/rengoku.jpg', 80),
(53, 'Meliodas Nachos', 'sides', 'src/uploaded/Meliodas Nachos.jpg', 150),
(54, 'Saitama Burger', 'burger', 'src/uploaded/Saitama Burger.jpg', 150),
(55, 'Sakuragi Burger', 'burger', 'src/uploaded/Sakuragi Burger.jpg', 100),
(56, 'San Goku Burger', 'burger', 'src/uploaded/San Goku Burger.jpg', 100);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `access_level` text NOT NULL,
  `phone` text NOT NULL,
  `name` text NOT NULL,
  `register_date` date DEFAULT current_timestamp(),
  `address_st` varchar(100) NOT NULL,
  `address_no` text NOT NULL,
  `address_city` text NOT NULL,
  `address_brgy` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `email`, `password`, `access_level`, `phone`, `name`, `register_date`, `address_st`, `address_no`, `address_city`, `address_brgy`) VALUES
(1, 'dev', 'kdlanguido@gmail.com', '1', 'admin', '22222', 'Harri', '2022-03-01', '#21 Malakasan St Brgy Tibay ', '', '', ''),
(2, 'admin', 'kdlanguido@gmail.com', '1', 'admin', '0000', 'Junior Nonilon', '2022-03-01', '#21 Malakasan St Brgy Tibay ', '', '', ''),
(11, 'user1', 'kdlanguido@gmail.com', '123', 'user', '09231231231', 'Gloc 9', '2022-03-21', '#213 Malakasan Balagtas Manipulo ', '', '', ''),
(13, 'jay', 'kdlanguido@gmail.com', '123456789q', 'user', 'qwe', 'jay', '2022-04-09', 'malakasan', '22', 'qwe', 'qwe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_feedbacks`
--
ALTER TABLE `tbl_feedbacks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_locations`
--
ALTER TABLE `tbl_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `tbl_otp`
--
ALTER TABLE `tbl_otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payments`
--
ALTER TABLE `tbl_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_ref_no`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `address` (`address_st`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_feedbacks`
--
ALTER TABLE `tbl_feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_locations`
--
ALTER TABLE `tbl_locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `tbl_otp`
--
ALTER TABLE `tbl_otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_payments`
--
ALTER TABLE `tbl_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_feedbacks`
--
ALTER TABLE `tbl_feedbacks`
  ADD CONSTRAINT `tbl_feedbacks_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`);

--
-- Constraints for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD CONSTRAINT `tbl_orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`),
  ADD CONSTRAINT `tbl_orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `tbl_products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
