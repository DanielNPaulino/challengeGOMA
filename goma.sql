-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Out-2019 às 16:33
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `goma`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(20) NOT NULL,
  `NIF` varchar(20) NOT NULL,
  `Telefone` int(20) NOT NULL,
  `Morada` varchar(20) NOT NULL,
  `Localidade` varchar(20) NOT NULL,
  `Country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`ID`, `Nome`, `NIF`, `Telefone`, `Morada`, `Localidade`, `Country`) VALUES
(11, 'Daniel', '111111111', 123456789, 'Rua do Daniel', 'Beja', 'Portugal'),
(12, 'JoÃ£o', '222222222', 456789123, 'Rua do JoÃ£o', 'Ã‰vora', 'Espanha'),
(13, 'Pedro', '333333333', 789456123, 'Rua do Pedro', 'Ã‰vora', 'FranÃ§a'),
(14, 'Miguel', '444444444', 147258369, 'Rua do Miguel', 'Ã‰vora', 'Holanda'),
(15, 'AndrÃ©', '555555555', 852963741, 'Rua do AndrÃ©', 'Brinches', 'Portugal');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
