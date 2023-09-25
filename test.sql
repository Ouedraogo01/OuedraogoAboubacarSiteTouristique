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
-- Base de données : `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `carou`
--

CREATE TABLE `carou` (
  `id` int(11) NOT NULL,
  `photos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `carou`
--

INSERT INTO `carou` (`id`, `photos`) VALUES
(1, '7.jpg'),
(2, '8.gif'),
(3, '9.jpg'),
(4, '10.jpg'),
(5, '11.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `lieu`
--

CREATE TABLE `lieu` (
  `id` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `nom` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `lieu`
--

INSERT INTO `lieu` (`id`, `photo`, `nom`) VALUES
(1, '2.jpg', 'Bienvenue à banfora'),
(2, '1.jpg', 'Salle polyvalente de banfora'),
(3, '3.jpg', 'Maire de banfora'),
(4, '4.jpg', 'Cascade de banfora'),
(5, '5.jpg', 'Sitarail train'),
(6, '6.jpg', 'Sitarail');

-- --------------------------------------------------------

--
-- Structure de la table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` int(11) NOT NULL,
  `spon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `sponsors`
--

INSERT INTO `sponsors` (`id`, `spon`) VALUES
(1, 'Air_Burkina.png'),
(2, 'Air_France.png'),
(3, 'elitis.png'),
(4, 'Moov_Africa.png'),
(5, 'orange.png');

-- --------------------------------------------------------

--
-- Structure de la table `text`
--

CREATE TABLE `text` (
  `id` int(11) NOT NULL,
  `texte` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `text`
--

INSERT INTO `text` (`id`, `texte`) VALUES
(1, 'Banfora est une petite ville tranquille, à une centaine de km de Bobo Dioulasso. Après avoir longé des falaises et traversé les champs de canne à sucre, vous arrivez dans cette bourgade sympathique au climat rafraichissant.\n\n\nChoisissez de nous visiter et vous serez très heureux par de nombreuses découvertes.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `carou`
--
ALTER TABLE `carou`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lieu`
--
ALTER TABLE `lieu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `text`
--
ALTER TABLE `text`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `carou`
--
ALTER TABLE `carou`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `lieu`
--
ALTER TABLE `lieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `text`
--
ALTER TABLE `text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
