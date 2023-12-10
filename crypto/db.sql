-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Dez-2023 às 00:05
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cryptolink`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carteira`
--

CREATE TABLE `carteira` (
  `WalletID` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `UserID` int(11) DEFAULT NULL,
  `SaldoCriptomoeda` decimal(18,8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ordem`
--

CREATE TABLE `ordem` (
  `OrderID` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `UserID` int(11) DEFAULT NULL,
  `TipoOrdem` enum('Compra','Venda') NOT NULL,
  `Criptomoeda` varchar(50) NOT NULL,
  `Quantidade` decimal(18,8) NOT NULL,
  `Preco` decimal(18,8) NOT NULL,
  `StatusOrdem` enum('Aberta','Correspondida','Concluida') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `ProfileID` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `UserID` int(11) DEFAULT NULL,
  `Nome` varchar(255) DEFAULT NULL,
  `InformacoesContato` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `transacao`
--

CREATE TABLE `transacao` (
  `TransactionID` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `UserID` int(11) DEFAULT NULL,
  `TipoTransacao` enum('Deposito','Saque','Compra','Venda') NOT NULL,
  `ValorTransacao` decimal(18,8) NOT NULL,
  `DataHoraTransacao` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `DataRegistro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`UserID`, `Username`, `Password`, `Email`, `DataRegistro`) VALUES
(1, 'kanagi kazuya', '*6B5EDDE567F4F29018862811195DBD14B8ADDD2A', 'kanagikazuya20@gmail.com', '2023-11-30 22:48:12');

