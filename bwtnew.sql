-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
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


-- Dumping database structure for bali_wild_trek
CREATE DATABASE IF NOT EXISTS `bali_wild_trek` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `bali_wild_trek`;

-- Dumping structure for table bali_wild_trek.activity
CREATE TABLE IF NOT EXISTS `activity` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `slug` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `description` longtext,
  `currency` varchar(50) DEFAULT NULL,
  `price` int DEFAULT NULL,
  `uom` varchar(50) DEFAULT NULL,
  `benefit` longtext,
  `images` longtext,
  `is_active` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table bali_wild_trek.activity: ~10 rows (approximately)
DELETE FROM `activity`;
INSERT INTO `activity` (`id`, `title`, `slug`, `description`, `currency`, `price`, `uom`, `benefit`, `images`, `is_active`) VALUES
	(2, 'Authentic Cooking Class in Balinese Paon Bali', 'authentic-cooking-class-in-balinese-paon-bali', '<p>You will learn how to cook authentic Balinese dishes in the comfort of our Balinese kitchen (Paon). Our hands-on cooking classes are taught by friendly and experienced local chefs. The private cooking class starts with a trip to a local market. In Bali Markets open early, The food markets are a great way to introduce the participant about Bali culture and lifestyle. Touring a traditional outdoor market provides insight both into how Balinese people approach cooking. This class conducted in English by Balinese chefs fully conversant with Balinese cuisine and culture in a relaxed.&nbsp;&nbsp;</p>\r\n\r\n<p>Spend half a day in the morning or afternoon with us and you will be creating memorable dishes for your friends and family in no time! With so many delicious menu ideas, you will surely want to make them all. these menus are sure to please any crowd. &nbsp;</p>\r\n', 'USD', 65, 'Person', '<p><strong>Minimum 2 person</strong></p>\r\n', '../public/activity/2/20190704_124718.jpg, ../public/activity/2/20190603_131241.jpg, ../public/activity/2/20190603_114035.jpg, ../public/activity/2/20190604_175814.jpg, ../public/activity/2/20190704_125230.jpg, ../public/activity/2/20190604_175909.jpg, , ', 1),
	(3, 'Balinese Purification in Holly Water Temple ', 'balinese-purification-in-holly-water-temple', '<p>Water is believed in the Balinese to be one of the forces of life.&nbsp;</p>\r\n\r\n<p>This experience provides a healing ritual and understanding to the magic mysteries of Balinese Spiritual.&nbsp;&nbsp;</p>\r\n\r\n<p>The purpose to create this unique spiritual experience, we have established a collaboration with Holly Water Temple located in Taman Mumbul Sangeh, that carries a mystifying and ancient energy.&nbsp;</p>\r\n', 'USD', 65, 'Person', '<p><strong>Minimum 2 person</strong></p>\r\n', '../public/activity/3/20190603_135252.jpg, ../public/activity/3/20190210_113118_1678110863.jpg, ../public/activity/3/IMG-20190201-WA0030.jpg, ../public/activity/3/1.png, ../public/activity/3/20180914_112748.jpg, ../public/activity/3/20180914_112809.jpg, ../public/activity/3/20190210_110959.jpg, ../public/activity/3/20190210_112123.jpg, ../public/activity/3/20190210_113040_1678110862.jpg, ../public/activity/3/IMG-20190201-WA0030_1678110864.jpg, ../public/activity/3/Untitled.png, ../public/activity/3/20180914_112736.jpg', 1),
	(4, 'Private Village Trekking ', 'private-village-trekking', '<p>Private Village Trekking takes 4 hours trip, This trip will let you feel like you are in heaven because you are never seen such a rich diversity of different plants and never breathed air so fresh as this. You will take an adventure simultaneously through the forest and mountainous area in this tour and will have a chance to see a lot of various types of plants, some of which have been widely used by locals to treat certain diseases for many years already. Local guides from the village will give you the opportunity to learn more about flora and fauna of this area and remember this day forever because you get to be accompanied by an experienced tour guide who&#39;ll let you see those hidden paths and sceneries that you are never seen even on the pictures.&nbsp;</p>\r\n', 'USD', 65, 'Person', '<p><strong>Minimum 2 person</strong></p>\r\n', '../public/activity/4/20180821_124913.jpg, ../public/activity/4/20180821_133809-01.jpeg, ../public/activity/4/20180823_103414.jpg, ../public/activity/4/20180823_103705.jpg, ../public/activity/4/20180823_113457.jpg, ../public/activity/4/20180826_111830.jpg, ../public/activity/4/20180826_132944.jpg, ../public/activity/4/20180828_111332.jpg, ../public/activity/4/20180831_110549.jpg, ../public/activity/4/36307592_191997634822078_6273441382447185920_n.jpg, ../public/activity/4/36479871_194832601205248_9166136112962338816_n.jpg, ../public/activity/4/20190502_104810.jpg', 1),
	(5, 'Balinese Spiritual Trip ', 'balinese-spiritual-trip', '<p>Balinese Spiritual Trip takes 6 hours trip. Before you start the trip, you will learn how Balinese prepare the offering to bring it to the temple. Prepared some fruits, cake, rice and food and put it into the basket that we call it in Balinese is Keben. We will prepared 2 Balnese offering (Banten), When the Balinese offering (Banten) is finish, we will Start the trip by visit the famous Mother temple in Bali named Pura Besakih that Located in Karangasem Regency. When you are arrived in the temple, you will put the offer and pray with the guide. Whey the pray and offering is done, you will enjoy the offering (Banten) together with the guide. The second trip, we will visit the second famous Father Temple called Pura Batur that located in&nbsp; Bangli regency&nbsp;</p>\r\n', 'USD', 65, 'Person', '<p><strong>Minimum 2 person</strong></p>\r\n', '../public/activity/5/20180914_112809.jpg, ../public/activity/5/20190604_154227.jpg, ../public/activity/5/52601905_301560850532422_6000410440289484800_n.jpg, ../public/activity/5/62537210_345488992806274_7393854739152109568_n.jpg, ../public/activity/5/20180918_114012.jpg, ../public/activity/5/20180918_114014.jpg', 1),
	(6, 'A day Adventure Packages ', 'a-day-adventure-packages', '<p><strong>Authentic Cooking Class in Balinese Paon Bali &amp; </strong><strong>Private Village Trekking</strong>&nbsp;</p>\r\n\r\n<p>You will learn how to cook authentic Balinese dishes in the comfort of our Balinese kitchen (Paon). Our hands-on cooking classes are taught by friendly and experienced local chefs. The private cooking class starts with a trip to a local market. In Bali Markets open early, The food markets are a great way to introduce the participant about Bali culture and lifestyle. Touring a traditional outdoor market provides insight both into how Balinese people approach cooking. This class conducted in English by Balinese chefs fully conversant with Balinese cuisine and culture in a relaxed. Spend half a day in the morning or afternoon with us and you will be creating memorable dishes for your friends and family in no time! With so many delicious menu ideas, you will surely want to make them all. these menus are sure to please any crowd. &nbsp;</p>\r\n\r\n<p>Private Village Trekking takes 4 hours trip, This trip will let you feel like you are in heaven because you are never seen such a rich diversity of different plants and never breathed air so fresh as this. You will take an adventure simultaneously through the forest and mountainous area in this tour and will have a chance to see a lot of various types of plants, some of which have been widely used by locals to treat certain diseases for many years already. Local guides from the village will give you the opportunity to learn more about flora and fauna of this area and remember this day forever because you get to be accompanied by an experienced tour guide who&#39;ll let you see those hidden paths and sceneries that you are never seen even on the pictures.&nbsp;</p>\r\n', 'USD', 110, 'Person', '<p><strong>Minimum 2 person</strong></p>\r\n', '../public/activity/6/36479871_194832601205248_9166136112962338816_n.jpg, ../public/activity/6/20180815_135714-01.jpeg, ../public/activity/6/20180815_135733-01.jpeg, ../public/activity/6/20180821_103031.jpg, ../public/activity/6/20180821_103737.jpg, ../public/activity/6/20180821_113157.jpg, ../public/activity/6/20180821_115131.jpg, ../public/activity/6/20190604_175814.jpg, ../public/activity/6/20190604_175909.jpg, ../public/activity/6/20190704_124718.jpg, ../public/activity/6/20190704_125230.jpg, ../public/activity/6/20190603_114035.jpg, ../public/activity/6/20190603_131241.jpg, ../public/activity/6/20180821_124913.jpg, ../public/activity/6/20180821_133809-01.jpeg, ../public/activity/6/20180823_103414.jpg, ../public/activity/6/20180823_103705.jpg, ../public/activity/6/20180823_113457.jpg, ../public/activity/6/20180826_111830.jpg, ../public/activity/6/20180826_132944.jpg, ../public/activity/6/20180828_111332.jpg, ../public/activity/6/20180831_110549.jpg, ', 1),
	(7, 'A Day Spiritual Journey Packages ', 'a-day-spiritual-journey-packages', '<p><strong>Balinese Purification in Holly Water Temple &amp; Balinese Spiritual Trip</strong>&nbsp;</p>\r\n\r\n<p>Water is believed in the Balinese to be one of the forces of life.&nbsp;</p>\r\n\r\n<p>This experience provides a healing ritual and understanding to the magic mysteries of Balinese Spiritual.&nbsp;&nbsp;</p>\r\n\r\n<p>The purpose to create this unique spiritual experience, we have established a collaboration with Holly Water Temple located in Taman Mumbul Sangeh, that carries a mystifying and ancient energy.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Balinese Spiritual Trip takes 8 hours trip. Before you start the trip, you will learn how Balinese prepare the offering to bring it to the temple. Prepared some fruits, cake, rice and food and put it into the basket that we call it in Balinese is Keben. We will prepared 2 Balnese offering (Banten), When the Balinese offering (Banten) is finish, we will Start the trip by visit the famous Mother temple in Bali named Pura Besakih that Located in Karangasem Regency. When you are arrived in the temple, you will put the offer and pray with the guide. Whey the pray and offering is done, you will enjoy the offering (Banten) together with the guide. The second trip, we will visit the second famous Father Temple called Pura Batur that located in&nbsp; Bangli regency&nbsp;</p>\r\n', 'USD', 110, 'Person', '<p><strong>Minimum 2 person</strong></p>\r\n', '../public/activity/7/20190604_154227.jpg, ../public/activity/7/62537210_345488992806274_7393854739152109568_n.jpg, ../public/activity/7/52601905_301560850532422_6000410440289484800_n.jpg, ../public/activity/7/IMG-20190201-WA0030.jpg, ../public/activity/7/20180914_112748.jpg, ../public/activity/7/20190210_110959.jpg, ../public/activity/7/20190210_112123.jpg, ../public/activity/7/20190210_113040.jpg, ../public/activity/7/20190210_113118.jpg, ../public/activity/7/Untitled.png, ../public/activity/7/1.png, ../public/activity/7/2.png, ../public/activity/7/20180914_112809.jpg, ../public/activity/7/20180914_112748_1678112987.jpg', 1),
	(8, 'Bali Rafting Adventure', 'bali-rafting-adventure', '<p>Experience an adrenaline rush as you raft through the cool and refreshing water of the longest river in Bali, the Ayung river. See the hidden waterfalls, rain-forest, stone carvings, and panoramic river views around the Ubud area in this eco-adventure activity. Don&rsquo;t forget to jump into the refreshing river waters as you complete the journey!</p>\r\n', 'USD', 50, 'Person', '<ul>\r\n	<li>minimum booking 4</li>\r\n	<li>Duration 2 hours</li>\r\n	<li>Welcome Drink</li>\r\n	<li>Lunch</li>\r\n	<li>Rafting at Ayung River</li>\r\n	<li>Complete Rafting Equipment</li>\r\n	<li>Insurance Coverage</li>\r\n	<li>Towel, Toilet &amp; Changing Ro</li>\r\n</ul>\r\n', '../public/activity/8/DSC_7658.JPG, ../public/activity/8/DSC_7726.JPG, ../public/activity/8/IMG_6291.JPG, ../public/activity/8/IMG_8802.JPG, ../public/activity/8/IMG_8916.JPG', 1),
	(9, 'Sunrise Trekking Mount Batur', 'sunrise-trekking-mount-batur', '<p>Get ready to explore your choice for an amazing experience hike on this volcano active in Bali. Mount Agung is the largest and the highest volcano in this Bali island. here you will see best view and get best moment to see sunrise from top of Mount Agung (3142 m) from sea level.&nbsp;Need you know, we offer two difference trek up to Mount Agung.</p>\r\n\r\n<p><em><strong>First trek</strong></em>&nbsp;is longer one to get higher western top of Mount Agung and this trek will start at 11 pm via Besakih Temple and it will take another 5-6 hours get to the submit one of Mount Agung.</p>\r\n\r\n<p><strong><em>Second trek</em></strong>&nbsp;is shorter one and this trek will start at 02.00 am via Pasar Agung Temple and it will take another 3-4 hours get to the top of creater Mount Agung. So, in this case It&#39;s doesn&#39;t matter which trek you will chose. The trek will start with jungle and steep rocky to get the summit of volcano. Here you will see the perfect landscape surrounding from this volcano than will make your journey become worth.</p>\r\n\r\n<p>What have to bring</p>\r\n\r\n<ul>\r\n	<li>Long pant</li>\r\n	<li>Warm Jacket</li>\r\n	<li>Walking shoes</li>\r\n	<li>Camera or phone</li>\r\n	<li>Backpack</li>\r\n	<li>Some cash</li>\r\n</ul>\r\n', 'USD ', 50, 'Person', '<h1>What Included:</h1>\r\n\r\n<ul>\r\n	<li>All entrance fee</li>\r\n	<li>Hotel pick up and drof off</li>\r\n	<li>Private trekk with local guide</li>\r\n	<li>Breakfast on the top</li>\r\n	<li>Mineral water each person</li>\r\n	<li>Hot coffee or tea on top</li>\r\n	<li>Trekking pole</li>\r\n	<li>Flaslight</li>\r\n	<li>Visiting coffee plantation (optional)</li>\r\n</ul>\r\n\r\n<p>What Not Included:</p>\r\n\r\n<ul>\r\n	<li>Your Personal Expenses</li>\r\n</ul>\r\n', '../public/activity/9/c800f168-ae1b-4578-8980-6ab1c8e43353.jpg, ../public/activity/9/0eaf8d91-5b64-40ae-8e8e-e38f19728fe4.jpg, ../public/activity/9/76e864bb-01fa-438c-93fd-2b1f656e3c64.jpg, ../public/activity/9/442cf4bc-0e32-49f7-ac0a-ece1f4a1ebdc.jpg, ../public/activity/9/3513d13f-51e3-4597-8f18-a3d9e3ba2dde.jpg, ../public/activity/9/99422f4b-dcc1-48a0-8960-e91184509dc8.jpg, ../public/activity/9/c3a9615e-321e-4306-877d-2a366a0770e9.jpg, ../public/activity/9/d36d8d1c-8697-4b93-ba07-5d58e80ddea0.jpg, ../public/activity/9/ef3de0f4-22c0-4724-bf1a-abdb6b66534d.jpg, ', 1),
	(10, 'Bali ATV Ride Adventures', 'bali-atv-ride-adventures', '<p>This is the Best ATV Adventure in Ubud Bali has provided Bali ATV rentals. We want to share happiness and fun during your holiday in Bali. Feel the sensation of riding an ATV in the midst of the beautiful nature of Bali.</p>\r\n\r\n<p>Your exciting adventure will last for 2 hours in Ubud, Bali. The route that is passed is very long and challenging with beautiful natural panoramas of Bali. You will pass through rice fields, rivers, muddy track, waterfalls and challenging off road terrain.</p>\r\n', 'USD', 50, 'Person', '<h3>SINGLE ATV RIDE</h3>\r\n\r\n<p>1 ATV FOR 1 PEOPLE<br />\r\n<br />\r\n&radic; ATV Adventure (2 hours)<br />\r\n&radic; Safety Equipment (Helmet &amp; Boots)<br />\r\n&radic; Instructor Guide<br />\r\n&radic; Lockers &amp; Showers<br />\r\n&radic; Mineral Water<br />\r\n&radic; Insurance Covered</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>TANDEM ATV RIDE</h3>\r\n\r\n<p>1 ATV FOR 2 PEOPLE<br />\r\n<br />\r\n&radic; ATV Adventure (2 hours)<br />\r\n&radic; Safety Equipment (Helmet &amp; Boots)<br />\r\n&radic; Instructor Guide<br />\r\n&radic; Lockers &amp; Showers<br />\r\n&radic; Mineral Water<br />\r\n&radic; Insurance Covered</p>\r\n', '../public/activity/10/DSC05154.JPG, ', 1),
	(11, 'Bali Village Cycling', 'bali-village-cycling', '<p>&nbsp;Bali Village Cycling offer the best way to experience an Ubud bicycle tour&hellip;electrified! A cross between riding a motorcycle and riding a bicycle, the electric bike is the best of both worlds. Easily pedal up hills while enjoying the magnificent rice terraces and quaint local villages. Our local guides will give you insight into what you are seeing so that the sites of Bali become more than just scenery.</p>\r\n\r\n<p>There is so much to see in the areas around Ubud. Our guides are from this area and have intimate knowledge of the special places along this route. The Ubud cycling tour travels through traditional villages and stops at numerous temples. We also visit Tegalalang, the world famous rice terraces.</p>\r\n', 'USD', 40, 'Person', '<h2>Bali Village Cycling</h2>\r\n\r\n<ul>\r\n	<li>Visit Temples, Villages, Rice Terraces and More</li>\r\n	<li>English Speaking Local Guides</li>\r\n	<li>All Tours Followed by a Support Vehicle Which You&nbsp; &nbsp; &nbsp; &nbsp; Can Opt to Ride in.</li>\r\n	<li>Exercise as Much (or as little) as You Want</li>\r\n	<li>See the Real Bali</li>\r\n	<li>Delicious Balinese Lunch</li>\r\n	<li>Free Ubud Hotel Pickup/Drop off</li>\r\n</ul>\r\n', '../public/activity/11/CM3A4693-1.JPG', 1);

