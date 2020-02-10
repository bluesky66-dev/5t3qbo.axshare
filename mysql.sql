/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.4.8-MariaDB : Database - cvlink
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`cvlink` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `cvlink`;

/*Table structure for table `cv_files` */

DROP TABLE IF EXISTS `cv_files`;

CREATE TABLE `cv_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_type` varchar(8) DEFAULT NULL,
  `file_name` varchar(128) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `delete` varchar(128) DEFAULT NULL,
  `file_ext` varchar(32) DEFAULT NULL,
  `file_url` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=utf8mb4;

/*Data for the table `cv_files` */

insert  into `cv_files`(`id`,`file_type`,`file_name`,`create_time`,`delete`,`file_ext`,`file_url`) values 
(108,'video','mov_bbb.mp4','2020-02-05 08:54:21',NULL,'mp4',NULL),
(109,'doc','My CVLink Brief.pdf','2020-02-05 08:54:34',NULL,'pdf',NULL),
(110,'doc','My CVLink Brief.pdf','2020-02-05 09:01:36',NULL,'pdf',NULL),
(111,'doc','My CVLink Brief.pdf','2020-02-05 09:14:13',NULL,'pdf',NULL),
(113,'doc','My CVLink Brief.pdf','2020-02-05 09:18:50',NULL,'pdf',NULL),
(116,'','','2020-02-05 10:00:18',NULL,'',''),
(117,'doc','My CVLink Brief.pdf','2020-02-05 10:05:46',NULL,'','http://www.stilson.net/documentation/Professional%20WordPress,%202nd%20Edition.pdf'),
(118,'','','2020-02-05 10:05:46',NULL,'',''),
(119,'','','2020-02-05 10:05:50',NULL,'',''),
(120,'','','2020-02-05 10:05:50',NULL,'',''),
(121,'','','2020-02-05 10:05:50',NULL,'',''),
(122,'','','2020-02-05 10:05:50',NULL,'',''),
(126,'doc','www.doc','2020-02-06 02:51:24',NULL,'doc','VEN6TQJQFZWHBE7T.doc'),
(127,'doc','My CVLink Brief.pdf','2020-02-06 02:53:59',NULL,'pdf','AXBBMX66T5Q94ZDQ.pdf'),
(128,'doc','My CVLink Brief.pdf','2020-02-06 02:55:02',NULL,'pdf','JKXPVYXK5UNM7NR5.pdf'),
(129,'doc','My CVLink Brief.pdf','2020-02-06 03:34:59',NULL,'pdf','7QQYWX26GG8MMRM8.pdf'),
(130,'doc','My CVLink Brief.pdf','2020-02-06 03:35:00',NULL,'pdf','6DJC8YSZ89LYLN5S.pdf'),
(131,'doc','My CVLink Brief.pdf','2020-02-06 03:35:45',NULL,'pdf','JFX6PUVANCFXR2PA.pdf'),
(132,'doc','My CVLink Brief.pdf','2020-02-06 04:36:45',NULL,'pdf','7NH2CMES4VY2M2UA.pdf'),
(133,'doc','www.doc','2020-02-06 05:03:07',NULL,'doc','F2R7K28REH7595RJ.doc'),
(134,'doc','www.doc','2020-02-06 05:07:53',NULL,'doc','FKHJPQ6MK6KRDVET.doc'),
(135,'doc','www.doc','2020-02-06 05:08:53',NULL,'doc','HJS8V6EXTJKUS7NF.doc'),
(136,'doc','My CVLink Brief.pdf','2020-02-08 14:25:42',NULL,'pdf','3883SFQVDF63QUHW.pdf'),
(137,'doc','watch','2020-02-10 01:59:18',NULL,'','https://www.youtube.com/watch?v=IMF6M-0ZTOM'),
(138,'doc','AASEW63GQ44MGMU8.pdf','2020-02-10 02:00:48',NULL,'pdf','file:///E:/5t3qbo.axshare/uploads/doc/AASEW63GQ44MGMU8.pdf'),
(139,'doc','AASEW63GQ44MGMU8.pdf','2020-02-10 02:05:51',NULL,'pdf','file:///E:/5t3qbo.axshare/uploads/doc/AASEW63GQ44MGMU8.pdf'),
(140,'doc','AASEW63GQ44MGMU8.pdf','2020-02-10 02:09:39',NULL,'pdf','file:///E:/5t3qbo.axshare/uploads/doc/AASEW63GQ44MGMU8.pdf'),
(141,'doc','AASEW63GQ44MGMU8.pdf','2020-02-10 02:11:13',NULL,'pdf','file:///E:/5t3qbo.axshare/uploads/doc/AASEW63GQ44MGMU8.pdf'),
(142,'doc','AASEW63GQ44MGMU8.pdf','2020-02-10 02:15:14',NULL,'pdf','file:///E:/5t3qbo.axshare/uploads/doc/AASEW63GQ44MGMU8.pdf');

