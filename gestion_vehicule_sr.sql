-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 26 Novembre 2020 à 16:13
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestion_vehicule_sr`
--

-- --------------------------------------------------------

--
-- Structure de la table `destination`
--

CREATE TABLE `destination` (
  `id` int(11) NOT NULL,
  `destination` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20201124135649', '2020-11-26 15:09:19', 44),
('DoctrineMigrations\\Version20201124140256', '2020-11-26 15:09:19', 125),
('DoctrineMigrations\\Version20201124140421', '2020-11-26 15:09:19', 52),
('DoctrineMigrations\\Version20201124141748', '2020-11-26 15:09:19', 443),
('DoctrineMigrations\\Version20201125122530', '2020-11-25 12:25:33', 357),
('DoctrineMigrations\\Version20201126144738', '2020-11-26 14:47:45', 544),
('DoctrineMigrations\\Version20201126151000', '2020-11-26 15:10:06', 559);

-- --------------------------------------------------------

--
-- Structure de la table `historique`
--

CREATE TABLE `historique` (
  `id` int(11) NOT NULL,
  `datedemande` date NOT NULL,
  `datedebut` date NOT NULL,
  `datefin` date NOT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentaire` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehicule_id` int(11) NOT NULL,
  `destination_id` int(11) NOT NULL,
  `personne_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `motifrefus`
--

CREATE TABLE `motifrefus` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `id` int(11) NOT NULL,
  `service_id` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`) VALUES
(1, 'employe@gmail.com', '["ROLE_EMPLOYE"]', '$argon2id$v=19$m=65536,t=4,p=1$Sm00MTRLLjdtaFdMNUNWTg$oSqnFoqbCIH4z/vqZDwUal62k4QD7IDUPXI/8dDh7Zs'),
(2, 'gestionnaire@gmail.com', '["ROLE_GESTIONNAIRE"]', '$argon2id$v=19$m=65536,t=4,p=1$bDlWQi5NNjA4akI3YzdMNg$pUndPNSE/ZhymI2xml65MTyC3Wbqv/H479c46SWVUcE');

-- --------------------------------------------------------

--
-- Structure de la table `utilisation`
--

CREATE TABLE `utilisation` (
  `id` int(11) NOT NULL,
  `vehicule_id` int(11) DEFAULT NULL,
  `destination_id` int(11) DEFAULT NULL,
  `motifrefus_id` int(11) DEFAULT NULL,
  `personne_id` int(11) DEFAULT NULL,
  `datedemande` date NOT NULL,
  `datedebut` datetime NOT NULL,
  `datefin` datetime NOT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentaire` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `utilisation`
--

INSERT INTO `utilisation` (`id`, `vehicule_id`, `destination_id`, `motifrefus_id`, `personne_id`, `datedemande`, `datedebut`, `datefin`, `etat`, `commentaire`) VALUES
(1, NULL, NULL, NULL, NULL, '2020-11-26', '2023-01-01 00:00:00', '2025-01-01 00:00:00', 'En attente', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `id` int(11) NOT NULL,
  `immatriculation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `vehiculedisponible`
--
CREATE TABLE `vehiculedisponible` (
`id` int(11)
,`immatriculation` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure de la vue `vehiculedisponible`
--
DROP TABLE IF EXISTS `vehiculedisponible`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vehiculedisponible`  AS  select `vehicule`.`id` AS `id`,`vehicule`.`immatriculation` AS `immatriculation` from `vehicule` where (not(`vehicule`.`id` in (select `utilisation`.`vehicule_id` from `utilisation`))) ;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `historique`
--
ALTER TABLE `historique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `motifrefus`
--
ALTER TABLE `motifrefus`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_FCEC9EFED5CA9E6` (`service_id`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- Index pour la table `utilisation`
--
ALTER TABLE `utilisation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B02A3C434A4A3511` (`vehicule_id`),
  ADD KEY `IDX_B02A3C43816C6140` (`destination_id`),
  ADD KEY `IDX_B02A3C4368F39C39` (`motifrefus_id`),
  ADD KEY `IDX_B02A3C43A21BD112` (`personne_id`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `historique`
--
ALTER TABLE `historique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `motifrefus`
--
ALTER TABLE `motifrefus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `utilisation`
--
ALTER TABLE `utilisation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `personne`
--
ALTER TABLE `personne`
  ADD CONSTRAINT `FK_FCEC9EFED5CA9E6` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`);

--
-- Contraintes pour la table `utilisation`
--
ALTER TABLE `utilisation`
  ADD CONSTRAINT `FK_B02A3C434A4A3511` FOREIGN KEY (`vehicule_id`) REFERENCES `vehicule` (`id`),
  ADD CONSTRAINT `FK_B02A3C4368F39C39` FOREIGN KEY (`motifrefus_id`) REFERENCES `motifrefus` (`id`),
  ADD CONSTRAINT `FK_B02A3C43816C6140` FOREIGN KEY (`destination_id`) REFERENCES `destination` (`id`),
  ADD CONSTRAINT `FK_B02A3C43A21BD112` FOREIGN KEY (`personne_id`) REFERENCES `personne` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
