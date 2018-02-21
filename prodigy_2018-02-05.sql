# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 67.205.165.93 (MySQL 5.7.21-0ubuntu0.16.04.1)
# Database: prodigy
# Generation Time: 2018-02-05 06:46:49 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table buyers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `buyers`;

CREATE TABLE `buyers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `buyers` WRITE;
/*!40000 ALTER TABLE `buyers` DISABLE KEYS */;

INSERT INTO `buyers` (`id`, `name`, `email`, `password`, `phone`, `role`, `status`, `created_at`, `updated_at`)
VALUES
	(16,'mato black','matoblack02@gmail.com','','0711222333',1,'no','2018-01-28 07:54:02','2018-01-28 07:54:02'),
	(17,'Virginie ORTIS','virginieortis@gmail.com','','0716506658',1,'no','2018-01-31 07:45:41','2018-01-31 07:45:41');

/*!40000 ALTER TABLE `buyers` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table contents
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contents`;

CREATE TABLE `contents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `contents` WRITE;
/*!40000 ALTER TABLE `contents` DISABLE KEYS */;

INSERT INTO `contents` (`id`, `title`, `info`, `image`, `created_at`, `updated_at`)
VALUES
	(1,'home','<p><strong>Prodigy Healthcare </strong>is an importer, exporter and distributor of quality healthcare supplies. We are the only W.H.O Good Distribution Practices certified company in Kenya, assuring you of the quality and integrity of our products from the manufacturer right to our client.<br><br>Our product lineup includes:-\n<ul>\n<li><a href=\"/medicalNutrition\">Medical Nutrition</a></li>\n<li><a href=\"/infectionControl\">Infection Control</a></li>\n<li><a href=\"/skinCare\">Skin Care</a></li>\n<li><a href=\"/dialysis\">Dialysis</a></li>\n<li><a href=\"/pharmacy\">Pharmacy</a></li></ul>\n</p>','/storage/content/home.png',NULL,NULL),
	(2,'about','<h3>Our Mission</h3>\n<p>Fully committed to serving the healthcare needs within East Africa</p>\n<h3>Our Vision</h3>\n<p>To be the healthcare supplies partnerof choice in East Africa</p>\n\n<p><strong>Prodigy Healthcare </strong>is an importer, exporter and distributor of quality healthcare supplies. We are the only W.H.O Good Distribution Practices certified company in Kenya, assuring you of the quality and integrity of our products from the manufacturer right to our client</p>','/storage/content/about.png',NULL,NULL),
	(4,'contact','<h3>Get in Touch</h3>\n<strong>PRODIGY HEATHCARE LIMITED</strong><br>\nGo down C2| Ashray industrial Park| Kampala Road<br>\nP.O. BOX 12221 – 00400 Kenya<br>\nE: info@prodigyhealthcare.co.ke <br>\nTel: +254 20 2622010<br>\nFax: +254 20 2351317<br>\nCell: +254 700 709066<br>\nCell: +254 733 342820<br><br>\n<strong>Mombasa Office</strong><br>\nP.O. Box 40054-80100 Mombasa<br>\nTel: +254 733150815<br>\nmombasa@prodigyhealthcare.co.ke<br>','/storage/content/contact.png',NULL,NULL);

/*!40000 ALTER TABLE `contents` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table groups
# ------------------------------------------------------------

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;

INSERT INTO `groups` (`id`, `group`, `created_at`, `updated_at`)
VALUES
	(1,'Medical Nutrition',NULL,NULL),
	(2,'Infection Control',NULL,NULL),
	(3,'Skin Care',NULL,NULL),
	(4,'Dialysis',NULL,NULL),
	(5,'Pharmacy',NULL,NULL);

/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table items
# ------------------------------------------------------------

DROP TABLE IF EXISTS `items`;

CREATE TABLE `items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned NOT NULL,
  `size_id` int(10) unsigned NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `items_order_id_index` (`order_id`),
  KEY `items_size_id_index` (`size_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;

INSERT INTO `items` (`id`, `order_id`, `size_id`, `quantity`, `min_total`, `created_at`, `updated_at`)
VALUES
	(27,20,39,'10','2900','2018-01-28 07:54:02','2018-01-28 07:54:02'),
	(28,21,21,'1','190','2018-01-31 07:45:41','2018-01-31 07:45:41'),
	(29,21,30,'1','30','2018-01-31 07:45:41','2018-01-31 07:45:41'),
	(30,21,26,'1','30','2018-01-31 07:45:41','2018-01-31 07:45:41');

/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(7,'2014_10_12_000000_create_users_table',1),
	(8,'2014_10_12_100000_create_password_resets_table',1),
	(18,'2017_12_21_160538_create_products_table',2),
	(19,'2017_12_21_160558_create_orders_table',2),
	(20,'2017_12_21_162217_create_items_table',2),
	(21,'2017_12_22_124419_create_flavors_table',2),
	(22,'2017_12_22_124435_create_sizes_table',2),
	(23,'2017_12_22_124446_create_groups_table',2),
	(24,'2017_12_22_124459_create_sliders_table',2),
	(25,'2017_12_22_124950_create_carts_table',2),
	(26,'2018_01_19_034757_create_packs_table',3),
	(27,'2018_01_21_080033_create_buyers_table',4),
	(28,'2018_01_21_203528_create_contents_table',5);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table orders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `buyer_id` int(10) unsigned NOT NULL,
  `sub_total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_index` (`buyer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;

INSERT INTO `orders` (`id`, `buyer_id`, `sub_total`, `vat`, `total`, `status`, `created_at`, `updated_at`)
VALUES
	(20,16,'2900','464','3364','yes','2018-01-28 07:54:02','2018-02-01 10:28:22'),
	(21,17,'250','40','290','no','2018-01-31 07:45:41','2018-01-31 07:45:41');

/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(10) unsigned NOT NULL,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'oridanry',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_group_id_index` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;

INSERT INTO `products` (`id`, `group_id`, `product`, `desc`, `image`, `type`, `status`, `created_at`, `updated_at`)
VALUES
	(8,1,'Renilon 7.5','<p>Nutritionally complete (2kcal/ml)</p>\r\n<p>High energy, high protein, low electrolyte oral supplement for the dietary management of renal patients.</p>','/storage/medical/1516340491.png','ordinary','no','2018-01-19 05:41:31','2018-01-22 01:17:42'),
	(9,1,'Diasip','<p>&nbsp;Nutritionaly complete (1kcal/ml)</p>\r\n<p class=\"p1\">&nbsp;The lowest GI sip feed</p>\r\n<p class=\"p1\">&nbsp;Flavors - Strawberry and Vanilla</p>','/storage/medical/1516343191.png','ordinary','no','2018-01-19 06:26:31','2018-01-21 11:58:02'),
	(10,1,'Fortimel Powder','<p>Nutritionally complete</p>\r\n<p>Higher protein per 100gm serving</p>\r\n<p>Flavors &ndash; Vanilla</p>','/storage/medical/1516343390.png','latest','no','2018-01-19 06:29:50','2018-01-19 06:29:50'),
	(11,1,'Fortisip Compact Protein','<p>Nutritionaly complete (2.4kcal/ml)</p>\r\n<p>High energy, high protein, small volume</p>\r\n<p>Flavors - Mocca, Strawberry, Vanilla</p>','/storage/medical/1516346975.png','latest','no','2018-01-19 07:29:35','2018-01-19 07:29:35'),
	(12,1,'Infatrini','<p>1kcal/ml high protein</p>\r\n<p>Flavors - Unflavored</p>','/storage/medical/1516347073.png','ordinary','no','2018-01-19 07:31:13','2018-01-19 07:31:13'),
	(13,1,'Nutrison Protein Plus Multi Fibre','<p>Nutritionally complete</p>\r\n<p>High protein (63g perpack)</p>\r\n<p>High energy (1.28kcal/ml)</p>','/storage/medical/1516347399.png','latest','no','2018-01-19 07:36:39','2018-01-19 07:36:39'),
	(14,1,'Neocate','<p>Nutritionally complete amino acid formula</p>\r\n<p>Cow milk protein free</p>\r\n<p>&nbsp;</p>','/storage/medical/1516584091.png','ordinary','no','2018-01-22 01:21:31','2018-01-22 01:24:22'),
	(15,1,'Nutrini Drink Powder','<p>Nutritionally complete (1.5kcal/ml)</p>\r\n<p>Higher energy, higher protein, per 100ml standard solution</p>\r\n<p>Flavors - Vanilla</p>','/storage/medical/1516584235.png','ordinary','no','2018-01-22 01:23:55','2018-01-22 01:23:55'),
	(16,1,'Nutrison 1.0','<p>Nutritionaly complete (1kcal/ml)</p>','/storage/medical/1516584468.png','ordinary','no','2018-01-22 01:27:48','2018-01-22 01:27:48'),
	(17,1,'Nutrini Multi Fibre','<p>Nutritionaly complete (1kcal/ml)</p>\r\n<p>MF6, unique patented fibre blend</p>','/storage/medical/1516584599.png','latest','no','2018-01-22 01:29:59','2018-01-22 01:29:59'),
	(18,1,'Nutrison Advanced Diason','<p>Nutritionaly complete (1kcal/ml)</p>\r\n<p>Lowest GI</p>','/storage/medical/1516584681.png','ordinary','no','2018-01-22 01:31:21','2018-01-22 01:31:21'),
	(19,1,'Nutrison Advanced Peptisorb','<p>Nutritionaly complete (1kcal/ml)</p>\r\n<p>Whey based peptide protein</p>\r\n<p>Low in fat</p>','/storage/medical/1516584764.png','ordinary','no','2018-01-22 01:32:44','2018-01-22 01:32:44'),
	(20,1,'Nutrison Multi Fibre','<p>Nutritionaly complete (1kcal/ml)</p>','/storage/medical/1516584981.png','ordinary','no','2018-01-22 01:36:21','2018-01-22 01:36:21'),
	(22,2,'Safesanitizer, Hand Sanitizing Gel','<p>HYDROALCOHOLIC ANTISEPTIC GEL</p>\r\n<p>FOR SKIN AND HANDS</p>\r\n<p>A time saving antiseptic gel for hands that is gentle on your skin.</p>\r\n<p>&bull; Reduces the risk of bacterial cross contamination and infection.</p>\r\n<p>&bull; Effective on the skin</p>\r\n<p>Effective &ndash; fast acting against a broad spectrum of organisms</p>\r\n<p>Safe - with moisturizing and softening properties</p>','/storage/infection/1516586957.png','ordinary','no','2018-01-22 02:09:17','2018-01-22 02:09:17'),
	(23,2,'Safesoap, Antibacterial Hand Wash','<p>The true original, Safesoap Original Liquid Hand Wash.</p>\r\n<p>You can use Safesoap regularly without drying your hands. Safesoap is gentle on your skin, and supports your skin\'s natural antibacterial defences, and with our unique blend of moisturisers, your hands will feel soft, smooth and hygienically clean. Kills nasty bacteria.</p>','/storage/infection/1516588081.png','latest','no','2018-01-22 02:28:01','2018-01-22 02:28:01'),
	(24,2,'Methylsafe Methylated Spirit 70% w/v (Antiseptic)','<p>Methylsafe is a general purpose surface disinfectant effective against bacteria, fungi and viruses</p>','/storage/infection/1516589123.png','ordinary','no','2018-01-22 02:45:23','2018-01-22 02:45:23'),
	(25,2,'Surgisafe Surgical Spirit','<p>Methylsafe is a general purpose surface disinfectant effective against bacteria, fungi and viruses</p>','/storage/infection/1516590577.png','ordinary','no','2018-01-22 03:09:37','2018-01-22 03:09:37'),
	(26,2,'Povisafe Povidone Iodine 10%','<p>Povisafe is a borad spectrum bactericide also effective against yeast, mould, fungi, viruses and protozoa. Povisafe is a non irritating, non stianing antiseptic and disinfectant</p>','/storage/infection/1516590731.png','ordinary','no','2018-01-22 03:12:11','2018-01-22 03:12:11'),
	(27,2,'Safeperox Hydrogen Peroxide 6% w/v','<p>Safeperox is a mild antiseptic used on the skin to prevent infection of minor cuts, scrapes, and burns. It may also be used as a mouth rinse to help remove mucus or to relieve minor mouth irritation (e.g., due to canker/cold sores, gingivitis).&nbsp;</p>','/storage/infection/1516590864.png','latest','no','2018-01-22 03:14:24','2018-01-22 03:14:24'),
	(28,3,'Aqueous Cream','<p>Aqueous cream is a non-greasy emollient or moisturiser, used to treat dry skin conditions such as eczema.&nbsp; It is made from a mixture of emulsifying ointment and water (also called oil in water emulsion). When used as a soap substitute or wash product, it works by providing a layer of oil on the surface of the skin, which traps water beneath it and&nbsp; prevents water evaporating from the skin surface. In this way it helps to retain moisture on the skin and reduce dryness. Read more about emollients and moisturisers.</p>','/storage/skin/aquerous-cream-500.png','latest','no','2018-01-22 03:28:43','2018-01-22 03:28:43'),
	(29,5,'NICORRETE GUM ORIGINAL 2MG 105  ',NULL,'/storage/pharmacy/1516592625.png','latest','no','2018-01-22 03:43:45','2018-01-22 03:43:45'),
	(30,5,'RANEXA(RANOLAZINE)500MG TAB',NULL,'/storage/pharmacy/1516592697.png','ordinary','no','2018-01-22 03:44:57','2018-01-22 03:44:57'),
	(31,5,'QUESTRAN 4G SACHETS ( BMS ) ',NULL,'/storage/pharmacy/1516593090.png','latest','no','2018-01-22 03:51:30','2018-01-22 03:51:30'),
	(32,4,'Citrosafe 20%','<p>Citric Acid 20 % for citrothermal disinfection, cleaning and decalcification of haemodialyis machines.</p>','/storage/dialysis/1516594128.png','ordinary','no','2018-01-22 04:08:48','2018-01-22 04:08:48'),
	(33,2,'Hibisafe (Chlorhexidine gluconate 5% w/v)','<p>Hibisafe is an antiseptic that is active against a wide range of microorganisms. Used for pre-operative disinfection and disinfection of medical instruments.</p>','/storage/infection/1516884308.png','ordinary','no','2018-01-25 12:45:08','2018-01-25 12:45:08'),
	(34,2,'Safecet Antiseptic Liquid','<p>Cetrimide 3% w/v</p>\r\n<p>Chlorhexidine gluconate 0.3% w/v</p>\r\n<p>Safecet is a concentrated First Aid formula, designed to cleanse and treat; Cuts/grazes, insect bites/stings, minor burns/scalds, bathing and midwifery. Safecet is a general antiseptic for external first-aid use. It cleanses and helps to prevent infection. It aids with natural healing.</p>','/storage/infection/1516884748.png','ordinary','no','2018-01-25 12:52:28','2018-01-25 12:52:28'),
	(35,2,'Safechlorite','<p>Sodium Hypochlorite 3.5% w/v&nbsp;</p>\r\n<p>Safechlorite is an odourless solutionthat exhibits broad spectrum antimicrobial activity and is widely used in hospital facilities in a variety of settings. Safechlorite is an effective household bleach. Safechlorite has destaining properties and can be used to remove mould stains.</p>','/storage/infection/1516885240.png','ordinary','no','2018-01-25 13:00:40','2018-01-25 13:00:40'),
	(36,2,'Puresafe Purified Water','<p>Laboratory grade water for laboratory use.</p>','/storage/infection/1516885282.png','ordinary','no','2018-01-25 13:01:22','2018-01-25 13:01:22'),
	(37,2,'DetergSafe','<p>Multi-purpose Industrial liquid detergent</p>\r\n<p>Detergsafe powerful neutral detergent,compartible with any kind of surface.</p>','/storage/infection/1516885329.png','ordinary','no','2018-01-25 13:02:09','2018-01-25 13:02:09'),
	(38,4,'CitroSafe 21%','<p>Citric Acid 21%, lactic acid, malic acid, adjuvants. Excellent removal of calcium / magnesium deposits</p>','/storage/dialysis/1516885584.png','ordinary','no','2018-01-25 13:06:24','2018-01-25 13:06:24');

/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table sizes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sizes`;

CREATE TABLE `sizes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(255) NOT NULL,
  `sale_price` int(100) DEFAULT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sizes_product_id_index` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `sizes` WRITE;
/*!40000 ALTER TABLE `sizes` DISABLE KEYS */;

INSERT INTO `sizes` (`id`, `product_id`, `size`, `price`, `sale_price`, `image`, `status`, `created_at`, `updated_at`)
VALUES
	(3,8,'125ml',495,NULL,NULL,'no','2018-01-19 05:41:31','2018-01-19 05:41:31'),
	(4,9,'200ml',350,NULL,NULL,'no','2018-01-19 06:26:32','2018-01-19 06:26:32'),
	(5,10,'335ml',1700,NULL,NULL,'no','2018-01-19 06:29:50','2018-01-19 06:29:50'),
	(6,11,'125ml',495,NULL,NULL,'no','2018-01-19 07:29:35','2018-01-19 07:29:35'),
	(7,12,'125ml',395,NULL,NULL,'no','2018-01-19 07:31:13','2018-01-19 07:31:13'),
	(8,13,'1000ml',1590,NULL,NULL,'no','2018-01-19 07:36:39','2018-01-19 07:36:39'),
	(12,14,'400gm',4900,NULL,NULL,'no','2018-01-22 01:21:31','2018-01-22 01:21:31'),
	(13,15,'400gm',1750,NULL,NULL,'no','2018-01-22 01:23:55','2018-01-22 01:23:55'),
	(14,16,'1000ml',870,NULL,NULL,'no','2018-01-22 01:27:48','2018-01-22 01:27:48'),
	(15,17,'500ml',590,NULL,NULL,'no','2018-01-22 01:29:59','2018-01-22 01:29:59'),
	(16,18,'100ml',1390,NULL,NULL,'no','2018-01-22 01:31:21','2018-01-22 01:31:21'),
	(17,19,'1000ml',1990,NULL,NULL,'no','2018-01-22 01:32:44','2018-01-22 01:32:44'),
	(18,20,'1000ml',890,NULL,NULL,'no','2018-01-22 01:36:21','2018-01-22 01:36:21'),
	(20,22,'65ml',50,NULL,NULL,'no','2018-01-22 02:09:17','2018-01-22 02:09:17'),
	(21,22,'500ml',190,NULL,NULL,'no','2018-01-22 02:21:14','2018-01-22 02:21:14'),
	(22,22,'5L',1700,NULL,NULL,'no','2018-01-22 02:22:27','2018-01-22 02:22:27'),
	(23,23,'500ml',90,NULL,NULL,'no','2018-01-22 02:28:01','2018-01-22 02:28:01'),
	(24,23,'5L',560,NULL,'/storage/infection/safesoap-5.png','no','2018-01-22 02:28:32','2018-01-22 02:28:32'),
	(25,23,'20L',1500,NULL,NULL,'no','2018-01-22 02:28:51','2018-01-22 02:28:51'),
	(26,24,'100ml',30,NULL,'/storage/infection/methysafe-100.png','no','2018-01-22 02:45:23','2018-01-22 02:45:23'),
	(27,24,'500ml',60,NULL,NULL,'no','2018-01-22 02:47:30','2018-01-22 02:47:30'),
	(28,24,'1L',115,NULL,NULL,'no','2018-01-22 02:47:43','2018-01-22 02:47:43'),
	(29,24,'5L',550,NULL,'/storage/infection/methysafe-5.png','no','2018-01-22 02:47:53','2018-01-22 02:47:53'),
	(30,25,'100ml',30,NULL,NULL,'no','2018-01-22 03:09:37','2018-01-22 03:09:37'),
	(31,25,'500ml',65,NULL,NULL,'no','2018-01-22 03:10:14','2018-01-22 03:10:14'),
	(32,25,'1L',125,NULL,NULL,'no','2018-01-22 03:10:30','2018-01-22 03:10:30'),
	(33,25,'5L',660,NULL,'/storage/infection/surgisafe-5.png','no','2018-01-22 03:10:46','2018-01-22 03:10:46'),
	(34,26,'250ml',140,NULL,NULL,'no','2018-01-22 03:12:11','2018-01-22 03:12:11'),
	(35,26,'500ml',195,NULL,NULL,'no','2018-01-22 03:12:42','2018-01-22 03:12:42'),
	(36,26,'1L',370,NULL,NULL,'no','2018-01-22 03:12:51','2018-01-22 03:12:51'),
	(37,26,'5L',1500,NULL,'/storage/infection/povisafe-5.png','no','2018-01-22 03:13:04','2018-01-22 03:13:04'),
	(38,27,'200ml',22,NULL,NULL,'no','2018-01-22 03:14:24','2018-01-22 03:14:24'),
	(39,28,'500g',290,NULL,NULL,'no','2018-01-22 03:28:43','2018-01-22 03:28:43'),
	(40,29,'105\'s',2190,NULL,NULL,'no','2018-01-22 03:43:45','2018-01-22 03:43:45'),
	(41,30,'60\'s',12500,NULL,NULL,'no','2018-01-22 03:44:57','2018-01-22 03:44:57'),
	(42,31,'50\'s',4300,NULL,NULL,'no','2018-01-22 03:51:30','2018-01-22 03:51:30'),
	(43,32,'5L',1724,NULL,NULL,'no','2018-01-22 04:08:48','2018-01-22 04:08:48'),
	(44,27,'5L',290,NULL,'/storage/infection/1516878210.png','no','2018-01-25 11:03:30','2018-01-25 11:03:30'),
	(45,33,'5L',680,NULL,'/storage/infection/1516884308.png','no','2018-01-25 12:45:08','2018-01-25 12:45:08'),
	(46,33,'500ml',95,NULL,NULL,'no','2018-01-25 12:49:45','2018-01-25 12:49:45'),
	(47,33,'1L',270,NULL,NULL,'no','2018-01-25 12:50:58','2018-01-25 12:50:58'),
	(48,34,'5L',460,NULL,'/storage/infection/1516884748.png','no','2018-01-25 12:52:28','2018-01-25 12:52:28'),
	(49,34,'1L',105,NULL,'/storage/infection/1516884926.png','no','2018-01-25 12:55:26','2018-01-25 12:55:26'),
	(50,35,'5L',330,NULL,'/storage/infection/1516885240.png','no','2018-01-25 13:00:41','2018-01-25 13:00:41'),
	(51,36,'5L',450,NULL,'/storage/infection/1516885282.png','no','2018-01-25 13:01:22','2018-01-25 13:01:22'),
	(52,37,'5L',450,NULL,'/storage/infection/1516885329.png','no','2018-01-25 13:02:09','2018-01-25 13:02:09'),
	(53,38,'5L',1724,NULL,'/storage/dialysis/1516885584.png','no','2018-01-25 13:06:24','2018-01-25 13:06:24');

/*!40000 ALTER TABLE `sizes` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table sliders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sliders`;

CREATE TABLE `sliders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(10) DEFAULT NULL,
  `bg_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fact_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `fact_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `sliders` WRITE;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;

INSERT INTO `sliders` (`id`, `group_id`, `bg_image`, `image`, `title`, `fact_1`, `fact_2`, `status`, `created_at`, `updated_at`)
VALUES
	(1,1,'/storage/sliders/bg1.png','/storage/sliders/renilon.png','Renilon','High energy','High protein','no',NULL,'2018-01-19 00:58:12'),
	(2,2,'/storage/sliders/bg2.png','/storage/sliders/safsoap.png','Safesoap','Gentle on your skin','Kills nasty bacteria','no',NULL,NULL),
	(3,2,'/storage/sliders/1516254518.png','/storage/1516249999.png','Safesanitizer','Effective on the skin','Time saving antiseptic','no','2018-01-18 04:33:48','2018-01-18 04:33:48'),
	(15,1,'/storage/sliders/bg1516255416.png','/storage/sliders/1516255416.png','Nutrini Drink Powder','Nutritionally complete (1.5kcal/ml)','Higher energy, higher protein, per 100ml standard solution','no','2018-01-18 06:03:36','2018-01-19 01:02:25');

/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `role`, `status`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'admin','admin@gmail.com','$2y$10$uuRLEV/Zen05Bi1ftg.9CuVTm2lMeSyS1b2NsIpCup.p7GH2IFcWK','0713467781',10,'active','4u7p1JV8wXQUuD2wCZMOF2PQFUgzLTB3tZwZD8SepxXfbMitLdY6PMnkNtqu',NULL,NULL),
	(2,'black Pnther','black@gmail.com','','0712345678',1,'no',NULL,'2018-01-21 07:46:01','2018-01-21 07:46:01'),
	(3,'mart dash','mart@gmail.com','','0712345678',1,'no',NULL,'2018-01-21 07:47:52','2018-01-21 07:47:52'),
	(4,'jane doe','doe@gmail.com','','0712345678',1,'no',NULL,'2018-01-21 07:50:53','2018-01-21 07:50:53'),
	(5,'jane doe','doew@gmail.com','','0712345678',1,'no',NULL,'2018-01-21 07:52:53','2018-01-21 07:52:53'),
	(6,'jane doe','doeew@gmail.com','','0712345678',1,'no',NULL,'2018-01-21 07:53:44','2018-01-21 07:53:44');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
