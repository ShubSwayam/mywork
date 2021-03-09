-- Adminer 4.7.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `the_royal_palace` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `the_royal_palace`;

DROP TABLE IF EXISTS `__halls`;
CREATE TABLE `__halls` (
  `id` int NOT NULL AUTO_INCREMENT,
  `h_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `__halls` (`id`, `h_id`, `title`, `description`, `date`, `createdAt`, `updatedAt`) VALUES
(1,	'101',	'Premium',	'description',	'2021-03-07 14:30:21',	'2021-03-09 00:10:19',	'2021-03-09 00:10:19');

DROP TABLE IF EXISTS `__master_users`;
CREATE TABLE `__master_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `mobile` bigint DEFAULT NULL,
  `role` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `__master_users` (`id`, `name`, `username`, `email`, `mobile`, `role`, `password`) VALUES
(421,	'Shubham',	'ssharma',	'Shubh12@sharma.com',	1234567890,	'reception',	'4297f44b13955235245b2497399d7a93'),
(422,	'Shubham',	'ssharma',	'Shubh12@sharma.com',	9090909090,	'reception',	'4297f44b13955235245b2497399d7a93'),
(423,	'Shubham',	'Shubh',	'Shubh@sharma.com',	1234567890,	'reception',	'ed2b1f468c5f915f3f1cf75d7068baae');

DROP TABLE IF EXISTS `__rooms`;
CREATE TABLE `__rooms` (
  `id` int NOT NULL AUTO_INCREMENT,
  `r_id` bigint NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date` datetime NOT NULL,
  `to` datetime NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `__rooms` (`id`, `r_id`, `title`, `description`, `date`, `to`, `createdAt`, `updatedAt`) VALUES
(1,	101,	'Deluxe',	'Our king size four poster provides views over landscaped ga bedding.',	'2021-03-07 14:30:21',	'2021-03-04 14:30:21',	'2021-02-27 03:45:38',	'2021-02-27 03:45:38'),
(2,	102,	'Premium',	'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, ',	'2021-03-11 14:30:21',	'2021-04-11 14:30:21',	'2021-03-04 09:23:35',	'2021-03-04 09:23:35'),
(3,	103,	'Premium',	'sadsadasdsadsadsadadasdsadsadsadsadsadsad',	'2021-03-21 14:30:21',	'2021-04-11 14:30:21',	'2021-03-09 00:00:08',	'2021-03-09 00:00:08');

DROP TABLE IF EXISTS `__rooms_create`;
CREATE TABLE `__rooms_create` (
  `id` int NOT NULL AUTO_INCREMENT,
  `r_id` bigint DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `Aadhaar` int NOT NULL,
  `mobile` int NOT NULL,
  `email` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date` datetime NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `__rooms_create` (`id`, `r_id`, `name`, `Aadhaar`, `mobile`, `email`, `date`, `createdAt`, `updatedAt`) VALUES
(4,	NULL,	'shubham',	21312,	1212121212,	'0',	'2021-03-05 00:00:00',	'2021-03-04 14:11:50',	'2021-03-04 14:11:50');

DROP TABLE IF EXISTS `__user_registration`;
CREATE TABLE `__user_registration` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '',
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '',
  `mobile` int DEFAULT NULL,
  `role` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '',
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `__user_registration` (`user_id`, `name`, `username`, `email`, `mobile`, `role`, `password`) VALUES
(1,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(2,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(3,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(4,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(5,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(6,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL),
(7,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL);

-- 2021-03-09 15:36:33
