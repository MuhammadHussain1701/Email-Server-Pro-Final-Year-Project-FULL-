-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 06, 2022 at 05:23 PM
-- Server version: 10.3.32-MariaDB-cll-lve
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eversco_emaipro`
--

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `From_Email` varchar(255) NOT NULL,
  `To_Email` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Message` text NOT NULL,
  `Attachment_Path` varchar(255) NOT NULL,
  `signature` varchar(255) NOT NULL,
  `Status` enum('pending','sent') NOT NULL DEFAULT 'sent',
  `view_status` enum('ofline','seen','deleiver') NOT NULL,
  `Recieverside_status` enum('view','hidden') NOT NULL DEFAULT 'view',
  `Sender_Status` enum('view','hidden') NOT NULL DEFAULT 'view',
  `Date_time` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `From_Email`, `To_Email`, `Subject`, `Message`, `Attachment_Path`, `signature`, `Status`, `view_status`, `Recieverside_status`, `Sender_Status`, `Date_time`) VALUES
(26, 'umer123admin@esp.com', 'saif@gmail.com', 'xyz', 'dfgssdfsdfasdasdfasdasdf', 'online.png', 'online.png', 'sent', 'ofline', 'view', 'view', '2022-06-26 10:40:47.478319'),
(27, 'umer123admin@esp.com', 'saif@gmail.com', 'xyz', 'vhfhgfjfjfghfghfgh', 'status.png', 'basicdashboard.png', 'sent', 'ofline', 'view', 'view', '2022-06-26 10:41:42.555015'),
(32, 'umer123admin@esp.com', 'saif@gmail.com', 'xyz', 'kjsdhjhsdjhf', 'HTML5NotesForProfessionals (2).pdf', '', 'sent', 'ofline', 'view', 'view', '2022-06-26 11:02:35.852226'),
(33, 'umer123admin@esp.com', 'saif@gmail.com', 'xyz', 'sdjghgadhasf', 'HTML5NotesForProfessionals (1).pdf', '', 'sent', 'ofline', 'view', 'view', '2022-06-26 11:06:36.217247'),
(34, 'umer123admin@esp.com', 'saif@gmail.com', 'xyz', 'ghdhsfgdghf', 'HTML5NotesForProfessionals (2).pdf', 'singletcik.png', 'sent', 'ofline', 'view', 'view', '2022-06-26 11:07:59.146529'),
(35, 'umer123admin@esp.com', 'saif@gmail.com', 'xyz', 'jhsdgjdfsdfj', 'HTML5NotesForProfessionals (1).pdf', '', 'sent', 'ofline', 'view', 'view', '2022-06-26 11:08:16.564485'),
(36, 'umer123admin@esp.com', 'saif@gmail.com', 'xyz', 'ksldjgksfjg', 'online.png', 'online.png', 'sent', 'ofline', 'view', 'view', '2022-06-26 11:32:33.299379'),
(37, 'umer123admin@esp.com', 'saif@gmail.com', 'xyz', 'ABXC', 'online.png', '', 'sent', 'ofline', 'view', 'view', '2022-06-26 21:00:44.592706'),
(38, 'umer123admin@esp.com', 'saif@gmail.com', 'xyz', '.jawksfhjkha', 'online.png', '', 'sent', 'ofline', 'view', 'view', '2022-06-26 21:04:59.237754'),
(39, 'umer123admin@esp.com', 'awaisesafdar@gmail.com', 'ABC', 'sdjkhfjks', 'online.png', '', 'sent', 'ofline', 'view', 'view', '2022-06-26 21:05:21.442427'),
(40, 'umer123admin@esp.com', 'saif@gmail.com', 'xyz', 'asjhfgadjhg', 'HTML5NotesForProfessionals (1).pdf', '', 'sent', 'ofline', 'view', 'view', '2022-06-26 21:07:58.617997'),
(41, 'umer123admin@esp.com', 'saif@gmail.com', 'CDE', 'sdjkhfjdas', 'HTML5NotesForProfessionals (2).pdf', '', 'sent', 'ofline', 'view', 'view', '2022-06-26 21:08:28.599622'),
(42, 'umer123admin@esp.com', 'saif@gmail.com', 'ABC', 'sjkHJKHADJFH', 'HTML5NotesForProfessionals (1).pdf', 'singletcik.png', 'sent', 'ofline', 'view', 'view', '2022-06-26 21:16:56.506468'),
(43, 'umer123admin@esp.com', 'saif@gmail.com', 'xyz', 'AKDHJKFAD', 'HTML5NotesForProfessionals (2).pdf', '', 'sent', 'ofline', 'view', 'view', '2022-06-26 21:17:18.638508'),
(44, 'umer123admin@esp.com', 'saif@gmail.com', 'xyz', 'AKDHJKFAD', 'HTML5NotesForProfessionals (2).pdf', '', 'sent', 'ofline', 'view', 'view', '2022-06-26 21:17:18.699157'),
(45, 'umer123admin@esp.com', 'saif@gmail.com', 'ABC', 'AJDHJKFHJSK', 'HTML5NotesForProfessionals (1).pdf', '', 'sent', 'ofline', 'view', 'view', '2022-06-26 21:17:43.828332'),
(46, 'umer123admin@esp.com', 'saif@gmail.com', 'ABC', 'AJDHJKFHJSK', 'HTML5NotesForProfessionals (1).pdf', '', 'sent', 'ofline', 'view', 'view', '2022-06-26 21:17:44.009452'),
(47, 'umer123admin@esp.com', 'hussainbutt2901@gmail.com', 'test', 'hi', 'bilal.jpeg', 'logo2.jpg', 'sent', 'ofline', 'view', 'view', '2022-06-26 21:23:50.632600'),
(48, 'amjedwazir@esp.com', 'umer123admin@esp.com', 'esp', 'jinga lala ho', '', '', 'sent', 'seen', 'view', 'view', '2022-06-26 21:24:48.740755'),
(50, 'amjedwazir@esp.com', 'umer123admin@esp.com', 'esp', 'fuck capman', '', '', 'sent', 'deleiver', 'view', 'view', '2022-06-26 21:29:51.039202'),
(51, 'amjedwazir@esp.com', 'm.bilalimtiaz@gmail.com', 'esp', '', '', '', 'sent', 'ofline', 'view', 'view', '2022-06-26 21:31:22.167925'),
(52, 'amjedwazir@esp.com', 'sirajkhanwazir17@espc.cm', 'Hello', '', 'received_659317595329795.jpeg', '', 'sent', 'ofline', 'view', 'view', '2022-06-26 22:59:21.689456'),
(53, 'amjedwazir@esp.com', 'sirajkhanwazir17@espc.cm', 'Hello', '', 'received_659317595329795.jpeg', '', 'sent', 'ofline', 'view', 'view', '2022-06-26 22:59:21.744843'),
(54, 'amjedwazir@esp.com', 'sirajkhanwazir17@esp.com', 'Hello', '', 'received_659317595329795.jpeg', '', 'sent', 'deleiver', 'view', 'view', '2022-06-26 23:00:54.236066'),
(55, 'amjedwazir@esp.com', 'sirajkhanwazir17@esp.com', 'Hello', '', 'received_659317595329795.jpeg', '', 'sent', 'deleiver', 'view', 'view', '2022-06-26 23:00:54.316434'),
(59, 'm.bilalimtiaz@esp.com', 'bilal2@esp.com', 'qwerty', 'qwerty', '', 'free.png', 'sent', 'seen', 'hidden', 'hidden', '2022-06-27 10:36:53.784764'),
(60, 'Hussain123admin@esp.com', 'saif@gmail.com', 'xyz', 'SHJAJHD', '', '', 'sent', 'ofline', 'view', 'view', '2022-06-27 14:04:30.166126'),
(61, 'm.bilalimtiaz@esp.com', 'Hussain123admin@esp.com', 'Mail', 'Got my mail ?', 'jm.png', '', 'sent', 'deleiver', 'view', 'view', '2022-06-27 14:08:12.913161'),
(62, 'm.bilalimtiaz@esp.com', 'Hussain123admin@esp.com', 'Mail', 'Got my mail ?', 'jm.png', '', 'sent', 'deleiver', 'view', 'view', '2022-06-27 14:08:13.038160'),
(64, 'waqasarshad@esp.com', 'bilal2@esp.com', 'hduiuqh', 'fuck you', '', '', 'sent', 'seen', 'view', 'view', '2022-06-27 15:56:07.421852'),
(65, 'waqasarshad@esp.com', 'hussain123admin@esp.com', '23', 'wdcw', '', 'WhatsApp Image 2022-06-24 at 3.08.01 PM.jpeg', 'sent', 'deleiver', 'hidden', 'view', '2022-06-27 16:04:49.663649'),
(66, 'waqasarshad@esp.com', 'amjedwazir@esp.com', '12341', 'f32dc2', '', '', 'sent', 'deleiver', 'view', 'hidden', '2022-06-27 16:06:36.653847'),
(68, 'Hussain123admin@esp.com', 'saif@gmail.com', 'xyz', 'lsdkhjfksdh', 'doubletick.webp', 'online.png', 'sent', 'ofline', 'view', 'hidden', '2022-06-28 22:38:25.158220'),
(69, 'Hussain123admin@esp.com', '', '', '', '', '', 'sent', 'ofline', 'view', 'hidden', '2022-06-28 22:44:09.320248'),
(70, 'Hussain123admin@esp.com', 'saif@gmail.com', 'xyz', 'sdfkjhgjdf', 'images.jpeg', 'online.png', 'sent', 'ofline', 'view', 'hidden', '2022-06-28 22:49:40.590572'),
(72, 'bilal2@esp.com', 'm.bilalimtiaz@esp.com', 'cals', 'kal', 'Lab12.docx', 'WhatsApp Image 2022-06-21 at 11.21.08 AM.jpeg', 'sent', 'seen', 'hidden', 'view', '2022-06-29 20:55:38.987946'),
(73, 'bilal2@esp.com', 'm.bilalimtiaz@esp.com', 'bla', 'ks', 'Lab12.docx', '', 'sent', 'seen', 'hidden', 'view', '2022-06-29 20:57:43.197461'),
(74, 'bilal2@esp.com', 'm.bilalimtiaz@esp.com', 'bla', 'ks', 'Lab12.docx', '', 'sent', 'deleiver', 'view', 'view', '2022-06-29 20:57:43.243018'),
(76, 'sabitk50@esp.com', 'amjedwazir@esp.com', 'Hello', 'Hell', '', '', 'sent', 'ofline', 'hidden', 'view', '2022-06-30 14:06:46.567700'),
(77, 'sabitk50@esp.com', 'amjedwazir@esp.com', 'Gell', 'Hell', '', '', 'sent', 'ofline', 'view', 'view', '2022-06-30 14:11:15.537676'),
(79, 'bilal2@esp.com', 'm.bilalimtiaz@esp.com', 'del', 'dass dat', '', '', 'sent', 'seen', 'view', 'hidden', '2022-07-06 13:50:43.798846'),
(80, 'm.bilalimtiaz@esp.com', 'bilal2@esp.com', 'aq', 'afac', 'FYP Final Presentation.pptx', 'WhatsApp Image 2021-11-14 at 11.43.08 PM.jpeg', 'sent', 'deleiver', 'view', 'view', '2022-07-06 13:55:33.842808'),
(81, 'amjedwazir@esp.com', 'waqasarshad@esp.com', 'Hi', '', '', '', 'sent', 'deleiver', 'view', 'view', '2022-07-06 17:17:55.929868');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `registration_id` int(11) NOT NULL,
  `Full_Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Contact` text NOT NULL,
  `Gender` enum('male','female') NOT NULL,
  `profile_name` varchar(255) NOT NULL,
  `status` enum('admin','client') NOT NULL,
  `user_status` enum('ofline','online') NOT NULL DEFAULT 'ofline',
  `password` varchar(255) NOT NULL,
  `joining Date Time` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`registration_id`, `Full_Name`, `Email`, `Contact`, `Gender`, `profile_name`, `status`, `user_status`, `password`, `joining Date Time`) VALUES
