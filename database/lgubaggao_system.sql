-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2023 at 07:20 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lgubaggao_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'Counter 1', 'Counter 1'),
(3, 'Counter 2', 'Counter 2'),
(4, 'Counter 3', 'Counter 3'),
(5, 'Counter 4', 'Counter 4'),
(6, 'Counter 5', 'Counter 5'),
(7, 'Counter 6', 'Counter 6'),
(8, 'counter 7', 'counter 7'),
(9, 'counter 8', 'counter 8'),
(10, 'counter 9', 'counter 9'),
(11, 'counter 10', 'counter 10'),
(12, 'counter 11', 'counter 11'),
(13, 'counter 12', 'counter 12'),
(14, 'counter 13', 'counter 13'),
(15, 'counter 14', 'counter 14');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedbackID` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `feedback_type` varchar(255) NOT NULL,
  `feedback_content` varchar(5000) NOT NULL,
  `time` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedbackID`, `fullname`, `email`, `feedback_type`, `feedback_content`, `time`, `date`) VALUES
(1, 'Complainants Name', 'Complainants@gmail.com', 'Complaint', 'Complainant&#039;s Sample Complain #1; October 01, 2023.', '7:38 am', ' 2023-10-01'),
(2, 'Complainants Name', 'Complainants@gmail.com', 'Suggestion', 'Complainant&#039;s Sample Suggestion #1; October 01, 2023', '7:41 am', ' 2023-10-01'),
(3, 'Complainants Name', 'Complainants@gmail.com', 'Concern', 'Complainant&#039;s Sample Concern #1; October 01, 2023', '7:42 am', ' 2023-10-01'),
(4, 'Complainants Name', 'Complainants@gmail.com', 'Complaint', 'Complainant&#039;s Sample Complain #2; October 02, 2023', '7:45 am', ' 2023-10-02'),
(5, 'Complainants Name', 'Complainants@gmail.com', 'Suggestion', 'Complainant&#039;s Sample Suggestion #2; October 02, 2023', '7:45 am', ' 2023-10-02'),
(6, 'Complainants Name', 'Complainants@gmail.com', 'Concern', 'Complainant&#039;s Sample Concern #2; October 02, 2023', '7:45 am', ' 2023-10-02'),
(7, 'Complainants Name', 'Complainants@gmail.com', 'Complaint', 'Complainant&#039;s sample complain #3; October 03, 2023', '8:55 am', ' 2023-10-03'),
(8, 'Complainants Name', 'Complainants@gmail.com', 'Suggestion', 'Complainant&#039;s sample suggestion #3; October 03, 2023', '8:55 am', ' 2023-10-03'),
(9, 'Complainants Name', 'Complainants@gmail.com', 'Concern', 'Complainant&#039;s sample complain #3; October 03, 2023', '8:55 am', ' 2023-10-03'),
(10, 'Complainants Name', 'Complainants@gmail.com', 'Complaint', 'Complainant&#039;s Sample Complaint; Auto Refresh', '9:00 am', ' 2023-10-03'),
(11, 'Complainants Name', 'Complainants@gmail.com', 'Complaint', 'Complainant&#039;s Complain Testing', '9:02 am', ' 2023-10-03'),
(12, 'Complainants Name', 'Complainants@gmail.com', 'Suggestion', 'Suggestion', '9:17 am', ' 2023-10-03'),
(13, 'Complainants Name', 'Complainants@gmail.com', 'Complaint', 'Complain', '2:56 am', ' 2023-10-05'),
(14, 'Clients Complain', 'Complain@gmail.com', 'Complaint', 'Complain of the Client Here.', '10:09 am', ' 2023-11-07'),
(15, 'Clients Suggestion', 'Suggestion@gmail.com', 'Suggestion', 'Suggestion of the Client here.', '10:18 am', ' 2023-11-07');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `historyID` int(11) NOT NULL,
  `history` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`historyID`, `history`) VALUES
(1, 'A third class municipality with an area of 92,060 hectares. It was once a barangay of Amulung but due to a Royal Degree on November 27, 1896, it was separated from Amulung. Don Rafael Catolico became its head in 1899 making Baggao automatically a \"pueblo.\"'),
(2, 'Bounded by the Sierra Madre Mountain and the Pacific Ocean, Baggao also boasts of several scenic spots like the seven Steps at Gimuno, Duba Summer Resort and the hot spring at Intal, to name a few.'),
(3, 'A third class municipality with an area of 92,060 hectares. It was once a barangay of Amulung but due to a Royal Degree on November 27, 1896, it was separated from Amulung. Don Rafael Catolico became its head in 1899 making Baggao automatically a \"pueblo.\"'),
(4, 'Bounded by the Sierra Madre Mountain and the Pacific Ocean, Baggao also boasts of several scenic spots like the seven Steps at Gimuno, Duba Summer Resort and the hot spring at Intal, to name a few.'),
(5, 'The inhabitants were from the early Indonesian immigrant to the present-day Ybanag, Kalingas and the migrant Ilocanos who introduced the tobacco crop.'),
(6, 'As more settlers poured in, a Spanish Missionary was assigned in the person of Fray Pedro Vicandi, O.P. He directed the construction of a chapel atop the hill overlooking the village.'),
(7, 'The most important products are rice, corn, tobacco, mongo and lumber. The chief occupation of the people is farming.'),
(8, 'Baggao is the birthplace of Msgr. Teodolfo S. Domingo, D.D. He is the first native bishop of the Tuguegarao Diocese, and was consecrated on July 2, 1957 by Msgr. Egidio Vaquozzi, Papal Nuncio.');

-- --------------------------------------------------------

--
-- Table structure for table `lgubaggao`
--

