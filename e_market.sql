-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 08, 2019 lúc 05:06 PM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
-- Phiên bản PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `e_market`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(20) NOT NULL,
  `type` int(11) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `name`, `image`, `email`, `address`, `phone`, `type`, `password`, `created_at`, `updated_at`) VALUES
(11, 'demo', '2015-12-13 337.png', 'demo@gmail.com', 'Hà Nội', 123456789, NULL, '$2y$10$1Den359sLseczeWBmBJfGuffdDar4K7FsO4r/eDQ0j.HqbwInWqJq', '2019-11-07 18:17:28', '2019-11-07 11:17:28'),
(13, 'Hoàng Quý', 'avatar2.jpg', 'HoangQuy@gmail.com', 'Hoàng Quốc Việt -Hà Nội', 123456789, NULL, '$2y$10$1.mrJt5DCCl4HFHqVr0KjOS9QB4t1yF2OhGok/2fUET.bNSeTz2XG', '2019-11-08 11:12:10', '2019-11-08 04:20:04'),
(14, 'Hoàng Quý', 'avatar5.png', 'Hoangquy-gtvt@gmail.com', 'Ngã Tư Sở - Đống Đa', 386791321, NULL, '$2y$10$0pk7cxab4TNHEIcsjLHge.5XEWo/h.n1RkXkny2NKIHBmNLfXkoqe', '2019-11-08 14:57:27', '2019-11-08 07:57:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id` int(100) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(100) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `status`, `type`, `created_at`, `updated_at`) VALUES
(13, 'THỜI TRANG', 1, 0, '2019-11-06 05:13:52', '2019-11-06 05:14:44'),
(14, 'THIẾT BỊ ĐIỆN TỬ VÀ MÁY TÍNH', 1, 1, '2019-11-06 05:14:33', '2019-11-06 05:14:33'),
(15, 'ĐỒ CHƠI', 1, 1, '2019-11-06 05:14:54', '2019-11-06 05:14:54'),
(16, 'ĐỒ DÙNG GIA ĐÌNH', 1, 1, '2019-11-06 05:15:02', '2019-11-06 05:15:02'),
(17, 'NỘI THẤT', 1, 1, '2019-11-06 05:15:10', '2019-11-06 05:15:10'),
(18, 'ĐỒ DÙNG THỂ THAO', 1, 1, '2019-11-06 05:15:21', '2019-11-06 05:15:21'),
(19, 'QUÀ TẶNG', 1, 1, '2019-11-06 05:15:40', '2019-11-06 05:15:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `color`
--

CREATE TABLE `color` (
  `id` int(100) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(100) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `delive`
--

CREATE TABLE `delive` (
  `id` int(100) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `img_product`
--

CREATE TABLE `img_product` (
  `id_product` int(11) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `img_product`
--

INSERT INTO `img_product` (`id_product`, `image`, `created_at`, `updated_at`) VALUES
(24, 'http://localhost/e_market/uploads/P7xJRs_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:07:56', '2019-11-06 13:07:56'),
(24, 'http://localhost/e_market/uploads/P7xJRs.jpg', '2019-11-06 13:07:56', '2019-11-06 13:07:56'),
(24, 'http://localhost/e_market/uploads/AlIIgD.jpg', '2019-11-06 13:07:56', '2019-11-06 13:07:56'),
(25, 'http://localhost/e_market/uploads/hpPl2N.jpg', '2019-11-06 13:12:21', '2019-11-06 13:12:21'),
(25, 'http://localhost/e_market/uploads/d1U4pd_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:12:21', '2019-11-06 13:12:21'),
(25, 'http://localhost/e_market/uploads/7vXG8A.jpg', '2019-11-06 13:12:21', '2019-11-06 13:12:21'),
(26, 'http://localhost/e_market/uploads/img/PWUoNm_simg_de2fe0_500x500_maxb%20(1).jpg', '2019-11-06 13:20:22', '2019-11-06 13:20:22'),
(26, 'http://localhost/e_market/uploads/img/PWUoNm_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:20:22', '2019-11-06 13:20:22'),
(27, 'http://localhost/e_market/uploads/img/h7yRbt_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:21:40', '2019-11-06 13:21:40'),
(27, 'http://localhost/e_market/uploads/img/hnNd5W.jpg', '2019-11-06 13:21:40', '2019-11-06 13:21:40'),
(27, 'http://localhost/e_market/uploads/img/IGb3bk.jpg', '2019-11-06 13:21:40', '2019-11-06 13:21:40'),
(28, 'http://localhost/e_market/uploads/img/aoden.jpg', '2019-11-06 13:23:02', '2019-11-06 13:23:02'),
(28, 'http://localhost/e_market/uploads/img/aoden2.jpg', '2019-11-06 13:23:03', '2019-11-06 13:23:03'),
(28, 'http://localhost/e_market/uploads/img/aoden3.jpg', '2019-11-06 13:23:03', '2019-11-06 13:23:03'),
(29, 'http://localhost/e_market/uploads/img/5ixURT.jpg', '2019-11-06 13:23:58', '2019-11-06 13:23:58'),
(29, 'http://localhost/e_market/uploads/img/kinhmat.jpg', '2019-11-06 13:23:58', '2019-11-06 13:23:58'),
(29, 'http://localhost/e_market/uploads/img/qLrIEl.jpg', '2019-11-06 13:23:58', '2019-11-06 13:23:58'),
(30, 'http://localhost/e_market/uploads/img/8VHKc1.jpg', '2019-11-06 13:25:08', '2019-11-06 13:25:08'),
(30, 'http://localhost/e_market/uploads/img/h7yRbt_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:25:08', '2019-11-06 13:25:08'),
(30, 'http://localhost/e_market/uploads/img/IGb3bk.jpg', '2019-11-06 13:25:08', '2019-11-06 13:25:08'),
(31, 'http://localhost/e_market/uploads/img/3q2OpT.jpg', '2019-11-06 13:26:58', '2019-11-06 13:26:58'),
(31, 'http://localhost/e_market/uploads/img/lEF0ZR_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:26:58', '2019-11-06 13:26:58'),
(31, 'http://localhost/e_market/uploads/img/0V8oaC.jpg', '2019-11-06 13:26:58', '2019-11-06 13:26:58'),
(32, 'http://localhost/e_market/uploads/img/Cw3UNn.jpg', '2019-11-06 13:30:13', '2019-11-06 13:30:13'),
(32, 'http://localhost/e_market/uploads/img/IcUzie_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:30:13', '2019-11-06 13:30:13'),
(32, 'http://localhost/e_market/uploads/img/7O5CFh.jpg', '2019-11-06 13:30:13', '2019-11-06 13:30:13'),
(33, 'http://localhost/e_market/uploads/img/pK8F6N.jpg', '2019-11-06 13:31:04', '2019-11-06 13:31:04'),
(33, 'http://localhost/e_market/uploads/img/jlXPjg.jpg', '2019-11-06 13:31:04', '2019-11-06 13:31:04'),
(33, 'http://localhost/e_market/uploads/img/XZlZl4.jpg', '2019-11-06 13:31:04', '2019-11-06 13:31:04'),
(34, 'http://localhost/e_market/uploads/img/83BiLe_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:32:22', '2019-11-06 13:32:22'),
(34, 'http://localhost/e_market/uploads/img/ih2hS3.jpg', '2019-11-06 13:32:22', '2019-11-06 13:32:22'),
(34, 'http://localhost/e_market/uploads/img/9kCAWm.jpg', '2019-11-06 13:32:22', '2019-11-06 13:32:22'),
(35, 'http://localhost/e_market/uploads/img/1V1QAL.jpg', '2019-11-06 13:33:13', '2019-11-06 13:33:13'),
(35, 'http://localhost/e_market/uploads/img/3vuWqj.jpg', '2019-11-06 13:33:13', '2019-11-06 13:33:13'),
(36, 'http://localhost/e_market/uploads/img/dA5s6I.jpg', '2019-11-06 13:33:51', '2019-11-06 13:33:51'),
(36, 'http://localhost/e_market/uploads/img/BZnHtO.jpg', '2019-11-06 13:33:51', '2019-11-06 13:33:51'),
(36, 'http://localhost/e_market/uploads/img/PHJirg.jpg', '2019-11-06 13:33:51', '2019-11-06 13:33:51'),
(37, 'http://localhost/e_market/uploads/img/OauNUP.jpg', '2019-11-06 13:34:22', '2019-11-06 13:34:22'),
(37, 'http://localhost/e_market/uploads/img/n2vtXo_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:34:22', '2019-11-06 13:34:22'),
(38, 'http://localhost/e_market/uploads/fafa/7uW6Pu.jpg', '2019-11-06 13:36:44', '2019-11-06 13:36:44'),
(38, 'http://localhost/e_market/uploads/fafa/8yNKgz_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:36:44', '2019-11-06 13:36:44'),
(38, 'http://localhost/e_market/uploads/fafa/8yNKgz.jpg', '2019-11-06 13:36:44', '2019-11-06 13:36:44'),
(39, 'http://localhost/e_market/uploads/fafa/PXpHAz.jpg', '2019-11-06 13:37:16', '2019-11-06 13:37:16'),
(39, 'http://localhost/e_market/uploads/fafa/41HXmZ.jpg', '2019-11-06 13:37:16', '2019-11-06 13:37:16'),
(39, 'http://localhost/e_market/uploads/fafa/8cM49O_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:37:16', '2019-11-06 13:37:16'),
(40, 'http://localhost/e_market/uploads/fafa/VNxZ0I_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:38:14', '2019-11-06 13:38:14'),
(40, 'http://localhost/e_market/uploads/fafa/gRWlJM.jpg', '2019-11-06 13:38:14', '2019-11-06 13:38:14'),
(40, 'http://localhost/e_market/uploads/fafa/GrjDxo_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:38:14', '2019-11-06 13:38:14'),
(41, 'http://localhost/e_market/uploads/fafa/suYelb.jpg', '2019-11-06 13:38:47', '2019-11-06 13:38:47'),
(41, 'http://localhost/e_market/uploads/fafa/DKQzy3_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:38:47', '2019-11-06 13:38:47'),
(42, 'http://localhost/e_market/uploads/fafa/GXomYe_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:39:40', '2019-11-06 13:39:40'),
(42, 'http://localhost/e_market/uploads/fafa/BobKGy.jpg', '2019-11-06 13:39:40', '2019-11-06 13:39:40'),
(43, 'http://localhost/e_market/uploads/fafa/YfCbhT_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:40:32', '2019-11-06 13:40:32'),
(43, 'http://localhost/e_market/uploads/fafa/DKQzy3_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:40:32', '2019-11-06 13:40:32'),
(44, 'http://localhost/e_market/uploads/fafa/F6bkVI_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:42:03', '2019-11-06 13:42:03'),
(44, 'http://localhost/e_market/uploads/fafa/8tevG5.jpg', '2019-11-06 13:42:03', '2019-11-06 13:42:03'),
(45, 'http://localhost/e_market/uploads/fafa/Ln5XeF_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:42:31', '2019-11-06 13:42:31'),
(45, 'http://localhost/e_market/uploads/fafa/42qTCd.jpg', '2019-11-06 13:42:31', '2019-11-06 13:42:31'),
(46, 'http://localhost/e_market/uploads/fafa/5fmNaA.png', '2019-11-06 13:43:04', '2019-11-06 13:43:04'),
(46, 'http://localhost/e_market/uploads/fafa/hRrpJb.png', '2019-11-06 13:43:04', '2019-11-06 13:43:04'),
(47, 'http://localhost/e_market/uploads/fafa/295Kuw_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:43:49', '2019-11-06 13:43:49'),
(47, 'http://localhost/e_market/uploads/fafa/zNyarf.jpg', '2019-11-06 13:43:49', '2019-11-06 13:43:49'),
(48, 'http://localhost/e_market/uploads/fafa/8IOicz.jpg', '2019-11-06 13:44:24', '2019-11-06 13:44:24'),
(48, 'http://localhost/e_market/uploads/fafa/tu40g5.jpg', '2019-11-06 13:44:24', '2019-11-06 13:44:24'),
(48, 'http://localhost/e_market/uploads/fafa/6KxmNl_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:44:24', '2019-11-06 13:44:24'),
(49, 'http://localhost/e_market/uploads/fafa/nETHwv_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:44:55', '2019-11-06 13:44:55'),
(49, 'http://localhost/e_market/uploads/fafa/QHE4sS.jpg', '2019-11-06 13:44:55', '2019-11-06 13:44:55'),
(50, 'http://localhost/e_market/uploads/fafa/02W6Zb.jpg', '2019-11-06 13:45:39', '2019-11-06 13:45:39'),
(50, 'http://localhost/e_market/uploads/fafa/gGc9kB.jpg', '2019-11-06 13:45:39', '2019-11-06 13:45:39'),
(51, 'http://localhost/e_market/uploads/fafa/0BH68f_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:46:48', '2019-11-06 13:46:48'),
(51, 'http://localhost/e_market/uploads/fafa/wqHGby.jpg', '2019-11-06 13:46:48', '2019-11-06 13:46:48'),
(52, 'http://localhost/e_market/uploads/fafa/4W8kcD.jpg', '2019-11-06 13:47:26', '2019-11-06 13:47:26'),
(52, 'http://localhost/e_market/uploads/fafa/v5KNc5.jpg', '2019-11-06 13:47:26', '2019-11-06 13:47:26'),
(53, 'http://localhost/e_market/uploads/fafa/6MKkLo_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:48:09', '2019-11-06 13:48:09'),
(53, 'http://localhost/e_market/uploads/fafa/uT3DUO.jpg', '2019-11-06 13:48:09', '2019-11-06 13:48:09'),
(54, 'http://localhost/e_market/uploads/fafa/m2rxwe_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:48:53', '2019-11-06 13:48:53'),
(54, 'http://localhost/e_market/uploads/fafa/AW7xHI.jpg', '2019-11-06 13:48:53', '2019-11-06 13:48:53'),
(55, 'http://localhost/e_market/uploads/fafa/BfEEaa.jpg', '2019-11-06 13:49:31', '2019-11-06 13:49:31'),
(55, 'http://localhost/e_market/uploads/fafa/v5KNc5.jpg', '2019-11-06 13:49:31', '2019-11-06 13:49:31'),
(55, 'http://localhost/e_market/uploads/fafa/uMZkv2.jpg', '2019-11-06 13:49:31', '2019-11-06 13:49:31'),
(56, 'http://localhost/e_market/uploads/fafa/v3fO4v.jpg', '2019-11-06 13:50:18', '2019-11-06 13:50:18'),
(56, 'http://localhost/e_market/uploads/fafa/Pim8Yk_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:50:18', '2019-11-06 13:50:18'),
(57, 'http://localhost/e_market/uploads/fafa/Hml6am_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:50:59', '2019-11-06 13:50:59'),
(57, 'http://localhost/e_market/uploads/fafa/IU4fZh.jpg', '2019-11-06 13:50:59', '2019-11-06 13:50:59'),
(57, 'http://localhost/e_market/uploads/fafa/uT3DUO.jpg', '2019-11-06 13:50:59', '2019-11-06 13:50:59'),
(58, 'http://localhost/e_market/uploads/fafa/Sqrmam.jpg', '2019-11-06 13:52:41', '2019-11-06 13:52:41'),
(58, 'http://localhost/e_market/uploads/fafa/skypKh_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:52:41', '2019-11-06 13:52:41'),
(58, 'http://localhost/e_market/uploads/fafa/b8s8kH.jpg', '2019-11-06 13:52:41', '2019-11-06 13:52:41'),
(59, 'http://localhost/e_market/uploads/fafa/lqKkVm.jpg', '2019-11-06 13:53:26', '2019-11-06 13:53:26'),
(59, 'http://localhost/e_market/uploads/fafa/1qQI7C_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:53:26', '2019-11-06 13:53:26'),
(59, 'http://localhost/e_market/uploads/fafa/5VuCnB.jpg', '2019-11-06 13:53:26', '2019-11-06 13:53:26'),
(60, 'http://localhost/e_market/uploads/fafa/PYtpla_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:54:00', '2019-11-06 13:54:00'),
(60, 'http://localhost/e_market/uploads/fafa/DOOHzz.jpg', '2019-11-06 13:54:00', '2019-11-06 13:54:00'),
(61, 'http://localhost/e_market/uploads/fafa/oWyJfQ_simg_de2fe0_500x500_maxb.png', '2019-11-06 13:54:34', '2019-11-06 13:54:34'),
(61, 'http://localhost/e_market/uploads/fafa/FjMg7l.jpg', '2019-11-06 13:54:34', '2019-11-06 13:54:34'),
(62, 'http://localhost/e_market/uploads/fafa/8ZaOi9.jpg', '2019-11-06 13:55:08', '2019-11-06 13:55:08'),
(62, 'http://localhost/e_market/uploads/fafa/A9qJGH_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:55:08', '2019-11-06 13:55:08'),
(63, 'http://localhost/e_market/uploads/fafa/V61RQN_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:56:06', '2019-11-06 13:56:06'),
(63, 'http://localhost/e_market/uploads/fafa/i7bU1c.jpg', '2019-11-06 13:56:06', '2019-11-06 13:56:06'),
(63, 'http://localhost/e_market/uploads/fafa/rCkg7P.jpg', '2019-11-06 13:56:06', '2019-11-06 13:56:06'),
(64, 'http://localhost/e_market/uploads/fafa/O9LB3o_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:56:37', '2019-11-06 13:56:37'),
(64, 'http://localhost/e_market/uploads/fafa/YjNwFD.jpg', '2019-11-06 13:56:37', '2019-11-06 13:56:37'),
(64, 'http://localhost/e_market/uploads/fafa/fFiPEQ.jpg', '2019-11-06 13:56:37', '2019-11-06 13:56:37'),
(65, 'http://localhost/e_market/uploads/fafa/zCXYsj.jpg', '2019-11-06 13:57:45', '2019-11-06 13:57:45'),
(65, 'http://localhost/e_market/uploads/fafa/ykIOyq.jpg', '2019-11-06 13:57:45', '2019-11-06 13:57:45'),
(65, 'http://localhost/e_market/uploads/fafa/ykIOyq_simg_b5886f_895-895-50-0_cropf_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:57:45', '2019-11-06 13:57:45'),
(66, 'http://localhost/e_market/uploads/fafa/XPvZwf_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:58:13', '2019-11-06 13:58:13'),
(66, 'http://localhost/e_market/uploads/fafa/pbkYTA_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:58:13', '2019-11-06 13:58:13'),
(67, 'http://localhost/e_market/uploads/fafa/a1Q2Jk.jpg', '2019-11-06 13:58:37', '2019-11-06 13:58:37'),
(67, 'http://localhost/e_market/uploads/fafa/5YOyV8_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:58:37', '2019-11-06 13:58:37'),
(68, 'http://localhost/e_market/uploads/fafa/AFPxfk.jpg', '2019-11-06 13:59:05', '2019-11-06 13:59:05'),
(68, 'http://localhost/e_market/uploads/fafa/u2cd9W.jpg', '2019-11-06 13:59:05', '2019-11-06 13:59:05'),
(68, 'http://localhost/e_market/uploads/fafa/HJI0OB.jpg', '2019-11-06 13:59:06', '2019-11-06 13:59:06'),
(69, 'http://localhost/e_market/uploads/fafa/XPvZwf_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 13:59:38', '2019-11-06 13:59:38'),
(69, 'http://localhost/e_market/uploads/fafa/XPvZwf.jpg', '2019-11-06 13:59:38', '2019-11-06 13:59:38'),
(70, 'http://localhost/e_market/uploads/fafa/zCXYsj.jpg', '2019-11-06 14:00:18', '2019-11-06 14:00:18'),
(70, 'http://localhost/e_market/uploads/fafa/cowrOq.jpg', '2019-11-06 14:00:18', '2019-11-06 14:00:18'),
(71, 'http://localhost/e_market/uploads/fafa/Screenshot_33-4.jpg', '2019-11-06 15:44:16', '2019-11-06 15:44:16'),
(71, 'http://localhost/e_market/uploads/fafa/d1U4pd_simg_de2fe0_500x500_maxb.jpg', '2019-11-06 15:44:16', '2019-11-06 15:44:16'),
(72, 'http://localhost/e_market/uploads/5VuCnB.jpg', '2019-11-08 22:47:37', '2019-11-08 22:47:37'),
(72, 'http://localhost/e_market/uploads/0bMg4l.jpg', '2019-11-08 22:47:37', '2019-11-08 22:47:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `cus_id` int(100) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `cus_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 11, 2, '2019-11-08 07:50:08', '2019-11-08 11:04:49'),
(2, 11, 1, '2019-11-08 07:50:50', '2019-11-08 11:06:19'),
(3, 11, 1, '2019-11-08 07:59:09', '2019-11-08 14:54:42'),
(4, 11, 1, '2019-11-08 09:01:39', '2019-11-08 15:46:05'),
(5, 11, 0, '2019-11-08 14:53:14', '2019-11-08 14:53:14'),
(6, 14, 2, '2019-11-08 15:17:37', '2019-11-08 15:46:10'),
(7, 14, 0, '2019-11-08 15:19:50', '2019-11-08 15:19:50'),
(8, 14, 0, '2019-11-08 15:45:35', '2019-11-08 15:45:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(100) NOT NULL,
  `order_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 27, 3, 10000, '2019-11-08 07:50:08', '2019-11-08 07:50:08'),
(2, 1, 49, 2, 50000, '2019-11-08 07:50:08', '2019-11-08 07:50:08'),
(3, 1, 25, 1, 20000, '2019-11-08 07:50:08', '2019-11-08 07:50:08'),
(4, 2, 49, 1, 50000, '2019-11-08 07:50:50', '2019-11-08 07:50:50'),
(5, 3, 26, 2, 50000, '2019-11-08 07:59:09', '2019-11-08 07:59:09'),
(6, 4, 26, 1, 50000, '2019-11-08 09:01:39', '2019-11-08 09:01:39'),
(7, 6, 25, 2, 20000, '2019-11-08 15:17:37', '2019-11-08 15:17:37'),
(8, 6, 26, 2, 50000, '2019-11-08 15:17:38', '2019-11-08 15:17:38'),
(9, 7, 33, 1, 50000, '2019-11-08 15:19:50', '2019-11-08 15:19:50'),
(10, 8, 25, 4, 20000, '2019-11-08 15:45:35', '2019-11-08 15:45:35'),
(11, 8, 27, 1, 10000, '2019-11-08 15:45:35', '2019-11-08 15:45:35'),
(12, 8, 32, 2, 15000000, '2019-11-08 15:45:35', '2019-11-08 15:45:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payment`
--

CREATE TABLE `payment` (
  `id` int(100) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_id` int(100) NOT NULL,
  `color_id` int(100) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `sale_price` float DEFAULT NULL,
  `hot_pro` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `cate_id`, `color_id`, `image`, `description`, `price`, `sale_price`, `hot_pro`, `status`, `created_at`, `updated_at`) VALUES
(25, 'Quần Kaki Nữ', 'quan-kaki-nu', 13, NULL, '7vXG8A.jpg', 'Quần Kaki Nữ Quần Kaki Nữ', 20000, NULL, 1, 1, '2019-11-06 06:12:21', '2019-11-06 08:29:24'),
(26, 'Guốc Nữ', 'guoc-nu', 13, NULL, 'PWUoNm_simg_de2fe0_500x500_maxb.jpg', 'Guốc Nữ Guốc Nữ', 100000, 50000, 1, 1, '2019-11-06 06:20:22', '2019-11-06 06:20:22'),
(27, 'Áo Khoác Nam', 'ao-khoac-nam', 13, NULL, 'hnNd5W.jpg', 'Áo Khoác Nam Áo Khoác Nam', 20000, 10000, 1, 1, '2019-11-06 06:21:39', '2019-11-06 08:27:48'),
(28, 'Áo Thu Đông Có Mũ', 'ao-thu-dong-co-mu', 13, NULL, 'aoden4.jpg', 'Áo Thu Đông Có Mũ Áo Thu Đông Có Mũ', 20000, NULL, 1, 1, '2019-11-06 06:23:02', '2019-11-06 08:28:32'),
(29, 'Kính Thời Trang', 'kinh-thoi-trang', 13, NULL, 'img/5D5UV7.jpg', 'Kính Thời Trang', 20000, 10000, 1, 1, '2019-11-06 06:23:58', '2019-11-06 06:23:58'),
(30, 'Áo Khoác', 'ao-khoac', 13, NULL, 'img/IGb3bk.jpg', 'Áo Khoác Áo Khoác', 150000, 100000, 1, 1, '2019-11-06 06:25:08', '2019-11-06 06:25:08'),
(31, 'Combo Bàn Phím + Chuột', 'combo-ban-phim-chuot', 14, NULL, 'img/0V8oaC.jpg', 'Combo Bàn Phím + Chuột', 100000, 50000, 1, 1, '2019-11-06 06:26:58', '2019-11-06 06:26:58'),
(32, 'Lap Top ASUS', 'lap-top-asus', 14, NULL, 'IcUzie_simg_de2fe0_500x500_maxb.jpg', 'Lap Top ASUS', 17000000, 15000000, 1, 1, '2019-11-06 06:30:13', '2019-11-06 07:02:18'),
(33, 'Tai Nge Sony', 'tai-nge-sony', 14, NULL, 'img/jlXPjg.jpg', 'Tai Nge Sony', 100000, 50000, 1, 1, '2019-11-06 06:31:04', '2019-11-06 06:31:04'),
(34, 'Loa Blutooth', 'loa-blutooth', 14, NULL, 'img/9kCAWm.jpg', 'Loa Blutooth', 100000, 50000, 1, 1, '2019-11-06 06:32:22', '2019-11-06 06:32:22'),
(35, 'Tai Nge earpod', 'tai-nge-earpod', 14, NULL, '3vuWqj.jpg', 'Tai Nge earpod', 100000, 50000, 1, 1, '2019-11-06 06:33:13', '2019-11-06 07:02:54'),
(36, 'Lap Top Dell', 'lap-top-dell', 14, NULL, 'img/PHJirg_simg_de2fe0_500x500_maxb.jpg', 'Lap Top Dell', 17000000, 15000000, 1, 1, '2019-11-06 06:33:51', '2019-11-06 06:33:51'),
(37, 'Lap Top HP', 'lap-top-hp', 14, NULL, 'OauNUP.jpg', 'Lap Top HP', 17000000, 15000000, 1, 1, '2019-11-06 06:34:22', '2019-11-06 07:03:18'),
(38, 'Mô Tô PKL', 'mo-to-pkl', 15, NULL, 'fafa/7uW6Pu.jpg', 'Mô Tô PKL', 100000, 50000, 1, 1, '2019-11-06 06:36:44', '2019-11-06 06:36:44'),
(39, 'Máy Bay', 'may-bay', 15, NULL, '41HXmZ.jpg', 'Máy Bay', 100000, 50000, 1, 1, '2019-11-06 06:37:16', '2019-11-06 07:06:23'),
(40, 'Mô Tô Địa Hình', 'mo-to-dia-hinh', 15, NULL, 'VNxZ0I_simg_de2fe0_500x500_maxb.jpg', 'Mô Tô Địa Hình', 100000, NULL, 0, 1, '2019-11-06 06:38:14', '2019-11-06 10:05:59'),
(41, 'Bộ Bút Màu', 'bo-but-mau', 15, NULL, 'fafa/tntz5x.jpg', 'Bộ Bút Màu', 100000, 50000, 1, 1, '2019-11-06 06:38:47', '2019-11-06 06:38:47'),
(42, 'Xe Đẩy', 'xe-day', 15, NULL, 'GXomYe_simg_de2fe0_500x500_maxb.jpg', 'Xe Đẩy', 100000, NULL, 1, 1, '2019-11-06 06:39:40', '2019-11-06 07:06:31'),
(43, 'Gấu Bông', 'gau-bong', 15, NULL, 'fafa/YfCbhT_simg_de2fe0_500x500_maxb.jpg', 'Gấu Bông', 100000, NULL, 1, 1, '2019-11-06 06:40:32', '2019-11-06 06:40:32'),
(44, 'Mũ Bảo Hộ', 'mu-bao-ho', 16, NULL, 'fafa/8tevG5.jpg', 'Mũ Bảo Hộ', 100000, 50000, 0, 1, '2019-11-06 06:42:02', '2019-11-06 06:42:02'),
(45, 'Cưa Tay', 'cua-tay', 16, NULL, 'fafa/42qTCd.jpg', 'Cưa Tay', 100000, 50000, 1, 1, '2019-11-06 06:42:31', '2019-11-06 06:42:31'),
(46, 'Cưa Máy', 'cua-may', 16, NULL, 'fafa/5fmNaA.png', 'Cưa Máy', 100000, 50000, 1, 1, '2019-11-06 06:43:04', '2019-11-06 06:43:04'),
(47, 'Khoan Vít', 'khoan-vit', 16, NULL, 'fafa/zNyarf.jpg', 'Khoan Vít', 20000, 10000, 1, 1, '2019-11-06 06:43:49', '2019-11-06 06:43:49'),
(48, 'Bóng Đèn Compact', 'bong-den-compact', 16, NULL, 'fafa/tu40g5.jpg', 'Bóng Đèn Compact', 20000, NULL, 1, 1, '2019-11-06 06:44:24', '2019-11-06 06:44:24'),
(49, 'Bao Tay', 'bao-tay', 16, NULL, 'fafa/QHE4sS.jpg', 'Bao Tay', 100000, 50000, 0, 1, '2019-11-06 06:44:55', '2019-11-06 06:44:55'),
(50, 'Mũ Bảo Hộ vàng', 'mu-bao-ho-vang', 16, NULL, 'fafa/02W6Zb.jpg', 'Mũ Bảo Hộ vàng', 100000, 50000, 1, 1, '2019-11-06 06:45:39', '2019-11-06 06:45:39'),
(51, 'Bàn Nhỏ 4 chân', 'ban-nho-4-chan', 17, NULL, 'fafa/0BH68f_simg_de2fe0_500x500_maxb.jpg', 'Bàn Nhỏ 4 chân', 20000, 11, 1, 1, '2019-11-06 06:46:48', '2019-11-06 06:46:48'),
(52, 'Bộ Ga Đệm xám', 'bo-ga-dem-xam', 17, NULL, '4W8kcD.jpg', 'Bộ Ga Đệm xám', 100000, 50000, 1, 1, '2019-11-06 06:47:26', '2019-11-06 07:05:59'),
(53, 'Màn mini', 'man-mini', 17, NULL, 'fafa/6MKkLo_simg_de2fe0_500x500_maxb.jpg', 'Màn mini', 22222, 22, 1, 1, '2019-11-06 06:48:09', '2019-11-06 06:48:09'),
(54, 'Giá Treo Quần Áo', 'gia-treo-quan-ao', 17, NULL, 'fafa/m2rxwe_simg_de2fe0_500x500_maxb.jpg', 'Giá Treo Quần Áo', 20000, 1000, 1, 1, '2019-11-06 06:48:53', '2019-11-06 06:48:53'),
(55, 'Bộ Ga Đỏ', 'bo-ga-do', 17, NULL, 'fafa/BfEEaa.jpg', 'Bộ Ga Đỏ', 20000, 1000, 0, 1, '2019-11-06 06:49:31', '2019-11-06 06:49:31'),
(56, 'Bộ Bàn Ghế', 'bo-ban-ghe', 17, NULL, 'f8Cerz.jpg', 'Bộ Bàn Ghế', 100000, 10000, 1, 1, '2019-11-06 06:50:18', '2019-11-06 07:05:26'),
(57, 'Vòi Hoa Sen', 'voi-hoa-sen', 17, NULL, 'Hml6am_simg_de2fe0_500x500_maxb.jpg', 'Vòi Hoa Sen', 100000, NULL, 1, 1, '2019-11-06 06:50:59', '2019-11-06 07:05:35'),
(58, 'Áo Thun Body', 'ao-thun-body', 18, NULL, 'fafa/Sqrmam.jpg', 'Áo Thun Body', 20000, 1000, 1, 1, '2019-11-06 06:52:40', '2019-11-06 06:52:40'),
(59, 'Quần Dài', 'quan-dai', 18, NULL, 'fafa/5VuCnB.jpg', 'Quần Dài', 20000, NULL, 1, 1, '2019-11-06 06:53:26', '2019-11-06 06:53:26'),
(60, 'Giày Adidas', 'giay-adidas', 18, NULL, 'LAraOB.jpg', 'Giày Adidas', 20000, 1000, 1, 1, '2019-11-06 06:54:00', '2019-11-06 07:05:16'),
(61, 'Túi Thể Thao', 'tui-the-thao', 18, NULL, 'fafa/FjMg7l.jpg', 'Túi Thể Thao', 20000, 10000, 0, 1, '2019-11-06 06:54:34', '2019-11-06 06:54:34'),
(62, 'Túi Da', 'tui-da', 18, NULL, 'fafa/6eBazO.jpg', 'Túi Da', 20000, 11, 1, 1, '2019-11-06 06:55:07', '2019-11-06 06:55:07'),
(63, 'Túi Vải', 'tui-vai', 18, NULL, 'fafa/rCkg7P.jpg', 'Túi Vải', 100000, NULL, 1, 1, '2019-11-06 06:56:06', '2019-11-06 06:56:06'),
(64, 'Giày Nike', 'giay-nike', 18, NULL, 'fFiPEQ.jpg', 'Giày Nike', 20000, 22, 1, 1, '2019-11-06 06:56:37', '2019-11-06 07:04:47'),
(65, 'Hộp Quà Tặng 1', 'hop-qua-tang-1', 19, NULL, 'ykIOyq.jpg', 'Hộp Quà Tặng 1', 20000, 1000, 1, 1, '2019-11-06 06:57:45', '2019-11-06 07:04:31'),
(66, 'Hộp Quà Tặng 2', 'hop-qua-tang-2', 19, NULL, 'fafa/pbkYTA_simg_de2fe0_500x500_maxb.jpg', 'Hộp Quà Tặng 1', 20000, 1000, 1, 1, '2019-11-06 06:58:13', '2019-11-06 06:58:13'),
(67, 'Hộp Quà Tặng 3', 'hop-qua-tang-3', 19, NULL, 'a1Q2Jk.jpg', 'Hộp Quà Tặng 3', 20000, 1000, 1, 1, '2019-11-06 06:58:37', '2019-11-06 07:04:18'),
(68, 'Hộp Quà Tặng 4', 'hop-qua-tang-4', 19, NULL, 'fafa/HJI0OB.jpg', 'Hộp Quà Tặng 4', 20000, 1000, 1, 1, '2019-11-06 06:59:05', '2019-11-06 06:59:05'),
(69, 'Hộp Quà Tặng 5', 'hop-qua-tang-5', 19, NULL, 'fafa/rsWdcQ.jpg', 'Hộp Quà Tặng 5', 20000, 1000, 1, 1, '2019-11-06 06:59:38', '2019-11-06 06:59:38'),
(70, 'Hộp Quà Tặng 6', 'hop-qua-tang-6', 19, NULL, 'fafa/ykIOyq.jpg', 'Hộp Quà Tặng 6', 20000, 1000, 1, 1, '2019-11-06 07:00:18', '2019-11-06 07:00:18'),
(71, 'Váy Vủng', 'vay-vung', 13, NULL, 'fafa/Screenshot_33-4.jpg', 'Váy Vủng', 20000, 1000, 1, 1, '2019-11-06 08:44:15', '2019-11-06 08:44:15'),
(72, 'Quần jean Nam', 'quan-jean-nam', 13, NULL, '5VuCnB.jpg', 'Quần jean Nam', 200000, NULL, 1, 1, '2019-11-08 15:47:37', '2019-11-08 15:47:37');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`name`);

--
-- Chỉ mục cho bảng `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `delive`
--
ALTER TABLE `delive`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_ibfk_1` (`cus_id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `color_id` (`color_id`),
  ADD KEY `cate_id` (`cate_id`) USING BTREE;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `color`
--
ALTER TABLE `color`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `delive`
--
ALTER TABLE `delive`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `account` (`id`);

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`cate_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`color_id`) REFERENCES `color` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
