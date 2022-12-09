-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 09 déc. 2022 à 12:17
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `livreor`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire` text NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `commentaire`, `id_utilisateur`, `date`) VALUES
(17, 'â€œLes humains ne sont pas le rÃ©sultat final dâ€™un progrÃ¨s Ã©volutif prÃ©dictible mais plutÃ´t une minuscule brindille sur lâ€™Ã©norme buisson arborescent de la vie qui ne repousserait sÃ»rement pas si la graine de cet arbre Ã©tait mise en terre une seconde fois.â€', 2, '2022-12-07 10:58:21'),
(49, 'je dis bonjour je vais faire anglais apres merci ', 6, '2022-12-08 13:52:29'),
(56, 'bonjour', 16, '2022-12-09 12:32:05'),
(55, 'bonsoir la famille ', 10, '2022-12-08 20:02:32'),
(54, 'njnjnjn', 7, '2022-12-08 19:58:24'),
(53, 'azazazaz', 9, '2022-12-08 16:45:30'),
(52, 'cc', 9, '2022-12-08 15:46:04'),
(51, 'voila', 9, '2022-12-08 15:37:40'),
(50, 'bonjour Gab', 9, '2022-12-08 15:20:33'),
(57, 'â€œTout le monde a un manga qui lui est destinÃ©.â€', 14, '2022-12-09 12:44:42'),
(58, 'ç¬‘ã£ã¦æš®ã‚‰ã™ã‚‚ä¸€ç”Ÿã€æ³£ã„ã¦æš®ã‚‰ã™ã‚‚ä¸€ç”Ÿ\r\n\r\nÂ« Le temps dâ€™une vie est le mÃªme, quâ€™on le passe en pleurant ou en riant Â».', 14, '2022-12-09 12:46:11'),
(59, 'Â« Une grenouille dans un Ã©tang ne connaÃ®t pas lâ€™ocÃ©an Â»\r\n\r\n[ã„ã®ãªã‹ã®ã‹ãˆã‚‹ãŸã„ã‹ã„ã‚’ã—ã‚‰ãš', 14, '2022-12-09 12:50:10');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(16, 'b', '$2y$10$qeL9nwNMlbL9mUoYiZWhmOmnqiXK15a8NOkFB5qVc98d4/6IPkAn.'),
(17, 'mimi', '$2y$10$dq//MjOPVtpwHPddPk2am.joQj8BgQckiL1eh4SZ/B/Ndd6lsCWJy'),
(14, 'admin', '$2y$10$XIPLHIi5SpwWyjZ9Nkx3LuaNUINjfm1c6g5D5.IuEAMzcBSSmUqnu'),
(15, 'toto', '$2y$10$R9mRhS7Upn2HV0klCji.huNrK38HM.0Egkp1iApEuomo0f.hPT1lS');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
