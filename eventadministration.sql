-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2023 at 05:45 PM
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
(1231434, 11221068);

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
  `ShortDescription` varchar(100) DEFAULT NULL,
  `OrganizerID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`EventID`, `EventName`, `EventDescription`, `EventGuest`, `EventBudget`, `EventFileBanner`, `ShortDescription`, `OrganizerID`) VALUES
(1, 'C CLINIC', 'UIU Computer Club is going to arrange a two days workshop named “C-Clinic”.\r\nThis program is arranged for those students who took SPL or APL course in this trimester.\r\nAs our mid exam is almost knocking at the door, it is needed to revise all the contents of running course.\r\nIt will be like an “Adda” about C language. You can bring all your questions, we will try to solve together . 😉', 'tarek sir', '100000000', '23456415_2013767945528243_1989576446997817108_o.jpg', 'for varsity student', 4),
(101, 'Computronix Academy', 'UIU APP FORUM Presents Computronix Academy – a haven for budding minds interested in exploring the fields of Computer Science & Engineering (CSE) and Data Science (DS).\r\n', '', '10000', 'computronix academy.jpg', 'FOR UIU STUDENT', 4),
(102, 'Google Developer Groups(GDGs)', 'Google DevFest is a global tech event presented by 𝐆𝐨𝐨𝐠𝐥𝐞 𝐃𝐞𝐯𝐞𝐥𝐨𝐩𝐞𝐫 𝐆𝐫𝐨𝐮𝐩𝐬 (GDGs), bringing together developers, tech enthusiasts, and experts for a day of presentations\r\nand networking.\r\n\r\nIt serves as a platform for knowledge sharing and collaboration among developers and tech professionals.', '', '50000', 'devfest.jpg', '', 4),
(103, 'AI conversation 101', '', '', '50000', 'AI conversation', 'A workshop GPT and ChatGPT Technology', 4),
(104, 'Nationwide Coding Boot-camp on 𝐁𝐥𝐨𝐜𝐤𝐜𝐡𝐚𝐢𝐧', 'A blockchain is a distributed database or ledger shared among a computer network\'s nodes. They are best known for their crucial role in cryptocurrency systems for maintaining a secure and decentralized record of transactions, but they are not limited to cryptocurrency uses. Blockchains can be used to make data in any industry immutable—the term used to describe the inability to be altered.  Because there is no way to change a block, the only trust needed is at the point where a user or program e', '', '10000', 'blockchain.jpg', '', 5),
(754, 'DataSoft Systems Bangladesh Limited ', 'Open to All UIU Students:\r\nExplore the innovative domain of IIoT – No entry fees are required! 💫\r\nMeet Our Experts:\r\n- Md. Mashuk E-lahi: IoT Engineer\r\n- Emrajul Islam (Naim): Sr. Project Manager\r\n- Mohammed Riyad: SVP, Marketing\r\n- Sami Al Islam: Chief of HR & Administration\r\n- Zakir Hasan Choudhury: Project Manager\r\nSave the date and join us for this insightful seminar!', 'faculties', '00', '402446028_359110250116021_3549580577394590494_n.jpg', '🌟 Join DataSoft Systems Bangladesh Limited Exclusive Industrial IoT Seminar!', 6),
(4589, '“UNDERSTANDING PHOTOGRAPHY AS A LANGUAGE”', 'Day-long workshop on\r\nINTRODUCTION TO\r\nSTREET PHOTOGRAPHY', 'none', '30000', '393827944_627526706224140_6411872843724107398_n.jpg', 'Day-long workshop on\r\nINTRODUCTION TO\r\nSTREET PHOTOGRAPHY', 3),
(1231434, 'Coke Studio Bangla Fanfare', 'Coke Studio Bangla Fanfare, headed to UIU for a spectacular talent search on 4th November instead of 31st October & 1st November, is looking for new voices to contribute to the musical experience in \"Coke Studio বাংলা Season 3.\"', 'None', '45000', 'CulturedBangla.jpg', 'Prepare to perform for the world and take part in this amazing musical event at UIU! ', 2);

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
('educational', 1),
('educational', 754),
('Music', 1231434),
('photography', 4589),
('programming', 1);

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
('Ongoing', 1),
('Ongoing', 103),
('Ongoing', 1231434),
('Previous', 101),
('Previous', 102),
('Previous', 103),
('Previous', 104);

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
('joy bangla concert', 'choose your favourite band', 46, 2);

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
(1, 202),
(1, 203),
(104, 201),
(104, 203),
(754, 209),
(754, 210),
(4589, 207),
(4589, 208),
(4589, 209),
(1231434, 201);

-- --------------------------------------------------------

--
-- Table structure for table `feedback_`
--

CREATE TABLE `feedback_` (
  `Rating` int(11) NOT NULL,
  `Comments` varchar(500) NOT NULL,
  `EventID` int(11) NOT NULL,
  `Fid` int(11) NOT NULL,
  `Pid` int(11) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback_`
