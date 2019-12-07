/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.7.21-log : Database - microsoft
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `apikeys` */

DROP TABLE IF EXISTS `apikeys`;

CREATE TABLE `apikeys` (
  `keyid` int(11) NOT NULL AUTO_INCREMENT,
  `apikey` varchar(90) DEFAULT NULL,
  PRIMARY KEY (`keyid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Table structure for table `basicinformation` */

DROP TABLE IF EXISTS `basicinformation`;

CREATE TABLE `basicinformation` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(90) DEFAULT NULL,
  `lastname` varchar(90) DEFAULT NULL,
  `middlename` varchar(90) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `telephone` varchar(90) DEFAULT NULL,
  `postaladdress` varchar(90) DEFAULT NULL,
  `streetaddress` varchar(90) DEFAULT NULL,
  `zipcode` varchar(90) DEFAULT NULL,
  `country` varchar(90) DEFAULT NULL,
  `category` varchar(90) DEFAULT NULL,
  `business_name` varchar(90) DEFAULT NULL,
  `business_email` varchar(90) DEFAULT NULL,
  `business_telephone` varchar(90) DEFAULT NULL,
  `business_postal` varchar(90) DEFAULT NULL,
  `business_street` varchar(90) DEFAULT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `deleted_users` */

DROP TABLE IF EXISTS `deleted_users`;

CREATE TABLE `deleted_users` (
  `userid` int(11) DEFAULT NULL,
  `dateofdeletion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `frameworkjobs` */

DROP TABLE IF EXISTS `frameworkjobs`;

CREATE TABLE `frameworkjobs` (
  `jobid` int(11) NOT NULL AUTO_INCREMENT,
  `jobname` varchar(45) NOT NULL,
  `jobmethod` varchar(45) NOT NULL,
  `lastrun` timestamp NULL DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `queuewait` tinyint(4) DEFAULT NULL,
  `frequencyminutes` int(11) DEFAULT NULL,
  `numtoprocess` int(11) DEFAULT NULL,
  `batchsize` int(11) DEFAULT NULL,
  `processed` int(11) DEFAULT NULL,
  `lastprocessed` int(11) DEFAULT NULL,
  `lasttimestamp` timestamp NULL DEFAULT NULL,
  `exitmessage` varchar(45) DEFAULT NULL,
  `queuedata` text,
  PRIMARY KEY (`jobid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Table structure for table `logcategories` */

DROP TABLE IF EXISTS `logcategories`;

CREATE TABLE `logcategories` (
  `logcategory` varchar(32) NOT NULL,
  PRIMARY KEY (`logcategory`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Table structure for table `reset_password` */

DROP TABLE IF EXISTS `reset_password`;

CREATE TABLE `reset_password` (
  `uid` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `roleid` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(24) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`roleid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `systemlog` */

DROP TABLE IF EXISTS `systemlog`;

CREATE TABLE `systemlog` (
  `idsystemlog` int(11) NOT NULL AUTO_INCREMENT,
  `logcategory` varchar(32) NOT NULL DEFAULT 'information',
  `user` varchar(90) NOT NULL DEFAULT 'unknown - error?',
  `logmessage` varchar(1024) NOT NULL,
  `diagnostic` text,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idsystemlog`),
  KEY `enforce_cats_idx` (`logcategory`),
  CONSTRAINT `enforce_cat` FOREIGN KEY (`logcategory`) REFERENCES `logcategories` (`logcategory`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Table structure for table `user_categories` */

DROP TABLE IF EXISTS `user_categories`;

CREATE TABLE `user_categories` (
  `ucatid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ucatid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `user_reset_status` */

DROP TABLE IF EXISTS `user_reset_status`;

CREATE TABLE `user_reset_status` (
  `uid` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Table structure for table `user_roles` */

DROP TABLE IF EXISTS `user_roles`;

CREATE TABLE `user_roles` (
  `users_uid` int(11) DEFAULT NULL,
  `role_role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(80) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `firstname` varchar(24) DEFAULT NULL,
  `lastname` varchar(24) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `uid_UNIQUE` (`uid`),
  UNIQUE KEY `username_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
