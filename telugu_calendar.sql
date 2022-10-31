-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2022 at 07:18 AM
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
-- Table structure for table `aksharalu`
--

CREATE TABLE `aksharalu` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aksharalu`
--

INSERT INTO `aksharalu` (`id`, `title`, `description`) VALUES
(1, 'Acchu', 'రాశుల పేర్లు ·');

-- --------------------------------------------------------

--
-- Table structure for table `ankelu`
--

CREATE TABLE `ankelu` (
  `id` int(11) NOT NULL,
  `title1` text DEFAULT NULL,
  `title2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ankelu`
--

INSERT INTO `ankelu` (`id`, `title1`, `title2`) VALUES
(1, '2', '౨');

-- --------------------------------------------------------

--
-- Table structure for table `audios`
--

CREATE TABLE `audios` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `lyrics` text DEFAULT NULL,
  `audio` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `balli_sasthram`
--

CREATE TABLE `balli_sasthram` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `subtitle1` text DEFAULT NULL,
  `subdescription1a` text DEFAULT NULL,
  `subdescription1b` text DEFAULT NULL,
  `subtitle2` text DEFAULT NULL,
  `subdescription2a` text DEFAULT NULL,
  `subdescription2b` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `balli_sasthram`
--

INSERT INTO `balli_sasthram` (`id`, `title`, `description`, `subtitle1`, `subdescription1a`, `subdescription1b`, `subtitle2`, `subdescription2a`, `subdescription2b`) VALUES
(1, 'hello', 'wegrtygu', 'zxcvbn', 'sdfyhijo', 'esdtghi', 'ezxrdtygu', 'rdtfyhij', 'rdtfyhij');

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
(1, '2022-09-27', 'Mesham', 'అందమైన సున్నితము కమ్మని సువాసన, ఉన్న కాంతివంతమైన పూవు వలె, మీ ఆశ వికసిస్తుంది. ఈరోజు మీకు, బోలెడు ఆర్థిక పథకాలను ప్రెజెంట్ చేస్తారు. కమిట్ అయేముందుగా వాటి మంచి చెడ్డలను పరిశీలించండి. మీఛార్మింగ్ వ్యక్తిత్వం, ప్రవర్తన మీకు క్రొత్త స్నేహితులను పొందడానికి, సహాయ పడతాయి. మీరు కరెక్టే అనిచెప్పుకోడానికి మీజీవితభాగస్వామితో గొడవ పడతారు.అయినప్పటికీ మీ భాగస్వామి మిమ్ములను అర్ధంచేసుకుని మిమ్ములను సముదయిస్తారు. పెండింగ్ లో ఉన్న ప్రాజెక్ట్ లు, పథకాలు కదిలి ఫైనల్ షేప్ కి వస్తాయి. క్రొత్త ఆలోచనలను పరీక్షించడానికి సరియైన సమయం. మీరు ఈ రోజు మీ జీవిత భాగస్వామితో కలిసి మరోసారి ప్రేమలో పడనున్నారు. ఎందుకంటే ఆమె/అతను అందుకు పూర్తిగా అర్హులు.\r\n\r\n', 7, 'లేత తెలుపు మరియు తెలుపు', 'బలమైన ఆర్థిక పరిస్థితులకు సూర్య చలిసాని చదవండి మరియు సూర్య భగవానుడికి సంబంధించిన పాటలు పాడండి.', '★★★★★', '★★★★★', '★★★★★', '★★★★★', '★★★★★', '★★★★★'),
(2, '2022-09-28', 'Mesham', 'మీరు యోగాతో,ధ్యానంతో రోజుని ప్రారంభించండి.ఇది మీకు చాలా అనుకూలిస్తుంది మరియు మీయొక్క శక్తిని రోజంతా ఉండేలా చేస్తుంది. ఇతరులకి వారి ఆర్ధికవసరాలకు అప్పు ఎవ్వరు ఇవ్వకపోయినప్పటికీ మీరు వారిఅవసరాలకు ధనాన్ని అప్పుగా ఇస్తారు. ఇతరులను మురిపించే మీ గుణం మెప్పును పొందే మీ సామర్థ్యం రివార్డ్ లను తెస్తుంది. బహుకాలంగా మిమ్మల్ని వేధిస్తున్న ఒంటరితనం మీ ఆత్మీయులు దొరకడంతో ముగింపుకి వస్తుంది. ఈరోజు మీ కళాదృష్టి, సృజనాత్మకత ఎంతో మెప్పును పొందుతుంది, ఎదురుచూడనన్ని రివార్డులను తెస్తుంది. ఈరాశికి చెందిన పిల్లలు రోజుమొత్తము ఆటలుఆడటానికి మక్కువ చూపుతారు.తల్లితండ్రులు వారిపట్ల జాగురూపకతతో వ్యవహరించాలి,లేనిచో వారికి దెబ్బలుతగిలే ప్రమాదం ఉన్నది. మీకో విషయం తెలుసా? మీ భాగస్వామి నిజమైన ఏంజెల్! నమ్మరా? కాస్త గమనించండి. ఈ రోజు మీకు ఈ వాస్తవం తెలిసిరావడం ఖాయం.\r\n\r\n', 1, '2', 'ఆర్ధిక విజయానికి మీ నుదుటి మీద తెలుపు గంధాన్ని వర్తించండి', '★★★★★', '★★★★★', '★★★★★', '★★★★★', '★★★★★', '★★★★★');

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `id` int(11) NOT NULL,
  `day` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`id`, `day`) VALUES
(1, 'Sunday'),
(2, 'Monday'),
(3, 'Tuesday'),
(4, 'Wednesday'),
(5, 'Thursday'),
(6, 'Friday'),
(7, 'Saturday');

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
(12, '2022-09-29', 'Festival ');

-- --------------------------------------------------------

--
-- Table structure for table `fruits`
--

CREATE TABLE `fruits` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fruits`
--

