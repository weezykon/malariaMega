-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2019 at 10:51 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rifugio`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `ra_id` int(11) NOT NULL,
  `ra_name` varchar(100) NOT NULL,
  `ra_email` varchar(100) NOT NULL,
  `ra_phone` varchar(100) NOT NULL,
  `ra_resume` varchar(200) NOT NULL,
  `ra_job` varchar(30) NOT NULL,
  `ra_rand` varchar(30) NOT NULL,
  `ra_visible` tinyint(4) NOT NULL DEFAULT '1',
  `ra_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`ra_id`, `ra_name`, `ra_email`, `ra_phone`, `ra_resume`, `ra_job`, `ra_rand`, `ra_visible`, `ra_date`) VALUES
(2, 'Akinbode Akinlolu', 'weezykon@gmail.com', '08141160412', 'uploads/f5097008082f28496d20207d03dc0cbb.pdf', '1bd846a276', '8249a02b96', 1, '1555457484');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `b_id` int(11) NOT NULL,
  `b_name` varchar(100) NOT NULL,
  `b_rand` varchar(30) NOT NULL,
  `b_visible` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`b_id`, `b_name`, `b_rand`, `b_visible`) VALUES
(1, 'Samsung', '7i13ef112', 1),
(2, 'Tecno', '2ea397c4b6', 0);

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `rc_id` int(11) NOT NULL,
  `rc_title` varchar(200) NOT NULL,
  `rc_text` text NOT NULL,
  `rc_location` varchar(30) NOT NULL,
  `rc_rand` varchar(30) NOT NULL,
  `rc_visible` tinyint(4) NOT NULL DEFAULT '1',
  `rc_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`rc_id`, `rc_title`, `rc_text`, `rc_location`, `rc_rand`, `rc_visible`, `rc_date`) VALUES
(1, 'Test', '<p>hhgfddyhffdvbfd</p>', '', '4cb9a0f7fa', 0, ''),
(2, 'Female Fashion Designer', '<h3 class=\"font-size-18 margin-top--0 margin-bottom--15\" style=\"color: rgb(78, 85, 89); font-weight: 400; margin-bottom: 15px; font-family: Roboto, sans-serif; font-size: 1.125rem !important; margin-top: 0px !important;\">Job Description</h3><div class=\"job__details__user-edit\" style=\"position: relative; display: inline-block; float: left; width: 800px; color: rgb(78, 85, 89); font-family: Roboto, sans-serif; font-size: 16px;\"><p style=\"word-break: normal; margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">Trooworths Nigeria Limited was established in July 2010. RC.902313. our vision for products of uncompromising quality provided the starting point from which genuine personal connections were made. We started as a family business in the year 2010, since July 2010 we have grown from a small business of two people selling three high-quality products sourced directly from the original Manufacturers;&nbsp; to a team of 10 competent and dedicated personnel operating over 10 major product categories with over 230 successful brands.&nbsp;<br></p><p style=\"word-break: normal; margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><span style=\"font-weight: bolder; line-height: 1;\"><br></span></p><p style=\"word-break: normal; margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><span style=\"font-weight: bolder; line-height: 1;\"><br></span></p><p style=\"word-break: normal; margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><span style=\"font-weight: bolder; line-height: 1;\">Responsibilities:</span></p><ul style=\"margin: 15px 0px;\"><li>Managing design process from conception through to final styling.</li><li>Conducting market research to identify new trends, fabrics and techniques, and seeking design inspiration.</li><li>Collaborating with team members to select seasonal themes, make edits to line, and create new concepts.</li><li>Ensuring product is in agreement with business strategy.</li><li>Selecting fabrics and trims.</li><li>Creating production sketches for development packages around children clothing.</li><li>Collaborating with technical designer to ensure development packages are accurate.</li><li>Reviewing product for style and fit during presentation.</li><li>Presenting story, mood, color boards, and samples to buyers.</li></ul><p style=\"word-break: normal; margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><span style=\"font-weight: bolder; line-height: 1;\">Requirements:</span></p><ul style=\"margin: 15px 0px;\"><li>Computer Literate&nbsp;</li><li>Female</li><li>Detailed with Children Clothing\'s&nbsp;</li><li>Must be able to develop and cut patterns&nbsp;</li><li>Minimum of 1 years experience&nbsp;</li></ul><p style=\"word-break: normal; margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><span style=\"font-weight: bolder; line-height: 1;\">Must reside around Gbagada</span></p></div>', 'Lagos', '72afd31595', 1, ''),
(3, 'Human Resource/Admin Manager', '<h3 class=\"font-size-18 margin-top--0 margin-bottom--15\" style=\"color: rgb(78, 85, 89); font-weight: 400; margin-bottom: 15px; font-family: Roboto, sans-serif; font-size: 1.125rem !important; margin-top: 0px !important;\">Job Description</h3><div class=\"job__details__user-edit\" style=\"position: relative; display: inline-block; float: left; width: 800px; color: rgb(78, 85, 89); font-family: Roboto, sans-serif; font-size: 16px;\"><ul style=\"margin: 15px 0px;\"><li>The HR/Admin manages the Freedom Foundation’s center-office operations and be responsible for all day to day operations of all HR personnel administrative matters as per the Foundation’s policies and procedures. S/He will support the programs in managing their facilities. S/he will be responsible for planning, directing and coordinating the delivery of administrative services of the organization.&nbsp; &nbsp;&nbsp;</li></ul><p style=\"word-break: normal; margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><span style=\"font-weight: bolder; line-height: 1;\">Job Description:</span></p><p style=\"word-break: normal; margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><span style=\"font-weight: bolder; line-height: 1;\">Human Resource</span></p><p style=\"word-break: normal; margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><span style=\"font-weight: bolder; line-height: 1;\">HR Administration</span></p><ul style=\"margin: 15px 0px;\"><li>Develop HR manual (policies and procedures governing HR)</li><li>Conduct periodic review of HR policies and procedures, as well as employee manual.</li></ul><p style=\"word-break: normal; margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><span style=\"font-weight: bolder; line-height: 1;\">Recruitment:</span></p><ul style=\"margin: 15px 0px;\"><li>Based on annual strategy and review organization design, identify staffing/skill gaps</li><li>Recommend new hires to Executive Director as well as recruitment approach</li><li>Based on approved new hire list and recruitment approach source for talent</li><li>Administer interview process until a final selection is made</li><li>Provide offers to finalist(s) and secure acceptance</li><li>Conduct necessary background checks</li><li>Onboard new recruits ensuring their paper work is complete and they receive all their work tools.</li><li>Plan and conduct employee orientation</li><li>Conduct reference checks and oversee confirmation of staff</li></ul><p style=\"word-break: normal; margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><span style=\"font-weight: bolder; line-height: 1;\">Performance Evaluation</span></p><ul style=\"margin: 15px 0px;\"><li>Plan and implement performance management process</li><li>Ensure staff compliance with all relevant policies and procedures</li><li>Process all queries, disciplinary matters, issues and disputes concerning relations in the organization.</li></ul><p style=\"word-break: normal; margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><span style=\"font-weight: bolder; line-height: 1;\">Training Coordination</span></p><ul style=\"margin: 15px 0px;\"><li>Conduct periodic skills audit</li><li>Plan staff training</li><li>Ensure all staff complete required training as planned</li></ul><p style=\"word-break: normal; margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><span style=\"font-weight: bolder; line-height: 1;\">Payroll and Benefits Administration</span></p><ul style=\"margin: 15px 0px;\"><li>Ensure on-time review of attendance in order to feed information to finance for payroll</li><li>Provide timely reminders to finance for payroll and benefits administration</li><li>Administer staff leave</li></ul><p style=\"word-break: normal; margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><span style=\"font-weight: bolder; line-height: 1;\">Other Activities</span></p><ul style=\"margin: 15px 0px;\"><li>Advocate for staff welfare</li><li>Stay abreast of all labour policies and legislation</li><li>Plan and chair staff meetings</li><li>Monitor special events (birthdays, weddings, babies, funerals etc)</li><li>Assist with completion of necessary reports as requested</li></ul><p style=\"word-break: normal; margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><span style=\"font-weight: bolder; line-height: 1;\">Administration</span></p><p style=\"word-break: normal; margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><span style=\"font-weight: bolder; line-height: 1;\">Administrative Activities</span></p><ul style=\"margin: 15px 0px;\"><li>Establish documents management system, ensuring accurate and appropriate record-keeping and reporting for all Foundation matters.</li><li>Liaise with building facility manager and operations officer to ensure a clean office environment and adequate and appropriate use of all spaces in th Foundation office.</li><li>Manage all contract, registrations and other legal and regulatory matters in collaboration with FF accounts and legal departments at HOF</li><li>Ensure circulation of relevant policies, events and notifications internally</li></ul><p style=\"word-break: normal; margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><span style=\"font-weight: bolder; line-height: 1;\">Project Management</span></p><ul style=\"margin: 15px 0px;\"><li>Propose necessary and relevant policies, procedures and processes to guide all activities within the scope of Admin, HR and Facilities Management, for HQ and Programs</li><li>Work closely with HOF shared services in meeting the Admin, Operations and Facilities Management needs of the Foundation and its programs</li><li>Stay abreast of all HOD global policies as it pertains to administrative, procurement, HR, operations, facility management and any other relevant unit.</li></ul><p style=\"word-break: normal; margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><span style=\"font-weight: bolder; line-height: 1;\">Operations Activities</span></p><ul style=\"margin: 15px 0px;\"><li>Understand the strategic objectives of Freedom Foundation and propose strategies for optimum operations service delivery and ongoing maintenance.</li><li>In collaboration with the operations officer, assess and evaluate current conditions of all the Foundation and its program’s facilities with a view to planning improvement initiatives</li></ul><p style=\"word-break: normal; margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><span style=\"font-weight: bolder; line-height: 1;\">Donor Relations</span></p><ul style=\"margin: 15px 0px;\"><li>Oversee donor management and reporting.</li></ul><p style=\"word-break: normal; margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">Attention:</p><ul style=\"margin: 15px 0px;\"><li>Please ensure your Jobberman profile is 100% complete before applying for this job. Candidates with incomplete profiles have a much lower chance of having their applications viewed.</li></ul></div>', 'Lagos', '1bd846a276', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `c_id` int(11) NOT NULL,
  `c_product` varchar(30) NOT NULL,
  `c_ip` varchar(200) NOT NULL,
  `c_color` varchar(50) NOT NULL,
  `c_quantity` int(11) NOT NULL,
  `c_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`c_id`, `c_product`, `c_ip`, `c_color`, `c_quantity`, `c_date`) VALUES
(1, '98hu0c4033', '9mnidddqnai7lm56s5kp8hkt48', 'Metallic Copper', 2, '2019-03-27 09:46:15'),
(6, '98hu0c4033', '64jsrc9p6jsri96u2e0gk9q8m5', 'Metallic Copper', 1, '2019-04-09 13:19:40');

-- --------------------------------------------------------

--
-- Table structure for table `headers`
--

