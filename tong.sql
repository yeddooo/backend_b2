-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2023 at 01:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tong`
--

-- --------------------------------------------------------

--
-- Table structure for table `printerdt_db`
--

CREATE TABLE `printerdt_db` (
  `id` int(11) NOT NULL,
  `project` varchar(255) DEFAULT NULL,
  `printer_number` varchar(255) DEFAULT NULL,
  `reservation_date` date DEFAULT NULL,
  `hours_required` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `printerdt_db`
--

INSERT INTO `printerdt_db` (`id`, `project`, `printer_number`, `reservation_date`, `hours_required`, `email`) VALUES
(5, 'test', '506', '2023-12-20', 1, 'tongthonglongkong@gmail.com'),
(6, 'test', '506', '2023-12-20', 1, 'tongthonglongkong@gmail.com'),
(7, 'test2', '506', '2023-12-20', 1, 'tongthonglongkong@gmail.com'),
(8, 'test', '506', '2023-12-21', 2, 'natchapol.pv@gmail.com'),
(9, 'test', '506', '2023-12-21', 2, 'natchapol.pv@gmail.com'),
(10, 'test', '506', '2023-12-21', 2, 'natchapol.pv@gmail.com'),
(11, 'cancel', '506', '2023-12-21', 2, 'natchapol.pv@gmail.com'),
(12, 'cancel', '506', '2023-12-21', 2, 'natchapol.pv@gmail.com'),
(13, 'cancel', '506', '2023-12-21', 2, 'natchapol.pv@gmail.com'),
(19, 'test', '506', '2023-12-21', 1, 'tongthonglongkong@gmail.com'),
(20, 'test', '506', '2023-12-21', 1, 'tongthonglongkong@gmail.com'),
(21, 'test', '506', '2023-12-21', 1, 'tongthonglongkong@gmail.com'),
(23, 'plsamastar', '507', '2023-12-21', 1, 'tongthonglongkong@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `level` int(1) NOT NULL,
  `u_status` int(1) NOT NULL DEFAULT 0,
  `u_name` text NOT NULL,
  `p_word` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`level`, `u_status`, `u_name`, `p_word`) VALUES
(0, 1, 'admin', '660'),
(7, 1, 'กรวิชญ์ ฮิคารุ คูรากาเกะ', '66070501001'),
(7, 1, 'กษิดิศ บุญพรพิเชษฐ์', '66070501002'),
(7, 1, 'กัญญ์ญาพัชร ชายทวีป', '66070501003'),
(7, 1, 'กัญญวรรณ ทยานิพันธ์', '66070501004'),
(7, 1, 'กัลยา สุทธปัญญา', '66070501005'),
(7, 1, 'ขจรพงศ์ แก่นโต', '66070501006'),
(7, 1, 'จตุพร พูลเจริญ', '66070501007'),
(7, 1, 'จักรภัทร บรรจงรักษา', '66070501008'),
(7, 1, 'จิรพรรณ ศักดิ์พิสุทธิพงศ์', '66070501009'),
(7, 1, 'ชยุตพงศ์ การคนซื่อ', '66070501011'),
(7, 1, 'ชัญญา เสือดาว', '66070501012'),
(7, 1, 'ฑิณภัทร กันจินะ', '66070501013'),
(7, 1, 'ณฐพน จันทร์ศิลปิน', '66070501014'),
(7, 1, 'ณัฐชนน ศรีศิริ', '66070501016'),
(7, 1, 'ณัฐนันท์ จารุกรกุล', '66070501017'),
(7, 1, 'ณัฐพร สังข์เสวก', '66070501018'),
(7, 1, 'ณัฐวุฒิ ซิ้มเจริญ', '66070501019'),
(7, 1, 'ณิธิศ เจดีย์แปง', '66070501020'),
(7, 1, 'ตรีธวัฒน์ โกปาราเมศไตรสิน', '66070501021'),
(7, 1, 'ธนภัทร นามสมบูรณ์', '66070501022'),
(7, 1, 'ธนภัทร โพธิ์มาก', '66070501023'),
(7, 1, 'ธนารีย์ สรเชษฐ์วรากร', '66070501024'),
(7, 1, 'ธัญรดา ตั้งวีระพรพงศ์', '66070501025'),
(7, 1, 'ธิติ ติยะชัยพานิช', '66070501026'),
(7, 1, 'นพณัฐ ประเสริฐวงษา', '66070501027'),
(7, 1, 'นวพล ตันประเสริฐ', '66070501028'),
(7, 1, 'นาวิน แซ่เฮ้ง', '66070501029'),
(7, 1, 'บุณยวีร์ วสุพรรุจี', '66070501031'),
(7, 1, 'ปรายฟ้า พูลมาสิน', '66070501032'),
(7, 1, 'ปัณณวิชญ์ หวานแท้', '66070501033'),
(7, 1, 'เปมิกา จงขวัญยืน', '66070501034'),
(7, 1, 'พงศ์ภรณ์ อินทร์พันธุ์', '66070501035'),
(7, 1, 'พรประทาน เกื้อรุ่ง', '66070501036'),
(7, 1, 'พศิน สินวิรส', '66070501037'),
(7, 1, 'พันธุ์ธัช เจียมจรัสโชติ', '66070501038'),
(7, 1, 'ภคนันท์ ทรรศนียศิลป์', '66070501039'),
(7, 1, 'ภูบดินทร์ พูลหน่าย', '66070501040'),
(7, 1, 'ทัตเทพ ทองรุ่ง', '66070501084'),
(7, 1, 'ธนาพล โพพิศ', '66070501085'),
(7, 1, 'พรรณภัทร ซึมกลาง', '66070501086'),
(7, 1, 'สุปรียา น่วมขยัน', '66070501087'),
(7, 1, 'ภูบดินทร์ รามศิริ', '66070501041'),
(7, 1, 'ภูริณัฐ พลอาสา', '66070501042'),
(7, 1, 'ภูรินทร์ จีนพวด', '66070501043'),
(7, 1, 'รังสิมันตุ์ จีรบรรเจิดชัย', '66070501044'),
(7, 1, 'รัชชนนท์ ทิพทามูล', '66070501045'),
(7, 1, 'รัชมงคล มงคลดิษฐ์', '66070501046'),
(7, 1, 'วงศกร ยุชัยสิทธิกุล', '66070501047'),
(7, 1, 'วรเมธ ศิริวารินทร์', '66070501048'),
(7, 1, 'วีริสรา พันธ์วิริยะภากร', '66070501050'),
(7, 1, 'เวสสภู สว่างวงษ์', '66070501051'),
(7, 1, 'ศรีศุภดิตถ์ รัตนประเสริฐ', '66070501052'),
(7, 1, 'ศักชัช เห็นสุข', '66070501053'),
(7, 1, 'ศักดิ์สิทธิ์ เวชวิทยาขลัง', '66070501054'),
(7, 1, 'ศิรประภา ชินวงษ์ทัน', '66070501055'),
(7, 1, 'สันติภาพ ทองจันทร์', '66070501056'),
(7, 1, 'สิรวิชญ์กมล ล้อมพงศ์', '66070501057'),
(7, 1, 'สุวิจักขณ์ เรืองอินตา', '66070501058'),
(7, 1, 'โสภณวิชญ์ เข็มเพ็ชร์', '66070501059'),
(7, 1, 'อดิสรณ์ ปะระมะ', '66070501060'),
(7, 1, 'อติเทพ ปัทธิสม', '66070501061'),
(7, 1, 'อัคคนิรุทธิ์ ปานเดช', '66070501062'),
(7, 1, 'อิงคศุรัฐ ทาปิน', '66070501063'),
(7, 1, 'กนไผท แตงอ่อน', '66070501064'),
(7, 1, 'กิตติทัต มโนขันธ์', '66070501065'),
(7, 1, 'เกษมสันต์ คำแดง', '66070501066'),
(7, 1, 'คณิน วราสินธ์', '66070501067'),
(7, 1, 'คุณภัทร อุบลธารา', '66070501068'),
(7, 1, 'จอมสุดา นาคใหญ่', '66070501069'),
(7, 1, 'จันทรัศม์ แสงเหลา', '66070501070'),
(7, 1, 'ญาณกร ต่างประโคน', '66070501071'),
(7, 1, 'ณญาตา กำเนิดทอง', '66070501072'),
(7, 1, 'ณัฏฐณิชา วจีวิจิตร', '66070501073'),
(7, 1, 'ณัฐกานต์ ภูเนตร', '66070501074'),
(7, 1, 'ธนินทร์ จันทรานุวัฒน์กูล', '66070501075'),
(7, 1, 'ธรรมภณ แฉ่งพาที', '66070501076'),
(7, 1, 'นิพิฐพนธ์ ภาคมฤค', '66070501077'),
(7, 1, 'พิชามญชุ์ จรัลรุ่งโรจน์', '66070501078'),
(7, 1, 'พีรพล สุมาทร', '66070501079'),
(7, 1, 'มนสิชา คนเที่ยง', '66070501080'),
(7, 1, 'รพีวิชญ์ มุสิพันธ์', '66070501081'),
(7, 1, 'ศุภิสรา วงศ์พัฒนกิจ', '66070501082'),
(7, 1, 'อาร์โน ปรมิน เชิลเซล', '66070501083');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `printerdt_db`
--
ALTER TABLE `printerdt_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `printerdt_db`
--
ALTER TABLE `printerdt_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;