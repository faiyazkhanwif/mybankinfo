-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2021 at 09:53 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mybankinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `areaID` int(11) NOT NULL,
  `areaname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`areaID`, `areaname`) VALUES
(1, 'Mirpur 2'),
(6, 'Banani'),
(7, 'Khilgaon'),
(11, 'Motijhil');

-- --------------------------------------------------------

--
-- Table structure for table `atms`
--

CREATE TABLE `atms` (
  `atmID` int(11) NOT NULL,
  `areaID` int(11) NOT NULL,
  `bankID` int(11) NOT NULL,
  `address` varchar(600) NOT NULL,
  `map` varchar(600) NOT NULL,
  `contact` varchar(600) NOT NULL,
  `addinfo` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atms`
--

INSERT INTO `atms` (`atmID`, `areaID`, `bankID`, `address`, `map`, `contact`, `addinfo`) VALUES
(3, 6, 1, 'B03-A-15-01, Menarwa 3A, No.3, Jalan Bangsar, Kampung Haji Abdullah Hukum', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63739.495339217116!2d101.70859519999999!3d3.1686656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37d12d669c1f%3A0x9e3afdd17c8a9056!2sPetronas%20Twin%20Towers!5e0!3m2!1sen!2smy!4v1638475872059!5m2!1sen!2smy\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '+11121721029', 'bfbfbfbfb'),
(4, 6, 1, 'Jalan pantai murni 1, Pantai Hillpark Phase 2, Pantai Hillpark', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63739.495339217116!2d101.70859519999999!3d3.1686656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37d12d669c1f%3A0x9e3afdd17c8a9056!2sPetronas%20Twin%20Towers!5e0!3m2!1sen!2smy!4v1638475872059!5m2!1sen!2smy\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '124141414244', 'ccc'),
(5, 1, 1, 'Unit: B5-21-4, Pantai Hillpark Phase 2', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63739.495339217116!2d101.70859519999999!3d3.1686656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37d12d669c1f%3A0x9e3afdd17c8a9056!2sPetronas%20Twin%20Towers!5e0!3m2!1sen!2smy!4v1638475872059!5m2!1sen!2smy\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '+11121721029', ''),
(6, 7, 10, 'B03-A-15-01, Menara 3A, No.3, Jalan Bangsar, Kampung Haji Abdullah Hukum', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63739.495339217116!2d101.70859519999999!3d3.1686656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37d12d669c1f%3A0x9e3afdd17c8a9056!2sPetronas%20Twin%20Towers!5e0!3m2!1sen!2smy!4v1638475872059!5m2!1sen!2smy\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '93861937420', '');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `bankID` int(11) NOT NULL,
  `bankname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`bankID`, `bankname`) VALUES
(1, 'Bangladesh Bank'),
(2, 'Sonali Bank'),
(10, 'MTBdada');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `branchID` int(11) NOT NULL,
  `areaID` int(11) NOT NULL,
  `bankID` int(11) NOT NULL,
  `address` varchar(600) NOT NULL,
  `map` varchar(600) NOT NULL,
  `contact` varchar(600) NOT NULL,
  `addinfo` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`branchID`, `areaID`, `bankID`, `address`, `map`, `contact`, `addinfo`) VALUES
(4, 7, 1, 'Bangsar south,49/b', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.9092944044605!2d101.67170531472752!3d3.1186930542088973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc490d84197605%3A0x4a1c92fbd649fc47!2sEdwards%20Lifesciences%20(M)%20Sdn%20Bhd!5e0!3m2!1sen!2smy!4v1638106348273!5m2!1sen!2smy\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '93861937420', ''),
(5, 11, 10, 'No. 66, 68G, Jalan Telawi, Bangsar, 59100 Kuala Lumpur, Wilayah Persekutuan', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.8659680441137!2d101.66836361744383!3d3.1301085000000057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc49985082e3db%3A0xd178736b253dac5d!2sHSBC%20Bank%20ATM!5e0!3m2!1sen!2smy!4v1638115461118!5m2!1sen!2smy\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '93861937420', 'vdbsds'),
(6, 11, 1, '3, Jalan Pantai Murni 1, Pantai Hillpark, 59200 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.959271802427!2d101.66158931472758!3d3.1054731542856904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4a2cfbe1c027%3A0x78f696d788702085!2sPantai%20Hillpark%20Phase%202-%20Block%201!5e0!3m2!1sen!2smy!4v1638458068931!5m2!1sen!2smy\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '14531513515', 'Every Day 10am–10pm'),
(7, 7, 1, '5, Jalan Kerinchi, Bangsar South, 59200 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.9425785610533!2d101.66184381472755!3d3.1098950542600234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4bde3552a8a5%3A0x642b37192bcc7ae9!2sInvito%20Hotel%20%26%20Residence!5e0!3m2!1sen!2smy!4v1638461132768!5m2!1sen!2smy\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '93861937420', 'nnnnnnnnnnnnnnnnnn');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'U',
  `createdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `contact`, `email`, `password`, `type`, `createdate`) VALUES
(7, 'Main Admin', '+8801791029323', 'admin@gmail.com', '$2y$12$JeOpo3aJNBzPCv2M33NizODaKIjoglPkNmfIIL96a1WMTOZDrHlBW', 'A', '2020-04-21 10:54:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`areaID`);

--
-- Indexes for table `atms`
--
ALTER TABLE `atms`
  ADD PRIMARY KEY (`atmID`),
  ADD KEY `areaID` (`areaID`),
  ADD KEY `bankID` (`bankID`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`bankID`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`branchID`),
  ADD KEY `areaID` (`areaID`),
  ADD KEY `bankID` (`bankID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `areaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `atms`
--
ALTER TABLE `atms`
  MODIFY `atmID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `bankID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `branchID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `atms`
--
ALTER TABLE `atms`
  ADD CONSTRAINT `atms_ibfk_1` FOREIGN KEY (`areaID`) REFERENCES `areas` (`areaid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `atms_ibfk_2` FOREIGN KEY (`bankID`) REFERENCES `banks` (`bankID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `branches`
--
ALTER TABLE `branches`
  ADD CONSTRAINT `branches_ibfk_1` FOREIGN KEY (`areaID`) REFERENCES `areas` (`areaid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `branches_ibfk_2` FOREIGN KEY (`bankID`) REFERENCES `banks` (`bankID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
