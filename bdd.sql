-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 28, 2020 at 09:55 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `bdd`
--

-- --------------------------------------------------------

--
-- Table structure for table `Categorie`
--

CREATE TABLE `Categorie` (
  `catId` int(11) NOT NULL,
  `nomCat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Categorie`
--

INSERT INTO `Categorie` (`catId`, `nomCat`) VALUES
(1, 'Animal'),
(2, 'Nourriture'),
(3, 'Gens'),
(4, 'Monument'),
(5, 'Paysage'),
(6, 'Test'),
(7, 'Pkmn'),
(8, 'Coucou');

-- --------------------------------------------------------

--
-- Table structure for table `Photo`
--

CREATE TABLE `Photo` (
  `photoId` int(11) NOT NULL,
  `nomFich` varchar(100) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `catId` int(11) DEFAULT NULL,
  `utilID` int(11) DEFAULT NULL,
  `visibility` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Photo`
--

INSERT INTO `Photo` (`photoId`, `nomFich`, `description`, `catId`, `utilID`, `visibility`) VALUES
(4, 'DSC4.jpg', 'Un monument ?? oui', 4, 2, 1),
(5, 'DSC5.jpg', 'Un gros canard', 1, 3, 1),
(6, 'DSC6.jpg', 'L\'Elysée (c bo)', 4, 3, 1),
(7, 'DSC7.jpg', 'Une chèvre lol', 1, 3, 1),
(8, 'DSC8.jpg', 'Un paysage bucolique', 5, 3, 1),
(10, 'DSC10.jpg', 'La Tour Eiffel (vu de dessous)\r\n', 4, 1, 1),
(16, 'DSC16.jpg', 'Un perroquet ', 1, 2, 1),
(17, 'DSC17.jpg', 'A manger', 2, 1, 1),
(31, 'DSC31.jpg', 'Un clebs', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Utilisateur`
--

CREATE TABLE `Utilisateur` (
  `utilID` int(11) NOT NULL,
  `pseudo` varchar(100) DEFAULT NULL,
  `mdp` varchar(100) DEFAULT NULL,
  `permission` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Utilisateur`
--

INSERT INTO `Utilisateur` (`utilID`, `pseudo`, `mdp`, `permission`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0),
(2, 'raphi', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(3, 'tibo', '81dc9bdb52d04dc20036dbd8313ed055', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Categorie`
--
ALTER TABLE `Categorie`
  ADD PRIMARY KEY (`catId`);

--
-- Indexes for table `Photo`
--
ALTER TABLE `Photo`
  ADD PRIMARY KEY (`photoId`),
  ADD KEY `utilID` (`utilID`),
  ADD KEY `catId` (`catId`);

--
-- Indexes for table `Utilisateur`
--
ALTER TABLE `Utilisateur`
  ADD PRIMARY KEY (`utilID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Categorie`
--
ALTER TABLE `Categorie`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `Photo`
--
ALTER TABLE `Photo`
  MODIFY `photoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `Utilisateur`
--
ALTER TABLE `Utilisateur`
  MODIFY `utilID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Photo`
--
ALTER TABLE `Photo`
  ADD CONSTRAINT `photo_ibfk_1` FOREIGN KEY (`utilID`) REFERENCES `utilisateur` (`utilID`),
  ADD CONSTRAINT `photo_ibfk_2` FOREIGN KEY (`catId`) REFERENCES `Categorie` (`catId`);
