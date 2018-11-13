-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 13 Novembre 2018 à 21:57
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `php_poo`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnee`
--

CREATE TABLE `abonnee` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `object` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `abonnee`
--

INSERT INTO `abonnee` (`id`, `email`, `object`) VALUES
(1, 'YJ@gmail.com', 'subscribe'),
(4, 't_woodward@etu-webschoolfactory.fr', 'subscribe');

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` text,
  `password` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `prenom`, `nom`) VALUES
(1, 'admin@admin.fr', '21232f297a57a5a743894a0e4a801fc3', 'ertyuio', 'cououcou');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id` int(11) NOT NULL,
  `plat_id` int(11) DEFAULT NULL,
  `prix` varchar(255) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commandes`
--

INSERT INTO `commandes` (`id`, `plat_id`, `prix`) VALUES
(1, 1, '1000'),
(2, 1, '1000'),
(3, 3, '15');

-- --------------------------------------------------------

--
-- Structure de la table `paiements`
--

CREATE TABLE `paiements` (
  `id` int(255) NOT NULL,
  `card` varchar(255) NOT NULL,
  `expityMonth` varchar(255) NOT NULL,
  `expityYear` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `paiements`
--

INSERT INTO `paiements` (`id`, `card`, `expityMonth`, `expityYear`, `cv`, `pseudo`) VALUES
(1, '987', '2356890', '2356890', '34680', ''),
(2, '1234567834568', '2356890', '23568', '34680', ''),
(3, '333333333', '33', '33', '3333', ''),
(4, '222222222222222', '22', '222', '2222', ''),
(5, '222222222222222', '22', '222', '2222', ''),
(6, '222222222é', '22222', '12121²', '123567', ''),
(7, '123467890', '123567', '23456', '2345', ''),
(8, '123467890', '123567', '23456', '2345', ''),
(9, '123456789', '12', '34', '5678', 'coucoucmoi'),
(10, '123456789', '12', '34', '5678', 'coucoucmoi'),
(11, '123456734567', '23434', '3434', '3444556', 'a'),
(12, '87654321', '98765', '9876', '987', 'a'),
(13, '2345678', '2345', '2345', '3456', 'a'),
(25, '567567(-', '56', '5678', '(-78', 'mat'),
(26, 'R5TYJK', '4RFTYnj', 'FTYui', 'VYU', 'mat');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id` int(255) NOT NULL,
  `nomproduit` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `prix` int(255) NOT NULL,
  `etat` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `panier`
--

INSERT INTO `panier` (`id`, `nomproduit`, `pseudo`, `prix`, `etat`) VALUES
(2, 'Testto', 'mat', 10, 3),
(9, 'Testto', 'mat', 10, 1),
(10, 'Kill kenny', 'mat', 15, 1);

-- --------------------------------------------------------

--
-- Structure de la table `plats`
--

CREATE TABLE `plats` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prix` varchar(255) DEFAULT '',
  `lien` varchar(2555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `plats`
--

INSERT INTO `plats` (`id`, `nom`, `prix`, `lien`) VALUES
(1, 'Testto', '10', ''),
(3, 'Kill kenny', '15', 'https://w2.comptoir-irlandais.com/9034-large_default/kilkenny.jpg'),
(4, 'Guiness', '15', 'http://anthonymartin.be/wp-content/uploads/Guinness-Special-Export.jpg'),
(5, 'Brooklyn', '8', 'https://lintestinbiere.files.wordpress.com/2016/10/459-brooklynblast.jpg?w=811');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `email` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `email`) VALUES
(2, 'Test', 'gerard.toko@gmail.com'),
(3, 'Nico@nico.fr', 'Nico'),
(4, 'Nico2', 'Nico2'),
(25, 'eeeeeeeeeee', 'zzzzzzzzzzzzz'),
(26, 'zerdghjo', 'ghj@ghj.com');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `pseudo`, `email`, `password`) VALUES
(34, 'c', 'c', 'c'),
(32, 'b', 'b', '92eb5ffee6ae2fec3ad71c777531578f'),
(33, 'coucoucmoi', 'coucou', '721a9b52bfceacc503c056e3b9b93cfa'),
(31, 'a', 'a', '0cc175b9c0f1b6a831c399e269772661'),
(35, 'd', '8277e0910d750195b448797616e091ad', 'd'),
(36, 'e', 'e', 'e1671797c52e15f763380b45e841ec32'),
(37, 'victor', 'victor', 'ffc150a160d37e92012c196b6af4160d'),
(38, 'mat', 'mat', '4a258d930b7d3409982d727ddbb4ba88');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `abonnee`
--
ALTER TABLE `abonnee`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `paiements`
--
ALTER TABLE `paiements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `plats`
--
ALTER TABLE `plats`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `abonnee`
--
ALTER TABLE `abonnee`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `paiements`
--
ALTER TABLE `paiements`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `plats`
--
ALTER TABLE `plats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
