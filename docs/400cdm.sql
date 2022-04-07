-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 07 avr. 2022 à 12:30
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `400cdm`
--
CREATE DATABASE IF NOT EXISTS `400cdm` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `400cdm`;

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

CREATE TABLE `annonces` (
  `id_annonce` int(11) NOT NULL,
  `type_annonce` varchar(25) NOT NULL,
  `type_de_cdm` varchar(25) NOT NULL,
  `titre` varchar(35) NOT NULL,
  `description` text NOT NULL,
  `code_postal` int(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `photo` varchar(25) NOT NULL,
  `categorie` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `annonces`
--

INSERT INTO `annonces` (`id_annonce`, `type_annonce`, `type_de_cdm`, `titre`, `description`, `code_postal`, `ville`, `adresse`, `photo`, `categorie`) VALUES
(34, 'Biens', 'Demande', 'ordinateur', 'odrinateur', 75001, 'paris', 'rue du soleil', 'photos/toto.jpg', 'Coup de main'),
(35, 'Services', 'Demande', 'Patrick', 'Test', 92600, 'Asnieres', '10 Rue Picquart', 'photos/patrick2.png', 'Bricolage');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `objet` varchar(50) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id_contact`, `objet`, `nom`, `prenom`, `mail`, `message`) VALUES
(1, 'Test Objet', 'Monteiro', 'Sleyter', 'sleytermonteiro92@protonmail.com', 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCC'),
(2, '5', '', '', 'fgfggggggggggggggg', 'fgggggggggggggggggg'),
(3, '4', '', '', 'sleytermonteiro92@protonmail.com', 'Coucou test'),
(4, '4', '', '', 'sleytermonteiro92@protonmail.com', 'TEST'),
(5, '5', '', '', 'sleyter@gmail.com', 'TEST MSG');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `id_membre` int(11) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `civilite` enum('Mr','Mme') NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `code_postal` int(5) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `mobile` int(10) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `statut` int(1) NOT NULL DEFAULT 0 COMMENT '0 = client\r\n1 = admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id_membre`, `prenom`, `nom`, `civilite`, `pseudo`, `mail`, `adresse`, `code_postal`, `ville`, `mobile`, `mdp`, `statut`) VALUES
(8, 'Sleyter', 'Monteiro', 'Mr', 'sleyter92k', 'sleytermonteiro92@protonmail.com', '10 Rue Picquart', 92600, 'Asnières-sur-Seine', 699746092, '$2y$10$IyZx6Wy1WkXarJTDz5w6GO1dodzlrFuMoIq9SCYXQfUcFjlQQgMQy', 1),
(10, 'Julie', 'Murie', 'Mme', 'julia', 'julie@gmail.com', 'rue de normandie', 92500, 'Normandie', 789854789, '$2y$10$SCqtz7zzLXY0Rwa4mPdGWeNJQGtkzZaZWhOXGc0P/iUPPfEsDAMpq', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonces`
--
ALTER TABLE `annonces`
  ADD PRIMARY KEY (`id_annonce`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id_membre`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annonces`
--
ALTER TABLE `annonces`
  MODIFY `id_annonce` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id_membre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
