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
-- Structure de la table `oulib_liste_demande`
--

CREATE TABLE `oulib_liste_demande` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `emailI` varchar(255) NOT NULL,
  `nomP` varchar(255) NOT NULL,
  `prenomP` varchar(255) NOT NULL,
  `telP` varchar(255) NOT NULL,
  `typeSoinP` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `date_soin` date NOT NULL,
  `frequenceSoin` varchar(255) NOT NULL,
  `status` enum('attente','accepter','refuser','terminer','luAccepter','luRefuser') NOT NULL,
  `emailP` varchar(255) NOT NULL,
  `heure_soin` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `oulib_liste_demande`
--

INSERT INTO `oulib_liste_demande` (`id`, `photo`, `emailI`, `nomP`, `prenomP`, `telP`, `typeSoinP`, `commentaire`, `date_soin`, `frequenceSoin`, `status`, `emailP`, `heure_soin`) VALUES
(41, 'Photo-de-moi-1.png', 'dupond@gmail.com', 'stian', 'andry', '346448609', 'Perfusion - Cicatrisation', 'votre demande', '2017-06-12', '4 - 1', 'attente', 'rt@gmail.com', '00:00:18'),
(42, 'Photo-de-moi-1.png', 'ahly@medsoft-sante.fr', 'stian', 'andry', '346448609', 'Perfusion - Cicatrisation', 'votre demande ici', '0000-00-00', '4 - 1', 'attente', 'rt@gmail.com', '00:00:16'),
(43, 'Photo-de-moi-1.png', 't@g.g', 'stian', 'andry', '346448609', 'Perfusion - Cicatrisation', 'demande avec description', '2017-08-13', '4 - 1', 'attente', 'rt@gmail.com', '00:00:21'),
(45, 'Photo-de-moi-1.png', 'gabriel@gmail.com', 'stian', 'andry', '346448609', 'Perfusion - Cicatrisation', 'StomathÃ©rapie', '2017-04-14', '4 - 1', 'terminer', 'rt@gmail.com', '17:00:00');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `oulib_liste_demande`
--
ALTER TABLE `oulib_liste_demande`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `oulib_liste_demande`
--
ALTER TABLE `oulib_liste_demande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
