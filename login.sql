-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Jun-2023 às 19:51
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudo`
--

CREATE TABLE `conteudo` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `imagem` varchar(1000) NOT NULL,
  `genero` varchar(1000) NOT NULL,
  `lancamento` varchar(10) NOT NULL,
  `duracao` varchar(10) NOT NULL,
  `sinopse` varchar(4000) NOT NULL,
  `trailer` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `conteudo`
--

INSERT INTO `conteudo` (`id`, `nome`, `imagem`, `genero`, `lancamento`, `duracao`, `sinopse`, `trailer`) VALUES
(1, 'Super Mario', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/ktU3MIeZtuEVRlMftgp0HMX2WR7.jpg', 'Animação, Família, Aventura, Fantasia, Comédia', '05/04/2023', '1h 32m', 'Os irmãos Mario e Luigi, de ascendência italiana, vivem em Brooklyn (Nova Iorque), onde trabalham como canalizadores. Certo dia, durante um serviço de reparação de uma conduta de água, são sugados por um tubo e transportados para o Reino Cogumelo, um universo paralelo governado pela Princesa Peach. Sem saber do paradeiro do irmão, Mario vai ter de aprender a sobreviver naquele lugar, adquirindo capacidades bizarras mas que serão grandes mais-valias para destruir os planos de Bowser, um verdadeiro vilão que tenciona dominar o mundo.', 'cDNkh5WybZo'),
(2, 'Nada de Novo no Front', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/qmcKs0Aoft7MBdBoj1haZyPRgM2.jpg', 'Drama, Guerra', '28/10/2022', '2h 27m', 'Convocado para a linha de frente da Primeira Guerra Mundial, o adolescente Paul encara a dura realidade da vida nas trincheiras.', 'vwbySrsD7RU');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `papel` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `email`, `telefone`, `senha`, `papel`) VALUES
(1, 'thalles', 'teste@gmail.com', '11943851246', '123', 'admin'),
(5, 'teste', 'teste@outlook.com', '40028922', '123', 'normal');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `conteudo`
--
ALTER TABLE `conteudo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `conteudo`
--
ALTER TABLE `conteudo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
