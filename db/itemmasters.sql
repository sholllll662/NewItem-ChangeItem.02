-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 03:22 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itemmasters`
--

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
  `cutoffsales` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itemac`
--

INSERT INTO `itemac` (`id`, `part_no`, `part_name`, `customer`, `reason`, `pic`, `material_rmcode`, `rm_stock`, `rm_stockJ`, `rm_weight`, `weight_consum`, `rm_use`, `proces1`, `proces2`, `proces3`, `proces4`, `proces5`, `proces6`, `proces7`, `proces8`, `proces9`, `proces10`, `proces11`, `proces12`, `proces13`, `proces14`, `proces15`, `proces16`, `currency`, `unit_price`, `reason_price`, `part_stock`, `amalgamasi`, `part_stockJ`, `unit_length`, `item_pcs`, `std_packing`, `ct`, `weight_part`, `weightconsumn`, `rawmatppic`, `dept`, `model`, `id_level`, `lampiran`, `keputusan`, `tglmkt`, `tgleng`, `tglppic2`, `tglspveng`, `tglqc`, `tglppic`, `tglgm`, `tglppic3`, `tglit`, `cutoffprod`, `cutoffsales`) VALUES
(1, '1904026-00', 'SHAFT,RESIST', 'PT.INDONESIA EPSON INDUSTRY', 'FOLLOW BASIC QUOTATION', 'Evin Dondri', '', 0, 0, 0, 0, 0, 'RAWMAT', 'MFG1', 'DEBURRY', 'STEP CG1', 'STEP CG2', 'CG', 'PLATING', 'PIN G. CHECK', 'BEARING 100%', 'OQC', 'ROLLING', '', '', '', '', '', '', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, '', 'Marketing', 'GARDA', 13, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2022-12-14 11:25:30', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00', '2022-12-06'),
(2, '1904026-01', 'SHAFT,RESIST', 'PT.INDONESIA EPSON INDUSTRY', 'FOLLOW BASIC QUOTATION', 'BAMBANG', '', 0, 0, 0, 0, 0, 'RAWMAT', 'MFG2', 'DEBURRY', 'STEP CG1', 'STEP CG2', 'CG', 'PLATING', 'PIN G. CHECK', 'BEARING 100%', 'OQC', 'ROLLING', '', '', '', '', '', '', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, '', 'PPIC', 'GARDA', 1, '', 'Approved by GM HRD IT', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2022-12-14 11:25:30', '2022-12-14 11:34:36', '2022-12-14 11:36:03', '2022-12-14 11:37:10', '2022-12-14 11:38:38', '2022-12-14 11:39:13', '2022-12-14 11:39:52', '0000-00-00', '2022-12-07'),
(3, '1904026-02', 'SHAFT,RESIST', 'PT.INDONESIA EPSON INDUSTRY', 'FOLLOW BASIC QUOTATION', 'DESTI', '', 0, 0, 0, 0, 0, 'RAWMAT', 'MFG3', 'DEBURRY', 'STEP CG1', 'STEP CG2', 'CG', 'PLATING', 'PIN G. CHECK', 'BEARING 100%', 'OQC', 'ROLLING', '', '', '', '', '', '', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, '', 'Engineering', 'GARDA', 13, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2022-12-14 11:25:30', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00', '2022-12-08'),
(4, '1904026-00', 'SHAFT,RESIST', 'PT.INDONESIA EPSON INDUSTRY', 'FOLLOW BASIC QUOTATION', 'Evin Dondri', '', 0, 0, 0, 0, 0, 'RAWMAT', 'MFG1', 'DEBURRY', 'STEP CG1', 'STEP CG2', 'CG', 'PLATING', 'PIN G. CHECK', 'BEARING 100%', 'OQC', 'ROLLING', '', '', '', '', '', '', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, '', 'Marketing', 'GARDA', 2, '', 'Waiting Register to SAP', '2022-12-14 11:31:40', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2022-12-14 11:34:23', '2022-12-14 11:35:58', '2022-12-14 11:37:02', '2022-12-14 11:38:33', '2022-12-14 11:39:17', '0000-00-00 00:00:00', '0000-00-00', '2022-12-06'),
(5, '1904026-01', 'SHAFT,RESIST', 'PT.INDONESIA EPSON INDUSTRY', 'FOLLOW BASIC QUOTATION', 'BAMBANG', '', 0, 0, 0, 0, 0, 'RAWMAT', 'MFG2', 'DEBURRY', 'STEP CG1', 'STEP CG2', 'CG', 'PLATING', 'PIN G. CHECK', 'BEARING 100%', 'OQC', 'ROLLING', '', '', '', '', '', '', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, '', 'PPIC', 'GARDA', 8, '', 'Approved By SPV Eng', '2022-12-14 11:31:40', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2022-12-14 11:35:03', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00', '2022-12-07'),
(6, '1904026-02', 'SHAFT,RESIST', 'PT.INDONESIA EPSON INDUSTRY', 'FOLLOW BASIC QUOTATION', 'DESTI', '', 0, 0, 0, 0, 0, 'RAWMAT', 'MFG3', 'DEBURRY', 'STEP CG1', 'STEP CG2', 'CG', 'PLATING', 'PIN G. CHECK', 'BEARING 100%', 'OQC', 'ROLLING', '', '', '', '', '', '', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, '', 'Engineering', 'GARDA', 7, '', 'Approved By SPV QC', '2022-12-14 11:31:40', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2022-12-14 11:34:58', '2022-12-14 11:36:22', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00', '2022-12-08'),
(7, '1904026-00', 'SHAFT,RESIST', 'PT.INDONESIA EPSON INDUSTRY', 'FOLLOW BASIC QUOTATION', 'Evin Dondri', '', 0, 0, 0, 0, 0, 'RAWMAT', 'MFG1', 'DEBURRY', 'STEP CG1', 'STEP CG2', 'CG', 'PLATING', 'PIN G. CHECK', 'BEARING 100%', 'OQC', 'ROLLING', '', '', '', '', '', '', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, '', 'Marketing', 'GARDA', 3, '', 'Approved By GM MKT', '0000-00-00 00:00:00', '2022-12-14 11:32:25', '0000-00-00 00:00:00', '2022-12-14 11:34:51', '2022-12-14 11:36:17', '2022-12-14 11:36:57', '2022-12-14 11:38:50', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00', '2022-12-06'),
(8, '1904026-01', 'SHAFT,RESIST', 'PT.INDONESIA EPSON INDUSTRY', 'FOLLOW BASIC QUOTATION', 'BAMBANG', '', 0, 0, 0, 0, 0, 'RAWMAT', 'MFG2', 'DEBURRY', 'STEP CG1', 'STEP CG2', 'CG', 'PLATING', 'PIN G. CHECK', 'BEARING 100%', 'OQC', 'ROLLING', '', '', '', '', '', '', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, '', 'PPIC', 'GARDA', 6, '', 'Approved By ASMEN PPIC', '0000-00-00 00:00:00', '2022-12-14 11:32:25', '0000-00-00 00:00:00', '2022-12-14 11:33:54', '2022-12-14 11:36:12', '2022-12-14 11:36:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00', '2022-12-07'),
(9, '1904026-02', 'SHAFT,RESIST', 'PT.INDONESIA EPSON INDUSTRY', 'FOLLOW BASIC QUOTATION', 'DESTI', '', 0, 0, 0, 0, 0, 'RAWMAT', 'MFG3', 'DEBURRY', 'STEP CG1', 'STEP CG2', 'CG', 'PLATING', 'PIN G. CHECK', 'BEARING 100%', 'OQC', 'ROLLING', '', '', '', '', '', '', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, '', 'Engineering', 'GARDA', 1, '', 'Approved by GM HRD IT', '0000-00-00 00:00:00', '2022-12-14 11:32:25', '0000-00-00 00:00:00', '2022-12-14 11:33:43', '2022-12-14 11:35:40', '2022-12-14 11:36:48', '2022-12-14 11:38:21', '2022-12-14 11:39:25', '2022-12-14 11:39:47', '0000-00-00', '2022-12-08');

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
  `cutoffsales` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itembc`
--

INSERT INTO `itembc` (`id`, `part_no`, `part_name`, `customer`, `reason`, `pic`, `material_rmcode`, `rm_stock`, `rm_stockJ`, `rm_weight`, `weight_consum`, `rm_use`, `proces1`, `proces2`, `proces3`, `proces4`, `proces5`, `proces6`, `proces7`, `proces8`, `proces9`, `proces10`, `proces11`, `proces12`, `proces13`, `proces14`, `proces15`, `proces16`, `currency`, `unit_price`, `reason_price`, `part_stock`, `amalgamasi`, `part_stockJ`, `unit_length`, `item_pcs`, `std_packing`, `ct`, `weight_part`, `weightconsumn`, `rawmatppic`, `dept`, `model`, `id_level`, `lampiran`, `keputusan`, `tglmkt`, `tgleng`, `tglppic2`, `tglspveng`, `tglqc`, `tglppic`, `tglgm`, `tglppic3`, `tglit`, `cutoffprod`, `cutoffsales`) VALUES
(1, '1904026-00', 'SHAFT,RESIST', 'PT.INDONESIA EPSON INDUSTRY', 'FOLLOW BASIC QUOTATION', 'Evin Dondri', '', 0, 0, 0, 0, 0, 'RAWMAT', 'MFG1', 'DEBURRY', 'STEP CG1', 'STEP CG2', 'CG', 'PLATING', 'BEARING 100%', 'OQC', 'ROLLING', '', '', '', '', '', '', '', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, '', 'Marketing', 'GARDA', 13, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2022-12-14 11:25:30', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00', '2022-12-06'),
(2, '1904026-01', 'SHAFT,RESIST', 'PT.INDONESIA EPSON INDUSTRY', 'FOLLOW BASIC QUOTATION', 'BAMBANG', '', 0, 0, 0, 0, 0, 'RAWMAT', 'MFG2', 'DEBURRY', 'STEP CG1', 'STEP CG2', 'CG', 'PLATING', 'BEARING 100%', 'OQC', 'ROLLING', '', '', '', '', '', '', '', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, '', 'PPIC', 'GARDA', 1, '', 'Approved by GM HRD IT', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2022-12-14 11:25:30', '2022-12-14 11:34:36', '2022-12-14 11:36:03', '2022-12-14 11:37:10', '2022-12-14 11:38:38', '2022-12-14 11:39:13', '2022-12-14 11:39:52', '0000-00-00', '2022-12-07'),
(3, '1904026-02', 'SHAFT,RESIST', 'PT.INDONESIA EPSON INDUSTRY', 'FOLLOW BASIC QUOTATION', 'DESTI', '', 0, 0, 0, 0, 0, 'RAWMAT', 'MFG3', 'DEBURRY', 'STEP CG1', 'STEP CG2', 'CG', 'PLATING', 'BEARING 100%', 'OQC', 'ROLLING', '', '', '', '', '', '', '', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, '', 'Engineering', 'GARDA', 13, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2022-12-14 11:25:30', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00', '2022-12-08'),
(4, '1904026-00', 'SHAFT,RESIST', 'PT.INDONESIA EPSON INDUSTRY', 'FOLLOW BASIC QUOTATION', 'Evin Dondri', '', 0, 0, 0, 0, 0, 'RAWMAT', 'MFG1', 'DEBURRY', 'STEP CG1', 'STEP CG2', 'CG', 'PLATING', 'BEARING 100%', 'OQC', 'ROLLING', '', '', '', '', '', '', '', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, '', 'Marketing', 'GARDA', 2, '', 'Waiting Register to SAP', '2022-12-14 11:31:40', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2022-12-14 11:34:23', '2022-12-14 11:35:58', '2022-12-14 11:37:02', '2022-12-14 11:38:33', '2022-12-14 11:39:17', '0000-00-00 00:00:00', '0000-00-00', '2022-12-06'),
(5, '1904026-01', 'SHAFT,RESIST', 'PT.INDONESIA EPSON INDUSTRY', 'FOLLOW BASIC QUOTATION', 'BAMBANG', '', 0, 0, 0, 0, 0, 'RAWMAT', 'MFG2', 'DEBURRY', 'STEP CG1', 'STEP CG2', 'CG', 'PLATING', 'BEARING 100%', 'OQC', 'ROLLING', '', '', '', '', '', '', '', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, '', 'PPIC', 'GARDA', 8, '', 'Approved By SPV Eng', '2022-12-14 11:31:40', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2022-12-14 11:35:03', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00', '2022-12-07'),
(6, '1904026-02', 'SHAFT,RESIST', 'PT.INDONESIA EPSON INDUSTRY', 'FOLLOW BASIC QUOTATION', 'DESTI', '', 0, 0, 0, 0, 0, 'RAWMAT', 'MFG3', 'DEBURRY', 'STEP CG1', 'STEP CG2', 'CG', 'PLATING', 'BEARING 100%', 'OQC', 'ROLLING', '', '', '', '', '', '', '', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, '', 'Engineering', 'GARDA', 7, '', 'Approved By SPV QC', '2022-12-14 11:31:40', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2022-12-14 11:34:58', '2022-12-14 11:36:22', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00', '2022-12-08'),
(7, '1904026-00', 'SHAFT,RESIST', 'PT.INDONESIA EPSON INDUSTRY', 'FOLLOW BASIC QUOTATION', 'Evin Dondri', '', 0, 0, 0, 0, 0, 'RAWMAT', 'MFG1', 'DEBURRY', 'STEP CG1', 'STEP CG2', 'CG', 'PLATING', 'BEARING 100%', 'OQC', 'ROLLING', '', '', '', '', '', '', '', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, '', 'Marketing', 'GARDA', 3, '', 'Approved By GM MKT', '0000-00-00 00:00:00', '2022-12-14 11:32:25', '0000-00-00 00:00:00', '2022-12-14 11:34:51', '2022-12-14 11:36:17', '2022-12-14 11:36:57', '2022-12-14 11:38:50', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00', '2022-12-06'),
(8, '1904026-01', 'SHAFT,RESIST', 'PT.INDONESIA EPSON INDUSTRY', 'FOLLOW BASIC QUOTATION', 'BAMBANG', '', 0, 0, 0, 0, 0, 'RAWMAT', 'MFG2', 'DEBURRY', 'STEP CG1', 'STEP CG2', 'CG', 'PLATING', 'BEARING 100%', 'OQC', 'ROLLING', '', '', '', '', '', '', '', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, '', 'PPIC', 'GARDA', 6, '', 'Approved By ASMEN PPIC', '0000-00-00 00:00:00', '2022-12-14 11:32:25', '0000-00-00 00:00:00', '2022-12-14 11:33:54', '2022-12-14 11:36:12', '2022-12-14 11:36:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00', '2022-12-07'),
(9, '1904026-02', 'SHAFT,RESIST', 'PT.INDONESIA EPSON INDUSTRY', 'FOLLOW BASIC QUOTATION', 'DESTI', '', 0, 0, 0, 0, 0, 'RAWMAT', 'MFG3', 'DEBURRY', 'STEP CG1', 'STEP CG2', 'CG', 'PLATING', 'BEARING 100%', 'OQC', 'ROLLING', '', '', '', '', '', '', '', '', '', 0, '', 0, 0, 0, 0, '', 0, 0, '', 'Engineering', 'GARDA', 1, '', 'Approved by GM HRD IT', '0000-00-00 00:00:00', '2022-12-14 11:32:25', '0000-00-00 00:00:00', '2022-12-14 11:33:43', '2022-12-14 11:35:40', '2022-12-14 11:36:48', '2022-12-14 11:38:21', '2022-12-14 11:39:25', '2022-12-14 11:39:47', '0000-00-00', '2022-12-08');

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
(1, '1904026-00', 'SHAFT,RESIST', '', '', '', '', '', '', '', 'PCS', '¥', 0.256, 0.23, '', '', '', '', '', '', '', '', '', '', '', 200, '2500', 0.871, '', 'PT.INDONESIA EPSON INDUSTRY', 'SMALL PART', 0.29, 0, '1215MS', 250, '', 'BOX', '', 'RAWMAT', 'MFG1', 'DEBURRY', 'OQC', 'ROLLING', '', '', '', '', '', '', '', '', '', '', '', 'KAWAI ($ 0.0091)', 'YES', 36, 'RM1331', '', 'RM1107', '1867567-00.pdf', 1, '', '', '', 'Approved by GM HRD IT', '2022-12-15 11:03:06', '2022-12-15 11:10:08', '2022-12-15 11:10:46', '2022-12-15 05:11:22', '2022-12-15 11:12:22', '2022-12-15 11:12:48', 'GARDA', 'Evin Dondri', 'Marketing'),
(3, '1904026-00', 'SHAFT,RESIST', '', '', '', '', '', '', '', 'PCS', '$', 0.256, 0, '', '', '', '', '', '', '', '', '', '', '', 200, '2500', 0, '', 'PT.INDONESIA EPSON INDUSTRY', 'SMALL PART', 0.29, 0, '1215MS', 0, '', 'BOX', '', 'RAWMAT', 'MFG1', 'DEBURRY', 'OQC', 'ROLLING', '', '', '', '', '', '', '', '', '', '', '', 'KAWAI ($ 0.0091)', 'YES', 0, 'RM1331', '', '', '', 10, '', '', '', '', '2022-12-16 09:02:08', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'GARDA', 'Evin Dondri', 'Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nik` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `id_level` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nik`, `nama`, `username`, `password`, `id_level`) VALUES
(1, '123456', 'Evin & Ida', 'mk01', 'marketing_nsi', 10),
(2, '123456', 'Desti & Wahyu', 'eng01', 'engineering_nsi', 9),
(3, '123456', 'Yana', 'spv_qc', 'yana_nsi', 5),
(5, '123456', 'Bambang', 'wh01', 'warehouse_nsi', 4),
(6, '123456', 'Alvin', 'admin', 'n1h0n531ki', 2),
(8, '234', 'Yujiro Takeuchi', 'takeuchi', 'Y_T4k3uch1', 3),
(9, '123456789', 'Widodo', 'widodo', 'W1d0d0_B_H', 1),
(10, '123456', 'Desti & Wahyu', 'eng_01', 'engineering_nsi', 11),
(11, '123456', 'Sumadi', 'spveng', 'sumadi_nsi', 8),
(12, '123456', 'Yana', 'spvqc', 'yana_nsi', 7),
(13, '1234', 'Cep', 'cep', 'C_Suw4nd1', 6),
(14, '123456', 'Evin & Ida', 'mk_01', 'marketing_nsi', 12),
(15, '11829828', 'Bambang', 'wh_01', 'warehouse_nsi', 13);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `itembc`
--
ALTER TABLE `itembc`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `newitem`
--
ALTER TABLE `newitem`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12348;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
