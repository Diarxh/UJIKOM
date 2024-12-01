-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 01, 2024 at 04:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manajemen_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED DEFAULT NULL,
  `class_id` bigint(20) UNSIGNED DEFAULT NULL,
  `teacher_id` bigint(20) UNSIGNED DEFAULT NULL,
  `date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `student_id`, `class_id`, `teacher_id`, `date`, `status`, `created_at`, `updated_at`) VALUES
(50, 5, 1, NULL, '2024-11-28', 'absent', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(51, 6, 1, NULL, '2024-11-30', 'absent', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(52, 7, 1, NULL, '2024-11-30', 'absent', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(53, 8, 1, NULL, '2024-11-24', 'late', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(54, NULL, 1, 1, '2024-12-01', 'present', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(55, NULL, 1, 2, '2024-12-01', 'absent', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(56, NULL, 1, 3, '2024-11-25', 'absent', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(57, NULL, 1, 4, '2024-11-28', 'present', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(58, NULL, 1, 5, '2024-11-28', 'present', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(59, NULL, 1, 6, '2024-11-28', 'absent', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(60, NULL, 1, 7, '2024-11-25', 'late', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(61, NULL, 1, 8, '2024-11-24', 'late', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(62, NULL, 1, 9, '2024-11-28', 'absent', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(63, NULL, 1, 10, '2024-11-26', 'late', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(64, NULL, 1, 11, '2024-11-25', 'absent', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(65, NULL, 1, 12, '2024-11-27', 'late', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(66, NULL, 1, 13, '2024-11-25', 'present', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(67, NULL, 1, 14, '2024-11-25', 'present', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(68, NULL, 1, 15, '2024-11-28', 'present', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(69, NULL, 1, 16, '2024-11-28', 'absent', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(70, NULL, 1, 17, '2024-11-26', 'present', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(71, NULL, 1, 18, '2024-11-27', 'absent', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(72, NULL, 1, 19, '2024-12-01', 'absent', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(73, NULL, 1, 20, '2024-11-27', 'present', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(74, NULL, 1, 21, '2024-12-01', 'absent', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(75, NULL, 1, 22, '2024-11-24', 'absent', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(76, NULL, 1, 23, '2024-11-24', 'late', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(77, NULL, 1, 24, '2024-11-25', 'absent', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(78, NULL, 1, 25, '2024-11-25', 'present', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(79, NULL, 1, 26, '2024-11-30', 'present', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(80, NULL, 1, 27, '2024-11-28', 'late', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(81, NULL, 1, 28, '2024-11-26', 'present', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(82, NULL, 1, 29, '2024-11-24', 'absent', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(83, NULL, 1, 30, '2024-11-28', 'absent', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(84, NULL, 1, 31, '2024-11-24', 'present', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(85, NULL, 1, 32, '2024-12-01', 'absent', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(86, NULL, 1, 33, '2024-11-28', 'absent', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(87, NULL, 1, 34, '2024-11-27', 'absent', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(88, NULL, 1, 21, '2024-11-30', 'absent', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(89, 6, 1, 1, '2024-12-01', 'absent', '2024-12-01 01:11:06', '2024-12-01 01:11:06');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('spatie.permission.cache', 'a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:92:{i:0;a:4:{s:1:\"a\";i:1;s:1:\"b\";s:9:\"view_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:1;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:13:\"view_any_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:2;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:11:\"create_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:3;a:4:{s:1:\"a\";i:4;s:1:\"b\";s:11:\"update_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:4;a:4:{s:1:\"a\";i:5;s:1:\"b\";s:11:\"delete_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:5;a:4:{s:1:\"a\";i:6;s:1:\"b\";s:15:\"delete_any_role\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:6;a:4:{s:1:\"a\";i:7;s:1:\"b\";s:15:\"view_attendance\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:7;a:4:{s:1:\"a\";i:8;s:1:\"b\";s:19:\"view_any_attendance\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:8;a:4:{s:1:\"a\";i:9;s:1:\"b\";s:17:\"create_attendance\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:9;a:4:{s:1:\"a\";i:10;s:1:\"b\";s:17:\"update_attendance\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:10;a:4:{s:1:\"a\";i:11;s:1:\"b\";s:18:\"restore_attendance\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:11;a:4:{s:1:\"a\";i:12;s:1:\"b\";s:22:\"restore_any_attendance\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:12;a:4:{s:1:\"a\";i:13;s:1:\"b\";s:20:\"replicate_attendance\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:13;a:4:{s:1:\"a\";i:14;s:1:\"b\";s:18:\"reorder_attendance\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:14;a:4:{s:1:\"a\";i:15;s:1:\"b\";s:17:\"delete_attendance\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:15;a:4:{s:1:\"a\";i:16;s:1:\"b\";s:21:\"delete_any_attendance\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:16;a:4:{s:1:\"a\";i:17;s:1:\"b\";s:23:\"force_delete_attendance\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:17;a:4:{s:1:\"a\";i:18;s:1:\"b\";s:27:\"force_delete_any_attendance\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:18;a:4:{s:1:\"a\";i:19;s:1:\"b\";s:10:\"view_grade\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:19;a:4:{s:1:\"a\";i:20;s:1:\"b\";s:14:\"view_any_grade\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:20;a:4:{s:1:\"a\";i:21;s:1:\"b\";s:12:\"create_grade\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:21;a:4:{s:1:\"a\";i:22;s:1:\"b\";s:12:\"update_grade\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:22;a:4:{s:1:\"a\";i:23;s:1:\"b\";s:13:\"restore_grade\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:23;a:4:{s:1:\"a\";i:24;s:1:\"b\";s:17:\"restore_any_grade\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:24;a:4:{s:1:\"a\";i:25;s:1:\"b\";s:15:\"replicate_grade\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:25;a:4:{s:1:\"a\";i:26;s:1:\"b\";s:13:\"reorder_grade\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:26;a:4:{s:1:\"a\";i:27;s:1:\"b\";s:12:\"delete_grade\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:27;a:4:{s:1:\"a\";i:28;s:1:\"b\";s:16:\"delete_any_grade\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:28;a:4:{s:1:\"a\";i:29;s:1:\"b\";s:18:\"force_delete_grade\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:29;a:4:{s:1:\"a\";i:30;s:1:\"b\";s:22:\"force_delete_any_grade\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:30;a:4:{s:1:\"a\";i:31;s:1:\"b\";s:18:\"view_school::class\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:31;a:4:{s:1:\"a\";i:32;s:1:\"b\";s:22:\"view_any_school::class\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:32;a:4:{s:1:\"a\";i:33;s:1:\"b\";s:20:\"create_school::class\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:33;a:4:{s:1:\"a\";i:34;s:1:\"b\";s:20:\"update_school::class\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:34;a:4:{s:1:\"a\";i:35;s:1:\"b\";s:21:\"restore_school::class\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:35;a:4:{s:1:\"a\";i:36;s:1:\"b\";s:25:\"restore_any_school::class\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:36;a:4:{s:1:\"a\";i:37;s:1:\"b\";s:23:\"replicate_school::class\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:37;a:4:{s:1:\"a\";i:38;s:1:\"b\";s:21:\"reorder_school::class\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:38;a:4:{s:1:\"a\";i:39;s:1:\"b\";s:20:\"delete_school::class\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:39;a:4:{s:1:\"a\";i:40;s:1:\"b\";s:24:\"delete_any_school::class\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:40;a:4:{s:1:\"a\";i:41;s:1:\"b\";s:26:\"force_delete_school::class\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:41;a:4:{s:1:\"a\";i:42;s:1:\"b\";s:30:\"force_delete_any_school::class\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:42;a:4:{s:1:\"a\";i:43;s:1:\"b\";s:12:\"view_student\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:43;a:4:{s:1:\"a\";i:44;s:1:\"b\";s:16:\"view_any_student\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:44;a:4:{s:1:\"a\";i:45;s:1:\"b\";s:14:\"create_student\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:45;a:4:{s:1:\"a\";i:46;s:1:\"b\";s:14:\"update_student\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:46;a:4:{s:1:\"a\";i:47;s:1:\"b\";s:15:\"restore_student\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:47;a:4:{s:1:\"a\";i:48;s:1:\"b\";s:19:\"restore_any_student\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:48;a:4:{s:1:\"a\";i:49;s:1:\"b\";s:17:\"replicate_student\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:49;a:4:{s:1:\"a\";i:50;s:1:\"b\";s:15:\"reorder_student\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:50;a:4:{s:1:\"a\";i:51;s:1:\"b\";s:14:\"delete_student\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:51;a:4:{s:1:\"a\";i:52;s:1:\"b\";s:18:\"delete_any_student\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:52;a:4:{s:1:\"a\";i:53;s:1:\"b\";s:20:\"force_delete_student\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:53;a:4:{s:1:\"a\";i:54;s:1:\"b\";s:24:\"force_delete_any_student\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:54;a:4:{s:1:\"a\";i:55;s:1:\"b\";s:12:\"view_teacher\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:55;a:4:{s:1:\"a\";i:56;s:1:\"b\";s:16:\"view_any_teacher\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:56;a:4:{s:1:\"a\";i:57;s:1:\"b\";s:14:\"create_teacher\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:57;a:4:{s:1:\"a\";i:58;s:1:\"b\";s:14:\"update_teacher\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:58;a:4:{s:1:\"a\";i:59;s:1:\"b\";s:15:\"restore_teacher\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:59;a:4:{s:1:\"a\";i:60;s:1:\"b\";s:19:\"restore_any_teacher\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:60;a:4:{s:1:\"a\";i:61;s:1:\"b\";s:17:\"replicate_teacher\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:61;a:4:{s:1:\"a\";i:62;s:1:\"b\";s:15:\"reorder_teacher\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:62;a:4:{s:1:\"a\";i:63;s:1:\"b\";s:14:\"delete_teacher\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:63;a:4:{s:1:\"a\";i:64;s:1:\"b\";s:18:\"delete_any_teacher\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:64;a:4:{s:1:\"a\";i:65;s:1:\"b\";s:20:\"force_delete_teacher\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:65;a:4:{s:1:\"a\";i:66;s:1:\"b\";s:24:\"force_delete_any_teacher\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:66;a:4:{s:1:\"a\";i:67;s:1:\"b\";s:13:\"view_students\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:67;a:4:{s:1:\"a\";i:68;s:1:\"b\";s:15:\"create_students\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:68;a:4:{s:1:\"a\";i:69;s:1:\"b\";s:15:\"update_students\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:69;a:4:{s:1:\"a\";i:70;s:1:\"b\";s:15:\"delete_students\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:70;a:4:{s:1:\"a\";i:71;s:1:\"b\";s:11:\"view_grades\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:71;a:4:{s:1:\"a\";i:72;s:1:\"b\";s:13:\"create_grades\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:72;a:4:{s:1:\"a\";i:73;s:1:\"b\";s:13:\"update_grades\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:73;a:4:{s:1:\"a\";i:74;s:1:\"b\";s:16:\"view_attendances\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:74;a:4:{s:1:\"a\";i:75;s:1:\"b\";s:18:\"update_attendances\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:75;a:4:{s:1:\"a\";i:76;s:1:\"b\";s:15:\"manage_students\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:76;a:4:{s:1:\"a\";i:77;s:1:\"b\";s:15:\"manage_teachers\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:77;a:4:{s:1:\"a\";i:78;s:1:\"b\";s:17:\"manage_attendance\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}}i:78;a:4:{s:1:\"a\";i:79;s:1:\"b\";s:13:\"manage_grades\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:3;}}i:79;a:4:{s:1:\"a\";i:80;s:1:\"b\";s:16:\"view_salary_slip\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:80;a:4:{s:1:\"a\";i:81;s:1:\"b\";s:9:\"view_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:81;a:4:{s:1:\"a\";i:82;s:1:\"b\";s:13:\"view_any_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:82;a:4:{s:1:\"a\";i:83;s:1:\"b\";s:11:\"create_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:83;a:4:{s:1:\"a\";i:84;s:1:\"b\";s:11:\"update_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:84;a:4:{s:1:\"a\";i:85;s:1:\"b\";s:12:\"restore_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:85;a:4:{s:1:\"a\";i:86;s:1:\"b\";s:16:\"restore_any_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:86;a:4:{s:1:\"a\";i:87;s:1:\"b\";s:14:\"replicate_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:87;a:4:{s:1:\"a\";i:88;s:1:\"b\";s:12:\"reorder_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:88;a:4:{s:1:\"a\";i:89;s:1:\"b\";s:11:\"delete_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:89;a:4:{s:1:\"a\";i:90;s:1:\"b\";s:15:\"delete_any_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:90;a:4:{s:1:\"a\";i:91;s:1:\"b\";s:17:\"force_delete_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:91;a:4:{s:1:\"a\";i:92;s:1:\"b\";s:21:\"force_delete_any_user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}}s:5:\"roles\";a:3:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:11:\"super_admin\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:2;s:1:\"b\";s:8:\"staff_tu\";s:1:\"c\";s:3:\"web\";}i:2;a:3:{s:1:\"a\";i:3;s:1:\"b\";s:4:\"guru\";s:1:\"c\";s:3:\"web\";}}}', 1733037114);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `teacher_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `name`, `teacher_id`, `created_at`, `updated_at`) VALUES
(1, 'XII RPL', 1, '2024-11-30 00:34:04', '2024-11-30 00:34:04');

