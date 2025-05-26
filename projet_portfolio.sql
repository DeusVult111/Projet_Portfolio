-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 26 mai 2025 à 09:25
-- Version du serveur : 8.0.31
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `accueil`
--

DROP TABLE IF EXISTS `accueil`;
CREATE TABLE IF NOT EXISTS `accueil` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `accueil`
--

INSERT INTO `accueil` (`id`, `title`, `content`) VALUES
(1, 'Nathan LAC', 'étudiant en BTS SIO, développeur web, concepteur d\'UI/UX');

-- --------------------------------------------------------

--
-- Structure de la table `a_propos`
--

DROP TABLE IF EXISTS `a_propos`;
CREATE TABLE IF NOT EXISTS `a_propos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title_1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title_2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `content_1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `content_2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `birthdate` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `addr` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `age` int DEFAULT NULL,
  `degree` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `a_propos`
--

INSERT INTO `a_propos` (`id`, `title_1`, `title_2`, `content_1`, `content_2`, `birthdate`, `phone`, `addr`, `age`, `degree`, `email`) VALUES
(1, 'À Propos', 'Concepteur d\'UI/UX & Developpeur Web.', 'Étudiant en deuxième année de BTS Services Informatiques aux Organisations (SIO), option Solutions Logicielles et Applications Métiers (SLAM), je suis passionné par le design d\'UI/UX, le développement web et les nouvelles technologies.', 'Mon objectif est de concevoir des expériences utilisateur optimisées en combinant esthétique et performance.', '29 Avril 2004', '06 08 76 24 68', '43340 LANDOS', 20, 'Bac +2 BTS SIO', 'lacnathan926@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

DROP TABLE IF EXISTS `competences`;
CREATE TABLE IF NOT EXISTS `competences` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `competences`
--

INSERT INTO `competences` (`id`, `title`, `content`) VALUES
(1, 'Compétences', 'Compétences acquises lors de ma formation et de mes divers stages');

-- --------------------------------------------------------

--
-- Structure de la table `competences_item`
--

DROP TABLE IF EXISTS `competences_item`;
CREATE TABLE IF NOT EXISTS `competences_item` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `value` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `competences_item`
--

INSERT INTO `competences_item` (`id`, `name`, `value`) VALUES
(1, 'HTML', 95),
(2, 'CSS', 70),
(3, 'JavaScript', 40),
(4, 'Python', 75),
(5, 'GIT', 80),
(6, 'PHP', 80),
(7, 'CMS', 50),
(8, 'C#', 40),
(9, 'SQL', 65),
(10, 'Github', 80);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `title`, `content`) VALUES
(1, 'Contact', 'Contactez-moi ! Je vous répondrai avec plaisir.');

-- --------------------------------------------------------

--
-- Structure de la table `parcours`
--

DROP TABLE IF EXISTS `parcours`;
CREATE TABLE IF NOT EXISTS `parcours` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title_1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title_2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `parcours`
--

INSERT INTO `parcours` (`id`, `title`, `content`, `title_1`, `title_2`) VALUES
(1, 'Parcours', 'De ma découverte de l\'informatique au lycée à mon BTS.', 'Formation', 'Experience Professionnelle');

-- --------------------------------------------------------

--
-- Structure de la table `parcours_formation`
--

DROP TABLE IF EXISTS `parcours_formation`;
CREATE TABLE IF NOT EXISTS `parcours_formation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date_range` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `parcours_formation`
--

INSERT INTO `parcours_formation` (`id`, `title`, `content`, `date_range`) VALUES
(1, 'Bac Général - Classe de Première', 'Spécialité : Mathématique, Numérique et Science Informatique, Physique', '2021 - 2022'),
(2, 'Bac Général - Classe de Terminale', 'Spécialité : Mathématique, Numérique et Science Informatique', '2022 - 2023'),
(3, 'BTS - Service Informatique aux Organisations Première année', 'Option : Solutions Logicielles et Applications Métiers (deuxième semestre)', '2023 - 2024'),
(4, 'BTS - Service Informatique aux Organisations Deuxième année', 'Option : Solutions Logicielles et Applications Métiers', '2024 - 2025');

-- --------------------------------------------------------

--
-- Structure de la table `parcours_xppro`
--

DROP TABLE IF EXISTS `parcours_xppro`;
CREATE TABLE IF NOT EXISTS `parcours_xppro` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date_range` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `parcours_xppro`
--

