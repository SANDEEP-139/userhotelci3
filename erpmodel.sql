-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2020 at 06:14 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erpmodel`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_category`
--

CREATE TABLE `add_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL COMMENT '0=Inactive,1=Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_category`
--

INSERT INTO `add_category` (`id`, `category_name`, `status`) VALUES
(81, 'brand2.', 'Active'),
(82, 'brand1', 'Active'),
(85, 'test', 'Inactive'),
(86, 'brand3', 'Active'),
(87, '   brand2', 'Active'),
(88, ' brand1', 'Inactive'),
(89, 'sss  ', 'Active'),
(90, 'brand7', 'Active'),
(91, 'brand6', 'Active'),
(92, 'brand5', 'Active'),
(93, 'brand4', 'Active'),
(94, 'brand3', 'Active'),
(95, 'brand2', 'Inactive'),
(96, 'brand1', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `add_subcategory`
--

CREATE TABLE `add_subcategory` (
  `id` int(11) NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `subcategory_name` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL COMMENT '0=inactive,1=active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_subcategory`
--

INSERT INTO `add_subcategory` (`id`, `category`, `subcategory_name`, `status`) VALUES
(27, '81', 'bran2a', 'Active'),
(28, '82', 'brand1a', 'Active'),
(29, '96', 'ss', 'Inactive'),
(31, '96', '', 'Active'),
(32, '96', '', 'Active'),
(33, '96', '', 'Active'),
(34, '96', '', 'Active'),
(35, '96', '', 'Active'),
(36, '96', '', 'Active'),
(37, '96', '', 'Active'),
(38, '96', '', 'Active'),
(39, '96', '', 'Active'),
(40, '96', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `add_supply`
--

CREATE TABLE `add_supply` (
  `id` int(11) NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `credit_period` varchar(100) DEFAULT NULL,
  `pan` varchar(100) DEFAULT NULL,
  `opening_balance` varchar(100) DEFAULT NULL,
  `contact_person_name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL COMMENT '0=Deactive,1=Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_supply`
--

INSERT INTO `add_supply` (`id`, `category`, `name`, `credit_period`, `pan`, `opening_balance`, `contact_person_name`, `address`, `country`, `state`, `city`, `status`) VALUES
(2, '7', 'sanjay  saini', '44', '244543', '543637', 'sandeep', 'lucknow', NULL, '453', 'deel', 'Active'),
(3, 'NV', 'sanddee', '33', 'fgsnx', '3', '43w6', 'bdgy', 'CA', 'ngm', 'bgcn', 'Active'),
(6, '7', 'sandeep', '23', '234567', '3432', 'sandeep', 'lucknow', 'CA', 'uttarpradesh', 'lucknow', 'Deactive'),
(7, '7', 'dfgfgf', 'fgf', 'fgf', '12213', '313', 'fgfg', NULL, 'fgfg', 'dsfdsf', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `color_type` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL COMMENT '0=Deactive,1=Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `color_type`, `status`) VALUES
(1, 'color4', 'Deactive'),
(2, 'color2', 'Active'),
(3, 'sandeep', 'Active'),
(4, '                 color1', 'Deactive'),
(5, 'color2', 'Active'),
(6, 'print11', 'Active'),
(10, 'print2', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(100) DEFAULT NULL,
  `Lastname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `business` varchar(100) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `business_type` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `Firstname`, `Lastname`, `email`, `business`, `contact`, `company_name`, `address`, `business_type`, `state`, `message`) VALUES
(10, 'sandeep', 'singh', '139sandeepsingh@gmail.com', 'it business', '9919693361', 'lsss', 'lucknow', 'NV', NULL, 'hello sir'),
(11, 'sandeep', 'singh rathor', '139sandeepsingh@gmail.com', 'IT business', '99919693361', 'lss', 'lucknow', 'CA', 'up', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `print`
--

CREATE TABLE `print` (
  `id` int(11) NOT NULL,
  `printtype_name` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL COMMENT '0=Deactive,1=Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `print`
--

INSERT INTO `print` (`id`, `printtype_name`, `status`) VALUES
(2, 'print5', 'Inactive'),
(3, 'print1', 'Active'),
(4, 'print2', 'Deactive'),
(5, 'print4', 'Active'),
(6, 'printt1', 'Active'),
(7, 'print4', 'Active'),
(8, 'print6', 'Active'),
(9, 'print7', 'Deactive'),
(11, 'print8', 'Active'),
(12, 'print9', 'Deactive'),
(13, 'print10', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL COMMENT 'this is product add',
  `Item_code` varchar(100) DEFAULT NULL,
  `Item_name` varchar(100) DEFAULT NULL,
  `fabric_category` varchar(100) DEFAULT NULL,
  `fabric_subcategory` varchar(100) DEFAULT NULL,
  `fabric_type` varchar(100) DEFAULT NULL,
  `select_print_type` varchar(100) DEFAULT NULL,
  `select_color` varchar(100) DEFAULT NULL,
  `price` varchar(1000) DEFAULT NULL,
  `quantity` varchar(1000) DEFAULT NULL,
  `about_the_item` varchar(100) DEFAULT NULL,
  `thread_count` varchar(100) DEFAULT NULL,
  `construction` varchar(100) DEFAULT NULL,
  `gram` varchar(100) DEFAULT NULL,
  `floor_number` varchar(100) DEFAULT NULL,
  `rack_number` varchar(100) DEFAULT NULL,
  `fabric` varchar(100) DEFAULT NULL,
  `weave` varchar(100) DEFAULT NULL,
  `uploadfile` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL COMMENT '0=Deactive,1=Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='product add';

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `Item_code`, `Item_name`, `fabric_category`, `fabric_subcategory`, `fabric_type`, `select_print_type`, `select_color`, `price`, `quantity`, `about_the_item`, `thread_count`, `construction`, `gram`, `floor_number`, `rack_number`, `fabric`, `weave`, `uploadfile`, `status`) VALUES
(15, '33444', 'dell', '--Select--', 'Select', '', '2', '2', '24143', '32312', '', '2323', '441133', '32224', '2344', '1314', '12341', 'dfg', 'Koala.jpg', 'Active'),
(16, '2324', 'deerd', '81', 'Select', '', '2', '1', '2344', '3144', '<p>hello</p>\r\n', '232', '2345', '233124', '123442', '23425', '4353453', 'faafn', 'Jellyfish.jpg', 'Active'),
(17, '234', 'sffdsas', '81', 'Select', '', '3', '2', '144', '254', '<p>fgfafgfgg</p>\r\n', '311', '252', '3424', '25', '2551', '253', 'bdb', 'Desert8.jpg', 'Active'),
(18, '23214', 'gsfdg', '81', 'Select', '', '--Select--', '1', '32415', '46564', '<p>bfgsnf n</p>\r\n', '21455', '3536', '234241', '2423', '453', '5235', '--Select--', 'Hydrangeas1.jpg', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL COMMENT 'this is signup',
  `admin_email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobilenumber` varchar(100) DEFAULT NULL,
  `confirmpass` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`user_id`, `name`, `admin_email`, `password`, `mobilenumber`, `confirmpass`) VALUES
(29, 'sachin pandey', '139sandeepsingh@gmail.com', '123', 'male', NULL),
(30, 'sandeep singh', '139sandeepsingh@gmail.com', '12345', 'male', NULL),
(31, 'sandeep singh', '139sandeepsingh@gmail.com', '123', 'male', NULL),
(50, 'sandeep singh', '139sandeepsingh@gmail.com', '12345', 'female', NULL),
(52, 'sandhya', '139sandeepsingh@gmail.com', '123', 'male', NULL),
(53, 'admin aaa', 'admin@admin.com', '12345', '9919693361', NULL),
(54, 'admin', 'admin@admin.com', '12345', '9919693361', NULL),
(55, 'admin', 'admin@12admin.com', '1234', '2354645', NULL),
(58, 'sachin', 'admin@12345gmail.com', '12345', '9919693361', NULL),
(60, 'rgv', 'admin@gmail.com', '$2y$10$lmdGuv8ghA4w7BwrLbTcBufrwKXEAYts6KAad9UvadFhIP5g12C/S', '12345578', NULL),
(61, 'sachin', 'admin@gmail.com', '$2y$10$ZhDf3c2sTNIcRDswZjgyreZ6VPMOyxkaoQeLX5aEmX8tiFSdtCKtW', '9993564677', NULL),
(62, 'sandeep', 'admin@gmail.com', '$2y$10$jFZ.BqVn0ewSc0mLHMXbuOTmk4UkQrhH553g1xfdGCR5Bsvkz4Cwm', '46475786', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `mobilenumber` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`id`, `name`, `username`, `email`, `password`, `mobilenumber`) VALUES
(1, 'sandeep singh', 'sk', '139sandeepsingh@gmail.com', '12345', NULL),
(2, 'sanjay', 'admin', '139sandeepsingh@gmail.com', 'admin@12345', NULL),
(3, 'sandeep', 'admin', 'admin@admin.com', '12345', NULL),
(4, 'sandeep  developer', 'admin', 'admin@12345', '12345', '9919693361');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_category`
--
ALTER TABLE `add_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_subcategory`
--
ALTER TABLE `add_subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_supply`
--
ALTER TABLE `add_supply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `print`
--
ALTER TABLE `print`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_category`
--
ALTER TABLE `add_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT for table `add_subcategory`
--
ALTER TABLE `add_subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `add_supply`
--
ALTER TABLE `add_supply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `print`
--
ALTER TABLE `print`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'this is product add', AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `worker`
--
ALTER TABLE `worker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
