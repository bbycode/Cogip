-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 28, 2017 at 10:40 PM
-- Server version: 5.5.55-0+deb8u1
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Cogip`
--

-- --------------------------------------------------------

--
-- Table structure for table `personnes`
--

CREATE TABLE IF NOT EXISTS `personnes` (
`id_personne` smallint(6) NOT NULL COMMENT 'Cle primaire',
  `mon_personne` varchar(255) NOT NULL,
  `prenom_personne` varchar(255) NOT NULL,
  `email_personne` varchar(255) NOT NULL,
  `tel_personne` varchar(60) NOT NULL,
  `change_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Date de modication'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COMMENT='Table des agents de la Cogip';

--
-- Dumping data for table `personnes`
--

INSERT INTO `personnes` (`id_personne`, `mon_personne`, `prenom_personne`, `email_personne`, `tel_personne`, `change_time`) VALUES
(1, 'Thomas', 'Tom', 'tthoms@mail.tu', '0455787945', '2017-09-28 20:19:01'),
(2, 'Emily', 'Em', 'e.emily@becode.gru', '0444444444', '2017-09-28 20:20:20'),
(3, 'mika', 'mik', 'mikdu94@yeye.fr', '0456589650', '2017-09-28 20:28:25'),
(4, 'Claudy', 'Cloclo', 'jaimecloclo@yaourt.be', '0477888999', '2017-09-28 20:29:33'),
(5, 'maria', 'mimi', 'mimilabelle@slection.be', '0436987568', '2017-09-28 20:30:45'),
(6, 'Ranu', 'Jean=Christophe', 'j.ranu@cogip.fr', '0669544763', '2017-09-28 20:35:03'),
(7, 'Jean-Patrick', 'pat', 'jp@cogip.fr', '0142564879', '2017-09-28 20:37:36'),
(8, 'Jean-Aymeric', 'jayme', 'jayme@cogip.fr', '0622222222', '2017-09-28 20:38:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personnes`
--
ALTER TABLE `personnes`
 ADD PRIMARY KEY (`id_personne`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personnes`
--
ALTER TABLE `personnes`
MODIFY `id_personne` smallint(6) NOT NULL AUTO_INCREMENT COMMENT 'Cle primaire',AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
