-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 02 mai 2021 à 08:11
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `business_case`
--

-- --------------------------------------------------------

--
-- Structure de la table `advert`
--

DROP TABLE IF EXISTS `advert`;
CREATE TABLE IF NOT EXISTS `advert` (
  `id` int NOT NULL AUTO_INCREMENT,
  `model_id` int DEFAULT NULL,
  `garage_id` int DEFAULT NULL,
  `title` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_circulation` int NOT NULL,
  `km` int NOT NULL,
  `price` double NOT NULL,
  `condition_state` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creation_date` date NOT NULL,
  `pic1` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic2` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic3` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic4` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_54F1F40B7975B7E7` (`model_id`),
  KEY `IDX_54F1F40BC4FFF555` (`garage_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `advert`
--

INSERT INTO `advert` (`id`, `model_id`, `garage_id`, `title`, `description`, `year_circulation`, `km`, `price`, `condition_state`, `creation_date`, `pic1`, `pic2`, `pic3`, `pic4`) VALUES
(1, 2, 1, 'Scania R450 - bel occasion', 'Un camion qui a beaucoup roulé mais qui vous rendra encore bien service.', 2014, 250000, 60000, 'Bon', '2021-04-15', 'https://zupimages.net/up/21/15/s1vk.png', 'https://zupimages.net/up/21/14/rx40.jpg', 'https://zupimages.net/up/21/14/b9va.jpg', 'https://zupimages.net/up/21/14/ugzi.jpg'),
(3, 6, 2, 'TGX 28.480', 'Camion encore en état', 2016, 480469, 32500, 'Moyen', '2021-04-16', 'https://zupimages.net/up/21/15/sw6w.png', '', '', ''),
(4, 7, 1, 'Premium 460', 'Camion qui a bien vécu!', 2006, 593200, 10500, 'Passable', '2021-04-16', 'https://zupimages.net/up/21/15/tz0m.png', '', '', ''),
(5, 8, 1, 'G340 LA 4x2', 'Camion encore en état.', 2015, 519000, 16000, 'Passable', '2021-04-16', 'https://zupimages.net/up/21/15/bf9o.png', '', '', ''),
(6, 9, 3, 'S500 A4XNB', 'Cabine type \"Grand Routier\".', 2017, 400050, 60000, 'Bon', '2021-04-16', 'https://zupimages.net/up/21/15/exbd.png', '', '', ''),
(7, 2, 2, 'R450 A4X2EB', 'Tracteur récent, belle occasion!', 2018, 304000, 63200, 'Très Bon', '2021-04-16', 'https://zupimages.net/up/21/15/a3bm.png', '', '', ''),
(8, 10, 1, 'FH 460 6x2', 'A très peu servi!', 2013, 45800, 60000, 'Très Bon', '2021-04-16', 'https://zupimages.net/up/21/15/aej3.png', '', '', ''),
(9, 5, 2, 'Actros 1845', 'A beaucoup roulé mais encore en \"état\".', 2013, 780000, 21000, 'Passable', '2021-04-16', 'https://zupimages.net/up/21/15/qh39.png', '', '', ''),
(10, 11, 3, 'MAN 33.480 XLX', 'A bien roulé, beau 6x4.', 2012, 358000, 25000, 'Bon', '2021-04-16', 'https://zupimages.net/up/21/15/eu6i.png', '', '', ''),
(11, 6, 1, 'TGX 24480 XLX', 'Camion récent.', 2018, 212000, 46500, 'Très Bon', '2021-04-16', 'https://zupimages.net/up/21/15/bcq7.png', '', '', ''),
(12, 12, 2, 'Premium 430.19T Renault', 'Soucis de pompe à injection, à faire réviser!', 2013, 512000, 19000, 'Passable', '2021-04-16', 'https://zupimages.net/up/21/15/p7v4.png', '', '', ''),
(13, 9, 2, 'Scania S500 ', 'Très récent! Belle occasion!', 2019, 128000, 11000, 'Très Bon', '2021-04-16', 'https://zupimages.net/up/21/15/exbd.png', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `brand`
--

INSERT INTO `brand` (`id`, `name`, `nationality`) VALUES
(1, 'Renault', 'France'),
(2, 'Scania', 'Suède'),
(3, 'Volvo', 'Suède'),
(4, 'Mercedes Benz', 'Allemagne'),
(5, 'MAN', 'USA');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210414184101', '2021-04-14 18:41:13', 350);

-- --------------------------------------------------------

--
-- Structure de la table `garage`
--

DROP TABLE IF EXISTS `garage`;
CREATE TABLE IF NOT EXISTS `garage` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_number` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9F26610BA76ED395` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `garage`
--

INSERT INTO `garage` (`id`, `user_id`, `name`, `adress`, `postal_code`, `city`, `tel_number`) VALUES
(1, 2, 'Auto Pièces 01', '10 Route Nationale', '01120', 'La Boisse', '0412131415'),
(2, 1, 'Truckster Garage 69', '12 Rue de la caille', '69003', 'Lyon', '0412131415'),
(3, 2, 'Auto Pièces 06', '48 Promenade des Anglais', '06000', 'Nice', '0412137889');

-- --------------------------------------------------------

--
-- Structure de la table `model`
--

DROP TABLE IF EXISTS `model`;
CREATE TABLE IF NOT EXISTS `model` (
  `id` int NOT NULL AUTO_INCREMENT,
  `brand_id` int DEFAULT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motor_power` int DEFAULT NULL,
  `gas_tank_capacity` int DEFAULT NULL,
  `euro_norm` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `axle` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D79572D944F5D008` (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `model`
--

INSERT INTO `model` (`id`, `brand_id`, `name`, `motor_power`, `gas_tank_capacity`, `euro_norm`, `axle`) VALUES
(2, 2, 'R450', 450, 700, 'Euro 4', '4x2'),
(3, 3, 'FM500', 600, 1000, 'Euro 3', '6x4'),
(4, 1, 'Magnum', 500, 850, 'Euro 6', '6x2'),
(5, 4, 'Actros', 600, 700, 'Euro 5', '4x2'),
(6, 5, 'TGX 24.480', 450, 500, 'Euro 2', '4x4'),
(7, 1, 'Premium 460', 350, 500, 'Euro 1', '4x2'),
(8, 2, 'G340', 400, 400, 'Euro 2', '4x2'),
(9, 2, 'S500', 800, 1200, 'Euro 2', '8x4'),
(10, 3, 'FH460', 460, 500, 'Euro 3', '6x4'),
(11, 5, 'TGA 33.480', 500, 350, 'Euro 1', '6x4'),
(12, 1, 'Premium 430', 500, 400, 'Euro 2', '4x2');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_number` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siret` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `last_name`, `first_name`, `tel_number`, `siret`) VALUES
(1, 'lodevie@gmail.com', '[\"ROLE_ADMIN\"]', '$2y$13$rzgy5VgBL3FhsTfWNYaa8.Xuc9y5LZ4wwtBB0no6znXOD9xRej0nK', 'Lodevie', 'Henri', '0711223344', 2147483647),
(2, 'franck@gmail.com', '[\"ROLE_USER\"]', '$2y$13$PaZ10uauFfEWNwjiMKoZO.8XCLngJz5hBKDuNijBqxP2nMFDAqq06', 'Quasevi', 'Franck', '0769388937', 2147483647);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `advert`
--
ALTER TABLE `advert`
  ADD CONSTRAINT `FK_54F1F40B7975B7E7` FOREIGN KEY (`model_id`) REFERENCES `model` (`id`),
  ADD CONSTRAINT `FK_54F1F40BC4FFF555` FOREIGN KEY (`garage_id`) REFERENCES `garage` (`id`);

--
-- Contraintes pour la table `garage`
--
ALTER TABLE `garage`
  ADD CONSTRAINT `FK_9F26610BA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `model`
--
ALTER TABLE `model`
  ADD CONSTRAINT `FK_D79572D944F5D008` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
