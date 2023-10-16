-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2023 at 08:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barangay`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(10) NOT NULL,
  `fullName` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `image` varchar(255) NOT NULL,
  `userLevel` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `announcementId` int(10) NOT NULL,
  `userId` int(10) NOT NULL,
  `title` varchar(55) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `createdAt` datetime(6) NOT NULL,
  `status` varchar(20) NOT NULL,
  `youtubeLink` varchar(255) NOT NULL,
  `approvedAt` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `barangaysetting`
--

CREATE TABLE `barangaysetting` (
  `settingId` int(10) NOT NULL,
  `barangayName` varchar(55) NOT NULL,
  `barangayDesc` varchar(255) NOT NULL,
  `barangayLogo` varchar(255) NOT NULL,
  `barangayBg` varchar(255) NOT NULL,
  `title1` varchar(55) NOT NULL,
  `link1` varchar(255) NOT NULL,
  `title2` varchar(55) NOT NULL,
  `link2` varchar(255) NOT NULL,
  `title3` varchar(55) NOT NULL,
  `link3` varchar(255) NOT NULL,
  `title4` varchar(55) NOT NULL,
  `link4` varchar(255) NOT NULL,
  `createdAt` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blotter`
--

CREATE TABLE `blotter` (
  `blotterId` int(10) NOT NULL,
  `userId` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `complainant` varchar(55) NOT NULL,
  `username` varchar(55) NOT NULL,
  `complainee` varchar(55) NOT NULL,
  `address` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `caseStatus` varchar(20) NOT NULL,
  `sessionStatus1` varchar(10) NOT NULL,
  `dateTime1` datetime(6) NOT NULL,
  `audio1` varchar(255) NOT NULL,
  `evidence1` varchar(255) NOT NULL,
  `sessionStatus2` varchar(10) NOT NULL,
  `dateTime2` datetime(6) NOT NULL,
  `audio2` varchar(255) NOT NULL,
  `evidence2` varchar(255) NOT NULL,
  `sessionStatus3` varchar(10) NOT NULL,
  `dateTime3` datetime(6) NOT NULL,
  `audio3` varchar(255) NOT NULL,
  `evidence3` varchar(255) NOT NULL,
  `sessionStatus4` varchar(10) NOT NULL,
  `dateTime4` datetime(6) NOT NULL,
  `audio4` varchar(255) NOT NULL,
  `evidence4` varchar(255) NOT NULL,
  `sessionStatus5` varchar(10) NOT NULL,
  `dateTime5` datetime(6) NOT NULL,
  `audio5` varchar(255) NOT NULL,
  `evidence5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `businessaccount`
--

CREATE TABLE `businessaccount` (
  `businessId` int(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `businessName` varchar(80) NOT NULL,
  `businessType` varchar(80) NOT NULL,
  `businessRequirement` varchar(80) NOT NULL,
  `ownerName` varchar(55) NOT NULL,
  `businessStructure` varchar(55) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(55) NOT NULL,
  `accountLevel` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `businessdocument`
--

CREATE TABLE `businessdocument` (
  `businessDocuId` int(10) NOT NULL,
  `businessId` int(10) NOT NULL,
  `businessName` varchar(55) NOT NULL,
  `businessType` varchar(55) NOT NULL,
  `businessRequirement` varchar(55) NOT NULL,
  `businessAddress` varchar(255) NOT NULL,
  `ownerName` varchar(55) NOT NULL,
  `businessStructure` varchar(255) NOT NULL,
  `username` varchar(55) NOT NULL,
  `document` varchar(55) NOT NULL,
  `documentType` varchar(55) NOT NULL,
  `documentReason` varchar(255) NOT NULL,
  `createdAt` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactId` int(10) NOT NULL,
  `title` varchar(30) NOT NULL,
  `contactNo` int(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `documentId` int(10) NOT NULL,
  `userId` int(10) NOT NULL,
  `status` int(20) NOT NULL,
  `firstName` varchar(55) NOT NULL,
  `username` varchar(30) NOT NULL,
  `zone` varchar(30) NOT NULL,
  `village` varchar(30) NOT NULL,
  `lot` varchar(30) NOT NULL,
  `street` varchar(30) NOT NULL,
  `buildingNo` varchar(30) NOT NULL,
  `birthDate` varchar(30) NOT NULL,
  `document` varchar(30) NOT NULL,
  `documentType` varchar(30) NOT NULL,
  `documentReason` varchar(30) NOT NULL,
  `createdAt` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `health`
--

CREATE TABLE `health` (
  `healthId` int(10) NOT NULL,
  `userId` int(10) NOT NULL,
  `barangayId` int(10) NOT NULL,
  `houseId` int(10) NOT NULL,
  `familyId` int(10) NOT NULL,
  `village` varchar(20) NOT NULL,
  `street` varchar(20) NOT NULL,
  `lot` varchar(20) NOT NULL,
  `buildingNo` varchar(20) NOT NULL,
  `zone` varchar(20) NOT NULL,
  `contactNo` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `userId` int(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `familyId` varchar(10) NOT NULL,
  `barangayId` varchar(10) NOT NULL,
  `houseId` varchar(10) NOT NULL,
  `firstName` varchar(55) NOT NULL,
  `middleName` varchar(55) NOT NULL,
  `lastName` varchar(55) NOT NULL,
  `birthDate` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `lgbtq` varchar(20) NOT NULL,
  `education` varchar(55) NOT NULL,
  `currentlyStudying` varchar(20) NOT NULL,
  `pwd` varchar(10) NOT NULL,
  `disability` varchar(33) NOT NULL,
  `work` varchar(55) NOT NULL,
  `maritalStatus` varchar(55) NOT NULL,
  `informalSettler` varchar(10) NOT NULL,
  `electricity` varchar(10) NOT NULL,
  `water` varchar(10) NOT NULL,
  `zone` varchar(10) NOT NULL,
  `village` varchar(33) NOT NULL,
  `street` varchar(55) NOT NULL,
  `lot` varchar(10) NOT NULL,
  `buildingNo` varchar(33) NOT NULL,
  `contactNo` varchar(20) NOT NULL,
  `email` varchar(55) NOT NULL,
  `barangaySince` varchar(33) NOT NULL,
  `registeredVoter` varchar(10) NOT NULL,
  `inBarangay` varchar(10) NOT NULL,
  `whatBarangay` varchar(10) NOT NULL,
  `familyHead` varchar(20) NOT NULL,
  `familyRelation` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(55) NOT NULL,
  `validId` varchar(255) NOT NULL,
  `selfie` varchar(255) NOT NULL,
  `accountLevel` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`announcementId`);

--
-- Indexes for table `barangaysetting`
--
ALTER TABLE `barangaysetting`
  ADD PRIMARY KEY (`settingId`);

--
-- Indexes for table `blotter`
--
ALTER TABLE `blotter`
  ADD PRIMARY KEY (`blotterId`);

--
-- Indexes for table `businessaccount`
--
ALTER TABLE `businessaccount`
  ADD PRIMARY KEY (`businessId`);

--
-- Indexes for table `businessdocument`
--
ALTER TABLE `businessdocument`
  ADD PRIMARY KEY (`businessDocuId`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactId`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`documentId`);

--
-- Indexes for table `health`
--
ALTER TABLE `health`
  ADD PRIMARY KEY (`healthId`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announcementId` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barangaysetting`
--
ALTER TABLE `barangaysetting`
  MODIFY `settingId` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blotter`
--
ALTER TABLE `blotter`
  MODIFY `blotterId` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `businessaccount`
--
ALTER TABLE `businessaccount`
  MODIFY `businessId` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `businessdocument`
--
ALTER TABLE `businessdocument`
  MODIFY `businessDocuId` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contactId` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `documentId` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `health`
--
ALTER TABLE `health`
  MODIFY `healthId` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `userId` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
