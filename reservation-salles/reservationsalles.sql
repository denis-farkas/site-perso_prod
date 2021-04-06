-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 09 jan. 2021 à 07:49
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP :  7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `reservationsalles`
--
CREATE DATABASE IF NOT EXISTS `reservationsalles` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `reservationsalles`;

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `debut` datetime NOT NULL,
  `strt_debut` varchar(100) NOT NULL,
  `fin` datetime NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `titre`, `description`, `debut`, `strt_debut`, `fin`, `id_utilisateur`) VALUES
(7, 'how to: cup cakes', 'Apprenons à faire des cup cakes', '2020-12-22 13:00:00', '1608638400', '2020-12-22 14:00:00', 2),
(8, 'how to: self defense', 'casser la figure des méchants', '2020-12-24 15:00:00', '1608818400', '2020-12-24 16:00:00', 2),
(9, 'vrai test', 'enfin le vrai test', '2020-12-21 08:00:00', '1608534000', '2020-12-21 09:00:00', 19),
(10, 'vrai test', 'enfin le vrai test', '2020-12-21 09:00:00', '1608537600', '2020-12-21 10:00:00', 19),
(11, 'tt', 'tt', '2020-12-23 11:00:00', '1608717600', '2020-12-23 12:00:00', 19),
(12, 'ok', 'donc', '2020-12-21 13:00:00', '1608552000', '2020-12-21 14:00:00', 20),
(13, 'ok', 'donc', '2020-12-21 14:00:00', '1608555600', '2020-12-21 15:00:00', 20),
(14, 'anniversaire', 'lulu fête ses 104 ans', '2020-12-22 16:00:00', '1608649200', '2020-12-22 17:00:00', 19),
(15, 'anniversaire', 'lulu fête ses 104 ans', '2020-12-22 17:00:00', '1608652800', '2020-12-22 18:00:00', 19),
(16, 'anniversaire', 'lulu fête ses 104 ans', '2020-12-22 18:00:00', '1608656400', '2020-12-22 19:00:00', 19),
(17, 'test ecran', 'test ecran', '2020-12-22 08:00:00', '1608620400', '2020-12-22 09:00:00', 19),
(18, 'test ecran', 'test ecran', '2020-12-22 09:00:00', '1608624000', '2020-12-22 10:00:00', 19),
(19, 'test ecran', 'test ecran', '2020-12-22 10:00:00', '1608627600', '2020-12-22 11:00:00', 19),
(20, 'test ecran', 'test ecran', '2020-12-22 11:00:00', '1608631200', '2020-12-22 12:00:00', 19),
(21, 'test ecran', 'test ecran', '2020-12-22 12:00:00', '1608634800', '2020-12-22 13:00:00', 19),
(22, 'test ecran', 'test ecran', '2020-12-22 14:00:00', '1608642000', '2020-12-22 15:00:00', 19),
(23, 'test ecran', 'test ecran', '2020-12-22 15:00:00', '1608645600', '2020-12-22 16:00:00', 19),
(24, 'travail', 'travail', '2020-12-29 11:00:00', '1609236000', '2020-12-29 12:00:00', 19),
(25, 'par exemple', 'voila', '2021-01-08 10:00:00', '1610096400', '2021-01-08 11:00:00', 21),
(26, 'par exemple', 'voila', '2021-01-08 13:00:00', '1610107200', '2021-01-08 14:00:00', 21);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(2, 'test2', '$2y$10$6iWajoS.fWrqeQMLy4aVhe1mN6mOqo5XTViC6VZd.G3aUpjpT2Syy'),
(13, 'test3', '$2y$10$obQeykUoxR8QqZvtdBS11.U79inQbcHyfGqxrqv3c7LBoAU7ljmJO'),
(14, 'test10', '$2y$10$dnkCSxPL/2pUF5chFzc3rO3Da4Dda3rSWOwYkzaycHc/sMc3fBj6i'),
(15, 'test4', '$2y$10$BtvKEGpHcrFD8O5vuorEAu/xO8k.dOWDXs2EoUAyb1hh8HKUjDwE.'),
(16, 'test6', '$2y$10$mNjlKmiIeMYUOctUXWSpkepJ6v.nAYFZXjNybqjbcdbiIj.gXh0ZG'),
(17, 'test7', '$2y$10$Iwm0BaNmTfb61a549/xh7.80MFszWGRPXciqjC5N2c3D7mAl2jN46'),
(19, 'test', '$2y$10$Mgun3PrHiAgsDvaxFLeNM.Z.1uy08v0awBKAajfNuNuZ03w6pJsuS'),
(20, 'jojo', '$2y$10$D0yX4nwgLT5/HKZuGLb8.e56cp70tYsNYwOQRUPFRkvMse6fzwBzS'),
(21, 'didi', '$2y$10$vi15Fh9oiBvFKEmzRlDxVes2fXcIpwQhI4Z/hI.dlvnfyOz2O/0BS');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
