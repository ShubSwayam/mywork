-- Adminer 4.7.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

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
  `from` datetime NOT NULL,
  `to` datetime NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `__rooms` (`id`, `r_id`, `title`, `description`, `from`, `to`, `createdAt`, `updatedAt`) VALUES
(1,	101,	'Deluxe',	'Our king size four poster provides views over landscaped ga bedding.',	'2021-02-28 14:30:21',	'2021-03-04 14:30:21',	'2021-02-27 03:45:38',	'2021-02-27 03:45:38');
