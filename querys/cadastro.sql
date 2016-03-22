-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 11-Set-2013 às 03:20
-- Versão do servidor: 5.6.11-log
-- versão do PHP: 5.4.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `frame1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE IF NOT EXISTS `cadastro` (
  `id_cad` int(5) NOT NULL AUTO_INCREMENT,
  `nome_cad` varchar(50) NOT NULL,
  `telefone_cad` varchar(20) NOT NULL,
  `endereco_cad` varchar(50) NOT NULL,
  `cep_cad` varchar(10) NOT NULL,
  PRIMARY KEY (`id_cad`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id_cad`, `nome_cad`, `telefone_cad`, `endereco_cad`, `cep_cad`) VALUES
(3, 'Elizael Batista Ramos', '67 3231-0989', 'Rua Ciriaco de toledo, 432, Dom Bosco', '79.333-087'),
(4, '  Iklenio da Silva', '67 3231-0989', ' Rua Ciriaco de toledo, 432, Dom Bosco', '78.987-900'),
(5, 'Josuel Arruda ', '67 8766-3422', 'Rua CuiabÃ¡, 989, Centro', '98.456-342'),
(6, 'Rodigo Assad', '67 9897-0087', 'Rua Edu Rocha, 77, Cervejaria', '36.344-087');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
