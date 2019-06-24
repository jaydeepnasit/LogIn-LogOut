-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2019 at 12:06 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `token`) VALUES
(1, 'admin@anon.com', '$2y$10$3wXi4TFwQDShGdg6nG5NouUryhpma95QuUiXGaExBATIDxG9gqXWS', 'x]b3SFNct=$FWgG{yCd7Gip2-t$&r}UYQj_w*rH=dSa2kK)zaNafZw4V[_vjiywj#9$+8unZG8PdXy2_;y+r6TSaM/Ew#;igefuf%S67w/E@Z/pcS6kUi&Extn(qYxiVQN=mX,a4,V},e%t-Gm?Nvm'),
(2, 'jaydeepnasit@anon.com', '$2y$10$wQRXa47xywxJUy3a/FWf4eBm3EzHhsD75ZU4YHD0JcU.rC0Axa44K', 'PMQ.}ay8bL6z@+Z3xe[e7@}L]Vw=&nz!3e(?bjcg!z?@VK][=QHh/r8?B=r9jCQV88.Y+Td4y{TJ@8/@bp+uXpy[4V5aTMr5A,G4{5A%rN:hbE}rmX+QhAt!ayFh=)_ujDZC=$WDEMRiD)U#=H#fk2'),
(3, 'anonymous@anon.com', '$2y$10$CBLqPjJ2UeoXSVVCGKiGme.8nxcStkrQPNKKgtiXLAk.qkCx.vRsi', '+*{Ac@[JGaZepfhHQLFJ;2WgYPv9PyB($xyRfdFhe]v,j.8)p;(7d4fn%SQY:4[2DXjX?f?%3:{:(LRp!4eGTXRZR3r3&w]6Jg%UK$Mu};VurA8dn(3MN#K:+Cqbnf5f*{V5Mk*_jXxJM3v/SYRMUZ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
