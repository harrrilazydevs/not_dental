-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2022 at 01:48 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projects_not_dental`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointments`
--

CREATE TABLE `tbl_appointments` (
  `id` int(11) NOT NULL,
  `availability_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_booked` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(100) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment_details`
--

CREATE TABLE `tbl_appointment_details` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `appointment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_available_appointments`
--

CREATE TABLE `tbl_available_appointments` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL,
  `services` varchar(50) NOT NULL DEFAULT 'ALL',
  `slot` int(11) NOT NULL DEFAULT 10,
  `physician` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_available_appointments`
--

INSERT INTO `tbl_available_appointments` (`id`, `date`, `time`, `services`, `slot`, `physician`) VALUES
(1, '2022-04-04', '7:00 - 9:00 AM', 'ALL', 10, 'Dra. Catherine Marcaig Jr Felisidad'),
(2, '2022-04-04', '8:00 - 9:00 AM', 'ALL', 10, 'Dra. Catherine Marcaig Jr Felisidad'),
(3, '2022-04-04', '9:00 - 11:00 AM', 'ALL', 10, 'Dra. Catherine Marcaig Jr Felisidad'),
(4, '2022-04-04', '12:00 - 1:00 PM', 'ALL', 10, 'Dra. Catherine Marcaig Jr Felisidad'),
(5, '2022-04-04', '1:00 - 3:00 PM', 'ALL', 10, 'Dra. Catherine Marcaig Jr Felisidad'),
(6, '2022-04-04', '3:00 - 5:00 PM', 'ALL', 10, 'Dra. Catherine Marcaig Jr Felisidad');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lab_results`
--

CREATE TABLE `tbl_lab_results` (
  `id` int(11) NOT NULL,
  `dir` varchar(100) NOT NULL,
  `appointment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_packages`
--

CREATE TABLE `tbl_packages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_packages`
--

INSERT INTO `tbl_packages` (`id`, `name`, `price`, `status`) VALUES
(1, 'Basic 3', 300, 'OK'),
(2, 'Basic 5', 500, 'OK'),
(3, 'Basic 5 with Hepa B', 750, 'OK'),
(4, 'Basic 5 with Drug Test', 800, 'OK'),
(5, 'Complete Medical Exam', 1050, 'OK'),
(6, 'Magic 5', 375, 'OK'),
(7, 'Magic 8', 825, 'OK'),
(8, 'Magic 10', 1125, 'OK'),
(9, 'Magic 12', 1500, 'OK'),
(10, 'Magic Plus', 1950, 'OK');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package_services`
--

CREATE TABLE `tbl_package_services` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_package_services`
--

INSERT INTO `tbl_package_services` (`id`, `service_id`, `package_id`) VALUES
(2, 2, 1),
(3, 3, 1),
(4, 1, 2),
(5, 4, 2),
(6, 2, 2),
(7, 3, 2),
(8, 5, 2),
(9, 10, 6),
(10, 11, 6),
(11, 12, 6),
(12, 13, 6),
(13, 14, 6),
(14, 10, 7),
(15, 11, 7),
(16, 12, 7),
(17, 13, 7),
(18, 14, 7),
(19, 15, 7),
(20, 16, 7),
(21, 17, 7),
(22, 10, 8),
(23, 11, 8),
(24, 12, 8),
(25, 13, 8),
(26, 14, 8),
(27, 15, 8),
(28, 16, 8),
(29, 17, 8),
(30, 18, 8),
(31, 19, 8),
(32, 10, 9),
(33, 11, 9),
(34, 12, 9),
(35, 13, 9),
(36, 14, 9),
(37, 15, 9),
(38, 16, 9),
(39, 17, 9),
(40, 18, 9),
(41, 19, 9),
(42, 28, 9),
(43, 29, 9),
(44, 10, 10),
(45, 11, 10),
(46, 12, 10),
(47, 13, 10),
(48, 14, 10),
(49, 15, 10),
(50, 16, 10),
(51, 17, 10),
(52, 18, 10),
(53, 19, 10),
(54, 28, 10),
(55, 29, 10),
(56, 1, 10),
(57, 30, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile`
--

CREATE TABLE `tbl_profile` (
  `id` int(11) NOT NULL,
  `f_name` varchar(50) DEFAULT NULL,
  `m_name` varchar(50) DEFAULT NULL,
  `l_name` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `house_no` varchar(50) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `brgy` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `bdate` date DEFAULT NULL,
  `contact_no` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_profile`
--

INSERT INTO `tbl_profile` (`id`, `f_name`, `m_name`, `l_name`, `gender`, `house_no`, `street`, `brgy`, `city`, `province`, `user_id`, `age`, `bdate`, `contact_no`, `email`, `picture`) VALUES
(10, 'Tiny', '', 'Big Boy', 'male', 'test', 'test', 'test', 'test', 'test', 9, 23, '1998-06-04', 'test', 'test@gmail.com', 'src/uploaded/dental_clinic/profile_pictures/277019539_1060246357895017_4262893776516055332_n.jpg'),
(11, 'Bigboy', '', 'Tiny', 'male', 'test', 'test', 'test', 'test', 'test', 2, 23, '1998-06-04', 'test', 'test@gmail.com', 'src/uploaded/dental_clinic/profile_pictures/277019539_1060246357895017_4262893776516055332_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE `tbl_services` (
  `id` int(11) NOT NULL,
  `service` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `price` double NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_services`
--

INSERT INTO `tbl_services` (`id`, `service`, `status`, `category`, `price`) VALUES
(1, 'Chest X-ray', 'OK', 'X-ray', 1000),
(2, 'Urinalysis', 'OK', 'Laboratory', 2),
(3, 'Fecalysis', 'OK', 'Laboratory', 1),
(4, 'CBC', 'OK', 'Laboratory', 1),
(5, 'Physical Exam', 'OK', 'Others', 500),
(6, 'Hepa B', 'OK', 'Laboratory', 2000),
(7, 'Drug Test', 'OK', 'Others', 1),
(8, 'Blood Typing w/ RH', 'OK', 'Laboratory', 1),
(9, 'VDRL', 'OK', 'Laboratory', 1),
(10, 'FBS', 'OK', 'Blood Chemistry', 1),
(11, 'BUN', 'OK', 'Blood Chemistry', 1),
(12, 'Creatinine', 'OK', 'Blood Chemistry', 1),
(13, 'Uric Acid', 'OK', 'Blood Chemistry', 1),
(14, 'Cholesterol', 'OK', 'Blood Chemistry', 1),
(15, 'HDL (good cholesterol)', 'OK', 'Blood Chemistry', 1),
(16, 'LDL (bad cholesterol)', 'OK', 'Blood Chemistry', 1),
(17, 'Triglycerides', 'OK', 'Blood Chemistry', 1),
(18, 'SGOT', 'OK', 'Blood Chemistry', 1),
(19, 'SGPT', 'OK', 'Blood Chemistry', 1),
(20, 'Chest AP/LAT', 'OK', 'X-ray', 1),
(21, 'APICO-LORDOTIC', 'OK', 'X-ray', 1),
(22, 'Pelvic', 'OK', 'Ultrasound', 1),
(23, 'BPS', 'OK', 'Ultrasound', 1),
(24, 'TVS', 'OK', 'Ultrasound', 1),
(25, 'Whole Abdomen', 'OK', 'Ultrasound', 1),
(26, 'KUB/PROSTATE', 'OK', 'Ultrasound', 1),
(27, 'HBT/PANCREAS', 'OK', 'Ultrasound', 1),
(28, 'Sodium', 'OK', 'Others', 1),
(29, 'Potassium', 'OK', 'Others', 1),
(30, 'ECG', 'OK', 'Others', 1),
(32, 'TEST', 'OK', 'X-ray', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `user_access` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `uid`, `pass`, `user_access`) VALUES
(2, 'admin', '1', 'admin'),
(9, 'testuser1', '1', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_appointments`
--
ALTER TABLE `tbl_appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_appointment_details`
--
ALTER TABLE `tbl_appointment_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_available_appointments`
--
ALTER TABLE `tbl_available_appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_lab_results`
--
ALTER TABLE `tbl_lab_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_packages`
--
ALTER TABLE `tbl_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_package_services`
--
ALTER TABLE `tbl_package_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_services`
--
ALTER TABLE `tbl_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_appointments`
--
ALTER TABLE `tbl_appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_appointment_details`
--
ALTER TABLE `tbl_appointment_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tbl_available_appointments`
--
ALTER TABLE `tbl_available_appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_lab_results`
--
ALTER TABLE `tbl_lab_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_packages`
--
ALTER TABLE `tbl_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_package_services`
--
ALTER TABLE `tbl_package_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_services`
--
ALTER TABLE `tbl_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
