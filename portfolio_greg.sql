-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 08 fév. 2020 à 11:29
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
-- Base de données :  `portfolio_greg`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fonction` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entreprise` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localisation` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_created` datetime NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `email`, `fonction`, `entreprise`, `localisation`, `comment`, `date_created`, `image`) VALUES
(1, 'Bénédicte ', 'Sigg', 'bene@gmail.fr', 'Directrice du département Fran', 'Hanuman Travel', 'Phnom Penh, Cambodge', 'Super moment passé en çà compagnie, il a fait progresser notre équipe, akrun chran!', '2020-01-20 20:18:56', 'img/cambodge.jpg'),
(2, 'Lorenne', 'Minervini', 'l.minervini@alternative.fr', 'Directrice d\'agence', 'Alternative TT', 'Deauville, France', 'Grégoire travaille dur , pour il est polis et ponctuel et est toujours la pour nous dépanner en cas de besoin. je le recommande vivement!', '2020-01-28 20:45:55', 'img/alternative.jpg'),
(3, 'Odile', 'Trelly', 'truly@hotmail.fr', 'Directrice de camping', 'Camping de l\'orée de Deauville', 'Vauville, France', 'Nous sommes ravis d\'avoir eu Grégoire parmi nous il nous as été  d\'une aide précieuse, je le recommande chaleureusement !', '2020-01-28 20:54:59', 'img/camping.jpg'),
(19, 'zF', 'qeyhgcfv', 'exf@tpikmsxf.feuhurtgf', 'qyhrcnf', 'estxrcf', 'eg', 'sr', '2020-01-30 12:55:43', ''),
(20, 'grégoih', 'De Langej', 'gredegaine@hotmail.fr', 'fgtyuhj', 'ghl', 'le lieu du chêne', 'iohiopmo', '2020-01-30 15:04:45', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
