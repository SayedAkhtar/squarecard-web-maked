-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2019 at 01:16 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelapi`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `user_urls_id` int(11) DEFAULT NULL,
  `groom_name` varchar(191) DEFAULT NULL,
  `groom_dob` varchar(191) DEFAULT NULL,
  `groom_profession` varchar(191) DEFAULT NULL,
  `groom_about` varchar(191) DEFAULT NULL,
  `bride_name` varchar(191) DEFAULT NULL,
  `bride_dob` varchar(191) DEFAULT NULL,
  `bride_profession` varchar(191) DEFAULT NULL,
  `bride_about` varchar(191) DEFAULT NULL,
  `groom_image` varchar(191) DEFAULT NULL,
  `bride_image` varchar(191) DEFAULT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `updated_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `user_urls_id`, `groom_name`, `groom_dob`, `groom_profession`, `groom_about`, `bride_name`, `bride_dob`, `bride_profession`, `bride_about`, `groom_image`, `bride_image`, `created_at`, `updated_at`) VALUES
(1, 2, 'jeeshan', '2019-05-18', 'Student', 'works at TCS lorem A user profile is a visual display of personal data associated with a specific user, or a customized desktop environment. A profile refers therefore to the explicit digital', 'joyti', '1997-06-11', 'thiss', 'A user profile is a visual display of personal data associated with a specific user, or a customized desktop environment. A profile refers therefore to the explicit digital representation of', '2-lhghMn1okg.jpg', '2-djNfVb4wKW.jpg', '2019-05-11 06:38:05.501854', '2019-05-11 01:44:52.000000'),
(4, 1, 'Rakesh Mishra', '2019-05-16', 'MD', 'Lorem', 'Sanjana', '2019-05-25', 'Student', 'Lorem', '1-82FGMQZ9Pm.jpg', '1-TIawcknQGa.jpg', '2019-05-18 00:30:37.000000', '2019-05-18 00:48:27.000000'),
(5, 6, 'Kamal hasan', NULL, NULL, NULL, 'gunjan purohit', NULL, NULL, NULL, NULL, NULL, '2019-05-24 15:23:27.000000', '2019-05-24 15:23:27.000000'),
(6, 11, 'Rohan Yadav', '2019-05-19', 'Student', NULL, 'gunjan purohit', '2019-05-18', 'Student', NULL, '11-Som20YlcKd.jpg', '11-8O9WoVUSUS.jpeg', '2019-05-25 01:48:11.000000', '2019-05-25 01:49:34.000000');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(2, 'This is updated', 'Eius qui quis beatae corporis corporis. Occaecati necessitatibus ad nisi dicta quod nulla natus sequi. Eius totam ut corporis iure rerum voluptas repellendus vel.', '2019-03-30 01:55:00', '2019-04-01 12:51:09'),
(3, 'Non provident eligendi soluta nam ratione amet.', 'Eveniet quasi recusandae qui molestiae. Nisi saepe voluptatem recusandae facilis pariatur. Perferendis illum ea ipsum adipisci. Sit ratione harum odit corporis et. Dolores non quo quos veritatis. Voluptatem beatae tempora nihil facere enim nesciunt molestiae.', '2019-03-30 01:55:00', '2019-03-30 01:55:00'),
(4, 'Vero blanditiis voluptatem omnis est aperiam.', 'Nemo at perspiciatis ipsum consequatur. Perspiciatis autem quidem voluptatum laudantium consequatur eveniet. Nam quae similique qui consequatur. Amet alias sint est magnam sed. Dolorem velit a rerum quas.', '2019-03-30 01:55:00', '2019-03-30 01:55:00'),
(5, 'Sed et ipsum iste nemo.', 'Corrupti accusamus velit quis et facilis unde. Perspiciatis saepe velit blanditiis quam perspiciatis nostrum. Sed quo omnis molestias quaerat id ab culpa. Aut et cumque veritatis aliquam.', '2019-03-30 01:55:00', '2019-03-30 01:55:00'),
(6, 'Expedita consequatur reiciendis modi ad.', 'Magnam maiores pariatur saepe architecto minima consequatur nesciunt tenetur. Sunt saepe in ut id harum id accusantium. Labore repudiandae enim pariatur sapiente mollitia aspernatur. Et molestias iure nihil provident nemo et.', '2019-03-30 01:55:00', '2019-03-30 01:55:00'),
(7, 'Quam eos magnam reprehenderit vel numquam eum.', 'Consequatur rerum numquam velit quaerat. Ut iure odit tempore eaque magni autem. Aut officia dolorem sed eligendi placeat. Minus quasi quas ratione excepturi qui omnis. Sint velit ipsa eos ad minus voluptatum.', '2019-03-30 01:55:00', '2019-03-30 01:55:00'),
(8, 'Et et dolorum quasi doloremque rem id pariatur.', 'Saepe nobis mollitia in unde dolorem adipisci. Est ea ad quia eius placeat id est. Et a sed ducimus. Enim officiis quas minima.', '2019-03-30 01:55:00', '2019-03-30 01:55:00'),
(9, 'Iste et iste omnis omnis sit.', 'Minima laborum pariatur minima corporis reprehenderit magni itaque. Architecto eligendi ea totam voluptatem. Id aut quos mollitia. Earum dolorum officia repellendus suscipit. Vel laborum quisquam soluta error modi. Vel ea et ut quo. Et iusto officiis ea in.', '2019-03-30 01:55:00', '2019-03-30 01:55:00'),
(10, 'Deleniti animi est laudantium ut.', 'Error fugiat est commodi nostrum debitis aperiam aliquid. Ut velit quaerat rerum est sed. Possimus pariatur voluptas quidem veniam cum. Vel labore amet mollitia corrupti ex voluptatum est. Similique accusamus non temporibus distinctio et. Ipsam eaque rerum magni aut aspernatur quis consequatur.', '2019-03-30 01:55:00', '2019-03-30 01:55:00'),
(11, 'Amet quis consequatur et quis corporis.', 'Perferendis ut rerum et placeat quibusdam animi. Ut tempora dignissimos expedita non odio sed et. Aut earum porro qui corporis reprehenderit.', '2019-03-30 01:55:00', '2019-03-30 01:55:00'),
(12, 'Sunt laudantium impedit aut earum.', 'Odit animi architecto mollitia cupiditate facere. Quasi molestiae molestiae ipsa perferendis eligendi et. Earum quam aut aperiam quia molestiae. Est deleniti corrupti doloribus amet autem illo. Et reprehenderit in non dicta dolor. Necessitatibus corporis id molestiae repellendus deleniti ullam aut.', '2019-03-30 01:55:01', '2019-03-30 01:55:01'),
(13, 'Quidem vel quis omnis.', 'At repellendus nihil laborum itaque soluta placeat nemo qui. Voluptatum qui aut in provident sit non aperiam aliquam. Quasi soluta rem maiores atque dolor omnis veniam. Rem voluptatibus suscipit unde fugiat.', '2019-03-30 01:55:01', '2019-03-30 01:55:01'),
(14, 'Distinctio ea et assumenda velit.', 'Ut ipsum quo et enim dolor rerum. Odit qui molestiae illo neque non facilis officia. Est nam ut aspernatur ut saepe distinctio fugiat. Iusto vel et similique aspernatur quod. Cupiditate temporibus reprehenderit suscipit ad in facilis quae iure. Rerum occaecati repellat omnis.', '2019-03-30 01:55:01', '2019-03-30 01:55:01'),
(15, 'Id ipsa tempore eos pariatur omnis.', 'Quia omnis eum quam. Incidunt reiciendis voluptatem necessitatibus exercitationem. Consequatur dolorem quia iste aliquam consequuntur ipsam. Voluptas cum laboriosam sed ea et incidunt.', '2019-03-30 01:55:01', '2019-03-30 01:55:01'),
(16, 'Dolore quo eum ut qui assumenda qui.', 'Qui non quaerat aperiam rerum blanditiis maxime quisquam. Et quasi ullam hic et aut delectus nam. Aliquid optio non aut suscipit optio eius. Nemo quia autem inventore.', '2019-03-30 01:55:01', '2019-03-30 01:55:01'),
(17, 'Alias ut reprehenderit et.', 'Tenetur ducimus perferendis in vitae expedita hic. Pariatur est asperiores neque sint voluptatum maiores ut.', '2019-03-30 01:55:01', '2019-03-30 01:55:01'),
(18, 'Quo ipsa architecto velit itaque.', 'Animi dolor et laborum. Sequi est sed rerum molestiae laudantium est qui. Id mollitia illum voluptas. Sed possimus ea dicta commodi ea. Assumenda et impedit aut voluptate. Dolor voluptas doloremque quo ut et.', '2019-03-30 01:55:01', '2019-03-30 01:55:01'),
(19, 'Distinctio rerum qui consequuntur possimus.', 'Facilis explicabo quod et dolores. Est ex placeat inventore eum placeat cupiditate dolorem. Et corrupti consequatur rerum doloribus consequatur. Quia eveniet natus architecto velit.', '2019-03-30 01:55:01', '2019-03-30 01:55:01'),
(20, 'Sed dolores occaecati non.', 'Labore ad accusantium dolorem quia praesentium. Explicabo et ut ad cum sint velit adipisci. Officiis omnis id culpa dolor aliquid autem.', '2019-03-30 01:55:01', '2019-03-30 01:55:01'),
(21, 'Id asperiores aut dicta quis et quidem et.', 'Ut saepe nobis corporis aut minima id quaerat. Ad fugiat laudantium est. Dolores assumenda autem cumque doloribus magni eligendi. Eos aut provident illum iste.', '2019-03-30 01:55:01', '2019-03-30 01:55:01'),
(22, 'Nihil id voluptatem sint sed quia.', 'Amet dignissimos accusantium voluptas omnis ipsam eum doloremque impedit. Deleniti fuga culpa velit saepe minima ducimus. Dignissimos praesentium itaque non dignissimos praesentium qui ipsam.', '2019-03-30 01:55:01', '2019-03-30 01:55:01'),
(23, 'Consequatur eum molestiae quibusdam deserunt qui.', 'Nobis pariatur ut aut qui qui eum. Maxime sunt ratione ratione fuga. Libero enim est quia earum minus modi qui ea. Cupiditate delectus hic nulla et officia et labore.', '2019-03-30 01:55:01', '2019-03-30 01:55:01'),
(24, 'Optio qui qui sed odit.', 'In voluptatem laboriosam suscipit odit molestiae quis doloribus minima. Officia id qui et adipisci quia. Rerum quod voluptatem unde nemo. Quis repellendus est sapiente voluptatem.', '2019-03-30 01:55:01', '2019-03-30 01:55:01'),
(25, 'Suscipit et est quisquam ea placeat.', 'Quia esse quia quis. Aut quos rerum perspiciatis id voluptates. Incidunt blanditiis voluptatibus deserunt. Ad accusantium aut quos autem accusantium doloribus.', '2019-03-30 01:55:01', '2019-03-30 01:55:01'),
(26, 'Est error quam qui quo est.', 'Sequi voluptas placeat veritatis sapiente doloribus nesciunt. Amet excepturi est nulla laudantium facere tempora. Unde impedit eius quas enim est minima. Similique nesciunt molestiae omnis praesentium. Consequatur sed ut in occaecati nam nam.', '2019-03-30 01:55:01', '2019-03-30 01:55:01'),
(27, 'Vel excepturi aut sequi eveniet et eligendi ut.', 'Quo iure velit ut sint delectus architecto. Hic libero aut unde similique qui. Quia aut hic et temporibus repellendus esse qui. Sed dolorem ad aliquam. Eos asperiores provident et mollitia eos iure. Delectus sunt soluta sint asperiores. Sint aliquid est iste et et distinctio.', '2019-03-30 01:55:01', '2019-03-30 01:55:01'),
(28, 'Ex pariatur ut itaque sint repellendus quam.', 'Repudiandae eveniet et qui ut itaque error sed rem. Nesciunt autem consequuntur reprehenderit sit veniam ipsa. Et aut et molestias et minus possimus.', '2019-03-30 01:55:01', '2019-03-30 01:55:01'),
(29, 'Est saepe laboriosam aperiam a asperiores.', 'Aspernatur quis fuga hic velit et. Ex recusandae expedita quia dicta. Necessitatibus eius vel sint quia. Libero reiciendis placeat quia. Similique corrupti at vitae et deserunt. Dignissimos quas sit aut pariatur accusantium voluptas quia. Architecto recusandae excepturi nisi tempore voluptatem eum.', '2019-03-30 01:55:01', '2019-03-30 01:55:01'),
(30, 'Omnis blanditiis consequuntur rerum et dolore.', 'Temporibus repudiandae quam id optio. Fuga commodi molestiae et reiciendis ipsam. Ipsa consequatur nisi laudantium nihil. Aut aut eos aperiam voluptas molestias iure. Mollitia id explicabo nihil quia voluptas libero aperiam. Ut animi fugiat molestiae impedit voluptates qui.', '2019-03-30 01:55:01', '2019-03-30 01:55:01');

