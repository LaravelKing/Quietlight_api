# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 10.0.15-MariaDB)
# Database: quiet-light-api
# Generation Time: 2015-06-24 19:45:47 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

# Dump of table addendum
# ------------------------------------------------------------

DROP TABLE IF EXISTS `addendum`;

CREATE TABLE `addendum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `summary_id` int(11) NOT NULL,
  `description` varchar(2048) DEFAULT NULL,
  `file` varchar(2048) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `summary_id` (`summary_id`),
  KEY `created_by` (`created_by`),
  KEY `updated_by` (`updated_by`),
  CONSTRAINT `addendum_ibfk_1` FOREIGN KEY (`summary_id`) REFERENCES `summary` (`id`) ON DELETE CASCADE,
  CONSTRAINT `addendum_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `user` (`id`) ON DELETE SET NULL,
  CONSTRAINT `addendum_ibfk_3` FOREIGN KEY (`updated_by`) REFERENCES `user` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Dump of table config
# ------------------------------------------------------------
DROP TABLE IF EXISTS `config`;


CREATE TABLE `config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `summary_id` int(11) DEFAULT NULL,
  `name` varchar(2048) DEFAULT NULL,
  `value` varchar(2048) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `summary_id` (`summary_id`),
  KEY `updated_by` (`updated_by`),
  KEY `created_by` (`created_by`),
  CONSTRAINT `config_ibfk_1` FOREIGN KEY (`summary_id`) REFERENCES `summary` (`id`) ON DELETE CASCADE,
  CONSTRAINT `config_ibfk_2` FOREIGN KEY (`updated_by`) REFERENCES `user` (`id`) ON DELETE SET NULL,
  CONSTRAINT `config_ibfk_3` FOREIGN KEY (`created_by`) REFERENCES `user` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `config` WRITE;
/*!40000 ALTER TABLE `config` DISABLE KEYS */;

INSERT INTO `config` (`id`, `summary_id`, `name`, `value`, `created_at`, `created_by`, `updated_at`, `updated_by`)
VALUES
  (1, 1, 'summary_config_name', 'summary_config_value', 1435240258, 1, NULL, NULL),
  (2, NULL, 'global_config_name', 'global_config_value', 1435240259, 1, 1435240259, 1);

/*!40000 ALTER TABLE `config` ENABLE KEYS */;
UNLOCK TABLES;

# Dump of table disclosure
# ------------------------------------------------------------

DROP TABLE IF EXISTS `disclosure`;

CREATE TABLE `disclosure` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `summary_id` int(11) NOT NULL,
  `body` varchar(2048) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `summary_id` (`summary_id`),
  KEY `updated_by` (`updated_by`),
  CONSTRAINT `disclosure_ibfk_1` FOREIGN KEY (`summary_id`) REFERENCES `summary` (`id`) ON DELETE CASCADE,
  CONSTRAINT `disclosure_ibfk_2` FOREIGN KEY (`updated_by`) REFERENCES `user` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table executive_summary
# ------------------------------------------------------------

DROP TABLE IF EXISTS `executive_summary`;

CREATE TABLE `executive_summary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `summary_id` int(11) NOT NULL,
  `summary` varchar(2048) DEFAULT NULL,
  `benefits` varchar(2048) DEFAULT NULL,
  `total_revenue` varchar(2048) DEFAULT NULL,
  `discretionary_earnings` varchar(2048) DEFAULT NULL,
  `gross_profit` varchar(2048) DEFAULT NULL,
  `asking_price` varchar(2048) DEFAULT NULL,
  `inventory` varchar(2048) DEFAULT NULL,
  `inventory_included` int(2) NOT NULL DEFAULT '0',
  `show_multiple` int(2) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `summary_id` (`summary_id`),
  KEY `updated_by` (`updated_by`),
  CONSTRAINT `executive_summary_ibfk_1` FOREIGN KEY (`summary_id`) REFERENCES `summary` (`id`) ON DELETE CASCADE,
  CONSTRAINT `executive_summary_ibfk_2` FOREIGN KEY (`updated_by`) REFERENCES `user` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


