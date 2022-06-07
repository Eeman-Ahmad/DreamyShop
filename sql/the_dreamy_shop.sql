-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 03:10 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the_dreamy_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `role`, `image`, `status`, `added_on`) VALUES
(2, 'ahmed boss', 'ahmed@bingo.com', 'AAA', 1, '40237_885517.jpg', 1, '2022-05-27 12:13:05');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `status`, `added_on`) VALUES
(1, 'Laptops', 1, '2022-05-27 10:38:32'),
(2, 'Mobiles', 1, '2022-05-27 10:38:36'),
(3, 'Headphones', 1, '2022-05-27 10:38:38'),
(4, 'Speakers', 1, '2022-05-27 10:38:40'),
(5, 'watch', 1, '2022-05-27 10:38:44'),
(6, 'Glasses', 1, '2022-05-27 10:38:47'),
(7, 'Jewelery', 1, '2022-05-27 10:38:49');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `full_name`, `email`, `subject`, `message`) VALUES
(1, 'Shehroz Hussain', 'mrshehrozhussain@gmail.com', 'aasa', 'left you'),
(2, 'Shehroz Hussain', 'mrshehrozhussain@gmail.com', 'aasa', 'left you'),
(3, 'Shehroz Hussain', 'mrshehrozhussain@gmail.com', 'aasa', 'left you'),
(4, 'Shehroz Hussain', 'mrshehrozhussain@gmail.com', 'aasa', 'left you');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `mrp` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `website` text NOT NULL,
  `description` text NOT NULL,
  `short_description` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_name`, `price`, `mrp`, `qty`, `image`, `rating`, `link`, `website`, `description`, `short_description`, `status`, `added_on`) VALUES
(1, 1, 'Acer', '35000', '40000', '5', '34743_7189iXimfWL._AC_SX679_.jpg', '4', 'Tags ', 'aaa', 'aaaaaaaaa', 'Acer Aspire 5 A515-46-R3UB | 15.6&quot; Full HD IPS Display | AMD Ryzen 3 3350U Quad-Core Mobile Processor | 4GB DDR4 | 128GB NVMe SSD | WiFi 6 | Backlit KB | FPR | Amazon Alexa | Windows 11 Home in S mode', 1, '2022-05-27 10:39:09'),
(2, 7, 'nike', '1555', '155', '5', '74570_1988880_car_front_vehicle_icon.png', '1', 'https://www.amazon.com/Acer-A515-46-R3UB-Display-Quad-Core-Processor/dp/B09HVC79PC/ref=sr_1_1?crid=1M6LK2Q77XHLU&amp;keywords=laptop&amp;qid=1653646430&amp;sprefix=lap%2Cspecialty-aps%2C318&amp;sr=8-1&amp;th=1', 'Amazon', ' afs af afa fsafa fasf sf a', ' afs af afa fsafa fasf sf a', 1, '2022-05-27 11:06:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
