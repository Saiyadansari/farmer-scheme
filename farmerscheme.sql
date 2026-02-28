-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2022 at 02:09 PM
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
-- Database: `farmerscheme`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `freg`
--

CREATE TABLE `freg` (
  `id` int(100) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Age` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `MobileNumber` varchar(20) NOT NULL,
  `EmailId` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `District` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `AadhaarNo` varchar(50) NOT NULL,
  `LandDetails` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `ConfirmPassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freg`
--

INSERT INTO `freg` (`id`, `Name`, `Age`, `Gender`, `MobileNumber`, `EmailId`, `Address`, `District`, `State`, `AadhaarNo`, `LandDetails`, `username`, `Password`, `ConfirmPassword`) VALUES
(1, 'sundar', '30', 'Male', '8248119413', 'sundar@gmail.com', 'manaparai', 'trichy', 'tamilnadu', '7894561230147', '5 acre', 'sundar', 'sundar', 'sundar'),
(2, 'pandiyan', '27', 'Male', '8248119413', 'sundarv06@gmail.com', 'trichy', 'trichy', 'tamilnadu', '756756756', 'ewsdrw4', 'ww', 'ww', 'ww'),
(3, 'kathija', '22', 'Female', '8248119413', 'kathija@gmail.com', 'trichy', 'trichy', 'tamilnadu', '8785485658', '43 acre', 'kathija', '123', '123'),
(4, 'sandhiya', '19', 'Female', '8248119413', 'sandi@gmail.com', 'villupuram', 'villupiuram', 'tamilnadu', '442684236', '43 acre', 'sandi', 'sandi', 'sandi'),
(5, 'pandiyan', '55', 'Male', '8248119413', 'sundarv06@gmail.com', 'trichy', 'trichy', 'tamilnadu', '5896996969', 'test', 'pandiyan', '123', '123'),
(6, 'sundar', '34', 'Male', '8248119413', 'sundarv06@gmail.com', 'trichy', 'trichy', 'trichy', '8888888', '2 ', 'admin', '789', '789'),
(7, 'VM1', '34', 'Male', '8248119413', 'sundarv06@gmail.com', 'trichy', 'trichy', 'tamilnadu', '8888888', '2 ', 'admin', '123', '123'),
(8, 'sundar', '33', 'Male', '8248119413', 'sundarv06@gamil.com', 'trichy', 'trichy', 'tamilnaadu', '54345345345', '45', '111', '111', '111'),
(9, 'sundar', '24', 'Male', '8248119413', 'sundarv06@gmail.com', 'trichy', 'trichy', 'tamilnadu', '2354545', 'tamilnadu', 'admin', '123', '123'),
(10, 'fantasy solution', '24', 'Male', '8248119413', 'fantazysolution@gmail.com', '#16, Samnath Plazza, Third Floor, Madurai Main Rd, Melapudur', 'trichy', 'tamilnadu', '2354545', 'tamilnadu', 'admin', '000', '000'),
(11, 'admin', '24', 'Male', '8248119413', 'test@gmail.com', 'cvghgg', 'trichy', 'tn', '345643', 'vhbjghj', 'admin', '111', '111'),
(12, 'sala', '24', 'Male', '8248119413', 'r@gmail.com', 'thanjavur', 'try', 'tn', '77777', 'mud land', 'sala', 'sala', 'sala');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `details` varchar(100) NOT NULL,
  `price` varchar(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `fid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scheme`
--

CREATE TABLE `scheme` (
  `id` int(11) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `amnt` varchar(50) NOT NULL,
  `per` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scheme`
--

INSERT INTO `scheme` (`id`, `sname`, `amnt`, `per`) VALUES
(4, 'vujwaalaa', '15000', '12'),
(5, 'winterseason', '2500', '12'),
(6, 'winterseason', '2500', '12'),
(7, 'sam', '2500', '12'),
(8, 'sam', '2500', '12'),
(9, 'sam', '2500', '12'),
(10, 'sam', '2500', '12'),
(11, 'sam', '2500', '12'),
(12, 'sam', '2500', '12'),
(13, 'jaavaa', '2500', '12'),
(14, 'sam', '250', '12'),
(15, 'winterseason', '2500', '13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `freg`
--
ALTER TABLE `freg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scheme`
--
ALTER TABLE `scheme`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `freg`
--
ALTER TABLE `freg`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `scheme`
--
ALTER TABLE `scheme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
