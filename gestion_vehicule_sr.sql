-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 25 Novembre 2020 à 17:32
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

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

--
-- Contenu de la table `destination`
--

INSERT INTO `destination` (`id`, `destination`, `distance`) VALUES
(1, 'Lille', 10),
(2, 'Roubaix', 4);

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
('DoctrineMigrations\\Version20201125122530', '2020-11-25 12:25:33', 357);

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
  `destination_id` int(11) DEFAULT NULL,
  `personne_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `historique`
--

INSERT INTO `historique` (`id`, `datedemande`, `datedebut`, `datefin`, `etat`, `commentaire`, `vehicule_id`, `destination_id`, `personne_id`) VALUES
(2, '2020-11-25', '2021-01-01', '2022-01-01', 'En cours', NULL, 2, NULL, NULL),
(3, '2020-11-25', '2021-01-01', '2022-01-01', 'En cours', NULL, 1, NULL, NULL);

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
(1, 1, NULL, NULL, NULL, '2020-11-25', '2021-01-01 00:00:00', '2022-01-01 00:00:00', 'En cours', NULL),
(2, 2, NULL, NULL, NULL, '2020-11-25', '2024-01-01 00:00:00', '2025-01-01 00:00:00', 'En cours', NULL),
(3, NULL, NULL, NULL, NULL, '2020-11-25', '2023-01-01 00:00:00', '2024-01-01 00:00:00', 'En attente', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `id` int(11) NOT NULL,
  `immatriculation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `vehicule`
--

INSERT INTO `vehicule` (`id`, `immatriculation`) VALUES
(1, 'AB-234-CD'),
(2, 'CD-245-WQ');

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

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vehiculedisponible`  AS  select `v`.`id` AS `id`,`v`.`immatriculation` AS `immatriculation` from (`vehicule` `v` join `utilisation` `u` on((`u`.`vehicule_id` = `v`.`id`))) where (not(`u`.`vehicule_id` in (select `vehicule`.`id`,`vehicule`.`immatriculation` from `vehicule`))) ;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `historique`
--
ALTER TABLE `historique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
-- AUTO_INCREMENT pour la table `utilisation`
--
ALTER TABLE `utilisation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
