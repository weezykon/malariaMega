-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2019 at 10:27 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slices`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'sliced_admin', 'a875b0070c23ec73ee56ac6a288a0bef');

-- --------------------------------------------------------

--
-- Table structure for table `cakes`
--

CREATE TABLE `cakes` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `banner` text,
  `start_price` int(255) DEFAULT NULL,
  `end_price` int(255) DEFAULT NULL,
  `daily_limit` bigint(5) DEFAULT NULL,
  `type` tinyint(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cakes`
--

INSERT INTO `cakes` (`id`, `name`, `description`, `banner`, `start_price`, `end_price`, `daily_limit`, `type`) VALUES
(1, 'Epic Chocolate', '', '/assets/images/side/side1.png', 1200, NULL, 30, 1),
(2, 'Coffee Caramel Vanilla', '', '/assets/images/side/side2.png', 1200, NULL, 5, 1),
(3, 'Red Velvet', '', '/assets/images/side/side3.png', 1200, NULL, 5, 1),
(4, 'Berry Vanilla', '', '/assets/images/side/side4.png', 1200, NULL, 5, 1),
(5, 'Fantastic Four', '', '/assets/images/side/side5.png', 1200, NULL, 5, 1),
(6, 'Chocoquad', '', '/assets/images/side/side6.png', 1200, NULL, 1, 1),
(7, 'Chococaramel', '', '/assets/images/side/side7.png', 1200, NULL, 5, 1),
(8, '6-inch Slice Combo Cake', '', NULL, NULL, NULL, NULL, 2),
(12, 'Mixed Box', '', NULL, NULL, NULL, NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `cakes_categories`
--

CREATE TABLE `cakes_categories` (
  `cakescategoriesid` int(11) NOT NULL,
  `cake_id` int(255) NOT NULL,
  `category_id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT '/assets/images/IMG_6435.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cakes_categories`
--

INSERT INTO `cakes_categories` (`cakescategoriesid`, `cake_id`, `category_id`, `image`) VALUES
(1, 1, 1, '/assets/images/IMG_6405.jpg'),
(2, 2, 1, '/assets/images/IMG_6434.jpg'),
(3, 3, 1, '/assets/images/IMG_6393.jpg'),
(4, 4, 1, '/assets/images/IMG_6407.jpg'),
(5, 5, 1, '/assets/images/IMG_6415.jpg'),
(6, 6, 1, '/assets/images/IMG_6435.jpg'),
(7, 7, 1, '/assets/images/IMG_6432.jpg'),
(8, 1, 2, '/assets/images/IMG_6396.jpg'),
(9, 2, 2, '/assets/images/IMG6000.jpeg'),
(10, 3, 2, '/assets/images/IMG_6391.jpg'),
(11, 4, 2, '/assets/images/IMG_6406.jpg'),
(12, 5, 2, '/assets/images/IMG_6411.jpg'),
(13, 6, 2, '/assets/images/IMG_6577.jpg'),
(14, 7, 2, '/assets/images/IMG_6418.jpg'),
(15, 8, 2, '/assets/images/Image.png'),
(16, 1, 3, '/assets/images/epicchocolate_cup.jpg'),
(17, 2, 3, '/assets/images/coffeecaramel_cup.jpg'),
(18, 3, 3, '/assets/images/redvelvet_cup.JPG'),
(19, 4, 3, '/assets/images/berryvanilla_cup.jpg'),
(20, 5, 3, '/assets/images/IMG_6435.jpg'),
(21, 6, 3, '/assets/images/IMG_6435.jpg'),
(22, 7, 3, '/assets/images/IMG_6437.JPG'),
(23, 12, 3, '/assets/images/cupslices_cat.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cake_extras`
--

CREATE TABLE `cake_extras` (
  `id` int(255) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `type` int(255) UNSIGNED NOT NULL,
  `category_id` int(255) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cake_extras`
--

INSERT INTO `cake_extras` (`id`, `name`, `type`, `category_id`) VALUES
(1, 'Toppings', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `cake_extra_items`
--

CREATE TABLE `cake_extra_items` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `price` int(255) UNSIGNED NOT NULL,
  `cake_extra_id` int(255) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cake_extra_items`
--

INSERT INTO `cake_extra_items` (`id`, `name`, `price`, `cake_extra_id`) VALUES
(1, 'Vanilla', 1000, 1),
(2, 'Chocolate Shavings', 3500, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(20) NOT NULL,
  `cakeid` int(11) NOT NULL,
  `categoryid` int(11) DEFAULT NULL,
  `quantity` bigint(11) NOT NULL,
  `ip` text NOT NULL,
  `variant` int(11) DEFAULT NULL,
  `toppings` varchar(60) DEFAULT NULL,
  `message` text NOT NULL,
  `message_content` text NOT NULL,
  `box_comment` text,
  `combo` tinyint(4) NOT NULL DEFAULT '0',
  `combo_cakes` text,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `cakeid`, `categoryid`, `quantity`, `ip`, `variant`, `toppings`, `message`, `message_content`, `box_comment`, `combo`, `combo_cakes`, `date`) VALUES
(26, 2, 3, 2, 'vbhp3qpmeb72t886mna6jrkqdf', 18, NULL, '', '', NULL, 0, NULL, '2018-10-12'),
(27, 7, 2, 1, 'que23gbvj20u76428hi3ttv2hh', 13, NULL, '', '', NULL, 0, NULL, '2018-10-12'),
(30, 1, 1, 2, '1jdaj64hcpf90n513korn330m6', NULL, NULL, '', '', NULL, 0, NULL, '2018-10-30'),
(31, 2, 1, 1, 'rrvruoj0sns4o8cnpfisvs0cc8', NULL, NULL, '', '', NULL, 0, NULL, '2018-10-25'),
(32, 3, 1, 1, 'tfrbj13nssq7snfm8304dsn3k4', NULL, NULL, '', '', NULL, 0, NULL, '2018-10-25'),
(34, 2, 2, 1, 'h1q38d5rg67qhcqca3nu99tbee', 1, '1', '0', '', NULL, 0, NULL, '2018-10-26'),
(35, 2, 2, 2, 'h1q38d5rg67qhcqca3nu99tbee', 2, '1', '0', '', NULL, 0, NULL, '2018-10-27'),
(36, 2, 2, 1, 'cl9u07f6bfm14suoqes4rdh8k4', 1, '1', '0', '', NULL, 0, NULL, '2018-10-26'),
(42, 2, 2, 2, 'uj881ju5soj7ttp9ioqh7u4l8d', 1, '1', '0', '', NULL, 0, NULL, '2018-10-23'),
(43, 1, 2, 1, 'rabsmg8bb0sij56mn7becenoof', 1, NULL, '0', '', NULL, 0, NULL, '1970-01-01'),
(44, 2, 1, 1, 'gju8hm4ft2u5fqun3ekep1rf3n', NULL, NULL, '', '', NULL, 0, NULL, '1970-01-01'),
(45, 1, 2, 2, 'gju8hm4ft2u5fqun3ekep1rf3n', 7, NULL, '0', '', NULL, 0, NULL, '1970-01-01'),
(46, 1, 1, 1, 'un7k51f8kaik9d8sfdd85m5bra', NULL, NULL, '', '', NULL, 0, NULL, '1970-01-01'),
(48, 8, 2, 1, 'afem9p8e4h3spddeg17kg0lk8t', 17, NULL, '0', '', NULL, 1, '3,5,4,2,1,4,5,7', '1970-01-01'),
(49, 2, 1, 1, 'e4vfe6cdj6s64riil0o3jkptbo', NULL, NULL, '', '', NULL, 0, NULL, '1970-01-01'),
(50, 2, 1, 1, 'kjj4jcdnpukls631ju5n0lrsll', NULL, NULL, '', '', NULL, 0, NULL, '1970-01-01'),
(51, 2, 1, 2, 'j082bajvocfktrmg2tsmacq8en', NULL, NULL, '', '', NULL, 0, NULL, '1970-01-01'),
(52, 2, 2, 1, '22cocam09edrq4nk0d2u87f7en', 1, NULL, '0', '', NULL, 0, NULL, '1970-01-01'),
(53, 1, 2, 1, 'm6q0vtsjulf22q4geiv2nfc7ra', 7, NULL, '0', '', NULL, 0, NULL, ''),
(54, 1, 2, 1, '9f3ahapjf819b6iea053tpm10t', 7, NULL, '0', '', NULL, 0, NULL, ''),
(55, 1, 3, 1, '9f3ahapjf819b6iea053tpm10t', 49, NULL, '0', '', NULL, 0, NULL, ''),
(56, 5, 2, 1, '9f3ahapjf819b6iea053tpm10t', 16, NULL, '1', 'weezykon is here', NULL, 0, NULL, ''),
(57, 1, 2, 1, '9iu2c09c6ul367n7mv38mf0o5g', 7, NULL, '0', '', NULL, 0, NULL, ''),
(58, 1, 3, 1, '9iu2c09c6ul367n7mv38mf0o5g', 49, NULL, '0', '', NULL, 0, NULL, ''),
(59, 5, 2, 1, '9iu2c09c6ul367n7mv38mf0o5g', 16, NULL, '1', 'weezykon is here', NULL, 0, NULL, ''),
(60, 1, 2, 1, '1iauekogtchobn1nttc7ipvvd1', 7, NULL, '0', '', NULL, 0, NULL, ''),
(61, 1, 3, 1, '1iauekogtchobn1nttc7ipvvd1', 49, NULL, '0', '', NULL, 0, NULL, ''),
(62, 5, 2, 1, '1iauekogtchobn1nttc7ipvvd1', 16, NULL, '1', 'weezykon is here', NULL, 0, NULL, ''),
(63, 1, 2, 1, 's0q2squq1hg3l31rsinpg8eae9', 7, NULL, '0', '', NULL, 0, NULL, ''),
(64, 1, 3, 1, 's0q2squq1hg3l31rsinpg8eae9', 49, NULL, '0', '', NULL, 0, NULL, ''),
(65, 5, 2, 1, 's0q2squq1hg3l31rsinpg8eae9', 16, NULL, '1', 'weezykon is here', NULL, 0, NULL, ''),
(66, 12, 3, 1, 'qoum80uc7vi785rbabd9sd2bgu', 53, NULL, '', '', 'Epic Choco', 0, NULL, '1970-01-01'),
(67, 12, 3, 1, 'ju4da2chlkbq2vimiblep174ma', 53, NULL, '0', '', 'Epic Choco', 0, NULL, ''),
(68, 12, 3, 1, '28kfu16j6khq6brr6a374lgdrk', 53, NULL, '0', '', 'Epic Choco', 0, NULL, ''),
(69, 12, 3, 1, 'l1ha55stj4cso6fo63mvbu8o08', 53, NULL, '0', '', 'Epic Choco', 0, NULL, ''),
(70, 12, 3, 1, 'nkif8n6gtgdua3rdubot4mr5hk', 53, NULL, '0', '', 'Epic Choco', 0, NULL, ''),
(71, 12, 3, 1, 'djlcvdosvisi4hqpve1n8jgcff', 53, NULL, '0', '', 'Epic Choco', 0, NULL, ''),
(72, 1, 3, 1, 'djlcvdosvisi4hqpve1n8jgcff', 50, NULL, '0', '', NULL, 0, NULL, ''),
(73, 8, 2, 1, '62k82h502f7s644tp29c8103jk', 17, NULL, '0', '', NULL, 1, '5,3,3,4,4,3,2,1', '1970-01-01'),
(79, 8, 2, 2, 'ajiea4i789jfvu1kdp7r2bp9jj', 17, NULL, '0', '', NULL, 1, '6,6,5,3,5,5,6,1', '1970-01-01'),
(80, 7, 1, 4, '1odudc9gvbhgv1k683gkr9h34t', NULL, NULL, '', '', NULL, 0, NULL, '1970-01-01'),
(81, 3, 1, 3, 'ktlt1q2gdli1hp767a17likchf', NULL, NULL, '', '', NULL, 0, NULL, '1970-01-01'),
(82, 4, 1, 1, 'ktlt1q2gdli1hp767a17likchf', NULL, NULL, '', '', NULL, 0, NULL, '1970-01-01'),
(83, 3, 1, 1, 'mjj2dtrq44t9vhr17vbjsmd9qp', NULL, NULL, '', '', NULL, 0, NULL, '1970-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `type` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `image` varchar(255) NOT NULL DEFAULT '/assets/images/IMG_6435.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `type`, `image`) VALUES
(1, 'Cake Slices', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, '/assets/images/slices_cat.jpg'),
(2, 'Whole Cake Slices', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2, '/assets/images/categories/wholecakeslices.jpg'),
(3, 'Slice Cups', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3, '/assets/images/categories/cupslices_cat.JPG'),
(4, 'Decandent Treats', 'ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, '/assets/images/IMG_6409.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `combo_cart`
--

CREATE TABLE `combo_cart` (
  `id` int(255) NOT NULL,
  `cake_id` int(255) NOT NULL,
  `category_id` int(255) NOT NULL,
  `cake` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `toppings` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `cou_id` int(11) NOT NULL,
  `cou_name` varchar(100) NOT NULL,
  `cou_price` double NOT NULL,
  `cou_active` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`cou_id`, `cou_name`, `cou_price`, `cou_active`) VALUES
(1, '1000', 0, 0),
(2, '1000', 0, 0),
(3, '1000', 0, 0),
(4, '1000', 0, 0),
(5, 'rtyuu', 2000, 0),
(6, 'tyyuu', 1000, 0),
(7, 'rtyuu', 1500, 0),
(8, 'MARCH', 1000, 1),
(9, 'ABUJA-2019', 3000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `delivery_address`
--

CREATE TABLE `delivery_address` (
  `deli_id` int(11) NOT NULL,
  `deli_name` varchar(200) NOT NULL,
  `deli_price` bigint(20) NOT NULL,
  `deli_type` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `delivery_address`
--

INSERT INTO `delivery_address` (`deli_id`, `deli_name`, `deli_price`, `deli_type`) VALUES
(1, 'Lagos', 3000, 1),
(2, 'Ogun State', 5000, 2),
(3, 'Abuja', 10000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `note`) VALUES
(1, 'Cake slice days are Tuesday , Thursday and Saturday. The Pre-Order window closes at 8am on each of these days , if you miss this window , please call us on 08173469477 for last minute slice availability.');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `text` text,
  `visible` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `text`, `visible`) VALUES
(2, '/uploads/IMG_6406.jpg', NULL, 1),
(3, '/uploads/IMG_6400.jpg', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `cakeid` int(11) NOT NULL,
  `description` text NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `second_address` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `phone_number` varchar(200) NOT NULL,
  `delivery_date` date NOT NULL,
  `quantity` bigint(5) NOT NULL DEFAULT '0',
  `discount` float DEFAULT NULL,
  `price` float NOT NULL,
  `payment_status` varchar(30) NOT NULL DEFAULT 'Not Paid',
  `reference` varchar(200) DEFAULT NULL,
  `pickup` varchar(200) DEFAULT NULL,
  `pickup_price` bigint(20) DEFAULT NULL,
  `combo` tinyint(4) NOT NULL DEFAULT '0',
  `combo_cakes` text NOT NULL,
  `message` text NOT NULL,
  `coupon` tinyint(5) NOT NULL,
  `coupon_discount` double NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('IN_PROGRESS','DELIVERED','CANCELLED') NOT NULL DEFAULT 'IN_PROGRESS',
  `visible` enum('active','deleted') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `cakeid`, `description`, `fullname`, `email`, `address`, `second_address`, `city`, `phone_number`, `delivery_date`, `quantity`, `discount`, `price`, `payment_status`, `reference`, `pickup`, `pickup_price`, `combo`, `combo_cakes`, `message`, `coupon`, `coupon_discount`, `date`, `status`, `visible`) VALUES
(1, 2, 'Coffee Caramel Vanilla -- 6inches(x4)', 'Akinbode', 'weezykon@gmail.com', '10 dont close.', '', 'Ikoyi', '08141160412', '2018-10-18', 0, NULL, 4800, 'Not Paid', '436697259', NULL, NULL, 0, '', '', 0, 0, '2018-10-31 15:42:31', 'DELIVERED', 'active'),
(2, 2, 'Coffee Caramel Vanilla(x1)', 'Akinbode', 'weezykon@gmail.com', '10 dont close.', '', 'Ikoyi', '08141160412', '2018-10-13', 0, NULL, 1200, 'Not Paid', '436697259', NULL, NULL, 0, '', '', 0, 0, '2018-10-31 15:43:59', 'DELIVERED', 'active'),
(3, 7, 'Chococaramel -- 2cups(x2)', 'akinbode', 'weezykon@gmail.com', '10 hmmm silly', '', 'Ikoyi', '08141160412', '2018-10-11', 0, NULL, 2400, 'Not Paid', '867728157', NULL, NULL, 0, '', '', 0, 0, '2018-10-31 15:44:32', 'DELIVERED', 'active'),
(4, 2, 'Coffee Caramel Vanilla -- 2cups(x1)', 'Akinbode Akinlolu', 'weezykon@gmail.com', '10 sun view', '', 'Ikoyi', '08141160412', '2018-10-10', 0, NULL, 1200, 'Not Paid', '612502699', NULL, NULL, 0, '', '', 0, 0, '2018-10-31 15:44:06', 'DELIVERED', 'active'),
(5, 1, 'Epic Chocolate -- 8inches(x1)', 'akinbode', 'weezykon@gmail.com', '12 sunfhguy', '', 'Ikoyi', '08141160412', '2018-10-12', 0, NULL, 19200000, 'Not Paid', '327053863', NULL, NULL, 0, '', '', 0, 0, '2018-10-31 18:36:46', 'DELIVERED', 'active'),
(6, 3, 'Berry Vanilla -- 2cups(x1)', 'Akinbode Akinlolu', 'weezykon@gmail.com', 'fjnrkfjkcejsel', '', 'Meke', '08141160412', '2018-10-11', 0, NULL, 2000, 'Not Paid', '674714845', NULL, NULL, 0, '', '', 0, 0, '2018-10-31 18:36:50', 'DELIVERED', 'active'),
(7, 3, 'Berry Vanilla -- 6inches(x2)', 'Mary', 'weezykon@gmail.com', 'fejrdgj', '', 'Ota', '08141160412', '2018-10-19', 0, NULL, 16000, 'Not Paid', '671981779', NULL, NULL, 0, '', '', 0, 0, '2018-10-31 18:36:54', 'DELIVERED', 'active'),
(8, 4, 'Berry Vanilla -- 6inches(x1)', 'Akinbode', 'weezykon@gmail.com', '', '', '', '08090090090', '0000-00-00', 0, NULL, 8000, 'Not Paid', '991223792', '', 0, 0, '', '', 0, 0, '2018-11-19 16:26:52', 'IN_PROGRESS', 'active'),
(9, 1, 'Epic Chocolate -- 6inches(x1)', 'Akinbode', 'weezykon@gmail.com', '20, sunday close', '', 'Abuja', '08090090090', '2018-11-24', 0, NULL, 8000, 'Not Paid', '370388735', '1', 3000, 0, '', '', 0, 0, '2018-11-19 16:55:52', 'IN_PROGRESS', 'active'),
(10, 1, 'Epic Chocolate(x1)', 'Akinbode', 'weezykon@gmail.com', '20, sunday close', '', 'Abuja', '08090090090', '2018-11-24', 0, NULL, 1200, 'Not Paid', '370388735', '1', 3000, 0, '', '', 0, 0, '2018-11-19 16:55:52', 'IN_PROGRESS', 'active'),
(11, 2, 'Coffee Caramel Vanilla(x4)', 'Akinbode', 'weezykon@gmail.com', '', '', '', '08090090090', '0000-00-00', 0, NULL, 4800, 'Not Paid', '978563070', '', 0, 0, '', '', 0, 0, '2018-11-19 17:06:43', 'IN_PROGRESS', 'active'),
(12, 4, 'Berry Vanilla(x2)', 'Akinbode', 'weezykon@gmail.com', '', '', '', '08090090090', '2018-11-24', 0, NULL, 0, 'Not Paid', '167274818', '', 0, 0, '', '', 0, 0, '2018-11-19 18:21:43', 'IN_PROGRESS', 'active'),
(13, 2, 'Coffee Caramel Vanilla(x2)', 'Akinbode', 'weezykon@gmail.com', '', '', '', '08090090090', '2018-11-24', 0, NULL, 0, 'Not Paid', '167274818', '', 0, 0, '', '', 0, 0, '2018-11-19 18:21:43', 'IN_PROGRESS', 'active'),
(14, 1, 'Epic Chocolate(x2)', 'Akinbode', 'weezykon@gmail.com', '', '', '', '08090090090', '2018-11-24', 0, NULL, 0, 'Not Paid', '167274818', '', 0, 0, '', '', 0, 0, '2018-11-19 18:21:44', 'IN_PROGRESS', 'active'),
(15, 6, 'Chocoquad(x2)', 'Akinbode', 'weezykon@gmail.com', '', '', '', '08090090090', '2018-11-29', 0, NULL, 2373.33, 'Not Paid', '854261551', '', 0, 0, '', '', 0, 0, '2018-11-29 10:50:31', 'DELIVERED', 'active'),
(16, 3, 'Red Velvet(x2)', 'Akinbode', 'weezykon@gmail.com', '', '', '', '08090090090', '2018-11-29', 0, NULL, 2373.33, 'Not Paid', '854261551', '', 0, 0, '', '', 0, 0, '2018-11-29 09:09:11', 'DELIVERED', 'active'),
(17, 1, 'Epic Chocolate(x2)', 'Akinbode', 'weezykon@gmail.com', '', '', '', '08090090090', '2018-11-29', 0, NULL, 2373.33, 'Not Paid', '854261551', '', 0, 0, '', '', 0, 0, '2018-11-29 10:50:31', 'DELIVERED', 'active'),
(18, 4, 'Berry Vanilla(x1)', 'weeeee', 'weezykon@gmail.com', 'edhbjd', '', 'fg', '08090090090', '2018-11-30', 0, NULL, 1200, 'Not Paid', '127571677', '2', 5000, 0, '', '', 0, 0, '2018-11-23 00:14:40', 'IN_PROGRESS', 'active'),
(19, 1, 'Epic Chocolate -- 6inches(x1)', 'weeeee', 'weezykon@gmail.com', 'edhbjd', '', 'fg', '08090090090', '2018-11-30', 0, NULL, 8000, 'Not Paid', '127571677', '2', 5000, 0, '', '', 0, 0, '2018-11-23 00:14:40', 'IN_PROGRESS', 'active'),
(20, 3, 'Red Velvet -- 6inches(x1)', 'wee', 'weezykon@gmail.com', 'fbfy', '', 'ff', '080990090090', '2018-11-24', 0, NULL, 8000, 'Not Paid', '349287353', '1', 3000, 0, '', '', 0, 0, '2018-11-23 00:22:11', 'IN_PROGRESS', 'active'),
(21, 3, 'Red Velvet(x1)', 'wee', 'weezykon@gmail.com', 'fbfy', '', 'ff', '080990090090', '2018-11-24', 0, NULL, 1200, 'Not Paid', '349287353', '1', 3000, 0, '', '', 0, 0, '2018-11-23 00:22:11', 'IN_PROGRESS', 'active'),
(22, 4, 'Berry Vanilla -- 6inches(x1)', 'weee', 'weezykon@gmail.com', 'ui', '', 'vvf', '080900', '2018-11-30', 0, NULL, 8000, 'Not Paid', '129891633', '2', 5000, 0, '', '', 0, 0, '2018-11-23 00:33:51', 'IN_PROGRESS', 'active'),
(23, 2, 'Coffee Caramel Vanilla(x1)', 'weee', 'weezykon@gmail.com', 'ui', '', 'vvf', '080900', '2018-11-30', 0, NULL, 1200, 'Not Paid', '129891633', '2', 5000, 0, '', '', 0, 0, '2018-11-23 00:33:52', 'IN_PROGRESS', 'active'),
(24, 3, 'Red Velvet -- 6inches(x1)', 'weezykon', 'weezykon@gmail.com', 'erty', '', 'we', '08090090090', '2018-11-30', 0, NULL, 8000, 'Not Paid', '676784813', '2', 5000, 0, '', '', 0, 0, '2019-02-20 16:15:36', 'IN_PROGRESS', 'deleted'),
(25, 1, 'Epic Chocolate(x1)', 'weezykon', 'weezykon@gmail.com', 'ert', '', 'er', '08090090090', '2018-11-24', 0, NULL, 1200, 'Not Paid', '676784813', '1', 3000, 0, '', '', 0, 0, '2019-02-20 16:15:36', 'IN_PROGRESS', 'deleted'),
(26, 4, 'Berry Vanilla -- 6inches(x1)', 'weezykon', 'weezykon@gmail.com', '', '', '', '08090090090', '2018-11-30', 0, NULL, 8000, 'Not Paid', '271695845', NULL, NULL, 0, '', '', 0, 0, '2018-11-23 08:15:00', 'IN_PROGRESS', 'active'),
(27, 1, 'Epic Chocolate(x1)', 'weezykon', 'weezykon@gmail.com', '', '', '', '08090090090', '2018-11-24', 0, NULL, 1200, 'Not Paid', '271695845', NULL, NULL, 0, '', '', 0, 0, '2018-11-23 08:15:00', 'IN_PROGRESS', 'active'),
(28, 1, 'Epic Chocolate(x1)', 'Akinbode', 'weezykon@gmail.com', 'qwer', '', 'thy', '08090090090', '2018-12-01', 0, NULL, 1200, 'Not Paid', '414127759', '1', 3000, 0, '', '', 0, 0, '2018-11-27 09:46:23', 'IN_PROGRESS', 'active'),
(29, 6, 'Chocoquad(x3)', 'Akinbode', 'weezykon@gmail.com', '', '', '', '08090090090', '2018-12-01', 0, NULL, 3560, 'Not Paid', '670730826', '', 0, 0, '', '', 0, 0, '2018-11-28 14:39:59', 'DELIVERED', 'active'),
(30, 1, 'Epic Chocolate(x3)', 'Akinbode', 'weezykon@gmail.com', '', '', '', '08090090090', '2018-12-01', 0, NULL, 3560, 'Not Paid', '670730826', '', 0, 0, '', '', 0, 0, '2018-11-28 14:39:53', 'DELIVERED', 'active'),
(31, 2, 'Coffee Caramel Vanilla(x1)', 'Akinbode Akinlolu', 'weezykon@gmail.com', '10 sunday close off sikiru alimi street, ogun', '', 'Ota', '08141160412', '2019-02-16', 1, 0, 1200, 'Not Paid', '454563034', '1', 3000, 0, '', '', 0, 0, '2019-02-05 16:34:01', 'IN_PROGRESS', 'active'),
(32, 4, 'Berry Vanilla(x1)', 'Akinbode Akinlolu', 'weezykon@gmail.com', '10 sunday close off sikiru alimi street, ogun', '', 'Ota', '8141160412', '2019-02-16', 1, 0, 1200, 'Not Paid', '831982205', '3', 10000, 0, '', '', 0, 0, '2019-02-06 10:32:14', 'DELIVERED', 'active'),
(33, 2, 'Coffee Caramel Vanilla(x3)', 'Akinbode Akinlolu', 'weezykon@gmail.com', '10 sunday close off sikiru alimi street, ogun', '', 'Ota', '8141160412', '2019-02-16', 3, 0, 3600, 'Paid', '854041135', '3', 10000, 0, '', '', 0, 0, '2019-02-20 22:34:57', 'IN_PROGRESS', 'active'),
(34, 1, 'Epic Chocolate -- 8box(x1)', 'Akinbode Akinlolu', 'weezykon@gmail.com', '', '', '', '8141160412', '2019-02-22', 1, 0, 8000, 'Not Paid', '466217157', '', 0, 0, '', '', 0, 0, '2019-02-20 22:34:04', 'IN_PROGRESS', 'deleted'),
(35, 1, 'Epic Chocolate(x1)', 'Akinbode Akinlolu', 'weezykon@gmail.com', '', '', '', '8141160412', '2019-03-02', 1, 0, 1200, 'Not Paid', '102314192', '', 0, 0, '', '', 0, 0, '2019-02-20 22:45:02', 'IN_PROGRESS', 'deleted'),
(36, 8, '6-inch Slice Combo Cake(x2)..[ Slices Combo:- Chocoquad,Chocoquad,Berry Vanilla,Red Velvet,Berry Vanilla,Berry Vanilla,Chocoquad,Berry Vanilla]', 'Akinbode Akinlolu', 'weezykon@gmail.com', '', '', '', '8141160412', '2019-02-28', 2, 0, 18000, 'Paid', '336160015', '', 0, 1, '6,6,4,3,4,4,6,4', '', 0, 0, '2019-02-21 21:26:40', 'IN_PROGRESS', 'active'),
(37, 6, 'Chocoquad(x4)', 'Test One', 'testmail@mail.com', '', '', '', '8096836736', '2019-03-28', 4, 80, 4720, 'Not Paid', '224251164', '', 0, 0, '', '', 0, 0, '2019-02-21 19:42:34', 'IN_PROGRESS', 'active'),
(38, 8, '6-inch Slice Combo Cake(x1)..[ Slices Combo:- Chocoquad,Chocoquad,Chococaramel,Chocoquad,Epic Chocolate,Epic Chocolate,Chococaramel,Chococaramel]', 'Test One', 'testmail@mail.com', '', '', '', '8096836736', '2019-04-27', 1, 0, 9000, 'Not Paid', '180712634', '', 0, 1, '6,6,7,6,1,1,7,7', '', 0, 0, '2019-02-21 19:44:03', 'IN_PROGRESS', 'active'),
(39, 6, 'Chocoquad(x5)', 'Test One', 'testmail@mail.com', '', '', '', '8096836736', '2019-04-27', 5, 80, 5920, 'Not Paid', '346044285', '', 0, 0, '', '', 0, 0, '2019-02-21 20:05:56', 'IN_PROGRESS', 'active'),
(40, 6, 'Chocoquad -- 6inches(x2)', 'Test One', 'testmail@mail.com', '', '', '', '8096836736', '2019-05-24', 2, 0, 16000, 'Not Paid', '604106478', '', 0, 0, '', '', 0, 0, '2019-02-27 17:05:07', 'IN_PROGRESS', 'active'),
(41, 6, 'Chocoquad(x1)', 'Test One', 'weezykon@gmail.com', '', '', '', '8096836736', '2019-04-25', 1, 0, 1200, 'Not Paid', '334715190', '', 0, 0, '', '', 0, 0, '2019-02-27 17:08:38', 'IN_PROGRESS', 'active'),
(42, 8, '6-inch Slice Combo Cake(x1)..[ Slices Combo:- Fantastic Four,Fantastic Four,Red Velvet,Red Velvet,Chococaramel,Coffee Caramel Vanilla,Epic Chocolate,Epic Chocolate]', 'Akinbode Akinlolu', 'weezykon@gmail.com', '', '', '', '8141160412', '2019-03-07', 1, 0, 9000, 'Not Paid', '851297064', '', 0, 1, '5,5,3,3,7,2,1,1', '', 0, 0, '2019-03-06 14:30:53', 'IN_PROGRESS', 'active'),
(43, 4, 'Berry Vanilla(x1)', 'Akinbode Akinlolu', 'weezykon@gmail.com', '', '', '', '8141160412', '2019-03-30', 1, 0, 1200, 'Not Paid', '73285737', '', 0, 0, '', '', 8, 1000, '2019-03-22 14:42:52', 'IN_PROGRESS', 'active'),
(44, 4, 'Berry Vanilla(x1)', 'Akinbode Akinlolu', 'weezykon@gmail.com', '', '', '', '8141160412', '2019-03-30', 1, 0, 1200, 'Paid', '332720749', '', 0, 0, '', '', 8, 1000, '2019-03-22 15:21:10', 'IN_PROGRESS', 'active'),
(45, 2, 'Coffee Caramel Vanilla(x1)', 'Akinbode Akinlolu', 'weezykon@gmail.com', '', '', '', '8141160412', '2019-03-30', 1, 0, 1200, 'Paid', '995361852', '', 0, 0, '', '', 0, 0, '2019-03-23 19:16:15', 'IN_PROGRESS', 'active'),
(46, 3, 'Red Velvet(x1)', 'Akinbode Akinlolu', 'weezykon@gmail.com', '', '', '', '8141160412', '2019-03-30', 1, 0, 1200, 'Paid', '331647878', '', 0, 0, '', '', 0, 0, '2019-03-23 19:22:16', 'IN_PROGRESS', 'active'),
(47, 8, '6-inch Slice Combo Cake(x1)..[ Slices Combo:- Red Velvet,Red Velvet,Fantastic Four,Coffee Caramel Vanilla,Berry Vanilla,Chococaramel,Fantastic Four,Chococaramel]', 'Akinbode Akinlolu', 'weezykon@gmail.com', '', '', '', '8141160412', '2019-04-18', 1, 0, 9000, 'Not Paid', '182053324', '', 0, 1, '3,3,5,2,4,7,5,7', '', 0, 0, '2019-04-16 07:41:40', 'IN_PROGRESS', 'active'),
(48, 3, 'Red Velvet -- 6inches(x1)', 'Akinbode Akinlolu', 'weezykon@gmail.com', '', '', '', '8141160412', '2019-04-18', 1, 0, 10000, 'Not Paid', '182053324', '', 0, 1, '3,3,5,2,4,7,5,7', '', 0, 0, '2019-04-16 07:41:40', 'IN_PROGRESS', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `variants`
--

CREATE TABLE `variants` (
  `id` int(11) NOT NULL,
  `type` enum('inches','box','mixed-box') NOT NULL,
  `cakeid` int(11) DEFAULT NULL,
  `categoryid` int(11) NOT NULL,
  `variant` varchar(20) NOT NULL,
  `price` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `variants`
--

INSERT INTO `variants` (`id`, `type`, `cakeid`, `categoryid`, `variant`, `price`) VALUES
(1, 'inches', 2, 2, '6', 8000),
(2, 'inches', 2, 2, '8', 16000),
(3, 'inches', 2, 2, '10', 24000),
(4, 'inches', 3, 2, '6', 8000),
(5, 'inches', 3, 2, '10', 24000),
(6, 'inches', 3, 2, '8', 16000),
(7, 'inches', 1, 2, '6', 8000),
(8, 'inches', 1, 2, '8', 16000),
(9, 'inches', 1, 2, '10', 24000),
(10, 'inches', 6, 2, '6', 8000),
(11, 'inches', 6, 2, '8', 16000),
(12, 'inches', 6, 2, '10', 24000),
(13, 'inches', 7, 2, '6', 8000),
(14, 'inches', 7, 2, '8', 16000),
(15, 'inches', 7, 2, '10', 24000),
(16, 'inches', 5, 2, '6', 8000),
(17, 'inches', 8, 2, '6', 9000),
(46, 'inches', 4, 2, '6', 8000),
(47, 'inches', 4, 2, '8', 16000),
(48, 'inches', 4, 2, '12', 24000),
(49, 'box', NULL, 3, '8', 8000),
(50, 'box', NULL, 3, '20', 19800),
(51, 'box', NULL, 3, '40', 39000),
(53, 'mixed-box', NULL, 3, '8', 8400),
(54, 'mixed-box', NULL, 3, '20', 20000),
(55, 'mixed-box', NULL, 3, '40', 40000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cakes`
--
ALTER TABLE `cakes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cakes_categories`
--
ALTER TABLE `cakes_categories`
  ADD PRIMARY KEY (`cakescategoriesid`);

--
-- Indexes for table `cake_extras`
--
ALTER TABLE `cake_extras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cake_extra_items`
--
ALTER TABLE `cake_extra_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `combo_cart`
--
ALTER TABLE `combo_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`cou_id`);

--
-- Indexes for table `delivery_address`
--
ALTER TABLE `delivery_address`
  ADD PRIMARY KEY (`deli_id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `variants`
--
ALTER TABLE `variants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cakes`
--
ALTER TABLE `cakes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cakes_categories`
--
ALTER TABLE `cakes_categories`
  MODIFY `cakescategoriesid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `cake_extras`
--
ALTER TABLE `cake_extras`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cake_extra_items`
--
ALTER TABLE `cake_extra_items`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `combo_cart`
--
ALTER TABLE `combo_cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `cou_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `delivery_address`
--
ALTER TABLE `delivery_address`
  MODIFY `deli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `variants`
--
ALTER TABLE `variants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
