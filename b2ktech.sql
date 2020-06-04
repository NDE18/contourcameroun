-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 14, 2018 at 03:59 PM
-- Server version: 5.7.19
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b2ktech`
--

-- --------------------------------------------------------

--
-- Table structure for table `annonce`
--

DROP TABLE IF EXISTS `annonce`;
CREATE TABLE IF NOT EXISTS `annonce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(100) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `departement`
--

DROP TABLE IF EXISTS `departement`;
CREATE TABLE IF NOT EXISTS `departement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `region` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unq_departement_region` (`region`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='cette tablee listera tous les departements du cameroun ainsi que leur region d''appartenance';

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

DROP TABLE IF EXISTS `grade`;
CREATE TABLE IF NOT EXISTS `grade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` int(11) NOT NULL,
  `users` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unq_grade_users` (`users`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='cette table contient les differents role des users à savoir s''il sont passager ou conducteur';

-- --------------------------------------------------------

--
-- Table structure for table `paiement`
--

DROP TABLE IF EXISTS `paiement`;
CREATE TABLE IF NOT EXISTS `paiement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reservation` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unq_paiement_reservation` (`reservation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

DROP TABLE IF EXISTS `region`;
CREATE TABLE IF NOT EXISTS `region` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='cette table liste toutes les regions du cameroun';

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users` int(11) NOT NULL,
  `trajet` int(11) DEFAULT NULL,
  `annonce` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unq_users_trajet_users` (`users`),
  UNIQUE KEY `unq_reservation_annonce` (`annonce`),
  UNIQUE KEY `unq_users_trajet_trajet` (`trajet`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='cette table contient la liste des users d''un trajet';

-- --------------------------------------------------------

--
-- Table structure for table `trajet`
--

DROP TABLE IF EXISTS `trajet`;
CREATE TABLE IF NOT EXISTS `trajet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `voiture` int(11) NOT NULL,
  `ville` int(11) NOT NULL,
  `annonce` int(11) NOT NULL,
  `imatriculation` varchar(50) NOT NULL,
  `prix_place` int(11) NOT NULL,
  `date_debut` datetime NOT NULL,
  `date_fin` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unq_trajet_voiture` (`voiture`),
  UNIQUE KEY `unq_trajet_ville` (`ville`),
  KEY `annonce` (`annonce`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gender` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `pseudo` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `prenom` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='cette table contiendra les informations des utilisateurs';

-- --------------------------------------------------------

--
-- Table structure for table `ville`
--

DROP TABLE IF EXISTS `ville`;
CREATE TABLE IF NOT EXISTS `ville` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `departement` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unq_ville_departement` (`departement`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='cette table listera les differentes ville du cameroun';

-- --------------------------------------------------------

--
-- Table structure for table `voiture`
--

DROP TABLE IF EXISTS `voiture`;
CREATE TABLE IF NOT EXISTS `voiture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `nombre_place` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='cette table listera toute les voitures resencé par l''admin ainsi que leur nombre de place pour éviter d''avoir les annonces qui propose des places qui ne peuvent pas existé';

--
-- Constraints for dumped tables
--

--
-- Constraints for table `annonce`
--
ALTER TABLE `annonce`
  ADD CONSTRAINT `fk_annonce_reservation` FOREIGN KEY (`id`) REFERENCES `reservation` (`annonce`) ON UPDATE CASCADE;

--
-- Constraints for table `departement`
--
ALTER TABLE `departement`
  ADD CONSTRAINT `fk_departement_ville` FOREIGN KEY (`id`) REFERENCES `ville` (`departement`) ON UPDATE CASCADE;

--
-- Constraints for table `region`
--
ALTER TABLE `region`
  ADD CONSTRAINT `fk_region_departement` FOREIGN KEY (`id`) REFERENCES `departement` (`region`) ON UPDATE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `fk_reservation_paiement` FOREIGN KEY (`id`) REFERENCES `paiement` (`reservation`) ON UPDATE CASCADE;

--
-- Constraints for table `trajet`
--
ALTER TABLE `trajet`
  ADD CONSTRAINT `fk_trajet_users_trajet` FOREIGN KEY (`id`) REFERENCES `reservation` (`trajet`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
