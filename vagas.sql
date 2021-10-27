-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Out-2021 às 18:49
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `vagas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargo`
--

CREATE TABLE `cargo` (
  `id` int(20) NOT NULL,
  `descricao` text DEFAULT NULL,
  `salario` double DEFAULT NULL,
  `setor_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cargo`
--

INSERT INTO `cargo` (`id`, `descricao`, `salario`, `setor_id`) VALUES
(1, 'ta', 131123, 1),
(2, 'Analista', 13000, 1),
(3, 'ta', 12355, 1),
(4, 'ta4', 12355, 1),
(5, 'cargo teste', 1415151, 3),
(6, 'ta', 131, 1),
(7, 'Cargo teste?', 1231241, 1),
(8, '', 0, 0),
(9, '', 0, 0),
(10, 'ta', 131123, 1),
(11, 'ta', 1232, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `id` int(20) NOT NULL,
  `nome` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id`, `nome`) VALUES
(1, 'test'),
(2, 'UFMS'),
(3, 'ta'),
(4, 'ta2'),
(5, 'teste'),
(6, 'ta'),
(7, 'Vaga teste?'),
(8, 'ta'),
(9, ''),
(10, 'test'),
(11, 'ta');

-- --------------------------------------------------------

--
-- Estrutura da tabela `setor`
--

CREATE TABLE `setor` (
  `id` int(20) NOT NULL,
  `descricao_setor` text DEFAULT NULL,
  `empresa_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `setor`
--

INSERT INTO `setor` (`id`, `descricao_setor`, `empresa_id`) VALUES
(1, 'Ti', 1),
(2, 'taata', 1),
(3, 'taata11', 1),
(4, 'set desc', 3),
(5, 'tata', 1),
(6, 'Setor teste?', 4),
(7, '', 0),
(8, '', 0),
(9, '1111', 1),
(10, 'ta', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vagas`
--

CREATE TABLE `vagas` (
  `id` int(20) NOT NULL,
  `descricao_setor` text DEFAULT NULL,
  `descricao_cargo` text DEFAULT NULL,
  `nome_empresa` text DEFAULT NULL,
  `salario` double DEFAULT NULL,
  `setor_id` int(20) DEFAULT NULL,
  `empresa_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vagas`
--

INSERT INTO `vagas` (`id`, `descricao_setor`, `descricao_cargo`, `nome_empresa`, `salario`, `setor_id`, `empresa_id`) VALUES
(4, 'set desc', 'cargo teste', 'teste', 1415151, NULL, NULL),
(5, '1', '2', '3', 131, NULL, NULL),
(6, 'Setor teste?', 'Cargo teste?', 'Vaga teste?', 1231241, NULL, NULL),
(7, '', '', 'ta', 0, NULL, NULL),
(8, '', '', '', 0, NULL, NULL),
(9, '1111', 'ta', 'test', 131123, NULL, NULL),
(10, 'ta', 'ta', 'ta', 1232, NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `setor_id` (`setor_id`);

--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `setor`
--
ALTER TABLE `setor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`);

--
-- Índices para tabela `vagas`
--
ALTER TABLE `vagas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `setor`
--
ALTER TABLE `setor`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `vagas`
--
ALTER TABLE `vagas`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
