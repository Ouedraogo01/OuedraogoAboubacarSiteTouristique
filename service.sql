-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 18 sep. 2023 à 16:53
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `service`
--

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id`, `photo`) VALUES
(1, '4.jpg'),
(2, '5.jpg'),
(3, '6.jpg'),
(4, '7.jpg'),
(5, '8.jpg'),
(6, '9.avif');

-- --------------------------------------------------------

--
-- Structure de la table `imtext`
--

CREATE TABLE `imtext` (
  `id` int(11) NOT NULL,
  `photo` text NOT NULL,
  `texte` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `imtext`
--

INSERT INTO `imtext` (`id`, `photo`, `texte`) VALUES
(1, '1.jpg', 'Réservez vos billets d\'avion'),
(2, '2.jpg', 'Location de voiture'),
(3, '3.jpg', 'Allez en Bus');

-- --------------------------------------------------------

--
-- Structure de la table `map`
--

CREATE TABLE `map` (
  `id` int(11) NOT NULL,
  `map` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `map`
--

INSERT INTO `map` (`id`, `map`) VALUES
(1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62738.44139338885!2d-4.796971257282098!3d10.645251717071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe354a578603b01f%3A0x8deccdaec9e08fb2!2sBanfora!5e0!3m2!1sen!2sbf!4v1695035879382!5m2!1sen!2sbf');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `imtext`
--
ALTER TABLE `imtext`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `imtext`
--
ALTER TABLE `imtext`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `map`
--
ALTER TABLE `map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
