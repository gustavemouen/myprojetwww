-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 11 avr. 2023 à 21:45
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestionfete`
--

-- --------------------------------------------------------

--
-- Structure de la table `catgory`
--

DROP TABLE IF EXISTS `catgory`;
CREATE TABLE IF NOT EXISTS `catgory` (
  `idcategory` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`idcategory`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `catgory`
--

INSERT INTO `catgory` (`idcategory`, `name`) VALUES
(1, 'enfant'),
(2, 'homme'),
(3, 'femme');

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `idcompte` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`idcompte`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`idcompte`, `username`, `email`, `password`) VALUES
(21, 'toto', 'sdxfgh', 'f5fc9a16a990ec8e82f66fa5867c54e8'),
(22, 'matador', 'matador@gmail.com', 'e82c4b19b8151ddc25d4d93baf7b908f'),
(23, 'tom', 'matador2@gmail.com', 'e82c4b19b8151ddc25d4d93baf7b908f'),
(24, 'moi', 'toma@gmail.com', 'e82c4b19b8151ddc25d4d93baf7b908f');

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `iditem` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(1000) NOT NULL,
  `category` int(11) NOT NULL,
  PRIMARY KEY (`iditem`),
  KEY `category` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `items`
--

INSERT INTO `items` (`iditem`, `name`, `description`, `price`, `image`, `category`) VALUES
(4, 'chemise', 'tres free et clean', 10, 'chemise.png', 1),
(6, 'pantalon', 'tres classe', 5, 'pantalon.png', 1),
(13, 'jackette', 'tres free', 15, 'jackette.png', 2);

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

DROP TABLE IF EXISTS `personne`;
CREATE TABLE IF NOT EXISTS `personne` (
  `idpersonne` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `statutsocial` varchar(100) NOT NULL,
  `idcompte` int(11) NOT NULL,
  PRIMARY KEY (`idpersonne`),
  KEY `idcompte` (`idcompte`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`idpersonne`, `nom`, `prenom`, `statutsocial`, `idcompte`) VALUES
(31, 'sdfg', 'sfdgfdg', 'cdxvfcgh', 21),
(32, 'tom', 'john', 'celib', 22),
(33, 'tom', 'john', 'cleib', 23),
(34, 'tom', 'john', 'celib', 24);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`category`) REFERENCES `catgory` (`idcategory`);

--
-- Contraintes pour la table `personne`
--
ALTER TABLE `personne`
  ADD CONSTRAINT `personne_ibfk_1` FOREIGN KEY (`idcompte`) REFERENCES `compte` (`idcompte`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
