-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2017 at 11:16 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placeme`
--

-- --------------------------------------------------------

--
-- Table structure for table `create_job`
--

CREATE TABLE `create_job` (
  `sr_no` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `description` varchar(150) NOT NULL,
  `state` varchar(30) NOT NULL,
  `loc` varchar(60) NOT NULL,
  `production` varchar(50) NOT NULL,
  `employes` bigint(11) NOT NULL,
  `salary` bigint(11) NOT NULL,
  `qualification` varchar(40) NOT NULL,
  `sslc` varchar(20) NOT NULL,
  `puc` varchar(20) NOT NULL,
  `bca` varchar(20) NOT NULL,
  `mca` varchar(20) NOT NULL,
  `mtech` varchar(20) NOT NULL,
  `skills` int(50) NOT NULL,
  `c` varchar(10) DEFAULT NULL,
  `c_plus` varchar(10) DEFAULT NULL,
  `java` varchar(10) DEFAULT NULL,
  `python` varchar(10) DEFAULT NULL,
  `php` varchar(10) DEFAULT NULL,
  `perl` varchar(10) DEFAULT NULL,
  `ph_no` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_job`
--

INSERT INTO `create_job` (`sr_no`, `name`, `logo`, `description`, `state`, `loc`, `production`, `employes`, `salary`, `qualification`, `sslc`, `puc`, `bca`, `mca`, `mtech`, `skills`, `c`, `c_plus`, `java`, `python`, `php`, `perl`, `ph_no`) VALUES
(108, 'TCS', 'preview-TCS.png', 'Tata Consultancy Services Limited is an Indian multinational information technology service, consulting and business solutions company Headquartered i', 'mumbai', 'TCS Mumbai Office Address Tata Consultancy Services Air-Indi', 'Application development ', 200, 35000, 'MCA', '60', '60', '70', '70', 'not_required', 0, '', 'c_plus', 'java', '', '', '', 8388233213),
(109, 'WIPRO', 'Wipro_Logo.svg.png', 'Wipro Limited is an Indian Information Technology Services corporation headquartered in Bengaluru, India. In 2013, Wipro demerged its non-IT businesse', 'pune', 'Software Company\r\nTimes Building, T imes, M. G. Road, MG Roa', 'software engineer', 50, 25000, 'BCA', '50', '50', '60', 'not_required', 'not_required', 0, 'c', '', '', '', '', '', 8388230765),
(110, 'HP', 'hp.png', 'The Hewlett-Packard Company or shortened to Hewlett-Packard was an American multinational information technology company headquartered in Palo Alto, C', 'delhi', 'Unit No 16n & 17n, 16th & 17th Floor, Oberoi Commerz, Intern', 'Database Administrator', 30, 50000, 'MCA', '70', '60', '80', '70', 'not_required', 0, '', '', 'java', 'python', '', '', 8377654563),
(111, 'Dell', 'Dell.png', 'Dell Inc. is a multinational computer technology company based in Round Rock, Texas and, along with Dell EMC, is a subsidiary of Dell Technologies, on', 'delhi', 'Dell India Pvt Ltd (Sales Division) in Domlur Layout, Bangal', 'Support Engineer', 25, 15000, 'BCA', '50', '50', '50', 'not_required', 'not_required', 0, '', '', '', '', 'php', '', 8333543723),
(112, 'CISCO', 'cisco.png', 'Cisco Systems, Inc. is an American multinational technology conglomerate headquartered in San JosÃ©, California, in the center of Silicon Valley, that', 'bengulure', 'Prestige Solitaire 401, Level, SNS Manor, 2, Brunton Road, C', 'Support Engineer', 250, 35000, 'MCA', '80', '80', '80', '70', 'not_required', 0, 'c', 'c_plus', 'java', '', '', '', 8655342634),
(113, 'vishnu traders', 'caveman_walk.jpg', 'we import goods from the top rated companies', 'noida', 'dr.ait clg bangalore bda jnana barathi ', 'Associative Software Engineer', 200, 5000, 'PUC', '70', '60', 'not_required', 'not_required', 'not_required', 0, 'c', 'c_plus', 'java', 'python', 'php', 'perl', 9663058266);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `subject`, `message`) VALUES
('sanket', '776sanket@gmail.com', 'game', 'hvjhmbiuikbikbk'),
('sanket', '776sanket@gmail.com', 'game', 'hvjhmbiuikbikbk'),
('sanket', '776sanket@gmail.com', 'game', 'hvjhmbiuikbikbk'),
('', '', '', ''),
('sanket', '776@gmail.com', 'ss', 'jkjne\r\nkleme\r\n'),
('', '', '', ''),
('', '', '', ''),
('', '776sanket@gmail.com', '', ''),
('', '776sanket@gmail.com', '', ''),
('5768767', '776sanket@gmail.com', 'ertyui', 'fyguhvghvkjbujhvugvugjvujggv'),
('sanket', '776sanket@gmail.com', 'hjvujh', 'yhvujhgviuhjbjiyfvgytfcytf7tuygh');

-- --------------------------------------------------------

--
-- Table structure for table `find_job`
--

CREATE TABLE `find_job` (
  `name` varchar(40) NOT NULL,
  `age` varchar(10) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `address` varchar(500) NOT NULL,
  `objective` varchar(500) NOT NULL,
  `emp_qualification` varchar(30) NOT NULL,
  `sslc` varchar(30) NOT NULL,
  `puc` varchar(30) NOT NULL,
  `bca` varchar(30) NOT NULL,
  `mca` varchar(30) NOT NULL,
  `mtech` varchar(30) NOT NULL,
  `c` varchar(30) NOT NULL,
  `c_plus` varchar(30) NOT NULL,
  `java` varchar(30) NOT NULL,
  `python` varchar(30) NOT NULL,
  `php` varchar(30) NOT NULL,
  `perl` varchar(30) NOT NULL,
  `other_skills` varchar(500) NOT NULL,
  `achievement` varchar(500) NOT NULL,
  `hobbies` varchar(500) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `sr_no` bigint(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`sr_no`, `name`, `password`, `phone`, `email`) VALUES
(25, '', '', 0, ''),
(35, 'fe', 'e', 4, 'fgr@gmail.com'),
(22, 'ssss', '5678', 34567, 'asdf@gmail.com'),
(20, 'sanket', '3456789', 456789, '776sanket@gmail.com'),
(27, 'abcd', 'naiksanket', 12345678, 'aaa@gmail.com'),
(24, 'sanket', '123456789', 123456789, '776san@gmail.com'),
(19, 'sanket', '456787654e', 456787654, '776sanket@gmail.com'),
(29, 'aaaa', 'aaaa', 456789876, 'aaaa@gmail.com'),
(26, 'sanket', 'naiksan', 2147483647, '776sanket@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `create_job`
--
ALTER TABLE `create_job`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`phone`),
  ADD UNIQUE KEY `sr_no` (`sr_no`),
  ADD KEY `sr_no_2` (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `create_job`
--
ALTER TABLE `create_job`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `sr_no` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
