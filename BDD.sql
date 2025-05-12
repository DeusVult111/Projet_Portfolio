-- Création de la base de données
CREATE DATABASE IF NOT EXISTS projet_portfolio CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE projet_portfolio;

-- Table pour les utilisateurs
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Table pour la section accueil
CREATE TABLE IF NOT EXISTS accueil (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL
) ENGINE=InnoDB;

-- Table pour la section à propos
CREATE TABLE IF NOT EXISTS a_propos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title_1 VARCHAR(255) NOT NULL,
    title_2 VARCHAR(255) NOT NULL,
    content_1 TEXT NOT NULL,
    content_2 TEXT NOT NULL,
    birthdate VARCHAR(10),
    phone VARCHAR(20),
    addr VARCHAR(255),
    age INT,
    degree VARCHAR(255),
    email VARCHAR(100)
) ENGINE=InnoDB;

-- Table pour la section stats
CREATE TABLE IF NOT EXISTS stat (
    id INT AUTO_INCREMENT PRIMARY KEY,
    icon VARCHAR(255) NOT NULL,
    value INT NOT NULL,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL
) ENGINE=InnoDB;

-- Table pour la section compétences
CREATE TABLE IF NOT EXISTS competences (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL
) ENGINE=InnoDB;

-- Table pour la section parcours
CREATE TABLE IF NOT EXISTS parcours (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    date_range VARCHAR(50) NOT NULL
) ENGINE=InnoDB;

-- Table pour la section portfolio
CREATE TABLE IF NOT EXISTS portfolio (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    technology VARCHAR(255),
    year INT,
    model VARCHAR(255),
    link VARCHAR(255)
) ENGINE=InnoDB;

-- Table pour la section savoir-faire
CREATE TABLE IF NOT EXISTS savoir_faire (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL
) ENGINE=InnoDB;

-- Table pour la section contact
CREATE TABLE IF NOT EXISTS contact (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL
) ENGINE=InnoDB;

-- Insertion des données dans la table accueil
INSERT INTO accueil (title, content) VALUES
("Nathan LAC", "étudiant en BTS SIO, développeur web, concepteur d'UI/UX");

-- Insertion des données dans la table a_propos
INSERT INTO a_propos (title_1, title_2, content_1, content_2, birthdate, phone, addr, age, degree, email) VALUES
("À Propos", "Concepteur d'UI/UX & Developpeur Web.",
"Étudiant en deuxième année de BTS Services Informatiques aux Organisations (SIO), option Solutions Logicielles et Applications Métiers (SLAM), je suis passionné par le design d'UI/UX, le développement web et les nouvelles technologies.",
"Mon objectif est de concevoir des expériences utilisateur optimisées en combinant esthétique et performance.",
"29 Avril 2004", "06 08 76 24 68", "43340 LANDOS", 20, "Bac +2 BTS SIO", "lacnathan926@gmail.com");

-- Insertion des données dans la table stats
INSERT INTO stat (icon, value, title, description) VALUES
("bi bi-emoji-smile", 5, "Solutions", "apportées aux clients"),
("bi bi-journal-richtext", 15, "Projets", "Accomplis durant les deux années de formation et divers stages"),
("bi bi-people", 8, "Projets", "éffectués en équipe");

-- Insertion des données dans la table competences
INSERT INTO competences (title, content) VALUES
("Compétences", "Compétences acquises lors de ma formation et de mes divers stages");

-- Insertion des données dans la table parcours
INSERT INTO parcours (title, content, date_range) VALUES
("Bac Général - Classe de Première", "Spécialité : Mathématique, Numérique et Science Informatique, Physique", "2021 - 2022"),
("Bac Général - Classe de Terminale", "Spécialité : Mathématique, Numérique et Science Informatique", "2022 - 2023"),
("BTS - Service Informatique aux Organisations Première année", "Option : Solutions Logicielles et Applications Métiers (deuxième semestre)", "2023 - 2024"),
("BTS - Service Informatique aux Organisations Deuxième année", "Option : Solutions Logicielles et Applications Métiers", "2024 - 2025");

-- Insertion des données dans la table portfolio
INSERT INTO portfolio (title, content, technology, year, model, link) VALUES
("Garage Audi", "Site de gestion de véhicules", "PHP, MySQL, Bootstrap", 2024, "MVC", NULL),
("ProjetD", "Site de gestion de courses de voiture", "PHP, MySQL, Bootstrap", 2024, "MVC", NULL),
("Loto", "Application tirant 6 numéros au hasard", "C#", 2024, "WinForm", NULL),
("Bataille", "Application faisant jouer deux joueurs automatiquement", "C#", 2024, "WinForm, POO", NULL),
("Site Ensemble Saint Jacques de Compostelle", "Site regroupant l'ensemble des sites des différents établissements de Saint Jacques de Compostelle", "CMS Propriétaire", 2025, "CMS", "https://saintjacques43.fr/compostelle-"),
("Site collège Saint Dominique", "Site vitrine présentant le collège Saint Dominique", "CMS Propriétaire", 2025, "CMS", "https://www.saintdolemonastier.fr/ecole-college-"),
("Site école Sainte Jeanne d'Arc", "Site vitrine présentant l'école Sainte Jeanne d'Arc", "CMS Propriétaire", 2025, "CMS", "https://www.ecole-polignac.fr/ecole-"),
("Maquette Site théâtre Mayapo", "Maquette réalisée pour le théâtre Mayapo", "HTML, CSS, JS", 2025, "Template Porto", NULL),
("Application de gestion de bandes dessinées", "Application permettant de gérer une collection de bandes dessinées", "PHP, HTML, CSS, MySQL", 2024, "CRUD PHP", NULL);

-- Insertion des données dans la table savoir-faire
INSERT INTO savoir_faire (title, content) VALUES
("Développement Web & UI/UX", "Création de sites modernes et responsives avec un design intuitif. Utilisation des technologies HTML, CSS, PHP, JavaScript et frameworks adaptés."),
("Gestion de Bases de Données", "Conception et optimisation des bases de données avec MySQL. Amélioration des performances et gestion sécurisée des données."),
("Cybersécurité", "Mise en place de bonnes pratiques en sécurité informatique. Protection des données et gestion des accès pour éviter les failles."),
("Maintenance et Support IT", "Assistance technique, installation de logiciels et résolution des bugs pour assurer un bon fonctionnement des systèmes.");

-- Insertion des données dans la table contact
INSERT INTO contact (title, content) VALUES
("Contact", "Contactez-moi ! Je vous répondrai avec plaisir.");

INSERT INTO users (username, password, email) VALUES
('admin', '$2y$10$eImiTXuWVxfM37uY4JANjQ==', 'admin@example.com');