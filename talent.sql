-- Database: `talent`

-- --------------------------------------------------------
--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`UserId`, `UserName`, `Password`) VALUES
(1, 'kokhui', 'kokhui'),
(2, 'ali', 'abu'),
(3, 'abu', 'ali');

-- --------------------------------------------------------
--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `NewsId` int(11) NOT NULL AUTO_INCREMENT,
  `News` varchar(200) NOT NULL,
  `NewsDate` date NOT NULL,
  PRIMARY KEY (`NewsId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`NewsId`, `News`, `NewsDate`) VALUES
(1, 'Register and Find Talent', '2019-09-24'),
(2, 'Maintenance for connection issues is on going', '2019-10-15'),
(3, 'Connection issues already solve', '2019-10-16'),
(4, 'New function is developing', '2020-01-11'),
(5, 'New function is done developing, please go explore the new function', '2020-01-15');

-- --------------------------------------------------------
--
-- Table structure for table `student_r`
--

CREATE TABLE IF NOT EXISTS `student_r` (
  `StudentId` int(11) NOT NULL AUTO_INCREMENT,
  `StudentName` varchar(20) NOT NULL,
  `Area` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Answer` varchar(50) NOT NULL,
  PRIMARY KEY (`StudentId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `student_r`
--

INSERT INTO `student_r` (`StudentId`, `StudentName`, `Area`, `Email`, `Mobile`, `Status`, `UserName`, `Password`, `Question`, `Answer`) VALUES
(1, 'YEOW CO NEE', 'Johor', 'conee99@gmail.com', 0167331782, 'Confirm', 'conee', 'conee', 'Who is Your Favourite Person?', 'kh'),
(2, 'WONG JEE KIT', 'Melaka', 'Jkwong9803@gmail.com', 01110507182, 'Confirm', 'jeekit', 'jeekit', 'Who is Your Favourite Person?', 'gun'),
(3, 'YANG CHING HONG', 'Johor', 'ching_hong98@hotmail.com', 01110519563, 'Confirm', 'chinghong', 'chinghong', 'Who is Your Favourite Person?', 'zoro'),
(4, 'TING TECK LOONG', 'Perak', 'tingteckloong@yahoo.com ', 0128898789, 'Confirm', 'teckloong', 'teckloong', 'Who is Your Favourite Person?', 'jess'),
(5, 'TAN YI LIN', 'Johor', 'e.sone0802@gmail.com', 0126877114, 'Confirm', 'elaine', 'elaine', 'What is Your Pet Name?', 'di'),
(6, 'NG JING YONG', 'Johor', 'Jingyong615199800@gmail.com', 0105185575, 'Confirm', 'jingyong', 'jingyong', 'What is Your Pet Name?', 'yuanyuan'),
(7, 'LIM YUN LIANG', 'Johor', 'limyunliang@gmail.com', 0128733789, 'Confirm', 'yunliang', 'yunliang', 'Who is Your Favourite Person?', 'hong'),
(8, 'LIM XIN YI', 'Penang', 'limxinyi002@gmail.com', 0173356788, 'Confirm', 'xinyi', 'xinyi', 'Who is Your Favourite Person?', 'felicia'),
(9, 'GOH RUI HAN', 'Melaka', 'gohruihan@gmail.com ', 0128726289, 'Pending', 'ruihan', 'ruihan', 'Who is Your Favourite Person?', 'ivan'),
(10, 'CHUA CHEE HIAN', 'Melaka', 'alien980213@Gmail.com', 0128788789, 'Pending', 'cheehian', 'cheehian', 'Who is Your Favourite Person?', 'gun');

-- --------------------------------------------------------
--
-- Table structure for table `student_feedback`
--

CREATE TABLE IF NOT EXISTS `student_feedback` (
  `StudentFeedbackId` int(11) NOT NULL AUTO_INCREMENT,
  `StudentId` int(11) NOT NULL,
  `StudentFeedback` varchar(200) NOT NULL,
  `StudentFeedbackDate` date NOT NULL,
  PRIMARY KEY (`StudentFeedbackId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `student_feedback`
--

INSERT INTO `student_feedback` (`StudentFeedbackId`, `StudentId`, `StudentFeedback`, `StudentFeedbackDate`) VALUES
(1, 1, 'Design of the application very nice', '2019-09-13'),
(2, 2, 'This application is not usefull', '2019-09-16'),
(3, 3, 'Nice application', '2019-09-18'),
(4, 4, 'I cannot update my profile', '2019-09-18'),
(5, 5, 'Good', '2019-09-18'),
(6, 6, 'Nice', '2019-10-5'),
(7, 7, 'Great App', '2019-11-13'),
(8, 8, 'Very usefull', '2019-11-16'),
(9, 9, 'This application is amazing', '2019-12-18'),
(10, 10, 'New function very nice', '2020-01-18');

-- --------------------------------------------------------
--
-- Table structure for table `talent`
--

CREATE TABLE IF NOT EXISTS `talent` (
  `TalentId` int(11) NOT NULL AUTO_INCREMENT,
  `StudentId` int(11) NOT NULL,
  `StudentName` varchar(20) NOT NULL,
  `TalentTitle` varchar(50) NOT NULL,
  `IG` varchar(20) NOT NULL,
  `TalentVideo` varchar(250) NOT NULL,
  `TalentResume` varchar(250) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Status` varchar(10) NOT NULL,
  PRIMARY KEY (`TalentId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `talent`
--

INSERT INTO `talent` (`TalentId`, `StudentId`, `StudentName`, `TalentTitle`, `IG`, `TalentVideo`, `TalentResume`, `Description`, `Status`) VALUES
(1, 1, 'YEOW CO NEE', 'Sing', 'neenee99', '<iframe width="871" height="490" src="https://www.youtube.com/embed/kLvnet_N3ZM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',  '<iframe src="https://onedrive.live.com/embed?cid=4CFC3C4449000027&resid=4CFC3C4449000027%211727&authkey=AN0nZWiFbYMW2Qw&em=2" width="476" height="288" frameborder="0" scrolling="no"></iframe>', 'FB-Conee Channel YouTube-Conee Channel', 'Confirm'),
(2, 1, 'YEOW CO NEE', 'Sing', 'neenee99', '<iframe width="871" height="490" src="https://www.youtube.com/embed/W3QOuZ_kUXw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',  '<iframe src="https://onedrive.live.com/embed?cid=4CFC3C4449000027&resid=4CFC3C4449000027%211727&authkey=AN0nZWiFbYMW2Qw&em=2" width="476" height="288" frameborder="0" scrolling="no"></iframe>', 'FB-Conee Channel YouTube-Conee Channel', 'Confirm'),
(3, 2, 'WONG JEE KIT', 'Drawing', 'jeekitdraw9696', '<iframe width="871" height="490" src="https://www.youtube.com/embed/DzQlLaQPuEw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',  '<iframe src="https://onedrive.live.com/embed?cid=4CFC3C4449000027&resid=4CFC3C4449000027%211721&authkey=AA3UEmD8O6cUzxE&em=2" width="476" height="288" frameborder="0" scrolling="no"></iframe>', 'Hand Drawn Commision Work DM Me', 'Confirm'),
(4, 3, 'YANG CHING HONG', 'Dance', 'YCHStudio', '<iframe width="871" height="490" src="https://www.youtube.com/embed/Hp0fH3Tizl0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',  '<iframe src="https://onedrive.live.com/embed?cid=4CFC3C4449000027&resid=4CFC3C4449000027%211718&authkey=ANJVsmNOJ1GEVzU&em=2" width="476" height="288" frameborder="0" scrolling="no"></iframe>', 'Event Dancer PM for more information', 'Confirm'),
(5, 4, 'TING TECK LOONG', 'Photographer', 'TeckMe', '<iframe width="871" height="490" src="https://www.youtube.com/embed/K3LdrN7cXUk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',  '<iframe src="https://onedrive.live.com/embed?cid=4CFC3C4449000027&resid=4CFC3C4449000027%211726&authkey=AFNfnMGNKereUnk&em=2" width="476" height="288" frameborder="0" scrolling="no"></iframe>', 'Please contact for more information', 'Confirm'),
(6, 4, 'TING TECK LOONG', 'Photo Editing', 'TeckMeMore', '<iframe width="871" height="490" src="https://www.youtube.com/embed/K3LdrN7cXUk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',  '<iframe src="https://onedrive.live.com/embed?cid=4CFC3C4449000027&resid=4CFC3C4449000027%211726&authkey=AFNfnMGNKereUnk&em=2" width="476" height="288" frameborder="0" scrolling="no"></iframe>', 'Please contact for more information', 'Confirm'),
(7, 5, 'TAN YI LIN', 'Blogger', 'YiLin86', '<iframe width="871" height="490" src="https://www.youtube.com/embed/Mgx1PLRlVGI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',  '<iframe src="https://onedrive.live.com/embed?cid=4CFC3C4449000027&resid=4CFC3C4449000027%211727&authkey=AN0nZWiFbYMW2Qw&em=2" width="476" height="288" frameborder="0" scrolling="no"></iframe>', 'Follow Me ★Facebook: https://www.facebook.com/alisasa11111/ Blog: http://goodalicia.pixnet.net/blog', 'Confirm'),
(8, 6, 'NG JING YONG', 'Music Band', 'BJYBAND', '<iframe width="871" height="490" src="https://www.youtube.com/embed/IEo0XBaEx4o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',  '<iframe src="https://onedrive.live.com/embed?cid=4CFC3C4449000027&resid=4CFC3C4449000027%211725&authkey=AAvYMwEp3Tndonk&em=2" width="476" height="288" frameborder="0" scrolling="no"></iframe>', 'DM for more information', 'Confirm'),
(9, 7, 'LIM YUN LIANG', 'Gym Trainer', 'YL98', '<iframe width="871" height="490" src="https://www.youtube.com/embed/8Rsl_n7ROWE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',  '<iframe src="https://onedrive.live.com/embed?cid=4CFC3C4449000027&resid=4CFC3C4449000027%211717&authkey=AIdfGpBQoswmpxE&em=2" width="476" height="288" frameborder="0" scrolling="no"></iframe>', 'I hope you will get a lot of benefits from my contents', 'Confirm'),
(10, 8, 'LIM XIN YI', 'Tour Guide', 'XinYiChannel', '<iframe width="871" height="490" src="https://www.youtube.com/embed/53JBTXKyTGA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',  '<iframe src="https://onedrive.live.com/embed?cid=4CFC3C4449000027&resid=4CFC3C4449000027%211724&authkey=ACqFMbYzUB6FtS8&em=2" width="476" height="288" frameborder="0" scrolling="no"></iframe>', 'FB-XinYiChannel YouTube-XinYiChannel', 'Confirm');


-- --------------------------------------------------------
--
-- Table structure for table `employer_r`
--

CREATE TABLE IF NOT EXISTS `employer_r` (
  `EmployerId` int(11) NOT NULL AUTO_INCREMENT,
  `EmployerName` varchar(20) NOT NULL,
  `Area` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Answer` varchar(50) NOT NULL,
  PRIMARY KEY (`EmployerId`),
  KEY `EmployerId` (`EmployerId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `employer_r`
--

INSERT INTO `employer_r` (`EmployerId`, `EmployerName`, `Area`, `Email`, `Mobile`, `Status`, `UserName`, `Password`, `Question`, `Answer`) VALUES
(1, 'JASON AW HAN WEI', 'Melaka', 'jason98@gmail.com', 0183857734, 'Confirm', 'jason', 'jason', 'Who is Your Favourite Person?', 'gun'),
(2, 'GUN HAN WEI', 'Melaka', 'gunlojz@gmail.com', 0128822371, 'Confirm', 'gun', 'gun', 'Who is Your Favourite Person?', 'jason'),
(3, 'CHU CHUN TAT', 'Sabah', 'ctat98@gmail.com', 0126387833, 'Confirm', 'chuntat', 'chuntat', 'Who is Your Favourite Person?', 'ivan'),
(4, 'HO HONG SHEN', 'Johor', 'hongshen@gmail.com', 0176826381, 'Pending', 'hongshen', 'hongshen', 'Who is Your Favourite Person?', 'guanming'),
(5, 'TAN GUAN MING', 'Johor', 'gmtan@gmail.com', 0168762331, 'Pending', 'guanming', 'guanming', 'Who is Your Favourite Person?', 'hongshen');

-- --------------------------------------------------------
--
-- Table structure for table `employer_feedback`
--

CREATE TABLE IF NOT EXISTS `employer_feedback` (
  `EmployerFeedbackId` int(11) NOT NULL AUTO_INCREMENT,
  `EmployerId` int(11) NOT NULL,
  `EmployerFeedback` varchar(200) NOT NULL,
  `EmployerFeedbackDate` date NOT NULL,
  PRIMARY KEY (`EmployerFeedbackId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `employer_feedback`
--

INSERT INTO `employer_feedback` (`EmployerFeedbackId`, `EmployerId`, `EmployerFeedback`, `EmployerFeedbackDate`) VALUES
(1, 1, 'Very usefull application', '2019-09-13'),
(2, 2, 'This application is not usefull', '2019-09-16'),
(3, 3, 'Nice application', '2019-09-18'),
(4, 4, 'Great', '2019-09-18'),
(5, 5, 'I cannot update my profile', '2019-10-18'),
(6, 6, 'New function very nice', '2020-01-18');

-- --------------------------------------------------------
--
-- Table structure for table `like_master`
--

CREATE TABLE IF NOT EXISTS `like_master` (
  `LikeId` int(11) NOT NULL AUTO_INCREMENT,
  `EmployerId` int(11) NOT NULL,
  `TalentId` int(11) NOT NULL,
  PRIMARY KEY (`LikeId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `like_master`
--

INSERT INTO `like_master` (`LikeId`, `EmployerId`, `TalentId`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 1, 4),
(5, 2, 5),
(6, 3, 6),
(7, 1, 7),
(8, 2, 8),
(9, 3, 9),
(10, 1, 10),
(11, 2, 1),
(12, 3, 2),
(13, 1, 3),
(14, 2, 4),
(15, 3, 5),
(16, 1, 6),
(17, 2, 7),
(18, 3, 8);

-- --------------------------------------------------------
--
-- Table structure for table `visitor_feedback`
--

CREATE TABLE IF NOT EXISTS `visitor_feedback` (
  `VisitorFeedbackId` int(11) NOT NULL AUTO_INCREMENT,
  `VisitorFeedback` varchar(200) NOT NULL,
  `VisitorFeedbackDate` date NOT NULL,
  PRIMARY KEY (`VisitorFeedbackId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `visitor_feedback`
--

INSERT INTO `visitor_feedback` (`VisitorFeedbackId`, `VisitorFeedback`, `VisitorFeedbackDate`) VALUES
(1, 'Nise design', '2019-09-13'),
(2, 'This application very attractive', '2019-09-16'),
(3, 'I cant register', '2019-09-18'),
(4, 'Great', '2019-09-18'),
(5, 'Nice application', '2019-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `talentmaster`
--

CREATE TABLE `talentmaster` (
  `talentID` int(11) NOT NULL AUTO_INCREMENT,
  `talentName` varchar(255) NOT NULL,
PRIMARY KEY (`talentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10;

--
-- Dumping data for table `talentmaster`
--

INSERT INTO `talentmaster` (`talentID`, `talentName`) VALUES
(1, 'Drawing'),
(2, 'Dance'),
(3, 'Ptohographer'),
(4, 'Photo Editing'),
(5, 'Blogger'),
(6, 'Music Band'),
(7, 'Gym Trainer'),
(8, 'Tour Guide'),
(9, 'Sing');



