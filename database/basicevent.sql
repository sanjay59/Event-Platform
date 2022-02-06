-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2022 at 06:25 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basicevent`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminregs`
--

CREATE TABLE `adminregs` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `admin_st` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminregs`
--

INSERT INTO `adminregs` (`admin_id`, `name`, `email`, `mobile_no`, `company_name`, `image`, `role`, `admin_st`, `created_at`, `updated_at`) VALUES
(1, 'Sanjay', 'sanjay@gmail.com', '0000000000', 'G Earth', 'admin.png', 'admin', 0, '2021-03-03 05:10:12', '2021-03-03 05:10:12'),
(2, 'Client', 'client@streamy.in', '12345@LIVE', 'G Earth', 'admin.png', 'user', 0, '2021-03-15 03:39:35', '2021-03-15 03:39:35');

-- --------------------------------------------------------

--
-- Table structure for table `admin_regs`
--

CREATE TABLE `admin_regs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_regs`
--

INSERT INTO `admin_regs` (`id`, `name`, `email`, `mobile_no`, `company_name`, `created_at`, `updated_at`) VALUES
(1, 'Sanjay', 'www@gmail.com', '0000000000', 'G Earth', '2021-03-03 04:20:57', '2021-03-03 04:20:57');

-- --------------------------------------------------------

--
-- Stand-in structure for view `all_comments`
-- (See below for the actual view)
--
CREATE TABLE `all_comments` (
`id` bigint(20) unsigned
,`sparkm` varchar(20)
,`u_id` int(11)
,`description` text
,`name` varchar(255)
,`email` varchar(255)
,`status` int(11)
,`mobile_no` varchar(15)
,`company_name` varchar(255)
,`created_at` timestamp
,`updated_at` timestamp
);

-- --------------------------------------------------------

--
-- Table structure for table `all_login_users`
--

CREATE TABLE `all_login_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `u_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `change_videos`
--

CREATE TABLE `change_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hpage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `successp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `change_videos`
--

INSERT INTO `change_videos` (`id`, `url`, `logo`, `hpage`, `successp`, `created_at`, `updated_at`) VALUES
(1, 'https://player.vimeo.com/videoqqqaaaaa', '16291875651.jpg', '16292896562.png', '16318828233.png', '2021-02-15 02:01:14', '2022-01-28 06:55:23');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `email`, `mobile_no`, `image`) VALUES
(1, 'admin@streamy.in', '0000000000', 'admin.png');

-- --------------------------------------------------------

--
-- Table structure for table `cmms`
--

CREATE TABLE `cmms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sparkm` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cmms`
--

INSERT INTO `cmms` (`id`, `description`, `sparkm`, `u_id`, `created_at`, `updated_at`) VALUES
(1, 'hi', 'comment', 3, '2022-01-27 08:13:59', '2022-01-27 08:13:59');

-- --------------------------------------------------------

--
-- Table structure for table `coments`
--

CREATE TABLE `coments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `cid` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dy_pulse`
--

