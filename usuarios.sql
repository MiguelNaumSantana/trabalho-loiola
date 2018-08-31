-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 31/08/2018 às 17:48
-- Versão do servidor: 5.5.57-0ubuntu0.14.04.1
-- Versão do PHP: 5.5.9-1ubuntu4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) DEFAULT NULL,
  `origem` varchar(100) NOT NULL,
  `destino` varchar(100) NOT NULL,
  `data_ida` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `data_volta` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `assentos` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `origem`, `destino`, `data_ida`, `data_volta`, `assentos`) VALUES
(26, 'teste123', 'teste121@qweqweqw.com', 'wqdfasdf', 'sdfsdfsdf', '2018-08-31 12:01:00', '0000-00-00 00:00:00', 12312),
(27, 'teste123', 'teste121@qweqweqw.com', 'wqdfasdf', 'sdfsdfsdf', '2018-08-31 12:01:00', '0000-00-00 00:00:00', 12312),
(28, 'teste123', 'teste121@qweqweqw.com', 'wqdfasdf', 'sdfsdfsdf', '2018-08-31 12:01:00', '0000-00-00 00:00:00', 12312),
(29, 'teste123', 'teste121@qweqweqw.com', 'wqdfasdf', 'sdfsdfsdf', '2018-08-31 12:01:00', '0000-00-00 00:00:00', 12312),
(30, 'teste', 'luizresplandeoliveira@gmail.com', 'wqdfasdf', 'sdfsdfsdf', '2018-08-31 12:12:00', '2018-08-17 12:12:00', 123),
(31, 'teste', 'luizresplandeoliveira@gmail.com', 'wqdfasdf', 'sdfsdfsdf', '2018-08-17 12:12:00', '2018-08-03 12:21:00', 12312),
(32, 'teste', 'luizresplandeoliveira@gmail.com', 'wqdfasdf', 'sdfsdfsdf', '2018-08-17 12:12:00', '2018-08-02 21:21:00', 123);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
