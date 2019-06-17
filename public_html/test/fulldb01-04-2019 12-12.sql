#
# TABLE STRUCTURE FOR: family
#

DROP TABLE IF EXISTS `family`;

CREATE TABLE `family` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_urls_id` int(11) NOT NULL,
  `relation_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maritial_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bride_groom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `family` (`id`, `user_urls_id`, `relation_name`, `name`, `image`, `maritial_status`, `bride_groom`, `about`, `created_at`, `updated_at`) VALUES ('1', 2, 'velit', 'molestias', 'tmp//777b9e39b06f71e1fd74ba7e2dee4740.jpg', 'Dignissimos cum dolore ut laudantium suscipit cum. Rerum voluptatem non nemo accusantium officia libero quibusdam. Quae quisquam assumenda et et officia esse.', 'provident', 'Adipisci harum occaecati velit eius incidunt voluptas illo minus. Totam minus dolores aut est optio. Saepe pariatur sit dolorem nostrum ducimus. Aut assumenda odit voluptas ut in delectus id.', '1981-09-05 13:37:58', '2004-01-15 02:54:53');
INSERT INTO `family` (`id`, `user_urls_id`, `relation_name`, `name`, `image`, `maritial_status`, `bride_groom`, `about`, `created_at`, `updated_at`) VALUES ('2', 1, 'dignissimos', 'debitis', 'tmp//66acb87bc52b4693cc84d6cdeb7ea56f.jpg', 'Provident eligendi nemo rerum esse dolor doloremque. Ullam velit minima ut qui consequatur velit quasi. Ut repudiandae velit molestias deserunt ab dolor libero nisi. Id natus quo eveniet alia', 'possimus', 'Officia animi molestiae maiores delectus eaque quibusdam. Eaque beatae et aut sit sed non. Dignissimos quas fuga veniam quo.', '1970-10-11 03:20:21', '2015-03-03 08:01:28');
INSERT INTO `family` (`id`, `user_urls_id`, `relation_name`, `name`, `image`, `maritial_status`, `bride_groom`, `about`, `created_at`, `updated_at`) VALUES ('3', 2, 'nobis', 'amet', 'tmp//4ec745a8efa95873f6185368847a1cbb.jpg', 'Est consequatur pariatur voluptas vitae ut. Qui quam quia ut exercitationem. Labore officia sequi enim dolorem aliquam distinctio magni. Dolor quas possimus dolores qui perspiciatis.', 'ex', 'Est voluptas molestiae aliquam totam. In facilis voluptas culpa aut. Nulla amet qui ipsam dolorem ratione perferendis.', '2016-11-29 17:03:17', '1978-04-02 08:44:36');
INSERT INTO `family` (`id`, `user_urls_id`, `relation_name`, `name`, `image`, `maritial_status`, `bride_groom`, `about`, `created_at`, `updated_at`) VALUES ('4', 1, 'optio', 'asperiores', 'tmp//aa5d7b9b4f21580670a4da4388df1b29.jpg', 'Ab dignissimos eum explicabo ipsa dicta facilis nulla. Quas aut temporibus voluptatem voluptatibus maxime blanditiis est possimus. Eligendi et laborum delectus enim sunt. Qui omnis commodi do', 'deleniti', 'Omnis ut reiciendis unde voluptatem. Nobis quibusdam occaecati aut consequuntur quaerat voluptas pariatur. Assumenda at ea provident voluptatem qui. Quia est asperiores eos facere nihil.', '1987-02-27 17:42:49', '1971-07-03 07:46:10');
INSERT INTO `family` (`id`, `user_urls_id`, `relation_name`, `name`, `image`, `maritial_status`, `bride_groom`, `about`, `created_at`, `updated_at`) VALUES ('5', 1, 'illum', 'natus', 'tmp//cd30127a02392e9793a75dff01610cfa.jpg', 'Voluptatibus et voluptatem dignissimos laborum excepturi alias tempore. Vero officiis quibusdam quis sunt et. Iure voluptate ut minima delectus non.', 'cumque', 'Voluptas veritatis ea aut quia et quam ea est. Rerum veniam id optio voluptates molestiae consequatur. Ex voluptas omnis ut deserunt.', '1995-08-01 19:14:08', '1993-11-24 09:53:10');
INSERT INTO `family` (`id`, `user_urls_id`, `relation_name`, `name`, `image`, `maritial_status`, `bride_groom`, `about`, `created_at`, `updated_at`) VALUES ('6', 3, 'rerum', 'illo', 'tmp//4bedf200b9c728dac0e73f3f4536c481.jpg', 'Ut sapiente repellendus debitis harum. Dolores ut quia et. Aspernatur reiciendis natus dolorem voluptatem unde et excepturi.', 'repudiandae', 'Sunt dolores ipsa qui consectetur. Molestiae a quo aperiam impedit eveniet ipsa veritatis. Dolores est et corrupti veniam autem officiis. Reprehenderit similique aut nam enim.', '1970-04-16 06:49:24', '2016-03-31 17:02:21');
INSERT INTO `family` (`id`, `user_urls_id`, `relation_name`, `name`, `image`, `maritial_status`, `bride_groom`, `about`, `created_at`, `updated_at`) VALUES ('7', 4, 'qui', 'explicabo', 'tmp//97d9941bf57feeb8ce6b35b6a9bc72b5.jpg', 'Et veniam iusto et quas dolor. Mollitia repellendus voluptatum officia minus voluptas omnis. Dolores dignissimos aliquid tempore illum laudantium. Qui quibusdam recusandae tenetur repellat qu', 'dignissimos', 'Porro et exercitationem possimus molestiae corrupti ullam eius aperiam. Repellendus architecto dolore aperiam expedita voluptas. Ullam ad earum velit iusto sunt asperiores. Et aperiam dolorib', '1974-12-07 19:01:41', '2015-08-31 02:15:31');
INSERT INTO `family` (`id`, `user_urls_id`, `relation_name`, `name`, `image`, `maritial_status`, `bride_groom`, `about`, `created_at`, `updated_at`) VALUES ('8', 4, 'voluptatem', 'dolore', 'tmp//0c677b1cae98aa09e3fd910f96c203b9.jpg', 'Quia animi sit eos et. Non doloribus culpa voluptate ad neque voluptatem esse consequatur. Cumque exercitationem necessitatibus esse eius ipsa fugit velit distinctio.', 'quidem', 'Minima autem non optio rerum aut dignissimos quisquam. Consequuntur eveniet eum tempora velit qui atque. Magni autem veniam iste ut nam nobis.', '1971-09-10 06:49:33', '2009-10-26 16:05:27');
INSERT INTO `family` (`id`, `user_urls_id`, `relation_name`, `name`, `image`, `maritial_status`, `bride_groom`, `about`, `created_at`, `updated_at`) VALUES ('9', 3, 'consequatur', 'corrupti', 'tmp//be2b9f12410a184fbcdd7d02b3e42f61.jpg', 'Atque ut hic ut in quos. Facere at quia iste iure autem. Dolore consequatur amet ipsam unde sapiente quos numquam quia.', 'doloremque', 'Excepturi architecto repellendus et hic. Corporis culpa ea ex rerum illo. Iure doloremque eos nemo delectus earum cum explicabo dolores. Doloribus nihil corrupti facere laudantium. Et laborio', '2012-12-23 23:16:48', '1992-04-05 10:17:27');
INSERT INTO `family` (`id`, `user_urls_id`, `relation_name`, `name`, `image`, `maritial_status`, `bride_groom`, `about`, `created_at`, `updated_at`) VALUES ('10', 3, 'est', 'reprehenderit', 'tmp//bbf3c6e45ba7965ee9f7c94548ca7dd4.jpg', 'Animi aut et voluptatem amet ducimus. Fuga quaerat alias nobis incidunt similique. Iure rerum at accusamus. Nesciunt eveniet accusamus minima dolorem quam odio fugit.', 'rerum', 'Odit fuga sunt libero vel voluptates error. Fugit alias aut distinctio modi minima quia deserunt. Natus odit mollitia eum sint aut ipsa reiciendis. Culpa at ipsa similique officia sapiente qu', '2004-10-12 15:17:40', '2008-02-26 02:40:43');


