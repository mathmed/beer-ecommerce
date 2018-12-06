-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 06-Dez-2018 às 20:46
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE `ecommerce`;


--
-- Database: `ecommerce`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `id_adm` int(11) NOT NULL,
  `nome_adm` varchar(45) NOT NULL,
  `cpf_adm` varchar(45) NOT NULL,
  `email_adm` varchar(45) NOT NULL,
  `senha_adm` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id_adm`, `nome_adm`, `cpf_adm`, `email_adm`, `senha_adm`) VALUES
(1, 'Administrador', '123456789', 'adm@adm.com', '123456'),
(2, 'Miller', '12345678900', 'miller@gmail.com', '123'),
(3, 'Papudin', '98765432100', 'papudin@gmail.com', '123'),
(4, 'Mateus', '45678912300', 'mateus@gmail.com', '123'),
(5, 'Laio', '75315945600', 'laio@gmail.com', '123'),
(6, 'Taciano', '75315945611', 'taciano@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `bebida`
--

CREATE TABLE `bebida` (
  `id_bebida` int(11) NOT NULL,
  `nome_bebida` varchar(45) NOT NULL,
  `ml` varchar(45) NOT NULL,
  `preco_bebida` float NOT NULL,
  `descricao_bebida` longtext NOT NULL,
  `teor_alcoolico` float NOT NULL,
  `tipo_bebida` varchar(250) NOT NULL,
  `status_bebida` varchar(45) NOT NULL,
  `id_marca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `bebida`
--

