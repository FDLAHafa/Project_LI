-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2018 at 05:55 AM
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
(1, 'Ahmad Ammar Qayyum Bin Mohamad Kamal', '980801105379', 2016699092, 'CS110', 'FSKM', 'Mat Kilau', '0', '2018-08-16', '15:00:00', 'Bank Rakyat', 'Maruah', 'Saya dirogol oleh masa kerana orang berlainan bangsa menjadi sepupu sepapat.'),
(2, 'Afif Eizlan Bin Ashraf', '980115115163', 2016483132, 'CS110', 'FSKM', 'Mat Kilau', '01111156511', '2018-08-24', '08:00:00', 'atas motor', 'kad matrik', 'tetiba hilang'),
(4, 'Ahmad Ammar Qayyum Bin Mohamad Kamal', '980801105379', 2016699092, 'CS110', 'FSKM', 'Mat Kilau', '0102368052', '2018-08-30', '14:00:00', 'Kolej', 'Kad Pelajar', 'Jatih Dalam tandas'),
(5, 'Muhammad Izham Bin Mohamad Nizam', '980810565043', 2016686708, 'CS110', 'FSKM', 'Mat Kilau', '01123002898', '2018-09-05', '10:10:00', 'Bilik Air', 'Tali Leher', 'Kena Telan Jamban'),
(6, 'Muhammad Izham Bin Mohamad Nizam', '980810565043', 2016686708, 'CS110', 'FSKM', 'Mat Kilau', '01123002898', '2018-09-05', '11:11:00', 'qwfqfvasvsa', '1fqfqwfwqwf', 'qfqvqsvqefeq'),
(7, 'Izara Aisyah', '840904678907', 2019699799, 'CS110', 'FSKM', 'Tun Teja 3', '01134567654', '2018-09-04', '11:11:00', 'qfqfqfqf', 'eafffqf', 'qfqfqfqfqfq'),
(8, 'Izara Aisyah', '840904678907', 2019699799, 'CS110', 'FSKM', 'Tun Teja 3', '01134567654', '2018-09-18', '20:08:00', 'sdhsdhdsh', 'rfhsdhdh', 'sdhdshdshssdhsdd666666666'),
(9, 'Izara Aisyah', '840904678907', 2019699799, 'CS110', 'FSKM', 'Tun Teja 3', '01134567654', '2018-09-18', '20:08:00', 'sdhsdhdsh', 'rfhsdhdh', 'sdhdshdshssdhsdd666666666'),
(10, 'Izara Aisyah', '840904678907', 2019699799, 'CS110', 'FSKM', 'Tun Teja 3', '01134567654', '2018-09-18', '20:08:00', 'sdhsdhdsh', 'rfhsdhdh', 'sdhdshdshssdhsdd666666666'),
(11, 'Izara Aisyah', '840904678907', 2019699799, 'CS110', 'FSKM', 'Tun Teja 3', '01134567654', '2018-09-18', '20:08:00', 'sdhsdhdsh', 'rfhsdhdh', 'sdhdshdshssdhsdd666666666'),
(12, 'Izara Aisyah', '840904678907', 2019699799, 'CS110', 'FSKM', 'Tun Teja 3', '01134567654', '2018-09-18', '20:08:00', 'sdhsdhdsh', 'rfhsdhdh', 'sdhdshdshssdhsdd666666666'),
(13, 'Izara Aisyah', '840904678907', 2019699799, 'CS110', 'FSKM', 'Tun Teja 3', '01134567654', '2018-09-18', '20:08:00', 'sdhsdhdsh', 'rfhsdhdh', 'sdhdshdshssdhsdd666666666'),
(14, 'Izara Aisyah', '840904678907', 2019699799, 'CS110', 'FSKM', 'Tun Teja 3', '01134567654', '2018-09-18', '20:08:00', 'sdhsdhdsh', 'rfhsdhdh', 'sdhdshdshssdhsdd666666666'),
(15, 'Muhammad Izham Bin Mohamad Nizam', '980810565043', 2016686708, 'CS110', 'FSKM', 'Mat Kilau', '01123002898', '2018-09-04', '16:15:00', 'Office', 'Kotak Pensil', 'X tau ape jadi');

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
(7, '2018-08-24', 2016483132, 'Afif Eizlan Bin Ashraf', 'CS110', 'FSKM', 'Mat Kilau', '01111156511', '2018-08-31', '3'),
(8, '2018-08-30', 2016699092, 'Ahmad Ammar Qayyum Bin Mohamad Kamal', '', 'FSKM', 'Mat Kilau', '0102368052', '2018-09-01', '4'),
(9, '2018-09-04', 2016686708, 'Muhammad Izham Bin Mohamad Nizam', '', 'FSKM', 'Mat Kilau', '01123002898', '2018-09-06', '15'),
(10, '2018-09-04', 2016686708, 'Muhammad Izham Bin Mohamad Nizam', '', 'FSKM', 'Mat Kilau', '01123002898', '2018-09-06', '15'),
(11, '2018-09-04', 2016686708, 'Muhammad Izham Bin Mohamad Nizam', 'CS110', 'FSKM', 'Mat Kilau', '01123002898', '2018-09-06', '15'),
(12, '2018-09-04', 2016686708, 'Muhammad Izham Bin Mohamad Nizam', 'CS110', 'FSKM', 'Mat Kilau', '01123002898', '2018-09-06', '15'),
(13, '2018-09-04', 2016686708, 'Muhammad Izham Bin Mohamad Nizam', 'CS110', 'FSKM', 'Mat Kilau', '01123002898', '2018-09-06', '15'),
(14, '2018-09-18', 2019699799, 'Izara Aisyah', 'CS110', 'FSKM', 'Tun Teja 3', '01134567654', '2018-09-08', '12'),
(15, '2018-09-18', 2019699799, 'Izara Aisyah', 'CS110', 'FSKM', 'Tun Teja 3', '01134567654', '2018-09-15', '12');

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
(5, 'Siswa', 'Azim', 2016686705, '980810565045', 'CS110', '2018-01-01', '10.00am', 'parkir mat kilau', 'Jarang, Tidak berkolar pada waktu pejabat, Tidak dimasukkan kedalam seluar (baju jenis masuk ke dalam), , ', 50, '2018-02-01'),
(6, 'Siswa', 'Muhammad Izham Bin Mohamad Nizam', 2016686708, '980810565043', 'CS110', '2018-08-30', '13:15', 'PB', 'Tidak dimasukkan kedalam seluar (baju jenis masuk ke dalam), Memakai selipar, Panjang/Tidak kemas, Jimbit, ', 70, '2018-09-02'),
(7, 'Siswa', 'Ahmad Ammar Qayyum Bin Mohamad Kamal', 2016699092, '980801105379', 'CS110', '2018-08-30', '14:00', 'PB', 'Rambut- Panjang/Tidak kemas/nKad Pelajar- Tidak membawa/gantung/pamer/nTidur Dalam Pejabat/n', 50, '2018-09-03'),
(8, 'Siswa', 'Muhammad Izham Bin Mohamad Nizam', 2016686708, '980810565043', 'CS110', '2018-08-30', '15:00', 'Kolej', 'Baju- Tidak berlengan.Seluar- Memakai seluar pendek.Kasut- Memakai selipar.Rambut- Panjang/Tidak kemas.selalu tidur.', 50, '2018-09-01'),
(9, 'Siswa', 'Muhammad Izham Bin Mohamad Nizam', 2016686708, '980810565043', 'CS110', '2018-09-04', '10:10', 'Kolam', 'Baju- Jarang.Baju- Tidak berkolar pada waktu pejabat.Baju- Tidak dimasukkan kedalam seluar (baju jenis masuk ke dalam).Baju- Tidak berlengan.Baju- Mempunyai tulisan, perkataan atau gambar liar/lucah..', 300, '0000-00-00'),
(10, 'Siswa', 'Ahmad Ammar Qayyum Bin Mohamad Kamal', 2016699092, '980801105379', 'CS110', '2018-09-05', '16:00', 'padang', 'Seluar- Memakai seluar pendek.Seluar- Ketat/Koyak/Lusuh/Jarang.Kasut- Memakai selipar..', 200, '0000-00-00'),
(11, 'Siswa', 'Ahmad Ammar Qayyum Bin Mohamad Kamal', 2016699092, '980801105379', 'CS110', '2018-09-05', '03:04', 'Mat Kilau', 'Baju- Jarang..', 100, '0000-00-00'),
(12, 'Siswa', 'Afif Eizlan Bin Ashraf', 2016483132, '980115115163', 'CS110', '2018-09-07', '13:02', 'Pejabat', 'Tempat Tinggal/Tidur Dalam Kampus- Tidur di tempat yang tidak dibenarkan..', 50, '0000-00-00'),
(13, 'Siswa', 'Muhammad Izham Bin Mohamad Nizam', 2016686708, '980810565043', 'CS110', '2018-09-10', '01:01', 'MS', 'Kad Pelajar- Tidak membawa/gantung/pamer,Perhiasan Diri- Memakai anting-anting/rantai/gelang/pamer,,', 100, '0000-00-00'),
(14, 'Siswa', 'Muhammad Izham Bin Mohamad Nizam', 2016686708, '980810565043', 'CS110', '2018-09-05', '02:02', 'Dataran', 'Rambut- Panjang/Tidak kemas,Rambut- Mewarnakan rambut,,', 100, '0000-00-00'),
(15, 'Siswa', 'Muhammad Izham Bin Mohamad Nizam', 2016686708, '980810565043', 'CS110', '2018-09-07', '15:03', 'Court', 'Seluar- Memakai seluar pendek,Perhiasan Diri- Memakai anting-anting/rantai/gelang/pamer,,', 100, '0000-00-00'),
(16, 'Siswa', '', 0, '', '', '0000-00-00', '', 'LOngkang', 'Seluar/Kain- Terlalu ketat, Seluar/Kain- Labuh seluar tidak sampai ke buku lali, Seluar/Kain- Terlalu singkat atau berbelah di atas paras lutut, Seluar/Kain- Jarang, , ', 200, '0000-00-00'),
(17, 'Siswa', '', 0, '', '', '0000-00-00', '', 'longkang', 'Seluar/Kain- Terlalu ketat, Seluar/Kain- Labuh seluar tidak sampai ke buku lali, Seluar/Kain- Terlalu singkat atau berbelah di atas paras lutut, Seluar/Kain- Jarang, , ', 200, '0000-00-00'),
(18, 'Siswa', 'Izara Aisyah', 2019699799, '840904678907', 'CS110', '0000-00-00', '10:04:AM', 'longkang', 'Seluar/Kain- Terlalu ketat, Seluar/Kain- Labuh seluar tidak sampai ke buku lali, Seluar/Kain- Terlalu singkat atau berbelah di atas paras lutut, Seluar/Kain- Jarang, , ', 200, '0000-00-00'),
(19, 'Siswa', 'Muhammad Izham Bin Mohamad Nizam', 2016686708, '980810565043', 'CS110', '0000-00-00', '14:05:PM', 'Bilik Merah', 'Baju- Jarang, Baju- Tidak berkolar pada waktu pejabat, Baju- Tidak dimasukkan kedalam seluar (baju jenis masuk ke dalam), hahahahah, ', 150, '0000-00-00'),
(20, 'Siswa', 'Muhammad Izham Bin Mohamad Nizam', 2016686708, '980810565043', 'CS110', '0000-00-00', '15:45:PM', 'Longkang', 'Mencarut, ', 0, '0000-00-00'),
(21, 'Siswa', 'Muhammad Izham Bin Mohamad Nizam', 2016686708, '980810565043', 'CS110', '0000-00-00', '15:45:PM', 'Longkang', 'Mencarut, ', 0, '0000-00-00'),
(22, 'Siswa', 'Muhammad Izham Bin Mohamad Nizam', 2016686708, '980810565043', 'CS110', '0000-00-00', '15:52:PM', 'tong', 'Baju- Jarang, on, ', 50, '0000-00-00'),
(23, 'Siswa', 'Muhammad Izham Bin Mohamad Nizam', 2016686708, '980810565043', 'CS110', '0000-00-00', '15:58:PM', 'hahahahahaha', 'on, ', 0, '0000-00-00'),
(24, 'Siswa', 'Muhammad Izham Bin Mohamad Nizam', 2016686708, '980810565043', 'CS110', '0000-00-00', '15:59:PM', 'yfyufuojkg', ', ', 0, '0000-00-00'),
(25, 'Siswa', 'Muhammad Izham Bin Mohamad Nizam', 2016686708, '980810565043', 'CS110', '0000-00-00', '15:59:PM', 'yfyufuojkg', ', ', 0, '0000-00-00'),
(26, 'Siswa', 'Muhammad Izham Bin Mohamad Nizam', 2016686708, '980810565043', 'CS110', '0000-00-00', '16:05:PM', 'yoyo', 'haaaaaaaa, ', 0, '0000-00-00'),
(27, 'Siswa', 'Muhammad Izham Bin Mohamad Nizam', 2016686708, '980810565043', 'CS110', '0000-00-00', '16:05:PM', 'yoyoyoyoyoy', 'haaaaaaasssssss, ', 0, '0000-00-00');

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
(111, '111'),
(243029, '12345'),
(2016483132, 'APip123'),
(2016686708, 'Izham123');

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
(2015432118, 'Rabiatul Sinar Nadhilah Binti Eizlan', '990107453241', 'CS110', 'Business', 'Tun Teja 2', '034523986', '1999-01-07', 'Perempuan'),
(2015789635, 'Ahmad Solihin', '970805786543', 'CS110', 'FSKM', 'Tok Gajah', '01146758713', '1998-08-05', 'Lelaki'),
(2016039039, 'Nur Syasya Azzyati Binti Mohd Amin', '980903050123', 'SC039', 'FSCM', 'Melati', '0187549638', '1998-09-03', 'Perempuan'),
(2016482968, 'Muhammad Firdaus Bin Jamdi', '990801879087', 'CS110', 'FSKM', 'Mat Kilau 2', '0132232494', '1999-08-01', 'Lelaki'),
(2016483132, 'Afif Eizlan Bin Ashraf', '980115115163', 'CS110', 'FSKM', 'Mat Kilau', '01111156511', '1998-01-15', 'Lelaki'),
(2016483252, 'Muhammad Haziq Bin Muhammad Ridhwan', '980826106335', 'CS110', 'FSKM', 'Mat Kilau', '0179896390', '1998-08-26', 'Lelaki'),
(2016485836, 'Mohamad Syahmi Suhair Bin Mohamad Safnan', '981005085971', 'CS110', 'FSKM', 'Mat Kilau', '0102368052', NULL, 'Lelaki'),
(2016686707, 'Nik Amirul Aiman', '980810436780', 'AM110', 'Adminus', 'Tok Gajah', '013467567', '1998-08-10', 'Lelaki'),
(2016686708, 'Muhammad Izham Bin Mohamad Nizam', '980810565043', 'CS110', 'FSKM', 'Mat Kilau', '01123002898', '1998-08-10', 'Lelaki'),
(2016699092, 'Ahmad Ammar Qayyum Bin Mohamad Kamal', '980801105379', 'CS110', 'FSKM', 'Mat Kilau', '0102368052', '1998-08-01', 'Lelaki'),
(2017899001, 'Harith Zuhairi', '980810785643', 'AM110', 'Adminus', 'Tok Gajah', '0123997356', '1998-08-10', 'Lelaki'),
(2019699799, 'Izara Aisyah', '840904678907', 'CS110', 'FSKM', 'Tun Teja 3', '01134567654', '1984-09-04', 'Perempuan');

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
  MODIFY `series_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kad`
--
ALTER TABLE `kad`
  MODIFY `series_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kp`
--
ALTER TABLE `kp`
  MODIFY `series_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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