#
# TABLE STRUCTURE FOR: faq
#

DROP TABLE IF EXISTS `faq`;

CREATE TABLE `faq` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_urls_id` int(11) NOT NULL,
  `faq_questions` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faq_answers` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `faq` (`id`, `user_urls_id`, `faq_questions`, `faq_answers`, `created_at`, `updated_at`) VALUES ('1', 2, 'Vero ut voluptates et sit.', 'Enim quo aut quidem et aperiam explicabo.', '2010-06-07 18:23:15', '2009-05-03 08:56:07');
INSERT INTO `faq` (`id`, `user_urls_id`, `faq_questions`, `faq_answers`, `created_at`, `updated_at`) VALUES ('2', 2, 'Aliquid ea molestias officiis.', 'Qui maxime ut est impedit.', '1984-09-15 17:33:39', '1991-07-08 12:14:59');
INSERT INTO `faq` (`id`, `user_urls_id`, `faq_questions`, `faq_answers`, `created_at`, `updated_at`) VALUES ('3', 1, 'Dolores quia labore nostrum sint et.', 'Iste error impedit praesentium deleniti.', '1974-01-27 04:38:56', '1971-09-17 18:49:54');
INSERT INTO `faq` (`id`, `user_urls_id`, `faq_questions`, `faq_answers`, `created_at`, `updated_at`) VALUES ('4', 2, 'Nesciunt doloribus sapiente quis vel temporibus molestias dolore.', 'Qui illum quo fuga nihil quaerat est neque.', '1970-03-01 14:47:24', '2019-03-13 13:33:01');
INSERT INTO `faq` (`id`, `user_urls_id`, `faq_questions`, `faq_answers`, `created_at`, `updated_at`) VALUES ('5', 3, 'Nulla assumenda incidunt non ab.', 'Est voluptatem magnam ducimus aliquam aut.', '1972-09-26 03:38:47', '2007-11-22 12:35:10');
INSERT INTO `faq` (`id`, `user_urls_id`, `faq_questions`, `faq_answers`, `created_at`, `updated_at`) VALUES ('6', 2, 'Consectetur ratione adipisci in laborum ut sed quia.', 'Ab laudantium culpa dolores tenetur doloremque enim.', '2000-08-02 18:20:48', '1999-12-02 10:37:11');
INSERT INTO `faq` (`id`, `user_urls_id`, `faq_questions`, `faq_answers`, `created_at`, `updated_at`) VALUES ('7', 4, 'Nihil sit aperiam est deserunt sint ea similique sit.', 'Aut quae consequatur velit tenetur laudantium magnam deserunt.', '1978-03-06 07:12:37', '1973-02-20 12:31:39');
INSERT INTO `faq` (`id`, `user_urls_id`, `faq_questions`, `faq_answers`, `created_at`, `updated_at`) VALUES ('8', 4, 'Voluptas magnam ea quas ab.', 'Nesciunt id qui tempore minima.', '2007-07-22 13:52:18', '2006-09-01 14:18:42');
INSERT INTO `faq` (`id`, `user_urls_id`, `faq_questions`, `faq_answers`, `created_at`, `updated_at`) VALUES ('9', 4, 'Molestias exercitationem officiis quis.', 'Animi nostrum sit libero vel.', '1983-12-24 14:14:02', '2016-03-22 08:43:12');
INSERT INTO `faq` (`id`, `user_urls_id`, `faq_questions`, `faq_answers`, `created_at`, `updated_at`) VALUES ('10', 3, 'Recusandae voluptates eos et quo inventore et.', 'Velit quod culpa iste quia quidem quia aut eaque.', '2005-01-17 00:21:26', '1993-04-01 10:01:44');


