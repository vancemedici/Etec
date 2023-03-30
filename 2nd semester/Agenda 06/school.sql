-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 19-Mar-2023 às 21:04
-- Versão do servidor: 8.0.32
-- versão do PHP: 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `school`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `graduate`
--

CREATE TABLE `graduate` (
  `studentID` int NOT NULL,
  `name` varchar(45) NOT NULL,
  `grade1` float NOT NULL,
  `grade2` float NOT NULL,
  `grade3` float NOT NULL,
  `grade4` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `graduate`
--

INSERT INTO `graduate` (`studentID`, `name`, `grade1`, `grade2`, `grade3`, `grade4`) VALUES
(1, 'Eduarda', 10, 10, 9, 10),
(2, 'Paulo', 10, 9, 8, 9),
(3, 'Igor', 10, 8, 10, 10),
(4, 'Guilherme', 10, 9, 8, 7),
(5, 'Henrique', 9, 9, 8, 7),
(6, 'Nilson', 10, 9, 10, 9),
(7, 'Ana', 9, 9, 8, 8),
(8, 'Amanda', 8, 9, 9, 8),
(9, 'Carlos', 6, 6, 5, 6),
(10, 'Pedro', 8, 8, 8, 7);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `graduate`
--
ALTER TABLE `graduate`
  ADD PRIMARY KEY (`studentID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `graduate`
--
ALTER TABLE `graduate`
  MODIFY `studentID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
