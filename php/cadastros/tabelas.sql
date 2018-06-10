-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14-Set-2017 às 21:19
-- Versão do servidor: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `senai`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bairros`
--

CREATE TABLE IF NOT EXISTS `bairros` (
  `bairro_id` int(11) NOT NULL,
  `cidade_id` int(11) NOT NULL,
  `bairro_nome` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `bairros`
--

INSERT INTO `bairros` (`bairro_id`, `cidade_id`, `bairro_nome`) VALUES
(1, 4, 'Morumbi'),
(2, 4, 'Interlagos'),
(3, 2, 'Baeta Neves'),
(4, 2, 'Rudge Ramos'),
(5, 2, 'Centro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidades`
--

CREATE TABLE IF NOT EXISTS `cidades` (
  `cidade_id` int(11) NOT NULL,
  `cidade_nome` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cidades`
--

INSERT INTO `cidades` (`cidade_id`, `cidade_nome`) VALUES
(1, 'Santo André'),
(2, 'São Bernardo do Campo'),
(3, 'Santos'),
(4, 'São Paulo'),
(5, 'Diadema');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imoveis`
--

CREATE TABLE IF NOT EXISTS `imoveis` (
  `imovel_id` int(11) NOT NULL,
  `codigo` varchar(5) NOT NULL,
  `tipo_id` int(11) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `bairro_id` int(11) NOT NULL,
  `cidade_id` int(11) NOT NULL,
  `contato` varchar(10) NOT NULL,
  `telefone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `imoveis`
--

INSERT INTO `imoveis` (`imovel_id`, `codigo`, `tipo_id`, `preco`, `bairro_id`, `cidade_id`, `contato`, `telefone`) VALUES
(1, 'AP401', 1, '450000.00', 4, 2, 'João', '1111-1111'),
(2, 'AP402', 1, '980000.00', 1, 4, 'Maria', '2222-2222'),
(3, 'CA123', 2, '345000.00', 3, 2, 'José', '3333-3333'),
(4, 'TE002', 4, '1240000.00', 2, 4, 'Pedro', '4444-4444'),
(5, 'CA134', 2, '725000.00', 2, 4, 'Lucy', '5555-5555');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

CREATE TABLE IF NOT EXISTS `tipo` (
  `tipo_id` int(11) NOT NULL,
  `tipo_nome` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo`
--

INSERT INTO `tipo` (`tipo_id`, `tipo_nome`) VALUES
(1, 'Apartamento'),
(2, 'Casa Térrea'),
(3, 'Sobrado'),
(4, 'Terreno'),
(5, 'Galpão');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