# Dump of table financial
# ------------------------------------------------------------

DROP TABLE IF EXISTS `financial`;

CREATE TABLE `financial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `summary_id` int(11) NOT NULL,
  `body` varchar(2048) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `summary_id` (`summary_id`),
  KEY `updated_by` (`updated_by`),
  CONSTRAINT `financial_ibfk_1` FOREIGN KEY (`summary_id`) REFERENCES `summary` (`id`) ON DELETE CASCADE,
  CONSTRAINT `financial_ibfk_2` FOREIGN KEY (`updated_by`) REFERENCES `user` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


LOCK TABLES `financial` WRITE;
/*!40000 ALTER TABLE `financial` DISABLE KEYS */;

INSERT INTO `financial` (`id`, `summary_id`, `body`, `created_at`, `updated_at`, `updated_by`)
VALUES
  (1, 1, 'Seeded Financial Summary', 1435240948, null, null);

/*!40000 ALTER TABLE `financial` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table flex
# ------------------------------------------------------------

DROP TABLE IF EXISTS `flex`;

CREATE TABLE `flex` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `summary_id` int(11) NOT NULL,
  `body` varchar(2048) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `summary_id` (`summary_id`),
  KEY `updated_by` (`updated_by`),
  KEY `created_by` (`created_by`),
  CONSTRAINT `flex_ibfk_1` FOREIGN KEY (`summary_id`) REFERENCES `summary` (`id`) ON DELETE CASCADE,
  CONSTRAINT `flex_ibfk_2` FOREIGN KEY (`updated_by`) REFERENCES `user` (`id`) ON DELETE SET NULL,
  CONSTRAINT `flex_ibfk_3` FOREIGN KEY (`created_by`) REFERENCES `user` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table footnote
# ------------------------------------------------------------

DROP TABLE IF EXISTS `footnote`;

CREATE TABLE `footnote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `table` varchar(2048) DEFAULT NULL,
  `field` varchar(2048) DEFAULT NULL,
  `associated_id` int(11) NOT NULL,
  `body` varchar(2048) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `updated_by` (`updated_by`),
  KEY `created_by` (`created_by`),
  CONSTRAINT `footnote_ibfk_1` FOREIGN KEY (`updated_by`) REFERENCES `user` (`id`) ON DELETE SET NULL,
  CONSTRAINT `footnote_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `user` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



#
# Dump of table question
# ------------------------------------------------------------

DROP TABLE IF EXISTS `question`;

CREATE TABLE `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `summary_id` int(11) NOT NULL,
  `question` varchar(2048) DEFAULT NULL,
  `answer` varchar(2048) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `summary_id` (`summary_id`),
  KEY `updated_by` (`updated_by`),
  KEY `created_by` (`created_by`),
  CONSTRAINT `question_ibfk_1` FOREIGN KEY (`summary_id`) REFERENCES `summary` (`id`) ON DELETE CASCADE,
  CONSTRAINT `question_ibfk_2` FOREIGN KEY (`updated_by`) REFERENCES `user` (`id`) ON DELETE SET NULL,
  CONSTRAINT `question_ibfk_3` FOREIGN KEY (`created_by`) REFERENCES `user` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table session
# ------------------------------------------------------------

DROP TABLE IF EXISTS `session`;

