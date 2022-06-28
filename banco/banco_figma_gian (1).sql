-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 09-Jun-2022 às 15:46
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco_figma_gian`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cardapio`
--

CREATE TABLE `cardapio` (
  `id_produto` mediumint(8) UNSIGNED NOT NULL,
  `nome_produto` varchar(255) DEFAULT NULL,
  `preco_produto` varchar(100) DEFAULT NULL,
  `categoria` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cardapio`
--

INSERT INTO `cardapio` (`id_produto`, `nome_produto`, `preco_produto`, `categoria`) VALUES
(1, 'Samantha Shawa', '$47.09', 'amet'),
(2, 'Camille Kennedy', '$49.68', 'nibh'),
(3, 'April Craft', '$1.11', 'eu'),
(4, 'Hunter Bryan', '$53.82', 'enim'),
(5, 'Brent Whitehead', '$65.76', 'eu,'),
(6, 'Breanna Lowery', '$23.18', 'Morbi'),
(7, 'Anika Velez', '$63.56', 'posuere'),
(8, 'Deirdre Kane', '$11.00', 'sapien.'),
(9, 'Austin Weiss', '$23.77', 'mauris.'),
(10, 'Veronica Maynard', '$5.05', 'et');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_pedido`
--

CREATE TABLE `itens_pedido` (
  `id_nf` varchar(5) DEFAULT NULL,
  `id_item` varchar(7) DEFAULT NULL,
  `cod_prod` varchar(8) DEFAULT NULL,
  `valor_unit` varchar(10) DEFAULT NULL,
  `quantidade` varchar(10) DEFAULT NULL,
  `desconto` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `itens_pedido`
--

INSERT INTO `itens_pedido` (`id_nf`, `id_item`, `cod_prod`, `valor_unit`, `quantidade`, `desconto`) VALUES
('id_nf', 'id_item', 'cod_prod', 'valor_unit', 'quantidade', 'desconto'),
('1', '1', '1', '25.00', '10', '5'),
('1', '2', '2', '13.50', '3', '0'),
('1', '3', '3', '15.00', '2', '0'),
('1', '4', '4', '10.00', '1', '0'),
('1', '5', '5', '30.00', '1', '0'),
('2', '1', '3', '15.00', '4', '0'),
('2', '3', '5', '30.00', '7', '0'),
('3', '1', '1', '25.00', '5', '0'),
('3', '2', '5', '10.00', '4', '0'),
('3', '3', '5', '30.00', '5', '0'),
('3', '4', '2', '13.50', '7', '0'),
('4', '1', '5', '30.00', '10', '15'),
('4', '2', '4', '10.00', '12', '5'),
('4', '3', '1', '25.00', '13', '5'),
('4', '4', '2', '13.50', '15', '5'),
('5', '1', '3', '15.00', '3', '0'),
('5', '2', '5', '30.00', '6', '0'),
('6', '1', '1', '25.00', '22', '15'),
('6', '2', '3', '15.00', '25', '20'),
('7', '1', '1', '25.00', '10', '3'),
('7', '2', '2', '13.50', '10', '4'),
('7', '3', '3', '15.00', '10', '4'),
('7', '4', '5', '30.00', '10', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(8) UNSIGNED NOT NULL,
  `id_usuario` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `id_usuario`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` mediumint(8) NOT NULL,
  `nome_usuario` varchar(255) DEFAULT NULL,
  `telefone_usuario` varchar(100) DEFAULT NULL,
  `email_usuario` varchar(255) DEFAULT NULL,
  `endereco_usuario` varchar(255) DEFAULT NULL,
  `senha_usuario` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `telefone_usuario`, `email_usuario`, `endereco_usuario`, `senha_usuario`) VALUES
(1, 'Louis Langley', '(03) 2319 7278', 'in.consectetuer.ipsum@protonmail.com', 'Ap #742-1982 Ac Street', 'Sed'),
(2, 'Aidan Santos', '(02) 6247 2366', 'ornare@icloud.net', 'P.O. Box 206, 8271 Sem Rd.', 'sit'),
(3, 'John Vincent', '(02) 6455 0516', 'amet.risus@outlook.com', 'Ap #674-1157 Metus. Ave', 'risus'),
(4, 'Macey Salazar', '(03) 7860 4371', 'ut.molestie@aol.org', '184-5277 Aliquet St.', 'pulvinar'),
(5, 'Kermit Hubbard', '(04) 0681 5466', 'mauris.blandit@google.couk', '1308 Ultricies Rd.', 'cursus.'),
(6, 'Cade Beasley', '(04) 6996 5484', 'urna@google.org', 'Ap #506-1826 Semper Avenue', 'Cras'),
(7, 'Malachi Stephenson', '(02) 2442 6683', 'nec@icloud.ca', 'Ap #319-2131 At, St.', 'nibh'),
(8, 'Oprah Mercado', '(06) 1554 5708', 'nec.ante.maecenas@google.ca', 'Ap #565-5856 Parturient Street', 'Morbi'),
(9, 'Lavinia Bailey', '(02) 5541 5388', 'odio@yahoo.org', '964-8725 Mauris, Avenue', 'quam'),
(10, 'Trevor Mathis', '(05) 7522 3513', 'lorem.semper@hotmail.couk', 'Ap #442-343 Risus. St.', 'Duis'),
(11, 'Gian Fiamoncini', '4654654', 'carlo.gcf04@gmail.com', 'Rua dos Timbiras', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cardapio`
--
ALTER TABLE `cardapio`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cardapio`
--
ALTER TABLE `cardapio`
  MODIFY `id_produto` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` mediumint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
