-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Mar 24 Février 2015 à 19:20
-- Version du serveur: 5.5.27
-- Version de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `tvonline2`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorieage`
--

CREATE TABLE IF NOT EXISTS `categorieage` (
  `IDCATEGORIE` int(11) NOT NULL AUTO_INCREMENT,
  `CAT_LIBELLE` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IDCATEGORIE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `categorieage`
--

INSERT INTO `categorieage` (`IDCATEGORIE`, `CAT_LIBELLE`) VALUES
(1, 'tout'),
(2, 'jeune'),
(3, 'adulte'),
(5, 'gosse'),
(6, 'vieux');

-- --------------------------------------------------------

--
-- Structure de la table `emission`
--

CREATE TABLE IF NOT EXISTS `emission` (
  `IDEMISSION` int(11) NOT NULL AUTO_INCREMENT,
  `IDCATEGORIE` int(11) NOT NULL,
  `IDTYPE` int(11) NOT NULL,
  `E_NOM` varchar(50) DEFAULT NULL,
  `E_DUREE` bigint(20) DEFAULT NULL,
  `E_ZANAKA` varchar(100) DEFAULT NULL,
  `E_CHEMIN` varchar(200) DEFAULT NULL,
  `E_POCHETTE` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`IDEMISSION`),
  KEY `FK_ASSOCIATION_1` (`IDCATEGORIE`),
  KEY `FK_ASSOCIATION_2` (`IDTYPE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Contenu de la table `emission`
--

INSERT INTO `emission` (`IDEMISSION`, `IDCATEGORIE`, `IDTYPE`, `E_NOM`, `E_DUREE`, `E_ZANAKA`, `E_CHEMIN`, `E_POCHETTE`) VALUES
(42, 1, 1, 'Star academy 4', 300, NULL, 'http://localhost/dagotv/assets/videos/c46c9ebfb4712e3f482348ae005ed1dd.mp4', NULL),
(43, 1, 1, 'EdSheran', 300, NULL, 'http://localhost/dagotv/assets/videos/a9842ae329e3cea7d5ce1f516b201bdd.mp4', NULL),
(58, 1, 1, 'test', 600, '42,43', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `programme`
--

CREATE TABLE IF NOT EXISTS `programme` (
  `IDPROGRAMME` int(11) NOT NULL AUTO_INCREMENT,
  `P_DATE` datetime DEFAULT NULL,
  PRIMARY KEY (`IDPROGRAMME`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4298 ;

--
-- Contenu de la table `programme`
--

INSERT INTO `programme` (`IDPROGRAMME`, `P_DATE`) VALUES
(4296, '2015-02-19 00:00:00'),
(4297, '2015-02-20 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `programmeemission`
--

CREATE TABLE IF NOT EXISTS `programmeemission` (
  `IDEMISSION` int(11) NOT NULL,
  `IDPROGRAMME` int(11) NOT NULL,
  `HEURE_DIFFUSION` datetime DEFAULT NULL,
  PRIMARY KEY (`IDEMISSION`,`IDPROGRAMME`),
  KEY `FK_ASSOCIATION_4` (`IDPROGRAMME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `typeemission`
--

CREATE TABLE IF NOT EXISTS `typeemission` (
  `IDTYPE` int(11) NOT NULL AUTO_INCREMENT,
  `T_LIBELLE` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IDTYPE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `typeemission`
--

INSERT INTO `typeemission` (`IDTYPE`, `T_LIBELLE`) VALUES
(1, 'clip'),
(2, 'film'),
(3, 'DA'),
(4, 'documentaire'),
(5, 'journal'),
(6, 'série'),
(7, 'publicité');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `emission`
--
ALTER TABLE `emission`
  ADD CONSTRAINT `FK_ASSOCIATION_1` FOREIGN KEY (`IDCATEGORIE`) REFERENCES `categorieage` (`IDCATEGORIE`),
  ADD CONSTRAINT `FK_ASSOCIATION_2` FOREIGN KEY (`IDTYPE`) REFERENCES `typeemission` (`IDTYPE`);

--
-- Contraintes pour la table `programmeemission`
--
ALTER TABLE `programmeemission`
  ADD CONSTRAINT `FK_ASSOCIATION_3` FOREIGN KEY (`IDEMISSION`) REFERENCES `emission` (`IDEMISSION`),
  ADD CONSTRAINT `FK_ASSOCIATION_4` FOREIGN KEY (`IDPROGRAMME`) REFERENCES `programme` (`IDPROGRAMME`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
