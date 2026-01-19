-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2026 at 05:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetofinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `carrinho`
--

CREATE TABLE `carrinho` (
  `id_carrinho` int(4) NOT NULL,
  `id_sessao` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carrinho`
--

INSERT INTO `carrinho` (`id_carrinho`, `id_sessao`) VALUES
(858, 0),
(859, 0),
(860, 0),
(861, 0),
(862, 0),
(863, 0),
(864, 0),
(865, 0),
(866, 0),
(867, 0),
(868, 0),
(869, 0),
(870, 0),
(871, 0),
(872, 0),
(873, 0),
(874, 0),
(875, 0);

-- --------------------------------------------------------

--
-- Table structure for table `carrinho_peca`
--

CREATE TABLE `carrinho_peca` (
  `id_carrinho` int(4) NOT NULL,
  `id_peca` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carrinho_peca`
--

INSERT INTO `carrinho_peca` (`id_carrinho`, `id_peca`) VALUES
(858, 8),
(858, 9),
(858, 11),
(858, 12),
(858, 13),
(858, 15),
(858, 25);

-- --------------------------------------------------------

--
-- Table structure for table `encomenda`
--

CREATE TABLE `encomenda` (
  `id_encomenda` int(4) NOT NULL,
  `nome_cliente` varchar(100) NOT NULL,
  `email_cliente` varchar(100) NOT NULL,
  `morada_cliente` varchar(100) NOT NULL,
  `preco_total` decimal(9,2) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `data_compra` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `encomenda_peca`
--

CREATE TABLE `encomenda_peca` (
  `id_encomenda` int(4) NOT NULL,
  `id_peca` int(4) NOT NULL,
  `preco_unidade` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peca`
--

CREATE TABLE `peca` (
  `id_peca` int(4) NOT NULL,
  `id_produto` int(4) NOT NULL,
  `id_tamanho` int(4) NOT NULL,
  `stock` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peca`
--

INSERT INTO `peca` (`id_peca`, `id_produto`, `id_tamanho`, `stock`) VALUES
(1, 1, 1, 10),
(2, 1, 2, 10),
(3, 1, 3, 10),
(4, 1, 4, 10),
(5, 3, 1, 10),
(6, 3, 2, 10),
(7, 3, 3, 10),
(8, 3, 4, 10),
(9, 4, 1, 10),
(10, 4, 2, 10),
(11, 4, 3, 10),
(12, 4, 4, 10),
(13, 5, 1, 10),
(14, 5, 2, 10),
(15, 5, 3, 10),
(16, 5, 4, 10),
(17, 6, 1, 10),
(18, 6, 2, 10),
(19, 6, 3, 10),
(20, 6, 4, 10),
(21, 7, 1, 10),
(22, 7, 2, 10),
(23, 7, 3, 10),
(24, 7, 4, 10),
(25, 8, 1, 10),
(26, 8, 2, 10),
(27, 8, 3, 10),
(28, 8, 4, 10),
(29, 9, 1, 10),
(30, 9, 2, 10),
(31, 9, 3, 10),
(32, 9, 4, 10);

-- --------------------------------------------------------

--
-- Table structure for table `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(4) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `imagem_url` varchar(200) NOT NULL,
  `imagem_hover_url` varchar(200) DEFAULT NULL,
  `look2` varchar(200) DEFAULT NULL,
  `look3` varchar(200) DEFAULT NULL,
  `look4` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produto`
--

INSERT INTO `produto` (`id_produto`, `nome`, `preco`, `imagem_url`, `imagem_hover_url`, `look2`, `look3`, `look4`) VALUES
(1, 'Zebra Zip Up Hoodie', 49.08, 'imagens/Zebra-Zip-Up-Hoodie.jpg', 'imagens/Zebra-Zip-Up-Hoodie-look.jpg', 'imagens/Zebra-Zip-Up-Hoodie-look2.jpg', 'imagens/Zebra-Zip-Up-Hoodie-look3.jpg', 'imagens/Zebra-Zip-Up-Hoodie-look4.jpg'),
(3, 'Ghostcrawler Zip Up Hoodie', 50.18, 'imagens/Ghostcrawler-Zip-Up-Hoodie.jpg', 'imagens/Ghostcrawler-Zip-Up-Hoodie.look.jpg', 'imagens/Ghostcrawler-Zip-Up-Hoodie.look2.jpg', 'imagens/Ghostcrawler-Zip-Up-Hoodie.look3.jpg', 'imagens/Ghostcrawler-Zip-Up-Hoodie.look4.jpg'),
(4, 'Slogan Tee', 38.09, 'imagens/Slogan-Tee.jpg', 'imagens/Slogan-Tee.look.jpg', 'imagens/Slogan-Tee.look2.jpg', 'imagens/Slogan-Tee.look3.jpg', 'imagens/Slogan-Tee.look4.jpg'),
(5, 'Gild Logo Tee', 39.49, 'imagens/Gild-Logo-Tee.jpg', 'imagens/Gild-Logo-Tee.look.jpg', 'imagens/Gild-Logo-Tee.look2.jpg', 'imagens/Gild-Logo-Tee.look3.jpg', 'imagens/Gild-Logo-Tee.look4.jpg'),
(6, 'Vampire Club Hoodie', 49.19, 'imagens/Vampire-Club-Hoodie.jpg', 'imagens/Vampire-Club-Hoodie.look.jpg', 'imagens/Vampire-Club-Hoodie.look2.jpg', 'imagens/Vampire-Club-Hoodie.look3.jpg', 'imagens/Vampire-Club-Hoodie.look4.jpg'),
(7, 'Slogan Logo Jeans', 53.34, 'imagens/Slogan-Logo-Jeans.jpg', 'imagens/Slogan-Logo-Jeans.look.jpg', 'imagens/Slogan-Logo-Jeans.look2.jpg', 'imagens/Slogan-Logo-Jeans.look3.jpg', 'imagens/Slogan-Logo-Jeans.look4.jpg'),
(8, 'Totem Logo Jeans', 49.08, 'imagens/Totem-Logo-Jeans.jpg', 'imagens/Totem-Logo-Jeans.look.jpg', 'imagens/Totem-Logo-Jeans.look2.jpg', 'imagens/Totem-Logo-Jeans.look3.jpg', 'imagens/Totem-Logo-Jeans.look4.jpg'),
(9, 'Back Tribal Jeans', 47.95, 'imagens/Back-Tribal-Jeans.jpg', 'imagens/Back-Tribal-Jeans.look.jpg', 'imagens/Back-Tribal-Jeans.look2.jpg', 'imagens/Back-Tribal-Jeans.look3.jpg', 'imagens/Back-Tribal-Jeans.look4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tamanho`
--

CREATE TABLE `tamanho` (
  `id_tamanho` int(4) NOT NULL,
  `tamanho` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tamanho`
--

INSERT INTO `tamanho` (`id_tamanho`, `tamanho`) VALUES
(1, 'S'),
(2, 'M'),
(3, 'L'),
(4, 'XL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id_carrinho`);

--
-- Indexes for table `carrinho_peca`
--
ALTER TABLE `carrinho_peca`
  ADD PRIMARY KEY (`id_carrinho`,`id_peca`),
  ADD KEY `id_peca` (`id_peca`);

--
-- Indexes for table `encomenda`
--
ALTER TABLE `encomenda`
  ADD PRIMARY KEY (`id_encomenda`);

--
-- Indexes for table `encomenda_peca`
--
ALTER TABLE `encomenda_peca`
  ADD PRIMARY KEY (`id_encomenda`,`id_peca`),
  ADD KEY `id_peca` (`id_peca`);

--
-- Indexes for table `peca`
--
ALTER TABLE `peca`
  ADD PRIMARY KEY (`id_peca`),
  ADD KEY `id_produto` (`id_produto`),
  ADD KEY `id_tamanho` (`id_tamanho`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Indexes for table `tamanho`
--
ALTER TABLE `tamanho`
  ADD PRIMARY KEY (`id_tamanho`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id_carrinho` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=876;

--
-- AUTO_INCREMENT for table `encomenda`
--
ALTER TABLE `encomenda`
  MODIFY `id_encomenda` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peca`
--
ALTER TABLE `peca`
  MODIFY `id_peca` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tamanho`
--
ALTER TABLE `tamanho`
  MODIFY `id_tamanho` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carrinho_peca`
--
ALTER TABLE `carrinho_peca`
  ADD CONSTRAINT `carrinho_peca_ibfk_1` FOREIGN KEY (`id_carrinho`) REFERENCES `carrinho` (`id_carrinho`),
  ADD CONSTRAINT `carrinho_peca_ibfk_2` FOREIGN KEY (`id_peca`) REFERENCES `peca` (`id_peca`);

--
-- Constraints for table `encomenda_peca`
--
ALTER TABLE `encomenda_peca`
  ADD CONSTRAINT `encomenda_peca_ibfk_1` FOREIGN KEY (`id_encomenda`) REFERENCES `encomenda` (`id_encomenda`),
  ADD CONSTRAINT `encomenda_peca_ibfk_2` FOREIGN KEY (`id_peca`) REFERENCES `peca` (`id_peca`);

--
-- Constraints for table `peca`
--
ALTER TABLE `peca`
  ADD CONSTRAINT `peca_ibfk_1` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id_produto`),
  ADD CONSTRAINT `peca_ibfk_2` FOREIGN KEY (`id_tamanho`) REFERENCES `tamanho` (`id_tamanho`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
