-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2019 at 09:59 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dva`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `parent` int(10) UNSIGNED DEFAULT NULL,
  `name_eng` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_de` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `parent`, `name_eng`, `name_de`) VALUES
(15, 'Dizajn - Vizualizacija - Arhitektura', '2019-02-23 16:50:30', '2019-02-23 16:50:30', NULL, 'Design - Visualization- Architecture', 'Design - Visualisierung - Architektur'),
(17, 'Dizajn', '2019-02-23 12:41:28', '2019-02-23 12:41:28', 15, 'Design', 'Design'),
(18, 'Vizualizacija', '2019-02-23 12:42:03', '2019-02-23 12:42:03', 15, 'Visualization', 'Visualisierung'),
(19, 'Arhitektura', '2019-02-23 12:42:20', '2019-02-23 12:46:05', 15, 'Architecture', 'Architektur'),
(20, 'Elektrotehnika i elektronika', '2019-02-23 12:49:31', '2019-02-23 12:49:31', NULL, 'Electrical and electronics engineering', 'Elektrotechnik und Elektronik'),
(21, 'IT - sektor', '2019-02-23 12:49:59', '2019-02-23 12:49:59', NULL, 'IT - sector', 'IT - Sektor'),
(22, 'Web aplikacije', '2019-02-23 12:50:39', '2019-02-23 12:50:39', 21, 'Web development', 'Web Entwicklung');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `what` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_eng` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_de` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `detailed` text COLLATE utf8_unicode_ci,
  `detailed_eng` text COLLATE utf8_unicode_ci,
  `detailed_de` text COLLATE utf8_unicode_ci,
  `image_one` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_two` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hash` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `post_id`, `type`, `what`, `title`, `title_eng`, `title_de`, `detailed`, `detailed_eng`, `detailed_de`, `image_one`, `image_two`, `hash`, `created_at`, `updated_at`) VALUES
