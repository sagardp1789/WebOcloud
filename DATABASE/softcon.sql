-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2018 at 08:44 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `softcon`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_company`
--

CREATE TABLE `about_company` (
  `sr` int(11) NOT NULL,
  `matter_about` varchar(5000) NOT NULL,
  `image` varchar(500) NOT NULL,
  `matter_why` varchar(5000) NOT NULL,
  `image2` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_company`
--

INSERT INTO `about_company` (`sr`, `matter_about`, `image`, `matter_why`, `image2`) VALUES
(1, 'There are many variations of passages of Lorem Ipsum available, but the majority \r\n                                have suffered alteration in some form, by injected humour, or randomised words \r\n                                which don\'t look even slightly believable. If you are going to use a passage of Lorem\r\n                                Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of\r\n                                text. All the Lorem Ipsum generators on the Internet tend to repeat predefined \r\n                                chunks as necessary, making this the first true generator on the Internet. It uses a\r\n                                 dictionary of over 200 Latin words, combined with a handful of model sentence \r\n                                structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem \r\n                                Ipsum is therefore always free from repetition, injected humour, or \r\n                                non-characteristic words etc. Contrary to popular belief, Lorem Ipsum is not simply \r\n                                random text. It has roots in a piece of classical Latin literature from 45 BC, making it \r\n                                over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney \r\n                                College in Virginia, looked up one of the more obscure Latin words, consectetur, \r\n                                from a Lorem Ipsum passage, and going through the cites of the word in classical \r\n                                literature, discovered the undoubtable source. Lorem Ipsum comes from sections \r\n                                1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and \r\n                                Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very \r\n                                popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit\r\n                                amet..\", comes from a line in section 1.10.32.</p>\r\n                                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for \r\n                                    those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" \r\n                                    by Cicero are also reproduced in their exact original form, accompanied by English \r\n                                    versions from the 1914 translation by H. Rackham.', 'assets/images/about/1.jpg', ' <span>Lorem Ipsum </span> is simply dummy text of the printing and typesetting \r\n                                industry. Lorem Ipsum has been the industry\'s standard dummy text\r\n                                ever since the 1500s, when an unknown printer took a galley of type\r\n                                and scrambled it to make a type specimen book. It has survived not \r\n                                only five centuries, but also the leap into electronic typesetting, \r\n                                remaining essentially unchanged. It was popularised in the 1960s with\r\n                                the release of Letraset sheets containing Lorem Ipsum passages, \r\n                                and more recently with desktop publishing software like Aldus Page\r\n                                Maker including versions of Lorem Ipsumbranding should be \r\n                                innovative and up to date. We want to help your business branding\r\n                                 be modern, stand on its own and speak for itself.business best. \r\n                                Here at Bento Box we understand the speed and time constraints \r\n                                that a business operates within and many may find it hard to come \r\n                                to us, so we like to make things easy and go to you.</p>\r\n                                <p>It is a long established fact that a reader will be distracted by the \r\n                                    readable content of a page when looking at its layout. The point of \r\n                                    using Lorem Ipsum is that it has a more-or-less normal distribution of\r\n                                     letters, as opposed to using \'Content here, content here\', making it \r\n                                    look like readable English. Many desktop publishing packages and \r\n                                    web page editors now use Lorem Ipsum as their default model text, \r\n                                    and a search for \'lorem ipsum\' will uncover many web sites still in\r\n                                    their infancy.', 'assets/images/about/2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `sr` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`sr`, `name`, `email`, `mobile`, `subject`, `message`) VALUES
(1, 'DOKE SAGAR PRASHANT', 'sagardoke1789@gmail.com', '2147483647', 'defsaf', 'asdasd afaff fef'),
(2, 'DOKE SAGAR PRASHANT', 'sagardoke1789@gmail.com', '8855824805', 'saasfcasf', 'fsef efefef wfaw'),
(3, 'DOKE SAGAR PRASHANT', 'sagardoke1789@gmail.com', '8855824805', 'ppash', 'dasd awrwr');

-- --------------------------------------------------------

--
-- Table structure for table `home_clientsay`
--

CREATE TABLE `home_clientsay` (
  `sr` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `business` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_clientsay`
--

INSERT INTO `home_clientsay` (`sr`, `name`, `message`, `business`, `photo`) VALUES
(1, 'Mr.Bob Osteen', 'We have hired the Web_O_Cloud Solutions team for various projects so far and have decided to keep this association going. Great job. Fast work & constant communication. Highly recommended.', '-', ''),
(2, 'Mr.Bhandhare', 'Working with Web_O_Cloud Solutions has been a wonderful experiance to us, And your dedication towards service highly appreciable, Its truly great pleasure to work with Team, And I wish you keep it up the same spirit and good work and thank you for making our work easier!!!', '-', ''),
(3, 'Mr.Kachardas', 'Web_O_Cloud Solutions Pvt. Ltd. is a company, I would highly recommend for any project related to web development and management. They will be honest, and deliver what you need. The management and the development team is extremely fair and looks out for your interests, not just theirs.\" Service Category: IT Consultant Year first hired: 2008 (hired more than once) Top Qualities: Great Results, Expert, High Integrity ', '-', ''),
(4, 'Mr.Kevin', 'Wow. I\'m not easily impressed but the Web_O_Cloud Solutions team was really easy to work with and made sure I was happy with all work. The did what they needed to do and in a timely manner. I will be hiring them again soon.', '-', '');

-- --------------------------------------------------------

--
-- Table structure for table `home_portfolio`
--

CREATE TABLE `home_portfolio` (
  `sr` int(11) NOT NULL,
  `titel` varchar(50) NOT NULL,
  `matter` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_portfolio`
--

INSERT INTO `home_portfolio` (`sr`, `titel`, `matter`, `image`) VALUES
(1, 'Cartoon Characters', 'illustrator', 'assets/images/portfolio/1.png'),
(2, 'Graphic Design', 'illustrator', 'assets/images/portfolio/2.png'),
(3, 'UX Design', 'illustrator', 'assets/images/portfolio/3.png'),
(4, 'Web design', 'illustrator', 'assets/images/portfolio/4.png'),
(5, 'Web', 'this was web for queen con.', 'admin/images/homeport/5bb4d5e50c9262.06550497.jpg'),
(7, 'Mobile application ', 'Mobile application for Audit system ', 'admin/images/homeport/5bc1ad858bddd0.54895114.jpg'),
(8, 'Mobile application ', 'Mobile application for Order Management System ', 'admin/images/homeport/5bc1adb5db5ba4.76063764.jpg'),
(9, 'Desktop application ', 'Desktop application for Distributor Management ', 'admin/images/homeport/5bc1adf09bb9d1.89106551.jpg'),
(10, 'Mobile application ', 'Mobile application for Retail Management system', 'admin/images/homeport/5bc1ae10e86135.92299107.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home_services`
--

CREATE TABLE `home_services` (
  `sr` int(11) NOT NULL,
  `titel` varchar(100) NOT NULL,
  `matter` varchar(500) NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_services`
--

INSERT INTO `home_services` (`sr`, `titel`, `matter`, `logo`) VALUES
(1, 'Web Development', 'We specialise in custom web app development.', 'flaticon-pen'),
(2, 'App Development', '80% of users are now on mobile which makes us think for mobile first (it\'s time to be desktop responsive)', 'flaticon-transport'),
(3, 'Web Design', 'When beautiful interfaces meet flawless coding standards you feel good.', 'flaticon-technology'),
(4, 'Software Development', 'In this generation every business require IT support. greate solutions for your business', 'flaticon-multimedia'),
(5, 'custom development ', '	In this generation every business require IT support. greate solutions for your business', 'flaticon-pen');

-- --------------------------------------------------------

--
-- Table structure for table `home_slider`
--

CREATE TABLE `home_slider` (
  `sr` int(11) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `heading2` varchar(50) NOT NULL,
  `matter` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image2` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_slider`
--

INSERT INTO `home_slider` (`sr`, `heading`, `heading2`, `matter`, `image`, `image2`) VALUES
(1, 'WEB', 'DEVELOPMENT', 'More creative and responsive web apps development with best and letest technologies.', 'assets/images/slider/1.jpg', 'assets/images/slider/php.png'),
(2, 'SOFTWARE<br><br>', 'DEVELOPMENT', 'Best solutions and friendly interface for you software.', 'assets/images/slider/2.jpg', 'assets/images/slider/node.png'),
(3, 'BE', 'CREATIVE', 'We provide what is needed for your business in this generation.We understand our client\'s requirements and plan our actions to achieve exact solution.', 'assets/images/slider/1.jpg', 'assets/images/slider/ass.png'),
(4, 'BEST', 'SUPPORT', 'Not just developing your software we provide support to solve your problems', 'assets/images/slider/1.jpg', 'assets/images/slider/android.png'),
(5, 'WEB', 'DEVELOPMENT', '	More creative and responsive web apps development with best and letest technologies.', 'admin/images/sliderbg/5bcae81a909513.21008173.jpg', 'admin/images/sliderbg/5bcae81a90f614.55952401.png');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `sr` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`sr`, `name`, `email`, `message`) VALUES
(1, 'sagar', 'sagardoke1789@gmail.com', 'working correct\r\n'),
(2, 'sagar', 'sagardoke1789@gmail.com', 'working correct\r\n'),
(3, 'DOKE SAGAR PRASHANT', 'akashdoke77@gmail.com', 'is it working correctly'),
(4, 'DOKE SAGAR PRASHANT', 'akashdoke77@gmail.com', 'is it working correctly'),
(5, 'sagar', 'sagardoke1789@gmail.com', 'hahah');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `sr` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `team_about`
--

CREATE TABLE `team_about` (
  `sr` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_about`
--

INSERT INTO `team_about` (`sr`, `name`, `profession`, `email`, `photo`) VALUES
(2, 'Alex', 'creaive designer', 'Alex1@xyz.com', 'assets/images/team/2.jpg'),
(3, 'Alex', 'creaive designer', 'Alex1@xyz.com', 'assets/images/team/3.jpg'),
(4, 'Alex', 'creaive designer', 'Alex1@xyz.com', 'assets/images/team/4.jpg'),
(5, 'Alex', 'creaive designer', 'Alex1@xyz.com', 'assets/images/team/5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_company`
--
ALTER TABLE `about_company`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `home_clientsay`
--
ALTER TABLE `home_clientsay`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `home_portfolio`
--
ALTER TABLE `home_portfolio`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `home_services`
--
ALTER TABLE `home_services`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `home_slider`
--
ALTER TABLE `home_slider`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `team_about`
--
ALTER TABLE `team_about`
  ADD PRIMARY KEY (`sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_company`
--
ALTER TABLE `about_company`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home_clientsay`
--
ALTER TABLE `home_clientsay`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home_portfolio`
--
ALTER TABLE `home_portfolio`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `home_services`
--
ALTER TABLE `home_services`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_about`
--
ALTER TABLE `team_about`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
