-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Maio-2018 às 22:29
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
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cd_usuario`, `nm_usuario`, `senha_usuario`, `sm_usuario`, `email_usuario`, `dt_nascimento`, `cep_usuario`, `rua_usuario`, `bairro_usuario`, `cidade_usuario`, `estado_usuario`, `numero`) VALUES
(1, 'Gustavo', 'teste', 'Rieper', 'gustavorieper@gmail.com', '1996-07-17', 89210128, 'Inacio de Oliveira', 'Itaum', 'Joinville', 'SC', 350),
(2, 'Thiago', 'qwe', 'Avila', 'Thiago.avila@gmail.com', '1998-01-01', 89233355, 'Rua Cidade de Patos de Minas', 'Profipo', 'Joinville', 'SC', 0),
(4, 'Adebayor', 'ade', 'Oliveira', 'adebayor@gmail.com', '1990-02-01', 89221660, 'Rua Guaratuba', 'SaguaÃ§u', 'Joinville', 'SC', 0),
(5, '', 'roja', 'Oliveira', 'roja@gmail.com', '1992-05-31', 89221710, 'Rua Estrela', 'SaguaÃ§u', 'Joinville', 'SC', 0),
(6, '', '123', 'GonÃ§alves', 'clodgon@gmail.com', '1981-01-01', 89239240, 'Rua dos Holandeses', 'Pirabeiraba (Pirabei', 'Joinville', 'SC', 0),
(7, 'Thiago', '1234', 'Avila', 'thiagoavilafolks@gmail.com', '1998-10-25', 89233355, 'Rua Cidade de Patos de Minas', 'Profipo', 'Joinville', 'SC', 0),
(8, 'Maicol', 'teste', 'Gandolphi', 'maicol@gmail.com', '1990-01-01', 89235373, 'Rua Gercino Silveira', 'Itinga', 'Joinville', 'SC', 0),
(9, '', '123', 'Carvalho', 'rogerferndes@gmail.com', '2018-03-19', 89239240, 'Rua dos Holandeses', 'Pirabeiraba (Pirabei', 'Joinville', 'SC', 0),
(10, 'Yuri', 'gustavo', 'Komatsu', '20171036@ielusc.br', '1988-07-12', 89218415, 'Rua Santa SÃ©', 'Costa e Silva', 'Joinville', 'SC', 0),
(11, 'Diva', 'figolimpo', 'Alves', 'diva.hsm@gmail.com', '1994-09-16', 89237267, 'Rua Gerhard Dietrich Barkemeyer', 'Vila Nova', 'Joinville', 'SC', 0),
(12, '', '1234', 'Pinto', 'adebaior.pinto@gmail.com', '2005-01-01', 89423988, 'Rua Adebaior ', 'Ademar Baior', 'Adebaior City', 'Estado Adebaior', 0),
(14, '', 'julio', 'CÃ©lio', 'jc@gmail.com', '6669-05-10', 58774631, '', '', '', '', 0),
(15, '', 'teste1', 'Duarte', 'mduarte@gmail.com', '1895-04-07', 89221660, 'Rua Guaratuba', 'SaguaÃ§u', 'Joinville', 'SC', 0),
(16, '', 'julia', 'Tavaris', 'jt@gmail.com', '1988-06-04', 89221665, 'Rua Mafra', 'SaguaÃ§u', 'Joinville', 'SC', 84),
(17, '', 'teste1', 'Picolli', 'ppicolli@gmail.com', '1990-07-20', 89211400, 'Rua Presidente Nilo PeÃ§anha', 'Floresta', 'Joinville', 'SC', 280),
(18, '', 'teste', 'Marques', 'bmarques@gmail.com', '1997-07-19', 89221180, 'Rua Saudades', 'SaguaÃ§u', 'Joinville', 'SC', 309),
(28, 'ZÃ© lindo ', 'teste', 'Petri', 'zpetri@gmail.com', '1973-05-30', 89216580, 'Rua Leopoldo Dietrich', 'GlÃ³ria', 'Joinville', 'SC', 158),
(29, 'yuri', 'teste', 'Alexandre', 'yuri@gmail.com', '1994-02-01', 89218415, 'Rua Santa SÃ©', 'Costa e Silva', 'Joinville', 'SC', 30);

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
  MODIFY `cd_usuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'codigo do usuario', AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
