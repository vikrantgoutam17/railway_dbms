-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 14, 2019 at 04:27 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indian_railway`
--

-- --------------------------------------------------------

--
-- Table structure for table `12001`
--

CREATE TABLE `12001` (
  `c_type` varchar(11) NOT NULL,
  `coach` varchar(11) NOT NULL,
  `seats` int(11) NOT NULL DEFAULT '60'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `12001`
--

INSERT INTO `12001` (`c_type`, `coach`, `seats`) VALUES
('first', 'H1', 60),
('first', 'H2', 60),
('first', 'H3', 60),
('first', 'H4', 60),
('second', 'A1', 60),
('second', 'A2', 60),
('second', 'A3', 60),
('second', 'A4', 60),
('second', 'A5', 60),
('third', 'B6', 60),
('third', 'B1', 60),
('third', 'B2', 60),
('third', 'B3', 60),
('third', 'B4', 60),
('third', 'B5', 60);

-- --------------------------------------------------------

--
-- Table structure for table `12002`
--

CREATE TABLE `12002` (
  `c_type` varchar(11) NOT NULL,
  `coach` varchar(11) NOT NULL,
  `seats` int(11) NOT NULL DEFAULT '60'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `12002`
--

INSERT INTO `12002` (`c_type`, `coach`, `seats`) VALUES
('first', 'H1', 60),
('first', 'H2', 60),
('first', 'H3', 60),
('first', 'H4', 60),
('second', 'A1', 60),
('second', 'A2', 60),
('second', 'A3', 60),
('second', 'A4', 60),
('second', 'A5', 60),
('third', 'B6', 60),
('third', 'B1', 60),
('third', 'B2', 60),
('third', 'B3', 60),
('third', 'B4', 60),
('third', 'B5', 60);

-- --------------------------------------------------------

--
-- Table structure for table `12301`
--

CREATE TABLE `12301` (
  `c_type` varchar(11) NOT NULL,
  `coach` varchar(11) NOT NULL,
  `seats` int(11) NOT NULL DEFAULT '60'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `12301`
--

INSERT INTO `12301` (`c_type`, `coach`, `seats`) VALUES
('first', 'H1', 57),
('first', 'H2', 60),
('first', 'H3', 60),
('first', 'H4', 60),
('second', 'A1', 58),
('second', 'A2', 60),
('second', 'A3', 60),
('second', 'A4', 60),
('second', 'A5', 60),
('third', 'B6', 56),
('third', 'B1', 60),
('third', 'B2', 60),
('third', 'B3', 60),
('third', 'B4', 60),
('third', 'B5', 60);

-- --------------------------------------------------------

--
-- Table structure for table `12302`
--

CREATE TABLE `12302` (
  `c_type` varchar(11) NOT NULL,
  `coach` varchar(11) NOT NULL,
  `seats` int(11) NOT NULL DEFAULT '60'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `12302`
--

INSERT INTO `12302` (`c_type`, `coach`, `seats`) VALUES
('first', 'H1', 59),
('first', 'H2', 60),
('first', 'H3', 60),
('first', 'H4', 60),
('second', 'A1', 56),
('second', 'A2', 60),
('second', 'A3', 60),
('second', 'A4', 60),
('second', 'A5', 60),
('third', 'B6', 60),
('third', 'B1', 60),
('third', 'B2', 60),
('third', 'B3', 60),
('third', 'B4', 60),
('third', 'B5', 60);

-- --------------------------------------------------------

--
-- Table structure for table `12453`
--

CREATE TABLE `12453` (
  `c_type` varchar(11) NOT NULL,
  `coach` varchar(11) NOT NULL,
  `seats` int(11) NOT NULL DEFAULT '60'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `12453`
--

INSERT INTO `12453` (`c_type`, `coach`, `seats`) VALUES
('first', 'H1', 58),
('first', 'H2', 60),
('first', 'H3', 60),
('first', 'H4', 60),
('second', 'A1', 56),
('second', 'A2', 60),
('second', 'A3', 60),
('second', 'A4', 60),
('second', 'A5', 60),
('third', 'B6', 56),
('third', 'B1', 60),
('third', 'B2', 60),
('third', 'B3', 60),
('third', 'B4', 60),
('third', 'B5', 60);

-- --------------------------------------------------------

--
-- Table structure for table `12454`
--

CREATE TABLE `12454` (
  `c_type` varchar(11) NOT NULL,
  `coach` varchar(11) NOT NULL,
  `seats` int(11) NOT NULL DEFAULT '60'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `12454`
--

INSERT INTO `12454` (`c_type`, `coach`, `seats`) VALUES
('first', 'H1', 59),
('first', 'H2', 60),
('first', 'H3', 60),
('first', 'H4', 60),
('second', 'A1', 58),
('second', 'A2', 60),
('second', 'A3', 60),
('second', 'A4', 60),
('second', 'A5', 60),
('third', 'B6', 60),
('third', 'B1', 60),
('third', 'B2', 60),
('third', 'B3', 60),
('third', 'B4', 60),
('third', 'B5', 60);

-- --------------------------------------------------------

--
-- Table structure for table `12951`
--

CREATE TABLE `12951` (
  `c_type` varchar(11) NOT NULL,
  `coach` varchar(11) NOT NULL,
  `seats` int(11) NOT NULL DEFAULT '60'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `12951`
--

INSERT INTO `12951` (`c_type`, `coach`, `seats`) VALUES
('first', 'H1', 60),
('first', 'H2', 60),
('first', 'H3', 60),
('first', 'H4', 60),
('second', 'A1', 60),
('second', 'A2', 60),
('second', 'A3', 60),
('second', 'A4', 60),
('second', 'A5', 60),
('third', 'B6', 60),
('third', 'B1', 60),
('third', 'B2', 60),
('third', 'B3', 60),
('third', 'B4', 60),
('third', 'B5', 60);

-- --------------------------------------------------------

--
-- Table structure for table `12952`
--

CREATE TABLE `12952` (
  `c_type` varchar(11) NOT NULL,
  `coach` varchar(11) NOT NULL,
  `seats` int(11) NOT NULL DEFAULT '60'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `12952`
--

INSERT INTO `12952` (`c_type`, `coach`, `seats`) VALUES
('first', 'H1', 60),
('first', 'H2', 60),
('first', 'H3', 60),
('first', 'H4', 60),
('second', 'A1', 60),
('second', 'A2', 60),
('second', 'A3', 60),
('second', 'A4', 60),
('second', 'A5', 60),
('third', 'B6', 60),
('third', 'B1', 60),
('third', 'B2', 60),
('third', 'B3', 60),
('third', 'B4', 60),
('third', 'B5', 60);

-- --------------------------------------------------------

--
-- Table structure for table `22823`
--

CREATE TABLE `22823` (
  `c_type` varchar(11) NOT NULL,
  `coach` varchar(11) NOT NULL,
  `seats` int(11) NOT NULL DEFAULT '60'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `22823`
--

INSERT INTO `22823` (`c_type`, `coach`, `seats`) VALUES
('first', 'H1', 59),
('first', 'H2', 60),
('first', 'H3', 60),
('first', 'H4', 60),
('second', 'A1', 59),
('second', 'A2', 60),
('second', 'A3', 60),
('second', 'A4', 60),
('second', 'A5', 60),
('third', 'B6', 60),
('third', 'B1', 60),
('third', 'B2', 60),
('third', 'B3', 60),
('third', 'B4', 60),
('third', 'B5', 60);

-- --------------------------------------------------------

--
-- Table structure for table `22824`
--

CREATE TABLE `22824` (
  `c_type` varchar(11) NOT NULL,
  `coach` varchar(11) NOT NULL,
  `seats` int(11) NOT NULL DEFAULT '60'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `22824`
--

INSERT INTO `22824` (`c_type`, `coach`, `seats`) VALUES
('first', 'H1', 59),
('first', 'H2', 60),
('first', 'H3', 60),
('first', 'H4', 60),
('second', 'A1', 59),
('second', 'A2', 60),
('second', 'A3', 60),
('second', 'A4', 60),
('second', 'A5', 60),
('third', 'B6', 60),
('third', 'B1', 60),
('third', 'B2', 60),
('third', 'B3', 60),
('third', 'B4', 60),
('third', 'B5', 60);

-- --------------------------------------------------------

--
-- Table structure for table `pasanger`
--

CREATE TABLE `pasanger` (
  `pnr_no` bigint(20) NOT NULL,
  `train_number` int(5) NOT NULL,
  `train_name` varchar(50) NOT NULL,
  `Coach` varchar(10) NOT NULL,
  `seat_no` int(2) NOT NULL,
  `fr` varchar(50) NOT NULL,
  `tt` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `user_name` varchar(50) NOT NULL DEFAULT 'vikrant',
  `b_time` time NOT NULL,
  `d_time` time NOT NULL,
  `Fare` int(5) NOT NULL DEFAULT '1000',
  `name` varchar(50) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `age` int(3) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'CONFIRMED'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasanger`
