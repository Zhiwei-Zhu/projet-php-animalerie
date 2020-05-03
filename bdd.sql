-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 03 mai 2020 à 21:43
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetpoo`
--

-- --------------------------------------------------------

--
-- Structure de la table `animal`
--

DROP TABLE IF EXISTS `animal`;
CREATE TABLE IF NOT EXISTS `animal` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `race` varchar(255) NOT NULL,
  `taille` int(255) NOT NULL,
  `poids` int(255) NOT NULL,
  `age` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `animal`
--

INSERT INTO `animal` (`id`, `nom`, `type`, `race`, `taille`, `poids`, `age`) VALUES
(3, 'Zhu', 'chien', 'dadazda', 1111, 11111, 111);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `datetime` datetime(6) NOT NULL,
  `montanttotal` int(255) NOT NULL,
  `etat` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `user`, `datetime`, `montanttotal`, `etat`) VALUES
(12, 'Zhu', '2020-05-03 00:00:00.000000', 120, 'livrÃ©'),
(8, 'Zhu', '2020-05-03 00:00:00.000000', 10, 'attente confirmation'),
(7, 'Zhu', '2020-05-03 00:00:00.000000', 10, 'attente confirmation'),
(10, 'Zhu', '2020-05-03 00:00:00.000000', 10, 'attente confirmation'),
(11, 'Zhu', '2020-05-03 00:00:00.000000', 0, 'attente confirmation');

-- --------------------------------------------------------

--
-- Structure de la table `dons`
--

DROP TABLE IF EXISTS `dons`;
CREATE TABLE IF NOT EXISTS `dons` (
  `user_id` int(255) NOT NULL,
  `montant` int(255) NOT NULL,
  `datetime` datetime(6) NOT NULL,
  `id` int(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `dons`
--

INSERT INTO `dons` (`user_id`, `montant`, `datetime`, `id`) VALUES
(3, 12, '2020-05-03 00:00:00.000000', 1);

-- --------------------------------------------------------

--
-- Structure de la table `lignecommande`
--

DROP TABLE IF EXISTS `lignecommande`;
CREATE TABLE IF NOT EXISTS `lignecommande` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `commande_id` varchar(255) DEFAULT 'null',
  `produit_id` varchar(255) NOT NULL,
  `quantite` varchar(255) NOT NULL,
  `montant` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lignecommande`
--

INSERT INTO `lignecommande` (`id`, `commande_id`, `produit_id`, `quantite`, `montant`) VALUES
(1, NULL, '1', '1', 10),
(2, NULL, '1', '1', 10),
(3, NULL, '1', '12', 120),
(4, '7', '1', '1', 10),
(5, '7', '1', '12', 120);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `nom` varchar(255) NOT NULL,
  `type_animal` varchar(255) NOT NULL,
  `prix` int(255) NOT NULL,
  `stock` int(255) NOT NULL,
  `id` int(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`nom`, `type_animal`, `prix`, `stock`, `id`) VALUES
('Zhu', 'chien', 10, 122, 1),
('Zhu', 'chien', 12, 20, 2);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `animal_id` int(255) NOT NULL,
  `datetime` datetime(6) NOT NULL,
  `daterdv` datetime(6) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`),
  UNIQUE KEY `animal_id` (`animal_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `user_id`, `animal_id`, `datetime`, `daterdv`) VALUES
(1, 3, 1, '2020-05-03 00:00:00.000000', '2020-10-12 00:00:00.000000');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `code_postal` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `adresse`, `ville`, `code_postal`, `mail`, `telephone`, `role`, `password`) VALUES
(3, 'Zhu', 'Vincent', 'dadazda', 'dadadaz', '34342', 'azdaccsaqcqsc@gmail.com', '24535343', 'admin', '$2y$10$KPW1tAYqqr1H.zBXjO83heyMSo8C1u.vQNBrBRijai5ygd7y3VDK2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
