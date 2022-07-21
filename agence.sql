-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 01 nov. 2021 à 08:14
-- Version du serveur :  10.3.31-MariaDB-cll-lve
-- Version de PHP : 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `agence`
--

-- --------------------------------------------------------

--
-- Structure de la table `adm`
--

CREATE TABLE `adm` (
  `id` int(11) NOT NULL,
  `login` varchar(110) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `adm`
--

INSERT INTO `adm` (`id`, `login`, `email`, `password`) VALUES
(1, 'defar', 'defar@r.com', 'test');

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

CREATE TABLE `agent` (
  `id_agent` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `photo_agent` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `adm` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `agent`
--

INSERT INTO `agent` (`id_agent`, `nom`, `login`, `password`, `photo_agent`, `email`, `mobile`, `adm`) VALUES
(1, 'Jane DOE', 'jane1', '$2y$04$rrzlSYViVmve.xnNBDTBxORmnKNGb0Y2CgrrcORL/r3rkDqYkEeLu', 'avatarb1.png', 'jane1@gmail.com', '06666666', 1),
(2, 'Francesca Bae', 'france2', '$2y$04$Jrj19ZsTy/C3nSMA8oRwxOLn7fOD/dXV5apPIZd4icDpNp/OXPE4O', 'avatarb2.png', 'france2@yahoo.fr', '07777777', 1),
(3, 'Luigi AMOROSO', 'luigi3', '$2y$04$vdSys8noRUYnbajGzQm0z.32hXEAHKhygBB7JNGuD06ZgyxW5GcOa', 'avatarb3.png', 'luigi3@hotmail.com', '09999999', 1),
(4, 'Anne DIRECTOR', 'anne1', '$2y$04$sfIabySqWvg3DrM2MIkhSeO3KRgkxlkPWycwJKm6UittKEh474Hvm', 'avatarb4.png', 'anne1@gmail.com', '08888888', 1),
(5, 'dupont dupont', 'test', '$2y$04$RgqDoB3qeNDAcEWRG0wH4eK.aW/gTWL7N2TMgiOomO8F6P49lnCpy', 'avatarb1.png', 'adm@test.fr', '06666666', 1);

-- --------------------------------------------------------

--
-- Structure de la table `biens`
--

CREATE TABLE `biens` (
  `id_bien` int(10) NOT NULL,
  `loc_vent` int(10) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(200) NOT NULL,
  `id_type` int(10) NOT NULL,
  `surface` int(10) NOT NULL,
  `ancien` tinyint(1) NOT NULL,
  `pieces` int(10) NOT NULL,
  `parking` int(10) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `code_postal` varchar(100) NOT NULL,
  `etage` int(10) NOT NULL,
  `ascenceur` tinyint(1) NOT NULL,
  `localisation` varchar(100) NOT NULL,
  `id_proprio` int(10) NOT NULL,
  `id_locataire` int(10) NOT NULL,
  `id_photo` varchar(100) NOT NULL,
  `loyer` int(10) NOT NULL,
  `charges` int(10) NOT NULL,
  `prix` int(20) NOT NULL,
  `actif` int(10) NOT NULL,
  `id_agent` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `biens`
--

INSERT INTO `biens` (`id_bien`, `loc_vent`, `date`, `description`, `id_type`, `surface`, `ancien`, `pieces`, `parking`, `adresse`, `ville`, `code_postal`, `etage`, `ascenceur`, `localisation`, `id_proprio`, `id_locataire`, `id_photo`, `loyer`, `charges`, `prix`, `actif`, `id_agent`) VALUES
(1, 1, '2020-04-20', 'penthouse de luxe', 3, 1000, 1, 10, 3, '35 av des borromées', 'marseille', '13001', 25, 1, '0.0,1.1', 1, 0, 'app1sm.jpg', 4000, 500, 0, 1, 1),
(2, 1, '2020-04-21', 'mega penthouse', 3, 1850, 1, 15, 3, '15 avenue de la paix', 'gardanne', '13120', 18, 1, '0.0,1.1', 2, 0, 'app6sm.jpg', 10000, 800, 0, 1, 1),
(3, 1, '2020-04-21', 'penthouse des cimes', 3, 850, 2, 8, 2, '2 boulevard périer', 'aix', '13080', 20, 1, '0.0,1.1', 3, 0, 'app2sm.jpg', 5000, 500, 0, 1, 1),
(4, 1, '2020-03-15', 'appartement loft', 1, 230, 1, 5, 1, '5 rue du puits', 'marseille', '13011', 7, 1, '0.0,1.1', 4, 1, 'app4sm.jpg', 2500, 400, 0, 1, 2),
(5, 2, '2020-01-01', 'studio étudiant', 4, 130, 1, 4, 0, '17 bis rue st denis', 'marseille', '13009', 8, 1, '0.0,1.1', 5, 2, 'app5sm.jpg', 0, 0, 245000, 1, 3),
(6, 2, '2020-01-05', 'studio élégant', 4, 155, 1, 6, 1, '27 rue carmier', 'aix', '13080', 5, 0, '0.0,1.1', 6, 0, 'app7sm.jpg', 0, 0, 210000, 1, 3),
(7, 2, '2020-01-10', 'immeuble', 6, 15000, 2, 100, 40, '20 avenue de la paix', 'marseille', '13012', 10, 5, '0.0,1.1', 7, 0, 'image1sm.jpg', 0, 0, 4500000, 1, 3),
(8, 2, '2020-03-10', 'loft penthouse', 3, 300, 2, 8, 2, '6 rue du bateau', 'cassis', '13260', 7, 1, '0.0,1.1', 7, 0, 'image2sm.jpg', 0, 0, 270000, 1, 3),
(9, 1, '2020-03-08', 'appartement', 1, 180, 1, 7, 1, '15 avenue piscine', 'marseille', '13005', 6, 1, '0.0,1.1', 8, 0, 'image3sm.jpg', 2800, 300, 0, 1, 2),
(10, 1, '2020-02-10', 'appartement cossu', 1, 230, 2, 6, 1, '33 avenue cossue', 'cassis', '13260', 5, 1, '0.0,1.1', 9, 3, 'image4sm.jpg', 3000, 280, 0, 1, 1),
(11, 2, '2019-12-25', 'appartement', 1, 245, 1, 5, 1, '7 boulevard null', 'marseille', '13010', 8, 1, '0.0,1.1', 10, 4, 'image5sm.jpg', 0, 0, 450000, 1, 2),
(12, 2, '2020-12-20', 'appartement', 1, 366, 2, 8, 1, '8 rue du breuvage', 'cassis', '13260', 6, 1, '0.0,1.1', 11, 0, 'image6sm.jpg', 0, 0, 375000, 1, 2);


-- --------------------------------------------------------

--
-- Structure de la table `locataire`
--

CREATE TABLE `locataire` (
  `id_locataire` int(10) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `civilite` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `code_postal` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `login` varchar(100) NOT NULL,
  `loyer_paye` date NOT NULL,
  `date_in` date NOT NULL,
  `date_out` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `locataire`
--

INSERT INTO `locataire` (`id_locataire`, `nom`, `prenom`, `civilite`, `adresse`, `ville`, `code_postal`, `telephone`, `mobile`, `email`, `password`, `login`, `loyer_paye`, `date_in`, `date_out`) VALUES
(1, 'Curie', 'marie', 'Mme', '35 rue', 'marseille', '13000', '1', '2', 'curie@yahoo.fr', '$2y$04$bmjasuZv6fxGshbutRyDUeY0UhECUF4LXjoVlaN49NqsKwxadk2Iq', 'curie', '2020-04-04', '2020-01-01', '2022-01-01'),
(2, 'Croc', 'jacques', 'Mr', '14 avenue du', 'marseille', '13013', '1', '1', 'croc@gmail.com', '$2y$04$oQcJtALRedq2IPfBy7/4M.xhzHnmBXmf2K5kBTf2LgRACZOMn5oyG', 'croc', '2020-04-05', '2018-12-01', '2021-12-01'),
(3, 'Bois', 'boude', 'Mme', '16 rue des', 'bordeaux', '33000', '1', '2', 'boude@yahoo.fr', '$2y$04$RnmHeXBNJWii/CdedZsWje1IMuHyYdpFzntZMu50OfX5EmmLEw5K6', 'boude', '2020-03-04', '2019-05-01', '2022-05-01'),
(4, 'Crochet', 'cap', 'Mr', '88 rue du', 'marseille', '13011', '1', '2', 'crochet@yahoo.fr', '$2y$04$5Nn2KIz5aLjsPNuqEpkRgezNSx.TjQuVQvTlWleLtQdIDWXC9y32a', 'crochet', '2020-04-05', '2019-06-03', '2022-06-03'),
(5, 'dutest', 'testa', 'Mme', '14 boulevard st germain', 'paris', '75008', '0475888888', '09999999', 'locataire@test.fr', '$2y$04$hHhXcJ3IChXqn0bvcrgEkujsUUe/Fk1F8sj3mOjcffP4ARbAc1LVi', 'test', '2020-04-08', '2019-04-08', '2021-04-08');

-- --------------------------------------------------------


--
-- Structure de la table `proprio`
--

CREATE TABLE `proprio` (
  `id_proprio` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(110) NOT NULL,
  `civilite` varchar(11) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `code_postal` varchar(11) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `login` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `proprio`
--

INSERT INTO `proprio` (`id_proprio`, `nom`, `prenom`, `civilite`, `adresse`, `ville`, `code_postal`, `telephone`, `mobile`, `email`, `password`, `login`) VALUES
(1, 'fork', 'marie', 'Mme', '16 rue du havre', 'grenoble', '38000', '0491888888', '07777777', 'marfork@gmail.com', '$2y$04$Xn1bUAhmMM6IJetfGBnSieyzUnXKB.HC5M.K3nZI1Qv/sSb6ZRUje', 'marfork'),
(2, 'Bark', 'lolo', 'Mr', '47 rue du puits', 'aix', '13100', '0442888888', '08999999', 'lobark@gmail.com', '$2y$04$mLg/a7qnepKOsyU3RHf8cue2DZazz0JN86lHCQhieW0Nzt7IC8Usq', 'lobark'),
(3, 'loc', 'ventura', 'Mme', '35 rue', 'marseille', '13000', '0491888888', '09999999', 'locvent@gmail.com', '$2y$04$OV41NBpJp379.GxMHFdHF.YdnmTlX83ZNnl1XE6sxla2W7XTbcd6O', 'locvent'),
(4, 'bibi', 'lolo', 'Mme', '78 avenue', 'lyon', '69000', '0', '0', 'lobi@hotmail.com', '$2y$04$p5yca.EWMIx1IWc83fIP1O/BX5MBvcDtuqriLjWoJags/WxNPklaW', 'lobi'),
(5, 'libo', 'lili', 'Mme', '256 chemin du', 'aix', '13100', '1', '1', 'lili@hotmail.com', '$2y$04$27q2K9ajUVcl6Gn4LhTZruJ9g9.PvyMrJAcL8Ra96y8rAX.5vCScq', 'liboli'),
(6, 'polo', 'marco', 'Mr', '47 avenue', 'bordeaux', '33000', '1', '2', 'polo@gmail.com', '$2y$04$ACSWZ2f7kmutuOAKx56Dh.McEPu4DUDap4rMfnOWE9D22Bwe7Y5xG', 'polomarc'),
(7, 'Mata', 'Hari', 'Mme', '25 boulevard', 'toulouse', '31000', '6', '6', 'mata@hotmail.com', '$2y$04$npP8lqLjKG1bPZ2YMqrqYu2u.ST2Xz2gNHWnkDNjdSyryQqdq1FPG', 'mataha'),
(8, 'miguel', 'luis', 'Mr', '8 rue de', 'marseille', '13001', '1', '2', 'miguel@yahoo.fr', '$2y$04$4.e2aOHnOoo56.i2N3T4suSIp5GVC/pFkMq96FLdlzydIcNMvLK/i', 'miluis'),
(9, 'cluedo', 'moutarde', 'Mr', '28 traverse de', 'aix', '13100', '1', '2', 'cluedo@yahoo.fr', '$2y$04$rOH5X3ixR1X9ubb5gg5DtuileaLIrHGHsyKY2uyr/IrrvjTtSvXje', 'cluedo'),
(10, 'Vinaigre', 'germaine', 'Mme', '56 rue de la', 'bordeaux', '33000', '1', '2', 'vinaigre@gmail.com', '$2y$04$FiUUZJwr1mcDF3vGFSif7O.vdJg.qNJe9frHj0uDAMYdLTyb.iRCy', 'gervin'),
(11, 'durand', 'durand', 'Mr', '35 rue de la paix', 'marseille', '13009', '0491888888', '08888888', 'proprietaire@test.fr', '$2y$04$07pJHapkCGIrNigfsj6jiOmwU7SAGPly.ijQb0qtAiuM8Q1gMzZMm', 'test');


-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id_type` int(10) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id_type`, `type`) VALUES
(1, 'appartement'),
(2, 'loft'),
(3, 'penthouse'),
(4, 'studio'),
(5, 'maison'),
(6, 'immeuble'),
(7, 'parking'),
(8, 'local entreprise'),
(9, 'bureau');


--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id_agent`);

--
-- Index pour la table `biens`
--
ALTER TABLE `biens`
  ADD PRIMARY KEY (`id_bien`);


--
-- Index pour la table `locataire`
--
ALTER TABLE `locataire`
  ADD PRIMARY KEY (`id_locataire`);

--
-- Index pour la table `proprio`
--
ALTER TABLE `proprio`
  ADD PRIMARY KEY (`id_proprio`);


--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);


--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `agent`
--
ALTER TABLE `agent`
  MODIFY `id_agent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `biens`
--
ALTER TABLE `biens`
  MODIFY `id_bien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;


--
-- AUTO_INCREMENT pour la table `locataire`
--
ALTER TABLE `locataire`
  MODIFY `id_locataire` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;


--
-- AUTO_INCREMENT pour la table `proprio`
--
ALTER TABLE `proprio`
  MODIFY `id_proprio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;



--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
