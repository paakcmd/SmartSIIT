CREATE DATABASE  IF NOT EXISTS `senior_project` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `senior_project`;
-- MySQL dump 10.13  Distrib 5.6.24, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: senior_project
-- ------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `broken_equipment`
--

DROP TABLE IF EXISTS `broken_equipment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `broken_equipment` (
  `equipment_ID` int(11) NOT NULL AUTO_INCREMENT,
  `equipment_name` varchar(255) DEFAULT NULL,
  `equipment_campus` varchar(255) DEFAULT NULL,
  `equipment_building` varchar(255) DEFAULT NULL,
  `equipment_room` varchar(255) DEFAULT NULL,
  `equipment_decription` varchar(255) DEFAULT NULL,
  `equipment_username` varchar(255) DEFAULT NULL,
  `equipment_email` varchar(255) DEFAULT NULL,
  `equipment_latitute` int(11) DEFAULT NULL,
  `equipment_longtitute` int(11) DEFAULT NULL,
  `equipment_photo` varchar(255) DEFAULT NULL,
  `equipment_assign` int(11) NOT NULL DEFAULT '0',
  `equipment_status` varchar(255) NOT NULL DEFAULT 'Waiting',
  `equipment_date_s` date NOT NULL,
  `equipment_date_f` date DEFAULT NULL,
  PRIMARY KEY (`equipment_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `broken_equipment`
--

