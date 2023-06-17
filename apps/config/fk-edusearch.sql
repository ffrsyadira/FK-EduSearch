-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2023 at 03:20 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fk-edusearch`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` varchar(10) NOT NULL,
  `Admin_Status` varchar(10) DEFAULT NULL,
  `User_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `Complaint_ID` varchar(10) NOT NULL,
  `Complaint_Type` varchar(20) NOT NULL,
  `Complaint_Description` varchar(50) NOT NULL,
  `Complaint_DateSubmit` date NOT NULL,
  `Complaint_DateResolve` date NOT NULL,
  `Complaint_Status` varchar(10) NOT NULL,
  `User_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_code`
--

CREATE TABLE `course_code` (
  `CC_ID` varchar(10) NOT NULL,
  `CC_Name` varchar(30) NOT NULL,
  `ResearchArea_ID` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expert`
--

CREATE TABLE `expert` (
  `Expert_ID` varchar(8) NOT NULL,
  `Expert_Age` int(11) NOT NULL,
  `Expert_Address` varchar(50) NOT NULL,
  `Expert_HP` int(11) NOT NULL,
  `Expert_CV_FilePath` varchar(255) NOT NULL,
  `Expert_Status` varchar(10) DEFAULT NULL,
  `Expert_LastInteractionDate` date DEFAULT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `ResearhArea_ID` varchar(10) DEFAULT NULL,
  `SMA_ID` varchar(10) DEFAULT NULL,
  `Publication_ID` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `Post_ID` varchar(10) NOT NULL,
  `Post_Title` varchar(20) NOT NULL,
  `Post_Description` varchar(50) NOT NULL,
  `Post_AssignDate` date DEFAULT NULL,
  `Post_ExpiryDate` date DEFAULT NULL,
  `Post_Status` varchar(10) NOT NULL,
  `CC_ID` varchar(10) DEFAULT NULL,
  `Expert_ID` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `postanswer`
--

CREATE TABLE `postanswer` (
  `PA_ID` int(11) NOT NULL,
  `PA_Title` varchar(30) NOT NULL,
  `PA_Desc` varchar(100) NOT NULL,
  `Post_ID` varchar(8) DEFAULT NULL,
  `Expert_ID` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

CREATE TABLE `publication` (
  `Publication_ID` varchar(10) NOT NULL,
  `Publication_Title` varchar(30) NOT NULL,
  `Publication_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `Rating_ID` varchar(10) NOT NULL,
  `Rating_Val` float NOT NULL,
  `Rating_Feedback` varchar(50) NOT NULL,
  `Rating_Date` date NOT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `Post_ID` varchar(10) DEFAULT NULL,
  `Expert_ID` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `Report_ID` varchar(10) NOT NULL,
  `Report_Type` varchar(20) NOT NULL,
  `Report_Description` varchar(50) NOT NULL,
  `Report_DateCreate` date NOT NULL,
  `Report_Status` varchar(10) NOT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `Post_ID` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research_area`
--

CREATE TABLE `research_area` (
  `ResearchArea_ID` varchar(10) NOT NULL,
  `ResearchArea_Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `socmedacc`
--

CREATE TABLE `socmedacc` (
  `SMA_ID` varchar(10) NOT NULL,
  `SMA_AccType` varchar(20) NOT NULL,
  `SMA_Username` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(11) NOT NULL,
  `User_Name` varchar(30) NOT NULL,
  `User_Password` varchar(10) NOT NULL,
  `User_Email` varchar(20) NOT NULL,
  `User_HP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`Complaint_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `course_code`
--
ALTER TABLE `course_code`
  ADD PRIMARY KEY (`CC_ID`),
  ADD KEY `ResearchArea_ID` (`ResearchArea_ID`);

--
-- Indexes for table `expert`
--
ALTER TABLE `expert`
  ADD PRIMARY KEY (`Expert_ID`),
  ADD KEY `User_ID` (`User_ID`),
  ADD KEY `ResearhArea_ID` (`ResearhArea_ID`),
  ADD KEY `SMA_ID` (`SMA_ID`),
  ADD KEY `Publication_ID` (`Publication_ID`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`Post_ID`),
  ADD KEY `CC_ID` (`CC_ID`),
  ADD KEY `post_ibfk_1` (`Expert_ID`);

--
-- Indexes for table `postanswer`
--
ALTER TABLE `postanswer`
  ADD PRIMARY KEY (`PA_ID`),
  ADD KEY `Post_ID` (`Post_ID`),
  ADD KEY `Expert_ID` (`Expert_ID`);

--
-- Indexes for table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`Publication_ID`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`Rating_ID`),
  ADD KEY `User_ID` (`User_ID`),
  ADD KEY `Post_ID` (`Post_ID`),
  ADD KEY `Expert_ID` (`Expert_ID`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`Report_ID`),
  ADD KEY `User_ID` (`User_ID`),
  ADD KEY `Post_ID` (`Post_ID`);

--
-- Indexes for table `research_area`
--
ALTER TABLE `research_area`
  ADD PRIMARY KEY (`ResearchArea_ID`);

--
-- Indexes for table `socmedacc`
--
ALTER TABLE `socmedacc`
  ADD PRIMARY KEY (`SMA_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `postanswer`
--
ALTER TABLE `postanswer`
  MODIFY `PA_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`);

--
-- Constraints for table `complaint`
--
ALTER TABLE `complaint`
  ADD CONSTRAINT `complaint_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`);

--
-- Constraints for table `course_code`
--
ALTER TABLE `course_code`
  ADD CONSTRAINT `course_code_ibfk_1` FOREIGN KEY (`ResearchArea_ID`) REFERENCES `research_area` (`ResearchArea_ID`);

--
-- Constraints for table `expert`
--
ALTER TABLE `expert`
  ADD CONSTRAINT `expert_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`),
  ADD CONSTRAINT `expert_ibfk_2` FOREIGN KEY (`ResearhArea_ID`) REFERENCES `research_area` (`ResearchArea_ID`),
  ADD CONSTRAINT `expert_ibfk_3` FOREIGN KEY (`SMA_ID`) REFERENCES `socmedacc` (`SMA_ID`),
  ADD CONSTRAINT `expert_ibfk_4` FOREIGN KEY (`Publication_ID`) REFERENCES `publication` (`Publication_ID`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`Expert_ID`) REFERENCES `expert` (`Expert_ID`);

--
-- Constraints for table `postanswer`
--
ALTER TABLE `postanswer`
  ADD CONSTRAINT `postanswer_ibfk_1` FOREIGN KEY (`Post_ID`) REFERENCES `post` (`Post_ID`),
  ADD CONSTRAINT `postanswer_ibfk_2` FOREIGN KEY (`Expert_ID`) REFERENCES `expert` (`Expert_ID`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`),
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`Post_ID`) REFERENCES `post` (`Post_ID`),
  ADD CONSTRAINT `rating_ibfk_3` FOREIGN KEY (`Expert_ID`) REFERENCES `expert` (`Expert_ID`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`),
  ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`Post_ID`) REFERENCES `post` (`Post_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
