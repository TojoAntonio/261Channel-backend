-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Sam 21 Mars 2015 à 05:20
-- Version du serveur: 5.5.27
-- Version de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `tvonline`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnement`
--

CREATE TABLE IF NOT EXISTS `abonnement` (
  `IDABONNEMENT` int(11) NOT NULL AUTO_INCREMENT,
  `A_CODE` varchar(50) DEFAULT NULL,
  `DATEDEBUT` date DEFAULT NULL,
  `DUREEMOIS` int(11) DEFAULT NULL,
  `A_USED` tinyint(1) DEFAULT NULL,
  `SUPPRIME` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`IDABONNEMENT`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `abonnement`
--

INSERT INTO `abonnement` (`IDABONNEMENT`, `A_CODE`, `DATEDEBUT`, `DUREEMOIS`, `A_USED`, `SUPPRIME`) VALUES
(1, 'WAWA SASA', '2015-12-02', 12, 0, 0),
(2, 'COCO BOMBO', '2015-12-02', 1, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `categorieage`
--

CREATE TABLE IF NOT EXISTS `categorieage` (
  `IDCATEGORIE` int(11) NOT NULL AUTO_INCREMENT,
  `CAT_LIBELLE` varchar(50) DEFAULT NULL,
  `SUPPRIME` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`IDCATEGORIE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `categorieage`
--

INSERT INTO `categorieage` (`IDCATEGORIE`, `CAT_LIBELLE`, `SUPPRIME`) VALUES
(1, '12', 0),
(2, '16', 0),
(3, '18', 0),
(4, '0', 0);

-- --------------------------------------------------------

--
-- Structure de la table `emission`
--

