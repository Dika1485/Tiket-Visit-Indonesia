-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 01:51 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visit`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `whocat_id` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `chat` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `daftars`
--

CREATE TABLE `daftars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daftars`
--

INSERT INTO `daftars` (`id`, `menu_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 13, 4, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(3, 19, 1, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(4, 1, 3, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(6, 17, 3, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(7, 29, 1, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(8, 15, 2, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(9, 28, 2, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(12, 14, 1, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(13, 27, 4, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(14, 7, 1, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(16, 6, 1, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(17, 9, 1, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(18, 25, 4, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(19, 3, 3, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(22, 20, 1, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(23, 4, 1, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(24, 2, 1, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(25, 21, 1, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(27, 16, 1, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(31, 31, 3, '2022-12-17 00:27:41', '2022-12-17 00:27:41'),
(34, 37, 3, '2022-12-17 00:35:06', '2022-12-17 00:35:06'),
(36, 39, 3, '2022-12-17 02:20:15', '2022-12-17 02:20:15'),
(39, 42, 2, '2022-12-17 10:50:55', '2022-12-17 10:50:55'),
(40, 43, 3, '2022-12-17 12:04:09', '2022-12-17 12:04:09');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorits`
--

CREATE TABLE `favorits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favorits`
--

INSERT INTO `favorits` (`id`, `menu_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 20, 3, '2022-12-15 01:32:19', '2022-12-15 01:32:19'),
(2, 4, 5, '2022-12-15 01:32:19', '2022-12-15 01:32:19'),
(3, 30, 8, '2022-12-15 01:32:19', '2022-12-15 01:32:19'),
(4, 22, 7, '2022-12-15 01:32:19', '2022-12-15 01:32:19'),
(5, 5, 6, '2022-12-15 01:32:19', '2022-12-15 01:32:19'),
(6, 24, 9, '2022-12-15 01:32:19', '2022-12-15 01:32:19'),
(7, 25, 8, '2022-12-15 01:32:19', '2022-12-15 01:32:19'),
(8, 12, 10, '2022-12-15 01:32:19', '2022-12-15 01:32:19'),
(9, 20, 9, '2022-12-15 01:32:19', '2022-12-15 01:32:19'),
(10, 20, 6, '2022-12-15 01:32:19', '2022-12-15 01:32:19');

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `kategori`, `created_at`, `updated_at`) VALUES
(2, 'makanan', '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(3, 'produk', '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(4, 'wisata', '2022-12-15 01:32:18', '2022-12-15 01:32:18');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` int(11) NOT NULL,
  `namefile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `menu_id`, `namefile`, `created_at`, `updated_at`) VALUES
(11, 39, '1671272200955-Merdeka_Square_Monas_02.jpg', NULL, NULL),
(12, 39, '1671272200956-dfd-Level-1-Revisi.drawio.png', NULL, NULL),
(13, 39, '1671272200958-d.png', NULL, NULL),
(14, 42, '1671299455535-1389553755.jpg', NULL, NULL),
(15, 43, '1671303849909-dig6.png', NULL, NULL),
(16, 43, '1671303849912-dig5.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `harga` int(11) DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jalan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `nama`, `kategori_id`, `harga`, `desc`, `jalan`, `desa`, `kecamatan`, `kota`, `provinsi`, `deleted`, `created_at`, `updated_at`) VALUES
(1, 'ton', 2, 5000, 'Expedita voluptas adipisci fugit odio. Repellendus est molestiae maxime similique. Quo et ullam earum quae sed deserunt ut.', '627 Mayer Cove Suite 742', 'side', 'West', 'Port Amani', 'Connecticut', 0, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(2, 'mouth', 4, 20000, 'Dolorum nisi distinctio at nobis sint. Quibusdam ut accusamus accusamus. Voluptas eos quas magni ratione iure quo. Ut quod alias temporibus voluptatem ut doloribus.', '29676 Stehr Extensions', 'mouth', 'South', 'Flatleyside', 'Montana', 0, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(3, 'portlew', 4, 20000, 'Odio natus est nulla quod tempore assumenda. Est aut saepe asperiores impedit corporis. Excepturi ut occaecati explicabo veritatis maxime ratione.', '9339 Gregoria Station Suite 270', 'stad', 'New', 'Llewellynview', 'Oklahoma', 0, '2022-12-15 01:32:18', '2022-12-17 01:01:00'),
(4, 'stad', 2, 10000, 'Dolorem ea rerum enim aut. Assumenda in voluptatem dolor doloremque doloremque. Rerum culpa consequatur laborum id ut. Cumque eligendi consequatur in est consequuntur illum qui est. Consequatur voluptatem quo suscipit et est voluptatem.', '304 Jaskolski Isle Apt. 163', 'mouth', 'North', 'Kellyside', 'Nebraska', 0, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(6, 'berg', 3, 20000, 'Doloribus tempora quo et nihil vel ab. Similique sint et quia voluptate qui reiciendis. Dolores ullam itaque non eligendi magni quas. Veritatis aperiam aspernatur non non et.', '9437 Ratke Point Suite 112', 'shire', 'Port', 'Lake Gageshire', 'Oregon', 0, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(7, 'fort', 3, 15000, 'Consequatur minima dolor ea velit. Et consequuntur illum qui laboriosam eum. A ipsa dicta quo tempore aliquam maiores non. Deleniti pariatur dignissimos dolore et fugiat consequatur.', '8497 Jesus Parkways', 'shire', 'New', 'Port Elianstad', 'Utah', 0, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(9, 'burgh', 4, 15000, 'Sed enim cumque quo nisi sed occaecati pariatur. Reprehenderit sapiente veniam qui minima quis. Rem consectetur sit tempore corporis voluptatem. Perferendis aliquam et corrupti.', '32890 Dickens Ford Apt. 238', 'burgh', 'South', 'South Hank', 'Florida', 0, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(13, 'port', 4, 10000, 'Temporibus libero voluptatem laudantium mollitia est. Eaque voluptates alias et. Error unde quas aut eveniet ratione accusantium. Voluptas et qui harum sapiente dolorem.', '201 Erin Fields', 'mouth', 'Lake', 'East Mayraborough', 'New York', 0, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(14, 'ville', 4, 5000, 'Voluptatum est doloribus vel ut sint. Eaque molestias optio est praesentium aspernatur temporibus. Numquam accusantium explicabo voluptatem omnis et. Rerum minus magnam in officiis eligendi harum tempore.', '10695 Vandervort Harbor', 'furt', 'West', 'East Caterinahaven', 'Virginia', 0, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(15, 'view', 2, 10000, 'Est hic vitae eum dolorem. Sint quasi debitis doloremque ut. Ut voluptate deleniti veritatis iure quo eum et. Reprehenderit necessitatibus temporibus ad nulla aut similique vel.', '9151 Schaefer Wall', 'side', 'West', 'London', 'New York', 0, '2022-12-15 01:32:18', '2022-12-17 12:01:34'),
(16, 'borough', 2, 15000, 'Voluptas alias unde asperiores rerum optio animi eum. Rerum ut deleniti non culpa temporibus qui quia. Sed iure iure praesentium autem ut. Omnis voluptatum maiores voluptatibus nihil quo recusandae est repellendus.', '89433 Emiliano Knolls', 'fort', 'North', 'Tylerberg', 'Nebraska', 0, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(17, 'viewer', 3, 20000, 'Laboriosam fugit corrupti laborum dolores magnam ratione est laborum. Laboriosam optio fuga sit fugiat nemo molestias. Ea consequatur qui veniam quo iusto perspiciatis.', '551 Flatley Square Suite 448', 'town', 'New', 'Beierport', 'Rhode Island', 0, '2022-12-15 01:32:18', '2022-12-17 01:02:42'),
(19, 'view', 3, 5000, 'Optio exercitationem eum minima consequatur et nihil. Pariatur quia voluptate dolor. Laboriosam est a quidem sint quia aut. Natus officia quo est repellat. Dolor incidunt velit nam est occaecati possimus.', '706 Wintheiser Brook Apt. 847', 'port', 'South', 'Mossieville', 'Idaho', 0, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(20, 'furt', 4, 15000, 'Nam deleniti maiores harum nostrum aut. Aut deleniti sit aperiam amet ut aut.', '54690 Williamson Ramp Apt. 776', 'ville', 'Lake', 'Daphneeberg', 'Connecticut', 0, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(21, 'ville', 2, 15000, 'Eum voluptas ipsum provident dolore. Et distinctio earum nemo velit numquam exercitationem. Rerum veritatis est quo delectus quis nobis.', '151 Susanna Courts', 'town', 'Lake', 'Torphyfort', 'Nevada', 0, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(25, 'land', 4, 15000, 'Maiores a qui est autem officia suscipit. Dolorem quis inventore est ipsa voluptatem. Omnis aut odit aut consectetur. Molestiae esse delectus sint commodi est saepe.', '3285 Olson Bridge Suite 904', 'ton', 'New', 'Mariahchester', 'New Hampshire', 0, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(27, 'ville', 1, 15000, 'Odit officia eius fugit odit sunt laboriosam. Dicta beatae ut eaque doloremque vel ipsa. Praesentium sint eos molestias reiciendis quis vero.', '4328 Gleichner Avenue Suite 492', 'side', 'South', 'Brownchester', 'Iowa', 0, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(28, 'ville', 1, 15000, 'Sed incidunt aut enim expedita. Voluptatem maxime ipsum quas in. Autem asperiores ratione cupiditate culpa porro enim eaque.', '850 Pouros Views Suite 537', 'bury', 'Port', 'Nedview', 'New York', 1, '2022-12-15 01:32:18', '2022-12-17 11:00:09'),
(29, 'haven', 2, 10000, 'Velit illum qui sunt occaecati qui fugiat. Saepe qui voluptas odit voluptates et.', '596 Trantow Unions Suite 977', 'mouth', 'West', 'Nicolasview', 'Washington', 0, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(31, 'Goa Lawa', 4, 20000, 'lkaa ada goa lawaalkkk', 'laskd', 'klasd', 'akdsalkds', 'purbalingga', 'jateng', 0, '2022-12-17 00:27:40', '2022-12-17 00:27:40'),
(33, 'adcasc', 4, 2131231, 'afassdd', 'sdfds', 'dfsdf', 'sdfsdfe', 'dfsfs', 'sdfsd', 0, '2022-12-17 00:31:52', '2022-12-17 00:31:52'),
(36, 'aaaaaaaaaaa', 4, 2147483647, 'aaaaaaaaaaaa', 'aa', 'aaaaaaaaaaaaa', 'aaaaa', 'aaaaa', 'aaaaaaa', 0, '2022-12-17 00:34:13', '2022-12-17 00:34:13'),
(37, 'iuh\'mok[okm', 4, 234567, 'hhjoipoip9pi0[pipoiij[oj[ij', 'yiggyvk', 'uihygbvip', 'hbiuhy9lohp', 'hyhkhgyvt8vt', 'lulhlkinjplmi', 0, '2022-12-17 00:35:06', '2022-12-17 00:35:06'),
(39, 'Jalan jalan', 4, 50000, 'Jalan merupakan suatu kegiatan yang memanfaatkan gerakan sendi dari kaki dan juga paha, serta berlari merupakan kegiatan yang berfungsi untuk membakar kalori.', 'Angsana', 'Tritihkulon', 'Cilacap Utara', 'Cilacap', 'Jawa Tengah', 0, '2022-12-17 02:20:15', '2022-12-17 02:20:15'),
(42, 'Menara Pandang', 4, 45000, 'Menara Pandang Teratai Purwokerto merupakan sebuah menara yang berada di Kedungwuluh, Purwokerto Barat, Kabupaten Banyumas. Menara pandang setinggi 117 meter yang dibangun sejak tahun 2021 ini merupakah sebuah proyek infrastruktur pariwisata baru di Kawasan Kota Baru Purwokerto yang berada di wilayah Jalan Bung Karno.', '__', 'Kedungwuluh', 'Purwokerto Barat', 'Banyumas', 'Jawa Tengah', 1, '2022-12-17 10:50:54', '2022-12-17 10:57:41'),
(43, 'fjh', 4, 1000, 'hujgjgjhgn', 'jghgh', 'hjghjfyh', 'hvnb', 'mjbnm', 'hghn', 0, '2022-12-17 12:04:09', '2022-12-17 12:04:59');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_04_094129_create_menu_table', 1),
(6, '2022_12_04_094131_create_transaksi_table', 1),
(7, '2022_12_04_094132_create_daftar_table', 1),
(8, '2022_12_04_094133_create_notifikasi_table', 1),
(9, '2022_12_04_094134_create_favorit_table', 1),
(10, '2022_12_04_094135_create_rating_table', 1),
(11, '2022_12_04_094136_create_media_table', 1),
(12, '2022_12_04_094137_create_kategori_table', 1),
(13, '2022_12_04_094138_create_whochat_table', 1),
(14, '2022_12_04_094139_create_chat_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifikasis`
--

CREATE TABLE `notifikasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notif` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifikasis`
--

INSERT INTO `notifikasis` (`id`, `user_id`, `time`, `judul`, `notif`, `created_at`, `updated_at`) VALUES
(1, 21, '2022-12-27 00:16:03', 'Voluptas qui qui possimus.', 'Iusto et ad possimus porro eos. Repudiandae voluptatem ut maxime repellendus aut voluptas error. Tempora sit ratione neque quae.', '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(2, 8, '2022-12-30 01:59:53', 'Eos incidunt optio ullam delectus voluptatem.', 'Deleniti qui omnis sunt dolorem impedit excepturi. Suscipit molestias expedita minus consequatur. Earum tempora enim explicabo quod. Atque harum repellat nobis neque.', '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(3, 21, '2023-01-02 17:00:04', 'Sint molestiae laudantium dicta nihil.', 'Qui praesentium dolore deleniti voluptatem neque. Voluptates nam totam nihil sed. Exercitationem et laudantium voluptatem non temporibus. Quidem et distinctio ducimus quia officiis maxime doloribus.', '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(4, 23, '2023-01-12 14:42:57', 'Voluptates quasi et et placeat.', 'Id pariatur non et ad eligendi vitae iusto. Voluptas quaerat corrupti voluptas dolores eum doloribus voluptates. Similique modi a deleniti molestiae qui vel aut magni. Soluta minus beatae dolores quidem et cum.', '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(5, 3, '2022-12-30 06:47:38', 'Voluptates occaecati sit id beatae.', 'Quisquam alias soluta nihil porro est id. Reiciendis fugit recusandae repellendus illo facilis modi fugiat. Animi vitae voluptates explicabo commodi temporibus perferendis. Quam deserunt ratione voluptatem velit maxime.', '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(6, 8, '2022-12-31 10:33:28', 'Earum iste et similique.', 'Omnis vitae sequi quisquam enim. Illum debitis earum eum quo iusto ipsa non. Rerum quae iure quia facilis qui voluptas et. Sit a necessitatibus esse est voluptas.', '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(7, 23, '2023-01-11 17:41:13', 'Et rerum perspiciatis delectus alias dolorum deserunt et.', 'Ipsum autem impedit velit ut in. Aut earum veritatis provident similique. Sequi animi blanditiis fugiat non minima eius dolorum.', '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(8, 24, '2023-01-04 03:28:21', 'Cum beatae id repellendus qui ea neque ducimus.', 'Sequi optio et veniam beatae distinctio. Ex rerum nulla illum commodi. Odit dolorem ipsam impedit voluptatem amet voluptatibus.', '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(9, 21, '2022-12-28 22:11:19', 'Occaecati libero dolorum ullam facilis ipsam.', 'Sit harum modi iste consectetur et expedita. Sit natus ad nisi numquam odit.', '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(10, 8, '2023-01-01 21:57:50', 'Doloremque aut sed quisquam quas.', 'Et sed veritatis mollitia ullam voluptas minima tenetur. Odit recusandae magnam omnis accusamus tempora veritatis. Ipsa et doloribus doloremque autem autem molestias et velit. Qui eos quia qui modi ducimus.', '2022-12-15 01:32:18', '2022-12-15 01:32:18');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('stephenprasetyachrismawan27@gmail.com', '$2y$10$KIRAwuPiDK2X.KOVzTOq/O0jPb3AS3HmqyEDtLvD21QZfvhuNccHG', '2022-12-18 21:48:07');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `menu_id`, `user_id`, `rate`, `created_at`, `updated_at`) VALUES
(1, 16, 5, 5, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(2, 3, 10, 1, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(3, 21, 2, 2, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(4, 26, 5, 5, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(5, 9, 9, 3, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(6, 12, 10, 3, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(7, 22, 5, 3, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(8, 25, 9, 1, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(9, 18, 10, 2, '2022-12-15 01:32:18', '2022-12-15 01:32:18'),
(10, 24, 9, 4, '2022-12-15 01:32:18', '2022-12-15 01:32:18');

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `midtrans_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `schedule` date DEFAULT NULL,
  `pdf_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksis`
--

INSERT INTO `transaksis` (`id`, `kode`, `midtrans_id`, `payment_code`, `menu_id`, `user_id`, `jumlah`, `total`, `status`, `metode`, `schedule`, `pdf_url`, `created_at`, `updated_at`) VALUES
(19, '896719618', '7a5ce4cc-2da9-416a-ac2a-a456cc9ce8ca', '93232460724607', 39, 10, 1, 50000, 'settlement', 'cstore', '2022-12-27', 'https://app.sandbox.midtrans.com/snap/v1/transactions/41c6c44c-b60f-4096-8eb7-ade5ce54457e/pdf', '2022-12-17 12:33:28', '2022-12-17 12:33:28'),
(20, '1161962437', '7a85a2ef-59ad-4ab2-990e-52aac5714a9c', '95958107381073', 39, 19, 1, 50000, 'settlement', 'cstore', '2022-12-12', 'https://app.sandbox.midtrans.com/snap/v1/transactions/e4470beb-089e-4244-9b25-82f75d948e20/pdf', '2022-12-19 05:46:58', '2022-12-19 05:46:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `ispenjual` tinyint(1) NOT NULL,
  `jalan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serverkey` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clientkey` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_bank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `norek` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email1`, `email`, `email_verified_at`, `password`, `nama`, `tanggal_lahir`, `ispenjual`, `jalan`, `desa`, `kecamatan`, `kota`, `provinsi`, `serverkey`, `clientkey`, `jenis_bank`, `norek`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'stephenprasetyachrismawan27@gmail.com', 'steve', NULL, '4567890', 'Stephen', '2004-09-27', 1, 'Angsana', 'Tritihkulon', 'Cilacap Utara', 'Cilacap', 'Jawa Tengah', NULL, NULL, 'bni', '7676978513464374', NULL, '2022-12-16 06:48:46', '2022-12-16 10:11:26'),
(2, 'yudithnico99@gmail.com', 'Yunic', NULL, '', 'Yudith', '2022-12-08', 1, '-', 'Rawaapu', 'Patimuan', 'Cilacap', 'Jawa Tengah', 'SB-Mid-server-DCZmoHEw-ioxpAxgeBb-3njy', 'SB-Mid-client-RGC0_Tjcsh2Hdoec', 'bri', '87879', NULL, '2022-12-14 03:38:28', '2022-12-17 11:48:23'),
(3, 'ptiandika@gmail.com', 'Dika1485', NULL, '$2y$10$e7Rf/RTB.jG9eG0rpbxC3.SKbJyhTJ54iWH4hxZEQuyklW5FJbBSq', 'Priandika', '2004-03-13', 1, 'JALAN PASEH, RT 02/7', 'BULUPAYUNG', 'KESUGIHAN', 'CILACAP', 'JAWA TENGAH', 'SB-Mid-server-RzyhHLrbAEtlPuE9v66YnQUK', 'SB-Mid-client-RGC0_Tjcsh2Hdoec', NULL, NULL, NULL, '2022-12-14 03:51:45', '2022-12-14 03:51:45'),
(4, 'raihandelana@gmail.com', 'Raihan', NULL, '$2y$10$6WQXukkYIiyr6cdDo1XKXeal39O3LBLOm2Kki63XPYP59.k2CspEm', 'Raihan', '2002-07-27', 1, '-', 'Mojotengah', 'Mudal', 'Wonosobo', 'Jawa Tengah', 'SB-Mid-server-FkHoO5fyxCDOEG9gxOy0w95t', 'SB-Mid-client-8Ji_a7Xaa3tM3sBW', NULL, NULL, NULL, '2022-12-14 03:54:18', '2022-12-14 03:54:18'),
(6, 'budi@gmail.com', 'budi', NULL, '$2y$10$hBZyDYgCxErpG8uUulg7BOmclsnBSFI30PMEhx2PiP0Bhbx5MbOOm', '', '2003-10-27', 0, 'Angsana', 'Tritihkulon', 'Cilacap Utara', 'Cilacap', 'Jawa Tengah', NULL, NULL, NULL, NULL, NULL, '2022-12-16 07:28:22', '2022-12-16 07:28:22'),
(7, 'cahya@gmail.com', 'cahya', NULL, '$2y$10$K/0meepORJXmq0CSVoP0g.c7uF2VKA3DkmN6AjasusWgZnrlH9NaC', '', '2001-01-27', 0, 'Angsana', 'Tritihkulon', 'Cilacap Utara', 'Cilacap', 'Jawa Tengah', NULL, NULL, NULL, NULL, NULL, '2022-12-16 07:43:04', '2022-12-16 07:43:04'),
(8, 'dimas@gmail.com', 'Dimas', NULL, '$2y$10$flRjINrdU.CXJAc3ZETJMOUBLqZ8gGHsFTJb/wVCjaIGjW6j2mW9S', '', '2001-07-21', 0, 'Angsana', 'Tritihkulon', 'Cilacap Utara', 'Cilacap', 'Jawa Tengah', NULL, NULL, NULL, NULL, NULL, '2022-12-16 07:47:17', '2022-12-16 07:47:17'),
(9, 'erik@gmail.com', 'erik', NULL, '$2y$10$35NUBlphQpzDnh2p6SE.ROi99sOqmnw/MzOA5b3W4ctjSo9W5IUtu', '', '2002-11-25', 0, 'Angsana', 'Tritihkulon', 'Cilacap Utara', 'Cilacap', 'Jawa Tengah', NULL, NULL, NULL, NULL, NULL, '2022-12-16 07:48:49', '2022-12-16 07:48:49'),
(10, 'gading@gmail.com', 'gading', NULL, '$2y$10$pxVpGQE7IF6hLf8fptnpn.xwv3egvrTJ/Gqi0rR1XpuUefSHak2P2', 'Gading Soedarman', '2004-03-10', 0, 'Angsana', 'Tritihkulon', 'Cilacap Utara', 'Cilacap', 'Jawa Tengah', NULL, NULL, NULL, NULL, NULL, '2022-12-16 07:57:55', '2022-12-16 07:57:55'),
(11, 'steve123@gmail.com', 'pras', NULL, '$2y$10$.sJYC2GMGC0hBuUG.AhCQutYnd/jEUYWVV.plN8/PYr81Hd4yNOPK', '', '0000-00-00', 0, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, '2022-12-18 20:26:19', '2022-12-18 20:26:19'),
(12, 'akun@gmail.com', '', NULL, '$2y$10$gp6xpzPO3Oy/ZQ.5bLEpbe0qEbBGydqUL036c6ST2HZzMTWAsdGsC', 'akun', '2022-12-12', 0, 'akun', 'akun', 'akun', 'akun', 'akun', NULL, NULL, NULL, NULL, NULL, '2022-12-18 22:33:53', '2022-12-18 22:33:53'),
(19, 'graham@gmail.com', 'Graham', NULL, '$2y$10$MFqz7Er5GqQLsKMSOSVzEO35pwUz0jF7iYvBOA2DBiQEVs9Kd4XLC', 'Graham', '2022-12-13', 0, 'hbbjbsdj', 'uHAIUBIUB', 'knm. m', 'ubsubasxu', 'uabwcoubwc', NULL, NULL, NULL, NULL, NULL, '2022-12-19 05:42:46', '2022-12-19 05:42:46');

-- --------------------------------------------------------

--
-- Table structure for table `whochats`
--

CREATE TABLE `whochats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `penjual_id` int(11) NOT NULL,
  `pembeli_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftars`
--
ALTER TABLE `daftars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favorits`
--
ALTER TABLE `favorits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifikasis`
--
ALTER TABLE `notifikasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email1_unique` (`email1`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `whochats`
--
ALTER TABLE `whochats`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `daftars`
--
ALTER TABLE `daftars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorits`
--
ALTER TABLE `favorits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `notifikasis`
--
ALTER TABLE `notifikasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `whochats`
--
ALTER TABLE `whochats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