--

INSERT INTO `pasanger` (`pnr_no`, `train_number`, `train_name`, `Coach`, `seat_no`, `fr`, `tt`, `date`, `user_name`, `b_time`, `d_time`, `Fare`, `name`, `sex`, `age`, `phone`, `email`, `status`) VALUES
(1234567895, 12301, 'HOWRAH NEW DELHI RAJDHANI EXPRESS', 'A1', 58, 'ALL', 'NDHL', '2019-04-13', 'vikrant', '12:10:00', '21:10:00', 1405, 'vikrant', 'M', 15, 9939508217, 'vikrantgoutam17@gmail.com', 'CONFIRMED'),
(1234567899, 12301, 'HOWRAH NEW DELHI RAJDHANI EXPRESS', 'B6', 60, 'ALL', 'NDHL', '2019-04-13', 'vikrant', '12:10:00', '21:10:00', 1123, 'vaibhav', 'M', 16, 9939508217, 'ljlejlksdnfoaslfkjs', 'CONFIRMED'),
(1234567901, 12301, 'HOWRAH NEW DELHI RAJDHANI EXPRESS', 'B6', 59, 'HWH', 'NDHL', '2019-04-13', 'vikrant', '00:10:00', '21:10:00', 1637, 'rohan kumar', 'M', 25, 9939508215, 'vikra', 'CONFIRMED'),
(1234567910, 12301, 'HOWRAH NEW DELHI RAJDHANI EXPRESS', 'A1', 57, 'ALL', 'NDHL', '2019-04-13', 'vikrant', '12:10:00', '21:10:00', 1348, 'VIKRANT KUMAR GOUTAM', 'M', 19, 9939508288, '.bkjbjnbkjhn,mn/', 'CONFIRMED'),
(1234567924, 12453, 'RANCHI NEW DELHI RAJDHANI EXPRESS', 'A1', 60, 'ALL', 'NDHL', '2019-04-13', 'vikrant', '13:10:00', '22:15:00', 1146, 'VIKRANT KUMAR GOUTAM', 'M', 50, 9939508217, 'vikrantgoutam17@gmail.com', 'CONFIRMED'),
(1234567925, 12453, 'RANCHI NEW DELHI RAJDHANI EXPRESS', 'H1', 60, 'ALL', 'NDHL', '2019-04-13', 'vikrant', '13:10:00', '22:15:00', 1363, 'VIKRANT KUMAR GOUTAM', 'M', 50, 9939508217, 'vikrantgoutam17@gmail.com', 'CONFIRMED'),
(1234567926, 12453, 'RANCHI NEW DELHI RAJDHANI EXPRESS', 'A1', 59, 'ALL', 'NDHL', '2019-04-13', 'vikrant', '13:10:00', '22:15:00', 1992, 'VIKRANT KUMAR GOUTAM', 'M', 20, 9939508217, 'j;oijnlk', 'CONFIRMED'),
(1234567928, 12301, 'HOWRAH NEW DELHI RAJDHANI EXPRESS', 'B6', 58, 'DHN', 'NDHL', '2019-04-13', 'vikrant', '04:10:00', '21:10:00', 1270, 'VIKRANT KUMAR GOUTAM', 'M', 19, 1234567890, 'vikrantgoutam16@gmail.com', 'CONFIRMED'),
(1234567929, 12301, 'HOWRAH NEW DELHI RAJDHANI EXPRESS', 'H1', 58, 'DHN', 'NDHL', '2019-04-13', 'vikrant', '04:10:00', '21:10:00', 1485, 'VIKRANT KUMAR GOUTAM', 'M', 19, 1234567890, 'vikrantgoutam16@gmail.com', 'CONFIRMED'),
(1234567930, 12301, 'HOWRAH NEW DELHI RAJDHANI EXPRESS', 'B6', 57, 'DHN', 'NDHL', '2019-04-13', 'vikrant', '04:10:00', '21:10:00', 1821, 'VIKRANT KUMAR GOUTAM', 'M', 19, 1234567890, 'vikrantgoutam16@gmail.com', 'CONFIRMED'),
(1234567931, 12301, 'HOWRAH NEW DELHI RAJDHANI EXPRESS', 'A1', 56, 'DHN', 'NDHL', '2019-04-13', 'vikrant', '04:10:00', '21:10:00', 1306, 'VIKRANT KUMAR GOUTAM', 'M', 19, 1234567890, 'vikrantgoutam16@gmail.com', 'CONFIRMED'),
(1234567942, 12301, 'HOWRAH NEW DELHI RAJDHANI EXPRESS', 'A1', 55, 'DHN', 'NDHL', '2019-04-13', 'vikrant', '04:10:00', '21:10:00', 1185, 'VIKRANT KUMAR GOUTAM', 'M', 10, 9939508215, '.bkjbjnbkjhn,mn/', 'CONFIRMED'),
(1234567943, 12453, 'RANCHI NEW DELHI RAJDHANI EXPRESS', 'A1', 58, 'ALL', 'NDHL', '2019-04-13', 'vikrant', '04:10:00', '22:15:00', 1196, 'VIKRANT KUMAR GOUTAM', 'M', 15, 9939508288, 'vikrantgoutam16@gmail.com', 'CONFIRMED'),
(1234567944, 12453, 'RANCHI NEW DELHI RAJDHANI EXPRESS', 'B6', 60, 'ALL', 'NDHL', '2019-04-13', 'vikrant', '22:15:00', '22:15:00', 1477, 'VINAY KUMAR', 'M', 30, 9939508215, 'vinay@gmail.com', 'CONFIRMED'),
(1234567945, 12453, 'RANCHI NEW DELHI RAJDHANI EXPRESS', 'B6', 59, 'ALL', 'NDHL', '2019-04-13', 'vikrant', '22:15:00', '22:15:00', 1495, 'KK', 'M', 30, 9939508215, 'vinay@gmail.com', 'CONFIRMED'),
(1234567946, 12453, 'RANCHI NEW DELHI RAJDHANI EXPRESS', 'B6', 58, 'ALL', 'NDHL', '2019-04-13', 'vikrant', '22:15:00', '22:15:00', 1096, 'rahul', 'M', 30, 9939508215, 'vinay@gmail.com', 'CONFIRMED'),
(1234567947, 12301, 'HOWRAH NEW DELHI RAJDHANI EXPRESS', 'A1', 54, 'ALL', 'NDHL', '2019-04-13', 'vikrant', '00:00:00', '21:10:00', 1575, 'VIKRANT KUMAR GOUTAM', 'M', 12, 9939508288, 'rohanrules@gmail.com', 'CONFIRMED'),
(1234567948, 12301, 'HOWRAH NEW DELHI RAJDHANI EXPRESS', 'A1', 53, 'ALL', 'NDHL', '2019-04-13', 'vikrant', '12:10:00', '21:10:00', 1489, 'VIKRANT KUMAR GOUTAM', 'M', 12, 9939508217, 'flgjhgluygy', 'CONFIRMED'),
(1234567949, 12301, 'HOWRAH NEW DELHI RAJDHANI EXPRESS', 'A1', 52, 'ALLAHABAD ', 'NEW DELHI', '2019-04-13', 'vikrant', '12:10:00', '21:10:00', 1331, 'VIKRANT KUMAR GOUTA', 'M', 12, 9939508217, 'flgjhgluygy', 'CONFIRMED'),
(1234567951, 12301, 'HOWRAH NEW DELHI RAJDHANI EXPRESS', 'A1', 51, 'KNP', 'NDHL', '2019-04-27', 'vikrant', '13:10:00', '21:10:00', 1982, 'VIKRANT KUMAR GOUTAM', 'M', 15, 9939508217, 'vikrantgoutam17@gmail.com', 'CONFIRMED'),
(1234567952, 22823, 'BHUBANESWAR-NEW DELHI RAJDHANI EXPRESS', 'H1', 60, 'TATA', 'NDHL', '2019-04-26', 'piyush', '13:30:00', '20:00:00', 1207, 'piyush', 'M', 20, 9102258561, 'piyush@gmail.com', 'CONFIRMED'),
(1234567953, 12454, 'NEW DELHI RANCHI RAJDHANI EXPRESS', 'H1', 60, 'ALL', 'RNC', '2019-04-25', 'subhojit', '05:30:00', '10:30:00', 1048, 'VIKRANT KUMAR GOUTAM', 'M', 15, 9939508288, 'j;oijnlk', 'CONFIRMED'),
(1234567954, 12301, 'HOWRAH NEW DELHI RAJDHANI EXPRESS', 'A1', 50, 'ALL', 'NDHL', '2019-04-14', 'vikrant', '12:10:00', '21:10:00', 1594, 'VIKRANT KUMAR GOUTAM', 'F', 12, 6788657687, '.bkjbjnbkjhn,mn/', 'CONFIRMED'),
(1234567955, 12301, 'HOWRAH NEW DELHI RAJDHANI EXPRESS', 'A1', 49, 'ALL', 'NDHL', '2019-04-13', 'vikrant', '12:10:00', '21:10:00', 1452, 'VIKRANT KUMAR GOUTAM', 'M', 15, 9939508217, 'kjglkjb', 'CONFIRMED'),
(1234567956, 22824, 'NEW DELHI -BHUBANESWAR RAJDHANI EXPRESS', 'H1', 60, 'NDHL', 'TATA', '2019-04-13', 'starlord', '05:10:00', '14:20:00', 1719, 'hasrh', 'M', 19, 1234567899, 'hsrajvardhbs', 'CONFIRMED'),
(1234567957, 12453, 'RANCHI NEW DELHI RAJDHANI EXPRESS', 'H1', 59, 'ALL', 'NDHL', '2019-04-16', 'gaurav', '13:10:00', '22:15:00', 1375, 'gaurav', 'M', 21, 8948542844, 'gauravtripathi@gmail.com', 'CONFIRMED'),
(1234567958, 12302, 'NEW DELHI HOWRAH RAJDHANI EXPRESS', 'A1', 60, 'NDHL', 'ALL', '2019-04-20', 'shubojitz', '04:10:00', '07:45:00', 1387, 'VIKRANT KUMAR GOUTAM', 'M', 55, 9939508217, '.bkjbjnbkjhn,mn/', 'CONFIRMED'),
(1234567961, 12453, 'RANCHI NEW DELHI RAJDHANI EXPRESS', 'B6', 57, 'ALL', 'NDHL', '2019-04-14', 'vikrant', '13:10:00', '22:15:00', 1094, 'rahul', 'M', 15, 9102258561, 'rahul@gmail.com', 'CONFIRMED'),
(1234567962, 22824, 'NEW DELHI -BHUBANESWAR RAJDHANI EXPRESS', 'A1', 60, 'BALA', 'BBR', '2019-04-27', 'vikrant', '15:15:00', '18:30:00', 1981, 'teja', 'M', 80, 9102258562, 'teja@gmail.com', 'CONFIRMED'),
(1234567963, 12453, 'RANCHI NEW DELHI RAJDHANI EXPRESS', 'A1', 57, 'ALL', 'NDHL', '2019-04-28', 'vikrant', '13:10:00', '22:15:00', 1077, 'vikrant', 'M', 20, 9939508217, 'vikrantgoutam17@gmail.com', 'CONFIRMED'),
(1234567964, 12301, 'HOWRAH NEW DELHI RAJDHANI EXPRESS', 'A1', 59, 'ALL', 'NDHL', '2019-04-26', 'vikrant', '12:10:00', '21:10:00', 1465, 'VIKRANT KUMAR GOUTAM', 'M', 20, 9939508217, 'vikrantgoutam16@gmail.com', 'CONFIRMED'),
(1234567965, 12454, 'NEW DELHI RANCHI RAJDHANI EXPRESS', 'A1', 60, 'NDHL', 'KNP', '2019-04-25', 'vikrantgoutam', '02:00:00', '04:10:00', 1895, 'VIKRANT KUMAR GOUTAM', 'M', 52, 1234567890, 'rohanrules@gmail.com', 'CONFIRMED'),
(1234567966, 12454, 'NEW DELHI RANCHI RAJDHANI EXPRESS', 'A1', 59, 'NEW DELHI', 'KANPUR', '2019-04-25', 'vikrantgoutam', '02:00:00', '04:10:00', 1147, 'VIKRANT KUMAR GOUTAM', 'M', 52, 1234567890, 'rohanrules@gmail.com', 'CONFIRMED'),
(1234567971, 22823, 'BHUBANESWAR-NEW DELHI RAJDHANI EXPRESS', 'A1', 60, 'TATA', 'NDHL', '2019-05-01', 'vikrantgoutam', '13:30:00', '20:00:00', 1566, 'VIKRANT KUMAR GOUTAM', 'M', 21, 9939508288, 'vinay@gmail.com', 'CONFIRMED'),
(1234567977, 12302, 'NEW DELHI HOWRAH RAJDHANI EXPRESS', 'A1', 59, 'NDHL', 'DHN', '2019-04-19', 'vikrant', '04:10:00', '12:35:00', 1421, 'VIKRANT KUMAR GOUTAM', 'M', 20, 9939508217, 'vikrantgoutam17@gmail.com', 'CONFIRMED'),
(1234567978, 12302, 'NEW DELHI HOWRAH RAJDHANI EXPRESS', 'A1', 58, 'NEW DELHI', 'DHANBAD', '2019-04-19', 'vikrant', '04:10:00', '12:35:00', 1549, 'VIKRANT KUMAR GOUTAM', 'M', 20, 9939508217, 'vikrantgoutam17@gmail.com', 'CONFIRMED'),
(1234567979, 12302, 'NEW DELHI HOWRAH RAJDHANI EXPRESS', 'A1', 57, 'NDHL', 'ALL', '2019-04-19', 'vikrant', '04:10:00', '07:45:00', 1620, 'prashant', 'M', 20, 9939508217, 'prashan@gmail.com', 'CONFIRMED'),
(1234567980, 12302, 'NEW DELHI HOWRAH RAJDHANI EXPRESS', 'H1', 60, 'NDHL', 'DHN', '2019-04-19', 'sushil', '04:10:00', '12:35:00', 1147, 'sushil', 'M', 20, 9939508217, 'sushil@gmail.com', 'CONFIRMED');

