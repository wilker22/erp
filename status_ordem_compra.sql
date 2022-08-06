-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Jun-2020 às 12:46
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
-- Estrutura da tabela `status_ordem_compra`
--

CREATE TABLE `status_ordem_compra` (
  `id_status_ordem_compra` int(11) NOT NULL,
  `status_ordem_compra` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `status_ordem_compra`
--

INSERT INTO `status_ordem_compra` (`id_status_ordem_compra`, `status_ordem_compra`) VALUES
(1, 'Em Digitação'),
(2, 'Aguardando Aprovação'),
(3, 'Aprovado'),
(4, 'Autorizado'),
(5, 'Finalizado'),
(6, 'Cancelado');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `status_ordem_compra`
--
ALTER TABLE `status_ordem_compra`
  ADD PRIMARY KEY (`id_status_ordem_compra`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `status_ordem_compra`
--
ALTER TABLE `status_ordem_compra`
  MODIFY `id_status_ordem_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
