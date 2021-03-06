-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Jan-2021 às 16:30
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `materiais`
--

CREATE TABLE `materiais` (
  `id_material` int(10) UNSIGNED NOT NULL,
  `id_tipo_equipamento` int(10) UNSIGNED DEFAULT NULL,
  `designacao` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo_interno` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `observacoes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `materiais`
--

INSERT INTO `materiais` (`id_material`, `id_tipo_equipamento`, `designacao`, `codigo_interno`, `observacoes`, `created_at`, `updated_at`) VALUES
(1, 1, 'PC HP', NULL, NULL, '2019-03-01 14:15:32', '2019-03-01 14:15:32'),
(2, 1, 'Monitor Asus', '985675', 'Monitor 144hz ideal para gaming', '2019-03-01 14:15:32', '2019-03-01 14:15:32'),
(6, 2, 'Serrotes', '2453657', 'Serrote ideal para corte de madeiras de carvalho', '2019-03-01 14:15:32', '2019-03-01 14:15:32'),
(8, 2, 'Teclados', '534', 'Teclados HyperX', '2019-03-01 14:15:32', '2019-03-01 14:15:32'),
(9, 10, 'Martelos', '16864353', 'Martelos de borracha para bater em tijoleira', NULL, NULL),
(1233, 99, 'Melhores Bobines', '7557780965', 'Bobines feitas em aço inoxidavel', NULL, '2021-01-14 14:03:43'),
(1234, 1, 'nada', '1234567891', NULL, '2021-01-08 16:19:05', '2021-01-14 14:02:18');

-- --------------------------------------------------------

--
-- Estrutura da tabela `requisicoes`
--

CREATE TABLE `requisicoes` (
  `id_requisicao` int(10) UNSIGNED NOT NULL,
  `data_requisicao` date DEFAULT NULL,
  `data_prevista_entrega` date DEFAULT NULL,
  `data_entrega` date DEFAULT NULL,
  `data_renovacao` date DEFAULT NULL,
  `entregue` tinyint(1) NOT NULL DEFAULT '0',
  `renovou` tinyint(1) NOT NULL DEFAULT '0',
  `hora_requisicao` time DEFAULT NULL,
  `hora_entrega` time DEFAULT NULL,
  `id_material` int(10) UNSIGNED NOT NULL,
  `id_tipo_equipamento` int(10) UNSIGNED NOT NULL,
  `observacoes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_requesitantes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `requisicoes`
--

INSERT INTO `requisicoes` (`id_requisicao`, `data_requisicao`, `data_prevista_entrega`, `data_entrega`, `data_renovacao`, `entregue`, `renovou`, `hora_requisicao`, `hora_entrega`, `id_material`, `id_tipo_equipamento`, `observacoes`, `created_at`, `updated_at`, `id_requesitantes`) VALUES
(1, '2020-07-06', '2020-09-17', '2020-11-14', '2020-11-04', 0, 0, '08:06:14', '21:03:00', 1, 1, NULL, NULL, NULL, 1),
(2, '2020-11-10', '2020-11-01', '2020-11-25', '2020-11-20', 0, 0, '13:00:00', '02:00:00', 2, 2, NULL, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `requisitantes`
--

CREATE TABLE `requisitantes` (
  `id_requisitante` int(10) UNSIGNED NOT NULL,
  `nome` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `localidade` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cartao_cidadao` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_tipo_requisitante` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `requisitantes`
--

INSERT INTO `requisitantes` (`id_requisitante`, `nome`, `telefone`, `email`, `localidade`, `cartao_cidadao`, `id_tipo_requisitante`, `created_at`, `updated_at`) VALUES
(1, 'Aurélio Maria da Silva', '915678999', 'aureliosilva@gmail.com', 'Porto', '183921781663', '', NULL, NULL),
(2, 'Ricardo granja', '963458765', 'ricardinho22@gmail.com', 'S.Salvador', '1342532547645', '', NULL, NULL),
(3, 'Tiago Costa', NULL, NULL, NULL, NULL, '7', '2021-01-14 09:04:58', '2021-01-14 15:13:34');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos_equipamentos`
--

CREATE TABLE `tipos_equipamentos` (
  `id_tipo_equipamento` int(10) UNSIGNED NOT NULL,
  `descricao` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tipos_equipamentos`
--

INSERT INTO `tipos_equipamentos` (`id_tipo_equipamento`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 'Computadores', NULL, NULL),
(2, 'Livros', NULL, NULL),
(3, 'Calculadoras', NULL, NULL),
(4, 'Balas de AK-47', '2021-01-14 09:38:14', '2021-01-14 09:38:14'),
(5, 'Balas de AK-47', '2021-01-14 15:22:52', '2021-01-14 15:22:52'),
(6, 'Balas de AK-47', '2021-01-14 15:23:04', '2021-01-14 15:23:04'),
(7, 'Balas de AK-47', '2021-01-14 15:25:13', '2021-01-14 15:25:13'),
(8, 'sgdgdd', '2021-01-14 15:28:37', '2021-01-14 15:28:37');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos_requisitantes`
--

CREATE TABLE `tipos_requisitantes` (
  `id_tipo_requisitante` int(10) UNSIGNED NOT NULL,
  `tipo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tipos_requisitantes`
--

INSERT INTO `tipos_requisitantes` (`id_tipo_requisitante`, `tipo`, `created_at`, `updated_at`) VALUES
(1, 'Auxiliares', NULL, NULL),
(2, 'Professores', NULL, NULL),
(3, 'Alunos', NULL, NULL),
(4, 'Técnico', '2021-01-14 09:47:14', '2021-01-14 09:47:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `materiais`
--
ALTER TABLE `materiais`
  ADD PRIMARY KEY (`id_material`);

--
-- Indexes for table `requisicoes`
--
ALTER TABLE `requisicoes`
  ADD PRIMARY KEY (`id_requisicao`);

--
-- Indexes for table `requisitantes`
--
ALTER TABLE `requisitantes`
  ADD PRIMARY KEY (`id_requisitante`);

--
-- Indexes for table `tipos_equipamentos`
--
ALTER TABLE `tipos_equipamentos`
  ADD PRIMARY KEY (`id_tipo_equipamento`);

--
-- Indexes for table `tipos_requisitantes`
--
ALTER TABLE `tipos_requisitantes`
  ADD PRIMARY KEY (`id_tipo_requisitante`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `materiais`
--
ALTER TABLE `materiais`
  MODIFY `id_material` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1243;

--
-- AUTO_INCREMENT for table `requisicoes`
--
ALTER TABLE `requisicoes`
  MODIFY `id_requisicao` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `requisitantes`
--
ALTER TABLE `requisitantes`
  MODIFY `id_requisitante` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tipos_equipamentos`
--
ALTER TABLE `tipos_equipamentos`
  MODIFY `id_tipo_equipamento` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tipos_requisitantes`
--
ALTER TABLE `tipos_requisitantes`
  MODIFY `id_tipo_requisitante` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
