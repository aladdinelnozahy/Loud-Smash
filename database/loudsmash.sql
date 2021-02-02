-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2021 at 05:02 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loudsmash`
--

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `id` int(11) NOT NULL,
  `a_name` varchar(50) DEFAULT NULL,
  `a_age` int(11) DEFAULT NULL,
  `a_about` text DEFAULT NULL,
  `a_photo` text NOT NULL,
  `b_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `a_name`, `a_age`, `a_about`, `a_photo`, `b_id`) VALUES
(1, 'Serj Tankian', 53, 'Tankian is regarded as one of the best vocalists in heavy metal, with praise given to his unusual delivery and his wide vocal range. In 2006, he was ranked No. 26 on the Hit Parader list of \"Top 100 Heavy Metal Vocalists\".[2] A study conducted by VVN Music found that Tankian possesses a high and diverse vocal range of 4.2 octaves.[3] In 2002, he co-founded the non-profit political activism organization Axis of Justice, alongside guitarist and fellow activist Tom Morello. In 2011, he was awarded the Armenian Prime Minister\'s Medal for his contributions to the recognition of the Armenian Genocide and the advancement of music.[4]', '1611956610.png', 1),
(13, 'leloz', 25, 'egy', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `artist_event`
--

CREATE TABLE `artist_event` (
  `id` int(11) NOT NULL,
  `e_id` int(11) NOT NULL,
  `a_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist_event`
--

INSERT INTO `artist_event` (`id`, `e_id`, `a_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `artist_song`
--

CREATE TABLE `artist_song` (
  `id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `a_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist_song`
--

INSERT INTO `artist_song` (`id`, `s_id`, `a_id`) VALUES
(8, 1, 1),
(9, 2, 1),
(10, 4, 1),
(11, 1, 13),
(12, 2, 13);

-- --------------------------------------------------------

--
-- Table structure for table `bands`
--

CREATE TABLE `bands` (
  `id` int(11) NOT NULL,
  `b_name` varchar(50) DEFAULT NULL,
  `b_memnum` int(11) DEFAULT NULL,
  `b_location` varchar(50) DEFAULT NULL,
  `b_createdyear` varchar(50) DEFAULT NULL,
  `b_photo` text NOT NULL,
  `b_bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bands`
--

INSERT INTO `bands` (`id`, `b_name`, `b_memnum`, `b_location`, `b_createdyear`, `b_photo`, `b_bio`) VALUES
(1, 'system of a down', 5, 'Glendale, California, U.S.', '1994', '1612021881.jfif', 'the men were playing in other bands, but they soon discovered that they had similar interests, so they began together. They were joined by Andranik “Andy” Khatchadurian, who played the drums and together they formed a band named “Soil”. Shortly thereafter, this trio joined Shavarsh “Shavo” Odadjian (born on April 22, 1974 in Yerevan, Armenia). This foursome then came up with another band “System Of A Down” (SOAD). This name was taken from the poem “Victims Of A Down” by Daron Malakiana. The only change in personnel during this period was to replace Khatchaduriana by John Dolmayan (born on July 15, 1973 in Canada).'),
(2, 'no band', 1, '0', '0', '', '0'),
(5, 'Metalica', 9, 'Los Angeles', '1981', '1612021847.png', 'Metallica is an American heavy metal band. The band was formed in 1981 in Los Angeles by vocalist/guitarist James Hetfield and drummer Lars Ulrich, and has been based in San Francisco for most of its career.');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `c_name` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `c_name`) VALUES
(1, 'Rock'),
(2, 'Pop'),
(3, 'Country'),
(4, 'R&B and Soul'),
(5, 'Hip Hop'),
(6, 'Electronic'),
(7, 'Jazz'),
(8, 'Blues'),
(9, 'Classical and Opera'),
(10, 'Heavy Metal'),
(11, 'Reggae'),
(17, 'trap');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `e_name` varchar(50) DEFAULT NULL,
  `e_description` text DEFAULT NULL,
  `e_location` text DEFAULT NULL,
  `e_date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `e_name`, `e_description`, `e_location`, `e_date`) VALUES
(1, 'Party color', 'lets party', 'alex', '2021-10-10'),
(3, 'test', 'test desc.', 'test', '24-09-2020');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `r_name` varchar(50) DEFAULT NULL,
  `r_email` varchar(50) DEFAULT NULL,
  `r_phone` varchar(40) DEFAULT NULL,
  `e_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `r_name`, `r_email`, `r_phone`, `e_id`) VALUES
(1, 'sabba7', 'saba7@so', '646', 1),
(2, 'walaa', NULL, '123221425', 1),
(3, 'walaa', NULL, '5685132', 1),
(4, 'sfsdag', 'esgs@fdhdf', '23536`', 1);

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(11) NOT NULL,
  `s_name` varchar(50) DEFAULT NULL,
  `s_author` varchar(50) DEFAULT NULL,
  `s_reldate` int(11) DEFAULT NULL,
  `s_photo` text NOT NULL,
  `b_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `s_name`, `s_author`, `s_reldate`, `s_photo`, `b_id`) VALUES
(1, 'chop suey', 'System of a Down', 20, '1612022048.jfif', 10),
(2, 'Bn3afr al mog', 'lelo', 2019, '1612022085.png', 5),
(4, 'Fade to black', 'metalica', 2003, '1612022147.png', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `u_username` varchar(50) NOT NULL,
  `u_name` varchar(50) DEFAULT NULL,
  `u_email` varchar(40) DEFAULT NULL,
  `u_pass` varchar(100) DEFAULT NULL,
  `u_phone` varchar(40) DEFAULT NULL,
  `u_role` int(11) NOT NULL,
  `u_photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `u_username`, `u_name`, `u_email`, `u_pass`, `u_phone`, `u_role`, `u_photo`) VALUES
(21, 'aladdin elnozahy', 'aladdin', '01148223413', 'asd', '01148223413', 1, '1612020803.png'),
(22, 'abdelrahman', 'abdo', '0121524254', 'asd', '0121524254', 2, '1612020841.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `b_id` (`b_id`);

--
-- Indexes for table `artist_event`
--
ALTER TABLE `artist_event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `e_id` (`e_id`),
  ADD KEY `a_id` (`a_id`);

--
-- Indexes for table `artist_song`
--
ALTER TABLE `artist_song`
  ADD PRIMARY KEY (`id`),
  ADD KEY `s_id` (`s_id`),
  ADD KEY `a_id` (`a_id`);

--
-- Indexes for table `bands`
--
ALTER TABLE `bands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `e_id` (`e_id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `b_id` (`b_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `artist_event`
--
ALTER TABLE `artist_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artist_song`
--
ALTER TABLE `artist_song`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `bands`
--
ALTER TABLE `bands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artists`
--
ALTER TABLE `artists`
  ADD CONSTRAINT `artists_ibfk_1` FOREIGN KEY (`b_id`) REFERENCES `bands` (`id`);

--
-- Constraints for table `artist_event`
--
ALTER TABLE `artist_event`
  ADD CONSTRAINT `artist_event_ibfk_1` FOREIGN KEY (`e_id`) REFERENCES `events` (`id`),
  ADD CONSTRAINT `artist_event_ibfk_2` FOREIGN KEY (`a_id`) REFERENCES `artists` (`id`);

--
-- Constraints for table `artist_song`
--
ALTER TABLE `artist_song`
  ADD CONSTRAINT `artist_song_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `songs` (`id`),
  ADD CONSTRAINT `artist_song_ibfk_2` FOREIGN KEY (`a_id`) REFERENCES `artists` (`id`);

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`e_id`) REFERENCES `events` (`id`);

--
-- Constraints for table `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `songs_ibfk_1` FOREIGN KEY (`b_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
