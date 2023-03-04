-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 04, 2023 at 02:09 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
  time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;

/*!40101 SET NAMES utf8mb4 */
;

--
-- Database: `bali_wild_trek`
--
-- --------------------------------------------------------
--
-- Table structure for table `activity`
--
CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `description` longtext,
  `currency` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `uom` varchar(50) DEFAULT NULL,
  `benefit` longtext,
  `images` longtext,
  `is_active` int(11) NOT NULL DEFAULT '0'
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

--
-- Indexes for dumped tables
--
--
-- Indexes for table `activity`
--
ALTER TABLE
  `activity`
ADD
  PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE
  `activity`
MODIFY
  `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 0;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;