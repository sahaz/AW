-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 28, 2015 at 04:38 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ApertureWorld`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `category_image`) VALUES
(11, 'kjaskjdas', '2826557341_26cfaedddc_o.jpg'),
(12, 'lkajsdlkajsdl', 'Brilliant-Examples-of-Photo-Manipulation-Art-013.jpg'),
(13, 'ASEDazasdasd', 'coolclouds5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
`id` int(11) NOT NULL,
  `contact_us` longtext NOT NULL,
  `seo_title` varchar(100) NOT NULL,
  `seo_keyword` varchar(100) NOT NULL,
  `metadata` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`id` int(11) NOT NULL,
  `headline` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `news` longtext NOT NULL,
  `headlinepic` varchar(255) NOT NULL,
  `seo_keyword` varchar(255) NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `metadata` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `headline`, `date`, `location`, `news`, `headlinepic`, `seo_keyword`, `seo_title`, `metadata`) VALUES
(3, 'Canon announces EOS-1D X ', ' Oct 18, 2011', 'Tokyo, Japan', 'The Canon EOS-1D X is the latest in the company''s professional range of DSLRs. Its job is to replace both the sports-orientated 1D series and the high-resolution, studio-focused 1DS range of cameras. As is usual for upgrades in this class of camera, the changes are incremental and subtle but aim to raise the bar of what is possible.\n\nThe biggest specification change to the 1D X is its new sensor - an 18MP full-frame CMOS chip capable of shooting at 12 frames per second. This represents a big change over the 1D Mk IV (it represents a move away from the smaller APS-H format that Canon has previously used in its sports cameras), and a decrease in pixel count compared to the 1DS series. However, as Rick Berk, Technical Specialist in Canon USA''s Pro Engineering and Solutions Division says: ''there''s more to image quality than just resolution.''\n\nThe move from APS-H up to full-frame is enabled by a sensor with faster data readout explains Chuck Westfall, Technical Advisor in Canon USA''s Pro Engineering and Solutions Division: ''The new sensor has 16-channel, dual line readout, compared to 8-channel, single line designs in the previous generation of chips.'' This lets the company offer a large sensor (and the low-light capability that brings) for 1DS users, with the fast capture speeds that current 1D Mk IV users need. ''It''s clear the time has come for the 1DX to replace the whole 1D series,'' says Westfall.\n\nUnder the skin, the big change is the more sophisticated metering sensor. A move from the 1D Mk IV''s sensor to a new 100,000 pixel unit affords the camera a much better understanding of the scene and this information is fed into the camera''s autofocus system to improve the quality of its AF tracking. This isn''t a new idea (Nikon''s sports cameras have done something similar for several generations), but it''s a sensible way of improving what''s already an impressive system.', 'canon EOS1DX.jpg', 'Canon  EOS-1D X dslr camera ', 'Canon announces EOS-1D X ', 'Canon announces EOS-1D X  Canon  EOS-1D X dslr camera '),
(4, 'Canon announces EOS 5D Mark II', 'September 17, 2008', 'Bangkok, Thailand', 'The Canon EOS 5D Mark II is a 21.1-megapixel full-frame CMOS digital single-lens reflex camera made by Canon. It succeeds the EOS 5D and was announced on September 17, 2008.[2] The 5D Mark II was the first digital camera used for an official U.S. Presidential portrait. 21.1 megapixel (5,616 x 3,744 pixels), compared to 12.8 megapixels (4,368 x 2,912 pixels)\nDIGIC 4 image processor, compared to DIGIC II\n100-6400 ISO (expandable to L (50), H1 (12800), H2 (25600)), compared to 100-1600 (expandable to L (50), H (3200))\n3.9 frames per second continuous shooting (78 JPEG or 13 Raw in a single burst), compared to 3 fps (60 JPEG or 17 Raw)\nSmall Raw modes: sRAW1 mode (10 megapixel/3861 x 2574 pixels), sRAW2 mode (5.2 megapixel/2784 x 1856 pixels)\n98% viewfinder coverage with 0.71x magnification, compared to 96% coverage\nLarger 3.0-inch (76 mm) LCD display with 640 x 480 VGA resolution (307,200 pixels/921,600 dots), compared to 2.5-inch (64 mm)\n1800mAh LP-E6 battery, compared to 1390mAh BP-511A\n[edit] Movie recording full HD at 1920x1080 and SDTV at 640x480 resolution.\nMonaural microphone for audio during video recording, speaker for playback and microphone jack for external stereo microphone\nLive preview with ExpSim LV ''exposure simulation'' live preview (full exposure preview control utilizing ExpSim LV, a first for video in a DSLR)\nLive preview with contrast-detect autofocus\nHDMI video output for live preview or playing clips and images on an external monitor via Type C MiniHDMI port\nDust reduction system to perform automatic sensor cleaning\nBattery management software', 'canon_eos_5d.jpg', 'Canon  EOS 5D Mark II camera dslr', 'Canon  EOS 5D Mark II', 'Canon  EOS 5D Mark II camera dslr Canon announces EOS 5D Mark II'),
(5, 'Canon announces new 7D', 'Dec 10, 2010', 'New York, USA', 'The Canon 7D is Canon''s most advanced camera ever, which makes sense because it''s the newest. The 7D is Canon''s best-ever mini-format (1.6x) DSLR. It''s not the best DSLR because it only has a small (1.6x) sensor, but that''s also why it costs a lot less than the full-frame 5D Mark II, which is Canon''s best DSLR. (Canon''s 1D and 1Ds models cost more and weigh more, but aren''t better unless you need speed.)\n\nThe Canon 7D especially stands out because it has the best ergonomics ever in any Canon DSLR. It is a completely new design, eclipsing the old Canon 50D, which was basically the same camera as 2003''s Canon 10D.\n\nWhat really stands out about the 7D''s handling are its greatly improved power switch. This seems silly, but is actually very important, because never again will you raise a 7D to your eye and miss a picture because your camera turned itself off, or deactivated its rear control dial, as the 5D Mark II and the 50D often do because of their defective power switch designs.\n\nAnother high point of the 7D are its magnificent three Total Recall camera-state memories, recalled instantly simply by turning the top dial. This is the same as the 5D Mark II.\n\nAnother ergonomic high-point is the "quick control" screen, which allows setting everything about the 7D right on the back of the camera without having to resort to menus or fiddling with the top LCD, again, just like the 5D Mark II. After using the 7D for a week, I thought it was my 5D Mark II.\n\nThe 7D''s movie mode works great. Canon finally added controls on the back of the 7D so that movies are easy to shoot. This is completely different from the older 5D Mark II which requires a ton of fiddling. The 5D Mark II doesn''t have any movie controls on its body, which is largely a carry-over from the original 5D which didn''t shoot movies.\n\nOddly, the 7D weighs 0.3 oz. (7g) more than a full-frame 5D Mark II. Both cameras feel about the same: they feel as if they are half plastic, which they are. You''ll never confuse this with a real pro camera like a Nikon D3 or a 1D Mark IV.\n\nMore oddly, the things I like the least about the 7D are its biggest selling points to people who haven''t actually shot with it. I prefer the autofocus system of older cameras, and I prefer the light metering of older cameras like the 5D Mark II.', 'gal_503.jpg', 'Canon 7D', 'Canon announces new 7D ', 'Canon 7D camera dslr'),
(6, 'Canon announces model Canon 50D', 'October 25, 2008', 'London, UK', 'The EOS 50D was announced on 26 August 2008. It is Canon''s latest DSLR for serious amateurs, especially those shooting sports and action on a $1,399 budget. If you''re a serious every-weekend sports shooter and have less than $1,600 to spend on a DSLR body, you want the new 50D.\n\nThe Canon 50D has an LCD far superior to anything ever unleashed on any Canon SLR. The 50D''s LCD is probably on par with the Nikon D300, D700 and D3.\n\nAll previous Canon 3" LCDs suck, even on the $8,000 1Ds Mk III, because they have so few pixels that they look coarse and grainy. If all you''ve ever shot are Canon SLRs, the 50D''s LCD alone should be enough reason to dumpster your 40D and order one of these pronto.', 'canon50D.jpg', 'Canon Canon50D dslr camera', 'Canon announces model Canon 50D', 'Canon announces model Canon 50D camera dslr');

-- --------------------------------------------------------

--
-- Table structure for table `ourteam`
--

CREATE TABLE IF NOT EXISTS `ourteam` (
`id` int(11) NOT NULL,
  `about_us` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `seo_title` varchar(100) NOT NULL,
  `seo_keyword` varchar(100) NOT NULL,
  `metadata` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_description` longtext NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `seo_keyword` varchar(100) NOT NULL,
  `seo_title` varchar(100) NOT NULL,
  `metadata` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_description`, `product_price`, `product_image`, `product_category`, `seo_keyword`, `seo_title`, `metadata`) VALUES
(2, 'asdas', 'asdasd', '12312312', 'timeliner.hot.landscape.jpg', 'ASEDazasdasd', 'asdasd', 'asdasd', 'sdasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
`id` int(11) NOT NULL,
  `slider_image` varchar(100) NOT NULL,
  `image_description` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider_image`, `image_description`) VALUES
