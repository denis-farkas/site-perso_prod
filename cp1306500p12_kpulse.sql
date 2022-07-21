-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 01 nov. 2021 à 09:02
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
-- Base de données : `cp1306500p12_kpulse`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteur`
--

CREATE TABLE `acteur` (
  `id_acteur` int(10) NOT NULL,
  `nom_acteur` varchar(110) NOT NULL,
  `sexe` varchar(110) NOT NULL,
  `naissance_acteur` date NOT NULL,
  `photo_acteur` varchar(110) NOT NULL,
  `id_agence` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `acteur`
--

INSERT INTO `acteur` (`id_acteur`, `nom_acteur`, `sexe`, `naissance_acteur`, `photo_acteur`, `id_agence`) VALUES
(1, 'Gong Yoo', 'Masculine', '1979-07-10', 'Gong_Yoo.png', NULL),
(2, 'Kim Go-eun', 'Feminine', '1991-07-02', 'Kim_Go-eun.png', NULL),
(3, 'Yoo In-na', 'Feminine', '1982-06-05', 'yoo-in-na.jpg', NULL),
(4, 'Yook_Sung-jae', 'Masculine', '1995-05-02', 'Yook_Sung-jae.jpg', NULL),
(5, 'Lee Dong-wook', 'Masculine', '1981-11-06', 'Lee-Dong-wook.jpg', NULL),
(6, 'Lee El', 'Feminine', '1982-10-26', 'Lee-el.jpg', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `administration`
--

CREATE TABLE `administration` (
  `Id_adm` int(10) NOT NULL,
  `email` varchar(110) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `administration`
--

INSERT INTO `administration` (`Id_adm`, `email`, `password`) VALUES
(1, 'dfarkas960@gmail.com', '$2y$04$mdz.iZ4W/0Szbh/d00XO/uTE5Pa0lTT8bobNMbFLholhUDOoSLcM2'),
(2, 'test@test.fr', '$2y$04$EGsv47aa7C4AmL/sTAU2lud8uM3zXs.6qRzVWQDbYiGd1ROt5nxmy');

-- --------------------------------------------------------

--
-- Structure de la table `agence`
--

CREATE TABLE `agence` (
  `id_agence` int(10) NOT NULL,
  `nom_agence` varchar(110) NOT NULL,
  `nom_proprietaire` varchar(110) NOT NULL,
  `logo_agence` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `agence`
--

INSERT INTO `agence` (`id_agence`, `nom_agence`, `nom_proprietaire`, `logo_agence`) VALUES
(1, 'Duble Kick Entertainment', 'Park Jang-geun - Kim Jung-seung', 'logo-duble.jpg'),
(2, 'YG Entertainment', 'Yang Hyun-suk', 'logo-YG.png'),
(3, 'JYP Entertainment', 'J. Y. Park', 'jyp.png');

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE `auteur` (
  `id_auteur` int(10) NOT NULL,
  `pseudo_auteur` varchar(110) NOT NULL,
  `date_inscription` datetime NOT NULL,
  `email` varchar(110) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` int(11) NOT NULL,
  `avatar` int(11) NOT NULL,
  `avatar_back` varchar(10) NOT NULL,
  `last_comment_date` datetime NOT NULL,
  `last_visit` datetime NOT NULL,
  `total_comments` int(10) NOT NULL,
  `total_visit` int(10) NOT NULL,
  `actif` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`id_auteur`, `pseudo_auteur`, `date_inscription`, `email`, `password`, `role`, `avatar`, `avatar_back`, `last_comment_date`, `last_visit`, `total_comments`, `total_visit`, `actif`) VALUES
