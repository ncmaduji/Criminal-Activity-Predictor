-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2019 at 02:38 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cap_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `criminal_history_table`
--

CREATE TABLE `criminal_history_table` (
  `history_id` int(11) NOT NULL,
  `criminal_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `crime_date` date NOT NULL,
  `crime_type` varchar(60) NOT NULL,
  `sentencing` enum('YES','NO') NOT NULL,
  `city` varchar(60) NOT NULL,
  `state` char(2) NOT NULL,
  `last_update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `criminal_history_table`
--

INSERT INTO `criminal_history_table` (`history_id`, `criminal_id`, `account_id`, `crime_date`, `crime_type`, `sentencing`, `city`, `state`, `last_update_date`) VALUES
(0, 533952, 4, '2019-09-19', 'Murder', 'NO', 'Caldwell', 'NJ', '2017-09-19'),
(1, 7509, 2, '2003-11-24', 'Assault', 'YES', 'Denver', 'CO', '2003-11-24'),
(2, 940761, 5, '2019-12-26', 'Rape', 'YES', 'Stonewall', 'LA', '2019-12-16'),
(3, 183071, 6, '2008-07-27', 'Rape', 'NO', 'Stonewall', 'XX', '2008-07-27'),
(4, 408351, 5, '1999-04-16', 'Indecency', 'YES', 'Hydetown', 'PA', '1999-04-16'),
(5, 193819, 3, '2013-07-25', 'DUI', 'NO', 'Fremont', 'WI', '2013-07-25'),
(6, 499687, 7, '2005-07-22', 'Mugging', 'NO', 'Macksburg', 'IA', '2005-07-22'),
(7, 539712, 5, '2016-09-14', 'Endangerment', 'YES', 'Atlanta', 'GA', '2016-09-14'),
(8, 380086, 7, '1983-01-28', 'Assault', 'YES', 'Blanchester', 'OH', '1983-01-28'),
(9, 477616, 3, '1994-04-27', 'Rape', 'YES', 'Delmita', 'TX', '1994-04-27'),
(10, 162402, 7, '2014-02-17', 'Murder', 'YES', 'Eureka Springs', 'AR', '2014-02-17'),
(11, 231469, 8, '2009-04-14', 'Indecency', 'NO', 'Sabetha', 'KS', '2009-04-14'),
(12, 153989, 2, '2017-01-05', 'DUI', 'NO', 'Las Vegas', 'NV', '2017-01-05'),
(13, 386158, 4, '2015-11-24', 'Mugging', 'YES', 'New Matamoras', 'OH', '2015-11-24'),
(14, 301576, 6, '2017-07-19', 'Endangerment', 'NO', 'Maida', 'ND', '2017-07-19'),
(15, 441771, 8, '1990-11-26', 'Assault', 'NO', 'Quecreek', 'PA', '1990-11-26'),
(16, 528509, 5, '1994-08-22', 'Rape', 'YES', 'Beulaville', 'NC', '1994-08-22'),
(17, 912990, 8, '2002-09-02', 'Murder', 'YES', 'New Douglas', 'IL', '2002-09-02'),
(18, 214352, 3, '2015-01-19', 'Indecency', 'YES', 'Toeterville', 'IA', '2015-01-19'),
(19, 890290, 3, '2005-02-23', 'DUI', 'YES', 'Primm Springs', 'TN', '2005-02-23'),
(20, 622406, 4, '1998-06-07', 'Mugging', 'NO', 'Dutchtown', 'MO', '1998-06-07'),
(21, 979607, 2, '2016-04-25', 'Endangerment', 'NO', 'Shreveport', 'LA', '2016-04-25'),
(22, 969580, 6, '2016-02-07', 'Assault', 'YES', 'Heathsville', 'VA', '2016-02-07'),
(23, 426038, 4, '2009-12-30', 'Rape', 'NO', 'Middleport', 'OH', '2009-12-30'),
(24, 388642, 7, '2013-08-30', 'Mugging', 'NO', 'Woodbury', 'TN', '2013-08-30'),
(25, 560455, 7, '2001-07-03', 'Indecency', 'YES', 'Saint Cloud', 'FL', '2001-07-03'),
(26, 477253, 4, '2013-11-24', 'DUI', 'YES', 'Stockholm', 'SD', '2013-11-24'),
(27, 263480, 6, '2014-03-06', 'DUI', 'YES', 'Manning', 'ND', '2014-03-06'),
(28, 683826, 3, '2009-01-29', 'Endangerment', 'YES', 'Mount Vernon', 'WA', '2009-01-29'),
(29, 474599, 2, '1998-10-01', 'Assault', 'NO', 'Lawrenceburg', 'TN', '1998-10-01'),
(30, 335732, 3, '1987-08-20', 'Rape', 'NO', 'Mesa', 'AZ', '1987-08-20'),
(31, 329752, 6, '2015-04-13', 'Murder', 'YES', 'Panacea', 'FL', '2015-04-13'),
(32, 893212, 8, '2003-06-01', 'Indecency', 'NO', 'Kline', 'SC', '2003-06-01'),
(33, 621833, 5, '2015-09-30', 'DUI', 'NO', 'Bonanza', 'OR', '2015-09-30'),
(34, 456747, 4, '2012-08-23', 'Mugging', 'YES', 'Liberty', 'IN', '2012-08-23'),
(35, 278556, 3, '2016-08-18', 'Endangerment', 'YES', 'Ohatchee', 'AL', '2016-08-18'),
(36, 333476, 6, '1991-12-22', 'Assault', 'YES', 'Nashville', 'TN', '1991-12-22'),
(37, 218791, 2, '1997-07-03', 'Rape', 'YES', 'Eckerty', 'IN', '1997-07-03'),
(38, 134841, 4, '2013-07-17', 'Murder', 'NO', 'Lima', 'NY', '2013-07-17'),
(39, 726264, 6, '2007-06-09', 'Indecency', 'NO', 'Wright', 'AR', '2007-06-09'),
(40, 766610, 7, '2010-05-14', 'DUI', 'NO', 'Ellsworth', 'WI', '2010-05-14'),
(41, 923947, 4, '2004-05-20', 'Mugging', 'NO', 'Conroy', 'IA', '2004-05-20'),
(42, 227922, 3, '2007-04-19', 'Endangerment', 'NO', 'Lake Charles', 'LA', '2007-04-19'),
(43, 265813, 2, '2007-07-29', 'Assault', 'YES', 'Kalvesta', 'KS', '2007-07-29'),
(44, 247137, 3, '2006-06-07', 'Rape', 'YES', 'Knoxville', 'TN', '2006-06-07'),
(45, 407061, 5, '2005-01-19', 'Murder', 'YES', 'Rochester', 'NH', '2005-01-19'),
(48, 524896, 5, '2011-12-27', 'Mugging', 'NO', 'Topeka', 'KS', '2011-12-27'),
(49, 363065, 4, '2015-10-16', 'Endangerment', 'YES', 'New York City', 'NY', '2015-10-16'),
(50, 879753, 8, '2017-06-09', 'Endangerment', 'NO', 'Banner', 'WY', '2017-06-09'),
(52, 447813, 7, '2019-11-26', 'Murder', 'NO', 'Belmar', 'NJ', '2019-11-26'),
(53, 525955, 3, '2019-10-31', 'Rape', 'NO', 'Paterson', 'NJ', '2019-10-31'),
(54, 818384, 2, '2019-11-11', 'Arson', 'YES', 'Newark', 'NJ', '2019-11-11'),
(55, 971640, 1, '2019-09-24', 'Murder', 'NO', 'Passaic', 'NJ', '2019-09-24'),
(56, 253573, 8, '2019-10-04', 'Indecency', 'NO', 'Clifton', 'NJ', '2019-10-04'),
(57, 904898, 4, '2019-10-24', 'DUI', 'YES', 'Atlantic City', 'NJ', '2019-10-24'),
(58, 515103, 6, '2019-10-29', 'Mugging', 'YES', 'Paramus', 'NJ', '2019-10-29'),
(59, 491943, 7, '2019-10-11', 'Endangerment', 'YES', 'Englewood', 'NJ', '2019-10-11'),
(60, 750173, 3, '2019-09-09', 'Endangerment', 'YES', 'Paterson', 'NJ', '2019-09-09'),
(61, 687017, 2, '2019-09-01', 'Mugging', 'NO', 'Egg Harbor', 'NJ', '2019-09-01'),
(62, 241882, 1, '2019-10-15', 'Murder', 'NO', 'Teaneck', 'NJ', '2019-10-15'),
(63, 758872, 8, '2019-11-05', 'Rape', 'YES', 'Bogota', 'NJ', '2019-11-05'),
(64, 940922, 5, '2019-11-07', 'Arson', 'NO', 'West New York', 'NJ', '2019-11-07'),
(65, 917937, 7, '2019-11-12', 'Murder', 'NO', 'North Bergen', 'NJ', '2019-11-12'),
(66, 917395, 3, '2019-09-07', 'Indecency', 'YES', 'Jersey City', 'NJ', '2019-09-07'),
(67, 183071, 2, '2019-09-26', 'DUI', 'NO', 'Union', 'NJ', '2019-09-26'),
(68, 316110, 1, '2019-10-26', 'Mugging', 'YES', 'Caldwell', 'NJ', '2019-10-26'),
(69, 293459, 8, '2019-11-19', 'Endangerment', 'YES', 'West Orange', 'NJ', '2019-11-19'),
(70, 732017, 4, '2019-09-19', 'Endangerment', 'YES', 'Asbury', 'NJ', '2019-09-19'),
(71, 915638, 6, '2019-10-17', 'Mugging', 'YES', 'Belmar', 'NJ', '2019-10-17'),
(72, 478003, 6, '2019-10-02', 'Murder', 'NO', 'Paterson', 'NJ', '2019-10-02'),
(73, 951225, 4, '2019-11-13', 'Rape', 'NO', 'Newark', 'NJ', '2019-11-13'),
(74, 883936, 7, '2019-11-27', 'Arson', 'NO', 'Passaic', 'NJ', '2019-11-27'),
(75, 528673, 7, '2019-09-15', 'Batter', 'NO', 'Clifton', 'NJ', '2019-09-15'),
(76, 765850, 4, '2019-09-12', 'Assault', 'YES', 'Atlantic City', 'NJ', '2019-09-12'),
(77, 262382, 6, '2019-09-27', 'Arson', 'NO', 'Paramus', 'NJ', '2019-09-27'),
(78, 870820, 3, '2019-10-01', 'Arson', 'NO', 'Englewood', 'NJ', '2019-10-01'),
(79, 806955, 2, '2019-09-01', 'Arson', 'YES', 'Paterson', 'NJ', '2019-09-01'),
(80, 325319, 3, '2019-09-17', 'Rape', 'YES', 'Egg Harbor', 'NJ', '2019-09-17'),
(81, 623253, 5, '2019-11-11', 'Murder', 'YES', 'Teaneck', 'NJ', '2019-11-11'),
(82, 225925, 7, '2019-10-11', 'Kidnapping', 'NO', 'Bogota', 'NJ', '2019-10-11'),
(83, 761821, 3, '2019-09-10', 'Kidnapping', 'YES', 'West New York', 'NJ', '2019-09-10'),
(84, 400173, 2, '2019-09-26', 'Endangerment', 'NO', 'North Bergen', 'NJ', '2019-09-26'),
(85, 802554, 1, '2019-10-26', 'Endangerment', 'YES', 'Jersey City', 'NJ', '2019-10-26'),
(86, 476433, 8, '2019-11-19', 'Mugging', 'NO', 'Union', 'NJ', '2019-11-19'),
(87, 533952, 4, '2019-09-19', 'Murder', 'NO', 'Caldwell', 'NJ', '2019-09-19'),
(88, 623929, 6, '2019-10-17', 'Rape', 'YES', 'Paterson', 'NJ', '2019-10-17'),
(89, 844177, 6, '2019-10-02', 'Arson', 'NO', 'Passaic', 'NJ', '2019-10-02'),
(90, 212893, 7, '2019-11-13', 'Batter', 'NO', 'Caldwell', 'NJ', '2019-11-13'),
(91, 185032, 4, '2019-11-27', 'Assault', 'YES', 'West Orange', 'NJ', '2019-11-27'),
(92, 867084, 3, '2019-11-26', 'Arson', 'YES', 'Newark', 'NJ', '2019-11-26'),
(93, 969964, 5, '2019-10-31', 'Murder', 'YES', 'Newark', 'NJ', '2019-10-31'),
(94, 158666, 7, '2019-11-11', 'Indecency', 'YES', 'Camden', 'NJ', '2019-11-11'),
(95, 489424, 3, '2019-09-24', 'DUI', 'NO', 'Paterson', 'NJ', '2019-09-24'),
(96, 639892, 2, '2019-10-04', 'Mugging', 'NO', 'Bowling Green', 'NJ', '2019-10-04'),
(97, 704709, 1, '2019-10-24', 'Endangerment', 'YES', 'Uniontown', 'NJ', '2019-10-24'),
(98, 461593, 8, '2019-10-29', 'Endangerment', 'NO', 'Camden', 'NJ', '2019-10-29'),
(99, 392491, 4, '2019-10-11', 'Kidnapping', 'NO', 'Camden', 'NJ', '2019-10-11'),
(100, 495141, 6, '2019-09-28', 'Kidnapping', 'NO', 'Camden', 'NJ', '2019-09-28');

-- --------------------------------------------------------

--
-- Table structure for table `criminal_profile_table`
--

CREATE TABLE `criminal_profile_table` (
  `criminal_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `birth_date` date NOT NULL,
  `age` int(3) NOT NULL,
  `current_address` varchar(60) NOT NULL,
  `current_city` varchar(60) NOT NULL,
  `current_state` char(2) NOT NULL,
  `current_zipcode` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `criminal_profile_table`
--

INSERT INTO `criminal_profile_table` (`criminal_id`, `account_id`, `first_name`, `last_name`, `birth_date`, `age`, `current_address`, `current_city`, `current_state`, `current_zipcode`) VALUES
(7509, 2, 'Lois', 'Gin', '1981-03-29', 38, '80 Brophy Ln', 'Denver', 'CO', 80224),
(8326, 5, 'Larry', 'Miller', '1988-10-31', 31, '80 Brophy Ln', 'Asbury', 'NJ', 17712),
(134841, 4, 'Donna', 'Morgan', '1983-09-14', 36, '273 Flores Ave', 'Lima', 'NY', 14485),
(153989, 2, 'Jack', 'Jardine', '1995-05-19', 24, '34 Diaz St', 'Las Vegas', 'NV', 89170),
(158666, 7, 'Rebecca', 'Stewart', '1961-08-11', 58, '867 Harris St', 'Camden', 'NJ', 93526),
(162402, 7, 'Diana', 'Jones', '1987-11-13', 32, '345 Thomas Ave', 'Eureka Springs', 'AR', 72632),
(183071, 2, 'Andrea', 'Garcia', '1985-07-06', 34, '736 Hayes Dr', 'Union', 'NJ', 46530),
(185032, 4, 'Eugene', 'Perez', '1979-10-06', 40, '90 James Pl', 'West Orange', 'NJ', 53490),
(193819, 3, 'Benjamin', 'Jones', '1977-04-17', 42, '467 Rivers Ave', 'Fremont', 'WI', 54940),
(212893, 7, 'Janet', 'Henderson', '1979-12-24', 39, '254 Torres Ln', 'Caldwell', 'NJ', 33166),
(214352, 3, 'Theresa', 'Jones', '1992-12-05', 26, '7585 Watson Rd', 'Toeterville', 'IA', 50481),
(218791, 2, 'Aaron', 'Jones', '1969-02-10', 50, '336 Simmons Dr', 'Eckerty', 'IN', 47116),
(225925, 7, 'Paul', 'Cooper', '1991-08-12', 28, '294 Brooks Ave', 'Bogota', 'NJ', 78943),
(226714, 5, 'Nancy', 'Jardine', '1983-11-14', 36, '642 Watson St', 'Bowling Green', 'IN', 47833),
(227922, 3, 'Amanda', 'Sorvino', '1982-07-29', 37, '45 Rodriguez Dr', 'Lake Charles', 'LA', 70605),
(231469, 8, 'Ralph', 'Andrews', '1975-02-05', 44, '6743 Peterson St', 'Sabetha', 'KS', 66534),
(241882, 1, 'Debra', 'Wood', '1969-10-30', 50, '34 Diaz St', 'Teaneck', 'NJ', 68009),
(247137, 3, 'Alan', 'Andrews', '1978-12-11', 40, '867 Harris St', 'Knoxville', 'TN', 37901),
(253573, 8, 'Sharon', 'Lopez', '1991-05-04', 28, '43 Taylor St', 'Clifton', 'NJ', 24813),
(262382, 6, 'Cheryl', 'Miller', '1985-04-20', 34, '544 Alexander St', 'Paramus', 'NJ', 41310),
(263480, 6, 'Daniel', 'Gill', '1990-01-01', 29, '544 Alexander St', 'Manning', 'ND', 58642),
(265813, 2, 'Jack', 'Thompson', '1985-01-04', 34, '64 Hayes Ave', 'Kalvesta', 'KS', 67856),
(278556, 3, 'Richard', 'Gill', '1993-07-28', 26, '100 Collins St', 'Ohatchee', 'AL', 36271),
(293459, 8, 'Steven', 'Phillips', '1986-09-12', 33, '6744 Powell Ave', 'West Orange', 'NJ', 70833),
(301576, 6, 'Wayne', 'Jones', '1996-06-26', 23, '476 Moore St', 'Maida', 'ND', 58255),
(316110, 1, 'Jeremy', 'Sanchez', '1965-02-05', 54, '7585 Watson Rd', 'Caldwell', 'NJ', 37701),
(325319, 3, 'Carolyn', 'Price', '1976-05-30', 43, '2667 Murphy St', 'Egg Harbor', 'NJ', 60189),
(329752, 6, 'Lillian', 'Jardine', '1981-05-12', 38, '294 Brooks Ave', 'Panacea', 'FL', 32346),
(333476, 6, 'Mary', 'Kivell', '1967-12-01', 51, '354 Howard Ave', 'Nashville', 'TN', 37219),
(335732, 3, 'Brenda', 'Sorvino', '1963-12-06', 55, '2667 Murphy St', 'Mesa', 'AZ', 85208),
(363065, 4, 'Nancy', 'Johnson', '1993-11-10', 26, '123 Moore Dr', 'New York City', 'NY', 10087),
(380086, 7, 'Carol', 'Gill', '1958-06-30', 61, '3455 Nelson Ave', 'Blanchester', 'OH', 45107),
(386158, 4, 'Melissa', 'Thompson', '1972-02-24', 47, '654 Ross Ave', 'New Matamoras', 'OH', 45767),
(388642, 7, 'Ruby', 'Kivell', '1980-05-01', 39, '5 Gray Rd', 'Woodbury', 'TN', 37190),
(392491, 4, 'Theresa', 'Murphy', '1987-12-30', 31, '123 Moore Dr', 'Camden', 'NJ', 99627),
(400173, 2, 'Dorothy', 'Edwards', '1984-01-19', 35, '375 Wood St', 'North Bergen', 'NJ', 19132),
(407061, 5, 'Elizabeth', 'Jardine', '1964-08-15', 55, '908 Bryant Ave', 'Rochester', 'NH', 93867),
(408351, 5, 'Diane', 'Doe', '1977-12-04', 41, '56 Lewis Rd', 'Hydetown', 'PA', 16328),
(426038, 4, 'Joan', 'Parent', '1972-11-20', 47, '435 Price St', 'Middleport', 'OH', 45760),
(428945, 6, 'Joe', 'Parsons', '1963-06-16', 56, '456 Rosdale St', 'Michigantown', 'IN', 46057),
(441771, 8, 'Cheryl', 'Morgan', '1958-02-23', 61, '345 Walker St', 'Quecreek', 'PA', 15555),
(447813, 7, 'Ann', 'Coleman', '1989-05-11', 30, '1246 Sunny Dr', 'Belmar', 'NJ', 51536),
(456747, 4, 'Roy', 'Cruz', '1991-05-08', 28, '375 Wood St', 'Liberty', 'IN', 47353),
(461593, 8, 'Nicole', 'Ward', '1964-12-12', 54, '78 Jackson Rd', 'Camden', 'NJ', 48278),
(474599, 2, 'Maria', 'Jones', '1975-03-19', 44, '234 Richardson St', 'Lawrenceburg', 'TN', 38464),
(476433, 8, 'Lillian', 'Mitchell', '1974-10-23', 45, '354 Howard Ave', 'Union', 'NJ', 67214),
(477253, 4, 'Anne', 'Parent', '1989-07-29', 30, '5464 Collins Ave', 'Stockholm', 'SD', 57264),
(477616, 3, 'Frances', 'Sorvino', '1959-06-09', 60, '4657 Henderson St', 'Delmita', 'TX', 78536),
(478003, 6, 'Cynthia', 'White', '1963-06-15', 56, '353 King Ave', 'Paterson', 'NJ', 64133),
(489424, 3, 'Phillip', 'White', '1978-03-04', 41, '908 Bryant Ave', 'Paterson', 'NJ', 97453),
(491943, 7, 'Nancy', 'Howard', '1961-05-05', 58, '4657 Henderson St', 'Englewood', 'NJ', 23967),
(495141, 6, 'Tammy', 'Young', '1979-03-22', 40, '32 Hill St', 'Camden', 'NJ', 48801),
(499687, 7, 'Patrick', 'Kivell', '1982-09-27', 37, '43 Taylor St', 'Macksburg', 'IA', 50155),
(515103, 6, 'Anne', 'Perez', '1958-05-05', 61, '3455 Nelson Ave', 'Paramus', 'NJ', 38505),
(524896, 5, 'Judy', 'Michaels', '1961-03-25', 58, '78 Jackson Rd', 'Topeka', 'KS', 66606),
(525955, 3, 'Judy', 'Gonzales', '1959-06-17', 60, '456 Rosdale St', 'Paterson', 'NJ', 27724),
(528509, 5, 'Paula', 'Howard', '1966-08-22', 53, '253 White Ave', 'Beulaville', 'NC', 28518),
(528673, 7, 'Paul', 'Watson', '1959-03-09', 60, '765 Cox Ave', 'Clifton', 'NJ', 41607),
(533952, 4, 'Kelly', 'Adams', '1975-05-23', 44, '336 Simmons Dr', 'Caldwell', 'NJ', 73760),
(539712, 5, 'Nancy', 'Jardine', '1995-06-13', 24, '123 Allen Dr', 'Atlanta', 'GA', 30334),
(560455, 7, 'Carolyn', 'Smith', '1958-03-10', 61, '765 Cox Ave', 'Saint Cloud', 'FL', 34771),
(621833, 5, 'Gregory', 'Howard', '1993-08-31', 26, '74 Thomas Rd', 'Bonanza', 'OR', 97623),
(622406, 4, 'Thomas', 'Lachapel', '1967-10-04', 52, '64 Jones Dr', 'Dutchtown', 'MO', 63745),
(623253, 5, 'Ruby', 'Stewart', '1968-10-23', 51, '294 Brooks Ave', 'Teaneck', 'NJ', 56658),
(623929, 6, 'Jimmy', 'Howard', '1966-11-27', 53, '273 Flores Ave', 'Paterson', 'NJ', 13424),
(639892, 2, 'Jose', 'Hill', '1994-10-08', 25, '642 Watson St', 'Bowling Green', 'NJ', 39532),
(683826, 3, 'Roger', 'Santos', '1969-07-07', 50, '7654 Foster Ave', 'Mount Vernon', 'WA', 98273),
(687017, 2, 'Frances', 'Watson', '1961-01-30', 58, '6743 Peterson St', 'Egg Harbor', 'NJ', 59934),
(702813, 5, 'Ernest', 'Andrews', '1989-11-09', 30, '90 Marcelluis Ave', 'Uniontown', 'AR', 72955),
(704709, 1, 'Harold', 'Nelson', '1984-12-24', 34, '90 Marcelluis Ave', 'Uniontown', 'NJ', 60351),
(726264, 6, 'Carl', 'Kivell', '1973-12-22', 45, '56 Patterson St', 'Wright', 'AR', 72182),
(732017, 4, 'Cynthia', 'Ramirez', '1982-09-22', 37, '64 Jones Dr', 'Asbury', 'NJ', 59417),
(750173, 3, 'Antonio', 'Roberts', '1995-08-27', 24, '345 Thomas Ave', 'Paterson', 'NJ', 35111),
(758872, 8, 'Henry', 'Jenkins', '1984-11-06', 35, '654 Ross Ave', 'Bogota', 'NJ', 64150),
(761821, 3, 'Ernest', 'Washington', '1984-10-28', 35, '74 Thomas Rd', 'West New York', 'NJ', 12983),
(765850, 4, 'Linda', 'Moore', '1991-08-18', 28, '5464 Collins Ave', 'Atlatic City', 'NJ', 16401),
(766610, 7, 'Joyce', 'Sorvino', '1961-08-22', 58, '254 Torres Ln', 'Ellsworth', 'WI', 54011),
(802554, 1, 'Ryan', 'Alexander', '1993-08-01', 26, '100 Collins St', 'Jersey City', 'NJ', 70749),
(806955, 2, 'William', 'Hernandez', '1967-07-22', 52, '234 Richardson St', 'Paterson', 'NJ', 32569),
(818384, 2, 'Peter', 'Washington', '1982-11-06', 37, '56 Lewis Rd', 'Newark', 'NJ', 49024),
(844177, 6, 'Margaret', 'Allen', '1981-09-08', 38, '56 Patterson St', 'Passaic', 'NJ', 45673),
(867084, 3, 'Deborah', 'Smith', '1977-10-31', 42, '45 Rodriguez Dr', 'Newark', 'NJ', 99791),
(870820, 3, 'Martha', 'Washington', '1991-03-28', 28, '7654 Foster Ave', 'Englewood', 'NJ', 74646),
(879753, 8, 'Pamela', 'Rodriguez', '1996-04-14', 23, '32 Hill St', 'Banner', 'WY', 82832),
(883936, 7, 'Douglas', 'Flores', '1986-04-21', 33, '5 Gray Rd', 'Passaic', 'NJ', 81418),
(890290, 3, 'Julia', 'Smith', '1959-07-15', 60, '6744 Powell Ave', 'Primm Springs', 'TN', 38476),
(893212, 8, 'Amy', 'Andrews', '1981-06-16', 38, '294 Brooks Ave', 'Kline', 'SC', 29814),
(904898, 4, 'Ann', 'Cooper', '1992-12-25', 26, '123 Allen Dr', 'Atlatic City', 'NJ', 59821),
(912990, 8, 'Joshua', 'Nunez', '1970-05-18', 49, '736 Hayes Dr', 'New Douglas', 'IL', 62074),
(915638, 6, 'Jason', 'Anderson', '1974-01-03', 45, '764 Turner St', 'Belmar', 'NJ', 61748),
(917395, 3, 'Christopher', 'Nelson', '1960-03-29', 59, '253 White Ave', 'Jersey City', 'NJ', 86445),
(917937, 7, 'Todd', 'Hall', '1991-08-31', 28, '345 Walker St', 'North Bergen', 'NJ', 21133),
(923947, 4, 'Mary', 'Gill', '1962-06-21', 57, '90 James Pl', 'Conroy', 'IA', 52220),
(940761, 5, 'Brenda', 'Gallagher', '1970-07-31', 49, '1246 Sunny Dr', 'Stonewall', 'LA', 71078),
(940922, 5, 'Melissa', 'Butler', '1994-11-14', 25, '476 Moore St', 'West New York', 'NJ', 69151),
(951225, 4, 'Margaret', 'Brooks', '1992-06-27', 27, '435 Price St', 'Newark', 'NJ', 81045),
(969580, 6, 'Matthew', 'Jones', '1993-10-26', 26, '353 King Ave', 'Heathsville', 'VA', 22473),
(969964, 5, 'Janice', 'Parker', '1980-01-12', 39, '64 Hayes Ave', 'Newark', 'NJ', 65305),
(971640, 1, 'Clarence', 'Ross', '1960-12-13', 58, '467 Rivers Ave', 'Passaic', 'NJ', 37841),
(979607, 2, 'Carol', 'Morgan', '1994-12-14', 24, '764 Turner St', 'Shreveport', 'LA', 71162);

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

CREATE TABLE `employee_table` (
  `employee_ssn` int(9) NOT NULL,
  `account_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `role` enum('Browse','Edit','Admin','N/A') NOT NULL,
  `email` varchar(60) NOT NULL,
  `department` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`employee_ssn`, `account_id`, `first_name`, `last_name`, `DOB`, `username`, `password`, `role`, `email`, `department`) VALUES
(235657854, 1, 'John', 'Smith', '1970-12-25', 'jsmith', 'password', 'Browse', 'jsmith1@policedept.com', 'Homicide'),
(987563467, 2, 'Carlos', 'Rivera', '1983-10-10', 'crivera1', 'password', 'Edit', 'crivera@policedept.com', 'SVU'),
(532675425, 3, 'Jill', 'Martinez', '1991-12-06', 'jmartinez', 'password', 'Edit', 'jmartinez3@policedept.com', 'SVU'),
(345760978, 4, 'Michael', 'O\'Leary', '1956-09-25', 'moleary', 'password', 'Edit', 'moleary1@policedept.com', 'SVU'),
(123456789, 5, 'Lucas', 'Scott', '1970-06-12', 'lscott', 'password', 'Edit', 'lscott5@policedept.com', 'Homicide'),
(567230978, 6, 'Bruce', 'Wayne', '1976-10-26', 'bwayne', 'password', 'Edit', 'bwayne2@policedept.com', 'SVU'),
(789342356, 7, 'Dick', 'Grayson', '1980-05-27', 'dgrayson', 'password', 'Edit', 'dgrayson2@policedept.com', 'SVU'),
(347097654, 8, 'Donna', 'Troy', '1986-07-30', 'dtroy', 'password', 'Admin', 'dtroy2@policedept.com', 'Homicide'),
(878661254, 9, 'Charles', 'Rivera', '1988-03-01', 'crivera2', 'password', 'Browse', 'crivera2@policedept.com', 'Homicide'),
(974576123, 10, 'Butter', 'Scotch', '1972-10-29', 'bscotch', 'password', 'Browse', 'bscotch1@policedept.com', 'SVU'),
(981287564, 11, 'Nigel', 'Brown', '1977-12-12', 'nbrown', 'password', 'Edit', 'nbrown1@policedept.com', 'Homicide'),
(765229012, 12, 'Kim', 'Garcia', '1979-04-26', 'kgarcia', 'password', 'Browse', 'kgarcia34@policedept.com', 'Homicide'),
(0, 13, 'Jim', 'Todd', '1994-12-21', 'jtodd', '', 'Browse', 'jtodd@policedept.com', 'SVU');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `criminal_history_table`
--
ALTER TABLE `criminal_history_table`
  ADD PRIMARY KEY (`history_id`),
  ADD KEY `criminal_id` (`criminal_id`),
  ADD KEY `criminal_history_table_ibfk_1` (`account_id`);

--
-- Indexes for table `criminal_profile_table`
--
ALTER TABLE `criminal_profile_table`
  ADD PRIMARY KEY (`criminal_id`),
  ADD KEY `criminal_profile_table_ibfk_1` (`account_id`);

--
-- Indexes for table `employee_table`
--
ALTER TABLE `employee_table`
  ADD PRIMARY KEY (`account_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `criminal_history_table`
--
ALTER TABLE `criminal_history_table`
  ADD CONSTRAINT `criminal_history_table_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `employee_table` (`account_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `criminal_history_table_ibfk_2` FOREIGN KEY (`criminal_id`) REFERENCES `criminal_profile_table` (`criminal_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `criminal_profile_table`
--
ALTER TABLE `criminal_profile_table`
  ADD CONSTRAINT `criminal_profile_table_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `employee_table` (`account_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
