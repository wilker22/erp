-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Jul-2020 às 12:24
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
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(10) UNSIGNED NOT NULL,
  `produto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eh_produto` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eh_insumo` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` decimal(10,2) NOT NULL DEFAULT 0.00,
  `imagem` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ativo` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'S',
  `categoria_id` int(10) UNSIGNED NOT NULL,
  `unidade_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `preco_alto` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `produto`, `eh_produto`, `eh_insumo`, `preco`, `imagem`, `ativo`, `categoria_id`, `unidade_id`, `created_at`, `updated_at`, `preco_alto`) VALUES
(3, 'Panela 5', 'S', 'N', '100.00', 'PANELA_5.jpg', 'S', 1, 1, NULL, NULL, '150.00'),
(4, 'Panela de Pressão', 'S', 'N', '100.00', 'PANELA_COM_TAMPA_2.jpg', 'S', 1, 1, NULL, NULL, '150.00'),
(5, 'Frigideira Reforçada', 'S', 'N', '497.00', 'FRIGIDEIRA_REFORCADA.jpg', 'S', 7, 1, NULL, NULL, '150.00'),
(6, 'Frigideira Cabo Tubular', 'S', 'N', '100.00', 'FRIGIDEIRA_CABO_TUBULAR_2.jpg', 'S', 7, 1, NULL, NULL, '150.00'),
(7, 'Panela Longa', 'S', 'N', '100.00', 'PANELA_LONGA.jpg', 'S', 1, 1, NULL, NULL, '150.00'),
(8, 'Panela Arredondada', 'S', 'N', '100.00', 'PANELA_RREDONDADA2.jpg', 'S', 1, 1, NULL, NULL, '150.00'),
(9, 'Panela Laranja', 'S', 'N', '50.00', 'PANELA_LARANJA.jpg', 'S', 1, 1, NULL, NULL, '150.00'),
(10, 'Panela Longa 2', 'S', 'N', '100.00', 'PANELA_LONGA2.jpg', 'S', 1, 1, NULL, NULL, '150.00'),
(11, 'Panela Achatada', 'S', 'N', '100.00', 'PANELA_ACHATADA.jpg', 'S', 1, 1, NULL, NULL, '150.00'),
(12, 'Panela Achatada 2', 'S', 'N', '100.00', 'PANELA_ACHATADA2.jpg', 'S', 1, 1, NULL, NULL, '150.00'),
(13, 'Panela Verde', 'S', 'N', '100.00', 'PANELA_VERDE.jpg', 'S', 1, 1, NULL, NULL, '150.00'),
(14, 'Panela Verde 2', 'S', 'N', '100.00', 'PANELA_VERDE2.jpg', 'S', 1, 1, NULL, NULL, '150.00'),
(15, 'Frigideira sem Tampa Laranja', 'S', 'N', '100.00', 'FRIGIDEIRA_SEM_TAMPA_LARANJA.jpg', 'S', 7, 1, NULL, NULL, '150.00'),
(16, 'Frigideira Laranja', 'S', 'N', '100.00', 'FRIGIDEIRA_LARANJA.jpg', 'S', 7, 1, NULL, NULL, '150.00'),
(17, 'Cuscuzeira Laranja', 'S', 'N', '100.00', 'CUSCUZEIRA_LARANJA.jpg', 'S', 2, 1, NULL, NULL, '150.00'),
(18, 'Cuscuzeira 3', 'S', 'N', '150.00', 'CUSCUZEIRA3.jpg', 'S', 2, 1, NULL, NULL, '150.00'),
(19, 'Leiteira Tubular 3', 'S', 'N', '50.00', 'LEITEIRAS_TUBULAR3.jpg', 'S', 6, 1, NULL, NULL, '150.00'),
(20, 'Leiteira com Tampa Laranja', 'S', 'N', '30.00', 'LEITEIRA_COM_TAMPA_LARANJA4.jpg', 'S', 6, 1, NULL, NULL, '150.00'),
(21, 'Panela com tampa 2', 'S', 'N', '100.00', 'PANELA_COM_TAMPA_2.jpg', 'S', 1, 1, NULL, NULL, '150.00'),
(22, 'ABRASIVO CEBO AMARELO', '', 'S', '15.70', '', 'S', 11, 1, NULL, NULL, '0.00'),
(23, 'ALÇA DE LEITEIRA POP.GRANDE  COD- 321', '', 'S', '0.50', '', 'S', 11, 1, NULL, NULL, '0.00'),
(24, 'ALCA PARA TAMPA', '', 'S', '15.90', '', 'S', 11, 1, NULL, NULL, '0.00'),
(25, 'ALÇA PARA PANELA DE PRESSAO COD. 00P', '', 'S', '0.40', '', 'S', 11, 1, NULL, NULL, '0.00'),
(26, 'BORRACHAS P/ PANELA PRESSAO 4.5', '', 'S', '0.50', '', 'S', 11, 1, NULL, NULL, '0.00'),
(27, 'CABO PARA PANELA DE PRESSAO 4.5L COD-100', '', 'S', '1.20', '', 'S', 11, 1, NULL, NULL, '0.00'),
(28, 'CABO CUSCUZEIRA ', '', 'S', '0.65', '', 'S', 11, 1, NULL, NULL, '0.00'),
(29, 'CABO DE CAÇAROLA COD.227', '', 'S', '0.90', '', 'S', 11, 1, NULL, NULL, '0.00'),
(30, 'CABO DE FRIGIDEIRA PEQ REF. 417 MCA', '', 'S', '5.90', '', 'S', 11, 1, NULL, NULL, '0.00'),
(31, 'CABO DE LEITEIRA COD.2046', '', 'S', '1.30', '', 'S', 11, 1, NULL, NULL, '0.00'),
(32, 'CABO REBITADO PEQUENO 3F 90G', '', 'S', '0.95', '', 'S', 11, 1, NULL, NULL, '0.00'),
(33, 'HASTE GRANDE  20 X 130', '', 'S', '15.90', '', 'S', 11, 1, NULL, NULL, '0.00'),
(34, 'LIXA', '', 'S', '0.00', '', 'S', 11, 1, NULL, NULL, '0.00'),
(35, 'ORELHA DE CALDEIRAO', '', 'S', '31.80', '', 'S', 11, 1, NULL, NULL, '0.00'),
(36, 'PESO TIPO UNIV.PRETO S/MARCA LEVE', '', 'S', '1.30', '', 'S', 11, 1, NULL, NULL, '0.00'),
(37, 'PINO 1/2 SEXT DIAM 01 R 3/8 UNF', '', 'S', '1.30', '', 'S', 11, 1, NULL, NULL, '0.00'),
(38, 'POMEL COLOR', '', 'S', '0.60', '', 'S', 11, 1, NULL, NULL, '0.00'),
(39, 'RALO 110', '', 'S', '13.70', '', 'S', 11, 1, NULL, NULL, '0.00'),
(40, 'RIBITE 1/8  X 7   PEQUENO', '', 'S', '31.80', '', 'S', 11, 1, NULL, NULL, '0.00'),
(41, 'RODA DE BRIM', '', 'S', '0.30', '', 'S', 11, 1, NULL, NULL, '0.00'),
(42, 'SELO DE SEGURANÇA', '', 'S', '0.00', '', 'S', 11, 1, NULL, NULL, '0.00'),
(43, 'SUPORTE ALUM. BALDE Nº02', '', 'S', '31.80', '', 'S', 11, 1, NULL, NULL, '0.00'),
(44, 'DISC0 210 X 1,10', '', 'S', '12.70', '', 'S', 11, 1, NULL, NULL, '0.00'),
(45, 'DISC0 PARA TAMPA', '', 'S', '1.00', '', 'S', 11, 1, NULL, NULL, '1.00'),
(46, 'TAMPA LUXO 14', 'S', 'S', '1.00', '', 'S', 11, 1, NULL, NULL, '1.00'),
(47, 'TAMPA PARA PANELA DE PRESSÃO', 'S', 'S', '1.00', '', 'S', 11, 1, NULL, NULL, '1.00'),
(48, 'VÁLVULA SEGURANÇA PANELA PRESSÃO', '', 'S', '1.00', '', 'S', 11, 1, NULL, NULL, '1.00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produtos_categoria_id_foreign` (`categoria_id`),
  ADD KEY `produtos_unidade_id_foreign` (`unidade_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `produtos_unidade_id_foreign` FOREIGN KEY (`unidade_id`) REFERENCES `unidades` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