INSERT INTO `parcours_xppro` (`id`, `title`, `content`, `date_range`) VALUES
(1, 'Stage - Première année de BTS', 'Création d\'un site vitrine pour une association', '3 juin 2024 - 27 juin 2024'),
(2, 'Stage - Deuxième année de BTS', 'Amélioration design de site internet client', 'janvier 2025 - 21 fevrier 2025');

-- --------------------------------------------------------

--
-- Structure de la table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `content`) VALUES
(1, 'Portfolio', 'Mes projets effectués durant ma formation et mes stages.');

-- --------------------------------------------------------

--
-- Structure de la table `portfolio_image`
--

DROP TABLE IF EXISTS `portfolio_image`;
CREATE TABLE IF NOT EXISTS `portfolio_image` (
  `id` int NOT NULL AUTO_INCREMENT,
  `portfolio_id` int NOT NULL,
  `img_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `portfolio_id` (`portfolio_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `portfolio_image`
--

INSERT INTO `portfolio_image` (`id`, `portfolio_id`, `img_link`) VALUES
(10, 1, 'webroot/img/portfolio/1_1.png'),
(11, 1, 'webroot/img/portfolio/1_2.png'),
(12, 2, 'webroot/img/portfolio/2_1.png'),
(13, 2, 'webroot/img/portfolio/2_2.png'),
(14, 2, 'webroot/img/portfolio/2_3.png'),
(15, 3, 'webroot/img/portfolio/3_1.png'),
(16, 3, 'webroot/img/portfolio/3_2.png'),
(17, 4, 'webroot/img/portfolio/4_1.png'),
(18, 4, 'webroot/img/portfolio/4_2.png'),
(19, 4, 'webroot/img/portfolio/4_3.png'),
(20, 5, 'webroot/img/portfolio/5_1.png'),
(21, 5, 'webroot/img/portfolio/5_2.png'),
(22, 5, 'webroot/img/portfolio/5_3.png'),
(23, 5, 'webroot/img/portfolio/5_4.png'),
(24, 6, 'webroot/img/portfolio/6_1.png'),
(25, 6, 'webroot/img/portfolio/6_2.png'),
(26, 6, 'webroot/img/portfolio/6_3.png'),
(27, 9, 'webroot/img/portfolio/9_1.png'),
(28, 9, 'webroot/img/portfolio/9_2.png'),
(29, 9, 'webroot/img/portfolio/9_3.png'),
(30, 9, 'webroot/img/portfolio/9_4.png'),
(31, 8, 'webroot/img/portfolio/8_1.png'),
(32, 8, 'webroot/img/portfolio/8_2.png'),
(33, 7, 'webroot/img/portfolio/7_1.png'),
(34, 7, 'webroot/img/portfolio/7_2.png'),
(35, 7, 'webroot/img/portfolio/7_3.png'),
(36, 7, 'webroot/img/portfolio/7_4.png');

-- --------------------------------------------------------

--
-- Structure de la table `portfolio_item`
--

DROP TABLE IF EXISTS `portfolio_item`;
CREATE TABLE IF NOT EXISTS `portfolio_item` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `technology` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `year` int DEFAULT NULL,
  `model` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `link` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `category` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT 'php',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `portfolio_item`
--

INSERT INTO `portfolio_item` (`id`, `title`, `content`, `technology`, `year`, `model`, `link`, `category`) VALUES
(1, 'Garage Audi', 'Site de gestion de véhicules', 'PHP, MySQL, Bootstrap', 2024, 'MVC', NULL, 'php'),
(2, 'ProjetD', 'Site de gestion de courses de voiture', 'PHP, MySQL, Bootstrap', 2024, 'MVC', NULL, 'php'),
(3, 'Loto', 'Application tirant 6 numéros au hasard', 'C#', 2024, 'WinForm', NULL, 'csharp'),
(4, 'Bataille', 'Application faisant jouer deux joueurs automatiquement', 'C#', 2024, 'WinForm, POO', NULL, 'csharp'),
(5, 'Site Ensemble Saint Jacques de Compostelle', 'Site regroupant l\'ensemble des sites des différents établissements de Saint Jacques de Compostelle', 'CMS Propriétaire', 2025, 'CMS', 'https://saintjacques43.fr/compostelle-', 'cms'),
(6, 'Site collège Saint Dominique', 'Site vitrine présentant le collège Saint Dominique', 'CMS Propriétaire', 2025, 'CMS', 'https://www.saintdolemonastier.fr/ecole-college-', 'cms'),
(7, 'Site école Sainte Jeanne d\'Arc', 'Site vitrine présentant l\'école Sainte Jeanne d\'Arc', 'CMS Propriétaire', 2025, 'CMS', 'https://www.ecole-polignac.fr/ecole-', 'cms'),
(8, 'Maquette Site théâtre Mayapo', 'Maquette réalisée pour le théâtre Mayapo', 'HTML, CSS, JS', 2025, 'Template Porto', NULL, 'html-css-js'),
(9, 'Application de gestion de bandes dessinées', 'Application permettant de gérer une collection de bandes dessinées', 'PHP, HTML, CSS, MySQL', 2024, 'CRUD PHP', NULL, 'php');

-- --------------------------------------------------------

--
-- Structure de la table `savoir_faire`
--

DROP TABLE IF EXISTS `savoir_faire`;
CREATE TABLE IF NOT EXISTS `savoir_faire` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `savoir_faire`
--

INSERT INTO `savoir_faire` (`id`, `title`, `content`) VALUES
(1, 'Développement Web & UI/UX', 'Création de sites modernes et responsives avec un design intuitif. Utilisation des technologies HTML, CSS, PHP, JavaScript et frameworks adaptés.'),
(2, 'Gestion de Bases de Données', 'Conception et optimisation des bases de données avec MySQL. Amélioration des performances et gestion sécurisée des données.'),
(3, 'Cybersécurité', 'Mise en place de bonnes pratiques en sécurité informatique. Protection des données et gestion des accès pour éviter les failles.'),
(4, 'Maintenance et Support IT', 'Assistance technique, installation de logiciels et résolution des bugs pour assurer un bon fonctionnement des systèmes.');

-- --------------------------------------------------------

--
-- Structure de la table `stat`
--

DROP TABLE IF EXISTS `stat`;
CREATE TABLE IF NOT EXISTS `stat` (
  `id` int NOT NULL AUTO_INCREMENT,
  `icon` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `value` int NOT NULL,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `stat`
--

INSERT INTO `stat` (`id`, `icon`, `value`, `title`, `description`) VALUES
(1, 'bi bi-emoji-smile', 5, 'Solutions', 'apportées aux clients'),
(2, 'bi bi-journal-richtext', 15, 'Projets', 'Accomplis durant les deux années de formation et divers stages'),
(3, 'bi bi-people', 8, 'Projets', 'éffectués en équipe');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`) VALUES
(1, 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 'admin@example.com', '2025-05-25 21:20:41');

--
-- Contraintes pour les tables déchargées
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS message (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  subject VARCHAR(150) NOT NULL,
  content TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contraintes pour la table `portfolio_image`
--
ALTER TABLE `portfolio_image`
  ADD CONSTRAINT `portfolio_image_ibfk_1` FOREIGN KEY (`portfolio_id`) REFERENCES `portfolio_item` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
