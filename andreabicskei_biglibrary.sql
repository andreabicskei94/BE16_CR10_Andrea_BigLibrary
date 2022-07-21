-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2022 at 10:04 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `andreabicskei_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `andreabicskei_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `andreabicskei_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `library_id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `isbnean` int(30) NOT NULL,
  `type` varchar(225) NOT NULL,
  `autor_first_name` varchar(50) NOT NULL,
  `autor_last_name` varchar(50) NOT NULL,
  `publisher_name` varchar(50) NOT NULL,
  `publisher_addres` varchar(50) NOT NULL,
  `publisher_date` int(11) NOT NULL,
  `availability` enum('avaliable','reserved') DEFAULT 'avaliable',
  `short_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`library_id`, `title`, `photo`, `isbnean`, `type`, `autor_first_name`, `autor_last_name`, `publisher_name`, `publisher_addres`, `publisher_date`, `availability`, `short_description`) VALUES
(1, 'Harry Potter and the Sorcerer`s Stone', 'hp1.jpg', 97852889, 'BOOK', 'J.K', 'Rowling', 'Magic Books', 'Muggle Road 9 3/4', 1998, 'avaliable', 'An orphaned boy enrolls in a school of wizardry, where he learns the truth about himself, his family and the terrible evil that haunts the magical world.'),
(2, 'Scarface', 'scarface.jpg', 95882365, 'MOVIE', 'Oliver', 'Stone', ' MCA Home Video ', 'L.A', 1988, 'avaliable', 'In 1980 Miami, a determined Cuban immigrant takes over a drug cartel and succumbs to greed.'),
(3, 'Lord Of The Rings', 'lordof.jpg', 55896332, 'BOOK', 'J.R.R.', 'Tolkien', 'Mariners Book', 'Bilbo Street 15', 1995, 'avaliable', 'A meek Hobbit from the Shire and eight companions set out on a journey to destroy the powerful One Ring and save Middle-earth from the Dark Lord Sauron.'),
(4, 'Stranger Things', 'stranger.jpg', 2366859, 'MOVIE', 'Duffer', 'Brothers', 'Netflix', 'L.A', 2016, 'avaliable', 'When a young boy disappears, his mother, a police chief and his friends must confront terrifying supernatural forces in order to get him back.'),
(5, 'Hobbit', 'hobbit.jpg', 2533695, 'BOOK', 'J.R.R.', 'Tolkien', 'Aragorn Books', 'Bilbo Street 15', 2012, '', 'A reluctant Hobbit, Bilbo Baggins, sets out to the Lonely Mountain with a spirited group of dwarves to reclaim their mountain home, and the gold within it from the dragon Smaug.'),
(6, 'Marley and Me', 'marley.jpg', 2563255, 'MOVIE', 'David', 'Frankel', 'Universal Studios', 'Hollywood', 2005, '', 'A family learns important life lessons from their adorable, but naughty and neurotic dog.'),
(7, 'Harry Potter and the Prisoner of Azkaban', 'hp2.jpg', 25933522, 'BOOK', 'J.K.', 'Rowling', 'Magic Books', 'Muggle Street 30.', 1999, 'avaliable', 'Harry Potter, Ron and Hermione return to Hogwarts School of Witchcraft and Wizardry for their third year of study, where they delve into the mystery surrounding an escaped prisoner who poses a dangerous threat to the young wizard.'),
(8, 'High Voltage', 'acdc1.jpg', 22536952, 'CD', 'AC', 'DC', 'Thunder Music', 'Boom Street 16.', 19767, '', 'High Voltage is the first internationally released studio album by Australian hard rock band AC/DC. It contains tracks from their first two previous Australia-only issued albums: High Voltage and T.N.T. (both from 1975).'),
(9, 'T.N.T.', 'acdc2.jpg', 22369596, 'CD', 'AC', 'DC', 'Thunder Music', 'Boom Street 16.', 1975, 'avaliable', 'T.N.T. is the second studio album by Australian hard rock band AC/DC, released only in Australia, on 1 December 1975. This was the band\'s first release with bassist Mark Evans and drummer Phil Rudd, although the last two tracks feature George Young and Tony Currenti, both of whom previously appeared on High Voltage.'),
(10, 'Me before you', 'mebeforeyou.jpg', 2536695, 'BOOK', 'Jojo', 'Moyes', 'Romantic Books', 'Love Street 20.', 2016, 'avaliable', 'A girl in a small town forms an unlikely bond with a recently-paralyzed man she\'s taking care of.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`library_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `library_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