-- --------------------------------------------------------

--
-- Table structure for table `basic_details`
--

CREATE TABLE `basic_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_urls_id` int(11) NOT NULL,
  `event_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bride_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `groom_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `venue` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basic_details`
--

INSERT INTO `basic_details` (`id`, `user_urls_id`, `event_name`, `event_date`, `bride_name`, `groom_name`, `venue`, `address`, `cover_image`, `phone`, `email`, `about`, `created_at`, `updated_at`) VALUES
(1, 1, 'Wedding', '2019-09-09', 'Rakesh Mishra', 'Dimple Gupta', 'Royal Palace', NULL, NULL, NULL, NULL, NULL, NULL, '2019-05-18 00:08:35'),
(2, 2, 'Wedding', '2019-04-12', 'Rohan Mishra', 'Rishika Sen', 'White Palace', '52, By lane Pilkhana.', '2-cover.jpg', '7602121854', 'amin@admin.com', NULL, NULL, '2019-05-23 04:20:35'),
(3, 3, 'jJXmEpfy2I', '2019-05-02', 'Rakesh Jaiswal', 'Gunjan Gupta', 'Royal White House', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 4, 'BbqmLsTdLe', '2019-09-09', 'Abhishek Mishra', 'Simran Gupta', 'Shama Mahal', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 5, 'Wedding', NULL, 'Joyti kapoor', 'Rajiv kumar', NULL, NULL, NULL, NULL, NULL, NULL, '2019-05-24 15:11:33', '2019-05-24 15:11:33'),
(6, 6, 'Weddding', NULL, 'gunjan purohit', 'Kamal hasan', NULL, NULL, NULL, NULL, NULL, NULL, '2019-05-24 15:17:01', '2019-05-24 15:17:01'),
(7, 7, 'wewe', NULL, '2test', 'Test', NULL, NULL, NULL, NULL, NULL, NULL, '2019-05-24 15:32:36', '2019-05-24 15:32:36'),
(8, 8, 'wedding', NULL, 'ambika', 'rajesh', NULL, NULL, NULL, NULL, NULL, NULL, '2019-05-24 15:36:45', '2019-05-24 15:36:45'),
(9, 9, 'New Title', NULL, 'Rohan Mishra', 'Rohan Yadav', NULL, NULL, NULL, NULL, NULL, NULL, '2019-05-24 15:38:47', '2019-05-24 15:38:47'),
(10, 11, 'First Event', NULL, 'gunjan purohit', 'Rohan Yadav', NULL, NULL, NULL, NULL, NULL, NULL, '2019-05-25 01:46:14', '2019-05-25 01:46:14');

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE `family` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_urls_id` int(11) NOT NULL,
  `relation_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maritial_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bride_groom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `family`
--

INSERT INTO `family` (`id`, `user_urls_id`, `relation_name`, `name`, `image`, `maritial_status`, `profession`, `bride_groom`, `about`, `age`, `created_at`, `updated_at`) VALUES
(1, 2, 'Brother', 'Rajiv Jaiswal', 'family-VKVS3uPyrh3uDkX.jpg', 'single', 'Student', 'bride', 'Good Handsome', 25, '1981-09-05 08:07:58', '2019-05-11 23:58:44'),
(2, 2, 'dignissimos', 'googl', 'family-V75Y7Tj9Qi4Kpuz.jpg', 'single', NULL, 'groom', 'Officia animi molestiae maiores delectus', 45, '1970-10-10 21:50:21', '2019-05-12 00:29:36'),
(6, 2, 'rerum', 'New Name', 'family-KnXiHYCuapHfYGw.jpg', 'single', NULL, 'groom', 'Sunt dolores ipsa qui consectetur.', 23, '1970-04-16 01:19:24', '2019-05-12 00:29:04'),
(7, 4, 'qui', 'explicabo', 'tmp//97d9941bf57feeb8ce6b35b6a9bc72b5.jpg', 'Et veniam iusto et quas dolor. Mollitia repellendus voluptatum officia minus voluptas omnis. Dolores dignissimos aliquid tempore illum laudantium. Qui quibusdam recusandae tenetur repellat qu', NULL, 'dignissimos', 'Porro et exercitationem possimus molestiae corrupti ullam eius aperiam. Repellendus architecto dolore aperiam expedita voluptas. Ullam ad earum velit iusto sunt asperiores. Et aperiam dolorib', NULL, '1974-12-07 13:31:41', '2015-08-30 20:45:31'),
(8, 4, 'voluptatem', 'dolore', 'tmp//0c677b1cae98aa09e3fd910f96c203b9.jpg', 'Quia animi sit eos et. Non doloribus culpa voluptate ad neque voluptatem esse consequatur. Cumque exercitationem necessitatibus esse eius ipsa fugit velit distinctio.', NULL, 'quidem', 'Minima autem non optio rerum aut dignissimos quisquam. Consequuntur eveniet eum tempora velit qui atque. Magni autem veniam iste ut nam nobis.', NULL, '1971-09-10 01:19:33', '2009-10-26 10:35:27'),
(9, 3, 'consequatur', 'corrupti', 'tmp//be2b9f12410a184fbcdd7d02b3e42f61.jpg', 'Atque ut hic ut in quos. Facere at quia iste iure autem. Dolore consequatur amet ipsam unde sapiente quos numquam quia.', NULL, 'doloremque', 'Excepturi architecto repellendus et hic. Corporis culpa ea ex rerum illo. Iure doloremque eos nemo delectus earum cum explicabo dolores. Doloribus nihil corrupti facere laudantium. Et laborio', NULL, '2012-12-23 17:46:48', '1992-04-05 04:47:27'),
(10, 3, 'est', 'reprehenderit', 'tmp//bbf3c6e45ba7965ee9f7c94548ca7dd4.jpg', 'Animi aut et voluptatem amet ducimus. Fuga quaerat alias nobis incidunt similique. Iure rerum at accusamus. Nesciunt eveniet accusamus minima dolorem quam odio fugit.', NULL, 'groom', 'Odit fuga sunt libero vel voluptates error. Fugit alias aut distinctio modi minima quia deserunt. Natus odit mollitia eum sint aut ipsa reiciendis. Culpa at ipsa similique officia sapiente qu', 0, '2004-10-12 09:47:40', '2008-02-25 21:10:43'),
(11, 2, 'Friend', 'Charli', 'family-2MIPF6anM3lP7NC.jpg', 'married', 'Engineer', 'bride', 'Works at TCS as head of Operation', NULL, '2019-05-12 00:04:12', '2019-05-12 00:04:12'),
(12, 1, 'Brother', 'Charli', 'family-UMtZ5NJEv84bd3g.jpg', 'single', 'Engineer', 'groom', 'lorem', NULL, '2019-05-18 00:10:24', '2019-05-18 00:10:24'),
(13, 1, 'Friend', 'Ruchika', 'family-dvpl3w7uHshaVUN.jpg', 'married', 'House Wife', 'bride', NULL, NULL, '2019-05-18 00:12:17', '2019-05-18 00:12:17');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_urls_id` int(11) NOT NULL,
  `faq_questions` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faq_answers` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `user_urls_id`, `faq_questions`, `faq_answers`, `created_at`, `updated_at`) VALUES
(1, 2, 'Vero ut voluptates et sit.', 'Enim quo aut quidem et aperiam explicabo.', '2010-06-07 12:53:15', '2009-05-03 03:26:07'),
(2, 2, 'Aliquid ea molestias officiis.', 'Qui maxime ut est impedit.', '1984-09-15 12:03:39', '1991-07-08 06:44:59'),
(3, 1, 'Dolores quia labore nostrum sint et.', 'Iste error impedit praesentium deleniti.', '1974-01-26 23:08:56', '1971-09-17 13:19:54'),
(4, 2, 'Nesciunt doloribus sapiente quis vel temporibus molestias dolore.', 'Qui illum quo fuga nihil quaerat est neque.', '1970-03-01 09:17:24', '2019-03-13 08:03:01'),
(5, 3, 'Nulla assumenda incidunt non ab.', 'Est voluptatem magnam ducimus aliquam aut.', '1972-09-25 22:08:47', '2007-11-22 07:05:10'),
(6, 2, 'Consectetur ratione adipisci in laborum ut sed quia.', 'Ab laudantium culpa dolores tenetur doloremque enim.', '2000-08-02 12:50:48', '1999-12-02 05:07:11'),
(7, 4, 'Nihil sit aperiam est deserunt sint ea similique sit.', 'Aut quae consequatur velit tenetur laudantium magnam deserunt.', '1978-03-06 01:42:37', '1973-02-20 07:01:39'),
(8, 4, 'Voluptas magnam ea quas ab.', 'Nesciunt id qui tempore minima.', '2007-07-22 08:22:18', '2006-09-01 08:48:42'),
(9, 4, 'Molestias exercitationem officiis quis.', 'Animi nostrum sit libero vel.', '1983-12-24 08:44:02', '2016-03-22 03:13:12'),
(10, 3, 'Recusandae voluptates eos et quo inventore et.', 'Velit quod culpa iste quia quidem quia aut eaque.', '2005-01-16 18:51:26', '1993-04-01 04:31:44'),
(11, 4, '', '', '2019-04-03 01:17:16', '2019-04-03 01:17:16'),
(12, 4, 'Default', 'Default', '2019-04-03 01:18:22', '2019-04-03 01:18:22'),
(13, 4, 'When did we meet', 'Default', '2019-04-03 01:47:21', '2019-04-03 01:47:21');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_urls_id` int(11) NOT NULL,
  `image_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `user_urls_id`, `image_name`, `created_at`, `updated_at`) VALUES
(1, 2, 'tmp//37bcbcf46e9f7b0640ef3c6e61d2bde7.jpg', '1976-01-21 22:10:50', '2014-08-27 06:03:42'),
(2, 1, 'tmp//6b1ef5cd05d07a7d4b187506bac68635.jpg', '2015-06-25 10:19:56', '1994-06-22 23:43:40'),
(3, 3, 'tmp//87e17fb9e6a0b47d0c7749c220d85021.jpg', '1976-02-05 23:11:57', '1992-02-14 10:19:28'),
(5, 3, 'tmp//690dc278e32e876011538c0403bb288d.jpg', '1977-09-30 12:59:09', '1995-06-29 10:54:44'),
(6, 4, 'tmp//91cc823da550f008b3643de24071f7cd.jpg', '2009-07-04 15:49:59', '1973-07-17 14:15:25'),
(7, 3, 'tmp//d56560c97780300f808dab11749ca5d7.jpg', '1979-02-21 16:26:37', '2009-01-12 21:49:04'),
(8, 2, 'tmp//8950c3b15be21626a5f2b49202d13a8b.jpg', '1999-03-17 05:12:13', '2014-08-24 01:22:25'),
(9, 4, 'tmp//353d7441f22f64602df30fcd688f528c.jpg', '2011-05-17 00:23:48', '1994-03-01 04:56:26'),
(10, 2, 'tmp//3bdd5cc42b821c25dc0bd6b1c6088995.jpg', '1991-01-06 06:11:55', '1990-03-16 05:28:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_03_27_193952_create_articles', 1),
(4, '2019_03_30_053041_create_basic_details', 1),
(5, '2019_03_30_053723_create_user_url', 1),
(6, '2019_04_01_112959_create_schedule', 2),
(7, '2019_04_01_113212_create_story', 2),
(8, '2019_04_01_113312_create_faq', 2),
(9, '2019_04_01_113346_create_wedding_register', 2),
(10, '2019_04_01_113417_create_images', 2),
(11, '2019_04_01_113434_create_family', 2),
(12, '2019_04_01_113449_create_rsvp', 2),
(13, '2019_04_04_092715_create_templates', 3),
(14, '2016_06_01_000001_create_oauth_auth_codes_table', 4),
(15, '2016_06_01_000002_create_oauth_access_tokens_table', 4),
(16, '2016_06_01_000003_create_oauth_refresh_tokens_table', 4),
(17, '2016_06_01_000004_create_oauth_clients_table', 4),
(18, '2016_06_01_000005_create_oauth_personal_access_clients_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'qyfLGDMVx6isxTZDuVb80XSaIaVVG64RQ7uJfeAc', 'http://localhost', 1, 0, 0, '2019-04-07 01:20:13', '2019-04-07 01:20:13'),
(2, NULL, 'Laravel Password Grant Client', 'ShOple9M1B1Bgvq2FfR4NhdNeIwDLZ38GxGxTygy', 'http://localhost', 0, 1, 0, '2019-04-07 01:20:13', '2019-04-07 01:20:13'),
(3, 1, 'test', 'Ix5LkR4ao7uVrd7iYYQpi9n0r511Z0XgRDussP9X', 'http://localhost/auth/callback', 0, 0, 0, '2019-04-07 23:00:23', '2019-04-07 23:00:23');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-04-07 01:20:13', '2019-04-07 01:20:13');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `user_urls_id` int(11) DEFAULT NULL,
  `album_id` int(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `user_urls_id`, `album_id`, `image`, `created_at`, `updated_at`) VALUES
(4, 2, 1, '5c48618415595.jpg.jpg', '2019-05-26 03:46:14', '2019-05-26 03:46:14'),
(7, 2, 1, '5969f09d12d84.jpg.jpg', '2019-05-26 03:47:03', '2019-05-26 03:47:03'),
(9, 2, 1, '640px-type_97_chi-ha_beijing_military_museum.jpg.jpg', '2019-05-26 03:53:43', '2019-05-26 03:53:43'),
(10, 2, 1, '5c48618415595.jpg.jpg', '2019-05-26 03:53:51', '2019-05-26 03:53:51');

-- --------------------------------------------------------

--
-- Table structure for table `photo_album`
--

CREATE TABLE `photo_album` (
  `id` int(11) NOT NULL,
  `user_urls_id` int(11) NOT NULL,
  `album_name` varchar(191) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rsvp`
