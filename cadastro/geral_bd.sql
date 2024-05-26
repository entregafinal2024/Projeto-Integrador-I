-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 26-Maio-2024 às 11:26
-- Versão do servidor: 5.6.34
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geral_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `morador`
--

CREATE TABLE `morador` (
  `cod_morador` int(100) NOT NULL,
  `bloco` int(10) NOT NULL,
  `apartamento` int(100) NOT NULL,
  `condomino` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `rg` varchar(100) NOT NULL,
  `data_nascimento` varchar(100) NOT NULL,
  `tel_pessoal` varchar(100) NOT NULL,
  `tel_comercial` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pnome_1` varchar(100) NOT NULL,
  `pnascimento_1` varchar(100) NOT NULL,
  `pparentesco_1` varchar(100) NOT NULL,
  `pnome_2` varchar(100) NOT NULL,
  `pnascimento_2` varchar(100) NOT NULL,
  `pparentesco_2` varchar(100) NOT NULL,
  `pnome_3` varchar(100) NOT NULL,
  `pnascimento_3` varchar(100) NOT NULL,
  `pparentesco_3` varchar(100) NOT NULL,
  `pnome_4` varchar(100) NOT NULL,
  `pnascimento_4` varchar(100) NOT NULL,
  `pparentesco_4` varchar(100) NOT NULL,
  `gas` varchar(10) NOT NULL,
  `bicicleta` varchar(10) NOT NULL,
  `cachorro` varchar(10) NOT NULL,
  `gato` varchar(10) NOT NULL,
  `placa_carro` varchar(10) NOT NULL,
  `modelo_carro` varchar(20) NOT NULL,
  `cor_carro` varchar(20) NOT NULL,
  `placa_moto` varchar(10) NOT NULL,
  `modelo_moto` varchar(20) NOT NULL,
  `cor_moto` varchar(20) NOT NULL,
  `vaga_provisoria` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `morador`
--

INSERT INTO `morador` (`cod_morador`, `bloco`, `apartamento`, `condomino`, `cpf`, `rg`, `data_nascimento`, `tel_pessoal`, `tel_comercial`, `email`, `pnome_1`, `pnascimento_1`, `pparentesco_1`, `pnome_2`, `pnascimento_2`, `pparentesco_2`, `pnome_3`, `pnascimento_3`, `pparentesco_3`, `pnome_4`, `pnascimento_4`, `pparentesco_4`, `gas`, `bicicleta`, `cachorro`, `gato`, `placa_carro`, `modelo_carro`, `cor_carro`, `placa_moto`, `modelo_moto`, `cor_moto`, `vaga_provisoria`) VALUES
(42, 1, 31, 'ALEX FERREIRA DOS SANTOS', '04585265714', '52896475', '01/12/1988', '985682436', '25486954', 'alex@gmail.com', 'PATRICIA', '25/03/1990', 'ESPOSA', 'ARTHUR', '24/10/2015', 'FILHO', '', '', '', '', '', '', 'S', 'N', 'S', 'N', 'ABC2584', 'CORSA', 'PRETO', 'CDX2596', 'CG', 'PRATA', '9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `morador`
--
ALTER TABLE `morador`
  ADD PRIMARY KEY (`cod_morador`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `morador`
--
ALTER TABLE `morador`
  MODIFY `cod_morador` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
