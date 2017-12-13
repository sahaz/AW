-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2017 at 03:03 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apertureworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `category_image`) VALUES
(11, 'DSLRS', '103086564_1.jpg'),
(12, 'Lens', 'download (1).jpg'),
(13, 'Tripods', '362ea832128f769a0eb0c462962e0aff--camera-tripod-carbon-fiber.jpg'),
(14, 'Accessories', '2dddd419cb4ee8d796e952528e0e5536--canon-accessories-eos-rebel.jpg'),
(15, 'Flash', 'flash.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `headline` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `news` longtext NOT NULL,
  `headlinepic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `headline`, `date`, `location`, `news`, `headlinepic`) VALUES
(3, 'Canon announces EOS-1D X ', ' Oct 18, 2011', 'Tokyo, Japan', '<p>The Canon EOS-1D X is the latest in the company&#39;s professional range of DSLRs. Its job is to replace both the sports-orientated 1D series and the high-resolution, studio-focused 1DS range of cameras. As is usual for upgrades in this class of camera, the changes are incremental and subtle but aim to raise the bar of what is possible. The biggest specification change to the 1D X is its new sensor - an 18MP full-frame CMOS chip capable of shooting at 12 frames per second. This represents a big change over the 1D Mk IV (it represents a move away from the smaller APS-H format that Canon has previously used in its sports cameras), and a decrease in pixel count compared to the 1DS series. However, as Rick Berk, Technical Specialist in Canon USA&#39;s Pro Engineering and Solutions Division says: &#39;there&#39;s more to image quality than just resolution.&#39; The move from APS-H up to full-frame is enabled by a sensor with faster data readout explains Chuck Westfall, Technical Advisor in Canon USA&#39;s Pro Engineering and Solutions Division: &#39;The new sensor has 16-channel, dual line readout, compared to 8-channel, single line designs in the previous generation of chips.&#39; This lets the company offer a large sensor (and the low-light capability that brings) for 1DS users, with the fast capture speeds that current 1D Mk IV users need. &#39;It&#39;s clear the time has come for the 1DX to replace the whole 1D series,&#39; says Westfall. Under the skin, the big change is the more sophisticated metering sensor. A move from the 1D Mk IV&#39;s sensor to a new 100,000 pixel unit affords the camera a much better understanding of the scene and this information is fed into the camera&#39;s autofocus system to improve the quality of its AF tracking. This isn&#39;t a new idea (Nikon&#39;s sports cameras have done something similar for several generations), but it&#39;s a sensible way of improving what&#39;s already an impressive system.</p>', 'eos 1dx.jpg'),
(4, 'Canon announces EOS 5D Mark II', 'September 17, 2008', 'Bangkok, Thailand', '<p>The Canon EOS 5D Mark II is a 21.1-megapixel full-frame CMOS digital single-lens reflex camera made by Canon. It succeeds the EOS 5D and was announced on September 17, 2008.[2] The 5D Mark II was the first digital camera used for an official U.S. Presidential portrait. 21.1 megapixel (5,616 x 3,744 pixels), compared to 12.8 megapixels (4,368 x 2,912 pixels) DIGIC 4 image processor, compared to DIGIC II 100-6400 ISO (expandable to L (50), H1 (12800), H2 (25600)), compared to 100-1600 (expandable to L (50), H (3200)) 3.9 frames per second continuous shooting (78 JPEG or 13 Raw in a single burst), compared to 3 fps (60 JPEG or 17 Raw) Small Raw modes: sRAW1 mode (10 megapixel/3861 x 2574 pixels), sRAW2 mode (5.2 megapixel/2784 x 1856 pixels) 98% viewfinder coverage with 0.71x magnification, compared to 96% coverage Larger 3.0-inch (76 mm) LCD display with 640 x 480 VGA resolution (307,200 pixels/921,600 dots), compared to 2.5-inch (64 mm) 1800mAh LP-E6 battery, compared to 1390mAh BP-511A [edit] Movie recording full HD at 1920x1080 and SDTV at 640x480 resolution. Monaural microphone for audio during video recording, speaker for playback and microphone jack for external stereo microphone Live preview with ExpSim LV &#39;exposure simulation&#39; live preview (full exposure preview control utilizing ExpSim LV, a first for video in a DSLR) Live preview with contrast-detect autofocus HDMI video output for live preview or playing clips and images on an external monitor via Type C MiniHDMI port Dust reduction system to perform automatic sensor cleaning Battery management software</p>', 'canon_0020c003_eos_rebel_t6s_dslr_1116104.jpg'),
(5, 'Canon announces new 7D', 'Dec 10, 2010', 'New York, USA', '<p>The Canon 7D is Canon&#39;s most advanced camera ever, which makes sense because it&#39;s the newest. The 7D is Canon&#39;s best-ever mini-format (1.6x) DSLR. It&#39;s not the best DSLR because it only has a small (1.6x) sensor, but that&#39;s also why it costs a lot less than the full-frame 5D Mark II, which is Canon&#39;s best DSLR. (Canon&#39;s 1D and 1Ds models cost more and weigh more, but aren&#39;t better unless you need speed.) The Canon 7D especially stands out because it has the best ergonomics ever in any Canon DSLR. It is a completely new design, eclipsing the old Canon 50D, which was basically the same camera as 2003&#39;s Canon 10D. What really stands out about the 7D&#39;s handling are its greatly improved power switch. This seems silly, but is actually very important, because never again will you raise a 7D to your eye and miss a picture because your camera turned itself off, or deactivated its rear control dial, as the 5D Mark II and the 50D often do because of their defective power switch designs. Another high point of the 7D are its magnificent three Total Recall camera-state memories, recalled instantly simply by turning the top dial. This is the same as the 5D Mark II. Another ergonomic high-point is the &quot;quick control&quot; screen, which allows setting everything about the 7D right on the back of the camera without having to resort to menus or fiddling with the top LCD, again, just like the 5D Mark II. After using the 7D for a week, I thought it was my 5D Mark II. The 7D&#39;s movie mode works great. Canon finally added controls on the back of the 7D so that movies are easy to shoot. This is completely different from the older 5D Mark II which requires a ton of fiddling. The 5D Mark II doesn&#39;t have any movie controls on its body, which is largely a carry-over from the original 5D which didn&#39;t shoot movies. Oddly, the 7D weighs 0.3 oz. (7g) more than a full-frame 5D Mark II. Both cameras feel about the same: they feel as if they are half plastic, which they are. You&#39;ll never confuse this with a real pro camera like a Nikon D3 or a 1D Mark IV. More oddly, the things I like the least about the 7D are its biggest selling points to people who haven&#39;t actually shot with it. I prefer the autofocus system of older cameras, and I prefer the light metering of older cameras like the 5D Mark II.</p>', 'images.jpg'),
(6, 'Canon announces model Canon 50D', 'October 25, 2008', 'London, UK', '<p>The EOS 50D was announced on 26 August 2008. It is Canon&#39;s latest DSLR for serious amateurs, especially those shooting sports and action on a $1,399 budget. If you&#39;re a serious every-weekend sports shooter and have less than $1,600 to spend on a DSLR body, you want the new 50D. The Canon 50D has an LCD far superior to anything ever unleashed on any Canon SLR. The 50D&#39;s LCD is probably on par with the Nikon D300, D700 and D3. All previous Canon 3&quot; LCDs suck, even on the $8,000 1Ds Mk III, because they have so few pixels that they look coarse and grainy. If all you&#39;ve ever shot are Canon SLRs, the 50D&#39;s LCD alone should be enough reason to dumpster your 40D and order one of these pronto.</p>', 'canonm5handson-02.jpeg'),
(7, 'Sony a7R III Weather Sealing: A Closer Examination', '23rd October, 2017', 'Tokyo, Japan', '<p>When we finished&nbsp;<a href=\"https://petapixel.com/2017/12/04/teardown-new-sony-a7r-iii/\">our teardown of the a7R III</a>, we didn&rsquo;t anticipate just how badly people wanted to see the new camera body&rsquo;s weather sealing.<br /><br />This may seem like a no-brainer since weather sealing is something avid Sony mirrorless camera shooters like myself are pining for (not that it&rsquo;s stopped my A6000 from weathering the occasional shower). But, the truth is that the a7R III is not sealed the same way as an underwater camera or the more extreme weatherproof DSLRs.</p><p>If you open the new Sony up, you won&rsquo;t find gaskets or airtight rubber seals on each individual button and screw like you might on a Pentax. Instead, Sony appears to have taken a subtler approach to protecting their latest full frame from the elements. A mix of some rubber, a tight fit, and rather large lips at the edge of each piece of the chassis seem to do the job when it comes to keeping the rain out of sensitive components.</p><p>The first thing we noticed was this long edge that the top cover attaches to the main body by.</p>', '58mm-Petal-Lens-Hood-flower-lens-hood-For-DSLR-Camera-Sigma-Tamron-Minolta-Olympus-and-etc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ourteam`
--

CREATE TABLE `ourteam` (
  `id` int(11) NOT NULL,
  `about_us` longtext NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ourteam`
--

INSERT INTO `ourteam` (`id`, `about_us`, `image`) VALUES
(1, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut euismod elit placerat, vulputate turpis in, tincidunt massa. Mauris vel orci justo. Nunc pretium, augue in sodales molestie, purus ligula dignissim nulla, id dapibus eros justo quis ante. Aenean ut libero ligula. Donec pellentesque facilisis metus ut vestibulum. In sed sagittis leo. Suspendisse quis ligula mattis, scelerisque est quis, condimentum magna. Sed ac purus ut diam sodales egestas et vel odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi elementum ut mi et suscipit. Duis at erat mi. Vestibulum in lectus in turpis aliquam aliquet. Curabitur quis nibh blandit, porta lorem ac, molestie enim.</p><p>Aenean ultrices, velit sed pretium dignissim, ligula odio aliquam orci, eu venenatis nisi est finibus lorem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent sollicitudin tempor arcu. Pellentesque sit amet ullamcorper nisl, quis vestibulum turpis. Phasellus consequat, felis in rhoncus viverra, urna leo malesuada ex, in placerat est ipsum et lacus. Mauris rutrum at neque vitae malesuada. Mauris maximus enim libero, in gravida metus porta ut. Donec vel turpis ac metus scelerisque accumsan. In nec elit nunc. Morbi vitae vehicula urna. Donec nunc ligula, pellentesque ut felis ac, porttitor varius est. Suspendisse ac consequat dolor. Duis bibendum elit mauris, et facilisis ligula placerat in. Pellentesque felis turpis, molestie non eros sit amet, dapibus feugiat quam.</p><p>Integer dolor diam, aliquet a placerat quis, mattis et mi. Morbi vel accumsan dolor. Ut tristique magna id nulla lacinia bibendum. Suspendisse sollicitudin eros iaculis, auctor enim ac, gravida est. Nulla dignissim lacinia ex, ut sagittis justo condimentum eu. Nam fermentum dolor sit amet pharetra varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempus sapien et lacinia tristique. Maecenas tincidunt purus non lectus posuere semper. Donec vitae suscipit dui. Proin laoreet justo et lacus iaculis, vitae pretium magna commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur facilisis, turpis in rhoncus vulputate, libero urna laoreet mauris, nec posuere sapien odio eget diam. Morbi aliquam, lectus et scelerisque faucibus, purus enim ornare libero, eu consectetur velit purus eget arcu. Suspendisse luctus pellentesque suscipit.</p>', 'photography-camera-logo-cartoon-aperture-48372954.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_description` longtext NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_category` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_description`, `product_price`, `product_image`, `product_category`) VALUES
(3, 'Canon EOS 5D M 1', '<p>&nbsp;</p><p>The Canon 1DX is a professional level camera with pro level features to match. It has a magnesium alloy, weather sealed body (featuring a vertical grip with an additional shutter button) that houses an 18MP full-frame CMOS sensor. The viewfinder is large and provides a 61 point autofocus system which is great for capturing action. Another great feature for action shooting is the staggering 12 fps burst rate that this camera is capable of. On the back there is a 3.2&#39;&#39; 1,040,00 dot screen on the back, which is more than enough for looking at previous pictures as well as navigating through menus. It also features two CF card slots for extra storage while on the job. This camera is great at all types of photography, but espeically studio and action work. It can handle any job you throw at it.</p><p><strong>Additional Information</strong></p><p>The Canon Eos 1DX contains a full-frame, 18.1MP CMOS sensor that features pixels that are 1.25 microns larger than the pixels found in Canon&#39;s EOS-1D Mark IV, and 0.55 microns larger than the pixels found in Canons EOS-5D Mk II, which combined with gapless micro lenses, should translate into greater dynamic range, less noise and smoother shadow-to-highlight transitions than both of the aforementioned cameras. As with all EOS 1D-series cameras, the 1DX features 14-bit A/D conversion for optimal color and tonal range.<br />&nbsp;</p><p>Canon has brought the best of the EOS-1D Series of digital cameras into one phenomenal model: the new flagship of the EOS line, the EOS-1D X. Its full-frame 18.1 Megapixel CMOS sensor and all-new Dual DIGIC 5+ Image Processors deliver high quality image capture at up to 12 fps (14 fps in Super High Speed Mode) and a powerful ISO range of 100 - 51200 (up to 204800 in H2 mode) provides sharp, low-noise images even in the dimmest low-light conditions. An all-new, 61-Point High-Density Reticular AF and 100,000-pixel RGB Metering Sensor that uses a dedicated DIGIC 4 Image Processor, makes the EOS-1D X reach new levels of focus speed and accuracy delivering advanced tracking even for the most challenging shooting situations. Taken all together, the EOS-1D X&#39;s improved HD video capture, numerous connectivity options, combination of processing power and durable construction, including shutter durability tested to 400,000 cycles, make it the ultimate EOS.</p><p>&nbsp;</p>', '2000', '51qZhkZHagL.jpg', 11),
(4, 'Canon 6D', '<p>The Canon 1DX is a professional level camera with pro level features to match. It has a magnesium alloy, weather sealed body (featuring a vertical grip with an additional shutter button) that houses an 18MP full-frame CMOS sensor. The viewfinder is large and provides a 61 point autofocus system which is great for capturing action. Another great feature for action shooting is the staggering 12 fps burst rate that this camera is capable of. On the back there is a 3.2&#39;&#39; 1,040,00 dot screen on the back, which is more than enough for looking at previous pictures as well as navigating through menus. It also features two CF card slots for extra storage while on the job. This camera is great at all types of photography, but espeically studio and action work. It can handle any job you throw at it.</p><p><strong>Additional Information</strong></p><p>The Canon Eos 1DX contains a full-frame, 18.1MP CMOS sensor that features pixels that are 1.25 microns larger than the pixels found in Canon&#39;s EOS-1D Mark IV, and 0.55 microns larger than the pixels found in Canons EOS-5D Mk II, which combined with gapless micro lenses, should translate into greater dynamic range, less noise and smoother shadow-to-highlight transitions than both of the aforementioned cameras. As with all EOS 1D-series cameras, the 1DX features 14-bit A/D conversion for optimal color and tonal range.<br />&nbsp;</p><p>Canon has brought the best of the EOS-1D Series of digital cameras into one phenomenal model: the new flagship of the EOS line, the EOS-1D X. Its full-frame 18.1 Megapixel CMOS sensor and all-new Dual DIGIC 5+ Image Processors deliver high quality image capture at up to 12 fps (14 fps in Super High Speed Mode) and a powerful ISO range of 100 - 51200 (up to 204800 in H2 mode) provides sharp, low-noise images even in the dimmest low-light conditions. An all-new, 61-Point High-Density Reticular AF and 100,000-pixel RGB Metering Sensor that uses a dedicated DIGIC 4 Image Processor, makes the EOS-1D X reach new levels of focus speed and accuracy delivering advanced tracking even for the most challenging shooting situations. Taken all together, the EOS-1D X&#39;s improved HD video capture, numerous connectivity options, combination of processing power and durable construction, including shutter durability tested to 400,000 cycles, make it the ultimate EOS.</p>', '1500', '103054697_1.jpg', 11),
(5, 'Canon 5 D Mark 3', '<p>The Canon 1DX is a professional level camera with pro level features to match. It has a magnesium alloy, weather sealed body (featuring a vertical grip with an additional shutter button) that houses an 18MP full-frame CMOS sensor. The viewfinder is large and provides a 61 point autofocus system which is great for capturing action. Another great feature for action shooting is the staggering 12 fps burst rate that this camera is capable of. On the back there is a 3.2&#39;&#39; 1,040,00 dot screen on the back, which is more than enough for looking at previous pictures as well as navigating through menus. It also features two CF card slots for extra storage while on the job. This camera is great at all types of photography, but espeically studio and action work. It can handle any job you throw at it.</p><p><strong>Additional Information</strong></p><p>The Canon Eos 1DX contains a full-frame, 18.1MP CMOS sensor that features pixels that are 1.25 microns larger than the pixels found in Canon&#39;s EOS-1D Mark IV, and 0.55 microns larger than the pixels found in Canons EOS-5D Mk II, which combined with gapless micro lenses, should translate into greater dynamic range, less noise and smoother shadow-to-highlight transitions than both of the aforementioned cameras. As with all EOS 1D-series cameras, the 1DX features 14-bit A/D conversion for optimal color and tonal range.<br />&nbsp;</p><p>Canon has brought the best of the EOS-1D Series of digital cameras into one phenomenal model: the new flagship of the EOS line, the EOS-1D X. Its full-frame 18.1 Megapixel CMOS sensor and all-new Dual DIGIC 5+ Image Processors deliver high quality image capture at up to 12 fps (14 fps in Super High Speed Mode) and a powerful ISO range of 100 - 51200 (up to 204800 in H2 mode) provides sharp, low-noise images even in the dimmest low-light conditions. An all-new, 61-Point High-Density Reticular AF and 100,000-pixel RGB Metering Sensor that uses a dedicated DIGIC 4 Image Processor, makes the EOS-1D X reach new levels of focus speed and accuracy delivering advanced tracking even for the most challenging shooting situations. Taken all together, the EOS-1D X&#39;s improved HD video capture, numerous connectivity options, combination of processing power and durable construction, including shutter durability tested to 400,000 cycles, make it the ultimate EOS.</p>', '2300', '103086962_1.jpg', 11),
(6, 'Canon 6D', '<p>The Canon 1DX is a professional level camera with pro level features to match. It has a magnesium alloy, weather sealed body (featuring a vertical grip with an additional shutter button) that houses an 18MP full-frame CMOS sensor. The viewfinder is large and provides a 61 point autofocus system which is great for capturing action. Another great feature for action shooting is the staggering 12 fps burst rate that this camera is capable of. On the back there is a 3.2&#39;&#39; 1,040,00 dot screen on the back, which is more than enough for looking at previous pictures as well as navigating through menus. It also features two CF card slots for extra storage while on the job. This camera is great at all types of photography, but espeically studio and action work. It can handle any job you throw at it.</p><p><strong>Additional Information</strong></p><p>The Canon Eos 1DX contains a full-frame, 18.1MP CMOS sensor that features pixels that are 1.25 microns larger than the pixels found in Canon&#39;s EOS-1D Mark IV, and 0.55 microns larger than the pixels found in Canons EOS-5D Mk II, which combined with gapless micro lenses, should translate into greater dynamic range, less noise and smoother shadow-to-highlight transitions than both of the aforementioned cameras. As with all EOS 1D-series cameras, the 1DX features 14-bit A/D conversion for optimal color and tonal range.<br />&nbsp;</p><p>Canon has brought the best of the EOS-1D Series of digital cameras into one phenomenal model: the new flagship of the EOS line, the EOS-1D X. Its full-frame 18.1 Megapixel CMOS sensor and all-new Dual DIGIC 5+ Image Processors deliver high quality image capture at up to 12 fps (14 fps in Super High Speed Mode) and a powerful ISO range of 100 - 51200 (up to 204800 in H2 mode) provides sharp, low-noise images even in the dimmest low-light conditions. An all-new, 61-Point High-Density Reticular AF and 100,000-pixel RGB Metering Sensor that uses a dedicated DIGIC 4 Image Processor, makes the EOS-1D X reach new levels of focus speed and accuracy delivering advanced tracking even for the most challenging shooting situations. Taken all together, the EOS-1D X&#39;s improved HD video capture, numerous connectivity options, combination of processing power and durable construction, including shutter durability tested to 400,000 cycles, make it the ultimate EOS.</p>', '1700', 'Canon-6D-24105-STM.jpg', 11),
(7, 'Canon 60D', '<p>The Canon 1DX is a professional level camera with pro level features to match. It has a magnesium alloy, weather sealed body (featuring a vertical grip with an additional shutter button) that houses an 18MP full-frame CMOS sensor. The viewfinder is large and provides a 61 point autofocus system which is great for capturing action. Another great feature for action shooting is the staggering 12 fps burst rate that this camera is capable of. On the back there is a 3.2&#39;&#39; 1,040,00 dot screen on the back, which is more than enough for looking at previous pictures as well as navigating through menus. It also features two CF card slots for extra storage while on the job. This camera is great at all types of photography, but espeically studio and action work. It can handle any job you throw at it.</p><p><strong>Additional Information</strong></p><p>The Canon Eos 1DX contains a full-frame, 18.1MP CMOS sensor that features pixels that are 1.25 microns larger than the pixels found in Canon&#39;s EOS-1D Mark IV, and 0.55 microns larger than the pixels found in Canons EOS-5D Mk II, which combined with gapless micro lenses, should translate into greater dynamic range, less noise and smoother shadow-to-highlight transitions than both of the aforementioned cameras. As with all EOS 1D-series cameras, the 1DX features 14-bit A/D conversion for optimal color and tonal range.<br />&nbsp;</p><p>Canon has brought the best of the EOS-1D Series of digital cameras into one phenomenal model: the new flagship of the EOS line, the EOS-1D X. Its full-frame 18.1 Megapixel CMOS sensor and all-new Dual DIGIC 5+ Image Processors deliver high quality image capture at up to 12 fps (14 fps in Super High Speed Mode) and a powerful ISO range of 100 - 51200 (up to 204800 in H2 mode) provides sharp, low-noise images even in the dimmest low-light conditions. An all-new, 61-Point High-Density Reticular AF and 100,000-pixel RGB Metering Sensor that uses a dedicated DIGIC 4 Image Processor, makes the EOS-1D X reach new levels of focus speed and accuracy delivering advanced tracking even for the most challenging shooting situations. Taken all together, the EOS-1D X&#39;s improved HD video capture, numerous connectivity options, combination of processing power and durable construction, including shutter durability tested to 400,000 cycles, make it the ultimate EOS.</p>', '1200', 'canon-t6i-1.jpg', 11),
(8, 'Canon EF 24–105mm f/4L IS II USM', '<p>&nbsp;</p><p>The Canon TS-E 17mm f/4L Tilt-Shift Lens is, at review time, the&nbsp;<strong>widest tilt-shift SLR lens made</strong>. It is also one of the highest quality (both optically and physically) 17mm lenses made.</p><p>The Canon TS-E 17mm f/4L Tilt-Shift Lens was introduced at the same time as the Canon TS-E 24mm f/3.5L II Tilt-Shift Lens. Because of their similarities, I am borrowing some of the material/layout/text from the&nbsp;<a href=\"https://www.the-digital-picture.com/Reviews/Canon-TS-E-24mm-f-3.5-L-II-Tilt-Shift-Lens-Review.aspx\">Canon TS-E 24mm f/3.5L II Tilt-Shift Lens review</a>&nbsp;for the Canon TS-E 17mm f/4L Tilt-Shift Lens Review.</p><p>One of the first things you need to know about the Canon TS-E 17mm f/4L Tilt-Shift Lens is that it, like all tilt-shift lenses, is a MF (Manual Focus)-only lens. If you need AF, this lens is not for you (or you may want two lenses covering 17mm).</p><p>With that fact in mind, I&#39;ll next point out the &quot;TS-E / Tilt-Shift&quot; features of this lens indicated by the title. While these are extremely useful features, it is not a requirement that they be used. And since these features require more in-depth explanation, let&#39;s review the non-tilt-shift aspects of this lens first. Please note: There are approximately 10 MB of images included in this review. Please be patient for them all to load.</p><p>As demonstrated in the sample image below, the Canon TS-E 17mm f/4L Tilt-Shift Lens&#39; movements can be locked at &quot;0&quot; and be used like any other 17mm lens without the additional movements.</p>', '2500', '58mm-Petal-Lens-Hood-flower-lens-hood-For-DSLR-Camera-Sigma-Tamron-Minolta-Olympus-and-etc.jpg', 12),
(9, 'Canon EF 24mm f/2.8 IS USM (prime)', '<p>The Canon TS-E 17mm f/4L Tilt-Shift Lens is, at review time, the&nbsp;<strong>widest tilt-shift SLR lens made</strong>. It is also one of the highest quality (both optically and physically) 17mm lenses made.</p><p>The Canon TS-E 17mm f/4L Tilt-Shift Lens was introduced at the same time as the Canon TS-E 24mm f/3.5L II Tilt-Shift Lens. Because of their similarities, I am borrowing some of the material/layout/text from the&nbsp;<a href=\"https://www.the-digital-picture.com/Reviews/Canon-TS-E-24mm-f-3.5-L-II-Tilt-Shift-Lens-Review.aspx\">Canon TS-E 24mm f/3.5L II Tilt-Shift Lens review</a>&nbsp;for the Canon TS-E 17mm f/4L Tilt-Shift Lens Review.</p><p>One of the first things you need to know about the Canon TS-E 17mm f/4L Tilt-Shift Lens is that it, like all tilt-shift lenses, is a MF (Manual Focus)-only lens. If you need AF, this lens is not for you (or you may want two lenses covering 17mm).</p><p>With that fact in mind, I&#39;ll next point out the &quot;TS-E / Tilt-Shift&quot; features of this lens indicated by the title. While these are extremely useful features, it is not a requirement that they be used. And since these features require more in-depth explanation, let&#39;s review the non-tilt-shift aspects of this lens first. Please note: There are approximately 10 MB of images included in this review. Please be patient for them all to load.</p><p>As demonstrated in the sample image below, the Canon TS-E 17mm f/4L Tilt-Shift Lens&#39; movements can be locked at &quot;0&quot; and be used like any other 17mm lens without the additional movements.</p>', '2300', 'images_stories_50mm18.jpg', 12),
(10, 'Canon EF-S 24mm f/2.8 STM', '<p>The Canon TS-E 17mm f/4L Tilt-Shift Lens is, at review time, the&nbsp;<strong>widest tilt-shift SLR lens made</strong>. It is also one of the highest quality (both optically and physically) 17mm lenses made.</p><p>The Canon TS-E 17mm f/4L Tilt-Shift Lens was introduced at the same time as the Canon TS-E 24mm f/3.5L II Tilt-Shift Lens. Because of their similarities, I am borrowing some of the material/layout/text from the&nbsp;<a href=\"https://www.the-digital-picture.com/Reviews/Canon-TS-E-24mm-f-3.5-L-II-Tilt-Shift-Lens-Review.aspx\">Canon TS-E 24mm f/3.5L II Tilt-Shift Lens review</a>&nbsp;for the Canon TS-E 17mm f/4L Tilt-Shift Lens Review.</p><p>One of the first things you need to know about the Canon TS-E 17mm f/4L Tilt-Shift Lens is that it, like all tilt-shift lenses, is a MF (Manual Focus)-only lens. If you need AF, this lens is not for you (or you may want two lenses covering 17mm).</p><p>With that fact in mind, I&#39;ll next point out the &quot;TS-E / Tilt-Shift&quot; features of this lens indicated by the title. While these are extremely useful features, it is not a requirement that they be used. And since these features require more in-depth explanation, let&#39;s review the non-tilt-shift aspects of this lens first. Please note: There are approximately 10 MB of images included in this review. Please be patient for them all to load.</p><p>As demonstrated in the sample image below, the Canon TS-E 17mm f/4L Tilt-Shift Lens&#39; movements can be locked at &quot;0&quot; and be used like any other 17mm lens without the additional movements.</p>', '1700', 'Nikon-50mm-f1.8-G.jpg', 11),
(11, 'Canon 18-200 mm', '<p>The Canon TS-E 17mm f/4L Tilt-Shift Lens is, at review time, the&nbsp;<strong>widest tilt-shift SLR lens made</strong>. It is also one of the highest quality (both optically and physically) 17mm lenses made.</p><p>The Canon TS-E 17mm f/4L Tilt-Shift Lens was introduced at the same time as the Canon TS-E 24mm f/3.5L II Tilt-Shift Lens. Because of their similarities, I am borrowing some of the material/layout/text from the&nbsp;<a href=\"https://www.the-digital-picture.com/Reviews/Canon-TS-E-24mm-f-3.5-L-II-Tilt-Shift-Lens-Review.aspx\">Canon TS-E 24mm f/3.5L II Tilt-Shift Lens review</a>&nbsp;for the Canon TS-E 17mm f/4L Tilt-Shift Lens Review.</p><p>One of the first things you need to know about the Canon TS-E 17mm f/4L Tilt-Shift Lens is that it, like all tilt-shift lenses, is a MF (Manual Focus)-only lens. If you need AF, this lens is not for you (or you may want two lenses covering 17mm).</p><p>With that fact in mind, I&#39;ll next point out the &quot;TS-E / Tilt-Shift&quot; features of this lens indicated by the title. While these are extremely useful features, it is not a requirement that they be used. And since these features require more in-depth explanation, let&#39;s review the non-tilt-shift aspects of this lens first. Please note: There are approximately 10 MB of images included in this review. Please be patient for them all to load.</p><p>As demonstrated in the sample image below, the Canon TS-E 17mm f/4L Tilt-Shift Lens&#39; movements can be locked at &quot;0&quot; and be used like any other 17mm lens without the additional movements.</p>', '1700', 'Nikon-AF-S-DX-40mm-f2.8-G-Micro-Nikkor.jpg', 12),
(12, 'Gitzo GT2532 Mountaineer Series 2 Carbon Fiber Tripod ', '<p>Released in 2010, Vanguard&rsquo;s Alta Pro 263AB 100 aluminum tripod kit offers an exceptional value and feature-set that still feels new years after its original release. Weighing just 5.38 pounds, the Alta Pro extends to a maximum height of 69.12 inches (with a folded height of 28.12 inches when fully compacted). With a large maximum height, stability is crucial, and the Alta Pro delivers in that department, offering outstanding stability and payload capacity up to 15.4 pounds. Additionally, its 26mm three-section aluminum alloy legs adjust to 25, 50, and 80-degree angles to ensure photos can be captured from a multitude of angles, including extremely low angle photography.</p><p>Vanguard claims the Alta Pro is the &ldquo;most versatile tripod in the world&rdquo; and they nail it with a hexagon-shaped central column that adjusts anywhere from 0 to 180 degrees. Additionally, the Alta Pro adds a slew of extras such as a quick-flip leg lock, non-slip spiked rubber feet and an instant swivel stop-and-lock (ISSL) system that allows quick repositioning of the central column with just one movement. It also has a magnesium die-cast canopy, an anti-shock ring, and even comes with a carrying case for added protection.</p>', '1200', '$_3.jpg', 13),
(13, 'FEISOL CT-3472LV Elite Rapid Carbon Fiber Tripod', '<p>Released in 2010, Vanguard&rsquo;s Alta Pro 263AB 100 aluminum tripod kit offers an exceptional value and feature-set that still feels new years after its original release. Weighing just 5.38 pounds, the Alta Pro extends to a maximum height of 69.12 inches (with a folded height of 28.12 inches when fully compacted). With a large maximum height, stability is crucial, and the Alta Pro delivers in that department, offering outstanding stability and payload capacity up to 15.4 pounds. Additionally, its 26mm three-section aluminum alloy legs adjust to 25, 50, and 80-degree angles to ensure photos can be captured from a multitude of angles, including extremely low angle photography.</p><p>Vanguard claims the Alta Pro is the &ldquo;most versatile tripod in the world&rdquo; and they nail it with a hexagon-shaped central column that adjusts anywhere from 0 to 180 degrees. Additionally, the Alta Pro adds a slew of extras such as a quick-flip leg lock, non-slip spiked rubber feet and an instant swivel stop-and-lock (ISSL) system that allows quick repositioning of the central column with just one movement. It also has a magnesium die-cast canopy, an anti-shock ring, and even comes with a carrying case for added protection.</p>', '1400', '51y8gsJEhJL.jpg', 13),
(14, ' Induro CLT203 Classic Series 2 Stealth Carbon Fiber Tripod ', '<p>Released in 2010, Vanguard&rsquo;s Alta Pro 263AB 100 aluminum tripod kit offers an exceptional value and feature-set that still feels new years after its original release. Weighing just 5.38 pounds, the Alta Pro extends to a maximum height of 69.12 inches (with a folded height of 28.12 inches when fully compacted). With a large maximum height, stability is crucial, and the Alta Pro delivers in that department, offering outstanding stability and payload capacity up to 15.4 pounds. Additionally, its 26mm three-section aluminum alloy legs adjust to 25, 50, and 80-degree angles to ensure photos can be captured from a multitude of angles, including extremely low angle photography.</p><p>Vanguard claims the Alta Pro is the &ldquo;most versatile tripod in the world&rdquo; and they nail it with a hexagon-shaped central column that adjusts anywhere from 0 to 180 degrees. Additionally, the Alta Pro adds a slew of extras such as a quick-flip leg lock, non-slip spiked rubber feet and an instant swivel stop-and-lock (ISSL) system that allows quick repositioning of the central column with just one movement. It also has a magnesium die-cast canopy, an anti-shock ring, and even comes with a carrying case for added protection.</p>', '1300', '410XhRY9caL.jpg', 13),
(15, '3 Legged Thing Equinox Winston Carbon Fiber Tripod ', '<p>Released in 2010, Vanguard&rsquo;s Alta Pro 263AB 100 aluminum tripod kit offers an exceptional value and feature-set that still feels new years after its original release. Weighing just 5.38 pounds, the Alta Pro extends to a maximum height of 69.12 inches (with a folded height of 28.12 inches when fully compacted). With a large maximum height, stability is crucial, and the Alta Pro delivers in that department, offering outstanding stability and payload capacity up to 15.4 pounds. Additionally, its 26mm three-section aluminum alloy legs adjust to 25, 50, and 80-degree angles to ensure photos can be captured from a multitude of angles, including extremely low angle photography.</p><p>Vanguard claims the Alta Pro is the &ldquo;most versatile tripod in the world&rdquo; and they nail it with a hexagon-shaped central column that adjusts anywhere from 0 to 180 degrees. Additionally, the Alta Pro adds a slew of extras such as a quick-flip leg lock, non-slip spiked rubber feet and an instant swivel stop-and-lock (ISSL) system that allows quick repositioning of the central column with just one movement. It also has a magnesium die-cast canopy, an anti-shock ring, and even comes with a carrying case for added protection.</p>', '1500', 'Joby_GP3_A1EN_Gorillapod_SLR_Zoom_Flexible_Mini_Tripod_470237.jpg', 13),
(16, 'Memory Card Holder', '<p>Released in 2010, Vanguard&rsquo;s Alta Pro 263AB 100 aluminum tripod kit offers an exceptional value and feature-set that still feels new years after its original release. Weighing just 5.38 pounds, the Alta Pro extends to a maximum height of 69.12 inches (with a folded height of 28.12 inches when fully compacted). With a large maximum height, stability is crucial, and the Alta Pro delivers in that department, offering outstanding stability and payload capacity up to 15.4 pounds. Additionally, its 26mm three-section aluminum alloy legs adjust to 25, 50, and 80-degree angles to ensure photos can be captured from a multitude of angles, including extremely low angle photography.</p><p>Vanguard claims the Alta Pro is the &ldquo;most versatile tripod in the world&rdquo; and they nail it with a hexagon-shaped central column that adjusts anywhere from 0 to 180 degrees. Additionally, the Alta Pro adds a slew of extras such as a quick-flip leg lock, non-slip spiked rubber feet and an instant swivel stop-and-lock (ISSL) system that allows quick repositioning of the central column with just one movement. It also has a magnesium die-cast canopy, an anti-shock ring, and even comes with a carrying case for added protection.</p>', '50', '8ff87695a8f6c64c714e14008f0faeef--camera-accessories-dslr-cameras.jpg', 14),
(17, 'Camera Bag', '<p>Released in 2010, Vanguard&rsquo;s Alta Pro 263AB 100 aluminum tripod kit offers an exceptional value and feature-set that still feels new years after its original release. Weighing just 5.38 pounds, the Alta Pro extends to a maximum height of 69.12 inches (with a folded height of 28.12 inches when fully compacted). With a large maximum height, stability is crucial, and the Alta Pro delivers in that department, offering outstanding stability and payload capacity up to 15.4 pounds. Additionally, its 26mm three-section aluminum alloy legs adjust to 25, 50, and 80-degree angles to ensure photos can be captured from a multitude of angles, including extremely low angle photography.</p><p>Vanguard claims the Alta Pro is the &ldquo;most versatile tripod in the world&rdquo; and they nail it with a hexagon-shaped central column that adjusts anywhere from 0 to 180 degrees. Additionally, the Alta Pro adds a slew of extras such as a quick-flip leg lock, non-slip spiked rubber feet and an instant swivel stop-and-lock (ISSL) system that allows quick repositioning of the central column with just one movement. It also has a magnesium die-cast canopy, an anti-shock ring, and even comes with a carrying case for added protection.</p>', '20', '41+93d-WIKL._SL500_.jpg', 14),
(18, 'DSLR Rain Cover', '<p>Released in 2010, Vanguard&rsquo;s Alta Pro 263AB 100 aluminum tripod kit offers an exceptional value and feature-set that still feels new years after its original release. Weighing just 5.38 pounds, the Alta Pro extends to a maximum height of 69.12 inches (with a folded height of 28.12 inches when fully compacted). With a large maximum height, stability is crucial, and the Alta Pro delivers in that department, offering outstanding stability and payload capacity up to 15.4 pounds. Additionally, its 26mm three-section aluminum alloy legs adjust to 25, 50, and 80-degree angles to ensure photos can be captured from a multitude of angles, including extremely low angle photography.</p><p>Vanguard claims the Alta Pro is the &ldquo;most versatile tripod in the world&rdquo; and they nail it with a hexagon-shaped central column that adjusts anywhere from 0 to 180 degrees. Additionally, the Alta Pro adds a slew of extras such as a quick-flip leg lock, non-slip spiked rubber feet and an instant swivel stop-and-lock (ISSL) system that allows quick repositioning of the central column with just one movement. It also has a magnesium die-cast canopy, an anti-shock ring, and even comes with a carrying case for added protection.</p>', '140', 'Petrol_PD515_Rain_Cover_For_HD_DSLR_830959.jpg', 14),
(19, 'DSLR All in one BAG', '<p>Released in 2010, Vanguard&rsquo;s Alta Pro 263AB 100 aluminum tripod kit offers an exceptional value and feature-set that still feels new years after its original release. Weighing just 5.38 pounds, the Alta Pro extends to a maximum height of 69.12 inches (with a folded height of 28.12 inches when fully compacted). With a large maximum height, stability is crucial, and the Alta Pro delivers in that department, offering outstanding stability and payload capacity up to 15.4 pounds. Additionally, its 26mm three-section aluminum alloy legs adjust to 25, 50, and 80-degree angles to ensure photos can be captured from a multitude of angles, including extremely low angle photography.</p><p>Vanguard claims the Alta Pro is the &ldquo;most versatile tripod in the world&rdquo; and they nail it with a hexagon-shaped central column that adjusts anywhere from 0 to 180 degrees. Additionally, the Alta Pro adds a slew of extras such as a quick-flip leg lock, non-slip spiked rubber feet and an instant swivel stop-and-lock (ISSL) system that allows quick repositioning of the central column with just one movement. It also has a magnesium die-cast canopy, an anti-shock ring, and even comes with a carrying case for added protection.</p>', '1000', 'Backpack-for-DSLR-Cameras-and-Accessories-Canon-Nikon-Sony-Pentax-MagicFiber-Microfiber-Lens-Cleaning-Cloth-0.jpg', 14),
(20, 'Sony DSLR Flash', '<p>When we finished&nbsp;<a href=\"https://petapixel.com/2017/12/04/teardown-new-sony-a7r-iii/\">our teardown of the a7R III</a>, we didn&rsquo;t anticipate just how badly people wanted to see the new camera body&rsquo;s weather sealing.<br /><br />This may seem like a no-brainer since weather sealing is something avid Sony mirrorless camera shooters like myself are pining for (not that it&rsquo;s stopped my A6000 from weathering the occasional shower). But, the truth is that the a7R III is not sealed the same way as an underwater camera or the more extreme weatherproof DSLRs.</p><p>If you open the new Sony up, you won&rsquo;t find gaskets or airtight rubber seals on each individual button and screw like you might on a Pentax. Instead, Sony appears to have taken a subtler approach to protecting their latest full frame from the elements. A mix of some rubber, a tight fit, and rather large lips at the edge of each piece of the chassis seem to do the job when it comes to keeping the rain out of sensitive components.</p><p>The first thing we noticed was this long edge that the top cover attaches to the main body by.</p>', '1400', 'sony flash.JPG', 15);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `slider_image` varchar(100) NOT NULL,
  `image_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider_image`, `image_description`) VALUES