--

CREATE TABLE `rsvp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_urls_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comming` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rsvp`
--

INSERT INTO `rsvp` (`id`, `user_urls_id`, `name`, `email`, `mobile_no`, `comming`, `created_at`, `updated_at`) VALUES
(1, 2, 'illum', 'mhoppe@example.net', '(131)391-9425', 0, '1986-06-05 17:27:23', '2003-06-13 08:04:09'),
(2, 3, 'quibusdam', 'raymond85@example.net', '05294820839', 0, '2006-04-06 11:04:37', '1980-08-16 22:25:16'),
(3, 3, 'dolor', 'amalia48@example.com', '251-073-3226x68024', 0, '2016-03-09 08:22:03', '1993-10-26 23:14:54'),
(4, 1, 'ut', 'reba58@example.net', '+78(8)8199217462', 1, '1977-02-15 19:16:07', '2006-12-06 13:14:08'),
(5, 1, 'mollitia', 'derick.jaskolski@example.net', '931.791.4472', 0, '1972-04-20 19:46:22', '1998-09-07 01:35:08'),
(6, 2, 'alias', 'wiegand.vickie@example.com', '1-805-970-8760', 1, '1982-04-27 04:47:36', '1998-08-03 20:51:54'),
(7, 4, 'magni', 'trace.sanford@example.org', '+74(8)7169580474', 0, '1997-01-20 18:29:39', '1972-10-24 01:35:43'),
(8, 2, 'enim', 'jovani37@example.org', '165.772.8839', 0, '2011-12-12 12:30:49', '1990-10-28 02:48:41'),
(9, 1, 'numquam', 'walter.alysha@example.net', '05245098945', 1, '1987-05-04 20:52:15', '1986-01-02 01:53:41'),
(10, 1, 'possimus', 'izabella.hansen@example.org', '457-513-1590x0773', 1, '1982-12-24 22:49:58', '2011-03-13 08:50:06');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_urls_id` int(11) NOT NULL,
  `event_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_start_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_start_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_end_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_end_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_venue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_short_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_long_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `user_urls_id`, `event_name`, `event_start_date`, `event_start_time`, `event_end_date`, `event_end_time`, `event_venue`, `event_short_description`, `event_long_description`, `event_image`, `event_note`, `created_at`, `updated_at`) VALUES
(1, 1, 'rerum', '2019-05-17', NULL, '1982-07-07', '1982-07-07', 'Ea impedit ducimus a voluptatem delectus quia sint illum.', 'Non laborum at voluptatem quam ducimus voluptatem non. Eveniet a porro ut dolor est et adipisci. Facere odit eos sit saepe aut quo. Facere dolorem optio necessitatibus ratione delectus. Et no', NULL, 'schedule-RFa4tyME5u.jpg', NULL, '2001-02-16 19:56:06', '2019-05-18 00:13:45'),
(2, 4, 'possimus', '1997-09-22', '210156255', '1977-09-05', '2013-10-31T09:54:04+0000', 'Corporis accusamus animi saepe voluptatem error.', 'Dolor sequi quos deserunt consequuntur consequatur. In culpa quasi voluptatem sed voluptatem. Minima sint deserunt est. Perferendis molestiae ut iure rerum.', 'Neque vero ut ut voluptas qui. Soluta quidem modi atque vitae aut non consectetur voluptatibus. Ad ducimus quo dignissimos dolorum. Itaque repudiandae porro blanditiis qui fugiat consectetur.', 'tmp//6308538979e3a9b0a441579cdd705558.jpg', 'Veritatis quos iure expedita. Est quis nostrum earum. Incidunt commodi unde unde quos enim.', '1971-11-22 00:37:55', '1985-12-17 23:53:51'),
(3, 2, 'New Title', '2019-05-03', NULL, '2001-05-21', '2001-05-21', 'Eos dignissimos eum et doloremque nihil.', 'Nihil suscipit ea odio dolorum deleniti deserunt molestiae. Delectus sit dolorem quis aliquid. Blanditiis suscipit minima velit voluptatem qui. Dicta voluptatem dolores officia cupiditate.', NULL, 'schedule-Vl1D7yJQ6V.jpg', NULL, '1998-02-28 03:33:36', '2019-05-11 23:29:09'),
(4, 1, 'inventore', '2019-05-08', NULL, '1988-12-25', '1988-12-25', 'Qui inventore quasi et.', 'Omnis a expedita alias voluptatum deserunt veritatis. Placeat exercitationem dicta eum ut molestias nesciunt deserunt est. Eius ex aspernatur esse. Fuga nobis ipsum quas commodi excepturi.', NULL, 'schedule-WB94GZZN61.jpg', NULL, '1974-11-19 16:28:05', '2019-05-18 00:13:04'),
(5, 3, 'consectetur', '1983-10-30', '840396434', '1976-03-19', '1978-04-16T21:27:25+0000', 'Commodi neque labore rerum molestiae similique.', 'Ut dignissimos ipsum qui quidem quibusdam quasi in. Enim sunt sit veritatis rerum. Voluptas voluptatem repellat voluptate quo.', 'Sit consequuntur aut quo maiores corrupti in. Autem soluta dolores autem et. Et vitae eveniet veniam nulla dicta quidem quas.', 'tmp//0ecec1f812704a1c679efa77f8367921.jpg', 'Reiciendis consequatur nesciunt harum est adipisci. Impedit et id id amet quia. Facere consequatur eveniet et suscipit est doloremque occaecati iste. Ut asperiores facilis blanditiis aut at a', '1999-08-09 03:29:32', '2005-10-14 01:21:18'),
(6, 4, 'quisquam', '1972-11-30', '1442154982', '2000-08-08', '1985-10-25T14:17:23+0000', 'Voluptas quae quis nihil quidem quis omnis ipsam.', 'Architecto accusantium dolore ex et facere rem similique. Non perferendis nobis est harum. Tempore ratione aut eveniet laboriosam numquam sequi laudantium porro. Perspiciatis autem autem sunt', 'Totam est nihil et doloremque. Et provident dolore expedita ut. Et dolores error dolores et.', 'tmp//ab221bebd1932b6aa429fea7d653aae3.jpg', 'Impedit consectetur maiores animi accusantium velit. Cumque eligendi ducimus illo ut est facere blanditiis. Veritatis dignissimos deserunt adipisci et sequi distinctio voluptatem. Nihil illum', '1988-05-19 22:39:30', '2013-02-28 19:27:19'),
(7, 3, 'est', '1978-12-09', '1491208131', '1992-10-12', '1983-06-30T15:59:15+0000', 'Quia sint assumenda aspernatur sapiente.', 'Libero velit beatae eveniet. Quasi tempore reiciendis qui quia. Autem dolor quo et maiores quaerat voluptatibus provident.', 'Ut sint dolorem tenetur optio labore. Sed odio voluptas recusandae quibusdam et. Tempore quia et voluptatibus deserunt nobis asperiores odio. Aut suscipit tenetur qui nostrum rerum.', 'tmp//04e75fd63e95185fd5a53c20912b12f1.jpg', 'Rem aut cumque tempora sunt. Eos qui vero asperiores et velit. Aut non sunt deleniti nostrum reprehenderit minima ut voluptas. Magnam non quaerat inventore suscipit.', '1978-12-26 08:09:25', '2017-09-20 05:57:43'),
(11, 2, 'New Title', '2019-05-11', NULL, '2019-05-11', '2019-05-11', 'KGN Hall', 'dasfas', NULL, 'schedule-fLDuRQQl2z.jpg', 'Please Come', '2019-05-11 23:31:16', '2019-05-11 23:31:16');

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_urls_id` int(11) NOT NULL,
  `story_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `story_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `story_venue` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `story_short_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `story_long_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `story_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `story_like` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`id`, `user_urls_id`, `story_title`, `story_date`, `story_venue`, `story_short_description`, `story_long_description`, `story_image`, `story_like`, `created_at`, `updated_at`) VALUES
(1, 3, 'A ut itaque aliquam aut.', '', '', 'Consequatur dolorem rerum eos quia. Aut corrupti possimus quis cum provident. Architecto earum animi distinctio magnam velit quidem qui adipisci. Aut reprehenderit odio temporibus repudiandae', 'Consectetur quas et illo et quisquam dolor. Similique at voluptate odit iure animi perferendis. Rerum facere et doloribus possimus.', 'tmp//f6573084a56bb68cad1ed8ededf552e3.jpg', 0, '1978-04-07 12:12:33', '1999-09-12 03:13:03'),
(2, 2, 'Inventore ratione et molestiae reiciendis quasi.', '2019-05-10', 'KhidderPore', 'Consequuntur eaque assumenda magnam necessitatibus sit optio. Expedita provident voluptatum maxime doloremque qui ut. Officia aperiam facere enim ab.', 'Ducimus distinctio illo aspernatur eaque. Enim labore quo blanditiis consequuntur autem aut. Enim quis est sint velit. Sit qui sint quis modi distinctio est.', 'story-8jVsSCVSwa.jpeg', 0, '1978-08-26 10:38:35', '2019-05-11 16:10:01'),
(3, 1, 'Error nemo dolorum optio optio accusamus dolorem ad.', '', '', 'Quia deleniti illo est quam. Dignissimos voluptatem qui beatae magni sit cum. Alias fugiat perspiciatis blanditiis minus.', 'Qui excepturi asperiores nemo in. Qui exercitationem consequatur autem dolor. Et fugiat magni cum officiis.', 'tmp//c7336c5566660e50cb5ef164b56d3d0c.jpg', 0, '1990-07-28 23:00:37', '1986-03-30 06:35:01'),
(5, 9, 'Iure saepe aut pariatur vitae esse in.', '', '', 'Hic assumenda consequatur autem doloribus. Repellendus rem neque sed dolorem. Non est distinctio harum doloremque non nesciunt. Ut maxime non deserunt.', 'Id dolor et repellat. Eaque nihil rerum voluptas possimus consequatur aperiam et aut.', 'tmp//0b38c895026837fc0d2c41270067e98a.jpg', 0, '2016-10-09 08:00:34', '1972-09-23 21:54:03'),
(6, 1, 'Repudiandae saepe voluptate quis voluptatum.', '', '', 'Quis doloremque et eum reiciendis dolorem earum rerum. Beatae rerum impedit doloribus reiciendis nemo unde rem. Esse mollitia et deserunt qui. Eveniet qui et eos minima quas.', 'Nemo delectus et tempora nemo est. Dolores perspiciatis nostrum ut qui molestias odio voluptatem officiis. Earum laborum accusantium nemo suscipit commodi. Ut quisquam aut libero corporis dol', 'tmp//9e32c2643de35eb427e56d7f666340b9.jpg', 0, '1989-01-24 18:22:14', '1989-02-03 22:13:37'),
(7, 2, 'First Meet Up', '2019-05-03', 'Kolkata', 'We First Met', 'THe time i first saw the girls eyes', 'story-8pbommGWml.jpg', 0, '1999-02-06 10:54:17', '2019-05-11 15:59:49'),
(8, 6, 'Tempore dignissimos et corporis qui possimus sit sed molestias.', '', '', 'Nihil accusantium eius maiores perferendis et saepe. Voluptatem repellendus minima ullam expedita. Dolores ut nulla aliquid at et est. Inventore voluptatibus tenetur eligendi accusamus.', 'Velit voluptas autem ut omnis esse. Rem blanditiis earum maxime sed. Deleniti facilis autem maxime consequuntur aliquid. Magnam voluptas qui itaque possimus iure quasi eaque.', 'tmp//0040cf6b99d6e48eb7a3a85f71681e29.jpg', 0, '1998-02-16 11:19:16', '2018-04-30 01:11:34'),
(9, 9, 'Explicabo nihil itaque voluptatem neque sunt cumque.', '', '', 'Laudantium ut sit voluptatem distinctio ex et quam. Sequi in debitis quis. Eligendi magnam nesciunt iste soluta ea nemo. Blanditiis ut fugiat doloremque animi maxime.', 'A distinctio hic occaecati dolores harum et. Quisquam velit corrupti dolorem. Consectetur aspernatur consectetur quia distinctio minus at commodi.', 'tmp//e36d7b0b549c25086610e47e5802d659.jpg', 0, '2015-09-06 05:09:39', '2004-12-22 02:33:21'),
(10, 4, 'Unde in non facilis esse beatae.', '', '', 'Delectus iusto consequuntur aut et sit dicta numquam. Est tempore excepturi sit a architecto ratione. Optio cupiditate odit molestiae earum nostrum. Placeat nihil aut odit deserunt debitis po', 'Tenetur sed nulla sint qui reprehenderit. Sapiente aut et mollitia aut dolorem. Quidem et unde doloremque voluptas sint ratione rerum. Quia et eos sit dolor eveniet ab.', 'tmp//624d30ea67b977e75e4a6ed60739f793.jpg', 0, '2006-02-27 14:31:37', '1975-02-09 06:36:15'),
(12, 4, '', '', '', '', '', '', 0, '2019-04-01 21:19:00', '2019-04-01 21:19:00'),
(13, 2, 'New Story', '2019-05-04', 'KhidderPore', 'lorwefwe', NULL, 'story-FtP5y5VZE2.jpeg', 0, '2019-05-11 16:41:21', '2019-05-11 16:41:21');

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `template_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `template_thumb` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id`, `template_name`, `template_thumb`, `created_at`, `updated_at`) VALUES
(1, 'basic', 'index.jpg', '2019-05-26 01:30:05', '2019-05-26 07:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `mobile` int(191) DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `mobile`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sayed', 'test@test.com', NULL, NULL, '$2y$10$UYwJnPs0nPFU0vt.Z9ijgO9/vAvGHp4RZzfHfzANZz2sybmRSUKXa', '5jo3Bq2sYWLb14iEzLKBsZLf6zUFXW9FOPSgoOTa23smWJqDqIZZXFEycv9z', '2019-04-07 07:14:42', '2019-05-18 00:08:15'),
(2, 'admin', 'admin@admin.com', NULL, NULL, '$2y$10$.OHS3Pd/Ud3tNQzh5I5AJ.gj.8nOmPt2ajZb3lK2tVgJE8RBcRuLi', NULL, '2019-05-04 15:16:10', '2019-05-04 15:16:10'),
(3, 'sayed', 'sayed@gmail.com', NULL, NULL, '$2y$10$XzbmVGi1f1jnrUfAqc6Y5egP656FGbCSi9J4b0h/LR.v1M2oZWi2C', NULL, '2019-05-15 01:15:12', '2019-05-15 01:15:12'),
(4, NULL, 'testmail@gmail.com', NULL, NULL, '$2y$10$We3LyvwoMiRM69kQIz155OwUufzI7lLWQEvz/p6SDC5gQYq6k/1Pa', NULL, '2019-05-24 13:10:55', '2019-05-24 13:10:55'),
(5, NULL, 'test2@gmail.com', NULL, NULL, '$2y$10$fKW8SzN40C42CQOB8UWav.pZzG0vlb5/dXSLAS1Gf5nLXdt8Ppsoi', NULL, '2019-05-24 15:09:34', '2019-05-24 15:09:34'),
(6, NULL, 'test3@gmail.com', NULL, NULL, '$2y$10$DkmGC/iaTqXB3uV46iP00uouxyMxtS.U192iYVVnMudm36D18/20K', NULL, '2019-05-24 15:16:27', '2019-05-24 15:16:27'),
(7, NULL, 'test4@gmail.com', NULL, NULL, '$2y$10$70AfyFg5uGEHTqG/e0WIxuZpNcDPmX08B1/L.z/nSOEg77Gw.q4Xm', NULL, '2019-05-24 15:32:02', '2019-05-24 15:32:02'),
(8, NULL, 'test5@gmail.com', NULL, NULL, '$2y$10$/OJP5U5xfeXy5ee8z9eh9OAOQ.DC8GQyNe8Yvia0YNjcvCn7ahNYa', NULL, '2019-05-24 15:35:58', '2019-05-24 15:35:58'),
(9, NULL, 'admin@gmail.com', NULL, NULL, '$2y$10$e.6FApZCTr.VUcOmycpBPufkYpaKtkk91mpWtJd63lSAeDYHeSrRe', NULL, '2019-05-24 15:38:34', '2019-05-24 15:38:34'),
(10, NULL, 'afas@gmail.com', NULL, NULL, '$2y$10$hgT5KV4Xzi.EX5XpUG.rEOWHTjN4HkRRtXR0UINaas9fFzvke3yiW', NULL, '2019-05-24 15:44:25', '2019-05-24 15:44:25'),
(11, NULL, 'goo@gmail.com', NULL, NULL, '$2y$10$Jyc6jmDWOikiPxRzJ2U9r.q5Zgy/Pk2F4OFrnho16d1SCYQr2B8uy', NULL, '2019-05-25 01:45:55', '2019-05-25 01:45:55');

-- --------------------------------------------------------

--
-- Table structure for table `user_urls`
--

CREATE TABLE `user_urls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(255) DEFAULT NULL,
  `UserURL` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `template_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_urls`
