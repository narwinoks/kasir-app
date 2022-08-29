-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2022 at 03:50 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item_transaksi`
--

CREATE TABLE `tbl_item_transaksi` (
  `id_item_transaksi` int(11) NOT NULL,
  `id_transaksi` int(11) DEFAULT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `menu_price` decimal(10,0) DEFAULT NULL,
  `jumlah_pesanan` int(10) NOT NULL,
  `tgl_transaksi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_item_transaksi`
--

INSERT INTO `tbl_item_transaksi` (`id_item_transaksi`, `id_transaksi`, `id_menu`, `menu_price`, `jumlah_pesanan`, `tgl_transaksi`) VALUES
(34, 18, 6, '13000', 1, '2022-02-21'),
(35, 19, 8, '3000', 4, '2022-02-21'),
(36, 20, 6, '13000', 2, '2022-02-21'),
(37, 21, 6, '13000', 1, '2022-02-21'),
(38, 22, 7, '3000', 1, '2022-02-22'),
(39, 22, 6, '13000', 1, '2022-02-22'),
(40, 23, 8, '3000', 4, '2022-02-22'),
(41, 24, 6, '13000', 2, '2022-02-22'),
(42, 25, 8, '3000', 4, '2022-02-22'),
(43, 26, 9, '2000', 1, '2022-02-22'),
(44, 26, 8, '3000', 1, '2022-02-22'),
(45, 27, 8, '3000', 2, '2022-02-22'),
(46, 28, 7, '3000', 2, '2022-02-22'),
(47, 28, 6, '13000', 2, '2022-02-22'),
(48, 29, 25, '2000', 4, '2022-02-22'),
(49, 29, 21, '3000', 3, '2022-02-22'),
(50, 29, 8, '3000', 1, '2022-02-22'),
(51, 30, 24, '3500', 2, '2022-02-23'),
(52, 31, 24, '3500', 1, '2022-02-23'),
(53, 32, 33, '40000', 1, '2022-02-24'),
(54, 32, 40, '49500', 1, '2022-02-24'),
(55, 32, 32, '24000', 1, '2022-02-24'),
(56, 33, 28, '24000', 4, '2022-02-24'),
(57, 34, 31, '24000', 1, '2022-02-24'),
(61, 35, 42, '49500', 1, '2022-03-05'),
(62, 36, 38, '43000', 5, '2022-03-07'),
(63, 36, 32, '24000', 1, '2022-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_log`
--

