-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2023 at 08:04 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itemmasters_update`
--

-- --------------------------------------------------------

--
-- Table structure for table `alur`
--

CREATE TABLE `alur` (
  `id` int(11) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `created` varchar(100) NOT NULL,
  `approve1` varchar(100) NOT NULL,
  `approve2` varchar(100) NOT NULL,
  `approve3` varchar(100) NOT NULL,
  `approve4` varchar(100) NOT NULL,
  `approve5` varchar(100) NOT NULL,
  `approve6` varchar(100) NOT NULL,
  `approve7` varchar(100) NOT NULL,
  `approve8` varchar(100) NOT NULL,
  `approve9` varchar(100) NOT NULL,
  `approve10` varchar(100) NOT NULL,
  `approve11` varchar(100) NOT NULL,
  `approve12` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alur`
--

INSERT INTO `alur` (`id`, `nik`, `created`, `approve1`, `approve2`, `approve3`, `approve4`, `approve5`, `approve6`, `approve7`, `approve8`, `approve9`, `approve10`, `approve11`, `approve12`) VALUES
(16, 'M799', 'hayukk', 'Quality', 'Widodo', 'Engginering', 'Marketing', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `id` int(11) NOT NULL,
  `mata_uang` varchar(50) NOT NULL,
  `simbol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`id`, `mata_uang`, `simbol`) VALUES
(1, 'USD', '$'),
(2, 'IDR', 'Rp'),
(3, 'JPY', '¥');

-- --------------------------------------------------------

--
-- Table structure for table `departement`
--

CREATE TABLE `departement` (
  `id` int(11) NOT NULL,
  `nama_dept` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departement`
--

INSERT INTO `departement` (`id`, `nama_dept`) VALUES
(1, 'Engineering'),
(2, 'Marketing'),
(3, 'PPIC');

-- --------------------------------------------------------

--
-- Table structure for table `itemac`
--

CREATE TABLE `itemac` (
  `id` int(50) NOT NULL,
  `part_no` varchar(50) DEFAULT NULL,
  `part_name` varchar(50) DEFAULT NULL,
  `customer` varchar(50) DEFAULT NULL,
  `reason` text DEFAULT NULL,
  `pic1` varchar(20) NOT NULL,
  `pic` varchar(50) DEFAULT NULL,
  `material_rmcode` varchar(50) DEFAULT NULL,
  `rm_stock` int(50) DEFAULT NULL,
  `rm_stockJ` int(50) DEFAULT NULL,
  `rm_weight` double DEFAULT NULL,
  `weight_consum` double DEFAULT NULL,
  `rm_use` double DEFAULT NULL,
  `proces1` text DEFAULT NULL,
  `proces2` text DEFAULT NULL,
  `proces3` text DEFAULT NULL,
  `proces4` text DEFAULT NULL,
  `proces5` text DEFAULT NULL,
  `proces6` text DEFAULT NULL,
  `proces7` text DEFAULT NULL,
  `proces8` text DEFAULT NULL,
  `proces9` text DEFAULT NULL,
  `proces10` text DEFAULT NULL,
  `proces11` text DEFAULT NULL,
  `proces12` text DEFAULT NULL,
  `proces13` text DEFAULT NULL,
  `proces14` text DEFAULT NULL,
  `proces15` text DEFAULT NULL,
  `proces16` text DEFAULT NULL,
  `currency` varchar(13) DEFAULT NULL,
  `unit_price` varchar(50) DEFAULT NULL,
  `reason_price` text DEFAULT NULL,
  `part_stock` int(50) DEFAULT NULL,
  `amalgamasi` varchar(50) DEFAULT NULL,
  `part_stockJ` int(50) DEFAULT NULL,
  `unit_length` double DEFAULT NULL,
  `item_pcs` int(50) DEFAULT NULL,
  `std_packing` int(50) DEFAULT NULL,
  `ct` varchar(50) DEFAULT NULL,
  `weight_part` double DEFAULT NULL,
  `weightconsumn` double DEFAULT NULL,
  `rawmatppic` varchar(50) DEFAULT NULL,
  `dept` varchar(50) DEFAULT NULL,
  `model` varchar(50) DEFAULT NULL,
  `id_level` int(50) DEFAULT NULL,
  `lampiran` varchar(50) DEFAULT NULL,
  `keputusan` varchar(50) DEFAULT NULL,
  `catatan_spveng` varchar(100) NOT NULL,
  `catatan_spvqc` varchar(100) NOT NULL,
  `catatan_asmenppic` varchar(100) NOT NULL,
  `catatan_gm` varchar(100) NOT NULL,
  `tglmkt` datetime DEFAULT NULL,
  `tgleng` datetime DEFAULT NULL,
  `tglppic2` datetime DEFAULT NULL,
  `tglspveng` datetime DEFAULT NULL,
  `tglqc` datetime DEFAULT NULL,
  `tglppic` datetime DEFAULT NULL,
  `tglgm` datetime DEFAULT NULL,
  `tglppic3` datetime DEFAULT NULL,
  `tglit` datetime DEFAULT NULL,
  `cutoffprod` date DEFAULT NULL,
  `cutoffsales` date DEFAULT NULL,
  `packing` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itemac`
--

INSERT INTO `itemac` (`id`, `part_no`, `part_name`, `customer`, `reason`, `pic1`, `pic`, `material_rmcode`, `rm_stock`, `rm_stockJ`, `rm_weight`, `weight_consum`, `rm_use`, `proces1`, `proces2`, `proces3`, `proces4`, `proces5`, `proces6`, `proces7`, `proces8`, `proces9`, `proces10`, `proces11`, `proces12`, `proces13`, `proces14`, `proces15`, `proces16`, `currency`, `unit_price`, `reason_price`, `part_stock`, `amalgamasi`, `part_stockJ`, `unit_length`, `item_pcs`, `std_packing`, `ct`, `weight_part`, `weightconsumn`, `rawmatppic`, `dept`, `model`, `id_level`, `lampiran`, `keputusan`, `catatan_spveng`, `catatan_spvqc`, `catatan_asmenppic`, `catatan_gm`, `tglmkt`, `tgleng`, `tglppic2`, `tglspveng`, `tglqc`, `tglppic`, `tglgm`, `tglppic3`, `tglit`, `cutoffprod`, `cutoffsales`, `packing`) VALUES
(71, '111', 'Test', 'Test', 'Test', 'Test', 'Test', 'RM7', 0, 0, 0, 7, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'USD', '', '', 0, '', 0, 7, 0, 0, '', 0, 0, '', 'Marketing', 'Test', 1, '', 'Approved by GM HRD IT', 'lvl 6', 'lvl 5', 'lvl 4', 'lvl 3', '2023-04-06 09:47:33', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2023-04-06 09:55:08', '2023-04-06 10:01:11', '2023-04-06 10:04:50', '2023-04-06 10:08:28', '2023-04-06 09:52:06', '2023-04-15 08:55:57', '0000-00-00', '0000-00-00', ''),
(72, '111', 'test2', 'test2', 'test2', '', 'test2', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'USD', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, '', 'Engineering', 'test2', 8, '', '', '', '', '', '', '0000-00-00 00:00:00', '2023-04-06 10:21:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', ''),
(73, '12312', 'asdas', 'asdas', 'asdas', '', 'test', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'USD', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, '', 'PPIC', 'asdasasdasdasdasd', 13, '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2023-04-06 10:45:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2023-04-06 10:45:57', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', ''),
(74, 'test', 'test', 'test', 'test', 'test', 'test', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'USD', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, '', 'Marketing', 'test', 9, '', '', '', '', '', '', '2023-04-06 11:56:49', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', ''),
(75, '111', 'bbb', 'bbb', 'asd', 'asd', 'Server', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'USD', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, '', 'Marketing', 'test_server', 9, '', '', '', '', '', '', '2023-04-11 10:50:27', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', ''),
(76, '12312', 'MAIN SHAFT KMI 9080', 'PT. INDONESIA NIPPON SEIKI', 'asdas', 'asdasd', 'uddenn', 'RM02', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'USD', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, '', 'Marketing', 'Bisa ini mah', 7, '', '', '', '', '', '', '2023-04-11 13:18:16', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2023-04-15 08:30:25', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', ''),
(77, '123', 'SHAFT,LOCK LEVER,RELEASE,L', 'PT. KIYOKUNI INDONESIA', 'KEPO', 'KEPO', 'uud', 'RM4601', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'USD', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, '', 'Marketing', 'EZ dek', 9, '', '', '', '', '', '', '2023-04-11 13:32:51', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', ''),
(78, '123', 'asd', 'asd', 'asd', 'asd', 'asd', 'RM02', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'USD', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, '', 'Marketing', 'asd', 1, '', 'Approved by GM HRD IT', 'masok pak eko', 'gantiwoii', 'Mantapp', 'GM lgi ni bos', '2023-04-12 11:12:51', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2023-04-15 08:41:17', '2023-04-15 08:45:25', '2023-04-15 08:48:31', '2023-04-15 08:52:17', '2023-04-15 08:30:08', '2023-04-15 08:55:18', '0000-00-00', '0000-00-00', ''),
(79, '123', 'coba', 'coba', 'coba', 'coba', 'coba', 'RM666', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'USD', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, '', 'Marketing', 'coba', 1, '', 'Disapproved by GM HRD IT', 'jos', 'Mantapp', 'Asmen PPIC', 'GM ni bos', '2023-04-12 11:15:02', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2023-04-15 08:40:53', '2023-04-15 08:43:16', '2023-04-15 08:48:06', '2023-04-15 08:51:51', '2023-04-15 08:29:53', '2023-04-15 08:54:56', '0000-00-00', '0000-00-00', ''),
(80, '12312', 'aasd', 'huhu', 'hehe', '', 'gaga', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'USD', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, '', 'Engineering', 'hehe', 8, '', '', '', '', '', '', '0000-00-00 00:00:00', '2023-04-15 10:40:24', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', ''),
(81, '123321', 'vdvd', 'vqvq', 'vzvz', '', 'vava', 'RM666', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'USD', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, '', 'PPIC', 'veve', 13, '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2023-04-15 10:55:23', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2023-04-15 10:55:23', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `itembc`
--

CREATE TABLE `itembc` (
  `id` int(50) NOT NULL,
  `part_no` varchar(50) DEFAULT NULL,
  `part_name` varchar(50) DEFAULT NULL,
  `customer` varchar(50) DEFAULT NULL,
  `reason` text DEFAULT NULL,
  `pic1` varchar(20) NOT NULL,
  `pic` varchar(50) DEFAULT NULL,
  `material_rmcode` varchar(50) DEFAULT NULL,
  `rm_stock` int(50) DEFAULT NULL,
  `rm_stockJ` int(50) DEFAULT NULL,
  `rm_weight` double DEFAULT NULL,
  `weight_consum` double DEFAULT NULL,
  `rm_use` double DEFAULT NULL,
  `proces1` text DEFAULT NULL,
  `proces2` text DEFAULT NULL,
  `proces3` text DEFAULT NULL,
  `proces4` text DEFAULT NULL,
  `proces5` text DEFAULT NULL,
  `proces6` text DEFAULT NULL,
  `proces7` text DEFAULT NULL,
  `proces8` text DEFAULT NULL,
  `proces9` text DEFAULT NULL,
  `proces10` text DEFAULT NULL,
  `proces11` text DEFAULT NULL,
  `proces12` text DEFAULT NULL,
  `proces13` text DEFAULT NULL,
  `proces14` text DEFAULT NULL,
  `proces15` text DEFAULT NULL,
  `proces16` text DEFAULT NULL,
  `currency` varchar(13) DEFAULT NULL,
  `unit_price` varchar(50) DEFAULT NULL,
  `reason_price` text DEFAULT NULL,
  `part_stock` int(50) DEFAULT NULL,
  `amalgamasi` varchar(50) DEFAULT NULL,
  `part_stockJ` int(50) DEFAULT NULL,
  `unit_length` double DEFAULT NULL,
  `item_pcs` int(50) DEFAULT NULL,
  `std_packing` int(50) DEFAULT NULL,
  `ct` varchar(50) DEFAULT NULL,
  `weight_part` double DEFAULT NULL,
  `weightconsumn` double DEFAULT NULL,
  `rawmatppic` varchar(50) DEFAULT NULL,
  `dept` varchar(50) DEFAULT NULL,
  `model` varchar(50) DEFAULT NULL,
  `id_level` int(50) DEFAULT NULL,
  `lampiran` varchar(50) DEFAULT NULL,
  `keputusan` varchar(50) DEFAULT NULL,
  `catatan_spveng` varchar(100) NOT NULL,
  `catatan_spvqc` varchar(100) NOT NULL,
  `catatan_asmenppic` varchar(100) NOT NULL,
  `catatan_gm` varchar(100) NOT NULL,
  `tglmkt` datetime DEFAULT NULL,
  `tgleng` datetime DEFAULT NULL,
  `tglppic2` datetime DEFAULT NULL,
  `tglspveng` datetime DEFAULT NULL,
  `tglqc` datetime DEFAULT NULL,
  `tglppic` datetime DEFAULT NULL,
  `tglgm` datetime DEFAULT NULL,
  `tglppic3` datetime DEFAULT NULL,
  `tglit` datetime DEFAULT NULL,
  `cutoffprod` date DEFAULT NULL,
  `cutoffsales` date DEFAULT NULL,
  `packing` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itembc`
--

INSERT INTO `itembc` (`id`, `part_no`, `part_name`, `customer`, `reason`, `pic1`, `pic`, `material_rmcode`, `rm_stock`, `rm_stockJ`, `rm_weight`, `weight_consum`, `rm_use`, `proces1`, `proces2`, `proces3`, `proces4`, `proces5`, `proces6`, `proces7`, `proces8`, `proces9`, `proces10`, `proces11`, `proces12`, `proces13`, `proces14`, `proces15`, `proces16`, `currency`, `unit_price`, `reason_price`, `part_stock`, `amalgamasi`, `part_stockJ`, `unit_length`, `item_pcs`, `std_packing`, `ct`, `weight_part`, `weightconsumn`, `rawmatppic`, `dept`, `model`, `id_level`, `lampiran`, `keputusan`, `catatan_spveng`, `catatan_spvqc`, `catatan_asmenppic`, `catatan_gm`, `tglmkt`, `tgleng`, `tglppic2`, `tglspveng`, `tglqc`, `tglppic`, `tglgm`, `tglppic3`, `tglit`, `cutoffprod`, `cutoffsales`, `packing`) VALUES
(71, '111', 'Test', 'Test', 'Test', 'Test', 'Test', 'RM7', 0, 0, 0, 7, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'USD', '', '', 0, '', 0, 7, 0, 0, '', 0, 0, '', 'Marketing', 'Test', 1, '', 'Approved by GM HRD IT', 'lvl 6', 'lvl 5', 'lvl 4', 'lvl 3', '2023-04-06 09:47:33', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2023-04-06 09:55:08', '2023-04-06 10:01:11', '2023-04-06 10:04:50', '2023-04-06 10:08:28', '2023-04-06 09:52:06', '2023-04-15 08:55:57', '0000-00-00', '0000-00-00', ''),
(72, '111', 'test2', 'test2', 'test2', '', 'test2', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'USD', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, '', 'Engineering', 'test2', 8, '', '', '', '', '', '', '0000-00-00 00:00:00', '2023-04-06 10:21:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', ''),
(73, '12312', 'asdas', 'asdas', 'asdas', '', 'test', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'USD', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, '', 'PPIC', 'asdasasdasdasdasd', 13, '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2023-04-06 10:45:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2023-04-06 10:45:57', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', ''),
(74, 'test', 'test', 'test', 'test', 'test', 'test', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'USD', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, '', 'Marketing', 'test', 9, '', '', '', '', '', '', '2023-04-06 11:56:49', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', ''),
(75, '0701-872-2000', 'aaa', 'aaa', 'asd', 'asd', 'Server', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'USD', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, '', 'Marketing', 'test_server', 9, '', '', '', '', '', '', '2023-04-11 10:50:27', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', ''),
(76, '0004-00261-90-00-00', 'MAIN SHAFT KMI 9080', 'PT. INDONESIA NIPPON SEIKI', 'asdas', 'asdasd', 'uddenn', 'RM01', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'USD', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, '', 'Marketing', 'Bisa ini mah', 7, '', '', '', '', '', '', '2023-04-11 13:18:16', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2023-04-15 08:30:25', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', ''),
(77, '700-42001a-A01', 'SHAFT,LOCK LEVER,RELEASE,L', 'PT. KIYOKUNI INDONESIA', 'KEPO', 'KEPO', 'uud', 'RM4601', 0, 0, 0, 0, 0, 'RAWMAT', 'MFG1', 'WASHING', 'OQC', 'ROLLING', '', '', '', '', '', '', '', '', '', '', '', 'USD', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, '', 'Marketing', 'EZ dek', 9, '', '', '', '', '', '', '2023-04-11 13:32:51', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', ''),
(78, '1025274-00', 'SHAFT RD PLANET', 'PT. IK PRECISION INDONESIA', 'asd', 'asd', 'asd', 'RM1111', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'USD', '.034400', '', 0, '', 0, 0, 0, 1000, '', 0, 0, '', 'Marketing', 'asd', 1, '', 'Approved by GM HRD IT', 'masok pak eko', 'gantiwoii', 'Mantapp', 'GM lgi ni bos', '2023-04-12 11:12:51', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2023-04-15 08:41:17', '2023-04-15 08:45:25', '2023-04-15 08:48:31', '2023-04-15 08:52:17', '2023-04-15 08:30:08', '2023-04-15 08:55:18', '0000-00-00', '0000-00-00', 'KTG'),
(79, '1025274-00', 'SHAFT RD PLANET', 'PT. IK PRECISION INDONESIA', 'coba', 'coba', 'coba', 'RM1111', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'USD', '.034400', '', 0, '', 0, 0, 0, 1000, '', 0, 0, '', 'Marketing', 'coba', 1, '', 'Waiting Approval GM HRD IT', 'jos', 'Mantapp', 'Asmen PPIC', 'GM ni bos', '2023-04-12 11:15:02', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2023-04-15 08:40:53', '2023-04-15 08:43:16', '2023-04-15 08:48:06', '2023-04-15 08:51:51', '2023-04-15 08:29:53', '2023-04-15 08:54:56', '0000-00-00', '0000-00-00', 'KTG'),
(80, '-00 Desain2', 'JIG SHAFT CARRIAGE', 'PT. INDONESIA EPSON INDUSTRY', 'hehe', '', 'gaga', 'RM4508', 0, 0, 0, 0, 0, 'RAWMAT', 'MFG1', 'CG 1', 'CG 2', 'CG 3', 'CG 4', 'BUFFING', 'BURNISHING', 'WASHING', 'OQC', 'ROLLING', '', '', '', '', '', 'USD', '133.000', '', 0, '', 0, 401.3, 5, 0, '142', 0.416, 0, '', 'Engineering', 'hehe', 8, '', '', '', '', '', '', '0000-00-00 00:00:00', '2023-04-15 10:40:24', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', 'BOX'),
(81, '-00 Desain2', 'JIG SHAFT CARRIAGE', 'PT. INDONESIA EPSON INDUSTRY', 'vzvz', '', 'vava', 'RM4508', 0, 0, 0, 0, 0, 'RAWMAT', 'MFG1', 'CG 1', 'CG 2', 'CG 3', 'CG 4', 'BUFFING', 'BURNISHING', 'WASHING', 'OQC', 'ROLLING', '', '', '', '', '', 'USD', '133.000', '', 0, '', 0, 401.3, 5, 0, '142', 0.416, 0, '', 'PPIC', 'veve', 13, '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2023-04-15 10:55:23', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2023-04-15 10:55:23', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00', 'BOX');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(50) NOT NULL,
  `level_user` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `level_user`) VALUES
(1, 'GM HRD IT'),
(2, 'IT'),
(3, 'GM MKT'),
(4, 'PPIC'),
(5, 'QC DEPT. HEAD'),
(6, 'ASMEN PPIC'),
(7, 'SPV QC'),
(8, 'SPV ENG'),
(9, 'ENGINEERING'),
(10, 'MARKETING'),
(11, 'ENGINEERING'),
(12, 'MARKETING'),
(13, 'PPIC');

-- --------------------------------------------------------

--
-- Table structure for table `newitem`
--

CREATE TABLE `newitem` (
  `id` int(50) NOT NULL,
  `ItemCode` varchar(50) NOT NULL,
  `ItemName` varchar(50) NOT NULL,
  `ForeignName` varchar(50) NOT NULL,
  `ItemsGroupCode` varchar(50) NOT NULL,
  `SalesVATGroup` varchar(50) NOT NULL,
  `VatLiable` varchar(50) NOT NULL,
  `PurchaseItem` varchar(50) NOT NULL,
  `SalesItem` varchar(50) NOT NULL,
  `InventoryItem` varchar(50) NOT NULL,
  `SalesUnit` varchar(50) NOT NULL,
  `currency` varchar(5) NOT NULL,
  `SalesUnitLength` double NOT NULL,
  `SalesUnitWeight` double NOT NULL,
  `PurchaseVatGroup` varchar(50) NOT NULL,
  `DefaultWarehouse` varchar(50) NOT NULL,
  `GLMethod` varchar(50) NOT NULL,
  `ManageStockByWarehouse` varchar(50) NOT NULL,
  `WTLiable` varchar(50) NOT NULL,
  `IssueMethod` varchar(50) NOT NULL,
  `InventoryUOM` varchar(50) NOT NULL,
  `PlanningSystem` varchar(50) NOT NULL,
  `ProcurementMethod` varchar(50) NOT NULL,
  `ComponentWarehouse` varchar(50) NOT NULL,
  `InCosRollup` varchar(50) NOT NULL,
  `ItemPcs` int(50) NOT NULL,
  `UnitPrice` varchar(50) NOT NULL,
  `RMWeightConsume` double NOT NULL,
  `U_MIS_CustCode` varchar(50) NOT NULL,
  `U_MIS_CustName` varchar(50) NOT NULL,
  `U_MIS_JenisItem` varchar(50) NOT NULL,
  `U_MIS_Diameter` double NOT NULL,
  `U_MIS_Length` int(50) NOT NULL,
  `U_MIS_Spec` varchar(50) NOT NULL,
  `U_MIS_StdPacking` int(50) NOT NULL,
  `U_MIS_NextProses` varchar(50) NOT NULL,
  `U_MIS_Packing` varchar(50) NOT NULL,
  `U_MIS_Proses` text NOT NULL,
  `U_MIS_Proses1` text NOT NULL,
  `U_MIS_Proses2` text NOT NULL,
  `U_MIS_Proses3` text NOT NULL,
  `U_MIS_Proses4` text NOT NULL,
  `U_MIS_Proses5` text NOT NULL,
  `U_MIS_Proses6` text NOT NULL,
  `U_MIS_Proses7` text NOT NULL,
  `U_MIS_Proses8` text NOT NULL,
  `U_MIS_Proses9` text NOT NULL,
  `U_MIS_Proses10` text NOT NULL,
  `U_MIS_Proses11` text NOT NULL,
  `U_MIS_Proses12` text NOT NULL,
  `U_MIS_Proses13` text NOT NULL,
  `U_MIS_Proses14` text NOT NULL,
  `U_MIS_Proses15` text NOT NULL,
  `U_MIS_Proses16` text NOT NULL,
  `U_MIS_Subcont` varchar(50) NOT NULL,
  `U_MIS_ROHSFree` varchar(50) NOT NULL,
  `U_MIS_CycleTime` int(50) NOT NULL,
  `U_MIS_RawMat` varchar(50) NOT NULL,
  `U_MIS_BackNo` varchar(50) NOT NULL,
  `rawmatppic` varchar(50) NOT NULL,
  `Lampiran` varchar(50) NOT NULL,
  `id_level` int(50) NOT NULL,
  `catatan_eng` text NOT NULL,
  `catatan_qc` text NOT NULL,
  `catatan_gm` text NOT NULL,
  `keputusan` varchar(50) NOT NULL,
  `tglinputmkt` datetime NOT NULL,
  `tglinputeng` datetime NOT NULL,
  `tglinputqc` datetime NOT NULL,
  `tglinputgm` datetime NOT NULL,
  `tglinputppic` datetime NOT NULL,
  `tglinputit` datetime NOT NULL,
  `model` varchar(50) NOT NULL,
  `pic_mkt` text NOT NULL,
  `mkt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newitem`
--

INSERT INTO `newitem` (`id`, `ItemCode`, `ItemName`, `ForeignName`, `ItemsGroupCode`, `SalesVATGroup`, `VatLiable`, `PurchaseItem`, `SalesItem`, `InventoryItem`, `SalesUnit`, `currency`, `SalesUnitLength`, `SalesUnitWeight`, `PurchaseVatGroup`, `DefaultWarehouse`, `GLMethod`, `ManageStockByWarehouse`, `WTLiable`, `IssueMethod`, `InventoryUOM`, `PlanningSystem`, `ProcurementMethod`, `ComponentWarehouse`, `InCosRollup`, `ItemPcs`, `UnitPrice`, `RMWeightConsume`, `U_MIS_CustCode`, `U_MIS_CustName`, `U_MIS_JenisItem`, `U_MIS_Diameter`, `U_MIS_Length`, `U_MIS_Spec`, `U_MIS_StdPacking`, `U_MIS_NextProses`, `U_MIS_Packing`, `U_MIS_Proses`, `U_MIS_Proses1`, `U_MIS_Proses2`, `U_MIS_Proses3`, `U_MIS_Proses4`, `U_MIS_Proses5`, `U_MIS_Proses6`, `U_MIS_Proses7`, `U_MIS_Proses8`, `U_MIS_Proses9`, `U_MIS_Proses10`, `U_MIS_Proses11`, `U_MIS_Proses12`, `U_MIS_Proses13`, `U_MIS_Proses14`, `U_MIS_Proses15`, `U_MIS_Proses16`, `U_MIS_Subcont`, `U_MIS_ROHSFree`, `U_MIS_CycleTime`, `U_MIS_RawMat`, `U_MIS_BackNo`, `rawmatppic`, `Lampiran`, `id_level`, `catatan_eng`, `catatan_qc`, `catatan_gm`, `keputusan`, `tglinputmkt`, `tglinputeng`, `tglinputqc`, `tglinputgm`, `tglinputppic`, `tglinputit`, `model`, `pic_mkt`, `mkt`) VALUES
(35, 'sdasdas', 'asdas', '', '', '', '', '', '', '', 'Pcs', 'USD', 0, 213, '', '', '', '', '', '', '', '', '', '', '', 0, '21', 123, '', 'asdas', 'LONG PART', 0, 0, 'asdas', 321, '', 'asdas', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Yes', 21, 'asds', '', '312', '', 9, '123', '', '', 'Disapproved by Eng', '2023-04-06 11:58:20', '2023-04-06 11:59:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2023-04-06 12:00:13', '0000-00-00 00:00:00', 'asasda', 'asda', 'asd'),
(36, 'test', 'test', '', '', '', '', '', '', '', 'Pcs', 'USD', 0, 0, '', '', '', '', '', '', '', '', '', '', '', 0, '12', 0, '', 'test', 'SMALL PART', 0, 0, '213', 0, '', '321', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Yes', 0, '123', '', '', '', 10, '', '', '', '', '2023-04-06 14:18:47', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'test', 'test', 'test'),
(37, 'aaa', 'aaa', '', '', '', '', '', '', '', 'Pcs', 'USD', 0, 12, '', '', '', '', '', '', '', '', '', '', '', 2, '2', 0, '', 'aaa', 'SMALL PART', 10, 10, 'rm1111', 12, '', 'aaa', '', '1', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Yes', 12, 'rm111', '', '', '', 3, 'good', 'mantap', 'niceee', 'Disapproved by GM MKT', '2023-04-14 16:28:47', '2023-04-15 07:40:00', '2023-04-15 07:43:26', '2023-04-15 02:46:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'aaa', 'aaa', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nik` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `section` varchar(50) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `id_level` int(50) NOT NULL,
  `job` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nik`, `nama`, `section`, `username`, `password`, `id_level`, `job`) VALUES
(1, '123456', 'Azriel & Ida', 'Marketing', 'mk01', 'marketing_nsi', 10, 'Request (NIM)'),
(2, '123456', 'Desti & Wahyu', 'Enginering', 'eng01', '-8', 9, 'Request, Check and Approved (NIM)'),
(3, '123456', 'Yana', 'SPV QC', 'spv_qc', 'yana_nsi', 5, 'Check and Approved (NIM)'),
(5, '123456', 'Bambang', 'Warehouse (PPIC)', 'wh01', 'warehouse_nsi', 4, 'Input,Check RM and RM Weight Consumn (NIM & MCI)'),
(6, '123456', 'Alvin', 'Admin (IT)', 'admin', 'n1h0n531ki', 2, 'Input to SAP and Approved (NIM & MCI)'),
(8, '234', 'Yujiro Takeuchi', 'GM Marketing', 'takeuchi', 'Y_T4k3uch1', 3, 'Check and Approved (NIM & MCI)'),
(9, '123456789', 'Widodo', 'GM HRD IT', 'widodo', 'W1d0d0_B_H', 1, 'Check and Approved (NIM & MCI)'),
(10, '123456', 'Desti & Wahyu', 'Enginering', 'eng_01', 'engineering_nsi', 11, 'Request (MCI)'),
(11, '123456', 'Sumadi', 'SPV Enginering', 'spveng', 'sumadi_nsi', 8, 'Check and Approved (MCI)'),
(12, '123456', 'Yana', 'SPV QC', 'spvqc', 'yana_nsi', 7, 'Check and Approved (MCI)'),
(13, '1234', 'Cep', 'Asistem Management PPIC', 'cep', 'C_Suw4nd1', 6, 'Check and Approved (MCI)'),
(14, '123456', 'Azriel & Ida', 'Marketing', 'mk_01', 'marketing_nsi', 12, 'Request (MCI)'),
(15, '11829828', 'Bambang', 'Warehouse (PPIC)', 'wh_01', 'warehouse_nsi', 13, 'Request (MCI)');

-- --------------------------------------------------------

--
-- Table structure for table `user_change`
--

CREATE TABLE `user_change` (
  `id` int(11) NOT NULL,
  `nik` varchar(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `section` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id_level` int(5) NOT NULL,
  `job` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_change`
--

INSERT INTO `user_change` (`id`, `nik`, `nama`, `section`, `username`, `password`, `id_level`, `job`) VALUES
(1, '123456', 'Azriel & Ida', 'Marketing', 'mk01', 'marketing_nsi', 0, 'Request (NIM)'),
(2, '123456', 'Desti & Wahyu', 'Enginering', 'eng01', 'engineering_nsi', 0, 'Request, Check and Approved (NIM)'),
(3, '123456', 'Yana', 'SPV QC', 'spv_qc', 'yana_nsi', 0, 'Check and Approved (NIM)'),
(5, '123456', 'Bambang', 'Warehouse (PPIC)', 'wh01', 'warehouse_nsi', 0, 'Input,Check RM and RM Weight Consumn (NIM & MCI)'),
(6, '123456', 'Alvin', 'Admin (IT)', 'admin', 'n1h0n531ki', 2, 'Input to SAP and Approved (NIM & MCI)'),
(8, '234', 'Yujiro Takeuchi', 'GM Marketing', 'takeuchi', 'Y_T4k3uch1', 3, 'Check and Approved (NIM & MCI)'),
(9, '123456789', 'Widodo', 'GM HRD IT', 'widodo', 'W1d0d0_B_H', 1, 'Check and Approved (NIM & MCI)'),
(10, '123456', 'Desti & Wahyu', 'Enginering', 'eng_01', 'engineering_nsi', 8, 'Request (MCI)'),
(11, '123456', 'Sumadi', 'SPV Enginering', 'spveng', 'sumadi_nsi', 6, 'Check and Approved (MCI)'),
(12, '123456', 'Yana', 'SPV QC', 'spvqc', 'yana_nsi', 5, 'Check and Approved (MCI)'),
(13, '1234', 'Cep', 'Asistem Management P', 'cep', 'C_Suw4nd1', 4, 'Check and Approved (MCI)'),
(14, '123456', 'Azriel & Ida', 'Marketing', 'mk_01', 'marketing_nsi', 9, 'Request (MCI)'),
(15, '11829828', 'Bambang', 'Warehouse (PPIC)', 'wh_01', 'warehouse_nsi', 7, 'Request (MCI)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alur`
--
ALTER TABLE `alur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itemac`
--
ALTER TABLE `itemac`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_level` (`id_level`);

--
-- Indexes for table `itembc`
--
ALTER TABLE `itembc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_level` (`id_level`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `newitem`
--
ALTER TABLE `newitem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_level` (`id_level`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_level` (`id_level`);

--
-- Indexes for table `user_change`
--
ALTER TABLE `user_change`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alur`
--
ALTER TABLE `alur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `departement`
--
ALTER TABLE `departement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `itemac`
--
ALTER TABLE `itemac`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `itembc`
--
ALTER TABLE `itembc`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `newitem`
--
ALTER TABLE `newitem`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12348;

--
-- AUTO_INCREMENT for table `user_change`
--
ALTER TABLE `user_change`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
