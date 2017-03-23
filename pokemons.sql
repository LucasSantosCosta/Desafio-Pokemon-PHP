-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23-Mar-2017 às 13:26
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desafio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pokemons`
--

CREATE TABLE `pokemons` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `type` varchar(32) NOT NULL,
  `hp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pokemons`
--

INSERT INTO `pokemons` (`id`, `name`, `type`, `hp`) VALUES
(5, 'Ivysaur', 'Grass', 60),
(6, 'Venusaur', 'Grass', 80),
(7, 'Charmander ', 'Fire', 39),
(8, 'Charmeleon', 'Fire', 58),
(9, 'Charizard', 'Fire', 78),
(10, 'Squirtle', 'Water', 44),
(12, 'Wartortle', 'Water', 59),
(13, 'Blastoise', 'Water', 79),
(14, 'Caterpie', 'Bug', 45),
(15, 'Metapod', 'Bug', 50),
(16, 'BULBASSAUR', 'Grass', 45);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pokemons`
--
ALTER TABLE `pokemons`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pokemons`
--
ALTER TABLE `pokemons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
