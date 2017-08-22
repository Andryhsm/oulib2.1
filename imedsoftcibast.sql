-- phpMyAdmin SQL Dump
-- version 4.4.13.1
-- http://www.phpmyadmin.net
--
-- Client :  imedsoftcibast.mysql.db
-- Généré le :  Ven 18 Août 2017 à 13:41
-- Version du serveur :  5.6.34-log
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `imedsoftcibast`
--

-- --------------------------------------------------------

--
-- Structure de la table `alarmesetprecautions`
--

CREATE TABLE IF NOT EXISTS `alarmesetprecautions` (
  `id` int(11) NOT NULL,
  `alarmedate1` varchar(11) NOT NULL,
  `alarmedate2` varchar(11) NOT NULL,
  `alarmedate3` varchar(11) NOT NULL,
  `alarmedate4` varchar(11) NOT NULL,
  `alarmeetat1` varchar(20) NOT NULL,
  `alarmeetat2` varchar(20) NOT NULL,
  `alarmeetat3` varchar(20) NOT NULL,
  `alarmeetat4` varchar(20) NOT NULL,
  `commentaire1` text NOT NULL,
  `alarmeetat5` varchar(20) NOT NULL,
  `alarmeetat6` varchar(20) NOT NULL,
  `alarmeetat7` varchar(20) NOT NULL,
  `alarmeetat8` varchar(20) NOT NULL,
  `commentaire2` text NOT NULL,
  `alarmeetat9` varchar(20) NOT NULL,
  `alarmeetat10` varchar(20) NOT NULL,
  `alarmeetat11` varchar(20) NOT NULL,
  `alarmeetat12` varchar(20) NOT NULL,
  `commentaire3` text NOT NULL,
  `alarmeetat13` varchar(20) NOT NULL,
  `alarmeetat14` varchar(20) NOT NULL,
  `alarmeetat15` varchar(20) NOT NULL,
  `alarmeetat16` varchar(20) NOT NULL,
  `commentaire4` text NOT NULL,
  `alarmeetat17` varchar(20) NOT NULL,
  `alarmeetat18` varchar(20) NOT NULL,
  `alarmeetat19` varchar(20) NOT NULL,
  `alarmeetat20` varchar(20) NOT NULL,
  `commentaire5` text NOT NULL,
  `alarmeetat21` varchar(20) NOT NULL,
  `alarmeetat22` varchar(20) NOT NULL,
  `alarmeetat23` varchar(20) NOT NULL,
  `alarmeetat24` varchar(20) NOT NULL,
  `commentaire6` text NOT NULL,
  `alarmeetat25` varchar(20) NOT NULL,
  `alarmeetat26` varchar(20) NOT NULL,
  `alarmeetat27` varchar(20) NOT NULL,
  `alarmeetat28` varchar(20) NOT NULL,
  `commentaire7` text NOT NULL,
  `autre` varchar(255) NOT NULL,
  `idPrescripteur` int(11) NOT NULL,
  `idPatient` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `alarmesetprecautions`
--

INSERT INTO `alarmesetprecautions` (`id`, `alarmedate1`, `alarmedate2`, `alarmedate3`, `alarmedate4`, `alarmeetat1`, `alarmeetat2`, `alarmeetat3`, `alarmeetat4`, `commentaire1`, `alarmeetat5`, `alarmeetat6`, `alarmeetat7`, `alarmeetat8`, `commentaire2`, `alarmeetat9`, `alarmeetat10`, `alarmeetat11`, `alarmeetat12`, `commentaire3`, `alarmeetat13`, `alarmeetat14`, `alarmeetat15`, `alarmeetat16`, `commentaire4`, `alarmeetat17`, `alarmeetat18`, `alarmeetat19`, `alarmeetat20`, `commentaire5`, `alarmeetat21`, `alarmeetat22`, `alarmeetat23`, `alarmeetat24`, `commentaire6`, `alarmeetat25`, `alarmeetat26`, `alarmeetat27`, `alarmeetat28`, `commentaire7`, `autre`, `idPrescripteur`, `idPatient`) VALUES
(1, '27-04-2017', '03-05-2017', '10-05-2017', '', '', '', '', '', '5', 'non acquis', '', '', '', '5', '', '', 'en cours', '', '5', '', '', '', '', '5', '', '', '', '', '5', '', '', '', '', '5', '', '', '', '', '5', '5', 81, '5-5'),
(2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '-');

-- --------------------------------------------------------

--
-- Structure de la table `asg1`
--

CREATE TABLE IF NOT EXISTS `asg1` (
  `id` int(11) NOT NULL,
  `asgdetail1` text NOT NULL,
  `asgobservation1` text NOT NULL,
  `asgdetail2` text NOT NULL,
  `asgobservation2` text NOT NULL,
  `asgdetail3` text NOT NULL,
  `asgobservation3` text NOT NULL,
  `asgdetail4` text NOT NULL,
  `asgobservation4` text NOT NULL,
  `idPrescripteur` int(11) NOT NULL,
  `idPatient` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `asg1`
--

INSERT INTO `asg1` (`id`, `asgdetail1`, `asgobservation1`, `asgdetail2`, `asgobservation2`, `asgdetail3`, `asgobservation3`, `asgdetail4`, `asgobservation4`, `idPrescripteur`, `idPatient`) VALUES
(1, '5', '5', '5', '5', '5', '5', '5', '5', 81, '5-5'),
(2, '', '', '', '', '', '', '', '', 0, '-');

-- --------------------------------------------------------

--
-- Structure de la table `asg2`
--

CREATE TABLE IF NOT EXISTS `asg2` (
  `id` int(11) NOT NULL,
  `asgfrequence1` int(11) NOT NULL,
  `asgfrequence2` int(11) NOT NULL,
  `asgconnaissance` text NOT NULL,
  `asgcommentaire` text NOT NULL,
  `asg2commentaire` text NOT NULL,
  `idPrescripteur` int(11) NOT NULL,
  `idPatient` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `asg2`
--

INSERT INTO `asg2` (`id`, `asgfrequence1`, `asgfrequence2`, `asgconnaissance`, `asgcommentaire`, `asg2commentaire`, `idPrescripteur`, `idPatient`) VALUES
(1, 5, 5, 'Non', '5', 'dfhdfghdfg', 81, '5-5'),
(2, 0, 0, 'Oui', '', '', 0, '-');

-- --------------------------------------------------------

--
-- Structure de la table `choixmateriel`
--

CREATE TABLE IF NOT EXISTS `choixmateriel` (
  `id` int(11) NOT NULL,
  `pompe` varchar(255) NOT NULL,
  `dateinstallation` varchar(40) NOT NULL,
  `typecatheter` varchar(20) NOT NULL,
  `modele` varchar(255) NOT NULL,
  `longueurcanule` int(11) NOT NULL,
  `longueurtubulure` int(11) NOT NULL,
  `typecatheter2` varchar(20) NOT NULL,
  `modele2` varchar(200) NOT NULL,
  `longueurcanule2` int(11) NOT NULL,
  `longueurtubulure2` int(11) NOT NULL,
  `inserteur` varchar(5) NOT NULL,
  `reservoir` varchar(255) NOT NULL,
  `spp` varchar(255) NOT NULL,
  `observation` text NOT NULL,
  `idPrescripteur` int(11) NOT NULL,
  `idPatient` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `choixmateriel`
--

INSERT INTO `choixmateriel` (`id`, `pompe`, `dateinstallation`, `typecatheter`, `modele`, `longueurcanule`, `longueurtubulure`, `typecatheter2`, `modele2`, `longueurcanule2`, `longueurtubulure2`, `inserteur`, `reservoir`, `spp`, `observation`, `idPrescripteur`, `idPatient`) VALUES
(129, 'Paradigm véo série 5 rose', '04-05-2017', 'TANGENTIEL', 'MIO 30 Connexion Paradigm', 5, 5, 'DROIT', 'Insight Flex', 5, 4, 'Oui', 'Réservoir Roche 3,15 ml', '5', '5', 81, '5-5'),
(130, '', '', 'DROIT', '', 0, 0, 'DROIT', '', 0, 0, 'Non', '', '', '', 0, '-');

-- --------------------------------------------------------

--
-- Structure de la table `connaissances`
--

CREATE TABLE IF NOT EXISTS `connaissances` (
  `id` int(11) NOT NULL,
  `reponse1` text NOT NULL,
  `observation1` text NOT NULL,
  `reponse2` text NOT NULL,
  `observation2` text NOT NULL,
  `reponse3` text NOT NULL,
  `date1` varchar(20) NOT NULL,
  `reponse4` text NOT NULL,
  `date2` varchar(20) NOT NULL,
  `reponse5` text NOT NULL,
  `date3` varchar(20) NOT NULL,
  `reponse6` text NOT NULL,
  `date4` varchar(20) NOT NULL,
  `reponse7` text NOT NULL,
  `date5` varchar(20) NOT NULL,
  `reponse8` text NOT NULL,
  `observation3` text NOT NULL,
  `reponse9` text NOT NULL,
  `observation4` text NOT NULL,
  `reponse10` text NOT NULL,
  `observation5` text NOT NULL,
  `reponse11` text NOT NULL,
  `observation6` text NOT NULL,
  `reponse12` text NOT NULL,
  `observation7` text NOT NULL,
  `reponse13` text NOT NULL,
  `observation8` text NOT NULL,
  `reponse14` text NOT NULL,
  `observation9` text NOT NULL,
  `idPrescripteur` int(11) NOT NULL,
  `idPatient` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `connaissances`
--

INSERT INTO `connaissances` (`id`, `reponse1`, `observation1`, `reponse2`, `observation2`, `reponse3`, `date1`, `reponse4`, `date2`, `reponse5`, `date3`, `reponse6`, `date4`, `reponse7`, `date5`, `reponse8`, `observation3`, `reponse9`, `observation4`, `reponse10`, `observation5`, `reponse11`, `observation6`, `reponse12`, `observation7`, `reponse13`, `observation8`, `reponse14`, `observation9`, `idPrescripteur`, `idPatient`) VALUES
(1, 'Oui', '5', 'Non', '5', 'Non', '16-05-2017', 'Non', '26-04-2017', 'Non', '03-05-2017', 'Oui', '10-05-2017', 'Oui', '26-04-2017', 'Oui', '5', 'Oui', '5', 'Oui', '5', 'Non', '5', 'Non', '5', 'Oui', '5', 'Oui', '5', 81, '5-5'),
(2, 'Oui', '', 'Oui', '', 'Oui', '', 'Oui', '', 'Oui', '', 'Oui', '', 'Oui', '', 'Oui', '', 'Oui', '', 'Oui', '', 'Oui', '', 'Oui', '', 'Oui', '', 'Oui', '', 0, '-');

-- --------------------------------------------------------

--
-- Structure de la table `donnemedicale`
--

CREATE TABLE IF NOT EXISTS `donnemedicale` (
  `id` int(11) NOT NULL,
  `typediabete` varchar(100) DEFAULT NULL,
  `datediagnostic` varchar(100) DEFAULT NULL,
  `circonstancedecouverte` varchar(100) DEFAULT NULL,
  `antecedentfamiliaux` varchar(100) DEFAULT NULL,
  `datepremieremisesousPompe` varchar(100) DEFAULT NULL,
  `hba1c` varchar(100) DEFAULT NULL,
  `taille` varchar(100) DEFAULT NULL,
  `poidsactuel` varchar(100) DEFAULT NULL,
  `poidsforme` varchar(100) DEFAULT NULL,
  `imc` varchar(100) DEFAULT NULL,
  `nombreglycemieparjour` varchar(100) DEFAULT NULL,
  `typelecteur` varchar(100) DEFAULT NULL,
  `dateprescription` varchar(100) DEFAULT NULL,
  `styloautopiqueur` varchar(100) DEFAULT NULL,
  `nombreinjectionjour` varchar(100) DEFAULT NULL,
  `stylo` varchar(100) DEFAULT NULL,
  `autrestylo` varchar(100) DEFAULT NULL,
  `aiguillestylo` varchar(100) DEFAULT NULL,
  `autreaiguille` varchar(100) DEFAULT NULL,
  `insulinelentematin` varchar(100) DEFAULT NULL,
  `insulinerapidematin` varchar(100) DEFAULT NULL,
  `insulinelentemidi` varchar(100) DEFAULT NULL,
  `insulinerapidemidi` varchar(100) DEFAULT NULL,
  `insulinelentesoir` varchar(100) DEFAULT NULL,
  `insulinerapidesoir` varchar(100) DEFAULT NULL,
  `insulinelentediner` varchar(100) DEFAULT NULL,
  `insulinerapidediner` varchar(100) DEFAULT NULL,
  `insulinelentecollation` varchar(100) DEFAULT NULL,
  `insulinerapidecollation` varchar(100) DEFAULT NULL,
  `totalinsulinelente` varchar(100) DEFAULT NULL,
  `totalinsulinerapide` varchar(100) DEFAULT NULL,
  `specialite1` varchar(100) DEFAULT NULL,
  `posologie1` varchar(100) DEFAULT NULL,
  `specialite2` varchar(100) DEFAULT NULL,
  `posologie2` varchar(100) DEFAULT NULL,
  `specialite3` varchar(100) DEFAULT NULL,
  `posologie3` varchar(100) DEFAULT NULL,
  `specialite4` varchar(100) DEFAULT NULL,
  `posologie4` varchar(100) DEFAULT NULL,
  `Horaire1` varchar(10) DEFAULT NULL,
  `Debit1` varchar(100) DEFAULT NULL,
  `Horaire2` varchar(10) DEFAULT NULL,
  `Debit2` varchar(100) DEFAULT NULL,
  `Horaire3` varchar(10) DEFAULT NULL,
  `Debit3` varchar(100) DEFAULT NULL,
  `Horaire4` varchar(10) DEFAULT NULL,
  `Horaire5` varchar(10) DEFAULT NULL,
  `Horaire6` varchar(10) DEFAULT NULL,
  `Horaire7` varchar(10) DEFAULT NULL,
  `Horaire8` varchar(10) DEFAULT NULL,
  `Horaire9` varchar(10) DEFAULT NULL,
  `Horaire10` varchar(10) DEFAULT NULL,
  `Horaire11` varchar(10) DEFAULT NULL,
  `Horaire12` varchar(10) DEFAULT NULL,
  `Horaire13` varchar(10) DEFAULT NULL,
  `Horaire14` varchar(10) DEFAULT NULL,
  `Horaire15` varchar(10) DEFAULT NULL,
  `Horaire16` varchar(10) DEFAULT NULL,
  `Horaire17` varchar(10) DEFAULT NULL,
  `Horaire18` varchar(10) DEFAULT NULL,
  `Horaire19` varchar(10) DEFAULT NULL,
  `Horaire20` varchar(10) DEFAULT NULL,
  `Horaire21` varchar(10) DEFAULT NULL,
  `Horaire22` varchar(10) DEFAULT NULL,
  `Horaire23` varchar(10) DEFAULT NULL,
  `Horaire24` varchar(10) DEFAULT NULL,
  `Horaire25` varchar(10) DEFAULT NULL,
  `Horaire26` varchar(10) DEFAULT NULL,
  `Horaire27` varchar(10) DEFAULT NULL,
  `Horaire28` varchar(10) DEFAULT NULL,
  `Horaire29` varchar(10) DEFAULT NULL,
  `Horaire30` varchar(10) DEFAULT NULL,
  `Horaire31` varchar(10) DEFAULT NULL,
  `Horaire32` varchar(10) DEFAULT NULL,
  `Horaire33` varchar(10) DEFAULT NULL,
  `Horaire34` varchar(10) DEFAULT NULL,
  `Horaire35` varchar(10) DEFAULT NULL,
  `Horaire36` varchar(10) DEFAULT NULL,
  `Horaire37` varchar(10) DEFAULT NULL,
  `Horaire38` varchar(10) DEFAULT NULL,
  `Horaire39` varchar(10) DEFAULT NULL,
  `Horaire40` varchar(10) DEFAULT NULL,
  `Horaire41` varchar(10) DEFAULT NULL,
  `Horaire42` varchar(10) DEFAULT NULL,
  `Horaire43` varchar(10) DEFAULT NULL,
  `Horaire44` varchar(10) DEFAULT NULL,
  `Horaire45` varchar(10) DEFAULT NULL,
  `Horaire46` varchar(10) DEFAULT NULL,
  `Horaire47` varchar(10) DEFAULT NULL,
  `Horaire48` varchar(10) DEFAULT NULL,
  `Horaire49` varchar(10) DEFAULT NULL,
  `Horaire50` varchar(10) DEFAULT NULL,
  `Horaire51` varchar(10) DEFAULT NULL,
  `Horaire52` varchar(10) DEFAULT NULL,
  `Horaire53` varchar(10) DEFAULT NULL,
  `Horaire54` varchar(10) DEFAULT NULL,
  `Horaire55` varchar(10) DEFAULT NULL,
  `Horaire56` varchar(10) DEFAULT NULL,
  `Horaire57` varchar(10) DEFAULT NULL,
  `Horaire58` varchar(10) DEFAULT NULL,
  `Horaire59` varchar(10) DEFAULT NULL,
  `Horaire60` varchar(10) DEFAULT NULL,
  `Horaire61` varchar(10) DEFAULT NULL,
  `Horaire62` varchar(10) DEFAULT NULL,
  `Horaire63` varchar(10) DEFAULT NULL,
  `Horaire64` varchar(10) DEFAULT NULL,
  `Horaire65` varchar(10) DEFAULT NULL,
  `Horaire66` varchar(10) DEFAULT NULL,
  `Horaire67` varchar(10) DEFAULT NULL,
  `Horaire68` varchar(10) DEFAULT NULL,
  `Horaire69` varchar(10) DEFAULT NULL,
  `Horaire70` varchar(10) DEFAULT NULL,
  `Horaire71` varchar(10) DEFAULT NULL,
  `Horaire72` varchar(10) DEFAULT NULL,
  `Horaire73` varchar(10) DEFAULT NULL,
  `Horaire74` varchar(10) DEFAULT NULL,
  `Horaire75` varchar(10) DEFAULT NULL,
  `Horaire76` varchar(10) DEFAULT NULL,
  `Horaire77` varchar(10) DEFAULT NULL,
  `Horaire78` varchar(10) DEFAULT NULL,
  `Horaire79` varchar(10) DEFAULT NULL,
  `Horaire80` varchar(10) DEFAULT NULL,
  `Horaire81` varchar(10) DEFAULT NULL,
  `Horaire82` varchar(10) DEFAULT NULL,
  `Horaire83` varchar(10) DEFAULT NULL,
  `Horaire84` varchar(10) DEFAULT NULL,
  `Debit4` varchar(100) DEFAULT NULL,
  `Debit5` varchar(10) DEFAULT NULL,
  `Debit6` varchar(10) DEFAULT NULL,
  `Debit7` varchar(10) DEFAULT NULL,
  `Debit8` varchar(10) DEFAULT NULL,
  `Debit9` varchar(10) DEFAULT NULL,
  `Debit10` varchar(10) DEFAULT NULL,
  `Debit11` varchar(10) DEFAULT NULL,
  `Debit12` varchar(10) DEFAULT NULL,
  `Debit13` varchar(10) DEFAULT NULL,
  `Debit14` varchar(10) DEFAULT NULL,
  `Debit15` varchar(10) DEFAULT NULL,
  `Debit16` varchar(10) DEFAULT NULL,
  `Debit17` varchar(10) DEFAULT NULL,
  `Debit18` varchar(10) DEFAULT NULL,
  `Debit19` varchar(10) DEFAULT NULL,
  `Debit20` varchar(10) DEFAULT NULL,
  `Debit21` varchar(10) DEFAULT NULL,
  `Debit22` varchar(10) DEFAULT NULL,
  `Debit23` varchar(10) DEFAULT NULL,
  `Debit24` varchar(10) DEFAULT NULL,
  `Debit25` varchar(10) DEFAULT NULL,
  `Debit26` varchar(10) DEFAULT NULL,
  `Debit27` varchar(10) DEFAULT NULL,
  `Debit28` varchar(10) DEFAULT NULL,
  `Debit29` varchar(10) DEFAULT NULL,
  `Debit30` varchar(10) DEFAULT NULL,
  `Debit31` varchar(10) DEFAULT NULL,
  `Debit32` varchar(10) DEFAULT NULL,
  `Debit33` varchar(10) DEFAULT NULL,
  `Debit34` varchar(10) DEFAULT NULL,
  `Debit35` varchar(10) DEFAULT NULL,
  `Debit36` varchar(10) DEFAULT NULL,
  `Debit37` varchar(10) DEFAULT NULL,
  `Debit38` varchar(10) DEFAULT NULL,
  `Debit39` varchar(10) DEFAULT NULL,
  `Debit40` varchar(10) DEFAULT NULL,
  `Debit41` varchar(10) DEFAULT NULL,
  `Debit42` varchar(10) DEFAULT NULL,
  `Debit43` varchar(10) DEFAULT NULL,
  `Debit44` varchar(10) DEFAULT NULL,
  `Horaire1N` varchar(100) DEFAULT NULL,
  `Debit1N` varchar(100) DEFAULT NULL,
  `Horaire2N` varchar(100) DEFAULT NULL,
  `Debit2N` varchar(100) DEFAULT NULL,
  `Horaire3N` varchar(100) DEFAULT NULL,
  `Debit3N` varchar(100) DEFAULT NULL,
  `Horaire4N` varchar(100) DEFAULT NULL,
  `Debit4N` varchar(100) DEFAULT NULL,
  `Horaire_1` varchar(100) DEFAULT NULL,
  `Debit_1` varchar(100) DEFAULT NULL,
  `Horaire_2` varchar(100) DEFAULT NULL,
  `Debit_2` varchar(100) DEFAULT NULL,
  `Horaire_3` varchar(100) DEFAULT NULL,
  `Debit_3` varchar(100) DEFAULT NULL,
  `Horaire_4` varchar(100) DEFAULT NULL,
  `Horaire_5` varchar(10) DEFAULT NULL,
  `Horaire_6` varchar(10) DEFAULT NULL,
  `Horaire_7` varchar(10) DEFAULT NULL,
  `Horaire_8` varchar(10) DEFAULT NULL,
  `Horaire_9` varchar(10) DEFAULT NULL,
  `Horaire_10` varchar(10) DEFAULT NULL,
  `Horaire_11` varchar(10) DEFAULT NULL,
  `Horaire_12` varchar(10) DEFAULT NULL,
  `Horaire_13` varchar(10) DEFAULT NULL,
  `Horaire_14` varchar(10) DEFAULT NULL,
  `Horaire_15` varchar(10) DEFAULT NULL,
  `Horaire_16` varchar(10) DEFAULT NULL,
  `Horaire_17` varchar(10) DEFAULT NULL,
  `Horaire_18` varchar(10) DEFAULT NULL,
  `Horaire_19` varchar(10) DEFAULT NULL,
  `Horaire_20` varchar(10) DEFAULT NULL,
  `Horaire_21` varchar(10) DEFAULT NULL,
  `Horaire_22` varchar(10) DEFAULT NULL,
  `Horaire_23` varchar(10) DEFAULT NULL,
  `Horaire_24` varchar(10) DEFAULT NULL,
  `Horaire_25` varchar(10) DEFAULT NULL,
  `Horaire_26` varchar(10) DEFAULT NULL,
  `Horaire_27` varchar(10) DEFAULT NULL,
  `Horaire_28` varchar(10) DEFAULT NULL,
  `Horaire_29` varchar(10) DEFAULT NULL,
  `Horaire_30` varchar(10) DEFAULT NULL,
  `Horaire_31` varchar(10) DEFAULT NULL,
  `Horaire_32` varchar(10) DEFAULT NULL,
  `Horaire_33` varchar(10) DEFAULT NULL,
  `Horaire_34` varchar(10) DEFAULT NULL,
  `Horaire_35` varchar(10) DEFAULT NULL,
  `Horaire_36` varchar(10) DEFAULT NULL,
  `Horaire_37` varchar(10) DEFAULT NULL,
  `Horaire_38` varchar(10) DEFAULT NULL,
  `Horaire_39` varchar(10) DEFAULT NULL,
  `Horaire_40` varchar(10) DEFAULT NULL,
  `Horaire_41` varchar(10) DEFAULT NULL,
  `Horaire_42` varchar(10) DEFAULT NULL,
  `Horaire_43` varchar(10) DEFAULT NULL,
  `Horaire_44` varchar(10) DEFAULT NULL,
  `Horaire_45` varchar(10) DEFAULT NULL,
  `Horaire_46` varchar(10) DEFAULT NULL,
  `Horaire_47` varchar(10) DEFAULT NULL,
  `Horaire_48` varchar(10) DEFAULT NULL,
  `Horaire_49` varchar(10) DEFAULT NULL,
  `Horaire_50` varchar(10) DEFAULT NULL,
  `Horaire_51` varchar(10) DEFAULT NULL,
  `Horaire_52` varchar(10) DEFAULT NULL,
  `Horaire_53` varchar(10) DEFAULT NULL,
  `Horaire_54` varchar(10) DEFAULT NULL,
  `Horaire_55` varchar(10) DEFAULT NULL,
  `Horaire_56` varchar(10) DEFAULT NULL,
  `Horaire_57` varchar(10) DEFAULT NULL,
  `Horaire_58` varchar(10) DEFAULT NULL,
  `Horaire_59` varchar(10) DEFAULT NULL,
  `Horaire_60` varchar(10) DEFAULT NULL,
  `Horaire_61` varchar(10) DEFAULT NULL,
  `Horaire_62` varchar(10) DEFAULT NULL,
  `Horaire_63` varchar(10) DEFAULT NULL,
  `Horaire_64` varchar(10) DEFAULT NULL,
  `Horaire_65` varchar(10) DEFAULT NULL,
  `Horaire_66` varchar(10) DEFAULT NULL,
  `Horaire_67` varchar(10) DEFAULT NULL,
  `Horaire_68` varchar(10) DEFAULT NULL,
  `Horaire_69` varchar(10) DEFAULT NULL,
  `Horaire_70` varchar(10) DEFAULT NULL,
  `Horaire_71` varchar(10) DEFAULT NULL,
  `Horaire_72` varchar(10) DEFAULT NULL,
  `Horaire_73` varchar(10) DEFAULT NULL,
  `Horaire_74` varchar(10) DEFAULT NULL,
  `Horaire_75` varchar(10) DEFAULT NULL,
  `Horaire_76` varchar(10) DEFAULT NULL,
  `Horaire_77` varchar(10) DEFAULT NULL,
  `Horaire_78` varchar(10) DEFAULT NULL,
  `Horaire_79` varchar(10) DEFAULT NULL,
  `Horaire_80` varchar(10) DEFAULT NULL,
  `Horaire_81` varchar(10) DEFAULT NULL,
  `Horaire_82` varchar(10) DEFAULT NULL,
  `Horaire_83` varchar(10) DEFAULT NULL,
  `Horaire_84` varchar(10) DEFAULT NULL,
  `Horaire_85` varchar(10) DEFAULT NULL,
  `Debit_4` varchar(100) DEFAULT NULL,
  `Debit_5` varchar(10) DEFAULT NULL,
  `Debit_6` varchar(10) DEFAULT NULL,
  `Debit_7` varchar(10) DEFAULT NULL,
  `Debit_8` varchar(10) DEFAULT NULL,
  `Debit_9` varchar(10) DEFAULT NULL,
  `Debit_10` varchar(10) DEFAULT NULL,
  `Debit_11` varchar(10) DEFAULT NULL,
  `Debit_12` varchar(10) DEFAULT NULL,
  `Debit_13` varchar(10) DEFAULT NULL,
  `Debit_14` varchar(10) DEFAULT NULL,
  `Debit_15` varchar(10) DEFAULT NULL,
  `Debit_16` varchar(10) DEFAULT NULL,
  `Debit_17` varchar(10) DEFAULT NULL,
  `Debit_18` varchar(10) DEFAULT NULL,
  `Debit_19` varchar(10) DEFAULT NULL,
  `Debit_20` varchar(10) DEFAULT NULL,
  `Debit_21` varchar(10) DEFAULT NULL,
  `Debit_22` varchar(10) DEFAULT NULL,
  `Debit_23` varchar(10) DEFAULT NULL,
  `Debit_24` varchar(10) DEFAULT NULL,
  `Debit_25` varchar(10) DEFAULT NULL,
  `Debit_26` varchar(10) DEFAULT NULL,
  `Debit_27` varchar(10) DEFAULT NULL,
  `Debit_28` varchar(10) DEFAULT NULL,
  `Debit_29` varchar(10) DEFAULT NULL,
  `Debit_30` varchar(10) DEFAULT NULL,
  `Debit_31` varchar(10) DEFAULT NULL,
  `Debit_32` varchar(10) DEFAULT NULL,
  `Debit_33` varchar(10) DEFAULT NULL,
  `Debit_34` varchar(10) DEFAULT NULL,
  `Debit_35` varchar(10) DEFAULT NULL,
  `Debit_36` varchar(10) DEFAULT NULL,
  `Debit_37` varchar(10) DEFAULT NULL,
  `Debit_38` varchar(10) DEFAULT NULL,
  `Debit_39` varchar(10) DEFAULT NULL,
  `Debit_40` varchar(10) DEFAULT NULL,
  `Debit_41` varchar(10) DEFAULT NULL,
  `Debit_42` varchar(10) DEFAULT NULL,
  `Debit_43` varchar(10) DEFAULT NULL,
  `Debit_44` varchar(10) DEFAULT NULL,
  `Horaire_N1` varchar(100) DEFAULT NULL,
  `Debit_N1` varchar(100) DEFAULT NULL,
  `Horaire_N2` varchar(100) DEFAULT NULL,
  `Debit_N2` varchar(100) DEFAULT NULL,
  `Horaire_N3` varchar(100) DEFAULT NULL,
  `Debit_N3` varchar(100) DEFAULT NULL,
  `Horaire_N4` varchar(100) DEFAULT NULL,
  `Debit_N4` varchar(100) DEFAULT NULL,
  `ValGlycemique1` varchar(100) DEFAULT NULL,
  `ValGlyMatin1` varchar(100) DEFAULT NULL,
  `ValGlyMid1` varchar(100) DEFAULT NULL,
  `ValGlyCollation1` varchar(100) DEFAULT NULL,
  `ValGlySoir1` varchar(100) DEFAULT NULL,
  `ValGlyAutre1` varchar(100) DEFAULT NULL,
  `ValGlycemique2` varchar(100) DEFAULT NULL,
  `ValGlyMatin2` varchar(100) DEFAULT NULL,
  `ValGlyMid2` varchar(100) DEFAULT NULL,
  `ValGlyCollation2` varchar(100) DEFAULT NULL,
  `ValGlySoir2` varchar(100) DEFAULT NULL,
  `ValGlyAutre2` varchar(100) DEFAULT NULL,
  `ValGlycemique3` varchar(100) DEFAULT NULL,
  `ValGlyMatin3` varchar(100) DEFAULT NULL,
  `ValGlyMid3` varchar(100) DEFAULT NULL,
  `ValGlyCollation3` varchar(100) DEFAULT NULL,
  `ValGlySoir3` varchar(100) DEFAULT NULL,
  `ValGlyAutre3` varchar(100) DEFAULT NULL,
  `ValGlycemique4` varchar(100) DEFAULT NULL,
  `ValGlyMatin4` varchar(100) DEFAULT NULL,
  `ValGlyMid4` varchar(100) DEFAULT NULL,
  `ValGlyCollation4` varchar(100) DEFAULT NULL,
  `ValGlySoir4` varchar(100) DEFAULT NULL,
  `ValGlyAutre4` varchar(100) DEFAULT NULL,
  `ValGlycemique5` varchar(100) DEFAULT NULL,
  `ValGlyMatin5` varchar(100) DEFAULT NULL,
  `ValGlyMid5` varchar(100) DEFAULT NULL,
  `ValGlyCollation5` varchar(100) DEFAULT NULL,
  `ValGlySoir5` varchar(100) DEFAULT NULL,
  `ValGlyAutre5` varchar(100) DEFAULT NULL,
  `ValGlycemique6` varchar(100) DEFAULT NULL,
  `ValGlyMatin6` varchar(100) DEFAULT NULL,
  `ValGlyMid6` varchar(100) DEFAULT NULL,
  `ValGlyCollation6` varchar(100) DEFAULT NULL,
  `ValGlySoir6` varchar(100) DEFAULT NULL,
  `ValGlyAutre6` varchar(100) DEFAULT NULL,
  `ValGlycemique7` varchar(100) DEFAULT NULL,
  `ValGlyMatin7` varchar(100) DEFAULT NULL,
  `ValGlyMid7` varchar(100) DEFAULT NULL,
  `ValGlyCollation7` varchar(100) DEFAULT NULL,
  `ValGlySoir7` varchar(100) DEFAULT NULL,
  `ValGlyAutre7` varchar(100) DEFAULT NULL,
  `glycemie1` varchar(100) DEFAULT NULL,
  `glycemie2` varchar(100) DEFAULT NULL,
  `glycemie3` varchar(100) DEFAULT NULL,
  `glycemie4` varchar(100) DEFAULT NULL,
  `glycemie5` varchar(100) DEFAULT NULL,
  `glycemie6` varchar(100) DEFAULT NULL,
  `glycemie7` varchar(100) DEFAULT NULL,
  `glycemie8` varchar(100) DEFAULT NULL,
  `glycemie9` varchar(100) DEFAULT NULL,
  `glycemie10` varchar(100) DEFAULT NULL,
  `glycemie11` varchar(100) DEFAULT NULL,
  `glycemie12` varchar(100) DEFAULT NULL,
  `glycemie13` varchar(100) DEFAULT NULL,
  `glycemie14` varchar(100) DEFAULT NULL,
  `glycemie15` varchar(100) DEFAULT NULL,
  `glycemie16` varchar(100) DEFAULT NULL,
  `glycemie17` varchar(100) DEFAULT NULL,
  `glycemie18` varchar(100) DEFAULT NULL,
  `glycemie19` varchar(100) DEFAULT NULL,
  `glycemie20` varchar(100) DEFAULT NULL,
  `glycemie21` varchar(100) DEFAULT NULL,
  `glycemie22` varchar(100) DEFAULT NULL,
  `glycemie23` varchar(100) DEFAULT NULL,
  `glycemie24` varchar(100) DEFAULT NULL,
  `glycemie25` varchar(100) DEFAULT NULL,
  `glycemie26` varchar(100) DEFAULT NULL,
  `glycemie27` varchar(100) DEFAULT NULL,
  `glycemie28` varchar(100) DEFAULT NULL,
  `glycemie29` varchar(100) DEFAULT NULL,
  `glycemie30` varchar(100) DEFAULT NULL,
  `glycemie31` varchar(100) DEFAULT NULL,
  `glycemie32` varchar(100) DEFAULT NULL,
  `glycemie33` varchar(100) DEFAULT NULL,
  `glycemie34` varchar(100) DEFAULT NULL,
  `glycemie35` varchar(100) DEFAULT NULL,
  `glycemie36` varchar(100) DEFAULT NULL,
  `glycemie37` varchar(100) DEFAULT NULL,
  `glycemie38` varchar(100) DEFAULT NULL,
  `glycemie39` varchar(100) DEFAULT NULL,
  `glycemie40` varchar(100) DEFAULT NULL,
  `glycemie41` varchar(100) DEFAULT NULL,
  `glycemie42` varchar(100) DEFAULT NULL,
  `glycemie43` varchar(100) DEFAULT NULL,
  `glycemie44` varchar(100) DEFAULT NULL,
  `glycemie45` varchar(100) DEFAULT NULL,
  `glycemie46` varchar(100) DEFAULT NULL,
  `glycemie47` varchar(100) DEFAULT NULL,
  `glycemie48` varchar(100) DEFAULT NULL,
  `glycemie49` varchar(100) DEFAULT NULL,
  `glycemie50` varchar(100) DEFAULT NULL,
  `glycemie51` varchar(100) DEFAULT NULL,
  `glycemie52` varchar(100) DEFAULT NULL,
  `glycemie53` varchar(100) DEFAULT NULL,
  `glycemie54` varchar(100) DEFAULT NULL,
  `glycemie55` varchar(100) DEFAULT NULL,
  `glycemie56` varchar(100) DEFAULT NULL,
  `glycemie57` varchar(100) DEFAULT NULL,
  `glycemie58` varchar(100) DEFAULT NULL,
  `glycemie59` varchar(100) DEFAULT NULL,
  `glycemie60` varchar(100) DEFAULT NULL,
  `glycemie61` varchar(100) DEFAULT NULL,
  `glycemie62` varchar(100) DEFAULT NULL,
  `glycemie63` varchar(100) DEFAULT NULL,
  `glycemie64` varchar(100) DEFAULT NULL,
  `glycemie65` varchar(100) DEFAULT NULL,
  `glycemie66` varchar(100) DEFAULT NULL,
  `glycemie67` varchar(100) DEFAULT NULL,
  `glycemie68` varchar(100) DEFAULT NULL,
  `glycemie69` varchar(100) DEFAULT NULL,
  `glycemie70` varchar(100) DEFAULT NULL,
  `glycemie71` varchar(100) DEFAULT NULL,
  `glycemie72` varchar(100) DEFAULT NULL,
  `glycemie73` varchar(100) DEFAULT NULL,
  `glycemie74` varchar(100) DEFAULT NULL,
  `glycemie75` varchar(100) DEFAULT NULL,
  `glycemie76` varchar(100) DEFAULT NULL,
  `glycemie77` varchar(100) DEFAULT NULL,
  `glycemie78` varchar(100) DEFAULT NULL,
  `glycemie79` varchar(100) DEFAULT NULL,
  `glycemie80` varchar(100) DEFAULT NULL,
  `glycemie81` varchar(100) DEFAULT NULL,
  `glycemie82` varchar(100) DEFAULT NULL,
  `glycemie83` varchar(100) DEFAULT NULL,
  `glycemie84` varchar(100) DEFAULT NULL,
  `synthesecommentaire` text,
  `objectifglycemiquepreprandial` varchar(100) DEFAULT NULL,
  `objectifglycemiquepostprandial` varchar(100) DEFAULT NULL,
  `ValDatesHemGlyc1` varchar(100) DEFAULT NULL,
  `ValDatesHemGlyc2` varchar(100) DEFAULT NULL,
  `ValDatesHemGlyc3` varchar(100) DEFAULT NULL,
  `ValDatesHemGlyc4` varchar(100) DEFAULT NULL,
  `ValDatesHemGlyc5` varchar(100) DEFAULT NULL,
  `ValDatesHemGlyc6` varchar(100) DEFAULT NULL,
  `ValDatesHemGlyc7` varchar(100) DEFAULT NULL,
  `ValDatesHemGlyc8` varchar(100) DEFAULT NULL,
  `ValDatesHemGlyc9` varchar(100) DEFAULT NULL,
  `ValHbA1cHemGlyc1` varchar(100) DEFAULT NULL,
  `ValHbA1cHemGlyc2` varchar(100) DEFAULT NULL,
  `ValHbA1cHemGlyc3` varchar(100) DEFAULT NULL,
  `ValHbA1cHemGlyc4` varchar(100) DEFAULT NULL,
  `ValHbA1cHemGlyc5` varchar(100) DEFAULT NULL,
  `ValHbA1cHemGlyc6` varchar(100) DEFAULT NULL,
  `ValHbA1cHemGlyc7` varchar(100) DEFAULT NULL,
  `ValHbA1cHemGlyc8` varchar(100) DEFAULT NULL,
  `ValHbA1cHemGlyc9` varchar(100) DEFAULT NULL,
  `datebasal1` varchar(20) NOT NULL,
  `datebasal2` varchar(20) NOT NULL,
  `datebolus` varchar(20) NOT NULL,
  `dateglycemie` varchar(20) NOT NULL,
  `idPrescripteur` int(11) NOT NULL,
  `idPatient` varchar(250) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=146 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `donnemedicale`
--

INSERT INTO `donnemedicale` (`id`, `typediabete`, `datediagnostic`, `circonstancedecouverte`, `antecedentfamiliaux`, `datepremieremisesousPompe`, `hba1c`, `taille`, `poidsactuel`, `poidsforme`, `imc`, `nombreglycemieparjour`, `typelecteur`, `dateprescription`, `styloautopiqueur`, `nombreinjectionjour`, `stylo`, `autrestylo`, `aiguillestylo`, `autreaiguille`, `insulinelentematin`, `insulinerapidematin`, `insulinelentemidi`, `insulinerapidemidi`, `insulinelentesoir`, `insulinerapidesoir`, `insulinelentediner`, `insulinerapidediner`, `insulinelentecollation`, `insulinerapidecollation`, `totalinsulinelente`, `totalinsulinerapide`, `specialite1`, `posologie1`, `specialite2`, `posologie2`, `specialite3`, `posologie3`, `specialite4`, `posologie4`, `Horaire1`, `Debit1`, `Horaire2`, `Debit2`, `Horaire3`, `Debit3`, `Horaire4`, `Horaire5`, `Horaire6`, `Horaire7`, `Horaire8`, `Horaire9`, `Horaire10`, `Horaire11`, `Horaire12`, `Horaire13`, `Horaire14`, `Horaire15`, `Horaire16`, `Horaire17`, `Horaire18`, `Horaire19`, `Horaire20`, `Horaire21`, `Horaire22`, `Horaire23`, `Horaire24`, `Horaire25`, `Horaire26`, `Horaire27`, `Horaire28`, `Horaire29`, `Horaire30`, `Horaire31`, `Horaire32`, `Horaire33`, `Horaire34`, `Horaire35`, `Horaire36`, `Horaire37`, `Horaire38`, `Horaire39`, `Horaire40`, `Horaire41`, `Horaire42`, `Horaire43`, `Horaire44`, `Horaire45`, `Horaire46`, `Horaire47`, `Horaire48`, `Horaire49`, `Horaire50`, `Horaire51`, `Horaire52`, `Horaire53`, `Horaire54`, `Horaire55`, `Horaire56`, `Horaire57`, `Horaire58`, `Horaire59`, `Horaire60`, `Horaire61`, `Horaire62`, `Horaire63`, `Horaire64`, `Horaire65`, `Horaire66`, `Horaire67`, `Horaire68`, `Horaire69`, `Horaire70`, `Horaire71`, `Horaire72`, `Horaire73`, `Horaire74`, `Horaire75`, `Horaire76`, `Horaire77`, `Horaire78`, `Horaire79`, `Horaire80`, `Horaire81`, `Horaire82`, `Horaire83`, `Horaire84`, `Debit4`, `Debit5`, `Debit6`, `Debit7`, `Debit8`, `Debit9`, `Debit10`, `Debit11`, `Debit12`, `Debit13`, `Debit14`, `Debit15`, `Debit16`, `Debit17`, `Debit18`, `Debit19`, `Debit20`, `Debit21`, `Debit22`, `Debit23`, `Debit24`, `Debit25`, `Debit26`, `Debit27`, `Debit28`, `Debit29`, `Debit30`, `Debit31`, `Debit32`, `Debit33`, `Debit34`, `Debit35`, `Debit36`, `Debit37`, `Debit38`, `Debit39`, `Debit40`, `Debit41`, `Debit42`, `Debit43`, `Debit44`, `Horaire1N`, `Debit1N`, `Horaire2N`, `Debit2N`, `Horaire3N`, `Debit3N`, `Horaire4N`, `Debit4N`, `Horaire_1`, `Debit_1`, `Horaire_2`, `Debit_2`, `Horaire_3`, `Debit_3`, `Horaire_4`, `Horaire_5`, `Horaire_6`, `Horaire_7`, `Horaire_8`, `Horaire_9`, `Horaire_10`, `Horaire_11`, `Horaire_12`, `Horaire_13`, `Horaire_14`, `Horaire_15`, `Horaire_16`, `Horaire_17`, `Horaire_18`, `Horaire_19`, `Horaire_20`, `Horaire_21`, `Horaire_22`, `Horaire_23`, `Horaire_24`, `Horaire_25`, `Horaire_26`, `Horaire_27`, `Horaire_28`, `Horaire_29`, `Horaire_30`, `Horaire_31`, `Horaire_32`, `Horaire_33`, `Horaire_34`, `Horaire_35`, `Horaire_36`, `Horaire_37`, `Horaire_38`, `Horaire_39`, `Horaire_40`, `Horaire_41`, `Horaire_42`, `Horaire_43`, `Horaire_44`, `Horaire_45`, `Horaire_46`, `Horaire_47`, `Horaire_48`, `Horaire_49`, `Horaire_50`, `Horaire_51`, `Horaire_52`, `Horaire_53`, `Horaire_54`, `Horaire_55`, `Horaire_56`, `Horaire_57`, `Horaire_58`, `Horaire_59`, `Horaire_60`, `Horaire_61`, `Horaire_62`, `Horaire_63`, `Horaire_64`, `Horaire_65`, `Horaire_66`, `Horaire_67`, `Horaire_68`, `Horaire_69`, `Horaire_70`, `Horaire_71`, `Horaire_72`, `Horaire_73`, `Horaire_74`, `Horaire_75`, `Horaire_76`, `Horaire_77`, `Horaire_78`, `Horaire_79`, `Horaire_80`, `Horaire_81`, `Horaire_82`, `Horaire_83`, `Horaire_84`, `Horaire_85`, `Debit_4`, `Debit_5`, `Debit_6`, `Debit_7`, `Debit_8`, `Debit_9`, `Debit_10`, `Debit_11`, `Debit_12`, `Debit_13`, `Debit_14`, `Debit_15`, `Debit_16`, `Debit_17`, `Debit_18`, `Debit_19`, `Debit_20`, `Debit_21`, `Debit_22`, `Debit_23`, `Debit_24`, `Debit_25`, `Debit_26`, `Debit_27`, `Debit_28`, `Debit_29`, `Debit_30`, `Debit_31`, `Debit_32`, `Debit_33`, `Debit_34`, `Debit_35`, `Debit_36`, `Debit_37`, `Debit_38`, `Debit_39`, `Debit_40`, `Debit_41`, `Debit_42`, `Debit_43`, `Debit_44`, `Horaire_N1`, `Debit_N1`, `Horaire_N2`, `Debit_N2`, `Horaire_N3`, `Debit_N3`, `Horaire_N4`, `Debit_N4`, `ValGlycemique1`, `ValGlyMatin1`, `ValGlyMid1`, `ValGlyCollation1`, `ValGlySoir1`, `ValGlyAutre1`, `ValGlycemique2`, `ValGlyMatin2`, `ValGlyMid2`, `ValGlyCollation2`, `ValGlySoir2`, `ValGlyAutre2`, `ValGlycemique3`, `ValGlyMatin3`, `ValGlyMid3`, `ValGlyCollation3`, `ValGlySoir3`, `ValGlyAutre3`, `ValGlycemique4`, `ValGlyMatin4`, `ValGlyMid4`, `ValGlyCollation4`, `ValGlySoir4`, `ValGlyAutre4`, `ValGlycemique5`, `ValGlyMatin5`, `ValGlyMid5`, `ValGlyCollation5`, `ValGlySoir5`, `ValGlyAutre5`, `ValGlycemique6`, `ValGlyMatin6`, `ValGlyMid6`, `ValGlyCollation6`, `ValGlySoir6`, `ValGlyAutre6`, `ValGlycemique7`, `ValGlyMatin7`, `ValGlyMid7`, `ValGlyCollation7`, `ValGlySoir7`, `ValGlyAutre7`, `glycemie1`, `glycemie2`, `glycemie3`, `glycemie4`, `glycemie5`, `glycemie6`, `glycemie7`, `glycemie8`, `glycemie9`, `glycemie10`, `glycemie11`, `glycemie12`, `glycemie13`, `glycemie14`, `glycemie15`, `glycemie16`, `glycemie17`, `glycemie18`, `glycemie19`, `glycemie20`, `glycemie21`, `glycemie22`, `glycemie23`, `glycemie24`, `glycemie25`, `glycemie26`, `glycemie27`, `glycemie28`, `glycemie29`, `glycemie30`, `glycemie31`, `glycemie32`, `glycemie33`, `glycemie34`, `glycemie35`, `glycemie36`, `glycemie37`, `glycemie38`, `glycemie39`, `glycemie40`, `glycemie41`, `glycemie42`, `glycemie43`, `glycemie44`, `glycemie45`, `glycemie46`, `glycemie47`, `glycemie48`, `glycemie49`, `glycemie50`, `glycemie51`, `glycemie52`, `glycemie53`, `glycemie54`, `glycemie55`, `glycemie56`, `glycemie57`, `glycemie58`, `glycemie59`, `glycemie60`, `glycemie61`, `glycemie62`, `glycemie63`, `glycemie64`, `glycemie65`, `glycemie66`, `glycemie67`, `glycemie68`, `glycemie69`, `glycemie70`, `glycemie71`, `glycemie72`, `glycemie73`, `glycemie74`, `glycemie75`, `glycemie76`, `glycemie77`, `glycemie78`, `glycemie79`, `glycemie80`, `glycemie81`, `glycemie82`, `glycemie83`, `glycemie84`, `synthesecommentaire`, `objectifglycemiquepreprandial`, `objectifglycemiquepostprandial`, `ValDatesHemGlyc1`, `ValDatesHemGlyc2`, `ValDatesHemGlyc3`, `ValDatesHemGlyc4`, `ValDatesHemGlyc5`, `ValDatesHemGlyc6`, `ValDatesHemGlyc7`, `ValDatesHemGlyc8`, `ValDatesHemGlyc9`, `ValHbA1cHemGlyc1`, `ValHbA1cHemGlyc2`, `ValHbA1cHemGlyc3`, `ValHbA1cHemGlyc4`, `ValHbA1cHemGlyc5`, `ValHbA1cHemGlyc6`, `ValHbA1cHemGlyc7`, `ValHbA1cHemGlyc8`, `ValHbA1cHemGlyc9`, `datebasal1`, `datebasal2`, `datebolus`, `dateglycemie`, `idPrescripteur`, `idPatient`) VALUES
(144, 'DT2', '11-05-2017', '5', '5', '10-05-2017', '5', '5', '5', '5', '2000.0', '5', '5', '16-05-2017', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '25', '25', '5', '5', '5', '5', '5', '5', '5', '5', '06:30', '5', '05:30', '5', '13:25', '6', '05:25', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '9', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '06:30', '5', '13:25', '7', '06:25', '7', '05:20', '8', '13:25', '8', '05:25', '6', '02:25', '3', '05:25', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '6', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '05:25', '2', '01:25', '5', '13:25', '4', '08:25', '6', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', '5', '5', '03-05-2017', '10-05-2017', '11-05-2017', '11-05-2017', '10-05-2017', '17-05-2017', '11-05-2017', '01-06-2017', '02-05-2017', '5', '5', '5', '5', '5', '5', '5', '5', '5', '25-05-2017', '05-05-2017', '26-04-2017', '27-04-2017', 81, '5-5'),
(145, 'DT1', '', '', '', '', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '-');

-- --------------------------------------------------------

--
-- Structure de la table `habitudealimentaire`
--

CREATE TABLE IF NOT EXISTS `habitudealimentaire` (
  `id` smallint(11) NOT NULL,
  `regime` varchar(255) NOT NULL,
  `observation2` varchar(255) NOT NULL,
  `survenue` varchar(255) NOT NULL,
  `atcd` varchar(255) NOT NULL,
  `traitement` varchar(255) NOT NULL,
  `date1` varchar(20) NOT NULL,
  `date2` varchar(20) NOT NULL,
  `date3` varchar(20) NOT NULL,
  `date4` varchar(20) NOT NULL,
  `date5` varchar(20) NOT NULL,
  `date6` varchar(20) NOT NULL,
  `date7` varchar(20) NOT NULL,
  `date8` varchar(20) NOT NULL,
  `date9` varchar(20) NOT NULL,
  `taille1` int(11) NOT NULL,
  `taille2` int(11) NOT NULL,
  `taille3` int(11) NOT NULL,
  `taille4` int(11) NOT NULL,
  `taille5` int(11) NOT NULL,
  `taille6` int(11) NOT NULL,
  `taille7` int(11) NOT NULL,
  `taille8` int(11) NOT NULL,
  `taille9` int(11) NOT NULL,
  `poids1` int(11) NOT NULL,
  `poids2` int(11) NOT NULL,
  `poids3` int(11) NOT NULL,
  `poids4` int(11) NOT NULL,
  `poids5` int(11) NOT NULL,
  `poids6` int(11) NOT NULL,
  `poids7` int(11) NOT NULL,
  `poids8` int(11) NOT NULL,
  `poids9` int(11) NOT NULL,
  `imc1` double(11,6) NOT NULL,
  `imc2` double(11,6) NOT NULL,
  `imc3` double(11,6) NOT NULL,
  `imc4` double(11,6) NOT NULL,
  `imc5` double(11,6) NOT NULL,
  `imc6` double(11,6) NOT NULL,
  `imc7` double(11,6) NOT NULL,
  `imc8` double(11,6) NOT NULL,
  `imc9` double(11,6) NOT NULL,
  `idPrescripteur` int(11) NOT NULL,
  `idPatient` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `habitudealimentaire`
--

INSERT INTO `habitudealimentaire` (`id`, `regime`, `observation2`, `survenue`, `atcd`, `traitement`, `date1`, `date2`, `date3`, `date4`, `date5`, `date6`, `date7`, `date8`, `date9`, `taille1`, `taille2`, `taille3`, `taille4`, `taille5`, `taille6`, `taille7`, `taille8`, `taille9`, `poids1`, `poids2`, `poids3`, `poids4`, `poids5`, `poids6`, `poids7`, `poids8`, `poids9`, `imc1`, `imc2`, `imc3`, `imc4`, `imc5`, `imc6`, `imc7`, `imc8`, `imc9`, `idPrescripteur`, `idPatient`) VALUES
(1, 'non', '5', '5', '5', '5', '03-05-2017', '16-05-2017', '09-05-2017', '24-05-2017', '09-05-2017', '17-05-2017', '10-05-2017', '04-05-2017', '08-05-2017', 5, 4, 8, 7, 5, 4, 6, 5, 4, 4, 8, 7, 5, 6, 2, 5, 8, 5, 1600.000000, 5000.000000, 1093.800000, 1020.400000, 2400.000000, 1250.000000, 1388.900000, 3200.000000, 3125.000000, 81, '5-5'),
(2, 'non', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0.000000, 0.000000, 0.000000, 0.000000, 0.000000, 0.000000, 0.000000, 0.000000, 0.000000, 0, '-');

-- --------------------------------------------------------

--
-- Structure de la table `habitudevie`
--

CREATE TABLE IF NOT EXISTS `habitudevie` (
  `id` smallint(11) NOT NULL,
  `activitephysique` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `situationfamiliale` varchar(255) NOT NULL,
  `observation` varchar(255) NOT NULL,
  `hygienealimentaire` varchar(255) NOT NULL,
  `stabilitehoraires` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `etatcutane` varchar(255) NOT NULL,
  `choixpoint` varchar(255) NOT NULL,
  `environnement` varchar(255) NOT NULL,
  `rougeur` varchar(30) NOT NULL,
  `idPrescripteur` int(11) NOT NULL,
  `idPatient` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `habitudevie`
--

INSERT INTO `habitudevie` (`id`, `activitephysique`, `profession`, `situationfamiliale`, `observation`, `hygienealimentaire`, `stabilitehoraires`, `details`, `etatcutane`, `choixpoint`, `environnement`, `rougeur`, `idPrescripteur`, `idPatient`) VALUES
(120, '5', '5', '5', '5', '5', 'non', '5', '5', '5', 'inflammation', 'lypodystrophie', 81, '5-5'),
(121, '', '', '', '', '', 'non', '', '', '', '', 'rougeur', 0, '-');

-- --------------------------------------------------------

--
-- Structure de la table `infobastide`
--

CREATE TABLE IF NOT EXISTS `infobastide` (
  `id` int(11) NOT NULL,
  `nomresp` varchar(30) NOT NULL,
  `prenomresp` varchar(40) NOT NULL,
  `mobileresp` varchar(20) NOT NULL,
  `coordonnee` varchar(50) NOT NULL,
  `idPrescripteur` int(11) NOT NULL,
  `idPatient` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=174 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `infobastide`
--

INSERT INTO `infobastide` (`id`, `nomresp`, `prenomresp`, `mobileresp`, `coordonnee`, `idPrescripteur`, `idPatient`) VALUES
(172, '5', '5', '5', '5', 81, '5-5'),
(173, '', '', '', '', 0, '-');

-- --------------------------------------------------------

--
-- Structure de la table `infopatient`
--

CREATE TABLE IF NOT EXISTS `infopatient` (
  `id` int(11) NOT NULL,
  `nompatient` varchar(30) NOT NULL,
  `prenompatient` varchar(40) NOT NULL,
  `datenaissance` varchar(40) NOT NULL,
  `agepatient` int(11) NOT NULL,
  `telpatient` varchar(20) NOT NULL,
  `mobilepatient` varchar(20) NOT NULL,
  `emailpatient` varchar(100) NOT NULL,
  `adressepatient` varchar(255) NOT NULL,
  `codepostalpatient` varchar(20) NOT NULL,
  `villepatient` varchar(40) NOT NULL,
  `idPrescripteur` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=135 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `infopatient`
--

INSERT INTO `infopatient` (`id`, `nompatient`, `prenompatient`, `datenaissance`, `agepatient`, `telpatient`, `mobilepatient`, `emailpatient`, `adressepatient`, `codepostalpatient`, `villepatient`, `idPrescripteur`) VALUES
(133, '5', '5', '29-12-2008', 9, '5', '5', 'feno@gmail.com', '5', '25550', 'Pr&eacute;sentevillers', 81),
(134, '', '', '', 0, '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `infoprescripteur`
--

CREATE TABLE IF NOT EXISTS `infoprescripteur` (
  `id` int(11) NOT NULL,
  `etablissementprescripteur` varchar(50) NOT NULL,
  `serviceep` varchar(50) NOT NULL,
  `npp` varchar(100) NOT NULL,
  `telep` varchar(20) NOT NULL,
  `mailep` varchar(100) NOT NULL,
  `adressep` varchar(200) NOT NULL,
  `mobiledp` varchar(20) NOT NULL,
  `mobiledl` varchar(20) NOT NULL,
  `mobilemt` varchar(20) NOT NULL,
  `mobiled` varchar(20) NOT NULL,
  `membrereseau` varchar(5) NOT NULL,
  `nomreseau` varchar(50) NOT NULL,
  `idPrescripteur` int(11) NOT NULL,
  `idPatient` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `infoprescripteur`
--

INSERT INTO `infoprescripteur` (`id`, `etablissementprescripteur`, `serviceep`, `npp`, `telep`, `mailep`, `adressep`, `mobiledp`, `mobiledl`, `mobilemt`, `mobiled`, `membrereseau`, `nomreseau`, `idPrescripteur`, `idPatient`) VALUES
(129, '5', '5', '5', '5', 'sedera@gmail.com', '5', '', '5', '', '', 'Oui', '5', 81, '5-5'),
(130, '', '', '', '', '', '', '', '', '', '', 'Non', '', 0, '-');

-- --------------------------------------------------------

--
-- Structure de la table `insulinotherapiefonctionnelle`
--

CREATE TABLE IF NOT EXISTS `insulinotherapiefonctionnelle` (
  `id` int(11) NOT NULL,
  `petitdejeunerDe` varchar(20) NOT NULL,
  `petitdejeunerA` varchar(20) NOT NULL,
  `dejeunerDe` varchar(20) NOT NULL,
  `dejeunerA` varchar(20) NOT NULL,
  `gouterDe` varchar(20) NOT NULL,
  `gouterA` varchar(20) NOT NULL,
  `dinerDe` varchar(20) NOT NULL,
  `dinerA` varchar(20) NOT NULL,
  `collationDe` varchar(20) NOT NULL,
  `collationA` varchar(20) NOT NULL,
  `petitdejeunerRotation` varchar(250) NOT NULL,
  `dejeunerRotation` varchar(250) NOT NULL,
  `gouterRotation` varchar(250) NOT NULL,
  `dinerRotation` varchar(250) NOT NULL,
  `collationRotation` varchar(250) NOT NULL,
  `petitdejeunerObjectif` varchar(250) NOT NULL,
  `dejeunerObjectif` varchar(250) NOT NULL,
  `gouterObjectif` varchar(250) NOT NULL,
  `dinerObjectif` varchar(250) NOT NULL,
  `collationObjectif` varchar(250) NOT NULL,
  `petitdejeunerSensibilite` varchar(250) NOT NULL,
  `dejeunerSensibilite` varchar(250) NOT NULL,
  `gouterSensibilite` varchar(250) NOT NULL,
  `dinerSensibilite` varchar(250) NOT NULL,
  `collationSensibilite` varchar(250) NOT NULL,
  `idPrescripteur` int(11) NOT NULL,
  `idPatient` varchar(250) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `insulinotherapiefonctionnelle`
--

INSERT INTO `insulinotherapiefonctionnelle` (`id`, `petitdejeunerDe`, `petitdejeunerA`, `dejeunerDe`, `dejeunerA`, `gouterDe`, `gouterA`, `dinerDe`, `dinerA`, `collationDe`, `collationA`, `petitdejeunerRotation`, `dejeunerRotation`, `gouterRotation`, `dinerRotation`, `collationRotation`, `petitdejeunerObjectif`, `dejeunerObjectif`, `gouterObjectif`, `dinerObjectif`, `collationObjectif`, `petitdejeunerSensibilite`, `dejeunerSensibilite`, `gouterSensibilite`, `dinerSensibilite`, `collationSensibilite`, `idPrescripteur`, `idPatient`) VALUES
(8, '05:25', '', '03:30', '05:45', '03:30', '04:25', '13:30', '13:25', '05:25', '13:40', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 81, '5-5');

-- --------------------------------------------------------

--
-- Structure de la table `manipulationdelapompe`
--

CREATE TABLE IF NOT EXISTS `manipulationdelapompe` (
  `id` int(11) NOT NULL,
  `date1` varchar(20) NOT NULL,
  `date2` varchar(20) NOT NULL,
  `date3` varchar(20) NOT NULL,
  `date4` varchar(20) NOT NULL,
  `etat1` varchar(20) NOT NULL,
  `etat2` varchar(20) NOT NULL,
  `etat3` varchar(20) NOT NULL,
  `etat4` varchar(20) NOT NULL,
  `commentaire1` text NOT NULL,
  `etat5` varchar(20) NOT NULL,
  `etat6` varchar(20) NOT NULL,
  `etat7` varchar(20) NOT NULL,
  `etat8` varchar(20) NOT NULL,
  `commentaire2` text NOT NULL,
  `etat9` varchar(20) NOT NULL,
  `etat10` varchar(20) NOT NULL,
  `etat11` varchar(20) NOT NULL,
  `etat12` varchar(20) NOT NULL,
  `commentaire3` text NOT NULL,
  `etat13` varchar(20) NOT NULL,
  `etat14` varchar(20) NOT NULL,
  `etat15` varchar(20) NOT NULL,
  `etat16` varchar(20) NOT NULL,
  `commentaire4` text NOT NULL,
  `etat17` varchar(20) NOT NULL,
  `etat18` varchar(20) NOT NULL,
  `etat19` varchar(20) NOT NULL,
  `etat20` varchar(20) NOT NULL,
  `commentaire5` text NOT NULL,
  `etat21` varchar(20) NOT NULL,
  `etat22` varchar(20) NOT NULL,
  `etat23` varchar(20) NOT NULL,
  `etat24` varchar(20) NOT NULL,
  `commentaire6` text NOT NULL,
  `etat25` varchar(20) NOT NULL,
  `etat26` varchar(20) NOT NULL,
  `etat27` varchar(20) NOT NULL,
  `etat28` varchar(20) NOT NULL,
  `commentaire7` text NOT NULL,
  `etat29` varchar(20) NOT NULL,
  `etat30` varchar(20) NOT NULL,
  `etat31` varchar(20) NOT NULL,
  `etat32` varchar(20) NOT NULL,
  `commentaire8` text NOT NULL,
  `etat33` varchar(20) NOT NULL,
  `etat34` varchar(20) NOT NULL,
  `etat35` varchar(20) NOT NULL,
  `etat36` varchar(20) NOT NULL,
  `commentaire9` text NOT NULL,
  `autre` varchar(255) NOT NULL,
  `idPrescripteur` int(11) NOT NULL,
  `idPatient` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `manipulationdelapompe`
--

INSERT INTO `manipulationdelapompe` (`id`, `date1`, `date2`, `date3`, `date4`, `etat1`, `etat2`, `etat3`, `etat4`, `commentaire1`, `etat5`, `etat6`, `etat7`, `etat8`, `commentaire2`, `etat9`, `etat10`, `etat11`, `etat12`, `commentaire3`, `etat13`, `etat14`, `etat15`, `etat16`, `commentaire4`, `etat17`, `etat18`, `etat19`, `etat20`, `commentaire5`, `etat21`, `etat22`, `etat23`, `etat24`, `commentaire6`, `etat25`, `etat26`, `etat27`, `etat28`, `commentaire7`, `etat29`, `etat30`, `etat31`, `etat32`, `commentaire8`, `etat33`, `etat34`, `etat35`, `etat36`, `commentaire9`, `autre`, `idPrescripteur`, `idPatient`) VALUES
(1, '26-04-2017', '27-04-2017', '02-05-2017', '03-05-2017', 'en cours', '', '', '', '5', '', 'non acquis', '', '', '5', 'non acquis', '', 'non acquis', '', '5', '', '', '', '', '5', 'acquis', '', '', '', '5', '', '', '', '', '5', 'en cours', '', '', '', '5', '', '', '', '', '5', 'acquis', '', '', '', '5', '5', 81, '5-5'),
(2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '-');

-- --------------------------------------------------------

--
-- Structure de la table `manipulations`
--

CREATE TABLE IF NOT EXISTS `manipulations` (
  `id` int(11) NOT NULL,
  `date1` varchar(20) NOT NULL,
  `date2` varchar(20) NOT NULL,
  `date3` varchar(20) NOT NULL,
  `date4` varchar(20) NOT NULL,
  `etat1` varchar(20) NOT NULL,
  `etat2` varchar(20) NOT NULL,
  `etat3` varchar(20) NOT NULL,
  `etat4` varchar(20) NOT NULL,
  `commentaire1` text NOT NULL,
  `etat5` varchar(20) NOT NULL,
  `etat6` varchar(20) NOT NULL,
  `etat7` varchar(20) NOT NULL,
  `etat8` varchar(20) NOT NULL,
  `commentaire2` text NOT NULL,
  `etat9` varchar(20) NOT NULL,
  `etat10` varchar(20) NOT NULL,
  `etat11` varchar(20) NOT NULL,
  `etat12` varchar(20) NOT NULL,
  `commentaire3` text NOT NULL,
  `etat13` varchar(20) NOT NULL,
  `etat14` varchar(20) NOT NULL,
  `etat15` varchar(20) NOT NULL,
  `etat16` varchar(20) NOT NULL,
  `commentaire4` text NOT NULL,
  `etat17` varchar(20) NOT NULL,
  `etat18` varchar(20) NOT NULL,
  `etat19` varchar(20) NOT NULL,
  `etat20` varchar(20) NOT NULL,
  `commentaire5` text NOT NULL,
  `idPrescripteur` int(11) NOT NULL,
  `idPatient` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `manipulations`
--

INSERT INTO `manipulations` (`id`, `date1`, `date2`, `date3`, `date4`, `etat1`, `etat2`, `etat3`, `etat4`, `commentaire1`, `etat5`, `etat6`, `etat7`, `etat8`, `commentaire2`, `etat9`, `etat10`, `etat11`, `etat12`, `commentaire3`, `etat13`, `etat14`, `etat15`, `etat16`, `commentaire4`, `etat17`, `etat18`, `etat19`, `etat20`, `commentaire5`, `idPrescripteur`, `idPatient`) VALUES
(1, '02-05-2017', '19-05-2017', '10-05-2017', '17-05-2017', 'non acquis', '', '', '', '5', '', 'en cours', '', '', '5', '', '', 'acquis', '', '5', '', '', '', 'en cours', '5', '', '', '', '', '5', 81, '5-5'),
(2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '-');

-- --------------------------------------------------------

--
-- Structure de la table `oulib_infirmiere`
--

CREATE TABLE IF NOT EXISTS `oulib_infirmiere` (
  `id` int(11) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `nomI` varchar(30) NOT NULL,
  `prenomI` varchar(40) NOT NULL,
  `emailI` varchar(40) NOT NULL,
  `mdpI` varchar(50) NOT NULL,
  `telI` varchar(11) NOT NULL,
  `rueI` varchar(100) NOT NULL,
  `code-postalI` int(11) NOT NULL,
  `villeI` varchar(50) NOT NULL,
  `finess` varchar(255) NOT NULL,
  `type-soinI1` varchar(20) NOT NULL,
  `type-soinI2` varchar(20) NOT NULL,
  `type-soinI3` varchar(20) NOT NULL,
  `type-soinI4` varchar(20) NOT NULL,
  `TypeDeSoin` varchar(350) CHARACTER SET utf8 NOT NULL,
  `lieu-intervention` varchar(255) NOT NULL,
  `cabinet` varchar(100) NOT NULL,
  `latLng` varchar(255) NOT NULL,
  `code` varchar(5) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `oulib_infirmiere`
--

INSERT INTO `oulib_infirmiere` (`id`, `photo`, `nomI`, `prenomI`, `emailI`, `mdpI`, `telI`, `rueI`, `code-postalI`, `villeI`, `finess`, `type-soinI1`, `type-soinI2`, `type-soinI3`, `type-soinI4`, `TypeDeSoin`, `lieu-intervention`, `cabinet`, `latLng`, `code`) VALUES
(11, 'profil_Andrinirina_Stian_26072017_182047.jpg', 'Andrinirina', 'Stian', 'ahly@medsoft-sante.fr', 'f', '0346448609', 'Jean Ralaimongo', 110, 'Enceinte ville d''eau Antsirabe', '78-45-2316', '', '', '', '', 'Soins de stomie|Soins des plaies|Soins d?oncologie et traitement de chimiothérapie|Perfusion|Prise de sang|Injection sous cutané, intramusculaire, intraveineuse|Prise en charge des patients diabétiques|Aide à la toilette|Préparation et distribution des traitements', 'Madagascar', 'VILLE D''EAU', '(48.660986, 2.376055)', '12345'),
(12, 'nurse-male-dark-256.png', 'MENDEL', 'Olivier', 'olivier@gmail.com', 'o', '32', '32', 32, '32', '', 'Cicatrisation', 'Stomarhérapie', 'Perfusion', 'Sondage', 'Soins de stomie|Soins des plaies||Perfusion|Prise de sang|Injection sous cutané, intramusculaire, intraveineuse|Prise en charge des patients diabétiques|Aide à la toilette|Préparation et distribution des traitements', '', '', '(17.14269, 27.31581)', ''),
(14, 'images.jpg', 'LEONARD', 'François', 'dupond@gmail.com', 'd', '349090292', '', 110, 'Antsirabe', '', 'Cicatrisation', '', '', '', 'Soins de stomie|Soins des plaies||Perfusion|Prise de sang|Injection sous cutané, intramusculaire, intraveineuse|Prise en charge des patients diabétiques|Aide à la toilette|Préparation et distribution des traitements', 'Antsirabe', '', '(-19.8672089, 47.035806200000025)', ''),
(36, '123456.gif', 'tet', 'test', 'test@gamiL.com', 't', '535235', 'dsfs', 43240, 'Saint-Just-Malmont', '424234', 'Stomarhérapie', 'Cicatrisation', '', '', 'Soins de stomie|Soins des plaies|Soins d?oncologie et traitement de chimiothérapie|||Injection sous cutané, intramusculaire, intraveineuse||||', 'Adélaïde, Australie-Méridionale, Australie', 'cabinetfsfslkdfjksjdfsd', '(-34.9284989, 138.60074559999998)', ''),
(23, 'index.jpg', 'VINCI', 'Gabriel Açi', 'gabriel@gmail.com', 'g', '348787878', 'Auberge', 9770, 'Allia', '', 'Perfusion', 'Sondage', 'Stomarhérapie', '', 'Soins de stomie|Soins des plaies||Perfusion|Prise de sang|Injection sous cutané, intramusculaire, intraveineuse|Prise en charge des patients diabétiques|Aide à la toilette|Préparation et distribution des traitements', 'Antsirabé, Province d''Antananarivo, Mada', '', '(-19.873264992660904, 47.03106884816282)', ''),
(25, 'avatar_inf.jpg', 'ngouane', 'jacques', 'jacques.ngouane@medsoft-sante.fr', 'test', '799997887', '52 RUE DU GENERAL LECLERC', 94270, 'LE KREMLIN BICERE', '843843', 'Cicatrisation', 'Stomarhérapie', 'Perfusion', '', '0', 'Le Kremlin-Bicêtre, France', '', '(48.810108, 2.3569720000000416)', ''),
(26, 'avatar-inf.jpg', 'Andrinirina', 'Stian', 'andrinirina.stian@imedsoft.fr', '123456789', '346448609', 'Rue Jean Ralaimongo', 110, 'Antsirabe', '', 'Cicatrisation', 'Stomarhérapie', 'Perfusion', 'Sondage', '0', 'Antsenakely', '', '(-19.872542020109083, 47.03350606441802)', ''),
(27, '1025-infirmiers-cabinets-soins-a-domicile.jpg', 'ROULOU', 'Mari', 'mari@gmail.com', 'm', '32', '32', 32, 'tana', '65675', 'Cicatrisation', 'Perfusion', 'Stomarhérapie', 'Sondage', '0', 'Avenue Jean Ralaimongo, Antsirabé, Madag', '', '(-19.85639174502022, 46.95873024174807)', ''),
(28, 'avatar_inf.jpg', 'sedera', 'sedera', 'sed@sed.com', 's', '123', '123', 123, '123', '', 'Stomarhérapie', '', '', '', '0', 'Antsirabé, Province d''Antananarivo, Mada', '', '(-19.8732801275103, 47.03106884816282)', ''),
(29, 'avatar_inf.jpg', 'Sedera', 'hjk', 'hjj@lkm.kl', 'kl', '123', '132', 123, '123', '', 'Stomarhérapie', '', '', '', '0', 'Andranomafana, Madagascar', '', '(-21.260591203232327, 47.454457723170435)', ''),
(30, 'avatar_inf.jpg', 'Ralaivao', 'Fanou', 'fanou.ralaivao@medsoft-sante.fr', 'fANDRIANA308', '454814946', '38 rue de la convention', 94270, 'Le Kremlin-bicêtre', '', 'Cicatrisation', '', '', '', '0', 'Paris, France', '', '(48.856614, 2.3522219000000177)', ''),
(31, 'avatar_inf.jpg', 'essai', 'essai', 'essai@essai.com', 'essai', '123', '123', 123, '123', '', 'Stomarhérapie', '', '', '', '0', 'Antalaha, Province de Diego-Suarez, Mada', '', '(-14.9061237, 50.27854860000002)', ''),
(32, 'image_stian andrinirinaandry.png', 'Tolojana', 'Feno', 'feno@gmail.com', 'f', '3022', '38, Rue de la Convention', 94270, 'Le Kremlin-Bicêtre', '234545', 'Cicatrisation', 'Stomarhérapie', 'Sondage', '', '0', '38 Rue de la Convention, Le Kremlin-Bicêtre, France', '', '(48.8122098, 2.357430700000009)', ''),
(33, 'image_StianAndrinirina.png', 'Tolojanahary', 'Feno', 'feno2@gmail.com', 'f', '2147483647', '88934', 110, 'Antsirabe', '2039202', 'Perfusion', 'Cicatrisation', 'Stomarhérapie', '', '0', '38 Rue de la Convention, Le Kremlin-Bicêtre, France', '', '(48.8122098, 2.357430700000009)', ''),
(34, 'ACCU-CHEK-insight.jpg', 'JEAN', 'Luc', 'luc@gmail.com', 'f', '7979', 'jkjkl', 59255, 'Haveluy', '878898', 'Cicatrisation', 'Stomarhérapie', 'Perfusion', '', '0', 'Andhra Pradesh, Inde', '', '(15.9128998, 79.73998749999998)', ''),
(37, 'oulib-noir-def.jpg', 'aurelien', 'jacques', 'jacquesng@hotmail.com', '0902', '760527887', '38 RUE DE LA CONVENTION', 94270, 'LE KREMLIN BICETRE', '0000000000', '', 'Cicatrisation', 'Perfusion', 'Sondage', '0', 'Le Kremlin-Bic?tre, France', '', '(48.810108, 2.3569720000000416)', ''),
(41, 'Douda_Leka.jpg', 'Douda', 'Leka', 'douda@leka.com', '', '346448609', '', 110, 'Antsirabe', '136942', '', '', '', '', '0', 'Antsenakely', 'Msoft', '', ''),
(40, 'avatar_inf.jpg', 'Andrinirina', 'Stian', 'email@test.fr', '', '123456789', '', 110, 'Antsirabe', '23-04-56', '', '', '', '', '0', 'Antsenankely', 'Enceinte ville deau', '', ''),
(42, 'Zetuk_Rfhnb.jpg', 'Zetuk', 'Rfhnb', 'dcbjj@dfbh.com', '', '2147483647', '', 1756, 'Scjjv', '234678', '', '', '', '', '0', 'Antsirabe', 'Sdgh', '', ''),
(43, 'Ral_Fan.jpg', 'Ral', 'Fan', 'ralaivao.tianarivelo@gmail.com', '', '666269071', '', 94270, 'Le kremlin-bicetre', '12345678', '', '', '', '', '0', 'Paris 13', '38 rue de la convention', '', ''),
(47, 'profil_Andrianjatovo_Douda_20170713_182323.jpg', 'Andrianjatovo', 'Douda', 'douda.andry@gmail.com', '12', '321478963', '', 110, '', '12345678', 'Cicatrisation', 'Perfusion', 'Stomathérapie', 'Sondage', '0', '', '', '(50.9497222,-126.7505555)', ''),
(52, 'profil_AURELIE_Anne_20170717_160425.jpg', 'AURELIE', 'Anne', 'astian@gmail.com', '1', '346448609', '', 110, 'Antsirabe, Madagascar', '4949', 'Cicatrisation', 'Perfusion', 'Stomathérapie', 'Sondage', '0', 'Antsirabe, Madagascar', 'Antsirabe, Madagascar', '(-19.8730077,47.0291162)', '18831'),
(62, 'liste.png', 'test2', 'test2', 'test2@gmail.com', 't', '5354', '54', 5454, '4343', 'FDDFDFD', '', '', '', '', 'Soins de stomie|Soins des plaies|||||||', 'Faridabad, Haryana, Inde', 'fdfdf', '(28.409242587886318, 77.31890519895023)', ''),
(63, 'Capture.PNG', 'test7', 'test7', 'test7@gmail.com', 'test7', '35353545454', '3535354545454', 2147483647, '3535354545454', '3535354545454', '', '', '', '', 'Soins de stomie|Soins des plaies|||Prise de sang|Injection sous cutané, intramusculaire, intraveineuse|Prise en charge des patients diabétiques||', 'Australie', 'DSDSDSD', '(-25.274203963819424, 133.76938534387205)', ''),
(60, 'profil_Y8gg7_Ifivig_20170727_154240.jpg', 'Y8gg7', 'Ifivig', 'gifi@ufug.com', 'v', '76886835', '', 110, 'Arizona, États-Unis', 'Vc', '', '', '', '', 'Soins de stomie|Soins des plaies|Soins dâ€™oncologie et traitement de chimiothÃ©rapie|Perfusion|Prise de sang|Injection sous cutanÃ©, intramusculaire, intraveineuse|Prise en charge des patients diabÃ©tiques|Aide Ã  la toilette|PrÃ©paration et distribution des traitements', 'Arizona, États-Unis', 'Arizona, États-Unis', '(34.0489281,-111.0937311)', '63693'),
(61, 'profil_Andrinirina_Stian_20170727_170451.jpg', 'Andrinirina', 'Stian', 'andrinirina.stian@gmail.com', 'stian', '346448609', '', 110, 'Antsirabé, Province d''Antananarivo, Madagascar', '5278', '', '', '', '', 'Soins de stomie|Soins des plaies|Soins d?oncologie et traitement de chimiothérapie|||Injection sous cutané, intramusculaire, intraveineuse||||', 'Antsirabé, Province d''Antananarivo, Madagascar', 'Antsirabé, Province d''Antananarivo, Madagascar', '(-19.8730077,47.0291162)', '51504'),
(64, 'Capture.PNG', 'feno', 'feno', 'fenoheriniainat@gmail.com', 'f', '32323232323', '323232323232', 2147483647, '323232323232', '323232323232', '', '', '', '', 'Soins de stomie|Soins des plaies|Soins d?oncologie et traitement de chimiothérapie|Perfusion|Prise de sang||||', 'Ionia, Michigan, ?tats-Unis', '323232323232', '(42.9872547, -85.07111739999999)', '');

-- --------------------------------------------------------

--
-- Structure de la table `oulib_liste_demande`
--

CREATE TABLE IF NOT EXISTS `oulib_liste_demande` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `emailI` varchar(255) NOT NULL,
  `nomP` varchar(255) NOT NULL,
  `prenomP` varchar(255) NOT NULL,
  `telP` varchar(255) NOT NULL,
  `adresseP` varchar(255) NOT NULL,
  `typeSoinP` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `date_soin` varchar(20) NOT NULL,
  `frequenceSoin` varchar(255) NOT NULL,
  `status` enum('attente','accepter','refuser','terminer','luAccepter','luRefuser') NOT NULL,
  `emailP` varchar(255) NOT NULL,
  `heure_soin` varchar(10) NOT NULL,
  `latLng` varchar(100) NOT NULL,
  `actu` enum('nouveau','ancien') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `oulib_liste_demande`
--

INSERT INTO `oulib_liste_demande` (`id`, `photo`, `emailI`, `nomP`, `prenomP`, `telP`, `adresseP`, `typeSoinP`, `commentaire`, `date_soin`, `frequenceSoin`, `status`, `emailP`, `heure_soin`, `latLng`, `actu`) VALUES
(75, 'user.png', 'ahly@medsoft-sante.fr', 'stian', 'andry', '346448609', 'Mahazoarivo, 110, Antsirabe', 'Perfusion - Cicatrisation', 'Pouvez vous s''occuper de mes plaies s''ils vous plait, bisou', '22-06-2017', '4 - 1', 'terminer', 'sedera@gmail.com', '10:25', '-19.868597599999998,47.0348468', 'nouveau'),
(76, 'FB-IMG-1492383033529.jpg', 'ahly@medsoft-sante.fr', 'Ralaivao', 'Fanou', '761535344', '26 place Jacques Carat, 94230, Cachan', 'Cicatrisation - Sondage', 'Soin de stomie 2 fois par jours ', '03-06-2017', '3 - 3', 'luAccepter', 'rftdouda@yahoo.fr', '14:00', '48.793704, 2.336295', 'nouveau'),
(80, 'Photo-de-moi-1.png', 'ahly@medsoft-sante.fr', 'stian', 'andry', '346448609', 'Mahazoarivo, 110, Antsirabe', 'Perfusion - Cicatrisation', 'tsindrona marary be', '21-06-2017', '4 - 1', 'luAccepter', 'rt@gmail.com', '05:25', '-19.8686077,47.034776699999995', 'nouveau'),
(81, 'avatar_patient.png', 'ahly@medsoft-sante.fr', 'Stian', 'Andrinirina', '0123456789', '110, 110, A/be', 'Cicatrisation - Stomarhérapie - Perfusion - Sondage', 'Soigner mes plaies.', '22-06-2017', '1 - 1 - 1 - 2', 'accepter', 'andrinirina@gmail.com', '14:55', '-19.868651699999997,47.0347851', 'nouveau'),
(82, 'person.png', 'ahly@medsoft-sante.fr', 'NDREMA', 'koto', '34343434', 'antsirabe, 110, Ambatolahy', '', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L''avantage du Lorem Ipsum sur un texte générique comme ''Du texte. Du texte. Du texte.'' est qu''il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard.', '30-06-2017', '2 - 2', 'accepter', 'koto@gmail.com', '14:15', '-19.986272,47.534797999999995', 'nouveau'),
(85, '', 'dupond@gmail.com', '', '', '', ', , ', '', 'cicatrisation et sondage', '24-06-2017', '', 'luAccepter', 'rt@gmail.com', '06:30', '-19.8686521,47.0348147', 'nouveau'),
(116, 'image_stian andrinirinadsandry.png', 'fanou.ralaivao@medsoft-sante.fr', 'stian andrinirinads', 'andry', '346448609', 'Mahazoarivo, , Antsirabe', ' - Cicatrisation', 'cicatrisation', '2017-12-31', '4 - 1 -  - 4', 'luAccepter', 'rt@gmail.com', '23:20', '(48.856614, 2.3522219000000177)', 'nouveau'),
(118, 'image_stian andrinirinadsandry.png', 'olivier@gmail.com', 'stian andrinirinads', 'andry', '346448609', 'Mahazoarivo, , Antsirabe', ' - Cicatrisation', 'Sondage', '2017-08-25', '4 - 1 -  - 4', 'accepter', 'rt@gmail.com', '16:16', '(17.14269, 27.31581)', 'nouveau'),
(120, 'plaquette-hd.jpg', 'jacques.ngouane@medsoft-sante.fr', 'zougou', 'jacques', '0760527887', '36 RUE DE LA CONVENTION, 94270, Le Kremlin-Bicêtre', 'Stomarhérapie - Cicatrisation', 'soins de stomie', '20-07-2017', '', 'attente', 'jacques.ng@hotmail.com', '09:50', '48.81253845600746,2.3577547794641122', 'nouveau'),
(121, 'image_stian andrinirinaandry.png', 'feno@gmail.com', 'zougou', 'jacques', '0760527887', '36 RUE DE LA CONVENTION, 94270, Le Kremlin-Bicêtre', 'Stomarhérapie - Cicatrisation', 'soins de stomie', '20-07-2017', '', 'accepter', 'jacques.ng@hotmail.com', '09:50', '48.81253845600746,2.3577547794641122', 'nouveau'),
(123, 'image_stian andrinirinaandry.png', 'andrinirina.stian@gmail.com', 'Stian', 'Andrinirina2', '346448609', 'Mahazoarivo 1, , Antsirabe', 'Cicatrisation - StomathÃƒÂ©rapie - Perfusion - Sondage', 'cicatrisation', '18-01-2017', '4 - 2 - 3 - 4', 'accepter', 'rt@gmail.com', '07:00', '(-19.8730077,47.0291162)', 'nouveau'),
(124, 'FB-IMG-1492383033529.jpg', 'jacques.ngouane@medsoft-sante.fr', 'Ralaivao', 'Fanou', '761535344', '26 place Jacques Carat, 94230, Cachan', 'Cicatrisation - Sondage', 'Soins de stomie, \n1 x par jour ', '25-07-2017', '3 - 3', 'attente', 'rftdouda@yahoo.fr', '18:30', '48.81224460000001,2.3575904999999997', 'nouveau'),
(125, '', '', '', '', '', ', , ', '', '', '', '', 'attente', '', '', '', 'nouveau'),
(126, 'image_StianAndrinirina.png', 'jacquesng@hotmail.com', 'Stian', 'Andrinirina', '2147483647', 'Mahazoarivo 1, , Antsirabe', 'Cicatrisation - StomathÃ©rapie - Perfusion - Sondage', 'dfdfdfdfdfdfd', '2017-10-01', '8 - 8 - 8 - 8', 'attente', 'rt@gmail.com', '00:13', '(48.810108, 2.3569720000000416)', 'nouveau'),
(127, 'test-oulib.jpg', 'feno@gmail.com', 'Ral', 'Douda', '146721043', '36, 94270, Le Kremlin-Bic?tre', '', 'Soins de jus de miel tout les vendredis soir', '26-07-2017', '', 'attente', 'fanou.ralaivao@hotmail.com', '17:30', '48.812252199999996,2.3575987', 'nouveau'),
(128, 'image_StianAndrinirina.png', 'feno@gmail.com', 'Stian', 'Andrinirina', '2147483647', 'Mahazoarivo 1, 110, Antsirabe', 'Cicatrisation -  - Perfusion - Sondage', 'test 1', '27-07-2017', '8 - 8 - 8 - 8', 'attente', 'rt@gmail.com', '18:30', '-19.8686647,47.03480450000001', 'nouveau'),
(129, 'image_StianAndrinirina.png', 'feno.tolojanahary@imedsoft.fr', 'Stian', 'Andrinirina', '2147483647', 'Mahazoarivo 1, , Antsirabe', 'Cicatrisation -  - Perfusion - Sondage', 'Je veux un rendez-vous pour mettre une sonde. Merci d avance.', '2017-08-01', '8 - 8 - 8 - 8', 'attente', 'rt@gmail.com', '09:15', '(43.4945252,5.8976925)', 'nouveau'),
(130, 'avatar_patient.png', 'dupond@gmail.com', 'Tolojanahary', 'Feno', '2147483647', 'jean ralai, , ', '', 'Tdtdyfyd5vyfyvugyvvyctvugucrx4fug75d5f7hh6f5fh8g6f5Fanou , f65665', '2017-08-12', '', 'accepter', 'fenoheriniainat@gmail.com', '11:03', '(-19.8672089, 47.035806200000025)', 'nouveau'),
(131, 'avatar_patient.png', 'mari@gmail.com', 'Tolojanahary', 'Feno', '2147483647', 'jean ralai, , ', '', 'Nihuguhuvyvubyf6bud5vhuf5d6h7galas g6f6bd6g6f6, f', '2015-03-01', '', 'attente', 'fenoheriniainat@gmail.com', '14:09', '(-19.85639174502022, 46.95873024174807)', 'nouveau'),
(132, 'test-oulib.jpg', 'andrinirina.stian@imedsoft.fr', 'Ralaivao', 'Fanou', '666269071', '36 rue de la convention, , Le Kremlin-BicÃªtre', 'Cicatrisation', '', '', '', 'attente', 'fanou.ralaivao@hotmail.com', '', '(-19.872542020109083, 47.03350606441802)', 'nouveau');

-- --------------------------------------------------------

--
-- Structure de la table `oulib_patient`
--

CREATE TABLE IF NOT EXISTS `oulib_patient` (
  `id` int(11) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `nomP` varchar(30) NOT NULL,
  `prenomP` varchar(40) NOT NULL,
  `emailP` varchar(50) NOT NULL,
  `mdpP` varchar(50) NOT NULL,
  `telP` varchar(11) NOT NULL,
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
  `TypeDeSoin` varchar(355) CHARACTER SET utf8 NOT NULL,
  `frequence-soin1` varchar(4) NOT NULL,
  `frequence-soin2` varchar(4) NOT NULL,
  `frequence-soin3` varchar(4) NOT NULL,
  `frequence-soin4` varchar(4) NOT NULL,
  `FrequenceDeSoin` varchar(350) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `par1` varchar(30) NOT NULL,
  `par2` varchar(30) NOT NULL,
  `par3` varchar(30) NOT NULL,
  `par4` varchar(30) NOT NULL,
  `Par` varchar(100) NOT NULL,
  `code` int(10) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `oulib_patient`
--

INSERT INTO `oulib_patient` (`id`, `photo`, `nomP`, `prenomP`, `emailP`, `mdpP`, `telP`, `rueP`, `code-postalP`, `villeP`, `code-acces`, `etage`, `info-sup`, `type-soinP1`, `type-soinP2`, `type-soinP3`, `type-soinP4`, `TypeDeSoin`, `frequence-soin1`, `frequence-soin2`, `frequence-soin3`, `frequence-soin4`, `FrequenceDeSoin`, `par1`, `par2`, `par3`, `par4`, `Par`, `code`) VALUES
(4, 'image_Stian_Andrinirina.png', 'Stian', 'Andrinirina', 'rt@gmail.com', '1', '02147483647', 'Mahazoarivo 1', 110, 'Antsirabe', '753', '2?me', '110', 'Soins de stomie', 'Soins des plaies', '', 'Perfusion', '|||Perfusion||Injection sous cutané, intramusculaire, intraveineuse||Aide à la toilette|Préparation et distribution des traitements', '8', '8', '8', '8', '|||7||8||8|5', 'jour', 'jour', 'jour', 'jour', '|||jour||semaine||semaine|semaine', 0),
(7, 'profil_Andrinirina_Stian_11072017_141244.jpg', 'NDREMA', 'koto', 'koto@gmail.com', 'k', '34343434', 'antsirabe', 110, 'Ambatolahy', '09090', 'Ã 900', 'aucun info sup', 'Cicatrisation', '', '', '', '', '2', '2', '', '', '', '', '', '', '', '', 0),
(10, 'avatar_patient.png', 'z', 'z', 'z@a.a', '1', '1', '1', 1, '1', '1', '1', '1', 'Perfusion', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(12, 'avatar_patient.png', 't', 't', 'ratrimosoaugene@gmail.com', 't', '1', '1', 1, '1', '1', '1', '1', 'Cicatrisation', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', 0),
(13, 'avatar_patient.png', 'sedera', 'sedera', 'sedera@gmail.com', 'sedera', '31254547', '12', 12, '12', '12', '12', '12', 'Cicatrisation', '', '', '', '', '2', '', '', '', '', '', '', '', '', '', 0),
(14, 'IMG-1156.JPG', 'Ralaivao', 'Fanou', 'rftdouda@yahoo.fr', 'Fandriana308', '666269071', '26 place Jacques Carat', 94230, 'Cachan', '', '5', '', 'Cicatrisation', 'Sondage', '', '', '', '3', '3', '', '', '', 'jour', 'semaine', '', '', '', 0),
(15, 'avatar_patient.png', 'kris', 'tina', 'christina.sewonou@medsoft-sante.fr', 'test', '678789887', '38 RUE DE LA CONVENTION', 94270, 'LE KREMLIN BICETRE', '', '', '', 'Cicatrisation', 'Stomarhérapie', '', '', '', '1', '2', '', '', '', '', '', '', '', '', 0),
(16, 'avatar_patient.png', 'ross', 'adoueni', 'ross.adoueni@medsoft-sante.fr', 'medsoftkb', '652343536', '52 RUE DU GENERAL LECLERC', 94270, 'LE KREMLIN BICETRE', '', '', '', 'Cicatrisation', 'Perfusion', 'Stomarhérapie', 'Sondage', '', '2', '3', '1', '1', '', '', '', '', '', '', 0),
(17, 'avatar_patient.png', 'Stian', 'Andrinirina', 'andrinirina@gmail.com', 'stian', '123456789', '110', 110, 'A/be', '110', '1', 'azert', 'Cicatrisation', 'Stomarhérapie', 'Perfusion', 'Sondage', '', '1', '1', '1', '2', '', 'jour', 'jour', 'jour', 'jour', '', 0),
(18, 'test-oulib.jpg', 'Ralaivao', 'Fanou', 'fanou.ralaivao@hotmail.com', 'Fandriana308', '666269071', '36 rue de la convention', 94270, 'Le Kremlin-Bicêtre', '', '1er', '', 'Cicatrisation', '', '', '', '', '3', '', '', '', '', 'jour', '', '', '', '', 0),
(39, 'image_AndrinirinaStian.png', 'Andrinirina', 'Stian', 'stian@gmail.com', '123', '346448609', 'Jean Ralaimongo', 110, 'antsirabe', '0123ff', '1Ã¨re Ã©tage', 'rien', 'Cicatrisation', 'Sondage', '', '', '', '1 fo', '', '', '4 fo', '', 'par jour', '', '', 'par mois', '', 96624),
(21, 'imageLAURIEJacques.png', 'LAURIE', 'Jacques', 'email@gmail.com', 'p', '98098098', 'dans notre rue', 110, 'antsirabe', '97878', 'mon etage', 'mon info sup', 'Cicatrisation', 'Stomathérapie', 'Perfusion', 'Sondage', '', '4 fo', '4 fo', '4 fo', '4 fo', '', 'par jour', 'par jour', 'par jour', 'par jour', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `poseducatheter`
--

CREATE TABLE IF NOT EXISTS `poseducatheter` (
  `id` int(11) NOT NULL,
  `date1` varchar(20) NOT NULL,
  `date2` varchar(20) NOT NULL,
  `date3` varchar(20) NOT NULL,
  `date4` varchar(20) NOT NULL,
  `etat1` varchar(20) NOT NULL,
  `etat2` varchar(20) NOT NULL,
  `etat3` varchar(20) NOT NULL,
  `etat4` varchar(20) NOT NULL,
  `commentaire1` text NOT NULL,
  `etat5` varchar(20) NOT NULL,
  `etat6` varchar(20) NOT NULL,
  `etat7` varchar(20) NOT NULL,
  `etat8` varchar(20) NOT NULL,
  `commentaire2` text NOT NULL,
  `etat9` varchar(20) NOT NULL,
  `etat10` varchar(20) NOT NULL,
  `etat11` varchar(20) NOT NULL,
  `etat12` varchar(20) NOT NULL,
  `commentaire3` text NOT NULL,
  `etat13` varchar(20) NOT NULL,
  `etat14` varchar(20) NOT NULL,
  `etat15` varchar(20) NOT NULL,
  `etat16` varchar(20) NOT NULL,
  `commentaire4` text NOT NULL,
  `etat17` varchar(20) NOT NULL,
  `etat18` varchar(20) NOT NULL,
  `etat19` varchar(20) NOT NULL,
  `etat20` varchar(20) NOT NULL,
  `commentaire5` text NOT NULL,
  `etat21` varchar(20) NOT NULL,
  `etat22` varchar(20) NOT NULL,
  `etat23` varchar(20) NOT NULL,
  `etat24` varchar(20) NOT NULL,
  `commentaire6` text NOT NULL,
  `etat25` varchar(20) NOT NULL,
  `etat26` varchar(20) NOT NULL,
  `etat27` varchar(20) NOT NULL,
  `etat28` varchar(20) NOT NULL,
  `commentaire7` text NOT NULL,
  `etat29` varchar(20) NOT NULL,
  `etat30` varchar(20) NOT NULL,
  `etat31` varchar(20) NOT NULL,
  `etat32` varchar(20) NOT NULL,
  `commentaire8` text NOT NULL,
  `etat33` varchar(20) NOT NULL,
  `etat34` varchar(20) NOT NULL,
  `etat35` varchar(20) NOT NULL,
  `etat36` varchar(20) NOT NULL,
  `commentaire9` text NOT NULL,
  `etat37` varchar(20) NOT NULL,
  `etat38` varchar(20) NOT NULL,
  `etat39` varchar(20) NOT NULL,
  `etat40` varchar(20) NOT NULL,
  `commentaire10` text NOT NULL,
  `etat41` varchar(20) NOT NULL,
  `etat42` varchar(20) NOT NULL,
  `etat43` varchar(20) NOT NULL,
  `etat44` varchar(20) NOT NULL,
  `commentaire11` text NOT NULL,
  `idPrescripteur` int(11) NOT NULL,
  `idPatient` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `poseducatheter`
--

INSERT INTO `poseducatheter` (`id`, `date1`, `date2`, `date3`, `date4`, `etat1`, `etat2`, `etat3`, `etat4`, `commentaire1`, `etat5`, `etat6`, `etat7`, `etat8`, `commentaire2`, `etat9`, `etat10`, `etat11`, `etat12`, `commentaire3`, `etat13`, `etat14`, `etat15`, `etat16`, `commentaire4`, `etat17`, `etat18`, `etat19`, `etat20`, `commentaire5`, `etat21`, `etat22`, `etat23`, `etat24`, `commentaire6`, `etat25`, `etat26`, `etat27`, `etat28`, `commentaire7`, `etat29`, `etat30`, `etat31`, `etat32`, `commentaire8`, `etat33`, `etat34`, `etat35`, `etat36`, `commentaire9`, `etat37`, `etat38`, `etat39`, `etat40`, `commentaire10`, `etat41`, `etat42`, `etat43`, `etat44`, `commentaire11`, `idPrescripteur`, `idPatient`) VALUES
(1, '03-05-2017', '26-04-2017', '10-05-2017', '', 'en cours', '', '', '', '5', '', '', '', '', '5', 'en cours', '', '', '', '5', '', '', '', '', '5', '', '', '', '', '5', '', '', '', '', '5', '', '', '', '', '5', '', '', '', '', '5', '', '', '', '', '5', '', '', '', '', '5', '', '', '', '', '5', 81, '5-5'),
(2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '-');

-- --------------------------------------------------------

--
-- Structure de la table `prescripteur`
--

CREATE TABLE IF NOT EXISTS `prescripteur` (
  `id` int(11) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `tel` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rue` varchar(100) NOT NULL,
  `code-postal` int(11) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `etablissement` varchar(100) NOT NULL,
  `statut` varchar(40) NOT NULL,
  `login` varchar(50) NOT NULL,
  `mdp` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `prescripteur`
--

INSERT INTO `prescripteur` (`id`, `photo`, `nom`, `prenom`, `tel`, `email`, `rue`, `code-postal`, `ville`, `etablissement`, `statut`, `login`, `mdp`) VALUES
(81, 'avatar.png', 'ANDRIANAIVO', 'Andry', 344630738, 'andryhsm@gmail.com', 'Antsoso', 1110, 'Hauteville-Lompnes', 'Hopital', 'Diabétologue libéral', '1', '$2a$10$3d267d6f77bc59cf8ce39OokSeDiRatUek9tvqB0RYvfBry4RuXFO'),
(80, 'avatar.png', 'Feno', 'Tolojanahary', 344630738, 'feno@gmail.com', 'Ambalavato', 36300, 'Concremiers', 'tsenakely', 'Diabétologue libéral', 'feno', '$2a$10$3168893a7e60ec23d3c54OWB/7dWhN0oYMuNm3f/YzjkHHbw7dYZW'),
(84, '2010-04-David-Lecat-nouvelle-photo-identite-.jpg', 'Lecat', 'David', 146727289, 'david.lecat@medsoft-sante.fr', '52 Rue du General Leclerc', 94270, 'Le Kremlin-BicÃªtre', 'Bastide', 'Diététicienne', 'david.medsoft', '$2a$10$c354b22f15ba908f6b551OmqnmtN9Z0mhzbeM4Fn0E49st1b1WQbW');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `alarmesetprecautions`
--
ALTER TABLE `alarmesetprecautions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `asg1`
--
ALTER TABLE `asg1`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `asg2`
--
ALTER TABLE `asg2`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `choixmateriel`
--
ALTER TABLE `choixmateriel`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `connaissances`
--
ALTER TABLE `connaissances`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `donnemedicale`
--
ALTER TABLE `donnemedicale`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `habitudealimentaire`
--
ALTER TABLE `habitudealimentaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `habitudevie`
--
ALTER TABLE `habitudevie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `infobastide`
--
ALTER TABLE `infobastide`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `infopatient`
--
ALTER TABLE `infopatient`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `infoprescripteur`
--
ALTER TABLE `infoprescripteur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `insulinotherapiefonctionnelle`
--
ALTER TABLE `insulinotherapiefonctionnelle`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `manipulationdelapompe`
--
ALTER TABLE `manipulationdelapompe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `manipulations`
--
ALTER TABLE `manipulations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `oulib_infirmiere`
--
ALTER TABLE `oulib_infirmiere`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emailI` (`emailI`);

--
-- Index pour la table `oulib_liste_demande`
--
ALTER TABLE `oulib_liste_demande`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `oulib_patient`
--
ALTER TABLE `oulib_patient`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emailP` (`emailP`);

--
-- Index pour la table `poseducatheter`
--
ALTER TABLE `poseducatheter`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `prescripteur`
--
ALTER TABLE `prescripteur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `alarmesetprecautions`
--
ALTER TABLE `alarmesetprecautions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `asg1`
--
ALTER TABLE `asg1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `asg2`
--
ALTER TABLE `asg2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `choixmateriel`
--
ALTER TABLE `choixmateriel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=131;
--
-- AUTO_INCREMENT pour la table `connaissances`
--
ALTER TABLE `connaissances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `donnemedicale`
--
ALTER TABLE `donnemedicale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=146;
--
-- AUTO_INCREMENT pour la table `habitudealimentaire`
--
ALTER TABLE `habitudealimentaire`
  MODIFY `id` smallint(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `habitudevie`
--
ALTER TABLE `habitudevie`
  MODIFY `id` smallint(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=122;
--
-- AUTO_INCREMENT pour la table `infobastide`
--
ALTER TABLE `infobastide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=174;
--
-- AUTO_INCREMENT pour la table `infopatient`
--
ALTER TABLE `infopatient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=135;
--
-- AUTO_INCREMENT pour la table `infoprescripteur`
--
ALTER TABLE `infoprescripteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=131;
--
-- AUTO_INCREMENT pour la table `insulinotherapiefonctionnelle`
--
ALTER TABLE `insulinotherapiefonctionnelle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `manipulationdelapompe`
--
ALTER TABLE `manipulationdelapompe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `manipulations`
--
ALTER TABLE `manipulations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `oulib_infirmiere`
--
ALTER TABLE `oulib_infirmiere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT pour la table `oulib_liste_demande`
--
ALTER TABLE `oulib_liste_demande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=133;
--
-- AUTO_INCREMENT pour la table `oulib_patient`
--
ALTER TABLE `oulib_patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT pour la table `poseducatheter`
--
ALTER TABLE `poseducatheter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `prescripteur`
--
ALTER TABLE `prescripteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=85;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
