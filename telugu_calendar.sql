-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2022 at 12:23 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telugu_calendar`
--

-- --------------------------------------------------------

--
-- Table structure for table `daily_horoscope`
--

CREATE TABLE `daily_horoscope` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `rasi` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `lucky_number` int(11) DEFAULT NULL,
  `lucky_color` text DEFAULT NULL,
  `treatment` text DEFAULT NULL,
  `health` text DEFAULT NULL,
  `wealth` text DEFAULT NULL,
  `family` text DEFAULT NULL,
  `things_love` text DEFAULT NULL,
  `profession` text DEFAULT NULL,
  `married_life` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daily_horoscope`
--

INSERT INTO `daily_horoscope` (`id`, `date`, `rasi`, `description`, `lucky_number`, `lucky_color`, `treatment`, `health`, `wealth`, `family`, `things_love`, `profession`, `married_life`) VALUES
(1, '2022-09-22', 'Vruschikam', 'Elaam avan seitha seiyal ', 9, 'Blue', 'work daily', 'well', 'well', ' family updated', 'everything', 'Software Developer', 'Married');

-- --------------------------------------------------------

--
-- Table structure for table `festivals`
--

CREATE TABLE `festivals` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `festival` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `festivals`
--

INSERT INTO `festivals` (`id`, `date`, `festival`) VALUES
(1, '2022-09-07', 'Diwali'),
(2, '2022-10-08', 'Pongal'),
(3, '2022-10-10', 'pooja'),
(4, '2022-09-22', 'Festival \r\nfestival\r\nfestival\r\nfestival\r\nfestivalfestival\r\nfestival\r\nfestival\r\nfestival\r\n'),
(5, '2022-09-22', 'Festival '),
(6, '2022-09-23', 'Festival '),
(7, '2022-09-24', 'Festival '),
(8, '2022-09-25', 'Festival '),
(9, '2022-09-26', 'Festival '),
(10, '2022-09-27', 'Festival '),
(11, '2022-09-28', 'Festival '),
(12, '2022-09-29', 'Festival '),
(13, '2022-09-22', 'Festival ');

-- --------------------------------------------------------

--
-- Table structure for table `monthly_horoscope`
--

