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
/*Table structure for table `identification` */

DROP TABLE IF EXISTS `identification`;

CREATE TABLE `identification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idtype` varchar(90) DEFAULT NULL,
  `idnumber` varchar(90) DEFAULT NULL,
  `dateofissue` date DEFAULT NULL,
  `expirydate` date DEFAULT NULL,
  `bid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
