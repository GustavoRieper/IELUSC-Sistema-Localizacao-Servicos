-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Mar-2018 às 22:04
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `find`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `cd_usuario` int(11) NOT NULL COMMENT 'codigo do usuario',
  `nm_usuario` varchar(50) NOT NULL COMMENT 'Nome do usuario',
  `senha_usuario` varchar(50) NOT NULL COMMENT 'Senha do usuario',
  `sm_usuario` varchar(50) NOT NULL COMMENT 'Sobrenome usuario',
  `email_usuario` varchar(30) NOT NULL COMMENT 'Email usuario',
  `dt_nascimento` date NOT NULL COMMENT 'Data Nascimento usuario',
  `cep_usuario` int(8) NOT NULL COMMENT 'CEP do usuario',
  `rua_usuario` varchar(50) NOT NULL COMMENT 'Rua do usuario',
  `bairo_usuario` varchar(20) NOT NULL COMMENT 'Bairro do usuario',
  `cidade_usuario` varchar(20) NOT NULL COMMENT 'Cidade do usuario',
  `estado_usuario` varchar(20) NOT NULL COMMENT 'Estado do usuario',
  `genero_usuario` varchar(15) DEFAULT NULL COMMENT 'Genero do usuario'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `cd_usuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'codigo do usuario';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
