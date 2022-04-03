-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 03 avr. 2022 à 13:16
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
(1, 'Dons', 'Offre', 'Ecrans de bureau', 'vga', 97100, 'pap', '1 rue machin', '', ''),
(2, 'Biens', 'Offre', 'Ecrans de bureau', 'hdmi', 97100, 'pap', '1 rue machin', '', ''),
(3, 'Biens', 'Offre', 'Ecrans de bureau', 'hdmi', 97100, 'pap', '1 rue machin', '', ''),
(4, 'Biens', 'Offre', 'Ecrans de bureau', 'hdmi', 97100, 'pap', '1 rue machin', '', '');

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
(1, 'Test Objet', 'Monteiro', 'Sleyter', 'sleytermonteiro92@protonmail.com', 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCC');

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
  `mdp` varchar(255) NOT NULL,
  `statut` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id_membre`, `prenom`, `nom`, `civilite`, `pseudo`, `mail`, `adresse`, `code_postal`, `ville`, `mdp`, `statut`) VALUES
(2, 'linz', 'zeeze', 'Mme', 'ratpi', 'sleyter@gmail.com', 'azazaz', 92600, 'Asnières-sur-Seine', '$2y$10$f/HKt891OhI4JOUxtWxHEeq4oBPVHfci30oqsh8TBEgwUvXWJqtLW', 0),
(3, 'Lina', 'Moundir', 'Mme', 'linda', 'linda@moundir.com', '10 Rue Picquart', 92600, 'Asnières-sur-Seine', '$2y$10$/nHN6A/oOZtEaNiFqXNYnuhKZ9cBKLDY7Up17GPwfBAD/BxsX62Wu', 0),
(4, 'Sleyter', 'Monteiro', 'Mr', 'sleyter92k', 'sleytermonteiro92@protonmail.com', '10 Rue Picquart', 92600, 'Asnières-sur-Seine', '$2y$10$8P1cH9X9rVQLyLOdBJIOUeOR5jBCw/1j.LErEFHk.lFm5KZNCs2Vy', 0),
(5, 'arno', 'pierre', 'Mr', 'Nous', 'g@mail.com', '1233', 97100, 'pap', '$2y$10$xNzcGM5DYkt1nJKjibHxgOrLzj5TXoc1c5ZXW2pumfoYFRFftZHe.', 0),
(6, 'Vincenzo', 'GLAD', 'Mr', 'LAW-GEEK', 'glad@gmail.com', 'La Marina', 97100, 'pap', '$2y$10$m4Bs3P7Ts3WC8qwj1QEI.edWkJpo2W/egFQfNyC19eFffIYzsR8aW', 1);

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
  MODIFY `id_annonce` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id_membre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
