-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 15 août 2022 à 19:27
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blogphp`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id_articles` int(11) NOT NULL,
  `titre` varchar(45) NOT NULL,
  `description` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `created_at` datetime NOT NULL,
  `status` varchar(45) NOT NULL,
  `notes` int(11) DEFAULT NULL,
  `categorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id_articles`, `titre`, `description`, `contenu`, `created_at`, `status`, `notes`, `categorie`) VALUES
(1, 'test', 'test', 'test', '2022-08-03 19:25:51', 'notvisible', 0, ''),
(3, 'article1', 'article1', 'article1', '2022-08-03 23:37:46', 'visible', 0, 'cat1'),
(4, 'article2', 'article2', 'article2', '2022-08-03 23:39:41', 'notvisible', 0, 'cat2'),
(5, 'article3', 'article3', 'article3', '2022-08-03 23:39:41', 'visible', 0, 'cat3'),
(6, 'article4', 'article4', 'article4', '2022-08-03 23:41:10', 'visible', 0, 'cat4'),
(8, 'vieux', 'vieux', 'vieux', '2022-08-05 00:18:07', 'visible', 0, 'cat4'),
(11, 'vcdv', 'ffv', 'fv', '2022-08-15 17:03:50', 'visiblev', 56, 'ygcvrr');

-- --------------------------------------------------------

--
-- Structure de la table `articles_has_categories`
--

CREATE TABLE `articles_has_categories` (
  `articles_id_articles` int(11) NOT NULL,
  `categories_id_categories` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles_has_categories`
--

INSERT INTO `articles_has_categories` (`articles_id_articles`, `categories_id_categories`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `articles_has_users`
--

CREATE TABLE `articles_has_users` (
  `articles_id_articles` int(11) NOT NULL,
  `users_id_users` int(11) NOT NULL,
  `commentaires_id_commentaires` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id_categories` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_categories`, `nom`) VALUES
(1, 'cat1'),
(8, 'cat2'),
(9, 'cat3'),
(10, 'cat4'),
(13, 'cat5');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id_commentaires` int(11) NOT NULL,
  `contenu` text NOT NULL,
  `auteur` varchar(45) NOT NULL,
  `created_at` datetime NOT NULL,
  `status` varchar(45) NOT NULL,
  `commentaires_id_commentaires1` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id_commentaires`, `contenu`, `auteur`, `created_at`, `status`, `commentaires_id_commentaires1`) VALUES
(2, 'coucou c\'est le com', 'moi', '2022-08-02 19:16:11', 'visible', 0),
(3, 'testcom', 'moi', '2022-08-03 23:14:08', 'visible', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `roles` varchar(45) NOT NULL,
  `mdp` char(60) NOT NULL,
  `email` varchar(255) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `mobile` varchar(12) DEFAULT NULL,
  `pseudo` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_users`, `roles`, `mdp`, `email`, `prenom`, `nom`, `mobile`, `pseudo`, `avatar`) VALUES
(1, 'utilisateurs', 'utilisateurs', 'utilisateurs@utilisateurs.com', 'utilisateurs', 'utilisateurs', NULL, NULL, NULL),
(2, 'moderateurs', 'moderateurs', 'moderateurs@moderateurs.com', 'moderateurs', 'moderateurs', NULL, NULL, NULL),
(3, 'redacteurs', 'redacteurs', 'redacteurs@redacteurs.redacteurs', 'redacteurs', 'redacteurs', NULL, NULL, NULL),
(4, 'admin', 'admin', 'admin@admin.admin', 'admin', 'admin', NULL, NULL, NULL),
(5, '', '$2y$10$lRm345FrhuvQCRn6/Qopw.XH/AfP1Z7dZf9AMVb/30/h226gaezOO', 'test@test.com', 'test', 'test', NULL, NULL, NULL),
(6, 'utilisateur', '$2y$10$LV8v.h5UYbUFq/xGa9Q/uu8/wh44di9EMPdse7Kh6mwL9gijRLFs2', 'tes2@test2.com', 'test2', 'test2', NULL, NULL, NULL),
(7, 'utilisateur', '$2y$10$uA92NGtsPMMoEo.c//KbjuFNOe4BwX8CtvhdK9xjfkSQr1RjQsqx.', 'test2@test2.com', 'test2', 'test2', NULL, NULL, NULL),
(8, 'admin', '$2y$10$8oynsdPpRXO/xEncdRl5.e81TY.avGG66NYJdW/0FlsXJtMtN4nNS', 'test3@test3.com', 'test3', 'test3', NULL, NULL, NULL),
(9, 'utilisateur', '$2y$10$Mt53R3ZGVeFbCysWrV7FJOBUeRUQLI94/iYCbcP9P6HpnLvzP2Pvi', 'marina.deazevedo7@gmail.com', 'Marina', 'De Azevedo', NULL, NULL, NULL),
(10, 'utilisateur', '$2y$10$GgujoYzq7fF2kBMYuUhsWOCClDoQbemMj3qrwY3ZJlWoCxbui925u', 'qaszdefghjk@ghh.com', 'nathanael', 'pitois', NULL, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_articles`);

--
-- Index pour la table `articles_has_categories`
--
ALTER TABLE `articles_has_categories`
  ADD PRIMARY KEY (`articles_id_articles`,`categories_id_categories`),
  ADD KEY `fk_articles_has_categories_categories1_idx` (`categories_id_categories`),
  ADD KEY `fk_articles_has_categories_articles_idx` (`articles_id_articles`);

--
-- Index pour la table `articles_has_users`
--
ALTER TABLE `articles_has_users`
  ADD PRIMARY KEY (`articles_id_articles`,`users_id_users`),
  ADD KEY `fk_articles_has_users_users1_idx` (`users_id_users`),
  ADD KEY `fk_articles_has_users_articles1_idx` (`articles_id_articles`),
  ADD KEY `fk_articles_has_users_commentaires1_idx` (`commentaires_id_commentaires`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categories`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id_commentaires`),
  ADD KEY `fk_commentaires_commentaires2_idx` (`commentaires_id_commentaires1`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_articles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categories` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id_commentaires` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles_has_categories`
--
ALTER TABLE `articles_has_categories`
  ADD CONSTRAINT `fk_articles_has_categories_articles` FOREIGN KEY (`articles_id_articles`) REFERENCES `articles` (`id_articles`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_articles_has_categories_categories1` FOREIGN KEY (`categories_id_categories`) REFERENCES `categories` (`id_categories`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `articles_has_users`
--
ALTER TABLE `articles_has_users`
  ADD CONSTRAINT `fk_articles_has_users_articles1` FOREIGN KEY (`articles_id_articles`) REFERENCES `articles` (`id_articles`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_articles_has_users_commentaires1` FOREIGN KEY (`commentaires_id_commentaires`) REFERENCES `commentaires` (`id_commentaires`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_articles_has_users_users1` FOREIGN KEY (`users_id_users`) REFERENCES `users` (`id_users`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `fk_commentaires_commentaires2` FOREIGN KEY (`commentaires_id_commentaires1`) REFERENCES `commentaires` (`id_commentaires`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