--

INSERT INTO `user_urls` (`id`, `user_id`, `UserURL`, `template_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'rakeshwedsdimple', 'basic', NULL, NULL),
(2, 2, 'rohanwedsrishika', 'basic', NULL, NULL),
(3, 3, 'rakeshwedsgunjan', '', NULL, NULL),
(5, 4, 'rajiv-weds-joyti', 'basic', '2019-05-24 15:06:28', '2019-05-24 15:06:28'),
(8, 5, 'rajiv_weds_joyti', 'basic', '2019-05-24 15:11:33', '2019-05-24 15:11:33'),
(9, 6, 'kamal-weds-gunjan', 'basic', '2019-05-24 15:17:01', '2019-05-24 15:17:01'),
(11, 7, 'testWeds2test', 'basic', '2019-05-24 15:32:36', '2019-05-24 15:32:36'),
(13, 8, 'rajesh-weds-ambika', 'basic', '2019-05-24 15:36:45', '2019-05-24 15:36:45'),
(15, 9, 'rohan_weds_rohan', 'basic', '2019-05-24 15:38:47', '2019-05-24 15:38:47'),
(16, 11, 'rohanWedsGunjan', 'basic', '2019-05-25 01:46:13', '2019-05-25 01:46:13');

-- --------------------------------------------------------

--
-- Table structure for table `wedding_register`
--

CREATE TABLE `wedding_register` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_urls_id` int(11) NOT NULL,
  `register_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `register_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `register_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wedding_register`
--

INSERT INTO `wedding_register` (`id`, `user_urls_id`, `register_name`, `register_url`, `register_image`, `created_at`, `updated_at`) VALUES
(1, 4, 'new', 'http://www.runolfsson.info/', '41JINRlOkpL._SX425_.jpg', '2011-08-23 04:57:16', '2019-05-26 04:44:34'),
(2, 4, 'quaerat', 'http://walker.com/', 'tmp//c19ed111db73a6aa6530b2a805e94f3b.jpg', '1979-10-01 10:09:33', '1975-03-03 08:58:49'),
(5, 1, 'nihil', 'http://schulist.com/', 'tmp//3b36dc5f55a7a9f4b2c8352369462327.jpg', '1971-09-30 17:35:24', '1998-08-07 06:05:13'),
(6, 4, 'incidunt', 'http://oberbrunner.com/', 'tmp//8ea480700ad56f53542ff43066cc5d2e.jpg', '1979-05-22 07:23:44', '1998-07-27 10:23:37'),
(7, 4, 'et', 'http://sipes.biz/', 'tmp//4e059f01b6cabaada7ea1dc1c8caabc4.jpg', '2002-07-08 11:22:07', '2013-08-18 03:38:17'),
(8, 1, 'nostrum', 'http://schambergerchristiansen.com/', 'tmp//143a92ae5a5ba970c891f36b1895ebce.jpg', '2008-03-17 15:23:38', '2008-10-31 23:21:13'),
(9, 4, 'dolore', 'http://cummerata.com/', 'tmp//055427928ecd477a686a9c3dfc5900bf.jpg', '1996-04-10 08:23:52', '1997-01-04 11:33:01'),
(10, 1, 'repudiandae', 'http://adamsschinner.biz/', 'tmp//a3b115429863de99fed064af2bf3d6f7.jpg', '2006-02-10 11:44:57', '1975-10-30 13:56:38'),
(11, 2, 'Cake Shop', 'https://www.google.com', 'government.png', '2019-05-26 05:11:54', '2019-05-26 05:11:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basic_details`
--
ALTER TABLE `basic_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `family`
--
ALTER TABLE `family`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
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
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo_album`
--
ALTER TABLE `photo_album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rsvp`
--
ALTER TABLE `rsvp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_urls`
--
ALTER TABLE `user_urls`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UserURL` (`UserURL`);

--
-- Indexes for table `wedding_register`
--
ALTER TABLE `wedding_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `basic_details`
--
ALTER TABLE `basic_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `family`
--
ALTER TABLE `family`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `photo_album`
--
ALTER TABLE `photo_album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rsvp`
--
ALTER TABLE `rsvp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_urls`
--
ALTER TABLE `user_urls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `wedding_register`
--
ALTER TABLE `wedding_register`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
