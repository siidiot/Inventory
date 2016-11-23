-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2016 at 09:46 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `persediaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` varchar(6) NOT NULL,
  `nama_category` varchar(30) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `nama_category`) VALUES
('CT.001', 'HOLO HITAM'),
('CT.002', 'HOLO ABU'),
('CT.003', 'PIPA HITAM'),
('CT.004', 'ATAP');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cust_id` varchar(6) NOT NULL,
  `nama_customer` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `fax_no` varchar(20) NOT NULL,
  `contact_person` varchar(20) NOT NULL,
  `contact_person_no` varchar(20) NOT NULL,
  `ket` text NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `nama_customer`, `alamat`, `phone`, `fax_no`, `contact_person`, `contact_person_no`, `ket`) VALUES
('CS.001', 'KIKI JAYA LAS', 'KP. SAWAH', '021-57321167', '-', '-', '-', '-'),
('CS.002', 'DWI KARYA KREASINDO', 'CILANGKAP', '021-9876723', '-', '085725130960', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pro_id` varchar(6) NOT NULL,
  `nama_product` varchar(40) NOT NULL,
  `category_id` varchar(6) NOT NULL,
  `detail` varchar(40) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `jumlah_stock` int(11) NOT NULL,
  `minimum_stock` int(11) NOT NULL,
  `ket` text NOT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `nama_product`, `category_id`, `detail`, `unit`, `jumlah_stock`, `minimum_stock`, `ket`) VALUES
('PR.001', 'HOLO 20 X 40 X 1.0', 'CT.001', 'HOLO HITAM', 'BTG', 572, 0, '-'),
('PR.002', 'PIPA HITAM 3', 'CT.003', 'PIPA HITAM', 'BTG', 106, 0, '-'),
('PR.003', 'ECODECK GALVANIZED 0.80', 'CT.004', 'ATAP', 'BTG', 217, 0, '-');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `sup_id` varchar(6) NOT NULL,
  `nama_supplier` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `fax_no` varchar(20) NOT NULL,
  `contact_person` varchar(20) NOT NULL,
  `contact_person_no` varchar(20) NOT NULL,
  `ket` text NOT NULL,
  PRIMARY KEY (`sup_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`sup_id`, `nama_supplier`, `alamat`, `phone`, `fax_no`, `contact_person`, `contact_person_no`, `ket`) VALUES
('SP.001', 'PT.KARYA LOGAM', 'PONDOK BAMBU', '021-9600494', '8600494', '-', '-', 'SUPPLIER HOLO'),
('SP.002', 'PT. KEPUH KENCANA ARUM', 'MOJOKERTO', '021-88900366', '-', '-', '-', 'SUPPLIER ECODECK');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `trans_id` varchar(7) NOT NULL,
  `pro_id` varchar(6) NOT NULL,
  `date` date NOT NULL,
  `check_in` int(11) NOT NULL,
  `check_out` int(11) NOT NULL,
  `sisa_stock` int(11) NOT NULL,
  `jenis_trans` varchar(40) NOT NULL,
  `ket` text NOT NULL,
  PRIMARY KEY (`trans_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`trans_id`, `pro_id`, `date`, `check_in`, `check_out`, `sisa_stock`, `jenis_trans`, `ket`) VALUES
('1608001', 'PR.001', '2016-08-24', 5, 0, 505, 'CHECK IN -PT.KARYA LOGAM', '-'),
('1608002', 'PR.001', '2016-08-23', 77, 0, 582, 'CHECK IN -PT.KARYA LOGAM', '-'),
('1608003', 'PR.001', '2016-08-24', 0, 10, 572, 'CHECK OUT -KIKI JAYA LAS', ''),
('1608004', 'PR.002', '2016-08-24', 22, 0, 157, 'CHECK IN -PT.KARYA LOGAM', '-'),
('1608005', 'PR.002', '2016-08-23', 5, 0, 162, 'CHECK IN -PT. KEPUH KENCANA ARUM', '-'),
('1608006', 'PR.002', '2016-08-24', 0, 56, 106, 'CHECK OUT -DWI KARYA KREASINDO', '-'),
('1608007', 'PR.003', '2016-08-24', 20, 0, 320, 'CHECK IN -PT. KEPUH KENCANA ARUM', '-'),
('1608008', 'PR.003', '2016-08-23', 0, 100, 220, 'CHECK OUT -DWI KARYA KREASINDO', '-'),
('1608009', 'PR.003', '2016-08-24', 20, 0, 240, 'RETUR CHECK IN -KIKI JAYA LAS', '-'),
('1608010', 'PR.003', '2016-08-23', 0, 23, 217, 'RETUR CHECK OUT -PT. KEPUH KENCANA ARUM', '-');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `users_id` varchar(6) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` text NOT NULL,
  `level` enum('1','2') NOT NULL COMMENT 'level 1= admin level 2= user',
  `last_login` date NOT NULL,
  PRIMARY KEY (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `nama_lengkap`, `alamat`, `username`, `password`, `foto`, `level`, `last_login`) VALUES
('US.014', 'PT.SINAR AGUNG METALINDO', 'JL.Raya Jati Makmur No.166', 'admin', '21232f297a57a5a743894a0e4a801fc3', '53.png', '1', '2016-08-24'),
('US.015', 'ita yuliana', 'wonogiri', 'ita', '78b0fb7d034c46f13890008e6f36806b', '52.png', '2', '2016-08-17');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
