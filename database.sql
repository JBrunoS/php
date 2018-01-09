-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 21-Nov-2017 às 12:18
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `cliente_id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(535) NOT NULL,
  `idade` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  PRIMARY KEY (`cliente_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `pedidos_id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(150) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valor` int(11) NOT NULL,
  `produto_id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  PRIMARY KEY (`pedidos_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `produto_id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `valor` float NOT NULL,
  PRIMARY KEY (`produto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`produto_id`, `codigo`, `descricao`, `valor`) VALUES
(1, 120, 'Coca-cola 2L', 6),
(7, 121, 'Arroz 101', 2.39),
(8, 123, 'Fanta laranja 2L', 3.69),
(9, 899, 'PÃ£o CARIOQUINHA', 1.89),
(10, 199, 'Massa para Pizza - Pizzaiolo', 8.99),
(11, 198, 'Carteira de couro c/ zÃ­per', 29.9),
(12, 110, 'MOCHILA BACKPACK - PROVINCE', 199.9),
(14, 111, 'RequeijÃ£o cremoso', 1.95);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
