-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 28, 2017 at 10:15 PM
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
-- Table structure for table `factures`
--

CREATE TABLE IF NOT EXISTS `factures` (
`id_facture` smallint(6) NOT NULL,
  `numero_facture` mediumint(9) DEFAULT NULL,
  `date_facture` date DEFAULT NULL,
  `date_echeance` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table des agents de la Cogip';

-- --------------------------------------------------------

--
-- Table structure for table `societes`
--

CREATE TABLE IF NOT EXISTS `societes` (
`id_societe` smallint(6) NOT NULL,
  `nom_societe` varchar(255) NOT NULL,
  `adresse_societe` varchar(255) NOT NULL,
  `tel_societe` varchar(20) NOT NULL,
  `tva_societe` varchar(30) NOT NULL,
  `change_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Date update'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `factures`
--
ALTER TABLE `factures`
 ADD PRIMARY KEY (`id_facture`);

--
-- Indexes for table `personnes`
--
ALTER TABLE `personnes`
 ADD PRIMARY KEY (`id_personne`);

--
-- Indexes for table `societes`
--
ALTER TABLE `societes`
 ADD PRIMARY KEY (`id_societe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `factures`
--
ALTER TABLE `factures`
MODIFY `id_facture` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `personnes`
--
ALTER TABLE `personnes`
MODIFY `id_personne` smallint(6) NOT NULL AUTO_INCREMENT COMMENT 'Cle primaire';
--
-- AUTO_INCREMENT for table `societes`
--
ALTER TABLE `societes`
MODIFY `id_societe` smallint(6) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