(1, 'Muhammad Hussain', 'Hussain123admin@esp.com', '033212345673', 'male', 'online.png', 'admin', 'online', 'hussain786', '0000-00-00 00:00:00.000000'),
(59, 'saifa ali', 'ali786@esp.com', '376457436', 'male', 'composeemail.png', 'client', 'ofline', '123456789', '2022-06-26 10:49:55.974621'),
(60, 'Amjedkhan', 'amjedwazir@esp.com', '03104191514', 'male', 'amj.jpg', 'client', 'online', 'Pakistan@78', '2022-06-26 21:21:54.014910'),
(61, 'Siraj Ahmad', 'sirajkhanwazir17@esp.com', '03351928476', 'male', 'IMG20220618160548.jpg', 'client', 'online', '1415161', '2022-06-26 22:56:19.323254'),
(62, 'Bilal Imtiaz', 'm.bilalimtiaz@esp.com', '03154337957', 'male', 'Screenshot 2022-01-31 151241.png', 'admin', 'online', 'nokian73', '2022-06-27 10:03:18.226077'),
(63, 'Bilal2', 'bilal2@esp.com', '03009876543', 'female', 'White  Tips Mistakes Learnings You Tube Thumbnail.png', 'client', 'online', 'qwertty', '2022-06-27 10:12:57.206318'),
(64, 'Bilal2', 'bilal2@esp.com', '03009876543', 'female', 'White  Tips Mistakes Learnings You Tube Thumbnail.png', 'client', 'online', 'qwerty', '2022-06-27 10:14:10.886193'),
(65, 'waqasarshad', 'waqasarshad@esp.com', '1234567', 'male', 'Contact us.png', 'client', 'online', '1234567', '2022-06-27 15:51:44.978847'),
(66, 'Rashidullah khan', 'Rashidkhanwazir516 @esp.com', '03348767758', '', 'inbound712240821.png', 'client', 'ofline', 'madikhel', '2022-06-27 16:06:42.660861'),
(67, 'Rashidkhan ullah', 'Rashidkhanwazir516 @gmail.com@esp.com', '03348767758', 'male', 'inbound-141013437.png', 'client', 'ofline', 'Pakistan', '2022-06-27 16:20:17.225336'),
(68, 'Abid ullah', 'laleykhan54@gmail.com@esp.com', '03325839939', 'male', 'inbound8018939570935628898.jpg', 'client', 'ofline', 'abidkhan77', '2022-06-27 18:21:15.203597'),
(69, 'Abid ullah', 'laleykhan54@gmail.com@esp.com', '03325839939', 'male', 'inbound8018939570935628898.jpg', 'client', 'ofline', 'abidkhan77', '2022-06-27 18:22:48.144436'),
(70, 'Abid ullah', 'laleykhan54@gmail.com@esp.com', '03325839939', 'male', 'inbound8018939570935628898.jpg', 'client', 'ofline', 'abidkhan9677', '2022-06-27 18:24:05.054882'),
(71, 'Faizan Zahid', 'faizanzahid333@esp.com', '03417084443', 'male', 'B00CA2E5-57DB-4942-AE6A-B17C0AA37658.jpeg', 'client', 'ofline', 'asdfqwerty', '2022-06-27 20:16:48.236726'),
(72, 'Sabit', 'sabitk50@esp.com', '03324520315', 'male', 'IMG-20220622-WA0006.jpg', 'client', 'online', '12345678', '2022-06-28 21:04:23.836844'),
(73, 'Aslam jutt', 'aslamJutt@esp.com', '03114520780', 'male', 'images (11).jpeg', 'client', 'online', 'tiktok@12', '2022-07-02 16:48:36.640872');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`registration_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `registration_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
