-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 03:53 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banco_figma_gian`
--

-- --------------------------------------------------------

--
-- Table structure for table `cardapio`
--

CREATE TABLE `cardapio` (
  `id_produto` mediumint(8) UNSIGNED NOT NULL,
  `nome_produto` varchar(255) DEFAULT NULL,
  `preco_produto` varchar(100) DEFAULT NULL,
  `categoria` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cardapio`
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
-- Table structure for table `itens_pedido`
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
-- Dumping data for table `itens_pedido`
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
-- Table structure for table `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(8) UNSIGNED NOT NULL,
  `id_usuario` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pedido`
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
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` mediumint(8) NOT NULL,
  `nome_usuario` varchar(255) DEFAULT NULL,
  `telefone_usuario` varchar(100) DEFAULT NULL,
  `email_usuario` varchar(255) DEFAULT NULL,
  `endereco_usuario` varchar(255) DEFAULT NULL,
  `senha_usuario` text DEFAULT NULL,
  `data_cadastro` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `telefone_usuario`, `email_usuario`, `endereco_usuario`, `senha_usuario`, `data_cadastro`) VALUES
(1, 'Louis Langley', '(03) 2319 7278', 'in.consectetuer.ipsum@protonmail.com', 'Ap #742-1982 Ac Street', 'Sed', NULL),
(2, 'Aidan Santos', '(02) 6247 2366', 'ornare@icloud.net', 'P.O. Box 206, 8271 Sem Rd.', 'sit', NULL),
(3, 'John Vincent', '(02) 6455 0516', 'amet.risus@outlook.com', 'Ap #674-1157 Metus. Ave', 'risus', NULL),
(4, 'Macey Salazar', '(03) 7860 4371', 'ut.molestie@aol.org', '184-5277 Aliquet St.', 'pulvinar', NULL),
(5, 'Kermit Hubbard', '(04) 0681 5466', 'mauris.blandit@google.couk', '1308 Ultricies Rd.', 'cursus.', NULL),
(6, 'Cade Beasley', '(04) 6996 5484', 'urna@google.org', 'Ap #506-1826 Semper Avenue', 'Cras', NULL),
(7, 'Malachi Stephenson', '(02) 2442 6683', 'nec@icloud.ca', 'Ap #319-2131 At, St.', 'nibh', NULL),
(8, 'Oprah Mercado', '(06) 1554 5708', 'nec.ante.maecenas@google.ca', 'Ap #565-5856 Parturient Street', 'Morbi', NULL),
(9, 'Lavinia Bailey', '(02) 5541 5388', 'odio@yahoo.org', '964-8725 Mauris, Avenue', 'quam', NULL),
(10, 'Trevor Mathis', '(05) 7522 3513', 'lorem.semper@hotmail.couk', 'Ap #442-343 Risus. St.', 'Duis', NULL),
(20, 'Gian Fiamoncini', '(47) 98809-6059', 'carlo@gmail.com', 'Rua dos Timbiras, 152', 'Gcf694@', NULL),
(21, 'Felipe', '(47) 98549-8469', 'felipe@gmail.com', 'Rua Santos Dumont', 'Felipe@123', '2022-07-03 20:10:27'),
(24, 'Alvacir', '(47) 98406-3202', 'fiamoncini.a@gmail.com', 'Rua dos Timbiras', 'Alvacir@123', '2022-07-03 21:29:31'),
(28, 'aaaasdasdasd', '(54) 94456-5464', 'adsasdasd@gmail.com', 'Rua Santos Dumont', 'Asdsd@123', '2022-07-03 22:21:12'),
(29, 'Teste', '(47) 95465-4847', 'ligul4@gmail.com', 'n cykr4sn jcy5r', 'Akjtdg4165@', '2022-07-03 22:49:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cardapio`
--
ALTER TABLE `cardapio`
  ADD PRIMARY KEY (`id_produto`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cardapio`
--
ALTER TABLE `cardapio`
  MODIFY `id_produto` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` mediumint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
