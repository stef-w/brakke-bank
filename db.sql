# ************************************************************
# Sequel Pro SQL dump
# Version 4529
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 192.168.33.22 (MySQL 5.5.46-0ubuntu0.14.04.2)
# Database: brakke_bank
# Generation Time: 2016-08-08 09:49:33 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table accounts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `accounts`;

CREATE TABLE `accounts` (
  `account` varchar(255) NOT NULL DEFAULT '',
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`account`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `accounts` WRITE;
/*!40000 ALTER TABLE `accounts` DISABLE KEYS */;

INSERT INTO `accounts` (`account`, `user_id`, `name`)
VALUES
	('NL15RABO037592632',2,'Spending Account'),
	('NL15RABO037592633',3,'Spending Account'),
	('NL15RABO037592634',4,'Spending Account'),
	('NL15RABO037592635',5,'Spending Account'),
	('NL15RABO037592636',6,'Spending Account'),
	('NL15RABO037592641',1,'Savings Account'),
	('NL15RABO037592643',1,'Spending Account');

/*!40000 ALTER TABLE `accounts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table transactions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `transactions`;

CREATE TABLE `transactions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `amount` float(9,2) DEFAULT NULL,
  `from_acc` varchar(255) DEFAULT NULL,
  `to_acc` varchar(255) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;

INSERT INTO `transactions` (`id`, `amount`, `from_acc`, `to_acc`, `message`)
VALUES
	(37,25000.00,'Basebuilder B.V.','NL15RABO037592632','Salery week 44'),
	(38,25000.00,'Basebuilder B.V.','NL15RABO037592633','Salery week 44'),
	(39,25000.00,'Basebuilder B.V.','NL15RABO037592634','Salery week 44'),
	(40,25000.00,'Basebuilder B.V.','NL15RABO037592635','Salery week 44'),
	(41,25000.00,'Basebuilder B.V.','NL15RABO037592636','Salery week 44'),
	(42,25000.00,'Basebuilder B.V.','NL15RABO037592641','Salery week 44'),
	(43,25000.00,'Basebuilder B.V.','NL15RABO037592643','Salery week 44'),
	(44,2000.00,'NL15RABO037592641','NL15RABO037592643','I need to save less');

/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `login`, `password`, `name`)
VALUES
	(1,'stef','pindakaas','Stef'),
	(2,'bas','pindakaas','Sebastiaan'),
	(3,'jorick','schoen','Jorick'),
	(4,'lex','like a boss','Lex'),
	(5,'tadeusz','ilovepoland123','Tadeusz'),
	(6,'geert','amersfoort123','Geert');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
