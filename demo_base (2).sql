-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2020 at 05:26 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_base`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_order`
--

CREATE TABLE `book_order` (
  `id` int(11) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `price` varchar(255) DEFAULT '0',
  `mobile` varchar(10) NOT NULL,
  `status` int(1) DEFAULT 0 COMMENT '3 : DELETE & Always Status be 1',
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_order`
--

INSERT INTO `book_order` (`id`, `first_name`, `last_name`, `email`, `price`, `mobile`, `status`, `product_id`, `category_id`, `created_on`) VALUES
(1, 'prerna', 'dubey', 'prerna@gmail.com', '0', '2147483647', 1, 10, 1, '2020-06-18 15:36:54'),
(2, 'abhishek', 'dubey', 'abhidubey1166@gmail.com', '0', '2147483647', 3, 0, 0, '2020-06-18 19:02:13'),
(3, 'gunjan', 'manghanani', 'gunjan@tewstech.com', '0', '2147483647', 3, 0, 0, '2020-06-18 19:13:30'),
(9, 'kaushal', 'mehra', 'sie@tws.com', '0', '2147483647', 3, 0, 0, '2020-06-18 20:07:38'),
(10, 'ELON', 'MUSK', 'ELON@TWS.COM', '0', '9874563218', 1, 0, 0, '2020-06-18 20:13:31'),
(11, 'MARK', 'ZUCKERBARG', 'MARK@TWS.COM', '0', '4572369852', 1, 0, 0, '2020-06-18 20:17:12'),
(12, 'ram', 'lakhan', 'ram@tws.com', '0', '9658741256', 1, 0, 0, '2020-06-18 20:19:31'),
(14, 'surya', 'teja', 'surya@gmail.com', '0', '7458123698', 1, 0, 6, '2020-06-18 20:23:14'),
(15, 'pp', 'jain', 'p.pp@tws.com', '0', '7458123659', 1, 11, 6, '2020-06-18 20:34:28'),
(18, 'dhannalal', 'jain', 'dd@dd.com', NULL, '4215785698', 1, 11, 6, '2020-06-18 20:40:57'),
(20, 'nidhi', 'wadhwa kasat', 'nidi@tws.com', '25000', '7458963215', 1, 11, 6, '2020-06-18 20:43:21');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `post_type` enum('product','property','event','post') DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `icon` varchar(50) NOT NULL,
  `created_by` bigint(20) DEFAULT 1,
  `created_date` timestamp NULL DEFAULT current_timestamp(),
  `modified_by` bigint(20) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `post_type`, `slug`, `parent_id`, `image`, `icon`, `created_by`, `created_date`, `modified_by`, `modified_date`, `status`) VALUES
(4, 'brands', 'product', 'brands', 0, 'http://localhost/zofa/uploads/category/ce95861265a4d65825ec1324d503e27b.jpg', 'armchair', 1, '2020-06-12 06:49:47', 1, '2020-06-19 13:01:47', 1),
(5, 'office', 'product', 'office', 0, NULL, 'office', 1, '2020-06-12 07:57:57', 1, '2020-06-19 13:01:56', 1),
(6, 'outdoor', 'product', 'outdoor', 0, '', 'bar-set', 1, '2020-06-12 07:59:35', 1, '2020-06-19 13:02:02', 1),
(7, 'bedroom', 'product', 'bedroom', 0, '', 'bedroom', 1, '2020-06-12 07:59:56', 1, '2020-06-19 13:02:06', 1),
(8, 'dining', 'product', 'dining', 0, '', 'dining-table', 1, '2020-06-12 08:00:40', 1, '2020-06-19 13:02:10', 1),
(9, 'sofa', 'product', 'sofa', 0, '', 'sofa', 1, '2020-06-12 08:00:50', 1, '2020-06-19 13:02:14', 1),
(10, 'bathroom', 'product', 'bathroom', 0, '', 'bathroom', 1, '2020-06-19 13:27:48', 1, '2020-06-19 13:47:58', 3),
(11, 'wardrob', 'product', 'wardrob', 0, '', 'Wardrobe', 1, '2020-06-19 13:28:51', 1, '2020-06-19 13:48:09', 3),
(12, 'media stortage', 'product', 'media-stortage', 0, '', 'media-cabinet', 1, '2020-06-19 13:29:39', 1, '2020-06-19 13:48:15', 3),
(13, 'night stand', 'product', 'night-stand', 0, '', 'nightstand', 1, '2020-06-19 13:30:02', 1, '2020-06-19 13:48:20', 3),
(14, 'kitchen', 'product', 'kitchen', 0, '', 'kitchen', 1, '2020-06-19 13:30:24', 1, '2020-06-19 13:48:27', 3),
(15, 'bookcase', 'product', 'bookcase', 0, '', 'bookcase', 1, '2020-06-19 13:30:49', 1, '2020-06-19 13:48:30', 3),
(16, 'children room', 'product', 'children-room', 0, '', 'children-room', 1, '2020-06-19 13:31:02', 1, '2020-06-19 13:48:40', 3),
(17, 'lightning', 'product', 'lightning', 0, '', 'Lightning', 1, '2020-06-19 13:31:27', 1, '2020-06-19 13:48:43', 3),
(18, 'varpet', 'product', 'varpet', 0, '', 'Varpet', 1, '2020-06-19 13:31:37', 1, '2020-06-19 13:48:45', 3),
(19, 'accesories', 'product', 'accesories', 0, '', 'Accessories', 1, '2020-06-19 13:31:50', 1, '2020-06-19 13:48:48', 3),
(20, 'barset', 'product', 'barset', 0, '', 'bar-set', 1, '2020-06-19 13:36:43', 1, '2020-06-19 13:48:57', 3),
(21, 'tables', 'product', 'tables', 0, '', 'table', 1, '2020-06-19 13:41:41', 1, '2020-06-19 13:49:01', 3),
(22, 'blog', 'post', 'blog', 0, '', '', 1, '2020-06-19 14:58:12', 1, '2020-06-19 15:23:14', 3);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `post_id` bigint(20) DEFAULT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` tinyint(2) DEFAULT 0,
  `created_by` bigint(20) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_by` bigint(20) DEFAULT NULL,
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `filters`
--

CREATE TABLE `filters` (
  `id` bigint(20) NOT NULL,
  `filter_title` varchar(255) DEFAULT NULL,
  `post_type` enum('property','product','event') DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `type` int(1) NOT NULL DEFAULT 0 COMMENT '0 : Single | 1: Multiple',
  `auto_add` int(1) NOT NULL DEFAULT 0 COMMENT '0: false | 1 : Auto Add True',
  `status` int(1) NOT NULL DEFAULT 0,
  `created_by` bigint(20) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT current_timestamp(),
  `modified_by` bigint(20) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `filters`
--

INSERT INTO `filters` (`id`, `filter_title`, `post_type`, `slug`, `image`, `type`, `auto_add`, `status`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 'projects', 'property', 'projects', NULL, 0, 1, 1, 1, '2020-02-25 01:23:41', 1, '2020-03-10 16:41:57'),
(2, 'property type', 'property', 'property-type', NULL, 0, 1, 1, 1, '2020-02-25 01:27:04', 1, '2020-03-19 18:28:09'),
(3, 'no of beadrooms', 'property', 'no-of-beadrooms', NULL, 0, 1, 1, 1, '2020-02-25 01:27:23', 1, '2020-03-19 18:28:17'),
(4, 'locality', 'property', 'locality', NULL, 0, 1, 1, 1, '2020-02-25 01:27:48', 1, '2020-03-10 16:42:10'),
(5, 'amenities', 'property', 'amenities', NULL, 1, 1, 1, 1, '2020-02-25 01:28:50', 1, '2020-03-10 16:42:14'),
(6, 'manufacturer', 'product', 'manufacturer', NULL, 0, 1, 1, 1, '2020-06-12 11:56:02', 1, '2020-06-13 09:28:27'),
(7, 'material', 'product', 'material', NULL, 0, 1, 1, 1, '2020-06-12 11:56:17', 1, '2020-06-13 09:28:19'),
(8, 'avalability', 'product', 'avalability', NULL, 0, 1, 1, 1, '2020-06-12 11:56:37', 1, '2020-06-13 09:28:13'),
(9, 'color', 'product', 'color', NULL, 0, 1, 1, 1, '2020-06-12 11:56:56', 1, '2020-06-13 09:28:04'),
(10, 'size', 'product', 'size', NULL, 0, 1, 1, 1, '2020-06-12 11:57:05', 1, '2020-06-13 09:27:58'),
(11, 'shape', 'product', 'shape', NULL, 0, 1, 1, 1, '2020-06-12 11:57:17', 1, '2020-06-13 09:24:50');

-- --------------------------------------------------------

--
-- Table structure for table `filter_product_category_relations`
--

CREATE TABLE `filter_product_category_relations` (
  `id` bigint(20) NOT NULL,
  `key_id` bigint(20) DEFAULT NULL,
  `value_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `category_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `filter_product_category_relations`
--

INSERT INTO `filter_product_category_relations` (`id`, `key_id`, `value_id`, `product_id`, `category_id`) VALUES
(1, 1, 33, 1, 2),
(2, 2, 27, 1, 2),
(3, 3, 2, 1, 2),
(4, 4, 34, 1, 2),
(5, 5, 4, 1, 2),
(6, 5, 5, 1, 2),
(7, 5, 8, 1, 2),
(8, 5, 35, 1, 2),
(9, 5, 36, 1, 2),
(10, 5, 37, 1, 2),
(11, 5, 38, 1, 2),
(12, 5, 39, 1, 2),
(13, 5, 40, 1, 2),
(14, 5, 41, 1, 2),
(20, 1, 9, 2, 2),
(21, 2, 27, 2, 2),
(22, 3, 10, 2, 2),
(23, 4, 11, 2, 2),
(24, 5, 5, 2, 2),
(30, 1, 1, 3, 2),
(31, 2, 27, 3, 2),
(32, 3, 10, 3, 2),
(33, 4, 11, 3, 2),
(34, 5, 5, 3, 2),
(79, 6, 45, 6, 6),
(80, 7, 50, 6, 6),
(81, 8, 5, 6, 6),
(82, 9, 53, 6, 6),
(83, 10, 48, 6, 6),
(84, 11, 54, 6, 6),
(127, 6, 45, 8, 9),
(128, 7, 50, 8, 9),
(129, 9, 53, 8, 9),
(130, 10, 48, 8, 9),
(131, 11, 54, 8, 9),
(132, 6, 45, 7, 5),
(133, 7, 50, 7, 5),
(134, 9, 55, 7, 5),
(135, 10, 48, 7, 5),
(136, 11, 56, 7, 5),
(137, 6, 45, 4, 9),
(138, 7, 46, 4, 9),
(139, 9, 55, 4, 9),
(140, 10, 48, 4, 9),
(141, 11, 49, 4, 9),
(142, 6, 45, 5, 7),
(143, 7, 50, 5, 7),
(144, 9, 51, 5, 7),
(145, 10, 48, 5, 7),
(146, 11, 52, 5, 7),
(147, 6, 45, 9, 9),
(148, 7, 46, 9, 9),
(149, 8, 3, 9, 9),
(150, 9, 51, 9, 9),
(151, 10, 48, 9, 9),
(152, 11, 52, 9, 9),
(159, 6, 45, 11, 6),
(160, 7, 50, 11, 6),
(161, 8, 5, 11, 6),
(162, 9, 58, 11, 6),
(163, 10, 48, 11, 6),
(164, 11, 52, 11, 6),
(165, 6, 45, 12, 9),
(166, 7, 50, 12, 9),
(167, 8, 5, 12, 9),
(168, 9, 53, 12, 9),
(169, 10, 48, 12, 9),
(170, 11, 52, 12, 9),
(177, 6, 45, 13, 8),
(178, 7, 50, 13, 8),
(179, 9, 47, 13, 8),
(180, 10, 48, 13, 8),
(181, 11, 52, 13, 8),
(182, 6, 45, 14, 8),
(183, 7, 50, 14, 8),
(184, 8, 5, 14, 8),
(185, 9, 57, 14, 8),
(186, 10, 48, 14, 8),
(187, 11, 52, 14, 8),
(188, 6, 45, 15, 7),
(189, 8, 5, 15, 7),
(190, 9, 47, 15, 7),
(191, 10, 48, 15, 7),
(192, 11, 52, 15, 7),
(199, 6, 45, 16, 7),
(200, 7, 50, 16, 7),
(201, 9, 51, 16, 7),
(202, 10, 48, 16, 7),
(203, 11, 52, 16, 7),
(204, 6, 45, 10, 9),
(205, 7, 50, 10, 9),
(206, 9, 57, 10, 9),
(207, 10, 48, 10, 9),
(208, 11, 52, 10, 9),
(209, 6, 45, 17, 7),
(210, 8, 5, 17, 7),
(211, 9, 47, 17, 7),
(212, 10, 48, 17, 7),
(213, 11, 52, 17, 7),
(214, 6, 45, 18, 6),
(215, 7, 46, 18, 6),
(216, 8, 5, 18, 6),
(217, 9, 59, 18, 6),
(218, 10, 48, 18, 6),
(219, 11, 60, 18, 6),
(220, 6, 45, 19, 6),
(221, 7, 50, 19, 6),
(222, 8, 5, 19, 6),
(223, 9, 55, 19, 6),
(224, 10, 48, 19, 6),
(225, 11, 60, 19, 6),
(226, 6, 45, 20, 6),
(227, 7, 50, 20, 6),
(228, 8, 5, 20, 6),
(229, 9, 59, 20, 6),
(230, 10, 48, 20, 6),
(231, 11, 60, 20, 6),
(238, 6, 45, 21, 5),
(239, 7, 46, 21, 5),
(240, 9, 53, 21, 5),
(241, 10, 48, 21, 5),
(242, 11, 52, 21, 5),
(243, 6, 45, 22, 5),
(244, 7, 50, 22, 5),
(245, 8, 6, 22, 5),
(246, 9, 53, 22, 5),
(247, 10, 48, 22, 5),
(248, 11, 52, 22, 5),
(249, 6, 45, 23, 5),
(250, 8, 5, 23, 5),
(251, 9, 53, 23, 5),
(252, 10, 48, 23, 5),
(253, 11, 52, 23, 5),
(254, 6, 45, 24, 4),
(255, 7, 50, 24, 4),
(256, 8, 5, 24, 4),
(257, 9, 51, 24, 4),
(258, 10, 48, 24, 4),
(259, 11, 52, 24, 4),
(260, 6, 45, 25, 4),
(261, 8, 5, 25, 4),
(262, 9, 47, 25, 4),
(263, 10, 48, 25, 4),
(264, 11, 52, 25, 4),
(265, 6, 45, 26, 4),
(266, 7, 50, 26, 4),
(267, 8, 5, 26, 4),
(268, 9, 57, 26, 4),
(269, 10, 48, 26, 4),
(270, 11, 60, 26, 4);

-- --------------------------------------------------------

--
-- Table structure for table `filter_values`
--

CREATE TABLE `filter_values` (
  `id` bigint(20) NOT NULL,
  `filter_key_id` bigint(20) DEFAULT NULL,
  `filter_value_title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` int(1) DEFAULT 0,
  `created_by` bigint(20) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT current_timestamp(),
  `modified_by` bigint(20) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `filter_values`
--

INSERT INTO `filter_values` (`id`, `filter_key_id`, `filter_value_title`, `slug`, `image`, `description`, `status`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 1, 'Govind Villa', 'govindvilla', NULL, NULL, 1, 1, '2020-02-25 01:43:42', 1, '2020-02-25 01:43:42'),
(2, 3, '1BHK', '1bhk', NULL, NULL, 1, 1, '2020-02-25 01:43:42', 1, '2020-02-25 01:43:42'),
(3, 4, 'Mahaveer Nager', 'mahaveernager', NULL, NULL, 1, 1, '2020-02-25 01:43:42', 1, '2020-02-25 01:43:42'),
(4, 5, 'Parking', 'parking', NULL, NULL, 1, 1, '2020-02-25 01:43:42', 1, '2020-02-25 01:43:42'),
(5, 5, 'Gym', 'gym', NULL, NULL, 1, 1, '2020-02-25 01:43:42', 1, '2020-02-25 01:43:42'),
(6, 1, 'Pukhraj', 'pukhraj', NULL, NULL, 1, 1, '2020-02-25 06:44:16', 1, '2020-02-25 06:44:16'),
(7, 2, 'Apartment', 'apartment', NULL, NULL, 1, 1, '2020-02-25 06:44:16', 1, '2020-02-25 06:44:16'),
(8, 5, 'Swimming Pool', 'swimmingpool', NULL, NULL, 1, 1, '2020-02-25 06:44:17', 1, '2020-02-25 06:44:17'),
(9, 1, 'Demo Project', 'demoproject', NULL, NULL, 1, 1, '2020-02-25 10:32:49', 1, '2020-02-25 10:32:49'),
(10, 3, '2BHK', '2bhk', NULL, NULL, 1, 1, '2020-02-25 10:32:49', 1, '2020-02-25 10:32:49'),
(11, 4, 'Dadabari', 'dadabari', NULL, NULL, 1, 1, '2020-02-25 10:32:49', 1, '2020-02-25 10:32:49'),
(12, 1, 'pukhra new', 'pukhra-new', NULL, NULL, 3, 1, '2020-02-27 06:10:09', 1, '2020-03-21 22:29:38'),
(13, 1, 'BENCHMARK TOWNSHIP', 'benchmarktownship', NULL, NULL, 1, 1, '2020-02-27 07:13:02', 1, '2020-02-27 07:13:02'),
(14, 3, '3BHK', '3bhk', NULL, NULL, 1, 1, '2020-02-27 07:13:02', 1, '2020-02-27 07:13:02'),
(26, 7, 'Electronic Fan', 'electronicfan', NULL, NULL, 1, 1, '2020-03-11 14:13:32', 1, '2020-03-11 14:13:32'),
(27, 2, 'Flat', 'flat', NULL, NULL, 1, 1, '2020-03-17 20:32:33', 1, '2020-03-17 20:32:33'),
(28, 1, 'Residential land in Jodhpur', 'residentiallandinjodhpur', NULL, NULL, 1, 1, '2020-03-17 20:52:05', 1, '2020-03-17 20:52:05'),
(29, 1, 'jaipur project', 'jaipurproject', NULL, NULL, 1, 1, '2020-03-17 21:04:39', 1, '2020-03-17 21:04:39'),
(30, 1, 'House for Sale in Jodhpur', 'houseforsaleinjodhpur', NULL, NULL, 1, 1, '2020-03-17 21:08:23', 1, '2020-03-17 21:08:23'),
(31, 2, 'houses', 'houses', NULL, NULL, 1, 1, '2020-03-17 21:08:24', 1, '2020-03-17 21:08:24'),
(32, 4, 'VIgyan Nagar', 'vigyannagar', NULL, NULL, 1, 1, '2020-03-17 21:16:20', 1, '2020-03-17 21:16:20'),
(33, 1, 'pukhraj element', 'pukhraj-element', NULL, NULL, 1, 1, '2020-03-18 18:42:04', 1, '2020-03-21 22:20:55'),
(34, 4, 'Jhawar Nagar', 'jhawarnagar', NULL, NULL, 1, 1, '2020-03-18 18:42:05', 1, '2020-03-18 18:42:05'),
(35, 5, 'Guest rooms', 'guestrooms', NULL, NULL, 1, 1, '2020-03-18 18:42:05', 1, '2020-03-18 18:42:05'),
(36, 5, 'community hall', 'communityhall', NULL, NULL, 1, 1, '2020-03-18 18:42:05', 1, '2020-03-18 18:42:05'),
(37, 5, 'Indoor Threatre', 'indoorthreatre', NULL, NULL, 1, 1, '2020-03-18 18:42:05', 1, '2020-03-18 18:42:05'),
(38, 5, 'Drivers Dormatory', 'driversdormatory', NULL, NULL, 1, 1, '2020-03-18 18:42:05', 1, '2020-03-18 18:42:05'),
(39, 5, 'Landscaping', 'landscaping', NULL, NULL, 1, 1, '2020-03-18 18:42:06', 1, '2020-03-18 18:42:06'),
(40, 5, 'Reception Lobby', 'receptionlobby', NULL, NULL, 1, 1, '2020-03-18 18:42:06', 1, '2020-03-18 18:42:06'),
(41, 5, 'security Guard 24X7 with cctv survellience', 'securityguard24x7withcctvsurvellience', NULL, NULL, 1, 1, '2020-03-18 18:42:07', 1, '2020-03-18 18:42:07'),
(42, 1, 'smaya groups inc', 'smaya-groups-inc', 'https://base.dev/uploads/filter/8af8378cd8f4a143d742771868a85f06.jpg', NULL, 1, 1, '2020-03-21 00:04:22', 1, '2020-03-21 23:15:26'),
(43, 3, '4BHK', '4bhk', NULL, NULL, 1, 1, '2020-03-21 00:04:22', 1, '2020-03-21 00:04:22'),
(44, 4, 'Gumanpura', 'gumanpura', NULL, NULL, 1, 1, '2020-03-21 00:04:22', 1, '2020-03-21 00:04:22'),
(45, 6, 'zofa', 'zofa', NULL, NULL, 1, 1, '2020-06-13 09:33:10', 1, '2020-06-13 09:33:10'),
(46, 7, 'demo', 'demo', NULL, NULL, 1, 1, '2020-06-13 09:33:10', 1, '2020-06-13 09:33:10'),
(47, 9, 'green', 'green', NULL, NULL, 1, 1, '2020-06-13 09:33:10', 1, '2020-06-13 09:33:10'),
(48, 10, 's,m,l,xl,xxl', 'smlxlxxl', NULL, NULL, 1, 1, '2020-06-13 09:33:11', 1, '2020-06-13 09:33:11'),
(49, 11, 'linear', 'linear', NULL, NULL, 1, 1, '2020-06-13 09:33:11', 1, '2020-06-13 09:33:11'),
(50, 7, 'wood', 'wood', NULL, NULL, 1, 1, '2020-06-15 06:50:49', 1, '2020-06-15 06:50:49'),
(51, 9, 'grey', 'grey', NULL, NULL, 1, 1, '2020-06-15 06:50:49', 1, '2020-06-15 06:50:49'),
(52, 11, 'rectangle', 'rectangle', NULL, NULL, 1, 1, '2020-06-15 06:50:49', 1, '2020-06-15 06:50:49'),
(53, 9, 'brown', 'brown', NULL, NULL, 1, 1, '2020-06-15 07:03:50', 1, '2020-06-15 07:03:50'),
(54, 11, 'chair', 'chair', NULL, NULL, 1, 1, '2020-06-15 07:03:50', 1, '2020-06-15 07:03:50'),
(55, 9, 'white', 'white', NULL, NULL, 1, 1, '2020-06-15 07:13:48', 1, '2020-06-15 07:13:48'),
(56, 11, 'round', 'round', NULL, NULL, 1, 1, '2020-06-15 07:13:48', 1, '2020-06-15 07:13:48'),
(57, 9, 'Red', 'red', NULL, NULL, 1, 1, '2020-06-16 05:40:44', 1, '2020-06-16 05:40:44'),
(58, 9, 'red', 'red', NULL, NULL, 1, 1, '2020-06-17 06:17:36', 1, '2020-06-17 06:17:36'),
(59, 9, 'white', 'white', NULL, NULL, 1, 1, '2020-06-19 14:16:22', 1, '2020-06-19 14:16:22'),
(60, 11, 'circular', 'circular', NULL, NULL, 1, 1, '2020-06-19 14:16:22', 1, '2020-06-19 14:16:22');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) NOT NULL,
  `image` text DEFAULT NULL,
  `img_group` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `created_by` bigint(20) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_by` bigint(20) DEFAULT NULL,
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `img_group`, `status`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 'http://localhost/zofa/uploads/gallery/44bb76db76817331c0bd849607309bc2.jpg', 'home_page', 3, 2, '2020-04-11 05:04:28', 1, '2020-06-12 10:26:47'),
(2, 'http://localhost/zofa/uploads/gallery/6f152238d60c69644216112441b89cb4.jpg', 'home_page', 3, 2, '2020-04-11 05:05:03', 1, '2020-06-12 10:26:42'),
(3, 'http://localhost/zofa/uploads/gallery/f2d3d33e32044eaf1622e678fadae5ae.jpg', 'home_page', 1, 2, '2020-04-11 05:05:42', 1, '2020-06-12 09:32:25'),
(4, 'http://localhost/zofa/uploads/gallery/0fc7d453c885d34f79bb7c61f5fb9648.jpg', 'home_page', 1, 2, '2020-04-11 05:05:42', 1, '2020-06-12 09:32:25'),
(5, 'http://localhost/zofa/uploads/gallery/e36523deb5e3446ea2c5af74afa327d4.jpg', 'home_page', 1, 1, '2020-06-12 08:46:28', 1, '2020-06-12 09:29:02'),
(6, 'http://localhost/zofa/uploads/gallery/b85f46dab5e1181826e0811fed3540b5.jpg', 'home_page', 1, 1, '2020-06-12 08:46:55', 1, '2020-06-12 09:29:02'),
(7, 'http://localhost/zofa/uploads/gallery/de92124154cc495c0c5b17b70e778c85.jpg', 'home_page', 1, 1, '2020-06-12 08:47:49', 1, '2020-06-12 09:29:02'),
(8, 'http://localhost/zofa/uploads/gallery/e4562d0531daffecec7353d5cb0d42cb.jpg', 'home_page', 1, 1, '2020-06-12 08:48:38', 1, '2020-06-12 09:29:02');

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_bin NOT NULL,
  `mobile` varchar(10) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `requirement` bigint(20) NOT NULL COMMENT 'Product_ID | Category_ID',
  `comment` longtext COLLATE utf8_bin NOT NULL,
  `followup_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(2) NOT NULL DEFAULT 0 COMMENT '0 - New | 11 - Not Interested | 12 - Interested | 13 - Convened | 14 - Not Convened | 3 - Delete  ',
  `created_by` bigint(20) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_by` bigint(20) NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Manage Site''s Leads';

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) NOT NULL,
  `order_group_id` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `coupon_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `product_quantity` varchar(255) DEFAULT NULL,
  `total_discount` float(10,2) DEFAULT 0.00 COMMENT 'Total Offer & Discountable Price',
  `total_addition` float(10,2) DEFAULT 0.00 COMMENT 'Total Tax & Other Addable Price',
  `total_amount` float(10,2) DEFAULT 0.00 COMMENT 'Total Product Price',
  `total_paid` float(10,2) DEFAULT 0.00 COMMENT 'Calculated Price, To Be Paid ',
  `product_received_date` timestamp NULL DEFAULT NULL,
  `remark` text DEFAULT NULL,
  `payment_mode` enum('online','cod') DEFAULT NULL,
  `payment_status` tinyint(2) DEFAULT 0 COMMENT '0: Unpaid | 1: Paid | 2: Return',
  `delivery_status` tinyint(2) DEFAULT 0 COMMENT '0: New | 1: Delivered | 2: Processing | 3: Cancel | 4: Return',
  `status` int(2) DEFAULT 1 COMMENT '3 : DELETE & Always Status be 1',
  `transaction_id` varchar(255) DEFAULT NULL,
  `transaction_msg` varchar(255) DEFAULT NULL,
  `user_ip` varchar(255) DEFAULT NULL,
  `web_token_id` varchar(255) DEFAULT NULL,
  `app_token_id` varchar(255) DEFAULT NULL,
  `device_type` varchar(255) DEFAULT NULL,
  `browser` varchar(255) DEFAULT NULL,
  `browser_version` varchar(255) DEFAULT NULL,
  `os` varchar(255) DEFAULT NULL,
  `mobile_device` varchar(255) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT current_timestamp(),
  `modified_by` bigint(20) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_group_id`, `user_id`, `coupon_id`, `product_id`, `product_quantity`, `total_discount`, `total_addition`, `total_amount`, `total_paid`, `product_received_date`, `remark`, `payment_mode`, `payment_status`, `delivery_status`, `status`, `transaction_id`, `transaction_msg`, `user_ip`, `web_token_id`, `app_token_id`, `device_type`, `browser`, `browser_version`, `os`, `mobile_device`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 'ODR16892357', 0, NULL, 5, '1', 0.00, 0.00, 50000.00, 50000.00, NULL, 'dfdf', 'online', 1, 0, 1, '4001c2bb6dc503a009cd1ac2e18fd4f9', 'backend', '::1', NULL, NULL, 'web', 'Chrome', '83.0.4103.97', 'Windows 10', '', 1, '2020-06-17 11:33:53', 1, '2020-06-17 11:33:53'),