CREATE TABLE `dy_pulse` (
  `id` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `m_top` varchar(255) NOT NULL,
  `m_left` varchar(255) NOT NULL,
  `pheight` varchar(255) NOT NULL,
  `pwidth` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL,
  `img5` varchar(255) NOT NULL,
  `video_st` int(11) NOT NULL DEFAULT 0,
  `file_st` int(11) NOT NULL DEFAULT 0,
  `paction_st` int(11) NOT NULL,
  `img_st` int(11) NOT NULL,
  `pb_st` int(11) NOT NULL,
  `aj_st` int(11) NOT NULL,
  `pbi_st` int(11) NOT NULL,
  `game_st` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dy_pulse`
--

INSERT INTO `dy_pulse` (`id`, `color`, `m_top`, `m_left`, `pheight`, `pwidth`, `url`, `img2`, `img3`, `img4`, `img5`, `video_st`, `file_st`, `paction_st`, `img_st`, `pb_st`, `aj_st`, `pbi_st`, `game_st`) VALUES
(10, '#2316da', '67.5639%', '49.9337%', '1.21131%', '0.596817%', 'ballroom', '', '', '', '', 0, 0, 1, 0, 0, 0, 0, 0),
(14, '#ff9500', '63.3917%', '30.1724%', '1.21131%', '0.596817%', 'https://jklc.vbooth.me/gallery/O6jKO4GN?fs=0', '163125521833.png', '16312552184.jpg', '16312552183.png', '', 0, 0, 0, 0, 0, 0, 1, 0),
(15, '#4016da', '60.4307%', '77.4536%', '1.21131%', '0.66313%', 'https://www.vgames.in/jklakshmi-cement-srh-meet-and-greet/', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 1),
(16, '#2316da', '68.7752%', '20.4907%', '1.21131%', '0.66313%', 'https://jklc.vbooth.me/booth/O6jKO4GN', '', '', '', '16312609136.png', 0, 0, 0, 0, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `event_page`
--

CREATE TABLE `event_page` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `bg1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_page`
--

INSERT INTO `event_page` (`id`, `name`, `url`, `image`, `background`, `bg1`, `bg2`, `document`, `type`, `created_at`, `updated_at`) VALUES
(1, 'test', NULL, NULL, '0', NULL, NULL, NULL, NULL, '2022-01-04 04:01:23', '2022-01-19 02:27:52'),
(2, 'test', NULL, NULL, '0', NULL, NULL, NULL, NULL, '2022-01-04 04:03:52', '2022-01-11 01:05:17'),
(3, 'test', NULL, NULL, '0', NULL, NULL, NULL, NULL, '2022-01-06 06:31:00', '2022-01-19 00:11:18'),
(4, 'test', NULL, NULL, '0', NULL, NULL, NULL, NULL, '2022-01-17 23:01:11', '2022-01-17 23:01:11'),
(5, 'test', NULL, NULL, '0', NULL, NULL, NULL, NULL, '2022-01-19 00:57:40', '2022-01-19 00:57:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footfalls`
--

CREATE TABLE `footfalls` (
  `id` int(11) UNSIGNED NOT NULL,
  `location` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nocount` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footfalls`
--

INSERT INTO `footfalls` (`id`, `location`, `nocount`, `u_id`, `created_at`, `updated_at`) VALUES
(1, 'live', '222', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fpulscolor`
--

CREATE TABLE `fpulscolor` (
  `id` int(11) NOT NULL,
  `lobby_img` varchar(255) NOT NULL,
  `lbgvideo` varchar(500) DEFAULT NULL,
  `lbgv_st` int(11) DEFAULT NULL,
  `entrybgvideo` varchar(500) NOT NULL,
  `ebgv_st` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `m_top` int(11) NOT NULL,
  `m_left` int(11) NOT NULL,
  `color2` varchar(255) NOT NULL,
  `m_top2` int(11) NOT NULL,
  `m_left2` int(11) NOT NULL,
  `color3` varchar(255) NOT NULL,
  `m_top3` int(11) NOT NULL,
  `m_left3` int(11) NOT NULL,
  `fpp` int(11) NOT NULL DEFAULT 0,
  `spp` int(11) NOT NULL DEFAULT 0,
  `tpp` int(11) NOT NULL DEFAULT 0,
  `file_link` varchar(255) NOT NULL,
  `file_link1` varchar(255) NOT NULL,
  `file_link3` varchar(255) NOT NULL,
  `fpfls` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fpulscolor`
--

INSERT INTO `fpulscolor` (`id`, `lobby_img`, `lbgvideo`, `lbgv_st`, `entrybgvideo`, `ebgv_st`, `color`, `m_top`, `m_left`, `color2`, `m_top2`, `m_left2`, `color3`, `m_top3`, `m_left3`, `fpp`, `spp`, `tpp`, `file_link`, `file_link1`, `file_link3`, `fpfls`) VALUES
(1, '1632485327.png', '1632486798.mp4', 0, '1632486768.mp4', 0, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0, 0, '', '16136331081.pdf', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `img_slider`
--

CREATE TABLE `img_slider` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name2` varchar(255) NOT NULL,
  `name3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `img_slider`
--

INSERT INTO `img_slider` (`id`, `name`, `name2`, `name3`) VALUES
(1, '1.jpg', '2.webp', '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `inputfield`
--

CREATE TABLE `inputfield` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` tinyint(4) NOT NULL DEFAULT 1,
  `email` tinyint(4) NOT NULL DEFAULT 1,
  `mobile_no` tinyint(4) NOT NULL DEFAULT 1,
  `employee_code` tinyint(4) NOT NULL DEFAULT 0,
  `branch` int(11) NOT NULL DEFAULT 0,
  `firm_name` tinyint(4) NOT NULL DEFAULT 0,
  `city` tinyint(4) NOT NULL DEFAULT 0,
  `country` tinyint(4) NOT NULL DEFAULT 0,
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `agree` int(11) NOT NULL DEFAULT 1,
  `multioption` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inputfield`
--

INSERT INTO `inputfield` (`id`, `page_name`, `name`, `email`, `mobile_no`, `employee_code`, `branch`, `firm_name`, `city`, `country`, `type`, `agree`, `multioption`, `created_at`, `updated_at`) VALUES
(1, 'register', 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 1, NULL, '2022-02-05 04:13:47'),
(2, 'login', 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, '2022-02-04 07:22:45');

-- --------------------------------------------------------

--
-- Table structure for table `llu`
--

CREATE TABLE `llu` (
  `id` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `login_time` time DEFAULT '00:00:00',
  `logout_time` time DEFAULT '00:00:00',
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `llu`
--

INSERT INTO `llu` (`id`, `user_id`, `login_time`, `logout_time`, `created_at`, `updated_at`) VALUES
(1, 1, '13:42:23', '13:45:53', '2021-08-18 13:40:28', '2021-08-18 13:40:28'),
(2, 2, '13:46:22', '13:47:43', '2021-08-18 13:46:22', '2021-08-18 13:46:22'),
(3, 3, '14:38:08', '14:51:28', '2021-08-18 14:38:08', '2021-08-18 14:38:08'),
(4, 4, '14:51:44', '00:00:00', '2021-08-18 14:51:44', '2021-08-18 14:51:44');

-- --------------------------------------------------------

--
-- Table structure for table `lobby_videos`
--

CREATE TABLE `lobby_videos` (
  `id` int(11) NOT NULL,
  `m_top` varchar(255) NOT NULL,
  `m_left` varchar(255) NOT NULL,
  `vheight` varchar(255) NOT NULL,
  `vwidth` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `v_st` int(11) NOT NULL DEFAULT 1,
  `vm_st` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lobby_videos`
--

INSERT INTO `lobby_videos` (`id`, `m_top`, `m_left`, `vheight`, `vwidth`, `url`, `v_st`, `vm_st`) VALUES
(1, '28.1671%', '37.2679%', '28.3019%', '24.7347%', 'https://player.vimeo.com/video/611643527?autoplay=1', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `l_r_page`
--

CREATE TABLE `l_r_page` (
  `id` int(255) NOT NULL,
  `page_st` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `l_r_page`
--

INSERT INTO `l_r_page` (`id`, `page_st`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2021_01_23_054625_create_posts_table', 1),
(12, '2021_01_23_055042_create_coments_table', 1),
(13, '2021_01_23_082824_create_all_login_users_table', 1),
(14, '2021_01_23_092136_all_login_users', 1),
(15, '2021_01_27_114039_create_cmms_table', 2),
(16, '2021_01_30_090418_create_admin_regs_table', 3),
(17, '2021_02_01_052116_create_change_videos_table', 3),
(18, '2021_04_17_074631_create_sessions_table', 4),
(19, '2022_02_02_094737_create_inputfield_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `newevnts`
--

CREATE TABLE `newevnts` (
  `envt_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `eurl` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newevnts`
--

INSERT INTO `newevnts` (`envt_id`, `name`, `company_name`, `eurl`, `created_at`, `updated_at`) VALUES
(1, 'oreo', 'G Earth', '', '2021-03-15 23:42:24', '2021-03-15 23:42:24'),
(2, 'IPL', 'wow', '', '2021-03-16 01:41:00', '2021-03-16 01:41:00'),
(3, 'Ajay', 'Event', 'http://127.0.0.1:8000/ajay', '2021-03-16 01:58:15', '2021-03-16 01:58:15');

-- --------------------------------------------------------

--
-- Table structure for table `pagelikes`
--

CREATE TABLE `pagelikes` (
  `id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `location` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_st` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pagelikes`
--

INSERT INTO `pagelikes` (`id`, `location`, `l_st`, `u_id`, `created_at`, `updated_at`) VALUES
(0, 'live2', '1', 1, '2021-11-24 12:51:29', '2021-11-24 12:51:29'),
(1, 'live', '1', 1, '2021-11-24 12:51:29', '2021-11-24 12:51:29');

-- --------------------------------------------------------

--
-- Table structure for table `page_setup`
--

CREATE TABLE `page_setup` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `heading_image` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `status` int(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_setup`
--

INSERT INTO `page_setup` (`id`, `type`, `name`, `url`, `heading_image`, `image`, `video`, `status`, `created_at`, `updated_at`) VALUES
(1, 'login', 'Login', '', '16434523941.png', '16434523942.png', '1', 1, '1', '2022-01-29 10:33:14'),
(3, 'Register', 'Register', 'register', '16437820401.png', '16434523942.png', '', 1, '1', '2022-02-02 06:07:20'),
(4, 'Stage', 'Stage', 'stage', '', '', 'https://player.vimeo.com/video/468422969?autoplay=1', 1, '1', '2022-01-31 12:51:02');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `star` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `user_id`, `star`, `created_at`, `updated_at`) VALUES
(1, 3, '3', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('ss00ZDmdANiCT3oUB6ZJC58ZABrMxL9NubolCbOr', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.82 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiQWVGdnQyWG5pZ2I1cWl3ckNYQjlmM1BOTlQyOGVZUU13S3lHMkp1WSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo4OiJhZG1pbl9pZCI7aToxO3M6NDoibmFtZSI7czo2OiJTYW5qYXkiO3M6NToiaW1hZ2UiO3M6OToiYWRtaW4ucG5nIjtzOjQ6InJvbGUiO3M6NToiYWRtaW4iO30=', 1644065435);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `bgimg` varchar(255) NOT NULL,
  `mbgimg` varchar(255) NOT NULL,
  `thank_img` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `btn_color` varchar(255) NOT NULL,
  `text_color` varchar(255) NOT NULL,
  `page_st` int(11) NOT NULL DEFAULT 0,
  `lobby_st` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `bgimg`, `mbgimg`, `thank_img`, `color`, `btn_color`, `text_color`, `page_st`, `lobby_st`) VALUES
(1, '16315324721.png', '16315324722.png', '16174547003.jpg', '#ffffff', '#0081e0', '#ffffff', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logo`
--

CREATE TABLE `tbl_logo` (
  `id` int(11) NOT NULL,
  `ficon` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `event_end_time` varchar(255) NOT NULL,
  `event_start_time` varchar(255) NOT NULL,
  `mainbg` varchar(255) NOT NULL,
  `bg1` varchar(255) NOT NULL,
  `bg2` varchar(255) NOT NULL,
  `inputbg` varchar(255) NOT NULL,
  `btnbg` varchar(255) NOT NULL,
  `mail_st` int(11) NOT NULL DEFAULT 0,
  `page_st` int(11) DEFAULT NULL,
  `lobby_st` int(11) DEFAULT 0,
  `hpage_st` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_logo`
--

INSERT INTO `tbl_logo` (`id`, `ficon`, `logo`, `title`, `event_end_time`, `event_start_time`, `mainbg`, `bg1`, `bg2`, `inputbg`, `btnbg`, `mail_st`, `page_st`, `lobby_st`, `hpage_st`) VALUES
(1, '16434373512.png', '16434373511.png', 'Niva Bupa', '2022-01-29T14:14', '2022-02-10T13:29', '16434371433.png', '16434371434.png', '16434371435.png', '16434371436.png', '16434371437.png', 0, 0, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `id` int(11) NOT NULL,
  `bgimg` varchar(255) NOT NULL,
  `mbgimg` varchar(255) NOT NULL,
  `sbgimg` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `btn_color` varchar(255) NOT NULL,
  `text_color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`id`, `bgimg`, `mbgimg`, `sbgimg`, `color`, `btn_color`, `text_color`) VALUES
(1, '16291797671.jpg', '16285059852.png', '16285037953.png', '#ffffff', '#00adee', '#020202');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_regusers`
--

CREATE TABLE `tbl_regusers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reg_page`
--

CREATE TABLE `tbl_reg_page` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_reg_page`
--

INSERT INTO `tbl_reg_page` (`id`, `image`) VALUES
(1, '1612179604.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reporting`
--

CREATE TABLE `tbl_reporting` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `out_time` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_reporting`
--

INSERT INTO `tbl_reporting` (`id`, `user_id`, `page_name`, `start_time`, `out_time`, `created_at`, `updated_at`) VALUES
(1, 1170, 'lobby', '2021-09-30 15:55:35', '2021-09-30 15:55:46', '2021-09-30 15:55:35', '2021-09-30 15:55:35'),
(2, 1170, 'ballroom', '2021-09-30 15:55:45', '2021-09-30 15:56:07', '2021-09-30 15:55:45', '2021-09-30 15:55:45'),
(3, 1170, 'lobby', '2021-09-30 15:56:09', '2021-09-30 15:56:29', '2021-09-30 15:56:09', '2021-09-30 15:56:09'),
(4, 1170, 'ballroom', '2021-09-30 15:56:29', '2021-09-30 15:56:56', '2021-09-30 15:56:29', '2021-09-30 15:56:29'),
(5, 1169, 'ballroom', '2021-10-06 11:27:46', '2021-10-06 11:27:49', '2021-10-06 11:27:46', '2021-10-06 11:27:46'),
(6, 1169, 'lobby', '2021-10-06 11:27:50', '2021-10-06 15:53:00', '2021-10-06 11:27:50', '2021-10-06 11:27:50'),
(7, 1169, 'ballroom', '2021-10-06 11:33:08', '2021-10-06 11:33:08', '2021-10-06 11:33:08', '2021-10-06 11:33:08'),
(8, 1169, 'ballroom', '2021-10-06 11:34:38', '2021-10-06 11:34:38', '2021-10-06 11:34:39', '2021-10-06 11:34:39'),
(9, 1169, 'ballroom', '2021-10-06 11:48:40', '2021-10-06 11:48:40', '2021-10-06 11:48:40', '2021-10-06 11:48:40'),
(10, 1169, 'ballroom', '2021-10-06 11:48:53', '2021-10-06 11:48:53', '2021-10-06 11:48:53', '2021-10-06 11:48:53'),
(11, 1169, 'ballroom', '2021-10-06 15:52:59', '2021-10-06 15:52:59', '2021-10-06 15:52:59', '2021-10-06 15:52:59'),
(12, 1, 'ballroom', '2021-10-06 16:17:09', '2021-10-06 16:17:09', '2021-10-06 16:17:09', '2021-10-06 16:17:09'),
(13, 1, 'ballroom', '2021-10-06 16:22:25', '2021-10-06 16:22:25', '2021-10-06 16:22:25', '2021-10-06 16:22:25'),
(14, 1, 'ballroom', '2021-10-06 16:24:36', '2021-10-06 16:24:36', '2021-10-06 16:24:36', '2021-10-06 16:24:36'),
(15, 1, 'ballroom', '2021-10-06 16:24:42', '2021-10-06 16:24:42', '2021-10-06 16:24:42', '2021-10-06 16:24:42'),
(16, 2, 'ballroom', '2021-10-06 16:26:50', '2021-10-06 16:26:50', '2021-10-06 16:26:50', '2021-10-06 16:26:50'),
(17, 3, 'ballroom', '2021-10-06 16:28:24', '2021-10-06 16:28:24', '2021-10-06 16:28:24', '2021-10-06 16:28:24'),
(18, 3, 'ballroom', '2021-10-06 16:29:26', '2021-10-06 16:29:26', '2021-10-06 16:29:26', '2021-10-06 16:29:26'),
(19, 3, 'ballroom', '2021-10-06 16:29:56', '2021-10-06 16:29:56', '2021-10-06 16:29:56', '2021-10-06 16:29:56'),
(20, 4, 'ballroom', '2021-10-06 16:49:22', '2021-10-06 16:49:22', '2021-10-06 16:49:22', '2021-10-06 16:49:22'),
(21, 4, 'ballroom', '2021-10-06 16:50:47', '2021-10-06 16:50:47', '2021-10-06 16:50:47', '2021-10-06 16:50:47'),
(22, 1, 'ballroom', '2021-11-25 12:18:47', '2021-11-25 12:18:47', '2021-11-25 12:18:47', '2021-11-25 12:18:47'),
(23, 1, 'ballroom', '2021-11-25 12:30:59', '2021-11-25 12:30:59', '2021-11-25 12:30:59', '2021-11-25 12:30:59'),
(24, 1, 'ballroom', '2021-11-25 12:44:37', '2021-11-25 12:44:37', '2021-11-25 12:44:37', '2021-11-25 12:44:37'),
(25, 1, 'ballroom', '2021-11-25 12:44:42', '2021-11-25 12:44:42', '2021-11-25 12:44:42', '2021-11-25 12:44:42'),
(26, 1, 'ballroom', '2021-11-25 12:45:05', '2021-11-25 12:45:05', '2021-11-25 12:45:05', '2021-11-25 12:45:05'),
(27, 1, 'ballroom', '2021-11-25 12:45:59', '2021-11-25 12:45:59', '2021-11-25 12:45:59', '2021-11-25 12:45:59'),
(28, 1, 'ballroom', '2021-11-25 12:46:15', '2021-11-25 12:46:15', '2021-11-25 12:46:15', '2021-11-25 12:46:15'),
(29, 1, 'ballroom', '2021-11-25 12:46:42', '2021-11-25 12:46:42', '2021-11-25 12:46:42', '2021-11-25 12:46:42'),
(30, 1, 'ballroom', '2021-11-25 12:46:50', '2021-11-25 12:46:50', '2021-11-25 12:46:50', '2021-11-25 12:46:50'),
(31, 1, 'ballroom', '2021-11-25 12:58:09', '2021-11-25 12:58:09', '2021-11-25 12:58:09', '2021-11-25 12:58:09'),
(32, 1, 'ballroom', '2021-11-25 12:59:35', '2021-11-25 12:59:35', '2021-11-25 12:59:35', '2021-11-25 12:59:35'),
(33, 1, 'ballroom', '2021-11-25 13:00:47', '2021-11-25 13:00:47', '2021-11-25 13:00:47', '2021-11-25 13:00:47'),
(34, 1, 'ballroom', '2021-11-25 13:02:04', '2021-11-25 13:02:04', '2021-11-25 13:02:04', '2021-11-25 13:02:04'),
(35, 3, 'ballroom', '2021-11-25 13:07:05', '2021-11-25 13:07:05', '2021-11-25 13:07:05', '2021-11-25 13:07:05'),
(36, 1, 'ballroom', '2021-11-25 13:20:58', '2021-11-25 13:20:58', '2021-11-25 13:20:58', '2021-11-25 13:20:58'),
(37, 1, 'ballroom', '2021-11-25 13:24:31', '2021-11-25 13:24:31', '2021-11-25 13:24:31', '2021-11-25 13:24:31'),
(38, 2, 'ballroom', '2021-11-25 13:25:34', '2021-11-25 13:25:34', '2021-11-25 13:25:34', '2021-11-25 13:25:34'),
(39, 2, 'ballroom', '2021-11-25 13:26:46', '2021-11-25 13:26:46', '2021-11-25 13:26:46', '2021-11-25 13:26:46'),
(40, 1, 'ballroom', '2021-11-25 13:28:06', '2021-11-25 13:28:06', '2021-11-25 13:28:06', '2021-11-25 13:28:06'),
(41, 1, 'ballroom', '2021-11-25 15:09:48', '2021-11-25 15:09:48', '2021-11-25 15:09:48', '2021-11-25 15:09:48'),
(42, 3, 'ballroom', '2021-11-25 15:10:28', '2021-11-25 15:10:28', '2021-11-25 15:10:28', '2021-11-25 15:10:28'),
(43, 3, 'ballroom', '2021-11-25 15:11:59', '2021-11-25 15:11:59', '2021-11-25 15:11:59', '2021-11-25 15:11:59'),
(44, 1, 'ballroom', '2021-11-25 15:12:18', '2021-11-25 15:12:18', '2021-11-25 15:12:18', '2021-11-25 15:12:18'),
(45, 2, 'ballroom', '2021-11-25 15:13:00', '2021-11-25 15:13:00', '2021-11-25 15:13:00', '2021-11-25 15:13:00'),
(46, 2, 'ballroom', '2021-11-25 16:11:53', '2021-11-25 16:11:53', '2021-11-25 16:11:53', '2021-11-25 16:11:53'),
(47, 15, 'lobby', '2022-01-21 13:46:15', '2022-01-21 13:46:15', '2022-01-21 13:46:15', '2022-01-21 13:46:15'),
(48, 15, 'lobby', '2022-01-21 13:48:13', '2022-01-21 13:48:13', '2022-01-21 13:48:13', '2022-01-21 13:48:13'),
(49, 15, 'lobby', '2022-01-21 14:59:50', '2022-01-21 15:00:28', '2022-01-21 14:59:50', '2022-01-21 14:59:50'),
(50, 17, 'lobby', '2022-01-21 15:08:30', '2022-01-21 15:08:30', '2022-01-21 15:08:30', '2022-01-21 15:08:30'),
(51, 2, 'lobby', '2022-01-22 16:45:33', '2022-01-22 16:45:33', '2022-01-22 16:45:33', '2022-01-22 16:45:33'),
(52, 2, 'lobby', '2022-01-22 16:51:04', '2022-01-22 16:51:04', '2022-01-22 16:51:04', '2022-01-22 16:51:04'),
(53, 2, 'lobby', '2022-01-24 11:53:24', '2022-01-24 11:53:24', '2022-01-24 11:53:24', '2022-01-24 11:53:24'),
(54, 2, 'lobby', '2022-01-24 11:56:09', '2022-01-24 11:56:09', '2022-01-24 11:56:09', '2022-01-24 11:56:09'),
(55, 2, 'lobby', '2022-01-24 11:58:12', '2022-01-24 12:08:15', '2022-01-24 11:58:12', '2022-01-24 11:58:12'),
(56, 2, 'lobby', '2022-01-24 12:08:29', '2022-01-24 12:08:29', '2022-01-24 12:08:29', '2022-01-24 12:08:29'),
(57, 2, 'lobby', '2022-01-24 12:10:49', '2022-01-24 12:10:49', '2022-01-24 12:10:49', '2022-01-24 12:10:49'),
(58, 1, 'lobby', '2022-01-24 12:20:05', '2022-01-24 12:20:05', '2022-01-24 12:20:05', '2022-01-24 12:20:05'),
(59, 1, 'lobby', '2022-01-24 12:27:51', '2022-01-24 12:27:51', '2022-01-24 12:27:51', '2022-01-24 12:27:51'),
(60, 1, 'lobby', '2022-01-24 12:27:54', '2022-01-24 12:27:54', '2022-01-24 12:27:54', '2022-01-24 12:27:54'),
(61, 1, 'lobby', '2022-01-24 12:28:04', '2022-01-24 12:28:04', '2022-01-24 12:28:04', '2022-01-24 12:28:04'),
(62, 1, 'lobby', '2022-01-24 12:32:25', '2022-01-24 12:32:25', '2022-01-24 12:32:25', '2022-01-24 12:32:25'),
(63, 1, 'lobby', '2022-01-24 12:32:29', '2022-01-24 12:32:29', '2022-01-24 12:32:29', '2022-01-24 12:32:29'),
(64, 1, 'lobby', '2022-01-24 12:33:36', '2022-01-24 12:33:36', '2022-01-24 12:33:36', '2022-01-24 12:33:36'),
(65, 1, 'lobby', '2022-01-24 12:41:33', '2022-01-24 12:41:33', '2022-01-24 12:41:33', '2022-01-24 12:41:33'),
(66, 1, 'lobby', '2022-01-24 12:49:58', '2022-01-24 12:49:58', '2022-01-24 12:49:58', '2022-01-24 12:49:58'),
(67, 1, 'lobby', '2022-01-24 12:50:46', '2022-01-24 12:50:46', '2022-01-24 12:50:46', '2022-01-24 12:50:46'),
(68, 1, 'lobby', '2022-01-24 12:55:16', '2022-01-24 12:55:16', '2022-01-24 12:55:16', '2022-01-24 12:55:16'),
(69, 1, 'lobby', '2022-01-24 12:57:38', '2022-01-24 12:57:38', '2022-01-24 12:57:38', '2022-01-24 12:57:38'),
(70, 1, 'lobby', '2022-01-24 12:58:16', '2022-01-24 12:58:16', '2022-01-24 12:58:16', '2022-01-24 12:58:16'),
(71, 1, 'lobby', '2022-01-24 12:59:13', '2022-01-24 12:59:13', '2022-01-24 12:59:13', '2022-01-24 12:59:13'),
(72, 1, 'lobby', '2022-01-24 13:00:44', '2022-01-24 13:00:44', '2022-01-24 13:00:44', '2022-01-24 13:00:44'),
(73, 1, 'lobby', '2022-01-24 13:03:00', '2022-01-24 13:03:00', '2022-01-24 13:03:00', '2022-01-24 13:03:00'),
(74, 1, 'lobby', '2022-01-24 13:04:24', '2022-01-24 13:04:24', '2022-01-24 13:04:24', '2022-01-24 13:04:24'),
(75, 1, 'lobby', '2022-01-24 13:06:55', '2022-01-24 13:06:55', '2022-01-24 13:06:55', '2022-01-24 13:06:55'),
(76, 1, 'lobby', '2022-01-24 13:07:30', '2022-01-24 13:07:30', '2022-01-24 13:07:30', '2022-01-24 13:07:30'),
(77, 1, 'lobby', '2022-01-24 13:07:36', '2022-01-24 13:07:36', '2022-01-24 13:07:36', '2022-01-24 13:07:36'),
(78, 1, 'lobby', '2022-01-24 13:08:38', '2022-01-24 13:09:27', '2022-01-24 13:08:38', '2022-01-24 13:08:38'),
(79, 1, 'lobby', '2022-01-24 13:15:42', '2022-01-24 13:15:42', '2022-01-24 13:15:42', '2022-01-24 13:15:42'),
(80, 1, 'lobby', '2022-01-24 13:21:20', '2022-01-24 13:21:20', '2022-01-24 13:21:20', '2022-01-24 13:21:20'),
(81, 1, 'lobby', '2022-01-24 13:21:40', '2022-01-24 13:21:40', '2022-01-24 13:21:40', '2022-01-24 13:21:40'),
(82, 1, 'lobby', '2022-01-24 13:29:29', '2022-01-24 13:29:29', '2022-01-24 13:29:29', '2022-01-24 13:29:29'),
(83, 1, 'lobby', '2022-01-24 13:29:33', '2022-01-24 13:29:33', '2022-01-24 13:29:33', '2022-01-24 13:29:33'),
(84, 1, 'lobby', '2022-01-24 13:29:40', '2022-01-24 13:29:40', '2022-01-24 13:29:40', '2022-01-24 13:29:40'),
(85, 1, 'lobby', '2022-01-24 13:29:44', '2022-01-24 13:29:44', '2022-01-24 13:29:44', '2022-01-24 13:29:44'),
(86, 1, 'lobby', '2022-01-24 13:52:18', '2022-01-24 13:52:18', '2022-01-24 13:52:18', '2022-01-24 13:52:18'),
(87, 1, 'lobby', '2022-01-24 13:52:49', '2022-01-24 13:52:49', '2022-01-24 13:52:49', '2022-01-24 13:52:49'),
(88, 2, 'lobby', '2022-01-24 14:44:38', '2022-01-24 14:44:38', '2022-01-24 14:44:38', '2022-01-24 14:44:38'),
(89, 1, 'lobby', '2022-01-24 14:53:58', '2022-01-24 14:53:58', '2022-01-24 14:53:58', '2022-01-24 14:53:58'),
(90, 1, 'lobby', '2022-01-24 14:56:18', '2022-01-24 14:56:18', '2022-01-24 14:56:18', '2022-01-24 14:56:18'),
(91, 1, 'lobby', '2022-01-24 14:56:45', '2022-01-24 14:56:45', '2022-01-24 14:56:45', '2022-01-24 14:56:45'),
(92, 1, 'lobby', '2022-01-24 14:56:50', '2022-01-24 14:56:50', '2022-01-24 14:56:50', '2022-01-24 14:56:50'),
(93, 1, 'lobby', '2022-01-24 14:56:51', '2022-01-24 14:56:51', '2022-01-24 14:56:51', '2022-01-24 14:56:51'),
(94, 1, 'lobby', '2022-01-24 14:56:52', '2022-01-24 14:56:52', '2022-01-24 14:56:52', '2022-01-24 14:56:52'),
(95, 1, 'lobby', '2022-01-24 15:21:21', '2022-01-24 15:21:21', '2022-01-24 15:21:21', '2022-01-24 15:21:21'),
(96, 1, 'lobby', '2022-01-24 15:36:40', '2022-01-24 15:36:40', '2022-01-24 15:36:40', '2022-01-24 15:36:40'),
(97, 1, 'lobby', '2022-01-24 15:41:26', '2022-01-24 15:41:26', '2022-01-24 15:41:26', '2022-01-24 15:41:26'),
(98, 1, 'lobby', '2022-01-24 15:49:58', '2022-01-24 15:49:58', '2022-01-24 15:49:58', '2022-01-24 15:49:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_thank`
--

CREATE TABLE `tbl_thank` (
  `id` int(11) NOT NULL,
  `thank_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_thank`
--

INSERT INTO `tbl_thank` (`id`, `thank_img`) VALUES
(1, '16152823881.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `employee_id` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `firm_name` varchar(255) NOT NULL,
  `agree` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `multioption` varchar(255) NOT NULL,
  `eurl` varchar(255) NOT NULL,
  `status` int(11) DEFAULT 0,
  `login_time` time DEFAULT '00:00:00',
  `logout_time` time DEFAULT '00:00:00',
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `email`, `employee_id`, `branch`, `mobile_no`, `firm_name`, `agree`, `city`, `country`, `type`, `multioption`, `eurl`, `status`, `login_time`, `logout_time`, `created_at`, `updated_at`) VALUES
(3, 'sanjay', 'sanjay@gmail.com', '12345', 'asas', '9999999999', 'wow', '1', 'm', 'kk', 'Player Meet & Greet Event', 'Base Agency', '0', 1, '16:19:17', '16:20:27', '2022-02-04 16:19:17', '2022-02-04 16:19:17'),
(4, 'sanjay', 'sanjsay@gmail.com', '123745', 'asas', '9999999999', 'wow', '1', 'm', 'kk', 'Player Meet & Greet Event', 'Base Agency', '1', 1, '16:19:17', '16:20:27', '2022-02-04 16:19:17', '2022-02-04 16:19:17');

-- --------------------------------------------------------

--
-- Stand-in structure for view `total_login_time`
-- (See below for the actual view)
--
CREATE TABLE `total_login_time` (
`user_id` int(11)
,`total_time` time
,`cltime` bigint(21)
,`name` varchar(255)
,`email` varchar(255)
,`status` int(11)
,`mobile_no` varchar(15)
,`company_name` varchar(255)
,`agree` varchar(255)
,`created_at` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `total_login__times`
--

CREATE TABLE `total_login__times` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `login_time` time DEFAULT '00:00:00',
  `logout_time` time DEFAULT '00:00:00',
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `total_login__times`
--

INSERT INTO `total_login__times` (`id`, `user_id`, `login_time`, `logout_time`, `created_at`, `updated_at`) VALUES
(1, 1, '13:40:34', '13:43:25', '2022-01-27 13:40:34', '2022-01-27 13:40:34'),
(2, 1, '13:43:53', '13:43:25', '2022-01-27 13:43:53', '2022-01-27 13:43:53'),
(3, 2, '17:15:05', '16:18:19', '2022-01-28 17:15:05', '2022-01-28 17:15:05'),
(4, 1, '18:24:40', '13:43:25', '2022-01-28 18:24:40', '2022-01-28 18:24:40'),
(5, 1, '12:45:06', '13:43:25', '2022-01-29 12:45:06', '2022-01-29 12:45:06'),
(6, 1, '16:36:52', '13:43:25', '2022-01-29 16:36:52', '2022-01-29 16:36:52'),
(7, 1, '11:42:04', '13:43:25', '2022-01-31 11:42:04', '2022-01-31 11:42:04'),
(8, 1, '11:40:43', '13:43:25', '2022-02-02 11:40:43', '2022-02-02 11:40:43'),
(9, 1, '11:42:59', '13:43:25', '2022-02-02 11:42:59', '2022-02-02 11:42:59'),
(10, 1, '12:19:35', '13:43:25', '2022-02-02 12:19:35', '2022-02-02 12:19:35'),
(11, 8, '12:40:05', '12:43:31', '2022-02-03 12:40:05', '2022-02-03 12:40:05'),
(12, 2, '12:47:55', '16:18:19', '2022-02-03 12:47:55', '2022-02-03 12:47:55'),
(13, 2, '12:51:39', '16:18:19', '2022-02-03 12:51:39', '2022-02-03 12:51:39'),
(14, 2, '12:52:41', '16:18:19', '2022-02-03 12:52:41', '2022-02-03 12:52:41'),
(15, 1, '12:53:32', '13:43:25', '2022-02-03 12:53:32', '2022-02-03 12:53:32'),
(16, 1, '12:55:29', '13:43:25', '2022-02-03 12:55:29', '2022-02-03 12:55:29'),
(17, 1, '12:58:58', '13:43:25', '2022-02-03 12:58:58', '2022-02-03 12:58:58'),
(18, 1, '13:00:47', '13:43:25', '2022-02-03 13:00:47', '2022-02-03 13:00:47'),
(19, 1, '13:01:07', '13:43:25', '2022-02-03 13:01:07', '2022-02-03 13:01:07'),
(20, 1, '13:02:52', '13:43:25', '2022-02-03 13:02:52', '2022-02-03 13:02:52'),
(21, 1, '13:03:40', '13:43:25', '2022-02-03 13:03:40', '2022-02-03 13:03:40'),
(22, 1, '13:26:14', '13:43:25', '2022-02-03 13:26:14', '2022-02-03 13:26:14'),
(23, 1, '13:33:39', '13:43:25', '2022-02-03 13:33:39', '2022-02-03 13:33:39'),
(24, 1, '13:35:01', '13:43:25', '2022-02-03 13:35:01', '2022-02-03 13:35:01'),
(25, 1, '13:35:27', '13:43:25', '2022-02-03 13:35:27', '2022-02-03 13:35:27'),
(26, 1, '13:36:32', '13:43:25', '2022-02-03 13:36:32', '2022-02-03 13:36:32'),
(27, 1, '13:40:14', '13:43:25', '2022-02-03 13:40:14', '2022-02-03 13:40:14'),
(28, 1, '13:40:44', '13:43:25', '2022-02-03 13:40:44', '2022-02-03 13:40:44'),
(29, 1, '13:43:20', '13:43:25', '2022-02-03 13:43:20', '2022-02-03 13:43:20'),
(30, 2, '16:16:27', '16:18:19', '2022-02-04 16:16:27', '2022-02-04 16:16:27'),
(31, 3, '16:19:17', '16:20:27', '2022-02-04 16:19:17', '2022-02-04 16:19:17');

-- --------------------------------------------------------

--
-- Table structure for table `type_action`
--

CREATE TABLE `type_action` (
  `u_t_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type_action`
--

INSERT INTO `type_action` (`u_t_id`, `name`) VALUES
(1, 'yes1'),
(2, 'yes2'),
(3, 'yes3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'j', 'j', '0000-00-00 00:00:00', 'j', 'j', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'ja', 'js@', '0000-00-00 00:00:00', 'j', 'j', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_redirect`
--

CREATE TABLE `user_redirect` (
  `id` int(11) NOT NULL,
  `lobby_st` int(11) NOT NULL,
  `ballroom_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_redirect`
--

INSERT INTO `user_redirect` (`id`, `lobby_st`, `ballroom_at`) VALUES
(1, 1, 0);

-- --------------------------------------------------------

--
-- Structure for view `all_comments`
--
DROP TABLE IF EXISTS `all_comments`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `all_comments`  AS SELECT `a`.`id` AS `id`, `a`.`sparkm` AS `sparkm`, `a`.`u_id` AS `u_id`, `a`.`description` AS `description`, `b`.`name` AS `name`, `b`.`email` AS `email`, `b`.`status` AS `status`, `b`.`mobile_no` AS `mobile_no`, `b`.`company_name` AS `company_name`, `a`.`created_at` AS `created_at`, `a`.`updated_at` AS `updated_at` FROM (`jk`.`cmms` `a` join `jk`.`tbl_users` `b` on(`a`.`u_id` = `b`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `total_login_time`
--
DROP TABLE IF EXISTS `total_login_time`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `total_login_time`  AS SELECT `a`.`user_id` AS `user_id`, timediff(max(`a`.`logout_time`),min(`a`.`login_time`)) AS `total_time`, count(`a`.`user_id`) AS `cltime`, `b`.`name` AS `name`, `b`.`email` AS `email`, `b`.`status` AS `status`, `b`.`mobile_no` AS `mobile_no`, `b`.`company_name` AS `company_name`, `b`.`agree` AS `agree`, `b`.`created_at` AS `created_at` FROM (`jk`.`total_login__times` `a` join `jk`.`tbl_users` `b` on(`a`.`user_id` = `b`.`id`)) GROUP BY `a`.`user_id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminregs`
--
ALTER TABLE `adminregs`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_regs`
--
ALTER TABLE `admin_regs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_login_users`
--
ALTER TABLE `all_login_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `change_videos`
--
ALTER TABLE `change_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `cmms`
--
ALTER TABLE `cmms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coments`
--
ALTER TABLE `coments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `dy_pulse`
--
ALTER TABLE `dy_pulse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_page`
--
ALTER TABLE `event_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footfalls`
--
ALTER TABLE `footfalls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fpulscolor`
--
ALTER TABLE `fpulscolor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `img_slider`
--
ALTER TABLE `img_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inputfield`
--
ALTER TABLE `inputfield`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `llu`
--
ALTER TABLE `llu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lobby_videos`
--
ALTER TABLE `lobby_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `l_r_page`
--
ALTER TABLE `l_r_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newevnts`
--
ALTER TABLE `newevnts`
  ADD PRIMARY KEY (`envt_id`);

--
-- Indexes for table `pagelikes`
--
ALTER TABLE `pagelikes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_setup`
--
ALTER TABLE `page_setup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_regusers`
--
ALTER TABLE `tbl_regusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reg_page`
--
ALTER TABLE `tbl_reg_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reporting`
--
ALTER TABLE `tbl_reporting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_thank`
--
ALTER TABLE `tbl_thank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `total_login__times`
--
ALTER TABLE `total_login__times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_action`
--
ALTER TABLE `type_action`
  ADD PRIMARY KEY (`u_t_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_redirect`
--
ALTER TABLE `user_redirect`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminregs`
--
ALTER TABLE `adminregs`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_regs`
--
ALTER TABLE `admin_regs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `all_login_users`
--
ALTER TABLE `all_login_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `change_videos`
--
ALTER TABLE `change_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cmms`
--
ALTER TABLE `cmms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coments`
--
ALTER TABLE `coments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dy_pulse`
--
ALTER TABLE `dy_pulse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `event_page`
--
ALTER TABLE `event_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footfalls`
--
ALTER TABLE `footfalls`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fpulscolor`
--
ALTER TABLE `fpulscolor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `img_slider`
--
ALTER TABLE `img_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inputfield`
--
ALTER TABLE `inputfield`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lobby_videos`
--
ALTER TABLE `lobby_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `l_r_page`
--
ALTER TABLE `l_r_page`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `newevnts`
--
ALTER TABLE `newevnts`
  MODIFY `envt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `page_setup`
--
ALTER TABLE `page_setup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_regusers`
--
ALTER TABLE `tbl_regusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_reg_page`
--
ALTER TABLE `tbl_reg_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_reporting`
--
ALTER TABLE `tbl_reporting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `tbl_thank`
--
ALTER TABLE `tbl_thank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `total_login__times`
--
ALTER TABLE `total_login__times`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `type_action`
--
ALTER TABLE `type_action`
  MODIFY `u_t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_redirect`
--
ALTER TABLE `user_redirect`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