(4, 'timeliner.hot.landscape.jpg', 'red landscape'),
(5, 'timeliner.landscape2.jpg', 'orange landscape'),
(6, 'timeliner.landscape3.jpg', 'blue landscape');

-- --------------------------------------------------------

--
-- Table structure for table `todaysdeal`
--

CREATE TABLE IF NOT EXISTS `todaysdeal` (
`id` int(11) NOT NULL,
  `deal_title` varchar(150) NOT NULL,
  `deal_price` int(100) NOT NULL,
  `deal_pic` varchar(150) NOT NULL,
  `seo_keyword` varchar(100) NOT NULL,
  `seo_title` varchar(100) NOT NULL,
  `metadata` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `todaysdeal`
--

INSERT INTO `todaysdeal` (`id`, `deal_title`, `deal_price`, `deal_pic`, `seo_keyword`, `seo_title`, `metadata`) VALUES
(2, 'Canon 5D Mark II', 1200, 'canon_eos_5d.jpg', 'caon', 'canon', 'canon'),
(3, 'Canon Lens 18-55', 200, 'icam..jpg', 'Canon Lens 18-55', 'Canon Lens 18-55', 'Canon Lens 18-55'),
(4, 'nikon tripod', 100, 'DSLR.jpg', 'nikon', 'nikon tripod', 'nikon');

-- --------------------------------------------------------

--
-- Table structure for table `tutorial`
--

CREATE TABLE IF NOT EXISTS `tutorial` (
`id` int(11) NOT NULL,
  `tutorial_title` varchar(255) NOT NULL,
  `tutorial_content` longtext NOT NULL,
  `tutorial_image` varchar(255) NOT NULL,
  `seo_keyword` varchar(100) NOT NULL,
  `seo_title` varchar(100) NOT NULL,
  `metadata` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `access_level` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `address`, `email`, `password`, `access_level`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'Sammy Rono', 'Austin', 'Sammy@tx.com', '4385695633f8c6c8ab52592092cecf04', 'user'),
(3, 'Sahaj Bhattarai', 'Dhumbarahi', 'sahaz@gmail.com', 'f4fb042b00c1901bd684041c45064028', 'client'),
(4, 'Donjon', 'america', 'asd@asd.con', '7815696ecbf1c96e6894b779456d330e', 'client'),
(5, 'kjasjkdf', 'kjasdjkhasdf', 'jkahsd@kjahsd.com', 'e527b9956cc17153644c320a10233244', 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourteam`
--
ALTER TABLE `ourteam`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todaysdeal`
--
ALTER TABLE `todaysdeal`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutorial`
--
ALTER TABLE `tutorial`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ourteam`
--
ALTER TABLE `ourteam`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `todaysdeal`
--
ALTER TABLE `todaysdeal`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tutorial`
--
ALTER TABLE `tutorial`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
