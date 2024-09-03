/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.17-MariaDB : Database - task-4
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`task-4` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `task-4`;

/*Table structure for table `api-data` */

DROP TABLE IF EXISTS `api-data`;

CREATE TABLE `api-data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `albumId` int(11) DEFAULT NULL,
  `id_from_data` int(11) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `thumbnailUrl` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `api-data` */

insert  into `api-data`(`id`,`albumId`,`id_from_data`,`title`,`url`,`thumbnailUrl`) values 
(1,1,3,'officia porro iure quia iusto qui ipsa ut modi','https://via.placeholder.com/600/771796','https://via.placeholder.com/150/771796'),
(2,1,7,'officia delectus consequatur vero aut veniam explicabo molestias','https://via.placeholder.com/600/b0f7cc','https://via.placeholder.com/150/b0f7cc'),
(3,1,2,'reprehenderit est deserunt velit ipsam','https://via.placeholder.com/600/771796','https://via.placeholder.com/150/771796'),
(4,1,2,'reprehenderit est deserunt velit ipsam','https://via.placeholder.com/600/771796','https://via.placeholder.com/150/771796'),
(5,1,2,'reprehenderit est deserunt velit ipsam','https://via.placeholder.com/600/771796','https://via.placeholder.com/150/771796'),
(6,1,2,'reprehenderit est deserunt velit ipsam','https://via.placeholder.com/600/771796','https://via.placeholder.com/150/771796'),
(7,3,102,'eaque iste corporis tempora vero distinctio consequuntur nisi nesciunt','https://via.placeholder.com/600/a393af','https://via.placeholder.com/150/a393af'),
(8,3,101,'incidunt alias vel enim','https://via.placeholder.com/600/e743b','https://via.placeholder.com/150/e743b'),
(9,1,2,'reprehenderit est deserunt velit ipsam','https://via.placeholder.com/600/771796','https://via.placeholder.com/150/771796'),
(10,1,3,'officia porro iure quia iusto qui ipsa ut modi','https://via.placeholder.com/600/24f355','https://via.placeholder.com/150/24f355'),
(11,1,2,'reprehenderit est deserunt velit ipsam','https://via.placeholder.com/600/771796','https://via.placeholder.com/150/771796');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