-- --------------------------------------------------------

--
-- Table structure for table `exports`
--

CREATE TABLE `exports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `completed_at` timestamp NULL DEFAULT NULL,
  `file_disk` varchar(255) NOT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `exporter` varchar(255) NOT NULL,
  `processed_rows` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `total_rows` int(10) UNSIGNED NOT NULL,
  `successful_rows` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_import_rows`
--

CREATE TABLE `failed_import_rows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`data`)),
  `import_id` bigint(20) UNSIGNED NOT NULL,
  `validation_error` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) NOT NULL,
  `grade` decimal(5,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `imports`
--

CREATE TABLE `imports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `completed_at` timestamp NULL DEFAULT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `importer` varchar(255) NOT NULL,
  `processed_rows` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `total_rows` int(10) UNSIGNED NOT NULL,
  `successful_rows` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_11_16_021346_create_teachers_table', 1),
(5, '2024_11_16_021358_create_classes_table', 1),
(6, '2024_11_16_021645_create_students_table', 1),
(7, '2024_11_16_021833_create_school_assets_table', 1),
(8, '2024_11_16_021849_create_grades_table', 1),
(9, '2024_11_16_021908_create_attendance_table', 1),
(11, '2024_11_21_032732_create_imports_table', 1),
(12, '2024_11_21_032733_create_exports_table', 1),
(13, '2024_11_21_032734_create_failed_import_rows_table', 1),
(15, '2024_11_21_032731_create_permission_tables', 2),
(16, '2024_11_23_060101_create_spp_table', 3),
(17, '2024_11_23_060130_create_slip_gaji_guru_table', 3),
(18, '2024_11_23_062453_add_gaji_pokok_to_teachers_table', 3),
(19, '2024_12_01_062848_add_gender_and_english_column_to_teachers_table', 4),
(20, '2024_12_01_073526_add_teacher_id_to_attendance_table', 5),
(21, '2024_12_01_074448_update_attendance_table_nullable_columns', 6);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'view_role', 'web', '2024-11-21 05:38:17', '2024-11-21 05:38:17'),
(2, 'view_any_role', 'web', '2024-11-21 05:38:17', '2024-11-21 05:38:17'),
(3, 'create_role', 'web', '2024-11-21 05:38:17', '2024-11-21 05:38:17'),
(4, 'update_role', 'web', '2024-11-21 05:38:17', '2024-11-21 05:38:17'),
(5, 'delete_role', 'web', '2024-11-21 05:38:17', '2024-11-21 05:38:17'),
(6, 'delete_any_role', 'web', '2024-11-21 05:38:17', '2024-11-21 05:38:17'),
(7, 'view_attendance', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(8, 'view_any_attendance', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(9, 'create_attendance', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(10, 'update_attendance', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(11, 'restore_attendance', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(12, 'restore_any_attendance', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(13, 'replicate_attendance', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(14, 'reorder_attendance', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(15, 'delete_attendance', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(16, 'delete_any_attendance', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(17, 'force_delete_attendance', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(18, 'force_delete_any_attendance', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(19, 'view_grade', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(20, 'view_any_grade', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(21, 'create_grade', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(22, 'update_grade', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(23, 'restore_grade', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(24, 'restore_any_grade', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(25, 'replicate_grade', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(26, 'reorder_grade', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(27, 'delete_grade', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(28, 'delete_any_grade', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(29, 'force_delete_grade', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(30, 'force_delete_any_grade', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(31, 'view_school::class', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(32, 'view_any_school::class', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(33, 'create_school::class', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(34, 'update_school::class', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(35, 'restore_school::class', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(36, 'restore_any_school::class', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(37, 'replicate_school::class', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(38, 'reorder_school::class', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(39, 'delete_school::class', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(40, 'delete_any_school::class', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(41, 'force_delete_school::class', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(42, 'force_delete_any_school::class', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(43, 'view_student', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(44, 'view_any_student', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(45, 'create_student', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(46, 'update_student', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(47, 'restore_student', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(48, 'restore_any_student', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(49, 'replicate_student', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(50, 'reorder_student', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(51, 'delete_student', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(52, 'delete_any_student', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(53, 'force_delete_student', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(54, 'force_delete_any_student', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(55, 'view_teacher', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(56, 'view_any_teacher', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(57, 'create_teacher', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(58, 'update_teacher', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(59, 'restore_teacher', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(60, 'restore_any_teacher', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(61, 'replicate_teacher', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(62, 'reorder_teacher', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(63, 'delete_teacher', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(64, 'delete_any_teacher', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(65, 'force_delete_teacher', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(66, 'force_delete_any_teacher', 'web', '2024-11-21 05:39:04', '2024-11-21 05:39:04'),
(67, 'view_students', 'web', '2024-11-21 06:34:25', '2024-11-21 06:34:25'),
(68, 'create_students', 'web', '2024-11-21 06:34:25', '2024-11-21 06:34:25'),
(69, 'update_students', 'web', '2024-11-21 06:34:25', '2024-11-21 06:34:25'),
(70, 'delete_students', 'web', '2024-11-21 06:34:25', '2024-11-21 06:34:25'),
(71, 'view_grades', 'web', '2024-11-21 06:34:25', '2024-11-21 06:34:25'),
(72, 'create_grades', 'web', '2024-11-21 06:34:25', '2024-11-21 06:34:25'),
(73, 'update_grades', 'web', '2024-11-21 06:34:25', '2024-11-21 06:34:25'),
(74, 'view_attendances', 'web', '2024-11-21 06:34:25', '2024-11-21 06:34:25'),
(75, 'update_attendances', 'web', '2024-11-21 06:34:25', '2024-11-21 06:34:25'),
(76, 'manage_students', 'web', '2024-11-21 06:36:20', '2024-11-21 06:36:20'),
(77, 'manage_teachers', 'web', '2024-11-21 06:36:20', '2024-11-21 06:36:20'),
(78, 'manage_attendance', 'web', '2024-11-21 06:36:20', '2024-11-21 06:36:20'),
(79, 'manage_grades', 'web', '2024-11-21 06:36:20', '2024-11-21 06:36:20'),
(80, 'view_salary_slip', 'web', '2024-11-21 06:36:20', '2024-11-21 06:36:20'),
(81, 'view_user', 'web', '2024-11-30 00:11:31', '2024-11-30 00:11:31'),
(82, 'view_any_user', 'web', '2024-11-30 00:11:31', '2024-11-30 00:11:31'),
(83, 'create_user', 'web', '2024-11-30 00:11:31', '2024-11-30 00:11:31'),
(84, 'update_user', 'web', '2024-11-30 00:11:31', '2024-11-30 00:11:31'),
(85, 'restore_user', 'web', '2024-11-30 00:11:31', '2024-11-30 00:11:31'),
(86, 'restore_any_user', 'web', '2024-11-30 00:11:31', '2024-11-30 00:11:31'),
(87, 'replicate_user', 'web', '2024-11-30 00:11:31', '2024-11-30 00:11:31'),
(88, 'reorder_user', 'web', '2024-11-30 00:11:31', '2024-11-30 00:11:31'),
(89, 'delete_user', 'web', '2024-11-30 00:11:31', '2024-11-30 00:11:31'),
(90, 'delete_any_user', 'web', '2024-11-30 00:11:31', '2024-11-30 00:11:31'),
(91, 'force_delete_user', 'web', '2024-11-30 00:11:31', '2024-11-30 00:11:31'),
(92, 'force_delete_any_user', 'web', '2024-11-30 00:11:31', '2024-11-30 00:11:31');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'super_admin', 'web', '2024-11-21 05:38:17', '2024-11-21 05:38:17'),
(2, 'staff_tu', 'web', '2024-11-21 06:34:25', '2024-11-21 06:34:25'),
(3, 'guru', 'web', '2024-11-21 06:34:25', '2024-11-21 06:34:25');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(76, 2),
(77, 1),
(77, 2),
(78, 1),
(78, 2),
(78, 3),
(79, 1),
(79, 3),
(80, 1),
(80, 2),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1),
(91, 1),
(92, 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_assets`
--

CREATE TABLE `school_assets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('fbDPLdGRYQZKikToFugzylDXuiT1QVa85rAnHzU6', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiakNmZUx6VUVoRncwZU44Z0ZMREhQVnhwV20yQ0xqRU5POU54SFpHayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733040209),
('gHRsPJdNRB97M2jyXj9rYi5SHo8BqicWRcsVI2v3', 10, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiazRoaDBDaG9SdE54SGk1SlduMDBzeU9HdExDcWhiRnhnSkJCWDBqeCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2Rhc2hib2FyZCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZGFzaGJvYXJkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTA7fQ==', 1733042992),
('KkdCI4qF3BmD0iUbKRHR33HQ85T9qUpZlttIFzgG', 10, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiWUpkUWJUSXBuZVhqeW82RXRRdmZiVnA3NHVoSVZTMEpMc0tOUzJ3eCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2Rhc2hib2FyZCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI3OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxMDt9', 1733066917),
('zTIPkItWEEgvEizYmO6ubuVE8BW8bgW5Ue03hZ6l', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicmt6ZDRiYWxHakpJSEdPYjdtR01RblBXaFVyVUdyemhMNTZCaGYzMSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2Rhc2hib2FyZCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZGFzaGJvYXJkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1733040207);

-- --------------------------------------------------------

--
-- Table structure for table `slip_gaji_guru`
--

CREATE TABLE `slip_gaji_guru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `guru_id` bigint(20) UNSIGNED NOT NULL,
  `bulan` smallint(5) UNSIGNED NOT NULL,
  `tahun` smallint(5) UNSIGNED NOT NULL,
  `gaji_pokok` decimal(15,2) NOT NULL,
  `tunjangan` decimal(15,2) NOT NULL,
  `potongan` decimal(15,2) NOT NULL,
  `total_gaji` decimal(15,2) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `status_pembayaran` enum('Dibayar','Belum Dibayar') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slip_gaji_guru`
--

INSERT INTO `slip_gaji_guru` (`id`, `guru_id`, `bulan`, `tahun`, `gaji_pokok`, `tunjangan`, `potongan`, `total_gaji`, `tanggal_pembayaran`, `status_pembayaran`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2023, 5000000.00, 500000.00, 100000.00, 5400000.00, '2024-11-27', 'Dibayar', '2024-11-26 20:43:11', '2024-11-26 20:43:11'),
(2, 1, 1, 2023, 5000000.00, 500000.00, 100000.00, 5400000.00, '2024-11-27', 'Dibayar', '2024-11-26 20:43:38', '2024-11-26 20:43:38'),
(3, 1, 1, 2023, 5000000.00, 500000.00, 100000.00, 5400000.00, '2024-11-27', 'Dibayar', '2024-11-26 20:43:56', '2024-11-26 20:43:56'),
(4, 1, 1, 2023, 5000000.00, 500000.00, 100000.00, 5400000.00, '2024-11-30', 'Dibayar', '2024-11-30 00:14:12', '2024-11-30 00:14:12'),
(5, 1, 1, 2023, 5000000.00, 500000.00, 100000.00, 5400000.00, '2024-11-30', 'Dibayar', '2024-11-30 00:14:51', '2024-11-30 00:14:51'),
(6, 1, 1, 2023, 5000000.00, 500000.00, 100000.00, 5400000.00, '2024-11-30', 'Dibayar', '2024-11-30 00:29:27', '2024-11-30 00:29:27'),
(7, 1, 1, 2023, 5000000.00, 500000.00, 100000.00, 5400000.00, '2024-11-30', 'Dibayar', '2024-11-30 00:36:09', '2024-11-30 00:36:09'),
(8, 1, 1, 2023, 5000000.00, 500000.00, 100000.00, 5400000.00, '2024-11-30', 'Dibayar', '2024-11-30 00:36:27', '2024-11-30 00:36:27'),
(9, 1, 1, 2023, 5000000.00, 500000.00, 100000.00, 5400000.00, '2024-12-01', 'Dibayar', '2024-12-01 00:37:21', '2024-12-01 00:37:21'),
(10, 1, 1, 2023, 5000000.00, 500000.00, 100000.00, 5400000.00, '2024-12-01', 'Dibayar', '2024-12-01 00:39:32', '2024-12-01 00:39:32'),
(11, 1, 1, 2023, 5000000.00, 500000.00, 100000.00, 5400000.00, '2024-12-01', 'Dibayar', '2024-12-01 00:40:24', '2024-12-01 00:40:24'),
(12, 1, 1, 2023, 5000000.00, 500000.00, 100000.00, 5400000.00, '2024-12-01', 'Dibayar', '2024-12-01 00:41:49', '2024-12-01 00:41:49'),
(13, 1, 1, 2023, 5000000.00, 500000.00, 100000.00, 5400000.00, '2024-12-01', 'Dibayar', '2024-12-01 00:42:23', '2024-12-01 00:42:23'),
(14, 1, 1, 2023, 5000000.00, 500000.00, 100000.00, 5400000.00, '2024-12-01', 'Dibayar', '2024-12-01 00:42:24', '2024-12-01 00:42:24'),
(15, 1, 1, 2023, 5000000.00, 500000.00, 100000.00, 5400000.00, '2024-12-01', 'Dibayar', '2024-12-01 00:44:41', '2024-12-01 00:44:41'),
(16, 1, 1, 2023, 5000000.00, 500000.00, 100000.00, 5400000.00, '2024-12-01', 'Dibayar', '2024-12-01 00:45:30', '2024-12-01 00:45:30'),
(17, 1, 1, 2023, 5000000.00, 500000.00, 100000.00, 5400000.00, '2024-12-01', 'Dibayar', '2024-12-01 01:11:06', '2024-12-01 01:11:06');

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `tahun_ajaran` varchar(10) NOT NULL,
  `bulan` tinyint(3) UNSIGNED NOT NULL,
  `jumlah_bayar` decimal(15,2) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `status_bayar` enum('Lunas','Belum Lunas','Terlambat') NOT NULL,
  `bukti_bayar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`id`, `siswa_id`, `tahun_ajaran`, `bulan`, `jumlah_bayar`, `tanggal_bayar`, `status_bayar`, `bukti_bayar`, `created_at`, `updated_at`) VALUES
(5, 5, '2023/2024', 1, 500000.00, '2024-11-30', 'Lunas', 'bukti1.jpg', '2024-11-30 00:36:27', '2024-11-30 00:36:27'),
(6, 6, '2023/2024', 2, 500000.00, '2024-11-30', 'Belum Lunas', NULL, '2024-11-30 00:36:27', '2024-11-30 00:36:27'),
(7, 5, '2023/2024', 1, 500000.00, '2024-12-01', 'Lunas', 'bukti1.jpg', '2024-12-01 00:37:21', '2024-12-01 00:37:21'),
(8, 6, '2023/2024', 2, 500000.00, '2024-12-01', 'Belum Lunas', NULL, '2024-12-01 00:37:21', '2024-12-01 00:37:21'),
(9, 5, '2023/2024', 1, 500000.00, '2024-12-01', 'Lunas', 'bukti1.jpg', '2024-12-01 00:39:32', '2024-12-01 00:39:32'),
(10, 6, '2023/2024', 2, 500000.00, '2024-12-01', 'Belum Lunas', NULL, '2024-12-01 00:39:32', '2024-12-01 00:39:32'),
(11, 5, '2023/2024', 1, 500000.00, '2024-12-01', 'Lunas', 'bukti1.jpg', '2024-12-01 00:40:24', '2024-12-01 00:40:24'),
(12, 6, '2023/2024', 2, 500000.00, '2024-12-01', 'Belum Lunas', NULL, '2024-12-01 00:40:24', '2024-12-01 00:40:24'),
(13, 5, '2023/2024', 1, 500000.00, '2024-12-01', 'Lunas', 'bukti1.jpg', '2024-12-01 00:41:49', '2024-12-01 00:41:49'),
(14, 6, '2023/2024', 2, 500000.00, '2024-12-01', 'Belum Lunas', NULL, '2024-12-01 00:41:49', '2024-12-01 00:41:49'),
(15, 5, '2023/2024', 1, 500000.00, '2024-12-01', 'Lunas', 'bukti1.jpg', '2024-12-01 00:42:23', '2024-12-01 00:42:23'),
(16, 6, '2023/2024', 2, 500000.00, '2024-12-01', 'Belum Lunas', NULL, '2024-12-01 00:42:23', '2024-12-01 00:42:23'),
(17, 5, '2023/2024', 1, 500000.00, '2024-12-01', 'Lunas', 'bukti1.jpg', '2024-12-01 00:42:24', '2024-12-01 00:42:24'),
(18, 6, '2023/2024', 2, 500000.00, '2024-12-01', 'Belum Lunas', NULL, '2024-12-01 00:42:24', '2024-12-01 00:42:24'),
(19, 5, '2023/2024', 1, 500000.00, '2024-12-01', 'Lunas', 'bukti1.jpg', '2024-12-01 00:44:41', '2024-12-01 00:44:41'),
(20, 6, '2023/2024', 2, 500000.00, '2024-12-01', 'Belum Lunas', NULL, '2024-12-01 00:44:41', '2024-12-01 00:44:41'),
(21, 5, '2023/2024', 1, 500000.00, '2024-12-01', 'Lunas', 'bukti1.jpg', '2024-12-01 00:45:30', '2024-12-01 00:45:30'),
(22, 6, '2023/2024', 2, 500000.00, '2024-12-01', 'Belum Lunas', NULL, '2024-12-01 00:45:30', '2024-12-01 00:45:30'),
(23, 5, '2023/2024', 1, 500000.00, '2024-12-01', 'Lunas', 'bukti1.jpg', '2024-12-01 01:11:06', '2024-12-01 01:11:06'),
(24, 6, '2023/2024', 2, 500000.00, '2024-12-01', 'Belum Lunas', NULL, '2024-12-01 01:11:06', '2024-12-01 01:11:06');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `dob`, `class_id`, `gender`, `address`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(5, 'Dadi', '2007-01-05', 1, 'LAKI-LAKI', 'cikawung', '123', 'admin@admin.com', '2024-11-30 00:34:52', '2024-11-30 00:34:52'),
(6, 'Dadi', '2007-01-05', 1, 'LAKI-LAKI', 'cikawung', '123', 'admin@admin.com', '2024-11-30 00:34:52', '2024-11-30 00:34:52'),
(7, 'Dadi', '2007-01-05', 1, 'LAKI-LAKI', 'cikawung', '123', 'admin@admin.com', '2024-11-30 00:34:52', '2024-11-30 00:34:52'),
(8, 'Dadi', '2007-01-05', 1, 'LAKI-LAKI', 'cikawung', '123', 'admin@admin.com', '2024-11-30 00:34:52', '2024-11-30 00:34:52');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `gender` enum('Laki-laki','Perempuan') NOT NULL,
  `hire_date` date NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gaji_pokok` decimal(15,2) DEFAULT NULL,
  `tunjangan` decimal(15,2) DEFAULT NULL,
  `potongan` decimal(15,2) DEFAULT NULL,
  `total_gaji` decimal(15,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `subject`, `gender`, `hire_date`, `phone`, `email`, `created_at`, `updated_at`, `gaji_pokok`, `tunjangan`, `potongan`, `total_gaji`) VALUES
(1, 'Guru 1', 'Matematika', 'Laki-laki', '2020-01-01', '081234567890', 'guru1@example.com', '2024-11-26 20:43:11', '2024-11-26 20:43:11', 5000000.00, 500000.00, 100000.00, 5600000.00),
(2, 'Guru 2', 'Fisika', 'Laki-laki', '2021-01-01', '081234567891', 'guru2@example.com', '2024-11-26 20:43:11', '2024-11-26 20:43:11', 6000000.00, 600000.00, 100000.00, 6600000.00),
(3, 'Guru 1', 'Matematika', 'Laki-laki', '2020-01-01', '081234567890', 'guru1@example.com', '2024-11-26 20:43:38', '2024-11-26 20:43:38', 5000000.00, 500000.00, 100000.00, 5600000.00),
(4, 'Guru 2', 'Fisika', 'Laki-laki', '2021-01-01', '081234567891', 'guru2@example.com', '2024-11-26 20:43:38', '2024-11-26 20:43:38', 6000000.00, 600000.00, 100000.00, 6600000.00),
(5, 'Guru 1', 'Matematika', 'Laki-laki', '2020-01-01', '081234567890', 'guru1@example.com', '2024-11-26 20:43:56', '2024-11-26 20:43:56', 5000000.00, 500000.00, 100000.00, 5600000.00),
(6, 'Guru 2', 'Fisika', 'Laki-laki', '2021-01-01', '081234567891', 'guru2@example.com', '2024-11-26 20:43:56', '2024-11-26 20:43:56', 6000000.00, 600000.00, 100000.00, 6600000.00),
(7, 'Guru 1', 'Matematika', 'Laki-laki', '2020-01-01', '081234567890', 'guru1@example.com', '2024-11-30 00:14:12', '2024-11-30 00:14:12', 5000000.00, 500000.00, 100000.00, 5600000.00),
(8, 'Guru 2', 'Fisika', 'Laki-laki', '2021-01-01', '081234567891', 'guru2@example.com', '2024-11-30 00:14:12', '2024-11-30 00:14:12', 6000000.00, 600000.00, 100000.00, 6600000.00),
(9, 'Guru 1', 'Matematika', 'Laki-laki', '2020-01-01', '081234567890', 'guru1@example.com', '2024-11-30 00:14:51', '2024-11-30 00:14:51', 5000000.00, 500000.00, 100000.00, 5600000.00),
(10, 'Guru 2', 'Fisika', 'Laki-laki', '2021-01-01', '081234567891', 'guru2@example.com', '2024-11-30 00:14:51', '2024-11-30 00:14:51', 6000000.00, 600000.00, 100000.00, 6600000.00),
(11, 'Guru 1', 'Matematika', 'Laki-laki', '2020-01-01', '081234567890', 'guru1@example.com', '2024-11-30 00:29:27', '2024-11-30 00:29:27', 5000000.00, 500000.00, 100000.00, 5600000.00),
(12, 'Guru 2', 'Fisika', 'Laki-laki', '2021-01-01', '081234567891', 'guru2@example.com', '2024-11-30 00:29:27', '2024-11-30 00:29:27', 6000000.00, 600000.00, 100000.00, 6600000.00),
(13, 'Guru 1', 'Matematika', 'Laki-laki', '2020-01-01', '081234567890', 'guru1@example.com', '2024-11-30 00:36:09', '2024-11-30 00:36:09', 5000000.00, 500000.00, 100000.00, 5600000.00),
(14, 'Guru 2', 'Fisika', 'Laki-laki', '2021-01-01', '081234567891', 'guru2@example.com', '2024-11-30 00:36:09', '2024-11-30 00:36:09', 6000000.00, 600000.00, 100000.00, 6600000.00),
(15, 'Guru 1', 'Matematika', 'Laki-laki', '2020-01-01', '081234567890', 'guru1@example.com', '2024-11-30 00:36:27', '2024-11-30 00:36:27', 5000000.00, 500000.00, 100000.00, 5600000.00),
(16, 'Guru 2', 'Fisika', 'Laki-laki', '2021-01-01', '081234567891', 'guru2@example.com', '2024-11-30 00:36:27', '2024-11-30 00:36:27', 6000000.00, 600000.00, 100000.00, 6600000.00),
(17, 'Guru 1', 'Matematika', 'Laki-laki', '2020-01-01', '081234567890', 'guru1@example.com', '2024-12-01 00:37:20', '2024-12-01 00:37:20', 5000000.00, 500000.00, 100000.00, 5600000.00),
(18, 'Guru 2', 'Fisika', 'Laki-laki', '2021-01-01', '081234567891', 'guru2@example.com', '2024-12-01 00:37:21', '2024-12-01 00:37:21', 6000000.00, 600000.00, 100000.00, 6600000.00),
(19, 'Guru 1', 'Matematika', 'Laki-laki', '2020-01-01', '081234567890', 'guru1@example.com', '2024-12-01 00:39:32', '2024-12-01 00:39:32', 5000000.00, 500000.00, 100000.00, 5600000.00),
(20, 'Guru 2', 'Fisika', 'Laki-laki', '2021-01-01', '081234567891', 'guru2@example.com', '2024-12-01 00:39:32', '2024-12-01 00:39:32', 6000000.00, 600000.00, 100000.00, 6600000.00),
(21, 'Guru 1', 'Matematika', 'Laki-laki', '2020-01-01', '081234567890', 'guru1@example.com', '2024-12-01 00:40:24', '2024-12-01 00:40:24', 5000000.00, 500000.00, 100000.00, 5600000.00),
(22, 'Guru 2', 'Fisika', 'Laki-laki', '2021-01-01', '081234567891', 'guru2@example.com', '2024-12-01 00:40:24', '2024-12-01 00:40:24', 6000000.00, 600000.00, 100000.00, 6600000.00),
(23, 'Guru 1', 'Matematika', 'Laki-laki', '2020-01-01', '081234567890', 'guru1@example.com', '2024-12-01 00:41:49', '2024-12-01 00:41:49', 5000000.00, 500000.00, 100000.00, 5600000.00),
(24, 'Guru 2', 'Fisika', 'Laki-laki', '2021-01-01', '081234567891', 'guru2@example.com', '2024-12-01 00:41:49', '2024-12-01 00:41:49', 6000000.00, 600000.00, 100000.00, 6600000.00),
(25, 'Guru 1', 'Matematika', 'Laki-laki', '2020-01-01', '081234567890', 'guru1@example.com', '2024-12-01 00:42:23', '2024-12-01 00:42:23', 5000000.00, 500000.00, 100000.00, 5600000.00),
(26, 'Guru 2', 'Fisika', 'Laki-laki', '2021-01-01', '081234567891', 'guru2@example.com', '2024-12-01 00:42:23', '2024-12-01 00:42:23', 6000000.00, 600000.00, 100000.00, 6600000.00),
(27, 'Guru 1', 'Matematika', 'Laki-laki', '2020-01-01', '081234567890', 'guru1@example.com', '2024-12-01 00:42:24', '2024-12-01 00:42:24', 5000000.00, 500000.00, 100000.00, 5600000.00),
(28, 'Guru 2', 'Fisika', 'Laki-laki', '2021-01-01', '081234567891', 'guru2@example.com', '2024-12-01 00:42:24', '2024-12-01 00:42:24', 6000000.00, 600000.00, 100000.00, 6600000.00),
(29, 'Guru 1', 'Matematika', 'Laki-laki', '2020-01-01', '081234567890', 'guru1@example.com', '2024-12-01 00:44:41', '2024-12-01 00:44:41', 5000000.00, 500000.00, 100000.00, 5600000.00),
(30, 'Guru 2', 'Fisika', 'Laki-laki', '2021-01-01', '081234567891', 'guru2@example.com', '2024-12-01 00:44:41', '2024-12-01 00:44:41', 6000000.00, 600000.00, 100000.00, 6600000.00),
(31, 'Guru 1', 'Matematika', 'Laki-laki', '2020-01-01', '081234567890', 'guru1@example.com', '2024-12-01 00:45:30', '2024-12-01 00:45:30', 5000000.00, 500000.00, 100000.00, 5600000.00),
(32, 'Guru 2', 'Fisika', 'Laki-laki', '2021-01-01', '081234567891', 'guru2@example.com', '2024-12-01 00:45:30', '2024-12-01 00:45:30', 6000000.00, 600000.00, 100000.00, 6600000.00),
(33, 'Guru 1', 'Matematika', 'Laki-laki', '2020-01-01', '081234567890', 'guru1@example.com', '2024-12-01 01:11:06', '2024-12-01 01:11:06', 5000000.00, 500000.00, 100000.00, 5600000.00),
(34, 'Guru 2', 'Fisika', 'Laki-laki', '2021-01-01', '081234567891', 'guru2@example.com', '2024-12-01 01:11:06', '2024-12-01 01:11:06', 6000000.00, 600000.00, 100000.00, 6600000.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$12$qrkxcdwQbw8VaQHxvjIh0eG6zE6eo0yoGNY7BN0Y/GksO8PTbHmsu', NULL, '2024-11-20 23:41:23', '2024-11-20 23:41:23'),
(10, 'TU', 'TU@TU.com', NULL, '$2y$12$anxDx7SwWNZUYLJvGB6Q5.7kXzNmGfBlR.SVMyaW4hDV5FkK9NRD6', NULL, '2024-11-21 18:22:02', '2024-11-21 18:22:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attendance_student_id_foreign` (`student_id`),
  ADD KEY `attendance_class_id_foreign` (`class_id`),
  ADD KEY `attendance_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `classes_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `exports`
--
ALTER TABLE `exports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exports_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_import_rows`
--
ALTER TABLE `failed_import_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `failed_import_rows_import_id_foreign` (`import_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grades_student_id_foreign` (`student_id`),
  ADD KEY `grades_class_id_foreign` (`class_id`);

--
-- Indexes for table `imports`
--
ALTER TABLE `imports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `imports_user_id_foreign` (`user_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `school_assets`
--
ALTER TABLE `school_assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `slip_gaji_guru`
--
ALTER TABLE `slip_gaji_guru`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slip_gaji_guru_guru_id_foreign` (`guru_id`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `spp_siswa_id_foreign` (`siswa_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_class_id_foreign` (`class_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exports`
--
ALTER TABLE `exports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_import_rows`
--
ALTER TABLE `failed_import_rows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `imports`
--
ALTER TABLE `imports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `school_assets`
--
ALTER TABLE `school_assets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slip_gaji_guru`
--
ALTER TABLE `slip_gaji_guru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `spp`
--
ALTER TABLE `spp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `attendance_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `attendance_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `classes_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `exports`
--
ALTER TABLE `exports`
  ADD CONSTRAINT `exports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `failed_import_rows`
--
ALTER TABLE `failed_import_rows`
  ADD CONSTRAINT `failed_import_rows_import_id_foreign` FOREIGN KEY (`import_id`) REFERENCES `imports` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `grades_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `grades_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `imports`
--
ALTER TABLE `imports`
  ADD CONSTRAINT `imports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `slip_gaji_guru`
--
ALTER TABLE `slip_gaji_guru`
  ADD CONSTRAINT `slip_gaji_guru_guru_id_foreign` FOREIGN KEY (`guru_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `spp`
--
ALTER TABLE `spp`
  ADD CONSTRAINT `spp_siswa_id_foreign` FOREIGN KEY (`siswa_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