-- Dumping structure for table bali_wild_trek.configuration
CREATE TABLE IF NOT EXISTS `configuration` (
  `id_config` int NOT NULL AUTO_INCREMENT,
  `whatsapp` varchar(1000) DEFAULT NULL,
  `email` varchar(1000) DEFAULT NULL,
  `instagram` varchar(1000) DEFAULT NULL,
  `facebook` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id_config`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table bali_wild_trek.configuration: 1 rows
DELETE FROM `configuration`;
/*!40000 ALTER TABLE `configuration` DISABLE KEYS */;
INSERT INTO `configuration` (`id_config`, `whatsapp`, `email`, `instagram`, `facebook`) VALUES
	(1, '6281916227333', 'experience@baliwildtrek.com', 'https://instagram.com/baliwildtrek?igshid=YmMyMTA2M2Y=', 'https://www.facebook.com/baliwildtrek?mibextid=LQQJ4d');
/*!40000 ALTER TABLE `configuration` ENABLE KEYS */;

-- Dumping structure for table bali_wild_trek.revenue
CREATE TABLE IF NOT EXISTS `revenue` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `sob` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `person` int DEFAULT NULL,
  `selling_rate` int DEFAULT NULL,
  `cost` int DEFAULT NULL,
  `revenue` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table bali_wild_trek.revenue: ~3 rows (approximately)
DELETE FROM `revenue`;
INSERT INTO `revenue` (`id`, `date`, `sob`, `description`, `person`, `selling_rate`, `cost`, `revenue`) VALUES
	(1, '2023-04-10', 'MAVA HOLIDAY', 'Jungle Trekking', 2, 800000, 600000, 200000),
	(2, '2023-04-19', 'AGENT', 'Rafting', 2, 900000, 600000, 300000),
	(5, '2023-05-19', 'Mr. Trevor', 'Bikking 2 days', 1, 200000, 50000, 150000),
	(6, '2023-01-05', 'John Doe', 'Apartment Rental', 3, 850000, 650000, 200000),
	(7, '2023-01-15', 'Jane Smith', 'Villa Rental', 2, 1200000, 900000, 300000),
	(8, '2023-01-25', 'Michael Johnson', 'Beach House Rental', 4, 950000, 700000, 250000),
	(9, '2023-02-05', 'Emily Brown', 'Chalet Rental', 5, 700000, 550000, 150000),
	(10, '2023-02-15', 'David Wilson', 'Cottage Rental', 3, 1100000, 800000, 300000),
	(11, '2023-02-25', 'Sarah Taylor', 'Apartment Rental', 2, 850000, 650000, 200000),
	(12, '2023-03-05', 'Christopher Martinez', 'Villa Rental', 6, 1250000, 950000, 300000),
	(13, '2023-03-15', 'Amanda Anderson', 'Beach House Rental', 4, 900000, 700000, 200000),
	(14, '2023-03-25', 'Daniel Thomas', 'Chalet Rental', 3, 750000, 600000, 150000),
	(15, '2023-04-05', 'Jessica Garcia', 'Cottage Rental', 2, 1150000, 850000, 300000),
	(16, '2023-04-15', 'Matthew Lopez', 'Apartment Rental', 5, 800000, 600000, 200000),
	(17, '2023-04-25', 'Laura Rodriguez', 'Villa Rental', 3, 1200000, 900000, 300000),
	(18, '2023-05-05', 'Joshua Perez', 'Beach House Rental', 4, 950000, 700000, 250000),
	(19, '2023-05-15', 'Ashley Gonzales', 'Chalet Rental', 2, 700000, 550000, 150000),
	(20, '2023-05-25', 'Kevin Scott', 'Cottage Rental', 3, 1100000, 800000, 300000),
	(21, '2023-06-05', 'Megan King', 'Apartment Rental', 4, 850000, 650000, 200000),
	(22, '2023-06-15', 'Justin Lee', 'Villa Rental', 5, 1250000, 950000, 300000),
	(23, '2023-06-25', 'Rachel Hall', 'Beach House Rental', 3, 900000, 700000, 200000),
	(24, '2023-07-05', 'Brandon Young', 'Chalet Rental', 2, 750000, 600000, 150000),
	(25, '2023-07-15', 'Emma Martinez', 'Cottage Rental', 3, 1150000, 850000, 300000),
	(26, '2023-07-25', 'Ethan Clark', 'Apartment Rental', 5, 800000, 600000, 200000),
	(27, '2023-08-05', 'Olivia Hernandez', 'Villa Rental', 3, 1200000, 900000, 300000),
	(28, '2023-08-15', 'Noah Lewis', 'Beach House Rental', 4, 950000, 700000, 250000),
	(29, '2023-08-25', 'Isabella Scott', 'Chalet Rental', 2, 700000, 550000, 150000),
	(30, '2023-09-05', 'William Hall', 'Cottage Rental', 3, 1100000, 800000, 300000),
	(31, '2023-09-15', 'Sophia King', 'Apartment Rental', 4, 850000, 650000, 200000),
	(32, '2023-09-25', 'James Allen', 'Villa Rental', 5, 1250000, 950000, 300000),
	(33, '2023-10-05', 'Grace White', 'Beach House Rental', 3, 900000, 700000, 200000),
	(34, '2023-10-15', 'Logan Martinez', 'Chalet Rental', 2, 750000, 600000, 150000),
	(35, '2023-10-25', 'Chloe Perez', 'Cottage Rental', 3, 1150000, 850000, 300000);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