CREATE TABLE `monthly_horoscope` (
  `id` int(11) NOT NULL,
  `rasi` text DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `month` text DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monthly_horoscope`
--

INSERT INTO `monthly_horoscope` (`id`, `rasi`, `year`, `month`, `description`) VALUES
(1, 'Mesham', 2025, 'February', 'This month will be a successfull month to your family');

-- --------------------------------------------------------

--
-- Table structure for table `months`
--

CREATE TABLE `months` (
  `id` int(11) NOT NULL,
  `month` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `months`
--

INSERT INTO `months` (`id`, `month`) VALUES
(1, 'January'),
(2, 'February'),
(3, 'March'),
(4, 'April'),
(5, 'May'),
(6, 'June'),
(7, 'July'),
(8, 'August'),
(9, 'September'),
(10, 'October'),
(11, 'November'),
(12, 'December');

-- --------------------------------------------------------

--
-- Table structure for table `muhurtham`
--

CREATE TABLE `muhurtham` (
  `id` int(11) NOT NULL,
  `muhurtham` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `muhurtham`
--

INSERT INTO `muhurtham` (`id`, `muhurtham`) VALUES
(1, 'Name Muhurtham'),
(2, 'Vehicle Muhurtham'),
(3, 'Vivaha Muhurtham');

-- --------------------------------------------------------

--
-- Table structure for table `muhurtham_tab`
--

CREATE TABLE `muhurtham_tab` (
  `id` int(11) NOT NULL,
  `muhurtham_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `muhurtham_tab`
--

INSERT INTO `muhurtham_tab` (`id`, `muhurtham_id`, `title`, `description`) VALUES
(1, 3, 'dd', 'ddd'),
(2, 1, 'Rohini Nakshathram', '01:30 - 02:30');

-- --------------------------------------------------------

--
-- Table structure for table `panchangam`
--

CREATE TABLE `panchangam` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `sunrise` text DEFAULT NULL,
  `sunset` text DEFAULT NULL,
  `moonrise` text DEFAULT NULL,
  `moonset` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `panchangam`
--

INSERT INTO `panchangam` (`id`, `date`, `sunrise`, `sunset`, `moonrise`, `moonset`) VALUES
(1, '2022-09-17', '06:07', '06:15', '23:22', '12:09'),
(2, '2022-09-22', '21:36', '21:36', '21:36', '21:36'),
(3, '2022-09-18', '23:54', '23:54', '23:54', '23:54'),
(4, '2022-09-23', '06:08', '18:06', '03:42', '16:48'),
(5, '0000-00-00', 'sunrise', 'sunset', 'moonrise', 'moonset'),
(6, '2022-09-07', '13:25', '14:05', '11:48', '22:50');

-- --------------------------------------------------------

--
-- Table structure for table `panchangam_variant`
--

CREATE TABLE `panchangam_variant` (
  `id` int(11) NOT NULL,
  `panchangam_id` int(11) DEFAULT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `panchangam_variant`
--

INSERT INTO `panchangam_variant` (`id`, `panchangam_id`, `title`, `description`) VALUES
(1, 1, '01-01-2022', 'Diwali ugadi'),
(10, 2, 'cxc', 'xcxcx'),
(19, 1, 'వారము ', '                                                                                                                                                                                                                                                                          శనివారము'),
(20, 1, 'నక్షత్రం', '                              రోహిణి  : సెప్టెంబర్ 16 09:55 AM - సెప్టెంబర్ 17 12:21PM మృగశిర    : సెప్టెంబర్ 17 12:21 PM - సెప్టెంబర్ 18 03:11 PM'),
(21, 1, 'యోగం ', '                                  వజ్రము 05:50 AM'),
(22, 1, 'కరణం ', '                       భధ్ర 01:03 AM, భవ 02:14 PM'),
(23, 1, 'రాహుకాలం ', '                               09:00 AM - 10:30 AM'),
(24, 1, 'యమగండము ', '                               02:00 PM - 03:41 PM'),
(25, 1, 'వర్జ్యం  ', '                               06:37 PM - 08:24 PM'),
(26, 1, 'గుళికా ', '                          ఉ. 10:30 - సా. 2:00, అష్టమి '),
(27, 1, 'దుర్ముహూర్తం  ', '                              07:41 AM - 08:32 AM'),
(28, 3, 'Test', 'Test'),
(29, 4, '23 - భాద్రపద - శుభకృతు - దక్షిణాయనం', 'ప్రదోష వ్రతం - మాఘ స్మారక'),
(30, 4, 'వారపు రోజు', 'శుక్రవారం'),
(31, 4, 'తిథి', 'త్రయోదశి : Sep 23 1:17 am to Sep 24 2:31 am \r\nతుర్దశి : Sep 24 2:31 am to Sep 25 3:12 am'),
(32, 4, 'నక్షత్రం', 'మఖ: Sep 23 2:03 am to Sep 24 3:50 am\r\nపుబ్బ: Sep 24 3:50 am to Sep 25 5:07 am'),
(33, 4, 'యోగం', 'సిద్ధ: Sep 22 9:44 am to Sep 23 9:55 am\r\nసాధ్య: Sep 23 9:55 am to Sep 24 9:42 am'),
(34, 4, 'కరణం', 'గరజ: Sep 23 1:18 am to Sep 23 1:58 pm\r\nవనిజ: Sep 23 1:58 pm to Sep 24 2:31 am\r\nవిష్టి: Sep 24 2:31 am to Sep 24 2:55 pm'),
(35, 4, 'అభిజిత్ ముహుర్తాలు', '11:44 am to 12:32 pm'),
(36, 4, 'అమృతకాలము', '1:16 AM to 2:59 am'),
(37, 4, 'బ్రహ్మ ముహూర్తం', '4:32 am to 5:20 am'),
(38, 4, 'రాహు', '10:38 am to 12:08 pm'),
(39, 4, 'యమగండం', '3:08 pm to 4:38 pm'),
(40, 4, 'గుళికా', '7:38 am to 9:08 am'),
(41, 4, 'దుర్ముహూర్తం', '8:32 am to 9:20 am\r\n12:32 pm to 1:20 pm'),
(42, 4, 'వర్జ్యం', '12:16 pm – 1:57 pm');

-- --------------------------------------------------------

--
-- Table structure for table `poojalu`
--

CREATE TABLE `poojalu` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poojalu`
--

INSERT INTO `poojalu` (`id`, `name`, `image`) VALUES
(1, 'Aaitha poojalu', 'upload/poojalu/1664872627.3071.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `poojalu_submenu`
--

CREATE TABLE `poojalu_submenu` (
  `id` int(11) NOT NULL,
  `poojalu_id` int(11) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poojalu_submenu`
--

INSERT INTO `poojalu_submenu` (`id`, `poojalu_id`, `name`, `image`) VALUES
(1, 1, 'submenu1', 'upload/poojalu_submenu/5899-2022-10-04.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `poojalu_tab`
--

CREATE TABLE `poojalu_tab` (
  `id` int(11) NOT NULL,
  `poojalu_id` int(11) DEFAULT NULL,
  `subcategory_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poojalu_tab`
--

INSERT INTO `poojalu_tab` (`id`, `poojalu_id`, `subcategory_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `poojalu_tab_variant`
--

CREATE TABLE `poojalu_tab_variant` (
  `id` int(11) NOT NULL,
  `poojalu_tab_id` int(11) DEFAULT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poojalu_tab_variant`
--

INSERT INTO `poojalu_tab_variant` (`id`, `poojalu_tab_id`, `title`, `description`) VALUES
(1, 1, 'bnm', 'wde'),
(5, 1, 'kjijw', ' dwnkl');

-- --------------------------------------------------------

--
-- Table structure for table `rasi_names`
--

CREATE TABLE `rasi_names` (
  `id` int(11) NOT NULL,
  `rasi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rasi_names`
--

INSERT INTO `rasi_names` (`id`, `rasi`) VALUES
(1, 'Mesham'),
(2, 'Vrushabham'),
(3, 'Midhunam'),
(4, 'Karkatakam'),
(5, 'Simham'),
(6, 'Kanya'),
(7, 'Thula'),
(8, 'Vruschikam'),
(9, 'Dhanussu'),
(10, 'Makaram'),
(11, 'Kumbham'),
(12, 'Meenam');

-- --------------------------------------------------------

--
-- Table structure for table `yearly_horoscope`
--

CREATE TABLE `yearly_horoscope` (
  `id` int(11) NOT NULL,
  `rasi` text DEFAULT NULL,
  `year` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `yearly_horoscope`
--

INSERT INTO `yearly_horoscope` (`id`, `rasi`, `year`) VALUES
(1, 'Vruschikam', 2024);

-- --------------------------------------------------------

--
-- Table structure for table `yearly_horoscope_variant`
--

CREATE TABLE `yearly_horoscope_variant` (
  `id` int(11) NOT NULL,
  `yearly_horoscope_id` int(11) DEFAULT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `yearly_horoscope_variant`
--

INSERT INTO `yearly_horoscope_variant` (`id`, `yearly_horoscope_id`, `title`, `description`) VALUES
(1, 1, 'test ', 'hello everyone');

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `id` int(11) NOT NULL,
  `year` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`id`, `year`) VALUES
(1, '2021'),
(2, '2022'),
(3, '2023'),
(4, '2024'),
(5, '2025');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daily_horoscope`
--
ALTER TABLE `daily_horoscope`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `festivals`
--
ALTER TABLE `festivals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monthly_horoscope`
--
ALTER TABLE `monthly_horoscope`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `months`
--
ALTER TABLE `months`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `muhurtham`
--
ALTER TABLE `muhurtham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `muhurtham_tab`
--
ALTER TABLE `muhurtham_tab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panchangam`
--
ALTER TABLE `panchangam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panchangam_variant`
--
ALTER TABLE `panchangam_variant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poojalu`
--
ALTER TABLE `poojalu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poojalu_submenu`
--
ALTER TABLE `poojalu_submenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poojalu_tab`
--
ALTER TABLE `poojalu_tab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poojalu_tab_variant`
--
ALTER TABLE `poojalu_tab_variant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rasi_names`
--
ALTER TABLE `rasi_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yearly_horoscope`
--
ALTER TABLE `yearly_horoscope`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yearly_horoscope_variant`
--
ALTER TABLE `yearly_horoscope_variant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daily_horoscope`
--
ALTER TABLE `daily_horoscope`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `festivals`
--
ALTER TABLE `festivals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `monthly_horoscope`
--
ALTER TABLE `monthly_horoscope`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `months`
--
ALTER TABLE `months`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `muhurtham`
--
ALTER TABLE `muhurtham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `muhurtham_tab`
--
ALTER TABLE `muhurtham_tab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `panchangam`
--
ALTER TABLE `panchangam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `panchangam_variant`
--
ALTER TABLE `panchangam_variant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `poojalu`
--
ALTER TABLE `poojalu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `poojalu_submenu`
--
ALTER TABLE `poojalu_submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `poojalu_tab`
--
ALTER TABLE `poojalu_tab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `poojalu_tab_variant`
--
ALTER TABLE `poojalu_tab_variant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rasi_names`
--
ALTER TABLE `rasi_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `yearly_horoscope`
--
ALTER TABLE `yearly_horoscope`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `yearly_horoscope_variant`
--
ALTER TABLE `yearly_horoscope_variant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
