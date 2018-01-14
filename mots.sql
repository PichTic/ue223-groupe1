-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Sam 13 Janvier 2018 à 02:52
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_ue223`
--

-- --------------------------------------------------------

--
-- Structure de la table `mots`
--

CREATE TABLE `mots` (
  `id` int(10) UNSIGNED NOT NULL,
  `FR` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EN` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ES` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `mots`
--

INSERT INTO `mots` (`id`, `FR`, `EN`, `ES`) VALUES
(1, 'bonjour', 'hello', 'hola'),
(2,	'bleu',	'blue',	'azul'),
(3, 'bière', 'beer', 'cerveza'),
(4, 'voiture', 'car', 'coche'),
(5, 'chien', 'dog', 'perro'),
(6, 'chat', 'cat', 'gato'),
(7, 'bateau', 'boat', 'barco'),
(8,	'rouge',	'red',	'rojo'),
(9, 'arbre', 'tree', 'árbol'),
(10, 'maison', 'house', 'casa'),
(11, 'pain', 'bread', 'pan'),
(12, 'ordinateur', 'computer', 'ordenador'),
(13, 'ville', 'city', 'ciudad'),
(14, 'vert', 'green', 'verde'),
(15, 'jaune', 'yellow', 'amarillo'),
(16, 'violet', 'purple', 'morado'),
(17, 'blanc', 'white', 'blanco'),
(18, 'marron', 'brown', 'marrón');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `mots`
--
ALTER TABLE `mots`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `mots`
--
ALTER TABLE `mots`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
