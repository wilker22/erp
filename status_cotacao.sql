-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Jun-2020 às 11:59
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `erp2020`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `status_cotacao`
--

CREATE TABLE `status_cotacao` (
  `id_status_cotacao` int(11) NOT NULL,
  `status_cotacao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `status_cotacao`
--

INSERT INTO `status_cotacao` (`id_status_cotacao`, `status_cotacao`) VALUES
(1, 'Iniciada'),
(2, 'Aguardando Fornecedores'),
(3, 'Pronto para Cotar'),
(4, 'Cotado');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `status_cotacao`
--
ALTER TABLE `status_cotacao`
  ADD PRIMARY KEY (`id_status_cotacao`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `status_cotacao`
--
ALTER TABLE `status_cotacao`
  MODIFY `id_status_cotacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
