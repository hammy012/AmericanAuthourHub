-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.39 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table ebook_db.admins
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ebook_db.admins: ~0 rows (approximately)
INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(2, 'Admin', 'admin@admin.com', '$2y$12$ylZX63DhKj1dM6Iij0RZb.Mw7nbv5W5Eh7QCuy6nxyMFYy01l6xSe', 'cYUgPJ6nRvJfVvtENf6rIzc6DmUqtfP2Huu5MrNVLdUnvcgmHdon5Aff6xyL', '2025-11-05 13:19:23', '2025-11-07 10:27:18');

-- Dumping structure for table ebook_db.blogs
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` json DEFAULT NULL,
  `date` date DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `tags` json DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `blogs_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ebook_db.blogs: ~1 rows (approximately)
INSERT INTO `blogs` (`id`, `title`, `slug`, `thumbnail`, `images`, `date`, `description`, `tags`, `meta_title`, `meta_description`, `created_at`, `updated_at`) VALUES
	(1, 'How to Market Your Book Effectively', 'how-to-market-your-book-effectively-NmWDJG', 'blogs/thumbnails/91BQSoanNKYEZCloLrNdYbP7XUmpWEnP0baqYZWd.jpg', '["blogs/images/fSN671yBYPLLsFHTMpYeqOBUO7tZ9hLV311O1gwM.jpg", "blogs/images/uKFhfgLs9qofjXlhKAKrWz2BCYPFvqnz65xLD9T4.jpg", "blogs/images/8AuPuyTHW0xo3onVuinbaqxqS3x3iWDvyvDSev0K.jpg"]', '2025-11-06', '<p>Marketing a book requires planning, consistency, and using the right channels to reach readers. Start by identifying your target audience, preparing a launch timeline, and building a mailing list before release. Use social media strategically &mdash; share behind-the-scenes, excerpts, and reader testimonials. Collaborate with book bloggers, podcasters, and local bookstores for wider reach.</p>\r\n<h3>Key steps</h3>\r\n<ul>\r\n<li><strong>Build an email list:</strong>&nbsp;Your list is the most reliable promotional tool.</li>\r\n<li><strong>Plan a launch:</strong>&nbsp;Have promotions, giveaways, and outreach ready for launch week.</li>\r\n<li><strong>Use paid ads wisely:</strong>&nbsp;Small, targeted campaigns on Facebook/Instagram can boost visibility.</li>\r\n<li><strong>Leverage reviews:</strong>&nbsp;Ask early readers for honest reviews on Amazon/Goodreads.</li>\r\n</ul>\r\n<p>Remember &mdash; marketing is a marathon. Keep engaging with your readers, publish helpful content, and iterate based on what works.</p>', '["blog for user", "blogging", "the blogs of web"]', 'How to Market Your Book Effectively', '<p>How to Market Your Book Effectively</p>', '2025-11-07 11:32:49', '2025-11-07 11:32:49');

-- Dumping structure for table ebook_db.business_settings
CREATE TABLE IF NOT EXISTS `business_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `ceo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table ebook_db.business_settings: ~1 rows (approximately)
INSERT INTO `business_settings` (`id`, `company_name`, `email`, `phone`, `ceo`, `created_at`, `updated_at`) VALUES
	(1, 'American Author Hub', 'americanauthorhub@gmail.com', '123456789', 'Hammad', '2025-11-07 15:25:14', '2025-11-07 10:25:51');

-- Dumping structure for table ebook_db.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ebook_db.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table ebook_db.faqs
CREATE TABLE IF NOT EXISTS `faqs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `topic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` longtext COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ebook_db.faqs: ~1 rows (approximately)
INSERT INTO `faqs` (`id`, `topic`, `question`, `answer`, `is_active`, `created_at`, `updated_at`) VALUES
	(2, NULL, 'Question One', '<p>Answer One</p>', 1, '2025-11-07 10:57:34', '2025-11-07 10:57:34');

-- Dumping structure for table ebook_db.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ebook_db.migrations: ~8 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2025_11_05_173806_create_admins_table', 2),
	(6, '2025_11_07_153224_create_services_table', 3),
	(7, '2025_11_07_154741_create_faqs_table', 4),
	(8, '2025_11_07_162437_create_blogs_table', 5);

-- Dumping structure for table ebook_db.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ebook_db.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table ebook_db.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ebook_db.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table ebook_db.services
CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci,
  `sec_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ebook_db.services: ~1 rows (approximately)
INSERT INTO `services` (`id`, `sub_title`, `title`, `short_desc`, `sec_title`, `description`, `image`, `icon_image`, `created_at`, `updated_at`) VALUES
	(1, 'Boost Your Book Sales with Our Professional', 'Book Promotion Services', 'Our professional book promotion solutions meet your unique book marketing needs. We execute result-oriented book marketing strategies to make your book stand out.', 'ROI-Focused Book Marketing Solutions for Books of All Genres', '<p>Our team includes professional and experienced book marketers who join their heads together to create ingenious book marketing plans to get books featured on top media platforms. Our services are curated, with a special emphasis on bringing the most outstanding results in minimum time.</p>', 'services/Vbpe5Zrzran7iVCIoNdTH63kgL18GSpnyCi0vqyV.png', 'services/icons/8Tgko8bwNDwpi5s7L73iL9hpPHYDZlZ9iuKbEAzU.png', '2025-11-07 10:42:26', '2025-11-07 10:42:26');

-- Dumping structure for table ebook_db.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ebook_db.users: ~0 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'hammad', 'hammad@gmail.com', NULL, '$2y$12$xTHUtIGQjRiM9Ux9qA.mY.vYB593Z07Vd0/NSl608e04h6ixNKMLO', NULL, '2025-11-05 13:24:39', '2025-11-05 13:24:39');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