#
# TABLE STRUCTURE FOR: images
#

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_urls_id` int(11) NOT NULL,
  `image_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `images` (`id`, `user_urls_id`, `image_name`, `created_at`, `updated_at`) VALUES ('1', 2, 'tmp//37bcbcf46e9f7b0640ef3c6e61d2bde7.jpg', '1976-01-22 03:40:50', '2014-08-27 11:33:42');
INSERT INTO `images` (`id`, `user_urls_id`, `image_name`, `created_at`, `updated_at`) VALUES ('2', 1, 'tmp//6b1ef5cd05d07a7d4b187506bac68635.jpg', '2015-06-25 15:49:56', '1994-06-23 05:13:40');
INSERT INTO `images` (`id`, `user_urls_id`, `image_name`, `created_at`, `updated_at`) VALUES ('3', 3, 'tmp//87e17fb9e6a0b47d0c7749c220d85021.jpg', '1976-02-06 04:41:57', '1992-02-14 15:49:28');
INSERT INTO `images` (`id`, `user_urls_id`, `image_name`, `created_at`, `updated_at`) VALUES ('4', 4, 'tmp//a4629a6ec44f5f81e3b7c755f218e3a8.jpg', '1991-01-27 05:53:37', '2017-10-27 00:47:31');
INSERT INTO `images` (`id`, `user_urls_id`, `image_name`, `created_at`, `updated_at`) VALUES ('5', 3, 'tmp//690dc278e32e876011538c0403bb288d.jpg', '1977-09-30 18:29:09', '1995-06-29 16:24:44');
INSERT INTO `images` (`id`, `user_urls_id`, `image_name`, `created_at`, `updated_at`) VALUES ('6', 4, 'tmp//91cc823da550f008b3643de24071f7cd.jpg', '2009-07-04 21:19:59', '1973-07-17 19:45:25');
INSERT INTO `images` (`id`, `user_urls_id`, `image_name`, `created_at`, `updated_at`) VALUES ('7', 3, 'tmp//d56560c97780300f808dab11749ca5d7.jpg', '1979-02-21 21:56:37', '2009-01-13 03:19:04');
INSERT INTO `images` (`id`, `user_urls_id`, `image_name`, `created_at`, `updated_at`) VALUES ('8', 2, 'tmp//8950c3b15be21626a5f2b49202d13a8b.jpg', '1999-03-17 10:42:13', '2014-08-24 06:52:25');
INSERT INTO `images` (`id`, `user_urls_id`, `image_name`, `created_at`, `updated_at`) VALUES ('9', 4, 'tmp//353d7441f22f64602df30fcd688f528c.jpg', '2011-05-17 05:53:48', '1994-03-01 10:26:26');
INSERT INTO `images` (`id`, `user_urls_id`, `image_name`, `created_at`, `updated_at`) VALUES ('10', 2, 'tmp//3bdd5cc42b821c25dc0bd6b1c6088995.jpg', '1991-01-06 11:41:55', '1990-03-16 10:58:02');


#
# TABLE STRUCTURE FOR: rsvp
#

DROP TABLE IF EXISTS `rsvp`;

