-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2018 at 06:55 AM
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
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `series_no` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `ic_number` varchar(50) DEFAULT NULL,
  `matric_no` int(11) DEFAULT NULL,
  `course_code` varchar(255) DEFAULT NULL,
  `faculty` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone_no` varchar(255) NOT NULL,
  `missDate` date DEFAULT NULL,
  `missTime` time DEFAULT NULL,
  `missPlace` varchar(255) DEFAULT NULL,
  `missItem` varchar(10000) DEFAULT NULL,
  `report` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`series_no`, `name`, `ic_number`, `matric_no`, `course_code`, `faculty`, `address`, `phone_no`, `missDate`, `missTime`, `missPlace`, `missItem`, `report`) VALUES
(1, 'Muhammad Izham Bin Mohamad Nizam', '980810565043', 2016686708, 'CS110', 'FSKM', 'Mat Kilau', '01123002898', '2018-08-16', '14:56:00', 'Whatsapp ', 'Hati', 'Dipercayai telah dicuri oleh seorang hamba Allah S.W.T'),
(2, 'Ahmad Ammar Qayyum Bin Mohamad Kamal', '980801105379', 2016699092, 'CS110', 'FSKM', 'Mat Kilau', '0', '2018-08-16', '15:00:00', 'Bank Rakyat', 'Maruah', 'Saya dirogol oleh masa kerana orang berlainan bangsa menjadi sepupu sepapat.'),
(3, 'Afif Eizlan Bin Ashraf', '980115115163', 2016483132, 'CS110', 'FSKM', 'Mat Kilau', '01111156511', '2018-08-24', '08:00:00', 'atas motor', 'kad matrik', 'tetiba hilang');

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
(4, '2018-07-01', 2016699092, 'Ahmad Ammar Qayyum Bin Mohamad Kamal', 'CS110', 'FSKM', 'Mat', '0102368052', '2018-07-06', '241441241'),
(5, '2018-08-16', 2019699799, 'Izara Aisyah', 'CS110', 'FSKm', 'Tun Teja 3', '01134567654', '2018-08-18', '1234567890'),
(6, '2018-08-16', 2016686708, 'Muhammad Izham Bin Mohamad Nizam', 'CS110', 'FSKM', 'Mat Kilau', '01123002898', '', '1'),
(7, '2018-08-24', 2016483132, 'Afif Eizlan Bin Ashraf', 'CS110', 'FSKM', 'Mat Kilau', '01111156511', '2018-08-31', '3');

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
(4, 'Siswi', 'wwxx', 213124, '124124', '214', '2018-07-04', '14124124', 'parkir mat kilau', 'Jarang, Singkat(tidak menutup punggung), Mempunyai tulisan, perkataan atau gambar liar/lucah, Lengan baju tidak sampai ke paras siku, Baju masuk ke dalam (Tuck in), Memakai purdah, , ', 50, '2018-07-27'),
(5, 'Siswa', 'Azim', 2016686705, '980810565045', 'CS110', '2018-01-01', '10.00am', 'parkir mat kilau', 'Jarang, Tidak berkolar pada waktu pejabat, Tidak dimasukkan kedalam seluar (baju jenis masuk ke dalam), , ', 50, '2018-02-01');

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
  `course_code` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_no` varchar(255) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`matric_no`, `name`, `ic_number`, `course_code`, `faculty`, `address`, `phone_no`, `birthdate`, `gender`) VALUES
(2015432118, 'Rabiatul Sinar Nadhilah Binti Eizlan', '990107453241', 'CS110', 'Business', 'Tun Teja 1', '034523986', '1999-01-07', 'Perempuan'),
(2015789635, 'Ahmad Solihin', '970805786543', 'CS110', 'FSKM', 'Tok Gajah', '01146758713', '1998-08-05', 'Lelaki'),
(2016482968, 'Muhammad Firdaus Bin Jamdi', '990801879087', 'CS110', 'FSKM', 'Mat Kilau 2', '0132232494', '1999-08-01', 'Lelaki'),
(2016483132, 'Afif Eizlan Bin Ashraf', '980115115163', 'CS110', 'FSKM', 'Mat Kilau', '01111156511', '1998-01-15', 'Lelaki'),
(2016483252, 'Muhammad Haziq Bin Muhammad Ridhwan', '980826106335', 'CS110', 'FSKM', 'Mat Kilau', '0179896390', '1998-08-26', 'Lelaki'),
(2016686707, 'Nik Amirul Aiman', '980810436780', 'AM110', 'Adminus', 'Tok Gajah', '013467567', '1998-08-10', 'Lelaki'),
(2016686708, 'Muhammad Izham Bin Mohamad Nizam', '980810565043', 'CS110', 'FSKM', 'Mat Kilau', '01123002898', '1998-08-10', 'Lelaki'),
(2016699092, 'Ahmad Ammar Qayyum Bin Mohamad Kamal', '980801105379', 'CS110', 'FSKM', 'Mat Kilau', '0102368052', '1998-08-01', 'Lelaki'),
(2017899001, 'Harith Zuhairi', '980810785643', 'AM110', 'Adminus', 'Tok Gajah', '0123997356', '1998-08-10', 'Lelaki'),
(2019699799, 'Izara Aisyah', '840904678907', 'CS110', 'FSKm', 'Tun Teja 3', '01134567654', '1984-09-04', 'Perempuan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`series_no`);

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
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `series_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kad`
--
ALTER TABLE `kad`
  MODIFY `series_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kp`
--
ALTER TABLE `kp`
  MODIFY `series_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
