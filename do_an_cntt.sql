/*
 Navicat Premium Data Transfer

 Source Server         : DoAn
 Source Server Type    : MySQL
 Source Server Version : 50733
 Source Host           : localhost:3306
 Source Schema         : do_an_cntt

 Target Server Type    : MySQL
 Target Server Version : 50733
 File Encoding         : 65001

 Date: 07/01/2022 14:29:28
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for chi_tiet_dat_san
-- ----------------------------
DROP TABLE IF EXISTS `chi_tiet_dat_san`;
CREATE TABLE `chi_tiet_dat_san`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ma_dat_san` int(11) NULL DEFAULT NULL,
  `ma_san` int(11) NULL DEFAULT NULL,
  `khung_gio` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `ma_loai_dv` int(11) NULL DEFAULT NULL,
  `so_luong_dv` int(11) NULL DEFAULT NULL,
  `ngay_gio_huy` date NULL DEFAULT NULL,
  `ngay_su_dung` date NULL DEFAULT NULL,
  `gia_tien` double(8, 2) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `ma_tk` int(5) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 27 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of chi_tiet_dat_san
-- ----------------------------
INSERT INTO `chi_tiet_dat_san` VALUES (3, 2102011816, 4, '17', 1, 12, '2022-01-06', '2021-12-30', 420000.00, '2021-12-30 14:18:51', '2022-01-06 08:51:28', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (5, 1807000832, 3, '23', 2, 10, NULL, '2021-12-30', 410000.00, '2021-12-30 14:20:34', '2021-12-30 14:20:34', 3);
INSERT INTO `chi_tiet_dat_san` VALUES (6, 1509485703, 1, '16', 1, 12, NULL, '2022-01-01', 400000.00, '2021-12-31 01:37:38', '2021-12-31 01:37:38', 5);
INSERT INTO `chi_tiet_dat_san` VALUES (7, 3869, 3, '6', 2, 12, NULL, '2022-01-04', 280000.00, '2022-01-04 08:42:10', '2022-01-04 08:42:10', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (8, 6587, 1, '5', 2, 12, NULL, '2022-01-04', 280000.00, '2022-01-04 08:42:10', '2022-01-04 08:42:10', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (9, 4603, 1, '5', 1, 12, '2022-01-06', '2022-01-06', 340000.00, '2022-01-06 06:33:24', '2022-01-06 08:30:30', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (10, 2765, 1, '17', 1, 12, NULL, '2022-01-06', 420000.00, '2022-01-06 08:07:47', '2022-01-06 08:07:47', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (11, 2102011816, 4, '17', 1, 12, '2022-01-06', '2021-12-30', 420000.00, '2022-01-06 08:30:19', '2022-01-06 08:55:08', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (13, 3921, 1, '6', 2, 10, NULL, '2022-01-07', 270000.00, '2022-01-07 00:24:13', '2022-01-07 00:54:14', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (14, 2102011816, 4, '17', 1, 12, NULL, '2022-01-07', 420000.00, '2022-01-07 00:24:13', '2022-01-07 00:42:48', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (15, 3921, 1, '17', 1, 8, NULL, '2022-01-07', 380000.00, '2022-01-07 00:24:13', '2022-01-07 00:24:13', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (16, 2608, 1, '16', 1, 12, NULL, '2022-01-08', 400000.00, '2022-01-07 00:55:57', '2022-01-07 00:55:57', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (17, 9295, 1, '17', 2, 5, NULL, '2022-01-09', 325000.00, '2022-01-07 00:55:57', '2022-01-07 03:08:26', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (18, 9295, 1, '18', 1, 8, NULL, '2022-01-09', 400000.00, '2022-01-07 00:55:57', '2022-01-07 00:55:57', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (19, 6610, 1, '5', 1, 12, NULL, '2022-01-01', 340000.00, '2022-01-07 00:58:15', '2022-01-07 00:58:15', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (20, 6610, 1, '6', 2, 10, NULL, '2022-01-01', 270000.00, '2022-01-07 00:58:15', '2022-01-07 00:58:15', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (21, 6610, 1, '7', 2, 8, NULL, '2022-01-01', 260000.00, '2022-01-07 00:58:15', '2022-01-07 00:58:15', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (22, 6610, 1, '8', 2, 12, NULL, '2022-01-01', 280000.00, '2022-01-07 00:58:15', '2022-01-07 00:58:15', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (23, 6610, 1, '9', 2, 7, NULL, '2022-01-01', 255000.00, '2022-01-07 00:58:15', '2022-01-07 00:58:15', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (24, 5789, 1, '5', 1, 12, NULL, '2022-01-07', 340000.00, '2022-01-07 02:46:38', '2022-01-07 02:46:38', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (25, 1906, 1, '7', 2, 12, NULL, '2022-01-07', 280000.00, '2022-01-07 02:51:45', '2022-01-07 02:51:45', 1);
INSERT INTO `chi_tiet_dat_san` VALUES (26, 1906, 1, '8', 1, 12, NULL, '2022-01-07', 340000.00, '2022-01-07 02:51:45', '2022-01-07 02:51:45', 1);

-- ----------------------------
-- Table structure for chi_tiet_dich_vu
-- ----------------------------
DROP TABLE IF EXISTS `chi_tiet_dich_vu`;
CREATE TABLE `chi_tiet_dich_vu`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ma_dat_san` int(11) NOT NULL,
  `ma_dich_vu` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of chi_tiet_dich_vu
-- ----------------------------

-- ----------------------------
-- Table structure for dat_san
-- ----------------------------
DROP TABLE IF EXISTS `dat_san`;
CREATE TABLE `dat_san`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ma_tk` int(11) NULL DEFAULT NULL,
  `ngay_dat` date NOT NULL,
  `ten_nguoi_dat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt_nguoi_dat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_trang_thai` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 27 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of dat_san
-- ----------------------------
INSERT INTO `dat_san` VALUES (3, 1, '2021-12-30', 'Quang Qui', '0877778819', 3, '2021-12-30 14:18:51', '2021-12-30 14:18:51');
INSERT INTO `dat_san` VALUES (5, 3, '2021-12-30', 'Quang Huy', '0988899999', 2, '2021-12-30 14:20:34', '2021-12-30 15:28:31');
INSERT INTO `dat_san` VALUES (6, 5, '2021-12-31', 'Nguyễn Duy Vinh', '0935456789', 2, '2021-12-31 01:38:23', '2021-12-31 01:38:23');
INSERT INTO `dat_san` VALUES (7, 1, '2022-01-04', 'Quang Qui', '0877778819', 2, '2022-01-04 08:42:10', '2022-01-04 08:42:10');
INSERT INTO `dat_san` VALUES (8, 1, '2022-01-04', 'Quang Qui', '0877778819', 2, '2022-01-04 08:42:10', '2022-01-04 08:42:10');
INSERT INTO `dat_san` VALUES (9, 1, '2022-01-06', 'Quang Qui', '0877778819', 3, '2022-01-06 06:33:24', '2022-01-06 08:30:30');
INSERT INTO `dat_san` VALUES (10, 1, '2022-01-06', 'Quang Qui', '0877778819', 2, '2022-01-06 08:07:47', '2022-01-06 08:07:47');
INSERT INTO `dat_san` VALUES (11, 1, '2022-01-06', 'Quang Qui', '0877778819', 3, '2022-01-06 08:30:19', '2022-01-06 08:55:08');
INSERT INTO `dat_san` VALUES (13, 1, '2022-01-07', 'Quang Qui', '0877778819', 2, '2022-01-07 00:24:13', '2022-01-07 00:54:14');
INSERT INTO `dat_san` VALUES (14, 1, '2022-01-07', 'Văn Hiếu', '0877778819', 2, '2022-01-07 00:24:13', '2022-01-07 00:38:57');
INSERT INTO `dat_san` VALUES (15, 1, '2022-01-07', 'Quang Qui', '0877778819', 2, '2022-01-07 00:24:13', '2022-01-07 00:24:13');
INSERT INTO `dat_san` VALUES (16, 1, '2022-01-07', 'Quang Qui', '0877778819', 2, '2022-01-07 00:55:57', '2022-01-07 00:55:57');
INSERT INTO `dat_san` VALUES (17, 1, '2022-01-07', 'Quang Qui', '0877778819', 2, '2022-01-07 00:55:57', '2022-01-07 03:07:00');
INSERT INTO `dat_san` VALUES (18, 1, '2022-01-07', 'Quang Qui', '0877778819', 2, '2022-01-07 00:55:57', '2022-01-07 00:55:57');
INSERT INTO `dat_san` VALUES (19, 1, '2022-01-07', 'Quang Qui', '0877778819', 2, '2022-01-07 00:58:15', '2022-01-07 00:58:15');
INSERT INTO `dat_san` VALUES (20, 1, '2022-01-07', 'Quang Qui', '0877778819', 2, '2022-01-07 00:58:15', '2022-01-07 00:58:15');
INSERT INTO `dat_san` VALUES (21, 1, '2022-01-07', 'Quang Qui', '0877778819', 2, '2022-01-07 00:58:15', '2022-01-07 00:58:15');
INSERT INTO `dat_san` VALUES (22, 1, '2022-01-07', 'Quang Qui', '0877778819', 2, '2022-01-07 00:58:15', '2022-01-07 00:58:15');
INSERT INTO `dat_san` VALUES (23, 1, '2022-01-07', 'Quang Qui', '0877778819', 2, '2022-01-07 00:58:15', '2022-01-07 00:58:15');
INSERT INTO `dat_san` VALUES (24, 1, '2022-01-07', 'Quang Qui', '0877778819', 2, '2022-01-07 02:46:39', '2022-01-07 02:46:39');
INSERT INTO `dat_san` VALUES (25, 1, '2022-01-07', 'Quang Qui', '0877778819', 2, '2022-01-07 02:51:45', '2022-01-07 02:51:45');
INSERT INTO `dat_san` VALUES (26, 1, '2022-01-07', 'Quang Qui', '0877778819', 2, '2022-01-07 02:51:45', '2022-01-07 02:51:45');

-- ----------------------------
-- Table structure for dich_vu
-- ----------------------------
DROP TABLE IF EXISTS `dich_vu`;
CREATE TABLE `dich_vu`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ma_loai_dv` int(11) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia_tien` double(8, 2) NOT NULL,
  `don_vi` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of dich_vu
-- ----------------------------
INSERT INTO `dich_vu` VALUES (1, 1, 'Nước khoáng lạc', 10000.00, 100, NULL, NULL);
INSERT INTO `dich_vu` VALUES (2, 2, 'Nước lọc', 5000.00, 100, NULL, NULL);

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for gia_theo_khung_gio
-- ----------------------------
DROP TABLE IF EXISTS `gia_theo_khung_gio`;
CREATE TABLE `gia_theo_khung_gio`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ma_loai_san` int(11) NOT NULL,
  `khung_gio` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `gia_tien` double(8, 2) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of gia_theo_khung_gio
-- ----------------------------
INSERT INTO `gia_theo_khung_gio` VALUES (1, 1, '05:00-06:00', NULL, 220000.00, NULL, NULL);
INSERT INTO `gia_theo_khung_gio` VALUES (2, 1, '06:00-07:00', NULL, 220000.00, NULL, NULL);
INSERT INTO `gia_theo_khung_gio` VALUES (3, 1, '07:00-08:00', NULL, 220000.00, NULL, NULL);
INSERT INTO `gia_theo_khung_gio` VALUES (4, 1, '08:00-09:00', NULL, 220000.00, NULL, NULL);
INSERT INTO `gia_theo_khung_gio` VALUES (5, 1, '09:00-10:00', NULL, 220000.00, NULL, NULL);
INSERT INTO `gia_theo_khung_gio` VALUES (6, 1, '14:00-15:00', NULL, 240000.00, NULL, NULL);
INSERT INTO `gia_theo_khung_gio` VALUES (7, 1, '15:00-16:00', NULL, 240000.00, NULL, NULL);
INSERT INTO `gia_theo_khung_gio` VALUES (8, 1, '16:00-17:00', NULL, 280000.00, NULL, NULL);
INSERT INTO `gia_theo_khung_gio` VALUES (9, 1, '17:00-18:00', NULL, 300000.00, NULL, NULL);
INSERT INTO `gia_theo_khung_gio` VALUES (10, 1, '18:00-19:00', NULL, 320000.00, NULL, NULL);
INSERT INTO `gia_theo_khung_gio` VALUES (11, 1, '19:00-20:00', NULL, 320000.00, NULL, NULL);
INSERT INTO `gia_theo_khung_gio` VALUES (12, 1, '20:00-21:00', NULL, 340000.00, NULL, NULL);
INSERT INTO `gia_theo_khung_gio` VALUES (13, 1, '21:00-22:00', NULL, 340000.00, NULL, NULL);
INSERT INTO `gia_theo_khung_gio` VALUES (14, 1, '22:00-23:00', NULL, 360000.00, NULL, NULL);
INSERT INTO `gia_theo_khung_gio` VALUES (15, 1, '23:00-24:00', NULL, 360000.00, NULL, NULL);
INSERT INTO `gia_theo_khung_gio` VALUES (16, 1, '10:00-11:00', NULL, 250000.00, NULL, NULL);

-- ----------------------------
-- Table structure for loai_dich_vu
-- ----------------------------
DROP TABLE IF EXISTS `loai_dich_vu`;
CREATE TABLE `loai_dich_vu`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ma_dv` int(11) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of loai_dich_vu
-- ----------------------------
INSERT INTO `loai_dich_vu` VALUES (1, 1, 'Nước khoáng', NULL, NULL);
INSERT INTO `loai_dich_vu` VALUES (2, 2, 'Nước lọc', NULL, NULL);

-- ----------------------------
-- Table structure for loai_san
-- ----------------------------
DROP TABLE IF EXISTS `loai_san`;
CREATE TABLE `loai_san`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `so_luong_nguoi_da` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_san` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of loai_san
-- ----------------------------
INSERT INTO `loai_san` VALUES (1, 'Sân 5', '5 người', 1, NULL, NULL);
INSERT INTO `loai_san` VALUES (2, 'Sân 7', '7 người', 2, NULL, NULL);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2021_11_09_021307_create_quyen_table', 1);
INSERT INTO `migrations` VALUES (5, '2021_11_09_021504_create_quidinh_table', 1);
INSERT INTO `migrations` VALUES (6, '2021_11_09_021544_create_taikhoan_table', 1);
INSERT INTO `migrations` VALUES (7, '2021_11_09_021615_create_loaisan_table', 1);
INSERT INTO `migrations` VALUES (8, '2021_11_09_021636_create_san_table', 1);
INSERT INTO `migrations` VALUES (9, '2021_11_09_021702_create_dichvu_table', 1);
INSERT INTO `migrations` VALUES (10, '2021_11_09_021844_create_loaidichvu_table', 1);
INSERT INTO `migrations` VALUES (11, '2021_11_09_022011_create_chitietdatsan_table', 1);
INSERT INTO `migrations` VALUES (12, '2021_12_16_030159_create_chitietdichvu_table', 1);
INSERT INTO `migrations` VALUES (13, '2021_12_16_030401_create_giatheokhunggio_table', 1);
INSERT INTO `migrations` VALUES (14, '2021_12_16_030751_create_trangthaidatsan_table', 1);
INSERT INTO `migrations` VALUES (15, '2021_12_16_030936_create_datsan_table', 1);
INSERT INTO `migrations` VALUES (16, '2021_12_28_032741_create_payments_table', 2);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for payments
-- ----------------------------
DROP TABLE IF EXISTS `payments`;
CREATE TABLE `payments`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `transaction_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `money` double NOT NULL,
  `note` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `vnp_response_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_vnpay` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_bank` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` datetime(0) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of payments
-- ----------------------------

-- ----------------------------
-- Table structure for qui_dinh
-- ----------------------------
DROP TABLE IF EXISTS `qui_dinh`;
CREATE TABLE `qui_dinh`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `noi_dung` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of qui_dinh
-- ----------------------------

-- ----------------------------
-- Table structure for quyen
-- ----------------------------
DROP TABLE IF EXISTS `quyen`;
CREATE TABLE `quyen`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_quyen` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of quyen
-- ----------------------------
INSERT INTO `quyen` VALUES (1, 'Quản lý', 0, NULL, NULL);
INSERT INTO `quyen` VALUES (2, 'Nhân viên', 1, NULL, NULL);
INSERT INTO `quyen` VALUES (3, 'Khách hàng', 2, NULL, NULL);

-- ----------------------------
-- Table structure for san
-- ----------------------------
DROP TABLE IF EXISTS `san`;
CREATE TABLE `san`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ma_loai_san` int(11) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mo_ta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of san
-- ----------------------------
INSERT INTO `san` VALUES (1, 1, 'Sân 5A', 'Sân 5A', NULL, NULL);
INSERT INTO `san` VALUES (3, 1, 'Sân 5B', '5B', NULL, NULL);
INSERT INTO `san` VALUES (4, 1, 'Sân 5C', '5C', NULL, NULL);
INSERT INTO `san` VALUES (5, 1, 'Sân 5D', '5D', NULL, NULL);
INSERT INTO `san` VALUES (6, 1, 'Sân 5E', '5E', NULL, NULL);

-- ----------------------------
-- Table structure for tai_khoan
-- ----------------------------
DROP TABLE IF EXISTS `tai_khoan`;
CREATE TABLE `tai_khoan`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `ngay_sinh` date NULL DEFAULT NULL,
  `dia_chi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sdt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioi_tinh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `quoc_tich` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `ngay_lam_viec` date NULL DEFAULT NULL,
  `ma_quyen` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `tai_khoan_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tai_khoan
-- ----------------------------
INSERT INTO `tai_khoan` VALUES (1, 'Quang Qui', 'qui@gmail.com', '$2y$10$uvdGmf0Q1PrcVD8om/N7meWFDJsowuO0W5H8wj1GEOrWZFtVNxe7i', '2000-01-02', 'Quang Nam', '0877778819', 'Nam', 'Viet Nam', NULL, 2, '2021-12-22 14:17:13', '2022-01-07 00:44:25');
INSERT INTO `tai_khoan` VALUES (3, 'Quang Huy', 'huy@gmail.com', '$2y$10$CUpzakphQ3NDwlXaXLZYROdGg3u/ZWVnyYONVQV1SjEliyF/Q7lfW', '2021-12-31', 'Quang Nam', '0988899999', 'Nam', 'Viet Nam', NULL, 2, '2021-12-28 07:44:23', '2021-12-31 04:17:58');
INSERT INTO `tai_khoan` VALUES (5, 'Nguyễn Duy Vinh', 'vinh@gmail.com', '$2y$10$9dou.ZBtiS4qdLONdExWvOakvnnHeyLUg0S.V2MWtIKEVXRGimhmm', '2001-01-31', 'Da Nang', '0935456789', 'Nam', 'Viet Nam', NULL, 2, '2021-12-31 01:35:58', '2021-12-31 01:48:07');
INSERT INTO `tai_khoan` VALUES (6, 'Huy Tran', NULL, NULL, '2022-01-01', 'Da Nang', '0877778819', 'Nam', 'Viet Nam', NULL, 2, '2022-01-06 08:47:11', '2022-01-06 08:47:11');
INSERT INTO `tai_khoan` VALUES (7, 'Huy Hung', 'hung@gmail.com', NULL, '2022-01-01', 'Da Nang', '0877778899', 'Nam', 'Viet Nam', '2022-01-04', 1, '2022-01-07 00:44:53', '2022-01-07 00:44:53');
INSERT INTO `tai_khoan` VALUES (10, 'Quản lý', 'admin@gmail.com', '$2y$10$AjXOQE0LgM6Y5iqik2a/9eSozrP7yyaTKiSfa35nNnyfXCR6DfAWi', NULL, 'Da Nang', '0877778888', NULL, 'Viet Nam', NULL, 0, '2022-01-07 02:55:30', '2022-01-07 02:58:02');
INSERT INTO `tai_khoan` VALUES (11, 'Nhân viên', 'personnel@gmail.com', '$2y$10$haFCdxamT1QLopLqpgxPzu7YSWlVuPLDI230nhR/g2x65tDfTKKoG', NULL, NULL, '0707079999', NULL, NULL, NULL, 1, '2022-01-07 03:05:26', '2022-01-07 03:05:26');

-- ----------------------------
-- Table structure for trang_thai_dat_san
-- ----------------------------
DROP TABLE IF EXISTS `trang_thai_dat_san`;
CREATE TABLE `trang_thai_dat_san`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ma_trang_thai` int(11) NOT NULL,
  `ten_trang_thai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of trang_thai_dat_san
-- ----------------------------
INSERT INTO `trang_thai_dat_san` VALUES (2, 2, 'Đã đặt', NULL, NULL);
INSERT INTO `trang_thai_dat_san` VALUES (3, 3, 'Đã hủy', NULL, NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
