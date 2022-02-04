-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2022 at 09:16 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project22`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `header` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `description2` text NOT NULL,
  `photo` varchar(150) NOT NULL,
  `button_text` varchar(150) NOT NULL,
  `button_url` varchar(150) NOT NULL,
  `status` varchar(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `header`, `title`, `description`, `description2`, `photo`, `button_text`, `button_url`, `status`) VALUES
(1, 'WHO WE ARE', 'Get to know about 1', 'Curabitur pulvinar sem a leo tempus facilisis. Sed non sagittis neque. Nulla conse quat tellus nibh, id molestie felis sagittis ut. Nam ullamcorper tempus ipsum in cursus', 'Praes end at dictum metus. Morbi id hendrerit lectus, nec dapibus ex. Etiam ipsum quam, luctus eu egestas eget, tincidunt', 'Get to know about our company-1643968955.jpg', 'READ MORE ', ' ccc', '1');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `header` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `button_text` varchar(150) NOT NULL,
  `button_url` varchar(150) NOT NULL,
  `bannerimg` varchar(150) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `header`, `title`, `description`, `button_text`, `button_url`, `bannerimg`, `status`) VALUES
(1, 'we are ready to help you', ' Analysis Financial', 'This finance HTML template is 100% free of charge provided by TemplateMo for everyone. This is a multiple-page version with different HTML pages.', 'contact us', 'contact us', 'asib-1643738149.jpg', 1),
(2, 'we are here to support you', 'Accounting Management', ' You are allowed to use this template for your company websites. You are NOT allowed to re-distribute this template ZIP file on any template download website. Please contact TemplateMo for more detail.', 'READ MORE ', 'https://www.facebook.com/', 'Accounting Management-1644003727.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Asib Mollick', 'asib@gmail.com', 'Demo', 'hi.....'),
(2, 'John Smith', 'nayon@gmail.com', ' Need Help', 'demo');

-- --------------------------------------------------------

--
-- Table structure for table `numbers`
--

CREATE TABLE `numbers` (
  `id` int(11) NOT NULL,
  `Work_Hours` int(11) NOT NULL,
  `Great_Reviews` int(11) NOT NULL,
  `Projects_Done` int(11) NOT NULL,
  `Awards_Won` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `numbers`
--

INSERT INTO `numbers` (`id`, `Work_Hours`, `Great_Reviews`, `Projects_Done`, `Awards_Won`) VALUES
(1, 945, 1280, 578, 20);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `button_text` varchar(100) NOT NULL,
  `button_url` varchar(150) NOT NULL,
  `serviceimg` varchar(150) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `button_text`, `button_url`, `serviceimg`, `status`) VALUES
(1, 'Digital Currency', 'Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. Nunc ornare leo tortor.', 'Read More', 'Read More', 'Market Analysis-1643952081.jpg', 1),
(2, 'Market Analysis', ' Sed tincidunt dictum lobortis. Aenean tempus diam vel augue luctus dignissim. Nunc ornare leo tortor.', 'Read More', 'READ MORE 2', 'Market Analysis-1644004272.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `solutions`
--

CREATE TABLE `solutions` (
  `id` int(11) NOT NULL,
  `header` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `description2` text NOT NULL,
  `button_text` varchar(150) NOT NULL,
  `button_url` varchar(150) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `solutions`
--

INSERT INTO `solutions` (`id`, `header`, `title`, `description`, `description2`, `button_text`, `button_url`, `status`) VALUES
(1, 'Lorem ipsum dolor sit amet', 'Our solutions for your', 'Pellentesque ultrices at turpis in vestibulum. Aenean pretium elit nec congue elementum. Nulla luctus laoreet porta. Maecenas at nisi tempus, porta metus vitae, faucibus augue', 'Fusce et venenatis ex. Quisque varius, velit quis dictum sagittis, odio velit molestie nunc, ut posuere ante tortor ut neque.', 'READ MORE 2', 'Read More', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tastimonials`
--

