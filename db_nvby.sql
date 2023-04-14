/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.1.37-MariaDB : Database - db_nvby
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_nvby` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_nvby`;

/*Table structure for table `modal` */

DROP TABLE IF EXISTS `modal`;

CREATE TABLE `modal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nm_ukm` varchar(20) DEFAULT NULL,
  `lu` int(11) DEFAULT NULL,
  `jp` int(11) DEFAULT NULL,
  `om` int(11) DEFAULT NULL,
  `ja` int(11) DEFAULT NULL,
  `hk` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

/*Data for the table `modal` */

insert  into `modal`(`id`,`nm_ukm`,`lu`,`jp`,`om`,`ja`,`hk`) values 
(1,'Sanggar Azalea ',2,14,3,2,3),
(2,'Kedurus Sejahtera',6,7,5,4,2),
(3,'Rapi Ayu Handycraft',4,16,1,10,3),
(4,'Jaya Komputer',2,9,2,2,3),
(5,'Purnama',1,9,5,4,3),
(6,'Kencana Craft',3,22,2,1,3),
(7,'V-Tri Accessories',4,14,2,3,2),
(8,'Maju Jaya Sablon',5,1,3,2,1),
(9,'Batik Semanggi',6,1,2,3,1),
(10,'Sunrise Picture',7,13,5,10,2),
(11,'Mitra Mandiri',4,3,3,6,1),
(12,'Liana',0,15,3,6,2),
(13,'Madekan',7,15,3,8,1),
(14,'Temuwati',2,26,1,8,2),
(15,'Eva Nur Fadillah',5,23,3,10,3),
(16,'Sri Sulatiningsih',3,18,5,7,3),
(17,'Warna Ayu',7,20,3,6,1),
(18,'Ukm Jasierah',3,2,2,9,2),
(19,'Nurul',6,16,5,7,1),
(20,'Pujiati',0,24,3,1,1),
(21,'Indrayani',2,18,1,8,2),
(22,'Ksm Kurma',0,5,2,5,3),
(23,'Ukm Danadipa Etnik',3,10,1,1,3),
(24,'Ukm Enfina',3,25,4,6,2),
(25,'Ksm Lezat',2,4,1,1,2),
(26,'Andyni Collection',7,30,1,3,1),
(27,'Ananda Collection',6,3,4,7,2),
(28,'Umk Rumpun Bambu',5,19,5,2,1),
(29,'Umk Flamboyan',4,25,2,4,1),
(30,'Umk Tandu A.W',3,3,2,4,3),
(31,'Umk Prayogi',7,19,5,3,3),
(32,'Umk Dian Collection',1,24,5,7,1),
(33,'Kelompok Tani',4,20,4,1,1),
(34,'Umi Hanik',2,12,4,4,2),
(35,'Lilik Yulfa',7,29,5,2,1),
(36,'Titik Suprihatin',5,3,1,2,1),
(37,'Tutik Jaslikan',5,6,1,6,2),
(38,'Subaun',4,23,5,6,2),
(39,'Mekan',7,17,2,7,3),
(40,'Ksm Budaya 4',1,21,2,8,2),
(41,'Umk Warga Mandiri',4,1,2,8,1),
(42,'Ksm Kreatif & Koi',7,10,5,4,2),
(43,'Sri Lasmini Budiono',1,30,1,6,3),
(44,'Umk Sayu Sejahtera',5,8,5,3,2),
(45,'Windu Collection',2,26,2,9,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