CREATE TABLE `session` (
  `id` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `expires_at` int(11) NOT NULL,
  `remote_ip` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `session_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table summary
# ------------------------------------------------------------

DROP TABLE IF EXISTS `summary`;

CREATE TABLE `summary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `created_by` (`created_by`),
  KEY `updated_by` (`updated_by`),
  CONSTRAINT `summary_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `user` (`id`) ON DELETE SET NULL,
  CONSTRAINT `summary_ibfk_2` FOREIGN KEY (`updated_by`) REFERENCES `user` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `summary` WRITE;
/*!40000 ALTER TABLE `summary` DISABLE KEYS */;

INSERT INTO `summary` (`id`, `name`, `created_by`, `updated_by`, `created_at`, `updated_at`)
VALUES
	(1,'Testing Summary 1',1,NULL,1435174987,NULL),
	(2,'Testing Summary 2',1,NULL,1435174987,NULL),
	(3,'Testing Summary 3',1,NULL,1435174987,NULL),
	(4,'Testing Summary 4',1,NULL,1435174987,NULL),
	(5,'Testing Summary 5',1,NULL,1435174987,NULL);

/*!40000 ALTER TABLE `summary` ENABLE KEYS */;
UNLOCK TABLES;

# Dump of table summary_section
# ------------------------------------------------------------

DROP TABLE IF EXISTS `summary_section`;

CREATE TABLE `summary_section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `summary_id` int(11) NOT NULL,
  `table` varchar(255) NOT NULL,
  `associated_id` int(11) NOT NULL,
  `weight` tinyint(4) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `summary_id` (`summary_id`),
  KEY `updated_by` (`updated_by`),
  KEY `created_by` (`created_by`),
  CONSTRAINT `summarysection_ibfk_1` FOREIGN KEY (`summary_id`) REFERENCES `summary` (`id`) ON DELETE CASCADE,
  CONSTRAINT `summarysection_ibfk_2` FOREIGN KEY (`updated_by`) REFERENCES `user` (`id`) ON DELETE SET NULL,
  CONSTRAINT `summarysection_ibfk_3` FOREIGN KEY (`created_by`) REFERENCES `user` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


# Dump of table title
# ------------------------------------------------------------

DROP TABLE IF EXISTS `title`;

CREATE TABLE `title` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `tagline` varchar(100) DEFAULT NULL,
  `asking_price` int(100) DEFAULT NULL,
  `advisor_id` int(11) DEFAULT NULL,
  `summary_id` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `summary_id` (`summary_id`),
  KEY `advisor_id` (`advisor_id`),
  KEY `updated_by` (`updated_by`),
  CONSTRAINT `title_ibfk_1` FOREIGN KEY (`summary_id`) REFERENCES `summary` (`id`) ON DELETE CASCADE,
  CONSTRAINT `title_ibfk_2` FOREIGN KEY (`advisor_id`) REFERENCES `user` (`id`) ON DELETE SET NULL,
  CONSTRAINT `title_ibfk_3` FOREIGN KEY (`updated_by`) REFERENCES `user` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


LOCK TABLES `title` WRITE;
/*!40000 ALTER TABLE `title` DISABLE KEYS */;

INSERT INTO `title` (`id`, `name`, `tagline`, `asking_price`, `advisor_id`, `summary_id`, `created_at`, `updated_at`, `updated_by`)
VALUES
  (1, 'Summary Title 1', 'a tagline for the summary', 10000000, 1, 1, 1435240963, null, null);

/*!40000 ALTER TABLE `title` ENABLE KEYS */;
UNLOCK TABLES;



# Dump of table user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `is_admin` int(1) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

INSERT INTO `user` (`id`, `email`, `password`, `first_name`, `last_name`, `phone`, `is_admin`, `created_at`, `updated_at`)
VALUES
	(1,'behat@testing.com','sha256:1000:JYsqcgVKHYNHTDgfUrIKetEYE8oj4Ihf:/VFScilhDXwNsgqERgkwitqLsb1y1RaL','Behat','Testing',NULL,1,1435174868,NULL);

/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;



# Dump of table webtraffic
# ------------------------------------------------------------

DROP TABLE IF EXISTS `web_traffic`;

CREATE TABLE `web_traffic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `summary_id` int(11) NOT NULL,
  `body` varchar(2048) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `summary_id` (`summary_id`),
  KEY `updated_by` (`updated_by`),
  CONSTRAINT `webtraffic_ibfk_1` FOREIGN KEY (`summary_id`) REFERENCES `summary` (`id`) ON DELETE CASCADE,
  CONSTRAINT `webtraffic_ibfk_2` FOREIGN KEY (`updated_by`) REFERENCES `user` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
