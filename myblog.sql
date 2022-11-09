-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 11:54 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `my_id` int(11) NOT NULL,
  `name_1` varchar(20) NOT NULL DEFAULT 'Muhido',
  `name_2` varchar(50) NOT NULL DEFAULT 'Lysias Nathan',
  `birthday` date NOT NULL,
  `civil_status` varchar(50) NOT NULL DEFAULT 'Single',
  `country` varchar(50) NOT NULL DEFAULT 'RDC',
  `city` varchar(50) NOT NULL DEFAULT 'Goma',
  `address` varchar(50) NOT NULL DEFAULT 'Q:Himbi--C:de Goma',
  `gmail` varchar(30) NOT NULL DEFAULT 'mlysiasnathan@gmail.com',
  `tel_1` varchar(20) NOT NULL DEFAULT '+243 976 742 676',
  `sumary` text NOT NULL,
  `avatar` varchar(10) NOT NULL DEFAULT 'me.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`my_id`, `name_1`, `name_2`, `birthday`, `civil_status`, `country`, `city`, `address`, `gmail`, `tel_1`, `sumary`, `avatar`) VALUES
(1, 'Muhido', 'Lysias Nathan', '1998-08-04', 'Single', 'RDC', 'Goma', 'Quartier Himbi--Commune de Goma', 'mlysiasnathan@gmail.com', '+243 976 742 676', 'exemple--->Indeed, from the point of view studies I hold a Bachelor’s degree in Computer Science obtained with satisfaction at l’ ULK /Gisenyi in academic year 2020 -2021. I am a responsible person, motivated, flexible, eloquent, receptive, honest, equipped with team spirit and I am convinced that I have other skills and assets to succeed to', 'me.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `competences`
--

CREATE TABLE `competences` (
  `comp_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `level` int(3) NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `competences`
--

INSERT INTO `competences` (`comp_id`, `name`, `level`) VALUES
(1, 'HTML', 95),
(2, 'CSS', 85),
(3, 'Bootstrap', 88),
(4, 'JavaScript', 60),
(5, 'PHP', 87),
(6, 'DART/Flutter', 56),
(7, 'Laravel', 65),
(8, 'GitHub', 90),
(9, 'MySQL', 80),
(10, 'Microsoft Word', 84),
(11, 'Microsoft Excel', 88),
(12, 'Microsoft PowerPoint', 79),
(13, 'Microsoft Acces', 91);

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `exp_id` int(11) NOT NULL,
  `course` varchar(200) NOT NULL,
  `start` varchar(4) NOT NULL DEFAULT '2009',
  `end` varchar(4) NOT NULL DEFAULT '2009',
  `level` varchar(30) NOT NULL DEFAULT 'Not Bad',
  `legend` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`exp_id`, `course`, `start`, `end`, `level`, `legend`) VALUES
(1, 'Primary School of Karisimbi Goma DRC', '2005', '2011', 'Great Distinction 79%', 'nsns,nfms,nf,snfm,snnhzxbcz'),
(2, 'High school at I.T.I.G(Institut Technique Industriel de Goma)', '2011', '2017', 'Great Distinction 73%', 'jhjkhhjk'),
(3, 'University studies in Computer science at ULK/Gisenyi', '2018', '2021', 'Great Distinction 75%', '');

-- --------------------------------------------------------

--
-- Table structure for table `formations`
--

CREATE TABLE `formations` (
  `form_id` int(11) NOT NULL,
  `form_names` varchar(60) NOT NULL,
  `form_start` varchar(30) NOT NULL,
  `form_end` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formations`
--

INSERT INTO `formations` (`form_id`, `form_names`, `form_start`, `form_end`) VALUES
(1, 'English training at ULK/Gisenyi', 'September 2018', 'November 2018'),
(2, 'Academic internship at ULK', 'June 2021', 'August 2021'),
(3, 'Professional internship at bukavu', '19 August 2019', '19 December 2019');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `job_name` varchar(60) NOT NULL,
  `job_start` varchar(30) NOT NULL,
  `job_end` varchar(30) NOT NULL,
  `job_address` varchar(60) NOT NULL,
  `role_1` varchar(100) NOT NULL,
  `role_2` varchar(100) NOT NULL,
  `role_3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `job_name`, `job_start`, `job_end`, `job_address`, `role_1`, `role_2`, `role_3`) VALUES
(1, 'Gestionnaire d’Alerte / DATA Base', '8 Janvier 2022', '8 juillet 2022', 'Goma/Nork-kivu/RDC', 'Hold an installation and repair equipment while informing the company the state of the equipment', 'Supervise the network infrastructure and ensure its functioning and secured lines', 'Exercise constant monitoring of technology development');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `mes_id` int(11) NOT NULL,
  `sender_id` int(200) NOT NULL,
  `sender_email` varchar(100) NOT NULL,
  `mes_content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`mes_id`, `sender_id`, `sender_email`, `mes_content`) VALUES
(0, 1, 'user@g.c', 'saldhsadlsakdlsccdhscs'),
(0, 1, 'user@g.c', 'haDHkahdjkaHDAJDKhdkH');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `proj_id` int(11) NOT NULL,
  `proj_name` varchar(50) NOT NULL,
  `proj_url` varchar(60) NOT NULL,
  `proj_github` varchar(11) NOT NULL,
  `proj_category` varchar(10) NOT NULL DEFAULT 'web design',
  `proj_client` varchar(20) NOT NULL,
  `proj_detail` mediumtext NOT NULL,
  `land_1` varchar(50) NOT NULL,
  `land_2` varchar(50) NOT NULL,
  `land_3` varchar(50) NOT NULL,
  `port_1` varchar(50) NOT NULL,
  `port_2` varchar(50) NOT NULL,
  `port_3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`proj_id`, `proj_name`, `proj_url`, `proj_github`, `proj_category`, `proj_client`, `proj_detail`, `land_1`, `land_2`, `land_3`, `port_1`, `port_2`, `port_3`) VALUES
(1, 'mood', 'http://localhost/mood/', '0', 'web design', 'myself', '', 'mood1.png', 'mood2.png', 'mood3.png', 'mood4.png', 'mood5.png', 'mood6.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_names` varchar(200) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_names`, `user_email`, `user_pass`) VALUES
(1, 'LysNath', 'user@g.com', '$2y$10$KUrCqGQ6Eks7WmH66TE64uTI3tEWD7EjjX5gVcFtB6YM5Lmo0Vid.'),
(2, 'LysiasNathan', 'userr@gm.com', '$2y$10$82gY9c.Zq5JxgJdChFrjCepZtVu1yepGVteMqHystR7JQVGPegKrW'),
(3, 'Lysias MHD', 'user@g.c', '$2y$10$j1.CEGSznt45KULEudpNneaosaFQrQMFdCv1BytW79YwFnTKgcrC.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`my_id`);

--
-- Indexes for table `competences`
--
ALTER TABLE `competences`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`exp_id`);

--
-- Indexes for table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`proj_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `my_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `competences`
--
ALTER TABLE `competences`
  MODIFY `comp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `exp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `formations`
--
ALTER TABLE `formations`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `proj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
