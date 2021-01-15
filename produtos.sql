
CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_unidade` int(11) NOT NULL,
  `produto` varchar(100) NOT NULL,
  `eh_produto` varchar(1) DEFAULT NULL,
  `eh_insumo` varchar(1) DEFAULT NULL,
  `eh_promocao` varchar(1) NOT NULL DEFAULT 'N',
  `eh_maisvendido` varchar(1) NOT NULL DEFAULT 'N',
  `eh_lancamento` varchar(1) NOT NULL DEFAULT 'N',
  `codigo_barra` varchar(20) NOT NULL,
  `preco_alto` decimal(10,2) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `descricao` text DEFAULT NULL,
  `imagem` varchar(80) NOT NULL,
  `ativo` varchar(1) NOT NULL DEFAULT 'S',
  `estoque_inicial` int(11) DEFAULT 0,
  `estoque_minimo` int(11) DEFAULT 0,
  `estoque_maximo` int(11) DEFAULT 0,
  `estoque_atual` int(11) DEFAULT 0,
  `estoque_reservado` int(11) NOT NULL DEFAULT 0,
  `estoque_real` int(11) NOT NULL DEFAULT 0,
  `custo_atual` decimal(10,2) DEFAULT 0.00,
  `custo_medio` decimal(10,2) DEFAULT 0.00,
  `custo_producao` decimal(10,2) DEFAULT 0.00,
  `estoque_financeiro` decimal(10,2) DEFAULT 0.00,
  `gtin` varchar(20) DEFAULT NULL,
  `ncm` varchar(20) DEFAULT NULL,
  `cbenef` varchar(20) DEFAULT NULL,
  `extipi` varchar(10) DEFAULT NULL,
  `cfop` int(11) DEFAULT NULL,
  `mva` decimal(10,2) DEFAULT NULL,
  `nfci` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produtos` (`id_produto`, `id_categoria`, `id_unidade`, `produto`, `eh_produto`, `eh_insumo`, `eh_promocao`, `eh_maisvendido`, `eh_lancamento`, `codigo_barra`, `preco_alto`, `preco`, `descricao`, `imagem`, `ativo`, `estoque_inicial`, `estoque_minimo`, `estoque_maximo`, `estoque_atual`, `estoque_reservado`, `estoque_real`, `custo_atual`, `custo_medio`, `custo_producao`, `estoque_financeiro`, `gtin`, `ncm`, `cbenef`, `extipi`, `cfop`, `mva`, `nfci`) VALUES
