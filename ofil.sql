-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2016 at 01:19 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ofil`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `cid` varchar(10) NOT NULL,
  `cname` text NOT NULL,
  `ccat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `cname`, `ccat`) VALUES
('CAC001', 'Advance MS Excel', 'Advance Computer'),
('CAC002', 'Auto CAD', 'Advance Computer'),
('CCC001', 'Course on Safety & Disaster Management', 'CCP'),
('CCC002', 'Awarness Programme on EnMS', 'CCP'),
('CIND01', 'Induction Training for CM(T/Met) recruited through LDCE', 'Long Term'),
('CIND02', 'Induction Training for Newly recruted LDCs', 'Long Term'),
('CM0001', 'Basic Metallurgy for Non- Metallurgist', 'Metallurgy'),
('CM0002', 'Corrosion & Effects on Environment on Metals, Particularly on Small Arms', 'Metallurgy'),
('CSA001', 'CCC on Small Arms manufacture', 'Small Arms'),
('CSA002', 'CNC part programming & Maintenance of CNC Machines', 'Small Arms'),
('NCA001', 'Behavioral Sciences & Communication Skills', 'Admin'),
('NCA002', 'CCS(Conduct) Rule, Role of IO/PO', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `coursedir`
--

CREATE TABLE IF NOT EXISTS `coursedir` (
  `cid` varchar(10) NOT NULL,
  `cname` text NOT NULL,
  `dirname` text NOT NULL,
  `dirphn` bigint(10) NOT NULL,
  `diremail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursedir`
--

INSERT INTO `coursedir` (`cid`, `cname`, `dirname`, `dirphn`, `diremail`) VALUES
('CCC001', 'Course on Safety & Disaster Management', 'Clint Basu', 8697524160, 'clint@basu.com'),
('CCC002', 'Awarness Programme on EnMS', 'Peter Dasgupta', 8731073695, 'peter@dasgupta.com'),
('CM0001', 'Basic Metallurgy for Non- Metallurgist', 'Wade Mukherjee', 8981414331, 'wade@mukherjee.com'),
('CIND01', 'Induction Training for CM(T/Met) recruited through LDCE', 'James Ghatak', 9007199770, 'james@ghatak.com'),
('CAC001', 'Advance MS Excel', 'Natasha Banerjee', 9007889678, 'natasha@banerjee.com'),
('CM0002', 'Corrosion & Effects on Environment on Metals,Particulerly on Small Arms', 'Bruce Mukherje', 9038350549, 'bruce@mukherje.com'),
('CIND02', 'Induction Training for Newly recruted LDCs', 'Wanda Mitra', 9051448944, 'wanda@mitra.com'),
('CSA001', 'CCC on Small Arms manufacture', 'Bucky Kumar', 9614172630, 'bucky@kumar.com'),
('NCA001', 'Behavioral Sciences & Communication skills', 'Steve Das', 9830871381, 'steve@das.com'),
('CAC002', 'Auto CAD', 'Anthony Khan', 9836777707, 'anthony@khan.com');

-- --------------------------------------------------------

--
-- Table structure for table `c_grade`
--

CREATE TABLE IF NOT EXISTS `c_grade` (
  `cid` varchar(10) NOT NULL,
  `cname` text NOT NULL,
  `cgrade` float NOT NULL,
  `cpart` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_grade`
--

INSERT INTO `c_grade` (`cid`, `cname`, `cgrade`, `cpart`) VALUES
('CAC001', 'Advance MS Excel', 3.9, 21),
('CAC002', 'Auto CAD', 4, 16),
('CCC001', 'Course on Safety & Disaster Management', 3.8, 10),
('CCC002', 'Awarness Programme on EnMS', 3.9, 19),
('CIND01', 'Induction Training for CM(T/Met) recruited through LDCE', 3.9, 29),
('CIND02', 'Induction Training for Newly recruted LDCs', 3.7, 11),
('CM0001', 'Basic Metallurgy for Non- Metallurgist', 4, 22),
('CM0002', 'Corrosion & Effects on Environment on Metals, Particularly on Small Arms', 3.8, 18),
('CSA001', 'CCC on Small Arms manufacture', 4, 12),
('CSA002', 'CNC part programming & Maintenance of CNC Machines', 3.5, 13),
('NCA001', 'Behavioral Sciences & Communication Skills', 3.8, 32),
('NCA002', 'CCS(Conduct) Rule, Role of IO/PO', 3.9, 28);

-- --------------------------------------------------------

--
-- Table structure for table `factory`
--

CREATE TABLE IF NOT EXISTS `factory` (
  `fyname` text NOT NULL,
  `fyphn` bigint(10) NOT NULL,
  `fyfax` bigint(10) NOT NULL,
  `fyemail` varchar(50) NOT NULL,
  `fyadd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `factory`
--

INSERT INTO `factory` (`fyname`, `fyphn`, `fyfax`, `fyemail`, `fyadd`) VALUES
('Ordnance Factory Cell', 911123015006, 911123015009, 'ofc@ndel.com', 'New Delhi'),
('Ordnance Factory Dehradun', 911352787371, 911352787379, 'ofd@ddn.com', 'Dehradun'),
('Ordnance Cable Factory Chandigarh', 911722650481, 911722650489, 'ocfc@chd.com', 'Chandigarh'),
('Ordnance Factory Board', 913322430001, 913322430009, 'ofbhq@kol.com', 'Kolkata'),
('Rifle Factory Ichapore', 913325930001, 913325930009, 'rfi@kol.com', 'Ichapore'),
('Ordnance Factory Medak', 914023283000, 914023283009, 'ofm@hyd.com', 'Hyderabad'),
('Heavy Vehicle Factory Avadi', 914426848000, 914426848009, 'hvfa@avd.com', 'Chennai'),
('Small Arms Factory Kanpur', 915122295042, 915122295049, 'safk@kpr.com', 'Kanpur'),
('Ordnance Factory Bolangir', 916655250973, 916655250979, 'ofb@bol.com', 'Badmal'),
('Ordnance Factory Ambajhari', 917104246845, 917104246849, 'ofa@ngp.com', 'Nagpur'),
('Vehicle Factory Jabalpur', 917612330016, 917612330019, 'vfj@jbp.com', 'Jabalpur');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `fcdob` int(11) NOT NULL,
  `fcname` text NOT NULL,
  `fcorg` text NOT NULL,
  `fcws` text NOT NULL,
  `fchadd` varchar(100) NOT NULL,
  `fcoadd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fcdob`, `fcname`, `fcorg`, `fcws`, `fchadd`, `fcoadd`) VALUES
(61096, 'Peter Dasgupta', 'Amity Kolkata', 'No', 'Agartala', 'Kolkata'),
(70390, 'Bucky Kumar', 'NIT Patna', 'No', 'Kolkata', 'Patna'),
(71289, 'Steve Das', 'IIM Calcutta', 'Yes', 'Kolkata', 'Kolkata'),
(100992, 'Wanda Mitra', 'IIM Bangalore', 'Yes', 'Kolkata', 'Bangalore'),
(101191, 'Anthony Khan', 'IIT Kharagpur', 'No', 'New Delhi', 'Kharagpur'),
(111296, 'James Ghatak', 'IIT Chennai', 'No', 'Pune', 'Chennai'),
(130797, 'Natasha Banerjee', 'IIT Delhi', 'No', 'Jamshedpur', 'New Delhi'),
(240388, 'Clint Basu', 'NIT Durgapur', 'Yes', 'Kolkata', 'Durgapur'),
(240791, 'Bruce Mukherje', 'Jadavpur University', 'No', 'Kolkata', 'Kolkata'),
(280992, 'Wade Mukherjee', 'NIT Jaipur', 'Yes', 'Chennai', 'Jaipur');

-- --------------------------------------------------------

--
-- Table structure for table `fc_grade`
--

CREATE TABLE IF NOT EXISTS `fc_grade` (
  `fcname` text NOT NULL,
  `fcdob` int(10) NOT NULL,
  `fcgrade` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fc_grade`
--

INSERT INTO `fc_grade` (`fcname`, `fcdob`, `fcgrade`) VALUES
('Peter Dasgupta', 61096, 3.9),
('Bucky Kumar', 70390, 4),
('Steve Das', 71289, 3.8),
('Wanda Mitra', 100992, 3.7),
('Anthony Khan', 101191, 4),
('James Ghatak', 111296, 3.8),
('Natasha Banerjee', 130797, 4),
('Clint Basu', 240388, 3.8),
('Bruce Mukherje', 240791, 4),
('Wade Mukherjee', 280992, 3.8);

-- --------------------------------------------------------

--
-- Table structure for table `p_course`
--

CREATE TABLE IF NOT EXISTS `p_course` (
  `cid` varchar(10) NOT NULL,
  `cname` text NOT NULL,
  `p13_14` int(10) NOT NULL,
  `acg13_14` float NOT NULL,
  `p14_15` int(10) NOT NULL,
  `acg14_15` float NOT NULL,
  `p15_16` int(10) NOT NULL,
  `acg15_16` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_course`
--

INSERT INTO `p_course` (`cid`, `cname`, `p13_14`, `acg13_14`, `p14_15`, `acg14_15`, `p15_16`, `acg15_16`) VALUES
('CAC001', 'Advance MS Excel', 59, 3.8, 47, 3.82, 56, 3.75),
('CAC002', 'Auto CAD', 19, 3.63, 17, 3.88, 17, 3.9),
('CAC003', 'Community development Prog on MS-Office', 0, 0, 21, 0, 0, 0),
('CAC004', 'Cyber security & IT Act', 0, 0, 17, 3.94, 0, 0),
('CAC005', 'e-Admin & e-Procurement', 21, 3.71, 38, 3.67, 25, 3.84),
('CAC006', 'Informix', 12, 3.81, 0, 0, 0, 0),
('CAC007', 'Internet & Networking Concepts', 30, 3.64, 11, 3.81, 36, 3.7),
('CAC008', 'MS-Office', 15, 3.76, 20, 3.98, 37, 3.8),
('CAC009', 'OFB PPC Package', 0, 0, 11, 3.88, 8, 3.86),
('CAC010', 'Web Page Designing: PHP Programming', 12, 3.65, 9, 3.84, 8, 3.93),
('CCC001', 'A Course on Safety & Disaster management', 0, 0, 0, 0, 52, 3.66),
('CCC002', 'Awarness Programme on EnMS', 0, 0, 0, 0, 29, 3.79),
('CCC003', 'Awarness Programme on Internal Audit & Test Audit', 0, 0, 0, 0, 21, 3.95),
('CCC004', 'Awarness Programme on QMS/EMS', 0, 0, 47, 3.88, 0, 0),
('CCC005', 'Behaviour based Safety Management', 0, 0, 37, 3.78, 0, 0),
('CCC006', 'Calibration & Testing of various instruments & gadgets', 0, 0, 0, 0, 25, 3.71),
('CCC007', 'Course on Civil Works & Maintenance', 0, 0, 0, 0, 10, 3.82),
('CCC008', 'Energy Audit', 9, 3.96, 21, 3.88, 0, 0),
('CCC009', 'Functioning of Engg. Office', 0, 0, 0, 0, 18, 3.63),
('CCC010', 'Fundamental of Financial Management in Ord. Fys. Budgeting, Budget Code Head etc', 24, 3.85, 6, 3.41, 26, 3.66),
('CCC011', 'Internal Audit on IMS', 30, 3.64, 24, 3.9, 34, 3.81),
('CCC012', 'Joint Training course for Fys. & DGQA', 0, 0, 0, 0, 14, 3.8),
('CCC013', 'Lead accessor Course', 0, 0, 20, 3.82, 0, 0),
('CCC014', 'Non-renewable source of Energy including solar energy', 0, 0, 0, 0, 9, 3.71),
('CCC015', 'Production planning & control', 0, 0, 0, 0, 25, 3.83),
('CCC016', 'SPC & SQC Techniques', 27, 3.52, 22, 3.89, 17, 3.83),
('CCC017', 'TPM: 5S KAIZEN With 16 Major losses', 38, 3.79, 19, 3.81, 23, 3.78),
('CCC018', 'Two Days Work Shop on Rain Water Harvesting', 24, 3.75, 16, 3.83, 21, 3.9),
('CCC019', 'Understanding of Engineering Drawing', 0, 0, 0, 0, 25, 3.86),
('CIND01', 'Induction Training for CM(T/Met) recruited through LDCE', 12, 3.94, 8, 3.82, 26, 3.79),
('CIND02', 'Induction Training for Newly recruted LDCs', 0, 0, 40, 3.93, 0, 0),
('CIND03', 'Induction Training for Promote CM (T)', 27, 3.81, 24, 3.79, 38, 3.94),
('CIND04', 'Induction Training Prorgramme(Phase-I) For DRCM', 40, 3.64, 0, 0, 43, 3.79),
('CIND05', 'Induction Training Prorgramme(Phase-II) For DRCM', 8, 3.76, 1, 3.81, 0, 0),
('CIND06', 'Induction Training Prorgramme(Phase-II) For DRJWM', 0, 0, 6, 3.81, 0, 0),
('CM0001', 'Basic Metallurgy for Non- Metallurgist', 15, 3.72, 9, 3.7, 19, 3.79),
('CM0002', 'Corrosion & Effects on Environment on Metals,Particulerly on Small Arms', 11, 3.8, 18, 3.79, 14, 3.83),
('CM0003', 'Criteria for selection of Metals and Failure analysis', 11, 3.67, 22, 3.37, 20, 3.81),
('CM0004', 'Forming of Metals', 0, 0, 15, 3.73, 12, 3.74),
('CM0005', 'Heat Treatment of Ferrous & Non-Ferrous Metals', 23, 3.76, 16, 3.46, 12, 3.82),
('CM0006', 'Latest Trend in Material Engineering with Focus on Polymer & Plastic Engineering', 18, 3.69, 0, 0, 10, 3.67),
('CM0007', 'Material testing including metallography', 41, 3.81, 20, 3.62, 21, 3.7),
('CM0008', 'Melting & casting of Ferrous & Non-Ferrous Metals', 0, 0, 6, 3.97, 6, 3.95),
('CM0009', 'Surface Engineering-Phopsphating & Plating', 31, 3.75, 12, 3.92, 12, 3.81),
('CSA001', 'CCC on Small Arms manufacture', 14, 3.89, 10, 3.86, 20, 3.82),
('CSA002', 'CNC part programming & Maintenance of CNC Machines', 0, 0, 0, 0, 17, 3.86),
('CSA003', 'Design & Development of Small Arms as a weapon System', 7, 3.78, 8, 3.93, 9, 3.89),
('CSA004', 'Laser Interformety & its application for calibration of CNC machine with practical demonstration', 0, 0, 0, 0, 9, 3.83),
('CSA005', 'Modern Trend & Technology in Small Arms Manufacture with focus on MIM & Thermoplastic', 17, 3.78, 12, 3.9, 9, 3.82),
('CSA006', 'Outlines of Small Arms Technology & 5.56 INSAS Rifle', 12, 3.71, 11, 3.95, 15, 3.44),
('CSA007', 'Repair & Maintenance of 5.56 INSAS', 76, 3.92, 63, 3.86, 84, 3.88),
('NCA001', 'Behavioral Sciences & Communication skills', 21, 3.92, 23, 3.84, 25, 3.71),
('NCA002', 'CCS(Conduct) Rule, Role of IO/PO', 0, 0, 26, 3.7, 0, 0),
('NCA003', 'Coping With Work Pressure', 0, 0, 21, 3.92, 19, 3.72),
('NCA004', 'Course for Medical Attendants', 0, 0, 12, 3.89, 11, 3.91),
('NCA005', 'Course on Land & Estate Mgmt.', 0, 0, 10, 3.98, 0, 0),
('NCA006', 'Course related with TAX', 0, 0, 33, 3.83, 41, 3.49),
('NCA007', 'Direct Trainer Skill', 30, 3.93, 16, 3.95, 19, 3.89),
('NCA008', 'Existing vigilance procedure & Lokpal', 0, 0, 12, 3.77, 14, 3.44),
('NCA009', 'Factory & Labouer Accounting', 0, 0, 0, 0, 27, 3.81),
('NCA010', 'Hindi Karyashala/Rajbhasha Implementation', 67, 3.83, 51, 3.88, 53, 3.87),
('NCA011', 'Maintenance of Seniority, Preparation of  roster, compassionate appointment, ACP’s', 24, 3.85, 19, 3.91, 20, 3.8),
('NCA012', 'Office Procedure(Noting & drafting)', 61, 3.52, 60, 3.81, 55, 3.71),
('NCA013', 'Pay Fixation, Leave & LTC Rules', 0, 0, 31, 3.8, 0, 0),
('NCA014', 'Pension Procedure & Terminal Benefits', 19, 3.89, 26, 3.69, 20, 3.63),
('NCA015', 'Record Management, File numbering System, weeding out etc.', 31, 3.84, 17, 3.57, 14, 3.88),
('NCA016', 'Refresher course for Rajbhasha Personnel', 0, 0, 0, 0, 18, 3.78),
('NCA017', 'Refresher course for Security Personnel', 0, 0, 21, 3.93, 16, 3.8),
('NCA018', 'Reservation Policy for SC/ST/OBC', 50, 3.57, 41, 3.81, 13, 3.7),
('NCA019', 'Role of diff statutory acts on Functioning of Ofs', 0, 0, 17, 3.73, 9, 3.69),
('NCA020', 'Role of IO/PO-Benchmark of CVC', 12, 3.91, 12, 3.87, 0, 0),
('NCA021', 'RTI Act-2005', 0, 0, 19, 3.96, 23, 3.68),
('NCA022', 'Secretarial Excellence- A Training in need', 10, 3.75, 9, 3.9, 0, 0),
('NCA023', 'Sexual Harrassment in Workplace', 0, 0, 14, 3.74, 9, 4),
('NCA024', 'Store Accounting, stock verification etc', 0, 0, 0, 0, 18, 3.7),
('NCA025', 'Stores & Purchase Procedure', 22, 3.85, 17, 3.75, 23, 3.67),
('NCA026', 'Superannuation Blues', 35, 3.77, 46, 3.8, 40, 3.89),
('NCA027', 'Synergy in working of Fys & LAO', 26, 3.69, 24, 3.55, 22, 3.71),
('NCA028', 'Vigilance Procedure, CCS Conduct Rule , Role of IO/PO', 47, 3.77, 0, 0, 20, 3.77);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
 ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `coursedir`
--
ALTER TABLE `coursedir`
 ADD PRIMARY KEY (`dirphn`);

--
-- Indexes for table `c_grade`
--
ALTER TABLE `c_grade`
 ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `factory`
--
ALTER TABLE `factory`
 ADD PRIMARY KEY (`fyphn`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
 ADD PRIMARY KEY (`fcdob`);

--
-- Indexes for table `fc_grade`
--
ALTER TABLE `fc_grade`
 ADD PRIMARY KEY (`fcdob`);

--
-- Indexes for table `p_course`
--
ALTER TABLE `p_course`
 ADD PRIMARY KEY (`cid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
