-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2020 at 04:56 AM
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
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `entertainment`
--

CREATE TABLE `entertainment` (
  `question_id` int(2) NOT NULL,
  `question` text NOT NULL,
  `option1` varchar(50) NOT NULL,
  `option2` varchar(50) NOT NULL,
  `option3` varchar(50) NOT NULL,
  `option4` varchar(50) NOT NULL,
  `ans` varchar(50) NOT NULL,
  `levels` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entertainment`
--

INSERT INTO `entertainment` (`question_id`, `question`, `option1`, `option2`, `option3`, `option4`, `ans`, `levels`) VALUES
(1, 'Madhuri Dixit\'s name in N Chandra\'s \'Tezaab\' was...?', 'Mohini', 'Rohini', ' Sunandha', 'Radha', 'a', 'l'),
(2, 'Aishwarya Rai was crowned Miss World in which year?', '1994', '1995', ' 1993', '1996', 'a', 'l'),
(3, 'Who played the role of Emperor Akbar in the movie \'Mughal e Azam\'?', 'Prithviraj Kapoor', 'Murad', ' Raj Kapoor', 'Dilip Kumar', 'a', 'l'),
(4, 'Who has directed the movie \'Do Bigha Zamin\'\r\n?', 'Guru Dutt', 'Ritwik Ghatak', ' Bimal Roy', 'Hrishikesh Mukherjee', 'c', 'l'),
(5, 'Who wins the first Dadasaheb Phalke Award?', 'Devika Rani', 'Prithviraj Kapoor', ' Pankaj Mullick', 'Nitin Bose', 'a', 'l'),
(6, 'The Oscar winning short documentary film ‘Smile Pinki’ (2008) was directed by which director?', 'Charlie Chaplin', 'Alfred Hitchcock', '  Michael Curtiz', 'Megan Mylan', 'd', 'm'),
(7, 'Who is known as the \'father of Indian Cinema\'?', 'Satyajit Ray', 'Dadasaheb Phalke', ' Dadasaheb Torne', 'V. Shantaram', 'b', 'm'),
(8, 'Which one is the first Bollywood film of Sridevi?', 'Julie', 'Himmatwala', ' Sadma', 'Solva Sawan', 'd', 'm'),
(9, 'Who is the director of the film \'Bandit Queen\'\r\n?', 'Kamal Haasan', 'Shekhar Kapur', ' Rakesh Roshan', 'Subhash Ghai', 'b', 'm'),
(10, 'Who is the first Indian film actor to win a \"Best Actor\" award in an International film festival?', 'Guru Dutt', 'Prithviraj Kapoor', ' N T Rama Rao', 'Sivaji Ganesan', 'd', 'm'),
(11, 'Who created the character “Sancho Pancha”?', 'Shelley', 'Cerventes', ' Kipling', 'George Eliot', 'b', 'h'),
(12, 'Which one is India\'s first television soap opera?', 'Buniyaad', 'Hum Log', ' Ramayan', 'Yeh Jo Hai Zindagi', 'b', 'h'),
(13, 'Only indian movie that won Palme d\'Or award in Cannes Film Festival?', 'Bandit Queen', 'Mother India', ' Do Bigha Zamin', 'Neecha Nagar', 'd', 'h'),
(14, 'Which one is the longest film in India by running time?', 'Thavamai Thavamirundhu', 'Mera Naam Joker', ' LOC Kargil', 'Parthiban Kanavu', 'a', 'h'),
(15, 'Who is the first indian movie star to be featured on the cover of Time magazine?', 'Zeenat Aman', 'Parveen Babi', ' Aishwarya Rai', 'Amir Khan', 'b', 'h');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entertainment`
--
ALTER TABLE `entertainment`
  ADD PRIMARY KEY (`question_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entertainment`
--
ALTER TABLE `entertainment`
  MODIFY `question_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
