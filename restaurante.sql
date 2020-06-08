-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Jun-2020 às 17:02
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `restaurante`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `restaurantes`
--

CREATE TABLE `restaurantes` (
  `id` int(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `restaurantes`
--

INSERT INTO `restaurantes` (`id`, `nome`, `email`, `endereco`, `created_at`, `updated_at`) VALUES
(2, 'OM Sweets', 'om@test.com', 'Setor 10 Gurgaon', '2020-06-02', '2020-06-02'),
(3, 'Dominos', 'dominos@test.com', 'Delphi Sul', '2020-06-02', '2020-06-02'),
(4, 'McDonalds', 'mcdonalds@test.com', 'Setor 101 Gurgaon', '2020-06-02', '2020-06-02'),
(5, 'Comida Natural', 'natural@test.com', 'Noida Setor 120', '2020-06-02', '2020-06-02'),
(6, 'Comida Apimentada', 'apimentada@test.com', 'Delphi leste', '2020-06-02', '2020-06-03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contato` varchar(255) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `senha`, `email`, `contato`, `updated_at`, `created_at`) VALUES
(1, 'Admin', 'eyJpdiI6IkwraUhLdVM5R3kwZ2NZRzNWVE9FclE9PSIsInZhbHVlIjoicGZiSXI0bzRzQVN6QkpOVHVlcWpKQT09IiwibWFjIjoiNzAwNDY0ZmNhZDM3ZmY4NTNiZDQ3NTEzOTA3Yjc4OGU2YmM1ODU0YTdlNzZjOTNiNjhiNjJjOWYwZjFhZmZlMCJ9', 'admin@test.com', 'Rua João Paiva 53', '2020-06-05', '2020-06-05');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `restaurantes`
--
ALTER TABLE `restaurantes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `restaurantes`
--
ALTER TABLE `restaurantes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