CREATE TABLE `tastimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `photo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tastimonials`
--

INSERT INTO `tastimonials` (`id`, `name`, `designation`, `message`, `photo`) VALUES
(1, 'George Walker', 'Chief Financial Analyst', '\"Nulla ullamcorper, ipsum vel condimentum congue, mi odio vehicula tellus, sit amet malesuada justo sem sit amet quam. Pellentesque in sagittis lacus.\"', 'asib-1643951233.jpg'),
(2, 'John Smith', ' Market Specialist', '\"In eget leo ante. Sed nibh leo, laoreet accumsan euismod quis, scelerisque a nunc. Mauris accumsan, arcu id ornare malesuada, est nulla luctus nisi.\"', 'John Smith-1644005330.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(150) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `name`, `uname`, `email`, `phone`, `password`, `photo`, `status`) VALUES
(1, 'Asib Mollick', 'asib', 'asibmini37@gmail.com', '01822064579', '202cb962ac59075b964b07152d234b70', 'asib-1642513485.jpg', 1),
(2, 'Nayon Khan', 'Nayon', 'nayon@gmail.com', '01792080790', '202cb962ac59075b964b07152d234b70', 'nayon-1642513757.jpg', 1),
(3, 'Hiram', 'quzezojiz', 'gexy@mailinator.com', '01792080790', ' 202cb962ac59075b964b07152d234b70', 'nayon khan-1642953831.jpg', 1),
(4, 'nayon khan', 'asib aa', 'asibmii7@gmail.com', '01822064579', ' 202cb962ac59075b964b07152d234b70', 'nayon khan-1643050925.jpg', 0),
(5, 'nayon khan', 'asib aa', 'asibmii7@gmail.com', '01822064579', ' 202cb962ac59075b964b07152d234b70', 'nayon khan-1643050988.jpg', 1),
(6, 'nayon khan', 'asib aa', 'asibmii7@gmail.com', '01822064579', ' 202cb962ac59075b964b07152d234b70', 'nayon khan-1643050976.jpg', 0),
(7, 'nayon khan', 'asib aa', 'asibmii7@gmail.com', '01822064579', ' 202cb962ac59075b964b07152d234b70', 'nayon khan-1643051044.jpg', 1),
(8, 'nayon khan', 'asib aa', 'asibmii7@gmail.com', '01822064579', ' 202cb962ac59075b964b07152d234b70', 'nayon khan-1643051121.jpg', 1),
(9, 'nayon khan', ' asib aa', ' asibmii7@gmail.com', '01822064579', ' 202cb962ac59075b964b07152d234b70', 'nayon khan-1642514103.jpg', 1),
(10, 'asib', 'aa', 'asib@gmail.com', '01792080790', ' 202cb962ac59075b964b07152d234b70', 'asib-1643051152.jpg', 1),
(11, 'asib', 'aa', 'asib@gmail.com', '01792080790', ' 202cb962ac59075b964b07152d234b70', 'asib-1643051352.jpg', 1),
(12, 'asib', ' aa', ' asib@gmail.com', '01792080790', ' 202cb962ac59075b964b07152d234b70', 'asib-1642514200.jpg', 1),
(13, 'asib', 'aa', 'asib@gmail.com', '01792080790', ' 202cb962ac59075b964b07152d234b70', 'asib-1643051370.jpg', 1),
(14, 'aa', ' asib', ' asibmini7@gmail.com', '01792080790', ' 202cb962ac59075b964b07152d234b70', 'aa-1642530291.jpg', 1),
(17, 'asib', ' aa', ' asibmini37@gmail.com', '01792080790', ' 202cb962ac59075b964b07152d234b70', 'asib-1642593113.jpg', 1),
(18, 'jhg', ' 1', ' asibmini7@gmail.com', '01792080790', ' 202cb962ac59075b964b07152d234b70', 'jhg-1642593280.jpg', 1),
(20, 'TEST', ' TEST', ' asibmollick77@gmail.com', ' 0123456789', ' 202cb962ac59075b964b07152d234b70', 'TEST-1642763840.jpg', 1),
(21, 'asib', ' aa', ' asibmini37@gmail.com', ' 0179208079', ' 202cb962ac59075b964b07152d234b70', 'asib-1642775197.jpg', 1),
(22, 'aa', ' ewwer', ' asibds7@gmail.com', ' 0182206457', ' 202cb962ac59075b964b07152d234b70', 'aa-1642782642.jpg', 1),
(23, 'nayon', ' sds', 'asibmini37@gmail.com', ' 0182206457', ' 202cb962ac59075b964b07152d234b70', 'nayon-1642782663.jpg', 1),
(24, 'nayon', ' aaa', ' asibmini37@gmail.com', ' 0182206457', ' 202cb962ac59075b964b07152d234b70', 'nayon-1642782835.jpg', 1),
(26, 'nayon', ' nayon99a', 'fgdg7@gmail.com', ' 0179208079', ' 25d55ad283aa400af464c76d713c07ad', 'nayon-1642855927.jpg', 1),
(27, 'nayon', ' nayon99', 'dfgd37@gmail.com', ' 0179208079', ' 202cb962ac59075b964b07152d234b70', 'nayon-1642856003.jpg', 1),
(28, 'Yeasin Arafat', ' yeasin', 'yeasin@gmail.com', '01793090082', '25d55ad283aa400af464c76d713c07ad', 'Yeasin Arafat-1642938043.jpg', 1),
(29, 'Mehedi hasan', 'mamon', 'mamon@gmail.com', '01971087147', '25d55ad283aa400af464c76d713c07ad', 'Mehedi hasan Mamon-1642939041.jpg', 1),
(32, 'Faisal Ahmed', ' Likhon', 'Likhon@gmail.com', '01700682242', '25d55ad283aa400af464c76d713c07ad', 'Faisal Ahmed-1642953476.jpg', 1),
(33, 'Asib Mollick', ' asib999', 'asi837@gmail.com', '01792080790', '25d55ad283aa400af464c76d713c07ad', 'Asib Mollick-1643052085.jpg', 1),
(34, 'Asib Mollick', ' asib999', 'asib99@gmail.com', '01792080790', '25d55ad283aa400af464c76d713c07ad', 'Asib Mollick-1643052217.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `numbers`
--
ALTER TABLE `numbers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solutions`
--
ALTER TABLE `solutions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tastimonials`
--
ALTER TABLE `tastimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `numbers`
--
ALTER TABLE `numbers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `solutions`
--
ALTER TABLE `solutions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tastimonials`
--
ALTER TABLE `tastimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
