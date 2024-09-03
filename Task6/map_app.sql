/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.17-MariaDB : Database - map_app
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`map_app` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `map_app`;

/*Table structure for table `polygons` */

DROP TABLE IF EXISTS `polygons`;

CREATE TABLE `polygons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coordinates` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `polygons` */

insert  into `polygons`(`id`,`coordinates`) values 
(1,'[-0.144539,51.521348]'),
(2,'[-0.101452,51.521562]'),
(3,'[-0.084972,51.533096]'),
(4,'[-0.089436,51.512161]'),
(5,'[-0.149174,51.524018]'),
(6,'[-0.098534,51.505965]'),
(7,'[-2.406693,52.68887]'),
(8,'[-0.243931,51.5664]'),
(9,'[-0.103512,51.511948]'),
(10,'[-0.119305,51.505537]'),
(11,'[-0.130806,51.52028]');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
