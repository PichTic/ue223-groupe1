-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `mots`;
CREATE TABLE `mots` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `FR` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EN` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ES` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `mots` (`id`, `FR`, `EN`, `ES`) VALUES
(1,	'Bonjour',	'Hello',	'Hola'),
(3,	'Bière',	'Beer',	'Cerveza');

-- 2018-01-03 14:32:26
