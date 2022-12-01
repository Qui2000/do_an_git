-- MySQL dump 10.13  Distrib 8.0.31, for Linux (x86_64)
--
-- Host: localhost    Database: test
-- ------------------------------------------------------
-- Server version	8.0.31-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `chi_tiet_dat_san`
--

DROP TABLE IF EXISTS `chi_tiet_dat_san`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chi_tiet_dat_san` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ma_dat_san` int DEFAULT NULL,
  `ma_san` int unsigned NOT NULL,
  `khung_gio` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ma_loai_dv` int NOT NULL,
  `so_luong_dv` int DEFAULT NULL,
  `ngay_gio_huy` date DEFAULT NULL,
  `ngay_su_dung` date DEFAULT NULL,
  `gia_tien` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ma_tk` int DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `ma_tk` (`ma_tk`) USING BTREE,
  KEY `ma_san` (`ma_san`) USING BTREE,
  KEY `ma_loai_dv` (`ma_loai_dv`) USING BTREE,
  CONSTRAINT `chi_tiet_dat_san_ibfk_1` FOREIGN KEY (`ma_san`) REFERENCES `san` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `chi_tiet_dat_san_ibfk_2` FOREIGN KEY (`ma_loai_dv`) REFERENCES `dich_vu` (`ma_loai_dv`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chi_tiet_dat_san`
--

LOCK TABLES `chi_tiet_dat_san` WRITE;
/*!40000 ALTER TABLE `chi_tiet_dat_san` DISABLE KEYS */;
INSERT INTO `chi_tiet_dat_san` VALUES (3,2102011816,4,'17',1,12,'2022-01-06','2021-12-30',420000.00,'2021-12-30 06:18:51','2022-01-06 00:51:28',1),(5,1807000832,3,'23',2,10,NULL,'2021-12-30',410000.00,'2021-12-30 06:20:34','2021-12-30 06:20:34',3),(6,1509485703,1,'16',1,12,NULL,'2022-01-01',400000.00,'2021-12-30 17:37:38','2021-12-30 17:37:38',5),(7,3869,3,'6',2,12,NULL,'2022-01-04',280000.00,'2022-01-04 00:42:10','2022-01-04 00:42:10',1),(8,6587,1,'5',2,12,NULL,'2022-01-04',280000.00,'2022-01-04 00:42:10','2022-01-04 00:42:10',1),(9,4603,1,'5',1,12,'2022-01-06','2022-01-06',340000.00,'2022-01-05 22:33:24','2022-01-06 00:30:30',1),(10,2765,1,'17',1,12,NULL,'2022-01-06',420000.00,'2022-01-06 00:07:47','2022-01-06 00:07:47',1),(11,2102011816,4,'17',1,12,'2022-01-06','2021-12-30',420000.00,'2022-01-06 00:30:19','2022-01-06 00:55:08',1),(13,3921,1,'6',2,10,NULL,'2022-01-07',270000.00,'2022-01-06 16:24:13','2022-01-06 16:54:14',1),(15,3921,1,'17',1,8,NULL,'2022-01-07',380000.00,'2022-01-06 16:24:13','2022-01-06 16:24:13',1),(16,2608,1,'16',1,12,NULL,'2022-01-08',400000.00,'2022-01-06 16:55:57','2022-01-06 16:55:57',1),(17,9295,1,'17',2,5,NULL,'2022-01-09',325000.00,'2022-01-06 16:55:57','2022-01-06 19:08:26',1),(18,9295,1,'18',1,8,NULL,'2022-01-09',400000.00,'2022-01-06 16:55:57','2022-01-06 16:55:57',1),(19,6610,1,'5',1,12,NULL,'2022-01-01',340000.00,'2022-01-06 16:58:15','2022-01-06 16:58:15',1),(20,6610,1,'6',2,10,NULL,'2022-01-01',270000.00,'2022-01-06 16:58:15','2022-01-06 16:58:15',1),(21,6610,1,'7',2,8,NULL,'2022-01-01',260000.00,'2022-01-06 16:58:15','2022-01-06 16:58:15',1),(22,6610,1,'8',2,12,NULL,'2022-01-01',280000.00,'2022-01-06 16:58:15','2022-01-06 16:58:15',1),(23,6610,1,'9',2,7,NULL,'2022-01-01',255000.00,'2022-01-06 16:58:15','2022-01-06 16:58:15',1),(24,5789,1,'5',1,12,NULL,'2022-01-07',340000.00,'2022-01-06 18:46:38','2022-01-06 18:46:38',1),(25,1906,1,'7',2,12,NULL,'2022-01-07',280000.00,'2022-01-06 18:51:45','2022-01-06 18:51:45',1),(26,1906,1,'8',1,12,NULL,'2022-01-07',340000.00,'2022-01-06 18:51:45','2022-01-06 18:51:45',1),(27,9984,1,'5',1,12,NULL,'2022-01-10',340000.00,'2022-01-09 18:11:20','2022-01-09 18:11:20',1),(28,4970,1,'6',1,12,NULL,'2022-01-10',340000.00,'2022-01-09 18:11:20','2022-01-09 18:11:20',1),(30,9803,1,'6',2,10,'2022-01-11','2022-01-11',270000.00,'2022-01-10 20:54:27','2022-01-10 21:56:50',1),(31,9803,1,'7',1,8,NULL,'2022-01-11',300000.00,'2022-01-10 20:54:27','2022-01-10 20:54:27',1),(32,3055,1,'8',1,12,NULL,'2022-01-11',340000.00,'2022-01-10 21:56:34','2022-01-10 21:56:34',1),(34,7853,1,'5',2,12,NULL,'2022-01-17',260000.00,'2022-01-17 00:30:04','2022-01-17 00:30:04',1),(35,4005,1,'5',1,20,NULL,'2022-01-17',400000.00,'2022-01-17 00:32:35','2022-01-17 00:32:35',14),(36,4474,6,'7',2,10,NULL,'2022-01-18',270000.00,'2022-01-17 02:01:36','2022-01-17 02:01:36',15),(37,3336,1,'5',1,3,NULL,'2022-01-17',230000.00,'2022-01-17 02:23:39','2022-01-17 02:23:39',16),(38,5354,1,'6',1,12,NULL,'2022-01-17',340000.00,'2022-01-17 03:02:11','2022-01-17 03:02:11',1),(39,4074,1,'7',2,0,NULL,'2022-01-17',220000.00,'2022-01-17 03:39:41','2022-01-17 03:39:41',25),(40,2417,5,'22',2,8,NULL,'2022-01-17',400000.00,'2022-01-17 05:52:14','2022-01-17 05:52:14',17),(41,5091,1,'5',1,12,NULL,'2022-01-18',320000.00,'2022-01-18 01:37:54','2022-01-18 01:37:54',1),(42,5170,1,'5',1,12,NULL,'2022-01-19',320000.00,'2022-01-19 06:36:47','2022-01-19 06:36:47',1),(43,9954,1,'5',1,9,NULL,'2022-01-19',290000.00,'2022-01-19 06:49:09','2022-01-19 06:49:09',29),(44,9000,3,'6',2,6,NULL,'2022-01-19',250000.00,'2022-01-19 06:49:09','2022-01-19 06:49:09',29),(45,2598,1,'5',2,12,NULL,'2022-01-20',260000.00,'2022-01-19 19:28:49','2022-01-19 19:28:49',1),(50,7931,3,'16',2,12,NULL,'2022-02-17',340000.00,'2022-02-17 06:26:04','2022-02-17 06:26:04',3),(52,4547,3,'17',2,12,NULL,'2022-02-17',360000.00,'2022-02-17 06:38:17','2022-02-17 06:38:17',3),(53,3496,3,'21',2,12,NULL,'2022-02-17',400000.00,'2022-02-17 06:47:41','2022-02-17 06:47:41',3),(54,3496,3,'22',1,12,NULL,'2022-02-17',480000.00,'2022-02-17 06:47:41','2022-02-17 06:47:41',3),(55,3496,3,'23',1,12,NULL,'2022-02-17',480000.00,'2022-02-17 06:47:41','2022-02-17 06:47:41',3),(56,3663,1,'16',2,10,NULL,'2022-02-18',330000.00,'2022-02-17 17:38:35','2022-02-17 17:38:35',1),(57,3663,1,'17',2,10,NULL,'2022-02-18',350000.00,'2022-02-17 17:38:35','2022-02-17 17:38:35',1),(58,3663,1,'18',2,10,NULL,'2022-02-18',370000.00,'2022-02-17 17:38:35','2022-02-17 17:38:35',1),(59,1208,1,'5',1,11,NULL,'2022-11-30',310000.00,'2022-11-30 01:16:24','2022-11-30 01:16:24',10),(60,9843,12,'5',1,10,'2022-12-01','2022-12-01',300000.00,'2022-11-30 23:41:28','2022-11-30 23:42:58',10);
/*!40000 ALTER TABLE `chi_tiet_dat_san` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dat_san`
--

DROP TABLE IF EXISTS `dat_san`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dat_san` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ma_tk` int NOT NULL,
  `ngay_dat` date NOT NULL,
  `ten_nguoi_dat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt_nguoi_dat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_trang_thai` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`ma_tk`) USING BTREE,
  KEY `ma_tk` (`ma_tk`) USING BTREE,
  KEY `ma_trang_thai` (`ma_trang_thai`) USING BTREE,
  KEY `ma_tk_2` (`ma_tk`) USING BTREE,
  CONSTRAINT `dat_san_ibfk_1` FOREIGN KEY (`ma_tk`) REFERENCES `tai_khoan` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `ma_trang_thai` FOREIGN KEY (`ma_trang_thai`) REFERENCES `trang_thai_dat_san` (`ma_trang_thai`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dat_san`
--

LOCK TABLES `dat_san` WRITE;
/*!40000 ALTER TABLE `dat_san` DISABLE KEYS */;
INSERT INTO `dat_san` VALUES (3,1,'2021-12-30','Quang Qui','0877778819',3,'2021-12-30 06:18:51','2021-12-30 06:18:51'),(5,3,'2021-12-30','Quang Huy','0988899999',2,'2021-12-30 06:20:34','2021-12-30 07:28:31'),(6,5,'2021-12-31','Nguyễn Duy Vinh','0935456789',2,'2021-12-30 17:38:23','2021-12-30 17:38:23'),(7,1,'2022-01-04','Quang Qui','0877778819',2,'2022-01-04 00:42:10','2022-01-04 00:42:10'),(8,1,'2022-01-04','Quang Qui','0877778819',2,'2022-01-04 00:42:10','2022-01-04 00:42:10'),(9,1,'2022-01-06','Quang Qui','0877778819',3,'2022-01-05 22:33:24','2022-01-06 00:30:30'),(10,1,'2022-01-06','Quang Qui','0877778819',2,'2022-01-06 00:07:47','2022-01-06 00:07:47'),(11,1,'2022-01-06','Quang Qui','0877778819',3,'2022-01-06 00:30:19','2022-01-06 00:55:08'),(13,1,'2022-01-07','Quang Qui','0877778819',2,'2022-01-06 16:24:13','2022-01-06 16:54:14'),(15,1,'2022-01-07','Quang Qui','0877778819',2,'2022-01-06 16:24:13','2022-01-06 16:24:13'),(16,1,'2022-01-07','Quang Qui','0877778819',2,'2022-01-06 16:55:57','2022-01-06 16:55:57'),(17,1,'2022-01-07','Quang Qui','0877778819',2,'2022-01-06 16:55:57','2022-01-06 19:07:00'),(18,1,'2022-01-07','Quang Qui','0877778819',2,'2022-01-06 16:55:57','2022-01-06 16:55:57'),(19,1,'2022-01-07','Quang Qui','0877778819',2,'2022-01-06 16:58:15','2022-01-06 16:58:15'),(20,1,'2022-01-07','Quang Qui','0877778819',2,'2022-01-06 16:58:15','2022-01-06 16:58:15'),(21,1,'2022-01-07','Quang Qui','0877778819',2,'2022-01-06 16:58:15','2022-01-06 16:58:15'),(22,1,'2022-01-07','Quang Qui','0877778819',2,'2022-01-06 16:58:15','2022-01-06 16:58:15'),(23,1,'2022-01-07','Quang Qui','0877778819',2,'2022-01-06 16:58:15','2022-01-06 16:58:15'),(24,1,'2022-01-07','Quang Qui','0877778819',2,'2022-01-06 18:46:39','2022-01-06 18:46:39'),(25,1,'2022-01-07','Quang Qui','0877778819',2,'2022-01-06 18:51:45','2022-01-06 18:51:45'),(26,1,'2022-01-07','Quang Qui','0877778819',2,'2022-01-06 18:51:45','2022-01-06 18:51:45'),(27,1,'2022-01-10','Quang Qui','0877778819',2,'2022-01-09 18:11:20','2022-01-09 18:11:20'),(28,1,'2022-01-10','Quang Qui','0877778819',2,'2022-01-09 18:11:20','2022-01-09 18:11:20'),(30,1,'2022-01-11','Quang Qui','0877778819',3,'2022-01-10 20:54:27','2022-01-10 21:56:50'),(31,1,'2022-01-11','Quang Qui','0877778819',2,'2022-01-10 20:54:27','2022-01-10 20:54:27'),(32,1,'2022-01-11','Quang Qui','0877778819',2,'2022-01-10 21:56:34','2022-01-10 21:56:34'),(34,1,'2022-01-17','Quang Qui','0877778819',2,'2022-01-17 00:30:04','2022-01-17 00:30:04'),(35,14,'2022-01-17','Anh Khoa','065072230',2,'2022-01-17 00:32:35','2022-01-17 00:32:35'),(36,15,'2022-01-17','abc','123',2,'2022-01-17 02:01:36','2022-01-17 02:01:36'),(37,16,'2022-01-17','dcsdc','0836707111',2,'2022-01-17 02:23:39','2022-01-17 02:23:39'),(38,1,'2022-01-17','Quang Qui','0877778819',2,'2022-01-17 03:02:11','2022-01-17 03:02:11'),(39,25,'2022-01-17','Trần Quang Phú','0839641618',2,'2022-01-17 03:39:41','2022-01-17 03:39:41'),(40,17,'2022-01-17','daica','08897643535',2,'2022-01-17 05:52:14','2022-01-17 05:52:14'),(41,1,'2022-01-18','Quang Qui','0877778819',2,'2022-01-18 01:37:54','2022-01-18 01:37:54'),(42,1,'2022-01-19','Quang Qui','0877778819',2,'2022-01-19 06:36:47','2022-01-19 06:36:47'),(43,29,'2022-01-19','văn quý thọ','0889198108',2,'2022-01-19 06:49:09','2022-01-19 06:49:09'),(44,29,'2022-01-19','văn quý thọ','0889198108',2,'2022-01-19 06:49:09','2022-01-19 06:49:09'),(45,1,'2022-01-20','Quang Qui','0877778819',2,'2022-01-19 19:28:49','2022-01-19 19:28:49'),(47,3,'2022-02-17','Quang Huy','0988899999',2,'2022-02-17 06:11:34','2022-02-17 06:11:34'),(50,3,'2022-02-17','Quang Huy','0988899999',2,'2022-02-17 06:26:04','2022-02-17 06:26:04'),(52,3,'2022-02-17','Quang Huy','0988899999',2,'2022-02-17 06:38:17','2022-02-17 06:38:17'),(53,3,'2022-02-17','Quang Huy','0988899999',2,'2022-02-17 06:47:41','2022-02-17 06:47:41'),(54,3,'2022-02-17','Quang Huy','0988899999',2,'2022-02-17 06:47:41','2022-02-17 06:47:41'),(55,3,'2022-02-17','Quang Huy','0988899999',2,'2022-02-17 06:47:41','2022-02-17 06:47:41'),(56,1,'2022-02-18','Quang Qui','0877778819',2,'2022-02-17 17:38:35','2022-02-17 17:38:35'),(57,1,'2022-02-18','Quang Qui','0877778819',2,'2022-02-17 17:38:35','2022-02-17 17:38:35'),(58,1,'2022-02-18','Quang Qui','0877778819',2,'2022-02-17 17:38:35','2022-02-17 17:38:35'),(59,10,'2022-11-30','Quản lý','0877778888',2,'2022-11-30 01:16:25','2022-11-30 01:16:25'),(60,10,'2022-12-01','Quản lý','0877778888',3,'2022-11-30 23:41:28','2022-11-30 23:42:58');
/*!40000 ALTER TABLE `dat_san` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dich_vu`
--

DROP TABLE IF EXISTS `dich_vu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dich_vu` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ma_loai_dv` int NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia_tien` double(8,2) NOT NULL,
  `don_vi` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `ma_loai_dv` (`ma_loai_dv`) USING BTREE,
  KEY `id` (`id`) USING BTREE,
  CONSTRAINT `ma_loai_dv` FOREIGN KEY (`ma_loai_dv`) REFERENCES `loai_dich_vu` (`ma_dv`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dich_vu`
--

LOCK TABLES `dich_vu` WRITE;
/*!40000 ALTER TABLE `dich_vu` DISABLE KEYS */;
INSERT INTO `dich_vu` VALUES (1,1,'Nước khoáng lạc',10000.00,100,NULL,NULL),(2,2,'Nước lọc',5000.00,100,NULL,NULL);
/*!40000 ALTER TABLE `dich_vu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gia_theo_khung_gio`
--

DROP TABLE IF EXISTS `gia_theo_khung_gio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gia_theo_khung_gio` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ma_loai_san` bigint unsigned NOT NULL,
  `khung_gio` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gia_tien` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `ma_loai_san` (`ma_loai_san`) USING BTREE,
  CONSTRAINT `gia_theo_khung_gio_ibfk_1` FOREIGN KEY (`ma_loai_san`) REFERENCES `loai_san` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gia_theo_khung_gio`
--

LOCK TABLES `gia_theo_khung_gio` WRITE;
/*!40000 ALTER TABLE `gia_theo_khung_gio` DISABLE KEYS */;
INSERT INTO `gia_theo_khung_gio` VALUES (1,1,'05:00-06:00',NULL,200000.00,NULL,'2022-01-16 20:16:26'),(2,1,'06:00-07:00',NULL,220000.00,NULL,NULL),(3,1,'07:00-08:00',NULL,220000.00,NULL,NULL),(4,1,'08:00-09:00',NULL,220000.00,NULL,NULL),(5,1,'09:00-10:00',NULL,220000.00,NULL,NULL),(6,1,'14:00-15:00',NULL,240000.00,NULL,NULL),(7,1,'15:00-16:00',NULL,240000.00,NULL,NULL),(8,1,'16:00-17:00',NULL,280000.00,NULL,NULL),(9,1,'17:00-18:00',NULL,300000.00,NULL,NULL),(10,1,'18:00-19:00',NULL,320000.00,NULL,NULL),(11,1,'19:00-20:00',NULL,320000.00,NULL,NULL),(12,1,'20:00-21:00',NULL,340000.00,NULL,NULL),(13,1,'21:00-22:00',NULL,340000.00,NULL,NULL),(14,1,'22:00-23:00',NULL,360000.00,NULL,NULL),(15,1,'23:00-24:00',NULL,360000.00,NULL,NULL),(16,1,'10:00-11:00',NULL,250000.00,NULL,NULL),(17,2,'05:00-06:00',NULL,200000.00,NULL,NULL),(18,2,'06:00-07:00',NULL,220000.00,NULL,NULL),(19,2,'07:00-08:00',NULL,220000.00,NULL,NULL),(20,2,'08:00-09:00',NULL,220000.00,NULL,NULL),(21,2,'09:00-10:00',NULL,220000.00,NULL,NULL),(22,2,'14:00-15:00',NULL,240000.00,NULL,NULL),(23,2,'15:00-16:00',NULL,240000.00,NULL,NULL),(24,2,'16:00-17:00',NULL,280000.00,NULL,NULL),(25,2,'17:00-18:00',NULL,300000.00,NULL,NULL),(26,2,'18:00-19:00',NULL,320000.00,NULL,NULL),(27,2,'19:00-20:00',NULL,320000.00,NULL,NULL),(28,2,'20:00-21:00',NULL,340000.00,NULL,NULL),(29,2,'21:00-22:00',NULL,340000.00,NULL,NULL),(30,2,'22:00-23:00',NULL,360000.00,NULL,NULL),(31,2,'23:00-24:00',NULL,360000.00,NULL,NULL),(32,2,'10:00-11:00',NULL,250000.00,NULL,NULL),(33,3,'05:00-06:00',NULL,200000.00,NULL,NULL),(34,3,'06:00-07:00',NULL,220000.00,NULL,NULL),(35,3,'07:00-08:00',NULL,220000.00,NULL,NULL),(36,3,'08:00-09:00',NULL,220000.00,NULL,NULL),(37,3,'09:00-10:00',NULL,220000.00,NULL,NULL),(38,3,'14:00-15:00',NULL,240000.00,NULL,NULL),(39,3,'15:00-16:00',NULL,240000.00,NULL,NULL),(40,3,'16:00-17:00',NULL,280000.00,NULL,NULL),(41,3,'17:00-18:00',NULL,300000.00,NULL,NULL),(42,3,'18:00-19:00',NULL,320000.00,NULL,NULL),(43,3,'19:00-20:00',NULL,320000.00,NULL,NULL),(44,3,'20:00-21:00',NULL,340000.00,NULL,NULL),(45,3,'21:00-22:00',NULL,340000.00,NULL,NULL),(46,3,'22:00-23:00',NULL,360000.00,NULL,NULL),(47,3,'23:00-24:00',NULL,360000.00,NULL,NULL),(48,3,'10:00-11:00',NULL,250000.00,NULL,NULL);
/*!40000 ALTER TABLE `gia_theo_khung_gio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loai_dich_vu`
--

DROP TABLE IF EXISTS `loai_dich_vu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `loai_dich_vu` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ma_dv` int NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `ma_dv` (`ma_dv`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loai_dich_vu`
--

LOCK TABLES `loai_dich_vu` WRITE;
/*!40000 ALTER TABLE `loai_dich_vu` DISABLE KEYS */;
INSERT INTO `loai_dich_vu` VALUES (1,1,'Nước khoáng',NULL,NULL),(2,2,'Nước lọc',NULL,NULL),(3,3,'Nước chanh muối',NULL,NULL);
/*!40000 ALTER TABLE `loai_dich_vu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loai_hinh`
--

DROP TABLE IF EXISTS `loai_hinh`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `loai_hinh` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loai_hinh`
--

LOCK TABLES `loai_hinh` WRITE;
/*!40000 ALTER TABLE `loai_hinh` DISABLE KEYS */;
INSERT INTO `loai_hinh` VALUES (1,'Sân bóng đá',NULL,NULL),(2,'Sân cầu lông',NULL,NULL);
/*!40000 ALTER TABLE `loai_hinh` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loai_san`
--

DROP TABLE IF EXISTS `loai_san`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `loai_san` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_luong_nguoi_da` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_san` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ma_loai_hinh` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `ma_san` (`ma_san`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loai_san`
--

LOCK TABLES `loai_san` WRITE;
/*!40000 ALTER TABLE `loai_san` DISABLE KEYS */;
INSERT INTO `loai_san` VALUES (1,'Sân 5','5 người',1,NULL,NULL,1),(2,'Sân 7','7 người',2,NULL,NULL,1),(3,'Sân cầu lông','4 người',3,NULL,NULL,2);
/*!40000 ALTER TABLE `loai_san` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2021_11_09_021307_create_quyen_table',1),(5,'2021_11_09_021504_create_quidinh_table',1),(6,'2021_11_09_021544_create_taikhoan_table',1),(7,'2021_11_09_021615_create_loaisan_table',1),(8,'2021_11_09_021636_create_san_table',1),(9,'2021_11_09_021702_create_dichvu_table',1),(10,'2021_11_09_021844_create_loaidichvu_table',1),(11,'2021_11_09_022011_create_chitietdatsan_table',1),(12,'2021_12_16_030159_create_chitietdichvu_table',1),(13,'2021_12_16_030401_create_giatheokhunggio_table',1),(14,'2021_12_16_030751_create_trangthaidatsan_table',1),(15,'2021_12_16_030936_create_datsan_table',1),(16,'2021_12_28_032741_create_payments_table',2),(17,'2022_11_30_062200_excute_sql_v1',1),(18,'2022_11_30_110131_add_ma_loai_hinh_to_loai_san_table',3),(19,'2022_11_30_062200_excute_sql_v1',1),(21,'2022_12_01_075014_create_loai_hinh_table',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quyen`
--

DROP TABLE IF EXISTS `quyen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `quyen` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_quyen` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `ma_quyen` (`ma_quyen`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quyen`
--

LOCK TABLES `quyen` WRITE;
/*!40000 ALTER TABLE `quyen` DISABLE KEYS */;
INSERT INTO `quyen` VALUES (1,'Quản lý',0,NULL,NULL),(2,'Nhân viên',1,NULL,NULL),(3,'Khách hàng',2,NULL,NULL);
/*!40000 ALTER TABLE `quyen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `san`
--

DROP TABLE IF EXISTS `san`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `san` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `ma_loai_san` int NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `ma_loai_san` (`ma_loai_san`) USING BTREE,
  CONSTRAINT `ma_loai_san` FOREIGN KEY (`ma_loai_san`) REFERENCES `loai_san` (`ma_san`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `san`
--

LOCK TABLES `san` WRITE;
/*!40000 ALTER TABLE `san` DISABLE KEYS */;
INSERT INTO `san` VALUES (1,1,'Sân 5A','Sân 5A',NULL,NULL),(3,1,'Sân 5B','5B',NULL,NULL),(4,1,'Sân 5C','5C',NULL,NULL),(5,1,'Sân 5D','5D',NULL,NULL),(6,1,'Sân 5E','5E',NULL,NULL),(9,2,'Sân 7C','a','2022-11-30 22:59:03','2022-11-30 22:59:03'),(12,3,'Sân CL1','1','2022-11-30 23:07:18','2022-11-30 23:07:18'),(13,3,'Sân CL2','aâa','2022-11-30 23:08:01','2022-11-30 23:18:17'),(14,2,'Sân 7E','aaaa','2022-11-30 23:20:00','2022-11-30 23:20:00');
/*!40000 ALTER TABLE `san` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tai_khoan`
--

DROP TABLE IF EXISTS `tai_khoan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tai_khoan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay_sinh` date DEFAULT NULL,
  `dia_chi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioi_tinh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quoc_tich` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay_lam_viec` date DEFAULT NULL,
  `ma_quyen` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `tai_khoan_email_unique` (`email`) USING BTREE,
  KEY `ma_quyen` (`ma_quyen`) USING BTREE,
  CONSTRAINT `ma_quyen` FOREIGN KEY (`ma_quyen`) REFERENCES `quyen` (`ma_quyen`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tai_khoan`
--

LOCK TABLES `tai_khoan` WRITE;
/*!40000 ALTER TABLE `tai_khoan` DISABLE KEYS */;
INSERT INTO `tai_khoan` VALUES (1,'Quang Qui','qui@gmail.com','$2y$10$x0h/73I0whpvznxU7yLQ2eZZTG4ihNyRKDtlTsg1cjtA2bWl5eq3O','2000-01-02','Quang Nam','0877778819','Nam','Viet Nam',NULL,2,'2021-12-22 06:17:13','2022-01-06 16:44:25'),(3,'Quang Huy','huy@gmail.com','$2y$10$x0h/73I0whpvznxU7yLQ2eZZTG4ihNyRKDtlTsg1cjtA2bWl5eq3O','2021-12-31','Quang Nam','0988899999','Nam','Viet Nam',NULL,2,'2021-12-27 23:44:23','2021-12-30 20:17:58'),(5,'Nguyễn Duy Vinh','vinh@gmail.com','$2y$10$x0h/73I0whpvznxU7yLQ2eZZTG4ihNyRKDtlTsg1cjtA2bWl5eq3O','2001-01-31','Da Nang','0935456789','Nam','Viet Nam',NULL,2,'2021-12-30 17:35:58','2021-12-30 17:48:07'),(6,'Huy Tran',NULL,'$2y$10$x0h/73I0whpvznxU7yLQ2eZZTG4ihNyRKDtlTsg1cjtA2bWl5eq3O','2022-01-01','Da Nang','0877778819','Nam','Viet Nam',NULL,2,'2022-01-06 00:47:11','2022-01-06 00:47:11'),(10,'Quản lý','admin@gmail.com','$2y$10$x0h/73I0whpvznxU7yLQ2eZZTG4ihNyRKDtlTsg1cjtA2bWl5eq3O',NULL,'Da Nang','0877778888',NULL,'Viet Nam',NULL,0,'2022-01-06 18:55:30','2022-01-06 18:58:02'),(11,'Nhân viên','personnel@gmail.com','$2y$10$x0h/73I0whpvznxU7yLQ2eZZTG4ihNyRKDtlTsg1cjtA2bWl5eq3O',NULL,NULL,'0707079999',NULL,NULL,NULL,1,'2022-01-06 19:05:26','2022-01-06 19:05:26'),(13,'Nhân viên','nhanvien@gmail.com','$2y$10$x0h/73I0whpvznxU7yLQ2eZZTG4ihNyRKDtlTsg1cjtA2bWl5eq3O',NULL,NULL,'0877777777',NULL,NULL,NULL,1,'2022-01-10 20:58:15','2022-01-10 20:58:15'),(14,'Anh Khoa','nvanhkhoa148@gmail.com','$2y$10$x0h/73I0whpvznxU7yLQ2eZZTG4ihNyRKDtlTsg1cjtA2bWl5eq3O',NULL,NULL,'065072230',NULL,NULL,NULL,2,'2022-01-17 00:30:11','2022-01-17 00:30:11'),(15,'abc','abc@gmail.com','$2y$10$x0h/73I0whpvznxU7yLQ2eZZTG4ihNyRKDtlTsg1cjtA2bWl5eq3O',NULL,NULL,'123',NULL,NULL,NULL,2,'2022-01-17 01:43:34','2022-01-17 01:43:34'),(16,'dcsdc','voanhnguyen1323@gmail.com','$2y$10$x0h/73I0whpvznxU7yLQ2eZZTG4ihNyRKDtlTsg1cjtA2bWl5eq3O',NULL,NULL,'0836707111',NULL,NULL,NULL,2,'2022-01-17 02:21:10','2022-01-17 02:21:10'),(17,'daica','daica@gmail.com','$2y$10$x0h/73I0whpvznxU7yLQ2eZZTG4ihNyRKDtlTsg1cjtA2bWl5eq3O',NULL,NULL,'08897643535',NULL,NULL,NULL,2,'2022-01-17 02:24:22','2022-01-17 02:24:22'),(21,'Minh Tâm','tam@gmail.com','$2y$10$x0h/73I0whpvznxU7yLQ2eZZTG4ihNyRKDtlTsg1cjtA2bWl5eq3O',NULL,NULL,'00099999',NULL,NULL,NULL,2,'2022-01-17 02:28:34','2022-01-17 02:28:34'),(22,'Quang Huy Tran','huytran@gmail.com','$2y$10$x0h/73I0whpvznxU7yLQ2eZZTG4ihNyRKDtlTsg1cjtA2bWl5eq3O',NULL,NULL,'11112345667',NULL,NULL,NULL,2,'2022-01-17 02:32:49','2022-01-17 02:32:49'),(23,'Tung','tung@gmail.com','$2y$10$x0h/73I0whpvznxU7yLQ2eZZTG4ihNyRKDtlTsg1cjtA2bWl5eq3O',NULL,NULL,'0877778819',NULL,NULL,NULL,2,'2022-01-17 02:33:29','2022-01-17 02:33:29'),(24,'Võ Nguyên','Voanhnguyenxd@gmail.com','$2y$10$x0h/73I0whpvznxU7yLQ2eZZTG4ihNyRKDtlTsg1cjtA2bWl5eq3O',NULL,NULL,'0889196554',NULL,NULL,NULL,2,'2022-01-17 03:16:18','2022-01-17 03:16:18'),(25,'Trần Quang Phú','tranquangphu29@gmail.com','$2y$10$x0h/73I0whpvznxU7yLQ2eZZTG4ihNyRKDtlTsg1cjtA2bWl5eq3O','2022-01-01','Da Nang','0839641618','Nam','Viet Nam',NULL,2,'2022-01-17 03:34:48','2022-01-19 19:38:54'),(27,'Quản lý','quanly@gmail.com','$2y$10$x0h/73I0whpvznxU7yLQ2eZZTG4ihNyRKDtlTsg1cjtA2bWl5eq3O',NULL,NULL,'0877778819',NULL,NULL,NULL,0,'2022-01-17 16:58:27','2022-01-17 16:58:27'),(28,'Van Tu','tu@gmail.com','$2y$10$x0h/73I0whpvznxU7yLQ2eZZTG4ihNyRKDtlTsg1cjtA2bWl5eq3O','2022-01-01','Quang Nam','0877777777','Nam','Viet Nam',NULL,2,'2022-01-18 01:39:26','2022-01-19 19:38:40'),(29,'văn quý thọ','vanquytho12345@gmail.com','$2y$10$x0h/73I0whpvznxU7yLQ2eZZTG4ihNyRKDtlTsg1cjtA2bWl5eq3O','2022-01-01','Da Nang','0889198108','Nam','Viet Nam',NULL,2,'2022-01-19 06:45:49','2022-01-19 19:38:30');
/*!40000 ALTER TABLE `tai_khoan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trang_thai_dat_san`
--

DROP TABLE IF EXISTS `trang_thai_dat_san`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `trang_thai_dat_san` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ma_trang_thai` int NOT NULL,
  `ten_trang_thai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `ma_trang_thai` (`ma_trang_thai`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trang_thai_dat_san`
--

LOCK TABLES `trang_thai_dat_san` WRITE;
/*!40000 ALTER TABLE `trang_thai_dat_san` DISABLE KEYS */;
INSERT INTO `trang_thai_dat_san` VALUES (2,2,'Đã đặt',NULL,NULL),(3,3,'Đã hủy',NULL,NULL);
/*!40000 ALTER TABLE `trang_thai_dat_san` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `users_email_unique` (`email`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-01 15:02:27