CREATE TABLE `tbl_log` (
  `id_activity` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `log` varchar(100) DEFAULT NULL,
  `created_at` varchar(50) DEFAULT NULL,
  `update_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_log`
--

INSERT INTO `tbl_log` (`id_activity`, `id_user`, `log`, `created_at`, `update_at`) VALUES
(1, 3, 'login sukses', '2022-02-17 01:21:12', '2022-02-17 01:21:12'),
(2, 3, 'login sukses', '2022-02-17 01:25:04', '2022-02-17 01:25:04'),
(3, 3, 'login sukses', '2022-02-17 09:09:05', '2022-02-17 09:09:05'),
(4, 3, 'login sukses', '2022-02-17 09:46:49', '2022-02-17 09:46:49'),
(5, 3, 'menambahkan menues teh', '2022-02-17 10:02:00', '2022-02-17 10:02:00'),
(6, 3, 'menambahkan menu  dengan id  1', '2022-02-17 10:07:36', '2022-02-17 10:07:36'),
(7, 3, 'menambahkan menu  dengan id  2', '2022-02-17 10:08:07', '2022-02-17 10:08:07'),
(8, 3, 'menambahkan menu   Es teh', '2022-02-17 10:10:58', '2022-02-17 10:10:58'),
(9, 3, 'menambahkan menu   Es teh', '2022-02-17 10:17:01', '2022-02-17 10:17:01'),
(10, 3, 'menambahkan menu   Es teh', '2022-02-17 10:17:30', '2022-02-17 10:17:30'),
(11, 3, 'menambahkan menu   Es teh', '2022-02-17 10:17:39', '2022-02-17 10:17:39'),
(12, 3, 'login sukses', '2022-02-17 10:29:01', '2022-02-17 10:29:01'),
(13, 3, 'login sukses', '2022-02-17 10:29:20', '2022-02-17 10:29:20'),
(14, 3, 'login sukses', '2022-02-17 10:31:48', '2022-02-17 10:31:48'),
(15, 3, 'logout sukses', '2022-02-17 10:32:10', '2022-02-17 10:32:10'),
(16, 3, 'login sukses', '2022-02-17 10:32:36', '2022-02-17 10:32:36'),
(17, 3, 'logout sukses', '2022-02-17 10:32:38', '2022-02-17 10:32:38'),
(18, 3, 'login sukses', '2022-02-17 10:38:30', '2022-02-17 10:38:30'),
(19, 3, 'logout sukses', '2022-02-17 11:00:15', '2022-02-17 11:00:15'),
(20, 2, 'login sukses', '2022-02-17 11:00:20', '2022-02-17 11:00:20'),
(21, 3, 'login sukses', '2022-02-17 11:00:31', '2022-02-17 11:00:31'),
(22, 3, 'login sukses', '2022-02-17 11:00:50', '2022-02-17 11:00:50'),
(23, 3, 'login sukses', '2022-02-17 11:01:23', '2022-02-17 11:01:23'),
(24, 3, 'logout sukses', '2022-02-17 11:01:28', '2022-02-17 11:01:28'),
(25, 2, 'login sukses', '2022-02-17 11:01:34', '2022-02-17 11:01:34'),
(26, 3, 'login sukses', '2022-02-19 03:20:43', '2022-02-19 03:20:43'),
(27, 3, 'menambahkan menu   nasi goreng', '2022-02-19 03:21:21', '2022-02-19 03:21:21'),
(28, 3, 'menambahkan menu   es jeruk', '2022-02-19 03:25:53', '2022-02-19 03:25:53'),
(29, 3, 'menambahkan users   winarno', '2022-02-19 03:48:21', '2022-02-19 03:48:21'),
(30, 3, 'meenghapus menu  dengan id  4', '2022-02-19 03:51:31', '2022-02-19 03:51:31'),
(31, 3, 'mengubah  users   ', '2022-02-19 04:12:57', '2022-02-19 04:12:57'),
(32, 3, 'mengubah  users   ', '2022-02-19 04:13:06', '2022-02-19 04:13:06'),
(33, 3, 'login sukses', '2022-02-19 04:31:24', '2022-02-19 04:31:24'),
(34, 3, 'login sukses', '2022-02-19 04:37:41', '2022-02-19 04:37:41'),
(35, 3, 'login sukses', '2022-02-19 05:05:52', '2022-02-19 05:05:52'),
(36, 3, 'logout sukses', '2022-02-19 05:41:17', '2022-02-19 05:41:17'),
(37, 3, 'login sukses', '2022-02-19 05:41:29', '2022-02-19 05:41:29'),
(38, 3, 'login sukses', '2022-02-19 05:51:43', '2022-02-19 05:51:43'),
(39, 3, 'login sukses', '2022-02-19 08:45:48', '2022-02-19 08:45:48'),
(40, 3, 'login sukses', '2022-02-19 08:50:28', '2022-02-19 08:50:28'),
(41, 3, 'logout sukses', '2022-02-19 09:50:15', '2022-02-19 09:50:15'),
(42, 3, 'login sukses', '2022-02-19 09:50:20', '2022-02-19 09:50:20'),
(43, 3, 'logout sukses', '2022-02-19 09:52:22', '2022-02-19 09:52:22'),
(44, 3, 'logout sukses', '2022-02-19 09:54:11', '2022-02-19 09:54:11'),
(45, 3, 'login sukses', '2022-02-19 09:54:16', '2022-02-19 09:54:16'),
(46, 3, 'login sukses', '2022-02-19 10:01:36', '2022-02-19 10:01:36'),
(47, 3, 'menabah pesanan  atas nama', '2022-02-19 11:30:17', '2022-02-19 11:30:17'),
(48, 3, 'logout sukses', '2022-02-19 11:31:05', '2022-02-19 11:31:05'),
(49, 3, 'login sukses', '2022-02-19 11:31:15', '2022-02-19 11:31:15'),
(50, 3, 'menabah pesanan  atas nama', '2022-02-19 11:31:44', '2022-02-19 11:31:44'),
(51, 3, 'menabah pesanan  atas nama', '2022-02-19 11:34:53', '2022-02-19 11:34:53'),
(52, 3, 'menabah pesanan  atas nama', '2022-02-19 11:34:53', '2022-02-19 11:34:53'),
(53, 3, 'menabah pesanan  atas nama', '2022-02-19 11:34:54', '2022-02-19 11:34:54'),
(54, 3, 'menabah pesanan  atas nama', '2022-02-19 11:34:54', '2022-02-19 11:34:54'),
(55, 3, 'menabah pesanan  atas nama', '2022-02-19 11:36:34', '2022-02-19 11:36:34'),
(56, 3, 'menabah pesanan  atas nama', '2022-02-19 11:36:35', '2022-02-19 11:36:35'),
(57, 3, 'menabah pesanan  atas nama', '2022-02-19 11:36:35', '2022-02-19 11:36:35'),
(58, 3, 'menabah pesanan  atas nama', '2022-02-19 11:36:35', '2022-02-19 11:36:35'),
(59, 3, 'menabah pesanan  atas nama', '2022-02-19 11:37:39', '2022-02-19 11:37:39'),
(60, 3, 'menabah pesanan  atas nama', '2022-02-19 11:37:39', '2022-02-19 11:37:39'),
(61, 3, 'menabah pesanan  atas nama', '2022-02-19 11:37:39', '2022-02-19 11:37:39'),
(62, 3, 'menabah pesanan  atas nama', '2022-02-19 11:37:40', '2022-02-19 11:37:40'),
(63, 3, 'menabah pesanan  atas namawinarn', '2022-02-19 11:40:06', '2022-02-19 11:40:06'),
(64, 3, 'menabah pesanan  atas namawinarn', '2022-02-19 11:40:06', '2022-02-19 11:40:06'),
(65, 3, 'login sukses', '2022-02-20 02:42:47', '2022-02-20 02:42:47'),
(66, 3, 'menabah pesanan  atas nama', '2022-02-20 03:26:08', '2022-02-20 03:26:08'),
(67, 3, 'menabah pesanan  atas namadika', '2022-02-20 03:34:29', '2022-02-20 03:34:29'),
(68, 3, 'menabah pesanan  atas nama     mahendra', '2022-02-20 03:41:14', '2022-02-20 03:41:14'),
(69, 3, 'login sukses', '2022-02-20 03:58:36', '2022-02-20 03:58:36'),
(70, 3, 'menabah pesanan  atas nama     anggar', '2022-02-20 04:13:17', '2022-02-20 04:13:17'),
(71, 3, 'logout sukses', '2022-02-20 04:14:57', '2022-02-20 04:14:57'),
(72, 2, 'login sukses', '2022-02-20 04:15:26', '2022-02-20 04:15:26'),
(73, 2, 'logout sukses', '2022-02-20 04:16:50', '2022-02-20 04:16:50'),
(74, 2, 'login sukses', '2022-02-20 04:16:57', '2022-02-20 04:16:57'),
(75, 2, 'menabah pesanan  atas nama     adriyan', '2022-02-20 04:19:20', '2022-02-20 04:19:20'),
(76, 2, 'login sukses', '2022-02-20 04:30:59', '2022-02-20 04:30:59'),
(77, 2, 'menabah pesanan  atas nama     dika', '2022-02-20 04:34:31', '2022-02-20 04:34:31'),
(78, 2, 'menabah pesanan  atas nama     dika', '2022-02-20 04:49:57', '2022-02-20 04:49:57'),
(79, 2, 'logout sukses', '2022-02-20 05:18:02', '2022-02-20 05:18:02'),
(80, 3, 'login sukses', '2022-02-20 05:18:19', '2022-02-20 05:18:19'),
(81, 2, 'login sukses', '2022-02-20 05:19:28', '2022-02-20 05:19:28'),
(82, 2, 'login sukses', '2022-02-21 00:53:10', '2022-02-21 00:53:10'),
(83, 2, 'login sukses', '2022-02-21 00:53:10', '2022-02-21 00:53:10'),
(84, 2, 'logout sukses', '2022-02-21 00:53:57', '2022-02-21 00:53:57'),
(85, 2, 'login sukses', '2022-02-21 00:54:03', '2022-02-21 00:54:03'),
(86, 2, 'logout sukses', '2022-02-21 00:54:38', '2022-02-21 00:54:38'),
(87, 3, 'login sukses', '2022-02-21 00:54:44', '2022-02-21 00:54:44'),
(88, 3, 'login sukses', '2022-02-21 01:33:15', '2022-02-21 01:33:15'),
(89, 3, 'logout sukses', '2022-02-21 01:35:29', '2022-02-21 01:35:29'),
(90, 3, 'login sukses', '2022-02-21 01:35:35', '2022-02-21 01:35:35'),
(91, 3, 'meenghapus menu  dengan id  5', '2022-02-21 01:37:45', '2022-02-21 01:37:45'),
(92, 3, 'meenghapus menu  dengan id  3', '2022-02-21 01:37:49', '2022-02-21 01:37:49'),
(93, 3, 'meenghapus menu  dengan id  4', '2022-02-21 01:37:52', '2022-02-21 01:37:52'),
(94, 3, 'menambahkan menu   nasi goreng', '2022-02-21 01:39:06', '2022-02-21 01:39:06'),
(95, 3, 'mengubah  menu   nasi goreng', '2022-02-21 01:39:18', '2022-02-21 01:39:18'),
(96, 3, 'logout sukses', '2022-02-21 02:13:37', '2022-02-21 02:13:37'),
(97, 3, 'login sukses', '2022-02-21 02:26:06', '2022-02-21 02:26:06'),
(107, 2, 'menabah pesanan  atas nama     winarno', '2022-02-21 03:34:18', '2022-02-21 03:34:18'),
(108, 2, 'menambahkan menu   es teh', '2022-02-21 03:38:34', '2022-02-21 03:38:34'),
(109, 2, 'menambahkan menu   es jeruk', '2022-02-21 03:40:11', '2022-02-21 03:40:11'),
(110, 2, 'menabah pesanan  atas nama     winarno', '2022-02-21 03:43:31', '2022-02-21 03:43:31'),
(111, 2, 'logout sukses', '2022-02-21 03:43:51', '2022-02-21 03:43:51'),
(112, 3, 'login sukses', '2022-02-21 03:43:59', '2022-02-21 03:43:59'),
(113, 3, 'login sukses', '2022-02-21 03:46:37', '2022-02-21 03:46:37'),
(114, 3, 'logout sukses', '2022-02-21 04:11:28', '2022-02-21 04:11:28'),
(115, NULL, 'logout sukses', '2022-02-21 04:11:29', '2022-02-21 04:11:29'),
(116, 2, 'login sukses', '2022-02-21 04:11:35', '2022-02-21 04:11:35'),
(117, 2, 'menabah pesanan  atas nama     dika', '2022-02-21 04:11:57', '2022-02-21 04:11:57'),
(118, 2, 'menabah pesanan  atas nama     anggar', '2022-02-21 04:13:43', '2022-02-21 04:13:43'),
(119, 2, 'logout sukses', '2022-02-21 04:13:50', '2022-02-21 04:13:50'),
(120, 3, 'login sukses', '2022-02-21 04:13:59', '2022-02-21 04:13:59'),
(121, 2, 'login sukses', '2022-02-21 05:25:53', '2022-02-21 05:25:53'),
(122, 2, 'logout sukses', '2022-02-21 05:33:43', '2022-02-21 05:33:43'),
(123, 3, 'login sukses', '2022-02-21 05:33:50', '2022-02-21 05:33:50'),
(124, 3, 'mengubah  menu   nasi goreng special', '2022-02-21 07:28:14', '2022-02-21 07:28:14'),
(125, 3, 'logout sukses', '2022-02-21 07:55:12', '2022-02-21 07:55:12'),
(126, 3, 'login sukses', '2022-02-21 07:55:25', '2022-02-21 07:55:25'),
(127, 3, 'logout sukses', '2022-02-21 07:55:33', '2022-02-21 07:55:33'),
(128, 2, 'login sukses', '2022-02-21 07:55:44', '2022-02-21 07:55:44'),
(129, 2, 'logout sukses', '2022-02-21 07:59:06', '2022-02-21 07:59:06'),
(130, 3, 'login sukses', '2022-02-21 07:59:21', '2022-02-21 07:59:21'),
(131, 3, 'logout sukses', '2022-02-21 08:31:21', '2022-02-21 08:31:21'),
(132, 3, 'login sukses', '2022-02-21 10:12:50', '2022-02-21 10:12:50'),
(133, 3, 'login sukses', '2022-02-22 02:10:38', '2022-02-22 02:10:38'),
(134, 3, 'logout sukses', '2022-02-22 03:10:05', '2022-02-22 03:10:05'),
(135, 2, 'login sukses', '2022-02-22 03:10:17', '2022-02-22 03:10:17'),
(136, 2, 'menabah pesanan  atas nama     winarno', '2022-02-22 03:10:40', '2022-02-22 03:10:40'),
(137, 2, 'logout sukses', '2022-02-22 03:20:07', '2022-02-22 03:20:07'),
(138, 3, 'login sukses', '2022-02-22 03:20:15', '2022-02-22 03:20:15'),
(139, 3, 'logout sukses', '2022-02-22 04:06:43', '2022-02-22 04:06:43'),
(140, 2, 'login sukses', '2022-02-22 04:06:49', '2022-02-22 04:06:49'),
(141, 2, 'menabah pesanan  atas nama     winarno', '2022-02-22 04:07:02', '2022-02-22 04:07:02'),
(142, 2, 'logout sukses', '2022-02-22 04:07:04', '2022-02-22 04:07:04'),
(143, 3, 'login sukses', '2022-02-22 04:07:19', '2022-02-22 04:07:19'),
(144, 3, 'logout sukses', '2022-02-22 04:24:34', '2022-02-22 04:24:34'),
(145, 2, 'login sukses', '2022-02-22 04:24:45', '2022-02-22 04:24:45'),
(146, 2, 'menabah pesanan  atas nama     winarno', '2022-02-22 04:24:59', '2022-02-22 04:24:59'),
(147, 2, 'logout sukses', '2022-02-22 04:25:03', '2022-02-22 04:25:03'),
(148, 3, 'login sukses', '2022-02-22 04:25:09', '2022-02-22 04:25:09'),
(149, 2, 'login sukses', '2022-02-22 04:46:26', '2022-02-22 04:46:26'),
(150, 2, 'menabah pesanan  atas nama     tgl_pesanan', '2022-02-22 04:46:38', '2022-02-22 04:46:38'),
(151, 2, 'logout sukses', '2022-02-22 04:46:41', '2022-02-22 04:46:41'),
(152, 3, 'login sukses', '2022-02-22 04:46:48', '2022-02-22 04:46:48'),
(153, 3, 'menambahkan menu   nasi putih', '2022-02-22 07:17:12', '2022-02-22 07:17:12'),
(154, 3, 'meenghapus menu  dengan id  9', '2022-02-22 13:19:38', '2022-02-22 13:19:38'),
(155, 3, 'meenghapus menu  dengan id  8', '2022-02-22 07:20:38', '2022-02-22 07:20:38'),
(156, 3, 'mengubah  menu   nasi goreng special', '2022-02-22 13:24:08', '2022-02-22 13:24:08'),
(157, 3, 'logout sukses', '2022-02-22 14:24:11', '2022-02-22 14:24:11'),
(158, 2, 'login sukses ', '2022-02-22 14:26:21', '2022-02-22 14:26:21'),
(159, 2, 'menabah pesanan  atas nama     adriyan', '2022-02-22 14:28:48', '2022-02-22 14:28:48'),
(160, 2, 'logout sukses', '2022-02-22 14:32:00', '2022-02-22 14:32:00'),
(161, 3, 'login sukses ', '2022-02-22 14:32:48', '2022-02-22 14:32:48'),
(162, 3, 'logout sukses', '2022-02-22 14:34:21', '2022-02-22 14:34:21'),
(163, 3, 'login sukses ', '2022-02-22 14:34:54', '2022-02-22 14:34:54'),
(164, 3, 'logout sukses', '2022-02-22 14:36:07', '2022-02-22 14:36:07'),
(165, 3, 'login sukses ', '2022-02-22 14:36:26', '2022-02-22 14:36:26'),
(166, 3, 'logout sukses', '2022-02-22 14:38:08', '2022-02-22 14:38:08'),
(167, 1, 'login sukses ', '2022-02-22 14:38:21', '2022-02-22 14:38:21'),
(168, 1, 'menambahkan users   dika', '2022-02-22 14:42:08', '2022-02-22 14:42:08'),
(169, 1, 'logout sukses', '2022-02-22 14:42:38', '2022-02-22 14:42:38'),
(170, 1, 'login sukses ', '2022-02-22 14:43:22', '2022-02-22 14:43:22'),
(171, 1, 'menambahkan users   dega', '2022-02-22 14:45:43', '2022-02-22 14:45:43'),
(172, 1, 'meenghapus menu  dengan id  6', '2022-02-22 14:45:58', '2022-02-22 14:45:58'),
(173, 1, 'logout sukses', '2022-02-22 14:51:49', '2022-02-22 14:51:49'),
(174, 2, 'login sukses ', '2022-02-22 14:52:08', '2022-02-22 14:52:08'),
(175, 2, 'logout sukses', '2022-02-22 14:52:11', '2022-02-22 14:52:11'),
(176, 1, 'login sukses ', '2022-02-22 14:52:18', '2022-02-22 14:52:18'),
(177, 1, 'logout sukses', '2022-02-22 14:54:39', '2022-02-22 14:54:39'),
(178, 5, 'login sukses ', '2022-02-22 14:54:48', '2022-02-22 14:54:48'),
(179, 5, 'menambah pesanan  atas nama dimas', '2022-02-22 14:55:12', '2022-02-22 14:55:12'),
(180, 5, 'logout sukses', '2022-02-22 14:55:21', '2022-02-22 14:55:21'),
(181, 3, 'login sukses ', '2022-02-22 14:55:27', '2022-02-22 14:55:27'),
(182, 3, 'logout sukses', '2022-02-22 14:55:54', '2022-02-22 14:55:54'),
(183, 1, 'login sukses ', '2022-02-22 14:56:00', '2022-02-22 14:56:00'),
(184, 1, 'logout sukses', '2022-02-22 14:56:11', '2022-02-22 14:56:11'),
(185, 5, 'login sukses ', '2022-02-22 14:56:17', '2022-02-22 14:56:17'),
(186, 5, 'logout sukses', '2022-02-22 14:58:41', '2022-02-22 14:58:41'),
(187, 1, 'login sukses ', '2022-02-22 15:00:05', '2022-02-22 15:00:05'),
(188, NULL, 'logout sukses', '2022-02-22 15:38:54', '2022-02-22 15:38:54'),
(189, NULL, 'logout sukses', '2022-02-22 15:38:54', '2022-02-22 15:38:54'),
(190, 1, 'login sukses ', '2022-02-22 15:39:02', '2022-02-22 15:39:02'),
(191, NULL, 'logout sukses', '2022-02-22 15:40:06', '2022-02-22 15:40:06'),
(192, 1, 'login sukses ', '2022-02-22 15:40:12', '2022-02-22 15:40:12'),
(193, 1, 'logout sukses', '2022-02-22 16:39:05', '2022-02-22 16:39:05'),
(194, 1, 'login sukses ', '2022-02-22 16:39:17', '2022-02-22 16:39:17'),
(195, 1, 'logout sukses', '2022-02-22 16:39:41', '2022-02-22 16:39:41'),
(196, 5, 'login sukses ', '2022-02-22 16:39:50', '2022-02-22 16:39:50'),
(197, 5, 'menambah pesanan  atas nama winarno', '2022-02-22 16:44:07', '2022-02-22 16:44:07'),
(198, 5, 'logout sukses', '2022-02-22 16:44:22', '2022-02-22 16:44:22'),
(199, 3, 'login sukses ', '2022-02-22 16:44:28', '2022-02-22 16:44:28'),
(200, 3, 'logout sukses', '2022-02-22 16:49:26', '2022-02-22 16:49:26'),
(201, 3, 'login sukses ', '2022-02-22 16:49:37', '2022-02-22 16:49:37'),
(202, 3, 'menambahkan menu   Es Kopi Susu Original', '2022-02-22 16:53:37', '2022-02-22 16:53:37'),
(203, 3, 'menambahkan menu   Es Kopi Susu Disini', '2022-02-22 16:54:08', '2022-02-22 16:54:08'),
(204, 3, 'menambahkan menu   Chichen', '2022-02-22 16:55:29', '2022-02-22 16:55:29'),
(205, 3, 'menambahkan menu   Mei Goreng', '2022-02-22 16:55:43', '2022-02-22 16:55:43'),
(206, 3, 'menambahkan menu   Mei Goreng Special', '2022-02-22 16:56:00', '2022-02-22 16:56:00'),
(207, 3, 'menambahkan menu   Mei Goreng Telur', '2022-02-22 16:56:22', '2022-02-22 16:56:22'),
(208, 3, 'menambahkan menu   Mei Goreng Telur Special', '2022-02-22 16:56:42', '2022-02-22 16:56:42'),
(209, 3, 'menambahkan menu   Indomei Rebus', '2022-02-22 16:57:13', '2022-02-22 16:57:13'),
(210, 3, 'menambahkan menu   Indomei Rebus Telur Special', '2022-02-22 16:57:45', '2022-02-22 16:57:45'),
(211, 3, 'menambahkan menu   Teh Pochi', '2022-02-22 16:58:53', '2022-02-22 16:58:53'),
(212, 3, 'menambahkan menu   Good Day Merah', '2022-02-22 16:59:22', '2022-02-22 16:59:22'),
(213, 3, 'menambahkan menu   Good Day Putih ', '2022-02-22 16:59:39', '2022-02-22 16:59:39'),
(214, 3, 'menambahkan menu   Good Day Coklat', '2022-02-22 16:59:56', '2022-02-22 16:59:56'),
(215, 3, 'menambahkan menu   Capucino', '2022-02-22 17:00:14', '2022-02-22 17:00:14'),
(216, 3, 'menambahkan menu   Sarimei Isi 2', '2022-02-22 17:00:31', '2022-02-22 17:00:31'),
(217, 3, 'menambahkan menu   Sarimei Isi 1', '2022-02-22 17:00:47', '2022-02-22 17:00:47'),
(218, 3, 'menambahkan menu   Steak Ayam Kampung', '2022-02-22 17:01:06', '2022-02-22 17:01:06'),
(219, 3, 'menambahkan menu   Steak Ayam Gak Kampung', '2022-02-22 17:01:28', '2022-02-22 17:01:28'),
(220, 3, 'logout sukses', '2022-02-22 17:01:49', '2022-02-22 17:01:49'),
(221, 2, 'login sukses ', '2022-02-22 17:01:53', '2022-02-22 17:01:53'),
(222, 2, 'menambah pesanan  atas nama winarno', '2022-02-22 17:44:44', '2022-02-22 17:44:44'),
(223, 2, 'logout sukses', '2022-02-22 17:44:56', '2022-02-22 17:44:56'),
(224, 3, 'login sukses ', '2022-02-22 17:45:02', '2022-02-22 17:45:02'),
(225, 3, 'login sukses ', '2022-02-23 07:26:58', '2022-02-23 07:26:58'),
(226, 3, 'logout sukses', '2022-02-23 08:16:53', '2022-02-23 08:16:53'),
(227, 5, 'login sukses ', '2022-02-23 08:19:23', '2022-02-23 08:19:23'),
(228, 5, 'menambah pesanan  atas nama mahendra', '2022-02-23 08:19:55', '2022-02-23 08:19:55'),
(229, 5, 'menambah pesanan  atas nama winarno', '2022-02-23 08:20:27', '2022-02-23 08:20:27'),
(230, 5, 'logout sukses', '2022-02-23 08:20:34', '2022-02-23 08:20:34'),
(231, 3, 'login sukses ', '2022-02-23 08:20:41', '2022-02-23 08:20:41'),
(232, 3, 'menambahkan menu   Choco Mint', '2022-02-23 10:24:14', '2022-02-23 10:24:14'),
(233, 3, 'menambahkan menu   Toffee Coffee', '2022-02-23 10:24:39', '2022-02-23 10:24:39'),
(234, 3, 'menambahkan menu   Green Tea Shake', '2022-02-23 10:25:01', '2022-02-23 10:25:01'),
(235, 3, 'menambahkan menu   Strawberry Milkshake', '2022-02-23 10:25:17', '2022-02-23 10:25:17'),
(236, 3, 'menambahkan menu   Chocolate Milkshake', '2022-02-23 10:25:33', '2022-02-23 10:25:33'),
(237, 3, 'menambahkan menu   Meatballs Beef Mushroom', '2022-02-23 10:27:30', '2022-02-23 10:27:30'),
(238, 3, 'menambahkan menu   Black Pepper Chicken', '2022-02-23 10:27:48', '2022-02-23 10:27:48'),
(239, 3, 'menambahkan menu   Oriental Chicken', '2022-02-23 10:28:10', '2022-02-23 10:28:10'),
(240, 3, 'menambahkan menu   Beef Spaghetti', '2022-02-23 10:28:25', '2022-02-23 10:28:25'),
(241, 3, 'menambahkan menu   Beef Lasagna', '2022-02-23 10:28:49', '2022-02-23 10:28:49'),
(242, 3, 'menambahkan menu   Creamy Beef Fettuccine', '2022-02-23 10:29:25', '2022-02-23 10:29:25'),
(243, 3, 'menambahkan menu   Meat Lover', '2022-02-23 10:29:56', '2022-02-23 10:29:56'),
(244, 3, 'menambahkan menu   Super Supreme', '2022-02-23 10:30:16', '2022-02-23 10:30:16'),
(245, 3, 'menambahkan menu   Tuna Melt', '2022-02-23 10:30:34', '2022-02-23 10:30:34'),
(246, 3, 'menambahkan menu   American Favourite', '2022-02-23 10:31:05', '2022-02-23 10:31:05'),
(247, 5, 'login sukses ', '2022-02-24 13:34:34', '2022-02-24 13:34:34'),
(248, 5, 'menambah pesanan  atas nama winarno', '2022-02-24 13:37:45', '2022-02-24 13:37:45'),
(249, 5, 'menambah pesanan  atas nama winarno', '2022-02-24 13:38:52', '2022-02-24 13:38:52'),
(250, 5, 'menambah pesanan  atas nama dika', '2022-02-24 16:00:48', '2022-02-24 16:00:48'),
(251, 5, 'logout sukses', '2022-02-24 16:04:13', '2022-02-24 16:04:13'),
(252, 3, 'login sukses ', '2022-02-24 16:04:19', '2022-02-24 16:04:19'),
(253, 3, 'login sukses ', '2022-02-25 08:29:15', '2022-02-25 08:29:15'),
(254, 3, 'menambahkan menu   Late', '2022-02-25 08:29:45', '2022-02-25 08:29:45'),
(255, 3, 'logout sukses', '2022-02-25 08:30:23', '2022-02-25 08:30:23'),
(256, 5, 'login sukses ', '2022-03-05 14:22:34', '2022-03-05 14:22:34'),
(257, 5, 'logout sukses', '2022-03-05 14:39:02', '2022-03-05 14:39:02'),
(258, 5, 'login sukses ', '2022-03-05 14:39:07', '2022-03-05 14:39:07'),
(259, 5, 'menambah pesanan  atas nama winarno', '2022-03-05 14:42:45', '2022-03-05 14:42:45'),
(260, 5, 'menambah pesanan  atas nama winarno', '2022-03-05 14:48:43', '2022-03-05 14:48:43'),
(261, 5, 'logout sukses', '2022-03-05 14:52:25', '2022-03-05 14:52:25'),
(262, 5, 'login sukses ', '2022-03-06 12:11:33', '2022-03-06 12:11:33'),
(263, 5, 'login sukses ', '2022-03-07 10:51:41', '2022-03-07 10:51:41'),
(264, 5, 'login sukses ', '2022-03-07 11:44:24', '2022-03-07 11:44:24'),
(265, 5, 'logout sukses', '2022-03-07 13:21:20', '2022-03-07 13:21:20'),
(266, 1, 'login sukses ', '2022-03-07 13:21:36', '2022-03-07 13:21:36'),
(267, 1, 'logout sukses', '2022-03-07 13:22:27', '2022-03-07 13:22:27'),
(268, 5, 'login sukses ', '2022-03-07 13:25:44', '2022-03-07 13:25:44'),
(269, 5, 'menambah pesanan  atas nama dika', '2022-03-07 13:59:22', '2022-03-07 13:59:22'),
(270, 5, 'logout sukses', '2022-03-07 14:11:02', '2022-03-07 14:11:02'),
(271, 1, 'login sukses ', '2022-03-07 14:11:08', '2022-03-07 14:11:08'),
(272, 1, 'logout sukses', '2022-03-07 14:11:40', '2022-03-07 14:11:40'),
(273, 3, 'login sukses ', '2022-03-07 14:11:45', '2022-03-07 14:11:45'),
(274, 3, 'logout sukses', '2022-03-07 14:32:20', '2022-03-07 14:32:20'),
(275, 5, 'login sukses ', '2022-03-07 14:32:28', '2022-03-07 14:32:28'),
(276, 5, 'logout sukses', '2022-03-07 14:36:28', '2022-03-07 14:36:28'),
(277, 3, 'login sukses ', '2022-03-07 14:36:41', '2022-03-07 14:36:41'),
(278, 5, 'login sukses ', '2022-03-08 13:20:31', '2022-03-08 13:20:31'),
(279, 1, 'login sukses ', '2022-03-11 09:29:37', '2022-03-11 09:29:37'),
(280, 1, 'logout sukses', '2022-03-11 09:35:05', '2022-03-11 09:35:05'),
(281, 3, 'login sukses ', '2022-03-11 09:35:23', '2022-03-11 09:35:23'),
(282, 3, 'logout sukses', '2022-03-11 09:46:38', '2022-03-11 09:46:38'),
(283, 5, 'login sukses ', '2022-03-11 09:46:43', '2022-03-11 09:46:43'),
(284, 5, 'logout sukses', '2022-03-11 09:46:45', '2022-03-11 09:46:45'),
(285, 3, 'login sukses ', '2022-03-11 09:46:51', '2022-03-11 09:46:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id_menu` int(11) NOT NULL,
  `category` int(1) DEFAULT 0 COMMENT '0:makanan,1:minuman',
  `menu_name` varchar(100) DEFAULT NULL,
  `menu_price` decimal(10,0) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`id_menu`, `category`, `menu_name`, `menu_price`, `status`) VALUES
(6, 0, 'nasi goreng special', '13000', 0),
(7, 1, 'es teh', '3000', 0),
(8, 1, 'es jeruk', '3000', 0),
(9, 0, 'nasi putih', '2000', 0),
(10, 1, 'Es Kopi Susu Original', '14000', 0),
(11, 1, 'Es Kopi Susu Disini', '16000', 0),
(12, 0, 'Chichen', '20707', 0),
(13, 0, 'Mei Goreng', '2500', 0),
(14, 0, 'Mei Goreng Special', '3500', 0),
(15, 0, 'Mei Goreng Telur', '5000', 0),
(16, 0, 'Mei Goreng Telur Special', '5500', 0),
(17, 0, 'Indomei Rebus', '3000', 0),
(18, 0, 'Indomei Rebus Telur Special', '5000', 0),
(19, 1, 'Teh Pochi', '10000', 0),
(20, 1, 'Good Day Merah', '2500', 0),
(21, 1, 'Good Day Putih ', '3000', 0),
(22, 1, 'Good Day Coklat', '3000', 0),
(23, 1, 'Capucino', '5500', 0),
(24, 0, 'Sarimei Isi 2', '3500', 0),
(25, 0, 'Sarimei Isi 1', '2000', 0),
(26, 0, 'Steak Ayam Kampung', '17400', 0),
(27, 0, 'Steak Ayam Gak Kampung', '14000', 0),
(28, 1, 'Choco Mint', '24000', 2),
(29, 1, 'Toffee Coffee', '24000', 2),
(30, 1, 'Green Tea Shake', '24000', 2),
(31, 1, 'Strawberry Milkshake', '24000', 2),
(32, 1, 'Chocolate Milkshake', '24000', 2),
(33, 0, 'Meatballs Beef Mushroom', '40000', 2),
(34, 0, 'Black Pepper Chicken', '400000', 2),
(35, 0, 'Oriental Chicken', '40000', 2),
(36, 0, 'Beef Spaghetti', '40000', 2),
(37, 0, 'Beef Lasagna', '48000', 2),
(38, 0, 'Creamy Beef Fettuccine', '43000', 2),
(39, 0, 'Meat Lover', '49500', 2),
(40, 0, 'Super Supreme', '49500', 2),
(41, 0, 'Tuna Melt', '49500', 2),
(42, 0, 'American Favourite', '49500', 2),
(43, 1, 'Late', '45001', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `transaksi_code` varchar(20) NOT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `table_code` varchar(20) DEFAULT NULL,
  `tgl_transaksi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `id_user`, `transaksi_code`, `customer_name`, `table_code`, `tgl_transaksi`) VALUES
(18, 2, 'P21022022001', 'winarno', '', '2022-02-21'),
(19, 2, 'P21022022002', 'winarno', '', '2022-02-21'),
(20, 2, 'P21022022003', 'dika', '', '2022-02-21'),
(21, 2, 'P21022022004', 'anggar', '', '2022-02-21'),
(22, 2, 'P22022022001', 'winarno', '', '2022-02-22'),
(23, 2, 'P22022022002', 'winarno', '', '2022-02-22'),
(24, 2, 'P22022022003', 'winarno', '', '2022-02-22'),
(25, 2, 'P22022022004', 'tgl_pesanan', '', '2022-02-22'),
(26, 2, 'P22022022005', 'adriyan', '', '2022-02-22'),
(27, 5, 'P22022022006', 'dimas', '', '2022-02-22'),
(28, 5, 'P22022022007', 'winarno', '', '2022-02-22'),
(29, 2, 'P22022022008', 'winarno', '', '2022-02-22'),
(30, 5, 'P23022022001', 'mahendra', '', '2022-02-23'),
(31, 5, 'P23022022002', 'winarno', '', '2022-02-23'),
(32, 5, 'P24022022001', 'winarno', '', '2022-02-24'),
(33, 5, 'P24022022002', 'winarno', '', '2022-02-24'),
(34, 5, 'P24022022003', 'dika', '', '2022-02-24'),
(35, 5, 'P05032022001', 'winarno', '001', '2022-03-05'),
(36, 5, 'P07032022001', 'dika', '12we', '2022-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` int(1) DEFAULT NULL COMMENT '1:admin,2:manager,3:kasir',
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id_user`, `name`, `username`, `password`, `level`, `status`) VALUES
(1, 'admin', 'admin', '202cb962ac59075b964b07152d234b70', 1, 2),
(2, 'kasir', 'kasir', '202cb962ac59075b964b07152d234b70', 3, 2),
(3, 'manager', 'manager', '202cb962ac59075b964b07152d234b70', 2, 2),
(5, 'dika', 'dika', '202cb962ac59075b964b07152d234b70', 3, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_item_transaksi`
--
ALTER TABLE `tbl_item_transaksi`
  ADD PRIMARY KEY (`id_item_transaksi`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indexes for table `tbl_log`
--
ALTER TABLE `tbl_log`
  ADD PRIMARY KEY (`id_activity`),
  ADD KEY `id_user_log` (`id_user`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user_transaksi` (`id_user`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_item_transaksi`
--
ALTER TABLE `tbl_item_transaksi`
  MODIFY `id_item_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tbl_log`
--
ALTER TABLE `tbl_log`
  MODIFY `id_activity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=286;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_item_transaksi`
--
ALTER TABLE `tbl_item_transaksi`
  ADD CONSTRAINT `id_menu` FOREIGN KEY (`id_menu`) REFERENCES `tbl_menu` (`id_menu`) ON DELETE SET NULL,
  ADD CONSTRAINT `id_transaksi` FOREIGN KEY (`id_transaksi`) REFERENCES `tbl_transaksi` (`id_transaksi`) ON DELETE SET NULL;

--
-- Constraints for table `tbl_log`
--
ALTER TABLE `tbl_log`
  ADD CONSTRAINT `id_user_log` FOREIGN KEY (`id_user`) REFERENCES `tbl_users` (`id_user`) ON DELETE SET NULL;

--
-- Constraints for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD CONSTRAINT `id_user_transaksi` FOREIGN KEY (`id_user`) REFERENCES `tbl_users` (`id_user`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
