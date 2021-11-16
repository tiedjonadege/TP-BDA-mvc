-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 03 Mai 2020 à 20:41
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `combio`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `codecategs` int(11) NOT NULL AUTO_INCREMENT,
  `libelles` varchar(7) NOT NULL,
  `nomcatego` text NOT NULL,
  PRIMARY KEY (`codecategs`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`codecategs`, `libelles`, `nomcatego`) VALUES
(1, 'BTE', 'beaute'),
(2, 'CMP', 'complement'),
(3, 'FRT', 'fruits'),
(4, 'LEG', 'legumes'),
(5, 'SNT', 'sante');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `noclient` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(15) NOT NULL,
  `prenoms` varchar(25) NOT NULL,
  `ville` varchar(25) NOT NULL,
  `contact` varchar(25) NOT NULL,
  `cli_parrain` int(11) NOT NULL,
  PRIMARY KEY (`noclient`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `clients`
--

INSERT INTO `clients` (`noclient`, `nom`, `prenoms`, `ville`, `contact`, `cli_parrain`) VALUES
(1, 'konan', 'yves', 'abidjan', '05010203', 0),
(2, 'sylla', 'moussa', 'abidjan', '07072121', 1),
(3, 'zoma', 'sylvie', 'bingerville', '01213104', 1),
(4, 'konan', 'yao', 'bouake', '77211615', 1),
(5, 'ibn', 'ali', 'bouafle', '56660166', 5),
(6, 'digbeu', 'valerie', 'gagnoa', '66015666', 2),
(7, 'yobouet', 'pierre', 'touba', '45412103', 2),
(8, 'nanti', 'lou', 'bouafle', '66511213', 2),
(9, 'essis', 'jean', 'dabou', '51211251', 3),
(10, 'akre', 'noelle', 'abidjan', '07758543', 1),
(11, 'adje', 'audrey', 'abidjan', '02765466', 1),
(12, 'konan', 'narcisse', 'yakro', '09761698', 5);

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE IF NOT EXISTS `commandes` (
  `nocommandes` int(11) NOT NULL AUTO_INCREMENT,
  `datecom` date NOT NULL,
  `adressedelivraison` text NOT NULL,
  `noclients` int(11) NOT NULL,
  PRIMARY KEY (`nocommandes`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `commandes`
--

INSERT INTO `commandes` (`nocommandes`, `datecom`, `adressedelivraison`, `noclients`) VALUES
(1, '2014-05-09', '01 BP 1238 ABIDJAN 01', 1),
(2, '2012-01-27', '22 BP 56 ABIDJAN 22', 2),
(3, '2013-03-29', '28 BP 1189 ABIDJAN 28', 10),
(4, '2013-06-16', '01 BP 345 BOUAKE 01', 4),
(5, '2013-01-30', '22 BP 56 ABIDJAN 22', 2);

-- --------------------------------------------------------

--
-- Structure de la table `contenir`
--

CREATE TABLE IF NOT EXISTS `contenir` (
  `nocommande` int(11) NOT NULL,
  `refproduit` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prixvente` int(11) NOT NULL,
  PRIMARY KEY (`nocommande`,`refproduit`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `contenir`
--

INSERT INTO `contenir` (`nocommande`, `refproduit`, `quantite`, `prixvente`) VALUES
(1, 1, 5, 15000),
(1, 2, 10, 20000),
(2, 2, 10, 800),
(2, 4, 15, 2000),
(2, 5, 11, 3500),
(3, 2, 15, 800),
(3, 7, 21, 8000),
(3, 8, 10, 16000),
(4, 1, 3, 27000),
(4, 5, 15, 9500),
(4, 6, 10, 4500),
(5, 1, 25, 20000),
(5, 2, 2, 700),
(5, 5, 12, 3500);

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE IF NOT EXISTS `produits` (
  `refproduits` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` text NOT NULL,
  `prixvente` int(11) NOT NULL,
  `codecateg` int(11) NOT NULL,
  PRIMARY KEY (`refproduits`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`refproduits`, `libelle`, `prixvente`, `codecateg`) VALUES
(1, 'GRAINE DE NIGEL', 30000, 5),
(2, 'TISANE DE CITRONNELLE', 700, 5),
(3, 'BOITE DE SPIRULINE', 4500, 2),
(4, 'SIROP D''AGAVE', 3500, 2),
(5, 'HUILE D''ARGAN 200ml', 9000, 1),
(6, 'BOITE DE GRAINE DE MORINGA', 5000, 2),
(7, 'MANGOUSTINE SACHET 1KG', 8000, 3),
(8, 'AIL SANS ODEUR BT 50 CP', 15000, 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
