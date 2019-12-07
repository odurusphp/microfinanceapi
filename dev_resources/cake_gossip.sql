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
/*Table structure for table `apikeys` */

DROP TABLE IF EXISTS `apikeys`;

CREATE TABLE `apikeys` (
  `keyid` int(11) NOT NULL AUTO_INCREMENT,
  `apikey` varchar(90) DEFAULT NULL,
  PRIMARY KEY (`keyid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `apikeys` */

insert  into `apikeys`(`keyid`,`apikey`) values (1,'acdNCRFr'),(2,'tWUkNgCm');

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

/*Data for the table `basicinformation` */

insert  into `basicinformation`(`bid`,`firstname`,`lastname`,`middlename`,`email`,`telephone`,`postaladdress`,`streetaddress`,`zipcode`,`country`,`category`,`business_name`,`business_email`,`business_telephone`,`business_postal`,`business_street`) values (7,'Nana','Oduro',NULL,'odurusphp@gmail.com','9039230202',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(8,'Nana','Oduro',NULL,'prince@gmail.com','9039230202',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9,'Nana','Oduro',NULL,'princeod@gmail.com','9039230202',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

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

/*Data for the table `frameworkjobs` */

/*Table structure for table `logcategories` */

DROP TABLE IF EXISTS `logcategories`;

CREATE TABLE `logcategories` (
  `logcategory` varchar(32) NOT NULL,
  PRIMARY KEY (`logcategory`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `logcategories` */

/*Table structure for table `order_status` */

DROP TABLE IF EXISTS `order_status`;

CREATE TABLE `order_status` (
  `ords_id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ords_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `order_status` */

/*Table structure for table `order_users` */

DROP TABLE IF EXISTS `order_users`;

CREATE TABLE `order_users` (
  `bid` int(11) DEFAULT NULL,
  `orderid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `order_users` */

/*Table structure for table `payment_method` */

DROP TABLE IF EXISTS `payment_method`;

CREATE TABLE `payment_method` (
  `payid` int(11) NOT NULL AUTO_INCREMENT,
  `paymethod` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`payid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `payment_method` */

/*Table structure for table `product_addons` */

DROP TABLE IF EXISTS `product_addons`;

CREATE TABLE `product_addons` (
  `adid` int(11) NOT NULL AUTO_INCREMENT,
  `addon` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`adid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `product_addons` */

/*Table structure for table `product_categories` */

DROP TABLE IF EXISTS `product_categories`;

CREATE TABLE `product_categories` (
  `categoryid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`categoryid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `product_categories` */

insert  into `product_categories`(`categoryid`,`name`) values (1,'Cake'),(2,'Non-cake');

/*Table structure for table `product_images` */

DROP TABLE IF EXISTS `product_images`;

CREATE TABLE `product_images` (
  `imageid` int(11) NOT NULL AUTO_INCREMENT,
  `productid` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`imageid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `product_images` */

/*Table structure for table `product_orders` */

DROP TABLE IF EXISTS `product_orders`;

CREATE TABLE `product_orders` (
  `oderid` int(11) NOT NULL AUTO_INCREMENT,
  `productid` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `delivery_date` datetime DEFAULT NULL,
  `payment_mode` int(11) DEFAULT NULL,
  `expected_date` datetime DEFAULT NULL,
  `expected_time` datetime DEFAULT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `cost` decimal(10,2) DEFAULT NULL,
  `payment_status` varchar(10) DEFAULT NULL,
  `posted_date` datetime DEFAULT NULL,
  `isbillsent` tinyint(1) DEFAULT NULL,
  `order_status` int(11) DEFAULT NULL,
  `delivery_type` varchar(50) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `internal_order_note` varchar(1024) DEFAULT NULL,
  `client_order_note` varchar(1024) DEFAULT NULL,
  `shopifyorderid` varchar(90) DEFAULT NULL,
  `createdat` datetime DEFAULT NULL,
  PRIMARY KEY (`oderid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `product_orders` */

/*Table structure for table `product_productaddons` */

DROP TABLE IF EXISTS `product_productaddons`;

CREATE TABLE `product_productaddons` (
  `productid` int(11) DEFAULT NULL,
  `adid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `product_productaddons` */

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

/*Data for the table `products` */

/*Table structure for table `reset_password` */

DROP TABLE IF EXISTS `reset_password`;

CREATE TABLE `reset_password` (
  `uid` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `reset_password` */

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `roleid` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(24) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`roleid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `roles` */

insert  into `roles`(`roleid`,`role`,`description`) values (1,'Administrator','Administrator'),(2,'Company Administrator','Company Adminditrator'),(3,'Company Users','Company Users');

/*Table structure for table `sub_product_categories` */

DROP TABLE IF EXISTS `sub_product_categories`;

CREATE TABLE `sub_product_categories` (
  `sub_categoryid` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(90) DEFAULT NULL,
  PRIMARY KEY (`sub_categoryid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `sub_product_categories` */

/*Table structure for table `sub_product_tags` */

DROP TABLE IF EXISTS `sub_product_tags`;

CREATE TABLE `sub_product_tags` (
  `tagid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sub_categoryid` int(11) DEFAULT NULL,
  `tagname` varchar(90) DEFAULT NULL,
  PRIMARY KEY (`tagid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `sub_product_tags` */

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

/*Data for the table `systemlog` */

/*Table structure for table `team_users` */

DROP TABLE IF EXISTS `team_users`;

CREATE TABLE `team_users` (
  `team` varchar(90) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `team_users` */

/*Table structure for table `teams` */

DROP TABLE IF EXISTS `teams`;

CREATE TABLE `teams` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `team` varchar(90) DEFAULT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `teams` */

insert  into `teams`(`tid`,`team`) values (2,'Packaging'),(3,'Delivery');

/*Table structure for table `user_categories` */

DROP TABLE IF EXISTS `user_categories`;

CREATE TABLE `user_categories` (
  `ucatid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ucatid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user_categories` */

insert  into `user_categories`(`ucatid`,`name`) values (1,'Administrator'),(2,'Customer'),(3,'Staff');

/*Table structure for table `user_reset_status` */

DROP TABLE IF EXISTS `user_reset_status`;

CREATE TABLE `user_reset_status` (
  `uid` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `user_reset_status` */

/*Table structure for table `user_roles` */

DROP TABLE IF EXISTS `user_roles`;

CREATE TABLE `user_roles` (
  `users_uid` int(11) NOT NULL,
  `roles_roleid` int(11) NOT NULL,
  PRIMARY KEY (`users_uid`,`roles_roleid`),
  KEY `fk_user_roles_roles1_idx` (`roles_roleid`),
  CONSTRAINT `fk_user_roles_roles1` FOREIGN KEY (`roles_roleid`) REFERENCES `roles` (`roleid`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_user_roles_users1` FOREIGN KEY (`users_uid`) REFERENCES `users` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `user_roles` */

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

/*Table structure for table `users_basic` */

DROP TABLE IF EXISTS `users_basic`;

CREATE TABLE `users_basic` (
  `uid` int(11) DEFAULT NULL,
  `bid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `users_basic` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
