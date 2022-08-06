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
-- Estrutura da tabela `status_item_cotacao`
--

CREATE TABLE `status_item_cotacao` (
  `id_status_item_cotacao` int(11) NOT NULL,
  `status_item_cotacao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `status_item_cotacao`
--

INSERT INTO `status_item_cotacao` (`id_status_item_cotacao`, `status_item_cotacao`) VALUES
(1, 'Aguardando Cotação'),
(2, 'Aguardando Aprovação'),
(3, 'Aprovado'),
(4, 'Cancelado'),
(5, 'Rejeitado'),
(6, 'Não comercializa'),
(7, 'Não Atende'),
(8, 'No Estoque');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `status_item_cotacao`
--
ALTER TABLE `status_item_cotacao`
  ADD PRIMARY KEY (`id_status_item_cotacao`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