CREATE TABLE `rsvp` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_urls_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comming` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `rsvp` (`id`, `user_urls_id`, `name`, `email`, `mobile_no`, `comming`, `created_at`, `updated_at`) VALUES ('1', 2, 'illum', 'mhoppe@example.net', '(131)391-9425', 0, '1986-06-05 22:57:23', '2003-06-13 13:34:09');
INSERT INTO `rsvp` (`id`, `user_urls_id`, `name`, `email`, `mobile_no`, `comming`, `created_at`, `updated_at`) VALUES ('2', 3, 'quibusdam', 'raymond85@example.net', '05294820839', 0, '2006-04-06 16:34:37', '1980-08-17 03:55:16');
INSERT INTO `rsvp` (`id`, `user_urls_id`, `name`, `email`, `mobile_no`, `comming`, `created_at`, `updated_at`) VALUES ('3', 3, 'dolor', 'amalia48@example.com', '251-073-3226x68024', 0, '2016-03-09 13:52:03', '1993-10-27 04:44:54');
INSERT INTO `rsvp` (`id`, `user_urls_id`, `name`, `email`, `mobile_no`, `comming`, `created_at`, `updated_at`) VALUES ('4', 1, 'ut', 'reba58@example.net', '+78(8)8199217462', 1, '1977-02-16 00:46:07', '2006-12-06 18:44:08');
INSERT INTO `rsvp` (`id`, `user_urls_id`, `name`, `email`, `mobile_no`, `comming`, `created_at`, `updated_at`) VALUES ('5', 1, 'mollitia', 'derick.jaskolski@example.net', '931.791.4472', 0, '1972-04-21 01:16:22', '1998-09-07 07:05:08');
INSERT INTO `rsvp` (`id`, `user_urls_id`, `name`, `email`, `mobile_no`, `comming`, `created_at`, `updated_at`) VALUES ('6', 2, 'alias', 'wiegand.vickie@example.com', '1-805-970-8760', 1, '1982-04-27 10:17:36', '1998-08-04 02:21:54');
INSERT INTO `rsvp` (`id`, `user_urls_id`, `name`, `email`, `mobile_no`, `comming`, `created_at`, `updated_at`) VALUES ('7', 4, 'magni', 'trace.sanford@example.org', '+74(8)7169580474', 0, '1997-01-20 23:59:39', '1972-10-24 07:05:43');
INSERT INTO `rsvp` (`id`, `user_urls_id`, `name`, `email`, `mobile_no`, `comming`, `created_at`, `updated_at`) VALUES ('8', 2, 'enim', 'jovani37@example.org', '165.772.8839', 0, '2011-12-12 18:00:49', '1990-10-28 08:18:41');
INSERT INTO `rsvp` (`id`, `user_urls_id`, `name`, `email`, `mobile_no`, `comming`, `created_at`, `updated_at`) VALUES ('9', 1, 'numquam', 'walter.alysha@example.net', '05245098945', 1, '1987-05-05 02:22:15', '1986-01-02 07:23:41');
INSERT INTO `rsvp` (`id`, `user_urls_id`, `name`, `email`, `mobile_no`, `comming`, `created_at`, `updated_at`) VALUES ('10', 1, 'possimus', 'izabella.hansen@example.org', '457-513-1590x0773', 1, '1982-12-25 04:19:58', '2011-03-13 14:20:06');


#
# TABLE STRUCTURE FOR: schedule
#

DROP TABLE IF EXISTS `schedule`;

CREATE TABLE `schedule` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_urls_id` int(11) NOT NULL,
  `event_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_start_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_start_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_end_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_end_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_venue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_short_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_long_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_note` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `schedule` (`id`, `user_urls_id`, `event_name`, `event_start_date`, `event_start_time`, `event_end_date`, `event_end_time`, `event_venue`, `event_short_description`, `event_long_description`, `event_image`, `event_note`, `created_at`, `updated_at`) VALUES ('1', 1, 'rerum', '1994-05-19', '831625950', '1982-07-07', '1971-02-27T15:47:13+0000', 'Ea impedit ducimus a voluptatem delectus quia sint illum.', 'Non laborum at voluptatem quam ducimus voluptatem non. Eveniet a porro ut dolor est et adipisci. Facere odit eos sit saepe aut quo. Facere dolorem optio necessitatibus ratione delectus. Et no', 'Doloremque omnis deleniti illo sapiente corrupti. Suscipit consequuntur maiores sapiente dicta ipsum consequuntur aperiam quis. Labore culpa libero dolores culpa.', 'tmp//2d4c5904939250bc42cb62b78d8c8e2f.jpg', 'Quasi rerum vel ut et. Dicta facilis labore eligendi quae. Corrupti eum voluptates molestiae et quod asperiores. Vel consequatur temporibus rerum optio aperiam.', '2001-02-17 01:26:06', '1998-02-07 05:52:18');