(8, 2, 'project', 'huge_header', 'Naša kreativnost samo za Vas \r\nJoš jedan dio', 'Naša kreativnost samo za Vas \r\nJoš jedan dio', 'Naša kreativnost samo za Vas \r\nJoš jedan dio', NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-23 20:03:41', '2019-02-23 20:03:41'),
(9, 2, 'project', 'single_image', NULL, NULL, NULL, NULL, NULL, NULL, '64', NULL, NULL, '2019-02-23 20:03:53', '2019-02-23 20:03:53'),
(10, 2, 'project', 'header_and_text', 'OVO JE NASLOV OVOG POSTA', 'OVO JE NASLOV OVOG POSTA', 'OVO JE NASLOV OVOG POSTA', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. \r\n\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. \r\n\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. \r\n\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', NULL, NULL, NULL, '2019-02-23 20:04:12', '2019-02-23 20:04:12');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `created_at`, `updated_at`) VALUES
(5, '979a84ea2314a02e0c2a1d88d415261a.jpg', '2019-02-22 16:38:20', '2019-02-22 16:38:20'),
(6, 'b0304bea6547716630a672a87e66dc7f.jpg', '2019-02-22 16:38:35', '2019-02-22 16:38:35'),
(7, '16c5f67b19533c08a37c920e0aa3d11d.png', '2019-02-23 15:21:43', '2019-02-23 15:21:43'),
(8, '7b5d44b440d5f06a68a4aec263b57b57.png', '2019-02-23 15:23:47', '2019-02-23 15:23:47'),
(9, '63882732d32023d1eaa0ec9fbfcafc44.png', '2019-02-23 15:32:35', '2019-02-23 15:32:35'),
(10, '717754abbdc2e0e3637576e17ea46d8a.png', '2019-02-23 15:32:47', '2019-02-23 15:32:47'),
(11, 'c6c698ad67fd2f9bd6c0a397e766ddab.png', '2019-02-23 15:44:18', '2019-02-23 15:44:18'),
(12, '290a7f8c16242f765017d1c3469770ab.png', '2019-02-23 15:47:08', '2019-02-23 15:47:08'),
(13, '8e54c8f1c88a67861cfd077d130bea96.png', '2019-02-23 16:27:48', '2019-02-23 16:27:48'),
(14, 'b04d9d35c67dc92b7d8785a0305685f2.jpg', '2019-02-23 16:48:17', '2019-02-23 16:48:17'),
(15, '0b34dde608440abc670e9e6d2ea80b64.jpg', '2019-02-23 18:43:51', '2019-02-23 18:43:51'),
(16, '92bda5ce3497f31cd24badad950fb470.jpg', '2019-02-23 18:43:58', '2019-02-23 18:43:58'),
(17, '9923f579c23200c257b173ec2dc36431.jpg', '2019-02-23 18:44:14', '2019-02-23 18:44:14'),
(18, 'f135be243472425c8e5c104c5ccdb8b2.jpg', '2019-02-23 18:44:17', '2019-02-23 18:44:17'),
(19, 'd6cb4eaeb76188431bbe17e0d6846713.jpg', '2019-02-23 18:44:36', '2019-02-23 18:44:36'),
(20, '47d6e5fe3895fe3b4cbea50207d92e58.jpg', '2019-02-23 18:44:53', '2019-02-23 18:44:53'),
(21, '25b82c9814545353cee384e468ceb0db.jpg', '2019-02-23 18:45:17', '2019-02-23 18:45:17'),
(22, '270bbbabc726e3a156345385945d7756.jpg', '2019-02-23 18:45:32', '2019-02-23 18:45:32'),
(23, 'e3c496f4c642efb0b89b069250ef8522.jpg', '2019-02-23 18:45:53', '2019-02-23 18:45:53'),
(24, 'ab642ad880e1ee52bd48dd094c85ff56.jpg', '2019-02-23 18:46:14', '2019-02-23 18:46:14'),
(25, '0071330481bc3251608badda2d86f675.jpg', '2019-02-23 18:46:16', '2019-02-23 18:46:16'),
(26, 'a96f3449a79a45956afc91d648222b16.jpg', '2019-02-23 18:46:27', '2019-02-23 18:46:27'),
(27, '3b8ef9dc90175676c1ae198d8c7c55a6.png', '2019-02-23 18:49:11', '2019-02-23 18:49:11'),
(28, 'd3489cd745995e204de2e91060990ff6.png', '2019-02-23 18:49:23', '2019-02-23 18:49:23'),
(29, '27707052f5311e521d9d80757a257c17.jpg', '2019-02-23 18:50:55', '2019-02-23 18:50:55'),
(30, '382958aa96d5d1a933938d0f158a4aa3.png', '2019-02-23 18:51:00', '2019-02-23 18:51:00'),
(31, 'f0a58657adc508b044875095383854a9.png', '2019-02-23 18:51:54', '2019-02-23 18:51:54'),
(32, '912014e229ebce89fc448576551d8e16.png', '2019-02-23 18:52:03', '2019-02-23 18:52:03'),
(33, '69490a9715f51bb8096922c12f7a3124.jpg', '2019-02-23 18:52:07', '2019-02-23 18:52:07'),
(34, '929c1b11b30b4f135bfa881ccc21182d.jpg', '2019-02-23 18:53:30', '2019-02-23 18:53:30'),
(35, '3a061608b3cd68ff57ea0396b9fcab93.jpg', '2019-02-23 18:53:39', '2019-02-23 18:53:39'),
(36, 'e00cd93446e5aa370bb2ac18fc1f17d4.jpg', '2019-02-23 18:54:38', '2019-02-23 18:54:38'),
(37, '9249fd5e29f8a659810814b3c055e6dd.jpg', '2019-02-23 18:55:12', '2019-02-23 18:55:12'),
(38, 'b90ca6b03d1ccd83476bc3193e7b3c61.png', '2019-02-23 18:55:26', '2019-02-23 18:55:26'),
(39, 'c138c38ba5458cba878329b550d14715.jpg', '2019-02-23 18:55:43', '2019-02-23 18:55:43'),
(40, '6318f24f8c93640e838795e3d9d69c7c.jpg', '2019-02-23 18:56:05', '2019-02-23 18:56:05'),
(41, 'f6cfd29f305e9ae8263b6a93985ca621.jpg', '2019-02-23 18:56:59', '2019-02-23 18:56:59'),
(42, '8b894bd40744d73f0a22258d96542d37.jpg', '2019-02-23 18:57:02', '2019-02-23 18:57:02'),
(43, 'bef429793753c5b34f1beef8be5dedac.jpg', '2019-02-23 18:57:21', '2019-02-23 18:57:21'),
(44, '51deb21ea2d7ab8ba45d5666af99d161.jpg', '2019-02-23 18:57:58', '2019-02-23 18:57:58'),
(45, '4bae0aa03abc4bb574eeacc9cbd14acb.jpg', '2019-02-23 18:58:40', '2019-02-23 18:58:40'),
(46, '6bf313fdf7a0c7e22af3b9bb1ce97f3e.png', '2019-02-23 18:58:53', '2019-02-23 18:58:53'),
(47, '5843682018d36747cbe58cbff7ae9b4d.png', '2019-02-23 18:59:25', '2019-02-23 18:59:25'),
(48, '728bb229704935ba0fd3e35af5faf188.png', '2019-02-23 19:01:23', '2019-02-23 19:01:23'),
(49, 'cd61fc9a617270489e11afb90637eb72.png', '2019-02-23 19:01:37', '2019-02-23 19:01:37'),
(50, '3f8a40a1e9515ecddf46f2bb4c5a37cd.png', '2019-02-23 19:02:07', '2019-02-23 19:02:07'),
(51, '32a6bfd8d9f58193b1cfc535c1b6dfd1.jpg', '2019-02-23 19:27:46', '2019-02-23 19:27:46'),
(52, 'e26a9b9681dc1e759a5b366da752dc4f.png', '2019-02-23 19:28:30', '2019-02-23 19:28:30'),
(53, '662d2c9d9e4dc0de9f2059ce450d08d1.jpg', '2019-02-23 19:29:10', '2019-02-23 19:29:10'),
(54, '152f16c05c0af6c9921ab3c8c19b380b.jpg', '2019-02-23 19:30:40', '2019-02-23 19:30:40'),
(55, '1eb3398aeb6cbae43c64947eda901efe.jpg', '2019-02-23 19:32:44', '2019-02-23 19:32:44'),
(56, '9980a1aa4b579d7bbfa7cd3620500553.jpg', '2019-02-23 19:32:58', '2019-02-23 19:32:58'),
(57, 'f75d14813414eeafd90bb09a3f44a0de.jpg', '2019-02-23 19:33:00', '2019-02-23 19:33:00'),
(58, '1501b0536a212454c48ef16edb4b056b.jpg', '2019-02-23 19:33:42', '2019-02-23 19:33:42'),
(59, '9dcd17f2453f046c67923d6f270c42ca.jpg', '2019-02-23 19:33:42', '2019-02-23 19:33:42'),
(60, 'f9ad5c63b26a54b8740fdd802e68d06b.jpg', '2019-02-23 19:34:08', '2019-02-23 19:34:08'),
(61, '89d92ca3177fa29748bada9ca7406bc3.jpg', '2019-02-23 19:34:09', '2019-02-23 19:34:09'),
(62, '9c401530de7134ef390eafee5aa55824.jpg', '2019-02-23 19:36:34', '2019-02-23 19:36:34'),
(63, 'a94bc8e3b13f85ee8701981b00a15379.jpg', '2019-02-23 19:36:37', '2019-02-23 19:36:37'),
(64, 'b2c2443259fe3e367d740c2b30132bc4.png', '2019-02-23 20:03:51', '2019-02-23 20:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_02_16_175254_create_slider_table', 1),
(4, '2019_02_16_205131_create_roles_table', 1),
(5, '2019_02_17_002913_create_reviews_table', 1),
(6, '2019_02_17_003059_create_images_table', 1),
(7, '2019_02_22_175553_create_partners_table', 2),
(8, '2019_02_23_094848_create_categories_table', 3),
(9, '2019_02_23_103037_create_projects_table', 4),
(10, '2019_02_23_110600_add_subcategory_table', 4),
(11, '2019_02_23_133116_add_eng_categories', 5),
(12, '2019_02_23_162431_add_project_fields', 6),
(13, '2019_02_23_164444_add_project_user', 7),
(16, '2019_02_23_175314_create_contents_table', 8),
(18, '2019_02_23_214932_create_views_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `image`, `created_at`, `updated_at`) VALUES
(12, 'f8acf5752ba043241c534538531bd109.png', '2019-02-23 08:30:54', '2019-02-23 08:30:54'),
(13, 'cd35424f38d77afb02360d9eaef3dc82.png', '2019-02-23 08:30:57', '2019-02-23 08:30:57'),
(14, '1807e8643776d2de6987d2c7033cf8e0.png', '2019-02-23 08:31:01', '2019-02-23 08:31:01'),
(15, 'f6c4d073a1e7c8a960663297f0243060.png', '2019-02-23 08:31:04', '2019-02-23 08:31:04'),
(16, '1ef38785395850ae51c3d7e2c1c3e13d.png', '2019-02-23 08:31:07', '2019-02-23 08:31:07'),
(17, '6178897be3104ce4197cbab098b2ff85.png', '2019-02-23 08:31:11', '2019-02-23 08:31:11'),
(18, 'df0fa66f0c6c95b66529562016b85cf0.png', '2019-02-23 08:31:14', '2019-02-23 08:31:14'),
(19, '598d1d08144736b551ee83401e60900b.png', '2019-02-23 08:31:18', '2019-02-23 08:31:18'),
(20, 'd7c6c05d060ac2bc3fce2e6730302bc7.png', '2019-02-23 08:31:22', '2019-02-23 08:31:22'),
(21, 'c7ea34eca0f6dfb749045c278b494c5d.png', '2019-02-23 08:31:24', '2019-02-23 08:31:24'),
(22, 'bc4cf2113b03dc7045c989a93532a132.png', '2019-02-23 08:31:28', '2019-02-23 08:31:28'),
(23, 'e259f6853443bc5092d2da7a9f10c887.png', '2019-02-23 08:31:32', '2019-02-23 08:31:32'),
(24, '8bfe506425d2da43714e8f3bb3418105.png', '2019-02-23 08:31:38', '2019-02-23 08:31:38'),
(25, 'c92c7a747bb7f74de39f891be7688759.png', '2019-02-23 08:31:43', '2019-02-23 08:31:43');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_eng` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_de` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cat_id` int(10) UNSIGNED DEFAULT NULL,
  `subcat_id` int(10) UNSIGNED DEFAULT NULL,
  `short_d` text COLLATE utf8_unicode_ci,
  `short_d_eng` text COLLATE utf8_unicode_ci,
  `short_d_de` text COLLATE utf8_unicode_ci,
  `image_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `created_at`, `updated_at`, `title`, `title_eng`, `title_de`, `cat_id`, `subcat_id`, `short_d`, `short_d_eng`, `short_d_de`, `image_id`, `user_id`) VALUES
(2, '2019-02-23 15:44:20', '2019-02-23 15:44:20', 'Wooden  Horizontal  Villa', 'Wooden  Horizontal  Villa', 'Wooden  Horizontal  Villa', 15, 17, 'ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin', 'ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin', 'ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin', 11, 1),
(4, '2019-02-23 16:28:07', '2019-02-23 16:28:07', 'Wooden  Horizontal  Villa', 'Wooden  Horizontal  Villa', 'Wooden  Horizontal  Villa', 15, 17, 'ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin', 'ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin', 'ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin', 13, 1),
(5, '2019-02-23 16:48:34', '2019-02-23 16:48:34', 'Wooden  Horizontal  Villa', 'Wooden  Horizontal  Villa', 'Wooden  Horizontal  Villa', 15, 18, 'ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin', 'ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin', 'ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin', 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8_unicode_ci,
  `text` text COLLATE utf8_unicode_ci,
  `image_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `title`, `text`, `image_id`, `created_at`, `updated_at`) VALUES
(6, 'John Doe', 'CEO of John Company', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries', 5, '2019-02-22 16:38:27', '2019-02-22 16:38:27'),
(7, 'Jolly Doe', 'Not CEO', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries', 6, '2019-02-22 16:38:44', '2019-02-22 16:38:44');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'root', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `small_title` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `huge_title` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `huge_image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `small_image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `small_title`, `huge_title`, `link`, `huge_image`, `small_image`, `created_at`, `updated_at`) VALUES
(1, 'RESIDENTIAL', 'The luxury \r\nresidence in \r\nforest', NULL, '7870d36e74de1a615a6c394920c273e9.jpg', '91429dfb6f32a3cfc445d7780760ad84.png', '2019-02-22 16:43:41', '2019-02-22 16:43:41'),
(2, 'HOUSE', 'Small\r\nHouse Near\r\nSarajevo', NULL, '8188dc8fe44fe7c261d8158745f60b9b.jpg', '083922e07b618a86ee225f47d4b203dc.png', '2019-02-22 16:44:14', '2019-02-22 16:44:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT '0',
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `surname` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `is_active`, `name`, `surname`, `email`, `email_verified_at`, `password`, `phone`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 'Aladin', NULL, 'kaapiic@hotmail.com', '2019-02-21 23:00:00', 'enciklopedija', NULL, NULL, NULL, '2019-02-21 23:00:00', '2019-02-21 23:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` int(10) UNSIGNED NOT NULL,
  `day` int(10) UNSIGNED DEFAULT NULL,
  `month` int(10) UNSIGNED DEFAULT NULL,
  `year` int(10) UNSIGNED DEFAULT NULL,
  `views` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`id`, `day`, `month`, `year`, `views`, `created_at`, `updated_at`) VALUES
(7, 20, 2, 19, 13, '2019-02-24 07:03:21', '2019-02-24 07:03:21'),
(8, 21, 2, 19, 16, '2019-02-24 07:03:43', '2019-02-24 07:03:43'),
(9, 22, 2, 19, 11, '2019-02-24 07:03:56', '2019-02-24 07:03:56'),
(10, 23, 2, 19, 19, '2019-02-24 07:04:16', '2019-02-24 07:04:16'),
(11, 24, 2, 19, 1, '2019-02-24 07:04:29', '2019-02-24 07:04:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD KEY `users_role_id_index` (`role_id`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
