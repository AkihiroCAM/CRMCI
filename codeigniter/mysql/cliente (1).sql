-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Jun 08, 2019 at 07:02 AM
-- Server version: 5.7.11
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `root`
--

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nombre_com` varchar(255) NOT NULL,
  `rfc` varchar(30) NOT NULL,
  `docs` int(255) UNSIGNED DEFAULT NULL,
  `edad` int(255) UNSIGNED NOT NULL,
  `prob_venta` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `contrasena` varchar(30) NOT NULL,
  `dato_vehiculo` varchar(255) DEFAULT NULL,
  `docs_adicional` int(255) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id`, `nombre_com`, `rfc`, `docs`, `edad`, `prob_venta`, `estado`, `correo`, `contrasena`, `dato_vehiculo`, `docs_adicional`) VALUES
(2, 'Enrique Regino Murillo', 'REME970912578', NULL, 21, 'Baja', 'Prospecto', 'enrique.regi@gmail.com', '8b9127934238e9a03691225c734a0a', NULL, NULL),
(3, 'Roberto Gomez Jara', 'GOJR731012E84', NULL, 34, 'Media', 'Esperando', 'roberto@gmail.com', 'c1bfc188dba59d2681648aa0e6ca8c', NULL, NULL),
(4, 'Sofia Wancho Diaz', 'WADS970910HD10', NULL, 22, 'Seguro', 'Vendido', 'sofiawancho@gmail.com', '32bd8298354195703f8273b69f1126', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
