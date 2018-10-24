-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2018 at 12:48 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact`
--
CREATE DATABASE IF NOT EXISTS `contact` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `contact`;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `query` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Database: `search`
--
CREATE DATABASE IF NOT EXISTS `search` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `search`;

-- --------------------------------------------------------

--
-- Table structure for table `search1`
--

CREATE TABLE `search1` (
  `jobtitle` text NOT NULL,
  `location` text NOT NULL,
  `experience` int(11) NOT NULL,
  `companyname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search1`
--

INSERT INTO `search1` (`jobtitle`, `location`, `experience`, `companyname`) VALUES
('bankmanager', 'mumbai', 0, 'HDFC'),
('bankmanager', 'navimumbai', 1, 'HDFC'),
('bankmanager', 'bengalore', 2, 'fincare small finance bank'),
('bankmanager', 'chennai', 0, 'fincare small finance bank'),
('bankmanager', 'pune', 5, 'fincare small finance bank'),
('bankmanager', 'hyderabad', 10, 'fincare small finance bank'),
('bankmanager', 'mumbai', 5, 'spectrum'),
('bankmanager', 'pune', 10, 'spectrum'),
('bankmanager', 'hyderabad', 5, 'karurvysya bank'),
('bankmanager', 'pune', 5, 'indian bank'),
('bankmanager', 'tirupati', 0, 'punjab national bank'),
('bankmanager', 'chennai', 0, 'ESEF small finance banking lim '),
('bankmanager', 'pune', 5, 'teamlease pvt limited'),
('bankmanager', 'chennai', 0, 'karurvysya bank'),
('bankmanager', 'bengalore', 5, 'punjab national bank'),
('bankmanager', 'kolkata', 5, 'bank of baroda'),
('bankmanager', 'punjab', 5, 'punjab national bank'),
('bankpo', 'indore', 0, 'computer age management pvt limited'),
('bankpo', 'kolkata', 5, 'computer age management pvt limited'),
('bankpo', 'bhupal', 10, 'computer age management pvt limited'),
('bankpo', 'hyderabad', 5, 'computer age management pvt limited'),
('bankpo', 'pune', 5, 'HDFC'),
('bankpo', 'chennai', 10, 'HDFC'),
('bankpo', 'banglore', 5, 'HDFC'),
('bankpo', 'pune', 0, 'punjab national bank'),
('bankpo', 'tirupathi', 5, 'punjab national bank'),
('bankpo', 'hyderabad', 5, 'punjab national bank'),
('bankpo', 'kurnool', 5, 'karur vysya bank'),
('bankpo', 'vijayawada', 10, 'bank of baroda'),
('bankpo', 'vijayawada', 5, 'indian bank'),
('bankpo', 'kakinada', 5, 'punjab national bank'),
('bankpo', 'pune', 10, 'syndicate bank'),
('cashier', 'delhi', 0, 'tech group'),
('cashier', 'pune', 5, 'tech group'),
('cashier', 'pune', 10, 'tech group'),
('cashier', 'mumbai', 5, 'harvest gold india limited'),
('cashier', 'chennai', 5, 'harvest gold india limited'),
('cashier', 'vijayawada', 5, 'harvest gold india limited'),
('cashier', 'kakinada', 0, 'bank of baroda'),
('cashier', 'pune', 5, 'indian bank'),
('cashier', 'chennai', 10, 'bank of india'),
('cashier', 'kolkata', 5, 'indian bank'),
('cashier', 'punjab', 10, 'punjab national bank'),
('cashier', 'indore', 0, 'indian bank'),
('cashier', 'delhi', 5, 'bank of baroda'),
('cashier', 'navimumabai', 10, 'syndicate bank'),
('cashier', 'amaravathi', 5, 'andhra pragathi graminabank'),
('clerk', 'patna', 0, 'nic bank'),
('clerk', 'delhi', 5, 'nic bank'),
('clerk', 'pune', 5, 'nic bank'),
('clerk', 'chennai', 10, 'sla consult india'),
('clerk', 'vijayawada', 0, 'sla consult india'),
('railwayengineer', 'allhabad', 0, 'western raiways'),
('ticketcollector', 'hyderabad', 0, 'sothern railways'),
('instructor', 'hyderabad', 5, 'southern railways'),
('driver', 'kolkata', 5, 'eastern railways'),
('ticketcollector', 'kolkta', 0, 'eastern railways'),
('instructor', 'chennai', 5, 'southern railways'),
('railwayengineer', 'hyderabad', 5, 'south central railways'),
('professor', 'tirupathi', 5, 'sree vidyanikethan degree college'),
('professor', 'tirupathi', 5, 'sv university'),
('assisant professor', 'kurnool', 10, 'pullareddy enginneering college'),
('assistant professor', 'vijayawada', 0, 'siddarth college of engineering'),
('lab assistant', 'hyderabad', 0, 'CBIT'),
('lab assistant', 'vijayawada', 0, 'siddarth college of engineering'),
('teacher', 'kurnool', 5, 'keshava reddy schools'),
('teacher', 'hyderabad', 10, 'gowthm model school'),
('teacher', 'delhi', 10, 'delhi public school'),
('lab assistant', 'tirupathi', 0, 'sree vidyanikethan engineering college'),
('designer', 'hyderabad', 3, 'exotel techom pvt ltd'),
('coder', 'amaravathi', 4, 'infosys pvt ltd'),
('tester', 'banglore', 0, 'wipro'),
('designer', 'chennai', 5, 'google'),
('tester', 'bhopal', 2, 'microsoft'),
('analyst', 'pune', 7, 'maytas'),
('coder', 'delhi', 3, 'infotech'),
('designer', 'tokyo', 4, 'technical solutions'),
('analyst', 'new york', 8, 'IBM'),
('coder', 'london', 6, 'software solutions'),
('Fund Accountant Specialist', 'hyderabad', 0, 'Agrigold'),
('SAP operator', 'banglore', 2, 'LIC(Life Insurance Corporation)'),
('Senior Accountant', 'calicut', 3, 'LIC'),
('Accountant Administrator', 'JAIPUR', 3, 'fund safety and solutions'),
('Fund Accountant Specialist', 'kolkata', 5, 'mackenna\'s gold and investments'),
('SAP operator', 'mumbai', 1, 'NIFTY'),
('Senior Accountant', 'chennai', 8, 'Agrigold'),
('Accountant Administrator', 'Amaravathi', 10, 'delhi school of economics and commerce'),
('SAP operator', 'delhi', 5, 'kathi financial advisors'),
('Fund Accountant Specialist', 'vijayawada', 7, 'Bhagyam investments'),
('bankmanager', 'ananthapur', 1, 'Bank of India'),
('bankpo', 'nandyal', 2, 'Grameena Vysya Bank'),
('cashier', 'kadapa', 3, 'Andhra Bank'),
('clerk', 'vijayawada', 4, 'SBI'),
('cashier', 'hyderabad', 5, 'SBI'),
('clerk', 'delhi', 6, 'Grameena vysya Bank'),
('bankmanager', 'mumbai', 7, 'Andhra Bank'),
('bankpo', 'madras', 8, 'Andhra Bank'),
('cashier', 'allahabad', 9, 'Grameena vysya bank'),
('clerk', 'pune', 10, 'SBI'),
('telecaller', 'banglore', 0, 'jio'),
('hardware design engineer', 'ahmedabad', 1, 'idea'),
('fiber manager', 'hyderabad', 2, 'bharathi airtel'),
('RPA consultant', 'chennai', 3, 'reliance'),
('RPA consultant', 'pune', 4, 'aircel'),
('Hardware Design Engineer', 'mumbai', 6, 'jio'),
('fiber manager', 'kolkata', 7, 'telenor'),
('telecaller', 'vijayawada', 2, 'idea'),
('telecaller', 'calicut', 3, 'vodafone'),
('fiber manager', 'delhi', 4, 'Reliance jio'),
('retail store manager', 'chennai', 2, 'heritage stores'),
('financial manager', 'vijayawada', 3, 'anil group of assistance'),
('food manager', 'tirupathi', 4, 'taj hotels'),
('medical manager', 'pondycherry', 0, 'AIMS'),
('medical manager', 'kolkata', 1, 'rainbow hospitals'),
('retail store manager', 'mumbai', 2, 'more stores'),
('food manager', 'pune', 3, 'grand ritz hotels'),
('financial manager', 'kadapa', 4, 'vidyanikethan trust'),
('medical manager', 'nandyal', 1, 'apolo medicals'),
('food manager', 'ananthapur', 2, 'greenland hotels'),
('manager', 'Delhi', 5, 'aai'),
('junior executive', 'Delhi', 3, 'aai'),
('deputy general manager', 'mumbai', 2, 'aai'),
('senior assistant', 'hyderabad', 3, 'aai'),
('junior assistant', 'delhi', 3, 'aai'),
('Director', 'hyderabad', 2, 'bsnl'),
('JuniorAccountsOfficer(JAO)', 'mumbai', 3, 'bsnl'),
('Junior Engineer', 'hyderabad', 0, 'bsnl'),
('Executive Director', 'chennai', 3, 'bsnl'),
('Management Trainee', 'hyderabad', 5, 'bsnl'),
('Senior Medical Officer', 'mumbai', 3, 'bhel'),
('General Duty Medical Officer', 'mumbai', 4, 'bhel'),
('Law officer', 'hyderabad', 2, 'bhel'),
('Assistant Executive Engineer', 'West Godavari', 3, 'ongc'),
('Geologist', 'vizag', 3, 'ongc'),
('Deputy Collector-District Collectrate', 'hyderabad', 0, 'group1'),
('Assistant Commisioner of Police(ACP)-Police Dept', 'ongole', 2, 'group1'),
('Assistant Director-Rural Development Department', 'vijayawada', 2, 'group1'),
('Deputy Registrar', 'kurnool', 1, 'group1'),
('Assistant Commercial Tax Officer', 'Hyderabad', 3, 'group2'),
('Deputy Tehsildar-MRO office', 'ongole', 0, 'group2'),
('Revenue Sub Service', 'Chennai', 1, 'group2'),
('Municipal Commissioner', 'Vijayawada', 0, 'group2'),
('Security Staff', 'hyderabad', 1, 'group3'),
('Sterno Typist', 'vijayawada', 0, 'group3'),
('Junior Assistant', 'nellore', 2, 'group4'),
('Typist', 'nandyal', 2, 'group4'),
('clerk', 'ongole', 2, 'group4'),
('clerk', 'ongole', 2, 'group4');
--
-- Database: `subscribe`
--
CREATE DATABASE IF NOT EXISTS `subscribe` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `subscribe`;

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `name` varchar(20) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
