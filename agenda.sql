-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           10.1.21-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para agenda
CREATE DATABASE IF NOT EXISTS `agenda` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `agenda`;

-- Copiando estrutura para tabela agenda.contacts
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT '0',
  `phone` varchar(14) DEFAULT '0',
  `cel01` varchar(14) DEFAULT '0',
  `cel02` varchar(14) DEFAULT '0',
  `email` varchar(50) DEFAULT '0',
  `obs` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela agenda.contacts: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` (`id`, `name`, `phone`, `cel01`, `cel02`, `email`, `obs`) VALUES
	(8, 'Maria das dores', '(13)9915-0532', '(13)98224-9408', '(13)98180-5044', 'mariadasdores@gmail.com', 'Qualquer coisa ...');
INSERT INTO `contacts` (`id`, `name`, `phone`, `cel01`, `cel02`, `email`, `obs`) VALUES
	(9, 'Eloy Claro Silva e Souza', '(13)9915-0532', '(13)98224-9408', '(13)98180-5044', 'eloy@gmail.com', 'Qualquer observação.');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

-- Copiando estrutura para tabela agenda.phonext
CREATE TABLE IF NOT EXISTS `phonext` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT '0',
  `ramal` varchar(5) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela agenda.phonext: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `phonext` DISABLE KEYS */;
INSERT INTO `phonext` (`id`, `name`, `ramal`) VALUES
	(1, 'Jack - TI ', '24');
INSERT INTO `phonext` (`id`, `name`, `ramal`) VALUES
	(2, 'Eloy', '26');
/*!40000 ALTER TABLE `phonext` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
