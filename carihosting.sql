-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 02, 2019 at 02:58 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carihosting`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `chat_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`chat_id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'Lionel Messi', 'messi@gmail.com', 'Hello World!', '2019-06-30 17:02:05'),
(2, 'Administrator', 'admin@gmail.com', 'Test', '2019-06-30 17:05:36'),
(3, 'Lionel Messi', 'messi@gmail.com', 'Hahaha', '2019-06-30 17:09:33'),
(4, 'Anonymous', 'admin@gmail.com', 'Test', '2019-06-30 17:10:01'),
(5, 'Sergio Aguero', 'aguero@gmail.com', 'Goaaal', '2019-06-30 23:38:22'),
(6, 'Sergio Aguero', 'aguero@gmail.com', 'A\r\nB', '2019-06-30 23:38:51'),
(7, 'Buffon', 'buffon@gmail.com', 'I will catch that!', '2019-06-30 23:43:21'),
(8, 'Kdb', 'kdb@gmail.com', 'Cmon City!!!', '2019-07-01 11:05:23'),
(9, 'Kevin De Bruyne', 'kdb@gmail.com', 'Hahaha', '2019-07-01 11:08:53'),
(10, 'Lionel Messi', 'messi@gmail.com', 'Hi Kevin!', '2019-07-01 11:13:48'),
(11, 'Kevin De Bruyne', 'kdb@gmail.com', 'Hi Messi!', '2019-07-01 11:20:40'),
(12, 'Pep Guardiola', 'pep@gmail.com', '@Messi: do you want to play for mancity ?', '2019-07-01 11:36:06'),
(13, 'Administrator', 'admin@gmail.com', '@all : hi all', '2019-07-01 11:43:10');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `package_id` int(11) NOT NULL,
  `provider_id` int(11) NOT NULL,
  `package_name` varchar(50) NOT NULL,
  `hosting_type` varchar(50) NOT NULL,
  `storage` int(11) NOT NULL,
  `ram` decimal(4,2) NOT NULL,
  `bandwidth` int(11) NOT NULL,
  `core` decimal(4,2) NOT NULL,
  `cpu` decimal(4,2) NOT NULL,
  `addon_domain` int(11) NOT NULL,
  `price_per_month` int(11) NOT NULL,
  `link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`package_id`, `provider_id`, `package_name`, `hosting_type`, `storage`, `ram`, `bandwidth`, `core`, `cpu`, `addon_domain`, `price_per_month`, `link`) VALUES
