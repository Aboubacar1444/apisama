-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 21 déc. 2022 à 09:18
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `apisama`
--

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20221115120435', '2022-11-15 13:22:51', 5410),
('DoctrineMigrations\\Version20221116094527', '2022-11-16 09:45:36', 2726),
('DoctrineMigrations\\Version20221116165549', '2022-11-16 16:56:04', 926),
('DoctrineMigrations\\Version20221221090541', '2022-12-21 09:06:10', 5500);

-- --------------------------------------------------------

--
-- Structure de la table `subscribe`
--

DROP TABLE IF EXISTS `subscribe`;
CREATE TABLE IF NOT EXISTS `subscribe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `subscribe`
--

INSERT INTO `subscribe` (`id`, `name`, `type`, `price`) VALUES
(1, 'MALIVISION', 'DECOUVERTE', 5000),
(2, 'MALIVISION', 'MALIVISION', 12000),
(3, 'CANAL+', 'DECOUVERTE + CANAL', 15000),
(4, 'MALIVISION', 'HORONYA', 15000),
(5, 'MALIVISION', 'MALIVISION + CANAL', 21000),
(6, 'MALIVISION', 'SMART VIP', 25000),
(7, 'MALIVISION', 'SMART Découverte', 4500),
(8, 'MALIVISION', 'SMART MALIVISION', 11000),
(9, 'MALIVISION', 'PromoCFDN+3moisBQTMLV', 11666),
(10, 'MALIVISION', 'SMARTHORONYA', 14000),
(11, 'MALIVISION', 'SMART Découverte+Canal', 15500),
(12, 'MALIVISION', 'Découverte+Canal', 16000),
(13, 'MALIVISION', 'SMART Malivision+Canal ', 21000),
(14, 'MALIVISION', 'PROMO:CFDN+1moisBQTMLV', 22000),
(15, 'MALIVISION', 'VIP', 26000);

-- --------------------------------------------------------

--
-- Structure de la table `subscribe_option`
--

DROP TABLE IF EXISTS `subscribe_option`;
CREATE TABLE IF NOT EXISTS `subscribe_option` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subscribe_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_45743697C72A4771` (`subscribe_id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `subscribe_option`
--

INSERT INTO `subscribe_option` (`id`, `subscribe_id`, `name`, `price`) VALUES
(1, 1, 'AUCUN', 0),
(2, 1, 'Adulte', 0),
(3, 1, 'Novelas et A+', 500),
(4, 1, 'ENFANT', 1000),
(5, 1, 'InfoSport+', 1000),
(8, 1, 'Documentaire', 3500),
(9, 1, 'Compl. MALIVISION', 7000),
(11, 1, 'Compl. DCV+CANAL', 10000),
(12, 1, 'Compl. Horonya', 10000),
(13, 1, 'Option CANAL+', 10000),
(14, 1, 'Waati Horonya', 22500),
(15, 2, 'AUCUN', 0),
(16, 2, 'Adulte', 0),
(17, 2, 'Novelas et A+', 500),
(18, 2, 'Planete+', 1000),
(19, 2, 'InfoSport+', 1000),
(20, 2, 'Compl. Horonya', 3000),
(21, 2, 'Compl. MALIVISION', 8000),
(22, 2, 'Option CANAL+', 10000),
(23, 2, 'Waati Horonya', 22500),
(24, 3, 'AUCUN', 0),
(25, 3, 'Adulte', 0),
(26, 3, 'Novelas et A+', 500),
(27, 3, 'ENFANT', 1000),
(28, 3, 'InfoSport+', 1000),
(29, 3, 'Documentaire', 3500),
(30, 3, 'Compl. MLV+CANAL', 5000),
(31, 3, 'Waati Horonya', 22500),
(32, 4, 'AUCUN', 0),
(33, 4, 'Adulte 3 HRV/VIP', 0),
(34, 4, 'Compl. HRN>HRN+CANAL', 10000),
(35, 4, 'Compl. Horonya', 10000),
(36, 4, 'Compl. CANAL+', 10000),
(37, 5, 'AUCUN', 0),
(38, 5, 'Adulte', 0),
(39, 5, 'Novelas et A+', 500),
(40, 5, 'Planete+', 1000),
(41, 5, 'InfoSport+', 1000),
(42, 5, 'Compl. MLV+CANAL>HRN+CANAL', 5000),
(43, 5, 'Waati Horonya', 22500),
(44, 6, 'AUCUN', 0),
(45, 6, 'Adulte', 0);

-- --------------------------------------------------------

--
-- Structure de la table `subscribe_term`
--

DROP TABLE IF EXISTS `subscribe_term`;
CREATE TABLE IF NOT EXISTS `subscribe_term` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subscribe_id` int(11) DEFAULT NULL,
  `term` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_amount` double DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `IDX_12FEAAB5C72A4771` (`subscribe_id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `subscribe_term`
--

INSERT INTO `subscribe_term` (`id`, `subscribe_id`, `term`, `discount_amount`) VALUES
(1, 1, '1', 0),
(2, 1, '2', 0),
(3, 1, '3', 1500),
(4, 1, '4', 2000),
(5, 1, '5', 2500),
(6, 1, '6', 4500),
(7, 1, '7', 5200),
(8, 1, '8', 6000),
(9, 1, '9', 6700),
(10, 1, '10', 7500),
(11, 1, '11', 8200),
(12, 1, '12', 12000),
(13, 2, '1', 0),
(14, 2, '2', 0),
(15, 2, '3', 4000),
(16, 2, '4', 5300),
(17, 2, '5', 6600),
(18, 2, '6', 14000),
(19, 2, '7', 16300),
(20, 2, '8', 18600),
(21, 2, '9', 21000),
(22, 2, '10', 23300),
(23, 2, '11', 25600),
(24, 2, '12', 36000),
(25, 3, '1', 0),
(26, 3, '2', 0),
(27, 3, '3', 1500),
(28, 3, '4', 2000),
(29, 3, '5', 2500),
(30, 3, '6', 4500),
(31, 3, '7', 5200),
(32, 3, '8', 6000),
(33, 3, '9', 6700),
(34, 3, '10', 7500),
(35, 3, '11', 8200),
(36, 3, '12', 12000),
(37, 4, '1', 0),
(38, 4, '2', 0),
(39, 4, '3', 5000),
(40, 4, '4', 6600),
(41, 4, '5', 8300),
(42, 4, '6', 18000),
(43, 4, '7', 21000),
(44, 4, '8', 24000),
(45, 4, '9', 27000),
(46, 4, '10', 30000),
(47, 4, '11', 33000),
(48, 4, '12', 45000),
(49, 5, '1', 0),
(50, 5, '2', 0),
(51, 5, '3', 0),
(52, 5, '4', 0),
(53, 5, '5', 0),
(54, 5, '6', 0),
(55, 5, '7', 0),
(56, 5, '8', 0),
(57, 5, '9', 0),
(58, 5, '10', 0),
(59, 5, '11', 0),
(60, 5, '12', 0),
(61, 6, '1', 0),
(62, 6, '2', 0),
(63, 6, '3', 5000),
(64, 6, '4', 6600),
(65, 6, '5', 8300),
(66, 6, '6', 18000),
(67, 6, '7', 21000),
(68, 6, '8', 24000),
(69, 6, '9', 27000),
(70, 6, '10', 30000),
(71, 6, '11', 33000),
(72, 6, '12', 45000);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `subscribe_option`
--
ALTER TABLE `subscribe_option`
  ADD CONSTRAINT `FK_45743697C72A4771` FOREIGN KEY (`subscribe_id`) REFERENCES `subscribe` (`id`);

--
-- Contraintes pour la table `subscribe_term`
--
ALTER TABLE `subscribe_term`
  ADD CONSTRAINT `FK_12FEAAB5C72A4771` FOREIGN KEY (`subscribe_id`) REFERENCES `subscribe` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
