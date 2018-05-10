-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Mar-2018 às 04:24
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

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
  `bairro_usuario` varchar(20) NOT NULL COMMENT 'Bairro do usuario',
  `cidade_usuario` varchar(20) NOT NULL COMMENT 'Cidade do usuario',
  `estado_usuario` varchar(20) NOT NULL COMMENT 'Estado do usuario',
  `genero_usuario` varchar(15) DEFAULT NULL COMMENT 'Genero do usuario'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cd_usuario`, `nm_usuario`, `senha_usuario`, `sm_usuario`, `email_usuario`, `dt_nascimento`, `cep_usuario`, `rua_usuario`, `bairro_usuario`, `cidade_usuario`, `estado_usuario`, `genero_usuario`) VALUES
(1, 'Gustavo', 'teste', 'Rieper', 'gustavorieper@gmail.com', '1996-07-17', 89210128, 'Inácio de Oliveira', 'Itaum', 'Joinville', 'SC', 'Masculino'),
(2, 'Thiago', 'qwe', 'Avila', 'Thiago.avila@gmail.com', '1998-01-01', 89233355, 'Rua Cidade de Patos de Minas', 'Profipo', 'Joinville', 'SC', NULL),
(3, 'Thiago', 'qwe', 'Avila', 'Thiago.avila@gmail.com', '1998-01-01', 89233355, 'Rua Cidade de Patos de Minas', 'Profipo', 'Joinville', 'SC', NULL),
(4, 'Adebayor', 'ade', 'Oliveira', 'adebayor@gmail.com', '1990-02-01', 89221660, 'Rua Guaratuba', 'SaguaÃ§u', 'Joinville', 'SC', NULL),
(5, 'Roger', 'roja', 'Oliveira', 'roja@gmail.com', '1992-05-31', 89221710, 'Rua Estrela', 'SaguaÃ§u', 'Joinville', 'SC', NULL);

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
  MODIFY `cd_usuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'codigo do usuario', AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
