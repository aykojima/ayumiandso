-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';


DROP TABLE IF EXISTS `guests`;
CREATE TABLE `guests` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(128) NOT NULL,
  `last_name` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `is_attending` varchar(1) NOT NULL,
  `number_adults` integer(1) NOT NULL,
  `number_children` integer(1) NULL,
  `food_allergy` text(500) NULL,
  `email` varchar(128) NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `guests` (`id`,`first_name`, `last_name`, `password`, `is_attending`, `number_adults`, `number_children`,  `food_allergy`, `email`) VALUES
(1,	'Ward', 'Williams', 'Y9&9vA', 'Y', 2, 0, '', ''),
(2,	'Robert', 'Rutledge', '7S1Q&g', 'Y', 2, 1, '', ''),
(3,	'Marc', 'Losoya', '80Qn%A', 'Y', 2, 0, '', '')
ON DUPLICATE KEY UPDATE `id` = VALUES(`id`), `first_name` = VALUES(`first_name`), `last_name` = VALUES(`last_name`), `password` = VALUES(`password`), `is_attending` = VALUES(`is_attending`), `number_adults` = VALUES(`number_adults`), `number_children` = VALUES(`number_children`), `food_allergy` = VALUES(`food_allergy`), `email` = VALUES(`email`);