(2, 'ODR16892357', 0, NULL, 9, '1', 0.00, 0.00, 55000.00, 55000.00, NULL, 'dfdf', 'online', 1, 0, 1, '7edb2df780023541933e47b15664a751', 'backend', '::1', NULL, NULL, 'web', 'Chrome', '83.0.4103.97', 'Windows 10', '', 1, '2020-06-17 11:33:53', 1, '2020-06-17 11:33:53');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) NOT NULL,
  `category_id` bigint(20) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `post_type` varchar(150) NOT NULL,
  `post_image` text DEFAULT NULL,
  `status` tinyint(2) DEFAULT 0,
  `is_pinned` tinyint(1) DEFAULT 0,
  `created_by` bigint(20) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_by` bigint(20) DEFAULT NULL,
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `slug`, `title`, `description`, `post_type`, `post_image`, `status`, `is_pinned`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 0, 'current-scenario-of-housing-sector-1', 'Current Scenario of Housing Sector', '<p>The real estate sector is driven by three major factors. Government , judiciary and customers. Recently introduced reforms like the G.S.T, Real estate regulation and development (RERA) &amp; the Benani Transactions (Prohibition) Amendment Act. Have str', 'blog', 'http://localhost/zofain/uploads/Post/26b8ce8e6667ec3c454be511d72a6170.jpg', 1, 1, 1, '2020-03-26 03:42:14', 1, '2020-06-13 06:33:12'),
(2, NULL, 'erwghqwef', 'ERWGHqwef', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a&', 'interior design', 'http://localhost/zofain/uploads/Post/5495845b43a7d6fce2a4cd1e480bc664.jpg', 1, NULL, 1, '2020-06-04 12:49:00', 1, '2020-06-12 14:21:08'),
(3, NULL, 'dada', 'dada', '<p>come to me</p>\r\n', 'interior design', 'http://localhost/zofa/uploads/Post/93a491ab09335e5a0277e197158c2f78.jpg', 1, NULL, 1, '2020-06-12 14:30:51', 1, '2020-06-12 14:30:51'),
(4, NULL, 'drawing-sofa', 'drawing sofa', '<p>here it is</p>\r\n', 'interior design', 'http://localhost/zofa/uploads/Post/04e27ce0b84616993f08b87a3c80a76b.jpg', 1, 1, 1, '2020-06-13 05:22:16', 1, '2020-06-13 05:22:16');

-- --------------------------------------------------------

--
-- Table structure for table `post_reactions`
--

CREATE TABLE `post_reactions` (
  `id` bigint(20) NOT NULL,
  `user_ip` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `object_id` bigint(20) DEFAULT NULL,
  `object_type` varchar(255) DEFAULT NULL,
  `reaction_type` varchar(255) DEFAULT NULL,
  `status` tinyint(2) DEFAULT 0,
  `created_by` bigint(20) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_by` bigint(20) DEFAULT NULL,
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `post_type` enum('product','property','event') DEFAULT NULL,
  `category_id` bigint(20) DEFAULT NULL,
  `extra_id` varchar(255) NOT NULL COMMENT 'Raraid',
  `slug` varchar(255) DEFAULT NULL,
  `srt_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `regular_price` varchar(255) DEFAULT '0' COMMENT 'Mn Price',
  `sell_price` varchar(255) DEFAULT '0' COMMENT 'Max Price',
  `image` longtext DEFAULT NULL,
  `stock_quantity` varchar(255) DEFAULT NULL,
  `stock_status` int(1) DEFAULT 0 COMMENT '1 : Stockable | 0 : Not Stockable ',
  `on_deal` int(1) DEFAULT 0 COMMENT 'Hot Deals',
  `is_featured` int(1) DEFAULT 0,
  `extra_field` text DEFAULT NULL COMMENT 'Size of Property',
  `extra_field_1` varchar(255) DEFAULT NULL COMMENT 'Proplive for City',
  `extra_date` datetime DEFAULT NULL COMMENT 'Passation Date',
  `avg_rate` varchar(5) DEFAULT '0',
  `rating_count` varchar(20) DEFAULT '0',
  `total_sale` varchar(20) DEFAULT '0',
  `offers` text DEFAULT NULL COMMENT 'Additional Offer Text',
  `status` int(2) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_by` bigint(20) DEFAULT NULL,
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `post_type`, `category_id`, `extra_id`, `slug`, `srt_description`, `description`, `regular_price`, `sell_price`, `image`, `stock_quantity`, `stock_status`, `on_deal`, `is_featured`, `extra_field`, `extra_field_1`, `extra_date`, `avg_rate`, `rating_count`, `total_sale`, `offers`, `status`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 'Ready to Move New Studio Flats /1BHK Flats', 'property', 9, 'RAJ/P/2017/510', 'ready-to-move-new-studio-flats-1bhk-flats', 'Ready to possession New Studio Flats For Buy at Adjoining Allen sammunat ', 'sjdkfh sd hsdf sdf ksdf dg sdjghsagjkdsf asdkj hdsf jh kedhsfkjahsdkfajkdsfhjashd ajsdvdsfv xdv', '2100000', '2100000', 'http://proplive.in/uploads/property/7a9defe8c3324201245a6732003c935f.png@http://proplive.in/uploads/property/35f259ab6cb40f85fde2ad365659e209.jpg', NULL, 0, 1, 1, '435 Sq.Ft.', 'kota', '2020-03-23 03:06:02', '0', '0', '0', '', 1, 2, '2020-03-23 04:06:02', 2, '2020-06-19 09:16:09'),
(2, 'Demo', 'property', 9, '', 'demo', 's SDsdf', ' sdf sf sfsdf', 'on-request', 'on-request', '<p>The filetype you are attempting to upload is not allowed.</p>@<p>The filetype you are attempting to upload is not allowed.</p><p>The filetype you are attempting to upload is not allowed.</p>@<p>The filetype you are attempting to upload is not allowed.</p><p>The filetype you are attempting to upload is not allowed.</p><p>The filetype you are attempting to upload is not allowed.</p>', NULL, 0, 0, 1, '1bhk', 'kota', '2020-04-21 12:47:27', '5', '34', '0', '2 Gold Coin', 1, 1, '2020-04-20 08:03:31', 2, '2020-06-19 09:16:09'),
(3, 'Demo Requester', 'property', 9, '', 'demo-requester', ' vbcb', 'dxfgfdgfgd', '520000', '520000', 'https://base.dev/uploads/property/e763c69dd48e53eecc91f14fe54d89b1.jpg@https://base.dev/uploads/property/3ac30cbffc64d614b5ad1161848978bd.jpg@https://base.dev/uploads/property/4b37090dee1f5a6af519c39f8f7d79c4.jpg@https://base.dev/uploads/property/0f460f83016539dd05e3ad816a76467f.jpg', NULL, 0, 0, 0, '1bhk', 'kota', '2020-05-02 01:24:02', '5', '235', '0', '', 1, 1, '2020-05-02 02:14:44', 1, '2020-06-19 09:16:09'),
(4, 'sofa', 'product', 9, '', 'sofa', 'sofa', 'sofa', '20000', '90000', 'http://localhost/zofa/uploads/product/b3c2c3ac67f622c6f6a71efb6ee9ff22.jpg', NULL, 0, 0, 0, NULL, NULL, NULL, '0', '0', '0', 'sofa', 1, 1, '2020-06-13 09:33:10', 1, '2020-06-15 07:26:48'),
(5, 'Bed', 'product', 9, '', 'bed', 'Comfortable for every member', 'right choice', '25000', '50000', 'http://localhost/zofa/uploads/product/451de03d107f8739041f4ff8ac592d14.jpg', NULL, 0, 0, 0, NULL, NULL, NULL, '0', '0', '0', '', 1, 1, '2020-06-15 06:50:49', 1, '2020-06-19 09:16:09'),
(6, 'Garden Chair Set', 'product', 9, '', 'garden-chair-set', 'enjoy your morning on your garden chair', 'enjoy your morning on your garden chair', '25000', '50000', 'http://localhost/zofa/uploads/product/5f0690e79403b7bfda78e10c5daf83fb.jpg', NULL, 0, 0, 0, NULL, NULL, NULL, '0', '0', '0', '', 3, 1, '2020-06-15 07:03:50', 1, '2020-06-19 09:16:09'),
(7, 'Study Table', 'product', 9, '', 'study-table', 'study here', 'study here', '12000', '25000', 'http://localhost/zofa/uploads/product/1a2818cfb063c0690d95e1d601a3eba3.png', NULL, 0, 0, 0, NULL, NULL, NULL, '0', '0', '0', '', 3, 1, '2020-06-15 07:13:47', 1, '2020-06-19 09:16:09'),
(8, 'demo', 'product', 9, '', 'demo-1', 'sss', 'ssss', '2000', '25000', 'http://localhost/zofa/uploads/product/9eabab55070ee885b8c7da9e4c90666e.jpg', NULL, 0, 0, 0, NULL, NULL, NULL, '0', '0', '0', '', 3, 1, '2020-06-15 07:16:06', 1, '2020-06-15 07:26:04'),
(9, 'pro', 'product', 9, '', 'pro', 'Comfortable for every member', 'sqsd', '20000', '55000', 'http://localhost/zofa/uploads/product/db3b9a79c6ddfea95b9f98d94425de76.png', NULL, 0, 0, 0, NULL, NULL, NULL, '0', '0', '0', '', 1, 1, '2020-06-15 07:45:01', 1, '2020-06-15 07:45:01'),
(10, 'Red Sofa', 'product', 9, '', 'red-sofa', 'Comfortable for every member', 'Perfect sofa for us.', '20000', '50000', 'http://localhost/zofa/uploads/product/85ef5537805c365eb294c3d3fda91327.png', NULL, 0, 0, 0, NULL, NULL, NULL, '0', '0', '0', '', 1, 1, '2020-06-16 05:40:43', 1, '2020-06-19 14:09:50'),
(11, 'lounge', 'product', 8, '', 'lounge', 'nice lounge', 'another product from zofa', '25000', '30000', 'http://localhost/zofa/uploads/product/3bad1098da6a4d710b958d9796b18f4b.png', NULL, 0, 0, 0, NULL, NULL, NULL, '0', '0', '0', '', 1, 1, '2020-06-17 06:17:36', 1, '2020-06-19 09:27:42'),
(12, 'laura', 'product', 9, '', 'laura', 'Comfortable for every member', 'must be innovative', '25000', '55000', 'http://localhost/zofa/uploads/product/fac6a8d0ffa8e8f3ab34c94cc26b018c.png', NULL, 0, 0, 0, NULL, NULL, NULL, '0', '0', '0', '', 1, 1, '2020-06-19 08:50:14', 1, '2020-06-19 08:50:14'),
(13, 'dining table', 'product', 8, '', 'dining-table', 'table for dining room', 'perfect table for perfact family', '22000', '25000', 'http://localhost/zofa/uploads/product/d9677b127a88f8abc9215bcb3d091d70.png', NULL, 0, 0, 0, NULL, NULL, NULL, '0', '0', '0', '', 1, 1, '2020-06-19 09:49:07', 1, '2020-06-19 09:49:41'),
(14, 'ddinh', 'product', 8, '', 'ddinh', 'Comfortable for every member', 'ugfi', '22000', '55000', 'http://localhost/zofa/uploads/product/26d062f3f1b460afd6269e502c4a7592.png', NULL, 0, 0, 0, NULL, NULL, NULL, '0', '0', '0', '', 1, 1, '2020-06-19 09:50:46', 1, '2020-06-19 09:50:46'),
(15, 'demo bed', 'product', 7, '', 'demo-bed', 'Comfortable for every member', 'demo tag', '25000', '20000', 'http://localhost/zofa/uploads/product/b9c1ccb360a03d342a7699406ce0b799.jpg', NULL, 0, 0, 0, NULL, NULL, NULL, '0', '0', '0', '', 1, 1, '2020-06-19 14:07:17', 1, '2020-06-19 14:07:17'),
(16, 'demo1 bed', 'product', 7, '', 'demo1-bed', 'Comfortable for every member', 'dd', '25000', '20000', 'http://localhost/zofa/uploads/product/40d8797560f119c523411d002d85eedf.jpg', NULL, 0, 0, 0, NULL, NULL, NULL, '0', '0', '0', '', 1, 1, '2020-06-19 14:08:37', 1, '2020-06-19 14:09:18'),
(17, 'demo2 bed', 'product', 7, '', 'demo2-bed', 'Comfortable for every member', 'dd', '25000', '20000', 'http://localhost/zofa/uploads/product/bccbe6673d49413b0fcd05bf48e399c7.jpg', NULL, 0, 0, 0, NULL, NULL, NULL, '0', '0', '0', '', 1, 1, '2020-06-19 14:10:56', 1, '2020-06-19 14:10:56'),
(18, 'outdoor1', 'product', 6, '', 'outdoor1', 'Comfortable for every member', 'outdoor1', '25000', '20000', 'http://localhost/zofa/uploads/product/9279f7841daf5beab8208dafdf5cf1d8.jpg', NULL, 0, 0, 0, NULL, NULL, NULL, '0', '0', '0', '', 1, 1, '2020-06-19 14:16:22', 1, '2020-06-19 14:16:22'),
(19, 'outdoor2', 'product', 6, '', 'outdoor2', 'Comfortable for every member', 'outdoor1', '25000', '20000', 'http://localhost/zofa/uploads/product/9663e7db4813a6032d22df59a8369b03.jpg', NULL, 0, 0, 0, NULL, NULL, NULL, '0', '0', '0', '', 1, 1, '2020-06-19 14:17:32', 1, '2020-06-19 14:17:32'),
(20, 'outdoor3', 'product', 6, '', 'outdoor3', 'Comfortable for every member', 'outdoor\r\n', '25000', '22000', 'http://localhost/zofa/uploads/product/6ea2fc180151792cf83f4576e323eb87.jpg', NULL, 0, 0, 0, NULL, NULL, NULL, '0', '0', '0', '', 1, 1, '2020-06-19 14:18:27', 1, '2020-06-19 14:18:27'),
(21, 'office1', 'product', 5, '', 'office1', 'Comfortable for every member', 'office1', '55000', '50000', 'http://localhost/zofa/uploads/product/5ffa042703cae9820ee10ae827a37010.jpg', NULL, 0, 0, 0, NULL, NULL, NULL, '0', '0', '0', '', 1, 1, '2020-06-19 14:25:08', 1, '2020-06-19 14:27:35'),
(22, 'office2', 'product', 5, '', 'office2', 'Comfortable for every member', 'office2', '20000', '15000', 'http://localhost/zofa/uploads/product/b15ed785a7f22cbc6bf4d1051bcc06d3.jpg', NULL, 0, 0, 0, NULL, NULL, NULL, '0', '0', '0', '', 1, 1, '2020-06-19 14:28:35', 1, '2020-06-19 14:28:35'),
(23, 'office3', 'product', 5, '', 'office3', 'Comfortable for every member', 'office3', '5000', '20000', 'http://localhost/zofa/uploads/product/61d4d615f0f63a1b4adc0f32b235fb21.jpg', NULL, 0, 0, 0, NULL, NULL, NULL, '0', '0', '0', '', 1, 1, '2020-06-19 14:29:30', 1, '2020-06-19 14:29:30'),
(24, 'brand1', 'product', 4, '', 'brand1', 'Comfortable for every member', 'brand1', '56000', '50000', 'http://localhost/zofa/uploads/product/50341a4c086cea58623c123d08b975da.jpg', NULL, 0, 0, 0, NULL, NULL, NULL, '0', '0', '0', '', 1, 1, '2020-06-19 14:33:16', 1, '2020-06-19 14:33:16'),
(25, 'brand2', 'product', 4, '', 'brand2', 'Comfortable for every member', 'brand2', '55000', '52000', 'http://localhost/zofa/uploads/product/ee2d810864d51cc359c2294c0bae7cdf.jpg', NULL, 0, 0, 0, NULL, NULL, NULL, '0', '0', '0', '', 1, 1, '2020-06-19 14:34:19', 1, '2020-06-19 14:34:19'),
(26, 'brand3', 'product', 4, '', 'brand3', 'Comfortable for every member', 'brand3', '52000', '22000', 'http://localhost/zofa/uploads/product/71223be30893ffc7da738e7c70abef23.jpg', NULL, 0, 0, 0, NULL, NULL, NULL, '0', '0', '0', '', 1, 1, '2020-06-19 14:35:22', 1, '2020-06-19 14:35:22');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) NOT NULL,
  `option_key` varchar(255) NOT NULL,
  `option_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `option_key`, `option_value`) VALUES
(1, 'site_logo', 'http://localhost/zofa/uploads/setting/589f8cd903fa4e98b9bde7c723d09df4.png'),
(2, 'site_favicon', 'http://localhost/zofa/uploads/setting/55734d127f94d5ca44d48fe4b6615009.png'),
(3, 'site_name', 'ZOFA FURNITURE'),
(4, 'site_mobile', '9606640023 '),
(5, 'site_mail', 'info@zofa.in'),
(6, 'site_address', '325 shopping center kota rajasthan'),
(7, 'site_map', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28890.894837242424!2d75.83309491270234!3d25.157256765610402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396f9b2bed2d783f%3A0x45924946eefc1493!2sAgarwal%20Furniture!5e0!3m2!1sen!2sin!4v159153679'),
(8, 'contact_us_response', ''),
(9, 'social_facebook', 'https://github.com'),
(10, 'social_instagram', 'https://www.instagram.com/zofafurniture/'),
(11, 'social_twitter', 'https://twitter.com/'),
(12, 'social_linkedin', 'https://twitter.com/'),
(13, 'social_youtube', 'https://www.youtube.com/channel/UCNZREzSpzp6ImQb-RrqXSWw');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `redirect_link` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_by` bigint(20) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_by` bigint(20) DEFAULT NULL,
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `redirect_link`, `location`, `status`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 'Third slide', 'Third slide', 'http://localhost/zofa/uploads/slider/98140a4f1b82ef863b5c948a7ad2df98.jpg', 'First Slide', NULL, 1, 2, '2020-03-23 03:47:11', 1, '2020-06-19 11:40:45'),
(2, 'fourth slide', 'Its Living room', 'http://localhost/zofa/uploads/slider/9650802070ab3d0633bdc1017705d503.jpg', 'Living room', NULL, 1, 2, '2020-03-23 03:52:55', 1, '2020-06-19 11:40:02'),
(3, 'second slide', 'second slide', 'http://localhost/zofa/uploads/slider/5656a03bc013fa7ed94d91262e254f82.jpg', '', NULL, 1, 1, '2020-06-19 11:39:26', 1, '2020-06-19 11:39:26'),
(4, 'first slide', 'first slide', 'http://localhost/zofa/uploads/slider/fa91b76679a5bae736221c3d32a4e164.jpg', 'first slide', NULL, 1, 1, '2020-06-19 11:41:27', 1, '2020-06-19 11:41:49');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_by` bigint(20) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_by` bigint(20) DEFAULT NULL,
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `comment`, `rating`, `image`, `status`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 'Krishna', 'SF sdfg fdg dfg dfgdfg fg nhfgsgjnbj dfshjjksh jhj h jkh fejkshjkdhsef v hukjsefh jkhjkdv hbjdfhj dhvjkdfh jklhgdr jkh lgrhu ifzcxvhjxcvzjdx hjdkxfh jkzsdhf jkshdf jk shjkdshfv jkdhfg kjszhfg kjhszgkd', '5', 'https://base.dev/uploads/testimonial/e7614979d8f438c98fa92d66c7b74ac7.jpeg', 1, 2, '2020-03-28 01:23:31', 2, '2020-03-28 01:23:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_ip` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `requirement` text DEFAULT NULL,
  `comment` longtext DEFAULT NULL,
  `lead_from` varchar(255) DEFAULT NULL,
  `followup_date` timestamp NULL DEFAULT NULL,
  `is_pinned` int(1) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `about` text DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0 COMMENT '0 - New | 1 - Approve | 2 -  Pending | 3 - Delete | 4 - Block',
  `parent_id` bigint(20) DEFAULT NULL,
  `email_verified` varchar(255) DEFAULT NULL COMMENT 'Store Verification Code or True',
  `mobile_verified` varchar(255) DEFAULT NULL COMMENT 'Store Verification Code or True',
  `google_id` varchar(255) DEFAULT NULL,
  `fb_id` varchar(255) DEFAULT NULL,
  `address_id` bigint(20) DEFAULT NULL,
  `ref_id` bigint(20) DEFAULT NULL,
  `pincode` varchar(6) DEFAULT NULL,
  `user_type` enum('ADMIN','SUBSCRIBER') NOT NULL DEFAULT 'SUBSCRIBER',
  `role_id` bigint(20) DEFAULT 0 COMMENT '0 for Subscriber',
  `web_token_id` varchar(255) DEFAULT NULL,
  `app_token_id` varchar(255) DEFAULT NULL,
  `last_login_device` varchar(255) DEFAULT NULL,
  `device_type` varchar(255) DEFAULT NULL,
  `browser` varchar(255) DEFAULT NULL,
  `browser_version` varchar(255) DEFAULT NULL,
  `os` varchar(255) DEFAULT NULL,
  `mobile_device` varchar(255) DEFAULT NULL,
  `last_login_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` bigint(20) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_by` bigint(20) DEFAULT NULL,
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_ip`, `username`, `slug`, `email`, `mobile`, `password`, `first_name`, `last_name`, `profile_pic`, `requirement`, `comment`, `lead_from`, `followup_date`, `is_pinned`, `dob`, `about`, `gender`, `status`, `parent_id`, `email_verified`, `mobile_verified`, `google_id`, `fb_id`, `address_id`, `ref_id`, `pincode`, `user_type`, `role_id`, `web_token_id`, `app_token_id`, `last_login_device`, `device_type`, `browser`, `browser_version`, `os`, `mobile_device`, `last_login_date`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, '127.0.0.1', 'admin', 'admin', 'admin@gmail.com', '7014569040', 'b08df3f15e8b003eff1c1574592f3c215515db1f', 'Krishna', 'gujjjar', 'https://base.dev/uploads/users/821d7d4610b3b3e4df7835e725a53c3e.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ADMIN', 1, NULL, NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'web', 'Chrome', '79.0.3945.130', 'Windows 10', '', '2020-02-17 23:50:45', 0, '2020-02-17 23:50:45', 0, '2020-03-23 03:42:14'),
(2, '127.0.0.1', 'admin_1', 'admin_1', 'admin@proplive.com', '7532954154', 'b08df3f15e8b003eff1c1574592f3c215515db1f', 'ajeet', 'rathore', 'https://base.dev/uploads/users/c011387646cce8929050f12fdaac501a.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '1', '1', NULL, NULL, NULL, NULL, NULL, 'ADMIN', 2, NULL, NULL, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', 'web', 'Chrome', '80.0.3987.149', 'Mac OS X', '', '2020-03-22 00:00:50', 1, '2020-03-22 00:00:50', 1, '2020-03-23 03:42:09'),
(3, '::1', 'sdsa', 'sdsa', 'sdsa@gmail.com', NULL, NULL, 'dfgdf', NULL, NULL, 'sdfsdfs', 'dfsdfsd', 'contact-us', NULL, NULL, NULL, NULL, NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SUBSCRIBER', 0, NULL, NULL, 'Mozilla/5.0 (iPhone; CPU iPhone OS 10_3_1 like Mac OS X) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/10.0 Mobile/14E304 Safari/602.1', 'mobile', 'Safari', '602.1', 'iOS', 'Apple iPhone', '2020-03-26 02:17:57', NULL, '2020-03-26 02:17:57', NULL, '2020-03-26 02:17:57'),
(4, '::1', 'admin_1', 'admin_1', 'admin@asd.com', '7014569040', NULL, 'demo', NULL, NULL, 'Get Call Back', NULL, 'Get A CallBack Popup', NULL, NULL, NULL, NULL, NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SUBSCRIBER', 0, NULL, NULL, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', 'web', 'Chrome', '80.0.3987.149', 'Mac OS X', '', '2020-03-26 08:12:19', NULL, '2020-03-26 08:12:19', NULL, '2020-03-26 08:12:19'),
(5, '::1', 'krishnagujjjar', 'krishnagujjjar', 'krishnagujjjar@gmail.com', '7014569040', NULL, 'krishna', NULL, NULL, 'Get Call Back', NULL, 'Get A CallBack Popup', NULL, NULL, NULL, NULL, NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SUBSCRIBER', 0, NULL, NULL, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', 'web', 'Chrome', '80.0.3987.149', 'Mac OS X', '', '2020-03-28 01:34:54', NULL, '2020-03-28 01:34:54', NULL, '2020-03-28 01:34:54'),
(6, '::1', 'krishnagujjjar_1', 'krishnagujjjar_1', 'krishnagujjjar@gmail.com', '7014569040', NULL, 'krishna', NULL, NULL, 'Get Call Back', NULL, 'Get A CallBack Popup', NULL, NULL, NULL, NULL, NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SUBSCRIBER', 0, NULL, NULL, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', 'web', 'Chrome', '80.0.3987.149', 'Mac OS X', '', '2020-03-28 01:45:18', NULL, '2020-03-28 01:45:18', NULL, '2020-03-28 01:45:18'),
(7, '::1', 'krishnagujjjar_1', 'krishnagujjjar_1', 'krishnagujjjar@gmail.com', '7014569040', NULL, 'krishna', NULL, NULL, 'Get Call Back', NULL, 'Get A CallBack Popup', NULL, NULL, NULL, NULL, NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SUBSCRIBER', 0, NULL, NULL, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', 'web', 'Chrome', '80.0.3987.149', 'Mac OS X', '', '2020-03-28 01:51:49', NULL, '2020-03-28 01:51:49', NULL, '2020-03-28 01:51:49'),
(8, '::1', 'krishnagujjjar_1', 'krishnagujjjar_1', 'krishnagujjjar@gmail.com', '7014569040', NULL, 'krishna', NULL, NULL, 'Get Call Back', NULL, 'Get A CallBack Popup', NULL, NULL, NULL, NULL, NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SUBSCRIBER', 0, NULL, NULL, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', 'web', 'Chrome', '80.0.3987.149', 'Mac OS X', '', '2020-03-28 01:52:50', NULL, '2020-03-28 01:52:50', NULL, '2020-03-28 01:52:50'),
(9, '::1', 'krishnagujjjar_1', 'krishnagujjjar_1', 'krishnagujjjar@gmail.com', '7014569040', NULL, 'krishna', NULL, NULL, 'Get Call Back', NULL, 'Get A CallBack Popup', NULL, NULL, NULL, NULL, NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SUBSCRIBER', 0, NULL, NULL, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', 'web', 'Chrome', '80.0.3987.149', 'Mac OS X', '', '2020-03-28 01:55:51', NULL, '2020-03-28 01:55:51', NULL, '2020-03-28 01:55:51'),
(10, '::1', 'krishnagujjjar_1', 'krishnagujjjar_1', 'krishnagujjjar@gmail.com', '7014569040', NULL, 'krishna', NULL, NULL, 'Get Call Back', NULL, 'Get A CallBack Popup', NULL, NULL, NULL, NULL, NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SUBSCRIBER', 0, NULL, NULL, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', 'web', 'Chrome', '80.0.3987.149', 'Mac OS X', '', '2020-03-28 01:56:05', NULL, '2020-03-28 01:56:05', NULL, '2020-03-28 01:56:05'),
(11, '::1', 'user01', 'user01', 'user01@gmail.com', '7864534134', NULL, 'user01today', NULL, NULL, 'Get Call Back', NULL, 'Get A CallBack Popup', NULL, NULL, NULL, NULL, NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SUBSCRIBER', 0, NULL, NULL, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', 'web', 'Chrome', '80.0.3987.163', 'Mac OS X', '', '2020-04-11 03:59:26', NULL, '2020-04-11 03:59:26', NULL, '2020-04-11 03:59:26'),
(12, '::1', 'user01_1', 'user01_1', 'user01@gmail.com', NULL, NULL, 'user01today', NULL, NULL, 'join proplive', 'dfgdfg', 'contact-us', NULL, NULL, NULL, NULL, NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SUBSCRIBER', 0, NULL, NULL, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', 'web', 'Chrome', '80.0.3987.163', 'Mac OS X', '', '2020-04-11 04:00:18', NULL, '2020-04-11 04:00:18', NULL, '2020-04-11 04:00:18'),
(13, '::1', 'krishnagujjjar_1', 'krishnagujjjar_1', 'krishnagujjjar@gmail.com', NULL, NULL, 'krishna', NULL, NULL, 'join proplive', 'ffhgfg', 'contact-us', NULL, NULL, NULL, NULL, NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SUBSCRIBER', 0, NULL, NULL, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', 'web', 'Chrome', '80.0.3987.163', 'Mac OS X', '', '2020-04-11 04:00:35', NULL, '2020-04-11 04:00:35', NULL, '2020-04-11 04:00:35'),
(14, '::1', 'user01_1', 'user01_1', 'user01@gmail.com', '7864534134', NULL, 'user01today', NULL, NULL, 'Get Call Back', NULL, 'Get A CallBack Popup', NULL, NULL, NULL, NULL, NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SUBSCRIBER', 0, NULL, NULL, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', 'web', 'Chrome', '80.0.3987.163', 'Mac OS X', '', '2020-04-11 04:04:48', NULL, '2020-04-11 04:04:48', NULL, '2020-04-11 04:04:48'),
(15, '::1', 'user01_1', 'user01_1', 'user01@gmail.com', NULL, NULL, 'kaushal', NULL, NULL, 'join proplive', 'kijkjh', 'contact-us', NULL, NULL, NULL, NULL, NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SUBSCRIBER', 0, NULL, NULL, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', 'web', 'Chrome', '80.0.3987.163', 'Mac OS X', '', '2020-04-11 04:06:44', NULL, '2020-04-11 04:06:44', NULL, '2020-04-11 04:06:44'),
(16, '::1', 'user01_1', 'user01_1', 'user01@gmail.com', NULL, NULL, 'test', NULL, NULL, 'text contact us', 'dsfggdfg', 'contact-us', NULL, NULL, NULL, NULL, NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SUBSCRIBER', 0, NULL, NULL, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', 'web', 'Chrome', '80.0.3987.163', 'Mac OS X', '', '2020-04-11 04:11:18', NULL, '2020-04-11 04:11:18', NULL, '2020-04-11 04:11:18'),
(17, '::1', 'user01_1', 'user01_1', 'user01@gmail.com', NULL, NULL, 'user01today', NULL, NULL, 'join proplive', 'dxgdf', 'contact', NULL, NULL, NULL, NULL, NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SUBSCRIBER', 0, NULL, NULL, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', 'web', 'Chrome', '80.0.3987.163', 'Mac OS X', '', '2020-04-11 23:33:01', NULL, '2020-04-11 23:33:01', NULL, '2020-04-11 23:33:01'),
(18, '::1', 'abhidubey1166', 'abhidubey1166', 'abhidubey1166@gmail.com', NULL, NULL, 'abhi', NULL, NULL, 'this is a new project', 'asgf', 'contact', NULL, NULL, NULL, NULL, NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SUBSCRIBER', 0, NULL, NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36', 'web', 'Chrome', '83.0.4103.61', 'Windows 10', '', '2020-06-07 14:13:45', NULL, '2020-06-07 14:13:45', NULL, '2020-06-07 14:13:45'),
(19, '::1', 'abhidubey1166_1', 'abhidubey1166_1', 'abhidubey1166@gmail.com', NULL, NULL, 'abhi', NULL, NULL, 'this is a new project', 'asgf', 'contact', NULL, NULL, NULL, NULL, NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SUBSCRIBER', 0, NULL, NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36', 'web', 'Chrome', '83.0.4103.61', 'Windows 10', '', '2020-06-07 14:13:48', NULL, '2020-06-07 14:13:48', NULL, '2020-06-07 14:13:48');

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE `user_groups` (
  `id` bigint(20) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `group_title` varchar(255) DEFAULT NULL,
  `status` tinyint(2) DEFAULT 0,
  `created_by` bigint(20) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_by` bigint(20) DEFAULT NULL,
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_groups`
--

INSERT INTO `user_groups` (`id`, `slug`, `group_title`, `status`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 'super-admin', 'super admin', 1, 1, '2020-02-28 08:30:44', 1, '2020-02-28 09:50:41'),
(2, 'admin', 'admin', 1, 1, '2020-03-21 23:57:14', 1, '2020-03-22 20:23:58');

-- --------------------------------------------------------

--
-- Table structure for table `user_group_powers`
--

CREATE TABLE `user_group_powers` (
  `id` bigint(20) NOT NULL,
  `group_id` bigint(20) DEFAULT NULL,
  `module_id` bigint(20) DEFAULT NULL,
  `action_key` varchar(255) DEFAULT NULL,
  `status` tinyint(2) DEFAULT 0,
  `created_by` bigint(20) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_by` bigint(20) DEFAULT NULL,
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_group_powers`
--

INSERT INTO `user_group_powers` (`id`, `group_id`, `module_id`, `action_key`, `status`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 1, 1, 'admin_add', 1, 1, '2020-03-11 10:36:32', 1, '2020-03-11 10:36:32'),
(2, 1, 1, 'admin_list', 1, 1, '2020-03-11 10:36:32', 1, '2020-03-11 10:36:32'),
(3, 1, 1, 'admin_edit', 1, 1, '2020-03-11 10:36:32', 1, '2020-03-11 10:36:32'),
(4, 1, 1, 'admin_delete', 1, 1, '2020-03-11 10:36:32', 1, '2020-03-11 10:36:32'),
(5, 1, 2, 'post_add', 1, 1, '2020-03-11 10:36:32', 1, '2020-03-11 10:36:32'),
(6, 1, 2, 'post_list', 1, 1, '2020-03-11 10:36:32', 1, '2020-03-11 10:36:32'),
(7, 1, 2, 'post_edit', 1, 1, '2020-03-11 10:36:32', 1, '2020-03-11 10:36:32'),
(8, 1, 2, 'post_delete', 1, 1, '2020-03-11 10:36:32', 1, '2020-03-11 10:36:32'),
(9, 1, 3, 'category_add', 1, 1, '2020-03-11 10:36:32', 1, '2020-03-11 10:36:32'),
(10, 1, 3, 'category_list', 1, 1, '2020-03-11 10:36:33', 1, '2020-03-11 10:36:33'),
(11, 1, 3, 'category_edit', 1, 1, '2020-03-11 10:36:33', 1, '2020-03-11 10:36:33'),
(12, 1, 3, 'category_delete', 1, 1, '2020-03-11 10:36:33', 1, '2020-03-11 10:36:33'),
(13, 1, 16, 'comment_add', 1, 1, '2020-03-11 10:36:33', 1, '2020-03-11 10:36:33'),
(14, 1, 16, 'comment_list', 1, 1, '2020-03-11 10:36:33', 1, '2020-03-11 10:36:33'),
(15, 1, 16, 'comment_edit', 1, 1, '2020-03-11 10:36:33', 1, '2020-03-11 10:36:33'),
(16, 1, 16, 'comment_delete', 1, 1, '2020-03-11 10:36:33', 1, '2020-03-11 10:36:33'),
(17, 1, 4, 'filter_add', 1, 1, '2020-03-11 10:36:33', 1, '2020-03-11 10:36:33'),
(18, 1, 4, 'filter_list', 1, 1, '2020-03-11 10:36:33', 1, '2020-03-11 10:36:33'),
(19, 1, 4, 'filter_edit', 1, 1, '2020-03-11 10:36:33', 1, '2020-03-11 10:36:33'),
(20, 1, 4, 'filter_delete', 1, 1, '2020-03-11 10:36:33', 1, '2020-03-11 10:36:33'),
(21, 1, 5, 'gallery_add', 1, 1, '2020-03-11 10:36:33', 1, '2020-03-11 10:36:33'),
(22, 1, 5, 'gallery_list', 1, 1, '2020-03-11 10:36:33', 1, '2020-03-11 10:36:33'),
(23, 1, 5, 'gallery_edit', 1, 1, '2020-03-11 10:36:33', 1, '2020-03-11 10:36:33'),
(24, 1, 5, 'gallery_delete', 1, 1, '2020-03-11 10:36:33', 1, '2020-03-11 10:36:33'),
(25, 1, 6, 'lead_add', 1, 1, '2020-03-11 10:36:33', 1, '2020-03-11 10:36:33'),
(26, 1, 6, 'lead_list', 1, 1, '2020-03-11 10:36:33', 1, '2020-03-11 10:36:33'),
(27, 1, 6, 'lead_edit', 1, 1, '2020-03-11 10:36:33', 1, '2020-03-11 10:36:33'),
(28, 1, 6, 'lead_delete', 1, 1, '2020-03-11 10:36:33', 1, '2020-03-11 10:36:33'),
(29, 1, 7, 'module_add', 1, 1, '2020-03-11 10:36:33', 1, '2020-03-11 10:36:33'),
(30, 1, 7, 'module_list', 1, 1, '2020-03-11 10:36:33', 1, '2020-03-11 10:36:33'),
(31, 1, 7, 'module_edit', 1, 1, '2020-03-11 10:36:33', 1, '2020-03-11 10:36:33'),
(32, 1, 7, 'module_delete', 1, 1, '2020-03-11 10:36:33', 1, '2020-03-11 10:36:33'),
(33, 1, 19, 'order_add', 1, 1, '2020-03-11 10:36:33', 1, '2020-03-11 10:36:33'),
(34, 1, 19, 'order_list', 1, 1, '2020-03-11 10:36:33', 1, '2020-03-11 10:36:33'),
(35, 1, 19, 'order_edit', 1, 1, '2020-03-11 10:36:33', 1, '2020-03-11 10:36:33'),
(36, 1, 19, 'order_delete', 1, 1, '2020-03-11 10:36:33', 1, '2020-03-11 10:36:33'),
(37, 1, 8, 'page_add', 1, 1, '2020-03-11 10:36:33', 1, '2020-03-11 10:36:33'),
(38, 1, 8, 'page_list', 1, 1, '2020-03-11 10:36:33', 1, '2020-03-11 10:36:33'),
(39, 1, 8, 'page_edit', 1, 1, '2020-03-11 10:36:33', 1, '2020-03-11 10:36:33'),
(40, 1, 8, 'page_delete', 1, 1, '2020-03-11 10:36:34', 1, '2020-03-11 10:36:34'),
(41, 1, 9, 'product_add', 1, 1, '2020-03-11 10:36:34', 1, '2020-03-11 10:36:34'),
(42, 1, 9, 'product_list', 1, 1, '2020-03-11 10:36:34', 1, '2020-03-11 10:36:34'),
(43, 1, 9, 'product_edit', 1, 1, '2020-03-11 10:36:34', 1, '2020-03-11 10:36:34'),
(44, 1, 9, 'product_delete', 1, 1, '2020-03-11 10:36:34', 1, '2020-03-11 10:36:34'),
(45, 1, 10, 'project_add', 1, 1, '2020-03-11 10:36:34', 1, '2020-03-11 10:36:34'),
(46, 1, 10, 'project_list', 1, 1, '2020-03-11 10:36:34', 1, '2020-03-11 10:36:34'),
(47, 1, 10, 'project_edit', 1, 1, '2020-03-11 10:36:34', 1, '2020-03-11 10:36:34'),
(48, 1, 10, 'project_delete', 1, 1, '2020-03-11 10:36:34', 1, '2020-03-11 10:36:34'),
(49, 1, 11, 'property_add', 1, 1, '2020-03-11 10:36:34', 1, '2020-03-11 10:36:34'),
(50, 1, 11, 'property_list', 1, 1, '2020-03-11 10:36:34', 1, '2020-03-11 10:36:34'),
(51, 1, 11, 'property_edit', 1, 1, '2020-03-11 10:36:34', 1, '2020-03-11 10:36:34'),
(52, 1, 11, 'property_delete', 1, 1, '2020-03-11 10:36:34', 1, '2020-03-11 10:36:34'),
(53, 1, 17, 'setting_add', 1, 1, '2020-03-11 10:36:34', 1, '2020-03-11 10:36:34'),
(54, 1, 17, 'setting_list', 1, 1, '2020-03-11 10:36:34', 1, '2020-03-11 10:36:34'),
(55, 1, 17, 'setting_edit', 1, 1, '2020-03-11 10:36:34', 1, '2020-03-11 10:36:34'),
(56, 1, 17, 'setting_delete', 1, 1, '2020-03-11 10:36:34', 1, '2020-03-11 10:36:34'),
(57, 1, 12, 'slider_add', 1, 1, '2020-03-11 10:36:34', 1, '2020-03-11 10:36:34'),
(58, 1, 12, 'slider_list', 1, 1, '2020-03-11 10:36:34', 1, '2020-03-11 10:36:34'),
(59, 1, 12, 'slider_edit', 1, 1, '2020-03-11 10:36:34', 1, '2020-03-11 10:36:34'),
(60, 1, 12, 'slider_delete', 1, 1, '2020-03-11 10:36:34', 1, '2020-03-11 10:36:34'),
(61, 1, 13, 'testimonial_add', 1, 1, '2020-03-11 10:36:34', 1, '2020-03-11 10:36:34'),
(62, 1, 13, 'testimonial_list', 1, 1, '2020-03-11 10:36:34', 1, '2020-03-11 10:36:34'),
(63, 1, 13, 'testimonial_edit', 1, 1, '2020-03-11 10:36:34', 1, '2020-03-11 10:36:34'),
(64, 1, 13, 'testimonial_delete', 1, 1, '2020-03-11 10:36:34', 1, '2020-03-11 10:36:34'),
(65, 1, 14, 'user_add', 1, 1, '2020-03-11 10:36:34', 1, '2020-03-11 10:36:34'),
(66, 1, 14, 'user_list', 1, 1, '2020-03-11 10:36:34', 1, '2020-03-11 10:36:34'),
(67, 1, 14, 'user_edit', 1, 1, '2020-03-11 10:36:34', 1, '2020-03-11 10:36:34'),
(68, 1, 14, 'user_delete', 1, 1, '2020-03-11 10:36:34', 1, '2020-03-11 10:36:34'),
(69, 1, 15, 'user-role_add', 1, 1, '2020-03-11 10:36:34', 1, '2020-03-11 10:36:34'),
(70, 1, 15, 'user-role_list', 1, 1, '2020-03-11 10:36:34', 1, '2020-03-11 10:36:34'),
(71, 1, 15, 'user-role_edit', 1, 1, '2020-03-11 10:36:34', 1, '2020-03-11 10:36:34'),
(72, 1, 15, 'user-role_delete', 1, 1, '2020-03-11 10:36:34', 1, '2020-03-11 10:36:34'),
(73, 2, 1, 'admin_add', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(74, 2, 1, 'admin_list', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(75, 2, 1, 'admin_edit', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(76, 2, 1, 'admin_delete', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(77, 2, 2, 'post_add', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(78, 2, 2, 'post_list', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(79, 2, 2, 'post_edit', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(80, 2, 2, 'post_delete', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(81, 2, 3, 'category_add', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(82, 2, 3, 'category_list', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(83, 2, 3, 'category_edit', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(84, 2, 3, 'category_delete', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(85, 2, 16, 'comment_add', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(86, 2, 16, 'comment_list', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(87, 2, 16, 'comment_edit', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(88, 2, 16, 'comment_delete', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(89, 2, 4, 'filter_add', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(90, 2, 4, 'filter_list', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(91, 2, 4, 'filter_edit', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(92, 2, 4, 'filter_delete', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(93, 2, 5, 'gallery_add', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(94, 2, 5, 'gallery_list', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(95, 2, 5, 'gallery_edit', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(96, 2, 5, 'gallery_delete', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(97, 2, 6, 'lead_add', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(98, 2, 6, 'lead_list', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(99, 2, 6, 'lead_edit', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(100, 2, 6, 'lead_delete', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(101, 2, 10, 'project_add', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(102, 2, 10, 'project_list', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(103, 2, 10, 'project_edit', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(104, 2, 10, 'project_delete', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(105, 2, 11, 'property_add', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(106, 2, 11, 'property_list', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(107, 2, 11, 'property_edit', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(108, 2, 11, 'property_delete', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(109, 2, 17, 'setting_add', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(110, 2, 17, 'setting_list', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(111, 2, 17, 'setting_edit', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(112, 2, 17, 'setting_delete', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(113, 2, 12, 'slider_add', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(114, 2, 12, 'slider_list', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(115, 2, 12, 'slider_edit', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(116, 2, 12, 'slider_delete', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(117, 2, 13, 'testimonial_add', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(118, 2, 13, 'testimonial_list', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(119, 2, 13, 'testimonial_edit', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(120, 2, 13, 'testimonial_delete', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(121, 2, 14, 'user_add', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(122, 2, 14, 'user_list', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(123, 2, 14, 'user_edit', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14'),
(124, 2, 14, 'user_delete', 1, 1, '2020-03-21 18:27:14', 1, '2020-03-21 18:27:14');

-- --------------------------------------------------------

--
-- Table structure for table `user_modules`
--

CREATE TABLE `user_modules` (
  `id` bigint(20) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `module_title` varchar(255) DEFAULT NULL,
  `status` tinyint(2) DEFAULT 0,
  `created_by` bigint(20) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_by` bigint(20) DEFAULT NULL,
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_modules`
--

INSERT INTO `user_modules` (`id`, `slug`, `module_title`, `status`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 'admin', 'Admin', 1, 1, '2020-02-28 06:45:58', NULL, '2020-02-28 06:45:58'),
(2, 'post', 'Blog', 1, 1, '2020-02-28 06:45:58', NULL, '2020-03-11 16:06:21'),
(3, 'category', 'category', 1, 1, '2020-02-28 06:45:58', NULL, '2020-02-28 06:45:58'),
(4, 'filter', 'filter', 1, 1, '2020-02-28 06:45:58', NULL, '2020-02-28 06:45:58'),
(5, 'gallery', 'gallery', 1, 1, '2020-02-28 06:45:58', NULL, '2020-02-28 06:45:58'),
(6, 'lead', 'lead', 1, 1, '2020-02-28 06:45:58', NULL, '2020-02-28 06:45:58'),
(7, 'module', 'module', 1, 1, '2020-02-28 06:45:58', NULL, '2020-02-28 06:45:58'),
(8, 'page', 'page', 1, 1, '2020-02-28 06:45:58', NULL, '2020-02-28 06:45:58'),
(9, 'product', 'product', 1, 1, '2020-02-28 06:45:58', NULL, '2020-02-28 06:45:58'),
(10, 'project', 'project', 1, 1, '2020-02-28 06:45:58', NULL, '2020-02-28 06:45:58'),
(11, 'property', 'property', 1, 1, '2020-02-28 06:45:58', NULL, '2020-02-28 06:45:58'),
(12, 'slider', 'slider', 1, 1, '2020-02-28 06:45:58', NULL, '2020-02-28 06:45:58'),
(13, 'testimonial', 'testimonial', 1, 1, '2020-02-28 06:45:58', NULL, '2020-02-28 06:45:58'),
(14, 'user', 'user', 1, 1, '2020-02-28 06:45:58', NULL, '2020-02-28 06:45:58'),
(15, 'user-role', 'user-role', 1, 1, '2020-02-28 06:45:58', NULL, '2020-02-28 08:02:11'),
(16, 'comment', 'Comments', 1, 1, '2020-03-01 11:10:00', 1, '2020-03-01 11:10:00'),
(17, 'setting', 'Settings', 1, 1, '2020-03-01 11:10:00', 1, '2020-03-01 11:10:00'),
(18, 'test', 'Testing', 0, NULL, '2020-03-04 16:13:07', NULL, '2020-03-04 16:13:07'),
(19, 'order', 'Orders', 1, 1, '2020-03-11 15:22:59', 1, '2020-03-11 15:22:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_order`
--
ALTER TABLE `book_order`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filters`
--
ALTER TABLE `filters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filter_product_category_relations`
--
ALTER TABLE `filter_product_category_relations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filter_values`
--
ALTER TABLE `filter_values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requirement` (`requirement`),
  ADD KEY `status` (`status`),
  ADD KEY `followup_date` (`followup_date`),
  ADD KEY `created_date` (`created_date`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_reactions`
--
ALTER TABLE `post_reactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_groups`
--
ALTER TABLE `user_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_group_powers`
--
ALTER TABLE `user_group_powers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_modules`
--
ALTER TABLE `user_modules`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_order`
--
ALTER TABLE `book_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `filters`
--
ALTER TABLE `filters`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `filter_product_category_relations`
--
ALTER TABLE `filter_product_category_relations`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=271;

--
-- AUTO_INCREMENT for table `filter_values`
--
ALTER TABLE `filter_values`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post_reactions`
--
ALTER TABLE `post_reactions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_group_powers`
--
ALTER TABLE `user_group_powers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `user_modules`
--
ALTER TABLE `user_modules`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
