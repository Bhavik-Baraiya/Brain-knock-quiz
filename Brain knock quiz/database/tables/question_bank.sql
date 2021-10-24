-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2020 at 08:19 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

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
-- Table structure for table `question_bank`
--

CREATE TABLE `question_bank` (
  `cat_id` int(2) NOT NULL,
  `question_id` int(2) NOT NULL,
  `categories_name` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL,
  `questions` varchar(256) NOT NULL,
  `option1` varchar(30) NOT NULL,
  `option2` varchar(30) NOT NULL,
  `option3` varchar(30) NOT NULL,
  `option4` varchar(30) NOT NULL,
  `ans` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_bank`
--

INSERT INTO `question_bank` (`cat_id`, `question_id`, `categories_name`, `level`, `questions`, `option1`, `option2`, `option3`, `option4`, `ans`) VALUES
(1, 1, 'Entertainment', 'l', 'Madhuri Dixit\'s name in N Chandra\'s \'Tezaab\' was...?', 'Mohini', 'Rohini', ' Sunandha', 'Radha', 'a'),
(1, 2, 'Entertainment', 'l', 'Aishwarya Rai was crowned Miss World in which year?', '1994', '1995', ' 1986', '1992', 'a'),
(1, 3, 'Entertainment', 'l', 'Who played the role of Emperor Akbar in the movie \'Mughal e Azam\'?', 'Prithviraj Kapoor', 'Murad', ' Raj kapoor', 'Dilip kumar', 'a'),
(1, 4, 'Entertainment', 'l', 'Who has directed the movie \'Do Bigha Zamin\'?', 'Guru Dutt', 'Ritwik Ghatak', ' Bimal Roy', 'Hrishikesh Mukherjee', 'c'),
(1, 5, 'Entertainment', 'l', 'Who wins the first Dadasaheb Phalke Award?', 'Devika Rani', 'Prithviraj Kapoor', ' Pankaj Mullick', 'Nitin Bose', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question_bank`
--
ALTER TABLE `question_bank`
  ADD UNIQUE KEY `question_id` (`question_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question_bank`
--
ALTER TABLE `question_bank`
  MODIFY `question_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
