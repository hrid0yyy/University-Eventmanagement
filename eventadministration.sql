-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2023 at 07:17 PM
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
(123, 'C clinic', 'here we learn c', 'uiui ,gigi ,kiki', '500000', 'banner.jpeg', 'banner.jpeg', 'c sikhi', NULL),
(5678, 'uefaa champions', 'sdadas', '', '', '', NULL, NULL, 1),
(45546, 'web dev', 'sdfgdfgsdf', '', '', '', NULL, NULL, 1),
(99999, 'marketing', 'kisuna', '', '', '', NULL, NULL, 1),
(777777, 'gggg', 'bal halay ehane', '', '', '', NULL, NULL, 1),
(56546456, 'hjkhjkh', 'hjkjhkhjk', '', '', '', NULL, NULL, 1),
(2147483647, 'ure ure ', 'dsfsdfsdf', '', '', '', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `events_eventtype`
--

CREATE TABLE `events_eventtype` (
  `EventType` varchar(50) NOT NULL,
  `EventID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events_status`
--

CREATE TABLE `events_status` (
  `EventStatus` varchar(20) NOT NULL,
  `EventID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_poll`
--

CREATE TABLE `event_poll` (
  `EventName` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `PollID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback_`
--

CREATE TABLE `feedback_` (
  `FeedbackID` int(11) NOT NULL,
  `Rating` int(11) NOT NULL,
  `Comments` varchar(500) NOT NULL,
  `EventID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(241, 'red', 'ahe', 'hridoyahmedddd@gmail.com', '01911360990', 'student', 'o+'),
(5656, 'hridoy', 'ahmed', 'redoy.khan898@gmail.com', '01911360990', 'student', 'o+'),
(11221, 'arafat', 'ahmed', 'arafat@mail.com', '01611360991', 'student', 'A+'),
(11241, 'red', 'ahe', 'redoy.khan898@gmail.com', '01911360990', 'student', 'o+');

-- --------------------------------------------------------

--
-- Table structure for table `polloption`
--

CREATE TABLE `polloption` (
  `PollID` int(11) DEFAULT NULL,
  `PollOpt` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qa`
--

CREATE TABLE `qa` (
  `EventID` int(11) NOT NULL,
  `ParticipantID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(123, 241),
(123, 5656),
(123, 11241);

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
(123, 1, 123),
(5678, 1, 123),
(99999, 1, 123),
(777777, 1, 789),
(2147483647, 0, 789);

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
('20:23:08', '22:23:08', 123, '2023-12-12', 456, 1),
('20:23:08', '22:23:08', 789, '2023-12-20', 456, 1);

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
  `SponsorContactNumber` varchar(20) NOT NULL,
  `EventID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(456, 'comp lab 1', 40, NULL, 'third floor 307 room');

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
  ADD PRIMARY KEY (`PollID`);

--
-- Indexes for table `feedback_`
--
ALTER TABLE `feedback_`
  ADD PRIMARY KEY (`FeedbackID`),
  ADD KEY `EventID` (`EventID`);

--
-- Indexes for table `organizer`
--
ALTER TABLE `organizer`
  ADD PRIMARY KEY (`OrganizerID`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`ParticipantID`);

--
-- Indexes for table `polloption`
--
ALTER TABLE `polloption`
  ADD KEY `PollID` (`PollID`);

--
-- Indexes for table `qa`
--
ALTER TABLE `qa`
  ADD PRIMARY KEY (`EventID`,`ParticipantID`),
  ADD KEY `ParticipantID` (`ParticipantID`);

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
  ADD PRIMARY KEY (`SponsorID`),
  ADD KEY `EventID` (`EventID`);

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
-- Constraints for table `feedback_`
--
ALTER TABLE `feedback_`
  ADD CONSTRAINT `feedback__ibfk_1` FOREIGN KEY (`EventID`) REFERENCES `events` (`EventID`);

--
-- Constraints for table `polloption`
--
ALTER TABLE `polloption`
  ADD CONSTRAINT `polloption_ibfk_1` FOREIGN KEY (`PollID`) REFERENCES `event_poll` (`PollID`);

--
-- Constraints for table `qa`
--
ALTER TABLE `qa`
  ADD CONSTRAINT `qa_ibfk_1` FOREIGN KEY (`EventID`) REFERENCES `events` (`EventID`),
  ADD CONSTRAINT `qa_ibfk_2` FOREIGN KEY (`ParticipantID`) REFERENCES `participants` (`ParticipantID`);

--
-- Constraints for table `registration_`
--
ALTER TABLE `registration_`
  ADD CONSTRAINT `registration__ibfk_1` FOREIGN KEY (`EventID`) REFERENCES `events` (`EventID`),
  ADD CONSTRAINT `registration__ibfk_2` FOREIGN KEY (`ParticipantID`) REFERENCES `participants` (`ParticipantID`);

--
-- Constraints for table `request_`
--
ALTER TABLE `request_`
  ADD CONSTRAINT `request__ibfk_1` FOREIGN KEY (`SlotID`) REFERENCES `slot` (`SlotID`),
  ADD CONSTRAINT `request__ibfk_2` FOREIGN KEY (`EventID`) REFERENCES `events` (`EventID`);

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

--
-- Constraints for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD CONSTRAINT `sponsors_ibfk_1` FOREIGN KEY (`EventID`) REFERENCES `events` (`EventID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
