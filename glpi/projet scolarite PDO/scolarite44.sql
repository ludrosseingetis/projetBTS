-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Serveur: 127.0.0.1
-- Généré le : Mar 23 Avril 2024 à 15:52
-- Version du serveur: 5.5.10
-- Version de PHP: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `scolarite44`
--

-- --------------------------------------------------------

--
-- Structure de la table `animations`
--

CREATE TABLE IF NOT EXISTS `animations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `animations`
--

INSERT INTO `animations` (`id`, `nom`) VALUES
(1, 'Laser game'),
(2, 'Bowling'),
(3, 'Meditation'),
(4, 'Musculation');

-- --------------------------------------------------------

--
-- Structure de la table `eleves`
--

CREATE TABLE IF NOT EXISTS `eleves` (
  `num` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `adresse` varchar(20) NOT NULL,
  `num_telephone` varchar(20) NOT NULL,
  `moyennes` float NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `eleves`
--

INSERT INTO `eleves` (`num`, `nom`, `adresse`, `num_telephone`, `moyennes`) VALUES
(0, 'tt', 'tt', '06', 7),
(1244, 'EE', 'paris', '06', 17),
(1299, 'David77', '', '', 20),
(1666, 'DAVID55', '', '', 3),
(3000, 'ss', 'ss', '06', 0),
(12223, 'david2222', '', '', 12),
(1211111, 'AAAAA', '', '', 10);

-- --------------------------------------------------------

--
-- Structure de la table `eleves_v2`
--

CREATE TABLE IF NOT EXISTS `eleves_v2` (
  `identifiant` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `Date_naissance` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `adresse` varchar(60) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `niveau` varchar(50) NOT NULL,
  `commentaire` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `id_animation` int(11) NOT NULL,
  PRIMARY KEY (`identifiant`),
  KEY `id_animation` (`id_animation`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `eleves_v2`
--

INSERT INTO `eleves_v2` (`identifiant`, `nom`, `prenom`, `Date_naissance`, `email`, `telephone`, `adresse`, `ville`, `niveau`, `commentaire`, `photo`, `id_animation`) VALUES
(14, 'zd', 'qzd', '2222-02-22', 'qzdqzd@gmail.com', '8880888888', 'qzdqzdbc paris ', 'Paris', 'Doctorat', '', 'AD.webp', 1),
(15, 'zd', 'qzd', '2222-02-22', 'qzdqzd@gmail.com', '8880888888', 'qzdqzdbc paris ', 'Paris', 'Doctorat', '', 'AD.webp', 1),
(16, 'Co', 'joqd', '1111-11-11', 'zdqzd@gmail.com', '8888888888', 'qzdzd CHamps ', 'Paris', 'Doctorat', '', 'Arreire plan.jpg', 2),
(17, 'qsqzd', 'dzqd', '1111-11-11', 'dzdq@gmail.com', '8888888888', 'dzqd champs elysee', 'Paris', 'Doctorat', '', 'web dev.jpg', 2),
(18, 'aa', 'aa', '0000-00-00', 'qdoqjzd@gmail.com', '8888888888', 'qqef paris', 'Paris', 'Doctorat', '', 'BTS SIO.png', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `login` varchar(20) NOT NULL,
  `motdepasse` varchar(67) NOT NULL,
  `statut` varchar(20) NOT NULL,
  PRIMARY KEY (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`login`, `motdepasse`, `statut`) VALUES
('aa', 'aa', 'enseignant'),
('anischergui', 'aa', 'administratif'),
('bb', 'bb', 'administratif'),
('david', 'david', 'eleve'),
('ee', 'ee', ''),
('ft', 'ft', ''),
('gg', 'gg', ''),
('Kevin', 'kevin', 'statut'),
('leon', 'leon', 'eleve'),
('mm', 'b3cd915d758008bd19d0f2428fbb354a', ''),
('newadmin', '80396443f055ea0c4fd9719ecefcc25a', 'administratif'),
('NewKevin', '5d41402abc4b2a76b9719d911017c592', 'studient'),
('nn', 'eab71244afb687f16d8c4f5ee9d6ef0e', 'nn'),
('oo', 'e47ca7a09cf6781e29634502345930a7', ''),
('test', 'test', 'student'),
('tt', 'tt', ''),
('ttt', '9990775155c3518a0d79', ''),
('uu', '6277e2a7446059985dc9bcf0a4ac1a8f', ''),
('yy', '2fb1c5cf58867b5bbc9a1b145a86f3a0', ''),
('yyy', 'yyy', ''),
('zzz', 'zzz', '');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `eleves_v2`
--
ALTER TABLE `eleves_v2`
  ADD CONSTRAINT `eleves_v2_ibfk_1` FOREIGN KEY (`id_animation`) REFERENCES `animations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
