-- phpMyAdmin SQL Dump
-- version 5.0.4deb2+deb11u1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 21, 2023 at 04:49 PM
-- Server version: 10.5.19-MariaDB-0+deb11u1
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eNGO`
--

-- --------------------------------------------------------

--
-- Table structure for table `NGOs`
--

CREATE TABLE `NGOs` (
  `ID` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Sector` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `Website` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `NGOs`
--

INSERT INTO `NGOs` (`ID`, `Name`, `Sector`, `State`, `Website`, `Address`, `Username`, `Password`) VALUES
(1, 'Association of Parents of Mentally Retarded Children (ADHAR)', 'Health & Family Welfare', 'Maharashtra', '\r\nhttp://www.adhar.org', '102, Om Shraddha Saburi CHS.Vishnu Nagar, Opp. Bhagwati School Naupada,', '', ''),
(2, 'Greensole Foundation', 'Children', 'Maharashtra ', 'https://give.do/aboutus#legal', 'Greensole, C/O A460 Ram Fashion Exports MIDC, Mahape', '', ''),
(3, 'MBA Foundation', 'Education', 'Maharashtra ', '\r\nhttp://www.gods-mbafoundation.org/?v=6c8403f93333\r\n', 'GODS&#39; Abode,Plot no 23 A, Near Abhudaya Bank, Sector 17, Airoli', '', ''),
(4, 'Thane Society for the Prevention of Cruelty to Animals', 'Animal Husbandry', 'Maharashtra \r\n', '\r\nhttp://www.thanespca.org\r\n', '305, Gangotri, Jangid Complex, Mira Road east', '', ''),
(5, 'Children Toy Foundation', 'Children', 'Maharashtra ', '\r\nhttps://www.childrentoyfoundation.org\r\n', 'Ali Building, 72, Shahid Bhagat Singh Road, Fort, Mumbai - 400001', '', ''),
(6, 'Child Help Foundation', 'Education', 'Maharashtra ', '\r\nhttp://www.childhelpfoundation.in/', '204, B/66, Jaydeep Bldg, ces-1 Shantinagar, opp TMT Bus stand, Mira Road ( East) , Thane', '', ''),
(7, 'Child Rights and You (CRY)', 'Education', 'Maharashtra ', 'http://www.cry.org\r\n', 'Child Rights and You, 189/A Anand Estate Sane Guruji Marg', '', ''),
(8, 'Committed Communities Development Trust', 'Health & Family Welfare	', 'Maharashtra', 'http://www.ccdtrust.org/', '42 Chapel Road, Bandra West, Mumbai 400050', '', ''),
(9, 'Educate Girls	', 'Women\'s Development & Empowerment', 'Maharashtra ', 'http://www.educategirls.in/', 'Suite No. 411, Fourth Floor Reliable Business Centre, Off New Link Road Oshiwara, Andheri (West)', '', ''),
(10, 'Fragile X Society', 'Children', 'Maharashtra ', 'http://www.fragilex.in/', '252, Krishna Bhawan Walkeshwar Road,Mumbai', '', ''),
(11, 'Habitat for Humanity India Trust	', 'Disaster Management	', 'Maharashtra ', 'https://habitatindia.org/', '301-A, Everest Chambers Marol Naka, Andheri East.', '', ''),
(12, 'Happy Feet Home Foundation	', 'Education', 'Maharashtra ', 'https://www.instagram.com/happyfeethomefoundation/\r\nhttps://www.facebook.com/HappyFeetHome/\r\n', '15/B/4, Jain Mandir road no -25, Sindhi Colony, Sion Mumbai', '', ''),
(13, 'Helen Keller Institute for Deaf & Deafblind', 'Education', 'Maharashtra ', '\r\nhttp://www.hkidb-mumbai.org/\r\nhttps://www.facebook.com/HKIDB/', 'Municipal School, Gr. Flr, Near \'s&#39; Bridge, N.M. Joshi Marg Byculla (W)', '', ''),
(14, 'Humane Society International/India', 'Education', 'Maharashtra ', 'http://www.hsi.org/india/', 'Regus 5th& 6th Floor, Mafatlal House, H.T. Parekh Marg, Backbay Reclamation', '', ''),
(15, 'Light Of Life Trust', 'Children', 'Maharashtra', 'https://www.lightoflifetrust.org', '181, Digital Planet, Hill Road, Bandra (West), Mumbai 400050', '', ''),
(16, 'Magic Bus India Foundation', 'Education & Literacy', 'Maharashtra \r\n', 'http://www.magicbusindia.org\r\n', '3rd Floor, JK Textiles Building, Mehra Estate Near Jaswanti Landmark, LBS Marg, Vikhroli West,', '', ''),
(17, 'Making A Difference Foundation', 'Education', 'Maharashtra ', 'http://www.makingadifferencefoundation.org/\r\n', '10/2 Dhanlakshmi Society Mogul Lane.', '', ''),
(18, 'Meljol', 'Education', 'Maharashtra \r\n', 'http://www.meljol.org/\r\n', 'Room No 47, 2nd Floor Gilder Lane Municipal School, Off Belassis Bridge, Mumbai Central', '', ''),
(19, 'Population First', 'Health & Family Welfare', 'Maharashtra \r\n', 'http://www.populationfirst.org/', 'Ratan Manzil, Ground Floor, 64, Woodehouse road, Colaba.', '', ''),
(20, 'Prerana (Mumbai)', 'Children', 'Maharashtra \r\n', 'http://www.preranaantitrafficking.org/', 'Ground Floor,Khetwadi Municipal School(Dagdishala),Grant Road (East).', '', ''),
(21, 'Ratna Nidhi Charitable Trust', 'Education', 'Maharashtra', 'http://www.ratnanidhi.in/', 'Vasant Vilas, 5th Floor, D.D Sathye Marg Near Girgaum Church, Charni Road', '', ''),
(22, 'Sahaara Charitable Society', 'Education', 'Maharashtra', 'http://www.sahaarasociety.org/\r\n\r\n', 'Ground Floor, Gauri Shankar Building, Plot no. 50A Pestom Sagar Road No. 2, Chembur', '', ''),
(23, 'Save The Children India', 'Children', 'Maharashtra', 'https://www.viplafoundation.org/', 'SF 9 , G Block, Bandra Kurla Complex Next To American School of Bombay, Bandra East', '', ''),
(24, 'St. Jude India Childcare Centres', 'Children', 'Maharashtra', 'http://www.stjudechild.org', '525,Arun Chambers, 5th Floor,Tardeo Road,Victoria House,Pandurang Budhkar Marg', '', ''),
(25, 'Swades Foundation', 'Education', 'Maharashtra', 'https://www.swadesfoundation.org/', 'Nishuvi, 3rd floor, 75, Dr Annie Besant Road, Worli.', '', ''),
(26, 'Thinksharp Foundation', 'Education', 'Maharashtra', 'http://www.thinksharpfoundation.org', 'Flat No 1401, Bld No. 4B, Dreams Complex LBS Road, Bhandup West', '', ''),
(27, 'Toybank', 'Education', 'Maharashtra', 'http://www.toybank.org', '7, Jay Kutir, Taikalwadi Lane Mahim', '', ''),
(28, 'Vivekananda Youth Forum', 'Education', 'Maharashtra', 'http://www.vyfngo.com/', 'Vivekananda Youth Forum, 19-D Firdaus, 4th Road, J.V.P.D. Scheme, Vile-Parle (West)', '', ''),
(29, 'Young Innovators Foundation', 'Children', 'Maharashtra', 'http://www.yif.co.in/\r\n', '1D, Tower B, Viceroy Park Thakur Village, Kandivali East', '', ''),
(30, 'Smile Foundation', 'Education', 'Maharashtra', 'https://www.smilefoundationindia.org/', 'Building 101,First Floor, Gladiola,Hanuman Rd, Vile Parle East', '', ''),
(31, 'Test', 'Test', 'Test', 'Ttetst', 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `NGOsProblemRequest`
--

CREATE TABLE `NGOsProblemRequest` (
  `NID` int(11) NOT NULL,
  `PID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `NGOsProblemRequest`
--

INSERT INTO `NGOsProblemRequest` (`NID`, `PID`) VALUES
(2, 1),
(3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `PendingNGOsApproval`
--

CREATE TABLE `PendingNGOsApproval` (
  `NID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Sector` text NOT NULL,
  `State` text NOT NULL,
  `Website` text NOT NULL,
  `Address` text NOT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `PendingUsersApproval`
--

CREATE TABLE `PendingUsersApproval` (
  `UID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  `Mobile` int(11) NOT NULL,
  `Email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `PendingUsersApproval`
--

INSERT INTO `PendingUsersApproval` (`UID`, `Name`, `Username`, `Password`, `Mobile`, `Email`) VALUES
(1, 'ghhg', 'sadsa', 'sadsda', 22, 'sdad');

-- --------------------------------------------------------

--
-- Table structure for table `problemAssigned`
--

CREATE TABLE `problemAssigned` (
  `PID` int(11) NOT NULL,
  `NID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `problemAssigned`
--

INSERT INTO `problemAssigned` (`PID`, `NID`) VALUES
(1, 2),
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Problems`
--

CREATE TABLE `Problems` (
  `pid` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Location` text NOT NULL,
  `Sector` text NOT NULL,
  `Problem` text NOT NULL,
  `Mobile` int(11) NOT NULL,
  `CreatedBy` text NOT NULL,
  `CreatedOn` date NOT NULL,
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Problems`
--

INSERT INTO `Problems` (`pid`, `Title`, `Location`, `Sector`, `Problem`, `Mobile`, `CreatedBy`, `CreatedOn`, `status`) VALUES
(1, 'Public\'s Health', 'Thane', 'Health', 'Malnutrition', 0, '', '0000-00-00', 'pending'),
(2, 'Insufficient Water Supply', 'Mumbai', 'Agriculture', 'Tdnfkjsfsjdfksdjflkdasflksjdflkjdsflkkejflk jds ksdk jdslk js lkjflk jskfsjasdkfj k', 0, '', '0000-00-00', 'pending'),
(3, 'test', 'test', 'test', 'skdfjlsakdjfsdj lkej jad flksdjflsjfljdflkajdsfkks ejffds k ds asdf sdf sdf', 0, '', '0000-00-00', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `UID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  `Email` varchar(14) NOT NULL,
  `Mobile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`UID`, `Name`, `Username`, `Password`, `Email`, `Mobile`) VALUES
(2, 'test', 'test', 'test', 'test@test.com', 999999999);

-- --------------------------------------------------------

--
-- Table structure for table `UsersProblemApproval`
--

CREATE TABLE `UsersProblemApproval` (
  `PID` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Sector` text NOT NULL,
  `Problem` text NOT NULL,
  `Location` text NOT NULL,
  `Contact` int(11) NOT NULL,
  `CreatedOn` date NOT NULL DEFAULT current_timestamp(),
  `CreatedBy` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `UsersProblemApproval`
--

INSERT INTO `UsersProblemApproval` (`PID`, `Title`, `Sector`, `Problem`, `Location`, `Contact`, `CreatedOn`, `CreatedBy`) VALUES
(1, 'Testing', 'Test', 'Test', 'test', 99999999, '2023-04-01', 'Test'),
(2, 'test', 'test', 'test', 'test', 38329832, '2023-04-03', ''),
(3, 'ksdj', 'ksdhs', 'dwfhsdjhdsfh', 'siu', 23343212, '2023-04-03', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `NGOs`
--
ALTER TABLE `NGOs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `PendingNGOsApproval`
--
ALTER TABLE `PendingNGOsApproval`
  ADD PRIMARY KEY (`NID`);

--
-- Indexes for table `PendingUsersApproval`
--
ALTER TABLE `PendingUsersApproval`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `Problems`
--
ALTER TABLE `Problems`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `UsersProblemApproval`
--
ALTER TABLE `UsersProblemApproval`
  ADD PRIMARY KEY (`PID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `NGOs`
--
ALTER TABLE `NGOs`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `PendingNGOsApproval`
--
ALTER TABLE `PendingNGOsApproval`
  MODIFY `NID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `PendingUsersApproval`
--
ALTER TABLE `PendingUsersApproval`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Problems`
--
ALTER TABLE `Problems`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `UsersProblemApproval`
--
ALTER TABLE `UsersProblemApproval`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