(9, 'cityscapes-seattle-hdr-photography-1600x900-wallpaper.jpg', 'Winston is one of the most uniquely designed tripods in the lineup, due to its color combinations and leg lock grip design alone.'),
(10, 'maxresdefault.jpg', 'Winston is one of the most uniquely designed tripods in the lineup, due to its color combinations and leg lock grip design alone.'),
(11, 'Dronescapes_010.jpg', 'Winston is one of the most uniquely designed tripods in the lineup, due to its color combinations and leg lock grip design alone.');

-- --------------------------------------------------------

--
-- Table structure for table `todaysdeal`
--

CREATE TABLE `todaysdeal` (
  `id` int(11) NOT NULL,
  `deal_title` varchar(150) NOT NULL,
  `deal_price` int(100) NOT NULL,
  `deal_pic` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `todaysdeal`
--

INSERT INTO `todaysdeal` (`id`, `deal_title`, `deal_price`, `deal_pic`) VALUES
(2, 'Canon 5D Mark II', 1200, '3514031_sd.jpg'),
(3, 'Canon Lens 18-55', 200, 'altura-photo-8mm-f-3.5-aspherical-hd-fisheye-lens-for-canon-dslr-cameras-essential-accessory-kit_21152280.jpeg'),
(4, 'nikon tripod', 100, 'download.jpg'),
(5, 'Sony Alpha Camera', 4500, '103054697_1.jpg'),
(6, 'Sony Alpha Camera', 4500, '103054697_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `access_level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `address`, `email`, `password`, `access_level`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(6, 'Sahaj', 'Bhattarai', 'sahaz@gmail.com', 'f4fb042b00c1901bd684041c45064028', 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_name` (`category_name`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_category` (`product_category`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ourteam`
--
ALTER TABLE `ourteam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `todaysdeal`
--
ALTER TABLE `todaysdeal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `category_products_FK` FOREIGN KEY (`product_category`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