(8, 1, 1, 'Panela 5', 'S', 'N', 'S', 'N', 'N', '', '150.00', '100.00', NULL, 'PANELA_5.jpg', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 1, 1, 'Panela de PressÃ£o', 'S', 'N', 'N', 'N', 'N', '', '150.00', '100.00', NULL, 'PANELA_COM_TAMPA_2.jpg', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 7, 1, 'Frigideira ReforÃ§ada', 'S', 'N', 'S', 'N', 'N', '', '150.00', '497.00', NULL, 'FRIGIDEIRA_REFORCADA.jpg', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 7, 1, 'Frigideira Cabo Tubular', 'S', 'N', 'N', 'N', 'N', '', '150.00', '100.00', NULL, 'FRIGIDEIRA_CABO_TUBULAR_2.jpg', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 1, 1, 'Panela Longa', 'S', 'N', 'N', 'N', 'N', '', '150.00', '100.00', NULL, 'PANELA_LONGA.jpg', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 1, 1, 'Panela Arredondada', 'S', 'N', 'N', 'N', 'N', '', '150.00', '100.00', NULL, 'PANELA_RREDONDADA2.jpg', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 1, 1, 'Panela Laranja', 'S', 'N', 'N', 'N', 'N', '', '150.00', '50.00', NULL, 'PANELA_LARANJA.jpg', 'S', 0, 0, 0, 7, 0, 7, '0.00', '0.00', '0.00', '0.00', 'SEM GETIN', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 1, 1, 'Panela Longa 2', 'S', 'N', 'N', 'N', 'N', '', '150.00', '100.00', NULL, 'PANELA_LONGA2.jpg', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 1, 1, 'Panela Achatada', 'S', 'N', 'N', 'N', 'N', '', '150.00', '100.00', NULL, 'PANELA_ACHATADA.jpg', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 1, 1, 'Panela Achatada 2', 'S', 'N', 'N', 'N', 'N', '', '150.00', '100.00', NULL, 'PANELA_ACHATADA2.jpg', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 1, 1, 'Panela Verde', 'S', 'N', 'N', 'N', 'N', '', '150.00', '100.00', NULL, 'PANELA_VERDE.jpg', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 1, 1, 'Panela Verde 2', 'S', 'N', 'N', 'N', 'N', '', '150.00', '100.00', NULL, 'PANELA_VERDE2.jpg', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 7, 1, 'Frigideira sem Tampa Laranja', 'S', 'N', 'N', 'N', 'N', '', '150.00', '100.00', NULL, 'FRIGIDEIRA_SEM_TAMPA_LARANJA.jpg', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 7, 1, 'Frigideira Laranja', 'S', 'N', 'N', 'N', 'N', '', '150.00', '100.00', NULL, 'FRIGIDEIRA_LARANJA.jpg', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 2, 1, 'Cuscuzeira Laranja', 'S', 'N', 'N', 'N', 'N', '', '150.00', '100.00', NULL, 'CUSCUZEIRA_LARANJA.jpg', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 2, 1, 'Cuscuzeira 3', 'S', 'N', 'N', 'N', 'N', '', '150.00', '150.00', NULL, 'CUSCUZEIRA3.jpg', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 6, 1, 'Leiteira Tubular 3', 'S', 'N', 'N', 'N', 'N', '', '150.00', '50.00', NULL, 'LEITEIRAS_TUBULAR3.jpg', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 6, 1, 'Leiteira com Tampa Laranja', 'S', 'N', 'N', 'N', 'N', '', '150.00', '30.00', NULL, 'LEITEIRA_COM_TAMPA_LARANJA4.jpg', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 1, 1, 'Panela com tampa 2', 'S', 'N', 'N', 'N', 'N', '', '150.00', '100.00', NULL, 'PANELA_COM_TAMPA_2.jpg', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 11, 1, 'ABRASIVO CEBO AMARELO', NULL, 'S', 'N', 'N', 'N', '', '0.00', '15.70', NULL, '', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 11, 1, 'ALCA PARA TAMPA', NULL, 'S', 'N', 'N', 'N', '', '0.00', '15.90', NULL, '', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 11, 1, 'ALÃ‡A DE LEITEIRA POP.GRANDE  COD- 321', NULL, 'S', 'N', 'N', 'N', '', '0.00', '0.50', NULL, '', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 11, 1, 'ALÃ‡A PARA PANELA DE PRESSAO COD. 00P', NULL, 'S', 'N', 'N', 'N', '', '0.00', '0.40', NULL, '', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, 11, 1, 'BORRACHAS P/ PANELA PRESSAO 4.5', NULL, 'S', 'N', 'N', 'N', '', '0.00', '0.50', NULL, '', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, 11, 1, 'CABO CUSCUZEIRA ', NULL, 'S', 'N', 'N', 'N', '', '0.00', '0.65', NULL, '', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 11, 1, 'CABO DE CAÃ‡AROLA COD.227', NULL, 'S', 'N', 'N', 'N', '', '0.00', '0.90', NULL, '', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 11, 1, 'CABO DE FRIGIDEIRA PEQ REF. 417 MCA', NULL, 'S', 'N', 'N', 'N', '', '0.00', '5.90', NULL, '', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 11, 1, 'CABO DE LEITEIRA COD.2046', NULL, 'S', 'N', 'N', 'N', '', '0.00', '1.30', NULL, '', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(85, 11, 1, 'CABO PARA PANELA DE PRESSAO 4.5L COD-100', NULL, 'S', 'N', 'N', 'N', '', '0.00', '1.20', NULL, '', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(86, 11, 1, 'CABO REBITADO PEQUENO 3F 90G', NULL, 'S', 'N', 'N', 'N', '', '0.00', '0.95', NULL, '', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(87, 11, 1, 'HASTE GRANDE  20 X 130', NULL, 'S', 'N', 'N', 'N', '', '0.00', '15.90', NULL, '', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(91, 11, 1, 'LIXA', NULL, 'S', 'N', 'N', 'N', '', '0.00', '0.50', NULL, '', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(92, 11, 1, 'ORELHA DE CALDEIRAO', NULL, 'S', 'N', 'N', 'N', '', '0.00', '31.80', NULL, '', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(93, 11, 1, 'PESO TIPO UNIV.PRETO S/MARCA LEVE', NULL, 'S', 'N', 'N', 'N', '', '0.00', '1.30', NULL, '', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(94, 11, 1, 'PINO 1/2 SEXT DIAM 01 R 3/8 UNF', NULL, 'S', 'N', 'N', 'N', '', '0.00', '1.30', NULL, '', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(95, 11, 1, 'POMEL COLOR', NULL, 'S', 'N', 'N', 'N', '', '0.00', '0.60', NULL, '', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(103, 11, 1, 'RALO 110', NULL, 'S', 'N', 'N', 'N', '', '0.00', '13.70', NULL, '', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(107, 11, 1, 'RIBITE 1/8  X 7   PEQUENO', NULL, 'S', 'N', 'N', 'N', '', '0.00', '31.80', NULL, '', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(113, 11, 1, 'RODA DE BRIM', NULL, 'S', 'N', 'N', 'N', '', '0.00', '0.30', NULL, '', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(114, 11, 1, 'SELO DE SEGURANÃ‡A', NULL, 'S', 'N', 'N', 'N', '', '0.00', '0.00', NULL, '', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(115, 11, 1, 'SUPORTE ALUM. BALDE NÂº02', NULL, 'S', 'N', 'N', 'N', '', '0.00', '31.80', NULL, '', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(117, 11, 1, 'DISC0 210 X 1,10', NULL, 'S', 'N', 'N', 'N', '', '0.00', '12.70', NULL, '', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(142, 11, 1, 'TAMPA LUXO 14', 'S', 'S', 'N', 'N', 'N', '', '1.00', '1.00', NULL, '', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(143, 11, 1, 'DISC0 PARA TAMPA', NULL, 'S', 'N', 'N', 'N', '', '1.00', '1.00', NULL, '', 'S', 0, 0, 0, 1000, 0, 1000, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(144, 11, 1, 'TAMPA PARA PANELA DE PRESSÃƒO', 'S', 'S', 'N', 'N', 'N', '', '1.00', '1.00', NULL, '', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(145, 11, 1, 'VÃLVULA SEGURANÃ‡A PANELA PRESSÃƒO', NULL, 'S', 'N', 'N', 'N', '', '1.00', '1.00', NULL, '', 'S', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL);


ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);


ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;
COMMIT;