INSERT INTO `fruits` (`id`, `title`, `description`) VALUES
(1, '	ఆపిల్', 'Every NIGHT eat one apple before sleep');

-- --------------------------------------------------------

--
-- Table structure for table `gowri`
--

CREATE TABLE `gowri` (
  `id` int(11) NOT NULL,
  `year` text DEFAULT NULL,
  `day` text DEFAULT NULL,
  `time` text DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gowri`
--

INSERT INTO `gowri` (`id`, `year`, `day`, `time`, `description`) VALUES
(1, '2023', 'Tuesday', '10:30-12:00', 'This is your test');

-- --------------------------------------------------------

--
-- Table structure for table `gowri_timeslots`
--

CREATE TABLE `gowri_timeslots` (
  `id` int(11) NOT NULL,
  `time` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gowri_timeslots`
--

INSERT INTO `gowri_timeslots` (`id`, `time`) VALUES
(1, '06:00-07:30'),
(2, '07:30-09:00'),
(3, '09:00-10:30'),
(4, '10:30-12:00'),
(5, '12:00-01:30'),
(6, '01:30-03:00'),
(7, '03:00-04:30'),
(8, '04:30-06:00');

-- --------------------------------------------------------

--
-- Table structure for table `grahalu`
--

CREATE TABLE `grahalu` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grahalu`
--

INSERT INTO `grahalu` (`id`, `name`, `image`) VALUES
(1, 'graha', 'upload/grahalu/7838-2022-10-06.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `grahalu_submenu`
--

CREATE TABLE `grahalu_submenu` (
  `id` int(11) NOT NULL,
  `grahalu_id` int(11) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grahalu_submenu`
--

INSERT INTO `grahalu_submenu` (`id`, `grahalu_id`, `name`, `image`) VALUES
(1, 1, 'home graha', 'upload/grahalu_submenu/1665054820.3623.jpg'),
(2, 1, 'marriage graha', 'upload/grahalu_submenu/4550-2022-10-06.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `grahalu_tab`
--

CREATE TABLE `grahalu_tab` (
  `id` int(11) NOT NULL,
  `grahalu_id` int(11) DEFAULT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grahalu_tab`
--

INSERT INTO `grahalu_tab` (`id`, `grahalu_id`, `subcategory_id`, `title`, `description`) VALUES
(1, 1, 2, 'marriage main', 'everyone wants get maariies');

-- --------------------------------------------------------

--
-- Table structure for table `grahalu_tab_variant`
--

CREATE TABLE `grahalu_tab_variant` (
  `id` int(11) NOT NULL,
  `grahalu_tab_id` int(11) DEFAULT NULL,
  `sub_title` text DEFAULT NULL,
  `sub_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grahalu_tab_variant`
--

INSERT INTO `grahalu_tab_variant` (`id`, `grahalu_tab_id`, `sub_title`, `sub_description`) VALUES
(1, 1, 'manns', 'jnkscshcwj');

-- --------------------------------------------------------

--
-- Table structure for table `guninthalu`
--

CREATE TABLE `guninthalu` (
  `id` int(11) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guninthalu`
--

INSERT INTO `guninthalu` (`id`, `description`) VALUES
(1, 'Vowels — Acchulu — అచ్చులు\r\n\r\na — అ — as in come\r\n\r\naa/â — ఆ — as in far\r\n\r\ni- ఇ — as in bit\r\n\r\nee/î — ఈ — as in feel\r\n\r\nu — ఉ — as in could\r\n\r\nuu/û — ఊ — as i ncool\r\n\r\nru — ఋ — as i nrupee\r\n\r\nroo/rû — ఋూ — as in root\r\n\r\ne — ఎ — as i nget\r\n\r\nê/ye — ఏ — as in stake\r\n\r\nai/ay — ఐ — as in might\r\n\r\no — ఒ — as in rotate\r\n\r\noo — ఓ — as in oat\r\n\r\nAu — ఔ — as in out\r\n\r\nAum — అం\r\n\r\nAhaa — అః');

-- --------------------------------------------------------

--
-- Table structure for table `hora_chakram`
--

CREATE TABLE `hora_chakram` (
  `id` int(11) NOT NULL,
  `year` text DEFAULT NULL,
  `day` text DEFAULT NULL,
  `time` text DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hora_chakram`
--

INSERT INTO `hora_chakram` (`id`, `year`, `day`, `time`, `description`) VALUES
(1, '2024', 'Thursday', '12:00-01:30', 'This is hora chjakram'),
(2, '2023', 'Thursday', '10:30-12:00', 'dsdsdsdsds');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_category_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_category_id`, `name`, `image`, `status`) VALUES
(1, 5, 'test', 'upload/images/5730-2022-10-15.jpg', 0),
(2, 13, 'Teslaa', 'upload/images/1665837306.6472.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `image_category`
--

CREATE TABLE `image_category` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(11) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT NULL,
  `date_created` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image_category`
--

INSERT INTO `image_category` (`id`, `name`, `image`, `status`, `last_updated`, `date_created`) VALUES
(13, 'sivan', 'upload/images/4904-2022-10-17.jpeg', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kaki_sasthram`
--

CREATE TABLE `kaki_sasthram` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kaki_sasthram`
--

INSERT INTO `kaki_sasthram` (`id`, `title`, `description`) VALUES
(1, 'Hello Teluhguiisi', 'Today you will face lot of issues');

-- --------------------------------------------------------

--
-- Table structure for table `kalalu`
--

CREATE TABLE `kalalu` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kalalu`
--

INSERT INTO `kalalu` (`id`, `title`, `description`) VALUES
(1, 'Hi guys', 'this is the sample text');

-- --------------------------------------------------------

--
-- Table structure for table `karanam`
--

CREATE TABLE `karanam` (
  `id` int(11) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karanam`
--

INSERT INTO `karanam` (`id`, `description`) VALUES
(4, 'sddsdsfdfdfd');

-- --------------------------------------------------------

--
-- Table structure for table `kolathalu`
--

CREATE TABLE `kolathalu` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `subtitle1` text DEFAULT NULL,
  `subdescription1` text DEFAULT NULL,
  `subtitle2` text DEFAULT NULL,
  `subdescription2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kolathalu`
--

INSERT INTO `kolathalu` (`id`, `title`, `subtitle1`, `subdescription1`, `subtitle2`, `subdescription2`) VALUES
(1, 'Hi Everyone', 'This is sample', 'It is all about your own Interest', 'This is the test title', 'That is our Power of passion');

-- --------------------------------------------------------

--
-- Table structure for table `kukutasasthram_menu`
--

CREATE TABLE `kukutasasthram_menu` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `star` text DEFAULT NULL,
  `winning` text DEFAULT NULL,
  `lossing` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kukutasasthram_menu`
--

INSERT INTO `kukutasasthram_menu` (`id`, `title`, `description`, `star`, `winning`, `lossing`) VALUES
(1, 'hello everyone', 'this is about your kukuta sasthram menu', 'five star', 'you can win', 'you can loss');

-- --------------------------------------------------------

--
-- Table structure for table `kukuta_sasthram`
--

CREATE TABLE `kukuta_sasthram` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kukuta_sasthram`
--

INSERT INTO `kukuta_sasthram` (`id`, `title`, `description`) VALUES
(1, 'hello', 'Kukkuta Sastra (also called Cock Astrology) is a form of divination based on cock fighting, commonly believed in coastal districts of Andhra Pradesh, India.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `lagnam`
--

CREATE TABLE `lagnam` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lagnam`
--

INSERT INTO `lagnam` (`id`, `title`, `description`) VALUES
(1, 'Lagnam', 'This is all about Lagnam Description');

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
(1, 'Mesham', 2022, 'September', 'స్థానికులు సహజంగా జన్మించిన నాయకులు, మరియు ఈ నెల వారి నాయకత్వ నాణ్యతను పెంపొందించడం ద్వారా వారి కెరీర్‌లో విజయాన్ని అందిస్తుంది. ఒక వైపు, పని చేసే ఉద్యోగులు మిశ్రమ ఫలితాలను పొందుతారు, మరోవైపు, మేషం వ్యాపారులు తమ వ్యాపారాన్ని విస్తరించడం ద్వారా లాభాలను పొందుతారు. మేషరాశి వ్యాపారులు విదేశీ కంపెనీల నుండి కూడా లాభపడవచ్చు.ఐదవ ఇంట్లో సూర్యుడు మరియు శుక్రుడు కలయిక ఈ నెలలో మేషరాశి విద్యార్థులకు అనుకూలమైన ఫలితాలను ఇస్తుంది.నెల మొదటి అర్ధ భాగంలో పరీక్షలలో బాగా రాణిస్తారు. మీరు మీ ఉపాధ్యాయుల మద్దతును పొందుతారు మరియు మీ అన్ని ప్రాజెక్ట్‌లు మరియు సిలబస్‌లను సమయానికి పూర్తి చేస్తారు.ప్రేమికులకు ఈ మాసం బాగానే ఉంటుంది. ఐదవ ఇంట్లో సూర్యుడితో శుక్రుడు ఉండటం వల్ల సంబంధంలో ప్రేమ పెరుగుతుంది, కానీ సూర్యుడు మీ స్వభావాన్ని చేదుగా మారుస్తాడు, దీని కారణంగా మీ ప్రియమైనవారితో విభేదాలు తలెత్తవచ్చు. వివాహిత స్థానికులకు, కేతువు ఉనికిని మీ జీవిత భాగస్వామితో వాగ్వాదానికి గురి చేస్తుంది. ఈ సమయంలో మీరు మీ కోపాన్ని అదుపులో ఉంచుకోవడానికి ప్రయత్నించాలి మరియు మీ జీవిత భాగస్వామి కోసం కొంత సమయాన్ని వెచ్చించండి.కుటుంబ జీవితం పరంగా మేష రాశి వారికి సెప్టెంబర్ మంచి నెలగా ఉంటుంది.కుటుంబ సభ్యులతో మీ పూర్వపు విభేదాలన్నింటినీ ముగించడానికి మరియు వారితో మీ సంబంధాన్ని బలోపేతం చేయడానికి ఇది ఒక సమయం.మీరు విహారయాత్రకు వెళ్లడం ద్వారా మీ కుటుంబంతో సమయాన్ని గడపాలని కూడా ప్లాన్ చేయవచ్చు.మేష రాశి వారు ఈ నెలలో ఆర్థిక పరంగా కూడా అదృష్టవంతులు. మీ రెండవ ఇంట్లో అంగారకుడు ఉండటం వల్ల, మీరు ఎక్కడి నుండైనా అకస్మాత్తుగా డబ్బు అందుకోవచ్చు. మీ డబ్బు ఎక్కడైనా నిలిచిపోయి ఉంటే, మీరు ఈ నెలలో దాన్ని తిరిగి పొందుతారు. అయితే, ఆరోగ్యం యొక్క దృక్కోణం నుండి ఈ నెల తక్కువ అనుకూలంగా ఉంటుంది. వివిధ గ్రహాల యొక్క అశుభ స్థానం మీరు గాయపడగల పరిస్థితిని సూచిస్తుంది. దీనితో పాటు, మారుతున్న వాతావరణంతో మీ ఆరోగ్యం క్షీణించవచ్చు. కాబట్టి వీలైనంత వరకు మీ ఆహారపు అలవాట్లను జాగ్రత్తగా చూసుకోండి.');

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
(1, 1, 'dd', 'ddd'),
(2, 1, 'Rohini Nakshathram', '01:30 - 02:30');

-- --------------------------------------------------------

--
-- Table structure for table `nakshatralu`
--

CREATE TABLE `nakshatralu` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nakshatralu`
--

INSERT INTO `nakshatralu` (`id`, `name`, `image`) VALUES
(1, 'kadaga nakshahra', 'upload/nakshatralu/1665395736.211.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `nakshatralu_tab`
--

CREATE TABLE `nakshatralu_tab` (
  `id` int(11) NOT NULL,
  `nakshatralu_id` int(11) DEFAULT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nakshatralu_tab`
--

INSERT INTO `nakshatralu_tab` (`id`, `nakshatralu_id`, `title`, `description`) VALUES
(1, 1, 'hello', 'this is main of nakshatralu');

-- --------------------------------------------------------

--
-- Table structure for table `nakshatralu_tab_variant`
--

CREATE TABLE `nakshatralu_tab_variant` (
  `id` int(11) NOT NULL,
  `nakshatralu_tab_id` int(11) DEFAULT NULL,
  `sub_title` text DEFAULT NULL,
  `sub_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nakshatralu_tab_variant`
--

INSERT INTO `nakshatralu_tab_variant` (`id`, `nakshatralu_tab_id`, `sub_title`, `sub_description`) VALUES
(1, 1, 'welcome', 'this is bchfhh'),
(3, 1, 'hixhx', 'x wjx');

-- --------------------------------------------------------

--
-- Table structure for table `navagrahalu`
--

CREATE TABLE `navagrahalu` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `navagrahalu`
--

INSERT INTO `navagrahalu` (`id`, `title`, `description`) VALUES
(1, 'Hello', 'This is navagrahalu');

-- --------------------------------------------------------

--
-- Table structure for table `pakshamulu`
--

CREATE TABLE `pakshamulu` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pakshamulu`
--

INSERT INTO `pakshamulu` (`id`, `title`, `description`, `image`) VALUES
(1, 'Telugu Pakshamulu', 'Hi everyone this is the sample description', 'upload/pakshamulu/0602-2022-10-29.jpg');

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
-- Table structure for table `pilli_sasthram`
--

CREATE TABLE `pilli_sasthram` (
  `id` int(11) NOT NULL,
  `title` varchar(225) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pilli_sasthram`
--

INSERT INTO `pilli_sasthram` (`id`, `title`, `description`) VALUES
(1, 'Hello Pillis', 'you can remove a lot ');

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
(1, 'Aaitha poojalu', 'upload/poojalu/1664872627.3071.jpg'),
(2, 'Diwali', 'upload/poojalu/1023-2022-10-06.jpg');

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
(1, 1, 'submenu1', 'upload/poojalu_submenu/5899-2022-10-04.jpg'),
(2, 2, 'submenu 2', 'upload/poojalu_submenu/9876-2022-10-06.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `poojalu_tab`
--

CREATE TABLE `poojalu_tab` (
  `id` int(11) NOT NULL,
  `poojalu_id` int(11) DEFAULT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poojalu_tab`
--

INSERT INTO `poojalu_tab` (`id`, `poojalu_id`, `subcategory_id`, `title`, `description`) VALUES
(1, 1, 1, 'hello main', 'this is the main description');

-- --------------------------------------------------------

--
-- Table structure for table `poojalu_tab_variant`
--

CREATE TABLE `poojalu_tab_variant` (
  `id` int(11) NOT NULL,
  `poojalu_tab_id` int(11) DEFAULT NULL,
  `sub_title` text DEFAULT NULL,
  `sub_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poojalu_tab_variant`
--

INSERT INTO `poojalu_tab_variant` (`id`, `poojalu_tab_id`, `sub_title`, `sub_description`) VALUES
(1, 1, 'wishes', 'happy gettdvxsc');

-- --------------------------------------------------------

--
-- Table structure for table `prasadhams`
--

CREATE TABLE `prasadhams` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prasadhams`
--

INSERT INTO `prasadhams` (`id`, `title`, `description`) VALUES
(1, 'Laddu', 'This is made from Tirupati');

-- --------------------------------------------------------

--
-- Table structure for table `pushpalu`
--

CREATE TABLE `pushpalu` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pushpalu`
--

INSERT INTO `pushpalu` (`id`, `title`, `description`) VALUES
(1, 'Hi Bot ', 'This is the fullfilled by the pushpalu');

-- --------------------------------------------------------

--
-- Table structure for table `rahukalams`
--

CREATE TABLE `rahukalams` (
  `id` int(11) NOT NULL,
  `year` text DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL,
  `rahukalam` text DEFAULT NULL,
  `yamangandam` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rahukalams`
--

INSERT INTO `rahukalams` (`id`, `year`, `day`, `rahukalam`, `yamangandam`) VALUES
(1, '2021', NULL, 'Rahukalam', 'you have at 8.00 pm '),
(2, '2022', 'Sunday', 'sdsds', 'sdsds');

-- --------------------------------------------------------

--
-- Table structure for table `rashulu`
--

CREATE TABLE `rashulu` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rashulu`
--

INSERT INTO `rashulu` (`id`, `title`, `description`) VALUES
(1, 'Midhunam మిధునం', 'Rashi | Nakshatra​​ Each Rashi is associated with a sign');

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
-- Table structure for table `ruthuvulu`
--

CREATE TABLE `ruthuvulu` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ruthuvulu`
--

INSERT INTO `ruthuvulu` (`id`, `title`, `description`) VALUES
(1, 'Ruthuvulu', 'this is the about ruthuvulu description');

-- --------------------------------------------------------

--
-- Table structure for table `sakunalu`
--

CREATE TABLE `sakunalu` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `telugu_months`
--

CREATE TABLE `telugu_months` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `telugu_months`
--

INSERT INTO `telugu_months` (`id`, `title`, `description`) VALUES
(1, 'hello', 'this is telugu month');

-- --------------------------------------------------------

--
-- Table structure for table `telugu_weeks`
--

CREATE TABLE `telugu_weeks` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `telugu_weeks`
--

INSERT INTO `telugu_weeks` (`id`, `title`, `description`) VALUES
(1, 'Hello Calendar', 'Every weelkend the week will update');

-- --------------------------------------------------------

--
-- Table structure for table `telugu_years`
--

CREATE TABLE `telugu_years` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `telugu_years`
--

INSERT INTO `telugu_years` (`id`, `title`, `description`) VALUES
(1, 'Prabhava Nama year', '1901,1910,2010,2100');

-- --------------------------------------------------------

--
-- Table structure for table `thidhi`
--

CREATE TABLE `thidhi` (
  `id` int(11) NOT NULL,
  `year` text DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thidhi`
--

INSERT INTO `thidhi` (`id`, `year`, `month`) VALUES
(1, '2021', NULL),
(2, '2023', 'Saturday'),
(3, '2022', 'May');

-- --------------------------------------------------------

--
-- Table structure for table `thidhi_addhi`
--

CREATE TABLE `thidhi_addhi` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thidhi_addhi`
--

INSERT INTO `thidhi_addhi` (`id`, `title`, `description`) VALUES
(1, 'ರಾಶಿಗಳು', 'Good morning this is yours');

-- --------------------------------------------------------

--
-- Table structure for table `thidhi_variant`
--

CREATE TABLE `thidhi_variant` (
  `id` int(11) NOT NULL,
  `thidhi_id` int(11) DEFAULT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thidhi_variant`
--

INSERT INTO `thidhi_variant` (`id`, `thidhi_id`, `title`, `description`) VALUES
(1, 1, 'Good morning', 'this is variant1'),
(2, 1, 'Wishhes', 'variant2'),
(3, 2, 'dsds', 'sdsd'),
(4, 2, 'sds', 'dsds'),
(5, 3, 'sdsd', 'sdsdsd');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `link` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `title`, `link`) VALUES
(1, 'nakshatram', 'https://youtu.be/MrzkoLKpgLU');

-- --------------------------------------------------------

--
-- Table structure for table `video_category`
--

CREATE TABLE `video_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video_category`
--

INSERT INTO `video_category` (`id`, `name`, `image`, `status`) VALUES
(1, 'Sivan', 'upload/video-category/7531-2022-10-17.jpeg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `video_post`
--

CREATE TABLE `video_post` (
  `id` int(11) NOT NULL,
  `video_category_id` int(11) NOT NULL,
  `video` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video_post`
--

INSERT INTO `video_post` (`id`, `video_category_id`, `video`) VALUES
(1, 1, 'upload/videos/1665986597.9193.mp4'),
(2, 1, 'upload/videos/-2022-10-16.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `vruthulu`
--

CREATE TABLE `vruthulu` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vruthulu`
--

INSERT INTO `vruthulu` (`id`, `title`, `description`) VALUES
(1, 'Hello', 'This is test');

-- --------------------------------------------------------

--
-- Table structure for table `weekly_horoscope`
--

CREATE TABLE `weekly_horoscope` (
  `id` int(11) NOT NULL,
  `rasi` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `week` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weekly_horoscope`
--

INSERT INTO `weekly_horoscope` (`id`, `rasi`, `year`, `month`, `week`, `description`) VALUES
(1, 'Mesham', '2022', 'September', 'Sep-26,2022_to_Oct-02,2022', 'జీవితానికి నిజమైన మూలధనం ఒత్తిడిని దాటవేయడం మరియు చుట్టుపక్కల వ్యక్తులతో జీవితాన్ని ఆస్వాదించడం అని ఈ వారం మీరు అర్థం చేసుకుంటారు. మీరు ఈ వారం మీ జీవితంలో ఈ విషయాన్ని స్వీకరిస్తారు. దీని కారణంగా ఇంట్లో మరియు మీ కార్యాలయంలో మెరుగైన వాతావరణం మరియు ఆరోగ్యాన్ని పొందడం కోసం మీ మనస్సును రిలాక్స్‌గా ఉంచడానికి మీరు చాలా జోకులు వేస్తారు. ఈ వారం, ఆరవ ఇంట్లో చంద్రుని స్థానం మీరు ఇతరుల అడుగుజాడలను అనుసరించి ఏదైనా పెట్టుబడి పెడితే, ఆర్థిక నష్టం దాదాపు ఖాయమని వివరిస్తుంది. అందువల్ల, మీ డబ్బును ఇతరుల ఆజ్ఞపై ఎక్కడా ఉంచకుండా మరియు తెలివిగా వ్యవహరించండి. ఇంటి సభ్యుల సలహా ఈ వారం అదనపు డబ్బు సంపాదించడంలో మీకు సహాయపడే అవకాశాలు ఉన్నాయి, ఇది మీ మనస్సును ఆహ్లాదపరుస్తుంది. అలాగే, మీరు మీ కుటుంబ సభ్యుల కోసం బహిరంగంగా ఖర్చు చేయడం మరియు వారి కోసం బహుమతులు కొనుగోలు చేయడం కనిపిస్తుంది.ఉన్నందున ఈ వారంలో మీ శ్రమ మీకు ఫలిస్తుంది కాబట్టి మీ ఆదాయంలో ఇంక్రిమెంట్లు పొందే బలమైన అవకాశాలు ఉన్నాయి శని 11వ ఇంట్లో ఇది మీకు అర్హమైన అన్ని క్రెడిట్‌లను పొందడానికి మీకు సహాయం చేస్తుంది. అయితే, మీరు ఏ పనిని అసంపూర్తిగా ఉంచవద్దని సూచించారు, లేకపోతే మీరు సమస్యలను ఎదుర్కోవచ్చు. ఈ వారం, విద్యార్థులు తమ అధ్యాయాలను లేదా ఏదైనా పాఠాన్ని సవరించే పనిని రేపటికి వాయిదా వేయడం ఎవరికీ ఫలించదని బాగా అర్థం చేసుకోవాలి. ఎందుకంటే ఇలా చేస్తున్నప్పుడు, వారం చివరి నాటికి అనేక పనులు పేరుకుపోతాయి, ఇది అదనపు బాధ్యతగా ఉపయోగపడుతుంది. కాబట్టి మీరు కూడా ఆలస్యం చేయకుండా మీ ఉపాధ్యాయుల సహాయంతో వాటిని సవరించడం ప్రారంభించండి.\r\nపరిహారము: బహిరంగ ప్రదేశాలలో లేదా దేవాలయంలో మొక్కలు నాటండి');

-- --------------------------------------------------------

--
-- Table structure for table `yearly_horoscope`
--

CREATE TABLE `yearly_horoscope` (
  `id` int(11) NOT NULL,
  `rasi` text DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `yearly_horoscope`
--

INSERT INTO `yearly_horoscope` (`id`, `rasi`, `year`, `title`, `description`) VALUES
(1, 'Midhunam', 2023, 'hello', 'this is main');

-- --------------------------------------------------------

--
-- Table structure for table `yearly_horoscope_variant`
--

CREATE TABLE `yearly_horoscope_variant` (
  `id` int(11) NOT NULL,
  `yearly_horoscope_id` int(11) DEFAULT NULL,
  `sub_title` text DEFAULT NULL,
  `sub_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `yearly_horoscope_variant`
--

INSERT INTO `yearly_horoscope_variant` (`id`, `yearly_horoscope_id`, `sub_title`, `sub_description`) VALUES
(1, 1, 'wish', 'happy launching fay');

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

-- --------------------------------------------------------

--
-- Table structure for table `yogam`
--

CREATE TABLE `yogam` (
  `id` int(11) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `yogam`
--

INSERT INTO `yogam` (`id`, `description`) VALUES
(2, 'yyyy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aksharalu`
--
ALTER TABLE `aksharalu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ankelu`
--
ALTER TABLE `ankelu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audios`
--
ALTER TABLE `audios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `balli_sasthram`
--
ALTER TABLE `balli_sasthram`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daily_horoscope`
--
ALTER TABLE `daily_horoscope`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `festivals`
--
ALTER TABLE `festivals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fruits`
--
ALTER TABLE `fruits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gowri`
--
ALTER TABLE `gowri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gowri_timeslots`
--
ALTER TABLE `gowri_timeslots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grahalu`
--
ALTER TABLE `grahalu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grahalu_submenu`
--
ALTER TABLE `grahalu_submenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grahalu_tab`
--
ALTER TABLE `grahalu_tab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grahalu_tab_variant`
--
ALTER TABLE `grahalu_tab_variant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guninthalu`
--
ALTER TABLE `guninthalu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hora_chakram`
--
ALTER TABLE `hora_chakram`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_category`
--
ALTER TABLE `image_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kaki_sasthram`
--
ALTER TABLE `kaki_sasthram`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kalalu`
--
ALTER TABLE `kalalu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karanam`
--
ALTER TABLE `karanam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kolathalu`
--
ALTER TABLE `kolathalu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kukutasasthram_menu`
--
ALTER TABLE `kukutasasthram_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kukuta_sasthram`
--
ALTER TABLE `kukuta_sasthram`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lagnam`
--
ALTER TABLE `lagnam`
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
-- Indexes for table `nakshatralu`
--
ALTER TABLE `nakshatralu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nakshatralu_tab`
--
ALTER TABLE `nakshatralu_tab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nakshatralu_tab_variant`
--
ALTER TABLE `nakshatralu_tab_variant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navagrahalu`
--
ALTER TABLE `navagrahalu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakshamulu`
--
ALTER TABLE `pakshamulu`
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
-- Indexes for table `pilli_sasthram`
--
ALTER TABLE `pilli_sasthram`
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
-- Indexes for table `prasadhams`
--
ALTER TABLE `prasadhams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pushpalu`
--
ALTER TABLE `pushpalu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rahukalams`
--
ALTER TABLE `rahukalams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rashulu`
--
ALTER TABLE `rashulu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rasi_names`
--
ALTER TABLE `rasi_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruthuvulu`
--
ALTER TABLE `ruthuvulu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sakunalu`
--
ALTER TABLE `sakunalu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telugu_months`
--
ALTER TABLE `telugu_months`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telugu_weeks`
--
ALTER TABLE `telugu_weeks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telugu_years`
--
ALTER TABLE `telugu_years`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thidhi`
--
ALTER TABLE `thidhi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thidhi_addhi`
--
ALTER TABLE `thidhi_addhi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thidhi_variant`
--
ALTER TABLE `thidhi_variant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_category`
--
ALTER TABLE `video_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_post`
--
ALTER TABLE `video_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vruthulu`
--
ALTER TABLE `vruthulu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weekly_horoscope`
--
ALTER TABLE `weekly_horoscope`
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
-- Indexes for table `yogam`
--
ALTER TABLE `yogam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aksharalu`
--
ALTER TABLE `aksharalu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ankelu`
--
ALTER TABLE `ankelu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `audios`
--
ALTER TABLE `audios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `balli_sasthram`
--
ALTER TABLE `balli_sasthram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `daily_horoscope`
--
ALTER TABLE `daily_horoscope`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `festivals`
--
ALTER TABLE `festivals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `fruits`
--
ALTER TABLE `fruits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gowri`
--
ALTER TABLE `gowri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gowri_timeslots`
--
ALTER TABLE `gowri_timeslots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `grahalu`
--
ALTER TABLE `grahalu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grahalu_submenu`
--
ALTER TABLE `grahalu_submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `grahalu_tab`
--
ALTER TABLE `grahalu_tab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grahalu_tab_variant`
--
ALTER TABLE `grahalu_tab_variant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `guninthalu`
--
ALTER TABLE `guninthalu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hora_chakram`
--
ALTER TABLE `hora_chakram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `image_category`
--
ALTER TABLE `image_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kaki_sasthram`
--
ALTER TABLE `kaki_sasthram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kalalu`
--
ALTER TABLE `kalalu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `karanam`
--
ALTER TABLE `karanam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kolathalu`
--
ALTER TABLE `kolathalu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kukutasasthram_menu`
--
ALTER TABLE `kukutasasthram_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kukuta_sasthram`
--
ALTER TABLE `kukuta_sasthram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lagnam`
--
ALTER TABLE `lagnam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `nakshatralu`
--
ALTER TABLE `nakshatralu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nakshatralu_tab`
--
ALTER TABLE `nakshatralu_tab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nakshatralu_tab_variant`
--
ALTER TABLE `nakshatralu_tab_variant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `navagrahalu`
--
ALTER TABLE `navagrahalu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pakshamulu`
--
ALTER TABLE `pakshamulu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `panchangam`
--
ALTER TABLE `panchangam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `panchangam_variant`
--
ALTER TABLE `panchangam_variant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `pilli_sasthram`
--
ALTER TABLE `pilli_sasthram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `poojalu`
--
ALTER TABLE `poojalu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `poojalu_submenu`
--
ALTER TABLE `poojalu_submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `poojalu_tab`
--
ALTER TABLE `poojalu_tab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `poojalu_tab_variant`
--
ALTER TABLE `poojalu_tab_variant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prasadhams`
--
ALTER TABLE `prasadhams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pushpalu`
--
ALTER TABLE `pushpalu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rahukalams`
--
ALTER TABLE `rahukalams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rashulu`
--
ALTER TABLE `rashulu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rasi_names`
--
ALTER TABLE `rasi_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ruthuvulu`
--
ALTER TABLE `ruthuvulu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sakunalu`
--
ALTER TABLE `sakunalu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `telugu_months`
--
ALTER TABLE `telugu_months`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `telugu_weeks`
--
ALTER TABLE `telugu_weeks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `telugu_years`
--
ALTER TABLE `telugu_years`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `thidhi`
--
ALTER TABLE `thidhi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `thidhi_addhi`
--
ALTER TABLE `thidhi_addhi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `thidhi_variant`
--
ALTER TABLE `thidhi_variant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video_category`
--
ALTER TABLE `video_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video_post`
--
ALTER TABLE `video_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vruthulu`
--
ALTER TABLE `vruthulu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `weekly_horoscope`
--
ALTER TABLE `weekly_horoscope`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `yearly_horoscope`
--
ALTER TABLE `yearly_horoscope`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `yearly_horoscope_variant`
--
ALTER TABLE `yearly_horoscope_variant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `yogam`
--
ALTER TABLE `yogam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