(1, 1, 'Bayi', 'Cloud', 500, '0.00', 999999999, '0.00', '0.00', 0, 8000, 'https://www.niagahoster.co.id/orderhosting/24'),
(2, 1, 'Pelajar', 'Cloud', 999999999, '0.00', 999999999, '0.00', '0.00', 10, 38900, 'https://www.niagahoster.co.id/orderhosting/25'),
(3, 1, 'Personal', 'Cloud', 999999999, '0.00', 999999999, '0.00', '0.00', 999999999, 47615, 'https://www.niagahoster.co.id/orderhosting/26'),
(4, 1, 'Basic', 'Cloud', 20000, '3.00', 999999999, '2.00', '0.00', 0, 150000, 'https://panel.niagahoster.co.id/ordercloudhost/hostconfig/77'),
(5, 1, 'Standard', 'Cloud', 40000, '4.00', 999999999, '3.00', '0.00', 0, 210000, 'https://panel.niagahoster.co.id/ordercloudhost/hostconfig/78'),
(6, 1, 'Premium', 'Cloud', 60000, '6.00', 999999999, '6.00', '0.00', 0, 360000, 'https://panel.niagahoster.co.id/ordercloudhost/hostconfig/79'),
(7, 1, 'Corporate', 'Cloud', 120000, '10.00', 999999999, '8.00', '0.00', 0, 720000, 'https://panel.niagahoster.co.id/ordercloudhost/hostconfig/80'),
(8, 1, 'Nano', 'VPS', 20000, '1.00', 1000, '0.00', '2.40', 0, 104000, 'https://panel.niagahoster.co.id/ordervps/vpsconfig/2'),
(9, 1, 'Mikro', 'VPS', 40000, '2.00', 2000, '0.00', '4.80', 0, 192000, 'https://panel.niagahoster.co.id/ordervps/vpsconfig/3'),
(10, 1, 'Starter', 'VPS', 60000, '3.00', 3000, '0.00', '7.20', 0, 280000, 'https://panel.niagahoster.co.id/ordervps/vpsconfig/4'),
(11, 1, 'Bisnis', 'VPS', 80000, '4.00', 4000, '0.00', '9.60', 0, 360000, 'https://panel.niagahoster.co.id/ordervps/vpsconfig/5'),
(12, 1, 'BizExtra', 'VPS', 120000, '6.00', 6000, '0.00', '14.40', 0, 525000, 'https://panel.niagahoster.co.id/ordervps/vpsconfig/6'),
(13, 1, 'Enterprise', 'VPS', 160000, '8.00', 8000, '0.00', '19.20', 0, 630000, 'https://panel.niagahoster.co.id/ordervps/vpsconfig/7'),
(14, 2, 'Personal 50MB', 'Cloud', 50, '0.00', 1, '0.00', '0.00', 0, 6667, 'https://order2.rumahweb.com/?reff=hosting&plan=per50-annually&ch=web'),
(15, 2, 'Personal 100MB', 'Cloud', 100, '0.00', 5, '0.00', '0.00', 0, 11900, 'https://order2.rumahweb.com/?reff=hosting&plan=per100-annually&ch=web'),
(16, 2, 'Profesional 250MB', 'Cloud', 250, '0.00', 999999999, '0.00', '0.00', 1, 20000, 'https://order2.rumahweb.com/?reff=hosting&plan=pro250-annually&ch=web'),
(17, 2, 'Profesional 500MB', 'Cloud', 500, '0.00', 999999999, '0.00', '0.00', 2, 25000, 'https://order2.rumahweb.com/?reff=hosting&plan=pro500-annually&ch=web'),
(18, 2, 'Profesional 1GB', 'Cloud', 1000, '0.00', 999999999, '0.00', '0.00', 3, 40000, 'https://order2.rumahweb.com/?reff=hosting&plan=pro1gb-annually&ch=web'),
(19, 2, 'Profesional 2GB', 'Cloud', 2000, '0.00', 999999999, '0.00', '0.00', 4, 60000, 'https://order2.rumahweb.com/?reff=hosting&plan=pro2gb-annually&ch=web'),
(20, 2, 'Enterprise 3GB', 'Cloud', 3000, '0.00', 999999999, '0.00', '0.00', 5, 90000, 'https://order2.rumahweb.com/?reff=hosting&plan=ent3gb-annually&ch=web'),
(21, 2, 'Enterprise 4GB', 'Cloud', 4000, '0.00', 999999999, '0.00', '0.00', 6, 140000, 'https://order2.rumahweb.com/?reff=hosting&plan=ent4gb-annually&ch=web'),
(22, 2, 'Enterprise 10GB', 'Cloud', 10000, '0.00', 999999999, '0.00', '0.00', 9, 500000, 'https://order2.rumahweb.com/?reff=hosting&plan=ent10gb-annually&ch=web'),
(23, 2, 'Enterprise 30GB', 'Cloud', 30000, '0.00', 999999999, '0.00', '0.00', 29, 1300000, 'https://order2.rumahweb.com/?reff=hosting&plan=ent30gb-annually&ch=web'),
(24, 2, 'Value', 'VPS', 8000, '0.50', 999999999, '2.00', '0.40', 0, 199000, 'https://clientzone.rumahweb.com/cart.php?a=add&pid=80&promocode=VPSRWVAL1Y'),
(25, 2, 'Deluxe', 'VPS', 15000, '1.00', 999999999, '4.00', '0.80', 0, 229900, 'https://clientzone.rumahweb.com/cart.php?a=add&pid=81&promocode=VPSRWDEL1Y'),
(26, 2, 'Premium', 'VPS', 30000, '2.00', 999999999, '4.00', '1.66', 0, 460000, 'https://clientzone.rumahweb.com/cart.php?a=add&pid=82&promocode=VPSRWPRE1Y'),
(27, 2, 'Silver', 'VPS', 60000, '4.00', 999999999, '8.00', '2.40', 0, 920000, 'https://clientzone.rumahweb.com/cart.php?a=add&pid=83&promocode=VPSRWSIL1Y'),
(28, 2, 'Gold', 'VPS', 120000, '8.00', 999999999, '8.00', '6.40', 0, 1800000, 'https://clientzone.rumahweb.com/cart.php?a=add&pid=84&promocode=VPSRWGOL1Y'),
(29, 2, 'Platinum', 'VPS', 240000, '16.00', 999999999, '8.00', '12.80', 0, 3600000, 'https://clientzone.rumahweb.com/cart.php?a=add&pid=85&promocode=VPSRWPLA1Y'),
(30, 3, 'Lite', 'Cloud', 300, '0.50', 999999999, '0.50', '0.00', 0, 8000, 'https://www.domainesia.com/pesan&q=hosting&paket=lite&siklus=12/'),
(31, 3, 'Extra', 'Cloud', 750, '0.50', 999999999, '0.75', '0.00', 0, 16000, 'https://www.domainesia.com/pesan&q=hosting&paket=extra&siklus=12/'),
(32, 3, 'Super', 'Cloud', 2000, '0.75', 999999999, '1.00', '0.00', 0, 32000, 'https://www.domainesia.com/pesan&q=hosting&paket=super&siklus=12/'),
(33, 3, 'Monster', 'Cloud', 5000, '1.00', 999999999, '1.00', '0.00', 0, 64000, 'https://www.domainesia.com/pesan&q=hosting&paket=monster&siklus=12/'),
(34, 3, 'Mikro', 'Cloud', 6000, '2.00', 999999999, '2.00', '0.00', 0, 80000, 'https://www.domainesia.com/pesan&q=hosting&paket=mikro&siklus=12/'),
(35, 3, 'Mega', 'Cloud', 12000, '2.00', 999999999, '2.00', '0.00', 0, 160000, 'https://www.domainesia.com/pesan&q=hosting&paket=mega&siklus=12/'),
(36, 3, 'Giga', 'Cloud', 24000, '2.00', 999999999, '2.00', '0.00', 0, 320000, 'https://www.domainesia.com/pesan&q=hosting&paket=giga&siklus=12/'),
(37, 3, 'Exa', 'Cloud', 48000, '2.00', 999999999, '2.00', '0.00', 0, 640000, 'https://www.domainesia.com/pesan&q=hosting&paket=exa&siklus=12/'),
(38, 3, '512MB', 'VPS', 10000, '0.50', 999999999, '1.00', '0.00', 0, 100000, 'https://www.domainesia.com/vm/'),
(39, 3, '1GB', 'VPS', 20000, '1.00', 999999999, '1.00', '0.00', 0, 200000, 'https://www.domainesia.com/vm/'),
(40, 3, '2GB', 'VPS', 40000, '2.00', 999999999, '2.00', '0.00', 0, 400000, 'https://www.domainesia.com/vm/'),
(41, 3, '4GB', 'VPS', 80000, '4.00', 999999999, '4.00', '0.00', 0, 800000, 'https://www.domainesia.com/vm/'),
(42, 3, '8GB', 'VPS', 160000, '8.00', 999999999, '6.00', '0.00', 0, 1600000, 'https://www.domainesia.com/vm/'),
(43, 3, '12GB', 'VPS', 240000, '12.00', 999999999, '8.00', '0.00', 0, 2400000, 'https://www.domainesia.com/vm/'),
(44, 3, '16GB', 'VPS', 320000, '16.00', 999999999, '12.00', '0.00', 0, 3200000, 'https://www.domainesia.com/vm/'),
(45, 3, '24GB', 'VPS', 480000, '24.00', 999999999, '16.00', '0.00', 0, 4800000, 'https://www.domainesia.com/vm/'),
(46, 4, 'Scout', 'Cloud', 500, '0.13', 999999999, '0.50', '0.00', 0, 20000, 'https://www.dewaweb.com/hosting-murah'),
(47, 4, 'Hunter', 'Cloud', 2000, '0.25', 999999999, '1.00', '0.00', 3, 40000, 'https://www.dewaweb.com/hosting-murah'),
(48, 4, 'Warrior', 'Cloud', 3000, '0.50', 999999999, '1.00', '0.00', 6, 90000, 'https://www.dewaweb.com/hosting-murah'),
(49, 4, 'Guardian', 'Cloud', 6000, '1.00', 999999999, '1.50', '0.00', 10, 140000, 'https://www.dewaweb.com/hosting-murah'),
(50, 4, 'Crusader', 'Cloud', 15000, '2.00', 999999999, '2.00', '0.00', 999999999, 250000, 'https://www.dewaweb.com/hosting-murah'),
(51, 4, 'Paladin', 'Cloud', 30000, '3.00', 999999999, '3.00', '0.00', 999999999, 600000, 'https://www.dewaweb.com/hosting-murah'),
(52, 4, 'Oracle', 'Cloud', 50000, '4.00', 999999999, '4.00', '0.00', 999999999, 1200000, 'https://www.dewaweb.com/hosting-murah'),
(53, 4, 'SSD Storage 20GB', 'VPS', 20000, '1.00', 999999999, '1.00', '0.00', 0, 300000, 'https://www.dewaweb.com/cloud-server-for-power-users'),
(54, 4, 'SSD Storage 40GB', 'VPS', 40000, '2.00', 999999999, '2.00', '0.00', 0, 600000, 'https://www.dewaweb.com/cloud-server-for-power-users'),
(55, 4, 'SSD Storage 80GB', 'VPS', 80000, '8.00', 999999999, '4.00', '0.00', 0, 1600000, 'https://www.dewaweb.com/cloud-server-for-power-users');

-- --------------------------------------------------------

--
-- Table structure for table `providers`
--

CREATE TABLE `providers` (
  `provider_id` int(11) NOT NULL,
  `provider_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `providers`
--

INSERT INTO `providers` (`provider_id`, `provider_name`) VALUES
(1, 'Niagahoster'),
(2, 'Rumahweb'),
(3, 'DomaiNesia'),
(4, 'Dewaweb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`provider_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `providers`
--
ALTER TABLE `providers`
  MODIFY `provider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