CREATE TABLE `headers` (
  `h_id` int(11) NOT NULL,
  `h_name` varchar(30) NOT NULL,
  `h_submenu` tinyint(4) NOT NULL DEFAULT '0',
  `h_link` varchar(100) NOT NULL,
  `h_rand` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `headers`
--

INSERT INTO `headers` (`h_id`, `h_name`, `h_submenu`, `h_link`, `h_rand`) VALUES
(1, 'Smartphones', 1, 'smartphones', '7htyui876nj'),
(2, 'Tablets', 1, 'tablets', '7htyui8767hg'),
(3, 'Wearables', 0, 'wearables', 'yt76ui876nj'),
(4, 'Accessories', 0, 'accessories', '7htt7453i876nj'),
(5, 'More', 1, '#', '7httyt67nj');

-- --------------------------------------------------------

--
-- Table structure for table `homepage_banners`
--

CREATE TABLE `homepage_banners` (
  `hb_id` int(11) NOT NULL,
  `hb_title` varchar(250) NOT NULL,
  `hb_subtitle` varchar(250) NOT NULL,
  `hb_image_url` varchar(40) NOT NULL,
  `hb_rand` varchar(30) NOT NULL,
  `hb_active` tinyint(4) NOT NULL DEFAULT '1',
  `hb_link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `homepage_banners`
--

INSERT INTO `homepage_banners` (`hb_id`, `hb_title`, `hb_subtitle`, `hb_image_url`, `hb_rand`, `hb_active`, `hb_link`) VALUES
(1, 'Galaxy S9 | S9+', '', 'uploads/S93.jpg', '292dc597da', 1, 'http://localhost/rifugio/product/Galaxy-S9-Plus'),
(2, 'Galaxy A9', '', 'uploads/A9.jpg', '3e9c049f0c', 0, '#'),
(3, 'Galaxy J4', '', 'uploads/two.jpg', '45dfc87156', 1, '#'),
(4, 'Test', '', 'uploads/watch.jpg', '56de9bc680', 0, '#');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_description` text NOT NULL,
  `p_barcode` varchar(30) NOT NULL,
  `p_brand` varchar(30) NOT NULL,
  `p_category` varchar(30) NOT NULL,
  `p_price` double DEFAULT '0',
  `p_colors` text NOT NULL,
  `p_rand` varchar(30) NOT NULL,
  `p_date` varchar(30) NOT NULL,
  `p_visible` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_description`, `p_barcode`, `p_brand`, `p_category`, `p_price`, `p_colors`, `p_rand`, `p_date`, `p_visible`) VALUES
(1, 'Galaxy Note 9', '<p><b>Body 161.9 x 76.4 x 8.8 mm (6.37 x 3.01 x 0.35 in) 201 g (7.09 oz)</b><br><span style=\"color: rgb(0, 0, 0); font-size: 1rem; font-family: Arial;\">Front/back glass (Gorilla Glass 5), aluminum frame, Single SIM (Nano-SIM) or Hybrid Dual SIM (Nano-SIM, dual stand-by)- Samsung Pay (Visa, MasterCard certified)- IP68 dust/water proof (up to 1.5m for 30 mins)- Stylus (Bluetooth integration) Display Super AMOLED capacitive touchscreen, 16M colors, 6.4 inches, 103.2 cm (~83.4% screen-to-body ratio) 1440 x 2960 pixels, 18.5:9 ratio (~516 ppi density) Yes ,Corning Gorilla Glass 5 - HDR10 compliant - Always-on display, Platform Android 8.1 (Oreo)\r\nExynos 9810 Octa - EMEAOcta-core (4x2.7 GHz Mongoose M3 &amp; 4x1.8 GHz Cortex-A55) - EMEA, Octa-core (4x2.8 GHz Kryo 385 Gold &amp; 4x1.7 GHz Kryo 385 Silver) - USA/LATAM, China, Mali-G72 MP18 - EMEA, Memory microSD, up to 512 GB (uses SIM 2 slot) - dual SIM model only\r\n128 GB, 6 GB RAM-Main Camera 12 MP, f/1.5-2.4, 26mm, 1/2.55\"\", 1.4µm, dual pixel PDAF, OIS-12 MP, f/2.4, 52mm, 1/3.4\"\", 1µm, AF, OIS, 2x optical zoom-LED flash, auto-HDR, panorama-2160p@60fps, 1080p@240fps, 720p@960fps, HDR, dual-video rec.-Selfie camera 8 MP, f/1.7, 25mm, 1/3.6\"\", 1.22µm, AF-Dual video call, Auto-HDR1440p@30fps</span></p>', 'N960', '7i13ef112', '9dc00c4033', 290000, 'Metallic Copper, Ocean Blue, Midnight Black', '98hu0c4033', '1552261896', 1),
(3, 'Galaxy S9 Plus', 'BODY 158.1 x 73.8 x 8.5 mm (6.22 x 2.91 x 0.33 in) 189 g (6.67 oz)-Front/back glass (Gorilla Glass 5), aluminum frame-Single SIM (Nano-SIM) or Hybrid Dual SIM (Nano-SIM, dual stand-by)- Samsung Pay (Visa, MasterCard certified)- IP68 certified - dust/water proof (up to 1.5m for 30 mins)\r\nDISPLAY Super AMOLED capacitive touchscreen, 16M colors-6.2 inches, 98.3 cm (~84.2% screen-to-body ratio) 1440 x 2960 pixels, 18.5:9 ratio (~529 ppi density) Yes-Corning Gorilla Glass 5 - HDR10 compliant - 3D Touch (home button only) - Always-on display\r\nPLATFORM Android 8.0 (Oreo)- Octa-core\r\nMEMORY microSD, up to 400 GB (uses SIM 2 slot) - 64 GB, 6 GB RAM', 'G965', '7i13ef112', '9dc00c4033', 260000, 'Lilac Purple, Midnight Black, Titanium Grey', '98ty0c4033', '1552261896', 1),
(4, 'Galaxy S9', 'BODY 147.7 x 68.7 x 8.5 mm (5.81 x 2.70 x 0.33 in)163 g (5.75 oz)-Front/back glass (Gorilla Glass 5), aluminum frame-Single SIM (Nano-SIM) or-Hybrid Dual SIM (Nano-SIM, dual stand-by) - Samsung Pay (Visa, MasterCard certified)- IP68 certified - dust/water proof (up to 1.5m for 30 mins)\r\nDISPLAY Super AMOLED capacitive touchscreen, 16M colors-5.8 inches, 84.8 cm (~83.6% screen-to-body ratio)-1440 x 2960 pixels, 18.5:9 ratio (~570 ppi density)-Yes-Corning Gorilla Glass 5 - HDR10 compliant - 3D Touch (home button only) - Always-on display\r\nPLATFORM Android 8.0 (Oreo)-Exynos 9810 Octa - EMEA-Octa-core (4x2.7 GHz Mongoose M3 & 4x1.8 GHz Cortex-A55) - EMEA-Mali-G72 MP18 - EMEA-MEMORY microSD, up to 400 GB (uses SIM 2 slot) -64, 4 GB RAM', 'G960', '7i13ef112', '9dc00c4033', 260000, 'Lilac Purple, Midnight Black, Titanium Grey', '98ty0784033', '1552261896', 1),
(5, 'Galaxy A9', 'Display o    Size (Main_Display)15.95cm (6.3\") full rectangle / 15.74cm (6.2\") rounded corners o    Resolution (Main Display)2220 x 1080 (FHD+) o    Technology (Main Display)Super AMOLED o    Color Depth (Main Display)16M\r\n Camera\r\nRear Camera - Resolution (Multiple)24.0 MP + 5.0 MP + 10.0 MP + 8.0 MP-Rear Camera - F Number (Multiple)F1.7 , F2.2 , F2.4 , F2.4-Rear Camera - Auto FocusYes-Rear Camera - OISNo-Front Camera - Resolution24.0 MP-Front Camera - F NumberF2.0-Front Camera - Auto FocusNo-Front Camera - OISNo-Rear Camera - FlashYes-Front Camera - FlashNo--Video Recording ResolutionUHD 4K (3840 x 2160)@30fps\r\n Memory o    RAM_Size (GB)6 o    ROM Size (GB)128 o    Available Memory (GB)*108.5 o    External Memory SupportMicroSD (Up to 512GB)\r\nNetwork/Bearer o    Number of SIMDual-SIM o    SIM sizeNano-SIM (4FF) o    SIM Slot TypeSIM 1 + SIM 2 + MicroSD o    Infra2G GSM, 3G WCDMA, 4G LTE FDD, 4G LTE TDD o    2G GSMGSM850, GSM900, DCS1800, PCS1900 o    3G UMTSB1(2100), B2(1900), B4(AWS), B5(850), B8(900)', 'A950', '7i13ef112', '9dc00c4033', 165000, 'Bubble Gum Pink, Lemonade Blue, Charcoal Black', '98ty04033', '1552261896', 1),
(6, 'Galaxy Tab A 7.0', 'Samsung Galaxy Tab A 7.0 ( 2016 ) is an Android tablet which runs on Android 5.1 Lollipop and 5MP auto focus camera. 1.3 GHz Quad Core Processor. 1.5GB RAM With 8GB ROM. 7 Inch HD LCD Display. 5MP Auto Focus Rear Camera. 2MP Front Camera. 4G/Wi-Fi. Bluetooth. 200 GB Expandable Memory. 4000mAh Battery.', 'T285', '7i13ef112', '7vdc44c4033', 46000, '', '08t04033', '1552261896', 0),
(7, 'Galaxy Tab E', 'The Samsung Galaxy Tab E is 8.5mm-thin, weighs 490 grams, and sports a 9.6-inch TFT display with 800 x 1280 pixels. The new slate is powered by a quad-core 1.3 GHz processor - possibly a Spreadtrum SC7730SE, though Samsung didn\'t confirm this. Apparently running Android KitKat (instead of Lollipop), the Tab E comes pre-installed with Microsoft Office apps. It further offers a 2 MP front-facing camera, a 5 MP rear camera, 1.5 GB of RAM, 8 GB of storage space, and microSD card support. The tablet has a 5000 mAh battery, which, given the rest of the features, should provide a decent usage time.', 'T561', '7i13ef112', '7vdc44c4033', 62000, 'Black', '08bhy74033', '1552261896', 1),
(8, 'Galaxy Watch 46mm', 'Storage: 4 GB internal storage. Wireless technology: NFC, 802.11 b/g/n WiFi, Bluetooth 4.2, and GPS/Glonass. ... Battery: 472 mAh battery with wireless charging dock (270 mAh on 42mm model) Dimensions: 46 x 49 x 13 mm and 63 grams (46mm model) and 41.9 x 45.7 x 12.7 mm and 49 grams ', 'R800', '7i13ef112', '6dcn4c4067', 125000, '', '99bhy74033', '1552261896', 1),
(9, 'Galaxy Watch 42mm', 'Specifications of the Samsung Galaxy Watch include: Processor: Samsung Exynos 9110 1.15GHz dual-core/li> Display: 1.3 inch (1.2 inch for 42mm models) 360x360 pixels resolution Super AMOLED, Gorilla Glass DX+ Operating system: Tizen OS 4.0.', 'R810', '7i13ef112', '6dcn4c4067', 110000, '', '9900y74033', '1552261896', 1),
(11, 'Galaxy J4 Plus', '<b>Samsung Galaxy Grand Prime Plus Key Specs</b>\r\n5.0-inch PLS TFT Display, 540 x 960 pixels (220ppi)\r\n1.4GHz quad-core Mediatek MT6737T CPU with 1.5GB RAM.\r\nAndroid 6.0 (Marshmallow)\r\n8GB Storage with support for memory card up to 256GB.\r\n8MP Rear Camera and 5MP Front Camera.\r\n4G LTE (up to 150 Mbps download)', 'J415', '7i13ef112', '9dc00c4033', 80000, 'Gold, Silver, Black', '7d535b85e7', '1552261896', 1),
(12, 'Galaxy A7', '<p>BODY 159.8 x 76.8 x 7.5 mm (6.29 x 3.02 x 0.30 in) 168 g (5.93 oz)-Front/back glass, aluminum frame-Dual SIM (Nano-SIM, dual stand-by)</p><p>DISPLAY Super AMOLED capacitive touchscreen, 16M colors-6.0 inches, 91.4 cm (~74.4% screen-to-body ratio)-1080 x 2220 pixels, 18.5:9 ratio (~411 ppi density)-Yes-Corning Gorilla Glass (unspecified version)- Always-on display</p><p>PLATFORM Android 8.0 (Oreo)-Octa-core 2.2 GHz Cortex-A53-MEMORY microSD, up to 512 GB (dedicated slot) 64 GB, 4 GB RAM</p><p>MAIN CAMERA 24 MP, f/1.7, PDAF-8 MP, f/2.4, 13mm (ultrawide)-5 MP, f/2.2, depth sensor-LED flash, panorama, HDR-2160p@30fps, 1080p@30fps-SELFIE CAMERA 24 MP, f/2.0-HDR-1080p@30fps</p>', 'A750', '7i13ef112', '9dc00c4033', 99500, 'Gold, Blue Black', '282263c189', '1554892091', 1),
(13, 'Galaxy A6 Plus', '<p>BODY 160.2 x 75.7 x 7.9 mm (6.31 x 2.98 x 0.31 in)-Single SIM (Nano-SIM) or Dual SIM (Nano-SIM, dual stand-by)- Samsung Pay-DISPLAY Super AMOLED capacitive touchscreen, 16M colors-6.0 inches, 91.4 cm (~75.3% screen-to-body ratio)-1080 x 2220 pixels, 18.5:9 ratio (~411 ppi density)</p><p>Yes- Always-on display--PLATFORM Android 8.0 (Oreo)-Qualcomm SDM450 Snapdragon 450-Octa-core 1.8 GHz Cortex-A53-Adreno 506</p><p>MEMORY microSD, up to 256 GB (dedicated slot)-32 GB, 3 GB RAM-CAMERA Dual: 16 MP (f/1.7) + 5 MP (f/1.9), phase detection autofocus, LED flash</p><p>Geo-tagging, touch focus, face detection, panorama, HDR-1080p@30fps-24 MP (f/1.9), LED flash</p>', 'A605', '7i13ef112', '9dc00c4033', 0, 'Gold, Black, Blue', '3ece7bad37', '1554894869', 1),
(14, 'Galaxy J6 Plus', '<p>The Samsung Galaxy J6+ features a 6-inch display with 720 x 1480 resolution, quad-core processor, 3/4 GB RAM and 32/64 gigs of storage. A dual-camera setup can be found on the back. The phone runs Android 8.1 Oreo, powered by 3300mAh battery.<br></p>', 'J610', '7i13ef112', '9dc00c4033', 61500, 'Red, Black, Grey', '28193b052c', '1554895293', 1),
(15, 'Galaxy J4 Core', '<p>The Samsung Galaxy J4 Core is an Android Go device. The phone sports a large 6-inch HD (720p) display, a 1.4GHz quad-core CPU, 1GB RAM and 16GB expandable storage (up to 512GB). A 3,300 mAh battery is included as well.<br></p>', 'J410', '7i13ef112', '9dc00c4033', 40500, 'Gold, Blue, Black', '6a9679c129', '1554895509', 1),
(16, 'Galaxy J2 Core', '<p>The Samsung Galaxy J2 Core is the manufacturer\'s first Android Go smartphone. The smartphone sports a 5-inch TFT display with 540 x 960 pixels and is powered by a quad-core 1.4 GHz Exynos 7570 processor. The handset further offers 1 GB of RAM, 8 GB of expandable storage space, and a 2,600 mAh battery.<br></p>', 'J260', '7i13ef112', '9dc00c4033', 33000, 'Purple, Black, Lavender', '4f2f5b7ea9', '1554895696', 1),
(17, 'Galaxy Grand Prime Plus', '<p>Samsung Galaxy Grand Prime Plus Key Specs</p><p>5.0-inch PLS TFT Display, 540 x 960 pixels (220ppi)</p><p>1.4GHz quad-core Mediatek MT6737T CPU with 1.5GB RAM.</p><p>Android 6.0 (Marshmallow)</p><p>8GB Storage with support for memory card up to 256GB.</p><p>8MP Rear Camera and 5MP Front Camera.</p><p>4G LTE (up to 150 Mbps download)</p>', 'G532', '7i13ef112', '9dc00c4033', 30000, 'Gold, Silver, Black', '1065b27ce7', '1554896060', 1),
(18, 'Galaxy Tab A 7.0', '<p>Samsung Galaxy Tab A 7.0 ( 2016 ) is an Android tablet which runs on Android 5.1 Lollipop and 5MP auto focus camera. 1.3 GHz Quad Core Processor. 1.5GB RAM With 8GB ROM. 7 Inch HD LCD Display. 5MP Auto Focus Rear Camera. 2MP Front Camera. 4G/Wi-Fi. Bluetooth. 200 GB Expandable Memory. 4000mAh Battery.<br></p>', 'T285', '7i13ef112', '7vdc44c4033', 46000, 'Silver, Black', '42e197d270', '1554896816', 1),
(19, 'Galaxy Tab A 10.1', '<p>Samsung GALAXY Tab 10.1 is the bigger brother of the Galaxy Tab, featuring a 10.1\" display 1GHz dual-core processor, Android 3.0 and an 3MP camera that can record video in HD.<br></p>', 'T585', '7i13ef112', '7vdc44c4033', 96000, 'Black', '8ff3211fcb', '1554897180', 1),
(20, 'Galaxy Tab A 10.1 Pen', '<p>Samsung Galaxy Tab A 10.1 (2016) with S Pen tablet was launched in September 2016. The tablet comes with a 10.10-inch display with a resolution of 1920 pixels by 1200 pixels.</p><p>The Samsung Galaxy Tab A 10.1 (2016) with S Pen is powered by 1.6GHz octa-core processor and it comes with 3GB of RAM. The tablet packs 32GB of internal storage that can be expanded up to 256GB via a microSD card. As far as the cameras are concerned, the Samsung Galaxy Tab A 10.1 (2016) with S Pen packs an 8-megapixel primary camera on the rear and a 2-megapixel front shooter for selfies.</p><p>The Samsung Galaxy Tab A 10.1 (2016) with S Pen runs Android 6.0 and is powered by a 7300mAh non-removable battery. It measures 254.30 x 164.20 x 8.20 (height x width x thickness) and weighs 558.00 grams.</p><p>The Samsung Galaxy Tab A 10.1 (2016) with S Pen is a single SIM (GSM) tablet that accepts a Nano-SIM. Connectivity options include Wi-Fi, GPS, Bluetooth, USB OTG, FM, 3G, and 4G. Sensors on the tablet include a Proximity sensor, Accelerometer, Ambient light sensor, and Gyroscope.</p>', 'P585', '7i13ef112', '7vdc44c4033', 110000, 'Black', '3c77c3d6d6', '1554897685', 1),
(21, 'Galaxy Tab A 10.5', '<p>Samsung Galaxy Tab A 10.5 (Wi-Fi) tablet was launched in August 2018. The tablet comes with a 10.50-inch touchscreen display with a resolution of 1920 pixels by 1200 pixels.</p><p>The Samsung Galaxy Tab A 10.5 (Wi-Fi) is powered by 1.8GHz octa-core processor and it comes with 3GB of RAM. The tablet packs 32GB of internal storage that can be expanded up to 400GB via a microSD card. As far as the cameras are concerned, the Samsung Galaxy Tab A 10.5 (Wi-Fi) packs an 8-megapixel primary camera on the rear and a 5-megapixel front shooter for selfies.</p><p>The Samsung Galaxy Tab A 10.5 (Wi-Fi) runs Android 8.1 and is powered by a 7300mAh. It measures 260.00 x 161.10 x 8.00 (height x width x thickness) and weighs 529.00 grams.</p><p>Connectivity options include Wi-Fi, GPS, and Bluetooth. Sensors on the tablet include Compass/ Magnetometer, Accelerometer, and Gyroscope.</p>', 'T595', '7i13ef112', '7vdc44c4033', 135000, 'Black', '2723a24e06', '1554897996', 1),
(22, 'Galaxy Note 9 512GB', '<p>Body 161.9 x 76.4 x 8.8 mm (6.37 x 3.01 x 0.35 in) 201 g (7.09 oz) Front/back glass (Gorilla Glass 5), aluminum frame, Single SIM (Nano-SIM) or Hybrid Dual SIM (Nano-SIM, dual stand-by)- Samsung Pay (Visa, MasterCard certified)- IP68 dust/water proof (up to 1.5m for 30 mins)- Stylus (Bluetooth integration) Display Super AMOLED capacitive touchscreen, 16M colors, 6.4 inches, 103.2 cm (~83.4% screen-to-body ratio) 1440 x 2960 pixels, 18.5:9 ratio (~516 ppi density) Yes ,Corning Gorilla Glass 5 - HDR10 compliant - Always-on display, Platform Android 8.1 (Oreo)</p><p>Exynos 9810 Octa - EMEAOcta-core (4x2.7 GHz Mongoose M3 & 4x1.8 GHz Cortex-A55) - EMEA, Octa-core (4x2.8 GHz Kryo 385 Gold & 4x1.7 GHz Kryo 385 Silver) - USA/LATAM, China, Mali-G72 MP18 - EMEA, Memory microSD, up to 512 GB (uses SIM 2 slot) - dual SIM model only</p><p>512 GB, 6 GB RAM-Main Camera 12 MP, f/1.5-2.4, 26mm, 1/2.55\", 1.4µm, dual pixel PDAF, OIS-12 MP, f/2.4, 52mm, 1/3.4\", 1µm, AF, OIS, 2x optical zoom-LED flash, auto-HDR, panorama-2160p@60fps, 1080p@240fps, 720p@960fps, HDR, dual-video rec.-Selfie camera 8 MP, f/1.7, 25mm, 1/3.6\", 1.22µm, AF-Dual video call, Auto-HDR1440p@30fps</p>', 'N960', '7i13ef112', '9dc00c4033', 395000, 'Blue', '37ba816b51', '1554900205', 1),
(23, 'S10E LED BACK COVER', '<p>The Samsung Galaxy S10 LED Back Cover is a multifunctional case that shows you LED notifications on the back side of the Cover. The back cover LED lights will notify you of incoming calls, messages, current time, and more.<br></p>', 'EF-KG970C', '7i13ef112', '2fdb4910e5', 0, 'BlueBlack, White', '5f21188ddc', '1555327469', 1),
(24, 'S10E LED VIEW COVER', '<p>Lighting up the front of your phone, easy to see LED icons let you stay notified or do simple tasks and respond to incoming calls without needing to open the cover. Add some fun to your alerts by setting personalized icons for different contacts.<br></p>', 'EF-NG970P', '7i13ef112', '2fdb4910e5', 0, 'Black, Green, White', '2cb83d83c6', '1555327819', 1),
(25, 'S10E SILICONE COVER', '<p>The Samsung Galaxy S10 Silicone Cover is an easy-to-hold, durable case to protect your phone without sacrificing style. The precision designed cover is made of a soft-touch silicone, providing an excellent grip and protection with minimal bulkiness.<br></p>', 'EF-PG970T', '7i13ef112', '2fdb4910e5', 0, 'Black, Green, Berrypink, Blue, Navy, White, Yellow', '6bd3e3ca7c', '1555328311', 1),
(26, 'S10E CLEAR COVER', '<p>It is a back cover that never allows you to lose the beauty of your device due to its transparency&nbsp;<br></p>', 'EF-QG970C', '7i13ef112', '2fdb4910e5', 0, 'Transparent', '70d528bc88', '1555328534', 1),
(27, 'S10E PROTECTIVE STANDING COVER', '<p>Keep your phone safe from harm. Encasing your Galaxy S10e, S10, or S10+ in durable material, the Protective Standing Cover provides outstanding protection that stops the damage from drops and falls – certified with MIL-STD810G<br></p>', 'EF-RG970C', '7i13ef112', '2fdb4910e5', 0, 'Navy, White', '2b2877fb7e', '1555328737', 1),
(28, 'S10E LEATHER COVER', '<p>Protect your phone screen in style. The Galaxy S10 Leather Back Cover is made of genuine leather to keep your phone looking professional. Genuine leather provides excellent grip and protection with minimal bulkiness.<br></p>', 'EF-VG970L', '7i13ef112', '2fdb4910e5', 0, 'Black, Green, Gray, Navy, Red', '938c909cdf', '1555329332', 1),
(29, 'S10E CLEAR VIEW COVER', '<p>The Samsung Galaxy S10 S-View Flip Cover enables you to see and interact with your phone screen through the front of the case. Respond to incoming phone calls, alarms, and events even while the cover is closed. With a wider UX and lower profile design, you can show off the full screen whether your cover is open or closed.<br></p>', 'EF-ZG970C', '7i13ef112', '2fdb4910e5', 0, 'White, Yellow, Black, Green', '18f30a9852', '1555329652', 1),
(30, 'S10E PATTERN COVER', '<p>The Pattern Cover is mostly convenient to use, and we appreciate the off-beat look Samsung is offering here. The one thing we don\'t like about it is that when stuff gets in those holes (and it does), it can be difficult to get out without removing the case.<br></p>', 'EF-XG970C', '7i13ef112', '2fdb4910e5', 0, 'Black, Green, White, Yellow', '98ed01ec43', '1555329970', 1),
(31, 'S10 LED BACK COVER', '<p>The Samsung Galaxy S10 LED Back Cover is a multifunctional case that shows you LED notifications on the back side of the Cover. The back cover LED lights will notify you of incoming calls, messages, current time, and more.<br></p>', 'EF-KG973C', '7i13ef112', '2fdb4910e5', 0, 'BlueBlack, White', '929a97f3b3', '1555330436', 1),
(32, 'S10 LED VIEW COVER', '<p>Lighting up the front of your phone, easy to see LED icons let you stay notified or do simple tasks and respond to incoming calls without needing to open the cover. Add some fun to your alerts by setting personalized icons for different contacts.<br></p>', 'EF-NG973P', '7i13ef112', '2fdb4910e5', 0, 'Black, Green, White', '68bf5f9131', '1555330754', 1),
(33, 'S10 SILICONE COVER', '<p>The Samsung Galaxy S10 Silicone Cover is an easy-to-hold, durable case to protect your phone without sacrificing style. The precision designed cover is made of a soft-touch silicone, providing an excellent grip and protection with minimal bulkiness.<br></p>', 'EF-PG973T', '7i13ef112', '2fdb4910e5', 0, 'Black, Green, Berry Pink, Blue, Navy, White, Yellow', '73cf99238b', '1555331369', 1),
(34, 'S10 CLEAR COVER', '<p>It is a back cover that never allow you to loose the beauty of your device due to its transparency&nbsp;<br></p>', 'EF-QG973C', '7i13ef112', '2fdb4910e5', 0, 'Transparent', '9471334985', '1555331888', 1),
(35, 'S10 PROTECTIVE STANDING COVER', '<p>Keep your phone safe from harm. Encasing your Galaxy S10e, S10, or S10+ in durable material, the Protective Standing Cover provides outstanding protection that stops the damage from drops and falls – certified with MIL-STD810G<br></p>', 'EF-RG973C', '7i13ef112', '2fdb4910e5', 0, 'Navy, White', '638be3ad1d', '1555332604', 1),
(36, 'S10 LEATHER COVER', '<p>Protect your phone screen in style. The Galaxy S10 Leather Back Cover is made of genuine leather to keep you phone looking professional. Genuine leather provides excellent grip and protection with minimal bulkiness.<br></p>', 'EF-VG973L', '7i13ef112', '2fdb4910e5', 0, 'Black, Green, Gray, Navy, Red', '9d8c10bbcb', '1555332787', 1),
(37, 'S10 CLEAR VIEW COVER', '<p>The Samsung Galaxy S10 S-View Flip Cover enables you to see and interact with your phone screen through the front of the case. Respond to incoming phone calls, alarms, and events even while the cover is closed. With a wider UX and lower profile design, you can show off the full screen whether your cover is open or closed.<br></p>', 'EF-ZG973C', '7i13ef112', '2fdb4910e5', 0, 'White, Yellow, Black, Green', '8051461952', '1555333073', 1),
(38, 'S10 PATTERN COVER', '<p>The Pattern Cover is mostly convenient to use, and we appreciate the off-beat look Samsung is offering here. The one thing we don\'t like about it is that when stuff gets in those holes (and it does), it can be difficult to get out without removing the case.<br></p>', 'EF-XG973C', '7i13ef112', '2fdb4910e5', 0, 'Black, Green, White, Yellow', '17cc6498c4', '1555333203', 1),
(39, 'S10 PLUS LED BACK COVER', '<p>The Samsung Galaxy S10 LED Back Cover is a multifunctional case that shows you LED notifications on the back side of the Cover. The back cover LED lights will notify you of incoming calls, messages, current time, and more.<br></p>', 'EF-KG975C', '7i13ef112', '2fdb4910e5', 0, 'BlueBlack, White', '329eed7519', '1555333305', 1),
(40, 'S10 PLUS LED VIEW COVER', '<p>Lighting up the front of your phone, easy to see LED icons let you stay notified or do simple tasks and respond to incoming calls without needing to open the cover. Add some fun to your alerts by setting personalized icons for different contacts.<br></p>', 'EF-NG975P', '7i13ef112', '2fdb4910e5', 0, 'Black, Green, White', '148cc19765', '1555333466', 1),
(41, 'S10 PLUS SILICONE COVER', '<p>The Samsung Galaxy S10 Silicone Cover is an easy-to-hold, durable case to protect your phone without sacrificing style. The precision designed cover is made of a soft-touch silicone, providing an excellent grip and protection with minimal bulkiness.<br></p>', 'EF-PG975T', '7i13ef112', '2fdb4910e5', 0, 'Black, Green, Berry Pink, Blue, Navy, White, Yellow', '946a46fba0', '1555338773', 1),
(42, 'S10 PLUS CLEAR COVER', '<p>It is a back cover that never allow you to loose the beauty of your device due to its transparency&nbsp;<br></p>', 'EF-QG975C', '7i13ef112', '2fdb4910e5', 0, 'Transparent', '56b89c59ce', '1555339224', 1),
(43, 'S10 PLUS PROTECTIVE STANDING COVER', '<p>Keep your phone safe from harm. Encasing your Galaxy S10e, S10, or S10+ in durable material, the Protective Standing Cover provides outstanding protection that stops damage from drops and falls – certified with MIL-STD810G<br></p>', 'EF-RG975C', '7i13ef112', '2fdb4910e5', 0, 'Navy, White', '3e593e8d84', '1555339343', 1),
(44, 'S10 PLUS LEATHER COVER', '<p>Protect your phone screen in style. The Galaxy S10 Leather Back Cover is made of genuine leather to keep your phone looking professional. Genuine leather provides excellent grip and protection with minimal bulkiness.<br></p>', 'EF-VG975L', '7i13ef112', '2fdb4910e5', 0, 'Black, Green, Gray, Navy, Red', '932ad8cd66', '1555339523', 1),
(45, 'S10 PLUS CLEAR VIEW COVER', '<p>The Samsung Galaxy S10 S-View Flip Cover enables you to see and interact with your phone screen through the front of the case. Respond to incoming phone calls, alarms, and events even while the cover is closed. With a wider UX and lower profile design, you can show off the full screen whether your cover is open or closed.<br></p>', 'EF-ZG975C', '7i13ef112', '2fdb4910e5', 0, 'White, Yellow, Black, Green', '20caa6b5c8', '1555339725', 1),
(46, 'S10 PLUS PATTERN COVER', '<p>The Pattern Cover is mostly convenient to use, and we appreciate the off-beat look Samsung is offering here. The one thing we don\'t like about it is that when stuff gets in those holes (and it does), it can be difficult to get out without removing the case.<br></p>', 'EF-XG975C', '7i13ef112', '2fdb4910e5', 0, 'Black, Green, White, Yellow', '1add853bd8', '1555340161', 1),
(47, 'GALAXY FIT', '<p>The next generation Galaxy Fit’s design sets it apart. The fitness tracker to sport a vibrant full-color AMOLED touch display, Fit seamlessly integrates the vibrant display within it’s sleek, slim profile. Meaning Fit doesn’t just keep up with you, it puts you one step ahead.&nbsp;<br></p>', 'SM-R370NZ', '7i13ef112', '2fdb4910e5', 0, 'Black, Silver', '1adccab4cf', '1555340421', 1),
(48, 'GALAXY FIT E', '<p>The Fit e has a MCU Cortex M0 96Hz chip, which is a lesser chip. They both have a heart rate sensor and accelerometer</p>', 'SM-R375NZ', '7i13ef112', '2fdb4910e5', 0, 'Black, White, Yellow', '829ef79c2b', '1555340579', 1),
(49, 'GALAXY ACTIVE', '<p>As the name implies, the Samsung Galaxy Watch Active is focused on fitness, and its new design and features reflect that. The ultra-lightweight Galaxy Active comes in one size and features a 1.1-inch display. The fitness watch continually monitors your heart and will send alerts when an abnormal heart rate is detected. The Samsung watch can also help with your sleep and stress, analyzing your sleep patterns and sending you breathing exercises when high stress levels are detected.<br></p>', 'SM-R500NZ', '7i13ef112', '2fdb4910e5', 0, 'Black, Silver, Pink Gold, Green', '815047c378', '1555340920', 1),
(50, 'ULC BATTERY + Wireless Charger', '', 'EB-U1200C', '7i13ef112', '2fdb4910e5', 0, 'Silver, Pink', '14dfcecb8e', '1555341032', 1),
(51, 'ULC BATTERY', '<p>The new Samsung Battery Pack comes with Samsung AFC (15W) and Quick Charge 2.0 support that lets you power up quick when you’re on the go. And with OCP functionality, you can charge safely without having to worry about excessive current levels damaging your device.</p>', 'EB-P1100C', '7i13ef112', '2fdb4910e5', 0, 'Silver, Pink', '12e2dddf7e', '1555341741', 1),
(52, 'GALAXY BUDS', '<p>Our next-generation adaptive dual microphone technology makes background</p><p>noise a thing of the past. Galaxy Buds recognize your surroundings, switching between inner and outer</p><p>mics to keep unnecessary noise out of your conversation. 4</p>', 'SM-R170NZ', '7i13ef112', '2fdb4910e5', 0, 'Black, White, Yellow', '4c21571edb', '1555341926', 1),
(53, 'DEX CABLE HDMI', '<p>DeX Cable is now all you need to use Samsung Dex. Plug the HDMI adapter to one end and the Type C USB to your Galaxy Note9 or Galaxy Tab S4 and you\'re ready to go.* The ultra-simple design is easy to use and carry, and responsive when connected.<br></p>', '', '7i13ef112', '2fdb4910e5', 0, '', '82924e339f', '1555351113', 1),
(54, 'J2 CORE 5D GLASS', '<p>High definition 5D curved tempered glass screen protector. Curved tempered-glass offer the edge to edge protection, giving maximum image clarity and remarkable touch sensitivity. Protect your phone from dropping accidentally as it is with impact absorption for your phone screen.<br></p>', '', '7i13ef112', '2fdb4910e5', 0, '', '9177cd5052', '1555351650', 1),
(55, 'J2 CORE BACK CASE', '', '', '7i13ef112', '2fdb4910e5', 0, '', '5591e5663b', '1555351862', 1),
(56, 'J4 CORE 5D', '<p>High definition 5D curved tempered glass screen protector. Curved tempered-glass offer the edge to edge protection, giving maximum image clarity and remarkable touch sensitivity. Protect your phone from dropping accidentally as it is with impact absorption for your phone screen.<br></p>', '', '7i13ef112', '2fdb4910e5', 0, '', '92fbeb08c6', '1555351928', 1),
(57, 'J4 CORE BACK CASE', '', '', '7i13ef112', '2fdb4910e5', 0, '', '8efe1a3fe9', '1555351975', 1),
(58, 'J4 PLUS 5D GLASS', '<p>High definition 5D curved tempered glass screen protector . Curved tempered-glass offer the edge to edge protection, giving maximum image clarity and remarkable touch sensitivity. Protect your phone from dropping accidentally as it is with impact absorption for your phone screen.<br></p>', '', '7i13ef112', '2fdb4910e5', 0, '', '25053aca50', '1555352028', 1),
(59, 'J4 PLUS BACK CASE', '', '', '7i13ef112', '2fdb4910e5', 0, '', '93ce55fc97', '1555352072', 1),
(60, 'J6 PLUS 5D GLASS', '<p>High definition 5D curved tempered glass screen protector . Curved tempered-glass offer the edge to edge protection, giving maximum image clarity and remarkable touch sensitivity. Protect your phone from dropping accidentally as it is with impact absorption for your phone screen.<br></p>', '', '7i13ef112', '2fdb4910e5', 0, '', '8e017bdf4b', '1555353052', 1),
(61, 'J6 PLUS CLEAR VIEW COVER', '<p>A see-through flip cover, it gives details of your caller without flipping open<br></p>', '', '7i13ef112', '2fdb4910e5', 0, '', '671ec17c46', '1555353135', 1),
(62, 'NOTE 9 BACK CASE', '', '', '7i13ef112', '2fdb4910e5', 0, '', '657e803c14', '1555354928', 1),
(63, 'NOTE 9 LIQUID GLASS', '<p>Look at the glass on your phone under an electron microscope and you\'ll see that it\'s actually a porous material.&nbsp; Our Liquid Glass has nano particles of silicon dioxide which are small enough to fill in these pores, solidifying inside of them and making the glass 4-5x stronger, on a molecular level.<br></p>', '', '7i13ef112', '2fdb4910e5', 0, '', '31e8779d4f', '1555354990', 1),
(64, 'ORIGINAL SAMSUMG TAB S4 KEYBOARD CASE', '', '', '7i13ef112', '2fdb4910e5', 0, '', '91e054e489', '1555355017', 1),
(65, 'S9 LIQUID GLASS', '<p>Look at the glass on your phone under an electron microscope and you\'ll see that it\'s actually a porous material.&nbsp; Our Liquid Glass has nanoparticles of silicon dioxide which are small enough to fill in these pores, solidifying inside of them and making the glass 4-5x stronger, on a molecular level.<br></p>', '', '7i13ef112', '2fdb4910e5', 0, '', '23e7fb96f7', '1555355055', 1),
(66, 'S9 PLUS LIQUID GLASS', '<p>Look at the glass on your phone under an electron microscope and you\'ll see that it\'s actually a porous material.&nbsp; Our Liquid Glass has nano particles of silicon dioxide which are small enough to fill in these pores, solidifying inside of them and making the glass 4-5x stronger, on a molecular level.<br></p>', '', '7i13ef112', '2fdb4910e5', 0, '', '621e54d68b', '1555355129', 1),
(67, 'S9 Alcantara Cover', '', '', '7i13ef112', '2fdb4910e5', 0, '', '9671401868', '1555355165', 1),
(68, 'S9 Clear View Standing Cover', '', '', '7i13ef112', '2fdb4910e5', 0, '', '90cc00d9a9', '1555355200', 1),
(69, 'S9 LED View  Cover', '', '', '7i13ef112', '2fdb4910e5', 0, '', '8814dd2938', '1555355225', 1),
(70, 'S9 Plus Clear View Standing Cover', '<p><br></p>', '', '7i13ef112', '2fdb4910e5', 0, '', '44085699b9', '1555355254', 1),
(71, 'S9 PLUS DOME GLASS SCREEN PROTECTOR', '<p>Look at the glass on your phone under an electron microscope and you\'ll see that it\'s actually a porous material.&nbsp; Our Liquid Glass has nano particles of silicon dioxide which are small enough to fill in these pores, solidifying inside of them and making the glass 4-5x stronger, on a molecular level.<br></p>', '', '7i13ef112', '2fdb4910e5', 0, '', '5edb8349fa', '1555355309', 1),
(72, 'S9 PLUS LIQUID GLASS', '<p>Look at the glass on your phone under an electron microscope and you\'ll see that it\'s actually a porous material.&nbsp; Our Liquid Glass has nano particles of silicon dioxide which are small enough to fill in these pores, solidifying inside of them and making the glass 4-5x stronger, on a molecular level.<br></p>', '', '7i13ef112', '2fdb4910e5', 0, '', '194de86e68', '1555355352', 1),
(73, 'S9 Plus Tempered Glass', '<p>Look at the glass on your phone under an electron microscope and you\'ll see that it\'s actually a porous material.&nbsp; Our Liquid Glass has nano particles of silicon dioxide which are small enough to fill in these pores, solidifying inside of them and making the glass 4-5x stronger, on a molecular level.<br></p>', '', '7i13ef112', '2fdb4910e5', 0, '', '3897cdf492', '1555355387', 1),
(74, 'S9 Protective Standing Cover', '', '', '7i13ef112', '2fdb4910e5', 0, '', '8fe85fdcbf', '1555355417', 1),
(75, 'S9 Tempered Glass', '<p>Look at the glass on your phone under an electron microscope and you\'ll see that it\'s actually a porous material.&nbsp; Our Liquid Glass has nano particles of silicon dioxide which are small enough to fill in these pores, solidifying inside of them and making the glass 4-5x stronger, on a molecular level.<br></p>', '', '7i13ef112', '2fdb4910e5', 0, '', '8a32509ff1', '1555355463', 1),
(76, 'A9 5D GLASS', '<p>Look at the glass on your phone under an electron microscope and you\'ll see that it\'s actually a porous material.&nbsp; Our Liquid Glass has nano particles of silicon dioxide which are small enough to fill in these pores, solidifying inside of them and making the glass 4-5x stronger, on a molecular level.<br></p>', '', '7i13ef112', '2fdb4910e5', 0, '', '4496c4c332', '1555355698', 1),
(77, 'S10 LIQUID GLASS', '<p>Look at the glass on your phone under an electron microscope and you\'ll see that it\'s actually a porous material.&nbsp; Our Liquid Glass has nano particles of silicon dioxide which are small enough to fill in these pores, solidifying inside of them and making the glass 4-5x stronger, on a molecular level.<br></p>', '', '7i13ef112', '2fdb4910e5', 0, '', '1e1ed748d8', '1555357351', 1),
(78, 'S10 PLUS LIQUID GLASS', '<p>Look at the glass on your phone under an electron microscope and you\'ll see that it\'s actually a porous material.&nbsp; Our Liquid Glass has nanoparticles of silicon dioxide which are small enough to fill in these pores, solidifying inside of them and making the glass 4-5x stronger, on a molecular level.<br></p>', '', '7i13ef112', '2fdb4910e5', 0, '', '973116e7fd', '1555357600', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_c_id` int(11) NOT NULL,
  `p_c_name` varchar(100) NOT NULL,
  `p_c_alias` varchar(100) NOT NULL,
  `p_c_rand` varchar(30) NOT NULL,
  `p_c_default` tinyint(4) NOT NULL DEFAULT '0',
  `p_c_visible` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_c_id`, `p_c_name`, `p_c_alias`, `p_c_rand`, `p_c_default`, `p_c_visible`) VALUES
(1, 'Smartphones', 'smartphones', '9dc00c4033', 1, 1),
(2, 'Tablets', 'tablets', '7vdc44c4033', 1, 1),
(3, 'Smart Watch', 'wearables', '6dcn4c4067', 1, 1),
(4, 'Test Categories', 'Test Category', '7c282ce32e', 0, 0),
(5, 'Test Category', 'testcategory', '24cb535c14', 0, 0),
(6, 'Accessories', 'accessories', '2fdb4910e5', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `p_i_id` int(11) NOT NULL,
  `p_i_product` varchar(30) NOT NULL,
  `p_i_image_url` varchar(200) NOT NULL,
  `p_i_color` varchar(30) NOT NULL DEFAULT 'black',
  `p_i_rand` varchar(30) NOT NULL,
  `p_i_visible` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`p_i_id`, `p_i_product`, `p_i_image_url`, `p_i_color`, `p_i_rand`, `p_i_visible`) VALUES
(1, '98ty04033', 'uploads/a9_front.png', 'CharcoalBlack', '98ty0bg33', 1),
(2, '98ty04033', 'uploads/a9_back.png', 'CharcoalBlack', '98tgi9bg33', 1),
(3, '98ty0784033', 'uploads/S9-PDP-Front-Black.jpg', 'MidnightBlack', '98ty07840bh', 1),
(4, '98ty0784033', 'uploads/S9-PDP-Back-Black.jpg', 'MidnightBlack', '98ty0784ui0', 1),
(5, '98hu0c4033', 'uploads/note9MidnightBlack.png', 'MidnightBlack', '98hu0c783', 1),
(6, '98hu0c4033', 'uploads/note9blue_06.png', 'MidnightBlack', '98huyui033', 1),
(7, '99bhy74033', 'assets/image/products/GALAXYWATCH46MM.jpg', 'black', '99bhy740nj', 1),
(8, '9900y74033', 'assets/image/products/GALAXYWATCH42MMBLACK.jpg', 'black', '56nbhg564i', 1),
(9, '9900y74033', 'assets/image/products/GALAXYWATCH42MMGOLD.jpg', 'black', '67yhgu876', 1),
(10, '98ty0c4033', 'uploads/S9-PDP-Front-Black.jpg', 'MidnightBlack', '99b776740nj', 1),
(11, '98ty0c4033', 'uploads/S9-PDP-Back-Black.jpg', 'MidnightBlack', '56nbg5iu6', 1),
(12, '98ty0c4033', 'uploads/S9-PDP-L30-Blue.jpg', 'MidnightBlack', '67yhgu876i', 1),
(15, '98hu0c4033', 'uploads/note9_blue_03.png', 'MidnightBlack', '962a84c4f2', 1),
(16, '98hu0c4033', 'uploads/note9MidnightBlackback.png', 'MidnightBlack', '2324590294', 1),
(17, '98ty0784033', 'uploads/S9-PDP-L30-Blue.jpg', 'MidnightBlack', '98ty07h56ui0', 1),
(18, '98ty04033', 'uploads/a9_slide.png', 'CharcoalBlack', '98t7fdsd', 1),
(19, '7d535b85e7', 'uploads/j4_front.png', 'Black', '69cf6bac5e', 1),
(20, '7d535b85e7', 'uploads/j4_back.png', 'Black', '631d616389', 1),
(21, '7d535b85e7', 'uploads/j4_slide.png', 'Black', '737d04c7a9', 1),
(28, '08bhy74033', 'uploads/tab_e_front.png', 'Black', '7935bab74c', 1),
(29, '08bhy74033', 'uploads/tab_e_back.png', 'Black', '8f1b4f561a', 1),
(30, '08bhy74033', 'uploads/tab_e_slide.png', 'Black', '2efdb93dae', 1),
(31, '3ece7bad37', 'uploads/a6_front.png', 'Black', '16eadcba6c', 1),
(32, '3ece7bad37', 'uploads/a6_back.png', 'Black', '5d12477107', 1),
(33, '3ece7bad37', 'uploads/a6_slide.png', 'Black', '7f03db55f9', 1),
(34, '42e197d270', 'uploads/a7_tab_front.png', 'Black', '9849d2c844', 1),
(35, '42e197d270', 'uploads/a7_tab_back.png', 'Black', '52a4ac13f9', 1),
(36, '42e197d270', 'uploads/a7_tab_slide.png', 'Black', '83c7e64020', 1),
(37, '4f2f5b7ea9', 'uploads/j2_front.png', 'Black', '8df08fd99e', 1),
(38, '4f2f5b7ea9', 'uploads/j2_back.png', 'Black', '4622fdc3e7', 1),
(39, '4f2f5b7ea9', 'uploads/j2_slide.png', 'Black', '7c87d37de5', 1),
(40, '2723a24e06', 'uploads/a105_front.png', 'Black', '6152ac099e', 1),
(41, '2723a24e06', 'uploads/a105_back.png', 'Black', '27e807cbc7', 1),
(42, '2723a24e06', 'uploads/a105_slide.png', 'Black', '74357ac7f9', 1),
(43, '3c77c3d6d6', 'uploads/a10pen_front.png', 'Black', '86a3b247ce', 1),
(44, '3c77c3d6d6', 'uploads/a10pen_slide.png', 'Black', '566321df9e', 1),
(45, '8ff3211fcb', 'uploads/a10_front.png', 'Black', '6df788334d', 1),
(46, '8ff3211fcb', 'uploads/a10_back.png', 'Black', '7756f9182b', 1),
(47, '6a9679c129', 'uploads/j4_front.png', 'Black', '429e7b8d01', 1),
(48, '6a9679c129', 'uploads/j4_back.png', 'Black', '567ccee653', 1),
(49, '6a9679c129', 'uploads/j4_slide.png', 'Black', '6ca2e4b472', 1),
(53, '282263c189', 'uploads/a7_front.png', 'BlueBlack', '6b6e4bf2bd', 1),
(54, '282263c189', 'uploads/a7_back.png', 'BlueBlack', '29ba8e1787', 1),
(55, '282263c189', 'uploads/a7_slide.png', 'BlueBlack', '1883b4ed42', 1),
(56, '28193b052c', 'uploads/j6_front.png', 'Black', '5eee7e6ca1', 1),
(57, '28193b052c', 'uploads/j6_back.png', 'Black', '37f3a6c79b', 1),
(58, '28193b052c', 'uploads/j6_slide.png', 'Black', '8d403a8fec', 1),
(59, '1065b27ce7', 'uploads/grand_front.png', 'Black', '657b5cc177', 1),
(60, '1065b27ce7', 'uploads/grand_back.png', 'Black', '2abc67f2e9', 1),
(61, '1065b27ce7', 'uploads/grand_slide.png', 'Black', '11639bde58', 1),
(63, '5f21188ddc', 'uploads/S10E_WHITE_LED_BACK_COVER.jpg', 'black', '4e2c1fa81d', 1),
(64, '5f21188ddc', 'uploads/S10E_WHITE_SILICON_BACK_COVER.jpg', 'black', '869a4d111f', 1),
(65, '2cb83d83c6', 'uploads/S10E_WHITE_CLEAR_VIEW_COVER.jpg', 'black', '6490c61854', 1),
(66, '2cb83d83c6', 'uploads/S10E_YELLOW_CLEAR_VIEW_COVER.jpg', 'black', '9c8b09612e', 1),
(67, '2cb83d83c6', 'uploads/S10E_YELLOW_SILICON_COVER.jpg', 'black', '64886962c9', 0),
(68, '6bd3e3ca7c', 'uploads/S10E_WHITE_SILICON_BACK_COVER1.jpg', 'black', '6dd7879a57', 1),
(69, '6bd3e3ca7c', 'uploads/S10E_YELLOW_SILICON_COVER1.jpg', 'black', '7233f0ad19', 0),
(70, '6bd3e3ca7c', 'uploads/S10E_NAVY_SILICON_COVER.jpg', 'black', '25d1b98b87', 1),
(71, '70d528bc88', 'uploads/S10E_CLEAR_COVER.jpg', 'black', '218ac1f1b2', 1),
(72, '2b2877fb7e', 'uploads/S10E_NAVY_PROTECTIVE_STANDING_COVER.jpg', 'black', '3c890bf91f', 1),
(73, '2b2877fb7e', 'uploads/S10E_WHITE_PROTECTIVE_STANDING_COVER.jpg', 'black', '97f0faea6c', 1),
(74, '938c909cdf', 'uploads/S10E_NAVY_LEATHER_COVER.PNG', 'black', '6606e9711d', 1),
(75, '938c909cdf', 'uploads/S10E_RED_LEATHER_COVER.jpg', 'black', '2e46c11a0b', 1),
(76, '18f30a9852', 'uploads/S10E_BLACK_CLEAR_VIEW_COVER.jpg', 'black', '578f72ef6c', 1),
(77, '18f30a9852', 'uploads/S10E_GREEN_CLEAR_VIEW_COVER.jpg', 'black', '34bba6d465', 1),
(78, '98ed01ec43', 'uploads/S10E_GREEN_PATTERN_COVER.jpg', 'black', '6547340324', 1),
(79, '98ed01ec43', 'uploads/S10E_WHITE_PATTERN_COVER.jpg', 'black', '30770d1da3', 1),
(80, '98ed01ec43', 'uploads/S10E_YELLOW_PATTERN_COVER.jpg', 'black', '464bd50658', 1),
(81, '929a97f3b3', 'uploads/S10_BLACK_SILICONE_COVER.jpg', 'black', '2418280d31', 0),
(82, '929a97f3b3', 'uploads/S10_NAVY_LEATHER_BACK_COVER.jpg', 'black', '641a5c0934', 1),
(83, '68bf5f9131', 'uploads/S10_BLACK_LED_VIEW_COVER.jpg', 'black', '290f6337d2', 1),
(84, '68bf5f9131', 'uploads/s10_green_led_view_cvr.jpg', 'black', '8e7a278623', 1),
(85, '73cf99238b', 'uploads/S10_GREEN_SILICONE_COVER.jpg', 'black', '89333d1b53', 0),
(86, '73cf99238b', 'uploads/S10_NAVY_SILICONE_COVER.jpg', 'black', '656601e91f', 1),
(87, '9471334985', 'uploads/S10_CLEAR_COVER.jpg', 'black', '1fd45cf94a', 1),
(88, '638be3ad1d', 'uploads/S10E_NAVY_PROTECTIVE_STANDING_COVER1.jpg', 'black', '469702982a', 1),
(89, '638be3ad1d', 'uploads/S10E_WHITE_PROTECTIVE_STANDING_COVER1.jpg', 'black', '34a8b6bacb', 1),
(90, '9d8c10bbcb', 'uploads/S10_GRAY_LEATHER_BACK_COVER.jpg', 'black', '12c6fa3d46', 1),
(91, '9d8c10bbcb', 'uploads/S10_GREEN_LEATHER_COVER.jpg', 'black', '8c751beae9', 1),
(92, '9d8c10bbcb', 'uploads/S10_NAVY_LEATHER_BACK_COVER1.jpg', 'black', '6694549b38', 1),
(93, '8051461952', 'uploads/S10_BLACK_CLEAR_VIEW_COVER.jpg', 'black', '201df97a27', 1),
(94, '8051461952', 'uploads/S10_LITE_YELLOW_CLEAR_VIEW_COVER.jpg', 'black', '1856d67fd0', 1),
(95, '17cc6498c4', 'uploads/S10E_GREEN_PATTERN_COVER1.jpg', 'black', '4146152979', 1),
(96, '17cc6498c4', 'uploads/S10E_YELLOW_PATTERN_COVER1.jpg', 'black', '3ac4ca9987', 1),
(97, '329eed7519', 'uploads/S10_PLUS_NAVY_LED_BACK_COVER.jpg', 'black', '751c346906', 1),
(98, '329eed7519', 'uploads/S10_PLUS_RED_LEATHER_BACK_COVER.jpg', 'black', '5ded5c25c3', 1),
(99, '148cc19765', 'uploads/S10_PLUS_BLACK_LED_VIEW_COVER.jpg', 'black', '45bf932182', 1),
(100, '148cc19765', 'uploads/s10_plus_green_led_view_cover.jpg', 'black', '60c1bb230c', 1),
(101, '946a46fba0', 'uploads/S10_PLUS_BLUE_SILICONE_COVER.jpg', 'black', '94d908402d', 1),
(102, '946a46fba0', 'uploads/S10_PLUS_GREEN_SILICONE_COVER.jpg', 'black', '2a05633963', 1),
(103, '946a46fba0', 'uploads/S10_PLUS_NAVY_SILICONE_COVER.jpg', 'black', '1434199f3a', 1),
(104, '56b89c59ce', 'uploads/S10_PLUS_CLEAR_COVER.jpg', 'black', '6e00a6a18d', 1),
(105, '3e593e8d84', 'uploads/S10_PLUS_NAVY_PROTECTIVE_STANDING_COVER.jpg', 'black', '2035608589', 1),
(106, '932ad8cd66', 'uploads/S10_PLUS_BLACK_LEATHER_BACK_COVER.jpg', 'black', '2f3a86a863', 1),
(107, '932ad8cd66', 'uploads/S10_PLUS_GRAY_LEATHER_BACK_CASE.jpg', 'black', '42c9c685a8', 1),
(108, '932ad8cd66', 'uploads/S10_PLUS_GREEN_LEATHER_BACK_COVER.jpg', 'black', '699a640fb6', 0),
(109, '932ad8cd66', 'uploads/S10_PLUS_NAVY_LEATHER_BACK_COVER.jpg', 'black', '59d0ad29db', 0),
(110, '20caa6b5c8', 'uploads/S10_PLUS_BLACK_CLEAR_VIEW_COVER.jpg', 'black', '76381edb28', 1),
(111, '20caa6b5c8', 'uploads/S10_PLUS_GREEN_CLEAR_VIEW_COVER.jpg', 'black', '19153d9aff', 0),
(112, '20caa6b5c8', 'uploads/S10_PLUS_WHITE_CLEAR_VIEW_COVER.jpg', 'black', '9e32037279', 1),
(113, '20caa6b5c8', 'uploads/S10_WHITE_CLEAR_VIEW_COVER.jpg', 'black', '516f0b2d4e', 1),
(114, '1add853bd8', 'uploads/S10_PLUS_WHITE_PATTERN_COVER.jpg', 'black', '2020f64823', 1),
(115, '1add853bd8', 'uploads/S10E_GREEN_PATTERN_COVER2.jpg', 'black', '9056efac56', 0),
(116, '1adccab4cf', 'uploads/GEAR_FIT_BLACK.jpg', 'black', '90a966f804', 1),
(117, '829ef79c2b', 'uploads/GEAR_FIT_E_BLACK.jpg', 'black', '498a2db899', 1),
(118, '829ef79c2b', 'uploads/GEAR_FIT_E_YELLOW.png', 'black', '69eb6f67f6', 1),
(119, '815047c378', 'uploads/GALAXY_ACTIVE_BLACK.jpg', 'black', '52fad1e844', 1),
(120, '815047c378', 'uploads/GALAXY_ACTIVE_SILVER.jpg', 'black', '6b01ed8615', 1),
(121, '14dfcecb8e', 'uploads/ULC-BATTERY.jpg', 'black', '826b502b1e', 1),
(122, '12e2dddf7e', 'uploads/au-battery.jpg', 'black', '5fba36e956', 1),
(123, '4c21571edb', 'uploads/GALAXY_BUDS_BLACK.jpg', 'black', '96dee6e63d', 1),
(124, '4c21571edb', 'uploads/GALAXY_BUDS_WHITE.jpg', 'black', '459dc67548', 1),
(125, '82924e339f', 'uploads/Pdpgallery-cy-shc5020d-za-600x600-C2-052016.png', 'black', '5d1ff04812', 1),
(126, '82924e339f', 'uploads/Pdpgallery-cy-shc5020d-za-600x600-C4-052016.png', 'black', '37f03fcdd5', 1),
(127, '98hu0c4033', 'https://image.samsung.com/africa_en/smartphones/galaxy-note9/buy/img_product_blue_01.png', 'OceanBlue', '98h789783', 1),
(128, '98hu0c4033', 'https://image.samsung.com/africa_en/smartphones/galaxy-note9/buy/img_product_blue_02.png', 'OceanBlue', '98h789i033', 1),
(129, '98hu0c4033', 'https://image.samsung.com/africa_en/smartphones/galaxy-note9/buy/img_product_blue_05.png', 'OceanBlue', '96yu784c4f2', 1),
(130, '98hu0c4033', 'https://image.samsung.com/africa_en/smartphones/galaxy-note9/buy/img_product_blue_06.png', 'OceanBlue', '2yt6y90294', 1),
(131, '98hu0c4033', 'https://image.samsung.com/africa_en/smartphones/galaxy-note9/buy/img_product_copper_01.png', 'MetallicCopper', '98h80c783', 1),
(132, '98hu0c4033', 'https://image.samsung.com/africa_en/smartphones/galaxy-note9/buy/img_product_copper_02.png', 'MetallicCopper', '9878yui033', 1),
(133, '98hu0c4033', 'https://image.samsung.com/africa_en/smartphones/galaxy-note9/buy/img_product_copper_03.png', 'MetallicCopper', '96h6ui4c4f2', 1),
(134, '98hu0c4033', 'https://image.samsung.com/africa_en/smartphones/galaxy-note9/buy/img_product_copper_05.png', 'MetallicCopper', '2yu6i0294', 1),
(135, '98ty0c4033', 'https://image.samsung.com/ae/smartphones/galaxy-s9/shop/buyingtool/product/product_galaxys9plus_titaniumgray_01.png', 'TitaniumGrey', '99b7yu40nj', 1),
(136, '98ty0c4033', 'https://image.samsung.com/ae/smartphones/galaxy-s9/shop/buyingtool/product/product_galaxys9plus_titaniumgray_02.png', 'TitaniumGrey', '56nbht6u6', 1),
(137, '98ty0c4033', 'https://image.samsung.com/ae/smartphones/galaxy-s9/shop/buyingtool/product/product_galaxys9plus_titaniumgray_04.png', 'TitaniumGrey', '67yh67876i', 1),
(138, '98ty0c4033', 'https://image.samsung.com/ae/smartphones/galaxy-s9/shop/buyingtool/product/product_galaxys9plus_lilacpurple_01.png', 'LilacPurple', '99bve6ynj', 1),
(139, '98ty0c4033', 'https://image.samsung.com/ae/smartphones/galaxy-s9/shop/buyingtool/product/product_galaxys9plus_lilacpurple_02.png', 'LilacPurple', '80bg5iu6', 1),
(140, '98ty0c4033', 'https://image.samsung.com/ae/smartphones/galaxy-s9/shop/buyingtool/product/product_galaxys9plus_lilacpurple_04.png', 'LilacPurple', '45tyb8o0i', 1),
(141, '98ty0784033', 'https://image.samsung.com/ae/smartphones/galaxy-s9/shop/buyingtool/product/product_galaxys9plus_titaniumgray_01.png', 'TitaniumGrey', '99b7yu49gt', 1),
(142, '98ty0784033', 'https://image.samsung.com/ae/smartphones/galaxy-s9/shop/buyingtool/product/product_galaxys9plus_titaniumgray_02.png', 'TitaniumGrey', '56nbht60y', 1),
(143, '98ty0784033', 'https://image.samsung.com/ae/smartphones/galaxy-s9/shop/buyingtool/product/product_galaxys9plus_titaniumgray_04.png', 'TitaniumGrey', '67yh6787j9', 1),
(144, '98ty0784033', 'https://image.samsung.com/ae/smartphones/galaxy-s9/shop/buyingtool/product/product_galaxys9plus_lilacpurple_01.png', 'LilacPurple', '99bve6yb7', 1),
(145, '98ty0784033', 'https://image.samsung.com/ae/smartphones/galaxy-s9/shop/buyingtool/product/product_galaxys9plus_lilacpurple_02.png', 'LilacPurple', '80bg5iu90', 1),
(146, '98ty0784033', 'https://image.samsung.com/ae/smartphones/galaxy-s9/shop/buyingtool/product/product_galaxys9plus_lilacpurple_04.png', 'LilacPurple', '45tyb8o78', 1),
(147, '98ty04033', 'https://images.samsung.com/is/image/samsung/ae-galaxy-a9-a920-sm-a920fzbdxsg-frontvitalityblue-126327448?$PD_GALLERY_L_JPG$', 'LemonadeBlue', '98tg33ioy', 1),
(148, '98ty04033', 'https://images.samsung.com/is/image/samsung/ae-galaxy-a9-a920-sm-a920fzbdxsg-backvitalityblue-126327440?$PD_GALLERY_L_JPG$', 'LemonadeBlue', '98tgi9bi0g', 1),
(149, '98ty04033', 'https://images.samsung.com/is/image/samsung/ae-galaxy-a9-a920-sm-a920fzbdxsg-rperspectivevitalityblue-126327441?$PD_GALLERY_L_JPG$', 'LemonadeBlue', '98t7fdsdo9', 1),
(150, '98ty04033', 'https://images.samsung.com/is/image/samsung/ae-galaxy-a9-a920-sm-a920fzidxsg-frontpink-126327465?$PD_GALLERY_L_JPG$', 'BubbleGumPink', '98tyb0qo3', 1),
(151, '98ty04033', 'https://images.samsung.com/is/image/samsung/ae-galaxy-a9-a920-sm-a920fzidxsg-backpink-126327457?$PD_GALLERY_L_JPG$', 'BubbleGumPink', '90hgi9bg33', 1),
(152, '98ty04033', 'https://images.samsung.com/is/image/samsung/ae-galaxy-a9-a920-sm-a920fzidxsg-rperspectivepink-126327458?$PD_GALLERY_L_JPG$', 'BubbleGumPink', '9io897fdsd', 1),
(153, '7d535b85e7', 'https://images.samsung.com/is/image/samsung/africa-en-galaxy-j4-j415-dualsim-sm-j415fzdfxfe-frontgold-120819001?$PD_GALLERY_L_JPG$', 'Gold', '69cf6b895e', 1),
(154, '7d535b85e7', 'https://images.samsung.com/is/image/samsung/africa-en-galaxy-j4-j415-dualsim-sm-j415fzdfxfe-backgold-120818984?$PD_GALLERY_L_JPG$', 'Gold', '631hgy6389', 1),
(155, '7d535b85e7', 'https://images.samsung.com/is/image/samsung/africa-en-galaxy-j4-j415-dualsim-sm-j415fzdfxfe-rperspectivegold-120818985?$PD_GALLERY_L_JPG$', 'Gold', '737d0489a9', 1),
(156, '6a9679c129', 'https://images.samsung.com/is/image/samsung/africa-en-galaxy-j4-j415-dualsim-sm-j415fzdfxfe-frontgold-120819001?$PD_GALLERY_L_JPG$', 'Gold', '69cyu7895e', 1),
(157, '6a9679c129', 'https://images.samsung.com/is/image/samsung/africa-en-galaxy-j4-j415-dualsim-sm-j415fzdfxfe-backgold-120818984?$PD_GALLERY_L_JPG$', 'Gold', '6316hgy389', 1),
(158, '6a9679c129', 'https://images.samsung.com/is/image/samsung/africa-en-galaxy-j4-j415-dualsim-sm-j415fzdfxfe-rperspectivegold-120818985?$PD_GALLERY_L_JPG$', 'Gold', '737d040hja9', 1),
(159, '6a9679c129', 'https://images.samsung.com/is/image/samsung/africa-en-galaxy-j4-sm-j410f-sm-j410fzbaxfe-frontblue-131180588?$PD_GALLERY_L_JPG$', 'Blue', '429e67h8d01', 1),
(160, '6a9679c129', 'https://images.samsung.com/is/image/samsung/africa-en-galaxy-j4-sm-j410f-sm-j410fzbaxfe-backblue-131180573?$PD_GALLERY_L_JPG$', 'Blue', '567cee3309', 1),
(161, '6a9679c129', 'https://images.samsung.com/is/image/samsung/africa-en-galaxy-j4-sm-j410f-sm-j410fzbaxfe-rperspectiveblue-131180574?$PD_GALLERY_L_JPG$', 'Blue', '6ca2e4bh72', 1),
(162, '282263c189', 'https://images.samsung.com/is/image/samsung/ae-galaxy-a7-a750-sm-a750fzdgxsg-frontgold-125961623?$PD_GALLERY_L_JPG$', 'Gold', '6b67ytbf2bd', 1),
(163, '282263c189', 'https://images.samsung.com/is/image/samsung/ae-galaxy-a7-a750-sm-a750fzdgxsg-backgold-125961612?$PD_GALLERY_L_JPG$', 'Gold', '29ba05t1787', 1),
(164, '282263c189', 'https://images.samsung.com/is/image/samsung/ae-galaxy-a7-a750-sm-a750fzdgxsg-rperspectivegold-125961613?$PD_GALLERY_L_JPG$', 'Gold', '18nm0b4ed42', 1),
(165, '3ece7bad37', 'https://images.samsung.com/is/image/samsung/africa-en-galaxy-a6plus-a605-sm-a605fzddxfe-frontgold-131544454?$PD_GALLERY_L_JPG$', 'Gold', '16e889ba6c', 1),
(166, '3ece7bad37', 'https://images.samsung.com/is/image/samsung/africa-en-galaxy-a6plus-a605-sm-a605fzddxfe-backgold-131544420?$PD_GALLERY_L_JPG$', 'Gold', '5d12bgj7107', 1),
(167, '3ece7bad37', 'https://images.samsung.com/is/image/samsung/africa-en-galaxy-a6plus-a605-sm-a605fzddxfe-rperspectivegold-131544424?$PD_GALLERY_L_JPG$', 'Gold', '7f030055f9', 1),
(168, '3ece7bad37', 'https://images.samsung.com/is/image/samsung/africa-en-galaxy-a6plus-a605-sm-a605fzddxfe-rperspectivegold-131544424?$PD_GALLERY_L_JPG$', 'Blue', '16ea00ba6c', 1),
(169, '3ece7bad37', 'https://images.samsung.com/is/image/samsung/africa-en-galaxy-a6plus-a605-sm-a605fzbdxfe-lperspectiveblue-131544365?$PD_GALLERY_L_JPG$', 'Blue', '5d1ee77107', 1),
(170, '3ece7bad37', 'https://images.samsung.com/is/image/samsung/africa-en-galaxy-a6plus-a605-sm-a605fzbdxfe-dynamicblue-131544369?$PD_GALLERY_L_JPG$', 'Blue', '7f03b055f9', 1),
(171, '28193b052c', 'https://images.samsung.com/is/image/samsung/ae-galaxy-j6plus-j610-sm-j610fzadxsg-frontgray-127297389?$PD_GALLERY_L_JPG$', 'Grey', '5eb67e0qa1', 1),
(172, '28193b052c', 'https://images.samsung.com/is/image/samsung/ae-galaxy-j6plus-j610-sm-j610fzadxsg-backgray-127297372?$PD_GALLERY_L_JPG$', 'Grey', '37f3vl0c79b', 1),
(173, '28193b052c', 'https://images.samsung.com/is/image/samsung/ae-galaxy-j6plus-j610-sm-j610fzadxsg-rperspectivegray-127297373?$PD_GALLERY_L_JPG$', 'Grey', '8d4007fec', 1),
(174, '28193b052c', 'https://images.samsung.com/is/image/samsung/ae-galaxy-j6plus-j610-sm-j610fzrdxsg-frontred-127297429?$PD_GALLERY_L_JPG$', 'Red', '5ue77e6ca1', 1),
(175, '28193b052c', 'https://images.samsung.com/is/image/samsung/ae-galaxy-j6plus-j610-sm-j610fzrdxsg-backred-127297415?$PD_GALLERY_L_JPG$', 'Red', '37fredc79b', 1),
(176, '28193b052c', 'https://images.samsung.com/is/image/samsung/ae-galaxy-j6plus-j610-sm-j610fzrdxsg-rperspectivered-127297416?$PD_GALLERY_L_JPG$', 'Red', '8d40ty09ec', 1),
(177, '37ba816b51', 'https://image.samsung.com/africa_en/smartphones/galaxy-note9/buy/img_product_blue_01.png', 'Blue', '98h9hz0x73', 1),
(178, '37ba816b51', 'https://image.samsung.com/africa_en/smartphones/galaxy-note9/buy/img_product_blue_02.png', 'Blue', '98h0q89i033', 1),
(179, '37ba816b51', 'https://image.samsung.com/africa_en/smartphones/galaxy-note9/buy/img_product_blue_05.png', 'Blue', '90lu784c4f2', 1),
(180, '37ba816b51', 'https://image.samsung.com/africa_en/smartphones/galaxy-note9/buy/img_product_blue_06.png', 'Blue', '2yt6m10294', 1),
(185, '4f2f5b7ea9', 'https://images.samsung.com/is/image/samsung/africa-en-galaxy-j2-j260-sm-j260fzpaxfe-frontpurple-118849404?$PD_GALLERY_L_JPG$', 'Purple', '8df6fn9e', 1),
(186, '4f2f5b7ea9', 'https://images.samsung.com/is/image/samsung/africa-en-galaxy-j2-j260-sm-j260fzpaxfe-backpurple-118849397?$PD_GALLERY_L_JPG$', 'Purple', '46tg78fde7', 1),
(187, '4f2f5b7ea9', 'https://images.samsung.com/is/image/samsung/africa-en-galaxy-j2-j260-sm-j260fzpaxfe-rperspectivepurple-118849393?$PD_GALLERY_L_JPG$', 'Purple', '7c87yu7de5', 1),
(188, '1065b27ce7', 'https://images.samsung.com/is/image/samsung/ae-galaxy-grand-prime-plus-sm-g532fmddxsg-frontgold-96283852?$PD_GALLERY_L_JPG$', 'Gold', '657b0qbxc177', 1),
(189, '1065b27ce7', 'https://images.samsung.com/is/image/samsung/ae-galaxy-grand-prime-plus-sm-g532fmddxsg-backgold-96283843?$PD_GALLERY_L_JPG$', 'Gold', '2abc60qsye9', 1),
(190, '1065b27ce7', 'https://images.samsung.com/is/image/samsung/ae-galaxy-grand-prime-plus-sm-g532fmddxsg-rperspectivegold-96283844?$PD_GALLERY_L_JPG$', 'Gold', '11637bjde58', 1),
(191, '42e197d270', 'https://images.samsung.com/is/image/samsung/africa_en-galaxy-tab-a-7-0-2016-t285-sm-t285nzsaxfe-000000001-front-silver?$PD_GALLERY_L_JPG$', 'Silver', '98bnq2c844', 1),
(192, '42e197d270', 'https://images.samsung.com/is/image/samsung/africa_en-galaxy-tab-a-7-0-2016-t285-sm-t285nzsaxfe-000000002-back-silver?$PD_GALLERY_L_JPG$', 'Silver', '50q9ac13f9', 1),
(193, '42e197d270', 'https://images.samsung.com/is/image/samsung/africa_en-galaxy-tab-a-7-0-2016-t285-sm-t285nzsaxfe-000000005-l-perspective-silver?$PD_GALLERY_L_JPG$', 'Silver', '83cye64020', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_stock`
--

CREATE TABLE `product_stock` (
  `p_s_id` int(11) NOT NULL,
  `p_s_product` varchar(30) NOT NULL,
  `p_s_stock` int(11) NOT NULL,
  `p_s_number` int(11) NOT NULL,
  `p_s_rand` varchar(30) NOT NULL,
  `p_s_reason` text NOT NULL,
  `p_s_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `product_stock`
--

INSERT INTO `product_stock` (`p_s_id`, `p_s_product`, `p_s_stock`, `p_s_number`, `p_s_rand`, `p_s_reason`, `p_s_date`) VALUES
(1, '98ty0784033', 10, 10, '7htyui876nj', 'New Stock', ''),
(2, '98hu0c4033', 10, 10, '98hu07tyu', 'New Stock', ''),
(6, '7d535b85e7', 10, 10, '699fd7520b', 'New Stock', '1552261896'),
(7, '98ty0c4033', 10, 10, '9e991f30e9', 'New Stock', '1552321502'),
(8, '98ty0784033', 9, 1, '5d0473a328', 'Transaction 545239599', '1554736024'),
(9, '98hu0c4033', 9, 1, '1d2f7f25e2', 'Transaction 545239599', '1554736025'),
(10, '282263c189', 10, 10, '98e9270866', 'New Stock', '1554892091'),
(11, '3ece7bad37', 10, 10, '89f7dbe793', 'New Stock', '1554894869'),
(12, '28193b052c', 10, 10, '8ca8213192', 'New Stock', '1554895293'),
(13, '6a9679c129', 10, 10, '5f2f1b023f', 'New Stock', '1554895509'),
(14, '4f2f5b7ea9', 10, 10, '2ddc326b1d', 'New Stock', '1554895696'),
(15, '1065b27ce7', 10, 10, '62c86978df', 'New Stock', '1554896060'),
(16, '42e197d270', 10, 10, '20a4a3f589', 'New Stock', '1554896816'),
(17, '8ff3211fcb', 10, 10, '6551866e10', 'New Stock', '1554897180'),
(18, '3c77c3d6d6', 10, 10, '2708b69530', 'New Stock', '1554897685'),
(19, '2723a24e06', 10, 10, '37a17ab27c', 'New Stock', '1554897996'),
(20, '37ba816b51', 5, 5, '16249ffdf1', 'New Stock', '1554900205'),
(21, '5f21188ddc', 10, 10, '44319858c5', 'New Stock', '1555327469'),
(22, '2cb83d83c6', 10, 10, '9806acfbcf', 'New Stock', '1555327819'),
(23, '6bd3e3ca7c', 10, 10, '218e62248f', 'New Stock', '1555328311'),
(24, '70d528bc88', 10, 10, '19d88ddf4a', 'New Stock', '1555328534'),
(25, '2b2877fb7e', 10, 10, '7b30c50f4c', 'New Stock', '1555328737'),
(26, '938c909cdf', 10, 10, '36bcd08907', 'New Stock', '1555329332'),
(27, '18f30a9852', 10, 10, '85f844e821', 'New Stock', '1555329652'),
(28, '98ed01ec43', 10, 10, '35037440fa', 'New Stock', '1555329970'),
(29, '929a97f3b3', 10, 10, '58582ee6d8', 'New Stock', '1555330436'),
(30, '68bf5f9131', 10, 10, '630b2d2e6d', 'New Stock', '1555330754'),
(31, '73cf99238b', 10, 10, '478e562ef5', 'New Stock', '1555331369'),
(32, '9471334985', 10, 10, '2812194f03', 'New Stock', '1555331888'),
(33, '638be3ad1d', 10, 10, '7e8e8e33b8', 'New Stock', '1555332604'),
(34, '9d8c10bbcb', 10, 10, '8067ec8ee5', 'New Stock', '1555332787'),
(35, '8051461952', 10, 10, '8c818d1fdd', 'New Stock', '1555333073'),
(36, '17cc6498c4', 10, 10, '47b1f83871', 'New Stock', '1555333203'),
(37, '329eed7519', 10, 10, '341e5cabbb', 'New Stock', '1555333305'),
(38, '148cc19765', 10, 10, '76e53044f5', 'New Stock', '1555333466'),
(39, '946a46fba0', 10, 10, '2af57ac664', 'New Stock', '1555338773'),
(40, '56b89c59ce', 10, 10, '10c3e0714f', 'New Stock', '1555339224'),
(41, '3e593e8d84', 10, 10, '6a73e52a00', 'New Stock', '1555339343'),
(42, '932ad8cd66', 10, 10, '74925b9f25', 'New Stock', '1555339523'),
(43, '20caa6b5c8', 10, 10, '43224d58f0', 'New Stock', '1555339725'),
(44, '1add853bd8', 10, 10, '241fa641b3', 'New Stock', '1555340161'),
(45, '1adccab4cf', 10, 10, '7dfd9d9bc0', 'New Stock', '1555340421'),
(46, '829ef79c2b', 10, 10, '262155cc94', 'New Stock', '1555340579'),
(47, '815047c378', 10, 10, '26523911e5', 'New Stock', '1555340920'),
(48, '14dfcecb8e', 10, 10, '5f12ee0d5d', 'New Stock', '1555341032'),
(49, '12e2dddf7e', 10, 10, '88f7bdbca3', 'New Stock', '1555341741'),
(50, '4c21571edb', 10, 10, '7177942804', 'New Stock', '1555341926'),
(51, '82924e339f', 10, 10, '5f65123987', 'New Stock', '1555351113'),
(52, '9177cd5052', 10, 10, '42166c93bb', 'New Stock', '1555351650'),
(53, '5591e5663b', 10, 10, '7ce9488d28', 'New Stock', '1555351862'),
(54, '92fbeb08c6', 10, 10, '783a54498e', 'New Stock', '1555351928'),
(55, '8efe1a3fe9', 10, 10, '50318a2de3', 'New Stock', '1555351975'),
(56, '25053aca50', 10, 10, '5433eaac90', 'New Stock', '1555352028'),
(57, '93ce55fc97', 10, 10, '11e5e65fd6', 'New Stock', '1555352072'),
(58, '8e017bdf4b', 10, 10, '92d86eaa5c', 'New Stock', '1555353052'),
(59, '671ec17c46', 10, 10, '8a0d50bcb0', 'New Stock', '1555353135'),
(60, '657e803c14', 10, 10, '125838f0c1', 'New Stock', '1555354928'),
(61, '31e8779d4f', 10, 10, '572e8b31a2', 'New Stock', '1555354990'),
(62, '91e054e489', 10, 10, '564bea469c', 'New Stock', '1555355017'),
(63, '23e7fb96f7', 10, 10, '5eeec0cf4f', 'New Stock', '1555355055'),
(64, '621e54d68b', 10, 10, '61b7e66650', 'New Stock', '1555355129'),
(65, '9671401868', 10, 10, '16bc74be73', 'New Stock', '1555355165'),
(66, '90cc00d9a9', 10, 10, '1cff0daeb6', 'New Stock', '1555355200'),
(67, '8814dd2938', 10, 10, '7788eb861d', 'New Stock', '1555355225'),
(68, '44085699b9', 10, 10, '32a7c0fd75', 'New Stock', '1555355254'),
(69, '5edb8349fa', 10, 10, '11385380bc', 'New Stock', '1555355309'),
(70, '194de86e68', 10, 10, '89c72905f8', 'New Stock', '1555355352'),
(71, '3897cdf492', 10, 10, '8bafe907e6', 'New Stock', '1555355387'),
(72, '8fe85fdcbf', 10, 10, '5f6fffe5eb', 'New Stock', '1555355417'),
(73, '8a32509ff1', 10, 10, '62168e7268', 'New Stock', '1555355463'),
(74, '4496c4c332', 10, 10, '3feef8120a', 'New Stock', '1555355698'),
(75, '1e1ed748d8', 10, 10, '323448091a', 'New Stock', '1555357351'),
(76, '973116e7fd', 10, 10, '33da22b090', 'New Stock', '1555357600');

-- --------------------------------------------------------

--
-- Table structure for table `rifugio_admin`
--

CREATE TABLE `rifugio_admin` (
  `r_a_id` int(11) NOT NULL,
  `r_a_email` varchar(60) NOT NULL,
  `r_a_password` varchar(200) NOT NULL,
  `r_a_rand` varchar(30) NOT NULL,
  `r_a_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `rifugio_admin`
--

INSERT INTO `rifugio_admin` (`r_a_id`, `r_a_email`, `r_a_password`, `r_a_rand`, `r_a_date`) VALUES
(1, 'udaleamehoj@gmail.com', '55c3b5386c486feb662a0785f340938f518d547f', '74y51gh48', '');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `sl_id` int(11) NOT NULL,
  `sl_image_url` varchar(200) NOT NULL,
  `sl_rand` varchar(40) NOT NULL,
  `sl_active` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`sl_id`, `sl_image_url`, `sl_rand`, `sl_active`) VALUES
(1, 'uploads/homekv-beyond-pc.jpg', '8d9a56de4b', 1),
(2, 'uploads/Val-Promo_Nigeria_d.jpg', '73a3fd5c8c', 1);

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE `submenu` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(200) NOT NULL,
  `s_link` varchar(200) NOT NULL,
  `s_header` varchar(200) NOT NULL,
  `s_rand` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `submenu`
--

INSERT INTO `submenu` (`s_id`, `s_name`, `s_link`, `s_header`, `s_rand`) VALUES
(1, 'Galaxy Note 9', 'http://localhost/rifugio/product/Galaxy-Note-9', '7htyui876nj', '326ce15288'),
(2, 'Galaxy S9 Plus', 'http://localhost/rifugio/product/Galaxy-S9-Plus', '7htyui876nj', '98d0e70c5c'),
(4, 'Galaxy S9', 'http://localhost/rifugio/product/Galaxy-S9', '7htyui876nj', '8556ac3f4c'),
(5, 'Galaxy Tab A 7.0', 'http://localhost/rifugio/product/Galaxy-Tab-A-7.0', '7htyui8767hg', '63dcb2d250'),
(6, 'Galaxy Tab E', 'http://localhost/rifugio/product/Galaxy-Tab-E', '7htyui8767hg', '134a9256e9'),
(10, 'Service Centers', 'http://localhost/rifugio/service-centers', '7httyt67nj', '7077c8ed29'),
(11, 'Financing (Pay small small)', 'http://localhost/rifugio/financing', '7httyt67nj', '617b7ee81e'),
(13, 'Tradeup and Save Up', 'http://localhost/rifugio/tradeup-and-save-up', '7httyt67nj', '4eba04f5fc');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_log`
--

CREATE TABLE `transaction_log` (
  `t_l_id` int(11) NOT NULL,
  `t_l_user` varchar(30) NOT NULL,
  `t_l_description` text NOT NULL,
  `t_l_product` varchar(30) NOT NULL,
  `t_l_quantity` int(11) NOT NULL,
  `t_l_amount_paid` double NOT NULL,
  `t_l_color` varchar(20) NOT NULL,
  `t_l_reference` varchar(30) NOT NULL,
  `t_l_rand` varchar(30) NOT NULL,
  `t_l_status` enum('pending','confirmed','dispatched','delivered') NOT NULL DEFAULT 'pending',
  `t_l_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `transaction_log`
--

INSERT INTO `transaction_log` (`t_l_id`, `t_l_user`, `t_l_description`, `t_l_product`, `t_l_quantity`, `t_l_amount_paid`, `t_l_color`, `t_l_reference`, `t_l_rand`, `t_l_status`, `t_l_date`) VALUES
(1, '7613381512', 'Galaxy S9Color: Lilac Purple(x1)', '98ty0784033', 1, 100000, 'Lilac Purple', '152642518', '3a6f5d933e', 'delivered', '1551867720'),
(2, '7613381512', 'Galaxy S9Color: Lilac Purple(x1)', '98ty0784033', 1, 100000, 'Lilac Purple', '742177196', '1870e4b38e', 'pending', '1551867948'),
(3, '7613381512', 'Galaxy S9Color: Lilac Purple(x1)', '98ty0784033', 1, 100000, 'Lilac Purple', '514634914', '1358609b0a', 'pending', '1551868099'),
(4, '7613381512', 'Galaxy S9Color: Lilac Purple(x1)', '98ty0784033', 1, 100000, 'Lilac Purple', '764290480', '5a5af2d0b6', 'pending', '1551868745'),
(5, '7613381512', 'Galaxy S9 - Color: Lilac Purple (x1)', '98ty0784033', 1, 100000, 'Lilac Purple', '99557093', '90df1c1cfa', 'confirmed', '1551869732'),
(6, '7613381512', 'Galaxy S9 - Color: Lilac Purple (x1)', '98ty0784033', 1, 100000, 'Lilac Purple', '545239599', '6b0f35cfd7', 'confirmed', '1554736024'),
(7, '7613381512', 'Galaxy Note 9 - Color: Metallic Copper (x1)', '98hu0c4033', 1, 100000, 'Metallic Copper', '545239599', '8f67cea42b', 'confirmed', '1554736024');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_firstname` varchar(50) NOT NULL,
  `u_lastname` varchar(50) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_password` varchar(200) NOT NULL,
  `u_dob` varchar(50) NOT NULL,
  `u_address` text NOT NULL,
  `u_phone` varchar(40) NOT NULL,
  `u_verified` tinyint(4) NOT NULL DEFAULT '0',
  `u_country` varchar(50) NOT NULL DEFAULT 'Nigeria',
  `u_active` tinyint(4) NOT NULL DEFAULT '1',
  `u_rand` varchar(50) NOT NULL,
  `u_gentoken` varchar(200) NOT NULL,
  `u_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_firstname`, `u_lastname`, `u_email`, `u_password`, `u_dob`, `u_address`, `u_phone`, `u_verified`, `u_country`, `u_active`, `u_rand`, `u_gentoken`, `u_date`) VALUES
(1, 'Akinbode', 'Akinlolu', 'udaleamehoj@gmail.com', 'd40ee4b23352d1f5036eb1c398b81716cc91237a', '931730400', '', '', 0, 'Nigeria', 1, '6dc44c4033', 'ss_fg_0897114523f71b55e5c252606c7724a7', '1551654032'),
(9, 'Akinbode', 'Akinlolu', 'weezykon@gmail.com', '75f0f7a1f464efd5dd9ab7e01f4358cd85f41996', '745106400', '10, Milani estate, off coast road, Lagos State', '08141160412', 0, 'Nigeria', 1, '7613381512', 'ss_fg_cf6b076341f95dce096807e8a7edc01f', '1551655131');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`ra_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`rc_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `homepage_banners`
--
ALTER TABLE `homepage_banners`
  ADD PRIMARY KEY (`hb_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_c_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`p_i_id`);

--
-- Indexes for table `product_stock`
--
ALTER TABLE `product_stock`
  ADD PRIMARY KEY (`p_s_id`);

--
-- Indexes for table `rifugio_admin`
--
ALTER TABLE `rifugio_admin`
  ADD PRIMARY KEY (`r_a_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`sl_id`);

--
-- Indexes for table `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `transaction_log`
--
ALTER TABLE `transaction_log`
  ADD PRIMARY KEY (`t_l_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `ra_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `rc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `headers`
--
ALTER TABLE `headers`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `homepage_banners`
--
ALTER TABLE `homepage_banners`
  MODIFY `hb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `p_i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT for table `product_stock`
--
ALTER TABLE `product_stock`
  MODIFY `p_s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `rifugio_admin`
--
ALTER TABLE `rifugio_admin`
  MODIFY `r_a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `sl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `submenu`
--
ALTER TABLE `submenu`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `transaction_log`
--
ALTER TABLE `transaction_log`
  MODIFY `t_l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