--

INSERT INTO `feedback_` (`Rating`, `Comments`, `EventID`, `Fid`, `Pid`, `date`) VALUES
(5, 'it was good', 101, 45, 2, '2023-12-14'),
(4, 'it was average', 101, 46, 3, '2023-12-14'),
(5, 'awesome it helped me a lot', 101, 47, 6, '2023-12-14'),
(5, 'choole', 104, 48, 7, '2023-12-14'),
(1, 'chi', 101, 49, 10, '2023-12-14'),
(1, 'chi ', 101, 50, 11, '2023-12-14'),
(4, 'goodddd', 101, 51, 4, '2023-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice` varchar(100) NOT NULL,
  `time` datetime NOT NULL,
  `EventID` int(11) NOT NULL,
  `OrganizerID` int(11) NOT NULL,
  `reply` varchar(100) DEFAULT NULL,
  `view` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice`, `time`, `EventID`, `OrganizerID`, `reply`, `view`) VALUES
('hi', '2023-12-16 10:35:09', 754, 6, 'hello', 1),
('hi', '2023-12-16 10:34:52', 4589, 3, NULL, 0);

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
(1, 'Sports Club', 'uiusportsclub@gmail.com', '01741771774', 'UIU Sports Club.jpg', 'The United International University Sports Club is a vibrant and dynamic organization dedicated to promoting a culture of sports and physical fitness within the university community. Committed to fostering teamwork, skill development, and a healthy lifestyle, the club provides a platform for students to engage in various sports and recreational activities.\r\n\r\nFrom organizing intercollegiate tournaments to hosting friendly matches and fitness events, the United International University Sports Clu', '1234'),
(2, 'Cultural Club', 'uiucc16@gmail.com', '01637665221', 'UIU Cultural Club.jpg', 'The United International University Cultural Club is a dynamic and inclusive organization dedicated to celebrating the rich diversity of cultures within the university community. Committed to fostering a vibrant and harmonious environment, the Cultural Club provides a platform for students to express their creativity, showcase their talents, and engage in various cultural activities.\r\n\r\nFrom organizing cultural festivals and performances to hosting art exhibitions, workshops, and literary events', '1234'),
(3, 'Photography Club', 'photographyclubuiu@gmail.com', '01732137465', 'UIU Photography Club.jpg', 'The United International University Photography Club is a creative community dedicated to capturing and celebrating the visual wonders of the world through the lens. This club provides a platform for students with a passion for photography to come together, share their experiences, and enhance their skills.', '1234'),
(4, 'APP Forum', 'appforum@uiu.ac.bd', '01672899396', 'UIU APP FORUM.jpg', 'The United International University App Forum serves as a dynamic hub for tech enthusiasts within the university community. With a focus on app development, this forum provides a platform for students to share ideas, collaborate on projects, and stay updated on the latest trends in the ever-evolving world of mobile applications. Through workshops, discussions, and hands-on activities, the App Forum aims to foster innovation, skill development, and a sense of community among students.1. CSE softw', '1234'),
(5, 'Computer Club', 'computerclub@cse.uiu.ac.bd', '01700-898574', 'UIU Computer Club.png', 'UIU Computer Club\'s objectives are to widen the scope of our members to make them prepare for the competitive software & IT industry. We aim to impart knowledge that is not usually covered in mainstream areas therefore it will be beneficial to our members.To promote programming as a culture to excel the inherent qualities of the students; to attain world-class problem solving skills, to pursue professional grooming as Software Engineers, to contribute in the field of Robotics.', '1234'),
(6, 'Robotics Club', 'robotics@uiu.ac.bd', '01718-092400', 'UIU Robotics.jpg', 'The United International University Robotics Club is a vibrant community fostering innovation and collaboration in robotics. Engage in hands-on projects, workshops, and explore the limitless potential of technology.', '1234'),
(7, 'Accounting Forum', 'uiuaccforum@gmail.com', '01621863427', 'Accounting Forum - UIUAF.jpg', 'This forum’s main aim is to organize seminars, workshops, discussions and other related programs.', '1234'),
(8, 'Directorate of Student Affairs (DCCSA)', 'dsa@uiu.ac.bd', '09604848848', 'Directorate of Student Affairs - UIU.jpg', 'The Directorate of Career Counseling & Student Affairs at United International University guides students in career development, provides counseling services, and enhances overall student well-being.', '1234'),
(9, 'Social Services Club', 'ssc@uiu.ac.bd', ' ', 'UIU Social Services Club.jpg', ' The main purpose of our club is to serve social services voluntarily to those people who are deprive.', '1234'),
(10, 'English Language Forum', 'uiuelf11@gmail.com', ' ', 'UIU English Language Forum', 'UIU English Language Forum.', '1234'),
(11, 'Theatre & Film Club', 'uiutfclub@gmail.com', '01764361781', 'UIU Theatre & Film Club.jpg', '', '1234'),
(12, 'Finance Forum', 'financeforumuiu@gmail.com', '', 'UIU Finance Forum.png', '', '1234'),
(13, 'Electrical and Electronic Club', 'uiueecweb@gmail.com', ' ', 'UIU Electrical and Electronic Club.png', 'Innovation and excellence to asymptote.', '1234'),
(14, 'Debate Club- UIUDC', 'uiudc16@gmail.com', '01957139339', 'UIU Debate Club- UIUDC.jpg', '', '1234'),
(15, 'Junior Economists\' Forum - UIUJEF', 'uiujef7@gmail.com', '01611664083', 'UIU Junior Economists\' Forum - UIUJEF.jpg', 'UIUJEF : Together We Thrive, Together We Rise.', '1234'),
(16, 'Literature and Writers\' Forum-UIULWF', 'uiulwf@uiu.ac.bd', '', 'UIU Literature and Writers\' Forum-UIULWF.jpg', 'UIU Literature and Writers\' Forum is a student-run organization established in 2017 to cultivate lite', '1234');

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
  `ParticipantBloodGroup` varchar(10) DEFAULT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`ParticipantID`, `ParticipantFirstName`, `ParticipantlastName`, `ParticipantEmail`, `ParticipantContactNumber`, `ParticipantRole`, `ParticipantBloodGroup`, `pass`) VALUES
(2, 'Hridoy', 'Ahmed', 'hridoyahmed@gmail.com', '01745675504', 'Student', 'O+', '1234'),
(3, 'Redwan', 'Ahmed', 'ridwanahmed@gmail.com', '01703359876', 'Student', 'B+', '1234'),
(4, 'Mustakim', 'Keya', 'mustakimkeya@gmail.com', '01703456789', 'Student', 'A+', '1234'),
(5, 'Sabrina', 'Sayem', 'sabrinasayem@gmail.com', '01895655048', 'Student', 'AB+', '1234'),
(6, 'Wasif', 'Ridwan', 'wasifridwan@gmail.com', '01367855876', 'Student', 'B-', '1234'),
(7, 'Chaity', 'Kamal', 'chaitykamal@gmail.com', '01390761234', 'Student', 'O+', '1234'),
(8, 'Mehrin', 'Ahmed', 'mehrinahmed@gmail.com', '01678654432', 'Student', 'A+', '1234'),
(9, 'Yeamin', 'Sorol', 'yeaminsorol@gmail.com', '01563409126', 'Student', 'B+', '1234'),
(10, 'Shagin', 'Ahmed', 'saginahmed@gmail.com', '01907128369', 'Student', 'A+', '1234'),
(11, 'Sadik', 'Ahmed', 'sadikahmed@gmail.com', '01876594320', 'Student', 'O+', '1234'),
(12, 'Kamrul', 'Arnob', 'kamrularnob@gmail.com', '01309812675', 'Student', 'B+', '1234'),
(13, 'Fayjullah', 'Emon', 'fayjullahemon@gmail.com', '01709457832', 'Student', 'AB+', '1234'),
(14, 'Maria', 'Khanom', 'mariakhanom@gmail.com', '01785086345', 'Student', 'B+', '1234'),
(15, 'Mahbub', 'Uddin', 'mahbubuddin@gmail.com', '01709564321', 'Student', 'AB+', '1234'),
(16, 'Habiba', 'Jemin', 'habibajemin@gmail.com', '01703355504', 'Student', 'B+', '1234'),
(68, 'arafat', 'ahmed', 'sahmed221068@bscse.uiu.ac.bd', '01911360990', 'student', 'A+', '1234');

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
('arnob', 46, 2),
('artcell', 46, 1),
('warfaze', 46, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pollvote`
--

CREATE TABLE `pollvote` (
  `PollID` int(11) NOT NULL,
  `ParticipantID` int(11) NOT NULL,
  `PollOpt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pollvote`
--

INSERT INTO `pollvote` (`PollID`, `ParticipantID`, `PollOpt`) VALUES
(46, 5, 'artcell'),
(46, 8, 'arnob'),
(46, 10, 'warfaze'),
(46, 12, 'arnob');

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
(1231434, 'hi', 'hello', 123, 'sahmed221068@bscse.uiu.ac.bd'),
(1, 'ki hobe ki ekhane actually', 'c sikhabo re bhai dekhen na', 68, 'sahmed221068@bscse.uiu.ac.bd'),
(104, 'sdfsd', NULL, 123, 'redoy.khan898@gmail.com'),
(104, 'sdfsdfsdfsdgsfdg', NULL, 2147483647, 'sahmed221068@bscse.uiu.ac.bd');

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
(1, 2),
(1, 7),
(1, 11),
(1, 68),
(101, 2),
(101, 3),
(101, 4),
(101, 5),
(101, 6),
(101, 7),
(101, 8),
(101, 9),
(101, 10),
(101, 11),
(101, 12),
(101, 13),
(101, 14),
(101, 15),
(101, 16),
(104, 3),
(104, 4),
(104, 5),
(104, 6),
(104, 7),
(104, 8),
(104, 9),
(104, 10),
(104, 11),
(104, 12),
(104, 13),
(104, 14),
(104, 15),
(104, 16),
(1231434, 2);

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
(1, 1, 9),
(101, 1, 16),
(102, 1, 16),
(103, 1, 17),
(104, 1, 18),
(754, NULL, 7),
(4589, NULL, 6),
(1231434, 1, 14);

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
('10:30:00', '12:30:00', 1, '2024-01-01', 2, 1),
('15:00:00', '17:00:00', 2, '2024-01-10', 10, 0),
('11:11:00', '12:30:00', 3, '2024-01-15', 9, 1),
('11:11:00', '12:30:00', 4, '2024-01-15', 9, 1),
('14:30:00', '17:30:00', 6, '2024-02-01', 4, 1),
('11:11:00', '12:30:00', 7, '2024-02-10', 6, 1),
('14:15:00', '16:30:00', 8, '2024-02-15', 1, 1),
('11:30:00', '12:30:00', 9, '2023-12-25', 1, 0),
('09:00:00', '16:00:00', 10, '2024-02-20', 8, 1),
('14:15:00', '16:30:00', 11, '2024-02-15', 1, 1),
('11:11:00', '12:30:00', 12, '2024-02-15', 6, 1),
('09:00:00', '12:30:00', 13, '2024-01-20', 3, 1),
('14:40:00', '15:40:00', 14, '2023-12-29', 3, 0),
('14:00:00', '16:30:00', 15, '2023-12-05', 2, 0),
('11:30:00', '12:30:00', 16, '2023-12-25', 1, 0),
('10:30:00', '16:30:00', 17, '2023-12-02', 1, 0),
('14:00:00', '16:30:00', 18, '2023-11-24', 9, 0),
('10:30:00', '12:30:00', 3124, '2024-03-01', 10, 1);

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
(201, 'Directorate of Career Counseling & Student Affairs (DCCSA)', 'This Center provides career development counseling to UIU graduates. Cultivates and maintains relatio.', 'DCCSA_LOGO.jpg', 'career@uiu.ac.bd', '09604-848848'),
(202, 'GitHub', 'The AI-powered developer platform to build, scale, and deliver secure software.', 'GitHub_LOGO.jpg', 'support@github.com', '09604-998848'),
(203, 'JetBrains', 'Leaders in Pro Developer Tools! Makers of IntelliJ IDEA, Rider, PyCharm, TeamCity, Kotlin and more.', 'JetBrainsLOGO.png', 'sales@jetbrains.com', '09604-848841'),
(204, 'Sticker Mule', 'Custom printing that kicks ass. Easy online ordering, 4 day turnaround and free shipping.', 'StickerMuleLOGO.png', 'help@stickermule.com', '+1 303-647-1756'),
(206, 'bKash Limited', 'bKash Limited (a subsidiary of BRAC Bank Limited) is dedicated to providing Mobile Financial Services.', 'bKash Limited.png', 'support@bkash.com', ' 09604848848'),
(207, 'Nagad', 'Nagad envisions to be the one-stop digital finance solution for Bangladesh.', 'Nagad.jpg', 'info@nagad.com.bd', '09604848848'),
(208, 'Rocket', 'Dutch-Bangla Bank pioneered Mobile Banking in Bangladesh.', 'Rocket.jpg', ' ingfo@rocket.com.bd', '09604848848'),
(209, 'United International University', 'United International University (UIU) is the outcome of the initiative taken by a couple of renowned academicians. It is established with the generous support and patronage of the United Group, a successful business conglomerate operating in diverse business areas.', 'United International University.jpg', 'info@uiu.ac.bd', '09604848848'),
(210, 'BJIT Group', 'BJIT is a leading global IT outsourcing company shaping the future through Digital Transformation.', 'BJIT Group.png', 'digital.marketing@bjitgroup.com', '01958038009'),
(211, 'City Bank', 'City Bank is here to change the banking ecosystem with a range of innovative digital solutions for it', 'City Bank.jpg', ' ', ' '),
(212, 'Dhaka Bank', 'Excellence in Banking', 'Dhaka Bank.jpg', '', ''),
(213, 'Smart Software Ltd.', 'Smart Software Limited is a Software, Mobile App, eCommerce and Website Development Company.', 'Smart Software Ltd..png', 'hello@smartsoftware.com.bd', '01844047000'),
(214, 'SoftTech-IT Institute', '', 'SoftTech-IT Institute.jpg', 'softtechitinstitute@gmail.com', '01758101611'),
(215, 'SR Dream-IT', 'Biggest Freelancing Campaign.', 'SR Dream-IT.jpg', 'support@srdreamit.com', ' ');

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
(1, 'Multipurpose Hall', 700, 'hall4.jpg', 'UIU Multipurpose Hall(Basement)'),
(2, 'Smart Room', 300, 'smartroom1.jpg', 'UIU 1st floor'),
(3, 'Gallery', 500, 'field.png', 'UIU 1st floor'),
(4, 'Field', 200, 'field2.jpg', 'UIU Field'),
(5, 'Field', 500, 'field2.png', 'UIU Field'),
(6, 'Computer Lab', 50, 'computer_lab2.jpg', 'UIU 6th floor'),
(7, 'Canteen', 200, 'canteen1.jpg', 'UIU G-floor'),
(8, 'Field', 500, 'Field8.jpg', 'UIU field'),
(9, 'Computer Lab', 50, 'computer_lab1.jpg', 'UIU 5th floor'),
(10, 'Smart Room', 300, 'smartroom2.jpg', 'UIU 1st floor');

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
(11221068, 'hridoy ahmed', 'af@mail.com', '01911360991', 'student');

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
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`EventID`,`OrganizerID`,`notice`),
  ADD KEY `OrganizerID` (`OrganizerID`);

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
-- Indexes for table `pollvote`
--
ALTER TABLE `pollvote`
  ADD KEY `PollID` (`PollID`),
  ADD KEY `ParticipantID` (`ParticipantID`);

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
  MODIFY `PollID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `feedback_`
--
ALTER TABLE `feedback_`
  MODIFY `Fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

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
-- Constraints for table `notice`
--
ALTER TABLE `notice`
  ADD CONSTRAINT `notice_ibfk_1` FOREIGN KEY (`EventID`) REFERENCES `events` (`EventID`),
  ADD CONSTRAINT `notice_ibfk_2` FOREIGN KEY (`OrganizerID`) REFERENCES `organizer` (`OrganizerID`);

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
-- Constraints for table `pollvote`
--
ALTER TABLE `pollvote`
  ADD CONSTRAINT `pollvote_ibfk_1` FOREIGN KEY (`PollID`) REFERENCES `event_poll` (`PollID`),
  ADD CONSTRAINT `pollvote_ibfk_2` FOREIGN KEY (`ParticipantID`) REFERENCES `participants` (`ParticipantID`);

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
  ADD CONSTRAINT `request__ibfk_1` FOREIGN KEY (`EventID`) REFERENCES `events` (`EventID`),
  ADD CONSTRAINT `request__ibfk_2` FOREIGN KEY (`SlotID`) REFERENCES `slot` (`SlotID`);

--
-- Constraints for table `slot`
--
ALTER TABLE `slot`
  ADD CONSTRAINT `slot_ibfk_2` FOREIGN KEY (`VenueID`) REFERENCES `venue_` (`VenueID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