/*Table structure for table `home-address` */

DROP TABLE IF EXISTS `home-address`;

CREATE TABLE `home-address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `james-name` varchar(128) DEFAULT NULL,
  `url` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `home-address` */

/*Table structure for table `tbl_options` */

DROP TABLE IF EXISTS `tbl_options`;

CREATE TABLE `tbl_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(256) DEFAULT NULL,
  `value` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_options` */

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(64) NOT NULL,
  `f_name` varchar(128) DEFAULT NULL,
  `l_name` varchar(128) DEFAULT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(512) DEFAULT NULL,
  `user_liner` text DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `token` varchar(256) DEFAULT NULL,
  `verified` char(1) DEFAULT '0',
  `is_deleted` char(1) DEFAULT '0',
  PRIMARY KEY (`user_id`,`user_name`,`email`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`user_id`,`user_name`,`f_name`,`l_name`,`email`,`password`,`user_liner`,`create_time`,`create_by`,`update_time`,`update_by`,`token`,`verified`,`is_deleted`) values 
(5,'PrettyMickey','Pretty','Mickey','prettymickey@gmail.com','91e2cf1e3fd72dbbbcf28ac67352e044','Web, HTML','2020-02-04 05:32:25',NULL,'2020-02-04 05:32:25',NULL,'1580823145TU2E8BLGKRC45VJXDZ9KP3TGFQ8GHZ3V','1','0'),
(6,'MIckeyMickey','MIckey','Mickey','prettymickey1@gmail.com','cad56e45343bdf20ee358344d9bee121','Web, HTML','2020-02-06 01:25:50',NULL,'2020-02-06 01:25:50',NULL,'15809811507CTUMY63P8JS5JPVQ8DJDLFX4WZZURSV','1','0'),
(7,'PrettyMickey1','Pretty','Mickey','prettymickey2@gmail.com','4908064fd0db53673775e269342fbd5c','Web, HTML','2020-02-08 00:57:12',NULL,'2020-02-08 00:57:12',NULL,'158115223273CLQFXCKHNTJJJEQG497ZXEAVC79Y6Q','1','0'),
(8,'PrettyMickey2','Pretty','Mickey','prettymickey4@gmail.com','4908064fd0db53673775e269342fbd5c','Web, HTML','2020-02-08 01:17:46',NULL,'2020-02-08 01:17:46',NULL,'1581153466LRW5BKRHRNFF5XP5QM7CNL69BMD73CE5','0','0'),
(9,'PrettyMickey3','Pretty','Mickey','prettymickey6@gmail.com','4908064fd0db53673775e269342fbd5c','Web, HTML','2020-02-08 01:24:58',NULL,'2020-02-08 01:24:58',NULL,'1581153898L48RJKVB4CAPFFYAAQ8KARQBNWLPR3FH','0','0'),
(10,'PrettyMickey4','Pretty','Mickey','prettymickey3@gmail.com','4908064fd0db53673775e269342fbd5c','Web, HTML','2020-02-08 02:09:59',NULL,'2020-02-08 02:09:59',NULL,'1581156599B3L2DSC5ECUZJS2TJJBCUN52TAETS72Y','0','0'),
(11,'PrettyMickey5','Pretty','Mickey','prettymickey11@gmail.com','4908064fd0db53673775e269342fbd5c','Web, HTML','2020-02-08 02:22:27',NULL,'2020-02-08 02:22:27',NULL,'1581157347PDEAAVTYVV5KREW5UPT9GR3PL26HJ2SL','0','0'),
(12,'PrettyMickey6','Pretty','Mickey','prettymickey12@gmail.com','91e2cf1e3fd72dbbbcf28ac67352e044','Web, HTML','2020-02-08 03:44:40',NULL,'2020-02-08 03:44:40',NULL,'1581162280543EH9PEED77Q3SSTCH6QXL2RHMQEZ9Z','0','0'),
(13,'PrettyMickey7','Pretty','Mickey','prettymicke22y@gmail.com','91e2cf1e3fd72dbbbcf28ac67352e044','Web, HTML','2020-02-08 05:15:01',NULL,'2020-02-08 05:15:01',NULL,'1581167701FDCSMDJVW55DQVH4E2DE4QN4ML2SCTWC','0','0'),
(14,'PrettyMickey8','Pretty','Mickey','prettymickey34@gmail.com','f0c4b2473d1e381d41791e72c9bda168','Web, HTML','2020-02-08 05:25:41',NULL,'2020-02-08 05:25:41',NULL,'1581168341PLZQA9NH4W8SCE88B6Y4HLYSN5VC4E22','0','0'),
(15,'PrettyMickey9','Pretty','Mickey','prettymickey33@gmail.com','0b01362ba145f774aff77cb718bc629b','Web, HTML','2020-02-08 14:19:16',NULL,'2020-02-08 14:19:16',NULL,'15812003569F6ZJBH353XJFZYT26JY3N5H5NTHT6VA','0','0'),
(16,'PrettyMickey10','Pretty','Mickey','prettymickey44@gmail.com','91e2cf1e3fd72dbbbcf28ac67352e044','Web, HTML','2020-02-08 14:24:40',NULL,'2020-02-08 14:24:40',NULL,'15812006809F6Y99NJ927A9GHEQKTH9EJTZWT7BB9S','0','0'),
(17,'PrettyMickey11','Pretty','Mickey','prettymickey123@gmail.com','91e2cf1e3fd72dbbbcf28ac67352e044','Web, HTML','2020-02-08 14:37:23',NULL,'2020-02-08 14:37:23',NULL,'1581201443CDNELVJ2HZ7Q2RNSD2UT8JXKQJ3QBEUG','0','0'),
(18,'PrettyMickey12','Pretty','Mickey','prettymickey1234@gmail.com','0b01362ba145f774aff77cb718bc629b','Web, HTML','2020-02-09 06:11:14',NULL,'2020-02-09 06:11:14',NULL,'1581257474VYBWGFVUGWGY4HQA243FETFLSF3U5PUY','0','0'),
(19,'PrettyMickey13','Pretty','Mickey','prettymickeyqqq@gmail.com','9ccec72fbb08982e63deae11bca6d862','Web, HTML','2020-02-09 06:16:33',NULL,'2020-02-09 06:16:33',NULL,'1581257793P3QAL3S5AG7FTDVFK4NGQ55SB6KD9J35','0','0'),
(20,'PrettyMickey14','Pretty','Mickey','prettymickeyee@gmail.com','395181fa17a9b901bb9b0e1bfa6d42e2','Web, HTML','2020-02-09 06:21:24',NULL,'2020-02-09 06:21:24',NULL,'1581258084H885DM94DXKYSQZHDQUWX8DK4QPMJ7EP','0','0'),
(21,'PrettyMickey15','Pretty','Mickey','prettymickeyqwe@gmail.com','9ccec72fbb08982e63deae11bca6d862','Web, HTML','2020-02-09 06:27:25',NULL,'2020-02-09 06:27:25',NULL,'1581258445JE6GYWGW75ZU77XYJB88AF3AK8Y5DB2J','0','0'),
(22,'PrettyMickey16','Pretty','Mickey','prettymickeyqqqq@gmail.com','0b01362ba145f774aff77cb718bc629b','Web, HTML','2020-02-09 06:28:09',NULL,'2020-02-09 06:28:09',NULL,'15812584892W5XBZ8DC33RVVYDPQNFGHVE9KSHWHUX','0','0'),
(23,'PrettyMickey17','Pretty','Mickey','prettymickeyqwert@gmail.com','0b01362ba145f774aff77cb718bc629b','Web, HTML','2020-02-09 06:30:01',NULL,'2020-02-09 06:30:01',NULL,'158125860185KXWH9RLDLCFF828CMN29QG3C83ZUVN','0','0'),
(24,'PrettyMickey18','Pretty','Mickey','prettymickey12456@gmail.com','91e2cf1e3fd72dbbbcf28ac67352e044','Web, HTML','2020-02-09 06:34:38',NULL,'2020-02-09 06:34:38',NULL,'15812588788AAMV2CZ6984LB4WQVARRH8XQN95AJ63','0','0'),
(25,'PrettyMickey19','Pretty','Mickey','prettymickeyasd@gmail.com','f254d64eb0577e7a310c2a8376d69c97','Web, HTML','2020-02-09 06:36:33',NULL,'2020-02-09 06:36:33',NULL,'15812589937D3NCTUDBK3S75EK76ECYPNRB674JTGN','0','0'),
(26,'PrettyMickey20','Pretty','Mickey','prettymickezxcy@gmail.com','9ccec72fbb08982e63deae11bca6d862','Web, HTML','2020-02-09 06:37:23',NULL,'2020-02-09 06:37:23',NULL,'1581259043WLJ29JL6UFEJ644N36GYRZRVES92BXUR','0','0'),
(27,'PrettyMickey21','Pretty','Mickey','prettymickeysdf@gmail.com','91e2cf1e3fd72dbbbcf28ac67352e044','Web, HTML','2020-02-09 06:41:11',NULL,'2020-02-09 06:41:11',NULL,'15812592712YSEYD6DAXQDSX745P9K9J9KB45W4LJN','0','0'),
(28,'PrettyMickey22','Pretty','Mickey','prettymickeyasdg@gmail.com','9ccec72fbb08982e63deae11bca6d862','Web, HTML','2020-02-09 09:28:32',NULL,'2020-02-09 09:28:32',NULL,'1581269312U5DECPWX6FEN3NSUBAM7S8N3EG5EK67N','0','0'),
(29,'PrettyMickey23','Pretty','Mickey','prettymickeyfgh@gmail.com','91e2cf1e3fd72dbbbcf28ac67352e044','Web, HTML','2020-02-09 09:36:00',NULL,'2020-02-09 09:36:00',NULL,'1581269760YKK2XWLSNBPS5ZU8S6Y7LYC6XAAUPF6P','0','0');

/*Table structure for table `tbl_verify` */

DROP TABLE IF EXISTS `tbl_verify`;

CREATE TABLE `tbl_verify` (
  `user_id` int(11) NOT NULL,
  `verify_link` varchar(128) NOT NULL,
  `type` varchar(128) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_verify` */

