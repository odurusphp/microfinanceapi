/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.7.21-log : Database - cake_gossip
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `product_addons` */

DROP TABLE IF EXISTS `product_addons`;

CREATE TABLE `product_addons` (
  `adid` int(11) NOT NULL AUTO_INCREMENT,
  `addon` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`adid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `product_tags` */

DROP TABLE IF EXISTS `product_tags`;

CREATE TABLE `product_tags` (
  `tagid` int(11) DEFAULT NULL,
  `productid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `productid` int(11) NOT NULL AUTO_INCREMENT,
  `categoryid` int(11) DEFAULT NULL,
  `sub_categoryid` int(11) DEFAULT NULL,
  `tagid` int(11) DEFAULT NULL,
  `name` varchar(90) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `createdat` datetime DEFAULT NULL,
  `publishedat` datetime DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `weight` varchar(20) DEFAULT NULL,
  `size` varchar(20) DEFAULT NULL,
  `sku` varchar(90) DEFAULT NULL,
  `shopifyid` varchar(90) DEFAULT NULL,
  `saleprice` decimal(10,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`productid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Table structure for table `sub_product_tags` */

DROP TABLE IF EXISTS `sub_product_tags`;

CREATE TABLE `sub_product_tags` (
  `tagid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tagname` varchar(90) DEFAULT NULL,
  PRIMARY KEY (`tagid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
