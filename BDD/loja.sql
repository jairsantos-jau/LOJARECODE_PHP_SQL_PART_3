-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 12-Nov-2020 às 07:17
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `loja`
--
CREATE DATABASE IF NOT EXISTS `loja` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `loja`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario`
--

CREATE TABLE IF NOT EXISTS `comentario` (
  `idcomentario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `msg` varchar(300) NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`idcomentario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `comentario`
--

INSERT INTO `comentario` (`idcomentario`, `nome`, `msg`, `data`) VALUES
(5, 'jose', '     \r\n           gostei muito desse site', '1990-09-10'),
(6, 'jose', '     \r\n           gostei muito desse site', '1990-09-10'),
(10, '', '            Deixe se comentario):\r\n           ', '0000-00-00'),
(11, 'jose jair', '            Deixe se comentario):\r\n           mito bom', '1999-11-11'),
(12, 'jose', '     \r\n           gostei muito desse site', '1990-09-10'),
(13, 'jose', '     \r\n           gostei muito desse site', '1990-09-10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `idproduto` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(45) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `preco` decimal(8,2) DEFAULT NULL,
  `precofinal` decimal(8,2) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idproduto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idproduto`, `categoria`, `descricao`, `preco`, `precofinal`, `imagem`) VALUES
(1, 'geladeira', 'geladeira tipo A', '6.10', '5.10', 'image/refrigerador.png'),
(2, 'guarda roupa', 'guarda roupa tipo A', '2.39', '1.02', 'image/guardaroupa.png'),
(3, 'macbook', 'tmacbook tipo A', '6.39', '5.02', 'image/notebook.png'),
(4, 'fogao', 'fogao tipo A', '6.39', '5.02', 'image/fogao.png'),
(5, 'celular xiaomi', 'nova geracao', '2000.00', '1900.00', 'image/xiaomi.png'),
(6, 'iphone', 'tipo xp visual', '6890.00', '5890.00', 'image/iphone.png'),
(7, 'iphonexp', 'cameras ultra', '3080.00', '2165.00', 'image/iphonexp.png'),
(8, 'smartphone Xiomi', 'funcionalidade extra', '1999.00', '1444.00', 'image/smartphonexiomi.png'),
(9, 'smart G', 'camera tripa', '3218.00', '2218.00', 'image/smartg.png'),
(10, 'livro java', 'linguagem didadtica', '55.00', '43.00', 'image/livrojava.png'),
(11, 'ree', 'fff', '33.00', '443.00', 'jauimage.jpg'),
(12, 'geladeira', 'grande de alta qualidade', '2500.00', '2100.00', 'imagem/geladeira.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
