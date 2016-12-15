-- MySQL dump 
--
-- Host: 127.0.0.1    Database: FormationOSS
-- ------------------------------------------------------
-- for Training project "PHP avancé"


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
(1,	'thlec',	'5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8',	'ADMIN',	'Thomas', 	'mdp=password',	NULL,	NULL),
(2,	'marc',		'5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8',	'ADMIN',	'Marc',		'mdp=password',	NULL,	NULL),
(3,	'user',		'12dea96fec20593566ab75692c9949596833adc9',	'USER',		'User',		'mdp=user',	NULL,	NULL);


--
-- Table structure for table `planning`
--

DROP TABLE IF EXISTS `planning`;
CREATE TABLE `planning` (
  `ID` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `date` int(8) unsigned NOT NULL,
  `label` varchar(256) COLLATE 'utf8_general_ci' NOT NULL,
  `teach` varchar(256) COLLATE 'utf8_general_ci' NULL
) COLLATE 'utf8_general_ci';


--
-- Dumping data for table `planning`
--
-- ORDER BY:  `ID`

INSERT INTO `planning` (`ID`, `date`, `label`, `teach`) VALUES
(1,	20161203,	'PHP base',	'Thomas'),
(2,	20161205,	'PHP base',	'Thomas'),
(3,	20161206,	'PHP base',	'Thomas'),
(4,	20161207,	'PHP base',	'Thomas'),
(5,	20161208,	'PHP base',	'Thomas'),
(6,	20161209,	'PHP avancé',	'Sylvain'),
(7,	20161211,	'PHP avancé',	'Sylvain'),
(8,	20161212,	'PHP avancé',	'Sylvain'),
(9,	20161213,	'PHP avancé',	'Sylvain'),
(10,	20161214,	'PHP avancé',	'Sylvain');
