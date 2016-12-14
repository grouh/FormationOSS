-- MySQL dump 
--
-- Host: 127.0.0.1    Database: FormationOSS
-- ------------------------------------------------------
-- for formation projet "PHP avancé"


DROP DATABASE IF EXISTS `FormationOSS`;
CREATE DATABASE `FormationOSS` COLLATE 'utf8_unicode_ci';
USE `FormationOSS`;


--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `ID` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `login` varchar(256) COLLATE 'utf8_general_ci' NOT NULL,
  `password` varchar(256) COLLATE 'utf8_general_ci' NOT NULL,
  `role` varchar(256) COLLATE 'utf8_general_ci' NOT NULL,
  `firstName` varchar(256) COLLATE 'utf8_general_ci' NULL,
  `lastName` varchar(256) COLLATE 'utf8_general_ci' NULL,
  `email` varchar(256) COLLATE 'utf8_general_ci' NULL,
  `phone` varchar(256) COLLATE 'utf8_general_ci' NULL
) COLLATE 'utf8_general_ci' AUTO_INCREMENT=1;


--
-- Dumping data for table `users`
--
-- ORDER BY:  `ID`

INSERT INTO `users` (`ID`, `login`, `password`, `role`, `firstName`, `lastName`, `email`, `phone`) 
VALUES
(1,	'thlec',	'5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8',	'ADMIN',	'Thomas', 	NULL,	NULL,	NULL),
(2,	'marc',		'5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8',	'ADMIN',	'Marc',		NULL,	NULL,	NULL),
(3,	'user',		'12dea96fec20593566ab75692c9949596833adc9',	'USER',		'User',		NULL,	NULL,	NULL);


--
-- Table structure for table `planning`
--

DROP TABLE IF EXISTS `planning`;
CREATE TABLE `planning` (
  `date` int(8) unsigned NOT NULL PRIMARY KEY,
  `label` varchar(256) COLLATE 'utf8_general_ci' NOT NULL,
  `teach` varchar(256) COLLATE 'utf8_general_ci' NULL
) COLLATE 'utf8_general_ci';


--
-- Dumping data for table `planning`
--
-- ORDER BY:  `date`

INSERT INTO `planning` (`date`, `label`, `teach`) VALUES
(20161203,	'PHP base',	'Thomas'),
(20161205,	'PHP base',	'Thomas'),
(20161206,	'PHP base',	'Thomas'),
(20161207,	'PHP base',	'Thomas'),
(20161208,	'PHP base',	'Thomas'),
(20161209,	'PHP avancé',	'Sylvain'),
(20161211,	'PHP avancé',	'Sylvain'),
(20161212,	'PHP avancé',	'Sylvain'),
(20161213,	'PHP avancé',	'Sylvain'),
(20161214,	'PHP avancé',	'Sylvain');
