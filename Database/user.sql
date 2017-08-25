-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  ven. 25 août 2017 à 19:04
-- Version du serveur :  10.1.22-MariaDB
-- Version de PHP :  7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `potooutes`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_groupe` int(11) DEFAULT NULL,
  `mdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`nom`, `prenom`, `id`, `email`, `id_groupe`, `mdp`) VALUES
('maggiochi', 'jolan', 1, 'jolan.maggiochi@epitech.eu', NULL, '$2y$10$9gar1/BbfqkHGyQOPdPWruHgtn2Zkoihvf4bSNTQeDRGBFTiPv/Du'),
('maggiochi', 'jolan', 6, 'axel.maggiochi@epitech.eu', NULL, '$2y$10$3ymuZlc1aIkq..tbmwvKReFIa/zqfMYEYLt0eF25miu5BoXkNSihy'),
('maggiochi', 'efzfe', 7, 'joln.maggiochi@epitech.eu', NULL, '$2y$10$HFIaGX2tS3kNGnsNqgtTcOruwNbQCOXhFC8Cxl6Q1ODInxUig1lYu'),
('maggiochi', 'jolan', 10, 'dzed@da.fr', NULL, '$2y$10$xoPbW38nrUxvjvDjvBeT9ORjmmM/DAFcaX8lDCesl1iwsL0zWCNKS'),
('maggiochi', 'jolan', 11, 'ergzer@dzeidj.fr', NULL, '$2y$10$8x1KFXZXn92dUl/l6fSniuRFDugakRSXOzf1kPrwTOg162hRZkFNG'),
('maggiochi', 'jolan', 12, 'yhhitu@erzr.fr', NULL, '$2y$10$i1tkk3CL7sUU5Bd012wr0.NBwd/5.zooRDNqtXrGAf34oTbVCgXka'),
('maggiochi', 'jolan', 13, 'rfef@ddi.fr', NULL, '$2y$10$cVMg9PKSeBOE1KO8t3CGQuxKyPkjZe0EezRRfMgLh1aH3yhzeBH7i'),
('maggiochi', 'jolan', 14, 'zyczyuc@dedi.fr', NULL, '$2y$10$vYyQ4Zl4yzoPiBbLWeJGv.nHd642O36wYgVGYinW37EhPnSQIXsp.'),
('maggiochi', 'jolan', 15, 'ferger@dezf.fr', NULL, '$2y$10$vNi8jLJ6VOJ34uGHQXRscunAVAtEUzkWs9pm0RyD7j5knrFdaV17m');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
