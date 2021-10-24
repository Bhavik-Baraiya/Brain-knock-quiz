-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2020 at 04:51 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(2) NOT NULL,
  `cat_nm` varchar(20) NOT NULL,
  `cimg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_nm`, `cimg`) VALUES
(1, 'Entertainment', '../img/logos/entertainment.png'),
(2, 'Land&people', '../img/logos/lp.png'),
(3, 'History', '../img/logos/history.jpg'),
(4, 'Literature&language', '../img/logos/LL.png'),
(5, 'Sports', '../img/logos/sports.webp'),
(6, 'Science&technology', '../img/logos/st.jpg'),
(7, 'Current&wolrdaffairs', '../img/logos/cf.jpg'),
(8, 'Business', '../img/logos/business.jpg'),
(9, 'Wildlife', '../img/logos/wildlife.png'),
(10, 'Personalities', '../img/logos/personalities.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
