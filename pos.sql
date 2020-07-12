/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.10-MariaDB : Database - pos
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pos` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `pos`;

/*Table structure for table `customers` */

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `point` int(11) DEFAULT 0,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `customers` */

insert  into `customers`(`id`,`name`,`gender`,`point`,`address`,`created_at`,`updated_at`) values 
(2,'shafa \'azizah','p',5,'jl.ciliwung, jakarta timur','2020-07-11 09:22:09','2020-07-11 23:27:36'),
(3,'Zainudin Anwar','p',5,'Jl.jagakarsa, jakarta selatan, DKI JAKARTA','2020-07-11 09:23:10','2020-07-12 18:20:26'),
(4,'siti fatimah','p',0,'aadasdjasdjiadsja','2020-07-11 09:23:57','2020-07-11 09:23:57'),
(7,'yuliarti','p',0,'jl.ciliwung jakarta timur','2020-07-11 10:04:36','2020-07-11 10:04:36');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(9,'2019_08_19_000000_create_failed_jobs_table',1),
(10,'2020_07_10_184313_create_customers_table',1),
(11,'2020_07_10_184344_create_sales_transactions_table',1),
(12,'2020_07_10_184413_create_rewards_table',1),
(13,'2020_07_10_190129_create_products_table',1),
(14,'2020_07_10_192239_create_product_types_table',1),
(15,'2020_07_11_182758_create_temporary_sales_transactions_table',2);

/*Table structure for table `product_types` */

DROP TABLE IF EXISTS `product_types`;

CREATE TABLE `product_types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `product_types` */

insert  into `product_types`(`id`,`name`,`created_at`,`updated_at`) values 
(1,'cair','2020-07-11 02:32:34',NULL),
(2,'bubuk','2020-07-11 02:32:45',NULL),
(3,'padat','2020-07-11 02:33:24',NULL);

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barcode` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(18,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `product_type_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `products` */

insert  into `products`(`id`,`name`,`barcode`,`price`,`stock`,`product_type_id`,`created_at`,`updated_at`) values 
(1,'Rinso Molto 15ML','12345678',2000.00,27,1,'2020-07-11 02:34:18','2020-07-12 18:20:26');

/*Table structure for table `rewards` */

DROP TABLE IF EXISTS `rewards`;

CREATE TABLE `rewards` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` bigint(20) unsigned NOT NULL,
  `transaksi_id` bigint(20) unsigned NOT NULL,
  `point` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `rewards` */

/*Table structure for table `sales_transactions` */

DROP TABLE IF EXISTS `sales_transactions`;

CREATE TABLE `sales_transactions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` bigint(20) unsigned NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `sales_transactions` */

insert  into `sales_transactions`(`id`,`customer_id`,`product_id`,`qty`,`created_at`,`updated_at`) values 
(1,1,1,2,'2020-07-11 03:12:30',NULL),
(2,1,1,2,'2020-07-11 03:12:30',NULL),
(3,1,1,18,'2020-07-11 03:14:18',NULL),
(4,2,1,12,'2020-07-11 23:25:00','2020-07-11 23:25:05'),
(5,2,1,1,'2020-07-11 23:27:28','2020-07-11 23:27:32'),
(6,3,1,10,'2020-07-12 11:20:26','2020-07-12 11:20:26');

/*Table structure for table `temporary_sales_transactions` */

DROP TABLE IF EXISTS `temporary_sales_transactions`;

CREATE TABLE `temporary_sales_transactions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` bigint(20) unsigned NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `temporary_sales_transactions` */

insert  into `temporary_sales_transactions`(`id`,`customer_id`,`product_id`,`qty`,`created_at`,`updated_at`) values 
(2,2,1,13,'2020-07-12 16:35:36','2020-07-12 16:35:41'),
(3,3,1,10,'2020-07-12 11:20:26','2020-07-12 11:20:26');

/* Trigger structure for table `sales_transactions` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `update_stock_products` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `update_stock_products` AFTER INSERT ON `sales_transactions` FOR EACH ROW BEGIN
	update products
	set products.stock = products.stock - NEW.qty,
	    updated_at = now()
	Where products.id = NEW.product_id;
    END */$$


DELIMITER ;

/* Trigger structure for table `sales_transactions` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `update_point_customer` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `update_point_customer` AFTER INSERT ON `sales_transactions` FOR EACH ROW UPDATE customers 
SET point = point + 5,
	updated_at = NOW()
WHERE customers.id = NEW.customer_id */$$


DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
