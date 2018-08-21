-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 29 Juin 2018 à 13:58
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `atc_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idAdmin` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  PRIMARY KEY (`idAdmin`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`idAdmin`, `nom`, `login`, `pwd`) VALUES
(1, 'Emmanuel', 'emma', 'emma2018'),
(3, 'Roland', 'robenT', '3eb2e8238dfe9abca18b6db2ec1648674bcd4cba'),
(4, 'Emmanuel', 'mak', 'c0c78ae281000558b31cb23d1a11d69273fbd7b7'),
(5, 'Shekinah', 'shek', 'cfa4e3c2b11849a8e91c570f5d6d9bfb5577426d'),
(6, 'Ljoboy', 'lijerbul', '898a8394b09914c3ca8460553705d21fa2c8fc76'),
(7, 'Roland Beni', 'roland', '559a09c12005ddabea00fefedb135135f83f1397'),
(8, 'Roland', 'roben', '559a09c12005ddabea00fefedb135135f83f1397'),
(11, 'Helene Bagaya', 'helene', '559a09c12005ddabea00fefedb135135f83f1397'),
(12, 'Kevin', 'kev', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441');

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

CREATE TABLE IF NOT EXISTS `agent` (
  `idAgent` int(11) NOT NULL AUTO_INCREMENT,
  `matAgent` varchar(255) NOT NULL,
  `nomAgent` varchar(255) NOT NULL,
  `genre` char(1) NOT NULL,
  `idEntreprise` int(11) NOT NULL,
  `idAdmin` int(11) NOT NULL,
  PRIMARY KEY (`idAgent`),
  KEY `idEntreprise` (`idEntreprise`,`idAdmin`),
  KEY `idAdmin` (`idAdmin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `agent_forme`
--

CREATE TABLE IF NOT EXISTS `agent_forme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idAgent` int(11) NOT NULL,
  `idFormation` int(11) NOT NULL,
  `idAdmin` int(11) NOT NULL,
  `idFormateur` int(11) NOT NULL,
  `cote` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idAgent` (`idAgent`,`idFormation`),
  KEY `idFormation` (`idFormation`),
  KEY `idAdmin` (`idAdmin`),
  KEY `idFormateur` (`idFormateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE IF NOT EXISTS `cours` (
  `idCours` int(11) NOT NULL AUTO_INCREMENT,
  `nomCours` varchar(255) NOT NULL,
  `prixCours` double NOT NULL,
  `idAdmin` int(11) NOT NULL,
  PRIMARY KEY (`idCours`),
  KEY `idAdmin` (`idAdmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `cours`
--

INSERT INTO `cours` (`idCours`, `nomCours`, `prixCours`, `idAdmin`) VALUES
(2, 'finances banquaires', 200, 1),
(3, 'Modelisation', 5000, 11),
(4, 'Cyber Security', 30000, 11),
(5, 'Comptabilite', 400, 11),
(6, 'Modelisation en php', 20, 12);

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE IF NOT EXISTS `entreprise` (
  `idEntreprise` int(11) NOT NULL AUTO_INCREMENT,
  `nomEntreprise` varchar(255) NOT NULL,
  `adresseEntreprise` varchar(255) NOT NULL,
  `mailEntreprise` varchar(255) NOT NULL,
  `telEntreprise` varchar(255) NOT NULL,
  PRIMARY KEY (`idEntreprise`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Contenu de la table `entreprise`
--

INSERT INTO `entreprise` (`idEntreprise`, `nomEntreprise`, `adresseEntreprise`, `mailEntreprise`, `telEntreprise`) VALUES
(1, 'tenda mema', 'lubumbashi', 'tendamema@gmail.com', '0024388745856'),
(2, 'tenda mema', 'Lubumbashi', 'tentamema@gmail.com', '+1365971'),
(3, 'tenda mema', 'Lubumbashi', 'tentamema@gmail.com', '+1365971'),
(4, 'tenda mema', 'Lubumbashi', 'tentamema@gmail.com', '+1365971'),
(5, 'tenda mema', 'Lubumbashi', 'tentamema@gmail.com', '+1365971'),
(6, 'tenda mema', 'Lubumbashi', 'tentamema@gmail.com', '+1365971'),
(7, 'simon', 'lushi', 'simon@gmail.com', '961227643'),
(8, 'simon', 'lushi', 'simon@gmail.com', '961227643'),
(9, 'simon2', 'lushi', 'simon2@gmail.com', '961227643hjkl'),
(10, 'carole', 'lushia', 'carole@gmail.com', '8527410963'),
(11, 'carole', 'lushia', 'carole@gmail.com', '8527410963'),
(12, 'carole', 'lushia', 'carole@gmail.com', '8527410963'),
(13, 'sarah', 'lubum', 'sarah@gmail.com', '8653216w'),
(14, 'sarah', 'lubum', 'sarah@gmail.com', '8653216w'),
(15, 'carole musonda', 'lubumbashi', 'carolemusonda@gmail.com', '8520368416'),
(16, 'moi', 'moiaussi', 'fdsa@gmail.com', '2548653sed'),
(17, 'moi', 'moiaussi', 'fdsa@gmail.com', '2548653sed'),
(18, 'Scola', 'onda', 'scola@gmail.com', '95616532'),
(19, 'Scola', 'onda', 'scola@gmail.com', '95616532'),
(20, 'Scola', 'onda', 'scola@gmail.com', '95616532'),
(21, 'Scola', 'onda', 'scola@gmail.com', '95616532'),
(22, 'Scola', 'onda', 'scola@gmail.com', '95616532'),
(23, 'Scola', 'onda', 'scola@gmail.com', '95616532'),
(24, 'Scola', 'onda', 'scola@gmail.com', '95616532'),
(25, 'Helene', 'lushi', 'helene@gmail.com', '856816'),
(26, 'Melissa', 'Lubumbashi', 'melissa@gmail.com', '+24589674153'),
(27, 'Melissa', 'Lubumbashi', 'melissa@gmail.com', '+24589674153'),
(28, 'Melissa3', 'lubumbashi', 'melissa3@gmail.com', '+24589674153'),
(29, 'Atthie', 'lubumbashi', 'atthie27@gmail.com', '+26863568'),
(30, 'Merveille', 'goma', 'merdi@gmail.com', '+24666637'),
(31, 'ami', 'kaa', 'ami@gmail.com', '+24589674153'),
(32, 'ami', 'kaa', 'ami@gmail.com', '+24589674153');

-- --------------------------------------------------------

--
-- Structure de la table `formateur`
--

CREATE TABLE IF NOT EXISTS `formateur` (
  `idFormateur` int(11) NOT NULL AUTO_INCREMENT,
  `matFormateur` varchar(255) NOT NULL,
  `nomFormateur` varchar(255) NOT NULL,
  `postnomFormateur` varchar(255) NOT NULL,
  `prenomFormateur` varchar(255) NOT NULL,
  `genreFormateur` char(1) NOT NULL,
  `domaineFormateur` varchar(255) NOT NULL,
  `adresseFormateur` varchar(255) NOT NULL,
  `mailFormateur` varchar(255) NOT NULL,
  `telFormateur` varchar(255) NOT NULL,
  `idAdmin` int(11) NOT NULL,
  PRIMARY KEY (`idFormateur`),
  KEY `idAdmin` (`idAdmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `formateur`
--

INSERT INTO `formateur` (`idFormateur`, `matFormateur`, `nomFormateur`, `postnomFormateur`, `prenomFormateur`, `genreFormateur`, `domaineFormateur`, `adresseFormateur`, `mailFormateur`, `telFormateur`, `idAdmin`) VALUES
(1, '15wt447', 'tubongye', 'roland', 'beni', 'm', 'cyber security, web design', 'lubumbashi', 'roland.beni1@gmail.com', '+243991551044', 1),
(2, '15tm432', 'Tshiokufila', 'Makashieny', 'Shekinah', 'm', 'Modelisation', 'lubumbashi', '15tm432@esisalama.org', '+1648531672', 11),
(3, '15yb500', 'Yombo', 'Bosemwa', 'Jonathan', 'm', 'Animation Familial', 'lubumbashi', 'ljoboy@gmail.com', '+243991888702', 11),
(4, '15mk294', 'Munguakonkwa', 'Kasinde', 'Melissa', 'f', 'Web Design', 'lubumbashi', 'mel@gmail.com', '+243991888702', 12),
(5, '15mk294', 'Munguakonkwa', 'Kasinde', 'Melissa', 'f', 'Web Design', 'lubumbashi', 'mel@gmail.com', '+243991888702', 12);

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE IF NOT EXISTS `formation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL,
  `idEntreprise` int(11) NOT NULL,
  `idAdmin` int(11) DEFAULT NULL,
  `idCours` int(11) NOT NULL,
  `etat` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idFormateur` (`idEntreprise`,`idAdmin`,`idCours`),
  KEY `IdAdmin` (`idAdmin`),
  KEY `idCours` (`idCours`),
  KEY `idEntreprise` (`idEntreprise`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Contenu de la table `formation`
--

INSERT INTO `formation` (`id`, `dateDebut`, `dateFin`, `idEntreprise`, `idAdmin`, `idCours`, `etat`) VALUES
(4, '2018-05-24', '2018-05-31', 1, 1, 2, 1),
(5, '2018-06-27', '2018-07-14', 1, 11, 4, 1),
(14, '2018-06-26', '2018-06-30', 14, 1, 3, 1),
(15, '0000-00-00', '0000-00-00', 15, 1, 5, 0),
(16, '2019-07-06', '2020-08-25', 16, 1, 5, 1),
(17, '2019-07-06', '2020-08-25', 17, 11, 5, 1),
(21, '2018-06-27', '2018-07-13', 24, 11, 2, 1),
(22, '2018-10-03', '2018-10-31', 25, 11, 2, 1),
(23, '2018-09-30', '2018-10-30', 26, 11, 3, 0),
(24, '2018-10-30', '2018-11-30', 27, 11, 3, 0),
(25, '2017-12-01', '2018-01-31', 28, 11, 3, 0),
(26, '2017-10-20', '2017-11-20', 29, 11, 3, 0),
(27, '2018-10-20', '2018-11-30', 30, 11, 4, 1),
(28, '2018-06-29', '2018-07-29', 31, NULL, 2, NULL),
(29, '2018-06-29', '2018-07-29', 32, NULL, 2, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `horaire`
--

CREATE TABLE IF NOT EXISTS `horaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idFormation` int(11) NOT NULL,
  `date` date NOT NULL,
  `heureDebut` time NOT NULL,
  `heureFin` time NOT NULL,
  `idAdmin` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idAdmin` (`idAdmin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `agent`
--
ALTER TABLE `agent`
  ADD CONSTRAINT `agent_ibfk_1` FOREIGN KEY (`idEntreprise`) REFERENCES `entreprise` (`idEntreprise`),
  ADD CONSTRAINT `agent_ibfk_2` FOREIGN KEY (`idAdmin`) REFERENCES `admin` (`idAdmin`);

--
-- Contraintes pour la table `agent_forme`
--
ALTER TABLE `agent_forme`
  ADD CONSTRAINT `agent_forme_ibfk_1` FOREIGN KEY (`idAgent`) REFERENCES `agent` (`idAgent`),
  ADD CONSTRAINT `agent_forme_ibfk_2` FOREIGN KEY (`idFormation`) REFERENCES `formation` (`id`),
  ADD CONSTRAINT `agent_forme_ibfk_3` FOREIGN KEY (`idAdmin`) REFERENCES `admin` (`idAdmin`),
  ADD CONSTRAINT `agent_forme_ibfk_4` FOREIGN KEY (`idFormateur`) REFERENCES `formateur` (`idFormateur`);

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `cours_ibfk_1` FOREIGN KEY (`idAdmin`) REFERENCES `admin` (`idAdmin`);

--
-- Contraintes pour la table `formateur`
--
ALTER TABLE `formateur`
  ADD CONSTRAINT `formateur_ibfk_1` FOREIGN KEY (`idAdmin`) REFERENCES `admin` (`idAdmin`);

--
-- Contraintes pour la table `formation`
--
ALTER TABLE `formation`
  ADD CONSTRAINT `formation_ibfk_2` FOREIGN KEY (`IdAdmin`) REFERENCES `admin` (`idAdmin`),
  ADD CONSTRAINT `formation_ibfk_3` FOREIGN KEY (`idCours`) REFERENCES `cours` (`idCours`),
  ADD CONSTRAINT `formation_ibfk_4` FOREIGN KEY (`idEntreprise`) REFERENCES `entreprise` (`idEntreprise`);

--
-- Contraintes pour la table `horaire`
--
ALTER TABLE `horaire`
  ADD CONSTRAINT `horaire_ibfk_1` FOREIGN KEY (`idAdmin`) REFERENCES `admin` (`idAdmin`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