CREATE TABLE `lgubaggao` (
  `contentID` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `background` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(500) NOT NULL,
  `facebook` varchar(500) NOT NULL,
  `location` varchar(500) NOT NULL,
  `map` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lgubaggao`
--

INSERT INTO `lgubaggao` (`contentID`, `logo`, `background`, `contact`, `email`, `website`, `facebook`, `location`, `map`) VALUES
(1, 'logo.jpg', 'background.jpeg', '0992-245-4523', 'baggaocagayan@gmail.com', 'baggao.gov.ph', 'facebook.com/baggaoio', 'San Jose, Alcala - Baggao Rd, Baggao, Cagayan', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3796.9196544444667!2d121.86896297492952!3d17.889210088155505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3385ee9c48f9c8bf%3A0x21cc627cbbe27a6!2sBaggao%20Town%20Hall!5e0!3m2!1sen!2sph!4v1696062145412!5m2!1sen!2sph');

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE `mission` (
  `missionID` int(11) NOT NULL,
  `mission` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`missionID`, `mission`) VALUES
(1, 'To uplift the well-being of Baggaoeños through efficient and effective delivery of basic services, conserve forest and aquatic resources, enhance agro-industries and sustainably develop eco-tourism destinations.');

-- --------------------------------------------------------

--
-- Table structure for table `pledge`
--

CREATE TABLE `pledge` (
  `pledgeID` int(11) NOT NULL,
  `pledge` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pledge`
--

INSERT INTO `pledge` (`pledgeID`, `pledge`) VALUES
(1, ' We, the officials and employees of the municipality of BAGGAO pledge and commit to deliver quality public services as promised in this Citizens Charter. Specifically we will:'),
(2, ' Serve with integrity. Be prompt and timely. Display procedures, fees, and charges. Provide adequate and correct information. Be consistent in applying the rules. Provide feedback mechanism. Be polite and courteous.'),
(3, 'Demonstrate sensitivity and appropriate behavior and professionalism. Wear proper uniform and identification. Be available during office hours. Respond to complaints. Provide comfortable waiting area. Treat everyone equally.');

-- --------------------------------------------------------

--
-- Table structure for table `queue`
--

CREATE TABLE `queue` (
  `queueID` int(11) NOT NULL,
  `queueNo` int(11) NOT NULL,
  `Office` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `queue`
--

INSERT INTO `queue` (`queueID`, `queueNo`, `Office`, `type`) VALUES
(2, 5001, 'Department of Agriculture Office', 'P'),
(3, 4001, 'Municipal Social Welfare and Development Office', 'NP'),
(4, 5001, 'Department of Agriculture Office', 'NP'),
(5, 6001, 'Civil Registrar Office', 'P'),
(6, 6001, 'Civil Registrar Office', 'NP'),
(7, 6002, 'Civil Registrar Office', 'NP'),
(8, 7001, 'Mayors Office', 'P'),
(9, 7001, 'Mayors Office', 'NP');

-- --------------------------------------------------------

--
-- Table structure for table `queuing`
--

CREATE TABLE `queuing` (
  `queue` int(11) NOT NULL,
  `queueID` int(11) NOT NULL,
  `office` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `queuing`
--

INSERT INTO `queuing` (`queue`, `queueID`, `office`, `type`) VALUES
(1, 4001, 'Municipal Social Welfare and Development Office', 'P'),
(2, 4001, 'Municipal Social Welfare and Development Office', 'P'),
(3, 4001, 'Municipal Social Welfare and Development Office', 'NP'),
(4, 5001, 'Department of Agriculture Office', 'P'),
(5, 5001, 'Department of Agriculture Office', 'NP'),
(6, 6001, 'Civil Registrar Office', 'P'),
(7, 6001, 'Civil Registrar Office', 'NP'),
(8, 7001, 'Mayors Office', 'NP'),
(9, 7001, 'Mayors Office', 'NP'),
(10, 7001, 'Mayors Office', 'NP'),
(11, 7001, 'Mayors Office', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `vision`
--

CREATE TABLE `vision` (
  `visionID` int(11) NOT NULL,
  `vision` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vision`
--

INSERT INTO `vision` (`visionID`, `vision`) VALUES
(1, 'BAGGAO, an agro-industrial, forest-based municipality and eco-tourist destination of northeastern Cagayan along the pacific inhabited by peaceful, healthy, empowered, God-loving citizenry, self-reliant and disaster-resilient community living in a balanced and sustainable environment with adequate infrastructure facilities, progressive and globally-competitive economy governed by service-oriented, accountable and transparent leaders.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedbackID`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`historyID`);

--
-- Indexes for table `lgubaggao`
--
ALTER TABLE `lgubaggao`
  ADD PRIMARY KEY (`contentID`);

--
-- Indexes for table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`missionID`);

--
-- Indexes for table `pledge`
--
ALTER TABLE `pledge`
  ADD PRIMARY KEY (`pledgeID`);

--
-- Indexes for table `queue`
--
ALTER TABLE `queue`
  ADD PRIMARY KEY (`queueID`);

--
-- Indexes for table `queuing`
--
ALTER TABLE `queuing`
  ADD PRIMARY KEY (`queue`);

--
-- Indexes for table `vision`
--
ALTER TABLE `vision`
  ADD PRIMARY KEY (`visionID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedbackID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `historyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lgubaggao`
--
ALTER TABLE `lgubaggao`
  MODIFY `contentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mission`
--
ALTER TABLE `mission`
  MODIFY `missionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pledge`
--
ALTER TABLE `pledge`
  MODIFY `pledgeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `queue`
--
ALTER TABLE `queue`
  MODIFY `queueID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `queuing`
--
ALTER TABLE `queuing`
  MODIFY `queue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vision`
--
ALTER TABLE `vision`
  MODIFY `visionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