-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

CREATE TABLE `stations` (
  `sta_name` varchar(50) NOT NULL,
  `sta_code` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stations`
--

INSERT INTO `stations` (`sta_name`, `sta_code`) VALUES
('ALLAHABAD ', 'ALL'),
('ASANSOL', 'ASN'),
('BALASORE', 'BALA'),
('BHUBANESWAR', 'BBR'),
('BHADRAK', 'BHK'),
('BARKAKANA', 'BKR'),
('BHOPAL', 'BPL'),
('CHENNAI', 'CHN'),
('MUMBAI CST ', 'CST'),
('CUTTACK', 'CTK'),
('PT.DD UPADHYAYA', 'DDU'),
('DHANBAD', 'DHN'),
('DURG', 'DURG'),
('GAYA', 'GAYA'),
('GANDHINAGAR', 'GDR'),
('NETAJHI SC BOSE GOMOH', 'GOMO'),
('GONDIA', 'GOND'),
('GWALIOR', 'GWA'),
('HOWRAH', 'HWH'),
('JHANSHI', 'JHS'),
('KODERMA', 'KDM'),
('KANPUR', 'KNP'),
('KOTA', 'KOTA'),
('MURI', 'MURI'),
('NEW DELHI', 'NDHL'),
('NARGPUR', 'NGP'),
('PARASNATH', 'PST'),
('PATNA', 'PTN'),
('RAIPUR', 'RAI'),
('RAJ NANDGAON', 'RAJ'),
('RANCHI', 'RNC'),
('SURAT', 'SUT'),
('TATANAGAR', 'TATA'),
('JHAMMU TAWI', 'TAWI');

-- --------------------------------------------------------

--
-- Table structure for table `sta_train`
--

CREATE TABLE `sta_train` (
  `sta_code` varchar(4) NOT NULL,
  `train_number` int(5) NOT NULL,
  `arr_time` time NOT NULL,
  `dept_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sta_train`
--

INSERT INTO `sta_train` (`sta_code`, `train_number`, `arr_time`, `dept_time`) VALUES
('ALL', 12301, '12:10:00', '12:15:00'),
('ALL', 12302, '07:40:00', '07:45:00'),
('ALL', 12453, '13:10:00', '13:15:00'),
('ALL', 12454, '05:30:00', '05:35:00'),
('ASN', 12301, '01:10:00', '01:15:00'),
('ASN', 12302, '13:30:00', '13:35:00'),
('BALA', 22823, '12:20:00', '12:30:00'),
('BALA', 22824, '15:15:00', '15:20:00'),
('BBR', 22823, '09:30:00', '09:35:00'),
('BBR', 22824, '18:30:00', '18:30:00'),
('BHK', 22823, '11:10:00', '11:20:00'),
('BHK', 22824, '16:10:00', '16:15:00'),
('BKR', 12453, '02:10:00', '02:15:00'),
('BKR', 12454, '08:30:00', '08:35:00'),
('BPL', 12001, '03:12:00', '03:15:00'),
('BPL', 12002, '12:35:00', '12:45:00'),
('CST', 12951, '05:00:00', '05:10:00'),
('CST', 12952, '18:30:00', '18:30:00'),
('CTK', 22823, '10:10:00', '10:20:00'),
('CTK', 22824, '17:10:00', '17:15:00'),
('DDU', 12301, '09:10:00', '09:15:00'),
('DDU', 12302, '09:10:00', '09:15:00'),
('DDU', 12453, '08:10:00', '08:15:00'),
('DDU', 12454, '07:15:00', '07:20:00'),
('DDU', 22823, '18:30:00', '18:35:00'),
('DDU', 22824, '09:10:00', '09:15:00'),
('DHN', 12301, '04:10:00', '04:15:00'),
('DHN', 12302, '12:30:00', '12:35:00'),
('GAYA', 12301, '07:10:00', '07:15:00'),
('GAYA', 12302, '10:30:00', '10:35:00'),
('GAYA', 22823, '17:00:00', '17:05:00'),
('GAYA', 22824, '10:20:00', '10:25:00'),
('GOMO', 22823, '15:30:00', '15:35:00'),
('GOMO', 22824, '12:10:00', '12:15:00'),
('GWA', 12001, '07:40:00', '07:45:00'),
('GWA', 12002, '09:00:00', '09:10:00'),
('HWH', 12301, '00:10:00', '00:15:00'),
('HWH', 12302, '15:00:00', '15:00:00'),
('JHS', 12001, '06:35:00', '06:40:00'),
('JHS', 12002, '10:45:00', '10:50:00'),
('KDM', 22823, '16:10:00', '16:20:00'),
('KDM', 22824, '11:10:00', '11:15:00'),
('KNP', 12301, '13:10:00', '13:15:00'),
('KNP', 12302, '06:10:00', '06:15:00'),
('KNP', 12453, '14:10:00', '14:15:00'),
('KNP', 12454, '04:05:00', '04:10:00'),
('KNP', 22823, '19:20:00', '19:25:00'),
('KNP', 22824, '07:10:00', '07:15:00'),
('KOTA', 12951, '10:10:00', '10:15:00'),
('KOTA', 12952, '15:21:00', '15:26:00'),
('MURI', 22823, '14:35:00', '14:40:00'),
('MURI', 22824, '13:10:00', '13:15:00'),
('NDHL', 12001, '11:30:00', '11:30:00'),
('NDHL', 12002, '06:30:00', '06:35:00'),
('NDHL', 12301, '21:10:00', '21:10:00'),
('NDHL', 12302, '04:10:00', '04:15:00'),
('NDHL', 12453, '22:15:00', '22:15:00'),
('NDHL', 12454, '02:00:00', '02:05:00'),
('NDHL', 12951, '12:15:00', '12:15:00'),
('NDHL', 12952, '12:20:00', '12:25:00'),
('NDHL', 22823, '20:00:00', '20:00:00'),
('NDHL', 22824, '05:10:00', '05:15:00'),
('PST', 12301, '05:10:00', '05:15:00'),
('PST', 12302, '11:10:00', '11:15:00'),
('RNC', 12453, '00:20:00', '00:25:00'),
('RNC', 12454, '10:30:00', '10:30:00'),
('SUT', 12951, '08:10:00', '08:15:00'),
('SUT', 12952, '16:20:00', '16:25:00'),
('TATA', 22823, '13:30:00', '13:35:00'),
('TATA', 22824, '14:15:00', '14:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `trains`
--

CREATE TABLE `trains` (
  `train_number` int(5) NOT NULL,
  `train_name` varchar(50) NOT NULL,
  `direction` varchar(10) NOT NULL DEFAULT 'UP'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trains`
--

INSERT INTO `trains` (`train_number`, `train_name`, `direction`) VALUES
(12001, 'BHOPAL-NEW DELHI SHATABDI EXPRESS', 'UP'),
(12002, 'NEW DELHI-BHOPAL SHATABDI EXPRESS', 'DOWN'),
(12301, 'HOWRAH NEW DELHI RAJDHANI EXPRESS', 'UP'),
(12302, 'NEW DELHI HOWRAH RAJDHANI EXPRESS', 'DOWN'),
(12453, 'RANCHI NEW DELHI RAJDHANI EXPRESS', 'UP'),
(12454, 'NEW DELHI RANCHI RAJDHANI EXPRESS', 'DOWN'),
(12951, 'CST-NEW DELHI RAJDHANI EXPRESS', 'UP'),
(12952, 'NEW DELHI-CST RAJDHANI EXPRESS', 'DOWN'),
(22823, 'BHUBANESWAR-NEW DELHI RAJDHANI EXPRESS', 'UP'),
(22824, 'NEW DELHI -BHUBANESWAR RAJDHANI EXPRESS', 'DOWN');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_name`, `password`, `phone`, `email`) VALUES
('gaurav', '123459', 8948542844, 'gauravtripathi@gmail.com'),
('hraj', 'hraj0101', 8271811687, 'hrasonu@gmail.com'),
('hrisabh', '123456', 9939508215, 'rishabh@gmail.com'),
('piyush', '123456', 2589631470, 'huyliuoh;ioyi'),
('RohanRules', 'chacha440', 9999999999, 'rohankr@gmail.com'),
('shubojitz', '123456', 9102258562, 'shubo@gmail.com'),
('starlord', '1234567', 8949304025, 'hasrshvardhan975@pmail.com'),
('subhojit', '123459', 7783804763, 'subhojitz@gmail.com'),
('suman', '123456', 9939508225, 'suman@gmail.com'),
('sushil', '123456', 9939508257, 'sushil@gmail.com'),
('vaibhav', '123459', 1234567890, 'vaibhavchandra'),
('vikrant', '123459', 9939508217, 'vikrantgoutam17@gmail.com'),
('vikrantgoutam', '123456', 9939580214, 'vikrantgoutam175@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasanger`
--
ALTER TABLE `pasanger`
  ADD PRIMARY KEY (`pnr_no`) USING BTREE,
  ADD UNIQUE KEY `Coach_2` (`Coach`,`seat_no`,`train_number`) USING BTREE,
  ADD KEY `train_number` (`train_number`) USING BTREE;

--
-- Indexes for table `stations`
--
ALTER TABLE `stations`
  ADD PRIMARY KEY (`sta_code`);

--
-- Indexes for table `sta_train`
--
ALTER TABLE `sta_train`
  ADD PRIMARY KEY (`sta_code`,`train_number`),
  ADD KEY `train_number` (`train_number`);

--
-- Indexes for table `trains`
--
ALTER TABLE `trains`
  ADD PRIMARY KEY (`train_number`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_name`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasanger`
--
ALTER TABLE `pasanger`
  MODIFY `pnr_no` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234567981;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pasanger`
--
ALTER TABLE `pasanger`
  ADD CONSTRAINT `pasanger_ibfk_1` FOREIGN KEY (`train_number`) REFERENCES `trains` (`train_number`);

--
-- Constraints for table `sta_train`
--
ALTER TABLE `sta_train`
  ADD CONSTRAINT `sta_train_ibfk_1` FOREIGN KEY (`sta_code`) REFERENCES `stations` (`sta_code`),
  ADD CONSTRAINT `sta_train_ibfk_2` FOREIGN KEY (`train_number`) REFERENCES `trains` (`train_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
