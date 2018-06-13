-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Jun-2018 às 17:28
-- Versão do servidor: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gustavor_find`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `cd_usuario` int(11) NOT NULL,
  `nm_usuario` varchar(50) NOT NULL,
  `senha_usuario` varchar(50) NOT NULL,
  `sm_usuario` varchar(50) NOT NULL,
  `email_usuario` varchar(30) NOT NULL,
  `dt_nascimento` date NOT NULL,
  `cep_usuario` int(8) NOT NULL,
  `rua_usuario` varchar(30) NOT NULL,
  `bairro_usuario` varchar(20) NOT NULL,
  `cidade_usuario` varchar(20) NOT NULL,
  `estado_usuario` varchar(20) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cd_usuario`, `nm_usuario`, `senha_usuario`, `sm_usuario`, `email_usuario`, `dt_nascimento`, `cep_usuario`, `rua_usuario`, `bairro_usuario`, `cidade_usuario`, `estado_usuario`, `numero`) VALUES
(1, 'Gustavo', 'teste', 'Rieper', 'gustavorieper@gmail.com', '1996-07-17', 89210128, 'Rua InÃ¡cio de Oliveira', 'Itaum', 'Joinville', 'SC', 350);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cd_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cd_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
