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
-- Base de données : `about`
--

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `photos`
--

INSERT INTO `photos` (`id`, `photo`) VALUES
(1, 'ib.jpeg'),
(2, 'carte.gif'),
(3, 'banfora01.jpg'),
(4, 'banfora02.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `textes`
--

CREATE TABLE `textes` (
  `id` int(11) NOT NULL,
  `texte` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `textes`
--

INSERT INTO `textes` (`id`, `texte`) VALUES
(1, 'Son Excellence, Cpt Ibrahim TRORE'),
(2, 'Nom officiel: Burkina Faso'),
(3, 'Nature du régime: République'),
(4, 'Superficie: 274 200km²'),
(5, 'Altitude moyenne: 500 m'),
(6, 'Le point culminant: Mont Ténakourou 747m'),
(7, 'Capitale: Ouagadougou'),
(8, 'Villes principales: Ouagadougou, Bobo-Dioulasso, Koudougou, Kaya, Ouahigouya, Tenkodogo, Banfora'),
(9, 'Monnaie: franc CFA, 1 EUR = 650 XOF'),
(10, 'Langue officiel: français'),
(11, 'Population: 20 244 080 d\'habitants en 2018'),
(12, 'Chef de l\'État: Cpt Ibrahim TRAORE'),
(13, 'Premier ministre: Apollinaire Joachim son de Tembela'),
(14, 'Fête nationale: 11 décembre (Proclamation de la république)'),
(15, 'Le Burkina Faso est un pays en voie de développement. Le tissu économique du Burkina est peu diversifié. Le secteur primaire (30% du PIB et 80% de la population active), qui explique l\'importance du secteur informel (estimé à 80%), est principalement porté par la culture du coton, structurellement minée par sa faible productivité et sa dépendance aux conditions climatiques, et une agro-industrie peu développée. Il s\'agit principalement d\'élevage mais également, surtout dans le sud-ouest, de culture de sorgo, de mil, de maïs, d\'arachides, de riz. Le secteur secondaire (20% du PIB) est essentiellement constitué des secteurs miniers (notamment l\'or, qui représente 11% du PIB et qui avec le coton, génère près de 95% des recettes d\'exportation du pays), BTP et manufacturier. En plus de l\'or, il convient par ailleurs de citer de nombreuses autres productions minières au Burkina Faso dont: le cuivre, le fer, le zinc,. Enfin, le secteur tertiaire (50% du PIB) bénéficie en particulier du développement des services financiers et des télécommunication.'),
(16, 'Les secteurs secondaire et tertiaire souffrent de l\'insuffisance de ressources humaines qualifiées, du faible accès aux services financiers, de l\'étroitesse de la base des produits d\'exportation et du poids du secteur informel. Au classement Doing business de la Banque mondiale 2020 le Burkina Faso occupait le 151 nième rang mondial sur 190 pays.'),
(17, 'Le Burkina Faso compte une très forte diaspora repartie à travers le monde avec une concentration plus élevée dans les pays voisins. Selon la Banque Centrale des États de l\'Afrique de l\'Ouest (BCEAO), ces migrants rapatrient chaque année des dizaines de milliards de francs CFA au Burkina Faso. Le Burkina Faso est membre de plusieurs organismes sous régionaux et internationaux dont l\'Union Économique et Monétaire Ouest Africaine (UEMOA), l\'Autorité de Liptako-Gourma, la Communauté Économique des États de l\'Afrique de l\'Ouest (CEDEAO), l\'Union Africaine (UA), l\'Organisation des Nations Unies (ONU), etc.'),
(18, 'Situé au cœur de l\'Afrique de l\'ouest, il est à environ une heure trente minutes de vol des capitales limitrophes, ce qui lui offre une base régionale idéale pour rayonner dans l\'espace UEMOA. il est aussi un point de transit stratégique pour les échanges commerciaux inter-pays.'),
(19, 'La Haute-Volta, devenue Burkina Faso (<< pays des hommes intègres>>) en 1984 est situé au cœur de l\'Afrique occidentale, a une superficie de 274 000 km². il partage ses frontières avec six pays: le Mali au Nord et à l\'Ouest, le Niger au Nord-Est, le Bénin au Sud-Est, le Togo, le Ghana au Sud et la Côte d\'Ivoire au Sud-Ouest. Il n\'a donc pas de débouché sur la mer. C\'est un pays qui a un relief très plat, puisque le point culminant est le Mont Tenakourou à 747 m à l\'ouest.'),
(20, 'Le Burkina Faso est divisé administrativement en 13 régions et subdivisé en 45 provinces, 350 départements, 359 communes de plein exercice dirigées par les maires élus dont 49 communes urbaines, et 8000 villages environ.'),
(21, 'Chacune des provinces est divisée en plusieurs départements. Chacun des départements inclut une unique commune (homonyme) pour regrouper er gérer localement les espaces habités (villes ou villages) du département.'),
(22, 'En termes de population, le Burkina Faso compte plus de 20,4 millions d\'habitants en 2019 selon le dernier recensement effectué en fin 2019. La population du pays est jeune et à majoritairement rurale à 73,7%'),
(23, 'Banfora est une petite ville tranquille, à une centaine de km de Bobo Dioulasso. Après avoir longé des falaises et traversé les champs de canne à sucre, vous arrivez dans cette bourgade sympathique au climat rafraichissant. On vient souvent à Banfora pour se rafraichir près des cascades. Vous trouverez facilement à vous loger et la région est idéale pour randonner à pied ou en vélo. La Comoé prend sa source à Péni et coule tout près de Banfora.'),
(24, 'Ce fleuve permet d’irriguer toute l’année les cultures de canne à sucre. Il poursuit ensuite son cours jusqu’en Côte d’Ivoire, Pays qu’il traverse pour aller se jeter dans l’Océan Atlantique. Ici, on produit beaucoup de sucre et un peu de rhum.'),
(25, 'A 20 minutes de Banfora, à Karfiguela, vous pourrez profiter de la fraicheur des cascades. Il faut quitter la route sur la droite à l’entrée de Banfora quand on vient de Bobo. Ensuite, suivre les panneaux indiquant les Dômes et les Cascades. Il convient d’être prudent et de ne pas fréquenter le site à l’hivernage, l’endroit étant dangereux à cause du débit important.');

-- --------------------------------------------------------

--
-- Structure de la table `titres`
--

CREATE TABLE `titres` (
  `id` int(11) NOT NULL,
  `titres` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `titres`
--

INSERT INTO `titres` (`id`, `titres`) VALUES
(1, 'Le président du Burkina Faso'),
(2, 'Présentation du Pays'),
(3, 'Économie et opportunités d\'affaires'),
(4, 'Géographie');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `textes`
--
ALTER TABLE `textes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `titres`
--
ALTER TABLE `titres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `textes`
--
ALTER TABLE `textes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `titres`
--
ALTER TABLE `titres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
