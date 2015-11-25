-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 25 Novembre 2015 à 15:24
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `minichat`
--

-- --------------------------------------------------------

--
-- Structure de la table `minichat`
--

CREATE TABLE IF NOT EXISTS `minichat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date_message` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `minichat`
--

INSERT INTO `minichat` (`id`, `pseudo`, `message`, `date_message`) VALUES
(1, 'Jules', 'Salut comment ça va ?', '2015-11-25'),
(2, 'Paul', 'Bien merci', '2015-11-12'),
(3, 'Jules', 'Et l''école ?', '2015-11-20'),
(4, 'Paul', 'Pas mal.', '2015-11-16'),
(5, 'Paul', 'Hello', '2015-11-04'),
(6, 'Maude', 'Et vous ?', '2015-11-06'),
(7, 'Maude', 'vergrgr', '2015-11-03'),
(8, 'maude', 'dzz\r\n', '2015-11-02'),
(9, 'Maude', 'mfkfrk', '0000-00-00'),
(10, 'Paul', 'vdgvdg', '0000-00-00'),
(11, 'Paul', 'gkprkgpr', '0000-00-00'),
(12, 'Paul', 'fhrhrhr', '0000-00-00'),
(13, 'maude', 'fhtht', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