INSERT INTO `bebida` (`id_bebida`, `nome_bebida`, `ml`, `preco_bebida`, `descricao_bebida`, `teor_alcoolico`, `tipo_bebida`, `status_bebida`, `id_marca`) VALUES
(1, 'Skol Hops', '350', 3, 'Uma puro malte diferente, com uma combinação exclusiva de lúpulos que surpreende a cada gole e mantém a refrescância que você já conhece da Skol.', 4, 'Cerveja', 'checked', 1),
(2, 'Brahma Extra', '350', 3, 'Em uma combinação perfeita entre o adocicado do puro malte e o leve amargor do lúpulo, a Brahma Extra Lager combina perfeitamente com Muzzarela de Búfala e Carnes Vermelhas.', 5.5, 'Cerveja', 'checked', 5),
(3, 'Vodka Absolut', '1000', 60, 'A Absolut Vodka foi lançada primeiro em 1979, na cidade de Nova York. Ela logo tornou-se tema de conversas na cidade e nos EUA, até alcançar o gosto mundial. Mas a receita por trás do sabor puro e natural da Absolut é bem mais antiga, já passou dos 30 anos. Para começar, foi um frasco de remédio do século 18, encontrado em um antiquário em Estocolmo, que inspirou a famosa garrafa da Absolut Vodka.', 40, 'Vodca', 'checked ', 4),
(4, 'Vodka Ciroc', '750', 120, 'Ao contrário da maioria das vodkas, a base de grãos Ciroc é produzido a base de uvas nobres. Sua essência são as uvas Mauzac Blanc e Ugni Blanc, cultivadas em Gaillac, região de origem dos mais nobres vinhos franceses.\r\nSeu processo de produção, quase artesanal, utiliza fermentação fria que mantém o frescor e as características marcantes da uva.', 40, 'Vodca', 'checked', 2),
(5, 'Johnnie Walker Red Label', '1000', 90, 'JOHNNIE WALKER RED LABEL® é o Blend Pioneiro, que lançou o nosso whisky no mundo. Muito versátil e universalmente atraente, com sabor intenso e vigoroso que se destaca mesmo quando misturado. JOHNNIE WALKER RED LABEL® é o whisky escocês mais vendido no mundo. Perfeito para festas e encontros entre amigos, tanto em casa como fora.', 40, 'Whisky', 'checked', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `bebida_has_categoria`
--

CREATE TABLE `bebida_has_categoria` (
  `id_bebida` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `bebida_has_categoria`
--

INSERT INTO `bebida_has_categoria` (`id_bebida`, `id_categoria`) VALUES
(1, 1),
(2, 1),
(3, 3),
(4, 3),
(5, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `bebida_has_promocao`
--

CREATE TABLE `bebida_has_promocao` (
  `id_promocao` int(11) NOT NULL,
  `id_bebida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `bebida_has_promocao`
--

INSERT INTO `bebida_has_promocao` (`id_promocao`, `id_bebida`) VALUES
(1, 2),
(2, 1),
(2, 4),
(3, 1),
(3, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `descricao_categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `descricao_categoria`) VALUES
(1, 'Pilsen'),
(2, 'Larger'),
(3, 'Destilada'),
(4, 'Malzbier'),
(5, 'Premium Larger');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id_contato` int(11) NOT NULL,
  `numero_telefone` varchar(45) NOT NULL,
  `numero_celular` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id_contato`, `numero_telefone`, `numero_celular`) VALUES
(2, '84 9 8478-3238', '84 9 3289 2271'),
(3, '84 9 2832 8323', '84 9 9283 2387'),
(4, '84 9 8237 2328', '84 9 3893 3983'),
(5, '84 9 8373 8373', '84 9 9383 3837'),
(6, '84 9 8373 8372', '84 9 8373 8373');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `id_endereco` int(11) NOT NULL,
  `apelido_endereco` varchar(45) DEFAULT NULL,
  `numero_endereco` varchar(45) NOT NULL,
  `rua` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `uf` varchar(45) NOT NULL,
  `cep` varchar(45) NOT NULL,
  `complemento` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`id_endereco`, `apelido_endereco`, `numero_endereco`, `rua`, `bairro`, `cidade`, `uf`, `cep`, `complemento`) VALUES
(2, NULL, '198', 'José da Penha', 'Centro', 'Ouro Branco', 'RN', '59347000', 'Próximo à Caixa'),
(3, NULL, '19', 'Rua Jandaia', 'Jardim Luciana', 'Itaquaquecetuba', 'SP', '08575380', 'Próximo à Sabesp'),
(4, NULL, '1233', 'Colombo', 'Centro', 'Caicó', 'RN', '59300000', ''),
(5, NULL, '182', 'Varzinha', 'Vila Militar', 'Caicó', 'RN', '59300000', 'Proximo à Caern'),
(6, NULL, '1827', 'Rua Jandaia', 'Jardim Luciana', 'Itaquaquecetuba', 'SP', '08575380', 'Proximo ao mercadinho São Sabas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `id_lote` int(11) NOT NULL,
  `entrada` date NOT NULL,
  `quantidade` int(11) NOT NULL,
  `ultima_saida` date DEFAULT NULL,
  `valor_compra_unidade` double NOT NULL,
  `id_bebida` int(11) NOT NULL,
  `id_fornecedor` int(11) NOT NULL,
  `atual` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`id_lote`, `entrada`, `quantidade`, `ultima_saida`, `valor_compra_unidade`, `id_bebida`, `id_fornecedor`, `atual`) VALUES
(18, '2018-11-27', 100, '2018-11-27', 2, 1, 2, 100),
(19, '2018-11-27', 10, '2018-11-27', 50, 2, 3, 10),
(20, '2018-11-27', 120, '2018-11-27', 2.3, 3, 6, 120),
(21, '2018-11-27', 20, '2018-11-27', 40, 5, 3, 20),
(22, '2018-11-27', 5, '2018-11-27', 100, 4, 4, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `id_fornecedor` int(11) NOT NULL,
  `nome_fornecedor` varchar(255) NOT NULL,
  `cnpj_fornecedor` varchar(45) NOT NULL,
  `email_fornecedor` varchar(255) NOT NULL,
  `data_cadastro_fornecedor` date NOT NULL,
  `id_endereco` int(11) NOT NULL,
  `id_contato` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`id_fornecedor`, `nome_fornecedor`, `cnpj_fornecedor`, `email_fornecedor`, `data_cadastro_fornecedor`, `id_endereco`, `id_contato`) VALUES
(2, 'Geraldo Olckmin', '49.373.647/0001-58', 'geraldo@hotmail.com', '2018-11-28', 2, 2),
(3, 'Bonoro da Silva', '24.499.427/0001-44', 'bonoro@hotmail.com', '2018-11-28', 3, 3),
(4, 'Luis Inácio Alfredo', '81.982.325/0001-19', 'luis@hotmail.com', '2018-11-28', 4, 4),
(5, 'Marina Tirasilva', '49.539.683/0001-49', 'marina@hotmail.com', '2018-11-28', 5, 5),
(6, 'Sergio Morosvik', '88.954.494/0001-94', 'sergio@hotmail.com', '2018-11-28', 6, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem`
--

CREATE TABLE `imagem` (
  `id_imagem` int(11) NOT NULL,
  `src` varchar(255) NOT NULL,
  `id_bebida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL,
  `nome_marca` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `marca`
--

INSERT INTO `marca` (`id_marca`, `nome_marca`) VALUES
(1, 'Skol'),
(2, 'Ciroc'),
(3, 'Johnnie Walker'),
(4, 'Absolut'),
(5, 'Brahma');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `id_pagamento` int(11) NOT NULL,
  `numero_cartao` varchar(45) NOT NULL,
  `nome_cartao` varchar(45) NOT NULL,
  `senha_cartao` varchar(45) NOT NULL,
  `bandeira` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pagamento`
--

INSERT INTO `pagamento` (`id_pagamento`, `numero_cartao`, `nome_cartao`, `senha_cartao`, `bandeira`) VALUES
(1, '1111222233334444', 'Jose Bonoro', '123', 'Mastercard'),
(2, '1111333322224444', 'Joao Lalu', '321', 'Mastercard'),
(3, '4444111133332222', 'Manira Silva', '241', 'Visa'),
(4, '4444111133331111', 'Genaro Auquim', '751', 'Visa'),
(5, '2222444411113333', 'Miquel Meter', '941', 'Visa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `valor_total` float NOT NULL,
  `data_att_status` datetime NOT NULL,
  `data_pedido` datetime NOT NULL,
  `id_status` int(11) NOT NULL,
  `id_pagamento` int(11) NOT NULL,
  `id_endereco` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `valor_total`, `data_att_status`, `data_pedido`, `id_status`, `id_pagamento`, `id_endereco`, `id_usuario`) VALUES
(1, 120, '2018-11-28 10:10:30', '2018-11-28 12:12:54', 1, 1, 2, 1),
(2, 150, '2018-11-28 09:39:01', '2018-11-28 20:20:10', 4, 3, 3, 2),
(3, 200, '2018-11-27 15:02:32', '2018-11-28 07:10:20', 2, 2, 4, 3),
(4, 350, '2018-12-02 04:01:02', '2018-11-28 05:23:30', 2, 3, 5, 5),
(5, 400, '2018-11-28 21:23:45', '2018-11-28 22:01:02', 1, 3, 3, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido_has_bebida`
--

CREATE TABLE `pedido_has_bebida` (
  `id_pedido` int(11) NOT NULL,
  `id_bebida` int(11) NOT NULL,
  `qtd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedido_has_bebida`
--

INSERT INTO `pedido_has_bebida` (`id_pedido`, `id_bebida`, `qtd`) VALUES
(1, 1, 2),
(1, 2, 1),
(2, 3, 1),
(3, 2, 3),
(4, 5, 2),
(5, 4, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `promocao`
--

CREATE TABLE `promocao` (
  `id_promocao` int(11) NOT NULL,
  `status` varchar(45) NOT NULL,
  `desconto` float NOT NULL,
  `apelido_promocao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `promocao`
--

INSERT INTO `promocao` (`id_promocao`, `status`, `desconto`, `apelido_promocao`) VALUES
(1, 'checked', 10, 'Vem verão'),
(2, 'unchecked', 25, 'Black Friday'),
(3, 'unchecked', 5, 'Oloco meu'),
(4, 'unchecked', 15, 'Ferias Topzera'),
(5, 'unchecked', 50, 'Liquida tudo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `descricao_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `status`
--

INSERT INTO `status` (`id_status`, `descricao_status`) VALUES
(1, 'Aguardando pagamento'),
(2, 'Separando do estoque'),
(3, 'Preparado para envio'),
(4, 'Produto a caminho'),
(5, 'Entrega Finalizada');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `cpf` varchar(45) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `data_nascimento` date NOT NULL,
  `apelido` varchar(45) NOT NULL,
  `data_cadastro` date NOT NULL,
  `id_endereco` int(11) NOT NULL,
  `id_contato` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `cpf`, `nome`, `email`, `senha`, `data_nascimento`, `apelido`, `data_cadastro`, `id_endereco`, `id_contato`) VALUES
(1, '12345678912', 'Uilson Fisque', 'uf@gmail.com', '123', '1955-02-20', 'uilson', '2018-11-28', 2, 2),
(2, '12345678999', 'Bruce Wayne', 'batma@gmail.com', '123', '1980-04-16', 'batma', '2018-11-25', 4, 4),
(3, '98765432100', 'Steve Rogers', 'capitao@hotmail.com', '123', '1920-08-17', 'cap America', '2018-11-28', 3, 3),
(4, '45612378977', 'Marcio Miller', 'miller@hotmail.com', '123', '1999-02-20', 'milerinho', '2018-11-28', 6, 6),
(5, '12378945655', 'Eduardo Victor', 'papudin@gmail.com', '123', '1997-10-14', 'papudin', '2018-11-28', 5, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indexes for table `bebida`
--
ALTER TABLE `bebida`
  ADD PRIMARY KEY (`id_bebida`),
  ADD KEY `fk_bebida_marca1_idx` (`id_marca`);

--
-- Indexes for table `bebida_has_categoria`
--
ALTER TABLE `bebida_has_categoria`
  ADD PRIMARY KEY (`id_bebida`,`id_categoria`),
  ADD KEY `fk_bebida_has_categoria_categoria1_idx` (`id_categoria`),
  ADD KEY `fk_bebida_has_categoria_bebida1_idx` (`id_bebida`);

--
-- Indexes for table `bebida_has_promocao`
--
ALTER TABLE `bebida_has_promocao`
  ADD PRIMARY KEY (`id_promocao`,`id_bebida`),
  ADD KEY `fk_promocao_has_bebida_bebida1_idx` (`id_bebida`),
  ADD KEY `fk_promocao_has_bebida_promocao1_idx` (`id_promocao`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id_contato`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id_endereco`);

--
-- Indexes for table `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id_lote`),
  ADD KEY `fk_estoque_bebida1_idx` (`id_bebida`),
  ADD KEY `fk_estoque_fornecedor1_idx` (`id_fornecedor`);

--
-- Indexes for table `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`id_fornecedor`),
  ADD KEY `fk_fornecedor_endereco1_idx` (`id_endereco`),
  ADD KEY `fk_fornecedor_contato1_idx` (`id_contato`);

--
-- Indexes for table `imagem`
--
ALTER TABLE `imagem`
  ADD PRIMARY KEY (`id_imagem`),
  ADD KEY `fk_imagem_bebida_idx` (`id_bebida`);

--
-- Indexes for table `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indexes for table `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`id_pagamento`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `fk_pedido_status1_idx` (`id_status`),
  ADD KEY `fk_pedido_pagamento1_idx` (`id_pagamento`),
  ADD KEY `fk_pedido_endereco1_idx` (`id_endereco`),
  ADD KEY `fk_pedido_usuario1_idx` (`id_usuario`);

--
-- Indexes for table `pedido_has_bebida`
--
ALTER TABLE `pedido_has_bebida`
  ADD PRIMARY KEY (`id_pedido`,`id_bebida`),
  ADD KEY `fk_pedido_has_bebida_bebida1_idx` (`id_bebida`),
  ADD KEY `fk_pedido_has_bebida_pedido1_idx` (`id_pedido`);

--
-- Indexes for table `promocao`
--
ALTER TABLE `promocao`
  ADD PRIMARY KEY (`id_promocao`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_usuario_endereco1_idx` (`id_endereco`),
  ADD KEY `fk_usuario_contato1_idx` (`id_contato`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm`
--
ALTER TABLE `adm`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bebida`
--
ALTER TABLE `bebida`
  MODIFY `id_bebida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `id_contato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id_endereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id_lote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `id_fornecedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `imagem`
--
ALTER TABLE `imagem`
  MODIFY `id_imagem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `id_pagamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `promocao`
--
ALTER TABLE `promocao`
  MODIFY `id_promocao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `bebida`
--
ALTER TABLE `bebida`
  ADD CONSTRAINT `fk_bebida_marca1` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id_marca`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `bebida_has_categoria`
--
ALTER TABLE `bebida_has_categoria`
  ADD CONSTRAINT `fk_bebida_has_categoria_bebida1` FOREIGN KEY (`id_bebida`) REFERENCES `bebida` (`id_bebida`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_bebida_has_categoria_categoria1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `bebida_has_promocao`
--
ALTER TABLE `bebida_has_promocao`
  ADD CONSTRAINT `fk_promocao_has_bebida_bebida1` FOREIGN KEY (`id_bebida`) REFERENCES `bebida` (`id_bebida`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_promocao_has_bebida_promocao1` FOREIGN KEY (`id_promocao`) REFERENCES `promocao` (`id_promocao`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `estoque`
--
ALTER TABLE `estoque`
  ADD CONSTRAINT `fk_estoque_bebida1` FOREIGN KEY (`id_bebida`) REFERENCES `bebida` (`id_bebida`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estoque_fornecedor1` FOREIGN KEY (`id_fornecedor`) REFERENCES `fornecedor` (`id_fornecedor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD CONSTRAINT `fk_fornecedor_contato1` FOREIGN KEY (`id_contato`) REFERENCES `contato` (`id_contato`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_fornecedor_endereco1` FOREIGN KEY (`id_endereco`) REFERENCES `endereco` (`id_endereco`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `imagem`
--
ALTER TABLE `imagem`
  ADD CONSTRAINT `fk_imagem_bebida` FOREIGN KEY (`id_bebida`) REFERENCES `bebida` (`id_bebida`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_pedido_endereco1` FOREIGN KEY (`id_endereco`) REFERENCES `endereco` (`id_endereco`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pedido_pagamento1` FOREIGN KEY (`id_pagamento`) REFERENCES `pagamento` (`id_pagamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pedido_status1` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pedido_usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pedido_has_bebida`
--
ALTER TABLE `pedido_has_bebida`
  ADD CONSTRAINT `fk_pedido_has_bebida_bebida1` FOREIGN KEY (`id_bebida`) REFERENCES `bebida` (`id_bebida`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pedido_has_bebida_pedido1` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id_pedido`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_contato1` FOREIGN KEY (`id_contato`) REFERENCES `contato` (`id_contato`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_endereco1` FOREIGN KEY (`id_endereco`) REFERENCES `endereco` (`id_endereco`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
