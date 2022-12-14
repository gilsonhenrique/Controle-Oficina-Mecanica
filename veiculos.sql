-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Dez-2022 às 03:07
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `oficina`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--

CREATE TABLE `veiculos` (
  `id` int(11) NOT NULL,
  `prisma` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `celular` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `placa` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `fabricacao` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `modelo` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `cilindrada` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `km` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `combustivel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `veiculo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cor` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `irregularidade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diagnostico` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pecnec` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mecrespd` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `obs` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mecresps` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp(),
  `aguardando_dt` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `executando_dt` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `liberado_dt` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pendente_dt` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `veiculos`
--
ALTER TABLE `veiculos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `veiculos`
--
ALTER TABLE `veiculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
