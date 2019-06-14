-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.3.15-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for survivtips
CREATE DATABASE IF NOT EXISTS `survivtips` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `survivtips`;

-- Dumping structure for table survivtips.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'user',
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='admin login usernames and passwords';

-- Dumping data for table survivtips.admin: ~3 rows (approximately)
DELETE FROM `admin`;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `created_at`, `updated_at`, `username`, `password`, `type`, `email`) VALUES
	(1, '2019-06-14 10:23:51', '2019-06-14 11:08:01', 'einsteinium23', '$2y$10$SyfzhP2EilVQxeNhkFUVN.lvlQ3C4oTgiA/2w05c6JO78S865kHFG', 'admin', ''),
	(2, '2019-06-14 11:07:33', '2019-06-14 11:08:05', 'default', '$2y$10$2XexXzu/rmPPOLTr9gewA.buBPrfVPH2DLdBh7V.f99RRdhERCnb6', 'user', 'haydenmcclellan@gmail.com');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table survivtips.changelog
CREATE TABLE IF NOT EXISTS `changelog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `changelog` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table survivtips.changelog: ~0 rows (approximately)
DELETE FROM `changelog`;
/*!40000 ALTER TABLE `changelog` DISABLE KEYS */;
INSERT INTO `changelog` (`id`, `date`, `created_at`, `updated_at`, `title`, `changelog`) VALUES
	(5, '2019-06-11', '2019-06-14 11:11:08', '2019-06-14 11:11:08', 'Garlic mashed', 'Outstanding work, survivrs! You employed the potato cannons with great aplomb.\r\n\r\nFSTMS division chief Dr. Spud Solanum says, "We have only peeled the surface of what is possible with the potent power of potatoes."');
/*!40000 ALTER TABLE `changelog` ENABLE KEYS */;

-- Dumping structure for table survivtips.img
CREATE TABLE IF NOT EXISTS `img` (
  `id` int(11) unsigned NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `imgurl` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table survivtips.img: ~4 rows (approximately)
DELETE FROM `img`;
/*!40000 ALTER TABLE `img` DISABLE KEYS */;
INSERT INTO `img` (`id`, `created_at`, `updated_at`, `imgurl`, `title`) VALUES
	(0, '2019-06-12 14:49:44', '2019-06-12 14:49:44', '', 'ghajrthth'),
	(0, '2019-06-12 14:51:28', '2019-06-12 14:51:28', '', 'gyfghfghf'),
	(0, '2019-06-12 14:56:03', '2019-06-12 14:56:03', './img/1560376563.png', 'sadzfxgchjbkn'),
	(0, '2019-06-12 14:58:12', '2019-06-12 14:58:12', './img/1560376692.png', 'ghajrthth');
/*!40000 ALTER TABLE `img` ENABLE KEYS */;

-- Dumping structure for table survivtips.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='This table will contain userdata';

-- Dumping data for table survivtips.users: ~1 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
