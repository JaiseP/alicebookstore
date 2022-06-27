-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2022 at 11:59 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alice_bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `privilege` tinyint(4) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`user_id`, `first_name`, `last_name`, `email_id`, `password`, `privilege`, `is_active`) VALUES
(1, 'John', 'Mathew', 'john@gmail.com', '2312648', 2, 1),
(2, 'Mark', 'Philip', 'mark@alicebookstore.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, 1),
(6, 'Test', 'User', 'test@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, 0),
(7, 'Test', 'User', 'test@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` tinyint(4) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_image`, `is_active`, `is_deleted`) VALUES
(1, 'Books', '', 1, 0),
(2, 'Gifts', '', 1, 0),
(3, 'Stationaries', '', 1, 0),
(4, 'Office', '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` tinyint(2) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `discount_offered` float(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `discount_offered`) VALUES
(1, 'Infosys Ltd', 25.00),
(2, 'Oxygen Appliances', 15.00),
(3, 'Tech Mahindra', 22.00),
(4, 'Starbucks', 13.00),
(6, 'Test Company', 25.00);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `order_date` date NOT NULL,
  `order_status` tinyint(1) NOT NULL,
  `actual_price` float(6,2) NOT NULL,
  `final_price` float(6,2) NOT NULL,
  `payment_mode` tinyint(1) NOT NULL,
  `billing_name` varchar(255) NOT NULL,
  `billing_address` varchar(255) NOT NULL,
  `billing_street` varchar(255) NOT NULL,
  `billing_city` varchar(255) NOT NULL,
  `billing_postcode` varchar(255) NOT NULL,
  `billing_phone_number` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `order_date`, `order_status`, `actual_price`, `final_price`, `payment_mode`, `billing_name`, `billing_address`, `billing_street`, `billing_city`, `billing_postcode`, `billing_phone_number`) VALUES
(36, 11, '2022-05-04', 2, 129.76, 129.76, 2, 'Jaise Padinjarekalayil Jose', '438 Illford Lane', 'Ilford', 'Ilford', 'IG1 2NF', 7776646445),
(37, 11, '2022-05-04', 3, 19.44, 19.44, 1, 'Jaise Padinjarekalayil Jose', '438 Illford Lane', 'ilford', 'Ilford', 'IG1 2NF', 7776646445),
(38, -99, '2022-05-12', 1, 16.20, 16.20, 1, 'Philip George', '421 Ilford Lane', 'Ilford', 'London', 'IG1 2EF', 7778978475);

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` tinyint(4) DEFAULT NULL,
  `price_purchased` float(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`order_id`, `product_id`, `quantity`, `price_purchased`) VALUES
(36, 1, 2, 6.48),
(36, 2, 1, 116.80),
(37, 1, 3, 6.48),
(38, 1, 2, 8.10);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `discount_percentage` float(4,2) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `category_id` tinyint(4) NOT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `price`, `discount_percentage`, `product_image`, `description`, `category_id`, `is_active`, `is_deleted`) VALUES
(1, 'Still Life (Paperback)', 9, 10.00, 'still_life.jpg', 'From the author of When God Was a Rabbit comes the enchanting tale of an unlikely friendship between a British soldier and an alleged spy in a wartime Tuscany ripe with colour and the ghosts of the past.', 1, 1, 0),
(2, 'Still Life (Paperback)', 9, 10.00, 'office chair.jpg', 'From the author of When God Was a Rabbit comes the enchanting tale of an unlikely friendship between a British soldier and an alleged spy in a wartime Tuscany ripe with colour and the ghosts of the past.', 1, 1, 0),
(41, 'Test Product', 12, 5.00, 'IMG-1652316883.jpg', 'Test Description', 3, 1, 0),
(42, 'Lesley Pearse', 30, 5.00, 'Lesley Pearse.jpg', 'What do you do when your dream home becomes your worst nightmare? The gripping new novel and Sunday Times bestseller from Lesley Pearse\'A riveting page-turner\' Woman\'s Weekly\'Sensational storytelling', 1, 1, 0),
(43, 'Andreah Book', 25, 6.00, 'andrea_book.jpg', 'From the author of When God Was a Rabbit comes the enchanting tale of an unlikely friendship between a British soldier and an alleged spy in a wartime Tuscany ripe with colour and the ghosts of the past.', 3, 1, 0),
(44, 'pens', 24, 7.00, 'pens.jpg', 'A pen is a common writing instrument that applies ink to a surface, usually paper, for writing or drawing.', 3, 1, 0),
(45, 'Wall Hanger', 45, 3.00, 'wall_hanger.jpg', 'A support of steel or cast iron, partially built into a wall for carrying the end of a structural timber, when the timber itself is not to be built into the wall.', 2, 1, 0),
(46, 'Flower Pot', 56, 8.00, 'gift1.jpg', 'A flower pot is a container in which flowers and other plants are grown. They are traditionally made from terracotta, but are now often also made from plastic, wood or stone. The flower pot is filled with soil and have a plant planted in them.', 2, 1, 0),
(47, 'Office chair', 150, 4.00, 'chair.jpg', 'a seat, especially for one person, usually having four legs for support and a rest for the back and often having rests for the arms. something that serves as a chair or supports like a chair: The two men clasped hands to make a chair for their injured companion. a seat of office or authority.', 4, 1, 0),
(48, 'Office Table', 230, 6.00, 'desk.jpg', 'desk, a table, frame, or case with a sloping or horizontal top particularly designed to aid writing or reading, and often containing drawers, compartments, or pigeonholes.', 4, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `company_id` tinyint(4) NOT NULL,
  `is_approved` tinyint(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email_id`, `password`, `company_id`, `is_approved`) VALUES
(-99, 'Guest', 'User', 'guest', '202cb962ac59075b964b07152d234b70', 1, 0),
(11, 'Jaise', 'Padinjarekalayil Jose', 'jaise97@gmail.com', 'd7419134cfb38517ace2a92371ea0535', 1, 1),
(13, 'Jacob', 'Roy', 'jacob@gmail.com', '2312648', 4, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `order_fk_user_id` (`user_id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`order_id`,`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_fk_category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email_id` (`email_id`),
  ADD KEY `user_fk_company_id` (`company_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `order_fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `product_fk_category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_fk_company_id` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