(1, 'Adm Kpulse', '2020-06-12 04:32:36', 'defar@hot.com', '$2y$04$uOQam1DDabY4y2KPWqk.Me38DnVMJsPtEj7M/k.DAO0YUI.uIG3xu', 1, 21, 'z', '0000-00-00 00:00:00', '2020-06-12 04:32:36', 0, 1, 1),
(2, 'Guest test', '2020-06-16 11:21:41', 'guest@hot.com', '$2y$04$xvBVfN0BLuzQOSAL0KKk9uXJ3tuZ3Bsgok4oAiWv2gDc4BWaFDVAK', 1, 2, 'x', '2020-06-17 11:06:38', '2020-06-17 11:06:38', 0, 1, 1),
(3, 'didi', '2021-11-01 07:38:34', 'didi@didi.fr', '$2y$04$8i5dotsaGk2xuqyZi9ibW.CUXQvrWsJqYhyXGi/kJ7EyCWHrzBKkm', 1, 1, 'g', '0000-00-00 00:00:00', '2021-11-01 07:38:34', 0, 1, 1),
(4, 'lol', '2021-11-01 07:39:02', 'lol@lol.fr', '$2y$04$OrK6GrGXVvS0Cq/0pJ3FTOX4JORY.FBpW80N2w4MTLSRa/B1KLD6a', 1, 10, 'n', '2021-11-01 07:53:34', '2021-11-01 07:53:34', 0, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `canal`
--

CREATE TABLE `canal` (
  `id_canal` int(11) NOT NULL,
  `nom_canal` varchar(110) NOT NULL,
  `logo` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `canal`
--

INSERT INTO `canal` (`id_canal`, `nom_canal`, `logo`) VALUES
(1, 'tvN', 'tvn.png');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_commentaire` int(10) NOT NULL,
  `date_commentaire` datetime NOT NULL,
  `id_article` int(10) NOT NULL,
  `id_news` int(10) NOT NULL,
  `comment` mediumtext NOT NULL,
  `id_auteur` int(10) NOT NULL,
  `Authorized` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id_commentaire`, `date_commentaire`, `id_article`, `id_news`, `comment`, `id_auteur`, `Authorized`) VALUES
(1, '2020-06-15 00:00:00', 0, 1, 'Whaou! mais c\'est trop de la balle !', 1, 1),
(2, '2020-06-17 12:11:09', 0, 1, 'Are you sure???', 2, 1),
(3, '2021-11-01 07:53:34', 0, 4, 'Only You', 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE `groupe` (
  `id_groupe` int(11) NOT NULL,
  `nom_groupe` varchar(110) NOT NULL,
  `date_groupe` date NOT NULL,
  `photo_groupe` varchar(110) NOT NULL,
  `id_agence` int(11) NOT NULL,
  `text_groupe` longtext CHARACTER SET utf8mb4 NOT NULL,
  `resume_band` mediumtext CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `groupe`
--

INSERT INTO `groupe` (`id_groupe`, `nom_groupe`, `date_groupe`, `photo_groupe`, `id_agence`, `text_groupe`, `resume_band`) VALUES
(1, 'BLACKPINK', '2016-08-08', 'blackpink.jpeg', 2, '\r\n<p>Blackpink (Hangul: 블랙핑크; commonly stylized as BLACKPINK or BLΛƆKPIИK) is a South Korean girl group<br />\r\nformed by YG Entertainment, consisting of members Jisoo, Jennie, Ros?, and Lisa.<br />\r\nThe group debuted on August 8, 2016, with their single album Square One, which spawned \"Boombayah\", their<br />\r\nfirst number-one hit on the Billboard World Digital Songs chart.<br /> \r\nWith the group\'s early commercial success, they were hailed as the New Artist of the Year at the 31st Golden<br />\r\nDisc Awards and the 26th Seoul Music Awards.</p>\r\n<p>Blackpink is the highest-charting female K-pop act on both Billboard Hot 100 and Billboard 200, peaking at<br />\r\nnumber 41 with \"Kill This Love\", and peaking at number 24 with Kill This Love, respectively.<br />\r\nThey are also the first and only K-pop girl group to enter and top Billboard\'s Emerging Artists chart.<br /> \r\nThey are the first female K-pop group to have four number-one singles on Billboard\\\'s World Digital Song Sales chart.<br /> \r\nAt the time of its release, \"Ddu-Du Ddu-Du\" was the most-viewed Korean music video in the first 24 hours on YouTube, <br />\r\nand in January 2019, it became the most viewed music video by a K-pop group on the website.<br /> \r\nAs of September 2019, Blackpink is the most-subscribed music group on YouTube.</p>\r\n', 'the highest-charting female K-pop act on both Billboard Hot 100 and Billboard 200'),
(2, 'MOMOLAND', '2016-11-10', 'momoland.jpg', 1, '<p>Momoland (Korean: 모모랜드) is a South Korean girl group formed by MLD Entertainment (formerly known as Duble Kick Company)<br />\r\nthrough the 2016 reality show Finding Momoland.<br />\r\nThe show winners became the seven members Hyebin, Yeonwoo, Jane, Nayun, JooE, Ahin, and Nancy, and they debuted on November 10, 2016,<be />\r\nwith the EP Welcome to Momoland.<br />\r\nIn 2017, Momoland added two new members, Daisy and Taeha. In 2019, Taeha and Yeonwoo left the group, and Daisy departed in 2020.\r\nOn January 3, 2018, they made a comeback with their third EP, Great! with the title track \"Bboom Bboom\". \r\nOn March 20, 2019, Momoland released their fifth EP titled Show Me with the lead single \"I\'m So Hot\", which became their first<br />\r\n release without Daisy and Taeha since Welcome to Momoland.<br />\r\nOn September 4, 2019, Momoland released their first Japanese studio album Chiri Chiri without Daisy, Taeha and Yeonwoo. <br />\r\nOn October 4, 2019, the group and MLD Entertainment signed a co-management agreement with the Philippine media corporation ABS-CBN. <br />\r\nIn late 2019, MLD Entertainment annonced Yeonwoo and Taeha\'s departure through the group\'s official fan cafe, and stated that they <br />\r\nwere still in discussions with Daisy about her future.\r\nOn December 30, 2019, Momoland released their first single album Thumbs Up with the lead single of the same name.</p>', ' A girl group formed by MLD Entertainment through the 2016 reality show Finding Momoland'),
(3, 'TWICE', '2015-10-20', 'twice.jpg', 3, '<p>Twice (Korean: 트와이스; Japanese: トゥワイス), often stylized as TWICE, is a South Korean girl group formed by JYP Entertainment.<br/>\r\nThey are the best-selling Korean girl group of all time.<br />\r\nThe group is composed of nine members: Nayeon, Jeongyeon, Momo, Sana, Jihyo, Mina, Dahyun, Chaeyoung, and Tzuyu.<br />\r\nTwice was formed with the 2015 television program Sixteen, a reality show designed to select the members of Twice. <br />\r\nThe group debuted on October 20, 2015, with the extended play (EP) The Story Begins.<br />\r\n<br />\r\nTwice rose to fame in 2016 with their single \"Cheer Up\". The song charted at number 1 on the Gaon Digital Chart and became \r\nthe best-performing single of the year. <br />\r\nIt also won \"Song of the Year\" at two major music awards shows?Melon Music Awards and Mnet Asian Music Awards. <br />\r\nTheir subsequent single \"TT\", from their third EP Twicecoaster: Lane 1, claimed the top spot for four consecutive weeks.<br />\r\n The EP was the highest selling K-pop girl group album of 2016, which sold 350,852 copies by year-end. <br />\r\n Within 19 months after debut, Twice has sold over 1.2 million units of their four EPs and special album.<br />\r\n</p>\r\n', 'the best-selling Korean girl group of all time');

-- --------------------------------------------------------

--
-- Structure de la table `interprete`
--

CREATE TABLE `interprete` (
  `id_interprete` int(10) NOT NULL,
  `pseudo_interprete` varchar(110) NOT NULL,
  `nom_reel` varchar(110) NOT NULL,
  `date_naissance` date NOT NULL,
  `id_groupe` int(10) NOT NULL,
  `id_nationalite` int(10) NOT NULL,
  `photo_interprete` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `interprete`
--

INSERT INTO `interprete` (`id_interprete`, `pseudo_interprete`, `nom_reel`, `date_naissance`, `id_groupe`, `id_nationalite`, `photo_interprete`) VALUES
(1, 'Jisoo', 'Kim Ji-soo', '1995-01-03', 1, 1, 'jisoo.jpg'),
(2, 'Jennie', 'Kim Jennie', '1996-01-16', 1, 1, 'jennie.jpg'),
(3, 'Rosé', 'Roseanne Park', '1997-02-11', 1, 2, 'rose.jpg'),
(4, 'Lisa', 'Lalisa Manoban', '1997-03-27', 1, 3, 'lisa.jpg'),
(5, 'Hyebin', 'Lee Hyebin', '1996-01-12', 2, 1, 'hyebin.jpg'),
(6, 'Jane', 'Sung Jiyeon', '1997-12-20', 2, 1, 'jane.jpg'),
(7, 'Joo E', 'Lee Joowon', '1999-08-18', 2, 1, 'jooe.jpg'),
(8, 'Nayun', 'Kim Nayun', '1998-07-31', 2, 1, 'nayun.jpg'),
(9, 'AhIn', 'Lee Ahin', '1999-09-27', 2, 1, 'ahin.jpg'),
(10, 'Nancy', 'Nancy Mcdonie', '2000-04-13', 2, 4, 'nancy.jpg'),
(11, 'Daisy', 'Yoo Jeongahn', '1999-01-22', 2, 1, 'daisy.jpg'),
(12, 'Nayeon', 'Im Nayeon', '1995-09-22', 3, 1, 'nayeon.jpg'),
(13, 'Jeongyeon', 'Yoo Jeongyeon', '1996-11-01', 3, 1, 'jeongyeon.jpg'),
(14, 'Jihyo', 'Park Jihyo', '1997-02-01', 3, 1, 'jihyo.jpg'),
(15, 'Dahyun', 'Kim Dahyun', '1998-05-28', 3, 1, 'dahyun.jpg'),
(16, 'Chaeyoung', 'Son Chaeyoung', '1999-04-23', 3, 1, 'chaeyoung.jpg'),
(17, 'Momo', 'Hirai Momo', '1996-11-09', 3, 5, 'momo.jpg'),
(18, 'Sana', 'Minatozaki Sana', '1996-12-29', 3, 5, 'sana.jpg'),
(19, 'Mina', 'Myoui Mina', '1997-03-24', 3, 5, 'mina.jpg'),
(20, 'Tzuyu', 'Chou Tzuyu', '1999-06-14', 3, 6, 'chou.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `jouer`
--

CREATE TABLE `jouer` (
  `id_acteur` int(11) NOT NULL,
  `id_kdrama` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `jouer`
--

INSERT INTO `jouer` (`id_acteur`, `id_kdrama`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1);

-- --------------------------------------------------------

--
-- Structure de la table `kdrama`
--

CREATE TABLE `kdrama` (
  `id_kdrama` int(10) NOT NULL,
  `titre` varchar(110) NOT NULL,
  `date_kdrama` date NOT NULL,
  `episode_kdrama` int(10) NOT NULL,
  `evaluation` varchar(10) NOT NULL,
  `id_realisateur` int(10) NOT NULL,
  `id_scenariste` int(10) NOT NULL,
  `id_genre` int(10) NOT NULL,
  `id_canal` int(10) NOT NULL,
  `id_creneau` int(10) NOT NULL,
  `photo_kdrama` varchar(110) NOT NULL,
  `resume` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `kdrama`
--

INSERT INTO `kdrama` (`id_kdrama`, `titre`, `date_kdrama`, `episode_kdrama`, `evaluation`, `id_realisateur`, `id_scenariste`, `id_genre`, `id_canal`, `id_creneau`, `photo_kdrama`, `resume`) VALUES
(1, 'Goblin: The lonely and great god', '2016-12-02', 16, '5', 1, 1, 1, 1, 1, 'goblin2.jpg', '<p>Kim Shin (Gong Yoo) a decorated military general from the Goryeo Dynasty is framed as a traitor and killed by his master, the young King.<br />\r\nYears after his death, he is cursed by the almighty to stay immortal forever and endure the pain of seeing his loved ones die\r\nas a punishment to the beastly kills he committed in the wars to protect his country.<br />\r\nHe becomes an immortal goblin, helping people with his powers and being a kind man in spite of his grieving past.<br />\r\nThe only way to put an end to his immortality is the Goblin\'s bride, whose aid in pulling out the sword will culminate his painful immortality.<br />\r\n\r\nSupernatural rom-com \"Guardian\" has become the first soap on a cable channel to draw viewer ratings of over 20 percent.<br />\r\nThe series achieved the milestone with its final episode on tvN on Saturday, which kept an unprecedented 20.5 percent of viewers glued to their screens.\r\nThe show has also been sold to Europe and the U.S. on top of the established markets of Indonesia, Japan, Malaysia, Singapore and Taiwan.<br />\r\nOnly China, where there are millions of fans of Korean soaps, seems to have slammed on the brakes as it sulks over the planned stationing of a U.S. Terminal High-Altitude Area Defense battery here.<br />\r\n\r\nIt became popular across all generations and spawned its own fashion crazes just like the big network soaps</p>'),
(2, 'Crash Landing on You', '2019-12-14', 16, '5', 2, 2, 1, 1, 1, 'crash.jpg', 'Crash Landing on You tells the story of two star-crossed lovers, Yoon Se-ri (Son Ye-jin), a South Korean Chaebol heiress, and Ri Jeong-hyeok (Hyun Bin), a member of the North Korean elite and a Captain in the North Korean Special Police Force. One day while Yoon Se-ri goes for a short paragliding ride in Seoul, South Korea, a sudden tornado knocks her out and blows her off course. She awakens to find her paraglider had crashed into a tree in a forest in the DMZ in North Korea (an area forbidden for South Koreans). She then meets Ri Jeong-hyeok and falls into his arms when descending from the tree. Ri Jeong-hyeok eventually gives Yoon Se-ri shelter, and develops plans to secretly help her return to South Korea. Over time, they fall in love, despite the divide and dispute between their respective countries.');

-- --------------------------------------------------------

--
-- Structure de la table `kpop`
--

CREATE TABLE `kpop` (
  `id_kpop` int(11) NOT NULL,
  `titre` varchar(110) NOT NULL,
  `date_kpop` date NOT NULL,
  `version` varchar(110) NOT NULL,
  `langue` varchar(110) NOT NULL,
  `reprise` varchar(10) NOT NULL,
  `id_groupe` int(10) NOT NULL,
  `photo_kpop` varchar(110) NOT NULL,
  `video_kpop` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `kpop`
--

INSERT INTO `kpop` (`id_kpop`, `titre`, `date_kpop`, `version`, `langue`, `reprise`, `id_groupe`, `photo_kpop`, `video_kpop`) VALUES
(1, 'Ddu-Du Ddu-Du', '2018-06-15', 'original', 'korean', '0', 1, 'ddu.png', 'https://www.youtube.com/embed/IHNzOHi8sJs?feature=player_detailpage'),
(2, 'Kill this love', '2019-04-04', 'original', 'korean', '0', 1, 'kill.jpg', 'https://www.youtube.com/embed/2S24-y0Ij3Y?feature=player_detailpage'),
(3, 'BBoom BBoom', '2018-01-03', 'original', 'korean', '0', 2, 'bboom.gif', 'https://www.youtube.com/embed/JQGRg8XBnB4?feature=player_detailpage'),
(4, 'Baam', '2018-06-30', 'original', 'korean', '0', 2, 'baam.png', 'https://www.youtube.com/embed/txWmd7QKFe8?feature=player_detailpage'),
(5, 'What is love', '2018-04-09', 'original', 'korean', '0', 3, 'what.jpg', 'https://www.youtube.com/embed/i0p1bmr0EmE?feature=player_detailpage'),
(6, 'Likey', '2017-10-30', 'original', 'korean', '0', 3, 'likey.jpg', 'https://www.youtube.com/embed/V2hlQkVJZhE?feature=player_detailpage'),
(7, 'Kiss and make-up', '2019-05-02', 'original', 'korean', '0', 1, 'kiss.jpg', 'https://www.youtube.com/embed/5v5p8fqPEwM?feature=player_detailpage\r\n'),
(8, 'More & more', '2020-06-01', 'original', 'korean', '0', 3, 'more.jpg', 'https://www.youtube.com/embed/mH0_XpSHkZo?feature=player_detailpage');

-- --------------------------------------------------------

--
-- Structure de la table `nationalite`
--

CREATE TABLE `nationalite` (
  `id_nationalite` int(11) NOT NULL,
  `nom_pays` varchar(110) NOT NULL,
  `img_pays` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `nationalite`
--

INSERT INTO `nationalite` (`id_nationalite`, `nom_pays`, `img_pays`) VALUES
(1, 'South Korea', 'korea.jpg'),
(2, 'New Zealand', 'newz.jpg'),
(3, 'Thailand', 'thai.jpg'),
(4, 'Usa', 'usa.jpg'),
(5, 'Japan', 'japan.jpg'),
(6, 'Taiwan', 'taiwan.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `titre_news` varchar(110) NOT NULL,
  `contenu_news` mediumtext NOT NULL,
  `date_news` date NOT NULL,
  `photo_news` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id_news`, `titre_news`, `contenu_news`, `date_news`, `photo_news`) VALUES
(1, 'BLACKPINK finally reveals date for comeback!!!', 'BLACKPINK have finally revealed the date of their long-awaited comeback, and it will be on June 26.\r\n\r\nYG Entertainment revealed on June 10 that BLACKPINK would be making their comeback with the first of several pre-release singles on June 26.', '2020-06-10', 'news1.jpg'),
(2, 'TWICE\'s Momo shares her personality type', 'TWICE’s Momo Reveals The Secrets Of Her Personality After Receiving Her MBTI Test Result: At a broad level, this means she’s great at understanding people and their feelings, looks at the world creatively, expresses herself with high nuance, and solves problems theoretically. INFPs tend to have high levels of creative, musical, intrapersonal and existential intelligence.', '2020-06-09', 'news2.jpg'),
(3, 'TWICE\'s \"More & More\" outfits cost a lot', 'The summer queens TWICE dropped “More & More” on June 1, 2020 , draped mostly in ETRO as well as other high-end brand’s colorful 2020 S/S collections. At least between $350 USD and $2400 USD each outfit. \r\nThere is something for all budgets.', '2020-06-08', 'news3.jpg'),
(4, 'Park Min Young Just Launched Her YouTube Channel', 'In order to keep up with the latest trend of Korean artists and celebrities starting their own YouTube channel, top actress Park Min Young has just released her own channel this week!', '2020-06-10', 'news4.jpg'),
(5, 'MOMOLAND’s Nancy Fangirls Over BLACKPINK’s Jennie', 'Momoland\'s Ahin\'s recent Instagram live with Nancy, Ahin revealed that Nancy has a big crush on Jennie of Blackpink.', '2020-06-07', 'news5.jpg'),
(6, 'TWICE’s Nayeon Cleverly Compares “Running Man” Members to Fruits and Vegetables', 'TWICE recently made a much-anticipated appearance on SBS’s Running Man where Nayeon surprised everyone with her savage yet accurate naming ability.', '2020-06-09', 'news6.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `realisateur`
--

CREATE TABLE `realisateur` (
  `id_realisateur` int(11) NOT NULL,
  `nom_realisateur` varchar(110) NOT NULL,
  `nationalite_realisateur` varchar(110) NOT NULL,
  `sexe_realisateur` varchar(110) NOT NULL,
  `photo_realisateur` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `realisateur`
--

INSERT INTO `realisateur` (`id_realisateur`, `nom_realisateur`, `nationalite_realisateur`, `sexe_realisateur`, `photo_realisateur`) VALUES
(1, 'Lee Eung-bok', 'South Korea', 'Masculine', 'Lee_Eung-Bok.jpg'),
(2, 'Lee Jeong-hyo', 'South Korea', 'Masculine', 'jung-hyo.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `scenariste`
--

CREATE TABLE `scenariste` (
  `id_scenariste` int(11) NOT NULL,
  `nom_scenariste` varchar(110) NOT NULL,
  `sexe_scenariste` varchar(110) NOT NULL,
  `photo_scenariste` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `scenariste`
--

INSERT INTO `scenariste` (`id_scenariste`, `nom_scenariste`, `sexe_scenariste`, `photo_scenariste`) VALUES
(1, 'Kim Eun-sook', 'feminine', 'kimeun.png'),
(2, 'Park Ji-eun', 'feminine', 'park.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `acteur`
--
ALTER TABLE `acteur`
  ADD PRIMARY KEY (`id_acteur`);

--
-- Index pour la table `administration`
--
ALTER TABLE `administration`
  ADD PRIMARY KEY (`Id_adm`);

--
-- Index pour la table `agence`
--
ALTER TABLE `agence`
  ADD PRIMARY KEY (`id_agence`);

--
-- Index pour la table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`id_auteur`);

--
-- Index pour la table `canal`
--
ALTER TABLE `canal`
  ADD PRIMARY KEY (`id_canal`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_commentaire`);

--
-- Index pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD PRIMARY KEY (`id_groupe`);

--
-- Index pour la table `interprete`
--
ALTER TABLE `interprete`
  ADD PRIMARY KEY (`id_interprete`);

--
-- Index pour la table `jouer`
--
ALTER TABLE `jouer`
  ADD PRIMARY KEY (`id_acteur`);

--
-- Index pour la table `kdrama`
--
ALTER TABLE `kdrama`
  ADD PRIMARY KEY (`id_kdrama`);

--
-- Index pour la table `kpop`
--
ALTER TABLE `kpop`
  ADD PRIMARY KEY (`id_kpop`);

--
-- Index pour la table `nationalite`
--
ALTER TABLE `nationalite`
  ADD PRIMARY KEY (`id_nationalite`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Index pour la table `realisateur`
--
ALTER TABLE `realisateur`
  ADD PRIMARY KEY (`id_realisateur`);

--
-- Index pour la table `scenariste`
--
ALTER TABLE `scenariste`
  ADD PRIMARY KEY (`id_scenariste`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `acteur`
--
ALTER TABLE `acteur`
  MODIFY `id_acteur` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `administration`
--
ALTER TABLE `administration`
  MODIFY `Id_adm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `agence`
--
ALTER TABLE `agence`
  MODIFY `id_agence` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `id_auteur` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `canal`
--
ALTER TABLE `canal`
  MODIFY `id_canal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_commentaire` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `groupe`
--
ALTER TABLE `groupe`
  MODIFY `id_groupe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `interprete`
--
ALTER TABLE `interprete`
  MODIFY `id_interprete` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `kdrama`
--
ALTER TABLE `kdrama`
  MODIFY `id_kdrama` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `kpop`
--
ALTER TABLE `kpop`
  MODIFY `id_kpop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `nationalite`
--
ALTER TABLE `nationalite`
  MODIFY `id_nationalite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `realisateur`
--
ALTER TABLE `realisateur`
  MODIFY `id_realisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `scenariste`
--
ALTER TABLE `scenariste`
  MODIFY `id_scenariste` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
