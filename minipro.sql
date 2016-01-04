-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2015 at 11:42 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `minipro`
--
CREATE DATABASE IF NOT EXISTS `minipro` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `minipro`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uid`, `name`, `pass`) VALUES
(1, 'dipra', 'dipra2015');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `catid` int(10) NOT NULL,
  `category` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `category`) VALUES
(1, 'plants'),
(2, 'seeds'),
(3, 'accessories');

-- --------------------------------------------------------

--
-- Table structure for table `citytable`
--

CREATE TABLE IF NOT EXISTS `citytable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cityname` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `citytable`
--

INSERT INTO `citytable` (`id`, `cityname`) VALUES
(1, 'kolkata'),
(2, 'mumbai'),
(3, 'delhi'),
(4, 'uttar pradesh'),
(5, 'chennai');

-- --------------------------------------------------------

--
-- Table structure for table `ckeditor`
--

CREATE TABLE IF NOT EXISTS `ckeditor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pagename` varchar(100) NOT NULL,
  `pagecontents` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ckeditor`
--

INSERT INTO `ckeditor` (`id`, `pagename`, `pagecontents`) VALUES
(1, 'about', '<p>\r\n	Plant Nursery is one of the leading manufacturers and suppliers of varied types of Garden Trees. With most advanced horticulture techniques and experienced team, we grow the finest plants in West Bengal.Leveraging on our business competency, we have been able to attain a noteworthy position in the highly competitive domain. Today, we have firmly positioned ourselves as one of the overriding Decorative Plants Manufacturers and suppliers, based in India. With qualitative Indoor Bonsai Trees, decorative plants, ornamental plants etc., we have received overwhelming response from our numerous clients, based all over India.Last but not the least; we strive to bring you in the lap of Mother Nature with the aid of our range of plants.1111</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(20) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`name`, `email`, `phone`, `message`) VALUES
('dipranil chakraborty', 'asasas@yahoo.com', 2147483647, 'fsfsfsfsfsf');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `catg` varchar(50) NOT NULL,
  `subcatg` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `itemno` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`uid`, `catg`, `subcatg`, `image`, `itemno`, `name`, `price`, `description`) VALUES
(1, '1', 'flower plants', '../file/1446402161Adenium.jpg', 'fl', 'Adenium', 100, ''),
(2, '1', 'flower plants', '../file/1446402197Anthurium.jpg', 'fl2', 'Anthurium', 158, ''),
(3, '1', 'flower plants', '../file/1446402218azalea.jpg', 'fl3', 'azalea', 200, ''),
(4, '1', 'flower plants', '../file/1446402298Bougainvellia Alok.jpg', 'fl4', 'Bougainvellia Alok', 20, ''),
(5, '1', 'flower plants', '../file/1446402324Bougainvillea Thimma.jpg', 'fl5', 'Bougainvillea Thimma', 200, ''),
(6, '1', 'flower plants', '../file/1446402356Hibiscus.jpg', 'fl6', 'Hibiscus', 300, ''),
(7, '1', 'flower plants', '../file/1446402400Ixora Singapuri.jpg', 'fl7', 'Ixora Singapuri', 100, ''),
(8, '1', 'flower plants', '../file/1446402440Ixora Singapuri1.jpg', 'fl8', 'Ixora Singapuri1', 500, ''),
(9, '1', 'fruit plants', '../file/1446402464Cherry.jpg', 'fr1', 'Cherry', 100, ''),
(10, '1', 'fruit plants', '../file/1446402480Clove.jpg', 'fr2', 'Clove', 150, ''),
(11, '1', 'fruit plants', '../file/1446402514jackfruit.JPG', 'fr3', 'jackfruit', 200, ''),
(12, '1', 'fruit plants', '../file/1446402532lemon tree.jpg', 'fr4', 'lemon tree', 100, ''),
(13, '1', 'fruit plants', '../file/1446402552Mangifera Indica.jpg', 'fr5', 'Mangifera Indica', 200, '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `repassword` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=145 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `mobile`, `gender`, `city`, `password`, `repassword`) VALUES
(135, 'a', 'aa@ggg.coo', 1234567890, 'male', 'kolkata', '123', '123'),
(136, 'a', 'aa@ggg.coo', 1234567890, 'male', 'kolkata', '123', '123'),
(137, 'a', 'aa@ggg.coo', 1234567890, 'male', 'mumbai', '', ''),
(138, 'a', 'aa@ggg.coo', 1234567890, 'male', 'kolkata', '12', ''),
(139, 'a', 'aa@ggg.coo', 1234567890, 'male', 'mumbai', '12345', '1234'),
(140, 'a', 'aa@ggg.coo', 1234567890, 'male', 'mumbai', '12345', '1234'),
(141, 'a', 'aa@ggg.coo', 1234567890, 'male', 'mumbai', '12345', '1234'),
(142, 'a', 'aa@ggg.coo', 1234567890, 'male', 'kolkata', '12345', '12345'),
(143, 'assdadas', 'xyz@gmail.com', 1234567890, 'male', 'kolkata', '12345', '12345'),
(144, 'kumar', 'kumarterang@gmail.com', 2147483647, 'male', 'kolkata', '12345', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `cat_id` int(20) NOT NULL,
  `subcategory` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`cat_id`, `subcategory`) VALUES
(1, 'flower plants'),
(1, 'fruit plants'),
(1, 'decorative plants'),
(2, 'flower seeds'),
(2, 'fruit seeds'),
(3, 'gloves'),
(3, 'winter tools'),
(3, 'pressure sprayers'),
(3, 'digging tools');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
