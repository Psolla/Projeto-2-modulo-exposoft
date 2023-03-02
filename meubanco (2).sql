-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Jun-2022 às 03:30
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `meubanco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastrartenis`
--

CREATE TABLE `cadastrartenis` (
  `imagem` varchar(40) COLLATE utf8_bin NOT NULL,
  `nome` varchar(30) COLLATE utf8_bin NOT NULL,
  `valor` float NOT NULL,
  `parcela` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `cadastrartenis`
--

INSERT INTO `cadastrartenis` (`imagem`, `nome`, `valor`, `parcela`) VALUES
('Chinelo Adidas Yeezy Slide _soot_ Marrom', 'CHINELO', 300, '3x'),
('TÊNIS ADIDAS SUPERSTAR BRANCO PRETO.jpg', 'tenis', 250, '3x'),
('ADIDASSUPERSTAR.jpg', 'tenis', 150, '3x'),
('TÊNIS NIKE AIR JORDAN 1 RETRO HIGH OG UN', '', 0, ''),
('TÊNIS NIKE AIR FORCE 1 EXPERIMENTAL PRET', 'sSsS', 300, ''),
('ADIDASNMDR1STARWARS.jpg', 'tenis', 300, '3x');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `nome` varchar(120) COLLATE utf8_bin NOT NULL,
  `telefone` varchar(15) COLLATE utf8_bin NOT NULL,
  `email` varchar(120) COLLATE utf8_bin NOT NULL,
  `senha` varchar(16) COLLATE utf8_bin NOT NULL,
  `dt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`nome`, `telefone`, `email`, `senha`, `dt`) VALUES
('', '', '', '', '0000-00-00'),
('', '', '', '', '0000-00-00'),
('joao', '11111', 'joao@email', '1234', '2022-06-08'),
('maria', '11954221232', 'maria@gmail.com', '12345', '2004-02-11'),
('pedro', '11954221291', 'pedronunes@gmail.com', 'pedro123', '2004-02-11'),
('zacarias', '11954221321', 'zacarias@gmail.com', 'zaca', '2004-01-12'),
('eduarda', '11954221212', 'eduarda@gmail.com', '1234567', '2005-06-29'),
('lua', '11954221232', 'lua@gmail.com', '123', '2005-04-12'),
('', '', '', '', '0000-00-00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
