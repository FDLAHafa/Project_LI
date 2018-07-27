-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2018 at 04:39 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spbur`
--

-- --------------------------------------------------------

--
-- Table structure for table `kad`
--

CREATE TABLE `kad` (
  `series_no` int(11) NOT NULL,
  `currentdate` date NOT NULL,
  `matric_no` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `prog_code` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `validuntil` varchar(255) DEFAULT NULL,
  `refer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kad`
--

INSERT INTO `kad` (`series_no`, `currentdate`, `matric_no`, `name`, `prog_code`, `faculty`, `address`, `phone_no`, `validuntil`, `refer`) VALUES
(1, '2018-07-26', 2016686708, 'Muhammad Izham Bin Mohamad Nizam', 'CS110', 'FSKM', 'Mat Kilau', '01123002898', '31.7.2018', '12345'),
(2, '2018-07-27', 2016483252, 'Muhammad Haziq Bin Muhammad Ridhwan', 'CS110', 'FSKM', 'Mat Kilau', '0179896390', '32.7.2018', '67890'),
(4, '2018-07-01', 2016699092, 'Ahmad Ammar Qayyum Bin Mohamad Kamal', 'CS110', 'FSKM', 'Mat', '0102368052', '2018-07-06', '241441241');

-- --------------------------------------------------------

--
-- Table structure for table `kp`
--

CREATE TABLE `kp` (
  `series_no` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `matric_no` int(11) NOT NULL,
  `mykad_no` varchar(255) NOT NULL,
  `prog_code` varchar(255) NOT NULL,
  `summon_date` date DEFAULT NULL,
  `summon_time` varchar(255) NOT NULL,
  `summon_place` varchar(255) NOT NULL,
  `summons` varchar(255) NOT NULL,
  `rm` double NOT NULL,
  `paybefore` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kp`
--

INSERT INTO `kp` (`series_no`, `gender`, `name`, `matric_no`, `mykad_no`, `prog_code`, `summon_date`, `summon_time`, `summon_place`, `summons`, `rm`, `paybefore`) VALUES
(1, 'Siswa', 'Muhammad Izham Bin Mohamad Nizam', 2016686708, '980810565043', 'CS110', '2018-07-26', '10.00am', 'Perpustakaan', 'Panjang/Tidak kemas, Tidak membawa/gantung/pamer, Memakai anting-anting/rantai/gelang/pamer, , ', 50, '2018-07-31'),
(2, 'Siswi', 'Nur Aminah Binti Azman', 2017567234, '980605046587', 'CS111', '2018-07-27', '12.00pm', 'Perpustakaan', 'Membuat Bising, Ingkar arahan Pegawai Perpusatkaan, , ', 30, '2018-08-01'),
(3, 'Siswa', 'Ahmad Ammar Qayyum Bin Mohamad Kamal', 2016699092, '980801', 'CS110', '2018-07-27', '10.28am', 'Laluan Ke Pusat Islam', 'Memakai selipar, , ', 20, '2018-07-30'),
(4, 'Siswi', 'wwxx', 213124, '124124', '214', '2018-07-04', '14124124', 'parkir mat kilau', 'Jarang, Singkat(tidak menutup punggung), Mempunyai tulisan, perkataan atau gambar liar/lucah, Lengan baju tidak sampai ke paras siku, Baju masuk ke dalam (Tuck in), Memakai purdah, , ', 50, '2018-07-27');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_ID` int(11) NOT NULL,
  `pass_word` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_ID`, `pass_word`) VALUES
(111, '111');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `matric_no` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ic_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_no` varchar(255) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `prog_code` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`matric_no`, `name`, `ic_number`, `address`, `phone_no`, `birthdate`, `gender`, `prog_code`, `faculty`) VALUES
(2016482968, 'Muhammad Firdaus Bin Jamdi', '-', '-', '0132232494', '0000-00-00', 'Lelaki', 'CS110', 'FSKM'),
(2016483132, 'Afif Eizlan Bin Ashraf', '980115115163', 'Mat Kilau', '01111156511', '1998-01-15', 'Lelaki', 'CS110', 'FSKM'),
(2016483252, 'Muhammad Haziq Bin Muhammad Ridhwan', '980826106335', 'Mat Kilau', '0179896390', '1998-08-26', 'Lelaki', 'CS110', 'FSKM'),
(2016686708, 'Muhammad Izham Bin Mohamad Nizam', '980810565043', 'Mat Kilau', '01123002898', '1998-08-10', 'Lelaki', 'CS110', 'FSKM'),
(2016699092, 'Ahmad Ammar Qayyum Bin Mohamad Kamal', '980801105379', 'Mat', '0102368052', '1998-08-01', 'Lelaki', 'CS110', 'FSKM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kad`
--
ALTER TABLE `kad`
  ADD PRIMARY KEY (`series_no`),
  ADD KEY `matric_no` (`matric_no`);

--
-- Indexes for table `kp`
--
ALTER TABLE `kp`
  ADD PRIMARY KEY (`series_no`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`matric_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kad`
--
ALTER TABLE `kad`
  MODIFY `series_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kp`
--
ALTER TABLE `kp`
  MODIFY `series_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kad`
--
ALTER TABLE `kad`
  ADD CONSTRAINT `kad_ibfk_1` FOREIGN KEY (`matric_no`) REFERENCES `student` (`matric_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
