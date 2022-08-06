-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Jul-2020 às 13:23
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
-- Banco de dados: `erp_laravel_final`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_movimentos`
--

CREATE TABLE `tipo_movimentos` (
  `id` int(11) NOT NULL,
  `tipo_movimento` varchar(100) NOT NULL,
  `ent_sai` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_movimentos`
--

INSERT INTO `tipo_movimentos` (`id`, `tipo_movimento`, `ent_sai`) VALUES
(1, 'Entrada Avulsa', 'E'),
(2, 'Entrada Por Ajuste Balanço', 'E'),
(3, 'Entrada por Ordem de Compra', 'E'),
(4, 'Entrada por Ordem de Produção', 'S'),
(5, 'Saída Avulsa', 'S'),
(6, 'Saída por Perda', 'S'),
(7, 'Saída por Venda do Produto', 'S'),
(8, 'Saída por Ordem de Produção', 'S'),
(9, 'Saída por Ajuste de Balanço', 'S'),
(10, 'Saída para Consumo Interno', 'S');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tipo_movimentos`
--
ALTER TABLE `tipo_movimentos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tipo_movimentos`
--
ALTER TABLE `tipo_movimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
