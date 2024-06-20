-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2019 at 05:48 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2019 at 05:48 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: 'pemesanan'
--

-- --------------------------------------------------------

--
-- Table structure for table users
--

CREATE TABLE users (
  PelangganIDint(11) NOT NULL,
  Username varchar(255) NOT NULL,
  Name varchar(255) NOT NULL,
  Password varchar(255) NOT NULL
  noHP varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table users
--

 INSERT INTO `users` (`PelangganID`, `Username`, `Name`, `Password`, `noHP`) VALUES 
 ('1', 'faizah', 'faizah', '202020', '123123');
--
-- Indexes for dumped tables
--

--
-- Indexes for table users
--
ALTER TABLE users
  ADD PRIMARY KEY (id);

-- Table structure for table produk
--

CREATE TABLE produk (
  namaproduk varchar(255) NOT NULL,
  harga varchar(255) NOT NULL,
  idproduk int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table produk
--

INSERT INTO `produk` (`namaproduk`, `harga`, `idproduk`) VALUES 
('Honda Vario 125 cbs', 'Rp. 25.000.000', '2')
('Honda Vario 125 iss', '25.000.000', '3')
('Honda Vario 125 iss se', '25.000.000', '4');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;