INSERT INTO `schedule` (`id`, `user_urls_id`, `event_name`, `event_start_date`, `event_start_time`, `event_end_date`, `event_end_time`, `event_venue`, `event_short_description`, `event_long_description`, `event_image`, `event_note`, `created_at`, `updated_at`) VALUES ('2', 4, 'possimus', '1997-09-22', '210156255', '1977-09-05', '2013-10-31T09:54:04+0000', 'Corporis accusamus animi saepe voluptatem error.', 'Dolor sequi quos deserunt consequuntur consequatur. In culpa quasi voluptatem sed voluptatem. Minima sint deserunt est. Perferendis molestiae ut iure rerum.', 'Neque vero ut ut voluptas qui. Soluta quidem modi atque vitae aut non consectetur voluptatibus. Ad ducimus quo dignissimos dolorum. Itaque repudiandae porro blanditiis qui fugiat consectetur.', 'tmp//6308538979e3a9b0a441579cdd705558.jpg', 'Veritatis quos iure expedita. Est quis nostrum earum. Incidunt commodi unde unde quos enim.', '1971-11-22 06:07:55', '1985-12-18 05:23:51');
INSERT INTO `schedule` (`id`, `user_urls_id`, `event_name`, `event_start_date`, `event_start_time`, `event_end_date`, `event_end_time`, `event_venue`, `event_short_description`, `event_long_description`, `event_image`, `event_note`, `created_at`, `updated_at`) VALUES ('3', 2, 'delectus', '1983-06-17', '193398852', '2001-05-21', '1989-03-26T00:36:40+0000', 'Eos dignissimos eum et doloremque nihil.', 'Nihil suscipit ea odio dolorum deleniti deserunt molestiae. Delectus sit dolorem quis aliquid. Blanditiis suscipit minima velit voluptatem qui. Dicta voluptatem dolores officia cupiditate.', 'Quam quas laboriosam ut commodi cumque. Praesentium aliquid consequatur sit omnis. Consequatur eum est reprehenderit temporibus aut ut. Dolore eaque facere dolorem qui molestiae. Consequuntur', 'tmp//028712d3ed94efe0de15617a40c0fc14.jpg', 'Voluptas corporis voluptas qui fugiat nulla. Aliquam rerum maiores nihil quasi nihil et. Repellat natus omnis dolorem quis nobis omnis dolore. Animi maiores qui libero et perspiciatis aut dol', '1998-02-28 09:03:36', '1970-09-23 03:52:57');
INSERT INTO `schedule` (`id`, `user_urls_id`, `event_name`, `event_start_date`, `event_start_time`, `event_end_date`, `event_end_time`, `event_venue`, `event_short_description`, `event_long_description`, `event_image`, `event_note`, `created_at`, `updated_at`) VALUES ('4', 1, 'inventore', '1990-09-16', '391769486', '1988-12-25', '1979-12-22T16:59:19+0000', 'Qui inventore quasi et.', 'Omnis a expedita alias voluptatum deserunt veritatis. Placeat exercitationem dicta eum ut molestias nesciunt deserunt est. Eius ex aspernatur esse. Fuga nobis ipsum quas commodi excepturi.', 'Doloremque impedit sunt voluptatem officia. Cupiditate doloribus est atque libero quam soluta praesentium.', 'tmp//dbaa0090953f5f0dd90135e6602fdc85.jpg', 'Quidem dolorem et qui sit odit. Ducimus excepturi rerum inventore impedit ut velit sint id. Qui est voluptatem possimus voluptas.', '1974-11-19 21:58:05', '2018-05-08 22:01:18');
INSERT INTO `schedule` (`id`, `user_urls_id`, `event_name`, `event_start_date`, `event_start_time`, `event_end_date`, `event_end_time`, `event_venue`, `event_short_description`, `event_long_description`, `event_image`, `event_note`, `created_at`, `updated_at`) VALUES ('5', 3, 'consectetur', '1983-10-30', '840396434', '1976-03-19', '1978-04-16T21:27:25+0000', 'Commodi neque labore rerum molestiae similique.', 'Ut dignissimos ipsum qui quidem quibusdam quasi in. Enim sunt sit veritatis rerum. Voluptas voluptatem repellat voluptate quo.', 'Sit consequuntur aut quo maiores corrupti in. Autem soluta dolores autem et. Et vitae eveniet veniam nulla dicta quidem quas.', 'tmp//0ecec1f812704a1c679efa77f8367921.jpg', 'Reiciendis consequatur nesciunt harum est adipisci. Impedit et id id amet quia. Facere consequatur eveniet et suscipit est doloremque occaecati iste. Ut asperiores facilis blanditiis aut at a', '1999-08-09 08:59:32', '2005-10-14 06:51:18');
INSERT INTO `schedule` (`id`, `user_urls_id`, `event_name`, `event_start_date`, `event_start_time`, `event_end_date`, `event_end_time`, `event_venue`, `event_short_description`, `event_long_description`, `event_image`, `event_note`, `created_at`, `updated_at`) VALUES ('6', 4, 'quisquam', '1972-11-30', '1442154982', '2000-08-08', '1985-10-25T14:17:23+0000', 'Voluptas quae quis nihil quidem quis omnis ipsam.', 'Architecto accusantium dolore ex et facere rem similique. Non perferendis nobis est harum. Tempore ratione aut eveniet laboriosam numquam sequi laudantium porro. Perspiciatis autem autem sunt', 'Totam est nihil et doloremque. Et provident dolore expedita ut. Et dolores error dolores et.', 'tmp//ab221bebd1932b6aa429fea7d653aae3.jpg', 'Impedit consectetur maiores animi accusantium velit. Cumque eligendi ducimus illo ut est facere blanditiis. Veritatis dignissimos deserunt adipisci et sequi distinctio voluptatem. Nihil illum', '1988-05-20 04:09:30', '2013-03-01 00:57:19');
INSERT INTO `schedule` (`id`, `user_urls_id`, `event_name`, `event_start_date`, `event_start_time`, `event_end_date`, `event_end_time`, `event_venue`, `event_short_description`, `event_long_description`, `event_image`, `event_note`, `created_at`, `updated_at`) VALUES ('7', 3, 'est', '1978-12-09', '1491208131', '1992-10-12', '1983-06-30T15:59:15+0000', 'Quia sint assumenda aspernatur sapiente.', 'Libero velit beatae eveniet. Quasi tempore reiciendis qui quia. Autem dolor quo et maiores quaerat voluptatibus provident.', 'Ut sint dolorem tenetur optio labore. Sed odio voluptas recusandae quibusdam et. Tempore quia et voluptatibus deserunt nobis asperiores odio. Aut suscipit tenetur qui nostrum rerum.', 'tmp//04e75fd63e95185fd5a53c20912b12f1.jpg', 'Rem aut cumque tempora sunt. Eos qui vero asperiores et velit. Aut non sunt deleniti nostrum reprehenderit minima ut voluptas. Magnam non quaerat inventore suscipit.', '1978-12-26 13:39:25', '2017-09-20 11:27:43');
INSERT INTO `schedule` (`id`, `user_urls_id`, `event_name`, `event_start_date`, `event_start_time`, `event_end_date`, `event_end_time`, `event_venue`, `event_short_description`, `event_long_description`, `event_image`, `event_note`, `created_at`, `updated_at`) VALUES ('8', 2, 'id', '2003-09-27', '1525617310', '2017-08-30', '2003-12-16T03:38:22+0000', 'Quaerat et sint aut quae quasi error nisi.', 'Aut provident sapiente asperiores nemo rerum quos voluptas. Voluptatum tenetur quia aut in nesciunt qui blanditiis. Voluptates ut debitis enim qui expedita unde. Quia odio atque eum minus cor', 'Aperiam aut pariatur fugiat voluptatum repellat et ab. Velit cumque officiis qui dicta soluta sed rem.', 'tmp//0311ed53cfa7bb98102c4a9d6cd67ec2.jpg', 'Aut id perspiciatis aut odio nemo voluptatum beatae. Asperiores rerum molestiae labore accusantium sit quidem. Quas architecto perferendis dolore et. Totam voluptate veritatis quia maiores co', '2002-12-19 17:40:11', '2000-11-23 23:38:54');
INSERT INTO `schedule` (`id`, `user_urls_id`, `event_name`, `event_start_date`, `event_start_time`, `event_end_date`, `event_end_time`, `event_venue`, `event_short_description`, `event_long_description`, `event_image`, `event_note`, `created_at`, `updated_at`) VALUES ('9', 2, 'dolorem', '1984-05-07', '1309038363', '1980-10-27', '1981-10-17T19:54:39+0000', 'Dolor molestiae id facilis quis.', 'Voluptates et dolorem repellendus voluptates voluptas porro dignissimos. Alias vel consequatur quis accusantium incidunt ipsa laboriosam aliquam. Voluptas a excepturi rerum iste quos molestia', 'Quasi beatae quas perspiciatis repudiandae velit sint ut. Ipsum quia nulla eos numquam quia in assumenda quam. Id labore dignissimos sed laudantium eum fugit ex ipsum. Facilis nobis aut ut ap', 'tmp//d57fdf4ab0425810558461950702c38d.jpg', 'Error tenetur rem sint. Pariatur necessitatibus molestias autem ab minima corporis quaerat. Sunt provident in qui quisquam tempora.', '2009-10-17 21:17:03', '1992-03-28 05:11:58');
INSERT INTO `schedule` (`id`, `user_urls_id`, `event_name`, `event_start_date`, `event_start_time`, `event_end_date`, `event_end_time`, `event_venue`, `event_short_description`, `event_long_description`, `event_image`, `event_note`, `created_at`, `updated_at`) VALUES ('10', 2, 'doloremque', '2004-02-14', '782595827', '1998-11-09', '1989-04-10T12:21:53+0000', 'Qui exercitationem cumque voluptate illo non nostrum tenetur.', 'Vel perferendis aut eos ipsa natus praesentium officia. Iure accusantium consequatur dolore quia enim praesentium eos perferendis. Aut qui voluptatem omnis nihil nemo quidem quasi.', 'Est dicta minus nulla. Eligendi quo quas ratione quia quis ipsa. Expedita reprehenderit corrupti quaerat id reiciendis praesentium.', 'tmp//76833c1fcee583a0d001ccd067cfbb91.jpg', 'Et quisquam eum laboriosam aliquid doloribus. Eos qui libero accusantium.', '1985-11-06 06:07:15', '2001-12-06 00:29:16');