LOCK TABLES `broken_equipment` WRITE;
/*!40000 ALTER TABLE `broken_equipment` DISABLE KEYS */;
INSERT INTO `broken_equipment` VALUES (1,'Table','BKD','Sirin','3207','fioewnfjewifj','Someone','kdfoekwf@gmail.com',NULL,NULL,NULL,12,'Finish','2017-01-03','2017-04-04'),(2,'Table','BKD','Sirin','3207','It broke','Napawat','fjisaj@gmail.com',NULL,NULL,NULL,12,'Finish','2017-04-04','2017-05-17'),(3,'aaaaaaaaaaaa','aaaaaaa','aaaaaaa','3333','aaaaaa','aaaaa','oatoat@apinatmail.com',NULL,NULL,'resource/report_picture/pso20150722_200943_006.png',12,'In_Progress','2017-04-04','0000-00-00'),(4,'สายชำระ','BKD','IT','','2024','Peerawas','Aleaz@hotmail.com',NULL,NULL,'resource/report_picture/image.jpg',12,'Finish','2017-05-09','2017-05-09'),(5,'Fan','Bkd','It&mt','2503','Broken','Peerawas','Peerawas@hotmail.com',NULL,NULL,'resource/report_picture/_2017-05-17_13_14_51.image.jpg',12,'In_Progress','2017-05-17','0000-00-00'),(6,'Chair','BKD','IT&MT','2501','Broken','Napawat','apinat@oatmail.com',NULL,NULL,'resource/report_picture/_2017-05-17_14_47_04.C1aeGEMUcAAeDmH.jpg',12,'Out_Source','2017-05-17','2017-05-17'),(7,'Table','Bangkadi','IT&MT','3020','broken','Peerawas','ake@hotmail.com',NULL,NULL,'resource/report_picture/_2017-05-17_15_00_17.pso20150722_200353_000.png',12,'In_Progress','2017-05-17','2017-05-17'),(8,'Fan','Bangkadi','Itmt','2503','Broken','Pee','Pee@hotmail.com',NULL,NULL,'resource/report_picture/_2017-05-21_12_06_59.image.jpg',4,'Waiting','2017-05-21','2017-05-21'),(9,'พัดลม','Bangkadi','หลัก','2507','ไม่มา','เอก','aaa@aa.com',NULL,NULL,'resource/report_picture/_2017-05-21_12_13_49.image.jpeg',4,'Waiting','2017-05-21','2017-05-21'),(10,'aa aa','Bangkadi','หลัก','2507','ไม่มี','ไม่มี ไม่มี','aaa@aa.aa.aa',NULL,NULL,'resource/report_picture/_2017-05-21_12_16_43.pso20161225_022951_000.png',4,'In_Progress','2017-05-21','2017-05-21'),(11,'adsadsa','Rangsit','dsadsdsa','3223','ewqeqw','edwew','ake@hotmail.com',NULL,NULL,'resource/report_picture/_2017-05-21_12_33_11.JPEG_example_JPG_RIP_025.jpg',4,'Finish','2017-05-21','2017-05-21'),(12,'fghjklfghj','Rangsit','fdfd','3232','ddddssd','www','ake@hotmail.com',NULL,NULL,'resource/report_picture/_2017-05-21_12_36_45.JPEG_example_JPG_RIP_025.jpg',4,'Finish','2017-05-21','2017-05-21'),(13,'ประตู','Bangkadi','ีีIT&MT','2031','ประตูหัก','Komkla','komkla@hotmail.com',NULL,NULL,'resource/report_picture/_2017-05-21_13_41_31.JPEG_example_JPG_RIP_025.jpg',4,'Finish','2017-05-21','2017-05-22'),(14,'Projector','Bangkadi','Main','2506','It not work','Napawat Piyasiranunda','napawat@siit.mail.com',NULL,NULL,'resource/report_picture/_2017-05-22_02_59_55.acer-a1500-400.jpg',0,'Waiting','2017-05-22',NULL),(15,'Chair','Rangsit','IT&MT','2222','broken','peerawas','ake@hotmail.com',NULL,NULL,'resource/report_picture/_2017-05-22_03_48_05.13124872_594455060728882_3003897837132233.jpg',7,'Finish','2017-05-22','2017-05-22');
/*!40000 ALTER TABLE `broken_equipment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_information`
--

DROP TABLE IF EXISTS `data_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_information` (
  `data_no` int(11) NOT NULL AUTO_INCREMENT,
  `data_date` date NOT NULL,
  `data_distance` int(11) NOT NULL,
  `data_passanger` int(11) NOT NULL,
  `data_from` varchar(255) CHARACTER SET utf8 NOT NULL,
  `data_to` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `driver_no` int(11) NOT NULL,
  `driver_van_num` int(11) NOT NULL,
  PRIMARY KEY (`data_no`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_information`
--

LOCK TABLES `data_information` WRITE;
/*!40000 ALTER TABLE `data_information` DISABLE KEYS */;
INSERT INTO `data_information` VALUES (1,'2017-05-21',10,13,'BKD','Kino',6,2),(2,'2017-05-22',20,14,'Rangsit','Bangkadi',8,3),(3,'2017-05-22',20,13,'บางกะดี','รังสิต',6,2);
/*!40000 ALTER TABLE `data_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `driver`
--

DROP TABLE IF EXISTS `driver`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `driver` (
  `driver_no` int(11) NOT NULL AUTO_INCREMENT,
  `driver_position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`driver_no`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `driver`
--

LOCK TABLES `driver` WRITE;
/*!40000 ALTER TABLE `driver` DISABLE KEYS */;
INSERT INTO `driver` VALUES (1,'Driver',1),(2,'Driver',3),(3,'Driver',5),(4,'Driver',6),(5,'Driver',7),(6,'Driver',8),(7,'Driver',2),(8,'Driver',10);
/*!40000 ALTER TABLE `driver` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `member_tier` varchar(255) CHARACTER SET utf8 DEFAULT 'Normal User',
  `member_tele` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `member_pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'resource/profile_picture/user2-160x160.gif',
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES (0,'Admin','admin','f25d2ea041b332f0001ed83c2a4b3105','siit@siit.tu.ac.th','Admin','(222) 222-2223','\'resource/profile_picture/user2-160x160.gif\''),(1,'Kitipol Sutayasaranakom','admin01','f25d2ea041b332f0001ed83c2a4b3105','kitipol@siit.tu.ac.th','Admin_van','(089) 518-5991','\'resource/profile_picture/user2-160x160.gif\''),(2,'Jedsada Sangnak','jedsada','fcea920f7412b5da7be0cf42b8c93759','jedsada@siit.tu.ac.th','Driver','(081) 823-4972','\'resource/profile_picture/user2-160x160.gif\''),(3,'Mr. Suriyan','driver','e10adc3949ba59abbe56e057f20f883e','aaaaa@aaa.com','Driver','(081) 234-5678','\'resource/profile_picture/user2-160x160.gif\''),(4,'Somchai','Somchai','f25d2ea041b332f0001ed83c2a4b3105','somchai@tu.ac.th','Technician','(087) 111-2222','\'resource/profile_picture/user2-160x160.gif\''),(5,'Apinat Poungnil','apinat33198','d47b0dc690cec12713277157861b4a43','apinat_non@hotmail.com','Admin_van','(085) 444-5390','\'resource/profile_picture/user2-160x160.gif\''),(6,'Peerawas','Peerawas','f25d2ea041b332f0001ed83c2a4b3105','akeaz@hotmail.com','Admin_tech','(089) 114-4738','\'resource/profile_picture/user2-160x160.gif\''),(7,'Napawat Piyasiranunda','napawat','e10adc3949ba59abbe56e057f20f883e','napawat2@hotmail.com','Technician','(081) 111-1111','resource/profile_picture/Accident.png'),(8,'Krissada Kiatthanawit','hotorin','023ecda81d6b8a461970ca8dc81ab42e','senshimeseira@gmail.com','Driver','(086) 311-8879','resource/profile_picture/Untitled.png'),(9,'Firstname Lastname','member001','f25d2ea041b332f0001ed83c2a4b3105','siit@tu.ac.th','Normal User','(111) 111-1111','resource/profile_picture/Untitled.png'),(10,'Chawalit aaaa','driver01','f25d2ea041b332f0001ed83c2a4b3105','aaa@aaa.aa.com','Driver','(123) 456-7890','resource/profile_picture/user2-160x160.gif');
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `request` (
  `request_no` int(11) NOT NULL AUTO_INCREMENT,
  `request_date` date DEFAULT NULL,
  `request_from` time DEFAULT NULL,
  `request_to` time DEFAULT NULL,
  `request_to_place` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `request_description` longtext COLLATE utf8_unicode_ci,
  `request_approve` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'Waiting',
  `request_assign` int(11) DEFAULT NULL,
  `request_assign_by` int(11) DEFAULT NULL,
  `request_by` int(11) DEFAULT NULL,
  `request_comment` longtext COLLATE utf8_unicode_ci,
  `request_status` int(11) NOT NULL DEFAULT '0',
  `request_mile` int(11) DEFAULT NULL,
  `request_passenger` int(11) DEFAULT NULL,
  `request_init_place` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`request_no`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `request`
--

LOCK TABLES `request` WRITE;
/*!40000 ALTER TABLE `request` DISABLE KEYS */;
INSERT INTO `request` VALUES (1,'2017-05-21','09:00:00','11:00:00','Kino Kuniya','ซื้อหนังสือ','Accepted',2,0,9,'',2,10,13,'BKD'),(2,'2017-05-22','09:00:00','11:00:00','บางกะดี','Presented Senior Project','Accepted',2,0,9,'',0,NULL,NULL,NULL),(3,'2017-05-21','06:00:00','08:00:00','Lad Prao','รับส่งบุคลากรในมหาวิทยาลัย','Accepted',2,0,0,NULL,0,NULL,NULL,NULL),(4,'2017-05-22','06:00:00','08:00:00','Lad Prao','รับส่งบุคลากรในมหาวิทยาลัย','Accepted',2,0,0,NULL,0,NULL,NULL,NULL),(5,'2017-05-23','06:00:00','08:00:00','Lad Prao','รับส่งบุคลากรในมหาวิทยาลัย','Accepted',2,0,0,NULL,0,NULL,NULL,NULL),(6,'2017-05-24','06:00:00','08:00:00','Lad Prao','รับส่งบุคลากรในมหาวิทยาลัย','Accepted',2,0,0,NULL,0,NULL,NULL,NULL),(7,'2017-05-25','06:00:00','08:00:00','Lad Prao','รับส่งบุคลากรในมหาวิทยาลัย','Accepted',2,0,0,NULL,0,NULL,NULL,NULL),(8,'2017-05-26','06:00:00','08:00:00','Lad Prao','รับส่งบุคลากรในมหาวิทยาลัย','Accepted',2,0,0,NULL,0,NULL,NULL,NULL),(9,'2017-05-27','06:00:00','08:00:00','Lad Prao','รับส่งบุคลากรในมหาวิทยาลัย','Accepted',2,0,0,NULL,0,NULL,NULL,NULL),(10,'2017-05-28','06:00:00','08:00:00','Lad Prao','รับส่งบุคลากรในมหาวิทยาลัย','Accepted',2,0,0,NULL,0,NULL,NULL,NULL),(11,'2017-05-29','06:00:00','08:00:00','Lad Prao','รับส่งบุคลากรในมหาวิทยาลัย','Accepted',2,0,0,NULL,0,NULL,NULL,NULL),(12,'2017-05-30','06:00:00','08:00:00','Lad Prao','รับส่งบุคลากรในมหาวิทยาลัย','Accepted',2,0,0,NULL,0,NULL,NULL,NULL),(13,'2017-05-31','06:00:00','08:00:00','Lad Prao','รับส่งบุคลากรในมหาวิทยาลัย','Accepted',2,0,0,NULL,0,NULL,NULL,NULL),(14,'2017-05-22','15:00:00','16:00:00','รังสิต','รับส่งนักศึกษา','Waiting',2,0,0,NULL,2,20,13,'บางกะดี'),(15,'2017-05-25','06:00:00','09:00:00','ปรากกร็ด','รังส่งบุลากร','Accepted',1,0,0,NULL,0,NULL,NULL,NULL),(16,'2017-05-26','06:00:00','09:00:00','ปรากกร็ด','รังส่งบุลากร','Accepted',1,0,0,NULL,0,NULL,NULL,NULL),(17,'2017-05-27','06:00:00','09:00:00','ปรากกร็ด','รังส่งบุลากร','Accepted',1,0,0,NULL,0,NULL,NULL,NULL),(18,'2017-05-28','06:00:00','09:00:00','ปรากกร็ด','รังส่งบุลากร','Accepted',1,0,0,NULL,0,NULL,NULL,NULL),(19,'2017-05-29','06:00:00','09:00:00','ปรากกร็ด','รังส่งบุลากร','Accepted',1,0,0,NULL,0,NULL,NULL,NULL),(20,'2017-05-30','06:00:00','09:00:00','ปรากกร็ด','รังส่งบุลากร','Accepted',1,0,0,NULL,0,NULL,NULL,NULL),(21,'2017-05-22','09:00:00','11:00:00','Bangkadi','Presentation AD BKD','Accepted',3,0,9,'Accepted ',2,20,14,'Rangsit'),(22,'2017-05-22','14:00:00','16:00:00','aaaaa','aaaa','Waiting',NULL,NULL,9,NULL,0,NULL,NULL,NULL);
/*!40000 ALTER TABLE `request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stock` (
  `stock_id` int(11) NOT NULL AUTO_INCREMENT,
  `stock_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stock_total` int(11) DEFAULT NULL,
  `stock_lot` date DEFAULT NULL,
  `stock_docnum` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stock_price` int(11) DEFAULT NULL,
  `stock_com` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stock_place` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stock_totalp` int(11) DEFAULT NULL,
  PRIMARY KEY (`stock_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stock`
--

LOCK TABLES `stock` WRITE;
/*!40000 ALTER TABLE `stock` DISABLE KEYS */;
INSERT INTO `stock` VALUES (1,'กระดาษชำระ',10,'2017-05-24','032323',556,'SOS','Rangsit',32271),(2,'กระดาษ',50,'2017-05-09','22222',2222222,'sss','Rangsit',222),(3,'กาวยาง',10,'2017-05-29','2020',2121,'dwdd','Rangsit',2121),(4,'กาวกำจัดหนู',19,'2017-05-16','swdsw2',233,'fdfdd','Bangkadi',32),(5,'ไขควงหัวแบน',33,'2017-05-21','3232',3232,'fefeds','Bangkadi',12),(6,'ไขควง(ชุดดอก)',10,'2017-05-23','23223',3223,'2323','Rangsit',3223),(7,'ค้อนหงอน-ด้ามไม้',160,'2017-05-22','4243',42342,'4232','Rangsit',2332),(8,'แจ็คโทรศัพท์ J-4P8',85,'2017-05-28','23232',445,'33','Bangkadi',322),(9,'แจ็คต่อกลาง',25,'2017-05-22','csdsds',45,'vdvdfd','Rangsit',479),(10,'โช้ค',21,'2017-05-15','fdfsd',4343,'fdsfsdsd','Bangkadi',2121),(11,'ดาวน์ไลท์ ',42,'2017-05-02','234',121,'ewdw','Rangsit',21232),(12,'ตะปูยิงรีเวท',61,'2017-05-22','sdfg',23,'dsdas','Rangsit',2121),(13,'ถ่าน AA',19,'2017-05-01','22',32323,'dfsaadsfs','Rangsit',3232),(14,'เทปพันเกลียว',12,'2017-05-10','fggdfg',12,'dfdsfs','Rangsit',32),(15,'ตะปู',300,'2017-05-23','00002',10,'ตะปูการช่าง','Rangsit',3000);
/*!40000 ALTER TABLE `stock` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stock_history`
--

DROP TABLE IF EXISTS `stock_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stock_history` (
  `history_id` int(11) NOT NULL AUTO_INCREMENT,
  `stock_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stock_total` int(11) NOT NULL,
  `stock_lot` date NOT NULL,
  `stock_staff` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stock_date` date NOT NULL,
  PRIMARY KEY (`history_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stock_history`
--

LOCK TABLES `stock_history` WRITE;
/*!40000 ALTER TABLE `stock_history` DISABLE KEYS */;
INSERT INTO `stock_history` VALUES (1,'แจ็คโทรศัพท์ J-4P8',1,'2017-05-28','Peerawas','2017-05-21'),(2,'ค้อนหงอน-ด้ามไม้',5,'2017-05-22','Peerawas','2017-05-21'),(3,'แจ็คโทรศัพท์ J-4P8',5,'2017-05-28','Peerawas','2017-05-21'),(4,'ค้อนหงอน-ด้ามไม้',5,'0000-00-00','Peerawas','0000-00-00'),(5,'ไขควง(ชุดดอก)',3,'2017-05-23','Peerawas','2017-05-21'),(6,'ค้อนหงอน-ด้ามไม้',5,'2017-05-22','Peerawas','2017-05-21'),(7,'กระดาษชำระ',3,'2017-05-24','Napawat Piyasiranunda','2017-05-21'),(8,'กระดาษ',5,'2017-05-09','Napawat Piyasiranunda','2017-05-21'),(9,'กระดาษชำระ',10,'2017-05-24','Admin','2017-05-22'),(10,'กระดาษ',10,'2017-05-09','Admin','2017-05-22'),(11,'กาวยาง',11,'2017-05-29','Admin','2017-05-22'),(12,'แจ็คต่อกลาง',1,'2017-05-22','Admin','2017-05-22');
/*!40000 ALTER TABLE `stock_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `van`
--

DROP TABLE IF EXISTS `van`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `van` (
  `van_no` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'Rangsit',
  `status` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'Free',
  `driver_no` int(11) NOT NULL COMMENT 'driver_no = memer_no (membr table)',
  `current_location` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Rangsit',
  `request_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No requested',
  `van_license_plate` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`van_no`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `van`
--

LOCK TABLES `van` WRITE;
/*!40000 ALTER TABLE `van` DISABLE KEYS */;
INSERT INTO `van` VALUES (1,'Bangkadi','Free',2,'Rangsit','No requested','AA-8888'),(2,'Rangsit','Free',6,'Rangsit','No requested','AA-2222'),(3,'Bangkadi','Free',8,'Rangsit','No requested','สร-1123');
/*!40000 ALTER TABLE `van` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'senior_project'
--

--
-- Dumping routines for database 'senior_project'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-15 23:14:49
