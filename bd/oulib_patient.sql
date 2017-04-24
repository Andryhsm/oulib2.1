-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 12 Avril 2017 à 11:21
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ouinflib`
--

-- --------------------------------------------------------

--
-- Structure de la table `oulib_patient`
--

CREATE TABLE `oulib_patient` (
  `id` int(11) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `nomP` varchar(30) NOT NULL,
  `prenomP` varchar(40) NOT NULL,
  `emailP` varchar(50) NOT NULL,
  `mdpP` varchar(50) NOT NULL,
  `telP` int(11) NOT NULL,
  `rueP` varchar(100) NOT NULL,
  `code-postalP` int(11) NOT NULL,
  `villeP` varchar(50) NOT NULL,
  `code-acces` varchar(50) NOT NULL,
  `etage` varchar(30) NOT NULL,
  `info-sup` varchar(50) NOT NULL,
  `type-soinP1` varchar(20) NOT NULL,
  `type-soinP2` varchar(20) NOT NULL,
  `type-soinP3` varchar(20) NOT NULL,
  `type-soinP4` varchar(20) NOT NULL,
  `frequence-soin1` varchar(4) NOT NULL,
  `frequence-soin2` varchar(4) NOT NULL,
  `frequence-soin3` varchar(4) NOT NULL,
  `frequence-soin4` varchar(4) NOT NULL,
  `heure1` varchar(60) NOT NULL,
  `heure2` varchar(60) NOT NULL,
  `heure3` varchar(60) NOT NULL,
  `heure4` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `oulib_patient`
--

INSERT INTO `oulib_patient` (`id`, `photo`, `nomP`, `prenomP`, `emailP`, `mdpP`, `telP`, `rueP`, `code-postalP`, `villeP`, `code-acces`, `etage`, `info-sup`, `type-soinP1`, `type-soinP2`, `type-soinP3`, `type-soinP4`, `frequence-soin1`, `frequence-soin2`, `frequence-soin3`, `frequence-soin4`, `heure1`, `heure2`, `heure3`, `heure4`) VALUES
(4, 'Photo-de-moi-1.png', 'stian', 'andry', 'rt@gmail.com', '1', 346448609, 'Mahazoarivo', 110, 'Antsirabe', '753', '2Ã¨me', '110', 'Perfusion', 'Cicatrisation', '', '', '4', '1', '', '', '12h', '42h', '', ''),
(7, '52813654-personnage-de-dessin-anim-homme-d-affaire', 'NDREMA', 'koto', 'koto@gmail.com', 'k', 34343434, 'antsirabe', 110, 'Ambatolahy', '09090', 'Ã 900', 'aucun info sup', 'Cicatrisation', '', '', '', '2', '2', '', '', '', '', '', ''),
(6, 'avatar_patient.png', 'Stian', 'Andrinirina', 'stian@gmail.com', 's', 1, '1', 1, '1', '1', '1', '1', 'Cicatrisation', 'StomarhÃ©rapie', 'Perfusion', 'Sondage', '1', '1', '1', '1', '1', '1', '1', '1');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `oulib_patient`
--
ALTER TABLE `oulib_patient`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emailP` (`emailP`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `oulib_patient`
--
ALTER TABLE `oulib_patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
