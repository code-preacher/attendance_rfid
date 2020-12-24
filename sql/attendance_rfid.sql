-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2019 at 02:34 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance_rfid`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `matno` varchar(200) NOT NULL,
  `timein` varchar(200) NOT NULL,
  `timeout` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `user` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `matno` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `matno`) VALUES
(1, 'BABALOLA ABDULWAHEED', 'NAITES/COM/ND17/842'),
(2, 'OGBOHE ABDULLAHI IDRIS', 'NAITES/COM/ND17/843'),
(3, 'OGBA JOHN-LEONARD CHIKA', 'NAITES/COM/ND17/844'),
(4, 'AGBOYINU JONAH PEDEPO', 'NAITES/COM/ND17/846'),
(5, 'HYONG GEOFREY ALI', 'NAITES/COM/ND17/847'),
(6, 'DANJUMA PONJUL', 'NAITES/COM/ND17/848'),
(7, 'SAMAILA EMMANUEL', 'NAITES/COM/ND17/849'),
(8, 'KAZEEM ISHIAKU', 'NAITES/COM/ND17/850'),
(9, 'IBRAHIM MOSHOOD', 'NAITES/COM/ND17/851'),
(10, 'EZEKIEL FRIDAY', 'NAITES/COM/ND17/852'),
(11, 'PETER HELEN', 'NAITES/COM/ND17/853'),
(12, 'FAKOLADE DOTUN SOLOMON', 'NAITES/COM/ND17/854'),
(13, 'EJEH SAMUEL GODWIN', 'NAITES/COM/ND17/855'),
(14, 'ISAH ABDULLAHI SALEH', 'NAITES/COM/ND17/856'),
(15, 'NASIRU DAHIRU MAIGANA', 'NAITES/COM/ND17/857'),
(16, 'ISHAKU REUBEN', 'NAITES/COM/ND17/858'),
(17, 'THOMAS ISHAKU BATTA', 'NAITES/COM/ND17/859'),
(18, 'UGBUDIA FEMI WILFRED', 'NAITES/COM/ND17/860'),
(19, 'ERNEST OKA CHIBUZOR', 'NAITES/COM/ND17/861'),
(20, 'ILO GLORIA CHINWENDU', 'NAITES/COM/ND17/862');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tt`

-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tt`
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