#
# TABLE STRUCTURE FOR: story
#

DROP TABLE IF EXISTS `story`;

CREATE TABLE `story` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_urls_id` int(11) NOT NULL,
  `story_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `story_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `story_venue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `story_short_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `story_long_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `story_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `story_like` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `story` (`id`, `user_urls_id`, `story_title`, `story_date`, `story_venue`, `story_short_description`, `story_long_description`, `story_image`, `story_like`, `created_at`, `updated_at`) VALUES ('1', 3, 'A ut itaque aliquam aut.', '', '', 'Consequatur dolorem rerum eos quia. Aut corrupti possimus quis cum provident. Architecto earum animi distinctio magnam velit quidem qui adipisci. Aut reprehenderit odio temporibus repudiandae', 'Consectetur quas et illo et quisquam dolor. Similique at voluptate odit iure animi perferendis. Rerum facere et doloribus possimus.', 'tmp//f6573084a56bb68cad1ed8ededf552e3.jpg', 0, '1978-04-07 17:42:33', '1999-09-12 08:43:03');
INSERT INTO `story` (`id`, `user_urls_id`, `story_title`, `story_date`, `story_venue`, `story_short_description`, `story_long_description`, `story_image`, `story_like`, `created_at`, `updated_at`) VALUES ('2', 2, 'Inventore ratione et molestiae reiciendis quasi.', '', '', 'Consequuntur eaque assumenda magnam necessitatibus sit optio. Expedita provident voluptatum maxime doloremque qui ut. Officia aperiam facere enim ab.', 'Ducimus distinctio illo aspernatur eaque. Enim labore quo blanditiis consequuntur autem aut. Enim quis est sint velit. Sit qui sint quis modi distinctio est.', 'tmp//5cff701aabbaf5338b1f3da9b07a481b.jpg', 0, '1978-08-26 16:08:35', '2006-08-03 20:05:48');
INSERT INTO `story` (`id`, `user_urls_id`, `story_title`, `story_date`, `story_venue`, `story_short_description`, `story_long_description`, `story_image`, `story_like`, `created_at`, `updated_at`) VALUES ('3', 1, 'Error nemo dolorum optio optio accusamus dolorem ad.', '', '', 'Quia deleniti illo est quam. Dignissimos voluptatem qui beatae magni sit cum. Alias fugiat perspiciatis blanditiis minus.', 'Qui excepturi asperiores nemo in. Qui exercitationem consequatur autem dolor. Et fugiat magni cum officiis.', 'tmp//c7336c5566660e50cb5ef164b56d3d0c.jpg', 0, '1990-07-29 04:30:37', '1986-03-30 12:05:01');
INSERT INTO `story` (`id`, `user_urls_id`, `story_title`, `story_date`, `story_venue`, `story_short_description`, `story_long_description`, `story_image`, `story_like`, `created_at`, `updated_at`) VALUES ('4', 7, 'Architecto non id rerum est.', '', '', 'Consequatur tempora accusantium sapiente et quidem expedita pariatur. Commodi sit corrupti ut sed sed animi optio occaecati. Tempore minima dolor sint expedita sint veritatis.', 'Aut aut quos aut nesciunt. Quam magnam ad unde culpa placeat. Eos est quam quia consequatur repellendus quaerat. Autem necessitatibus repellat ut error aut autem quam sed.', 'tmp//b4afd842892ec4b74e880c7360ba28e7.jpg', 0, '1976-06-12 21:41:52', '2014-07-24 06:19:17');
INSERT INTO `story` (`id`, `user_urls_id`, `story_title`, `story_date`, `story_venue`, `story_short_description`, `story_long_description`, `story_image`, `story_like`, `created_at`, `updated_at`) VALUES ('5', 9, 'Iure saepe aut pariatur vitae esse in.', '', '', 'Hic assumenda consequatur autem doloribus. Repellendus rem neque sed dolorem. Non est distinctio harum doloremque non nesciunt. Ut maxime non deserunt.', 'Id dolor et repellat. Eaque nihil rerum voluptas possimus consequatur aperiam et aut.', 'tmp//0b38c895026837fc0d2c41270067e98a.jpg', 0, '2016-10-09 13:30:34', '1972-09-24 03:24:03');
INSERT INTO `story` (`id`, `user_urls_id`, `story_title`, `story_date`, `story_venue`, `story_short_description`, `story_long_description`, `story_image`, `story_like`, `created_at`, `updated_at`) VALUES ('6', 1, 'Repudiandae saepe voluptate quis voluptatum.', '', '', 'Quis doloremque et eum reiciendis dolorem earum rerum. Beatae rerum impedit doloribus reiciendis nemo unde rem. Esse mollitia et deserunt qui. Eveniet qui et eos minima quas.', 'Nemo delectus et tempora nemo est. Dolores perspiciatis nostrum ut qui molestias odio voluptatem officiis. Earum laborum accusantium nemo suscipit commodi. Ut quisquam aut libero corporis dol', 'tmp//9e32c2643de35eb427e56d7f666340b9.jpg', 0, '1989-01-24 23:52:14', '1989-02-04 03:43:37');
INSERT INTO `story` (`id`, `user_urls_id`, `story_title`, `story_date`, `story_venue`, `story_short_description`, `story_long_description`, `story_image`, `story_like`, `created_at`, `updated_at`) VALUES ('7', 4, 'Esse aliquam et quae nemo earum.', '', '', 'Blanditiis porro consequatur sed cum optio inventore. Ea ad nam quod repellendus blanditiis corrupti. Esse rerum et impedit in assumenda est.', 'Eveniet ut enim alias minima. Quisquam unde dicta sequi modi modi et. Optio rem repudiandae sapiente eum repudiandae accusamus. Aut corporis a eos eius quia amet dolorum.', 'tmp//a68c87de4ad0487caa0aeebdfc59c0bf.jpg', 0, '1999-02-06 16:24:17', '1987-08-18 08:25:20');
INSERT INTO `story` (`id`, `user_urls_id`, `story_title`, `story_date`, `story_venue`, `story_short_description`, `story_long_description`, `story_image`, `story_like`, `created_at`, `updated_at`) VALUES ('8', 6, 'Tempore dignissimos et corporis qui possimus sit sed molestias.', '', '', 'Nihil accusantium eius maiores perferendis et saepe. Voluptatem repellendus minima ullam expedita. Dolores ut nulla aliquid at et est. Inventore voluptatibus tenetur eligendi accusamus.', 'Velit voluptas autem ut omnis esse. Rem blanditiis earum maxime sed. Deleniti facilis autem maxime consequuntur aliquid. Magnam voluptas qui itaque possimus iure quasi eaque.', 'tmp//0040cf6b99d6e48eb7a3a85f71681e29.jpg', 0, '1998-02-16 16:49:16', '2018-04-30 06:41:34');
INSERT INTO `story` (`id`, `user_urls_id`, `story_title`, `story_date`, `story_venue`, `story_short_description`, `story_long_description`, `story_image`, `story_like`, `created_at`, `updated_at`) VALUES ('9', 9, 'Explicabo nihil itaque voluptatem neque sunt cumque.', '', '', 'Laudantium ut sit voluptatem distinctio ex et quam. Sequi in debitis quis. Eligendi magnam nesciunt iste soluta ea nemo. Blanditiis ut fugiat doloremque animi maxime.', 'A distinctio hic occaecati dolores harum et. Quisquam velit corrupti dolorem. Consectetur aspernatur consectetur quia distinctio minus at commodi.', 'tmp//e36d7b0b549c25086610e47e5802d659.jpg', 0, '2015-09-06 10:39:39', '2004-12-22 08:03:21');
INSERT INTO `story` (`id`, `user_urls_id`, `story_title`, `story_date`, `story_venue`, `story_short_description`, `story_long_description`, `story_image`, `story_like`, `created_at`, `updated_at`) VALUES ('10', 4, 'Unde in non facilis esse beatae.', '', '', 'Delectus iusto consequuntur aut et sit dicta numquam. Est tempore excepturi sit a architecto ratione. Optio cupiditate odit molestiae earum nostrum. Placeat nihil aut odit deserunt debitis po', 'Tenetur sed nulla sint qui reprehenderit. Sapiente aut et mollitia aut dolorem. Quidem et unde doloremque voluptas sint ratione rerum. Quia et eos sit dolor eveniet ab.', 'tmp//624d30ea67b977e75e4a6ed60739f793.jpg', 0, '2006-02-27 20:01:37', '1975-02-09 12:06:15');


#
# TABLE STRUCTURE FOR: users
#

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# TABLE STRUCTURE FOR: wedding_register
#

DROP TABLE IF EXISTS `wedding_register`;

CREATE TABLE `wedding_register` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_urls_id` int(11) NOT NULL,
  `register_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `register_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `register_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `wedding_register` (`id`, `user_urls_id`, `register_name`, `register_url`, `register_image`, `created_at`, `updated_at`) VALUES ('1', 4, 'aut', 'http://www.runolfsson.info/', 'tmp//849c2665c979d1ef2fcaaa0f14e4fc76.jpg', '2011-08-23 10:27:16', '2015-01-22 22:49:03');
INSERT INTO `wedding_register` (`id`, `user_urls_id`, `register_name`, `register_url`, `register_image`, `created_at`, `updated_at`) VALUES ('2', 4, 'quaerat', 'http://walker.com/', 'tmp//c19ed111db73a6aa6530b2a805e94f3b.jpg', '1979-10-01 15:39:33', '1975-03-03 14:28:49');
INSERT INTO `wedding_register` (`id`, `user_urls_id`, `register_name`, `register_url`, `register_image`, `created_at`, `updated_at`) VALUES ('3', 2, 'accusantium', 'http://nolan.net/', 'tmp//8f4ffdcc9d33ecbc5160fba088ed0391.jpg', '2001-10-08 03:34:29', '2002-09-26 18:54:07');
INSERT INTO `wedding_register` (`id`, `user_urls_id`, `register_name`, `register_url`, `register_image`, `created_at`, `updated_at`) VALUES ('4', 2, 'tenetur', 'http://www.tillman.com/', 'tmp//2dfc8ce2df0aaa34e764d02094437416.jpg', '2014-10-16 03:51:09', '2012-03-18 19:42:46');
INSERT INTO `wedding_register` (`id`, `user_urls_id`, `register_name`, `register_url`, `register_image`, `created_at`, `updated_at`) VALUES ('5', 1, 'nihil', 'http://schulist.com/', 'tmp//3b36dc5f55a7a9f4b2c8352369462327.jpg', '1971-09-30 23:05:24', '1998-08-07 11:35:13');
INSERT INTO `wedding_register` (`id`, `user_urls_id`, `register_name`, `register_url`, `register_image`, `created_at`, `updated_at`) VALUES ('6', 4, 'incidunt', 'http://oberbrunner.com/', 'tmp//8ea480700ad56f53542ff43066cc5d2e.jpg', '1979-05-22 12:53:44', '1998-07-27 15:53:37');
INSERT INTO `wedding_register` (`id`, `user_urls_id`, `register_name`, `register_url`, `register_image`, `created_at`, `updated_at`) VALUES ('7', 4, 'et', 'http://sipes.biz/', 'tmp//4e059f01b6cabaada7ea1dc1c8caabc4.jpg', '2002-07-08 16:52:07', '2013-08-18 09:08:17');
INSERT INTO `wedding_register` (`id`, `user_urls_id`, `register_name`, `register_url`, `register_image`, `created_at`, `updated_at`) VALUES ('8', 1, 'nostrum', 'http://schambergerchristiansen.com/', 'tmp//143a92ae5a5ba970c891f36b1895ebce.jpg', '2008-03-17 20:53:38', '2008-11-01 04:51:13');
INSERT INTO `wedding_register` (`id`, `user_urls_id`, `register_name`, `register_url`, `register_image`, `created_at`, `updated_at`) VALUES ('9', 4, 'dolore', 'http://cummerata.com/', 'tmp//055427928ecd477a686a9c3dfc5900bf.jpg', '1996-04-10 13:53:52', '1997-01-04 17:03:01');
INSERT INTO `wedding_register` (`id`, `user_urls_id`, `register_name`, `register_url`, `register_image`, `created_at`, `updated_at`) VALUES ('10', 1, 'repudiandae', 'http://adamsschinner.biz/', 'tmp//a3b115429863de99fed064af2bf3d6f7.jpg', '2006-02-10 17:14:57', '1975-10-30 19:26:38');