insert  into `tbl_verify`(`user_id`,`verify_link`,`type`,`create_time`) values 
(5,'TETJRQ4UU4X7FK9FBP99S9U692P83U','PS','2020-02-09 17:51:11'),
(6,'PYLPUS3ZPJCRULJL9CLWWVQSAZTL2U','','2020-02-10 00:54:53'),
(8,'E394P9LKSAJJU2BNBR3HNSJCMJMBDD','RG','2020-02-08 01:17:46'),
(9,'9VDU6TLVWFG46KKHCZUJC5LCPX476T','RG','2020-02-08 01:24:58'),
(10,'ZLNKMFHR8NS99ZZHQSZFXT3MTWHJCK','RG','2020-02-08 02:09:59'),
(11,'RAR7MUBB6XA5RRBKVZVYEWEYLECVL4','RG','2020-02-08 02:22:27'),
(12,'W83UZEY2ZSVTV2HZQ94LHFQP9JND7C','RG','2020-02-08 03:44:40'),
(13,'QGFLTJRP3NP7KLC5UAKPR3D4JBSLYW','RG','2020-02-08 05:15:01'),
(14,'Q4QD999VET6TKS9GCX5KERQ9WDBXUJ','RG','2020-02-08 05:25:41'),
(15,'AW5EC58MXBQTLAH8RCN3A7R5K7QW45','RG','2020-02-08 14:19:16'),
(16,'7K4VT6C8F59RUTZPBK4TMP8SRKTLHW','RG','2020-02-08 14:24:40'),
(17,'QGQWXYED46UUKUWJ84DRGQRWCPZVLF','RG','2020-02-08 14:37:23'),
(18,'5RLD4T32DXXKC67U5MR7UXW7AUTHJA','RG','2020-02-09 06:11:15'),
(19,'WWBZABED2JRD7MF3JUCR8R73BGBWJ8','RG','2020-02-09 06:16:33'),
(20,'U5E9ZAWWG9H6MNGTVB2U3NUX5P8WBX','RG','2020-02-09 06:21:24'),
(21,'LDS8JD2BE6LMZZ6MRLSSGEMCQDAAQD','RG','2020-02-09 06:27:25'),
(22,'ZQ4Z2AGE8JH22UE8ZL6558AEKTNE47','RG','2020-02-09 06:28:09'),
(23,'WEQTDCM56MPKT7EXV498EQJW34CYFP','RG','2020-02-09 06:30:01'),
(24,'B4GAGPXAMPJTY7R5GK2MQMFKD2A88V','RG','2020-02-09 06:34:38'),
(25,'WNZ82LJUGEF3NM5CC8F28M9NDBACCM','RG','2020-02-09 06:36:34'),
(26,'ZQVQJ7W762UNMA6RLZRTWE6SVGHVZD','RG','2020-02-09 06:37:24'),
(27,'6GD2MSDGAJCBE74NJL4QFT34A68R63','RG','2020-02-09 06:41:11'),
(28,'DWWV7MDNN9UK3EZCCYJ4RV84Y93W5Y','RG','2020-02-09 09:28:32'),
(29,'Q7ZTTYQ67DY69HYCYWYV9PE2NCH5ZL','RG','2020-02-09 09:36:00'),
(5,'FXKLJ59JPJRX79R3QUFZ9WSPVPE3HX','','2020-02-10 01:11:50'),
(5,'LW98AW3CUR8HTDF4Q7BX49AW4244KW','','2020-02-10 01:11:58'),
(5,'JVDWDGJ8ZMC6UDU3VMPTGT8KALJ6DG','','2020-02-10 01:12:52'),
(5,'8YBSXSZ4TVAWLN9C3JQBZXCDZPQWFL','','2020-02-10 01:13:00'),
(0,'$usVerify_link','$type','2020-02-10 01:15:04'),
(5,'PFE88EV3NSDJYZMUMRESLJDH53R7N6','','2020-02-10 01:18:05'),
(5,'PFE88EV3NSDJYZMUMRESLJDH53R7N6','','2020-02-10 01:18:57'),
(5,'6XT4HSVX52PVFN56JE23MEEHBQ72RV','','2020-02-10 01:20:20'),
(5,'HFE2UFEDAAVCUZYZE2K358SVFQS234','','2020-02-10 01:20:53');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
