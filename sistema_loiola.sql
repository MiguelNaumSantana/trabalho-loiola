-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Nov-2018 às 18:34
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) DEFAULT NULL,
  `origem` varchar(100) NOT NULL,
  `destino` varchar(100) NOT NULL,
  `data_ida` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `data_volta` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `assentos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `origem`, `destino`, `data_ida`, `data_volta`, `assentos`) VALUES
(1, 'miguel', '', '', '', '2018-09-26 23:09:05', '0000-00-00 00:00:00', 0),
(2, 'joao', NULL, '', '', '2018-09-26 23:09:19', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_voo`
--

CREATE TABLE `usuario_voo` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_voo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario_voo`
--

INSERT INTO `usuario_voo` (`id`, `id_usuario`, `id_voo`) VALUES
(17, 1, 1),
(18, 1, 1),
(19, 1, 1),
(20, 1, 2),
(21, 1, 2),
(22, 1, 2),
(23, 1, 3),
(24, 1, 3),
(25, 1, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `voo`
--

CREATE TABLE `voo` (
  `id` int(11) NOT NULL,
  `origem` varchar(200) NOT NULL,
  `destino` varchar(200) NOT NULL,
  `hora` time NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `voo`
--

INSERT INTO `voo` (`id`, `origem`, `destino`, `hora`, `data`) VALUES
(1, 'Sao Paulo', 'Brasilia', '01:06:06', '2018-09-26'),
(2, 'Goias', 'Rio de Janeiro', '04:03:01', '2018-09-26'),
(3, 'Manaus', 'Belem', '06:02:03', '2018-09-26'),
(4, 'Brasilia', 'Maranhao', '12:00:00', '2018-11-15'),
(5, 'Maranhao', 'Brasilia', '13:00:00', '2018-11-30'),
(6, 'Brasilia', 'Rio de Janeiro', '16:00:00', '2018-11-08'),
(7, 'Rio de Janeiro', 'Brasilia', '11:00:00', '2018-11-16'),
(8, 'Sao Paulo', 'Manaus', '14:00:00', '2018-11-30'),
(9, 'Manaus', 'Sao Paulo', '08:00:00', '2018-12-21'),
(10, 'Roraima', 'Piaui', '16:50:00', '2018-11-12'),
(11, 'Piaui', 'Roraima', '19:21:00', '2018-11-03'),
(12, 'Rio Grande do Sul', 'Brasilia', '19:12:00', '2018-11-07'),
(13, 'Brasilia', 'Minas Gerais ', '15:00:00', '2018-11-27'),
(14, 'Bahia', 'Parana', '19:28:00', '2018-11-02'),
(15, 'Roraima', 'Acre', '09:00:00', '2018-11-06'),
(16, 'Sao Paulo', 'Maranhao', '09:00:00', '2018-11-30'),
(17, 'Rio de Janeiro', 'Sergipe', '08:29:00', '2019-01-16'),
(18, 'Mato Grosso', 'Bahia', '23:00:00', '2019-02-22'),
(19, 'Bahia', 'Brasilia', '14:00:00', '2019-03-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario_voo`
--
ALTER TABLE `usuario_voo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voo`
--
ALTER TABLE `voo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuario_voo`
--
ALTER TABLE `usuario_voo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
