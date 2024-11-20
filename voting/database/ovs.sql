-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 10, 2024 at 04:34 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ovs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `aid` int NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`aid`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vc`
--

DROP TABLE IF EXISTS `tbl_vc`;
CREATE TABLE IF NOT EXISTS `tbl_vc` (
  `cid` int NOT NULL AUTO_INCREMENT,
  `vid` int NOT NULL,
  `votes` varchar(200) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_vc`
--

INSERT INTO `tbl_vc` (`cid`, `vid`, `votes`, `name`) VALUES
(1, 4, 'Vote Submitted By', 'Ram Dwivedi'),
(2, 4, 'Vote Submitted By', 'Goldy'),
(3, 5, 'Vote Submitted By', 'Akshat Pathak'),
(4, 4, 'Vote Submitted By', 'Himanshu Sharma'),
(5, 4, 'Vote Submitted By', 'kuldeep singh'),
(6, 4, 'Vote Submitted By', 'kshitij');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vote`
--

DROP TABLE IF EXISTS `tbl_vote`;
CREATE TABLE IF NOT EXISTS `tbl_vote` (
  `vid` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `mobile` bigint NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `profile_pic` varchar(50) NOT NULL,
  `role` int NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_vote`
--

INSERT INTO `tbl_vote` (`vid`, `name`, `mobile`, `password`, `address`, `profile_pic`, `role`, `status`) VALUES
(1, 'Ram Dwivedi', 8218155051, '2001', 'Raya', 'ram.jpg', 1, 'V'),
(2, 'Goldy', 7983228779, 'bharat', 'Mathura', 'goldy.jpeg', 1, 'V'),
(3, 'Akshat Pathak', 123456789, 'akshat', 'Hathras', 'akki.enc', 1, 'V'),
(4, 'BJP(BHARATIYA JANTA PARTY)', 147258369, 'bjp', 'LKO', 'bjp.webp', 2, 'N'),
(5, 'AAP(AAM AADMI PARTY)', 2222222222, 'aap', 'Delhi', 'aap.png', 2, 'N'),
(6, 'Himanshu Sharma', 8954044186, '0000', 'SADABAD', 'bull.avif', 1, 'V'),
(7, 'xyz', 123, '123', 'gggug', '', 1, 'N'),
(8, 'kuldeep singh', 8958635560, '895863', 'iglas road mursan hathras', '', 1, 'V'),
(9, 'kshitij', 8979190278, '12345678', 'Naya ganj hathras', 'goldy.jpeg', 1, 'V');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
