-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2023 at 08:33 PM
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
-- Database: `eventadministration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminEmail` varchar(100) NOT NULL,
  `adminPass` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminEmail`, `adminPass`) VALUES
('admin@mail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `assist`
--

CREATE TABLE `assist` (
  `EventID` int(11) NOT NULL,
  `VolunteerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assist`
--

INSERT INTO `assist` (`EventID`, `VolunteerID`) VALUES
(7, 43543),
(7, 456456),
(123, 324),
(123, 1256),
(123, 123456);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `EventID` int(11) NOT NULL,
  `EventName` varchar(100) NOT NULL,
  `EventDescription` varchar(500) NOT NULL,
  `EventGuest` varchar(500) NOT NULL,
  `EventBudget` varchar(50) NOT NULL,
  `EventFileBanner` varchar(100) DEFAULT NULL,
  `EventFileBadge` varchar(100) DEFAULT NULL,
  `ShortDescription` varchar(100) DEFAULT NULL,
  `OrganizerID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`EventID`, `EventName`, `EventDescription`, `EventGuest`, `EventBudget`, `EventFileBanner`, `EventFileBadge`, `ShortDescription`, `OrganizerID`) VALUES
(1, 'learn java', 'Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible. It is a general-purpose programming language intended to let programmers write once, run anywhere (WORA),[16] meaning that compiled Java code can run on all platforms that support Java without the need to recompile.[17] Java applications are typically compiled to bytecode that can run on any Java virtual machine (JVM) regardless of the underlying comput', 'kuddus mia, delulu mia', '500000', NULL, NULL, 'here we learn about java', 1),
(2, 'learn machine learning', 'As a scientific endeavor, machine learning grew out of the quest for artificial intelligence (AI). In the early days of AI as an academic discipline, some researchers were interested in having machines learn from data. They attempted to approach the problem with various symbolic methods, ', 'abul , babul', '78987', NULL, NULL, 'here we learn about machine learning', 1),
(7, 'dbms', 'data base management system', 'sadia maam', '800', 'download.jpg', 'download.jpg', NULL, 1),
(12, 'bal ', 'gfdgdfg', 'gdfg', '45645', 'banner3.jpg', 'banner.jpeg', 'gdfgdfg', 1),
(69, 'you know', 'uiui', '', '', '', NULL, NULL, 1),
(77, 'CA', 'mips,single cycle,ram', 'shoib sir', '500', '', '', NULL, 1),
(89, 'bidesh', 'bidesh jabi kemne ta nia koibo', '', '', '', NULL, NULL, 1),
(123, 'C clinic', 'here we learn c', 'uiui ,gigi ,kiki', '500000', 'banner.jpeg', 'banner.jpeg', 'c sikhi', 1),
(412, 'stat', 'PROBy etc', 'sobai', '1000', 'banner2.jpg', 'banner2.jpg', NULL, 1),
(4579, 'gfd', 'gdfgdfg', 'dfgdf', '456', NULL, NULL, 'dfgfd', 5656),
(5987, 'canada visa', 'canaday pathay dimu tore', '', '', '', NULL, NULL, 1),
(6969, 'visal balsal', '.........', '', '', '', NULL, NULL, 1),
(45678, 'canada visa', 'dia dimu oihane', '', '', 'canada.jpg', NULL, NULL, 1),
(56546456, 'bal ', 'valorant grind', '', '', '', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `events_eventtype`
--

CREATE TABLE `events_eventtype` (
  `EventType` varchar(50) NOT NULL,
  `EventID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events_eventtype`
--

INSERT INTO `events_eventtype` (`EventType`, `EventID`) VALUES
('data', 7),
('dfg', 12),
('dfgdf', 12),
('gdf', 12),
('programming', 7);

-- --------------------------------------------------------

--
-- Table structure for table `events_status`
--

CREATE TABLE `events_status` (
  `EventStatus` varchar(20) NOT NULL,
  `EventID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events_status`
--

INSERT INTO `events_status` (`EventStatus`, `EventID`) VALUES
('Previous', 1),
('Previous', 2),
('Previous', 89),
('Previous', 56546456);

-- --------------------------------------------------------

--
-- Table structure for table `event_poll`
--

CREATE TABLE `event_poll` (
  `EventName` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `PollID` int(11) NOT NULL,
  `OrganizerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_poll`
--

INSERT INTO `event_poll` (`EventName`, `Description`, `PollID`, `OrganizerID`) VALUES
('web dev', 'web banano sikhabo', 3, 1),
('joy bangla', 'concert', 37, 1),
('programming', 'lang', 38, 1);

-- --------------------------------------------------------

--
-- Table structure for table `event_sponsers`
--

CREATE TABLE `event_sponsers` (
  `EventID` int(11) NOT NULL,
  `SponsorID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_sponsers`
--

INSERT INTO `event_sponsers` (`EventID`, `SponsorID`) VALUES
(7, 1),
(7, 3),
(12, 1),
(12, 2);

-- --------------------------------------------------------

--
-- Table structure for table `feedback_`
--

CREATE TABLE `feedback_` (
  `Rating` int(11) NOT NULL,
  `Comments` varchar(500) NOT NULL,
  `EventID` int(11) NOT NULL,
  `Fid` int(11) NOT NULL,
  `Pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback_`
--

INSERT INTO `feedback_` (`Rating`, `Comments`, `EventID`, `Fid`, `Pid`) VALUES
(5, 'gdfgdf', 1, 18, 11221),
(1, 'gfhfgh', 1, 39, 5656),
(4, 'fgdfgdf', 2, 40, 5656);

-- --------------------------------------------------------

--
-- Table structure for table `organizer`
--

CREATE TABLE `organizer` (
  `OrganizerID` int(11) NOT NULL,
  `OrganizerName` varchar(100) NOT NULL,
  `OrganizerEmail` varchar(50) NOT NULL,
  `OrganizerContactNumber` varchar(20) NOT NULL,
  `OrganizerFileLogo` varchar(100) DEFAULT NULL,
  `OrganizerDescription` varchar(500) NOT NULL,
  `OrganizerPass` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organizer`
--

INSERT INTO `organizer` (`OrganizerID`, `OrganizerName`, `OrganizerEmail`, `OrganizerContactNumber`, `OrganizerFileLogo`, `OrganizerDescription`, `OrganizerPass`) VALUES
(1, 'uiu app forum', 'af@mail.com', '01911360991', NULL, '', '1234'),
(5656, 'uiu dance club', 'redoy.khan898@gmail.com', '01911360990', NULL, '', 'lalalula'),
(45645, 'uiu club', 'hridoyahmedddd@gmail.com', '01911360990', NULL, '', '456');

-- --------------------------------------------------------

--
-- Table structure for table `outsiderequest`
--

CREATE TABLE `outsiderequest` (
  `EventID` int(11) NOT NULL,
  `accept` int(11) DEFAULT NULL,
  `OutsideAddress` varchar(100) DEFAULT NULL,
  `StartTime` time DEFAULT NULL,
  `EndTime` time DEFAULT NULL,
  `EventDate` date DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `outsiderequest`
--

INSERT INTO `outsiderequest` (`EventID`, `accept`, `OutsideAddress`, `StartTime`, `EndTime`, `EventDate`, `capacity`) VALUES
(7, 1, 'uiu united city', '11:00:00', '13:00:00', '2023-12-30', 10),
(12, 0, 'uiu united city', '12:38:00', '12:39:00', NULL, NULL),
(77, NULL, 'uiu united city', NULL, NULL, NULL, NULL),
(412, NULL, 'uiu united city', '13:29:00', '15:29:00', NULL, NULL),
(6969, 1, 'NSU dhaka', NULL, NULL, NULL, NULL),
(45678, 1, 'the westin dhaka', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `ParticipantID` int(11) NOT NULL,
  `ParticipantFirstName` varchar(100) NOT NULL,
  `ParticipantlastName` varchar(100) NOT NULL,
  `ParticipantEmail` varchar(50) NOT NULL,
  `ParticipantContactNumber` varchar(20) NOT NULL,
  `ParticipantRole` varchar(30) NOT NULL,
  `ParticipantBloodGroup` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`ParticipantID`, `ParticipantFirstName`, `ParticipantlastName`, `ParticipantEmail`, `ParticipantContactNumber`, `ParticipantRole`, `ParticipantBloodGroup`) VALUES
(0, 'ara', 'sala', 'redoy.khan898@gmail.com', 'sdfsd', 'student', 'o+'),
(2, 'moga', 'ahmed', 'redoy.khan898@gmail.com', '01911360990', 'student', 'o+'),
(4, 'hridowererwy', 'werwerwe', 'redoy.khan898@gmail.com', '01911360990', 'student', 'o+'),
(69, 'moga', 'sala', 'redoy.khan898@gmail.com', '545456', 'student', 'o+'),
(241, 'red', 'ahe', 'hridoyahmedddd@gmail.com', '01911360990', 'student', 'o+'),
(879, 'hridoy', 'ahmed', 'redoy.khan898@gmail.com', '01911360990', 'student', 'o+'),
(4556, 'hridoy', 'fsdf', 'redoy.khan898@gmail.com', '01911360990', 'student', 'o+'),
(4578, 'gfdg', 'dfgdf', 'redoy.khan898@gmail.com', '01911360990', 'student', 'o+'),
(4897, 'red', 'ahmed', 'redoy.khan898@gmail.com', '01911360990', 'student', 'o+'),
(5656, 'hridoy', 'ahmed', 'redoy.khan898@gmail.com', '01911360990', 'student', 'o+'),
(11221, 'arafat', 'ahmed', 'arafat@mail.com', '01611360991', 'student', 'A+'),
(11241, 'red', 'ahe', 'redoy.khan898@gmail.com', '01911360990', 'student', 'o+'),
(456456, 'fghfgh', 'fghfg', 'redoy.khan898@gmail.com', '01911360990', 'student', 'fghfg'),
(546456, 'ara', 'ara', 'redoy.khan898@gmail.com', '01911360990', 'student', 'o+'),
(4587978, 'hridoy', 'ahmed', 'redoy.khan898@gmail.com', '01911360990', 'student', 'o+'),
(2147483647, 'hridoy', 'ahmed', 'redoy.khan898@gmail.com', '01911360990', 'student', 'o+');

-- --------------------------------------------------------

--
-- Table structure for table `polloption`
--

CREATE TABLE `polloption` (
  `PollOpt` varchar(100) NOT NULL,
  `PollID` int(11) NOT NULL,
  `count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `polloption`
--

INSERT INTO `polloption` (`PollOpt`, `PollID`, `count`) VALUES
('I dont care', 3, 21),
('Interested', 3, 10),
('Not Interested', 3, 7),
('artcell', 37, 2),
('avoidrafa', 37, 2),
('warfaze', 37, 1),
('c', 38, 4),
('c++', 38, 1),
('java', 38, 1),
('python', 38, 1);

-- --------------------------------------------------------

--
-- Table structure for table `qa`
--

CREATE TABLE `qa` (
  `EventID` int(11) NOT NULL,
  `qus` varchar(100) NOT NULL,
  `ans` varchar(100) DEFAULT NULL,
  `StudentID` int(11) NOT NULL,
  `StudentEmail` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qa`
--

INSERT INTO `qa` (`EventID`, `qus`, `ans`, `StudentID`, `StudentEmail`) VALUES
(1, 'ayahy bai', 'oyehoye bai', 54456, 'redoy.khan898@gmail.com'),
(1, 'ballagena bai', NULL, 456456, 'sahmed221068@bscse.uiu.ac.bd'),
(7, 'bhai', NULL, 45645, 'redoy.khan898@gmail.com'),
(1, 'bhai bhallage na ar', 'dsfsdf', 4456, 'redoy.khan898@gmail.com'),
(1, 'bhai kemon asen ki b', 'dasd', 5456, 'redoy.khan898@gmail.com'),
(1, 'bhai kemon asen ki khaisen ajke ? bhabi kemon ase ki khasise? apnare bade', 'bai', 645654, 'redoy.khan898@gmail.com'),
(1, 'bhai ki kore ekhane', 'amio janina bai', 123, 'sahmed221068@bscse.uiu.ac.bd'),
(123, 'bhai ki koren', 'jan', 123, 'redoy.khan898@gmail.com'),
(1, 'bhai ki koren', 'kisuna bhai', 888, 'sahmed221068@bscse.uiu.ac.bd'),
(1, 'bhai ki koren', 'kisuna bhai', 12345, 'redoy.khan898@gmail.com'),
(1, 'mehrin er buke osudh atkaise bai ki korum ehon', 'ayhayhayhay bai ki kon', 546465, 'sahmed221068@bscse.uiu.ac.bd'),
(1, 'sdffsdfsdf', 'bal', 45454, 'sahmed221068@bscse.uiu.ac.bd');

-- --------------------------------------------------------

--
-- Table structure for table `registration_`
--

CREATE TABLE `registration_` (
  `EventID` int(11) NOT NULL,
  `ParticipantID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration_`
--

INSERT INTO `registration_` (`EventID`, `ParticipantID`) VALUES
(7, 0),
(7, 456456),
(69, 456456),
(123, 2),
(123, 4),
(123, 879),
(123, 4556),
(123, 4578),
(123, 5656),
(123, 546456),
(123, 4587978),
(123, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `request_`
--

CREATE TABLE `request_` (
  `EventID` int(11) NOT NULL,
  `accept` int(11) DEFAULT NULL,
  `SlotID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_`
--

INSERT INTO `request_` (`EventID`, `accept`, `SlotID`) VALUES
(1, 1, 123),
(69, NULL, 456),
(89, 1, 23),
(89, 1, 789),
(123, 1, 123),
(56546456, 1, 89);

-- --------------------------------------------------------

--
-- Table structure for table `resources_`
--

CREATE TABLE `resources_` (
  `ResourcesID` int(11) NOT NULL,
  `ResourcesFileimg` varchar(100) DEFAULT NULL,
  `ResourcesAvailability` varchar(100) DEFAULT NULL,
  `EventID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resources_resourcesavailability`
--

CREATE TABLE `resources_resourcesavailability` (
  `ResourcesAvailability` varchar(30) NOT NULL,
  `ResourcesID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resources_resourcestype`
--

CREATE TABLE `resources_resourcestype` (
  `ResourcesType` varchar(100) NOT NULL,
  `ResourcesID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE `slot` (
  `StartTime` time NOT NULL,
  `EndTime` time NOT NULL,
  `SlotID` int(11) NOT NULL,
  `EventDate` date NOT NULL,
  `VenueID` int(11) NOT NULL,
  `available` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slot`
--

INSERT INTO `slot` (`StartTime`, `EndTime`, `SlotID`, `EventDate`, `VenueID`, `available`) VALUES
('20:23:08', '22:23:08', 23, '2023-12-01', 456, 1),
('20:23:08', '22:23:08', 89, '2023-12-01', 456, 0),
('20:23:08', '22:23:08', 123, '2023-12-10', 456, 0),
('20:23:08', '22:23:08', 456, '2023-12-20', 456, 0),
('20:23:08', '22:23:08', 654645, '2023-12-20', 456, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `SponsorID` int(11) NOT NULL,
  `SponsorName` varchar(100) NOT NULL,
  `SponsorDescription` varchar(500) NOT NULL,
  `SponsorFileLogo` varchar(100) DEFAULT NULL,
  `SponsorEmail` varchar(50) NOT NULL,
  `SponsorContactNumber` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`SponsorID`, `SponsorName`, `SponsorDescription`, `SponsorFileLogo`, `SponsorEmail`, `SponsorContactNumber`) VALUES
(1, 'NesCafe', '', NULL, '', ''),
(2, 'Kaler Kontho', '', NULL, '', ''),
(3, 'GigaByte', '', NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `venue_`
--

CREATE TABLE `venue_` (
  `VenueID` int(11) NOT NULL,
  `VenueName` varchar(100) NOT NULL,
  `VenueCapacity` int(11) NOT NULL,
  `VenueFileimg` varchar(100) DEFAULT NULL,
  `VenueLocation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `venue_`
--

INSERT INTO `venue_` (`VenueID`, `VenueName`, `VenueCapacity`, `VenueFileimg`, `VenueLocation`) VALUES
(456, 'comp lab 1', 10, NULL, 'third floor 307 room');

-- --------------------------------------------------------

--
-- Table structure for table `volunteers_`
--

CREATE TABLE `volunteers_` (
  `VolunteerID` int(11) NOT NULL,
  `VolunteerName` varchar(100) NOT NULL,
  `VolunteerEmail` varchar(50) NOT NULL,
  `VolunteerContactNumber` varchar(20) NOT NULL,
  `VolunteerDesignation` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `volunteers_`
--

INSERT INTO `volunteers_` (`VolunteerID`, `VolunteerName`, `VolunteerEmail`, `VolunteerContactNumber`, `VolunteerDesignation`) VALUES
(324, 'hridoy', 'af@mail.com', '01911360991', 'student'),
(1256, 'hridoy', 'af@mail.com', '01911360991', 'student'),
(43543, 'erter', 'af@mail.com', 'ertert', 'student'),
(123456, 'hridoy', 'af@mail.com', '01911360991', 'student'),
(456456, 'hridoy', 'af@mail.com', '01911360991', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminEmail`);

--
-- Indexes for table `assist`
--
ALTER TABLE `assist`
  ADD PRIMARY KEY (`EventID`,`VolunteerID`),
  ADD KEY `VolunteerID` (`VolunteerID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`EventID`),
  ADD KEY `FK_events_organizer` (`OrganizerID`);

--
-- Indexes for table `events_eventtype`
--
ALTER TABLE `events_eventtype`
  ADD PRIMARY KEY (`EventType`,`EventID`),
  ADD KEY `EventID` (`EventID`);

--
-- Indexes for table `events_status`
--
ALTER TABLE `events_status`
  ADD PRIMARY KEY (`EventStatus`,`EventID`),
  ADD KEY `EventID` (`EventID`);

--
-- Indexes for table `event_poll`
--
ALTER TABLE `event_poll`
  ADD PRIMARY KEY (`PollID`),
  ADD KEY `OrganizerID` (`OrganizerID`);

--
-- Indexes for table `event_sponsers`
--
ALTER TABLE `event_sponsers`
  ADD PRIMARY KEY (`EventID`,`SponsorID`),
  ADD KEY `SponsorID` (`SponsorID`);

--
-- Indexes for table `feedback_`
--
ALTER TABLE `feedback_`
  ADD PRIMARY KEY (`Fid`),
  ADD KEY `EventID` (`EventID`),
  ADD KEY `Pid` (`Pid`);

--
-- Indexes for table `organizer`
--
ALTER TABLE `organizer`
  ADD PRIMARY KEY (`OrganizerID`);

--
-- Indexes for table `outsiderequest`
--
ALTER TABLE `outsiderequest`
  ADD PRIMARY KEY (`EventID`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`ParticipantID`);

--
-- Indexes for table `polloption`
--
ALTER TABLE `polloption`
  ADD PRIMARY KEY (`PollID`,`PollOpt`);

--
-- Indexes for table `qa`
--
ALTER TABLE `qa`
  ADD PRIMARY KEY (`qus`,`StudentID`),
  ADD KEY `EventID` (`EventID`);

--
-- Indexes for table `registration_`
--
ALTER TABLE `registration_`
  ADD PRIMARY KEY (`EventID`,`ParticipantID`),
  ADD KEY `ParticipantID` (`ParticipantID`);

--
-- Indexes for table `request_`
--
ALTER TABLE `request_`
  ADD PRIMARY KEY (`EventID`,`SlotID`),
  ADD KEY `SlotID` (`SlotID`);

--
-- Indexes for table `resources_`
--
ALTER TABLE `resources_`
  ADD PRIMARY KEY (`ResourcesID`),
  ADD KEY `EventID` (`EventID`);

--
-- Indexes for table `resources_resourcesavailability`
--
ALTER TABLE `resources_resourcesavailability`
  ADD PRIMARY KEY (`ResourcesAvailability`,`ResourcesID`),
  ADD KEY `ResourcesID` (`ResourcesID`);

--
-- Indexes for table `resources_resourcestype`
--
ALTER TABLE `resources_resourcestype`
  ADD PRIMARY KEY (`ResourcesType`,`ResourcesID`),
  ADD KEY `ResourcesID` (`ResourcesID`);

--
-- Indexes for table `slot`
--
ALTER TABLE `slot`
  ADD PRIMARY KEY (`SlotID`),
  ADD KEY `VenueID` (`VenueID`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`SponsorID`);

--
-- Indexes for table `venue_`
--
ALTER TABLE `venue_`
  ADD PRIMARY KEY (`VenueID`);

--
-- Indexes for table `volunteers_`
--
ALTER TABLE `volunteers_`
  ADD PRIMARY KEY (`VolunteerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_poll`
--
ALTER TABLE `event_poll`
  MODIFY `PollID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `feedback_`
--
ALTER TABLE `feedback_`
  MODIFY `Fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assist`
--
ALTER TABLE `assist`
  ADD CONSTRAINT `assist_ibfk_1` FOREIGN KEY (`EventID`) REFERENCES `events` (`EventID`),
  ADD CONSTRAINT `assist_ibfk_2` FOREIGN KEY (`VolunteerID`) REFERENCES `volunteers_` (`VolunteerID`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `FK_events_organizer` FOREIGN KEY (`OrganizerID`) REFERENCES `organizer` (`OrganizerID`);

--
-- Constraints for table `events_eventtype`
--
ALTER TABLE `events_eventtype`
  ADD CONSTRAINT `events_eventtype_ibfk_1` FOREIGN KEY (`EventID`) REFERENCES `events` (`EventID`);

--
-- Constraints for table `events_status`
--
ALTER TABLE `events_status`
  ADD CONSTRAINT `events_status_ibfk_1` FOREIGN KEY (`EventID`) REFERENCES `events` (`EventID`);

--
-- Constraints for table `event_poll`
--
ALTER TABLE `event_poll`
  ADD CONSTRAINT `event_poll_ibfk_1` FOREIGN KEY (`OrganizerID`) REFERENCES `organizer` (`OrganizerID`);

--
-- Constraints for table `event_sponsers`
--
ALTER TABLE `event_sponsers`
  ADD CONSTRAINT `event_sponsers_ibfk_1` FOREIGN KEY (`EventID`) REFERENCES `events` (`EventID`),
  ADD CONSTRAINT `event_sponsers_ibfk_2` FOREIGN KEY (`SponsorID`) REFERENCES `sponsors` (`SponsorID`);

--
-- Constraints for table `feedback_`
--
ALTER TABLE `feedback_`
  ADD CONSTRAINT `feedback__ibfk_1` FOREIGN KEY (`Pid`) REFERENCES `participants` (`ParticipantID`);

--
-- Constraints for table `outsiderequest`
--
ALTER TABLE `outsiderequest`
  ADD CONSTRAINT `outsiderequest_ibfk_1` FOREIGN KEY (`EventID`) REFERENCES `events` (`EventID`);

--
-- Constraints for table `polloption`
--
ALTER TABLE `polloption`
  ADD CONSTRAINT `polloption_ibfk_1` FOREIGN KEY (`PollID`) REFERENCES `event_poll` (`PollID`);

--
-- Constraints for table `qa`
--
ALTER TABLE `qa`
  ADD CONSTRAINT `qa_ibfk_1` FOREIGN KEY (`EventID`) REFERENCES `events` (`EventID`);

--
-- Constraints for table `registration_`
--
ALTER TABLE `registration_`
  ADD CONSTRAINT `registration__ibfk_1` FOREIGN KEY (`EventID`) REFERENCES `events` (`EventID`),
  ADD CONSTRAINT `registration__ibfk_2` FOREIGN KEY (`ParticipantID`) REFERENCES `participants` (`ParticipantID`);

--
-- Constraints for table `resources_`
--
ALTER TABLE `resources_`
  ADD CONSTRAINT `resources__ibfk_1` FOREIGN KEY (`EventID`) REFERENCES `events` (`EventID`);

--
-- Constraints for table `resources_resourcesavailability`
--
ALTER TABLE `resources_resourcesavailability`
  ADD CONSTRAINT `resources_resourcesavailability_ibfk_1` FOREIGN KEY (`ResourcesID`) REFERENCES `resources_` (`ResourcesID`);

--
-- Constraints for table `resources_resourcestype`
--
ALTER TABLE `resources_resourcestype`
  ADD CONSTRAINT `resources_resourcestype_ibfk_1` FOREIGN KEY (`ResourcesID`) REFERENCES `resources_` (`ResourcesID`);

--
-- Constraints for table `slot`
--
ALTER TABLE `slot`
  ADD CONSTRAINT `slot_ibfk_2` FOREIGN KEY (`VenueID`) REFERENCES `venue_` (`VenueID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