CREATE TABLE IF NOT EXISTS `emission` (
  `IDEMISSION` int(11) NOT NULL AUTO_INCREMENT,
  `IDCATEGORIE` int(11) NOT NULL,
  `IDTYPE` int(11) NOT NULL,
  `E_NOM` varchar(50) DEFAULT NULL,
  `E_DUREE` time DEFAULT NULL,
  `E_ZANAKA` varchar(100) DEFAULT NULL,
  `E_CHEMIN` varchar(200) DEFAULT NULL,
  `E_PICTURE` varchar(200) DEFAULT NULL,
  `E_DESCRIPTION` varchar(1000) DEFAULT NULL,
  `suggeré` tinyint(1) NOT NULL,
  `SUPPRIME` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`IDEMISSION`),
  KEY `FK_ASSOCIATION_1` (`IDCATEGORIE`),
  KEY `FK_ASSOCIATION_2` (`IDTYPE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Contenu de la table `emission`
--

INSERT INTO `emission` (`IDEMISSION`, `IDCATEGORIE`, `IDTYPE`, `E_NOM`, `E_DUREE`, `E_ZANAKA`, `E_CHEMIN`, `E_PICTURE`, `E_DESCRIPTION`, `suggeré`, `SUPPRIME`) VALUES
(1, 4, 1, 'Clips examples', '00:06:32', '2,3,4', NULL, 'lasako-izy-G.jpg', NULL, 1, 0),
(2, 4, 1, 'YUI - LIFE-short ver.-', '00:01:55', NULL, 'YUI - LIFE-short ver.-.mp4', NULL, NULL, 0, 0),
(3, 4, 1, 'YUI - Rain-short ver.-', '00:01:33', NULL, 'YUI - Rain-short ver.-.mp4', NULL, NULL, 0, 0),
(4, 4, 1, 'The Letter Black - Hanging On By A Thread', '00:03:04', NULL, 'The Letter Black - Hanging On By A Thread.mp4', NULL, NULL, 0, 0),
(5, 1, 4, 'Manga', '00:30:00', '6,7', NULL, 'lasako-izy-G.jpg', NULL, 1, 0),
(6, 1, 4, 'DBZ Kai ep 18', '00:22:33', NULL, '18.mp4', NULL, NULL, 0, 0),
(7, 1, 4, 'Naruto Shippuden ep 394', '00:23:09', NULL, '394.mp4', NULL, NULL, 0, 0),
(8, 4, 1, 'Matoa aho mikalo - Fanja Andriamanantena', '00:03:18', NULL, 'Matoa aho mikalo - Fanja Andriamanantena.mp4', NULL, NULL, 0, 0),
(9, 4, 1, 'Tiako ianao - Felaniary', '00:04:49', NULL, 'Tiako ianao - Felaniary.mp4', NULL, NULL, 0, 0),
(10, 4, 1, 'Tsara tso-drano - Dadah Rabel _ Inah', '00:04:06', NULL, 'Tsara tso-drano - Dadah Rabel _ Inah.mp4', NULL, NULL, 0, 0),
(11, 4, 1, 'Coulisse', '00:30:00', '8,9,10', NULL, 'Coulisse.png', 'NE RATEZ PAS l''EMISSION SPECIAL CONSACRE A LA DECOUVERTE DE VOS ARTISTES PREFERES', 0, 0),
(12, 4, 3, 'Vaovao', '00:01:50', NULL, 'bxbcvbwcvb', 'cxvbcv', 'SUIVEZ LES ACTUALITES OU QUE VOUS SOYEZ', 0, 0),
(13, 3, 6, 'LOL', '00:00:00', NULL, 'lol.mp4', 'miley.jpg', 'Film Comedie jouer par miley cyrius', 1, 0),
(14, 4, 1, 'vaovao ', '00:00:35', NULL, 'vaovao.mp4', 'news.jpg', 'Vaovao arahanw isan''andro eto amin''ny television', 3, 0),
(15, 4, 1, 'Clip Gasy', NULL, '16,17,18,19,20,21,22,23,24,25', NULL, 'gasy.jpg', 'Clip Gasy isan-karazany', 0, 0),
(16, 4, 1, 'Clip Meizah', '00:00:05', NULL, 'meizah.mp4', NULL, NULL, 0, 0),
(17, 4, 1, 'Clip Marion', '00:00:07', NULL, 'marion.mp4', NULL, NULL, 0, 0),
(18, 4, 1, 'Clip Odyai', '00:00:06', NULL, 'odyai.mp4', NULL, NULL, 0, 0),
(19, 4, 1, 'Clip Agrad', '00:00:05', NULL, 'agrad.mp4', NULL, NULL, 0, 0),
(20, 4, 1, 'Clip tht', '00:00:00', NULL, 'tht.mp4', NULL, NULL, 0, 0),
(21, 4, 1, 'Clip Meizah', '00:00:05', NULL, 'meizah1.mp4', NULL, NULL, 0, 0),
(22, 4, 1, 'Clip Marion', '00:00:05', NULL, 'marion1.mp4', NULL, NULL, 0, 0),
(23, 4, 1, 'Clip Odyai', '00:00:03', NULL, 'odyai1.mp4', NULL, NULL, 0, 0),
(24, 4, 1, 'Clip', '00:00:04', NULL, 'agrad2.mp4', NULL, NULL, 1, 0),
(25, 4, 1, 'Clip THT', '00:00:08', NULL, 'tht1.mp4', NULL, NULL, 1, 0),
(26, 3, 6, 'Crypt', '00:00:00', NULL, 'crypt.mp4', 'crypt.jpg', 'Film Horreur', 0, 0),
(27, 4, 2, 'Animal', '00:00:40', NULL, 'anims.mp4', 'iso.jpg', 'Documentaire des animaux le plus rapides du monde', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `emissionlike`
--

CREATE TABLE IF NOT EXISTS `emissionlike` (
  `IDEMISSION` int(11) DEFAULT NULL,
  `IDCATEGORIE` int(11) DEFAULT NULL,
  `IDTYPE` int(11) DEFAULT NULL,
  `E_NOM` varchar(50) DEFAULT NULL,
  `E_DUREE` time DEFAULT NULL,
  `E_ZANAKA` varchar(100) DEFAULT NULL,
  `E_CHEMIN` varchar(200) DEFAULT NULL,
  `E_PICTURE` varchar(200) DEFAULT NULL,
  `E_DESCRIPTION` varchar(1000) DEFAULT NULL,
  `suggeré` tinyint(1) DEFAULT NULL,
  `nb_like` bigint(21) DEFAULT NULL,
  `SUPPRIME` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `emissionpardefaut`
--

CREATE TABLE IF NOT EXISTS `emissionpardefaut` (
  `idEmission` int(11) NOT NULL,
  `Jour` varchar(50) NOT NULL,
  `Heure` time NOT NULL,
  `SUPPRIME` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idEmission`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `emissionpardefaut`
--

INSERT INTO `emissionpardefaut` (`idEmission`, `Jour`, `Heure`, `SUPPRIME`) VALUES
(11, 'Tous les dimanches', '19:00:00', 0),
(12, 'Tous les jours', '20:00:00', 0);

-- --------------------------------------------------------

--
-- Structure de la table `like`
--

CREATE TABLE IF NOT EXISTS `like` (
  `idEmission` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  PRIMARY KEY (`idEmission`,`idUser`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `like`
--

INSERT INTO `like` (`idEmission`, `idUser`) VALUES
(1, 1),
(1, 2),
(2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `programme`
--

CREATE TABLE IF NOT EXISTS `programme` (
  `IDPROGRAMME` int(11) NOT NULL AUTO_INCREMENT,
  `P_DATE` date DEFAULT NULL,
  `SUPPRIME` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`IDPROGRAMME`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `programme`
--

INSERT INTO `programme` (`IDPROGRAMME`, `P_DATE`, `SUPPRIME`) VALUES
(1, '2015-02-01', 0),
(2, '2015-02-02', 0),
(3, '2015-02-03', 0),
(4, '2015-02-04', 0),
(5, '2015-02-18', 0),
(6, '2015-02-06', 0),
(7, '2015-02-09', 0),
(8, '2015-02-15', 0),
(9, '2015-02-08', 0),
(10, '2015-03-10', 0),
(11, '2015-02-25', 0);

-- --------------------------------------------------------

--
-- Structure de la table `programmeemission`
--

CREATE TABLE IF NOT EXISTS `programmeemission` (
  `IDEMISSION` int(11) NOT NULL,
  `IDPROGRAMME` int(11) NOT NULL,
  `HEURE_DIFFUSION` time DEFAULT NULL,
  `SUPPRIME` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`IDEMISSION`,`IDPROGRAMME`),
  KEY `FK_ASSOCIATION_4` (`IDPROGRAMME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `programmeemission`
--

INSERT INTO `programmeemission` (`IDEMISSION`, `IDPROGRAMME`, `HEURE_DIFFUSION`, `SUPPRIME`) VALUES
(1, 4, '05:00:00', 0),
(1, 5, '05:00:00', 0),
(1, 6, '07:00:00', 0),
(1, 7, '07:00:00', 0),
(1, 8, '05:00:00', 0),
(1, 9, '20:30:00', 0),
(1, 10, '11:20:00', 0),
(2, 8, '10:45:00', 0),
(5, 5, '17:00:00', 0),
(5, 6, '12:45:00', 0),
(5, 7, '12:45:00', 0),
(5, 8, '21:15:00', 0),
(5, 10, '17:00:00', 0),
(11, 5, '19:00:00', 0),
(11, 6, '21:15:00', 0),
(11, 7, '21:15:00', 0),
(13, 10, '08:00:00', 0),
(14, 10, '09:00:00', 0),
(15, 10, '09:35:00', 0),
(26, 10, '10:00:00', 0);

-- --------------------------------------------------------

--
-- Structure de la table `typeemission`
--

CREATE TABLE IF NOT EXISTS `typeemission` (
  `IDTYPE` int(11) NOT NULL AUTO_INCREMENT,
  `T_LIBELLE` varchar(50) DEFAULT NULL,
  `SUPPRIME` int(11) NOT NULL,
  PRIMARY KEY (`IDTYPE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `typeemission`
--

INSERT INTO `typeemission` (`IDTYPE`, `T_LIBELLE`, `SUPPRIME`) VALUES
(1, 'Clip', 0),
(2, 'Documentaire', 0),
(3, 'Journal', 0),
(4, 'Divertissement', 0),
(5, 'D.A.', 0),
(6, 'Film', 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `IDUSER` int(11) NOT NULL AUTO_INCREMENT,
  `U_NOM` varchar(50) DEFAULT NULL,
  `U_MDP` varchar(50) DEFAULT NULL,
  `U_PSEUDO` varchar(50) DEFAULT NULL,
  `U_PAYS` varchar(50) DEFAULT NULL,
  `U_VILLE` varchar(50) DEFAULT NULL,
  `U_REGION` varchar(50) DEFAULT NULL,
  `U_ADRESSE` varchar(50) DEFAULT NULL,
  `U_TEL` varchar(50) DEFAULT NULL,
  `U_NAISSANCE` varchar(50) DEFAULT NULL,
  `U_SITE` varchar(50) DEFAULT NULL,
  `IDABONNEMENT` int(11) DEFAULT NULL,
  `U_EMAIL` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IDUSER`),
  KEY `fk_idabonnement_idx` (`IDABONNEMENT`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`IDUSER`, `U_NOM`, `U_MDP`, `U_PSEUDO`, `U_PAYS`, `U_VILLE`, `U_REGION`, `U_ADRESSE`, `U_TEL`, `U_NAISSANCE`, `U_SITE`, `IDABONNEMENT`, `U_EMAIL`) VALUES
(1, 'sasa', 'wawa', 'dodo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'ROBINSON', 'Myhaja', 'myhaja', 'Mada', 'Tana', 'analamanga', 'Lotdsfsf  sdfgs fs fsd', '55478463213', '12/06/94', 'sdfsdfsdfsfsdfsd', 1, 'vmdfggergfgfsdfsdfsffsd');

-- --------------------------------------------------------

--
-- Structure de la table `vueemission`
--

CREATE TABLE IF NOT EXISTS `vueemission` (
  `idprogramme` int(11) DEFAULT NULL,
  `p_date` date DEFAULT NULL,
  `idemission` int(11) DEFAULT NULL,
  `nb_like` bigint(21) DEFAULT NULL,
  `cat_libelle` varchar(50) DEFAULT NULL,
  `t_libelle` varchar(50) DEFAULT NULL,
  `e_nom` varchar(50) DEFAULT NULL,
  `e_duree` time DEFAULT NULL,
  `e_zanaka` varchar(100) DEFAULT NULL,
  `e_chemin` varchar(200) DEFAULT NULL,
  `e_picture` varchar(200) DEFAULT NULL,
  `e_description` varchar(1000) DEFAULT NULL,
  `E_SUGGESTION` tinyint(1) DEFAULT NULL,
  `heure_diffusion` time DEFAULT NULL,
  `SUPPRIME` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vueemissionpardefaut`
--

CREATE TABLE IF NOT EXISTS `vueemissionpardefaut` (
  `IDEMISSION` int(11) DEFAULT NULL,
  `IDCATEGORIE` int(11) DEFAULT NULL,
  `IDTYPE` int(11) DEFAULT NULL,
  `E_NOM` varchar(50) DEFAULT NULL,
  `E_DUREE` time DEFAULT NULL,
  `E_ZANAKA` varchar(100) DEFAULT NULL,
  `E_CHEMIN` varchar(200) DEFAULT NULL,
  `E_PICTURE` varchar(200) DEFAULT NULL,
  `E_DESCRIPTION` varchar(1000) DEFAULT NULL,
  `suggeré` tinyint(1) DEFAULT NULL,
  `jour` varchar(50) DEFAULT NULL,
  `Heure` time DEFAULT NULL,
  `SUPPRIME` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
