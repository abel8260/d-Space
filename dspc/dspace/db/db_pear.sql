-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 29-Abr-2023 às 19:52
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dpce`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pear`
--

DROP TABLE IF EXISTS `pear`;
CREATE TABLE IF NOT EXISTS `pear` (
  `id_pe` int(11) NOT NULL AUTO_INCREMENT,
  `linkc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `colecttion_pe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scene_pe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_pe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt_pe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `special_pe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cardsrc_pe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_pe`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `pear`
--

INSERT INTO `pear` (`id_pe`, `linkc`, `colecttion_pe`, `scene_pe`, `title_pe`, `alt_pe`, `special_pe`, `cardsrc_pe`) VALUES
(1, '', 'teste', 'industria-c-status', 'normalquarto 153---', 'norte', '', 'https://place-hold.it/250x200/000000/ffffff&text=norte&fontsize=30'),
(2, '', 'teste', 'industria-c-status', 'normalquarto 153---', 'leste', '', 'https://place-hold.it/250x200/000000/ffffff&text=norte&fontsize=30'),
(3, '', 'teste', 'industria-c-status', 'normalquarto 153---', 'sul', '', 'https://place-hold.it/250x200/000000/ffffff&text=norte&fontsize=30'),
(4, '', 'teste', 'industria-c-status', 'normalquarto 153---', 'oeste', '', 'https://place-hold.it/250x200/000000/ffffff&text=norte&fontsize=30');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
