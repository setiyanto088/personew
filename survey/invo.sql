/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.30-MariaDB : Database - inventory
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`inventory` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `inventory`;

/*Table structure for table `ci_sessions` */

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `ci_sessions` */

/*Table structure for table `t_inventorygroup` */

DROP TABLE IF EXISTS `t_inventorygroup`;

CREATE TABLE `t_inventorygroup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `t_inventorygroup` */

insert  into `t_inventorygroup`(`id`,`nama`,`category_id`) values (1,'asdasd',1);

/*Table structure for table `t_items` */

DROP TABLE IF EXISTS `t_items`;

CREATE TABLE `t_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inventory_id` int(11) DEFAULT NULL,
  `items_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `inventory_id` (`inventory_id`),
  KEY `items_id` (`items_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `t_items` */

insert  into `t_items`(`id`,`inventory_id`,`items_id`) values (1,1,1),(2,1,3);

/*Table structure for table `t_kategory` */

DROP TABLE IF EXISTS `t_kategory`;

CREATE TABLE `t_kategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `t_kategory` */

insert  into `t_kategory`(`id`,`nama`) values (1,'Toyota');

/*Table structure for table `t_masterdata` */

DROP TABLE IF EXISTS `t_masterdata`;

CREATE TABLE `t_masterdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_barang` varchar(255) DEFAULT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `id_stok` int(11) DEFAULT NULL,
  `disc` int(11) DEFAULT NULL,
  `id_kategory` int(11) DEFAULT NULL,
  `harga` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_stok` (`id_stok`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `t_masterdata` */

insert  into `t_masterdata`(`id`,`kode_barang`,`nama_barang`,`id_stok`,`disc`,`id_kategory`,`harga`) values (1,'KCLS-010231','Kaca Belakang Toyota',1,0,1,5000000),(2,'test110','test',2,0,1,50000),(3,'LKSC-1231','Kaca Depan Mobil',3,0,1,15000000),(4,'KAC-1827389','Test',4,0,1,500000);

/*Table structure for table `t_param` */

DROP TABLE IF EXISTS `t_param`;

CREATE TABLE `t_param` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `param_name` varchar(50) DEFAULT NULL,
  `param_id` int(11) DEFAULT NULL,
  `param_value` varchar(255) DEFAULT NULL,
  `xs1` varchar(255) DEFAULT NULL,
  `xs2` varchar(30) DEFAULT NULL,
  `xn1` int(11) DEFAULT NULL,
  `xn2` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `order_seq` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `t_param` */

insert  into `t_param`(`id`,`param_name`,`param_id`,`param_value`,`xs1`,`xs2`,`xn1`,`xn2`,`status`,`order_seq`) values (1,'tokenloginID',NULL,'135',NULL,NULL,NULL,NULL,1,NULL),(2,'statusBarang',1,'pcs','','',NULL,NULL,1,NULL),(3,'statusBarang',2,'kilo','','',NULL,NULL,1,NULL),(4,'statusBarang',3,'m','','',NULL,NULL,1,NULL),(5,'statusBarang',4,'m2','','',NULL,NULL,1,NULL),(6,'statusBarang',5,'kodi','','',NULL,NULL,1,NULL),(7,'tokenaddusrID',NULL,'12',NULL,NULL,NULL,NULL,1,NULL),(8,'userID',NULL,'12',NULL,NULL,NULL,NULL,1,NULL),(9,'usernameID',NULL,'12',NULL,NULL,NULL,NULL,1,NULL),(10,'tokenresetID',NULL,'1',NULL,NULL,NULL,NULL,1,NULL);

/*Table structure for table `t_stock` */

DROP TABLE IF EXISTS `t_stock`;

CREATE TABLE `t_stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stock` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `t_stock` */

insert  into `t_stock`(`id`,`stock`) values (1,50),(2,50),(3,100),(4,11);

/*Table structure for table `t_token` */

DROP TABLE IF EXISTS `t_token`;

CREATE TABLE `t_token` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=latin1;

/*Data for the table `t_token` */

insert  into `t_token`(`id`,`id_user`,`id_role`,`token`,`timestamp`,`status`) values (1,1,99,'8d857029dabc170a2dc0777cc3fba739','2018-02-13 21:17:09',1),(2,1,99,'f7de090f0af9ac293906045a1457e802','2018-02-14 09:10:16',1),(3,1,99,'7a9665689b198f2a20719174c97b896d','2018-02-17 09:00:35',1),(4,1,99,'997c4ba65f5e60c6d8d632493fc259eb','2018-02-17 09:12:55',1),(5,1,99,'2405726d92e7e5fd1589dd6466fff34d','2018-02-17 09:15:22',1),(6,1,99,'6fb63ec5f5d26e41c7be5929a677cd6e','2018-02-17 09:27:07',1),(7,1,99,'7177b879f3d2c277f2ed0690044bf7ef','2018-02-17 09:28:31',1),(8,1,99,'013fcc0b48d5e1ae9349d182b60c745f','2018-02-17 09:31:09',1),(9,1,99,'5969a503eeb323c06f355bd49582fd73','2018-02-17 09:31:41',1),(10,1,99,'149a7f19308c7edd9794762d22238c97','2018-02-17 09:32:40',1),(11,1,99,'1b82611a53be367cd419f1db66622d6f','2018-02-17 17:48:04',1),(12,1,99,'1a2d577ac07d1fe586f4ada2852d09e4','2018-03-01 18:23:31',1),(13,1,99,'ab16986290a22091fa5793d57cb9b50f','2018-03-07 21:04:44',1),(14,1,99,'5e634fd1c216088935c80dc8e4d98a2a','2018-03-07 21:04:44',1),(15,1,99,'72372c157b4a8c356145cc8ac39d3af3','2018-03-08 20:37:46',1),(16,1,99,'a2ef9f2a1543d34f4fac64af7bedf75d','2018-05-17 11:13:35',1),(17,1,99,'81212c4d05dcf0c50b85331df25e5619','2018-05-17 11:29:43',1),(18,1,99,'19aa8fe04b1f199433934bb2edb22756','2018-05-17 11:35:11',1),(19,1,99,'db55d7fef8314e97a20ff5ff037eaa9c','2018-05-17 13:50:53',1),(20,1,99,'395ce54197f438888962ef500ba46855','2018-05-17 13:56:41',1),(21,1,99,'6ef44b7820528149615a3fe9dbcca9c9','2018-05-17 14:20:21',1),(22,1,99,'53083fc7151328f4324916a7c5b3f05e','2018-05-17 14:24:54',1),(23,1,99,'3ea302e748fc259af48f9f06212336ef','2018-05-17 14:29:58',1),(24,1,99,'466a3329a2d37f3913a0b24e4c052a6f','2018-05-17 14:40:38',1),(25,1,99,'8a8734877b2a908b422d3471fdaac939','2018-05-17 14:45:58',1),(26,1,99,'98905800f7696e3aa602c179c4367276','2018-05-17 14:46:57',1),(27,1,99,'8dad70e877ac07fcdc16a5ed8eced301','2018-05-17 14:48:01',1),(28,1,99,'bda51832017d0a35e821a66e4522e7bf','2018-05-17 14:48:41',1),(29,1,99,'6aa2c56cc1eb6b2ffda8c41470cfc95f','2018-05-17 14:49:19',1),(30,1,99,'a8d62d7f1d083b5952c892fd7c06b128','2018-05-17 14:51:56',1),(31,1,99,'2c8fbf2c583b0d6978cb6334180e6956','2018-05-17 15:31:01',1),(32,1,99,'798566b5d3482e8ea368504e05598fef','2018-05-17 15:52:37',1),(33,1,99,'e4aa7b344671c4924b9ee38dbe78e7a4','2018-05-17 15:54:16',1),(34,1,99,'feb807299fd948e00d70409faf6f965a','2018-05-17 16:04:32',1),(35,1,99,'758b07056610070fb76210d311cb29e7','2018-05-18 09:09:12',1),(36,1,99,'d67846b8d2d67b5df747ab0432763b5a','2018-05-18 09:47:57',1),(37,1,99,'0db75dcb44fd94453d0bc034d14c2f1b','2018-05-18 10:20:37',1),(38,1,99,'7e50412748d0259944d90d6f6c9bb5ae','2018-05-18 10:29:00',1),(39,1,99,'674a1dadb604f247b84d3ba873946887','2018-05-18 10:29:00',1),(40,1,99,'6cb1a861a0cee5bf41ba9d08d4050b8d','2018-05-18 10:29:56',1),(41,1,99,'3a24668174a24dd2d14eb24530f6e666','2018-05-18 10:30:49',1),(42,1,99,'b9932ee644415246b6d89675cbb330b0','2018-05-18 10:30:54',1),(43,1,99,'71bb0eca6acad83b844777fedcccef8c','2018-05-18 13:23:59',1),(44,1,99,'9c56aac7e0b212e7a117f1a677276a67','2018-05-18 13:37:33',1),(45,1,99,'811e40eb8cc2d02162917b2c3e2a3465','2018-05-18 13:42:34',1),(46,1,99,'11de2c420ed7ef23d659dfc2f9adb09c','2018-05-18 13:45:21',1),(47,1,99,'653dcc8d6da0c74cf1d1ff0689d39d20','2018-05-18 15:12:46',1),(48,1,99,'f61529493fa924501b6273e46fddbda5','2018-05-18 15:13:06',1),(49,1,99,'5da9c99ab31af9a6163814fb664c5c1b','2018-05-18 15:13:35',1),(50,1,99,'73ac4dc5cfd850b4965cec6d8a4aedcf','2018-05-18 15:13:59',1),(51,1,99,'34dd4b4cbf2285cf83369bbb6f2710e0','2018-05-18 22:23:29',1),(52,1,99,'f472ed4afd848c081f1c190eaa379efc','2018-05-18 22:38:43',1),(53,1,99,'7d4e4f52f8e16ebf6c914035d7e629be','2018-05-18 22:39:27',1),(54,1,99,'c7368ae6e2f3652c0d31f11e07c35b2c','2018-05-18 22:40:46',1),(55,1,99,'db2bf7f296c6b5d013f2e64abfe36075','2018-05-18 23:06:13',1),(56,1,99,'17ed0b1bbba357b42ae2d793fb76d67f','2018-05-18 23:11:23',1),(57,1,99,'7286b3cff911d17f0124d8f732f47c10','2018-05-19 00:24:32',1),(58,1,99,'5cdfcd0836f8e6db26042fe6718aa659','2018-05-19 00:24:50',1),(59,1,99,'41dd48bfa96729b106e0a9d69a2747eb','2018-05-19 00:25:09',1),(60,1,99,'cf9d1d2ccd67c1ae926246ccaba70cd0','2018-05-19 00:25:34',1),(61,1,99,'5471f134f49ff2eade5367e859a62221','2018-05-19 00:25:55',1),(62,1,99,'3bc8cb6edb798d02cf2dae0cb22c012f','2018-05-19 00:27:12',1),(63,1,99,'e69da7356bff7f228b867bbf75482f0b','2018-05-19 10:10:57',1),(64,1,99,'324446a123a01362f7c13989be783573','2018-05-19 11:06:48',1),(65,1,99,'0b801302ede9336d31297e355011015f','2018-05-19 11:53:41',1),(66,1,99,'e8930e5f0d89dab6885e569af968968f','2018-05-19 11:56:57',1),(67,1,99,'df5b6dd02fcb7596c79b36f78eab7f11','2018-05-19 14:11:51',1),(68,1,99,'702ec6b32d9975b9804a8e0b3fe59931','2018-05-19 14:30:32',1),(69,1,99,'c687e1b960223ac0fae6330e6546889e','2018-05-19 14:38:52',1),(70,1,99,'67be11b0721a7d908003a3937eeef9b8','2018-05-19 14:39:04',1),(71,1,99,'3ca38bc7784969163978b68d9ba4e539','2018-05-19 15:12:58',1),(72,1,99,'59b6f0f66a904972c848375ae327093f','2018-05-19 15:13:30',1),(73,1,99,'32433c2e2f6dc109e5d8351c38448ec7','2018-05-20 11:56:49',1),(74,1,99,'202d1ab0c4054173c2756395493c97f2','2018-05-20 14:39:06',1),(75,1,99,'2a9d082ab251fd6cb782ecb74bb117ce','2018-05-20 14:56:31',1),(76,1,99,'bb6359fa7e7693b8da85a9dfd91b3136','2018-05-20 14:58:29',1),(77,1,99,'fc22700e8bcc0345d4858bc9e68309fb','2018-05-20 18:00:53',1),(78,1,99,'88249c7137259bc6afa7f17e1767a430','2018-05-22 15:10:49',1),(79,1,99,'1f46985445a4cd19687e69b00c8ebcbf','2018-05-22 15:15:37',1),(80,1,99,'937976fe13048889f88b64aa1b9ab377','2018-05-22 15:15:41',1),(81,1,99,'29230e23c3e6d3f1f7c0a6cb573b2d5c','2018-05-22 15:26:04',1),(82,1,99,'20f60a886d2dec0020d200fdf87e2581','2018-05-22 15:26:25',1),(83,1,99,'3f9019ee80cf5c293b4c5a4f62ba156d','2018-06-04 10:33:43',1),(84,1,99,'a06762f66097af0322f01ea3f348b6bc','2018-06-05 10:03:41',1),(85,1,99,'24f0e7553dc9e891a306315a3ac8c6ac','2018-06-08 22:41:52',1),(86,1,99,'bb873a0d39c62e9e74fc33b9e66afeea','2018-06-09 15:39:47',1),(87,1,99,'9796185bcf120fd0b49003cd7c8d2599','2018-07-08 19:04:05',1),(88,1,99,'c25e7f603151f6803e23316abd397969','2018-07-10 17:07:01',1),(89,1,99,'42a5a980712f0150518b83958ab7a84a','2018-07-14 22:55:17',1),(90,1,99,'de9a0cdbc15404bd8f7a3e6a8212866c','2018-07-15 01:47:27',1),(91,1,98,'22c57a429e6dabb78929a545fcb84d87','2018-07-15 04:06:46',1),(92,1,99,'e31ea29c54486c889f7fc82693d83e5a','2018-07-15 04:07:04',1),(93,1,99,'63527c18070d732e37c4938e59cd32dc','2018-07-15 05:41:04',1),(94,1,99,'648d6c170d73847a7217d420cd02c083','2018-07-15 07:15:20',1),(95,1,99,'c4d37ee4c91ef3b4237985e432026616','2018-07-15 10:44:56',1),(96,1,99,'b389836ca3ab9c7b6ce63a8224039258','2018-08-04 21:08:21',1),(97,1,99,'d322e265666ef662075ed32173ea5bbf','2018-08-05 12:45:39',1),(98,1,99,'8b328db888a466946f1596d675da5c8b','2018-08-06 14:06:22',1),(99,1,99,'1bf55b12cea50ae313ef4e76af487d5d','2018-08-06 18:36:36',1),(100,1,99,'e815487968e00876be5dd8989b2d4dfd','2018-08-16 15:24:07',1),(101,1,99,'547a6075137e3218e255318d8a153e8f','2018-09-10 15:06:17',1),(102,1,99,'cf41d3081c5b8041307f6b6398584348','2018-09-11 19:39:48',1),(103,1,99,'80d888f69e68757427c50ab4e625f35e','2018-09-11 21:31:38',1),(104,2,98,'553439aafcce0bdba6164201337069f3','2018-09-11 21:38:49',1),(105,1,99,'1fde169c589a7a4a0fce7241fd07fb39','2018-09-11 21:38:56',1),(106,1,99,'f9dabf1d2baf9cd26bbc10e4ab7045aa','2018-09-11 21:40:22',1),(107,1,99,'c2402b17e580119af8861750cf5101ed','2018-09-11 21:41:03',1),(108,2,98,'23b55e4e6adac9748dbf77e588a9ff18','2018-09-11 21:43:15',1),(109,1,99,'112a8fb6a24459a05a44c917c1e2f193','2018-09-11 21:43:22',1),(110,1,99,'63573fa885fff0316261836b51c7496e','2018-09-11 21:44:24',1),(111,1,99,'2bca6d41ecb0d3cd208ed68fc05daccb','2018-09-11 21:49:25',1),(112,1,99,'cd1bd753a8512cba5f6a1b472fda4da7','2018-09-11 21:59:30',1),(113,1,99,'e8ada49012c861d4d038a4c709ba1d4c','2018-09-11 22:00:46',1),(114,1,99,'ef6399e62defc6ad210e4d3c9639032f','2018-09-11 22:02:55',1),(115,12,98,'128f81162e3e23845f7c9a11f80475f8','2018-09-11 22:06:47',1),(116,1,99,'7e8a1419c8418165143625c399c7c998','2018-12-05 10:02:05',1),(117,2,98,'965aec1ba47d12d30188bbb5fe2a1922','2018-12-05 10:02:22',1);

/*Table structure for table `t_transaksi` */

DROP TABLE IF EXISTS `t_transaksi`;

CREATE TABLE `t_transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_master` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `total` float DEFAULT NULL,
  `no_transaksi` varchar(255) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `pelanggan` varchar(255) DEFAULT NULL,
  `id_kasir` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_master` (`id_master`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

/*Data for the table `t_transaksi` */

insert  into `t_transaksi`(`id`,`id_master`,`jumlah`,`total`,`no_transaksi`,`tanggal`,`pelanggan`,`id_kasir`) values (1,1,1,5000000,'TRX/20180715','2018-07-15 05:54:16',NULL,1),(2,1,1,5000000,'TRX/20180715','2018-08-15 05:54:16',NULL,1),(3,1,4,20000000,'TRX/20180806-210221','0000-00-00 00:00:00','0',1),(4,1,4,20000000,'TRX/20180806-210441','2018-08-06 21:04:41','0',1),(5,3,4,20000000,'TRX/20180806-210441','2018-08-06 21:04:41','0',1),(6,1,10,0,'TRX/20180806-211431','2018-08-06 21:14:31','0',1),(7,3,50,0,'TRX/20180806-211431','2018-08-06 21:14:31','0',1),(8,1,10,0,'TRX/20180806-211445','2018-08-06 21:14:45','0',1),(9,3,50,0,'TRX/20180806-211445','2018-08-06 21:14:45','0',1),(10,1,10,0,'TRX/20180806-211622','2018-08-06 21:16:22','0',1),(11,3,50,0,'TRX/20180806-211622','2018-08-06 21:16:22','0',1),(12,1,5,0,'TRX/20180910-151023','2018-09-10 15:10:23','0',1),(13,3,4,0,'TRX/20180910-151023','2018-09-10 15:10:23','0',1),(14,1,5,0,'TRX/20180910-151035','2018-09-10 15:10:35','0',1),(15,3,4,0,'TRX/20180910-151035','2018-09-10 15:10:35','0',1),(16,NULL,NULL,0,'TRX/20180911-195519','2018-09-11 19:55:19','0',1),(17,NULL,NULL,0,'TRX/20180911-195519','2018-09-11 19:55:19','0',1),(18,NULL,NULL,0,'TRX/20180911-195519','2018-09-11 19:55:19','0',1),(19,NULL,NULL,0,'TRX/20180911-195519','2018-09-11 19:55:19','0',1),(20,NULL,NULL,0,'TRX/20180911-195519','2018-09-11 19:55:19','0',1),(21,5,5,0,'TRX/20180911-195519','2018-09-11 19:55:19','0',1),(22,1,5,0,'TRX/20180911-200301','2018-09-11 20:03:01','0',1),(23,1,5,0,'TRX/20180911-200353','2018-09-11 20:03:53','0',1),(24,1,5,0,'TRX/20180911-200841','2018-09-11 20:08:41','0',1),(25,1,5,0,'TRX/20180911-200928','2018-09-11 20:09:28','0',1),(26,1,5,0,'TRX/20180911-200941','2018-09-11 20:09:41','0',1),(27,1,5,0,'TRX/20180911-201031','2018-09-11 20:10:31','0',1),(28,1,5,0,'TRX/20180911-201323','2018-09-11 20:13:23','0',1),(29,1,5,0,'TRX/20180911-201455','2018-09-11 20:14:55','0',1),(30,1,5,0,'TRX/20180911-201513','2018-09-11 20:15:13','0',1),(31,3,5,0,'TRX/20180911-201513','2018-09-11 20:15:13','0',1),(32,1,5,0,'TRX/20180911-201536','2018-09-11 20:15:36','0',1),(33,3,5,0,'TRX/20180911-201537','2018-09-11 20:15:37','0',1),(34,1,5,0,'TRX/20180911-213157','2018-09-11 21:31:57','0',1),(35,3,3,0,'TRX/20180911-213157','2018-09-11 21:31:57','0',1);

/*Table structure for table `u_activity_log` */

DROP TABLE IF EXISTS `u_activity_log`;

CREATE TABLE `u_activity_log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `user_role` int(11) DEFAULT NULL,
  `object_name` varchar(255) DEFAULT NULL,
  `object_url` varchar(255) DEFAULT NULL,
  `activity_type` varchar(20) DEFAULT NULL,
  `activity_desc` text,
  `activity_date` datetime DEFAULT NULL,
  PRIMARY KEY (`log_id`) USING BTREE,
  KEY `log_id` (`log_id`,`user_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=139 DEFAULT CHARSET=latin1;

/*Data for the table `u_activity_log` */

insert  into `u_activity_log`(`log_id`,`user_id`,`user_role`,`object_name`,`object_url`,`activity_type`,`activity_desc`,`activity_date`) values (1,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-17 14:20:21'),(2,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-17 14:24:54'),(3,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-17 14:29:58'),(4,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-17 14:40:38'),(5,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-17 14:45:58'),(6,1,99,'logout/index','http://localhost/cargo/logout','logout','Nama user Supervisor.','2018-05-17 14:46:54'),(7,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-17 14:46:57'),(8,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-17 14:48:01'),(9,1,99,'logout/index','http://localhost/cargo/logout','logout','Nama user Supervisor.','2018-05-17 14:48:40'),(10,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-17 14:48:41'),(11,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-17 14:49:19'),(12,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-17 14:51:56'),(13,1,99,'logout/index','http://localhost/cargo/logout','logout','Nama user Supervisor.','2018-05-17 15:30:59'),(14,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-17 15:31:01'),(15,1,99,'logout/index','http://localhost/cargo/logout','logout','Nama user Supervisor.','2018-05-17 15:51:56'),(16,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-17 15:52:37'),(17,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-17 15:54:17'),(18,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-17 16:04:32'),(19,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-18 09:09:12'),(20,1,99,'logout/index','http://localhost/cargo/logout','logout','Nama user Supervisor.','2018-05-18 09:47:54'),(21,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-18 09:47:57'),(22,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-18 10:20:37'),(23,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-18 10:29:00'),(24,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-18 10:29:00'),(25,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-18 10:29:56'),(26,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-18 10:30:49'),(27,1,99,'logout/index','http://localhost/cargo/logout','logout','Nama user Supervisor.','2018-05-18 10:30:53'),(28,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-18 10:30:54'),(29,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-18 13:23:59'),(30,1,99,'logout/index','http://localhost/cargo/logout','logout','Nama user Supervisor.','2018-05-18 13:37:02'),(31,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-18 13:37:33'),(32,1,99,'logout/index','http://localhost/cargo/logout','logout','Nama user Supervisor.','2018-05-18 13:37:43'),(33,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-18 13:42:34'),(34,1,99,'logout/index','http://localhost/cargo/logout','logout','Nama user Supervisor.','2018-05-18 13:42:36'),(35,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-18 13:45:21'),(36,1,99,'logout/index','http://localhost/cargo/logout','logout','Nama user Supervisor.','2018-05-18 15:12:45'),(37,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-18 15:12:46'),(38,1,99,'logout/index','http://localhost/cargo/logout','logout','Nama user Supervisor.','2018-05-18 15:13:05'),(39,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-18 15:13:06'),(40,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-18 15:13:35'),(41,1,99,'logout/index','http://localhost/cargo/logout','logout','Nama user Supervisor.','2018-05-18 15:13:58'),(42,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-18 15:13:59'),(43,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-18 22:23:29'),(44,1,99,'logout/index','http://localhost/cargo/logout','logout','Nama user Supervisor.','2018-05-18 22:38:31'),(45,1,99,'login/auth','http://192.168.8.102/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-18 22:38:43'),(46,1,99,'login/auth','http://192.168.8.102/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-18 22:39:27'),(47,1,99,'logout/index','http://192.168.8.102/cargo/logout','logout','Nama user Supervisor.','2018-05-18 22:40:40'),(48,1,99,'login/auth','http://192.168.8.102/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-18 22:40:46'),(49,1,99,'logout/index','http://192.168.8.102/cargo/logout','logout','Nama user Supervisor.','2018-05-18 23:04:11'),(50,1,99,'login/auth','http://192.168.8.102/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-18 23:06:13'),(51,1,99,'logout/index','http://192.168.8.102/cargo/logout','logout','Nama user Supervisor.','2018-05-18 23:08:57'),(52,1,99,'login/auth','http://192.168.8.102/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-18 23:11:23'),(53,1,99,'logout/index','http://192.168.8.102/cargo/logout','logout','Nama user Supervisor.','2018-05-18 23:44:01'),(54,1,99,'login/auth','http://192.168.8.102/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-19 00:24:32'),(55,1,99,'login/auth','http://192.168.8.102/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-19 00:24:50'),(56,1,99,'login/auth','http://192.168.8.102/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-19 00:25:09'),(57,1,99,'login/auth','http://192.168.8.102/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-19 00:25:34'),(58,1,99,'login/auth','http://192.168.8.102/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-19 00:25:55'),(59,1,99,'logout/index','http://192.168.8.102/cargo/logout','logout','Nama user Supervisor.','2018-05-19 00:27:09'),(60,1,99,'login/auth','http://192.168.8.102/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-19 00:27:12'),(61,1,99,'logout/index','http://192.168.8.102/cargo/logout','logout','Nama user Supervisor.','2018-05-19 00:28:29'),(62,1,99,'login/auth','http://172.18.2.70/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-19 10:10:57'),(63,1,99,'login/auth','http://172.18.2.70/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-19 11:06:48'),(64,1,99,'login/auth','http://172.18.2.70/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-19 11:53:41'),(65,1,99,'login/auth','http://172.18.2.70/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-19 11:56:57'),(66,1,99,'logout/index','http://172.18.2.70/cargo/logout','logout','Nama user Supervisor.','2018-05-19 12:55:41'),(67,1,99,'login/auth','http://172.18.2.70/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-19 14:11:51'),(68,1,99,'login/auth','http://172.18.2.70/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-19 14:30:32'),(69,1,99,'login/auth','http://172.18.2.70/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-19 14:38:52'),(70,1,99,'login/auth','http://172.18.2.70/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-19 14:39:04'),(71,1,99,'login/auth','http://172.18.2.70/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-19 15:12:58'),(72,1,99,'login/auth','http://172.18.2.70/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-19 15:13:30'),(73,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-20 11:56:49'),(74,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-20 14:39:06'),(75,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-20 14:56:31'),(76,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-20 14:58:29'),(77,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-20 18:00:53'),(78,1,99,'logout/index','http://localhost/cargo/logout','logout','Nama user Supervisor.','2018-05-20 18:00:56'),(79,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-22 15:10:49'),(80,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-22 15:15:37'),(81,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-22 15:15:41'),(82,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-22 15:26:04'),(83,1,99,'login/auth','http://localhost/cargo/api/login/auth','login','Nama user Supervisor.','2018-05-22 15:26:25'),(84,1,99,'login/auth','http://localhost/cco/api/login/auth','login','Nama user Supervisor.','2018-06-04 10:33:43'),(85,1,99,'login/auth','http://localhost/cco/api/login/auth','login','Nama user Supervisor.','2018-06-05 10:03:41'),(86,1,99,'login/auth','http://localhost/inventory/api/login/auth','login','Nama user Supervisor.','2018-06-08 22:41:52'),(87,1,99,'login/auth','http://localhost/inventory/api/login/auth','login','Nama user Supervisor.','2018-06-09 15:39:47'),(88,1,99,'login/auth','http://localhost/inventory/api/login/auth','login','Nama user Supervisor.','2018-07-08 19:04:05'),(89,1,99,'login/auth','http://localhost/inventory/api/login/auth','login','Nama user Supervisor.','2018-07-10 17:07:01'),(90,1,99,'login/auth','http://localhost/inventory/api/login/auth','login','Nama user Supervisor.','2018-07-14 22:55:17'),(91,1,99,'login/auth','http://localhost/inventory/api/login/auth','login','Nama user Supervisor.','2018-07-15 01:47:27'),(92,1,99,'logout/index','http://localhost/inventory/logout','logout','Nama user Supervisor.','2018-07-15 04:06:37'),(93,1,98,'login/auth','http://localhost/inventory/api/login/auth','login','Nama user Supervisor.','2018-07-15 04:06:46'),(94,1,98,'logout/index','http://localhost/inventory/logout','logout','Nama user Supervisor.','2018-07-15 04:06:57'),(95,1,99,'login/auth','http://localhost/inventory/api/login/auth','login','Nama user Supervisor.','2018-07-15 04:07:04'),(96,1,99,'logout/index','http://localhost/inventory/logout','logout','Nama user Supervisor.','2018-07-15 05:40:22'),(97,1,99,'login/auth','http://localhost/inventory/api/login/auth','login','Nama user Supervisor.','2018-07-15 05:41:04'),(98,1,99,'logout/index','http://localhost/inventory/logout','logout','Nama user Supervisor.','2018-07-15 07:10:59'),(99,1,99,'login/auth','http://localhost/inventory/api/login/auth','login','Nama user Supervisor.','2018-07-15 07:15:20'),(100,1,99,'logout/index','http://localhost/inventory/logout','logout','Nama user Supervisor.','2018-07-15 07:23:27'),(101,1,99,'login/auth','http://localhost/inventory/api/login/auth','login','Nama user Supervisor.','2018-07-15 10:44:56'),(102,1,99,'login/auth','http://localhost/inventory/api/login/auth','login','Nama user Supervisor.','2018-08-04 21:08:22'),(103,1,99,'login/auth','http://localhost/inventory/api/login/auth','login','Nama user Supervisor.','2018-08-05 12:45:40'),(104,1,99,'login/auth','http://localhost/inventory/api/login/auth','login','Nama user Supervisor.','2018-08-06 14:06:23'),(105,1,99,'login/auth','http://localhost/inventory/api/login/auth','login','Nama user Supervisor.','2018-08-06 18:36:36'),(106,1,99,'login/auth','http://localhost/inventory/api/login/auth','login','Nama user Supervisor.','2018-08-16 15:24:07'),(107,1,99,'logout/index','http://localhost/inventory/logout','logout','Nama user Supervisor.','2018-08-16 15:40:38'),(108,1,99,'login/auth','http://localhost/inventory/api/login/auth','login','Nama user Supervisor.','2018-09-10 15:06:17'),(109,1,99,'login/auth','http://localhost/inventory/api/login/auth','login','Nama user Supervisor.','2018-09-11 19:39:49'),(110,1,99,'logout/index','http://localhost/inventory/logout','logout','Nama user Supervisor.','2018-09-11 21:28:44'),(111,1,99,'login/auth','http://localhost/inventory/api/login/auth','login','Nama user Supervisor.','2018-09-11 21:31:38'),(112,1,99,'logout/index','http://localhost/inventory/logout','logout','Nama user Supervisor.','2018-09-11 21:38:43'),(113,2,98,'login/auth','http://localhost/inventory/api/login/auth','login','Nama user Cashier.','2018-09-11 21:38:49'),(114,2,98,'logout/index','http://localhost/inventory/logout','logout','Nama user Cashier.','2018-09-11 21:38:52'),(115,1,99,'login/auth','http://localhost/inventory/api/login/auth','login','Nama user Supervisor.','2018-09-11 21:38:56'),(116,1,99,'logout/index','http://localhost/inventory/logout','logout','Nama user Supervisor.','2018-09-11 21:40:18'),(117,1,99,'login/auth','http://localhost/inventory/api/login/auth','login','Nama user Supervisor.','2018-09-11 21:40:22'),(118,1,99,'logout/index','http://localhost/inventory/logout','logout','Nama user Supervisor.','2018-09-11 21:40:59'),(119,1,99,'login/auth','http://localhost/inventory/api/login/auth','login','Nama user Supervisor.','2018-09-11 21:41:03'),(120,1,99,'logout/index','http://localhost/inventory/logout','logout','Nama user Supervisor.','2018-09-11 21:43:09'),(121,2,98,'login/auth','http://localhost/inventory/api/login/auth','login','Nama user Cashier.','2018-09-11 21:43:15'),(122,2,98,'logout/index','http://localhost/inventory/logout','logout','Nama user Cashier.','2018-09-11 21:43:17'),(123,1,99,'login/auth','http://localhost/inventory/api/login/auth','login','Nama user Supervisor.','2018-09-11 21:43:22'),(124,1,99,'logout/index','http://localhost/inventory/logout','logout','Nama user Supervisor.','2018-09-11 21:43:54'),(125,1,99,'login/auth','http://localhost/inventory/api/login/auth','login','Nama user Supervisor.','2018-09-11 21:44:24'),(126,1,99,'logout/index','http://localhost/inventory/logout','logout','Nama user Supervisor.','2018-09-11 21:48:05'),(127,1,99,'login/auth','http://localhost/inventory/api/login/auth','login','Nama user Supervisor.','2018-09-11 21:49:25'),(128,1,99,'logout/index','http://localhost/inventory/logout','logout','Nama user Supervisor.','2018-09-11 21:53:54'),(129,1,99,'login/auth','http://localhost/inventory/api/login/auth','login','Nama user Supervisor.','2018-09-11 21:59:30'),(130,1,99,'logout/index','http://localhost/inventory/logout','logout','Nama user Supervisor.','2018-09-11 22:00:25'),(131,1,99,'login/auth','http://localhost/inventory/api/login/auth','login','Nama user Supervisor.','2018-09-11 22:00:46'),(132,1,99,'logout/index','http://localhost/inventory/logout','logout','Nama user Supervisor.','2018-09-11 22:01:30'),(133,1,99,'login/auth','http://localhost/inventory/api/login/auth','login','Nama user Supervisor.','2018-09-11 22:02:55'),(134,1,99,'logout/index','http://localhost/inventory/logout','logout','Nama user Supervisor.','2018-09-11 22:06:43'),(135,12,98,'login/auth','http://localhost/inventory/api/login/auth','login','Nama user putri indah pratiwi.','2018-09-11 22:06:47'),(136,1,99,'login/auth','http://localhost/inventory/api/login/auth','login','Nama user Supervisor.','2018-12-05 10:02:05'),(137,1,99,'logout/index','http://localhost/inventory/logout','logout','Nama user Supervisor.','2018-12-05 10:02:18'),(138,2,98,'login/auth','http://localhost/inventory/api/login/auth','login','Nama user Cashier.','2018-12-05 10:02:22');

/*Table structure for table `u_group` */

DROP TABLE IF EXISTS `u_group`;

CREATE TABLE `u_group` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `group` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `keterangan` varchar(250) DEFAULT NULL,
  `id_lokasi` int(11) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8;

/*Data for the table `u_group` */

insert  into `u_group`(`id`,`group`,`keterangan`,`id_lokasi`,`level`,`created_date`,`created_by`) values (98,'Cashier',NULL,1,98,NULL,NULL),(99,'Super Administrator',NULL,1,99,NULL,NULL);

/*Table structure for table `u_menu` */

DROP TABLE IF EXISTS `u_menu`;

CREATE TABLE `u_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `url_mobile` varchar(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `sequence` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `u_menu` */

insert  into `u_menu`(`id`,`parent_id`,`url`,`url_mobile`,`label`,`status`,`icon`,`sequence`) values (1,0,'home','home','Dashboard',1,'',1),(2,0,'masterdata','masterdata','Masterdata',1,'',2),(3,0,'kategori','kategori','Category',1,'',1),(4,0,'cashier','cashier','Cashier',1,'',3),(5,0,'users','users','Management User',1,NULL,4),(6,0,'history','history','Dashboard',1,NULL,5),(7,0,'groupinventory','groupinventory','Group Inventory',1,NULL,6);

/*Table structure for table `u_menu_group` */

DROP TABLE IF EXISTS `u_menu_group`;

CREATE TABLE `u_menu_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `menu_id` (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `u_menu_group` */

insert  into `u_menu_group`(`id`,`group_id`,`menu_id`,`status`) values (2,99,2,1),(3,99,3,1),(5,99,5,1),(6,98,4,1),(7,99,6,1),(8,98,6,1);

/*Table structure for table `u_user` */

DROP TABLE IF EXISTS `u_user`;

CREATE TABLE `u_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `tmplahir` varchar(255) DEFAULT NULL,
  `tgllahir` varchar(40) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `nokontak` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `email_status` int(11) DEFAULT '0',
  `email_code` varchar(255) DEFAULT NULL,
  `sms_status` int(11) DEFAULT '0',
  `sms_code` varchar(255) DEFAULT NULL,
  `status_akses` varchar(4) DEFAULT '1',
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_activity` timestamp NULL DEFAULT NULL,
  `last_activity_status` int(11) DEFAULT '0',
  `lokasi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `u_user` */

insert  into `u_user`(`id`,`nama`,`image`,`tmplahir`,`tgllahir`,`agama`,`alamat`,`nokontak`,`email`,`token`,`email_status`,`email_code`,`sms_status`,`sms_code`,`status_akses`,`created_by`,`created_at`,`updated_at`,`last_activity`,`last_activity_status`,`lokasi`) values (1,'Supervisor','user.png',NULL,NULL,NULL,NULL,'','','7e8a1419c8418165143625c399c7c998',NULL,NULL,NULL,NULL,'1',NULL,'2017-07-01 14:57:28',NULL,'2017-11-17 15:12:27',1,0),(2,'Cashier','user.png',NULL,NULL,NULL,NULL,'','','965aec1ba47d12d30188bbb5fe2a1922',NULL,NULL,NULL,NULL,'1',NULL,'2017-07-01 14:57:28',NULL,'2017-11-17 15:12:27',1,0);

/*Table structure for table `u_user_group` */

DROP TABLE IF EXISTS `u_user_group`;

CREATE TABLE `u_user_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `id_role` int(11) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `u_user_group` */

insert  into `u_user_group`(`id`,`id_user`,`id_role`,`password`,`username`,`created_by`,`created_at`,`updated_at`) values (1,1,99,'$2a$06$ud2qdTGKgumMfWbvJ3yXdeGrHcxYy.0Run4WUrwkc7v7ys1sl6BJu','superadmin',NULL,'2017-07-05 15:24:11',NULL),(2,2,98,'$2a$06$ud2qdTGKgumMfWbvJ3yXdeGrHcxYy.0Run4WUrwkc7v7ys1sl6BJu','cashier',NULL,'2017-07-05 15:24:11',NULL);

/* Function  structure for function  `auth_check_token` */

/*!50003 DROP FUNCTION IF EXISTS `auth_check_token` */;
DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` FUNCTION `auth_check_token`( pin_user_id int(11), pin_token varchar(255)) RETURNS tinyint(1)
BEGIN
DECLARE l_count INT;
	SELECT 	COUNT(id) INTO l_count
	FROM 	hrd_profile 
	WHERE 	id = pin_user_id
	AND 	token = pin_token;
		IF l_count = 1 THEN
			RETURN TRUE;
		ELSE 
			RETURN FALSE;
		END IF;
       	
END */$$
DELIMITER ;

/* Function  structure for function  `auth_generate_token` */

/*!50003 DROP FUNCTION IF EXISTS `auth_generate_token` */;
DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` FUNCTION `auth_generate_token`(pin_length integer) RETURNS varchar(255) CHARSET utf8 COLLATE utf8_unicode_ci
BEGIN
    declare l_token varchar(255);
	set l_token = SUBSTRING(MD5(NOW()), 1, pin_length);
    return l_token;		
END */$$
DELIMITER ;

/* Function  structure for function  `generateId` */

/*!50003 DROP FUNCTION IF EXISTS `generateId` */;
DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` FUNCTION `generateId`(pin_param VARCHAR(100)) RETURNS int(11)
BEGIN
    DECLARE vid INT(11);
    DECLARE vIncrement INT(11);
    DECLARE vCount INT(11);
SELECT COUNT(param_value) INTO vCount FROM t_param WHERE param_name = pin_param;
			
IF vCount = 0 THEN -- insert 
	SET vIncrement := 1 ;
	INSERT INTO t_param (param_name, param_value) VALUES(pin_param, 1);
ELSE		
	SELECT 	param_value INTO vid
	FROM 
		t_param 
	WHERE 
		param_name = pin_param ;
			
	SET vIncrement := vid +1;
		
	UPDATE 
		t_param
	SET 
		param_value = vIncrement 
	WHERE 
		param_name = pin_param ;
END IF ;	
	
	
	RETURN  vIncrement;
END */$$
DELIMITER ;

/* Function  structure for function  `last_activity_user` */

/*!50003 DROP FUNCTION IF EXISTS `last_activity_user` */;
DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` FUNCTION `last_activity_user`(`pin_user_id` INT(11), `pin_token` VARCHAR(255)) RETURNS varchar(1) CHARSET latin1
BEGIN
DECLARE l_count INT;
	SELECT 	COUNT(id) INTO l_count
	FROM 	u_user
	WHERE 	id = pin_user_id
	AND 	token = pin_token;
		
		IF l_count = 1 THEN
			UPDATE u_user
			SET
				last_activity		= NOW(),
				last_activity_status	= 1
			WHERE 	id = pin_user_id
			AND 	token = pin_token;
			RETURN TRUE;
		ELSE 
			RETURN FALSE;
		END IF;
       
END */$$
DELIMITER ;

/* Function  structure for function  `login_check_user` */

/*!50003 DROP FUNCTION IF EXISTS `login_check_user` */;
DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` FUNCTION `login_check_user`(`pin_user_id` INT(11), `pin_token` VARCHAR(255), `pin_role` INT(11)) RETURNS varchar(1) CHARSET latin1
BEGIN
DECLARE l_count INT;
	SELECT 	COUNT(id) INTO l_count
	FROM 	t_token
	WHERE 	id_user = pin_user_id
	AND	id_role = pin_role
	AND 	token = pin_token
	AND	STATUS = 1;
		
		IF l_count = 1 THEN
			RETURN TRUE;
		ELSE 
			RETURN FALSE;
		END IF;
       
END */$$
DELIMITER ;

/* Function  structure for function  `set_token` */

/*!50003 DROP FUNCTION IF EXISTS `set_token` */;
DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` FUNCTION `set_token`(`pin_user_id` INT(11), `pin_token` VARCHAR(255), `pin_role` INT(11)) RETURNS varchar(1) CHARSET latin1
BEGIN
DECLARE l_count INT;
	SELECT 	COUNT(id) INTO l_count
	FROM 	u_user
	WHERE 	id = pin_user_id;
		
		IF l_count = 1 THEN
			UPDATE u_user SET token = pin_token WHERE id = pin_user_id;
			INSERT INTO  t_token
				(id_user,id_role,token,TIMESTAMP,STATUS)
			VALUES
				(pin_user_id,pin_role,pin_token,NOW(),1);
			RETURN TRUE;
		ELSE 
			RETURN FALSE;
		END IF;
       
END */$$
DELIMITER ;

/* Procedure structure for procedure `auth_get_user_detail` */

/*!50003 DROP PROCEDURE IF EXISTS  `auth_get_user_detail` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `auth_get_user_detail`(
	in pin_user_id INT
    )
BEGIN
    SELECT a.id as user_id, a.username as user_name, a.nama as user_full_name, a.id_role as role_id, a.status_pwd as status_pwd
	  FROM hrd_profile a	
	  WHERE a.id = pin_user_id;
END */$$
DELIMITER ;

/* Procedure structure for procedure `auth_logout` */

/*!50003 DROP PROCEDURE IF EXISTS  `auth_logout` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `auth_logout`(in pin_updatedBy int(11))
BEGIN
	update hrd_profile set login_status = 1 where id = pin_updatedBy;
END */$$
DELIMITER ;

/* Procedure structure for procedure `menu_create` */

/*!50003 DROP PROCEDURE IF EXISTS  `menu_create` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `menu_create`(pin_role_id INT, pin_menu_id INT)
BEGIN
	IF EXISTS (SELECT * FROM u_menu_group WHERE group_id = pin_role_id AND menu_id = pin_menu_id)
    THEN
		UPDATE u_menu_group
		   SET STATUS = 1 
		 WHERE group_id = pin_role_id 
			   AND menu_id = pin_menu_id;
        
    ELSE
		INSERT INTO  u_menu_group
			(	group_id, 
				menu_id, 
				STATUS
			)
		VALUES
			(
				pin_role_id, 
                pin_menu_id, 
                1
			);
	END IF;
	
END */$$
DELIMITER ;

/* Procedure structure for procedure `menu_delete` */

/*!50003 DROP PROCEDURE IF EXISTS  `menu_delete` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `menu_delete`(pin_role_id INT)
BEGIN
	
    UPDATE u_menu_group SET status = 0 WHERE group_id = pin_role_id;
END */$$
DELIMITER ;

/* Procedure structure for procedure `menu_list` */

/*!50003 DROP PROCEDURE IF EXISTS  `menu_list` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `menu_list`(pin_profile_id INT)
BEGIN
	SELECT
		b.id,
		b.url,
		b.label,
		b.parent_id,
		b.icon,
		b.sequence
	FROM
		u_menu_group a, 
		u_menu b 
	WHERE
		a.status = 1 
		AND b.status = 1 	
		AND a.menu_id = b.id 
        AND a.group_id = pin_profile_id
	ORDER BY 
		b.parent_id, 
		b.sequence,
		b.label;
END */$$
DELIMITER ;

/* Procedure structure for procedure `menu_list_all` */

/*!50003 DROP PROCEDURE IF EXISTS  `menu_list_all` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `menu_list_all`()
BEGIN
	select id, parent_id, url, label, icon, sequence
    from u_menu 
    where status = 1
    order by parent_id, sequence, label;
END */$$
DELIMITER ;

/* Procedure structure for procedure `user_create_username` */

/*!50003 DROP PROCEDURE IF EXISTS  `user_create_username` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `user_create_username`(
					IN `pin_userid` INT(11),
					IN `pin_pemilikid` INT(11),
					IN `pin_username` VARCHAR(100),
					IN `pin_group` INT(11),
					IN `pin_password` VARCHAR(255),
					IN `pin_message` VARCHAR(255)
)
BEGIN
	DECLARE usernameid INT(11);
	DECLARE emailpemilik varchar(255);
	
	SELECT generateId('usernameID') INTO usernameid;
	
	SELECT email INTO emailpemilik
	FROM u_user
	WHERE id = pin_pemilikid;
	
	INSERT INTO u_user_group(
		id,
		id_user,
		id_role,
		password,
		username,
		created_by,
		created_at
	) VALUES(
		usernameid,
		pin_pemilikid,
		pin_group,
		pin_password,
		pin_username,
		pin_userid,
		NOW()
	);
	
	INSERT INTO t_antrian(
		TYPE,
		deskripsi,
		xs1,
		STATUS,
		created_at
	) VALUES(
		'EMAIL_CREATE_USERNAME',
		pin_message,
		emailpemilik,
		0,
		NOW()
	);	
END */$$
DELIMITER ;

/* Procedure structure for procedure `auth_login` */

/*!50003 DROP PROCEDURE IF EXISTS  `auth_login` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `auth_login`(
				in pin_username varchar(20) , 
				in pin_password varchar(50),
				out pout_success boolean,
				out pout_user_id int(11),
				out pout_token varchar(255))
BEGIN
DECLARE l_total INT; 
SET pout_success = FALSE;
SET @l_user_id = NULL;    
	
	SET @l_sql = 
		CONCAT(
		'SELECT SQL_CALC_FOUND_ROWS id INTO @l_user_id
		FROM hrd_profile
		WHERE username = ?
		AND pwd = MD5(?)
		-- AND login_status = 1
		');
	PREPARE l_stmt FROM @l_sql;
	SET @l_username = pin_username;
	SET @l_password = pin_password;
	EXECUTE l_stmt USING  @l_username, @l_password;
    
	SELECT FOUND_ROWS()
	INTO l_total;
	DEALLOCATE PREPARE l_stmt; 
		IF l_total = 1 THEN
			SET pout_success = TRUE;
			SELECT @l_user_id INTO pout_user_id;
			SELECT auth_generate_token(30) INTO pout_token;
			
			UPDATE hrd_profile SET token = pout_token
			
			WHERE id = @l_user_id;
		ELSE 
			SET pout_success = FALSE;
		END IF;
END */$$
DELIMITER ;

/* Procedure structure for procedure `group_list` */

/*!50003 DROP PROCEDURE IF EXISTS  `group_list` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `group_list`(
	IN pin_limit INT(11) ,
	IN pin_offset INT(11), 
	IN pin_order_column VARCHAR(255),
	IN pin_order_dir VARCHAR(4),
	IN pin_filter VARCHAR(255),
	OUT pout_total_filtered INT(11),
	OUT pout_total INT(11))
BEGIN
	# Default values
	IF pin_limit IS NULL THEN SET pin_limit = 10; END IF;
	IF pin_offset IS NULL THEN SET pin_offset = 0; END IF;
	IF pin_order_column IS NULL THEN SET pin_order_column = 1; END IF;
	IF pin_order_dir IS NULL THEN SET pin_order_dir = 'ASC'; END IF;
	
	IF pin_filter > '' THEN
		SET @l_where_clause = CONCAT(
		'WHERE
		( id LIKE ''%', pin_filter ,'%'' ',
		' OR `nama` LIKE ''%', pin_filter ,'%'') '		
		);
	ELSE
		SET @l_where_clause = '';
	END IF;
	
	# Query
	SET @l_sql =
		CONCAT(
			'SELECT id, nama FROM t_inventorygroup
			
			' , @l_where_clause , '
			ORDER BY ' , pin_order_column , ' ' , pin_order_dir , '
			LIMIT ? 
			OFFSET ?'
		);
	
	PREPARE l_stmt FROM @l_sql;
	SET 	@l_limit	= pin_limit;
	
	SET 	@l_offset	= pin_offset;
	EXECUTE  l_stmt USING @l_limit, @l_offset;
	
	# Total Count Query without limit and with filtering
		SELECT FOUND_ROWS()
			INTO pout_total_filtered;
			
		DEALLOCATE PREPARE l_stmt;
	# Total Count Query Without limit and without filtering
		SELECT COUNT(id)
			INTO pout_total
			FROM t_inventorygroup;
END */$$
DELIMITER ;

/* Procedure structure for procedure `histoy_list` */

/*!50003 DROP PROCEDURE IF EXISTS  `histoy_list` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `histoy_list`(
	IN pin_limit INT(11) ,
	IN pin_offset INT(11), 
	IN pin_order_column VARCHAR(255),
	IN pin_order_dir VARCHAR(4),
	IN pin_filter VARCHAR(255),
	OUT pout_total_filtered INT(11),
	OUT pout_total INT(11))
BEGIN
	# Default values
	IF pin_limit IS NULL THEN SET pin_limit = 10; END IF;
	IF pin_offset IS NULL THEN SET pin_offset = 0; END IF;
	IF pin_order_column IS NULL THEN SET pin_order_column = 1; END IF;
	IF pin_order_dir IS NULL THEN SET pin_order_dir = 'ASC'; END IF;
	
	IF pin_filter > '' THEN
		SET @l_where_clause = CONCAT(
		'WHERE
		( a.no_transaksi LIKE ''%', pin_filter ,'%'' ',
		' OR b.kode_barang LIKE ''%', pin_filter ,'%'' ',
		' OR b.nama_barang LIKE ''%', pin_filter ,'%'' ',
		' OR b.harga LIKE ''%', pin_filter ,'%'' ',
		' OR a.jumlah LIKE ''%', pin_filter ,'%'' ',
		' OR a.total LIKE ''%', pin_filter ,'%'' ',
		' OR a.tanggal LIKE ''%', pin_filter ,'%'' ',
		' OR a.pelanggan LIKE ''%', pin_filter ,'%'' ',
		' OR c.`nama` LIKE ''%', pin_filter ,'%'') '		
		);
	ELSE
		SET @l_where_clause = '';
	END IF;
	
	# Query
	SET @l_sql =
		CONCAT(
			'SELECT a.no_transaksi, b.kode_barang, b.nama_barang, b.harga, a.jumlah, 
				a.total,  a.tanggal, a.pelanggan, c.`nama` AS kasir
				FROM t_transaksi a
				LEFT JOIN t_masterdata b ON a.`id_master` = b.`id`
				LEFT JOIN u_user c ON a.`id_kasir` = c.`id`
			
			' , @l_where_clause , '
			ORDER BY ' , pin_order_column , ' ' , pin_order_dir , '
			LIMIT ? 
			OFFSET ?'
		);
	
	PREPARE l_stmt FROM @l_sql;
	SET 	@l_limit	= pin_limit;
	
	SET 	@l_offset	= pin_offset;
	EXECUTE  l_stmt USING @l_limit, @l_offset;
	
	# Total Count Query without limit and with filtering
		SELECT FOUND_ROWS()
			INTO pout_total_filtered;
			
		DEALLOCATE PREPARE l_stmt;
	# Total Count Query Without limit and without filtering
		SELECT COUNT(a.id)
			INTO pout_total
			FROM t_transaksi a
				LEFT JOIN t_masterdata b ON a.`id_master` = b.`id`
				LEFT JOIN u_user c ON a.`id_kasir` = c.`id`;
END */$$
DELIMITER ;

/* Procedure structure for procedure `kategory_list` */

/*!50003 DROP PROCEDURE IF EXISTS  `kategory_list` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `kategory_list`(
	IN pin_limit INT(11) ,
	IN pin_offset INT(11), 
	IN pin_order_column VARCHAR(255),
	IN pin_order_dir VARCHAR(4),
	IN pin_filter VARCHAR(255),
	OUT pout_total_filtered INT(11),
	OUT pout_total INT(11))
BEGIN
	# Default values
	IF pin_limit IS NULL THEN SET pin_limit = 10; END IF;
	IF pin_offset IS NULL THEN SET pin_offset = 0; END IF;
	IF pin_order_column IS NULL THEN SET pin_order_column = 1; END IF;
	IF pin_order_dir IS NULL THEN SET pin_order_dir = 'ASC'; END IF;
	
	IF pin_filter > '' THEN
		SET @l_where_clause = CONCAT(
		'WHERE
		( id LIKE ''%', pin_filter ,'%'' ',
		' OR nama LIKE ''%', pin_filter ,'%'') '		
		);
	ELSE
		SET @l_where_clause = '';
	END IF;
	
	# Query
	SET @l_sql =
		CONCAT(
			'SELECT SQL_CALC_FOUND_ROWS
			id, 
			nama
			FROM
				t_kategory
			
			' , @l_where_clause , '
			ORDER BY ' , pin_order_column , ' ' , pin_order_dir , '
			LIMIT ? 
			OFFSET ?'
		);
	
	PREPARE l_stmt FROM @l_sql;
	SET 	@l_limit	= pin_limit;
	
	SET 	@l_offset	= pin_offset;
	EXECUTE  l_stmt USING @l_limit, @l_offset;
	
	# Total Count Query without limit and with filtering
		SELECT FOUND_ROWS()
			INTO pout_total_filtered;
			
		DEALLOCATE PREPARE l_stmt;
	# Total Count Query Without limit and without filtering
		SELECT COUNT(id)
			INTO pout_total
			FROM
				t_kategory;
END */$$
DELIMITER ;

/* Procedure structure for procedure `login_auth` */

/*!50003 DROP PROCEDURE IF EXISTS  `login_auth` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `login_auth`(
				IN `pin_username` VARCHAR(191)		
				)
BEGIN
DECLARE userid INT;
DECLARE webtoken VARCHAR(225);
SELECT uu.id INTO userid
FROM u_user uu
LEFT JOIN u_user_group uug ON uug.id_user = uu.id
WHERE uug.username = pin_username;
IF userid IS NOT NULL THEN
	SELECT MD5(CONCAT('AgusMerdekoLogin2017_', NOW(), generateId('tokenloginID'))) INTO webtoken;
	#UPDATE u_user SET token = webtoken WHERE id = userid;
	SELECT
		uu.id AS user_id,
		uu.nama AS nama,
		IF(uu.image IS NOT NULL,CONCAT('uploads/profile/',uu.image),NULL) AS profile_picture,
		uu.email AS email,
		webtoken AS token,
		uug.id_role AS id_role,
		ug.group AS name_role,
		uug.username AS username,
		uu.status_akses AS status_akses,
		tp.xs1 AS status_name,
		uug.password AS passwords,
		uu.last_activity AS last_activity,
		uu.last_activity_status AS last_activity_status,
		uu.token AS token_db,
		uu.lokasi AS idlokasi
	FROM u_user uu
	LEFT JOIN u_user_group uug ON uug.id_user = uu.id
	LEFT JOIN u_group ug ON ug.id = uug.id_role
	LEFT JOIN t_param tp ON tp.param_name = 'STATUS' AND tp.param_id = uu.status_akses
	WHERE uug.username = pin_username;
	
END IF;
END */$$
DELIMITER ;

/* Procedure structure for procedure `masterdata_list` */

/*!50003 DROP PROCEDURE IF EXISTS  `masterdata_list` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `masterdata_list`(
	IN pin_limit INT(11) ,
	IN pin_offset INT(11), 
	IN pin_order_column VARCHAR(255),
	IN pin_order_dir VARCHAR(4),
	IN pin_filter VARCHAR(255),
	OUT pout_total_filtered INT(11),
	OUT pout_total INT(11))
BEGIN
	# Default values
	IF pin_limit IS NULL THEN SET pin_limit = 10; END IF;
	IF pin_offset IS NULL THEN SET pin_offset = 0; END IF;
	IF pin_order_column IS NULL THEN SET pin_order_column = 1; END IF;
	IF pin_order_dir IS NULL THEN SET pin_order_dir = 'ASC'; END IF;
	
	IF pin_filter > '' THEN
		SET @l_where_clause = CONCAT(
		'WHERE
		( a.id LIKE ''%', pin_filter ,'%'' ',
		' OR a.kode_barang LIKE ''%', pin_filter ,'%'' ',
		' OR a.nama_barang LIKE ''%', pin_filter ,'%'' ',
		' OR b.stock LIKE ''%', pin_filter ,'%'' ',
		' OR c.harga LIKE ''%', pin_filter ,'%'' ',
		' OR d.`nama` LIKE ''%', pin_filter ,'%'') '		
		);
	ELSE
		SET @l_where_clause = '';
	END IF;
	
	# Query
	SET @l_sql =
		CONCAT(
			'SELECT a.id, a.kode_barang, a.nama_barang, a.disc,
				b.stock, a.harga, d.`nama` AS kategori
			FROM t_masterdata a
			LEFT JOIN t_stock b ON a.id = b.id
			LEFT JOIN t_kategory d ON a.`id_kategory` = d.`id`
			
			' , @l_where_clause , '
			ORDER BY ' , pin_order_column , ' ' , pin_order_dir , '
			LIMIT ? 
			OFFSET ?'
		);
	
	PREPARE l_stmt FROM @l_sql;
	SET 	@l_limit	= pin_limit;
	
	SET 	@l_offset	= pin_offset;
	EXECUTE  l_stmt USING @l_limit, @l_offset;
	
	# Total Count Query without limit and with filtering
		SELECT FOUND_ROWS()
			INTO pout_total_filtered;
			
		DEALLOCATE PREPARE l_stmt;
	# Total Count Query Without limit and without filtering
		SELECT COUNT(a.id)
			INTO pout_total
			FROM t_masterdata a
			LEFT JOIN t_stock b ON a.id = b.id
			LEFT JOIN t_kategory d ON a.`id_kategory` = d.`id`;
END */$$
DELIMITER ;

/* Procedure structure for procedure `users_lists_log` */

/*!50003 DROP PROCEDURE IF EXISTS  `users_lists_log` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `users_lists_log`(
	IN pin_limit INT(11) ,
	IN pin_offset INT(11), 
	IN pin_order_column VARCHAR(255),
	IN pin_order_dir VARCHAR(4),
	IN pin_filter VARCHAR(255),
	OUT pout_total_filtered INT(11),
	OUT pout_total INT(11))
BEGIN
	# Default values
	IF pin_limit IS NULL THEN SET pin_limit = 10; END IF;
	IF pin_offset IS NULL THEN SET pin_offset = 0; END IF;
	IF pin_order_column IS NULL THEN SET pin_order_column = 1; END IF;
	IF pin_order_dir IS NULL THEN SET pin_order_dir = 'ASC'; END IF;
	
	IF pin_filter > '' THEN
		SET @l_where_clause = CONCAT(
		'AND
		( uu.nama LIKE ''%', pin_filter ,'%'' ',
		' OR ug.group LIKE ''%', pin_filter ,'%'' ',
		' OR ual.activity_type LIKE ''%', pin_filter ,'%'' ',
		' OR ual.activity_desc LIKE ''%', pin_filter ,'%'') '		
		);
	ELSE
		SET @l_where_clause = '';
	END IF;
	
	# Query
	SET @l_sql =
		CONCAT(
			'SELECT SQL_CALC_FOUND_ROWS
				ual.log_id,
				ual.user_id,
				uu.nama,
				ug.group,
				ual.activity_type,
				ual.activity_desc,
				ual.object_name,
				ual.object_url,
				ual.activity_date
			FROM
				u_activity_log ual
			LEFT JOIN u_user uu ON uu.id = ual.user_id
			LEFT JOIN u_group ug ON ug.id = ual.user_role
			WHERE 1 = 1
			' , @l_where_clause , '
			ORDER BY ' , pin_order_column , ' ' , pin_order_dir , '
			LIMIT ? 
			OFFSET ?'
		);
	
	PREPARE l_stmt FROM @l_sql;
	SET 	@l_limit	= pin_limit;
	
	SET 	@l_offset	= pin_offset;
	EXECUTE  l_stmt USING @l_limit, @l_offset;
	
	# Total Count Query without limit and with filtering
		SELECT FOUND_ROWS()
			INTO pout_total_filtered;
			
		DEALLOCATE PREPARE l_stmt;
	# Total Count Query Without limit and without filtering
		SELECT COUNT(log_id)
			INTO pout_total
			FROM u_activity_log ;
END */$$
DELIMITER ;

/* Procedure structure for procedure `user_add` */

/*!50003 DROP PROCEDURE IF EXISTS  `user_add` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `user_add`(
					IN `pin_userid` INT(11),
					IN `pin_picture` VARCHAR(255),
					IN `pin_nama` VARCHAR(255),
					IN `pin_username` VARCHAR(100),
					IN `pin_email` VARCHAR(100),
					IN `pin_group` INT(11),
					IN `pin_password` VARCHAR(255),
					IN `pin_message` VARCHAR(255)
)
BEGIN
	DECLARE userid INT(11);
	DECLARE usernameid INT(11);
	DECLARE mailcode VARCHAR(255);
	
	SELECT MD5(CONCAT('RIZAL2018_', NOW(), generateId('tokenaddusrID'))) INTO mailcode;
	
	SELECT generateId('userID') INTO userid;
	SELECT generateId('usernameID') INTO usernameid;
	
	
	INSERT INTO u_user(
		id,
		nama,
		image,
		email,
		email_code,
		created_by,
		created_at,
		lokasi
	) VALUES(
		userid,
		pin_nama,
		pin_picture,
		pin_email,
		mailcode,
		pin_userid,
		NOW(),
		'1'
		
	);	
	
	INSERT INTO u_user_group(
		id,
		id_user,
		id_role,
		password,
		username,
		created_by,
		created_at
	) VALUES(
		usernameid,
		userid,
		pin_group,
		pin_password,
		pin_username,
		pin_userid,
		NOW()
	);
	
END */$$
DELIMITER ;

/* Procedure structure for procedure `user_lists` */

/*!50003 DROP PROCEDURE IF EXISTS  `user_lists` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `user_lists`(
	IN pin_limit INT(11) ,
	IN pin_offset INT(11), 
	IN pin_order_column VARCHAR(255),
	IN pin_order_dir VARCHAR(4),
	IN pin_filter VARCHAR(255),
	OUT pout_total_filtered INT(11),
	OUT pout_total INT(11))
BEGIN
	# Default values
	IF pin_limit IS NULL THEN SET pin_limit = 10; END IF;
	IF pin_offset IS NULL THEN SET pin_offset = 0; END IF;
	IF pin_order_column IS NULL THEN SET pin_order_column = 1; END IF;
	IF pin_order_dir IS NULL THEN SET pin_order_dir = 'ASC'; END IF;
	
	IF pin_filter > '' THEN
		SET @l_where_clause = CONCAT(
		'AND
		( uug.username LIKE ''%', pin_filter ,'%'' ',
		' OR us.nama LIKE ''%', pin_filter ,'%'' ',
		' OR ug.group LIKE ''%', pin_filter ,'%'' ',
		' OR us.email LIKE ''%', pin_filter ,'%'') '		
		);
	ELSE
		SET @l_where_clause = '';
	END IF;
	
	# Query
	SET @l_sql =
		CONCAT(
			'SELECT SQL_CALC_FOUND_ROWS
			us.id AS user_id,
			uug.id AS username_id,
			CONCAT("uploads/profile/",IFNULL(us.image, "user.png")) AS picture,
			uug.username,
			uug.id_role,
			ug.group,
			us.nama,
			us.email,
			us.status_akses,
			tps.param_value AS status_name,
			DATE_FORMAT(uug.created_at,"%d %M %Y, %T") AS created_at
			FROM
				u_user us
			LEFT JOIN
				u_user_group uug ON uug.id_user = us.id
			LEFT JOIN
				u_group ug ON ug.id = uug.id_role
			LEFT JOIN
				t_param tps ON tps.param_name = "STATUS" AND tps.param_id = us.status_akses
			WHERE
				us.id = uug.id_user
			' , @l_where_clause , '
			ORDER BY ' , pin_order_column , ' ' , pin_order_dir , '
			LIMIT ? 
			OFFSET ?'
		);
	
	PREPARE l_stmt FROM @l_sql;
	SET 	@l_limit	= pin_limit;
	
	SET 	@l_offset	= pin_offset;
	EXECUTE  l_stmt USING @l_limit, @l_offset;
	
	# Total Count Query without limit and with filtering
		SELECT FOUND_ROWS()
			INTO pout_total_filtered;
			
		DEALLOCATE PREPARE l_stmt;
	# Total Count Query Without limit and without filtering
		SELECT COUNT(id)
			INTO pout_total
			FROM u_user_group;
END */$$
DELIMITER ;

/* Procedure structure for procedure `user_list_name` */

/*!50003 DROP PROCEDURE IF EXISTS  `user_list_name` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `user_list_name`(
	IN pin_limit INT(11) ,
	IN pin_offset INT(11), 
	IN pin_order_column VARCHAR(255),
	IN pin_order_dir VARCHAR(4),
	IN pin_filter VARCHAR(255),
	OUT pout_total_filtered INT(11),
	OUT pout_total INT(11))
BEGIN
	# Default values
	IF pin_limit IS NULL THEN SET pin_limit = 10; END IF;
	IF pin_offset IS NULL THEN SET pin_offset = 0; END IF;
	IF pin_order_column IS NULL THEN SET pin_order_column = 1; END IF;
	IF pin_order_dir IS NULL THEN SET pin_order_dir = 'ASC'; END IF;
	
	IF pin_filter > '' THEN
		SET @l_where_clause = CONCAT(
		'AND
		( us.nama LIKE ''%', pin_filter ,'%'' ',
		' OR us.email LIKE ''%', pin_filter ,'%'') '		
		);
	ELSE
		SET @l_where_clause = '';
	END IF;
	
	# Query
	SET @l_sql =
		CONCAT(
			'SELECT SQL_CALC_FOUND_ROWS
			us.id AS user_id,
			CONCAT("uploads/profile/",IFNULL(us.image, "user.png")) AS picture,
			us.nama,
			us.email,
			DATE_FORMAT(us.created_at,"%d %M %Y, %T") AS created_at
			FROM
				u_user us
			WHERE
				us.status_akses = 1
			' , @l_where_clause , '
			ORDER BY ' , pin_order_column , ' ' , pin_order_dir , '
			LIMIT ? 
			OFFSET ?'
		);
	
	PREPARE l_stmt FROM @l_sql;
	SET 	@l_limit	= pin_limit;
	
	SET 	@l_offset	= pin_offset;
	EXECUTE  l_stmt USING @l_limit, @l_offset;
	
	# Total Count Query without limit and with filtering
		SELECT FOUND_ROWS()
			INTO pout_total_filtered;
			
		DEALLOCATE PREPARE l_stmt;
	# Total Count Query Without limit and without filtering
		SELECT COUNT(id)
			INTO pout_total
			FROM u_user
			WHERE status_akses = 1;
END */$$
DELIMITER ;

/* Procedure structure for procedure `user_reset_password` */

/*!50003 DROP PROCEDURE IF EXISTS  `user_reset_password` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `user_reset_password`(
					IN `pin_username` VARCHAR(255),
					IN `pin_password` VARCHAR(255),
					IN `pin_message` VARCHAR(255)
)
BEGIN
	DECLARE userid INT(11);
	DECLARE useremail VARCHAR(255);
	DECLARE mailcode VARCHAR(255);
	
	SELECT 
		uu.id, uu.email INTO userid, useremail
	FROM
		u_user uu
	LEFT JOIN
		u_user_group uug ON uug.id_user = uu.id
	WHERE
		uug.username = pin_username;	
	
	SELECT MD5(CONCAT('AgusMerdekoReset2017_', NOW(), generateId('tokenresetID'))) INTO mailcode;
	UPDATE u_user
	SET
		email_status		= 0,
		email_code		= mailcode,
		status_akses 		= 4,
		updated_at		= NOW()
	WHERE id = userid;	
	
	UPDATE u_user_group
	SET
		password		= pin_password,
		updated_at		= NOW()
	WHERE username = pin_username;	
	
	INSERT INTO t_antrian(
		TYPE,
		VALUE,
		deskripsi,
		xs1,
		STATUS,
		created_at
	) VALUES(
		'EMAIL_RESET',
		mailcode,
		pin_message,
		useremail,
		0,
		NOW()
	);	
END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
