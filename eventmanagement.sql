-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2023 at 12:59 PM
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
-- Database: `eventmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `aevents`
--

CREATE TABLE `aevents` (
  `EventID` int(11) NOT NULL,
  `EventName` varchar(100) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `filename` varchar(100) DEFAULT NULL,
  `EventDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aevents`
--

INSERT INTO `aevents` (`EventID`, `EventName`, `Description`, `filename`, `EventDate`) VALUES
(21, 'aiyo', 'ki obostha', 'Screenshot (16).png', '2023-12-01'),
(23, 'bal ', 'ehane bal halay', 'Screenshot (50).png', '2023-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `attendees`
--

CREATE TABLE `attendees` (
  `AttendeeID` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `RegistrationDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `eventattendees`
--

CREATE TABLE `eventattendees` (
  `EventID` int(11) NOT NULL,
  `AttendeeID` int(11) NOT NULL,
  `RegistrationDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `EventID` int(11) NOT NULL,
  `EventName` varchar(100) DEFAULT NULL,
  `EventDate` date DEFAULT NULL,
  `VenueID` int(11) DEFAULT NULL,
  `OrganizerID` int(11) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `filename` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`EventID`, `EventName`, `EventDate`, `VenueID`, `OrganizerID`, `Description`, `filename`) VALUES
(19, 'gfdgdfg', NULL, NULL, NULL, 'dfggggggggggg', NULL),
(22, 'bal ', '2023-11-30', NULL, NULL, 'bal halay ehane', '');

-- --------------------------------------------------------

--
-- Table structure for table `eventspeakers`
--

CREATE TABLE `eventspeakers` (
  `EventID` int(11) NOT NULL,
  `SpeakerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `FacultyID` int(11) NOT NULL,
  `department` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `AttendeeID` int(11) DEFAULT NULL,
  `EventID` int(11) DEFAULT NULL,
  `response` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `organizers`
--

CREATE TABLE `organizers` (
  `OrganizerID` int(11) NOT NULL,
  `OrganizerName` varchar(100) DEFAULT NULL,
  `ContactPerson` varchar(100) DEFAULT NULL,
  `ContactEmail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organizers`
--

INSERT INTO `organizers` (`OrganizerID`, `OrganizerName`, `ContactPerson`, `ContactEmail`, `password`) VALUES
(0, '', '', '', ''),
(1, 'uiu anime club', 'hridoy', 'zoro@gmail.com', 'jorojuro'),
(2, 'uiu dance club', 'Hridoy Ahmed', 'hridoyahmedddd@gmail.com', 'lalalula');

-- --------------------------------------------------------

--
-- Table structure for table `speakers`
--

CREATE TABLE `speakers` (
  `SpeakerID` int(11) NOT NULL,
  `FacultyID` int(11) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Bio` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE `venues` (
  `VenueID` int(11) NOT NULL,
  `VenueName` varchar(100) DEFAULT NULL,
  `Location` varchar(255) DEFAULT NULL,
  `Capacity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `venues`
--

INSERT INTO `venues` (`VenueID`, `VenueName`, `Location`, `Capacity`) VALUES
(123, 'Multipurpose Hall', 'basement', 2000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aevents`
--
ALTER TABLE `aevents`
  ADD PRIMARY KEY (`EventID`);

--
-- Indexes for table `attendees`
--
ALTER TABLE `attendees`
  ADD PRIMARY KEY (`AttendeeID`);

--
-- Indexes for table `eventattendees`
--
ALTER TABLE `eventattendees`
  ADD PRIMARY KEY (`EventID`,`AttendeeID`),
  ADD KEY `FK_EventAttendees_Attendee` (`AttendeeID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`EventID`),
  ADD KEY `FK_Venue` (`VenueID`),
  ADD KEY `FK_Organizer` (`OrganizerID`);

--
-- Indexes for table `eventspeakers`
--
ALTER TABLE `eventspeakers`
  ADD PRIMARY KEY (`EventID`,`SpeakerID`),
  ADD KEY `FK_EventSpeakers_Speaker` (`SpeakerID`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`FacultyID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD KEY `FK_feedback_Event` (`EventID`),
  ADD KEY `FK_feedback_Attendee` (`AttendeeID`);

--
-- Indexes for table `organizers`
--
ALTER TABLE `organizers`
  ADD PRIMARY KEY (`OrganizerID`);

--
-- Indexes for table `speakers`
--
ALTER TABLE `speakers`
  ADD PRIMARY KEY (`SpeakerID`),
  ADD KEY `FK_Speakers_faculty` (`FacultyID`);

--
-- Indexes for table `venues`
--
ALTER TABLE `venues`
  ADD PRIMARY KEY (`VenueID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `EventID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `speakers`
--
ALTER TABLE `speakers`
  MODIFY `SpeakerID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `eventattendees`
--
ALTER TABLE `eventattendees`
  ADD CONSTRAINT `FK_EventAttendees_Attendee` FOREIGN KEY (`AttendeeID`) REFERENCES `attendees` (`AttendeeID`),
  ADD CONSTRAINT `FK_EventAttendees_Event` FOREIGN KEY (`EventID`) REFERENCES `events` (`EventID`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `FK_Organizer` FOREIGN KEY (`OrganizerID`) REFERENCES `organizers` (`OrganizerID`),
  ADD CONSTRAINT `FK_Venue` FOREIGN KEY (`VenueID`) REFERENCES `venues` (`VenueID`);

--
-- Constraints for table `eventspeakers`
--
ALTER TABLE `eventspeakers`
  ADD CONSTRAINT `FK_EventSpeakers_Event` FOREIGN KEY (`EventID`) REFERENCES `events` (`EventID`),
  ADD CONSTRAINT `FK_EventSpeakers_Speaker` FOREIGN KEY (`SpeakerID`) REFERENCES `speakers` (`SpeakerID`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `FK_feedback_Attendee` FOREIGN KEY (`AttendeeID`) REFERENCES `attendees` (`AttendeeID`),
  ADD CONSTRAINT `FK_feedback_Event` FOREIGN KEY (`EventID`) REFERENCES `events` (`EventID`);

--
-- Constraints for table `speakers`
--
ALTER TABLE `speakers`
  ADD CONSTRAINT `FK_Speakers_faculty` FOREIGN KEY (`FacultyID`) REFERENCES `faculty` (`FacultyID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
